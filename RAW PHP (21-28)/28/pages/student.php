<?php include 'header.php' ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-danger table-hover text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>

                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td> <?php echo $student['id'] ?> </td>
                                <td> <?php echo $student['name'] ?> </td>
                                <td> <?php echo $student['phone'] ?> </td>
                                <td>
                                    <?php
                                    if (is_array($student['email'])) {
                                        foreach ($student['email'] as $value) {
                                            echo $value.'<br>';
                                        }
                                    } else {
                                        echo $student['email'];
                                    }
                                    ?>
                                </td>
                                <td> <?php echo $student['address'] ?> </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php' ?>