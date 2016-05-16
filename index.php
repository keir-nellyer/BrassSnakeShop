<?php

require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/db.php');

$connection = getMainDbConnection();

?>

<html>
<head>
    <title><?= WEBSITE_NAME ?></title>
    <link rel="stylesheet" type="text/css" href="includes/css/main.css"> 
</head>
<body>
<?php include('includes/header.php') ?>

<p>Welcome to the <?= WEBSITE_NAME ?>, this will soon be a fully fledged store.</p>

<!-- Following code is a test - BC 16/05/16 15:09-->
<form action="#">
  
  <fieldset>
    
    <legend>Sign In</legend>
    
    <label for="username" class="vhide">Username</label>
    <input id="username" name="username" type="text" placeholder="Username" required minlength="2">
    
    <label for="password" class="vhide">Password</label>
    <input id="password" name="password" type="text" placeholder="Password" required minlength="6">
    
    <input type="checkbox" name="remember" id="remember" class="vhide">
    <label for="remember">
      <i class="octicon octicon-check"></i> Remember all the things
    </label>
        
    <button class="signin">Sign in</button>
    
  </fieldset>
  
</form>
<!-- END OF TEST - BC 16/05/16 15:09-->

<?php include('includes/footer.php') ?>
</body>
</html>
