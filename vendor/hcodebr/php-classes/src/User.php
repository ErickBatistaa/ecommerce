<?php 

	namespace Hcode\Model;

	use\Hcode\DB\Sql;
	use \Hcode\Model;

	class User extends Model{

		public static function login($login, $password){

			$sql = new Sql();

			$results = Sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(

				":LOGIN"=>$login
			));

			if(count($results) === 0){

				throw new \Exception("Usuario inexistente ou senha invalida.");

			}

			$data = $results[0];

			if(password_verify($password, $data["despassord"]) === true{

				$user = new User();

			}else{
				throw new \Exception("Usuario inexistente ou senha invalida.");
			}



		}

	}
 ?>