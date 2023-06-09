<?php

namespace App;

use PDO;

class User
{
	protected $id;
	protected $user_name;
	protected $email;
	protected $pass;
	protected $salt;

	public function getId()
	{
		return $this->id;
	}

	public function getUserName()
	{
		return $this->user_name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public static function getById($id)
	{
		global $conn;

		try {
			$sql = "
				SELECT * FROM users
				WHERE id=:id
				LIMIT 1
			";
			$statement = $conn->prepare($sql);
			$statement->execute([
				'id' => $id
			]);
			$result = $statement->fetchObject('App\User');
			return $result;
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return null;
	}

	public static function hashPassword($password)
	{
		//$hashed_password = null;
		// Generate a random salt
		$salt = bin2hex(random_bytes(16));
	
		// Hash the password with the salt
		$hashed_password = hash('sha256', $password . $salt);

		return $hashed_password;
	}

	public static function attemptLogin($email, $password)
	{
		global $conn;
	
		try {
			$sql = "
				SELECT * FROM users
				WHERE email=:email
				LIMIT 1
			";
			$statement = $conn->prepare($sql);
			$statement->execute([
				'email' => $email
				//'pass' => $password
			]);
			$result = $statement->fetchObject('App\User');

			if ($result) {
				$salt = $result->salt;
				$stored_hash = $result->pass;
				$hashed_password = hash('sha256', $password . $salt);
				if ($hashed_password === $stored_hash) {
				return $result;
				}
		}

		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return null;
	}
	
	public static function register($user_name, $email, $password)
	{
		global $conn;
		
		try {
			// Hash the password before inserting it to DB
			// Generate a random salt value
			$salt = bin2hex(random_bytes(16));
			$hashed_password = hash('sha256', $password . $salt);

			// Insert the salt value and hashed password into the database
			$sql = "
				INSERT INTO users (user_name, email, pass, salt)
				VALUES ('$user_name', '$email', '$hashed_password', '$salt')
			";
			$conn->exec($sql);
		
			return $conn->lastInsertId();
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}
	
		return false;
	}
	
	public static function registerMany($users)
	{
		global $conn;
	
		try {
			foreach ($users as $user) {
				// Hash the password before inserting it to DB
				$salt = bin2hex(random_bytes(16));
				// Hash the password using the generated salt
				$user['pass'] =  hash('sha256', $user['pass'] . $salt);

				$sql = "
				INSERT INTO users
				SET
					user_name=\"{$user['user_name']}\",
					email=\"{$user['email']}\",
					pass=\"{$user['pass']}\",
					salt=\"{$salt}\"
				";

				$conn->exec($sql);
				// echo "<li>Executed SQL query " . $sql;
			}
			return true;
		} catch (PDOException $e) {
				error_log($e->getMessage());
		}
	
		return false;
	}
}