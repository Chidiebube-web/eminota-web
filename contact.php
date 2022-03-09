<?php 


if(!empty($_POST['submitForm'])){

    $errors =[];
    $success = [];
    $report = [];
    extract($_POST);

    if(empty($fullname)){
        $errors['fullname'] = "Please Enter Your Name";
    }else{
        $report['fullname'] = $fullname;
    }

    if(empty($inform1)){
        $errors['inform1'] = "Please input an E-mail";
    }else{
        $report['inform1'] = $inform1;
    }

    if(str_word_count($comment) <= 10){
        $errors['no_of_words'] = "Number of words must be more than ten";
    }

    if(empty($comment)){
        $errors['comment'] = "Tell us how we can help you";
    }else{
        $report['comment'] = $comment;
    }

    if(empty($errors)){
        $errors['success'] = "Message sent successfully";
    }

    // if(empty($errors)){
    //     $errors['sucess'] = 'Sent Successfully';
    //     // echo "<pre>";
    //     // print_r($formInfo);
    // }

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <!-- <link rel="stylesheet" href="js/jquery-ui.min.css">
    <link rel="stylesheet" href="js/jquery-ui.theme.css">
    <link rel="stylesheet" href="js/jquery-ui.structure.css"> -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">
    <title>Eminota Printing Press</title>
</head>
<body>
    <!-- EMINOTA WEB APP -> CONTACT -->
    <!-- HEADER -->
    <header>
        <!-- LOGO -->
        <a href="index.html" class="logo d-inline-block"><img src="images/logo.jpg" alt="logo"></a>
        <!-- TOGGLE -->
        <p class="d-inline-block bars">
            <button class="btn border1 hover" style="border-color: lightblue;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span class="fa fa-bars"></span>
            </button>
        </p>
        <!-- NAVS AND LINKS TO BE TOGGLED -->
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="nav w-30">
                    <ul class="ul">
                        <li><a class="list" href="index.html">Home</a></li>
                        <li><a class="list" href="business.html">Business</a></li>
                        <li><a class="list" href="contact.html">Contact-us</a></li>
                        <li><a class="list" href="services.html">Services</a></li>
                        <li><a class="list" href="about.html">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- GOOGLE MAP AREA OF EMINOTA -->
    <div class="map1" style="height: 400px;">
        <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=2%20Amokwe%20Street,%20uwani&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:1000px;}</style><a href="https://www.embedgooglemap.net">embed map on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1000px;}</style></div></div> -->
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.729292584336!2d7.491130312946693!3d6.428813526044859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a1653f443c95%3A0xff1d849a33a94b98!2s2%20Amokwe%20Street%2C%20Achara%2C%20Enugu!5e0!3m2!1sen!2sng!4v1626276188082!5m2!1sen!2sng" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            
        <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="1440" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=2%20Amokwe%20Street,%20Enugu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org">fmovies2.org</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:1440px;}</style><a href="https://www.embedgooglemap.net">get google maps embed code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1440px;display:none;}</style></div></div> -->
    </div>
    <!-- THE CONTACT SECTION -->
    <section class="contact mb-5">
        <div class="body d-inline-block container p-5">
            <h3 style="color: blue">Contact Us</h3>
            <h1><b>Send Message</b></h1>
            <!-- FORM FOR SUBMISSION -->
            <form action="mailto:eminotaa@yahoo.com" method="POST">
                
                <?php if(!empty($errors['success'])){ ?>
                    <span class="text-success h1"><b><?=$errors['success']; ?></b></span>
                <?php } ?>

                <input name="fullname" id="fullname" type="text" class="form-control mb-4 inform" placeholder="Your full name" value="<?php if(!empty($_POST['fullname'])){ echo $_POST['fullname'];} ?>">

                <?php if(!empty($errors['fullname'])){ ?>
                    <span class="text-danger"><?=$errors["fullname"]; ?></span>
                <?php } ?>

                <input type="email" name="inform1" class="form-control mb-4 inform" placeholder="Your email address" value="<?php if(!empty($_POST['inform1'])){ echo $_POST['inform1'];} ?>">

                <?php if(!empty($errors['inform1'])){ ?>
                    <span class="text-danger"><?=$errors['inform1']; ?></span>
                <?php } ?>

                <textarea name="comment" id="comments" cols="64" rows="6" minlength="10" placeholder="What are you looking for?" class="form-control mb-4 inform" value="<?php if(!empty($_POST['comment'])){ echo $_POST['comment'];} ?>"></textarea>

                <?php if(!empty($errors['comment'])){ ?>
                    <span class="text-danger d-block"><?=$errors['comment']; ?></span>
                <?php } ?>

                <?php if(!empty($errors['no_of_words'])){ ?>
                    <span class="text-danger d-block"><?=$errors['no_of_words']; ?></span>
                <?php } ?>

                <input id="submitForm" name="submitForm" type="submit" class="link1" value="Submit">
            </form>
        </div>
        <div class="other d-inline-block text-align-center p-4">
            <h3 style="color: blue;">Contact Info</h3>
            <h1 class="mb-5">Details</h1>
            <p>Address</p>
            <span style="color: grey;">2 Amokwe Street Off Zik Avenue Uwani <br> Enugu, Nigeria</span>
            <p>Phone</p>
            <span>+234 806 3380 559</span>
            <p>E-mail</p>
            <span>eminotaa@yahoo.com</span>
        </div>
    </section>
    <!-- FOOTER SECTION OF EMINTOA -->
    <footer class="border1" style="height: 450px; background-color: #000; color: #fff; padding-top: 60px;">
        <!-- THE FIRST LAYER THAT CONTAINS THE FOOTER LINKS AND ALL -->
        <div class="container">
            <div class="box1 w-50 p-3 d-inline-block" style="height:250px; margin-bottom: 30px; margin-right: 100px;">
                <h4 class="mb-4"><b style="font-size: 30px;">About Eminota</b></h4>
                <p style="font-size: 18px;">Eminota is a printing and publishing company that is very passionate about bringing and giving the best services you could have. Our customer satisafaction is key both in quality and in timing.</p>
            </div>
            <div class="img1 d-inline-block" style="width: 35%; height: 130px; margin-top: 60px; "><img src="images/logo-black.jpg" alt="logo-black"></div>
            <div class="sth border" style="margin-bottom: 40px;"></div>
            <div class="box2" style="margin-left: 60px;">
                <ul class="ul2">
                    <li class="mb-3 d-inline-block"><a id="link1" href="business.html">Business</a></li>
                    <li class="mb-3 d-inline-block"><a id="link1" href="about.html">About</a></li>
                    <li class="mb-3 d-inline-block"><a id="link1" href="services.html">Services</a></li>
                    <li class="mb-3 d-inline-block"><a id="link3" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <!-- THE END -->
    </footer>
















<script src="js/jquery2.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/index.js"></script>
   
</body>
</html>