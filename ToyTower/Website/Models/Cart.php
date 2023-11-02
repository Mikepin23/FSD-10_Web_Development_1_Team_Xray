<?php 

class Cart extends Model{

	public function __construct(){
		// setup db model to use the categories table
		parent::__construct('brands');
	}

	/**
	 * Retrieve a single value for the table
	 *
	 * @param int $id
	 * @return object
	 */
	public function getById($id){
		return $this->findone(['BrandID=?', $id]);
	}

	/**
	 * Update the database from given category from POST data
	 *
	 * @param integer $id
	 */
	public function updateData($id){
		$this->load( ['BrandID=?', $id ]);
		$this->copyFrom('POST');
		$this->update();
	}

	/**
	 * Insert into the database from POST data
	 *
	 * @param integer $id
	 */
	public function addData(){
		$this->copyFrom('POST');
		$this->save();
	}

	/**
	 * Delete given category 
	 *
	 * @param integer $id
	 */
	public function deleteData($id){
		$this->load( ['BrandID=?', $id] );
		// check is exists
		$this->erase();
	}
	
	/**
	 * Return rows as [key] value
	 *
	 * @return array
	 */
	public function fetchKeyValue(){
		$rows = $this->all();
		$data = [];
		foreach($rows as $r)
			$data[$r['BrandID=?']] = $r['BrandName'];

		return $data;
	}

}