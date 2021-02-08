<h1>Create task</h1>
<form method='post' action='#' name="create" required onsubmit="return validateForm()">
  <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>

  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>

  <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  
  <div class="form-group">
    <label for="status">status</label>
    <input type="text" class="form-control" id="status" value ="0" name="status">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
