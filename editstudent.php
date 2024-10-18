<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="title">
    <h1>STUDENT MANAGEMENT SYSTEM</h1>
  </div>

  <?php $getStudentId = getStudentId($pdo, $_GET['user_id']); ?>
  <div class="form">
    <form action="core/handleForms.php" method="POST">
      <input type="hidden" name="user_id" value="<?php echo $getStudentId['user_id']; ?>">
      <p>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value="<?php echo $getStudentId['last_name']; ?>" required>
      </p>
      <p>
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" value="<?php echo $getStudentId['first_name']; ?>" required>
      </p>
      <p>
        <label for="age">Age</label>
        <input type="text" name="age" value="<?php echo $getStudentId['age']; ?>" required>
      </p>
      <p>
        <label for="hobby">Hobby</label>
        <input type="text" name="hobby" value="<?php echo $getStudentId['hobby']; ?>" required>
      </p>
      <p>
        <label for="dreamJob">Dream Job</label>
        <input type="text" name="dreamJob" value="<?php echo $getStudentId['dream_job']; ?>" required>
      </p>
      <p>
        <label for="dreamSalary">Dream Salary</label>
        <input type="text" name="dreamSalary" value="<?php echo $getStudentId['dream_salary']; ?>" required>
      </p>
      <div style="text-align: center; margin-top: 50px;">
        <input type="submit" name="editBtn" value="Edit">
      </p>
    </form>
  </div>
</body>
</html>