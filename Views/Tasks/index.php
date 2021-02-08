<h1>Tasks</h1>
<div class="row col-md-12 centered">
	
	<div class='container'>
    <input type='hidden' id='sort' value='asc'>
		
    <table class="table table-striped custab" width='100%' id='empTable' border='1' cellpadding='10'>
        <thead>
        <a href="/MVC_todo/tasks/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
        <tr><!--
            <th>ID</th>
            <th id="username">Username</th>
            <th>Email</th>
            <th>Description</th>                    
            -->
			<th><span>ID</span></th>
			<th><span onclick='sortTable("username");'>userame</span></th>
      <th><span onclick='sortTable("email");'>email</span></th>
      <th><span onclick='sortTable("description");'>description</span></th>
      <th><span onclick='sortTable("status");'>status</span></th>
      <th><span>actions</span></th>
			
        </tr>
		
					
        </thead>
        <?php
        foreach ($tasks as $task)
        {
            echo '<tr>';
            echo "<td>" . $task['id'] . "</td>";
            echo "<td>" . $task['username'] . "</td>";
            echo "<td>" . $task['email'] . "</td>";
            echo "<td>" . $task['description'] . "</td>";     
            echo "<td>" . $task['status'] . "</td>";     
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC_todo/tasks/edit/" . 
$task["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC_todo/tasks/delete/" . 
$task["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";

            echo "</tr>";
        }
        ?>
    </table>
  
    
</div>
<ul class="pagination">
        
        <li>
            <form action="/" method="post">
                <input type="hidden" name="pageno" value="<?php echo 1?>"/>
                <button type="submit" name="button">First</button>
            </form>               
        </li>
        
        <li>
            <form action="#" method="post">
                <input type="hidden" name="pageno" value="<?php echo $pageno-1?>"/>
                <button type="submit" name="button">Prev</button>
            </form>               
        </li>
  
        <li>
            <form action="#" method="post">
                <input type="hidden" name="pageno" value="<?php echo $pageno+1?>"/>
                <button type="submit" name="button">Next</button>
            </form>               
        </li>
        
        <!--
        <li>
            <form action="#" method="post">
                <input type="hidden" name="pageno" value="<?php //echo $total_pages; ?>"/>
                <button type="submit" name="button">Last</button>
            </form>               
        </li>
        -->
    </ul>  
  
  
  
  
  
  
  
  
  