<?php 
// Rotas admin
$app->get('/admin', 'App\Action\Admin\HomeAction:index');

$app->get('/admin/login', 'App\Action\Admin\HomeAction:login');

// Rotas do site
$app->get('/', 'App\Action\HomeAction:index');

$app->get('/noticias/', 'App\Action\HomeAction:noticias');

$app->get('/sobre/', 'App\Action\HomeAction:sobre');

 ?>