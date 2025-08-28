<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../login");
    exit();
}
if ($_SESSION["user_role"] != 'admin') {
    header("Location: ../referrals");
    exit();
}

$q_lead_id = $_GET['qlid'];
$d_lead_id = $_GET['dlid'];


if($d_lead_id!=""){

    $sql = "DELETE FROM leads WHERE lead_id = $d_lead_id"; 
    
if (mysqli_query($conn, $sql)) {
    header("Location: lms.php"); // Redirect to another page (e.g., a list of remaining rows)
} else {
    echo $sql."Error deleting record: " . mysqli_error($conn);
}

}


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referrals</title>
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<style>
    table { 
        width: 100%; 
        border-collapse: collapse; 
        /* margin:50px auto; */
        }

    th { 
        background: #3498db; 
        color: white; 
        font-weight: bold; 
        }

    td, th { 
        padding: 10px; 
        border-bottom: 1px solid #ccc;
        font-size: 14px;
        }

    .tbl-accordion-header a {
        color: #28c76f !important;cursor: pointer;
    }

    .tbl-accordion-body {
        display: none;
    }

    .tbl-accordion-body td {
    border-bottom: 0px; 
    }

    .tbl-accordion-body tr:last-child {
    border-bottom: 1px solid #ccc; 
    }
    input,select{
        width: 100px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 2px 10px;
    }
    
    .form-popup-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }
    .form-popup-bg {
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(94, 110, 141, 0.9);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
        transition: opacity 0.3s 0s, visibility 0s 0.3s;
        overflow-y: auto;
        z-index: 10000;
    }
    .form-popup-bg.is-visible {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
        transition: opacity 0.3s 0s, visibility 0s 0s;
    }
    .form-container {
        background-color: #2d3638;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 350px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        padding: 40px;
        color: #fff;
    }
    .close-button {
        background: none;
        color: #fff;
        width: 40px;
        height: 40px;
        position: absolute;
        top: 0;
        right: 0;
        border: none;
    }
    .form-popup-bg:before {
        content: '';
        background-color: #fff;
        opacity: 0.25;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    .form-popup-bg .submit{
        background: #fff;
        border: 1px solid #01af6a;
        padding: 5px 15px;
        border-radius: 5px;
        font-weight: 600;
    }
    .form-control{appearance: auto;}
</style>
<body>
<?php require_once "../config.php"; ?>
<header>   
    <div class="logosec"> 
        <div class="logo"><a href="/"><img src="../images/logo.png" alt="Logo" style="width:225px;"></a></div> 
        <i class="fa-solid fa-bars icn menuicn" id="menuicn" ></i>
    </div> 
    
</header>  

<div class="main-container"> 
  <div class="navcontainer"> 
      <nav class="nav">
          <div class="nav-upper-options"> 
                <a href="../admin/dashboard">
                    <div class="nav-option option"> 
                        <i class="fa-solid fa-gauge-simple-high nav-img"></i>
                        <h3> Dashboard</h3> 
                    </div> 
                </a>
                <a href="../admin/lms">
                    <div class="nav-option option active"> 
                        <i class="fa-solid fa-people-group nav-img"></i>
                        <h3> LMS</h3> 
                    </div> 
                </a>
                <a href="../admin/referrals">
                    <div class="nav-option option"> 
                        <i class="fa-solid fa-rotate nav-img"></i>
                        <h3> Referrals</h3> 
                    </div> 
                <a href="../admin/events">
                    <div class="nav-option option"> 
                        <i class="fa-brands fa-leanpub nav-img"></i> 
                        <h3> Events</h3> 
                    </div> 
                </a>
                <a href="../admin/testimonials">
                    <div class="nav-option option"> 
                            <i class="fa-solid fa-comments nav-img"></i> 
                            <h3> Testimonials</h3> 
                    </div>
                </a> 
                <a href="../admin/settings">
                    <div class="nav-option option"> 
                            <i class="fa-solid fa-gear nav-img"></i>
                            <h3> Settings</h3> 
                    </div> 
                </a>

              <div class="nav-option logout" onclick="logoutUser()"> 
                    <i class="fa-solid fa-right-from-bracket nav-img"></i>
                    <h3>Logout</h3> 
              </div> 

          </div> 
      </nav> 
  </div> 
    <div class="main"> 

    <?php
    
        if($q_lead_id!=""){ ?> <div class="report-container mt-0"> 
            <div class="report-header"> 
                <h1 class="recent-Articles">Edit Lead (<?php   echo $q_lead_id; ?>)</h1> 
            </div> <?php       
        
            $id = 1;

            $sql = "SELECT * FROM events WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $evt_name = $row["evt_name"];
                $evt_headline = $row["evt_headline"];
                $evt_title = $row["evt_title"];
                $evt_date = $row["evt_date"];
                $evt_time = $row["evt_time"];
                $evt_fees = $row["evt_fees"];
                $evt_venue = $row["evt_venue"];            
                $evt_des = $row["evt_des"];
            } else{
                $evt_name = '';
                $evt_headline = '';
                $evt_title = '';
                $evt_date = '';
                $evt_time = '';
                $evt_fees = '';
                $evt_venue = '';
                $evt_des = '';
            } ?>
            <form id="eventForm" method="post" enctype="multipart/form-data" class="mt-3">
                <input type="hidden" name="action" value="eventForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="evt_name" class="form-label">Event Name:</label>
                            <input type="text" class="form-control" id="evt_name" name="evt_name" value="<?php echo $evt_name; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="text" class="form-label">Event Headline</label>
                            <input type="email" class="form-control" id="evt_headline" name="evt_headline" value="<?php echo $evt_headline; ?>">
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="mb-3">
                            <label for="evt_banner" class="form-label">Event Banner</label>
                            <input type="file" class="form-control" id="evt_banner" name="evt_banner" value="">
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="evt_title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="evt_title" name="evt_title" value="<?php echo $evt_title; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="evt_date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="evt_date" name="evt_date" value="<?php echo $evt_date; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="evt_time" class="form-label">Time</label>
                            <input type="time" class="form-control" id="evt_time" name="evt_time" value="<?php echo $evt_time; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="evt_fees" class="form-label">Fees</label>
                            <input type="text" class="form-control" id="evt_fees" name="evt_fees" value="<?php echo $evt_fees; ?>">
                        </div>
                    </div>                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="evt_venue" class="form-label">Venue</label>
                            <input type="text" class="form-control" id="evt_venue" name="evt_venue" value="<?php echo $evt_venue; ?>">
                        </div>
                    </div>                  
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="evt_des" class="form-label">Description</label>
                            <textarea name="evt_des" class="form-control" id="evt_des" rows="5"><?php echo $evt_des; ?></textarea>
                        </div>
                    </div>
                </div>            

                <button type="button" id="submitBtn" class="btn btn-primary">Submit</button>
            </form>
             
        </div>        <?php

        }

    ?>
          <div class="report-container">           
            <div class="report-header"> 
                <h1 class="recent-Articles">Lead Management System</h1> 
            </div> 

        <div class="tabs">
            <div class="tabs__nav">
                <button class="tabs__nav-btn" type="button" data-tab="#tab_1">New Enquiries</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_2">Follow Ups</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_3">Trainer Meet</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_4">Ready to Enroll</button>
            </div>
            <br>
            <div class="tabs__content">
                <div class="tabs__item" id="tab_1">  
                    <div class="table_container">                  

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> <?php
                        $targetStatus = "New Enquiry"; // Change this to the desired role
                        // SQL query to fetch users based on role
                        $sql = "SELECT lead_id, created_at, first_name, location, phone_number, email, status FROM leads WHERE status = '$targetStatus' ORDER BY lead_id DESC";
                        $result = $conn->query($sql);   
                        if ($result->num_rows > 0) {
                            
                        
                            // Output data of each user
                            while ($row = $result->fetch_assoc()) { 
                            if($row["phone_number"]=="")
                            {
                                continue;
                            }?>
                                <tbody>
                                    <tr style="color: #28c76f;font-weight: 500;">
                                        <td>
                                            <?php echo $row["lead_id"]; ?></strong>
                                        </td>
                                        <td><?php
                                        $created_at = $row["created_at"];
                                        $date = new DateTime($created_at);
                                        $date_part = $date->format('M j, Y');
                                        $time_part = $date->format('h:i A');

                                        echo $date_part." ".$time_part; ?></td>
                                        <td><?php echo $row["phone_number"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["first_name"]; ?></td>
                                        <td><?php echo $row["location"]; ?></td>
                                        <td><strong><a href="lms?qlid=<?php echo $row["lead_id"]; ?>" > <i class="fa-solid fa-edit"></i> </a><a href="lms?dlid=<?php echo $row["lead_id"]; ?>" ><i class="fa-solid fa-trash"></i> </a></td>
                                    </tr>                                
                                </tbody>
                                
                                
                                <tbody class="tbl-accordion-body">
                                    <?php 

                                    $refid = $row["lead_id"];
                                    $sql = "SELECT * FROM leads WHERE lead_id = '$refid'";
                                    $result_referrals = $conn->query($sql);
                                    if ($result_referrals->num_rows > 0) {

                                        while ($row_referral = $result_referrals->fetch_assoc()) { ?>
                                            <tr>


<!--                                                <form id="banner-form" method="post" action="submit-enquiry.php">
                                                        <input class="form-control me-2 mb-2 mb-lg-0" type="email" placeholder="Enter your email" id="ban-email" name="ban-email">
                                                        <input class="form-control me-2 mb-2 mb-lg-0" type="phone" placeholder="Enter your phone" id="ban-phone" name="ban-phone">
                                                            <input type="hidden" id="page_screen" name="page_screen" value="home_banner">
                                                        <input class="btn slide-btn" type="submit" value="Enroll Today">
                                                </form>
-->
                                                <td><?php echo $row_referral["name"]; ?></td>
                                                <td><?php echo $row_referral["email"]; ?></td>
                                                <td><?php echo $row_referral["phone"]; ?></td>
                                                <td><?php echo $row_referral["course"]; ?></td>
                                                <td><input type='number' id="amount" name="amount" value='<?php echo $row_referral["payment"]; ?>' onkeyup="percentage(this);"></td>
                                                <td><input type='number' id="referral_fee" name="referral_fee"  value='<?php echo $row_referral["referral_fee"]; ?>' ></td>

                                                <td>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="enquiry" <?php echo ($row_referral["status"] == 'enquiry') ? 'selected' : ''; ?>>Enquiry</option>
                                                        <option value="enrolled" <?php echo ($row_referral["status"] == 'enrolled') ? 'selected' : ''; ?>>Enrolled</option>
                                                        <option value="dropped" <?php echo ($row_referral["status"] == 'dropped') ? 'selected' : ''; ?>>Dropped</option>
                                                    </select>
                                                </td>

                                                <td style="text-align: center;font-size: 25px;"><i class="fa-solid fa-square-check" onclick="setPayment(this, <?php echo $row_referral['id']; ?>)"></i></td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        echo '<tr><td colspan="8" class="text-center">No referrals found.</td></tr>';
                                    } ?>
                                </tbody><?php
                            }
                            
                        } else {
                            echo '<tr><td colspan="8" class="text-center">No users found.</td></tr>';
                        } ?>                    
                    </tbody>
                </table>



                    </div>
                </div>
                <div class="tabs__item" id="tab_2">
                    <div class="table_container">                  

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th colspan="2">Location</th>
                            <th colspan="2">Phone</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody> <?php
                        $targetStatus = "New Enquiry"; // Change this to the desired role
                        // SQL query to fetch users based on role
                        $sql = "SELECT lead_id, created_at, first_name, location, phone_number, status FROM leads WHERE status = '$targetStatus' ORDER BY lead_id DESC";
                        $result = $conn->query($sql);   
                        if ($result->num_rows > 0) {
                            
                        
                            // Output data of each user
                            while ($row = $result->fetch_assoc()) { ?>
                                <tbody class="tbl-accordion-header">
                                    <tr style="color: #28c76f;font-weight: 500;">
                                        <td>
                                            <a data-toggle="toggle"><strong><i class="fa-solid fa-chevron-down"></i> <?php echo $row["lead_id"]; ?></strong></a>
                                        </td>
                                        <td><?php
                                        $created_at = $row["created_at"];
                                        $date = new DateTime($created_at);
                                        $date_part = $date->format('M j, Y');
                                        $time_part = $date->format('h:i A');

                                        echo $date_part." ".$time_part; ?></td>
                                        <td colspan="2"><?php echo $row["first_name"]; ?></td>
                                        <td colspan="2"><?php echo $row["location"]; ?></td>
                                        <td><?php echo $row["phone_number"]; ?></td>
                                        <td><?php echo $row["status"]; ?></td>
                                    </tr>                                
                                </tbody>
                                <tbody class="tbl-accordion-body">
                                    <tr>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Email</strong></td>
                                        <td><strong>Phone</strong></td>
                                        <td><strong>Course</strong></td>
                                        <td><strong>Course Fee</strong></td>
                                        <td><strong>Referral Fee</strong></td>
                                        <td><strong>Status</strong></td>
                                        <td><strong>Action</strong></td>
                                    </tr> <?php 

                                    $refid = $row["lead_id"];

                                    $sql = "SELECT * FROM referrals WHERE uc_id = '$refid'";
                                    $result_referrals = $conn->query($sql);
                                    if ($result_referrals->num_rows > 0) {

                                        while ($row_referral = $result_referrals->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $row_referral["name"]; ?></td>
                                                <td><?php echo $row_referral["email"]; ?></td>
                                                <td><?php echo $row_referral["phone"]; ?></td>
                                                <td><?php echo $row_referral["course"]; ?></td>
                                                <td><input type='number' id="amount" name="amount" value='<?php echo $row_referral["payment"]; ?>' onkeyup="percentage(this);"></td>
                                                <td><input type='number' id="referral_fee" name="referral_fee"  value='<?php echo $row_referral["referral_fee"]; ?>' ></td>

                                                <td>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="enquiry" <?php echo ($row_referral["status"] == 'enquiry') ? 'selected' : ''; ?>>Enquiry</option>
                                                        <option value="enrolled" <?php echo ($row_referral["status"] == 'enrolled') ? 'selected' : ''; ?>>Enrolled</option>
                                                        <option value="dropped" <?php echo ($row_referral["status"] == 'dropped') ? 'selected' : ''; ?>>Dropped</option>
                                                    </select>
                                                </td>

                                                <td style="text-align: center;font-size: 25px;"><i class="fa-solid fa-square-check" onclick="setPayment(this, <?php echo $row_referral['id']; ?>)"></i></td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        echo '<tr><td colspan="8" class="text-center">No referrals found.</td></tr>';
                                    } ?>
                                </tbody><?php
                            }
                            
                        } else {
                            echo '<tr><td colspan="8" class="text-center">No users found.</td></tr>';
                        } ?>                    
                    </tbody>
                </table>


                    </div>
                </div>
                <div class="tabs__item" id="tab_3">
                    <div class="table_container">                  



                    </div>
                </div>
                <div class="tabs__item" id="tab_4">
                    <div class="table_container">                  





                    </div>
                </div>
            </div>
        </div>
    
    
    </div> 
</div> 

<!-- <div class="form-popup-bg">
  <div class="form-container">
    <button id="btnCloseForm" class="close-button">X</button>
    <h1>Change Status</h1>
    <form action="">
        <input type="hidden" id="ref_id" name="ref_id" value="">        
        <div class="form-group">
            <label for="">Course Fee</label>
            <input class="form-control" type="text" id="amount" name="amount" />
        </div><br>
        <div class="form-group">
            <label for="">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="enquiry">Enquiry</option>
                <option value="enrolled">Enrolled</option>
                <option value="dropped">Dropped</option>
            </select>
        </div><br>
        <button class="submit" type="button" onclick="paymentSubmit();">Submit</button>
        <div class="success"></div>
        <div class="error"></div>
    </form>
  </div>
</div> -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let menuicn = document.querySelector(".menuicn"); 
    let nav = document.querySelector(".navcontainer"); 

    menuicn.addEventListener("click", () => { 
        nav.classList.toggle("navclose"); 
    })

    function logoutUser() {
        $.ajax({
            type: 'POST',
            url: '../ajax.php',
            data: {
                action: 'logout'
            }, 
            success: function(response) {
                window.location.href = '../login';
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + ' ' + error);
            }
        });
    } 
    $(document).ready(function () {
        $('[data-toggle="toggle"]').click(function () {
            $(this).parents().next(".tbl-accordion-body").toggle();
        });
    });

function closeForm() {
    $('.form-popup-bg').removeClass('is-visible');
}

function setPayment(obj, id) {
    var status = $(obj).parent().parent().find('#status').val();
    var payment = $(obj).parent().parent().find('#amount').val();
    var referral_fee = $(obj).parent().parent().find('#referral_fee').val();

    $.ajax({
        type: "POST",
        url: "../ajax.php",
        data: {'action': 'paymentForm', 'ref_id': id, 'status': status, 'amount':payment, 'ref_fee':referral_fee},
        success: function(response) {  
            alert(response);
            setTimeout(function() {
                location.reload();
            }, 1500);
        },
        error: function(xhr, status, error) {
            alert('error');
        }
    });

    
}
function percentage(obj){
    var amt = $(obj).val();
    var result = amt * 0.05;
    $(obj).parent().parent().find('#referral_fee').val(result);
}
 
    const tabsNav = document.querySelector('.tabs__nav');
    const tabsBtn = document.querySelectorAll(".tabs__nav-btn");
    const tabsItems = document.querySelectorAll(".tabs__item");

    tabsNav.addEventListener('click', function(event) {
    const targetButton = event.target.closest('.tabs__nav-btn');
    
    if (targetButton) {
        const tabId = targetButton.getAttribute("data-tab");
        const currentTab = document.querySelector(tabId);

        tabsBtn.forEach(btn => btn.classList.toggle('active', btn === targetButton));
        tabsItems.forEach(item => item.classList.toggle('active', item === currentTab));
    }
    });

    tabsBtn[0].click();
 
 
    
// $('.form-popup-bg').on('click', function(event) {
//     if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
//         event.preventDefault();
//         $(this).removeClass('is-visible');
//     }
// });

// function paymentSubmit(){
//     var ref_id = document.getElementById("ref_id").value;
//     var status = document.getElementById("status").value;
//     var amount = document.getElementById("amount").value;

//     if (ref_id == "" || status == "" || amount == "") {    
//         $('.error').text('Please Fill All Details');
//         return;
//     }

//     $.ajax({
//         type: "POST",
//         url: "../ajax.php",
//         data: {'action': 'paymentForm', 'ref_id': ref_id, 'status': status, 'amount':amount},
//         success: function(response) {  
//             $('.success').text(response);
//             $('.error').text('');
//             setTimeout(function() {
//                 location.reload();
//             }, 1500);
//         },
//         error: function(xhr, status, error) {
//             alert('error');
//         }
//     });
// }
</script>
</body>
</html>