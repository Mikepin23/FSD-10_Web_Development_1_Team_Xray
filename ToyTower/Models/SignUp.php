<?php 

class SignUp extends Model{

	public function __construct(){
		// setup db model to use the users table
		parent::__construct('users');
	}

	/**
	 * Retrieve a single value for the table
	 *
	 * @param int $id
	 * @return object
	 */
	public function getById($id){
		return $this->findone(['UserID=?', $id]);
	}

	/**
	 * Update the database from given user from POST data
	 *
	 * @param integer $id
	 */
	public function updateData($id){
		$this->load( ['UserID=?', $id ]);
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
	 * Delete given user 
	 *
	 * @param integer $id
	 */
	public function deleteData($id){
		$this->load( ['UserID=?', $id] );
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
			$data[$r['UserID']] = $r['Username'];

		return $data;
	}

}