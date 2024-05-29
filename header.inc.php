<?php

//   session_start();
//
//   if(!isset($_SESSION['unlock']))
//       $_SESSION['unlock'] = "false";
//   elseif(isset($_GET['unlock']) && $_SESSION['unlock'] != $_GET['unlock'] && !empty($_GET['unlock'])){
//       if ($_GET['unlock'] == 'true')
//           $_SESSION['unlock']= "true";
//       elseif($_GET['unlock'] != "true")
//           $_SESSION['unlock'] = "false";
//   }
//
//   if(empty($_SESSION['unlock'])) {
//       header("Location: https://ultimumpilaeleague.in/");
//       exit;
//   }elseif($_SESSION['unlock'] != 'true'){
//       header("Location: https://ultimumpilaeleague.in/");
//       exit;
//   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi">
    <meta name="keywords" content="Film PRO, Pratheesh Sekhar, Best PRO, Malayalam Film PRO, Tamil Film PRO, Telugu Film PRO, Kannada Film PRO, experienced PRO, moviepro, film maker pro, movie pro app, hit film pro, online movie pro, pr officer, public relations officer duties, public relation officer duties and responsibilities, functions of public relations officer, pr officer meaning, role of public relations officer, assistant public relation officer">
    <meta name="description" content="India's No. 1 Fashion TV Channel.">
    <meta name="author" content="Ullas G Revi">
    <link rel="canonical" href="https://iftv.in/" />

    <meta property="og:title" content="Indian Fashion TV">
    <meta property="og:description" content="India's No. 1 Fashion TV Channel.">
    <meta property="og:image" content="https://iftv.in/media/logo/iftv_logo_normal.webp">
    <meta property="og:url" content="https://iftv.in">
    <meta property="og:type" content="Fashion TV Channel" />

    <meta name="twitter:title" content="Indian Fashion TV">
    <meta name="twitter:description" content="India's No. 1 Fashion TV Channel.">
    <meta name="twitter:url" content="https://iftv.in/media/logo/iftv_logo_normal.webp">
    <meta name="twitter:card" content="India's No. 1 Fashion TV Channel.">

    <!----- S CSS LINKING ----->

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!----- E CSS LINKING ----->

    <!----- FAVICON ----->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!----- FAVICON ----->

    <!----- S JAVASCRIPT LINKING ----->

    

    <!----- E JAVASCRIPT LINKING ----->

    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/643d125431ebfa0fe7f8b942/1gu78v78s';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->

    <!----- S OUTSIDE APIS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <!----- E OUTSIDE APIS -->

    <title><?php echo $page_title; ?></title>

</head>
<body>

<div id="menu">
    <div data-aos="fade-right" data-aos-duration="500" data-aos-delay="100" id="menu-bar" onclick="menuOnClick()">
    <div id="bar1" class="bar"></div>
    <div id="bar2" class="bar"></div>
    <div id="bar3" class="bar"></div>
    </div>
    <nav class="nav" id="nav">
        <ul>
            <li data-aos="fade-down" data-aos-duration="500" data-aos-delay="100"><a href="index.php#">Home</a></li>
            <li data-aos="fade-down" data-aos-duration="500" data-aos-delay="200"><a href="contents_iftv.php">Services</a></li>
            <li data-aos="fade-down" data-aos-duration="500" data-aos-delay="300"><a href="gallery.php">Gallery</a></li>
            <li data-aos="fade-down" data-aos-duration="500" data-aos-delay="400"><a href="index.php#contact_Section">Contact Us</a></li>
            <li data-aos="fade-down" data-aos-duration="500" data-aos-delay="500"><a href="about_us.php">About Us</a></li>
        </ul>
    </nav>
</div>
<div class="menu-bg" id="menu-bg"></div>
<div class="header_bg_pc"></div>
<img onclick="window.location.href='https://iftv.in'" data-aos="fade-left" data-aos-duration="500" data-aos-delay="750" class="header_logo_short" src="./media/logo/iftv_logo_normal.webp" alt="Logo">
<img onclick="window.location.href='https://iftv.in'" data-aos="fade-left" data-aos-duration="500" data-aos-delay="750" class="header_logo" src="./media/logo/iftv_logo_normal.webp" alt="Logo">

<div id="moveUpBtn">
    <a href="#"><i class="fa-solid fa-circle-arrow-up" href="#"></i></a>
</div>