<!-- Purpose: Handle form data from index.php and insert into database -->

<?php

require_once 'dbConfig.php';
require_once 'models.php';

// When the submit button is clicked on the form in index.php, the form data is sent to the server
if (isset($_POST['submitBtn'])) {
  $last_name = $_POST['lastName'];
  $first_name = $_POST['firstName'];
  $age = $_POST['age'];
  $hobby = $_POST['hobby'];
  $dream_job = $_POST['dreamJob'];
  $dream_salary = $_POST['dreamSalary'];
  $date_created = date('Y-m-d H:i:s');

  if (!empty($last_name) && !empty($first_name) && !empty($age) && !empty($hobby) && !empty($dream_job) && !empty($dream_salary)) {
    insertRecords($pdo, $last_name, $first_name, $age, $hobby, $dream_job, $dream_salary, $date_created);
    echo "Record inserted successfully!<br>";
    echo '<a href="../index.php">Go back to index</a>';
  } else {
    echo "Failed to insert record!<br>";
    echo '<a href="../index.php">Go back to index</a>';
  }
}

if (isset($_POST['editBtn'])) {
  $user_id = $_POST['user_id'];
  $last_name = $_POST['lastName'];
  $first_name = $_POST['firstName'];
  $age = $_POST['age'];
  $hobby = $_POST['hobby'];
  $dream_job = $_POST['dreamJob'];
  $dream_salary = $_POST['dreamSalary'];
  updateStudentRecords($pdo, $last_name, $first_name, $age, $hobby, $dream_job, $dream_salary, $user_id);
  if (!empty($last_name) && !empty($first_name) && !empty($age) && !empty($hobby) && !empty($dream_job) && !empty($dream_salary)) {
    echo "Record updated successfully! <br>";
    echo '<a href="../index.php">Go back to index</a>';
  } else {
    echo "Failed to update record!";
    echo '<a href="../index.php">Go back to index</a>';
  }
}


if (isset($_POST['deleteBtn'])) {
  $user_id = $_POST['user_id'];
  deleteStudentRecords($pdo, $user_id);
  if (!empty($user_id)) {
    echo "Record deleted successfully! <br>";
      echo '<a href="../index.php">Go back to index</a>';
  } else {
    echo "Failed to delete record!";
    echo '<a href="../index.php">Go back to index</a>';
  }
}



?>