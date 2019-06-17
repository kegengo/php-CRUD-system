<?php
if (isset($_GET['id_yetu'])){
    $recived_id = $_GET['id_yetu'];
    //connect to the db to dlete a record under the recived id row
    $conn = mysqli_connect("localhost","root","","evening_system");
    //check if the connection is succesful
    if (!$conn){
        echo "connection failed";
    }else{
        //procedd to delete
        //start with the delete query
        $deletequery = "DELETE FROM majina WHERE id=$recived_id";
        //check if the delete query if correct
        if (!$deletequery){
            echo "error on the delete query";
        }else{
            //finally proceed to delete
            $delete = mysqli_query($conn,$deletequery);
            //check if deleting was succesful
            if (!$delete){
                echo "deleting failed";
            }else{
                echo "record deleted succesfully";
                header('location:viewUsers.php');
            }
        }
    }
}