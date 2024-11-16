<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddOrderItemsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
			],
			'order_id' => [
				'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
			],
			'product_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
			'quantity' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
			'total' => [
				'type' => 'INT',
				'constraint' => 11,
                'unsigned' => true,
                'null' => false,
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
		$this->forge->addForeignKey('order_id', 'orders', 'id', 'CASCADE','CASCADE');
		$this->forge->addForeignKey('product_id', 'products', 'id','CASCADE', 'CASCADE');
		$this->forge->createTable('order_items');
    }

    public function down()
    {
        //
    }
}
