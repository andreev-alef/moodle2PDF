<!DOCTYPE html>
<html>
    <head>
        <title>2pdf</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>table, td{border: #000 solid 2mm;}</style>
    </head>
    <body>

        <?php
        $nmc_db = new mysqli('192.168.0.2', 'nmc42', 'wasd---===', 'nmc42test');
        $sql = 'select nmc42mdl_user.id, nmc42mdl_user.firstname, nmc42mdl_user.lastname from nmc42mdl_user ORDER by nmc42mdl_user.lastname;';
        $nmc_result = $nmc_db->query($sql);
        $data_rows = $nmc_result->fetch_all(MYSQLI_ASSOC);
        $N = $nmc_result->num_rows;
        for($i=0;$i<$N;$i++){
        ?>
        <div><a href="./print.php?userid=<?php echo $data_rows[$i]['id']; ?>" target="_blank"><?php echo $data_rows[$i]['lastname']; ?> <?php echo $data_rows[$i]['firstname']; ?></a></div>
        <?php } ?>

    </body>
</html>

