
<?php
include('db.php');
    $query = "select * from chat ORDER BY id ";
    $run = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($run)){
        $name = $row['name'];
        $msg = $row['msg'];
        $date = $row['date'];
    ?>
    <div id="data">
        <span style ="color: yellow;"><?php echo $name; ?></span>
        <span>:</span>
        <span><?php echo $msg; ?></span>
        <span style= "color: tomato; float:right"><?php echo $date; ?> </span>
    </div>
    <?php } ?>