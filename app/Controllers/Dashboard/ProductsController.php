<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class ProductsController extends BaseController {
	public function index(): string {
        $data['title'] = 'QLSP';
        return view('dashboard/products', $data);
    }
	public function createView(): string {
        $data['title'] = 'Thêm sản phẩm';
		return view('dashboard/create_product', $data);
    }
}