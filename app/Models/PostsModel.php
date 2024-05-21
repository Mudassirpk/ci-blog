<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = "posts";

    protected $allowedFields = ['title', 'description', 'author_id'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getPosts(): array
    {
        return $this->select('posts.*, users.username as author')->join('users', 'users.id=posts.author_id')->findAll();
    }
}