<?php
class loginController extends Controller
{
    function index()
    {
      require(ROOT . 'Models/Login.php');
      $logins = new Login();
      if (isset($_POST['login']) && isset($_POST['password']))
      {
       $loggedin = $logins->showLogin($_POST["login"], $_POST['password']); 
      }
      
        
      if (isset($loggedin) && $loggedin)
      {
          session_start();
          session_regenerate_id(true);
          $_SESSION['id'] = session_id();  
          $_SESSION['user'] = "admin";
        }
      
      //$this->set($d);
      $this->render("index");
      
    }
  
  public function logout()
  {
    session_start();
    session_destroy();
    header("Location: " . WEBROOT . "/tasks/index");
    die();
  }
}
?>