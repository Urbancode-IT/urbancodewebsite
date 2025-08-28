<?php
require_once "config.php";
require "src/PHPMailer.php";
require "src/SMTP.php";
require "src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $course = htmlspecialchars(trim($_POST['course']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Admin email where the form details will be sent
    $admin_email = "admin@urbancode.in"; // Replace with the admin's email address

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                           // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                  // Enable SMTP authentication
        $mail->Username   = 'admin@urbancode.in';                  // SMTP username
        $mail->Password   = 'kabf aprg lmsp fhmo';                // SMTP password (use app-specific password for Gmail with 2FA)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS for SSL
        $mail->Port       = 587;                                   // TCP port to connect to

        // Recipients for Admin Email
        $mail->setFrom('no-reply@urbancode.in', 'UrbanCode');     // Set sender's email and name
        $mail->addAddress($admin_email);                           // Add a recipient (admin)
        
        // Content for Admin Email
        $mail->isHTML(true);                                       // Set email format to HTML
        $mail->Subject = 'New Enrollment - Freshers Placement Program';
        $mail->Body = "
            <table width='100%' border='0' cellspacing='0' cellpadding='0' style='margin: auto; background: #f4f4f9; padding: 30px; max-width: 700px; font-family: Arial, sans-serif;'>
                <tr>
                    <td>
                        <a href='https://urbancode.in/' style='text-decoration: none;'>
                            <div style='text-align: center; margin-bottom: 20px;'>
                                <img src='https://urbancode.in/images/logo.png' alt='logo' style='width: 150px; object-fit: cover;'>
                            </div>
                        </a>
                        <div style='background: #ffffff; padding: 40px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>
                            <h2 style='font-size: 24px; color: #333333; text-align: center;'>New Enrollment Details</h2>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' style='margin-top: 20px;'>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Name:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$name}</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Email:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$email}</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Phone Number:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$phone}</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Course:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$course}</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Message:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$message}</td>
                                </tr>
                            </table>
                            <div style='text-align: center; margin-top: 30px;'>
                                <a href='https://urbancode.in/courses' style='background: #01af6a; color: #ffffff; padding: 15px 30px; text-decoration: none; font-size: 16px; border-radius: 5px; display: inline-block;'>Explore More Courses</a>
                            </div>
                        </div>
                        <div style='text-align: center; margin-top: 20px;'>
                            <img src='https://urbancode.in/images/footer.png' alt='footer' style='width: 100px; object-fit: cover;'>
                        </div>
                        <p style='font-size: 12px; color: #aaaaaa; text-align: center; margin-top: 10px;'>This is an automated message, please do not reply.</p>
                    </td>
                </tr>
            </table>
        ";

        // Send the email to the admin
        $mail->send();

        // Prepare and send the Thank You email to the student
        $mail->clearAddresses(); // Clear previous recipient (admin)
        $mail->addAddress($email); // Add student as the recipient

        // Content for Student Thank You Email
        $mail->Subject = 'Thank You for Enrolling in the Freshers Placement Program';
        $mail->Body = "
            <table width='100%' border='0' cellspacing='0' cellpadding='0' style='margin: auto; background: #f4f4f9; padding: 30px; max-width: 700px; font-family: Arial, sans-serif;'>
                <tr>
                    <td>
                        <a href='https://urbancode.in/' style='text-decoration: none;'>
                            <div style='text-align: center; margin-bottom: 20px;'>
                                <img src='https://urbancode.in/images/logo.png' alt='logo' style='width: 150px; object-fit: cover;'>
                            </div>
                        </a>
                        <div style='background: #ffffff; padding: 40px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>
                            <h2 style='font-size: 24px; color: #333333;'>Dear {$name},</h2>
                            <p style='font-size: 16px; color: #555555; line-height: 1.5; margin-top: 20px;'>
                                Thank you for enrolling in our Freshers Placement Program. We have received your details and will contact you soon with more information.
                            </p>
                            <p style='font-size: 16px; color: #555555; line-height: 1.5; margin-top: 20px;'>
                                Here are the details you provided:
                            </p>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' style='margin-top: 20px;'>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Name:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$name}</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Email:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$email}</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Phone Number:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$phone}</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Course:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$course}</td>
                                </tr>
                                <tr>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'><strong>Message:</strong></td>
                                    <td style='font-size: 16px; color: #555555; padding: 10px 0;'>{$message}</td>
                                </tr>
                            </table>
                            <p style='font-size: 16px; color: #555555; line-height: 1.5; margin-top: 30px;'>
                                Best regards,<br>Placement Program Team
                            </p>
                        </div>
                        <div style='text-align: center; margin-top: 20px;'>
                            <img src='https://urbancode.in/images/footer.png' alt='footer' style='width: 100px; object-fit: cover;'>
                        </div>
                        <p style='font-size: 12px; color: #aaaaaa; text-align: center; margin-top: 10px;'>This is an automated message, please do not reply.</p>
                    </td>
                </tr>
            </table>
        ";
        
        // Send the thank you email to the student
        $mail->send();

        echo "<script>alert('Thank you for enrolling! We will contact you soon.');</script>";
    } catch (Exception $e) {
        echo "<script>console.error('Mailer Error: " . addslashes($mail->ErrorInfo) . "');</script>";
        echo "<script>alert('Sorry, something went wrong. Please try again later.'); window.history.go(-1);</script>";
    }
    
}
?>
