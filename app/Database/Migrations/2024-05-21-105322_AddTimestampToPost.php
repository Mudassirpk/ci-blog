<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampToPost extends Migration
{
    public function up(): void
    {
        $fields = [
            'created_at' => [
                'type' => 'datetime', 'null' => true
            ],
            'updated_at' => [
                'type' => 'datetime', 'null' => true
            ]
        ];

        $this->forge->addColumn('posts', $fields);
    }

    public function down(): void
    {
        $this->forge->dropColumn('posts', 'created_at');
        $this->forge->dropColumn('posts', 'updated_at');
    }
}
