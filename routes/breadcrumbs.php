
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
Breadcrumbs::for('secretaria.secretaria.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Secretaría', route('secretaria.secretaria.index'));
});

// Secretaria->docentes
Breadcrumbs::for('secretaria.docentes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('secretaria.secretaria.index');
    $trail->push('Docentes', route('secretaria.docentes.index'));
});

// Secretaria->estudiantes
Breadcrumbs::for('secretaria.estudiantes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('secretaria.secretaria.index');
    $trail->push('Estudiantes', route('secretaria.estudiantes.index'));
});
// Secretaria -> Ver curso -> Ver expediente
Breadcrumbs::for('secretaria.estudiantes.show', function (BreadcrumbTrail $trail, Estudiante $estudiante) {
    $trail->parent('secretaria.estudiantes.index');
    $trail->push('Ver expediente', route('secretaria.estudiantes.show', ['estudiante' => $estudiante]));
});

// Secretaria->Crear curso
Breadcrumbs::for('secretaria.cursos.create', function (BreadcrumbTrail $trail) {
    $trail->parent('secretaria.secretaria.index');
    $trail->push('Crear curso', route('secretaria.cursos.create'));
});

// Secretaria -> Ver curso
Breadcrumbs::for('secretaria.cursos.show', function (BreadcrumbTrail $trail, Curso $curso) {
    $trail->parent('secretaria.secretaria.index');
    $trail->push('Ver curso', route('secretaria.cursos.show', ['curso' => $curso]));
});
