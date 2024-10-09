<!-- job_controller.php -->
<?php
// Database connection (assume you already have a config file)
include __DIR__ . '/../../db_scripts/config/db_connection.php';  // Make sure this contains your database connection code

// Fetch job data based on job_id
function fetchJob($job_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM jobs WHERE id = ?");
    $stmt->bind_param("i", $job_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc(); // Returns an associative array
}

// Update job in the database
if (isset($_POST['update_job'])) {
    $job_id = $_POST['job_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $job_type = $_POST['job_type'];

    // Update job query
    $stmt = $conn->prepare("UPDATE jobs SET job_title = ?,job_description = ?, job_location = ?, salary = ?, job_type = ? WHERE id = ?");
    $stmt->bind_param("sssisi", $title, $description, $location, $salary, $job_type, $job_id);

    if ($stmt->execute()) {
        echo "Job updated successfully!";
        header("Location: ../index.php"); // Redirect to job listing page
    } else {
        echo "Error updating job: " . $conn->error;
    }
}
?>
