<?php
  require "layout/header.php";
?>

<!-- First Container -->
<main class="container-fluid text-center">
  <h2>Horizontal form</h2>
  <form id="register-form" class="form-horizontal" action="php/create_user.php">
    <div class="form-group">
      <div class="col-sm-2"></div>
      <label class="control-label col-sm-2" for="first-name">First Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="first-name" name="firstname" placeholder="Enter your first name">
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-2"></div>
      <label class="control-label col-sm-2" for="last-name">Last Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="last-name" name="lastname" placeholder="Enter your last name">
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-2"></div>
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-2"></div>
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-2"></div>
      <label class="control-label col-sm-2" for="pwd">Phone:</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="form-group">
      <br>
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-default">Register</button>
      </div>
    </div>
  </form>

  <form id="login-form" class="form-horizontal" action="php/login.php">
    <div class="form-group">
      <div class="col-sm-2"></div>
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-2"></div>
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="form-group">
      <br>
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-default">Log In</button>
      </div>
    </div>
  </form>

</main>

<?php
  require "layout/footer.php";
?>
