<div class="row d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card card-body">
            <!-- table -->
            <div class="d-flex table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>StudentID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include('include/config.php');

                        $sql = "SELECT * FROM records";

                        $result = mysqli_query($con, $sql);
                    ?>
                    <tr>
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                    </tr>
                        <td><?php echo "$row[studentid]" ?></td>
                        <td><?php echo "$row[name]" ?></td>
                        <td><?php echo "$row[email]" ?></td>
                        <td><?php echo "$row[phone]" ?></td>
                        <td>
                            <a href="editform.php?name=<?php echo $row['name'] ?>" class="btn btn-orange btn-sm"><i class="fas fa-edit"></i></a>
                        </td>
                        <td>
                            <a href="delete.php?name=<?php echo $row['name']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        <?php } ?>
                </tbody>

            </table>
            </div>
            
        </div>
    </div>
</div>