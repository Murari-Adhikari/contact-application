<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="contact.css">
    <title>Murari contact application</title>
</head>
<body>
    <header>
        <h1> Mahendra contact app</h1>
    </header>
    <form action="adddata.php" method="post"> <!--  here post means form data should be sent to the server using the HTTP POST method -->
        <div class="main">
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" required> </br>
            <label for="contact">Number</label> <br>
            <input type="number" name="contact" id="contact" required><br>
           <input type="submit" value="Save">
        </div>
    </form>
    <hr>

    <h2>list of contact</h2>
    <table>
<tr>
    <th>Name</th>
    <th>Phone No.</th>
    <th>Action</th>

</tr>
<?php  
include 'db.php';

$sql = "SELECT * From names";
$result = mysqli_query($conn, $sql);

if ($result){
    while($row = mysqli_fetch_assoc($result)){
        $id= $row['id'];
        $name = $row['name'];
        $phone = $row['phone'];
        ?>
<tr>
<td><?php echo $name ?> </td>
<td><?php echo $phone?></td>
<td>
    <a href="edit.php? id= <?php echo $id ?>">update</a>
    <a href="delete.php? id= <?php echo $id ?> ">delete</a>
</td>
</tr>

<?php

    }
}


?>




    </table>
    
</body>
</html>