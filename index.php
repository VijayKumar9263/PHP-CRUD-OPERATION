<?php
include ("connect.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h2>Students Details</h2>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <div class="submit">
                <input class="" type="submit" value="submit" name="submit" id="">
            </div>
        </form>
    </div>
</body>
</html>


<?php 
    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        if($name !==0)
        $query = "INSERT INTO student (Name,Email,Address) Values('$name','$email','$address')";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "Data Inserted into Database";
        }
        else
        {
            echo "failed";
        }
    }

?>