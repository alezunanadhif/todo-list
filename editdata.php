<?php

include('config.php');

$id = $_POST['Id'];
$data = $_POST['Data'];

mysqli_query($connect, "UPDATE list SET Data='$data' WHERE Id='$id'");
header("location:index.php");