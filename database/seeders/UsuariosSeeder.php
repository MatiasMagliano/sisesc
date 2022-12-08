<?php

namespace Database\Seeders;

use App\Models\Contacto;
use App\Models\Curso;
use App\Models\Familia;
use App\Models\FamiliaMiembro;
use App\Models\Matricula;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Faker\Factory as Faker;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $this->faker = Faker::create('es_ES');

        // ROL DE ADMINISTRADOR - utiliza un GATE definido en AuthServiceProvider
        $rol_admin = Role::create(['name' => 'admin']);
        $usuario = User::create([
            'dni'                   => '29714640',
            'username'              => 'matias.magliano@mi.unc.edu.ar',
            'nombres'               => 'Matías José',
            'apellidos'             => 'Magliano',
            'fecha_nacimiento'      => '1982-28-10',
            'genero_id'             => 1,
            'password'              => Hash::make('bxXAX4z8D3kZ62i'),
            'email_verified_at'     => now(),
            'remember_token'        => Str::random(10),
        ]);

        Contacto::factory()->create([
            'user_id'    => $usuario->id,
        ]);

        $usuario->assignRole($rol_admin);


        // ROL DE PRECEPTOR
        Permission::create(['name' => 'menu-preceptor']);
        $rol_preceptor = Role::create(['name' => 'preceptor']);
        $rol_preceptor->givePermissionTo('menu-preceptor');

        // se crean usuarios y roles a los que se le asignan permisos existentes
        $usuario2 = User::create([
            'dni'                   => '23558449',
            'username'              => 'mabel.cortez@example.com',
            'nombres'               => 'Mabel Laura',
            'apellidos'             => 'Cortez',
            'fecha_nacimiento'      => '1972-4-2',
            'genero_id'             => 2,
            'password'              => Hash::make('TkH2DUBvCY4rFm5'),
            'email_verified_at'     => now(),
            'remember_token'        => Str::random(10),
        ]);

        Contacto::factory()->create([
            'user_id'    => $usuario->id,
        ]);

        $usuario2->assignRole($rol_preceptor);


        // ROL DE SECRETARIO
        Permission::create(['name' => 'menu-secretario']);
        $rol_secretario = Role::create(['name' => 'secretario']);
        $rol_secretario->givePermissionTo('menu-secretario');

        // se crean usuarios y roles a los que se le asignan permisos existentes
        $usuario3 = User::create([
            'dni'                   => '29946287',
            'username'              => 'martin.hoffman@example.com',
            'nombres'               => 'Martín Eduardo',
            'apellidos'             => 'Hoffman',
            'fecha_nacimiento'      => '1982-4-11',
            'genero_id'             => 1,
            'password'              => Hash::make('M6hGSN8pDwcGRxJ'),
            'email_verified_at'     => now(),
            'remember_token'        => Str::random(10),
        ]);

        Contacto::factory()->create([
            'user_id'    => $usuario->id,
        ]);

        $usuario3->assignRole($rol_secretario);

        // USUARIO ESTUDIANTE
        Permission::create(['name' => 'menu-estudiante']);
        $rol_estudiante = Role::create(['name' => 'estudiante']);
        $rol_estudiante->givePermissionTo('menu-estudiante');
        Permission::create(['name' => 'menu-padre']);
        $rol_padre = Role::create(['name' => 'padre']);
        $rol_padre->givePermissionTo('menu-padre');

        // CREAR ESTUDIANTES EN MASA
        foreach(Curso::all() as $curso)
        {
            $estudiantes_curso = rand(20, 35);
            for ($i = 0; $i < $estudiantes_curso; $i++) {
                // SE CREA UN ESTUDIANTE y sus PADRES
                $estudiante = User::factory()->create([
                    'fecha_nacimiento'  => $this->faker->dateTimeBetween('-'. 12+$curso->curso .' years', '-'. 10+$curso->curso .' years')
                ]);

                // SE LE ASIGNA UN ROL
                $estudiante->assignRole($rol_estudiante);

                // RELACIÓN POLIMÓRFICA DE CONTACTO
                Contacto::factory()->create([
                    'user_id'    => $estudiante->id,
                ]);

                $padres = rand(1, 2);
                for ($k = 0; $k < $padres; $k++) {
                    $padre = User::factory()->create();
                    $padre->assignRole($rol_padre);

                    Contacto::factory()->create([
                        'user_id'    => $padre->id,
                    ]);

                    if ($k == 0) {
                        $familia = Familia::factory()->create(['jefe_id' => $padre->id]);
                    }

                    FamiliaMiembro::create([
                        'padre_id' => $padre->id,
                        'familia_id' => $familia->id,
                        'estudiante_id' => $estudiante->id,
                    ]);
                }

                Matricula::create([
                    'curso_id'      => $curso->id,
                    'estudiante_id' => $estudiante->id,
                ]);
            }
        }
    }
}
