<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../auth/login.php");
    exit();
}
if ($_SESSION["user_role"] != 'admin') {
    header("Location: ../referrals.php");
    exit();
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
        font-size: 18px;
        }

    .tbl-accordion-header a {
        color: #28c76f !important;
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
                <a href="../admin/dashboard.php">
                    <div class="nav-option option"> 
                        <i class="fa-solid fa-gauge-simple-high nav-img"></i>
                        <h3> Dashboard</h3> 
                    </div> 
                </a>
                <a href="../admin/referrals.php">
                    <div class="nav-option option active"> 
                        <i class="fa-solid fa-rotate nav-img"></i>
                        <h3> Referrals</h3> 
                    </div> 
                </a>
                <a href="../admin/events.php">
                    <div class="nav-option option"> 
                        <i class="fa-brands fa-leanpub nav-img"></i> 
                        <h3> Events</h3> 
                    </div> 
                </a>
                <a href="../admin/testimonials.php">
                    <div class="nav-option option"> 
                            <i class="fa-solid fa-comments nav-img"></i> 
                            <h3> Testimonials</h3> 
                    </div>
                </a> 
                <a href="../admin/settings.php">
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
        <div class="report-container mt-0"> 
            <div class="report-header"> 
                <h1 class="recent-Articles">Referrals Details</h1> 
            </div> 
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>UPI ID</th>
                    </tr>
                </thead>
                <tbody> <?php
                    $targetRole = "user"; // Change this to the desired role
                    // SQL query to fetch users based on role
                    $sql = "SELECT id, uc_id, username, email, phone, upi FROM users WHERE role = '$targetRole'";
                    $result = $conn->query($sql);   
                    if ($result->num_rows > 0) {
                        
                    
                        // Output data of each user
                        while ($row = $result->fetch_assoc()) { ?>
                            <tbody class="tbl-accordion-header">
                                <tr style="color: #28c76f;font-weight: 500;">
                                    <td>
                                        <a data-toggle="toggle"><strong><i class="fa-solid fa-chevron-down"></i> <?php echo $row["uc_id"]; ?></strong></a>
                                    </td>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["phone"]; ?></td>
                                    <td><?php echo $row["upi"]; ?></td>
                                </tr>                                
                            </tbody>
                            <tbody class="tbl-accordion-body">
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td><strong>Email</strong></td>
                                    <td><strong>Phone</strong></td>
                                    <td><strong>Course</strong></td>
                                    <td><strong>Status</strong></td>
                                </tr> <?php 

                                $refid = $row["uc_id"];

                                $sql = "SELECT * FROM referrals WHERE uc_id = '$refid'";
                                $result_referrals = $conn->query($sql);
                                if ($result_referrals->num_rows > 0) {

                                    while ($row_referral = $result_referrals->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $row_referral["name"]; ?></td>
                                            <td><?php echo $row_referral["email"]; ?></td>
                                            <td><?php echo $row_referral["phone"]; ?></td>
                                            <td><?php echo $row_referral["course"]; ?></td>
                                            <td><?php echo $row_referral["status"]; ?></td>
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
</div> 
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
                window.location.href = '../auth/login.php';
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
</script>
</body>
</html>