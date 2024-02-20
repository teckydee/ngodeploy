<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <!-- bootstrap CSS cdn chere -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
  <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="https://www.justdial.com/JdSocial?postid=1599729584760506"> <i class="fa fa-phone"></i> +91 8966076870</a></li>
                                    <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"> <i class="fa fa-envelope"></i>come19ngo@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="https://wwww.facebook.xom/Come19ngo?mibextid=2JQ9oc" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/come_ngo/" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/children-of-mother-earth-social-welfare-society/" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="https://whatsapp.com/channel/0029VaBCW2m5fM5gsVVfRJ1b" target="_blank">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo/logo.jpg" alt="">
                                </a>
                                COME NGO
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="About.html">About</a></li>
                                        <li><a href="blog.html">blog </a>
                                           
                                        </li>
                                        <li><a href="#">our activity <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <!-- set the of google form here. -->
                                                <li><a href="">Blood Donation</a></li>
                                                <li><a href="">Spritual Activity</a></li>
                                                <li><a href="solar.html">Solar Energy</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="login.php">admin panel</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Make a Donate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->




<br>
<br>
<br>
<br>
<style type="text/css">
    .uploadss{
        margin: 60px;
       align-items: center;
       text-align: center; 

    }
</style>
<div class="uploadss">
<h2>Upload Text or Image</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
  
        <label for="text_content">Text Content:</label><br>
        <textarea id="text_content" name="text_content" rows="4" cols="50"></textarea>
   
   
        <label for="fileToUpload">Select File to Upload:</label><br>
      <br>  <div style="margin-left:-250px;"><input type="file" name="fileToUpload" id="fileToUpload">
    </div><br>
        <div style="margin-top:-30px; "><input type="submit" value="Upload" name="submit"></div>
  </form>
<br>
<br>
<h2>Delete Uploaded File</h2>
<div>
<form action="upload.php" method="post">
  
        <label for="filenameToDelete">Enter Filename to Delete:</label><br>
        <input type="text" name="filenameToDelete">
    
    
        <input type="submit" value="Delete" name="delete">
</form>
    </div>
</div>
<?php
// Handling file upload
if(isset($_POST["submit"])) {
    $text_content = $_POST['text_content'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "txt" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

            // Append the content to blog.html
            $blog_content = "<div class='post'><p>" . htmlspecialchars($text_content) . "</p>";
            $blog_content .= "<img src='" . htmlspecialchars($target_file) . "' alt='Uploaded Image'></div>";

            file_put_contents('blog.html', $blog_content, FILE_APPEND | LOCK_EX);

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Handling file deletion
if(isset($_POST["delete"])) {
    $filenameToDelete = $_POST["filenameToDelete"];
    $filepath = "uploads/" . $filenameToDelete;
    if (file_exists($filepath)) {
        if (unlink($filepath)) {
            echo "File " . $filenameToDelete . " has been deleted.";
        } else {
            echo "Error deleting " . $filenameToDelete;
        }
    } else {
        echo "File " . $filenameToDelete . " does not exist.";
    }
}
?>

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo/logo.jpg" alt="">
                                </a>
                            </div>
                            <p class="address_text">We are Children of mother Earth social welfare society (Come NGO) dedicated to creating postive change in our communities.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="wwww.facebook.xom/Come19ngo?mibextid=2JQ9oc">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                    <a href="https://www.linkedin.com/company/children-of-mother-earth-social-welfare-society/">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                    <li>
                                        <a href="www.instagram.com/come_ngo/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Fundraise</a></li>
                                <li><a href="#">Volunteer</a></li>
                                <li><a href="#">Partner</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p> 8966076870 <br>
                                    info@come(NGO).com <br>
                                    456/2 IT Park Indore,
                                    Madhya Pradesh
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for INDORE
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2024</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for India
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2024</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://sarovi.tech" target="_blank">SAROVI</a>
 </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>
</html>
