<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        
        $mailTo = "pradyneel@gmail.com";
        $headers = "From: ".$mailFrom;

        
        $txt = "You have recieved an e-mail from".$name.".\n\n".$message;

        mail($mailTo, $phone, $txt, $headers);
        header("Location:index.php?mailsend");
    }
?>