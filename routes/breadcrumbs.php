
<?php

use App\Models\Curso;
use App\Models\Estudiante;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
});

// Secretaria
Breadcrumbs::for('secretaria.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Secretaría', route('secretaria.index'));
});

// Secretaria->docentes
Breadcrumbs::for('docentes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('secretaria.index');
    $trail->push('Docentes', route('docentes.index'));
});

// Secretaria->estudiantes
Breadcrumbs::for('estudiantes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('secretaria.index');
    $trail->push('Estudiantes', route('estudiantes.index'));
});
// Secretaria -> Ver curso -> Ver expediente
Breadcrumbs::for('estudiantes.show', function (BreadcrumbTrail $trail, Estudiante $estudiante) {
    $trail->parent('estudiantes.index');
    $trail->push('Ver expediente', route('estudiantes.show', ['estudiante' => $estudiante]));
});

// Secretaria->Crear curso
Breadcrumbs::for('cursos.create', function (BreadcrumbTrail $trail) {
    $trail->parent('secretaria.index');
    $trail->push('Crear curso', route('cursos.create'));
});

// Secretaria -> Ver curso
Breadcrumbs::for('cursos.show', function (BreadcrumbTrail $trail, Curso $curso) {
    $trail->parent('secretaria.index');
    $trail->push('Ver curso', route('cursos.show', ['curso' => $curso]));
});

// PROCEPTORIA -> tomar asistencia

Breadcrumbs::for('preceptoria.asistencia', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Tomar asistencia', route('preceptoria.asistencia'));
});
