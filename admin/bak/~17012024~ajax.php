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

            if($name != 'Brochure'){
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
                                    <p style="font-size: 16px;font-weight: 600;margin: auto;color:#000000;">Thank you for registering for the Urbancode course.</p>
                                </div>
                            </div>
                            <tr style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 0;position:relative;display:block;">
                                <td align="left" style="width:100%;">
                                    <h4 style="font-size: 18px;font-weight: 600;margin: 0px;margin-bottom: 5px;">Thanks again!</h4>
                                    <h2 style="font-size: 25px;margin: 0px;">Urbancode.in</h2>
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
            }

            if($name == 'Brochure'){
                $reg = '';
                $content = 'A New User Downloaded Brochure with the Email: '.$email.'. and Phone: '.$mobile;
            }else{ 
                $reg = '<p style=" font-size: 16px;font-weight: 600;margin: auto;margin-bottom:10px;">New User Registration.</p>';
                $content = 'A new user '.$name.', has registered with the Email: '.$email.'. and Phone: '.$mobile;
            }

            // admin email 
            $adminEmail = "info@urbancode.in"; 
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
                                '.$reg.'
                                
                                <p style="font-size: 16px;font-weight: 600;margin: auto;color:#000000;">'.$content.'</p>
                            </div>
                        </div>
                        <tr style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 0;position:relative;display:block;">
                            <td align="left" style="width:100%;">
                                <h4 style="font-size: 18px;font-weight: 600;margin: 0px;margin-bottom: 5px;">Thanks again!</h4>
                                <h2 style="font-size: 25px;margin: 0px;">Urbancode.in</h2>
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

    }else if($action == 'contactForm'){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"]; 

        $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {            
            echo "Registration successful";
            
            $content = 'You have a new inquiry from a user who has just registered. Here are the details: <br><br><i>
            - Name: '.$name.',<br>
            - Email: '.$email.',<br>
            - Message: '.$message.'<br><br></i>
            Please review and respond promptly to assist the user with their inquiry.';

            // admin email 
            $adminEmail = "info@urbancode.in"; 
            $adminSubject = "New Inquiry";
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
                                <p style="font-size: 16px;font-weight: 600;margin: auto;color:#000000;">'.$content.'</p>
                            </div>
                        </div>
                        <tr style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 0;position:relative;display:block;">
                            <td align="left" style="width:100%;">
                                <h4 style="font-size: 18px;font-weight: 600;margin: 0px;margin-bottom: 5px;">Thanks again!</h4>
                                <h2 style="font-size: 25px;margin: 0px;">Urbancode.in</h2>
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

        }
    }else if($action == 'studyAbroadForm'){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"]; 
        $edu_level = $_POST["edu_level"]; 
        $field_interest = $_POST["field_interest"]; 
        $current_institute = $_POST["current_institute"]; 
        $intake = $_POST["intake"];
        $country_interes = $_POST["country_interes"]; 
        $preferred_course = $_POST["preferred_course"]; 
        $score = $_POST["score"]; 
        $one = $_POST["one"]; 
        $two = $_POST["two"]; 

        $sql = "INSERT INTO study_abroad (name, email, phone, education_level, field_of_study, current_institution, admission_intake, preferred_country, preferred_course, toefl_ielts_pte_score, score, need_training) VALUES ('$name', '$email', '$phone', '$edu_level', '$field_interest', '$current_institute', '$intake', '$country_interes', '$preferred_course', '$score', '$one', '$two')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";

            $content .= 'You have a new inquiry from a user interested in studying abroad. Here are the details: <br><br><i>
            - Name: '.$name.',<br>
            - Email: '.$email.',<br>
            - Phone: '.$phone.',<br>
            - Current Educational Level: '.$edu_level.',<br>
            - Field of Study/Interest: '.$field_interest.',<br>
            - Current Institution/University: '.$current_institute.',<br>
            - Admission Intake: '.$intake.',<br>
            - Preferred Country of Interes: '.$country_interes.',<br>
            - Preferred Course(s) of Study: '.$preferred_course.',<br>
            - TOFEL/ IELTS/ PTE Score: '.$score.',<br>';
            if($score == 'yes'){
                $content .='- Score: '.$one.',<br><br></i>';
            }else{
                $content .='- Do you need training in TOFEL/ IELTS/ PTE?: '.$two.'<br><br></i>';
            }
            $content .='Please review and respond promptly to assist the user with their inquiry.';

            // admin email 
            $adminEmail = "info@urbancode.in"; 
            $adminSubject = "Study Abroad Inquiry";
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
                                <p style="font-size: 16px;font-weight: 600;margin: auto;color:#000000;">'.$content.'</p>
                            </div>
                        </div>
                        <tr style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 0;position:relative;display:block;">
                            <td align="left" style="width:100%;">
                                <h4 style="font-size: 18px;font-weight: 600;margin: 0px;margin-bottom: 5px;">Thanks again!</h4>
                                <h2 style="font-size: 25px;margin: 0px;">Urbancode.in</h2>
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

        }
    }else if($action == 'mentorForm'){

        $name = $_POST["me-name"];
        $email = $_POST["me-email"];
        $phone = $_POST["me-mobile"]; 
        $area_ex = $_POST["me-area-ex"]; 
        $year_ex = $_POST["me-year-ex"]; 
        $current_com = $_POST["me-curr-com"]; 
        $des = $_POST["me-des"];
        $dob = $_POST["me-dob"]; 
        $location = $_POST["me-location"]; 
        $preferred = $_POST["me-preferred"]; 
        $available = $_POST["me-available"]; 

        $sql = "INSERT INTO mentor_register (name, email, phone, area_of_expertise, total_years_of_experience, current_company, designation, date_of_birth, location, preferred_mode_of_classes, available_days) VALUES ('$name', '$email', '$phone', '$area_ex', '$year_ex', '$current_com', '$des', '$dob', '$location', '$preferred', '$available')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";

            $content = 'A new mentor has registered with your mentorship program. Here are the details: <br><br><i>
            - Name: '.$name.',<br>
            - Email: '.$email.',<br>
            - Phone: '.$phone.',<br>
            - Area of Expertise: '.$area_ex.',<br>
            - Total years of Experience: '.$year_ex.',<br>
            - Current Company: '.$current_com.',<br>
            - Designation: '.$des.',<br>
            - Date of Birth: '.$dob.',<br>
            - Location: '.$location.',<br>
            - Preferred mode of classes: '.$preferred.',<br>
            - Available days: '.$available.',<br><br></i>            
            Please review and respond promptly to assist the user with their inquiry.';

            // admin email 
            $adminEmail = "info@urbancode.in"; 
            $adminSubject = "Mentor Registration";
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
                                <p style="font-size: 16px;font-weight: 600;margin: auto;color:#000000;">'.$content.'</p>
                            </div>
                        </div>
                        <tr style="background: #ffffff;padding: 30px;border-radius: 5px;margin: 0;position:relative;display:block;">
                            <td align="left" style="width:100%;">
                                <h4 style="font-size: 18px;font-weight: 600;margin: 0px;margin-bottom: 5px;">Thanks again!</h4>
                                <h2 style="font-size: 25px;margin: 0px;">Urbancode.in</h2>
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
        }
    }else if($action == 'testimonialsForm'){
        $name = $_POST["name"];
        $message = $_POST["message"];
        $editId = isset($_POST["editId"]) ? $_POST["editId"] : null;
        
        if ($editId) {
            // Editing an existing testimonial
            // $sql = "UPDATE testimonials SET name='$name', message='$message' WHERE id=$editId";
            $sql = "UPDATE testimonials SET name=?, message=? WHERE id=$editId";
        } else {
            // Adding a new testimonial
            // $sql = "INSERT INTO testimonials (name, message) VALUES ('$name', '$message')";
            $sql = "INSERT INTO testimonials (name, message) VALUES (?, ?)";
        }

        // if ($conn->query($sql) === TRUE) {
        //     echo "Saved Successful";
        // }
        // Use a prepared statement to avoid SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $message);

        // Execute query
        if ($stmt->execute()) {
            echo "Testimonials stored successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close prepared statement
        $stmt->close();

    }else if($action == 'deleteTestimonial'){
       
        $id = isset($_POST['id']) ? $_POST['id'] : null;

        // Perform the deletion logic
        if ($id) {
            
            $stmt = $conn->prepare("DELETE FROM testimonials WHERE id = ?");
            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                echo "Testimonial deleted successfully";
            } else {
                // Error occurred during deletion
                echo "Error deleting testimonial: " . $stmt->error;
            }

            // Close the prepared statement and database connection
            $stmt->close();
            $conn->close();

            exit;
        } else {
            echo "Invalid ID";
            exit;
        }
    }else if($action == 'basicFrom'){
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $banner1Name = '';
        $banner2Name = '';
        $banner3Name = '';

        // Handle image uploads
        $uploadDirectory = 'images/homeBanner/';

        // Upload Banner 1
        $banner1Description = $_POST['description1'];
        $banner1TmpName = $_FILES['banner1']['tmp_name'];
        $removeBanner1 = isset($_POST['removeBanner1']);

        $banner2Description = $_POST['description2'];
        $banner2TmpName = $_FILES['banner2']['tmp_name'];
        $removeBanner2 = isset($_POST['removeBanner2']);

        $banner3Description = $_POST['description3'];
        $banner3TmpName = $_FILES['banner3']['tmp_name'];
        $removeBanner3 = isset($_POST['removeBanner3']);

        if (!$removeBanner1 && $banner1TmpName != '') {
            $banner1Name = $uploadDirectory . 'banner1' . '.' . pathinfo($_FILES['banner1']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($banner1TmpName, $banner1Name);
        } else {
            $banner1Name = $removeBanner1 ? '' : $row["banner1Image"];
        }
        if (!$removeBanner2 && $banner2TmpName != '') {
            $banner2Name = $uploadDirectory . 'banner2' . '.' . pathinfo($_FILES['banner2']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($banner2TmpName, $banner2Name);
        } else {
            $banner2Name = $removeBanner2 ? '' : $row["banner2Image"];
        }
        if (!$removeBanner3 && $banner3TmpName != '') {
            $banner3Name = $uploadDirectory . 'banner3' . '.' . pathinfo($_FILES['banner3']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($banner3TmpName, $banner3Name);
        } else {
            $banner3Name = $removeBanner3 ? '' : $row["banner3Image"];
        }

        // Send a response to the client
        $checkQuery = "SELECT * FROM basic_info";
        $result = $conn->query($checkQuery);
        $row = $result->fetch_assoc();

        if($banner1Name == ''){
            $banner1Name = $row["banner1Image"];
        }
        if($banner2Name == ''){
            $banner2Name = $row["banner2Image"];
        }
        if($banner3Name == ''){
            $banner3Name = $row["banner3Image"];
        }
        
        // Use the existing image if not uploaded or removed
        if ($removeBanner1) {
            $banner1Name = '';
        }
        if ($removeBanner2) {
            $banner2Name = '';
        }
        if ($removeBanner3) {
            $banner3Name = '';
        }        

        // if ($result->num_rows > 0) {
        //     $sql = "UPDATE basic_info SET phoneNumber='$phoneNumber', email='$email', address1='$address1', address2='$address2', banner1Image='$banner1Name', banner1Description='$banner1Description', banner2Image='$banner2Name', banner2Description='$banner2Description', banner3Image='$banner3Name', banner3Description='$banner3Description' WHERE id= 1";
        // } else {
        //     $sql = "INSERT INTO basic_info (phoneNumber, email, address1, address2, banner1Image, banner1Description, banner2Image, banner2Description, banner3Image, banner3Description) VALUES ('$phoneNumber', '$email', '$address1', '$address2', '$banner1Name', '$banner1Description', '$banner2Name', '$banner2Description', '$banner3Name', '$banner3Description')";
        // }

        // if ($conn->query($sql) === TRUE) {
        //     echo "Form submitted successfully!";
        // }



        if ($result->num_rows > 0) {
            // Update existing record
            $sql = "UPDATE basic_info SET phoneNumber=?, email=?, address1=?, address2=?, banner1Image=?, banner1Description=?, banner2Image=?, banner2Description=?, banner3Image=?, banner3Description=? WHERE id=1";
        } else {
            // Insert new record
            $sql = "INSERT INTO basic_info (phoneNumber, email, address1, address2, banner1Image, banner1Description, banner2Image, banner2Description, banner3Image, banner3Description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        }

        // Use a prepared statement to avoid SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $phoneNumber, $email, $address1, $address2, $banner1Name, $banner1Description, $banner2Name, $banner2Description, $banner3Name, $banner3Description);

        // Execute query
        if ($stmt->execute()) {
            echo "Form submitted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close prepared statement
        $stmt->close();


    }else if($action == 'register'){
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $repeatPassword = $_POST["repeatPassword"];

        // Check if passwords match
        if (password_verify($repeatPassword, $password)) {
            $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'admin')";

            if ($conn->query($sql) === TRUE) {
                echo "Registration successful!";
            }
        } else {
            echo "Passwords do not match..!";
        }
    }else if($action == 'login'){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT id, password, role FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["user_role"] = $row["role"];
                echo "Login successful!";
            } else {
                echo "Invalid password";
            }
        } else {
            echo "User not found";
        }
    }else if($action == 'logout'){
        session_start();
        $_SESSION = array();
        session_destroy();

        echo "Logout successful!";
    }else if($action == 'eventForm'){

        $evt_name = $_POST['evt_name'];
        $evt_headline = $_POST['evt_headline'];
        $evt_banner = ''; //$_POST['evt_banner'];
        $evt_title = $_POST['evt_title'];
        $evt_date = $_POST['evt_date'];
        $evt_time = $_POST['evt_time'];
        $evt_fees = $_POST['evt_fees'];
        $evt_venue = $_POST['evt_venue'];
        $evt_des = $_POST['evt_des'];

        // Use prepared statement to check if records exist
        $checkQuery = "SELECT COUNT(*) as count FROM events";
        $result = $conn->query($checkQuery);

        if ($result) {
            $row = $result->fetch_assoc();
            $recordCount = $row['count'];

            if ($recordCount > 0) {
                // Update existing record
                $sql = "UPDATE events SET evt_name=?, evt_headline=?, evt_banner=?, evt_title=?, evt_date=?, evt_time=?, evt_fees=?, evt_venue=?, evt_des=? WHERE id=1";
            } else {
                // Insert new record
                $sql = "INSERT INTO events (evt_name, evt_headline, evt_banner, evt_title, evt_date, evt_time, evt_fees, evt_venue, evt_des) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            }

            // Use a prepared statement to avoid SQL injection
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssssss", $evt_name, $evt_headline, $evt_banner, $evt_title, $evt_date, $evt_time, $evt_fees, $evt_venue, $evt_des);

            // Execute query
            if ($stmt->execute()) {
                echo "Event stored successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close prepared statement
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }

        // Close connection
        $conn->close();

    }
}