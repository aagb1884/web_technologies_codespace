<?php 

	if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
	{
	  # Connect to the database.
	  require ('connect_db.php'); 

  # Initialize an error array.
  $errors = array();

  # Check for user first name .
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = "Enter your first name." ; }
  else
  { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for a user last name.
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = "Enter your last name" ; }
  else
  { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }
  
  # Check for a user email
  if (empty( $_POST[ 'email' ] ) )
  { $errors[] = "Enter your email" ; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }
  
  # Check for a user's password
  if (!empty( $_POST[ 'password1' ] ) )
  {
	  if ( $_POST[ 'password1' ] != $_POST[ 'password2' ] )
	  { $errors[] = 'Passwords do not match.' ; }
  else
  { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'password1' ] ) ) ; }
  }
  else
	{ $errors[] = 'Enter your password' ; }

	#check if email address already registered.
	if ( empty( $errors ) )
	  {
    $q = "SELECT user_id FROM users WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a class="alert-link" href="login.php">Sign In Now</a>' ;
  }

   # On success register user inserting into 'users' database table.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO users (first_name, last_name, email, password, reg_date) 
	VALUES ('$fn', '$ln', '$e', SHA2('$p',256), NOW() )";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<div class="container">
	<div class="alert alert-secondary" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
  </button>
    <h4 class="alert-heading"Registered!</h4>
    <p>You are now registered.</p>
    <a class="alert-link" href="login.php">Login</a>'; }
  
    # Close database connection.
	
    mysqli_close($link);

    exit();
  }
   
  # Or report errors.
  else 
  {
    echo '<p>The following error(s) occurred:</p>' ;
    foreach ( $errors as $msg )
    { echo "$msg<br>" ; }
    echo '<p>Please try again.</p></div>';
    # Close database connection.
    mysqli_close( $link );
 
	}
	}
?>


<!doctype html>
<html lang="en">
  <head>
<title>Create User</title>
  </head>
  <body>
<form action="create.php" method="post" enctype="multipart/form-data">
  <label for="first_name">First Name:</label>
  <input type="text" id="first_name" name="first_name" placeholder="Enter first name..." required value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?> "><br>
<br>
  <label for="last_name">Last Name:</label>
  <input type="text" id="last_name" name="last_name" placeholder="Enter last name..." required value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"><br>
<br>
  <label for="email">Email:</label>
   <input type="email" id="email" name="email" placeholder="Enter email..." required value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"><br>
<br>
<label for="password">Create New Password:</label>
   <input type="password" id="password" name="password1" placeholder="Enter password..." required value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>"><br>
<br>
<label for="password">Confirm Password:</label>
   <input type="password" id="password" name="password2" placeholder="Confirm password..." required value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>"><br>
<br>
<input type="submit" value="Submit">
</form>
</body>
</html>