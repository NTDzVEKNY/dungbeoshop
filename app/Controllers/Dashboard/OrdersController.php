<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\OrdersModel;

class OrdersController extends BaseController {
	public function index(): string {
		$model = new OrdersModel();

        $data = [
			'title'=>'Quản lý đơn hàng',
			'orders' => $model->getAllOrders(),
		];
        return view('dashboard/orders', $data);
    }
}