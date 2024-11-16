<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model {
	/**
	 * Properties.
	 */
	public int $id;

	public ?int $client_id;
	public string $status;
	public int $total;
	public string $shipping_address;
	public string $note;
	public ?string $created_at = null;
	public ?string $updated_at = null;

	/**
	 * Name of database table.
	 */
	protected $table = 'orders';
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
		'client_id',
		'status',
        'total',
        'shipping_address',
        'note',
		'created_at',
		'updated_at'
	];

	/**
	 * Array of column names and the type of value to cast.
	 */
	protected array $casts = [
		'id' => 'int',
		'client_id' => 'int',
		'created_at' => 'datetime',
		'updated_at' => 'datetime'
	];
	/**
	 * Find Order by id
	 */
	public function findByOrderId($id): array|object
	{
		return $this->where('id', $id)->first();
	}
	/**
	 * Get All Order
	 */
	public function getAllOrders(): array
	{
		return $this->findAll();
	}
}