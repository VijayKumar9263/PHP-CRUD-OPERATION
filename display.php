<html>
    <head>
        <title>
            Display Page
        </title>
        <style>
            body
            {
                background: #d6f5f4;
            }
            .update,.delete
            {
                background-color: green;
                color: white;
                border:0;
                outline:none;
                border-radius:5px;
                height:22px;
                width:80px;
                font-weight:bold;
                cursor: pointer;
            }
            .delete{
                background-color:red;
            }
        </style>
    </head>
</html>

<?php
// error_reporting(0);
include("connect.php");
//  echo "connection Established";
$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


// echo $total;

if($total != 0)
    {
?>
    <h2 align="center">CRUD OPERATION<h2>
    <table border="2px" cellspacing="7px" align="center">
        <tr>
            <th width="10%">ID</th>
            <th width="20%">Name</th>
            <th width="25%">Email</th>
            <th width="25%">Address</th>
            <th width="20%">Operation</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result["id"]."</td>
                <td>".$result["Name"]."</td>
                <td>".$result["Email"]."</td>
                <td>".$result["Address"]."</td>
                <td><a href='update.php?i=$result[id]'><input type='submit' value='Update' class='update'></a>
                <a href='delete.php?i=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
            </tr>
            ";
    }
}
else
{
    echo "No Records Found";
}
?>
</table>

<script>
    function checkdelete()
    {
        return confirm('Are you sure !! You want to delete this record');
    }
</script>



