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
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
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
                <a href="../admin/certificate">
                    <div class="nav-option option"> 
                            <i class="fa-solid fa-certificate nav-img"></i>
                            <h3> Certificate</h3> 
                    </div>
                </a> 
                <a href="../admin/settings">
                    <div class="nav-option option active"> 
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
                <h1 class="recent-Articles">Basic Info</h1> 
            </div> <?php       
        
            $id = 1;

            $sql = "SELECT * FROM basic_info WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $phoneNumber = $row["phoneNumber"];
                $email = $row["email"];
                $address1 = $row["address1"];
                $address2 = $row["address2"];
                $banner1Description = $row["banner1Description"];
                $banner2Description = $row["banner2Description"];
                $banner3Description = $row["banner3Description"];            
                $banner1img = $row["banner1Image"];
                $banner2img = $row["banner2Image"];
                $banner3img = $row["banner3Image"];
            } else{
                $phoneNumber = '';
                $email = '';
                $address1 = '';
                $address2 = '';
                $banner1Description = '';
                $banner2Description = '';
                $banner3Description = '';
                $banner1img = '';
                $banner2img = '';
                $banner3img = '';
            } ?>
            <form id="basicForm" method="post" enctype="multipart/form-data" class="mt-3">
                <input type="hidden" name="action" value="basicFrom">
                <h4 class="my-3">Contact Section</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number:</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required value="<?php echo $phoneNumber; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="address1" class="form-label">Address 1:</label>
                            <input type="text" class="form-control" id="address1" name="address1" required value="<?php echo $address1; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="address2" class="form-label">Address 2:</label>
                            <input type="text" class="form-control" id="address2" name="address2" required value="<?php echo $address2; ?>">
                        </div>
                    </div>
                </div>
                <h4 class="my-3">Banner Section</h4>
                <div class="mb-3">
                    <label for="banner1" class="form-label">Banner 1 Image:</label>
                    <br>
                    <?php if ($banner1img) { ?>
                        <img src="../<?php echo $row["banner1Image"]; ?>" id="reuploadBanner1Image" alt="Banner 1" style="width:100px;margin-bottom:10px;"><br>
                        <label for="reuploadBanner1" style="cursor: pointer; color: blue;">Re-upload Image</label>
                        <input type="file" class="form-control file-input" id="reuploadBanner1" name="banner1" accept="image/*" style="display: none;">
                        <br>
                        <input type="checkbox" id="removeBanner1" name="removeBanner1"> Remove Image
                    <?php } else { ?>
                        <span>No image uploaded</span>
                        <input type="file" class="form-control file-input" id="reuploadBanner1" name="banner1" accept="image/*">
                    <?php } ?>
                    <br>
                    <label for="description1" class="form-label">Banner 1 Description:</label>
                    <textarea class="form-control" id="description1" name="description1" rows="3" required><?php echo $banner1Description; ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="banner2" class="form-label">Banner 2 Image:</label>
                    <br>
                    <?php if ($banner2img) { ?>
                        <img src="../<?php echo $row["banner2Image"]; ?>" id="reuploadBanner2Image" alt="Banner 2" style="width:100px;margin-bottom:10px;">
                        <label for="reuploadBanner2" style="cursor: pointer; color: blue;" >Re-upload Image</label>
                        <input type="file" class="form-control file-input" id="reuploadBanner2" name="banner2" accept="image/*" style="display: none;">
                        <br>
                        <input type="checkbox" id="removeBanner2" name="removeBanner2"> Remove Image
                    <?php } else { ?>
                        <span>No image uploaded</span>
                        <input type="file" class="form-control file-input" id="reuploadBanner2" name="banner2" accept="image/*">
                    <?php } ?>
                        <br>
                    <label for="description2" class="form-label">Banner 2 Description:</label>
                    <textarea class="form-control" id="description2" name="description2" rows="3" required><?php echo $banner2Description; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="banner3" class="form-label">Banner 3 Image:</label>
                    <br>
                    <?php if ($banner3img) { ?>
                        <img src="../<?php echo $row["banner3Image"]; ?>" id="reuploadBanner3Image" alt="Banner 3" style="width:100px;margin-bottom:10px;">
                        <label for="reuploadBanner3" style="cursor: pointer; color: blue;">Re-upload Image</label>
                        <input type="file" class="form-control file-input" id="reuploadBanner3" name="banner3" accept="image/*" style="display: none;">
                        <br>
                        <input type="checkbox" id="removeBanner3" name="removeBanner3"> Remove Image
                    <?php } else { ?>
                        <span>No image uploaded</span>
                        <input type="file" class="form-control file-input" id="reuploadBanner3" name="banner3" accept="image/*">
                    <?php } ?>
                        <br>
                    <label for="description3" class="form-label">Banner 3 Description:</label>
                    <textarea class="form-control" id="description3" name="description3" rows="3" required><?php echo $banner3Description; ?></textarea>
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
            var formData = new FormData($("#basicForm")[0]);

            $.ajax({
                type: "POST",
                url: "../ajax.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert("Form submitted successfully!");
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
    document.getElementById('reuploadBanner1').addEventListener('change', function() {
        var img = document.getElementById('reuploadBanner1Image');
        var fileInput = document.getElementById('reuploadBanner1');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                img.src = e.target.result;
            }

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
    document.getElementById('reuploadBanner2').addEventListener('change', function() {
        var img = document.getElementById('reuploadBanner2Image');
        var fileInput = document.getElementById('reuploadBanner2');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                img.src = e.target.result;
            }

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
    document.getElementById('reuploadBanner3').addEventListener('change', function() {
        var img = document.getElementById('reuploadBanner3Image');
        var fileInput = document.getElementById('reuploadBanner3');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                img.src = e.target.result;
            }

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>
</body>
</html>