<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL</title>
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
  <div class="form">
    <form action="core/handleForms.php" method="POST">
      <!-- using required to make sure it don't leave null answer -->
      <p>
        <label for="lastName">Last Name:</label> 
        <input type="text" name="lastName" required> 
      </p>
      <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required> 
      </p>
      <p>
        <label for="age">Age:</label>
        <input type="text" name="age" required> 
      </p>
      <p>
        <label for="hobby">Hobby:</label>
        <input type="text" name="hobby" required> 
      </p>
      <p>
        <label for="dreamJob">Dream Job:</label>
        <input type="text" name="dreamJob" required> 
      </p>
      <p>
        <label for="dreamSalary">Dream Salary:</label>
        <input type="text" name="dreamSalary" required> 
      </p>
      <p>
        <label for="date">Date Created:</label>
        <input type="date" name="date" required> 
      </p>
      <p style="display: flex; justify-content: center;">
    <input type="submit" name="submitBtn" value="Submit">
</p>
    </form>
  </div>
  
  <div style="text-align: center; margin-top: 50px;">
    <a href="testGetVariable.php?studentLastName=Diaz&studentAge=22">Test Get SuperGlobal</a>
  </div>

  <div style="padding: 50px;">
  <?php $showStudentRecords = showStudentRecords($pdo);?>
  <?php if ($showStudentRecords) : ?>
    <table border="1" style="margin: 0 auto; text-align: center; width: 50%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Age</th>
          <th>Hobby</th>
          <th>Dream Job</th>
          <th>Dream Salary</th>
          <th>Date Created</th>
          <th>Modify</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($showStudentRecords as $student) : ?>
          <tr>
            <td><?php echo $student['user_id']; ?></td>
            <td><?php echo $student['last_name']; ?></td>
            <td><?php echo $student['first_name']; ?></td>
            <td><?php echo $student['age']; ?></td>
            <td><?php echo $student['hobby']; ?></td>
            <td><?php echo $student['dream_job']; ?></td>
            <td><?php echo $student['dream_salary']; ?></td>
            <td><?php echo $student['date_created']; ?></td>
            <td>
              <a href="editstudent.php?user_id=<?php echo $student['user_id']; ?>">Edit</a>
              <a href="deletestudent.php?user_id=<?php echo $student['user_id']; ?>">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else : ?>
    <p style="text-align: center;">No records found!</p>
  <?php endif; ?>
  </div>
</body>
</html>