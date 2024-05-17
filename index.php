<?php

require_once __DIR__ . '/router.php';

get('/', 'home.php');
get('/gallery/$opo', 'gallery.php');
get('/about', 'about.php');
get('/contact', 'contact.php');
get('/services', 'services.php');