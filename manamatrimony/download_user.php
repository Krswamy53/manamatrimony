<?php
session_start();
require_once 'fpdf/fpdf186/fpdf.php';
include('db.php'); // Include your database connection

if (!isset($_SESSION['id'])) {
    die("Access Denied. Please log in.");
}

$user_id = $_SESSION['id'];

// Fetch user details from database
$query = "SELECT firstName, lastName, email, mobile, gender, dob, maritalStatus, highestEducation, occupation, annualIncome, inputCity, inputState, inputCountry, smokingHabits, familyType, familyValue, photo1_url FROM user_profiles WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("User not found.");
}

$user = $result->fetch_assoc();

// Define image path
$localImagePath = "C:/xampp/htdocs/manamatrimony/" . $user['photo1_url'];
$imageExists = (!empty($user['photo1_url']) && file_exists($localImagePath)) ? $localImagePath : "C:/xampp/htdocs/subhalekha/default.jpg";

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Title with center alignment
$pdf->Cell(190, 10, "User Profile: " . $user['firstName'] . " " . $user['lastName'], 0, 1, 'C');

$pdf->Ln(10); // Line break

// Profile Image (if exists)
if (file_exists($imageExists)) {
    $pdf->Image($imageExists, 75, 25, 60, 60); // Centered profile image
    $pdf->Ln(70); // Adjust spacing below image
} else {
    $pdf->SetFont('Arial', 'I', 12);
    $pdf->Cell(190, 10, 'No Profile Image Available', 0, 1, 'C');
    $pdf->Ln(10);
}

// Set font for table
$pdf->SetFont('Arial', '', 12);

// Define table headers and data
$fields = [
    'First Name' => $user['firstName'],
    'Last Name' => $user['lastName'],
    'Email' => $user['email'],
    'Mobile' => $user['mobile'],
    'Gender' => $user['gender'],
    'Date of Birth' => $user['dob'],
    'Marital Status' => $user['maritalStatus'],
    'Highest Education' => $user['highestEducation'],
    'Occupation' => $user['occupation'],
    'Annual Income' => $user['annualIncome'],
    'City' => $user['inputCity'],
    'State' => $user['inputState'],
    'Country' => $user['inputCountry'],
    'Smoking Habits' => $user['smokingHabits'],
    'Family Type' => $user['familyType'],
    'Family Value' => $user['familyValue']
];

// Table layout with styling
$pdf->SetFillColor(230, 230, 230); // Light gray background for header
$pdf->SetFont('Arial', 'B', 11);

foreach ($fields as $key => $value) {
    $pdf->Cell(60, 10, $key . ':', 1, 0, 'L', true);
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(130, 10, utf8_decode($value), 1, 1, 'L');
    $pdf->SetFont('Arial', 'B', 11);
}

// Output PDF for download
$pdf->Output('D', "User_Profile_$user_id.pdf"); // 'D' forces download
exit;
?>
