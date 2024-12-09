<?php include 'header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5">STUDENTS (Department)</h1>
            </div>

            <?php foreach ($students as $student): ?>
                <div class="col-md-4 mt-5 mb-5">
                    <div class="card">
                        <div class="card-header">
                            <img src="assets/image/<?php echo $student['image'] ?>" alt=""
                                 style="height: 380px; width: 380px">
                        </div>
                        <div class="card-body">
                            <h4>Student Name: <?php echo $student['student_name'] ?></h4>
                            <h5>Email: <?php echo $student['email'] ?></h5>
                            <a class="btn btn-success" href=action.php?page=details&id=<?php echo $student['id']?>>Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

<?php include 'footer.php' ?>