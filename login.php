<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<head><script src='https://www.google.com/recaptcha/api.js' async defer></script></head>
<style>
  body{background-image: url("https://www.filepicker.io/api/file/u5frNNlBQDQbBX0nh9Mg");}
</style>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>BGV CHAT APP</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        
        <div class="g-recaptcha" data-sitekey="6LeuTvUaAAAAANWmelx_60o3Jb7XTWaE7NeIl7_s"></div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
