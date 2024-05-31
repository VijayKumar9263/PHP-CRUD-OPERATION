<?php
include("connect.php");
$id = $_GET['i'];
$query = "DELETE FROM student WHERE id = '$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record deleted from tha Database')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/Day1/display.php" />
<?php
}
else 
{
    echo "<script>alert('Failed to Delete the Record')</script>";
}
?>