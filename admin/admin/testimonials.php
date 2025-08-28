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
    <title>Testimonials</title>
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
                    <div class="nav-option option active"> 
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
                <h1 class="recent-Articles">Tesimonials</h1> 
            </div> 
<div class="table_container">
            <table class="table mt-3" style="min-width: 700px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT * FROM testimonials";
                    $result = $conn->query($sql);
                    $serialNumber = 1;
                    if ($result->num_rows > 0) {
                        while ($testimonial = $result->fetch_assoc()): 
                        $skip = $testimonial['message'];
                        $escapedValue = htmlspecialchars($skip, ENT_QUOTES, 'UTF-8');
                        ?>
                            <tr>
                                <td><?php echo $serialNumber; ?></td>
                                <td style="width:150px;"><?php echo $testimonial['name']; ?></td>
                                <td><?php echo $testimonial['message']; ?></td>
                                <td style="width:120px;">
                                <button class="btn btn-warning btn-sm" onclick="editTestimonial(<?php echo htmlspecialchars($testimonial['id'], ENT_QUOTES, 'UTF-8'); ?>, '<?php echo htmlspecialchars($testimonial['name'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($escapedValue, ENT_QUOTES, 'UTF-8'); ?>')">Edit</button>


                                    <button class="btn btn-danger btn-sm" onclick="deleteTestimonial(<?php echo $testimonial['id']; ?>)">Delete</button>
                                </td>
                            </tr> <?php 
                            $serialNumber++;  
                        endwhile;

                    } else {
                        echo '<tr><td colspan="4">No testimonials found.</td></tr>';
                    } ?>
                </tbody>
            </table> 
</div>
        </div>        
        <div class="report-container mt-5" > 
            <div class="report-header"> 
                <h1 class="recent-Articles">Add Testimonial</h1> 
            </div> 

            <form method="post" id="testimonialForm" class="mt-3">
                <input type="hidden" id="editId">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" id="message" name="message" required style="min-height:150px;"></textarea>
                </div>
                <div class="error mb-2"></div>
                <div class="success mb-2"></div>
                <button type="button" class="btn btn-primary" onclick="testimonials()">Submit</button>
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
    function testimonials(){
        var name = document.getElementById("name").value;
        var message = document.getElementById("message").value;
        var editId = document.getElementById("editId").value;

        if (name == "" || message == "") {    
            $('.error').text('Please Fill All Details');
            return;
        }

        $.ajax({
            type: "POST",
            url: "../ajax.php",
            data: {'action': 'testimonialsForm', 'name': name, 'message': message, 'editId':editId},
            success: function(response) {  
                $('.success').text(response);
                $('.error').text('');
                setTimeout(function() {
                    document.getElementById("testimonialForm").reset();
                    location.reload();
                }, 1500);
            },
            error: function(xhr, status, error) {
                alert('error');
            }
        });
    }
    function editTestimonial(id, name, message) {
        document.getElementById("name").value = decodeEntities(name);
        document.getElementById("message").value = decodeEntities(message);
        document.getElementById("editId").value = id;
    }

    // Function to decode HTML entities in JavaScript
    function decodeEntities(encodedString) {
        var textArea = document.createElement('textarea');
        textArea.innerHTML = encodedString;
        return textArea.value;
}
    function deleteTestimonial(id) {
        var isConfirmed = confirm("Are you sure you want to delete this testimonial?");

        if (isConfirmed) {
            $.ajax({
                type: "POST",
                url: "../ajax.php",
                data: {'action': 'deleteTestimonial', 'id': id},
                success: function(response) {
                    alert(response);                     
                    setTimeout(function() {
                        location.reload();
                    }, 1500);
                },
                error: function(xhr, status, error) {
                    alert('Error deleting testimonial.'); // Handle error
                }
            });
        }
    }
</script>
</body>
</html>