<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <table style="width:100%; border:1px solid black;">
        <tr>
            <th>ID</th>
            <th>Poster</th>
            <th>Event Name</th>
            <th>Conducted By</th>
            <th>Registration Link</th>
        </tr>
        <?php 
        // Connceting to the DB
        $con = mysqli_connect('localhost', 'root');
        mysqli_select_db($con, 'addevent');

        // Display in Slide
        $displayquery = "SELECT * FROM add_event ";
        $querydisplay = mysqli_query($con, $displayquery);
        

        while($result = mysqli_fetch_array($querydisplay)){

            ?>
                <tr>
                    <td><?php echo $result['id']?></td>
                    <td><img src="<?php echo $result['image_path']; ?>" alt="img1.jpg" height=100px; width=100px;></td>
                    <td><?php echo $result['eventname']; ?></td>
                    <td><?php echo $result['eventteam']; ?></td>
                    <td><?php echo $result['regform'];?></td>
                    <td style="margin: 5px; padding: 1px; background:red;"><a href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
                </tr>
                
            <?php
        }
    ?>
    </table>
</body>
</html>
