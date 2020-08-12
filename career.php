<?php
                                                                     $postData = $uploadedFile = $statusMsg = '';
                                                                    $msgClass = 'errordiv';
                                                                    
                                                                    $but = 0;
                                                                    
                                                                    if(isset($_POST['submit'])){
                                                                        
                                                                     //   echo '<script type="text/javascript">alert("Mail Sent");</script>';
                                                                        
                                                        $but = 1;
                                                                        
                                                                        // Get the submitted form data
                                                                        $postData = $_POST;
                                                                        $email = "dev.saiful@gmail.com";// $_POST['email'];
                                                                        $name = $_POST['name'];
																		$position = $_POST['position'];
																		$salary = $_POST['salary'];
                                                                        $message = $_POST['message'];
                                                                        
                                                                        // Check whether submitted data is not empty
                                                                        if(!empty($email) && !empty($name) && !empty($position)){
                                                                            
                                                                            // Validate email
                                                                            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                                                                                $statusMsg = 'Please enter your valid email.';
                                                                            }else{
                                                                                $uploadStatus = 1;
                                                                                
                                                                                // Upload attachment file
                                                                                if(!empty($_FILES["attachment"]["name"])){
                                                                                    
                                                                                    // File path config
                                                                                    $targetDir = "uploads/";
                                                                                    $fileName = basename($_FILES["attachment"]["name"]);
                                                                                    $targetFilePath = $targetDir . $fileName;
                                                                                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                                                                                    
                                                                                    // Allow certain file formats
                                                                                    $allowTypes = array('pdf');
                                                                                    if(in_array($fileType, $allowTypes)){
                                                                                        // Upload file to the server
                                                                                        if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                                                                                            $uploadedFile = $targetFilePath;
                                                                                        }else{
                                                                                            $uploadStatus = 0;
                                                                                            $statusMsg = "Sorry, there was an error uploading your file.";
                                                                                            
                                                                                        }
                                                                                    }else{
                                                                                        $uploadStatus = 0;
                                                                                        $statusMsg = 'Sorry, only PDF file are allowed to upload.';
                                                                                    }
                                                                                }
                                                                                
                                                                                if($uploadStatus == 1){
                                                                                    
                                                                                    // Recipient
                                                                                    $toEmail = 'info@bacbonschool.com';
                                                                    
                                                                                    // Sender
                                                                                    $from = 'info@bacbonschool.com';
                                                                                    $fromName = 'Bacbon School';
                                                                                    
                                                                                    // Subject
                                                                                    $emailSubject = 'CV Submitted by '.$name;
                                                                                    
                                                                                    // Message 
                                                                                    $htmlContent = '<h2>CV Submitted</h2>
                                                                                        <p><b>Name:</b> '.$name.'</p>
																						<p><b>Position:</b> '.$position.'</p>
																						<p><b>Salary Expectation:</b> '.$salary.'</p>
                                                                                        <p><b>Message:</b>'.$message.'</p>';
                                                                                    
                                                                                    // Header for sender info
                                                                                    $headers = "From: $fromName"." <".$from.">";
                                                                    
                                                                                    if(!empty($uploadedFile) && file_exists($uploadedFile)){
                                                                                        
                                                                                        // Boundary 
                                                                                        $semi_rand = md5(time()); 
                                                                                        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                                                                                        
                                                                                        // Headers for attachment 
                                                                                        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                                                                                        
                                                                                        // Multipart boundary 
                                                                                        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                                                                                        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                                                                                        
                                                                                        // Preparing attachment
                                                                                        if(is_file($uploadedFile)){
                                                                                            $message .= "--{$mime_boundary}\n";
                                                                                            $fp =    @fopen($uploadedFile,"rb");
                                                                                            $data =  @fread($fp,filesize($uploadedFile));
                                                                                            @fclose($fp);
                                                                                            $data = chunk_split(base64_encode($data));
                                                                                            $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                                                                                            "Content-Description: ".basename($uploadedFile)."\n" .
                                                                                            "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                                                                                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                                                                                        }
                                                                                        
                                                                                        $message .= "--{$mime_boundary}--";
                                                                                        $returnpath = "-f" . $email;
                                                                                        
                                                                                        // Send email
                                                                                        $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                                                                                        
                                                                                        // Delete attachment file from the server
                                                                                        @unlink($uploadedFile);
                                                                                    }else{
                                                                                         // Set content-type header for sending HTML email
                                                                                        $headers .= "\r\n". "MIME-Version: 1.0";
                                                                                        $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                                                                                        
                                                                                        // Send email
                                                                                        $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                                                                                    }
                                                                                    
                                                                                    // If mail sent
                                                                                    if($mail){
                                                                                        $statusMsg = 'Your CV has been submitted successfully !';
                                                                                        $msgClass = 'succdiv';
                                                                                        $postData = '';
                                                                                        $but = 0;
                                                                                        echo '<script type="text/javascript">alert("Thank you ' .$name.' . '.$statusMsg.'");</script>';
                                                                                        
                                                                                        
                                                                                        
                                                                                    }else{
                                                                                        $statusMsg = 'Your CV submission failed, please try again.';
                                                                                        echo "<script type='text/javascript'>".$statusMsg."</script>";
                                                                                    }
                                                                                }
                                                                            }
                                                                        }else{
                                                                            $statusMsg = 'Please fill all the fields.';
                                                                             echo "<script type='text/javascript'>".$statusMsg."</script>";
                                                                        }
                                                                    }
                                                                    ?>

<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <meta charset="UTF-8">
    <title>BacBon || Career</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="fonts/flaticon.css" />
    <!--favicon-->
    <link rel="shortcut icon" href="images/favicon/favicon.png">

    <!-- jQuery js -->
    <script src="js/jquery.js"></script>

    <style>
    .default-form input[type="text"] {

    height: 35px !important;
    
}
    </style>

</head>

<body>
    <div class="boxed_wrapper">

         <!-- header start -->
         <?php include_once('layout/header.php'); ?>
        <!-- header end -->

        <!--Page Title-->
        <section class="bredcrumb">
            <div class="bg-image text-center" style="background-image: url('images/resources/banner.jpg');">
                <h1>Career</h1>
            </div>
            <div class="">
                <ul class="middle">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="inner" href="#">Career</a></li>
                </ul>
            </div>
        </section>
        <!--Page Title Ends-->


        <div class="container" style="padding:30px">



            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="sec-title">
                    <h2 class="left">Career</h2>
                    <p>We are hiring an Intern from:

                        <br>– International Japanese final year student/ graduate.
                        <br>So, join us and work with a beautiful team of talented people that will help you achieve your goal and be a great human!

                        <br>Drop your CV at hr@bacbonltd.com

                        <br>APPLY NOW for an enriched internship journey with BacBon Ltd! </p>
                </div>
                <br />
                <h4 class="left ">
                    <storng>Job Location: </strong>
                </h4>
                <p style="padding-top:20px; text-align:justify">Dhaka, Bangladesh</p>

                <br />
                <h4 class="left ">
                    <storng>Benefits: </strong>
                </h4>
                <p style="padding-top:20px; text-align:justify">Food and Transportation cost will be provided (But no accommodation cost will be given)</p>

                <br />

                <h4 class="left ">
                    <storng>Eligibilities: </strong>
                </h4>
                <p style="padding-top:20px; text-align:justify">Open for all (Especially passionate people who are studying in their final year or just graduated from a university)</p>

                <br />

            </div>
            <div class="col-md-5 col-sm-10 col-xs-12">
                <div class="item">
                    <figure class="image-box">
                        <img src="images/career/career_logo.png" alt="" style="padding-top:30px" />
                        <!-- height="615" -->
                    </figure>
                </div>
            </div>

        </div>


        <div style="background-color: whitesmoke; padding: 60px 0px">
            <div class="container">


                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="sec-title ">
                        <h3 class="left">WE’RE HIRING: COME JOIN US!</h3>
                        <br>
                        <p class="left" style="text-align: justify">Fill up the form below and do not forget to attach your resume. Please be aware, after successful screening, an interview will take place. If you deserve the position, we will contact you soon.</p>
                    </div>
                    <div class="default-form-area">
                        <form id="cv-form" method="post" action="" class=" default-form" enctype="multipart/form-data" data-toggle="validator">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <div class="form-group style-two">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" style="height:35px" data-error="Your name is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group style-two">
                                        <input type="text" name="position" class="form-control" placeholder=" Position" style="height:35px" data-error="Position is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group style-two">
                                    <input type="file" id="cv-upload" name="attachment" accept="application/pdf" style="height:35px"  data-error="File is required" required>
									<div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group style-two">
                                        <input type="text"  name="salary" placeholder="Your salary expectation. Ex. 10000" style="height:35px" class="form-control numeric" data-error="salary expectation is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group style-two">
                                        <textarea name="message" class="form-control textarea required" rows="4" placeholder="Your Message" data-maxlength="200" data-error="Your message is  not more than 200 characters" required ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-section-btn text-center">
                                <div class="form-group style-two">
                                    <input id="submit" type="submit" name="submit" data-loading-text="Please wait..." class="thm-btn thm-color" value="SUBMIT">
                                </div>
                            </div>
                        </form>

                        <!-- Display submission status -->
                        <?php if(!empty($statusMsg)){ ?>
                            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-md-5 col-sm-10 col-xs-12">
                    <div class="item">
                        <figure class="image-box">
                            <img src="images/career/1.png" alt="" />
                        </figure>
                    </div>
                </div>


            </div>

        </div>

        <!-- Call to action -->

        <!-- footer start -->
		<?php include_once('layout/footer.php'); ?>
		<!-- footer end -->



        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s color2_bg">
            <span class="fa fa-angle-up"></span>
        </button>
        <!-- pre loader  -->
        <div class="preloader"></div>

        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery ui js -->
        <script src="js/jquery-ui.js"></script>
        <!-- owl carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/validator.min.js"></script>
        <!-- mixit up -->
        <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/menuzord.js"></script>
        <script type="text/javascript" src="js/jquery.numeric-min.js"></script>
        <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
        <script type="text/javascript" src="js/jquery.numeric-min.js"></script>
        <!-- fancy box -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.polyglot.language.switcher.js"></script>
        <script src="js/nouislider.js"></script>
        <script src="js/jquery.bootstrap-touchspin.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/imagezoom.js"></script>
        <script src="js/validation.js"></script>
        <script id="map-script" src="js/default-map.js"></script>
        <script src="js/custom.js"></script>



    </div>



    <script>
			$('#cv-upload').filestyle({
				'placeholder' : 'Upload pdf file'
			});

			$('.numeric').numeric({
				negative: false
				})
			
                var form = $( "#cv-form" );
				$(document).ready(function() {
                       	$( "#submit" ).click(function() {
                      if ($('#cv-form').validator('validate').has('.has-error').length) {
                          //  alert('SOMETHING WRONG');
                          }else {
                              // $('#submit').attr("disabled", true);
                              
                              setTimeout(function(){ $('#submit').attr("disabled", true); }, 500);
                              
                          }
                      
                    });
                 
                });
    </script>

</body>



</html>