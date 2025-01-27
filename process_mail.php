<?php
// Your Mailjet API credentials
$apiKey = 'f47125db639bc5d9e32d8e7013f8b30b';
$apiSecret = 'f27bef80614f40dfdced079427caeea0';

// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   // echo "Form data submitted successfully.<br>";

    // Sanitize and gather form inputs
    $companyName = htmlspecialchars($_POST['company_name'] ?? '');
    $websiteUrl = htmlspecialchars($_POST['website_url'] ?? '');
    $phoneNumber = htmlspecialchars($_POST['phone_number'] ?? '');
    $firstName = htmlspecialchars($_POST['first_name'] ?? '');
    $lastName = htmlspecialchars($_POST['last_name'] ?? '');
    $jobTitle = htmlspecialchars($_POST['job_title'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $mobilePhone = htmlspecialchars($_POST['mobile_phone'] ?? '');
    $exhibitionName = htmlspecialchars($_POST['exhibition_name'] ?? '');
    $startDate = htmlspecialchars($_POST['start_date'] ?? '');
    $hallAndStand = htmlspecialchars($_POST['hall_and_stand'] ?? '');
    $standSize = htmlspecialchars($_POST['stand_size'] ?? '');
    $sidesOpen = htmlspecialchars($_POST['sides_open'] ?? '');
    $pillarSpace = htmlspecialchars($_POST['pillar_space'] ?? '');
    $brandUnderstanding = htmlspecialchars($_POST['brand_understanding'] ?? '');
    $keyMessage = htmlspecialchars($_POST['key_message'] ?? '');

  //  echo "Form inputs sanitized and gathered.<br>";

    // Construct email message
    $message = "<h3>New Form Submission</h3>";
    $message .= "<p><strong>Company Name:</strong> $companyName</p>";
    $message .= "<p><strong>Website URL:</strong> $websiteUrl</p>";
    $message .= "<p><strong>Phone Number:</strong> $phoneNumber</p>";
    $message .= "<p><strong>First Name:</strong> $firstName</p>";
    $message .= "<p><strong>Last Name:</strong> $lastName</p>";
    $message .= "<p><strong>Job Title:</strong> $jobTitle</p>";
    $message .= "<p><strong>Email:</strong> $email</p>";
    $message .= "<p><strong>Mobile Phone:</strong> $mobilePhone</p>";
    $message .= "<p><strong>Exhibition Name:</strong> $exhibitionName</p>";
    $message .= "<p><strong>Start Date:</strong> $startDate</p>";
    $message .= "<p><strong>Hall and Stand:</strong> $hallAndStand</p>";
    $message .= "<p><strong>Stand Size:</strong> $standSize</p>";
    $message .= "<p><strong>Sides Open:</strong> $sidesOpen</p>";
    $message .= "<p><strong>Pillar Space:</strong> $pillarSpace</p>";
    $message .= "<p><strong>Brand Understanding:</strong> $brandUnderstanding</p>";
    $message .= "<p><strong>Key Message:</strong> $keyMessage</p>";

    //echo "Message constructed.<br>";

    $uploadedFile = $_FILES['upload_file'] ?? null;

    if ($uploadedFile) {

        if ($uploadedFile['error'] === UPLOAD_ERR_OK) {

            $uploadDirectory = __DIR__ . '/uploads/';
            if (!is_dir($uploadDirectory)) {
                if (mkdir($uploadDirectory, 0777, true)) {
                } else {
                }
            }

            $uploadedFilePath = $uploadDirectory . basename($uploadedFile['name']);
            if (move_uploaded_file($uploadedFile['tmp_name'], $uploadedFilePath)) {
                $fileUrl = "http://localhost/pride_expo/uploads/" . basename($uploadedFile['name']);
                $message .= "<p><strong>Uploaded File:</strong> <a href=\"$fileUrl\" target=\"_blank\">Download File</a></p>";
            } else {
                $message .= "<p><strong>Uploaded File:</strong> Failed to upload.</p>";
            }
        } else {
        }
    } else {
    }

    // Mailjet API endpoint
    $url = 'https://api.mailjet.com/v3.1/send';

    // Email payload
    $data = [
        'Messages' => [
            [
                'From' => [
                    'Email' => 'notifications.prideexpo@gmail.com',
                    'Name' => 'Form Submission'
                ],
                'To' => [
                    [
                        'Email' => 'prideexposolutions@gmail.com',
                        'Name' => 'Recipient Name'
                    ]
                ],
                'Subject' => "New Form Submission from $companyName",
                'TextPart' => strip_tags($message),
                'HTMLPart' => $message
            ]
        ]
    ];


    // Initialize cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_USERPWD, "$apiKey:$apiSecret");


    // Execute cURL request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'cURL Error: ' . curl_error($ch) . "<br>";
    } else {
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        echo "cURL response code: $httpCode<br>";
        if ($httpCode == 200) {
          header("Location: thank-you.php");
          exit();
        } else {
            echo "Failed to send email. Response: " . $response . "<br>";
        }
    }

    // Close cURL session
    curl_close($ch);
    echo "cURL session closed.<br>";
}
?>
