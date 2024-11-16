<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddOrderDB extends Seeder
{
    public function run()
    {
		$this->db->table('products')->insert([
			'categories_id' => '1',
			'name' => 'New Stylish smart phone 4/64GB',
			'description' => 'a',
			'price' => '344000',
			'stock' => '10',
			'image' => 'rev-17-pro-1.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '8',
			'name' => 'Tai nghe Sony MDR-XB750',
			'description' => 'Tai nghe Sony MDR-XB750 2.1mm, 20W, 24bit, 48khz, Bluetooth, 5.1ch',
			'price' => '123123',
			'stock' => '20',
			'image' => 'rev-9-product-4.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '1',
			'name' => 'New English smart phone',
			'description' => 'a',
			'price' => '344000',
			'stock' => '10',
			'image' => 'rev-9-product-8.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '8',
			'name' => 'Loa IBM',
			'description' => ' 2.1mm, 20W, 24bit, 48khz, Bluetooth, 5.1ch',
			'price' => '123123',
			'stock' => '20',
			'image' => 'rev-9-product-7.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '4',
			'name' => 'TV LG X545',
			'description' => 'bb',
			'price' => '19990000',
			'stock' => '50',
			'image' => 'technology_item-1.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '8',
			'name' => 'Tai nghe Sony MDR-XB750',
			'description' => 'Tai nghe Sony MDR-XB750 2.1mm, 20W, 24bit, 48khz, Bluetooth, 5.1ch',
			'price' => '123123',
			'stock' => '20',
			'image' => 'rev-17-pro-2.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' =>'6',
			'name' => 'Đồng hồ Apple Watch Series 6',
			'description' => 'Đồng hồ Apple Watch Series 6 42mm, 4G, GPS, Heart Rate, NFC, 384GB, 48h battery, 4096mAh',
			'price' => '2999000',
			'stock' => '15',
			'image' => 'rev-17-pro-3.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '7',
			'name' => 'Camera Canon EOS 5D Mark IV',
			'description' => 'Camera Canon EOS 5D Mark IV 24.1MP, 18-55mm f/3.5-5.6, 1/30s, 1/125s, ISO 100-6400, 1200fps, 1.8x telephoto, 1/2.35mm, 1.024mm sensor',
			'price' => '15990000',
			'stock' => '30',
			'image' => 'rev-17-pro-4.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '3',
			'name' => 'Laptop Asus X545',
			'description' => 'Laptop Asus X545 15.6 inch Core i5-1035G1, RAM 8GB, SSD 512GB, HDD 1TB, NVIDIA GeForce GTX 1650, 4GB',
			'price' => '19990000',
			'stock' => '50',
			'image' => 'rev-9-product-1.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
		$this->db->table('products')->insert([
			'categories_id' => '4',
			'name' => 'TV Sony X545',
			'description' => 'bb',
			'price' => '19990000',
			'stock' => '50',
			'image' => 'technology_item-1.jpg',
			'created_at' => date('Y-m-d H:i:s', time()),
			'updated_at' => date('Y-m-d H:i:s', time()),
		]);
    }
}
