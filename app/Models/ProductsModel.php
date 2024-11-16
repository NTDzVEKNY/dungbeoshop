<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Models;


use CodeIgniter\Model;
use DateTime;

class ProductsModel extends Model {
	/**
	 * Properties.
	 */
	public int $id;

	public ?int $categories_id;
	public string $name;
	public ?string $description = null;
	public int $price;
	public int $stock;
	public ?string $image = null;
	public ?string $created_at = null;
	public ?string $updated_at = null;
	/**
	 * Name of database table.
	 */
	protected $table = 'products';

	/**
	 * The format that the results should be returned as. Will be overridden if
	 * the as* methods are used.
	 */
	protected $returnType = 'object';

	/**
	 * An array of field names that are allowed to be set by the user in
	 * inserts/ updates.
	 */
	protected $allowedFields = [
		'categories_id',
		'name',
        'description',
        'price',
        'stock',
        'image',
		'created_at',
        'updated_at',
	];

	/**
	 * Array of column names and the type of value to cast.
	 */
	protected array $casts = [
		'id'              => 'int',
		'categories_id' => 'int',
        'price' => 'int',
        'stock' => 'int',
        'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];


	/**
	 * Find product by id
	 */
	public function findProductById(int $id): array|object
	{
        return $this->where('id', $id)->first();
    }

	/**
	 * Get all Products
	 */
	public function getAllProducts(): array
	{
		return $this->findAll();
	}
}