<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;
use App\Models\ProductsModel;
use CodeIgniter\I18n\Time;


class ProductsController extends BaseController {


	public function index(): string {
		$model = new ProductsModel();
        $data = [
			'title' => "Quản lý sản phẩm",
			'products' => $model->getAllProducts(),
		];
        return view('dashboard/products', $data);
    }

	public function crud()
	{
		$model = new ProductsModel();
		if ($this->request->getMethod() === 'POST') {
			$delete_id = $this->request->getPost('delete_id');
			if ($delete_id) {
                $model->delete($delete_id);
                $this->session->setFlashdata('success', 'Sản phẩm đã được xóa thành công!');
				return redirect()->to('/dashboard/products');
            }
			$change_id = $this->request->getPost('change_id');
//			if ($change_id) {
//				$data = [
//                    'name' => $this->request->getPost('name'),
//                    'description' => $this->request->getPost('description'),
//                    'price' => $this->request->getPost('price'),
//                    'stock' => $this->request->getPost('stock'),
//                    'categories_id' => $this->request->getPost('category'),
//                ];
//                $model->update($change_id, $data);
//                $this->session->setFlashdata('success', 'Sản phẩm đã được cập nhật thành công!');
//                return redirect()->to('/dashboard/products');
//			}
		}
		return redirect()->to('/dashboard/products');
	}
	public function createView(): string {
		$model = new CategoriesModel();
        $data = [
			'title' => 'Thêm sản phẩm',
			'categories' => $model->getAllCategories(),
		];
		return view('dashboard/create_product', $data);
    }

	public function create()
	{
	    $model = new ProductsModel();
		if ($this->request->getMethod() === 'POST') {
			$date = new Time('now');
//			$date = $date->toDateTimeString();
			$data = [
				'name' => $this->request->getPost('name'),
				'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
				'stock' => $this->request->getPost('stock'),
				'categories_id' => $this->request->getPost('category'),
                'image' => 'bitcoin10.png',
				'created_at' => $date,
                'updated_at' => $date,
			];
			if ($model->save($data))
			{
				$this->session->setFlashdata('success', 'Sản phẩm đã được thêm thành công!');
                return redirect()->to('/dashboard/products');
			} else {
				$this->session->setFlashdata('error', 'Có loi xảy ra khi thêm sản phẩm!');
				die('1');
                return redirect()->to('/dashboard/create_product');
			}
		}
	}
}