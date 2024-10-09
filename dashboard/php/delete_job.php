<?php
// Database connection
// below helps the document to find files by first going back upto the folder job_application_website
include __DIR__ . '/../../db_scripts/config/db_connection.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the job ID from the form
    $job_id = $_POST['job_id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM jobs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $job_id);

    if ($stmt->execute()) {

      echo "<script>
        alert('Job deleted successfully');
        window.location.href = '../index.php';
      </script>";

        // Redirect back to the jobs list with success message
        // header("Location: index.php?success=Job deleted successfully");
        // exit();
    } else {

      echo "<script>
        alert('Failed to delete job');
        window.location.href = '../index.php';
    </script>";

        // Handle error
        // header("Location: index.php?error=Failed to delete job");
        // exit();
    }
    exit();

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>
