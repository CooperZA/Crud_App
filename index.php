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

    <?php include('include/header.php') ?>

    <?php include('include/table.php') ?>

    <?php include('include/footer.php') ?>



    <!-- Modal Form -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add New Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form action="add.php" method="POST">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="studentid" name="studentid" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="studentid">Your StudentID</label>
                            </div>
                            <div class="md-form mb-5">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="name" name="name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="name">Your Name</label>
                            </div>
                            <div class="md-form mb-5">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="email" id="email" name="email" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="email">Your Email</label>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fa fa-phone prefix grey-text"></i>
                                <input type="text" id="phone" name="phone" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="phone">Your Phone</label>
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
    </div>

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