<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Home extends BaseController
{
    public function index(string $page = 'Home'): string
    {
        $post_model = model(PostsModel::class);
        $data['title'] = $page;
        $data['posts'] = $post_model->getPosts();
        return view('templates/header', $data) .
            view('home') .
            view("templates/footer");
    }
}
