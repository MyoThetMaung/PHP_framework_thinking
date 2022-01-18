<?php
use core\App;
    // Laravel 7 writing
    // $router->get('','PagesController@index');
    // $router->get('contact','PagesController@contact');
    // $router->get('about','PagesController@about');
    // $router->get('names','PagesController@names');
    // $router->post('names','PagesController@names');

    //Laravel 8 style writing

    $router->get('', [PagesController::class,'index'] );
    $router->get('about', [PagesController::class, 'about']);
    $router->get('contact', [PagesController::class, 'contact']);
    $router->get('names', [PagesController::class, 'names']);
    $router->post('names', [PagesController::class, 'names']);

