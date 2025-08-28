<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../auth/login");
    exit();
}
if ($_SESSION["user_role"] != 'admin') {
    header("Location: ../referrals");
    exit();
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
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
                <a href="../admin/referrals">
                    <div class="nav-option option"> 
                        <i class="fa-solid fa-rotate nav-img"></i>
                        <h3> Referrals</h3> 
                    </div> 
                </a>
                <a href="../admin/events">
                    <div class="nav-option option active"> 
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
                <a href="../admin/certificate">
                    <div class="nav-option option"> 
                            <i class="fa-solid fa-certificate nav-img"></i>
                            <h3> Certificate</h3> 
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
        <div class="report-container mt-0"> 
            <div class="report-header"> 
                <h1 class="recent-Articles">Events Details</h1> 
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
                window.location.href = '../login';
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + ' ' + error);
            }
        });
    }
    $(document).ready(function() {
        $("#submitBtn").click(function() {
            var formData = new FormData($("#eventForm")[0]);

            $.ajax({
                type: "POST",
                url: "../ajax",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                    setTimeout(function() {
                        location.reload(true);
                    }, 1500);
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error("Error:", error);
                    alert("Form submission failed!");
                }
            });
        });
    });    
</script>
</body>
</html>