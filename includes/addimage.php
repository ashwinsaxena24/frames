<!DOCTYPE html>
<html>
	<head>
		<title>Add Image</title>
        <style>
            @import url('style.css');
        </style>
	</head>
	<body>
<?php
$ping = 'pong';
require_once 'variables.php';

$conn = new mysqli(HOST,USER,PASS,DATABASE);
if($conn->connect_error) {
	die($conn->connect_error); //For Debugging purpose only
	//enable after testing
	//header("Location: http://localhost/Frames/error.php");
}

if(!empty($_SERVER['PHP_AUTH_USER']) && !empty($_SERVER['PHP_AUTH_PW'])) {
    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    if($user != 'ping' or $pass != 'pong')
        die("<h2>Wrong Username or Password</h2>");
}
else {
    header('WWW-Authenticate: Basic realm="Frames"');
    header('HTTP/1.O 401 Unauthorized');
    die("<h2>Please Enter your username and password</h2>");
}
$errorFile = '';
$count = '';
if(isset($_POST['submit'])) {
	if(!empty($_FILES['image']['name'][0]) && !empty($_POST['category'])) {
        $count = 0;
        $total = count($_FILES['image']['name']);
        for($i=0;$i<$total;++$i) {
            $filetype = $_FILES['image']['type'][$i];
            $name = $_FILES['image']['name'][$i];
            $cat = $_POST['category'];
            $target = UPLOADPATH.$cat.'/'.$name;
            //echo $filetype;
            if($filetype != 'image/jpg' && $filetype != 'image/jpeg' && $filetype != 'image/png' && $filetype != 'image/gif')
                echo "$name is not a file<br>";
            else {
                if(file_exists($target)) {
                    echo "$name already exists<br>";
                }
                else {
                    //echo $target;
                    $query = "INSERT INTO images VALUES (NULL,'$name','$cat')";
                    $rs = $conn->query($query);
                    if(!$rs) 
                        $errorFile = $conn->error;
                    else {
                        if(move_uploaded_file($_FILES['image']['tmp_name'][$i],$target)) {
                            echo "$name uploaded successfully<br>";
                            $count++;
                        }
                        else {
                            $query = "DELETE FROM images WHERE name='$name' AND category='$cat'";
                            $rs = $conn->query($query);
                            if(!$rs) $errorFile = $conn->error;
                        }
                    }
                }
            }
        }
	}
    else $errorFile = "No image selected";
}
echo <<<_END
<div id="add">
<form action="addimage.php" method="POST" enctype="multipart/form-data">
            <label>Select Images</label><br><br>  <input type=file name=image[] multiple="" ><br><br>
            <select name=category>
                <option value='animals'>Animals</option>
                <option value="birds">Birds</option>
                <option value='festivals'>Festivals</option>
                <option value='models'>Models</option>
                <option value="objects">Objects</option>
                <option value="sceneries">Sceneries</option>
                <option value="specials">Specials</option>
            </select>
            <input type=submit name=submit value="Add Image">
        </form><br>
        $errorFile<br></div>
_END;
if($count > 0) echo "$count files were uploaded successfully";
?>
	</body>
</html>

