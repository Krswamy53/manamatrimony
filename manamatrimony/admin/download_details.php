<?php
require(__DIR__ . '/../fpdf/fpdf186/fpdf.php');
include "db.php"; // Include database connection

// Check if ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid request.");
}

$id = intval($_GET['id']); // Ensure ID is an integer

// Fetch user details
$query = "SELECT * FROM user_profiles WHERE id = $id";
$result = $conn->query($query);

if (!$result || $result->num_rows == 0) {
    die("User not found.");
}

$row = $result->fetch_assoc();

// Create a new PDF document
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, "User Profile: " . $row['firstName'] . " " . $row['lastName'], 0, 1, 'C');

$pdf->Ln(10); // Line break

// Check if the image URL is available
if (!empty($row['photo1_url']) && file_exists($row['photo1_url'])) {
    $pdf->Image($row['photo1_url'], 80, 20, 50, 50); // Adjust X, Y, Width, Height
    $pdf->Ln(60); // Space after image
} else {
    $pdf->Cell(190, 10, "No Profile Image Available", 0, 1, 'C');
    $pdf->Ln(10);
}

// Add user details
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, "First Name:", 0);
$pdf->Cell(100, 10, $row['firstName'], 0, 1);

$pdf->Cell(50, 10, "Last Name:", 0);
$pdf->Cell(100, 10, $row['lastName'], 0, 1);

$pdf->Cell(50, 10, "Date of Birth:", 0);
$pdf->Cell(100, 10, $row['dob'], 0, 1);

$pdf->Cell(50, 10, "Gender:", 0);
$pdf->Cell(100, 10, $row['gender'], 0, 1);

$pdf->Cell(50, 10, "Email:", 0);
$pdf->Cell(100, 10, $row['email'], 0, 1);

$pdf->Cell(50, 10, "Mobile:", 0);
$pdf->Cell(100, 10, $row['mobile'], 0, 1);

$pdf->Ln(10);

// Religion Information
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, "Religion Information", 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, "Religion:", 0);
$pdf->Cell(100, 10, $row['religion'], 0, 1);

$pdf->Cell(50, 10, "Caste:", 0);
$pdf->Cell(100, 10, $row['caste'], 0, 1);
$pdf->Ln(10);

// Education & Occupation
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, "Education & Occupation", 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, "Highest Education:", 0);
$pdf->Cell(100, 10, $row['highestEducation'], 0, 1);

$pdf->Cell(50, 10, "Occupation:", 0);
$pdf->Cell(100, 10, $row['occupation'], 0, 1);
$pdf->Ln(10);

// Family Details
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, "Family Details", 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, "Father's Occupation:", 0);
$pdf->Cell(100, 10, $row['fatherOccupation'], 0, 1);

$pdf->Cell(50, 10, "Mother's Occupation:", 0);
$pdf->Cell(100, 10, $row['motherOccupation'], 0, 1);

// Output the PDF with a filename based on the user ID
$pdf->Output('D', 'User_Profile_' . $id . '.pdf');
?>
