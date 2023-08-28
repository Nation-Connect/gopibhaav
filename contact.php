<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Gopi Bhaav, Online Pooja Samagri Platform </title>
    <!-- Rest of your meta tags and CSS libraries -->
    <?php include 'head.php'; ?>


</head>

<body>

    <?php include 'header.php'; ?>


    <!-- Page Header Start -->
    <div class="page-header"
        style="background-image: url(public/assets/img/pexels-miguel-á-padriñán-19670.jpg); background-repeat: no-repeat, repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <!--  <div class="col-12">
                <h2>Contact</h2>
            </div> -->
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Get In Touch</p>
                <h2>For Any Query</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.2s">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p> Coporate Office: Sector 41 Main, Dadri Main Rd, Aghapur, Noida, Uttar Pradesh 201301
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.4s">
                            <i class="fa fa-phone-alt"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p><a href="tel:+91 ">+91 </a></p>
                            </div>
                        </div>
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.6s">
                            <i class="far fa-envelope"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p><a href="mailto: info@gopibhaav.in"> info@gopibhaav.in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p style="color: black;">Feel free to reach out to us with your questions, thoughts, or needs. Our
                        dedicated team is ready to assist you. Your satisfaction is our priority!.</p>
                    <p><b>Note:</b> Will keep your details confidential.</p>
                    <div class="contact-form">
                        <div id="success"></div>
                        <form class="ajaxformclass" id="contact-form1" method="post" action="#">
						<input type="hidden" name="send-contact-mail" />
                            <div class="control-group">
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name"
                                    required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="email" type="email" class="form-control" id="email"
                                    placeholder="Your Email" required="required" d />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <input name="phone" type="text" class="form-control" id="email"
                                    placeholder="Your Phone" required="required" d />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="subject" type="text" class="form-control" id="subject"
                                    placeholder="Subject" required="required" d />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea name="message" class="form-control" id="message" placeholder="Message"
                                    required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn submit-btn" type="submit" id="sendMessageButton" name="submit">Send Message</button>
                            </div>
							<div id="form-message-success" style="display:none;font-size:20px;margin-top:10px;"
                                        class="mb-4 text-center text-success">
                                        Your message was sent, Thank you!
                                    </div>
                                    <div id="form-message-danger" style="display:none;font-size:20px;margin-top:10px;"
                                        class="mb-4 text-center text-danger">
                                        Something went wrong!, please try again.
                                    </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <!-- Contact End -->

    <?php include 'footer.php'; ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

	<script>
        $("#contact-form1").submit(function(event) {
            event.preventDefault();
            $(".submit-btn").html("<i class=`fa fa-circle-notch fa-spin`></i> Please wait...");
            $(".submit-btn").prop('disabled', true);
            $('#form-message-success').hide();
            $('#form-message-danger').hide();
            var formValues = $(this).serialize();
            $.post("mail-service.php", formValues, function(data) {
                $(".submit-btn").html("Send Message");
                $(".submit-btn").prop('disabled', false);
                if (data) {
                    $('#form-message-success').show().delay(5000).fadeOut(500);
                    $("#contact-form1")[0].reset();
                } else {
                    $('#form-message-danger').show().delay(5000).fadeOut(500);
                }
            });
        });
        </script>


</body>

</html>