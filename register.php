<?php require "includes/header.php"; ?>
<?php require "config.php" ;?>

<?php
  if(isset($_POST['submit'])){
    // Check if inputs are empty
    if($_POST['email'] == '' || $_POST['username'] == '' || $_POST['password'] == ''){
      echo "<h3>Some inputs are empty!!!</h3>";

    }
    else{
      // processing the data from the inputs
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Query

      $insert = $conn->prepare("INSERT INTO users(email, username, my_password)
      -- specifying values
      VALUES(:email, :username, :my_password)");
      // execute
      $insert->execute([
        ':email' => $email,
        ':username' => $username,
        // hashing the password
        ':my_password' => password_hash($password, PASSWORD_DEFAULT),
      ]);
    }
  }

?>


<main class="form-signin w-50 m-auto">
  <form method="POST" action="register.php">
   
    <h1 class="h3 mt-5 fw-normal text-center">Please Register</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
      <label for="floatingInput">Username</label>
    </div>

    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">register</button>
    <h6 class="mt-3">Already have an account?  <a href="login.php">Login</a></h6>

  </form>
</main>
<?php require "includes/footer.php"; ?>
