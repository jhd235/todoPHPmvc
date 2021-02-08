<?php
class tasksController extends Controller
{
    function index()
    {
                     
        require(ROOT . 'Models/Task.php');

        $tasks = new Task();
        $d['pageno'] = 1;
        
        $d['tasks'] = $tasks->showAllTasks();
        $d['total_pages'] = sizeof($d['tasks']);  
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["username"]))
        {
            require(ROOT . 'Models/Task.php');

            $task= new Task();
            
            if ($task->create($_POST["username"], $_POST["email"], $_POST["description"], $_POST["status"]))
            {
              
              //header("Location: " . WEBROOT . "/tasks/index");
              echo "<script>alert('Task created!');</script>";  
            }
            
        }
        $this->render("create");
    }

    function edit($id)
    {
        session_start();
        if ($_SESSION['user'] != "admin")
        {
          header("Location: " . WEBROOT . "/login/index");
          die();
        };
                
        require(ROOT . 'Models/Task.php');
        $task= new Task();

        $d["task"] = $task->showTask($id);
        if (isset($_POST["username"]))
        {
            if ($task->edit($id, $_POST["username"], $_POST["email"], $_POST["description"], $_POST["status"]))
            {
                header("Location: " . WEBROOT . "/tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
      session_start();
        if ($_SESSION['user'] != "admin")
        {
          header("Location: " . WEBROOT . "/login/index");
          die();
        };
      
      
        require(ROOT . 'Models/Task.php');

        $task = new Task();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "/tasks/index");
        }
    }
}
?>