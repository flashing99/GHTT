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


// Accueil > Sliders
Breadcrumbs::for('Sliders', function ($trail) {
    $trail->parent('home');
    $trail->push('Gestion des sliders', route('sliders.index'));
});
Breadcrumbs::for('createSlider', function ($trail) {
    $trail->parent('Sliders');
    $trail->push('Ajouter un nouveau slide', route('sliders.index'));
});
Breadcrumbs::for('editSlider', function ($trail, $slider) {
    $trail->parent('Sliders', $slider);
    $trail->push('Modifier un slide', route('sliders.index'));
});

// Accueil > Events
Breadcrumbs::for('Events', function ($trail) {
    $trail->parent('home');
    $trail->push('Gestion des évènements', route('events.index'));
});
Breadcrumbs::for('createEvent', function ($trail) {
    $trail->parent('Events');
    $trail->push('Ajouter un nouveau évènement', route('events.index'));
});
Breadcrumbs::for('editEvent', function ($trail, $slider) {
    $trail->parent('Events', $slider);
    $trail->push('Modifier un évènement', route('events.index'));
});