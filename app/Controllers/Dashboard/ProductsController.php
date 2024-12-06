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
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\RedirectResponse;


class ProductsController extends BaseController {
	protected $helpers = ['form'];

	public function index(): string {
		$model = new ProductsModel();
        $data = [
			'title' => "Quản lý sản phẩm",
			'products' => $model->getAllProducts(),
		];
        return view('dashboard/products', $data);
    }

	public function delete(): RedirectResponse
	{
		$model = new ProductsModel();
		if ($this->request->getMethod() === 'POST') {
			$delete_id = $this->request->getPost('delete_id');
			if ($delete_id) {
                $model->delete($delete_id);
                $this->session->setFlashdata('success', 'Sản phẩm đã được xóa thành công!');
				return redirect()->to('/dashboard/products');
            }
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

	/**
	 * @throws \ReflectionException
	 */
	public function create(): RedirectResponse
	{
	    $model = new ProductsModel();
		if ($this->request->getMethod() === 'POST') {
			$date = new Time('now');
//			$date = $date->toDateTimeString();
			$img = $this->request->getFile('image');
			$nameImgFile= $img->getRandomName();
			$img->move(ROOTPATH.'public/uploads',$nameImgFile);
			$data = [
				'name' => $this->request->getPost('name'),
				'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
				'stock' => $this->request->getPost('stock'),
				'categories_id' => $this->request->getPost('category'),
                'image' =>  $nameImgFile,
				'created_at' => $date,
                'updated_at' => $date,
			];
			if ($model->save($data))
			{
				$this->session->setFlashdata('success', 'Sản phẩm đã được thêm thành công!');
                return redirect()->to('/dashboard/products');
			} else {
				$this->session->setFlashdata('error', 'Có loi xảy ra khi thêm sản phẩm!');
                return redirect()->to('/dashboard/create_product');
			}

		}
		return redirect()->to('/dashboard/create_product');
	}
	public function editView(int $id): string {
		$product = new ProductsModel();
		$product = $product->find($id);
		$model = new CategoriesModel();
		$data = [
			'title' => 'Sửa sản phẩm',
			'categories' => $model->getAllCategories(),
			'product' => $product,
		];
		return view('dashboard/edit_product', $data);
	}

	/**
	 * @throws \ReflectionException
	 */
	public function edit(int $id): RedirectResponse
	{
		$model = new ProductsModel();
		$product = $model->find($id);

		if ($this->request->getMethod() === 'POST') {
			$date = new Time('now');
//			$date = $date->toDateTimeString();
			$img = $this->request->getFile('image');
			$nameImgFile = $product->image;
			if ($img) {
				$nameImgFile= $img->getRandomName();
				$img->move(ROOTPATH.'public/uploads',$nameImgFile);
			}

			$data = [
				'name' => $this->request->getPost('name'),
				'description' => $this->request->getPost('description'),
				'price' => $this->request->getPost('price'),
				'stock' => $this->request->getPost('stock'),
				'categories_id' => $this->request->getPost('category'),
				'image' =>  $nameImgFile,
				'updated_at' => $date,
			];

			if ($model->update($id, $data))
			{
				$this->session->setFlashdata('success', 'Sản phẩm đã được sửa thành công!');
				return redirect()->to('/dashboard/products');
			} else {
				$this->session->setFlashdata('error', 'Có loi xảy ra khi sửa sản phẩm!');
				return redirect()->to('/dashboard/edit_product');
			}

		}
		return redirect()->to('/dashboard/edit_product');
	}
}