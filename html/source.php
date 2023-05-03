<?php
session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
 
  if ($username&&$password)
  {
	 $conn = mysqli_connect("localhost", "root", "","church")or die("couldn't connect to the database!");
	 
	 $query = mysqli_query($conn,"SELECT * FROM account WHERE username='$username'");
	 
	 $numrows = mysqli_num_rows($query);
	 
	 if($numrows!==0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $dbusername = $row['username'];
			 $dbpassword = $row['password'];
			 $stat = $row['status'];
		 }
		 if ($username==$dbusername&&($password)==$dbpassword)
		 {
			if ($stat==0){
					echo '<script type="text/javascript">
					alert("Account Deactivated!");
					location="login.php";
					</script>';
					exit();
		 	}elseif($stat==1){
			
					echo '<script type="text/javascript">
					alert("Welcome User!");
					location="admin.php";
					</script>';
					$_SESSION['username'] = $username;
			}
			  
		 }
		 else
			 echo '<script type="text/javascript">
                      alert("Wrong Password!");
                         location="login.php";
                           </script>';
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("Account Not Found!");
                         location="login.php";
                           </script>');		 
	  
  }
  else 
	  die('<script type="text/javascript">
                      alert("Please enter a username and password!");
                        location="login.php";
                           </script>');
  
	  	 
?>