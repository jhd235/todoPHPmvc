<?php
class Login extends Model
{
  public function showLogin($login, $password)
    {
        $sql = "SELECT login, password FROM users where login ='" . $login."' AND password ='" . $password."'";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        $result = $req->fetch(); 
        
        
        if (isset($result['login']) && $result['login']==="admin" && $result['password']==="123")
        {
          
          $isloggedin = true;
        }
    else
    {
      
      $isloggedin = false;
    }
                   
        return $isloggedin;
    }
  
  
  
}
?>