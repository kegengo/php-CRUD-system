

<?php

/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 5:55 PM
 */

if (isset($_POST['btn_save'])){
    $inputedName = $_POST['x'];
    $inputedEmail = $_POST['y'];
    $inputedPassword = $_POST['z'];
    //connect to the db
    $conn = mysqli_connect("localhost","root","","evening_system");

    if(!$conn){
        echo "connection failed";
    }else{
        $insertQuery = "INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$inputedName','$inputedEmail','$inputedPassword')";
        if(!$insertQuery){
            echo"error on the insert querry";
        }else{
            $save = mysqli_query($conn,$insertQuery);

            if (!$save){
                echo "saving failed";
            }else{
                echo "data saved successfully";
                header('location:saveUser.php');
            }
        }
    }
}

?>