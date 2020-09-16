<?php

namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController
{

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function dashboard()
    {

        $this->loginService->check();
        $this->render("user/dashboard", []);

       
    }
    public function logout()
    {
       $this->loginService->logout();
        header("Location: login");
    }

    public function login()
    {

        $error = null;

        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

          if($this->loginService->attempt($username,$password)) {
            header("Location: dashboard");
            return;
          }else{
            $error = "Die Kombination aus Benutzername und Passwort stimmen nicht überein!";
          }
            
        }
        $this->render("user/login", [
            'error' => $error
        ]);
    }
}
