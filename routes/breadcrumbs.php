<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(trans('navbar.Home'), route('admin.dashboard.index'));
});

// Home > instructors
Breadcrumbs::for('instructors', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(trans('navbar.instructors.list'), route('admin.instructors.index'));
});

Breadcrumbs::for('add-instructors', function (BreadcrumbTrail $trail) {
    $trail->parent('instructors');
    $trail->push(trans('navbar.instructors.add'), route('admin.instructors.create'));
});
Breadcrumbs::for('update-instructors', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('instructors');
    $trail->push($row->name, route('admin.instructors.edit', $row));
});

// Home > tracks
Breadcrumbs::for('tracks', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(trans('navbar.courses.list_tracks'), route('admin.tracks.index'));
});

Breadcrumbs::for('add-tracks', function (BreadcrumbTrail $trail) {
    $trail->parent('tracks');
    $trail->push(trans('navbar.courses.add_track'), route('admin.tracks.create'));
});
Breadcrumbs::for('update-tracks', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('tracks');
    $trail->push($row->name, route('admin.tracks.edit', $row));
});


// Home > users
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(trans('navbar.users.list'), route('admin.users.index'));
});

Breadcrumbs::for('add-users', function (BreadcrumbTrail $trail) {
    $trail->parent('users');
    $trail->push(trans('navbar.users.add'), route('admin.users.create'));
});
Breadcrumbs::for('update-users', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('users');
    $trail->push($row->name, route('admin.users.edit', $row));
});

Breadcrumbs::for('show-users', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('users');
    $trail->push($row->name, route('admin.users.show', $row));
});



// Home > roles
Breadcrumbs::for('roles', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(trans('navbar.roles.list'), route('admin.roles.index'));
});

Breadcrumbs::for('add-roles', function (BreadcrumbTrail $trail) {
    $trail->parent('roles');
    $trail->push(trans('navbar.roles.add'), route('admin.roles.create'));
});
Breadcrumbs::for('update-roles', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('roles');
    $trail->push($row->name, route('admin.roles.edit', $row));
});

Breadcrumbs::for('show-roles', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('roles');
    $trail->push($row->name, route('admin.roles.show', $row));
});


// Home > Courses
Breadcrumbs::for('courses', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(trans('navbar.courses.list_courses'), route('admin.courses.index'));
});

Breadcrumbs::for('add-courses', function (BreadcrumbTrail $trail) {
    $trail->parent('courses');
    $trail->push(trans('navbar.courses.add_course'), route('admin.courses.create'));
});
Breadcrumbs::for('update-courses', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('courses');
    $trail->push($row->name, route('admin.courses.edit', $row));
});
Breadcrumbs::for('show-courses', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('courses');
    $trail->push($row->name, route('admin.courses.edit', $row));
});


// Home > Course details  > Levels
 Breadcrumbs::for('levels', function (BreadcrumbTrail $trail,$course) {
    $trail->parent('show-courses');
    $trail->push(trans('navbar.courses.list_levels'), route('admin.courses.levels.index',$course));
});

Breadcrumbs::for('add-levels', function (BreadcrumbTrail $trail) {
    $trail->parent('show-courses');
    $trail->push(trans('navbar.courses.add_level'), route('admin.courses.levels.create'));
});
Breadcrumbs::for('update-levels', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('show-courses');
    $trail->push($row->name, route('admin.courses.levels.edit', $row));
});
Breadcrumbs::for('show-levels', function (BreadcrumbTrail $trail,$row) {
    $trail->parent('show-courses');
    $trail->push($row->name, route('admin.courses.levels.edit', $row));
});

