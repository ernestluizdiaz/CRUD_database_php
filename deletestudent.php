<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="title">
    <h1>STUDENT MANAGEMENT SYSTEM</h1>
  </div>

  <?php $getStudentId = getStudentId($pdo, $_GET['user_id']); ?>
  <div class="form">
    <form action="core/handleForms.php" method="POST">
      <h2 style="text-align: center;">ARE YOU SURE YOU WANT TO DELETE THIS USER?</h2>
      <input type="hidden" name="user_id" value="<?php echo $getStudentId['user_id']; ?>" readonly>
      <p>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value="<?php echo $getStudentId['last_name']; ?>" readonly>
      </p>
      <p>
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" value="<?php echo $getStudentId['first_name']; ?>" readonly>
      </p>
      <p>
        <label for="age">Age</label>
        <input type="text" name="age" value="<?php echo $getStudentId['age']; ?>" readonly>
      </p>
      <p>
        <label for="hobby">Hobby</label>
        <input type="text" name="hobby" value="<?php echo $getStudentId['hobby']; ?>" readonly>
      </p>
      <p>
        <label for="dreamJob">Dream Job</label>
        <input type="text" name="dreamJob" value="<?php echo $getStudentId['dream_job']; ?>" readonly>
      </p>
      <p>
        <label for="dreamSalary">Dream Salary</label>
        <input type="text" name="dreamSalary" value="<?php echo $getStudentId['dream_salary']; ?>" readonly>
      </p>
      <div style="text-align: center; margin-top: 50px;">
        <input type="submit" name="deleteBtn" value="Delete">
      </p>
    </form>
  </div>
</body>
</html>