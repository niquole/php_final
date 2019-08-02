<?php
$router->get('', 'PagesController@index');
$router->get('home', 'PagesController@home');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');
$router->get('signUp', 'PagesController@signUp');


$router->get('api/tasks', 'TasksController@apiGet');

//$router->post('contact/submit', 'controllers/contact-submit.php');

$router->post('tasks/submit', 'TasksController@store');

$router->get('admin/tasks', 'AdminTasksController@index');
$router->get('admin/tasks/delete', 'AdminTasksController@delete');





