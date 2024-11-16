<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCartItemsTable extends Migration
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
			'cart_id' => [
				'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
			],
			'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
			'quantity' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'price' => [
				'type'=>'INT',
				'constraint' => 11,
            ],
			'total' => [
				'type'=>'INT',
                'constraint' => 11,
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
		$this->forge->addForeignKey('cart_id', 'carts', 'id', 'CASCADE','CASCADE');
		$this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE','CASCADE');
		$this->forge->createTable('cart_items');
    }

    public function down()
    {
        //
    }
}
