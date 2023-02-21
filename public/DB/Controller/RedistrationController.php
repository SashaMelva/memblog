<?php
/*
$conn = new mysqli("localhost", "user", "user", "blog_db");
if(!$conn){
    echo("Ошибка: " . mysqli_connect_error());
}
echo "Connected successfully";
*/
echo("edfsef");
echo $_POST['login'];




/*
namespace Contoller;

class Registration{
    public $login;
    public $password;
    private $link;
    

    public function  __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
        $this->link = $link = mysqli_connect("localhost", "user", "user", "blog_db");
    }

    public function isLogin() {
        $query = mysqli_query($this->link, "SELECT  FROM User WHERE ogin='".mysqli_real_escape_string($link, $this->login)."'");
        if(mysqli_num_rows($query) > 0)
        {
            echo ("Пользователь с таким логином уже существует в базе данных");
            return false;
        } else {
            return true;
        }
        
    }


    public function addUser() {
        if(isLogin() == true) {
            $this->login =  trim($this->login);
            $this->password = md5(md5(trim($this->password)));
            mysqli_query($this->link,"INSERT INTO User SET login='".$this->login."', password='".$this->password."'");
        } else {
            echo ("При регистрации произошли ошибки");
        }
    }
}*/