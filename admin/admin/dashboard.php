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
    <title>Dashboard</title>
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
                    <div class="nav-option option active"> 
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

        <div class="box-container"> 
            <div class="box box1"> 
                <div class="text"> 
                    <h2 class="topic-heading"> <?php 
                        $sql = "SELECT * FROM enroll_list WHERE reg_area = 'brochure'"; 
                        $result = $conn->query($sql);
                        $rowCount = $result->num_rows;
                        echo $rowCount; ?>
                    </h2> 
                    <h2 class="topic">Recent Download</h2> 
                </div>               
            </div> 
            <div class="box box2"> 
                <div class="text"> 
                    <h2 class="topic-heading"> <?php 
                        // $sql = "SELECT * FROM enroll_list WHERE reg_area = 'enquiry'"; 
                        $sql = "SELECT * FROM enroll_list WHERE reg_area IN ('enquiry', 'banner')";
                        $result = $conn->query($sql);
                        $rowCount = $result->num_rows;
                        echo $rowCount; ?>
                    </h2>  
                    <h2 class="topic">Enroll</h2> 
                </div>               
            </div> 
            <div class="box box3"> 
                <div class="text"> 
                    <h2 class="topic-heading"> <?php 
                        $sql = "SELECT * FROM study_abroad"; 
                        $result = $conn->query($sql);
                        $rowCount = $result->num_rows;
                        echo $rowCount; ?>
                    </h2>
                    <h2 class="topic">Study Abroad</h2> 
                </div>               
            </div>             
            <div class="box box4"> 
                <div class="text"> 
                    <h2 class="topic-heading"> <?php 
                        $sql = "SELECT * FROM mentor_register"; 
                        $result = $conn->query($sql);
                        $rowCount = $result->num_rows;
                        echo $rowCount; ?>
                    </h2>
                    <h2 class="topic">Mentor</h2> 
                </div>               
            </div>
            
        </div> 

      <div class="report-container">           
        <div class="tabs">
            <div class="tabs__nav">
                <button class="tabs__nav-btn" type="button" data-tab="#tab_1">Recent Download</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_2">Enroll</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_3">Study Abroad</button>
                <button class="tabs__nav-btn" type="button" data-tab="#tab_4">Mentor</button>
            </div>
            <div class="tabs__content">
                <div class="tabs__item" id="tab_1">  
                    <div class="table_container">                  
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql = "SELECT * FROM enroll_list WHERE reg_area = 'brochure' ORDER BY id DESC";
                                $result = $conn->query($sql);
                                $serialNumber = 1;
                                if ($result->num_rows > 0) {
                                    while ($res = $result->fetch_assoc()): 
                                        if($serialNumber <= 10){?>
                                            <tr>
                                                <td><?php echo $serialNumber; ?></td>
                                                <td><?php echo $res['email']; ?></td>
                                                <td><?php echo $res['phone']; ?></td>
                                            </tr> <?php 
                                            $serialNumber++;  
                                        }
                                    endwhile;

                                } else {
                                    echo '<tr><td colspan="4">No List found.</td></tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tabs__item" id="tab_2">
                    <div class="table_container">                  
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql = "SELECT * FROM enroll_list WHERE reg_area IN ('enquiry', 'banner') ORDER BY id DESC";
                                $result = $conn->query($sql);
                                $serialNumber = 1;
                                if ($result->num_rows > 0) {
                                    while ($res = $result->fetch_assoc()): 
                                        if($serialNumber <= 10){?>
                                            <tr>
                                                <td><?php echo $serialNumber; ?></td>
                                                <td><?php echo $res['email']; ?></td>
                                                <td><?php echo $res['phone']; ?></td>
                                            </tr> <?php 
                                            $serialNumber++;  
                                        }
                                    endwhile;

                                } else {
                                    echo '<tr><td colspan="4">No List found.</td></tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tabs__item" id="tab_3">
                    <div class="table_container">                  
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql = "SELECT * FROM study_abroad ORDER BY id DESC";
                                $result = $conn->query($sql);
                                $serialNumber = 1;
                                if ($result->num_rows > 0) {
                                    while ($res = $result->fetch_assoc()): 
                                        if($serialNumber <= 10){?>
                                            <tr>
                                                <td><?php echo $serialNumber; ?></td>
                                                <td><?php echo $res['email']; ?></td>
                                                <td><?php echo $res['phone']; ?></td>
                                            </tr> <?php 
                                            $serialNumber++;  
                                        }
                                    endwhile;

                                } else {
                                    echo '<tr><td colspan="4">No List found.</td></tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tabs__item" id="tab_4">
                    <div class="table_container">                  
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql = "SELECT * FROM mentor_register ORDER BY id DESC";
                                $result = $conn->query($sql);
                                $serialNumber = 1;
                                if ($result->num_rows > 0) {
                                    while ($res = $result->fetch_assoc()): 
                                        if($serialNumber <= 10){?>
                                            <tr>
                                                <td><?php echo $serialNumber; ?></td>
                                                <td><?php echo $res['email']; ?></td>
                                                <td><?php echo $res['phone']; ?></td>
                                            </tr> <?php 
                                            $serialNumber++;  
                                        }
                                    endwhile;

                                } else {
                                    echo '<tr><td colspan="4">No List found.</td></tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	    <!-- <div class="table_container">
            <table class="table mt-3" style="min-width: 700px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    /*$sql = "SELECT * FROM enroll_list WHERE reg_area = 'brochure' ORDER BY id DESC";
                    $result = $conn->query($sql);
                    $serialNumber = 1;
                    if ($result->num_rows > 0) {
                        while ($res = $result->fetch_assoc()): 
                            if($serialNumber <= 10){?>
                                <tr>
                                    <td><?php echo $serialNumber; ?></td>
                                    <td><?php echo $res['email']; ?></td>
                                    <td><?php echo $res['phone']; ?></td>
                                </tr> <?php 
                                $serialNumber++;  
                            }
                        endwhile;

                    } else {
                        echo '<tr><td colspan="4">No List found.</td></tr>';
                    }*/ ?>
                </tbody>
            </table> 
        </div> -->
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
</script>
</body>
</html>