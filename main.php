<?php
$ping = 'pong';
require_once 'includes/variables.php';
require_once 'header.php';
$category = $_GET['cat'];
if(!in_array($category,$categories)) {
    header("Location: index.php");
}
$upperct = ucfirst($category);
echo "<title>$upperct</title>";
require_once 'footer.php';
echo "<ul class='navbar-nav nav' id='navb' align='center'>";
foreach($categories as $c) {
    $upperct = ucfirst($c);
    if($c == $category)
        echo "<li><a class='active'>$upperct</a></li>";
    else
echo <<<_END
            <li><a href='main.php?cat=$c' class='blist'>$upperct</a></li>
_END;
}
echo "</ul></nav>";

$conn = new mysqli(HOST,USER,PASS,DATABASE);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM images WHERE category='$category'";
$result = $conn->query($query);
if(!$result) die($conn->error);
$count = 0;
echo "<div class='well container-fluid'>";
echo "<div class='row'>";
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $imagename = UPLOADPATH2.$category.'/'.$row['name'];
    echo "<div class='col-xs-2 marl'>";
    echo "<a data-fancybox='gallery' href='$imagename'><img src='$imagename' class='img'></a></div>";
    ++$count;
    if($count%5 == 0)
        echo "</div><br><div class='row'>";
}
?>
</div></div>

</body></html>