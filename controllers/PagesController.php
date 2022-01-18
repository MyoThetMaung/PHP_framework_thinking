<?php

    class PagesController
    {
        public function index()
        {
            $tasks = App::get('database')->selectAll('tasks');

            view('index', [
                'tasks' => $tasks
            ]);
        }

        public function about()
        {
            view('about');
        }

        public function contact()
        {
            view('contact');
        }

        public function names()
        {
           App::get('database')->insert([
               'name' => request('name')
           ],'users');

        }
    }