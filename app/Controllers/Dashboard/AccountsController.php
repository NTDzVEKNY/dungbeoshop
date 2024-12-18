<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 06-Dec-24
 */

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\I18n\Time;
use CodeIgniter\Shield\Entities\User;

class AccountsController extends BaseController {
	public function index()
	{
		$users = auth()->getProvider()->findAll();
		$data = [
			'title' => "Quản lý tài khoản",
			'users' => $users,
		];
		return view('dashboard/accounts', $data);
	}

	public function action(): RedirectResponse
	{
		$users = auth()->getProvider();
		if ($this->request->getMethod() === 'POST')
		{
			$delete_id = $this->request->getPost('delete_id');
			if ($delete_id)
			{
				$users->delete($delete_id, TRUE);
				$this->session->setFlashdata('success', 'Người dùng đã được xóa thành công!');
				return redirect()->to('/dashboard/accounts');
			}
			$block_id = $this->request->getPost('block_id');
			if ($block_id) {
				$blockUser = $users->findById($block_id);
				$blockUser->deactivate();
			}
			$unblock_id = $this->request->getPost('unblock_id');
			if ($unblock_id) {
				$unblockUser = $users->findById($unblock_id);
				$unblockUser->activate();
			}
		}
		return redirect()->to('/dashboard/accounts');
	}

	public function createView(): string
	{
		$data = [
			'title' => 'Thêm tài khoản',
		];
		return view('dashboard/create_account', $data);
	}

	/**
	 * @throws \ReflectionException
	 */
	public function create(): RedirectResponse
	{
		if ($this->request->getMethod() === 'POST')
		{
			$users = auth()->getProvider();
			$data = [
				'group' => $this->request->getPost('group'),
				'new_password' => $this->request->getPost('new_password'),
				'confirm_password' => $this->request->getPost('confirm_password')
			];

			if ($data['new_password'] !== $data['confirm_password'])
			{
				session()->setFlashdata('error', 'Xác nhận mật khẩu không khớp');

				return redirect()->to('/dashboard/create_account');
			}
			$user = new User([
				'username' => $this->request->getPost('name'),
				'email' => $this->request->getPost('email'),
				'password' => $data['new_password'],
			]);

			if ( ! $users->save($user))
			{
				session()->setFlashdata('error', 'Mật khẩu không hợp lệ!\n Có ít nhất: 1 ký tự in hoa, 1 số, 1 in thường;Độ dài tối thiểu 8');
				return redirect()->to('/dashboard/create_account');
			}

			// To get the complete user object with ID, we need to get from the database
			$user = $users->findById($users->getInsertID());

			if ($data['group'] == 2) $user->addGroup('admin');
			else $users->addToDefaultGroup($user);

			$this->session->setFlashdata('success', 'Tài khoản đã được thêm thành công!');
			return redirect()->to('/dashboard/accounts');

		}
		return redirect()->to('/dashboard/create_account');
	}

	public function editView(int $id): string {
		$user = auth()->getProvider()->findById($id);
		$data = [
			'title' => 'Sửa tài khoản',
			'user' => $user,
		];
		return view('dashboard/edit_account', $data);
	}

	/**
	 * @throws \ReflectionException
	 */
	public function edit(int $id): RedirectResponse
	{
		if ($this->request->getMethod() === 'POST') {
			$users = auth()->getProvider();

			$user = $users->findById($id);
			$user->fill([
				'username' => $this->request->getPost('name'),
				'email' => $this->request->getPost('email'),
			]);

			if(!$users->save($user)) {
				$this->session->setFlashdata('error', 'Có loi xảy ra khi sửa tài khoản!');
				return redirect()->to('/dashboard/edit_account/'.$id);
			}
			$this->session->setFlashdata('success', 'Tài khoản đã được sửa thành công!');
			return redirect()->to('/dashboard/accounts');

		}
		return redirect()->to('/dashboard/edit_account/'.$id);
	}
	public function changePasswordView(int $id): string {
		$user = auth()->getProvider()->findById($id);
		$data = [
			'title' => 'Đổi mật khẩu',
			'user' => $user,
		];
		return view('dashboard/change_password', $data);
	}

	public function changePassword(int $id): RedirectResponse
	{
		if ($this->request->getMethod() === 'POST') {
			$users = auth()->getProvider();
			$user = $users->findById($id);

			$data = [
                'new_password' => $this->request->getPost('new_password'),
                'confirm_password' => $this->request->getPost('confirm_password'),
			];

			if ($data['new_password'] !== $data['confirm_password'])
			{
				session()->setFlashdata('error', 'Xác nhận mật khẩu không khớp');

				return redirect()->to('/dashboard/change_password/'.$id);
			}

			$user->fill([
				'password' => $this->request->getPost('new_password'),
			]);

			if ( ! $users->save($user))
			{
				session()->setFlashdata('error', 'Mật khẩu không hợp lệ!\n Có ít nhất: 1 ký tự in hoa, 1 số, 1 in thường;Độ dài tối thiểu 8');
				return redirect()->to('/dashboard/change_password/'.$id);
			}

			$this->session->setFlashdata('success', 'Tài khoản đã được Đổi mật khẩu thành công!');
			return redirect()->to('/dashboard/accounts');

		}
		return redirect()->to('/dashboard/change_password/'.$id);
	}
}