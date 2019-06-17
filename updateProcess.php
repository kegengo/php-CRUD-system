


<?php
    if (isset($_POST['btn_update'])){
        $receive_id = $_POST['w'];
        $receive_name = $_POST['x'];
        $receive_email = $_POST['y'];
        $receive_password = $_POST['z'];

        //to update, connect to the db
        $conn = mysqli_connect("localhost","root","","evening_system");
        //check if the connection is successful
        if (!$conn){
            echo "connection failed";
        }else{
            //proceed to update the data
            //start by creating the update query
            $updateQuery = "UPDATE majina SET jina='$receive_name',arafa='$receive_email',siri='$receive_password' WHERE id='$receive_id'";
            //check if the update query is correct
            if (!$updateQuery){
                echo "error on the update query";
            }else{
                //proceed to final update
                $update = mysqli_query($conn,$updateQuery);
                //check if the update was successful

                if (!$update){
                    echo"updating failed";
                }else{
                    echo "record successfully updated";
                    header('location:viewUsers.php');
                }
            }
        }
    }
