<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Dashboard', route('home'));
});

// Accueil > Administrateurs
Breadcrumbs::for('admin', function ($trail) {
    $trail->parent('home');
    $trail->push('Administrateurs', route('admin.users.index'));
});
Breadcrumbs::for('addAdmin', function ($trail) {
    $trail->parent('admin');
    $trail->push('Ajouter un administrateur', route('admin.users.create'));
});
Breadcrumbs::for('editAdmin', function ($trail, $user) {
    $trail->parent('admin');
    $trail->push('Modifier un administrateur', route('admin.users.edit', $user));
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
Breadcrumbs::for('Bookings', function ($trail) {
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

// Accueil > Galleries
Breadcrumbs::for('Galleries', function ($trail) {
    $trail->parent('home');
    $trail->push('Gestion de la galerie', route('galleries.index'));
});
Breadcrumbs::for('createGallerie', function ($trail) {
    $trail->parent('Galleries');
    $trail->push('Ajouter un nouveau media', route('galleries.index'));
});
Breadcrumbs::for('editGallerie', function ($trail, $slider) {
    $trail->parent('Galleries', $slider);
    $trail->push('Modifier un media', route('galleries.index'));
});

// Accueil > Housings
Breadcrumbs::for('Housings', function ($trail) {
    $trail->parent('home');
    $trail->push('Gestion de l\'hébergement', route('housings.index'));
});
Breadcrumbs::for('createHousing', function ($trail) {
    $trail->parent('Housings');
    $trail->push('Ajouter un nouveau media', route('housings.index'));
});
Breadcrumbs::for('editHousing', function ($trail, $slider) {
    $trail->parent('Housings', $slider);
    $trail->push('Modifier un media', route('housings.index'));
});
