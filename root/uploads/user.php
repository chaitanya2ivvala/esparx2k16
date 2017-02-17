﻿<?php
include_once("php_includes/check_login_status.php");
// Initialize any variables that the page might echo
$f = "";
$sex = "Male";
$joindate = "";
$lastsession = "";
// Make sure the _GET username is set, and sanitize it
if(isset($_GET["f"])){
	$f = preg_replace('#[^a-z0-9]#i', '', $_GET['f']);
} else {
    header("location: http://www.esparx2k16.com");
    exit();	
}
// Select the member from the users table
$sql = "SELECT * FROM users WHERE fname='$f' AND activated='1' LIMIT 1";
$user_query = mysqli_query($db_conx, $sql);
// Now make sure that user exists in the table
$numrows = mysqli_num_rows($user_query);
if($numrows < 1){
	echo "That user does not exist or is not yet activated, press back";
    exit();	
}
// Check to see if the viewer is the account owner
$isOwner = "no";
if($f == $log_fname && $user_ok == true){
	$isOwner = "yes";
}
// Fetch the user row from the query above
while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$profile_id = $row["id"];
	$gender = $row["sex"];
    $signup = $row["signup"];
	$lastlogin = $row["lastlogin"];
	$joindate = strftime("%b %d, %Y", strtotime($signup));
	$lastsession = strftime("%b %d, %Y", strtotime($lastlogin));
	if($gender == "f"){
		$sex = "Female";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $f; ?></title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">


<link rel="icon" href="images/logo123.png" type="image/x-icon">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,800' rel='stylesheet' type='text/css'>-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.9.1.min.js"></script>
<!--hover-effect-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/hover_pack.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>



<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<link href="css/style1.css" rel='stylesheet' type='text/css' />



<script type="text/javascript">
$(function()
{
$(".submit_button").click(function()
{
    
 var fvalues = $('input[name="fname[]"]').map(function() {
        return this.value
    }).get()
  var lvalues = $('input[name="lname[]"]').map(function() {
        return this.value
    }).get()
    var cvalues = $('input[name="college[]"]').map(function() {
        return this.value
    }).get()
   var gvalues = $('select[name="gender[]"]').map(function() {
        return this.value
    }).get()
   var yvalues = $('select[name="year[]"]').map(function() {
        return this.value
    }).get()
   var pvalues = $('input[name="phone[]"]').map(function() {
        return this.value
    }).get()
   var evalues = $('input[name="email[]"]').map(function() {
        return this.value
    }).get()
     
     var fs= $("#poster").val();

var dataString = 'fname='+ fvalues+'@@lname='+lvalues+'@@college='+cvalues+'@@gender='+gvalues+'@@year='+yvalues+'@@phone='+pvalues+'@@email='+evalues+'@@type='+fs;

$.ajax({
type: "POST",
url: "savedata.php",
data: dataString,
cache: true,
success: function(html){
$('#flash').show();
$("#flash").fadeIn(400).html('<span class="load">Data saved successfully!</span>');
$('#flash').delay(3000).fadeOut();

}  
});

return false;
});




$(".submit_buttonrobot").click(function()
{
    
 var fvalues = $('input[name="fnamero[]"]').map(function() {
        return this.value
    }).get()
  var lvalues = $('input[name="lnamero[]"]').map(function() {
        return this.value
    }).get()
    var cvalues = $('input[name="collegero[]"]').map(function() {
        return this.value
    }).get()
   var gvalues = $('select[name="genderro[]"]').map(function() {
        return this.value
    }).get()
   var yvalues = $('select[name="yearro[]"]').map(function() {
        return this.value
    }).get()
   var pvalues = $('input[name="phonero[]"]').map(function() {
        return this.value
    }).get()
   var evalues = $('input[name="emailro[]"]').map(function() {
        return this.value
    }).get()
     
     var fs= $("#robot").val();

var dataString = 'fname='+ fvalues+'@@lname='+lvalues+'@@college='+cvalues+'@@gender='+gvalues+'@@year='+yvalues+'@@phone='+pvalues+'@@email='+evalues+'@@type='+fs;

$.ajax({
type: "POST",
url: "savedata.php",
data: dataString,
cache: true,
success: function(html){
$('#flashrb').show();
$("#flashrb").fadeIn(400).html('<span class="load">Data saved successfully!</span>');
$('#flashrb').delay(3000).fadeOut();

}  
});

return false;
});




$(".submit_buttonpa").click(function()
{
 var fvalues = $('input[name="fnamepa[]"]').map(function() {
        return this.value
    }).get()
  var lvalues = $('input[name="lnamepa[]"]').map(function() {
        return this.value
    }).get()
    var cvalues = $('input[name="collegepa[]"]').map(function() {
        return this.value
    }).get()
   var gvalues = $('select[name="genderpa[]"]').map(function() {
        return this.value
    }).get()
   var yvalues = $('select[name="yearpa[]"]').map(function() {
        return this.value
    }).get()
   var pvalues = $('input[name="phonepa[]"]').map(function() {
        return this.value
    }).get()
   var evalues = $('input[name="emailpa[]"]').map(function() {
        return this.value
    }).get()
     
     var fs= $("#paper").val();

var dataString = 'fname='+ fvalues+'@@lname='+lvalues+'@@college='+cvalues+'@@gender='+gvalues+'@@year='+yvalues+'@@phone='+pvalues+'@@email='+evalues+'@@type='+fs;

$.ajax({
type: "POST",
url: "savedata.php",
data: dataString,
cache: true,
success: function(html){
$('#flashpa').show();
$("#flashpa").fadeIn(400).html('<span class="load">Data saved successfully!</span>');
$('#flashpa').delay(3000).fadeOut();

}  
});

return false;
});






$(".submit_buttonpr").click(function()
{
 var fvalues = $('input[name="fnamepr[]"]').map(function() {
        return this.value
    }).get()
  var lvalues = $('input[name="lnamepr[]"]').map(function() {
        return this.value
    }).get()
    var cvalues = $('input[name="collegepr[]"]').map(function() {
        return this.value
    }).get()
   var gvalues = $('select[name="genderpr[]"]').map(function() {
        return this.value
    }).get()
   var yvalues = $('select[name="yearpr[]"]').map(function() {
        return this.value
    }).get()
   var pvalues = $('input[name="phonepr[]"]').map(function() {
        return this.value
    }).get()
   var evalues = $('input[name="emailpr[]"]').map(function() {
        return this.value
    }).get()
     
     var fs= $("#project").val();

var dataString = 'fname='+ fvalues+'@@lname='+lvalues+'@@college='+cvalues+'@@gender='+gvalues+'@@year='+yvalues+'@@phone='+pvalues+'@@email='+evalues+'@@type='+fs;

$.ajax({
type: "POST",
url: "savedata.php",
data: dataString,
cache: true,
success: function(html){
$('#flashpr').show();
$("#flashpr").fadeIn(400).html('<span class="load">Data saved successfully!</span>');
$('#flashpr').delay(3000).fadeOut();

}  
});

return false;
});




});
</script>




<script type="text/javascript">
$(document).ready(function()
		{
		$('#submit-btn').click(function()
		{
	        var options = { 
			target:   '#output',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			success:       afterSuccess,  // post-submit callback 
			uploadProgress: OnProgress, //upload progress callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
		$('#MyUploadForm').submit(function()
		{ 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		});
		});  
		

		$('#submit-btn1').click(function()
		{	
	         var options = { 
			target:   '#output1',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit1,  // pre-submit callback 
			success:       afterSuccess1,  // post-submit callback 
			uploadProgress: OnProgress1, //upload progress callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
		$('#MyUploadForm1').submit(function()
		{ 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		});
		});  
		
		
		
		$('#submit-btn2').click(function()
		{	
	         var options = { 
			target:   '#output2',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit2,  // pre-submit callback 
			success:       afterSuccess2,  // post-submit callback 
			uploadProgress: OnProgress2, //upload progress callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
		$('#MyUploadForm2').submit(function()
		{ 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		});
		});
		
		
		
		
		$('#submit-btn3').click(function()
		{	
	         var options = { 
			target:   '#output3',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit3,  // pre-submit callback 
			success:       afterSuccess3,  // post-submit callback 
			uploadProgress: OnProgress3, //upload progress callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
		$('#MyUploadForm3').submit(function()
		{ 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		});
		});  
		




//----------------------------------------------------POSTER-----------------------------------


function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button
	$('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar

}


function beforeSubmit()
{
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#FileInput').val()) //check empty input filed
		{
			$("#output").html("Please select the file?");
			return false
		}
		
		var fsize = $('#FileInput')[0].files[0].size; //get file size
		var ftype = $('#FileInput')[0].files[0].type; // get file type
		
		if(fsize>5242880) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//progress bar function
function OnProgress(event, position, total, percentComplete)
{
    //Progress bar
	$('#progressbox').show();
    $('#progressbar').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt').css('color','#000'); //change status text to white after 50%
        }
}


//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}


//----------------------------------------------------------------------------------------



//------------------------------------ROBOT------------------------------------------------		
function afterSuccess1()
{
	$('#submit-btn1').show(); //hide submit button
	$('#loading-img1').hide(); //hide submit button
	$('#progressbox1').delay( 1000 ).fadeOut(); //hide progress bar

}


function beforeSubmit1()
{
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#FileInput1').val()) //check empty input filed
		{
			$("#output1").html("Please select the file?");
			return false
		}
		
		var fsize = $('#FileInput1')[0].files[0].size; //get file size
		var ftype = $('#FileInput1')[0].files[0].type; // get file type
		
		if(fsize>5242880) 
		{
			$("#output1").html("<b>"+bytesToSize1(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
			return false
		}
				
		$('#submit-btn1').hide(); //hide submit button
		$('#loading-img1').show(); //hide submit button
		$("#output1").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output1").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//progress bar function
function OnProgress1(event, position, total, percentComplete)
{
    //Progress bar
	$('#progressbox1').show();
    $('#progressbar1').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt1').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt1').css('color','#000'); //change status text to white after 50%
        }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize1(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}



//-----------------------------------------------------------------------------------------



//------------------------------------Paper------------------------------------------------		
function afterSuccess2()
{
	$('#submit-btn2').show(); //hide submit button
	$('#loading-img2').hide(); //hide submit button
	$('#progressbox2').delay( 1000 ).fadeOut(); //hide progress bar

}


function beforeSubmit2()
{
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#FileInput2').val()) //check empty input filed
		{
			$("#output2").html("Please select the file?");
			return false
		}
		
		var fsize = $('#FileInput2')[0].files[0].size; //get file size
		var ftype = $('#FileInput2')[0].files[0].type; // get file type
		
		if(fsize>5242880) 
		{
			$("#output2").html("<b>"+bytesToSize2(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
			return false
		}
				
		$('#submit-btn2').hide(); //hide submit button
		$('#loading-img2').show(); //hide submit button
		$("#output2").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output2").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//progress bar function
function OnProgress2(event, position, total, percentComplete)
{
    //Progress bar
	$('#progressbox2').show();
    $('#progressbar2').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt2').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt2').css('color','#000'); //change status text to white after 50%
        }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize2(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}



//----------------------------------------------------PROJECT----------------------------




//------------------------------------Paper------------------------------------------------		
function afterSuccess3()
{
	$('#submit-btn3').show(); //hide submit button
	$('#loading-img3').hide(); //hide submit button
	$('#progressbox3').delay( 1000 ).fadeOut(); //hide progress bar

}


function beforeSubmit3()
{
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#FileInput3').val()) //check empty input filed
		{
			$("#output3").html("Please select the file?");
			return false
		}
		
		var fsize = $('#FileInput3')[0].files[0].size; //get file size
		var ftype = $('#FileInput3')[0].files[0].type; // get file type
		
		if(fsize>5242880) 
		{
			$("#output3").html("<b>"+bytesToSize3(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
			return false
		}
				
		$('#submit-btn3').hide(); //hide submit button
		$('#loading-img3').show(); //hide submit button
		$("#output3").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output3").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//progress bar function
function OnProgress3(event, position, total, percentComplete)
{
    //Progress bar
	$('#progressbox3').show();
    $('#progressbar3').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt3').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt3').css('color','#000'); //change status text to white after 50%
        }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize3(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}


});

//-----------------------------------------------------------------------------------------
</script>

<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
</head>
<body>
<!--start header-->
<div class="header">
  <div class="header-top">
    <div class="container">
      <div class="logo"> <a href="#"><img src="images/logo.png" alt=""/></a> </div>
      <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /></a>
        <ul class="nav" id="nav">
         <!-- <li><a href="#home" class="scroll">Welcome!</a></li>-->
          <li><a href="#Events" class="scroll">Events</a></li>
           
<li><a  href="#"  data-toggle="modal" data-target="#myupdate">Online Events</a></li>
          
<li><a href="#Initiatives" class="scroll">Initiative</a></li>
          
<li><a href="#" data-toggle="modal" data-target="#myModalGuestLectures" style="background-color:#C3F; border-radius:10px;"><p style="color:#FF0">Guest Lectures</p></a></li>
         
<li><a href="#Partnership"   class="scroll">Partnership</a></li>
            
<li><a href="#hospitality" class="scroll">Hospitality</a></li>
          
<li><a  href="#"  data-toggle="modal" data-target="#myupdate">Organising Committee</a></li>
          <li><a href="#contact" class="scroll">Contact</a></li>
		  <li>hi <?php echo $f; ?></li>
		  <li><a href="logout.php">logout</a></li>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="clear"></div>
      <script type="text/javascript" src="js/responsive-nav.js"></script>
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
						});
					});
				</script>
    </div>
  </div>
  
  <div class="header-bottom">
<div class="container">


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"  data-interval="3000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/entrepreneurs.png" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="images/iot1.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
	<div class="item">
      <img src="images/robo1.png" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
	<div class="item">
      <img src="images/Western_Office_Presentation.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="images/pcb-manufacturing-radees.jpg" alt="...">
      <div class="carousel-caption">
         
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
</div>
</div>
</div><!--start Events-->
<div class="Portfolio1" id="Events">
  <div class="container">
    <div class="portfolio_top">
      <div class="portfolio_left">
        <h3 class="m_5">Events</h3>
        <div class="m_6"><span class="portfolio_line"> </span></div>
      </div>
      <ul id="filters" class="clearfix">
         <li><span class="filter active" data-filter="Classify Workshops Coding Projects Robo Circuitrix">All</span></li>
        <li><span class="filter" data-filter="Presentation">Presentation</span></li>
        <li><span class="filter" data-filter="Workshops">Workshops</span></li>
        <li><span class="filter" data-filter="Coding">MATLAB Coding Workshop</span></li>
        <li><span class="filter" data-filter="Robo">Robot competition</span></li>
        <li><span class="filter" data-filter="Projects">Projects</span></li>
        <li><span class="filter" data-filter="Circuitrix">Circuitrix</span></li>
        <li><span class="filter" data-filter="GuestLectures">Guest Lectures</span></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div id="portfoliolist">
      <div class="portfolio Presentation mix_all active" data-cat="Presentation" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a  class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalPresentation" > <img src="images/PaperPresentation.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
          </div>
          </a> </div>
      </div>
      <div class="portfolio Presentation mix_all" data-cat="Presentation" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalPresentation2"> <img src="images/yourposter.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
          </div>
          </a> </div>
      </div>
      <div class="portfolio Workshops mix_all" data-cat="Workshops" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalWorkshops"> <img src="images/PCBdesign.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
           <h3> PCB WORKSHOP</h3>
          </div>
          </a> </div>
      </div>
      <div class="portfolio Workshops mix_all" data-cat="Workshops" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalSixthSense"> <img src="images/SixthSense.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
            <h3> Sixth Sense Robotics</h3>
          </div>
          </a> </div>
      </div>
      <div class="portfolio Workshops mix_all" data-cat="Workshops" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalIOT"> <img src="images/IOT.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
            <h4> Internet of Things(IOT)</h4>
          </div>
          </a> </div>
      </div>
      <div class="portfolio Coding mix_all" data-cat="Coding" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalCoding"> <img src="images/Codingworkshop.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
            <h4> Welcome to Coding Workshop!</h4>
          </div>
          </a> </div>
      </div>
      <div class="portfolio Projects mix_all" data-cat="Projects" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalProjects"> <img src="images/Projects.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
          </div>
          </a> </div>
      </div>
      <div class="portfolio Robo mix_all" data-cat="Robo" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalRobo"> <img src="images/RoboDisplay.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
            <h2> Robot Competition</h2>
          </div>
          </a> </div>
      </div>
      <div class="portfolio Circuitrix mix_all" data-cat="Circuitrix" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalCircuitrix"> <img src="images/Circuitrix.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
          </div>
          </a> </div>
      </div>
      
      
      <div class="portfolio GuestLectures mix_all" data-cat="GuestLectures" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper"> <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalGuestLectures"> <img src="images/GuestLectures.jpg" />
          <div class="b-wrapper">
            <h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt=""/></h2>
          </div>
          </a> </div>
      </div>
    </div>
  </div>
  <!-- container -->
</div>
<!--end Events-->

<!--start hospitality-->
<div class="default" id="hospitality" style="background: #4bcaff">
  <div class="container">
    <div class="row">
      <!--<h3 class="m_21">Initiatives</h3>
        <div class="m_22"><span class="default_line"> </span></div>-->
      <div class="col-md-6 ">
      <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalHospitality1">
        <h3 class="m_21">Accommodation </h3>
        <div class="m_22"><span class="default_line"> </span></div>
       <div> <img src="images/boyssemi-luxury.jpg"  class="img-responsive"></div>
       </a>
      </div>
      <div class="col-md-6 ">
      <a href="#" class="b-link-stripe b-animate-go  thickbox" data-toggle="modal" data-target="#myModalHospitality2"> 
        <h3 class="m_21">Food</h3>
        <div class="m_22"><span class="default_line"> </span></div>
          <div><img src="images/girlssemi-luxury.jpg"  class="img-responsive"></div>
           </a>
      </div>
    </div>
  </div>
</div>
<!--end hospitality-->

<!--start Initiatives-->
<div class="default" id="Initiatives">
  <div class="container">
    <div class="row">
      <!--<h3 class="m_21">Initiatives</h3>
        <div class="m_22"><span class="default_line"> </span></div>-->
      <div class="col-md-6  video_player">
        <h3 class="m_21">Save Power, Save Earth</h3>
        <div class="m_22"><span class="default_line"> </span></div>
       <iframe width="100%" height="350" src="https://www.youtube.com/embed/q-zYcUPHpr4" frameborder="0" allowfullscreen></iframe>
 
      </div>
      <div class="col-md-6 video_player">
        <h3 class="m_21">Go green, keep clean</h3>
        <div class="m_22"><span class="default_line"> </span></div>
         <iframe  width="100%" height="350" src="https://www.youtube.com/embed/g9TAF9cHxxc" frameborder="0" allowfullscreen></iframe>
 
      </div>
    </div>
  </div>
</div>
<!--end Initiatives-->

<!--start Partnership-->
<div class="twitter" id="Partnership">
  <div class="container">
    <div class="twitter_left">
      <h3 class="m_21">Partnership:</h3>
      <div class="m_22"><span class="default_line"> </span></div>
    </div>
    <div class="clear"></div>
    <p class="m_9"><h2 style="color:#FF0">We proudly present one of our Major Sponsors</h2></p>
    <center>
    <img src="images/logo-page-001.jpg"><br><br><br>
        <a href="http://www.dal.ca/academics/programs/graduate/internetworking.html" target="_blank" style="background-color:#3F6; border-radius:10px"><p style="color:#FFF;">visit the Website</p></a>
    </center>
  </div>
</div>
<!--end GuestLectures-->

<!--start testimonials-->
<!--<div class="testimonials">
  <div class="container">
    <div class="portfolio_left">
      <h3 class="m_5">Testimonials</h3>
      <div class="m_6"><span class="portfolio_line"> </span></div>
    </div>
    <i class="quotation"> </i>
    <div class="clear"> </div>
    <p class="m_12">aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit</p>
    <span class="m_13">-Person Name</span> </div>
</div>
<!--end testimonials-->


<!--start contact-->
<div class="contact" id="contact">
  <div class="container">
    <div class="row">
      <h3 class="m_3">Contact</h3>
      <div class="m_4"><span class="bottom_line"> </span></div>
    <!--  <form method="post" action="contact-post.html">
        <div class="col-md-6 commentform">
          <p class="comment-form-author">
            <label for="author">Name</label>
            <input id="author" name="author" type="text" value="" size="30" aria-required="true">
          </p>
          <p>
            <label for="author">Email</label>
            <input id="author" name="author" type="text" value="" size="30" aria-required="true">
          </p>
        </div>
        <div class="col-md-6 commentform_desc">
          <!--<p class="m_13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>-->
         <div class="address">
            
			 <p>Email: <span>esparx2k16@gmail.com</span></p>
            <p>Phone:</p>
			<p>GVS Karthik - +91 86886 52554</p>
			<p>T Sai Kiran - +91 73825 04890</p>
            <p> Vaseem Shaik - +91 85200 34225</p>
             <p>   Manjish Adhikari - +91 81435 80064</p>
           
           
            <p>Follow on:<a href="https://www.facebook.com/Esparx2k16/?fref=ts"><i class="fa fa-facebook fa-5x"></i></a></p>
          </div>
        </div>
   <!--     <div class="clear"></div>
        <div class="contactform_bottom"> <span>
          <label>Subject</label>
          </span> <span>
          <textarea name="userMsg"> </textarea>
          </span>
          <input name="submit" type="submit" id="submit" value="Message">
        </div>
        <!--<div class="col-md-6 commentform_desc1">
          <p class="m_13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>
          <div class="address">
            <p>500 Lorem Ipsum Dolor Sit,</p>
            <p>Phone:(00) 222 666 444</p>
            <p>Fax: (000) 000 00 00 0</p>
            <p>Email: <span>support[at]snow.com</span></p>
            <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
          </div>
        </div>-->
      </form>-->
    </div>
  </div>
</div>
<div class="footer-bottom">
  <div class="container">
    <ul class="footer-nav">
      <li><a href="#">Home</a></li>
      |
      <li><a href="#">Events</a></li>
      |
      <li><a href="#">Initiative</a></li>
      |
      <li><a href="#">Guest Lectures</a></li>
    </ul>
    <div class="copy">
      <p>© Esparx2k16 All rights reserved</p> <P>any technical queries contact: I V S K Chaitanya</P>
	                                                              <p>email address: chaitu.dominator@gmail.com</p>
    </div>
    <div class="clear"></div>
  </div>
</div>

<!-- Modal Popups-->
<!-- Modal Paper Presentation-->
<div class="modal fade" id="myModalPresentation" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Paper Presentation</h4>
      </div>
      
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#Presentationmenu1">About</a></li>
          <li><a data-toggle="tab" href="#Presentationmenu2">Rules</a></li>
          <li><a data-toggle="tab" href="#Presentationmenu3">Fee details </a></li>
          <li><a data-toggle="tab" href="#Presentationmenu4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="Presentationmenu1" class="tab-pane fade in active">
            <hr>
            <h3>Important points to note</h3>
              <p>Paper has to be from the following streams:</p>
        <ol type="1">
          <li>VLSI and NANO Technology</li>
          <li>Antennas and Microwave Engineering</li>
          <li>Signal and Image Processing</li>
          <li> Wireless and Mobile Communications</li>
          <li> Embedded System</li>
          <li> Satellite and Optical Communications</li>
        </ol>
       
          </div>
          <div id="Presentationmenu2" class="tab-pane fade">
            <hr>
            <h3>Rules</h3>
          <ol type="1">
          <li> A team should have a maximum of 2 members</li>
          <li> The paper should be in "pdf" or "doc" format</li>
          <li> Team should bring 3 Hard copies of paper and soft copy of ppt in a pen drive or CD</li>
          <li> Time duration is 7+2 min including queries</li>
          <li> Paper should contain max of 8 pages and should strictly follow standard IEEE format</li>
          <li> Please mention your Esparx ID and Stream at the top-right of your abstract </li>
          <li> Last Date for submission of papers is 15/02/2016</li>
        </ol>
          </div>
          <div id="Presentationmenu3" class="tab-pane fade">
            <hr>
            <h3>Fee Details</h3>
            <ol type="1">
            <li> You can upload your abstract for free(*besides the registration fee)</li>
            <li> If your abstract gets selected, each participant should pay 300 INR</li>
            <li> You must not upload the same abstract for other events</li>
            <li> Your teammate need not have to pay the registration fee, you can add him while uploading your abstract</li>
            </ol>
	    
	    <div style="background-color:#DDDDDD">    
<div id="upload-wrapper">
<div align="center">
<h3>Upload Paper Presentaion</h3>
<form method="post" enctype="multipart/form-data" id="MyUploa">	
<table  class="table table-hover small-text" id="tb">
<tr class="tr-header">
<td>First Name</td>
<td>Last Name</td>
<td>College</td>
<td>Gender</td>
<td>Study Year</td>
<td>Contact No</td>
<td>Email Id</td>
<tr>
<td><input type="text" name="fnamepa[]" class="fname" id="fname" class="form-control"></td>
<td><input type="text" name="lnamepa[]"  id="lname" class="form-control"></td>
<td><input type="text" name="collegepa[]" class="form-control"></td>
<td>
<select name="genderpa[]" class="form-control" id="gender">
  <option value="" selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</td>
<td>
<select name="yearpa[]" class="form-control">
  <option value="" selected>Study Year</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
</select>
</td>
<td><input type="text" name="phonepa[]" class="form-control"></td>
<td><input type="text" name="emailpa[]" class="form-control"></td>
</tr>
<tr>
<td><input type="text" name="fnamepa[]" class="form-control"></td>
<td><input type="text" name="lnamepa[]" class="form-control"></td>
<td><input type="text" name="collegepa[]" class="form-control"></td>
<td>
<select name="genderpa[]" class="form-control">
  <option value="" selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</td>
<td>
<select name="yearpa[]" class="form-control">
  <option value="" selected>Study Year</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
</select>
</td>
<td><input type="text" name="phonepa[]" class="form-control"></td>
<td><input type="text" name="emailpa[]" class="form-control"></td>
</tr>
<tr>
	<td colspan="7" style="text-align: center"><input type="submit"  id="submit-btndd" value="Save Data" class="submit_buttonpa" style="background-color: #61BAE4;padding: 10px;border-radius: 5px;color:#fff;border: none" />
	<div id="flashpa"></div>
<div id="showpa"></div></td>
</tr>

</table>
<div class="space"></div>

<input type="hidden" name="type" id="paper"  value="Paper" />
</form>

<form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm2">
<input name="FileInput" id="FileInput2" type="file" />
<input type="hidden" name="type"  value="Paper" />
<input type="submit"  id="submit-btn2" value="Upload File" />
<img src="images/ajax-loader.gif" id="loading-img2" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox2" ><div id="progressbar2"></div ><div id="statustxt2">0%</div></div>
<div id="output2"></div>
</div>
</div>
</div>		    

<div style="background-color:#DDDDDD">    
<div id="upload-wrapper">
	<p>If your Abstract got selected, then you have to pay. Please click on below button to pay</p>
<div align="center">
	<div class="pm-button"><a href="https://www.payumoney.com/paybypayumoney/#/089D6F977D04EFA9DF2321610D1E8ABA"><img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/112.png" /></a></div>
</div>
</div>
</div>
          </div>
          <div id="Presentationmenu4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>GVS Karthik </b> | Phone: +91 86886 52554</p>
              <p><b>Vamsi Krishna Guduru </b>  | Phone: +91 94917 17456</p>
              <p><b>M Sai Kiran  </b>  | Phone: +91 90142 22380</p>
              <p><b>Nageena</b> | Email: <a href="mailto:nageena@esparx.in">nageena@esparx.in</a></p>
              <p><b>Soundarya  </b> | Email:  <a href="mailto:soundarya@esparx.in">soundarya@esparx.in</a></p>
              <p><b>Anusha R </b> | Email:  <a href="mailto:anusha@esparx.in">anusha@esparx.in</a> </p>
              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal Paper Presentation-->

<!-- Modal Poster Presentation-->
<div class="modal fade" id="myModalPresentation2" role="dialog">
  <div class="modal-dialog modal-lg">
  
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Poster Presentation</h4>
      </div>
      
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#myModalPaper1">About</a></li>
          <li><a data-toggle="tab" href="#myModalPaper2">Rules</a></li>
          <li><a data-toggle="tab" href="#myModalPaper3">Fee details </a></li>
          <li><a data-toggle="tab" href="#myModalPaper4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="myModalPaper1" class="tab-pane fade in active">
            <hr>
            <h3>Important points to note</h3>
                <p>Paper has to be from the following streams:</p>
        <ol type="1">
          <li>VLSI and NANO Technology</li>
          <li>Antennas and Microwave Engineering</li>
          <li>Signal and Image Processing</li>
          <li> Wireless and Mobile Communications</li>
          <li> Embedded System</li>
          <li> Satellite and Optical Communications</li>
        </ol>
        <hr>

          </div>
          <div id="myModalPaper2" class="tab-pane fade">
            <hr>
            <h3>Rules</h3>
             <ol type="1">
          <li>A team should have a maximum of two members</li>
          <li>The paper should be in "pdf" or "doc" format</li>
          <li> Team should bring 3 Hard copies of paper and soft copy of ppt in a pen drive or CD</li>
          <li> Time duration is 7+2 min including queries</li>
          <li> Paper should contain max of 8 pages and should strictly follow standard IEEE format</li>
          <li> Please mention your Esparx ID and Stream at the top-right corner of the abstract</li>
          <li> Last Date for submission of papers is 15/02/2016</li>
        </ol>
          </div>
          <div id="myModalPaper3" class="tab-pane fade">
            <hr>
            <h3>Fee Details</h3>
            <ol type="1">
            <li> You can upload your abstract for free(*besides the registration fee)</li>
            <li> If your abstract gets selected, each participant should pay 300 INR</li>
            <li> You must not upload the same abstract for other events</li>
            <li> Your teammate need not have to pay the registration fee, you can add him while uploading your abstract</li>            <br>
<div style="background-color:#DDDDDD">    
<div id="upload-wrapper">
<div align="center">
<h3>Upload Poster Presentaion</h3>
<form method="post" enctype="multipart/form-data" id="MyUploa">
	
<table  class="table table-hover small-text" id="tb">
<tr class="tr-header">
<td>First Name</td>
<td>Last Name</td>
<td>College</td>
<td>Gender</td>
<td>Study Year</td>
<td>Contact No</td>
<td>Email Id</td>
<tr>
<td><input type="text" name="fname[]" class="fname" id="fname" class="form-control"></td>
<td><input type="text" name="lname[]"  id="lname" class="form-control"></td>
<td><input type="text" name="college[]" class="form-control"></td>
<td>
<select name="gender[]" class="form-control" id="gender">
  <option value="" selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</td>
<td>
<select name="year[]" class="form-control">
  <option value="" selected>Study Year</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
</select>
</td>
<td><input type="text" name="phone[]" class="form-control"></td>
<td><input type="text" name="email[]" class="form-control"></td>
</tr>
<tr>
<td><input type="text" name="fname[]" class="form-control"></td>
<td><input type="text" name="lname[]" class="form-control"></td>
<td><input type="text" name="college[]" class="form-control"></td>
<td>
<select name="gender[]" class="form-control">
  <option value="" selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</td>
<td>
<select name="year[]" class="form-control">
  <option value="" selected>Study Year</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
</select>
</td>
<td><input type="text" name="phone[]" class="form-control"></td>
<td><input type="text" name="email[]" class="form-control"></td>
</tr>
<tr>
	<td colspan="7" style="text-align: center"><input type="submit"  id="submit-btndd" value="Save Data" class="submit_button" style="background-color: #61BAE4;padding: 10px;border-radius: 5px;color:#fff;border: none" />
	<div id="flash"></div>
<div id="show"></div></td>
</tr>

</table>
<div class="space"></div>

<input type="hidden" name="type" id="poster"  value="Poster" />
</form>

<form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
<input name="FileInput" id="FileInput" type="file" />
<input type="hidden" name="type"  value="Poster" />
<input type="submit"  id="submit-btn" value="Upload File" />
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
<div id="output"></div>
</div>
</div>
</div>		    

<div style="background-color:#DDDDDD">    
<div id="upload-wrapper">
	<p>If your Abstract got selected, then you have to pay. Please click on below button to pay</p>
<div align="center">
	<div class="pm-button"><a href="https://www.payumoney.com/paybypayumoney/#/089D6F977D04EFA9DF2321610D1E8ABA"><img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/112.png" /></a></div>
</div>
</div>
</div>	    
          </div>
          <div id="myModalPaper4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>GVS Karthik </b> | Phone: +91 86886 52554</p>
              <p><b>Vamsi Krishna Guduru </b>  | Phone: +91 94917 17456</p>
              <p><b>M Sai Kiran  </b>  | Phone: +91 90142 22380</p>
              <p><b>Nageena</b> | Email: <a href="mailto:nageena@esparx.in">nageena@esparx.in</a></p>
              <p><b>Soundarya  </b> | Email:  <a href="mailto:soundarya@esparx.in">soundarya@esparx.in</a></p>
              <p><b>Anusha R </b> | Email:  <a href="mailto:anusha@esparx.in">anusha@esparx.in</a> </p>
              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    
  </div>
</div>
<!-- /.modal Poster Presentation-->

<!-- Modal PCB -->
<div class="modal fade" id="myModalWorkshops" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PCB Workshop</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#PCBmenu1">About</a></li>
          <li><a data-toggle="tab" href="#PCBmenu2">Content</a></li>
          <li><a data-toggle="tab" href="#PCBmenu3">Fee details </a></li>
          <li><a data-toggle="tab" href="#PCBmenu4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="PCBmenu1" class="tab-pane fade in active">
            <hr>
            <p>In the PCB workshop, you will learn about the following topics: </p>
             <ol type="a">
              <li>Basics of different circuit functional blocks</li>
              <li>Developing Projects by combining and Linking different functional circuit blocks</li>
              <li>Developing the Schematic Diagram using actual component specifications</li>
              <li>Circuit designing in ISIS Professional Software</li>
              <li>Circuit simulation in Real-time using circuit simulation Software</li>
              <li>Techniques for Debugging the Schematic</li>
              <li>Designing of PCB layout in ARES Professional Software</li>
              <li>Techniques for miniaturizing the PCB Layout</li>
                 <li>Designing of Single side and Double sided PCB</li>
                 <li>Designing Surface Mount Technology(SMT) type PCB</li>
                 <li>Ground and Power Plane Creation, Techniques & Tips</li>
            </ol>
          </div>
          <div id="PCBmenu2" class="tab-pane fade">
            <hr>
            <h3>Content</h3>
            <h4>The maximum allowed members per team is 4</h4>
            <p>The kit contains the following </p>
            <ol type="a">
            <li>Copper Clad </li>
 <li>Ferrous Chloride Powder</li>
 <li> Electronic Component kit</li>
 <li> Printed Trace Stencil for PCB Imprint 3 PCB</li>
 <li> Soldering Iron(Only during workshop)</li>
 <li> Soldering Wire</li>
 <li> Hand Drilling Machine(Only during workshop)</li>
 <li>Drilling Bits(Only during workshop)</li>
 <li> Battery connector</li>
 <li> Battery</li>
 <li>Multimeter(Only during workshop)</li>
            </ol>
          </div>
          <div id="PCBmenu3" class="tab-pane fade">
            <hr>
            <h3>Fee details</h3>
            <p>1) A maximum of 4 members allowed per team<br>
               2) The registration fee for PCB workshop is 4000 INR<br> 
               3) Only the team leader needs to register by paying 200 INR. The team members can be added under his name</p>
          </div>
          <div id="PCBmenu4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Karunakar Reddy </b> | Phone: +91 89772 09054 </p>
              <p><b>Phanindra</b>  | Phone: +91 9441862795</p>
              <p><b>Deepthi</b> | Email: <a href="mailto:deepti@esparx.in">deepti@esparx.in</a></p>
              <p><b>Aparna </b> | Email:  <a href="mailto:aparna@esparx.in">aparna@esparx.in</a></p>
              <p><b>Mounika</b> | Email:  <a href="mailto:mounika@esparx.in">mounika@esparx.in</a> </p>
              <p><b>Akhila V</b> | Email: <a href="mailto:v_akhila@esparx.in">v_akhila@esparx.in</a></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal PCB-->



<!-- Modal Sixth Sense Robotics: -->
<div class="modal fade" id="myModalSixthSense" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sixth Sense Robotics</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#SixthSensemenu1">About</a></li>
          <li><a data-toggle="tab" href="#SixthSensemenu2">Content</a></li>
          <li><a data-toggle="tab" href="#SixthSensemenu3">Fee details </a></li>
          <li><a data-toggle="tab" href="#SixthSensemenu4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="SixthSensemenu1" class="tab-pane fade in active">
           <hr>
            <h3>About</h3>
            <p style="white-space: break-word;">This workshop interfaces the digital world with physical world. You will learn about the following topics
</p>
 <ol type="1">
            <li>Color Recognition application </li>
 <li>Ball following Robot</li>
 <li>Gesture controlled windows media player</li>
 <li>Gesture controlled media player</li>
  </ol>
          </div>
          <div id="SixthSensemenu2" class="tab-pane fade">
            <hr>
            <h3>Content</h3>
             <p>The maximum allowed members per team is 5</p>
            <p>The kit contains the following</p>
            <hr>
            <ol>
<li>ARDUINO circuit board</li>
<li>USB powered plug and play external webcam</li>
<li>Robot Chassis</li>
<li>Wheels</li>
<li>Motors</li>
<li>Castor Wheel</li>
<li>Battery(9V)</li>
<li>USB Cable for Programming</li>
<li>Connecting Wires</li>
<li>Screws</li>
<li>Screw Driver</li>
<li>Wire cutter/Plier</li>
<li>Battery snaps</li>
<li>CD containing Course Material (Codes, Softwares, videos etc.)</li>
<li>Motor Driver Circuit Breakout (L293)</li>
            </ol>
          </div>
          <div id="SixthSensemenu3" class="tab-pane fade">
            <hr>
            <h3>Fee details</h3>
            <p>1) A maximum of 5 members allowed per team<br>
               2) The registration fee for Sixth Sense Robotics workshop is Rs. 6000/-<br>
               3) Only the team leader needs to register by paying 200 INR. The team members can be added under his name
</p>
          </div>
          <div id="SixthSensemenu4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Vaseem Shaik </b> | Phone: +91 85200 34225 </p>
              <p><b>Bhanu Krishna Dev</b>  | Phone: +91 81214 39065</p>
              <p><b>Deepthi</b> | Email: <a href="mailto:deepti@esparx.in">deepti@esparx.in</a></p>
              <p><b>Aparna </b> | Email:  <a href="mailto:aparna@esparx.in">aparna@esparx.in</a></p>
              <p><b>Mounika</b> | Email:  <a href="mailto:mounika@esparx.in">mounika@esparx.in</a> </p>
              <p><b>Akhila V</b> | Email: <a href="mailto:v_akhila@esparx.in">v_akhila@esparx.in</a></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal End Sixth Sense Robotics:-->

<!-- Modal Internet of Things(IOT): -->
<div class="modal fade" id="myModalIOT" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Internet of Things(IOT):</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#IOTmenu1">About</a></li>
          <li><a data-toggle="tab" href="#IOTmenu2">Content</a></li>
          <li><a data-toggle="tab" href="#IOTmenu3">Fee details </a></li>
          <li><a data-toggle="tab" href="#IOTmenu4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="IOTmenu1" class="tab-pane fade in active">
           <hr>
            <h3>About</h3>
            <p style="white-space: break-word;">The highlights of the IOT workshop are as follows
</p>
 <ol type="1">
<li>What is Internet of Things and introduction to open Cloud Computing platforms</li>
<li>Introduction to Arduino IDE and its use in Home Automation</li>
<li>How to connect Arduino to Internet and various Cloud services</li>
<li>How to send sensor data to cloud services in real time</li>
<li>Control LED's, motors and various electronic components via a webpage</li>
<li>Send tweets and update Cloud based services</li>
<li>Control electronic devices using Android Smartphone</li>
<li>Upload sensor data on Twitter using Cloud services</li>

  </ol>
          </div>
          <div id="IOTmenu2" class="tab-pane fade">
            <hr>
            <h3>Content</h3>
             <p>Maximum members allowed per team is 5</p>
 <ul>
<li> ARDUINO circuit board    </li>
<li> Motor Driver  </li>
<li> DC Motor  </li>
<li> Light Sensor  </li>
<li> LM 35  </li>
<li> Potentiometer  </li>
<li> LDR  </li>
<li> Small Buzzer  </li>
<li> Battery  </li>
<li> LED  </li>
<li> USB Wires  </li>
<li> ESP8266  </li>
<li> ESP8266 breakout board  </li>
<li> Battery Snipper(2pin_Connector)  </li>
<li> Normal Battery Snipper(Without 2 pin Connector)  </li>
<li> Screw Driver  </li>
<li> Female to Female wires  </li>
</ul>
          
          </div>
          <div id="IOTmenu3" class="tab-pane fade">
            <hr>
            <h3>Fee details</h3>
            <p>1) A maximum of 5 members allowed per team<br>
               2) The registration fee for Sixth Internet of things workshop is 6000 INR<br>
               3) Only the team leader needs to register by paying 200 INR. The team members can be added under his name</p>
          </div>
          <div id="IOTmenu4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Karunakar Reddy </b> | Phone: +91 89772 09054 </p>
              <p><b>Govind Rajulu</b>  | Phone: +91 94902 37983</p>
              <p><b>Deepthi</b> | Email: <a href="mailto:deepti@esparx.in">deepti@esparx.in</a></p>
              <p><b>Aparna </b> | Email:  <a href="mailto:aparna@esparx.in">aparna@esparx.in</a></p>
              <p><b>Mounika</b> | Email:  <a href="mailto:mounika@esparx.in">mounika@esparx.in</a> </p>
              <p><b>Akhila V</b> | Email: <a href="mailto:v_akhila@esparx.in">v_akhila@esparx.in</a></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal End Internet of Things(IOT):-->

<!-- Modal will be updated soon.... coding -->
<div class="modal fade" id="myupdate" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1>Please check back soon!</h1>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal signup coding -->
<div class="modal fade" id="signup" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h1>signup</h1>
      </div>
       <div class="modal-body">
       <?php include_once("root/signup.php"); ?>
	   </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Learn coding -->
<div class="modal fade" id="myModalCoding" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MATLAB Workshop</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#Coding1">About</a></li>
          <li><a data-toggle="tab" href="#Coding2">Agenda</a></li>
          <li><a data-toggle="tab" href="#Coding3">Fee details </a></li>
           <li><a data-toggle="tab" href="#Coding4">Contact us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="Coding1" class="tab-pane fade in active">
            <hr>
            <p>Today's world isn't all about Hardware, software isn't far behind as it's gaining pace by the day!<br>
              We teach you how to program and give an opportunity to compete<br> 
              Welcome to MATLAB Coding Workshop! </p>
          </div>
          <div id="Coding2" class="tab-pane fade">
            <hr>
            <h3>Agenda</h3>
            <p>Day-1: MATLAB basics lecture - mini competition<br>
               Day-2: Implementation of Image Processing using MATLAB - final competition<br><br>
            </p>
          </div>
          <div id="Coding3" class="tab-pane fade">
            <hr>
            <h3>Fee details</h3>
            <p>1) A maximum of 2 members are allowed per team<br>
               2) The registration fee for MATLAB workshop is 1200 INR<br>
               3) Only the team leader needs to register by paying 200 INR. The team member can be added under his name</p>
          </div>
          <div id="Coding4" class="tab-pane fade">
            <hr>
            <h3>Contact us</h3>
           <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Manjish Adhikari </b> | Phone: +91 81435 80064 </p>
              <p><b>Phanindra</b>  | Phone: +91 94418 62795</p>        
              <p><b>Lavanya</b> | Email: <a href="mailto:lavanya@esparx.in">lavanya@esparx.in</a></p>
              <p><b>Anusha D</b> | Email: <a href="mailto:d_anusha@esparx.in">d_anusha@esparx.in</a></p>
              <p><b>Shalini</b> | Email:  <a href="mailto:shalini@esparx.in">shalini@esparx.in</a></p>
            </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Robo Display -->
<div class="modal fade" id="myModalRobo" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Robot Competition</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#Robo1">About</a></li>
          <li><a data-toggle="tab" href="#Robo2">Rules</a></li>
          <li><a data-toggle="tab" href="#Robo3">Fee details </a></li>
          <li><a data-toggle="tab" href="#Robo4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="Robo1" class="tab-pane fade in active">
            <hr>
            <h3>About</h3>
           <p> There are two types of Robot competitions<br>
           1. Adventure Robot<br>
           2. Line Follower Robot<br> 
           Make your Robot strong enough to beat our spine-chilling track
           </p>
          </div>
          <div id="Robo2" class="tab-pane fade">
            <hr>
            <h3>Content</h3> 
            <p> <b>Line follower Robot:</b><br>
            There are no specific dimension requirement for Line follower Robots but every participant must upload the dimensions of their Robots and several details related to it <br><br>
            <b>Adventure Robot:</b><br>
            We welcome stronger Robots that could beat out any terrible path with a greater speed. <br>
			<i>Track:</i>
            <img src="Project hurdle.JPG"></p>
          </div>
          <div id="Robo3" class="tab-pane fade">
            <hr>
            <h3>Fee Details</h3>
            <p> <b> Adventure Robot </b><br>
			A maximum of four members allowed per team <br>
            The fee for participating in the competition is 1200 INR<br><br>
<b> Line Follower Robot</b><br>
A maximum of 3 members allowed per team <br>
The fee for participating in the competition is 1000 INR<br>
          </p>
	  
	   <br>
<div style="background-color:#DDDDDD">    
<div id="upload-wrapper1">
<div align="center">
<h3>Upload Robot Competition Presentation</h3>

<form method="post" enctype="multipart/form-data" id="MyUploa">	
<table  class="table table-hover small-text" id="tb">
<tr class="tr-header">
<td>First Name</td>
<td>Last Name</td>
<td>College</td>
<td>Gender</td>
<td>Study Year</td>
<td>Contact No</td>
<td>Email Id</td>
<tr>
<td><input type="text" name="fnamero[]" class="fname" id="fname" class="form-control"></td>
<td><input type="text" name="lnamero[]"  id="lname" class="form-control"></td>
<td><input type="text" name="collegero[]" class="form-control"></td>
<td>
<select name="genderro[]" class="form-control" id="gender">
  <option value="" selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</td>
<td>
<select name="yearro[]" class="form-control">
  <option value="" selected>Study Year</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
</select>
</td>
<td><input type="text" name="phonero[]" class="form-control"></td>
<td><input type="text" name="emailro[]" class="form-control"></td>
</tr>
<tr>
<td><input type="text" name="fnamero[]" class="form-control"></td>
<td><input type="text" name="lnamero[]" class="form-control"></td>
<td><input type="text" name="collegero[]" class="form-control"></td>
<td>
<select name="genderro[]" class="form-control">
  <option value="" selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</td>
<td>
<select name="yearro[]" class="form-control">
  <option value="" selected>Study Year</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
</select>
</td>
<td><input type="text" name="phonero[]" class="form-control"></td>
<td><input type="text" name="emailro[]" class="form-control"></td>
</tr>
<tr>
<td><input type="text" name="fnamero[]" class="form-control"></td>
<td><input type="text" name="lnamero[]" class="form-control"></td>
<td><input type="text" name="collegero[]" class="form-control"></td>
<td>
<select name="genderro[]" class="form-control">
  <option value="" selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</td>
<td>
<select name="yearro[]" class="form-control">
  <option value="" selected>Study Year</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
</select>
</td>
<td><input type="text" name="phonero[]" class="form-control"></td>
<td><input type="text" name="emailro[]" class="form-control"></td>
</tr>
<tr>
<td><input type="text" name="fnamero[]" class="form-control"></td>
<td><input type="text" name="lnamero[]" class="form-control"></td>
<td><input type="text" name="collegero[]" class="form-control"></td>
<td>
<select name="genderro[]" class="form-control">
  <option value="" selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
</td>
<td>
<select name="yearro[]" class="form-control">
  <option value="" selected>Study Year</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
</select>
</td>
<td><input type="text" name="phonero[]" class="form-control"></td>
<td><input type="text" name="emailro[]" class="form-control"></td>
</tr>
<tr>
<td colspan="7" style="text-align: center"><input type="submit"  id="submit-btndd" value="Save Data" class="submit_buttonrobot" style="background-color: #61BAE4;padding: 10px;border-radius: 5px;color:#fff;border: none" />
<div id="flashrb"></div>
<div id="show"></div></td>
</tr>
</table>
<div class="space"></div>
<input type="hidden" name="type" id="robot"  value="Robot" />
</form>



<form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm1">
<input name="FileInput" id="FileInput1" type="file" />
<input type="hidden" name="type"  value="Robot" />
<input type="submit"  id="submit-btn1" value="Upload data" />
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox1" ><div id="progressbar1"></div ><div id="statustxt1">0%</div></div>
<div id="output1"></div>
</div>
</div>
<div class="twitter_left2" style="text-align:center"> 
</div>
</div>		    
	  
	  </div>
          <div id="Robo4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
           <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Vaseem </b> | Phone: +91 85200 34225 </p>
              <p><b>T Sai Kiran</b>  | Phone: +91 73825 04890 </p>
              <p><b>Lehya</b> | Email: <a href="mailto:lehya@esparx.in">lehya@esparx.in</a></p>
              <p><b>Mehtab Bhanu </b> | Email: <a href="mailto:mehtab@esparx.in">mehtab@esparx.in</a></p>
              <p><b>Bindu  </b> | Email:  <a href="mailto:bindu@esparx.in">bindu@esparx.in</a></p>
              <p><b>Sahaja </b> | Email:  <a href="mailto:sahaja@esparx.in">sahaja@esparx.in</a> </p>
              <p><b>Akhila D </b> | Email: <a href="mailto:d_akhila@esparx.in">d_akhila@esparx.in</a></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal Robo Display-->


<!-- Modal project -->
<div class="modal fade" id="myModalProjects" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Projects</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#Projects1">About</a></li>
          <li><a data-toggle="tab" href="#Projects2">Rules</a></li>
          <li><a data-toggle="tab" href="#Projects3">Fee details </a></li>
          <li><a data-toggle="tab" href="#Projects4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="Projects1" class="tab-pane fade in active">
            <hr>
            <h1>About</h1>
            <p>It's time to showcase your talent with your innovative project<br>
            The most creative project will be rewarded 4,000 INR<br>
            Get Ready to compete!</p>
            </div>
          <div id="Projects2" class="tab-pane fade">
            <hr>
            <h3>Rules</h3>
            <ol type="1">
              <li> Participants need to provide a detailed description of project/module</li>
              <li> The Abstract file should be uploaded in the "pdf" or "doc" format</li>
              <li> A Project team can have a maximum of 4 members</li>
              <li> The team must bring their respective Project/model and a hard copy of abstract on the day of the event</li>
              <li> Please mention your Esparx ID at the top-right corner of the Abstract</li>
              <li> Last Date for submission of abstracts is 15/02/2016</li>
            </ol>
          </div>
          <div id="Projects3" class="tab-pane fade">
            <hr>
            <h3>Fee Details</h3>
            <ol>
            <li> You can upload your abstract for free(*besides registration fee)</li>
            <li> If your abstract gets selected, the team should pay 1200 INR</li>
            <li> Only the team leader needs to register by paying 200 INR. The team member can be added under his name</li>
          </div>
          <div id="Projects4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Vaseem  </b> | Phone: +91 85200 34225 </p>
              <p><b>Edison </b>  | Phone: +91 72078 07930 </p>
              <p><b>Lehya </b> | Email: <a href="mailto:lehya@esparx.in">lehya@esparx.in</a></p>             
              <p><b>Mehtab Bhanu </b> | Email: <a href="mailto:mehtab@esparx.in">mehtab@esparx.in</a></p>
              <p><b>Bindu  </b> | Email:  <a href="mailto:bindu@esparx.in">bindu@esparx.in</a></p>
              <p><b>Sahaja </b> | Email:  <a href="mailto:sahaja@esparx.in">sahaja@esparx.in</a> </p>
              <p><b>Akhila D</b> | Email: <a href="mailto:d_akhila@esparx.in">d_akhila@esparx.in</a></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal project-->


<!-- Modal Circuitrix -->
<div class="modal fade" id="myModalCircuitrix" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CIRCUITRIX</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#Circuitrix1">About</a></li>
          <li><a data-toggle="tab" href="#Circuitrix2">Rules</a></li>
          <li><a data-toggle="tab" href="#Circuitrix3">Fee details </a></li>
          <li><a data-toggle="tab" href="#Circuitrix4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="Circuitrix1" class="tab-pane fade in active">
            <hr>
            <h3>Important points to note</h3>
            <p style="white-space: break-word;">Circuitrix, as the name suggests is a event designed to test your mettle in the field of electronics and is definitely the right platform for all the electronics enthusiasts to unveil their level of merit. It gives you an opportunity to showcase your skills in design and implementation of electronic circuits using simulation softwares(multisim or pspice). All your require to do is to brush up your technical concepts and get ready to unleash your designing skills.</p>
          </div>
          <div id="Circuitrix2" class="tab-pane fade">
            <hr>
            <h3>Rules</h3>
            <p>The event raises two rounds</p>
            <p>The Team should have a maximum of two participants.</p>
            <hr>
            <h4>First Round:</h4>
            <ol>
              <li>This round is an aptitude test on the fundamentals of digital and analog electronics</li>
              <li>Selected teams from this round will proceed to next round</li>
            </ol>
            <hr>
            <h4>Second Round:</h4>
            <ol>
              <li>In this round, participants will be tested on their simulation Skills. Some Specifications are given which they need to generate and simulate using any one of the software (Multisim or Pspice), whichever is comfortable</li>
              <li>The accuracy and approach in building the circuit is tested</li>
              <li>Based on the performance, the best two teams will be awarded first and second position</li>
              <li>There is no negative marking in Round-1. Evaluation is based on the number of questions answered correctly</li>
              <li>Round-2 is judged based on efficiency of the output and time to simulate the best possible circuits</li>
            </ol>
          </div>
          <div id="Circuitrix3" class="tab-pane fade">
            <hr>
            <h3>Fee Details</h3>
            <p> A maximum of 2 members are allowed per team<br>
			The participation fee for circuitrix is 200 INR per team</p>
          </div>
          <div id="Circuitrix4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Pavan </b> | Phone: +91 87900 83242 </p>
              <p><b>John </b>  | Phone: +91 90598 74562</p>
              <p><b>Sankar</b> | Phone: +91 91540 13011</p>
              <p><b>Kamala </b> | Email: <a href="mailto:haritha@esparx.in">haritha@esparx.in</a></p>
              <p><b>Likitha  </b> | Email:  <a href="mailto:likitha@esparx.in">likitha@esparx.in</a></p>
              <p><b>Sushmitha </b> | Email:  <a href="mailto:sushmitha@esparx.in">sushmitha@esparx.in</a> </p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal Circuitrix-->


<!-- Modal GuestLectures -->
<div class="modal fade" id="myModalGuestLectures" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Guest Lectures</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#GuestLectures1">About</a></li>
          <li><a data-toggle="tab" href="#GuestLectures2">Speakers</a></li>
          <li><a data-toggle="tab" href="#GuestLectures3">Fee details </a></li>
          <li><a data-toggle="tab" href="#GuestLectures4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="GuestLectures1" class="tab-pane fade in active">
            <hr>
            <h3> About </h3>
            <p> What's been trending in India lately?<br> What program was initiated by the central government recently?<br>
For the first time ever, we present you guest lectures on the topics of Entrepreneurship, Startups and Personality Development.<br>
We're bringing some of the best speakers from across the country to ensure you get nothing less than the absolute best!<br>
<ul type="disc">
<li> Thinking to have a startup business?<br>
     * Sure, lectures on Entrepreneurship and Startups</li>
<li> Want to figure out where you'll stack up in the corporate world?<br>
     * Absolutely, lectures on Personality Development</li><br>
We invite you to come and count the valuable minutes you'll spend at the session! </p>
          </div>
          <div id="GuestLectures2" class="tab-pane fade">
            <hr>
        <h3>Speakers</h3>
		<div class="row">
    <div class="container">
        <div class="col-md-3">
                <div class="panel panel-default">
              <div class="panel-body">
                   <center>
                         <a href="#" class="thumbnail" >
                             <img src="images/Rajeev Kumra.jpg">
                         </a>
                   </center>
                       <h2>
					       Dr. Rajeev Kumra
					   </h2>
                       <h4>
					    <b>Professor - Marketing and MDP-Chairman</b>, IIM - Lucknow
					   </h4>
<a href="https://in.linkedin.com/in/rajeev-kumra-9901915" target="_blank"><button>Profile</button></a>
              </div>
       </div></div>
       <div class="col-md-3">
       <div class="panel panel-default">
               <div class="panel-body">
                  <center>
                   <a href="#" class="thumbnail" >
                            <img src="images/seshu mammaya.jpg">
                   </a>
                  </center>
                    <h2>G V Seshu Kumar </h2>
                      <h4>
					    <b>Delivery Head of Virtual Desk</b>, Wipro
					   </h4>               
<a href="https://www.linkedin.com/in/seshu-venkata-788aaa9?authType=NAME_SEARCH&authToken=6iQf&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A29587928%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1453615606461%2Ctas%3Ases" target="_blank"><button>Profile</button></a>                       
               </div>
        </div>
        </div>
</div>
</div>
<div class="row">
    <div class="container">
        <div class="col-md-3">
        <div class="panel panel-default">
              <div class="panel-body">
                   <center>
                         <a href="#" class="thumbnail" >
                             <img src="images/sreenu mammaya.jpg">
                         </a>
                   </center>
                       <h2>
					       K S Rao
					   </h2>
                       <h4>
					    <b>President & Chief Operating Officer(COO)</b> of Sterlite Technologies
					   </h4>
<a href="https://in.linkedin.com/in/ks-rao-78235118" target="_blank"><button>Profile</button></a>
              </div>
       </div>
       </div>
       <div class="col-md-3">
       <div class="panel panel-default">
               <div class="panel-body">
                  <center>
                   <a href="#" class="thumbnail" >
                            <img src="images/damera maam.jpg">
                   </a>
                  </center>
                    <h2> Dr. Vijaya Lakshmi Damera </h2>
                      <h4>
					    <b>Psychologist</b> and Head of Strategies, Options and Solutions
					   </h4>
                       <a href="http://soskakinada.com/founder.pdf" target="_blank"><button>Profile</button></a>
                   
               </div>
              
        </div>
        </div>
       
</div>
</div>      
          </div>
          <div id="GuestLectures3" class="tab-pane fade">
            <hr>
            <h3>Fee Details</h3>
            <ol type="1">
          <li> The enthusiasts for Guest Lectures need not have to pay the registration fee</li>
<li>The Guest Lectures will be hosted on Sunday and you can participate in other events as well</li>
<li>The fee for Guest Lectures is 200/- per individual</li>
</ol>

<hr>
<a href="https://www.payumoney.com/paybypayumoney/#/22BB8C4E004244629443EDD704BDEA43" class="btn btn-lg btn-info" target="_blank">Buy ticket</a>
          </div>
          <div id="GuestLectures4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Karunakar Reddy </b> | Phone: +91 89772 09054 </p>
              <p><b>Edison Christopher</b>  | Phone: +91 72078 07930</p>
            
              <p><b>Sravya</b> | Email: <a href="mailto:sravya@esparx.in">sravya@esparx.in</a></p>
              <p><b>Geethika  </b> | Email:  <a href="mailto:geethika@esparx.in">geethika@esparx.in</a></p>
              <p><b>Pavani </b> | Email:  <a href="mailto:pavani@esparx.in">pavani@esparx.in</a> </p>
              <p><b>Priyanka </b> | Email: <a href="mailto:priyanka@esparx.in">priyanka@esparx.in</a></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal GuestLectures-->


<!-- Modal Hospitality Accommodation for Boys -->
<div class="modal fade" id="myModalHospitality1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Accommodation</h4>
        
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#Hospitalityboys1">About</a></li>
          <li><a data-toggle="tab" href="#Hospitalityboys2">Photo Gallery</a></li>
          <li><a data-toggle="tab" href="#Hospitalityboys3">Fee details </a></li>
          <li><a data-toggle="tab" href="#Hospitalityboys4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="Hospitalityboys1" class="tab-pane fade in active">
            <hr>
           <h2> Accommodation for Boys</h2>
            <h3>Accommodation should be taken for 2 days</h3>
            <p>"You can always find comfort with an adjustment but not the luxury... Enjoy our luxury stay at an incomparable cheaper price!"
            <ol type="1">
            <li>Luxury(A/C room with TV) - 220/- per day </li>
<li>Semi Luxury (A/C dormitory) - 170/- per day</li>
<li>Comfort (Non A/C dormitory) - 100/- per day</li>      
            </ol>
</p>
<hr>
<h2>Accommodation for Girls</h2>
    <h3>Comfort level: 100/- per day</h3>
            <p>Luxury stay can be provided under request with a valid reason</p>        
          </div>
          <div id="Hospitalityboys2" class="tab-pane fade">
            <hr>
            <h3>Luxury Accommodation</h3>
           <div class="container">
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/gallery/accommodation-boys/1.JPG" alt="Luxury Accommodation">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/gallery/accommodation-boys/2.JPG" alt="Luxury Accommodation">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
          <img src="images/gallery/accommodation-boys/3.JPG" alt="Luxury Accommodation">
        </a>
    </div>
    
</div>

<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
        </div>
    </div>
</div>
<hr>
<h3>Semi-Luxury Accommodation</h3>
     <div class="container">
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/gallery/semi-luxury-accommodation/1.JPG" alt="Semi-Luxury Accommodation">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/gallery/semi-luxury-accommodation/2.JPG" alt="Semi-Luxury Accommodation">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
          <img src="images/gallery/semi-luxury-accommodation/3.JPG" alt="Semi-Luxury Accommodation">
        </a>
    </div>
    
</div>       
          </div>
          <div id="Hospitalityboys3" class="tab-pane fade">
            <hr>
            <h3>Fee Details</h3>
         
            <ol type="1">
           <li>Luxury(A/C room with TV) - 220/- per day </li>
<li>Semi Luxury (A/C dormitory) - 170/- per day</li>
<li>Comfort (Non A/C dormitory) - 100/- per day</li>  
</ol>

<hr>
<a href="#" class="btn btn-lg btn-info">Make Payment </a>
          </div>
          <div id="Hospitalityboys4" class="tab-pane fade">
            <hr>
            <h2>Accommodation for Boys:</h2>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Vasu Chappa</b> | Phone: +91 90147 67912</p>
              <p><b>Govind Rajulu</b>  | Phone: +91 94902 37983</p>
            
              <p><b>B Sravani </b> | Email: <a href="mailto:sravani@esparx.in">sravani@esparx.in</a></p>
              <p><b>Harika Bhargavi </b> | Email:  <a href="mailto:harika@esparx.in">harika@esparx.in</a></p>
              <p><b>Sahiti Niharika </b> | Email:  <a href="mailto:sahiti@esparx.in">sahiti@esparx.in</a> </p>
              <p><b>Sowjanya </b> | Email: <a href="mailto:sowjanya@esparx.in">sowjanya@esparx.in</a></p>
            </div>
            <hr>
            <h2>Accommodation for Girls:</h2>
             <h3>Contact us:</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Vasu Chappa </b> | Phone: +91 94902 37983</p>
              <p><b>Govind Rajulu</b>  | Phone: +91 72078 07930</p>
            
              <p><b>B Sravani</b> | Email: <a href="mailto:sravani@esparx.in">sravani@esparx.in</a></p>
              <p><b>Harika Bhargavi  </b> | Email:  <a href="mailto:Harika@esparx.in">Harika@esparx.in</a></p>
              <p><b>Sahiti Niharika </b> | Email:  <a href="mailto:sahiti@esparx.in">sahiti@esparx.in</a> </p>
              <p><b>Sowjanya </b> | Email: <a href="mailto:sowjanya@esparx.in">sowjanya@esparx.in</a></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal Hospitality Accommodation for Boys-->

<!-- Modal Hospitality Accommodation for girls -->
<div class="modal fade" id="myModalHospitality2" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Food</h4>
      </div>
      <div class="modal-body">
         <hr>
         
           <h4><b>Day 1:</b> Breakfast - Lunch - Dinner <hr>
<b>Day 2:</b> Breakfast - Lunch  <hr>

Pay 250/- to order food for 2-days 
</h4>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal Hospitality Accommodation for girls-->
<script type="text/javascript">
$(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});
</script>
<!--end contact-->
<script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		
		
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>