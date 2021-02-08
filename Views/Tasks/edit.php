<h1>Edit task</h1>
<form method='post' action='#'>
  <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" placeholder="Enter a username" name="username" value="<?php if (isset($task[" username "])) echo $task['username'];?>">
  </div>

  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" placeholder="Enter a email" name="email" value="<?php if (isset($task[" email "])) echo $task["email "];?>">
  </div>

  <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" id="description" placeholder="Enter a description" name="description" value="<?php if (isset($task[" description "])) echo $task["description "];?>">
  </div>
  
  <div class="form-group">
    <label for="description">status</label>
    <input type="text" class="form-control" id="status" placeholder="Enter a status" name="status" value="<?php if (isset($task[" status "])) echo $task["status "];?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>