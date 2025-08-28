<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

 <section class="hero-sec contact_us">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="contact_inner">
                    <div class="row">
                        <div class="col-12 col-lg-10">
                            <div class="contact_form_inner">
                                <div class="contact_field">
                                    <h3>Contact Us</h3>
                                    <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                                    <form method="POST" id="contact-form">
                                        <input type="text" class="form-control form-group" placeholder="Name" name="name" id="name" />
                                        <input type="email" class="form-control form-group" placeholder="Email"  name="email" id="email" />
                                        <textarea class="form-control form-group" placeholder="Message" name="message" id="message"></textarea>
                                        <a href="javascript:;" class="contact_form_submit" onclick="contactSubmit();">Send</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="right_conatct_social_icon d-flex align-items-end">
                                <div class="socil_item_inner d-flex">
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="https://www.instagram.com/urbancodetraining/" target="blankg"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/@UrbanCodeTrainingSolutions" target="blankg"><i class="fab fa-youtube"></i></a></li>
                                </div>
                            </div>
                        </div>
                    </div><?php       
        
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
                        } else{
                            $phoneNumber = '';
                            $email = '';
                            $address1 = '';
                            $address2 = '';
                        } ?>
                    <div class="contact_info_sec">
    <h4>Contact Info</h4>
    <div class="d-flex info_single align-items-center">
        <i class="fa-solid fa-building"></i>
        <span>Urbancode Edutech Solutions Private Limited</span>
    </div>
    <div class="d-flex info_single align-items-center">
        <i class="fa-solid fa-phone"></i>
        <span><a href="tel:<?php echo $phoneNumber; ?>" style="color: #fff; text-decoration: none;"><?php echo $phoneNumber; ?></a></span>
    </div>
    <div class="d-flex info_single align-items-center">
        <i class="fas fa-envelope-open-text"></i>
        <span><a href="mailto:<?php echo $email; ?>" style="color: #fff; text-decoration: none;"><?php echo $email; ?></a></span>
    </div>
    <!--<div class="d-flex info_single align-items-center">-->
    <!--    <i class="fas fa-map-marked-alt"></i>-->
    <!--    <span><?php echo $address1; ?></span>-->
    <!--</div>-->
    <div class="d-flex info_single align-items-center">
        <i class="fas fa-file-invoice"></i>
        <span><strong>GST No:</strong> 33AADCU726Q1ZR</span>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php';?>