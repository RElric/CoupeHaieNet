<?php

    $route['actualites'] = 'news';
    $route['actualites/(:any)'] = 'news/index/$1';
    $route['realisations'] = 'galery';
    $route['nous-contacter'] = 'contact';
    $route['ou-nous-trouver'] = 'where';
    $route['qui-sommes-nous'] = 'who';
    $route['livre-d-or'] = 'gold';
    $route['accueil'] = 'home';
    $route['default_controller'] = 'home';
