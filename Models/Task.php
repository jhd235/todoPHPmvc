<?php
class Task extends Model
{
    public function create($username, $email, $description, $status)
    {
        $sql = "INSERT INTO tasks (username, email, description, status) VALUES (:username, :email, :description, :status)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'username' => $username,
            'email' => $email,
            'description' => $description,
            'status' => $status

        ]);
    }

    public function showTask($id)
    {
        $sql = "SELECT * FROM tasks WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $res = $req->execute();
        return $res;
    }

    public function showAllTasks()
    {   
        if (isset($_POST['pageno'])) {
            $pageno = $_POST['pageno'];
        } else {
            $pageno = 1;
        }
      
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;
        if (isset($_POST['columnName']) && isset($_POST['sort']))
        {
          $columnName = $_POST['columnName'];
          $sort = $_POST['sort'];
        }
      else
      {
        $columnName = "id";
        $sort = "asc";
      }
        
        

        $total_pages_sql = "SELECT COUNT(*) FROM tasks";
        $req_total_pages = Database::getBdd()->prepare($total_pages_sql);
        $req_total_pages->execute();
        $result_total_pages = $req_total_pages->fetch(); 
        
        $total_pages = ceil($result_total_pages[0] / $no_of_records_per_page);

        //$sql = "SELECT * FROM tasks LIMIT $no_of_records_per_page OFFSET $offset";
        $sql = "SELECT * FROM tasks order by ".$columnName." ".$sort." LIMIT $no_of_records_per_page OFFSET $offset";
        
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $username, $email, $description, $status)
    {
        $sql = "UPDATE tasks SET username = :username, email= :email, description = :description, status = :status WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'description' => $description,
            'status' => $status
            //'updated_at' => date('Y-m-d H:i:s')

        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM tasks WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>