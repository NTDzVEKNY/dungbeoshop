<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */

namespace App\Models;

use CodeIgniter\Model;

class ClientsModel extends Model {
	/**
	 * Properties.
	 */
	public int $id;

	public int $session_id;
	public string $name;
	public string $phone;
	public string $address;
	public ?string $created_at = null;
	public ?string $updated_at = null;

	/**
	 * Name of database table.
	 */
	protected $table = 'clients';
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
		'phone',
		'address',
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
	 * Find Client by id
	 */
	public function findByClientId($id): array|object
	{
		return $this->where('id', $id)->first();
	}
}