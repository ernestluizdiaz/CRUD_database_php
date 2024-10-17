<!-- Purpose: This file contains the functions that interact with the database. -->

<?php

require_once 'dbConfig.php';

// Insert records into the database
function insertRecords($pdo, $last_name, $first_name, $age, $hobby, $dream_job, $dream_salary, $date_created) {
  $sql = "INSERT INTO dreams (last_name, first_name, age, hobby, dream_job, dream_salary, date_created) VALUES (?, ?, ?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$last_name, $first_name, $age, $hobby, $dream_job, $dream_salary, $date_created]);
}

// Show all students table 
function showStudentRecords($pdo) {
  $sql = "SELECT * FROM dreams";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    $results = $stmt->fetchAll();
    return $results;
  } else {
    return false;
  }
}

// Getting student id
function getStudentId($pdo, $user_id) {
  $sql = "SELECT * FROM dreams WHERE user_id = ?";
  $stmt = $pdo->prepare($sql);
  if ($stmt->execute([$user_id])) {
    return $stmt->fetch();
}
}

// Update student records
function updateStudentRecords($pdo, $last_name, $first_name, $age, $hobby, $dream_job, $dream_salary, $user_id) {
  $sql = "UPDATE dreams SET last_name = ?, first_name = ?, age = ?, hobby = ?, dream_job = ?, dream_salary = ? WHERE user_id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$last_name, $first_name, $age, $hobby, $dream_job, $dream_salary, $user_id]);
}

// Delete student records
function deleteStudentRecords($pdo, $user_id) {
  $sql = "DELETE FROM dreams WHERE user_id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$user_id]);
}
?>