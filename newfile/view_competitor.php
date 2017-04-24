<?php
session_start()
?>
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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musemenu.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "pay-fees.css"], "outOfDate":[]};
</script>
  
  <title>Pay Fees</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/master_competitor.css?crc=3829850413"/>
  <link rel="stylesheet" type="text/css" href="css/pay-fees.css?crc=3852038876" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_competitor.css?crc=3925633252"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_pay-fees.css?crc=176648416" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="923"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox" id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem" id="u27590" href="competitor.php"><!-- image --><img class="block temp_no_img_src" id="u27590_img" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="123" data-image-height="162" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix" id="menuu27592"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u27593"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u27594" href="competitor.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u27597" alt="Home" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u27600"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u27603" href="competitor-about-us.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u27605" alt="About Us" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u27607"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u27608" href="competitor-competitions.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u27610" alt="Competitions" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u27614"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u27615" href="competitor-faqs.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u27617" alt="FAQs" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem" id="ppu27588"><!-- column -->
     <div class="clearfix colelem" id="pu27588"><!-- group -->
      <div class="clip_frame grpelem shared_content" id="u27588" data-content-guid="u27588_content"><!-- image -->
       <img class="block temp_no_img_src" id="u27588_img" data-orig-src="images/person.png?crc=362030680" alt="" width="35" height="23" src="images/blank.gif?crc=4208392903"/>
      </div>
      <nav class="MenuBar clearfix grpelem" id="menuu27523"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem" id="u27524"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u27583"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem" id="u27585" alt="Account " src="images/blank.gif?crc=4208392903"/><!-- state-based BG images -->
         <div class="grpelem" id="u27584"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix" id="u27525"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem" id="u27526"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem" id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u27579" href="view-and-edit-competitor.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u27580" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u27572" href="pay-fees.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u27573" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u27558" href="logout.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u27561" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
     </div>
     
     <div class="colelem shared_content" id="u37053" data-content-guid="u37053_content"><!-- custom html -->
<?php
// Page to view a single competitor's details, or search for a competitor

$page_title = 'View a Competitor';

echo '<br /><br />';

require ('mysqli_connect.php');

function age($birth_date) // thanks to Peter Hamilton https://stackoverflow.com/a/5938386
{
	list($y,$m,$d) = explode("-",$birth_date);
	$y_diff  = date("Y") - $y;
	$m_diff = date("m") - $m;
	$d_diff   = date("d") - $d;
	if ($m_diff < 0 || $d_diff < 0) { $y_diff--; }
	return $y_diff;
}

if(isset($_GET['id']))
{
	$competitor_id = $_GET['id'];
	
	$q = "SELECT First_Name, Last_Name, Email, Date_Of_Birth, Street, City, State, ZIP, Phone, Sex, Team_ID
		FROM (LOGIN INNER JOIN COMPETITOR_ID ON LOGIN.ID_Login=COMPETITOR_ID.User INNER JOIN COMPETITOR ON COMPETITOR_ID.Competitor=COMPETITOR.ID)
		WHERE COMPETITOR_ID.Competitor=$competitor_id";
	$r = @mysqli_query ($dbc, $q); // Run the query.
	
	if (mysqli_affected_rows($dbc) == 1) // should only find one result
	{
		$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
		echo '<p>Name: ' . $row['First_Name'] . ' ' . $row['Last_Name'] . '</p>
		<p>Age: ' . age($row['Date_Of_Birth']) . '</p>';
		if ($_SESSION['Is_Admin'] || $_SESSION['Competitor_ID'] == $competitor_id) {
			echo '<p>Phone number: ' . $row['Phone'] . '</p>
			<p>Email: ' . $row['Email'] . '</p>
			<p>Address: ' . $row['Street'] . ', ' . $row['City'] . ', ' . $row['State'] . ' ' . $row['ZIP'] . '</p>';
		}
		if (!is_null($row['Team_ID'])) {
			echo '<p>Team: <a href="view_team.php?id=' . $row['Team_ID'] . '">' . $row['Team_ID'] . '</a></p>';
		}
		
		echo '<p><a href="view_events.php?competitor=' . $competitor_id . '">View this competitor\'s events</a></p>';
		if ($_SESSION['Competitor_ID'] == $competitor_id) {
			echo '<p><a href="edit_competitor.php?id=' . $competitor_id . '">Edit your information</a></p>';
		} else if ($_SESSION['Is_Admin']) {
			echo '<p><a href="edit_competitor.php?id=' . $competitor_id . '">Edit this competitor\'s information</a></p>';
		}
	}
	else
	{
		echo '<p>No results found for ID ' . $competitor_id . '</p>';
	}

	mysqli_free_result ($r);
	
	if ($_SESSION['Is_Admin'] || $_SESSION['Competitor_ID'] == $competitor_id) {
	
		$q = "SELECT Emergency_F_Name, Emergency_L_Name, Emergency_Phone, Emergency_Email, Emergency_Street, Emergency_City, Emergency_State, Emergency_ZIP, Emergency_Relationship
			FROM EMERGENCY_CONTACT
			WHERE Competitor_ID=$competitor_id";
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		if (mysqli_affected_rows($dbc) != 0)
		{
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			echo '<p>Emergency Contact Information:</p>';
			echo '<p>Name: ' . $row['Emergency_F_Name'] . ' ' . $row['Emergency_L_Name'] . ', ' . $row['Emergency_Relationship'] . '</p>';
			echo '<p>Phone number: ' . $row['Emergency_Phone'] . '</p>
			<p>Email: ' . $row['Emergency_Email'] . '</p>
			<p>Address: ' . $row['Emergency_Street'] . ', ' . $row['Emergency_City'] . ', ' . $row['Emergency_State'] . ' ' . $row['Emergency_ZIP'].'</p>';
		}
		else
		{
			echo '<p>No emergency contact info found for ID ' . $competitor_id . '</p>';
		}
	
		mysqli_free_result ($r);
	}
}
else
{
	echo '<p>No competitor ID selected</p>';
}
mysqli_close($dbc);

?>


     </div>
    </div>
    <div class="verticalspacer shared_content" data-offset-top="539" data-content-above-spacer="539" data-content-below-spacer="49" data-content-guid="page_3_content"></div>
    <div class="grpelem shared_content" id="u27587" data-content-guid="u27587_content"><!-- content -->
     <div class="fluid_height_spacer"></div>
    </div>
    <div class="grpelem shared_content" id="u27400" data-content-guid="u27400_content"><!-- content -->
     <div class="fluid_height_spacer"></div>
    </div>
    <img class="grpelem temp_no_img_src" id="u27621-4" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="207" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27597-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27605-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27610-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27617-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_922" data-min-width="830" data-max-width="922"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="118" data-image-height="155" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu27592"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27593"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor.php" data-orig-id="u27594"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u27597"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27600"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-about-us.php" data-orig-id="u27603"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u27605"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27607"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-competitions.php" data-orig-id="u27608"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u27610"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27614"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-faqs.php" data-orig-id="u27615"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u27617"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu27588"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu27588"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u27588_content"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27523"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27524"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u27583"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u27585"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u27584"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u27525"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u27526"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27579"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u27580"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27572"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u27573"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27558"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u27561"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-42.png?crc=189174733" data-image-width="605" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="198" data-orig-id="u27621-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27597-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27605-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27610-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27617-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_829" data-min-width="759" data-max-width="829"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="106" data-image-height="140" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu27592"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27593"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor.php" data-orig-id="u27594"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u27597"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27600"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-about-us.php" data-orig-id="u27603"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u27605"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27607"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-competitions.php" data-orig-id="u27608"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u27610"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27614"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-faqs.php" data-orig-id="u27615"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u27617"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu27588"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu27588"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u27588_content"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27523"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27524"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u27583"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u27585"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u27584"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u27525"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u27526"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27579"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u27580"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27572"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u27573"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27558"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u27561"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-43.png?crc=247911513" data-image-width="544" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="178" data-orig-id="u27621-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27597-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27605-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27610-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27617-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_758" data-min-width="668" data-max-width="758"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="78" data-image-height="102" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu27592"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27593"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor.php" data-orig-id="u27594"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u27597"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27600"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-about-us.php" data-orig-id="u27603"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u27605"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27607"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-competitions.php" data-orig-id="u27608"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u27610"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27614"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="competitor-faqs.php" data-orig-id="u27615"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u27617"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu27588"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu27588"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u27588_content"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27523"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27524"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u27583"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u27585"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u27584"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u27525"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u27526"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27579"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u27580"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27572"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u27573"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27558"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u27561"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-44.png?crc=3876106860" data-image-width="497" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src shared_content" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="163" data-orig-id="u27621-4" src="images/blank.gif?crc=4208392903" data-content-guid="u27621-4_content"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27597-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27605-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27610-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27617-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_667" data-min-width="541" data-max-width="667"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="58" data-image-height="76" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu27588"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu27588"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u27588_content"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27523"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27524"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u27583"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u27585"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u27584"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u27525"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u27526"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27579"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u27580"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27572"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u27573"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27558"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u27561"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
      <nav class="MenuBar clearfix grpelem" id="menuu27494"><!-- horizontal box -->
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u27516"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u27519" href="competitor.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u27521"><!-- state-based BG images --><img alt="Home" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27521_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27521_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u27502"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u27503" href="competitor-about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u27505"><!-- state-based BG images --><img alt="About Us" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27505_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27505_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u27495"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u27496" href="competitor-competitions.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u27499"><!-- state-based BG images --><img alt="Competitions" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27499_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27499_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u27509"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u27512" href="competitor-faqs.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u27515"><!-- state-based BG images --><img alt="FAQs" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27515_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27515_1_content"></div></div></a>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-45.png?crc=4170569838" data-image-width="437" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    </div>
    <div class="verticalspacer shared_content" data-offset-top="539" data-content-above-spacer="539" data-content-below-spacer="49" data-content-guid="page_2_content"></div>
    <span class="grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27621-4_content"><!-- placeholder node --></span>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27521-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27505-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27499-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27515-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_540" data-min-width="531" data-max-width="540"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="43" data-image-height="57" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu27588"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu27588"><!-- group -->
      <div class="clip_frame grpelem temp_no_id shared_content" data-orig-id="u27588" data-content-guid="u27588_content1"><!-- image -->
       <img class="block temp_no_id temp_no_img_src" data-orig-src="images/person.png?crc=362030680" alt="" width="33" height="22" data-orig-id="u27588_img" src="images/blank.gif?crc=4208392903"/>
      </div>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27523"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27524"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u27583"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u27585"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u27584"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u27525"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u27526"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27579"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u27580"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27572"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u27573"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27558"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u27561"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27494"><!-- horizontal box -->
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27516"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitor.php" data-orig-id="u27519"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27521"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27521_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27521_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27502"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitor-about-us.php" data-orig-id="u27503"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27505"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27505_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27505_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27495"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitor-competitions.php" data-orig-id="u27496"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27499"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27499_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27499_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27509"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitor-faqs.php" data-orig-id="u27512"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27515"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27515_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27515_1_content"><!-- placeholder node --></span></div></a>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-46.png?crc=4247481842" data-image-width="354" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="160" data-orig-id="u27621-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27521-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27505-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27499-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27515-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/facebook_red.png?crc=492186112" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/twitter_red.png?crc=285332523" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_530" data-min-width="507" data-max-width="530"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="43" data-image-height="56" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu27588"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu27588"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u27588_content1"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27523"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27524"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u27583"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u27585"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u27584"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u27525"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u27526"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27579"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u27580"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27572"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u27573"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27558"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u27561"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27494"><!-- horizontal box -->
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27516"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitor.php" data-orig-id="u27519"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27521"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27521_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27521_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27502"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitor-about-us.php" data-orig-id="u27503"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27505"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27505_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27505_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27495"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitor-competitions.php" data-orig-id="u27496"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27499"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27499_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27499_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27509"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="competitor-faqs.php" data-orig-id="u27512"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27515"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27515_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27515_1_content"><!-- placeholder node --></span></div></a>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-47.png?crc=3895257375" data-image-width="347" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    </div>
    <div class="verticalspacer shared_content" data-offset-top="786" data-content-above-spacer="786" data-content-below-spacer="49" data-content-guid="page_2_content1"></div>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="157" data-orig-id="u27621-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27521-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27505-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27499-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27515-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/facebook_red.png?crc=492186112" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/twitter_red.png?crc=285332523" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_506" data-min-width="445" data-max-width="506"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="65" data-image-height="85" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu27588"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu27588"><!-- group -->
      <div class="clip_frame grpelem temp_no_id" data-orig-id="u27588"><!-- image -->
       <img class="block temp_no_id temp_no_img_src" data-orig-src="images/person.png?crc=362030680" alt="" width="27" height="18" data-orig-id="u27588_img" src="images/blank.gif?crc=4208392903"/>
      </div>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27523"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27524"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u27583"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u27585"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u27584"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u27525"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u27526"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27579"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u27580"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27572"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u27573"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27558"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u27561"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
      <nav class="MenuBar clearfix grpelem" id="menuu27465"><!-- vertical box -->
       <div class="MenuItemContainer borderbox clearfix colelem" id="u27480"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u27481" href="competitor.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u27483"><!-- state-based BG images --><img alt="Home" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27483_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27483_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u27466"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u27469" href="competitor-about-us.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u27471"><!-- state-based BG images --><img alt="About Us" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27471_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27471_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u27473"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u27476" href="competitor-competitions.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u27479"><!-- state-based BG images --><img alt="Competitions" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27479_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27479_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u27487"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u27488" href="competitor-faqs.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u27491"><!-- state-based BG images --><img alt="FAQs" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27491_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27491_1_content"></div></div></a>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-48.png?crc=3801832808" data-image-width="332" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_2_content1"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="181" data-orig-id="u27621-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27483-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27471-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27479-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27491-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_444" data-min-width="388" data-max-width="444"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem" id="pu27590"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="66" data-image-height="87" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
     <span class="clip_frame grpelem placeholder" data-placeholder-for="u27588_content"><!-- placeholder node --></span>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27523"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u27524"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u27583"><!-- horizontal box -->
        <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u27585"/><!-- state-based BG images -->
        <div class="grpelem temp_no_id" data-orig-id="u27584"><!-- content --></div>
       </div>
       <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u27525"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u27526"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27579"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u27580"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27572"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Pay Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u27573"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u27555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27558"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u27561"/><!-- state-based BG images --></a></li>
        </ul>
       </div>
      </div>
     </nav>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27465"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27480"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor.php" data-orig-id="u27481"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27483"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27483_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27483_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27466"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-about-us.php" data-orig-id="u27469"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27471"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27471_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27471_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27473"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-competitions.php" data-orig-id="u27476"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27479"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27479_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27479_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27487"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-faqs.php" data-orig-id="u27488"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27491"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27491_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27491_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-49.png?crc=4006906784" data-image-width="291" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="786" data-content-above-spacer="786" data-content-below-spacer="50"></div>
    <div class="clearfix colelem" id="pu27587"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
     <span class="grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    </div>
    <img class="colelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="158" data-orig-id="u27621-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27585-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27580-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27573-r.png?crc=3893723546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27561-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27483-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27471-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27479-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27491-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_387" data-min-width="341" data-max-width="387"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu27590"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="57" data-image-height="75" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27465"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27480"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor.php" data-orig-id="u27481"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27483"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27483_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27483_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27466"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-about-us.php" data-orig-id="u27469"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27471"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27471_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27471_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27473"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-competitions.php" data-orig-id="u27476"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27479"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27479_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27479_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27487"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-faqs.php" data-orig-id="u27488"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27491"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27491_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27491_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <nav class="MenuBar clearfix colelem" id="menuu27401"><!-- horizontal box -->
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u27402"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u27461"><!-- horizontal box -->
       <div class="MenuItemLabel NoWrap grpelem" id="u27464"><!-- state-based BG images -->
        <img alt="Account" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27464_0_content"/>
        <div class="fluid_height_spacer shared_content" data-content-guid="u27464_1_content"></div>
       </div>
      </div>
      <div class="SubMenu MenuLevel1 borderbox clearfix" id="u27403"><!-- vertical box -->
       <ul class="SubMenuView borderbox clearfix colelem" id="u27404"><!-- vertical box -->
        <li class="MenuItemContainer borderbox clearfix colelem" id="u27433"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u27436" href="view-and-edit-competitor.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u27437"><!-- state-based BG images --><img alt="Manage Account" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27437_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27437_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u27412"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix grpelem" id="u27415" href="pay-fees.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u27416"><!-- state-based BG images --><img alt="Pay Fees" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27416_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27416_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u27454"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u27455" href="logout.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u27458"><!-- state-based BG images --><img alt="Logout" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u27458_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u27458_1_content"></div></div></a></li>
       </ul>
      </div>
     </div>
    </nav>
    <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-410.png?crc=3980703048" data-image-width="253" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    <div class="verticalspacer shared_content" data-offset-top="786" data-content-above-spacer="786" data-content-below-spacer="50" data-content-guid="page_4_content"></div>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu27587"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
     <span class="grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    </div>
    <img class="colelem temp_no_id temp_no_img_src shared_content" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u27621-4.png?crc=4117722694" data-image-width="170" data-orig-id="u27621-4" src="images/blank.gif?crc=4208392903" data-content-guid="u27621-4_content1"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27483-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27471-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27479-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27491-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27464-r.png?crc=255536487" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27437-r.png?crc=3795179667" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27416-r.png?crc=365575237" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27458-r.png?crc=3875492364" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_340" data-max-width="340"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu27590"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="competitor.php" data-orig-id="u27590"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="50" data-image-height="66" data-orig-id="u27590_img" src="images/blank.gif?crc=4208392903"/></a>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu27465"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27480"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor.php" data-orig-id="u27481"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27483"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27483_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27483_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27466"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-about-us.php" data-orig-id="u27469"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27471"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27471_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27471_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27473"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-competitions.php" data-orig-id="u27476"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27479"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27479_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27479_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27487"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="competitor-faqs.php" data-orig-id="u27488"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u27491"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27491_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27491_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <nav class="MenuBar clearfix colelem temp_no_id" data-orig-id="menuu27401"><!-- horizontal box -->
     <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u27402"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem temp_no_id" data-orig-id="u27461"><!-- horizontal box -->
       <div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27464"><!-- state-based BG images -->
        <span class="placeholder" data-placeholder-for="u27464_0_content"><!-- placeholder node --></span>
        <span class="fluid_height_spacer placeholder" data-placeholder-for="u27464_1_content"><!-- placeholder node --></span>
       </div>
      </div>
      <div class="SubMenu MenuLevel1 borderbox clearfix temp_no_id" data-orig-id="u27403"><!-- vertical box -->
       <ul class="SubMenuView borderbox clearfix colelem temp_no_id" data-orig-id="u27404"><!-- vertical box -->
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27433"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="view-and-edit-competitor.php" data-orig-id="u27436"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27437"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27437_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27437_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27412"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix grpelem temp_no_id" href="pay-fees.php" data-orig-id="u27415"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27416"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27416_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27416_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u27454"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u27455"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u27458"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u27458_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u27458_1_content"><!-- placeholder node --></span></div></a></li>
       </ul>
      </div>
     </div>
    </nav>
    <img class="colelem temp_no_id temp_no_img_src" alt="Pay Fees" data-orig-src="images/u36958-411.png?crc=173519707" data-image-width="223" data-orig-id="u36958-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37053_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_4_content"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu27587"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u27587_content"><!-- placeholder node --></span>
     <span class="grpelem placeholder" data-placeholder-for="u27400_content"><!-- placeholder node --></span>
    </div>
    <span class="colelem placeholder" data-placeholder-for="u27621-4_content1"><!-- placeholder node --></span>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u27483-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27471-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27479-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27491-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27464-r.png?crc=255536487" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27437-r.png?crc=3795179667" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27416-r.png?crc=365575237" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u27458-r.png?crc=3875492364" alt="" src="images/blank.gif?crc=4208392903"/>
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
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity', '#bp_922', '#bp_829', '#bp_758', '#bp_667', '#bp_540', '#bp_530', '#bp_506', '#bp_444', '#bp_387', '#bp_340'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4234670167" type="text/javascript" async data-main="scripts/museconfig.js?crc=4152223963" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
