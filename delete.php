<?php 
    // Connceting to the DB
    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'addevent');

    $id = $_GET['id'];
    $path = "SELECT * FROM add_event  where id = $id";

    $query2 = mysqli_query($con, $path);
    $result = mysqli_fetch_array($query2);

    unlink("$result[image_path]");    
   
    if($status){  
        echo "File deleted successfully";    
    }else{  
        echo "Sorry!";    
    }  
    $deletequery = "delete from add_event where id = $id";
    
    $query = mysqli_query($con, $deletequery);

    if($query){
        ?>
            <script>
                alert("Delete Successful");
            </script>
        <?php
    }else{
        ?>
        <script>

            alert("Not Deleted");
        </script>
        <?php
    }

    header('location:index.php');
?>