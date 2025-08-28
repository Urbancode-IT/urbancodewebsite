<?php session_start(); 

if (!isset($_SESSION["user_id"])) {
    header("Location: ./login");
    exit();
}
if ($_SESSION["user_role"] != 'user') {
    header("Location: ../admin/dashboard");
    exit();
} ?>
<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>
<style>        
    .student-profile .card {
        border-radius: 10px;
        padding:10px;
    }
    .student-profile .card .card-header .profile_img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 10px auto;
        border: 10px solid #ccc;
        border-radius: 50%;
        font-size: 90px;
        font-weight: 700;
        color: #01af6a;
    }
    .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
    }
    .student-profile .card p {
        font-size: 16px;
        color: #000;
    }
    .student-profile .table th,
    .student-profile .table td {
        font-size: 14px;
        padding: 10px;
        color: #000;
    }
    .student-profile .table{margin:0px;}
    .testimonial-area{display:none;}
</style>
<section class="hero-sec py-5">
<?php

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    // SQL query to fetch user details
    $sql = "SELECT uc_id, username, email, phone, upi, role FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { 
        
        // Output data of the user
        $row = $result->fetch_assoc(); 
        $uc_id = $row["uc_id"]; ?>
        <div class="student-profile py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-transparent text-center">
                                <div class="profile_img text-capitalize"><?php $firstLetter = substr($row["username"], 0, 1); echo $firstLetter; ?></div>
                                <h3 class="text-capitalize"><?php echo $row["username"]; ?></h3>
                            </div>
                            <div class="card-body">
                                <p class="mb-0 text-center"><strong class="pr-1">User ID: </strong><?php echo $row["uc_id"]; ?></p>
                            </div>
                            <i class="fa-solid fa-right-from-bracket nav-img" onclick="logoutUser()" style="position: absolute;right: 10px;font-size: 25px;"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-header bg-transparent border-0">
                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i> General Information</h3>
                            </div>
                            <div class="card-body pt-0">
                                <table class="table table-bordered">
                                    <tr>
                                        <th width="30%">Name</th>
                                        <td width="2%">:</td>
                                        <td class="text-capitalize"><?php echo $row["username"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Email</th>
                                        <td width="2%">:</td>
                                        <td><?php echo $row["email"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Phone</th>
                                        <td width="2%">:</td>
                                        <td><?php echo $row["phone"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="30%">UPI ID</th>
                                        <td width="2%">:</td>
                                        <td><?php echo $row["upi"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Role</th>
                                        <td width="2%">:</td>
                                        <td><?php echo $row["role"]; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="container mt-3 mt-md-5">        
                <h4 style="color:#000000;">Refer a learner</h4>
                <p class="pb-2">Allow us to assist you better, Fill in the referral form</p>
                
                <form id="refer-form" class="mt-2 mt-md-4">     
                    <input type="hidden" name="uc_id" id="uc_id" value="<?php echo $row["uc_id"]; ?>">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group mb-3 mb-md-4">
                                <label for="">Name<span>*</span></label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group mb-3 mb-md-4">
                                <label for="">Email Id<span>*</span></label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group mb-3 mb-md-4">
                                <label for="">Phone No<span>*</span></label>
                                <input type="number" class="form-control" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3 mb-md-4">
                                <label for="">Location<span>*</span></label>
                                <input type="text" class="form-control" name="location" id="location">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3 mb-md-4">
                                <label for="">Course<span>*</span></label>
                                <select class="form-control" name="course" id="course">
                                    <option value="">Select course</option>
                                    <option value="ms-sql">MS SQL Server</option>
                                    <option value="power-bi">Power BI </option>
                                    <option value="tableau">Tableau</option>
                                    <option value="aws">AWS</option>
                                    <option value="azure">Azure</option>
                                    <option value="gcp">GCP</option>
                                    <option value="sas">SAS</option>
                                    <option value="python">Python</option>
                                    <option value="java">Java</option>
                                    <option value="ielts">IELTS</option>
                                    <option value="toefl">TOEFL</option>
                                    <option value="pte">PTE</option>
                                    <option value="oet">OET</option>
                                    <option value="data-science">Data Science</option>
                                    <option value="digital-marketing">Digital Marketing</option>
                                    <option value="french">French</option>
                                    <option value="german">German</option>
                                    <option value="spoken-english">Spoken English</option>
                                </select>
                            </div>
                        </div>                        
                        <div class="col-12">
                            <div class="form-group mb-3 mb-md-4">
                                <label for="">Comments<span>*</span></label>
                                <textarea rows="5" class="form-control"  name="comments" id="comments"></textarea>
                            </div>
                        </div>
                    </div>                    
                    <a href="javascript:;" class="btn btn-primary px-4 py-2 site" onclick="referSubmit()">Register</a>
                </form> 
            </div>
            <div class="container mt-3 mt-md-5">
                <h4 style="color:#000000;">Your Reference</h4> 
                <div style="overflow-x: auto;">          
                    <table class="table mt-3" style="border: 3px solid #e7e7e7;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "SELECT * FROM referrals WHERE uc_id = '$uc_id' ORDER BY id DESC";
                            $result = $conn->query($sql);
                            $serialNumber = 1;
                            if ($result->num_rows > 0) {
                                while ($res = $result->fetch_assoc()): 
                                    if($serialNumber <= 10){?>
                                        <tr>
                                            <td><?php echo $serialNumber; ?></td>
                                            <td><?php echo $res['name']; ?></td>
                                            <td><?php echo $res['email']; ?></td>
                                            <td><?php echo $res['phone']; ?></td>
                                            <td><?php echo $res['course']; ?></td>
                                            <td><?php echo $res['location']; ?></td>
                                            <td><?php echo $res['status']; ?></td>
                                            <td><?php echo $res['payment']; ?></td>
                                        </tr> <?php 
                                        $serialNumber++;  
                                    }
                                endwhile;

                            } else {
                                echo '<tr><td colspan="8" class="text-center">No List found.</td></tr>';
                            } ?>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div> <?php

    } else {
        echo '<div class="container">';
        echo "User not found.";
        echo '</div>';
    }

    // Close connection
    $conn->close();
} else {    
    header("Location: ./login");
    exit();
} ?>

</section>
<script>
    function logoutUser() {
        $.ajax({
            type: 'POST',
            url: './ajax.php',
            data: {
                action: 'logout'
            }, 
            success: function(response) {
                window.location.href = './login';
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + ' ' + error);
            }
        });
    }
    function referSubmit(){
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var locations = document.getElementById("location").value;
        var course = document.getElementById("course").value;
        var comments = document.getElementById("comments").value;
        var uc_id = document.getElementById("uc_id").value;

        if (name == "" || email == "" || phone == "" || locations == "" || course == "" || comments == "" || uc_id == "") {    
            showCustomToast('Please fill in all required fields.', 'error');
            return;
        }
        
        if (!isValidEmail(email)) {
            showCustomToast('Please enter a valid email address.', 'error');  
            return;
        }

        if (!isValidMobileRefer(phone)) {
            showCustomToast('Please enter a valid mobile number.', 'error');  
            return;
        }

        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: {'action': 'referForm', 'name': name, 'email': email, 'phone': phone, 'location': locations, 'course': course, 'comments': comments, 'uc_id': uc_id },
            success: function(response) {  
                showCustomToast(response, 'success');
                setTimeout(function() {
                    location.reload(true);
                }, 1500);
            },
            error: function(xhr, status, error) {
                setTimeout(function() {
                    showCustomToast(error, 'error');
                }, 1500);
            }
        });
    }
    function isValidMobileRefer(mobile) {
    if (/^[0-9]{10}$/.test(mobile)) {
        var repeatingDigitsRegex = /(\d)\1{5,}/;
        var sequentialDigitsRegex = /0123456789|9876543210|1234567890/;

        if (!repeatingDigitsRegex.test(mobile) && !sequentialDigitsRegex.test(mobile)) {
            return true;
        }
    }

    return false;
}
</script>

<?php include 'inc/footer.php';?>