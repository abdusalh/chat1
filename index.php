<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>chat</title>
    <script>
        function ag(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function (){
                if(req.readyState ==4 && req.status ==200){
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
        req.open('GET','chat.php', true);
        req.send();
        }
        setInterval (function(){ ag(), 1000});
    </script>
</head>
<body onload = "ag();">
    <div id="container">
        <div id="chat-box">
            <div id="chat">
            </div>
            <div id="chat">
            </div>

        </div>
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder = "Inter your name ">
            <textarea name="msg" placeholder = "inter your massage"></textarea>
            <input type="submit" name = "submit" value="Send">
        </form>
        <?php 
        if(isset($_POST['submit'])){
            $n = $_POST['name'];
            $m = $_POST['msg'];
            $insert = "insert into chat (name , msg) values ('$n','$m')";
            $run_insert = mysqli_query($con,$insert);
            if($run_insert){
                echo '<embed  loop = "false"  hidden = "true"  src ="mss.mp3"  autoplay = ""true>';
            }
            header('Location: index.php');
            
        }
        ?>
    </div>
</body>
</html>