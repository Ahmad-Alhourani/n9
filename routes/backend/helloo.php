<?php

/**
 * Helloo Management
 * All route names are prefixed with 'admin.helloo'.
 */
Route::group(
    [
        'namespace' => 'Helloo',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Helloo CRUD
         */
        Route::resource('helloo', 'HellooController');
    }
);
