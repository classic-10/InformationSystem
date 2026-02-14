<?php 
    $connection = mysqli_connect("localhost", "root", "", "informationsystem");

    if(!$connection) {
        die('Connection Failed'. mysql_connect_error());
    }

    if(isset($_POST['delete_data'])){
        $id = mysqli_real_escape_string($connection, $_POST['data_id']);
        $query = "DELETE FROM userinfo WHERE Id = '$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            $result = ["status" => 200, "message" => "Deleted Successfully!"];
        }else{
            $result = ["status" => 500, "message" => " Not Deleted!"];
        }
        echo json_encode($result);
        return;
    }
?>