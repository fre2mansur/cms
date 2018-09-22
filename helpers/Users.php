<?php
use Illuminate\Database\Capsule\Manager as DB;
class User extends DB {

	/**
	 *
	 * @var type
	 */
	protected static $instance;

	public static function newInstance()
	{
		if( !self::$instance instanceof self ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function userTable() {
		return DB::table('users');
	}
	
	public function allUsers() {
		$query = $this->userTable()->get();
		return $query;
	}


	/*
	@param pass the user id 
	@return get the array
	*/
	public function findById($id) {
		$user = DB::selectOne('select * from users where id = ?', array(1));
		return $user;
	}

	/*
	@param pass the user id 
	@return get the array
	*/
	public function findByEmail($email) {
		$user = DB::selectOne('select * from users where email = ?', array(1));
		return $user;
	}
}