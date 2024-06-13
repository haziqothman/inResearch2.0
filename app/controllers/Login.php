<?php 
class Login extends Controller {
  public function index()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      

      $this->view('login/index', $data);
  }

  public function getLogin()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $email = trim($_POST["email"]);
      $password = trim($_POST["password"]);
      $role = trim($_POST["role"]);
    
      $user =  $this->model('Login_model')->getUserByEmail($email);

      if ($user) {
        if ($password === $user["password"] && strtolower($role) === strtolower($user["role"])){
          $_SESSION["user"] = "yes";
          $_SESSION["name"] = $user["name"];
          $_SESSION["role"] = $user["role"]; // Store role in session
          $_SESSION["id"] = $user["id"]; 

          switch (strtolower($user["role"])) {
            case 'staff':
                header("Location: " . BASEURL . "/staff");
                break;
            case 'platinum':
                header("Location: " . BASEURL . "/platinum");
                break;
            case 'crmp':
                header("Location:" . BASEURL . "/crmp");
                break;
            case 'mentor':
                header("Location: " . BASEURL . "/mentor");
                break;
            default:
                header("Location: index.php");
                break;
         }
        }
      }   
  }

  public function getLogout()
  {
   
    session_destroy();
    header("Location: " . BASEURL . "/login/index");
      
  }
}