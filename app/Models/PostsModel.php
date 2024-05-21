<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = "posts";

    protected $allowedFields = ['title', 'description'];

    public function getPosts(): array
    {
        return $this->findAll();
    }
}