<?php include 'header.php' ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-success table-bordered text-center">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Address</th>
        </tr>

        <?php foreach ($students as $student): ?>
          <tr>
            <th><?php echo $student['id'] ?></th>
            <th><?php echo $student['name'] ?></th>
            <th><?php echo $student['phone'] ?></th>
            <th>
              <?php
              if (is_array($student['email'])) {
                foreach ($student['email'] as $value) {
                  echo $value . '<br>';
                }
              } else {
                echo $student['email'];
              }
              ?>
            </th>
            <th><?php echo $student['address'] ?></th>
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</div>

<?php include 'footer.php' ?>