<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.2.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musemenu.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "login.css"], "outOfDate":[]};
</script>
  
  <title>Login</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/master_public.css?crc=3921867154"/>
  <link rel="stylesheet" type="text/css" href="css/login.css?crc=165321517" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_public.css?crc=125096597"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_login.css?crc=3800082042" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="923"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox" id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem" id="u30103" href="index.php"><!-- image --><img class="block temp_no_img_src" id="u30103_img" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="123" data-image-height="162" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix" id="menuu30105"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u30106"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u30107" href="index.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u30110" alt="Home" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u30113"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u30116" href="about-us.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u30118" alt="About Us" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u30120"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u30121" href="competitions.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u30123" alt="Competitions" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u30127"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u30128" href="faqs.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u30130" alt="FAQs" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem" id="ppu31965-4"><!-- column -->
     <div class="clearfix colelem" id="pu31965-4"><!-- group -->
      <a class="nonblock nontext MuseLinkActive grpelem shared_content" id="u31965-4" href="login.php" data-content-guid="u31965-4_content"><!-- rasterized frame --><img class="temp_no_img_src" id="u31965-4_img" alt="Login" data-orig-src="images/u31965-4.png?crc=4214639081" data-image-width="40" src="images/blank.gif?crc=4208392903"/></a>
      <a class="nonblock nontext MuseLinkActive clip_frame grpelem shared_content" id="u31966" href="login.php" data-content-guid="u31966_content"><!-- image --><img class="block temp_no_img_src" id="u31966_img" data-orig-src="images/lock.png?crc=4016009377" alt="" data-image-width="12" data-image-height="13" src="images/blank.gif?crc=4208392903"/></a>
     </div>
     <img class="colelem temp_no_img_src" id="u36913-4" alt="Login" data-orig-src="images/u36913-4.png?crc=530157850" data-image-width="630" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <div class="colelem shared_content" id="u37009" data-content-guid="u37009_content"><!-- custom html -->
<?php # login_page.inc.php
// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Login';

// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}

// Display the form:
?><h1>Login</h1>
<form action="login.php" method="post">
	<p>Email Address: <input type="text" name="Email" size="20" maxlength="60" /> </p>
	<p>Password: <input type="password" name="Password" size="20" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Login" /></p>
</form>
<a href="register-competitor.php">Register as a Competitor</a>     </div>
    </div>
    <div class="verticalspacer shared_content" data-offset-top="539" data-content-above-spacer="539" data-content-below-spacer="49" data-content-guid="page_3_content"></div>
    <div class="grpelem shared_content" id="u30100" data-content-guid="u30100_content"><!-- content -->
     <div class="fluid_height_spacer"></div>
    </div>
    <div class="grpelem shared_content" id="u29913" data-content-guid="u29913_content"><!-- content -->
     <div class="fluid_height_spacer"></div>
    </div>
    <img class="grpelem temp_no_img_src" id="u30134-4" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="207" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u30110-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30118-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30123-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30130-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_922" data-min-width="830" data-max-width="922"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="118" data-image-height="155" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu30105"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30106"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.php" data-orig-id="u30107"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u30110"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30113"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="about-us.php" data-orig-id="u30116"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u30118"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30120"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitions.php" data-orig-id="u30121"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u30123"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30127"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="faqs.php" data-orig-id="u30128"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u30130"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu31965-4"><!-- column -->
     <span class="nonblock nontext MuseLinkActive colelem placeholder" data-placeholder-for="u31965-4_content"><!-- placeholder node --></span>
     <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-42.png?crc=97181590" data-image-width="605" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext MuseLinkActive clip_frame grpelem placeholder" data-placeholder-for="u31966_content"><!-- placeholder node --></span>
    <div class="verticalspacer shared_content" data-offset-top="539" data-content-above-spacer="539" data-content-below-spacer="49" data-content-guid="page_4_content"></div>
    <span class="grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="198" data-orig-id="u30134-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u30110-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30118-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30123-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30130-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_829" data-min-width="759" data-max-width="829"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="106" data-image-height="140" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu30105"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30106"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.php" data-orig-id="u30107"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u30110"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30113"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="about-us.php" data-orig-id="u30116"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u30118"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30120"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitions.php" data-orig-id="u30121"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u30123"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30127"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="faqs.php" data-orig-id="u30128"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u30130"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu31965-4"><!-- column -->
     <span class="nonblock nontext MuseLinkActive colelem placeholder" data-placeholder-for="u31965-4_content"><!-- placeholder node --></span>
     <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-43.png?crc=3796931493" data-image-width="544" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext MuseLinkActive clip_frame grpelem placeholder" data-placeholder-for="u31966_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_4_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="178" data-orig-id="u30134-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u30110-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30118-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30123-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30130-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_758" data-min-width="668" data-max-width="758"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="78" data-image-height="102" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu30105"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30106"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.php" data-orig-id="u30107"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u30110"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30113"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="about-us.php" data-orig-id="u30116"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u30118"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30120"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitions.php" data-orig-id="u30121"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u30123"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u30127"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="faqs.php" data-orig-id="u30128"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u30130"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu31965-4"><!-- column -->
     <span class="nonblock nontext MuseLinkActive colelem placeholder" data-placeholder-for="u31965-4_content"><!-- placeholder node --></span>
     <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-44.png?crc=3882938774" data-image-width="497" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext MuseLinkActive clip_frame grpelem placeholder" data-placeholder-for="u31966_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_4_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src shared_content" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="163" data-orig-id="u30134-4" src="images/blank.gif?crc=4208392903" data-content-guid="u30134-4_content"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u30110-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30118-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30123-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30130-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_667" data-min-width="541" data-max-width="667"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="58" data-image-height="76" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu31965-4"><!-- column -->
     <span class="nonblock nontext MuseLinkActive colelem placeholder" data-placeholder-for="u31965-4_content"><!-- placeholder node --></span>
     <nav class="MenuBar clearfix colelem" id="menuu30007"><!-- horizontal box -->
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u30029"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u30032" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u30034"><!-- state-based BG images --><img alt="Home" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u30034_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u30034_1_content"></div></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u30015"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u30016" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u30018"><!-- state-based BG images --><img alt="About Us" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u30018_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u30018_1_content"></div></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u30008"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u30009" href="competitions.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u30012"><!-- state-based BG images --><img alt="Competitions" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u30012_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u30012_1_content"></div></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u30022"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u30025" href="faqs.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u30028"><!-- state-based BG images --><img alt="FAQs" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u30028_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u30028_1_content"></div></div></a>
      </div>
     </nav>
     <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-45.png?crc=4239927658" data-image-width="437" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext MuseLinkActive clip_frame grpelem placeholder" data-placeholder-for="u31966_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u30134-4_content"><!-- placeholder node --></span>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u30034-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30018-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30012-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30028-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_540" data-min-width="520" data-max-width="540"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="43" data-image-height="57" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu31965-4"><!-- column -->
     <span class="nonblock nontext MuseLinkActive colelem placeholder" data-placeholder-for="u31965-4_content"><!-- placeholder node --></span>
     <nav class="MenuBar clearfix colelem temp_no_id" data-orig-id="menuu30007"><!-- horizontal box -->
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u30029"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="index.php" data-orig-id="u30032"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u30034"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30034_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30034_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u30015"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="about-us.php" data-orig-id="u30016"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u30018"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30018_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30018_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u30008"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitions.php" data-orig-id="u30009"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u30012"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30012_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30012_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u30022"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="faqs.php" data-orig-id="u30025"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u30028"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30028_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30028_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
     <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-46.png?crc=4180577718" data-image-width="354" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext MuseLinkActive clip_frame grpelem placeholder" data-placeholder-for="u31966_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="160" data-orig-id="u30134-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u30034-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30018-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30012-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30028-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/facebook_red.png?crc=492186112" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/twitter_red.png?crc=285332523" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_519" data-min-width="507" data-max-width="519"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="42" data-image-height="55" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu31965-4"><!-- column -->
     <a class="nonblock nontext MuseLinkActive colelem temp_no_id" href="login.php" data-orig-id="u31965-4"><!-- rasterized frame --><img class="temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u31965-4.png?crc=4214639081" data-image-width="38" data-orig-id="u31965-4_img" src="images/blank.gif?crc=4208392903"/></a>
     <nav class="MenuBar clearfix colelem temp_no_id" data-orig-id="menuu30007"><!-- horizontal box -->
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u30029"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="index.php" data-orig-id="u30032"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u30034"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30034_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30034_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u30015"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="about-us.php" data-orig-id="u30016"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u30018"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30018_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30018_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u30008"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitions.php" data-orig-id="u30009"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u30012"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30012_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30012_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u30022"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="faqs.php" data-orig-id="u30025"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u30028"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30028_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30028_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
     <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-47.png?crc=4226877247" data-image-width="340" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    </div>
    <a class="nonblock nontext MuseLinkActive clip_frame grpelem temp_no_id" href="login.php" data-orig-id="u31966"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/lock-crop-u31966.png?crc=4137587353" alt="" data-image-width="12" data-image-height="13" data-orig-id="u31966_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="verticalspacer shared_content" data-offset-top="728" data-content-above-spacer="728" data-content-below-spacer="49" data-content-guid="page_3_content1"></div>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="154" data-orig-id="u30134-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u30034-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30018-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30012-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30028-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/facebook_red.png?crc=492186112" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/twitter_red.png?crc=285332523" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_506" data-min-width="445" data-max-width="506"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="65" data-image-height="85" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem" id="ppmenuu29978"><!-- column -->
     <div class="clearfix colelem" id="pmenuu29978"><!-- group -->
      <nav class="MenuBar clearfix grpelem" id="menuu29978"><!-- vertical box -->
       <div class="MenuItemContainer borderbox clearfix colelem" id="u29993"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u29994" href="index.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u29996"><!-- state-based BG images --><img alt="Home" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u29996_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u29996_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u29979"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u29982" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u29984"><!-- state-based BG images --><img alt="About Us" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u29984_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u29984_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u29986"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u29989" href="competitions.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u29992"><!-- state-based BG images --><img alt="Competitions" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u29992_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u29992_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u30000"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u30001" href="faqs.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u30004"><!-- state-based BG images --><img alt="FAQs" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u30004_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u30004_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u37139"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix grpelem" id="u37140" href="login.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u37141"><!-- state-based BG images --><img alt="Login" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u37141_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u37141_1_content"></div></div></a>
       </div>
      </nav>
      <span class="nonblock nontext MuseLinkActive grpelem placeholder" data-placeholder-for="u31965-4_content"><!-- placeholder node --></span>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-48.png?crc=4041360717" data-image-width="332" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext MuseLinkActive clip_frame grpelem placeholder" data-placeholder-for="u31966_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content1"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="181" data-orig-id="u30134-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u29996-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u29984-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u29992-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30004-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u37141-r.png?crc=3910619867" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_444" data-min-width="388" data-max-width="444"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem" id="pu30103"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="66" data-image-height="87" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu29978"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29993"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="index.php" data-orig-id="u29994"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29996"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29996_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29996_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29979"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="about-us.php" data-orig-id="u29982"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29984"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29984_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29984_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29986"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitions.php" data-orig-id="u29989"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29992"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29992_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29992_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u30000"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="faqs.php" data-orig-id="u30001"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u30004"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30004_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30004_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u37139"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix grpelem temp_no_id" href="login.php" data-orig-id="u37140"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u37141"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u37141_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u37141_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
     <span class="nonblock nontext MuseLinkActive grpelem placeholder" data-placeholder-for="u31965-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext MuseLinkActive clip_frame grpelem placeholder" data-placeholder-for="u31966_content"><!-- placeholder node --></span>
    </div>
    <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-49.png?crc=4271558862" data-image-width="291" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    <div class="verticalspacer shared_content" data-offset-top="728" data-content-above-spacer="728" data-content-below-spacer="50" data-content-guid="page_3_content2"></div>
    <div class="clearfix colelem" id="pu30100"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
     <span class="grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    </div>
    <img class="colelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="158" data-orig-id="u30134-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u29996-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u29984-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u29992-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30004-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u37141-r.png?crc=3910619867" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_387" data-min-width="341" data-max-width="387"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu30103"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="57" data-image-height="75" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu29978"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29993"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="index.php" data-orig-id="u29994"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29996"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29996_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29996_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29979"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="about-us.php" data-orig-id="u29982"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29984"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29984_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29984_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29986"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitions.php" data-orig-id="u29989"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29992"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29992_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29992_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u30000"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="faqs.php" data-orig-id="u30001"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u30004"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30004_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30004_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u37139"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix grpelem temp_no_id" href="login.php" data-orig-id="u37140"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u37141"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u37141_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u37141_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-410.png?crc=4112862066" data-image-width="253" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content2"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu30100"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
     <span class="grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    </div>
    <img class="colelem temp_no_id temp_no_img_src shared_content" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u30134-4.png?crc=4117722694" data-image-width="170" data-orig-id="u30134-4" src="images/blank.gif?crc=4208392903" data-content-guid="u30134-4_content1"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u29996-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u29984-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u29992-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30004-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u37141-r.png?crc=3910619867" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_340" data-max-width="340"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu30103"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.php" data-orig-id="u30103"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="50" data-image-height="66" data-orig-id="u30103_img" src="images/blank.gif?crc=4208392903"/></a>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu29978"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29993"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="index.php" data-orig-id="u29994"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29996"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29996_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29996_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29979"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="about-us.php" data-orig-id="u29982"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29984"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29984_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29984_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u29986"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitions.php" data-orig-id="u29989"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u29992"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u29992_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u29992_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u30000"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="faqs.php" data-orig-id="u30001"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u30004"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u30004_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u30004_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u37139"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix grpelem temp_no_id" href="login.php" data-orig-id="u37140"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u37141"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u37141_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u37141_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <img class="colelem temp_no_id temp_no_img_src" alt="Login" data-orig-src="images/u36913-411.png?crc=4008681189" data-image-width="223" data-orig-id="u36913-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37009_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content2"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu30100"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u30100_content"><!-- placeholder node --></span>
     <span class="grpelem placeholder" data-placeholder-for="u29913_content"><!-- placeholder node --></span>
    </div>
    <span class="colelem placeholder" data-placeholder-for="u30134-4_content1"><!-- placeholder node --></span>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u29996-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u29984-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u29992-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u30004-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u37141-r.png?crc=3910619867" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","jquery.watch","jquery.musepolyfill.bgsize","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity', '#bp_922', '#bp_829', '#bp_758', '#bp_667', '#bp_540', '#bp_519', '#bp_506', '#bp_444', '#bp_387', '#bp_340'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4234670167" type="text/javascript" async data-main="scripts/museconfig.js?crc=4152223963" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>