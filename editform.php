<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Registration</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Get Student Information -->
    <?php
        include('include/config.php');

        $name = $_GET['name'];

        $sql = "SELECT * FROM records WHERE name='$name'";

        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);


    ?>
    
    <?php include('include/header.php') ?>

    <div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card card-body">
            <h4 class="modal-title w-100 font-weight-bold text-center"><i class="fas fa-edit"></i> Edit Student
            </h4>
            <!-- form -->
            <form action="edit.php" method="POST">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="studentid" name="studentid" class="form-control validate" required readonly value="<?php echo $row['studentid'] ?>">
                        <label data-error="wrong" data-success="right" for="studentid"></label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="name" name="name" class="form-control validate" value="<?php echo $row['name'] ?>">
                        <label data-error="wrong" data-success="right" for="name"></label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="email" name="email" class="form-control validate" value="<?php echo $row['email'] ?>">
                        <label data-error="wrong" data-success="right" for="email"></label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fa fa-phone prefix grey-text"></i>
                        <input type="text" id="phone" name="phone" class="form-control validate" value="<?php echo $row['phone'] ?>">
                        <label data-error="wrong" data-success="right" for="phone"></label>
                    </div>

                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" id="alert-target" class="btn btn-default"><i class="fas fa-plus"></i>
                        Add</button>
                    <button type="reset" class="btn btn-deep-orange"><i class="fas fa-undo"></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <?php include('include/footer.php') ?>




    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>