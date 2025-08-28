<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $action = $_POST["action"];

    if($action == 'enroll'){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"]; 
        $course = $_POST["course"]; 
        $reg_area = $_POST["reg_area"]; 

        $sql = "INSERT INTO enroll_list (name, email, phone, course, reg_area, reg_date) VALUES ('$name', '$email', '$mobile', '$course', '$reg_area', CURRENT_TIMESTAMP)";

        if ($conn->query($sql) === TRUE) {
            if($reg_area == 'brochure'){
                echo 'Download Completed';
            }else{
                echo "Registration successful";
            }

            // user email 
            $subject = "Course Registration Confirmation";
            $headers = "From: Admin@urbancode.in\r\n";
            // $headers = "From: Urban Code <Admin@urbancode.in>\r\n";
            $headers .= "Reply-To: admin@urbancode.in\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";            

            $message ='            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: auto;background: #e5eaf3;padding: 30px;max-width:700px;">
                <tr>
                    <td>
                        <a href="https://urbancode.in/" style="text-decoration:none;">
                            <div style="display: flex;text-decoration: none;color: #003585;align-items: center;">
                                <img src="https://urbancode.in/images/logo.png" alt="logo" style="width: 200px;object-fit: cover;margin-right:10px;">
                               
                            </div>
                        </a>
                        <div style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 25px 0;display:block;">
                            <h3 style="font-size: 20px;padding-bottom: 25px;margin: 0px;">Dear '.$name.',</h3>
                            <div style="margin-left: 30px;">
                                <p style=" font-size: 16px;font-weight: 600;margin: auto;margin-bottom:10px;">Registration successful.</p>
                                <p style="font-size: 16px;font-weight: 600;margin: auto;color:#000000;">Thank you for registering for the UrbanCode course.</p>
                            </div>
                        </div>
                        <tr style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 0;position:relative;display:block;">
                            <td align="left" style="width:100%;">
                                <h4 style="font-size: 18px;font-weight: 600;margin: 0px;margin-bottom: 5px;">Thanks again!</h4>
                                <h2 style="font-size: 25px;margin: 0px;">UrbanCode.in</h2>
                                <h6 style="margin: 0px;margin-top: 20px;font-size: 13px;font-weight: 600;">This is a system generated message.</h6>
                            </td>
                            <td align="right">
                                <img src="https://urbancode.in/images/footer.png" alt="footer" style="width:100px;object-fit:cover;">
                            </td>
                        </tr>
                    </td>
                </tr>
            </table>';
            $userSuccess = mail($email, $subject, $message, $headers);

            // admin email 
            $adminEmail = "chatwithkarthik.karthik@gmail.com"; 
            $adminSubject = "New User Registration";
            $adminheaders .= "MIME-Version: 1.0\r\n";
            $adminheaders .= "Content-type: text/html; charset=utf-8\r\n"; 
            $adminMessage = '
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: auto;background: #e5eaf3;padding: 30px;max-width:700px;">
                <tr>
                    <td>
                        <a href="https://urbancode.in/" style="text-decoration:none;">
                            <div style="display: flex;text-decoration: none;color: #003585;align-items: center;">
                                <img src="https://urbancode.in/images/logo.png" alt="logo" style="width: 200px;object-fit: cover;margin-right:10px;">
                                
                            </div>
                        </a>
                        <div style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 25px 0;display:block;">
                            <h3 style="font-size: 20px;padding-bottom: 25px;margin: 0px;">Dear Admin,</h3>
                            <div style="margin-left: 30px;">
                                <p style=" font-size: 16px;font-weight: 600;margin: auto;margin-bottom:10px;">New User Registration.</p>
                                <p style="font-size: 16px;font-weight: 600;margin: auto;color:#000000;">A new user '.$name.', has registered with the email: '.$email.'.</p>
                            </div>
                        </div>
                        <tr style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 0;position:relative;display:block;">
                            <td align="left" style="width:100%;">
                                <h4 style="font-size: 18px;font-weight: 600;margin: 0px;margin-bottom: 5px;">Thanks again!</h4>
                                <h2 style="font-size: 25px;margin: 0px;">UrbanCode.in</h2>
                                <h6 style="margin: 0px;margin-top: 20px;font-size: 13px;font-weight: 600;">This is a system generated message.</h6>
                            </td>
                            <td align="right">
                                <img src="https://urbancode.in/images/footer.png" alt="footer" style="width:100px;object-fit:cover;">
                            </td>
                        </tr>
                    </td>
                </tr>
            </table>';
            $adminSuccess = mail($adminEmail, $adminSubject, $adminMessage, $adminheaders); 


        } else {
            echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }

        $conn->close();
    }
}