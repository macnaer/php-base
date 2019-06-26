<?php

require_once "./model/dbManager.php";
require_once "config.php";

class UserController {
    private $email;
    private $pass;

    public function Validate($email, $pass){
        $this->email = $email;
        $this->pass = $pass;

        // $this->email = strip_tags($email);
        // $this->pass = strip_tags($pass);
        $this->email = htmlspecialchars($email);
        $this->pass = htmlspecialchars($pass);
        $db = new DBManager();

        $user = $db->CheckUser($this->email);
        if (!empty($user)){
            $user = mysqli_fetch_assoc($user);
            $userPass = $user["password"];

            if ($userPass == $this->pass){
                return $user;
            }
            else{
                $passError = "Username or password incorrect!";
                return $passError;
            }
            
        }
        else{
          
            return 0;
        }
       

       // echo "Validate " . $this->email . " === " . $this->pass;
    }
}