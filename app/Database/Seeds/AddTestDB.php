<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddTestDB extends Seeder
{
    public function run()
    {
		$this->db->table('categories')->insert([
			'name' => 'Điện Thoại',
			'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('categories')->insert([
			'name' => 'Tablet',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('categories')->insert([
			'name' => 'Laptop',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('categories')->insert([
			'name' => 'Tivi',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('categories')->insert([
			'name' => 'PC',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('categories')->insert([
			'name' => 'Đồng Hồ',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('categories')->insert([
            'name' => 'Camera',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
		$this->db->table('categories')->insert([
            'name' =>'Âm thanh',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

		//----------------------------------------------------------------
		$this->db->table('products')->insert([
			'categories_id' => '3',
			'name' => 'Laptop Asus X545',
            'description' => 'Laptop Asus X545 15.6 inch Core i5-1035G1, RAM 8GB, SSD 512GB, HDD 1TB, NVIDIA GeForce GTX 1650, 4GB',
            'price' => '19990000',
			'stock' => '50',
			'image' => 'product-1.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '7',
			'name' => 'Camera Canon EOS 5D Mark IV',
			'description' => 'Camera Canon EOS 5D Mark IV 24.1MP, 18-55mm f/3.5-5.6, 1/30s, 1/125s, ISO 100-6400, 1200fps, 1.8x telephoto, 1/2.35mm, 1.024mm sensor',
			'price' => '15990000',
            'stock' => '30',
            'image' => 'product-2.jpg',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '8',
			'name' => 'Tai nghe Sony MDR-XB750',
            'description' => 'Tai nghe Sony MDR-XB750 2.1mm, 20W, 24bit, 48khz, Bluetooth, 5.1ch',
            'price' => '399000',
            'stock' => '20',
		    'image' => 'product-3.jpg',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
		]);
        $this->db->table('products')->insert([
			'categories_id' =>'6',
		    'name' => 'Đồng hồ Apple Watch Series 6',
            'description' => 'Đồng hồ Apple Watch Series 6 42mm, 4G, GPS, Heart Rate, NFC, 384GB, 48h battery, 4096mAh',
            'price' => '2999000',
            'stock' => '15',
		    'image' => 'product-4.jpg',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

		//----------------------------------------------------------------

    }
}
