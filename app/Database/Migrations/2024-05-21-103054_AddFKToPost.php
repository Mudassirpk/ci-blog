<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFKToPost extends Migration
{
    public function up(): void
    {
        $this->forge->addColumn('posts', [
            'author_id' => [
                'type' => "INT",
                'unsigned' => true,
                'after' => 'id'
            ]
        ]);

        $this->forge->addForeignKey('author_id', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down():void
    {
        // Remove the foreign key constraint first
        $this->forge->dropForeignKey('posts', 'posts_author_id_foreign');

        // Then drop the column
        $this->forge->dropColumn('posts', 'author_id');
    }
}
