<?php require_once 'core/dbconfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
//3
<!--  <?php
    $stmt = $pdo->prepare("SELECT * FROM Vehicles"); 

    if ($stmt->execute()){
        echo "<pre>";
        print_r($stmt->fetchAll());
        echo "<pre>";
    }
    ?> -->
//4 
<!--     <?php
    $stmt = $pdo->prepare("SELECT * FROM Vehicles"); 

    if ($stmt->execute()){
        echo "<pre>";
        print_r($stmt->fetch());
        echo "<pre>";
    }
    ?> -->
//5

<!--  <?php
    $query = "INSERT INTO Users (UserID, FirstName, LastName, Email, Phone) VALUES (?,?,?,?,?)";
    $stmt = $pdo->prepare($query); 

    $executeQuery = $stmt->execute(
        [11, "Georgwe", "Lrory", "jorji@gmweail.com", "(555) 100-0011" ]
    );
    if ($executeQuery){
        echo "Query Successful!";
    }
    else {
        echo "Query Unsuccessful!"
    }
    ?>
 -->

 //6

 <!-- <?php
    $query = "DELETE FROM Users WHERE userID = 11";
    $stmt = $pdo->prepare($query); 

    $executeQuery = $stmt->execute();
    if ($executeQuery){
        echo "Deletion Successful!";
    }
    else {
        echo "Query Unsuccessful!";
    }
    ?> -->
    
//7
<!-- <?php
    $query = "UPDATE Users SET FirstName = ?, LastName = ?, Email = ?, Phone = ?  WHERE userID = 11";
    $stmt = $pdo->prepare($query); 

    $executeQuery = $stmt->execute(
        ["Lebron", "James", "lbj@gmail.com", "0902233232"]
    );
    if ($executeQuery){
        echo "Update Successful!";
    }
    else {
        echo "Query Unsuccessful!";
    }
    ?> -->



//8
    <?php
    $query = "SELECT FirstName, LastName FROM Users
     
    ";
    $stmt = $pdo->prepare($query); 
    $executeQuery = $stmt->execute();
    if ($executeQuery){
       $clients = $stmt->fetchAll();
    }
  
    ?>
    <table style="width: 15%", border="2"> //set stylings
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
        </tr>
        <?php foreach ($clients as $row) { ?> //call all fetcheddata to each row
        <tr>
            <td><?php echo $row['FirstName']; ?></td>
            <td><?php echo $row['LastName']; ?></td>
        </tr>
        
        <?php } ?>
    </table>
</body>
</html>