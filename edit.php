<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo APP</title>

    <!-- Icon Judul -->
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CDN Font Awesome -->
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php
    include('config.php');
    $ID = $_GET['ID'];
    $getdata = mysqli_query($connect, "SELECT * FROM list WHERE Id = '$ID'");
    $row = mysqli_fetch_array($getdata);

    ?>

    <!-- Card -->
    <div class="container">
        <h1 class="my-5"><i class="fa-sharp fa-solid fa-list"></i> <span class="text-primary">Edit</span> Hello, world!</h1>
        <div class="card shadow-lg mb-5 bg-body-tertiary rounded border-dark-subtle">
            <div class="card-body">
                <form class="d-flex" action="editdata.php" method="post">
                    <input class="form-control me-2 border-success" name="Data" value="<?php echo $row['Data'] ?>" type="text" placeholder="ماذا تريد أن تفعل اليوم ؟">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-circle-plus"></i></button>
                    <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
                </form>
            </div>
        </div>
        <!-- End Card -->
    </div>
</body>