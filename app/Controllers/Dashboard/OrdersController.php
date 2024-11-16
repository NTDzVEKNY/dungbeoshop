<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class OrdersController extends BaseController {
	public function index(): string {
        $data['title'] = 'Quản lý đơn hàng';
        return view('dashboard/orders', $data);
    }
}