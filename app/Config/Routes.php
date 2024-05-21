<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// create routes
$routes->get('/create', 'CreatePost::index');
$routes->post('create', 'CreatePost::create');

// auth routes
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/logout', 'Login::logout');
$routes->get('/signup', 'Signup::index');
$routes->post('/signup', 'Signup::signup');