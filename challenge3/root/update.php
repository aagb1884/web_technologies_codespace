<?php
# Check form submitted.	
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  #Connect to the database.
  require ('connect_db.php'); 

  #Initialize an error array.
  $errors = array();

# Check for id.
  if ( empty( $_POST[ 'id' ] ) )
  { $errors[] = '' ; }
  else
  { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'id' ] ) ) ; }
  
  # Check for name.
  if ( empty( $_POST[ 'name' ] ) )
  { $errors[] = 'Update name.' ; }
  else
  { $n = mysqli_real_escape_string( $link, trim( $_POST[ 'name' ] ) ) ; }

  # Check for description
  if (empty( $_POST[ 'description' ] ) )
  { $errors[] = 'Update description.' ; }
  else
  { $d = mysqli_real_escape_string( $link, trim( $_POST[ 'description' ] ) ) ; }

# Check for image URL.
  if (empty( $_POST[ 'imageURL' ] ) )
  { $errors[] = 'Update image URL.' ; }
  else
  { $i = mysqli_real_escape_string( $link, trim( $_POST[ 'imageURL' ] ) ) ; }

# Check for price.
  if (empty( $_POST[ 'price' ] ) )
  { $errors[] = 'Update price.' ; }
  else
  { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'price' ] ) ) ; }
  
  # Update the record in the database
  {
    $sql = "UPDATE users SET id=$id, name='$n', description='$d', imageURL='$i', price='$p' WHERE id='$id'";
    $r = @mysqli_query ( $link, $sql ) ;
    if ($r)
    {
       header("Location: read.php");
    } else {
        echo "Error updating record: " . $link->error;
    }
  
    # Close database connection.
    
	mysqli_close($link); 
    exit();
  }
 mysqli_close($link); 
    exit();
  }
  # Or report errors.
  else 
  {  
    echo ' 
	<script type ="text/JavaScript">
	alert("' ;
    foreach ( $errors as $msg )
    { echo "$msg " ; }
    echo 'Please try again.")</script>';
  } 
  
?>

<!doctype html>
<html lang="en">
  <head>
<title> CRUD Practice!</title>
  </head>
  <body>
<form action="update.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) echo $_GET['id']; ?>">
  <label for="item_name">Name:</label>
  <input type="text" id="name" name="name" required value="<?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?> "> <br>
	<br>
 <label for="item_desc">Description:</label>
  <input id="description" name="description" required value="<?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>"></textarea><br>
	<br>
  <label for="item_img">Image URL:</label>
   <input type="text" id="imageURL" name="imageURL" required value="<?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>"><br>
<br>
<label for="item_price">Price:</label>
   <input type="text" id="price" name="price" required value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>"><br>
<input type="submit" value="Create">
</form>
<br>

</body>
</html>