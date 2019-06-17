<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users page</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<a href="saveUser.php" class="btn btn-primary fixed-bottom">add users</a>
<table class="table table-hover table-striped">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>delete</th>
        <th>update</th>
    </tr>
    <?php
    //connect to the db
    $conn = mysqli_connect("localhost","root","","evening_system");
    //check if the connection was successful

    if(!$conn){
        echo "connection failed";
    }else{
        //proceed to fetch data bfrom the database
        //start by creating the select query
        $selectquery = "SELECT * FROM majina";

        if (!$selectquery){
            echo "error on the select query";
        }else{
            //fetch data
            $fetch = mysqli_query($conn,$selectquery);
            while($row = mysqli_fetch_assoc($fetch)){
                extract($row);
            echo "
            <tr>
            <td>$jina</td>
            <td>$arafa</td>
            <td><a href='delete.php?id_yetu=$id' class='btn btn-primary'>delete</a></td>
            <td><a href='update.php?id_yetu=$id&jina_yetu=$jina&arafa_yetu=$arafa&siri_yetu=$siri' class='btn btn-success'>update</a></td>
</tr>
            
            ";

        }
        }
    }
    ?>

</table>

</body>
</html>





