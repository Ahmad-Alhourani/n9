<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Helloo_start
Breadcrumbs::register('admin.helloo.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.helloos.title'),
        route('admin.helloo.index')
    );
});

Breadcrumbs::register('admin.helloo.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.helloo.index');
    $breadcrumbs->push(
        __('labels.backend.helloos.create'),
        route('admin.helloo.create')
    );
});

Breadcrumbs::register('admin.helloo.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.helloo.index');
    $breadcrumbs->push(
        __('menus.backend.helloos.view'),
        route('admin.helloo.show', $id)
    );
});

Breadcrumbs::register('admin.helloo.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.helloo.index');
    $breadcrumbs->push(
        __('menus.backend.helloos.edit'),
        route('admin.helloo.edit', $id)
    );
});
//end_Helloo_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
