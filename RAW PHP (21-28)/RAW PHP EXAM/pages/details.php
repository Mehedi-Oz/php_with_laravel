<?php include('header.php') ?>

<div class="container">

    <div class="row">
        <div class="col-md-12 mt-5 text-center">
            <h1>DETAILS</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/image/<?php echo $details['image'] ?>" alt=""
                             style="height: 380px; width: 380px">
                    </div>
                    <div class="col-md-6">
                        <h4>Student Name: <?php echo $details['student_name'] ?></h4>
                        <h5>Department: <?php echo $details['department_name'] ?></h5>
                        <h5>Section: <?php echo $details['section_name'] ?></h5>
                        <h5>Subject: <?php echo $details['subject_name'] ?></h5>
                        <h5>Email: <?php echo $details['email'] ?></h5>
                        <h5>Phone: <?php echo $details['phone'] ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('footer.php') ?>
