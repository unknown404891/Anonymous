<?php
// Path to the CV file
$cvFilePath = 'Jimenez_Resume.pdf';

// Check if the file exists
if (file_exists($cvFilePath)) {
    // Set headers for file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf'); // Change the content type based on your file type
    header('Content-Disposition: attachment; filename="'.basename($cvFilePath).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($cvFilePath));
    // Read the file and output it to the browser
    readfile($cvFilePath);
    exit;
} else {
    // Handle file not found error
    echo 'CV file not found.';
}
?>
