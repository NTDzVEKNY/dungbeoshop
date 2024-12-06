<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddOrdersTable extends Migration
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
			'client_id' => [
				'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
			],
			'status' => [
				'type'           => 'VARCHAR',
                'constraint'     => 255,
			],
			'total' => [
				'type'           => 'INT',
                'constraint'     => '11',
			],
			'shipping_address' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
            ],
			'note' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
            ],
			'created_at' => [
                'type'           => 'DATETIME',
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
				'null' => true,
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('client_id', 'clients', 'id', 'CASCADE','CASCADE');
		$this->forge->createTable('orders');
    }

    public function down()
    {
        //
    }
}
