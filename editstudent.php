<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;

    }

    .title {
      text-align: center;
      margin: 50px;
    }

    h1 {
      font-size: 2.5rem;
      color: #333;
    }

    .form {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      background-color: #fff;
      padding-left: 20px;
      padding-right: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    p {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-size: 1rem;
      margin-bottom: 5px;
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
      justify-content: center;
      width: 300px;
      transition: background-color 0.3s;
      
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
      
    }

  </style>
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