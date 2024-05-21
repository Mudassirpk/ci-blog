<?php

namespace App\Controllers;

use App\Models\PostsModel;

class CreatePost extends BaseController
{
    public function index(string $page = 'Create Post'): string
    {
        $data['title'] = $page;
        return view('templates/header', $data) .
            view('pages/createpost') .
            view("templates/footer");
    }

    public function create(): string
    {
        $data = [];
        $data['title'] = 'Create Post';
        if ($this->request->getMethod() == "POST") {
            $new_post = new PostsModel();
            $_POST['author_id'] = session()->get('id');
            $new_post->save($_POST);
            $data['newpost'] = $_POST;
        }


        return view('templates/header', $data) .
            view('pages/createpost', $data) . view('templates/footer');
    }
}

