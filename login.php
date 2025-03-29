<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>
<?php
//check for submit
  if(isset($_POST['submit'])){
    if($_POST['email'] == '' || $_POST['password'] == ''){
      echo "<h3>Some inputs are empty!!!</h3>";
    }
    else{
      $email = $_POST['email'];
      $password = $_POST['password'];

      //check for the row count
      $login = $conn -> query("SELECT * FROM users WHERE email ='$email'");

      $login->execute();

      $data = $login->fetch(PDO::FETCH_ASSOC);

      echo $login -> rowCount();

      // ROW COUNT
      // if($login->rowCount()>0){
      //   echo $login -> rowCount();
      // }


    }
  }


?>

<main class="form-signin w-50 m-auto">
  <form method="POST" action="login.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mt-5 fw-normal text-center">Please Log in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required="required">
      <label for="floatingInput">Email address</label>
    </div>
    
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required="required">
      <label for="floatingPassword">Password</label>
    </div>

    <button name="submit" -class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <h6 class="mt-3">Don't have an account  <a href="register.php">Create your account</a></h6>
  </form>
</main>
<?php require "includes/footer.php"; ?>
