<head>
<link href='style.css' rel='stylesheet' type='text/css'>
<script src='jquery-3.3.1.min.js' type='text/javascript'></script>
<script src='script.js' type='text/javascript'></script>
 <script>
function validateForm() {
  var x = document.forms["create"]["username"].value;
  var y = document.forms["create"]["email"].value;
  var z = document.forms["create"]["description"].value;
  
  if (x == "" || x == null || y == "" || y == null || z == "" || z == null) {
    alert("Name must be filled out");
    return false;
  }
  if (!y.includes("@"))
    {
      alert("email is not valid!");
    }
}
</script>
</head>
<body>
  

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//echo $_POST['login'];

define('WEBROOT', str_replace("todoPHPmvc.sky5.kz/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("todoPHPmvc.sky5.kz/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require(ROOT . 'Config/core.php');
require(ROOT . 'router.php');
require(ROOT . 'request.php');

function my_autoloader($class) {
    require (ROOT.$class . '.php');
}

spl_autoload_register('my_autoloader');
$dispatch = new Dispatcher();
$dispatch->dispatch();

?>
  
 
</body>
