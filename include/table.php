<div>
    <div class="col-md-6">
        <div class="card card-body">
            <h4 class="modal-title w-100 font-weight-bold text-center">
                <i class="fas fa-user-plus"></i>
            </h4>
            <!-- Table -->
            <table class="table">
                <thead>
                    <th>StuID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </thead>
                <tbody>
                    <?php
                    include('include/config.php');

                    $sql = "SELECT * FROM records";

                    $result = mysqli_query($con, $sql);
                    ?>
                    <tr>
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                    </tr>
                    <td><?php echo "$row[studentid]" ?></td>
                    <td><?php echo "$row[name]" ?></td>
                    <td><?php echo "$row[email]" ?></td>
                    <td><?php echo "$row[phone]" ?></td>
                    <td>
                        <a href="editform.php?name = <?php $row['name']?>" class="btn btn-orange btn-sm"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="delete.php?name = <?php $row['name']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></i></a>
                    </td>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>