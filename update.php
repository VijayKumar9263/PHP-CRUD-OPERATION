<?php include("connect.php");
$id = $_GET['i'];
$query = "SELECT * FROM student WHERE id= 'id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated Student Details Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h2>Update Students Details</h2>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email"  id="email" name="email" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <div class="submit">
                <input class="" type="submit" value="Update" name="update" id="">
            </div>
        </form>
    </div>
</body>
</html>


<?php 
    if (isset($_POST['update']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = "UPDATE student set name='$name',Email='$email',Address='$address' WHERE id='$id'";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "<script>alert('Data Updated into Database')</script>";
            ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost/Day1/display.php" />
            <?php
        }
        else
        {
            echo "Failed to Update";
        }
    }

?>