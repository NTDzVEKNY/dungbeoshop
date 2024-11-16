<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class HomeDashboard extends BaseController {
	public function index(): string {
        $data['title'] = 'Trang chủ';
        return view('dashboard/home', $data);
    }
}