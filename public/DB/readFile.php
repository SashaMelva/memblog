<?php

namespace DB;

/*class User 
{
    public $file = "table/User.txt";
    public int $idUser;
    public $login;
    public $password;


    public function __construct($idUser) {
        $this->idUser = $idUser;
    }
    public function readUserFile() {
        $usersOnFile = fopen($file, "r+") or die ("Ошибка: файл с пользователями не найден");
        if (flock($reg_form, LOCK_EX)) {
			$lines = explode ("\n", fread ($usersOnFile, filesize($file)));
			foreach ($lines as $line) {
				$userdata = explode ( "\t", $line);
				if ( filter_var($userdata[0], FILTER_SANITIZE_EMAIL) == $idUser ) {
					$freename = 'Пользователь <b>' . $userdata[1] . '</b> найден. Его пароль <b>' . $userdata[2] . '</b><br><br>';
					break;
				} else {
					$freename = 'Пользователь <b>' . $idUser . '</b> не найден.<br><br>';
				}
			}
		} else {
			echo "Ошибка: Файл пользователей не может быть заблокирован на время работы программы<br>";
		}
		fclose($reg_form);
		return $freename;
    
    }
}*/
	//define("UsersFile",	'users.txt');
	 
	if (isset($_POST['login'])) {
		$useLogin = $_POST['login'];
	}
	else {
		$userLogin  = '';
	}


class User 
{
    public $file = "public/DB/table/User.txt";
    public int $idUser;
    public $login;
    public $password;


    public function __construct($userLogin) {
        $this->login = $userLogin;
    }
    public function readUserFile() {
        $usersOnFile = fopen($file, "r+") or die ("Ошибка: файл с пользователями не найден");
        if (flock($reg_form, LOCK_EX)) {
			$lines = explode ("\n", fread ($usersOnFile, filesize($file)));
			foreach ($lines as $line) {
				$userdata = explode ( "\t", $line);
				if ( filter_var($userdata[0], FILTER_SANITIZE_EMAIL) == $login ) {
					$freename = 'Пользователь <b>' . $userdata[1] . '</b> найден. Его пароль <b>' . $userdata[2] . '</b><br><br>';
					break;
				} else {
					$freename = 'Пользователь <b>' . $idUser . '</b> не найден.<br><br>';
				}
			}
		} else {
			echo "Ошибка: Файл пользователей не может быть заблокирован на время работы программы<br>";
		}
		fclose($reg_form);
		return $freename;
    
    }
    //public function readUser(){echo("sefsf");}
}

$user = new User($userLogin);
$user->readUser();


