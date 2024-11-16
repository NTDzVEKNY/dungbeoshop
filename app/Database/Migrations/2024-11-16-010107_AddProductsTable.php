<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id' => [
				'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
			],
			'categories_id' => [
				'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
			],
			'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'price' => [
				'type' => 'INT',
                'constraint' => '11',
			],
			'stock' => [
				'type' => 'INT',
                'constraint' => '11',
			],
			'image' => [
				'type' => 'VARCHAR',
                'constraint' => 255,
				'null' => true,
				'default' => 'bitcoin10.png'
			],
			'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
				'type' => 'DATETIME',
                'null' => true,
            ],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('categories_id', 'categories', 'id');
		$this->forge->createTable('products');
    }

    public function down()
    {
        //
    }
}
