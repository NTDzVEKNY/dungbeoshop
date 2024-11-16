<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LoginController extends BaseController {
	public function loginView(): string
	{
		return view('login');
	}
}