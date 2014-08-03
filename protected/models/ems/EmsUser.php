<?php
class EmsUser extends User
{
	
	private static $_adminRoleId = 1;
	private static $_studentRoleId = 2;
	private static $_employee = 3;
	private static $_parent = 4;
	
	 
		
	/**
	 * This function is for saving user
	 * @param array $data
	 * @return int studentId
	 */
	public function saveUser($data, $user_type)
	{
		$userId = null;
		$data['Password'] = md5($data['Password']);
		
		$this->attributes = $data;
		
		if($this->save())
		{
			$userId = $this->getPrimaryKey();
		}
		return $userId;
		
	}
}