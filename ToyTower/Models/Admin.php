<?php 

class Admin extends Model{

	public function __construct(){
		// setup db model to use the toys table
		parent::__construct('toys');
	}

	/**
	 * Retrieve a single value for the table
	 *
	 * @param int $id
	 * @return object
	 */
	public function getById($id){
		return $this->findone(['ToysID=?', $id]);
	}

	/**
	 * Update the database from given toy from POST data
	 *
	 * @param integer $id
	 */
	public function updateData($id){
		$this->load( ['ToysID=?', $id ]);
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
    if ($this->save()) {
        echo "Data saved successfully!";
    } else {
        echo "Error saving data: " . $this->error();
    }
}

	/**
	 * Delete given toy 
	 *
	 * @param integer $id
	 */
	public function deleteData($id){
		$this->load( ['ToysID=?', $id] );
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
			$data[$r['ToysID=?']] = $r['ToyName'];

		return $data;
	}

}