
<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
});

// Secretaria
Breadcrumbs::for('secretaria', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Secretaría', route('secretaria.secretaria.index'));
});

// Secretaria->docentes
Breadcrumbs::for('docentes', function (BreadcrumbTrail $trail) {
    $trail->parent('secretaria');
    $trail->push('Docentes', route('secretaria.docentes.index'));
});

// Secretaria->Crear curso
Breadcrumbs::for('crear-curso', function (BreadcrumbTrail $trail) {
    $trail->parent('secretaria');
    $trail->push('Crear curso', route('secretaria.cursos.create'));
});
// Secretaria->Ver curso
Breadcrumbs::for('ver-curso', function (BreadcrumbTrail $trail, $curso) {
    $trail->parent('secretaria');
    $trail->push('Ver curso', route('secretaria.cursos.show', $curso));
});
