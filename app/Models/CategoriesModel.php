<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model {
	/**
	 * Properties.
	 */
	public int $id;

	public string $name;
	public ?string $created_at = null;
	public ?string $updated_at = null;

	/**
	 * Name of database table.
	 */
	protected $table = 'categories';

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
		'name',
        'created_at',
        'updated_at'
	];
	/**
	 * Array of column names and the type of value to cast.
	 */
	protected array $casts = [
		'id' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
	];

	/**
	 * Find Category by id
	 */
	public function findByCategoryId($id): array|object
	{
        return $this->where('id', $id)->first();
    }
	/**
	 * Get all categories
	 */
	public function getAllCategories(): array {
		return $this->findAll();
	}

}