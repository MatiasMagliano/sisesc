<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

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

        // ROL DE ADMINISTRADOR - utiliza un GATE definido en AuthServiceProvider
        $rol_admin = Role::create(['name' => 'admin']);
        $usuario = User::create([
            'dni'                   => '29714640',
            'nombres'               => 'Matías José',
            'apellidos'             => 'Magliano',
            'fecha_nacimiento'      => '1982-28-10',
            'genero_id'             => 1,
            'email'                 => 'matias.magliano@mi.unc.edu.ar',
            'email_verified_at'     => now(),
            'password'              => Hash::make('bxXAX4z8D3kZ62i'),
            'remember_token'        => Str::random(10),
        ]);
        $usuario->assignRole($rol_admin);


        // ROL DE PRECEPTOR
        Permission::create(['name' => 'menu-preceptor']);
        $rol_preceptor = Role::create(['name' => 'preceptor']);
        $rol_preceptor->givePermissionTo('menu-preceptor');
        // se crean usuarios y roles a los que se le asignan permisos existentes
        $usuario2 = User::create([
            'dni'                   => '23558449',
            'nombres'               => 'Mabel Laura',
            'apellidos'             => 'Cortez',
            'fecha_nacimiento'      => '1972-4-2',
            'genero_id'             => 2,
            'email'                 => 'mabel.cortez@example.com',
            'email_verified_at'     => now(),
            'password'              => Hash::make('TkH2DUBvCY4rFm5'),
            'remember_token'        => Str::random(10),
        ]);
        $usuario2->assignRole($rol_preceptor);


        // ROL DE SECRETARIO
        Permission::create(['name' => 'menu-secretario']);
        $rol_secretario = Role::create(['name' => 'secretario']);
        $rol_secretario->givePermissionTo('menu-secretario');

        // se crean usuarios y roles a los que se le asignan permisos existentes
        $usuario3 = User::create([
            'dni'                   => '29946287',
            'nombres'               => 'Martín Eduardo',
            'apellidos'             => 'Hoffman',
            'fecha_nacimiento'      => '1982-4-11',
            'genero_id'             => 1,
            'email'                 => 'martin.hoffman@example.com',
            'email_verified_at'     => now(),
            'password'              => Hash::make('M6hGSN8pDwcGRxJ'),
            'remember_token'        => Str::random(10),
        ]);
        $usuario3->assignRole($rol_secretario);

        
    }
}
