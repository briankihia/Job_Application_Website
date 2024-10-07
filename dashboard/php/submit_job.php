<?php

include __DIR__ . '/../../db_scripts/config/db_connection.php'; 


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  // Retrieve and sanitize input
  $jobTitle = $conn->real_escape_string($_POST['jobTitle']);
  $jobCategory = $conn->real_escape_string($_POST['jobCategory']);
  $jobLocation = $conn->real_escape_string($_POST['jobLocation']);
  $salary = $conn->real_escape_string($_POST['salary']);
  $jobType = $conn->real_escape_string($_POST['jobType']);
  $deadline = $conn->real_escape_string($_POST['deadline']);
  $jobDescription = $conn->real_escape_string($_POST['jobDescription']);

  // SQL to insert the data into the jobs table
  $sql = "INSERT INTO jobs (job_title, job_category, job_location, salary, job_type, application_deadline, job_description)
  VALUES ('$jobTitle', '$jobCategory', '$jobLocation', '$salary', '$jobType', '$deadline', '$jobDescription')";

  if ($conn->query($sql) === TRUE) {
  echo "New job posted successfully";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close connection
$conn->close();

?>