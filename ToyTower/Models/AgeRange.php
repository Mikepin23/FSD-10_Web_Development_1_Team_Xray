<?php 

class AgeRange extends Model{

	public function __construct(){
		// setup db model to use the AgeRange table
		parent::__construct('ageranges');
	}

	/**
	 * Retrieve a single value for the table
	 *
	 * @param int $id
	 * @return object
	 */
	public function getById($id){
		return $this->findone(['AgeRangeID=?', $id]);
	}

	/**
	 * Update the database from given age range from POST data
	 *
	 * @param integer $id
	 */
	public function updateData($id){
		$this->load( ['AgeRangeID=?', $id ]);
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
	 * Delete given age range
	 *
	 * @param integer $id
	 */
	public function deleteData($id){
		$this->load( ['AgeRangeID=?', $id] );
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
			$data[$r['AgeRangeID=?']] = $r['Range'];

		return $data;
	}

}