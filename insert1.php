<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        $conn = mysqli_connect("localhost", "root", "", "grievance");
         
        // Check connection
        if($conn === false){
            die("ERROR: Sorry please complaint again. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$ecode = $_POST['cjob'];
	$name = $_POST['name1'];
	$father = $_POST['city'];
	$department= $_POST['pjob'];
	$contact= $_POST['contact'];
	$address= $_POST['address'];
	$images= $_FILES['images'];
	$complaint= $_POST['complaint'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO employee VALUES ('$email', '$password', '$cpassword', '$ecode', '$name', '$father', '$department', '$contact', '$address', '$images', '$complaint')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>complaint successfully submitted...</h3>";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>