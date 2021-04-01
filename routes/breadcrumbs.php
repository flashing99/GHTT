<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Dashboard', route('home'));
});

// Accueil > Administrateurs
Breadcrumbs::for('admin', function ($trail) {
    $trail->parent('home');
    $trail->push('Utilisateurs', route('admin.users.index'));
});
Breadcrumbs::for('addAdmin', function ($trail) {
    $trail->parent('admin');
    $trail->push('Ajouter un utilisateur', route('admin.users.create'));
});
Breadcrumbs::for('editAdmin', function ($trail, $user) {
    $trail->parent('admin');
    $trail->push('Modifier un utilisateur', route('admin.users.edit', $user));
});
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('home');
    $trail->push('Modifier mon profile', url('/profile'));
});
Breadcrumbs::for('changePassword', function ($trail) {
    $trail->parent('home');
    $trail->push('Changer le mot de passe', route('change.password'));
});


// Accueil > Bookings
Breadcrumbs::for('bookings', function ($trail) {
    $trail->parent('home');
    $trail->push('Bookings', route('bookings.index'));
});