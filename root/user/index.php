<!DOCTYPE HTML>
<html>
<head>
<title>Esparx2k16 | Home :: </title>
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
<script src="js/hover_pack.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
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
      <div class="logo"> <a href="index.php"><img src="images/logo.png" alt=""/></a> </div>
      <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /></a>
        <ul class="nav" id="nav">
         <!-- <li><a href="#home" class="scroll">Welcome!</a></li>-->
          <li><a href="#Events" class="scroll">Events</a></li>
           <li><a  href="#"  data-toggle="modal" data-target="#myupdate">Online Events</a></li>
          <li><a href="#Initiatives" class="scroll">Initiative</a></li>
          <li><a href="#" data-toggle="modal" data-target="#myModalGuestLectures">Guest Lectures</a></li>
          <li><a href="a  href="#"  data-toggle="modal" data-target="#myupdate"" class="scroll">Partnership</a></li>
            <li><a href="#hospitality" class="scroll">Hospitality</a></li>
          <li><a  href="#"  data-toggle="modal" data-target="#myupdate">Organising Committee</a></li>
          <li><a href="#contact" class="scroll">Contact</a></li>
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
  <div class="header-bottom" id="home">
    <h1>Welcome to Esparx2k16</h1>
    <div class="welcome"></div>
    <div class="buttons-box"> <a  class="btn btn-f-default smoothanchor" href="#"  data-toggle="modal" data-target="#myupdate">Login</a> <a  class="btn btn-f-default smoothanchor" href="#"  data-toggle="modal" data-target="#myupdate">Register</a> </div>
  </div>
</div>
<!--end header-->

<!--start Events-->
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
        <li><span class="filter" data-filter="Coding">Learn Coding</span></li>
        <li><span class="filter" data-filter="Robo">Robo Display</span></li>
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
            <h2> Will be updated soon</h2>
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

<!--start GuestLectures-->
<!--<div class="twitter" id="GuestLectures">
  <div class="container">
    <div class="twitter_left">
      <h3 class="m_21">Guest Lectures:</h3>
      <div class="m_22"><span class="default_line"> </span></div>
    </div>
    <div class="clear"></div>
    <p class="m_9">Surprise Guests are gonna deliver a lecture on entrepreneurship Lecture on Entrepreneurship... You're Welcome to the Q&A session  An interactive session by a psychologist </p>
  </div>
</div>-->
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
			<p>Sai Kiran Tenali - +91 73825 04890</p>
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
          <li>Antennas and Microwave</li>
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
          <li>A team has a maximum of 2 persons.</li>
          <li>The paper should be in "pdf" or "doc" format</li>
          <li> Team should bring 3 Hard copies of paper and soft copy of ppt in a pen drive or CD.</li>
          <li> Time duration is 5+2 min including queries.</li>
          <li> Paper should contain max of 8 pages and should strictly follow standard IEEE two-column format.Download the sample file Here</li>
          <li>Last Date for submission of papers is 15/02/2016</li>
        </ol>
          </div>
          <div id="Presentationmenu3" class="tab-pane fade">
            <hr>
            <h3>Will be updated soon</h3>
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
          <li>Antennas and Microwave</li>
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
          <li>A team has a maximum of 2 persons.</li>
          <li>The paper should be in "pdf" or "doc" format</li>
          <li> Team should bring 3 Hard copies of paper and soft copy of ppt in a pen drive or CD.</li>
          <li> Time duration is 5+2 min including queries.</li>
          <li> Paper should contain max of 8 pages and should strictly follow standard IEEE two-column format.Download the sample file Here</li>
          <li>Last Date for submission of papers is 15/02/2016</li>
        </ol>
          </div>
          <div id="myModalPaper3" class="tab-pane fade">
            <hr>
            <h3>Will be updated soon</h3>
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
              <li>Basic of different circuit functional blocks</li>
              <li>Developing Projects by combining & Linking different functional circuit blocks</li>
              <li>Developing the Schematic Diagram using actual component specifications</li>
              <li>Circuit designing in ISIS Professional Software</li>
              <li>Circuit simulation in Real-time using circuit simulation Software</li>
              <li>Techniques for Debugging the Schematic for bugs & error </li>
              <li>Designing of PCB layout in ARES Professional Software</li>
              <li>Techniques for miniaturizing the PCB Layout</li>
                 <li>Designing of Single side & Double sided PCB</li>
                 <li>Designing Surface Mount Technology(SMT) type PCB</li>
                 <li>Ground & Power Plane Creations Techniques & Tips</li>
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
 <li> Soldering Iron</li>
 <li> Soldering Wire</li>
 <li> Hand Drilling Machine</li>
 <li>Drilling Bits</li>
 <li> Battery connector</li>
 <li> Battery</li>
 <li>Multimeter</li>

            </ol>
          </div>
          <div id="PCBmenu3" class="tab-pane fade">
            <hr>
            <h3>Fee details</h3>
            <p>1) A maximum of 4 members allowed per team<br>
               2) The registration fee for PCB workshop is Rs. 4000/-<br> 
               3) Please log in to your account by paying the registration fee(If already paid, please log in to your account)<br>
               4) The person who registers for the fest can add the rest of the 3 team members, all of the 4 team members need not have to pay 200/-.</p>
          </div>
          <div id="PCBmenu4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Karunakar Reddy </b> | Phone: +91 89772 09054 </p>
              <p><b>Bhanu Krishna Dev</b>  | Phone: +91 81214 390654</p>
              <p><b>Surya Prakash </b>  | Phone: +91 949290 51016</p>
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
            <p style="white-space: break-word;">This workshop interfaces the digital world with physical world You will be taught about the following topics
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
<li>Battery (9v)</li>
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
               3) Please log in to your account by paying the registration fee(If already paid, please log in to your account)<br>
               4) The person who registers for the fest can add the rest of the 4 team members, all of the 5 team members need not have to pay 200/-.</p>
          </div>
          <div id="SixthSensemenu4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Karunakar Reddy </b> | Phone: +91 89772 09054 </p>
              <p><b>Bhanu Krishna Dev</b>  | Phone: +91 81214 390654</p>
              <p><b>Surya Prakash </b>  | Phone: +91 949290 51016</p>
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
<li>Introduction to Arduino IDE and its use in Home Automation.</li>
<li>How to connect Arduino to Internet and various Cloud services.</li>
<li>How to send sensor data to cloud services in real time.</li>
<li>Control Led's, motors and various electronic components via a webpage.</li>
<li>Send tweets and update Cloud based services.</li>
<li>Control electronics devices using Android Smartphone.</li>
<li>Upload sensor data on Twitter using Cloud services</li>

  </ol>
          </div>
          <div id="IOTmenu2" class="tab-pane fade">
            <hr>
            <h3>Content</h3>
             <p>Maximum members allowed per team is 5</p>
 <ul>
<li>ARDUINO circuit board    </li>
 <li>Motor Driver  </li>
 <li>DC Motor  </li>
 <li>Light Sensor  </li>
 <li>LM 35  </li>
<li> Potentiometer  </li>
<li> LDR  </li>
 <li>Small Buzzer  </li>
<li> Battery  </li>
<li> LED  </li>
<li> USB Wires  </li>
 <li>ESP8266  </li>
 <li>ESP8266 breakout board  </li>
<li> Battery Snipper(2pin_Connector)  </li>
<li> Normal Battery Snipper(Without 2 pin Connector)  </li>
 <li>Screw Driver  </li>
 <li>Female to Female wires  </li>
</ul>
          
          </div>
          <div id="IOTmenu3" class="tab-pane fade">
            <hr>
            <h3>Fee details</h3>
            <p>1) A maximum of 5 members allowed per team<br>
               2) The registration fee for Sixth Internet of things workshop is Rs. 6000/-<br> 
               3) Please log in to your account by paying the registration fee(If already paid, please log in to your account)<br>
               4) The person who registers for the fest can add the rest of the 4 team members, all of the 5 team members need not have to pay 200/-.</p>
          </div>
          <div id="IOTmenu4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Karunakar Reddy </b> | Phone: +91 89772 09054 </p>
              <p><b>Bhanu Krishna Dev</b>  | Phone: +91 81214 390654</p>
              <p><b>Surya Prakash </b>  | Phone: +91 949290 51016</p>
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
        <h1>Will Be Updated Soon....</h1>
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
        <h4 class="modal-title">Learn coding</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->
          <li  class="active"><a data-toggle="tab" href="#Coding1">About</a></li>
          <li><a data-toggle="tab" href="#Coding2">Contact Coding team</a></li>
          <li><a data-toggle="tab" href="#Coding3">Fee details </a></li>
           <li><a data-toggle="tab" href="#Coding4">Contact Us</a></li>
        </ul>
        <div class="tab-content">
          <!--<div id="home" class="tab-pane fade in active">
    
 
      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>
    </div>-->
          <div id="Coding1" class="tab-pane fade in active">
            <hr>
            <p>Too much concerned about hardware? many of the companies care about software as well
              We teach you how to program and give an opportunity to compete. 
              Welcome to Coding Workshop! </p>
          </div>
          <div id="Coding2" class="tab-pane fade">
            <hr>
            <h3>Contact Coding team</h3>
            <p>Will be updated soon</p>
          </div>
          <div id="Coding3" class="tab-pane fade">
            <hr>
            <h3>Fee details</h3>
            <p>Will be updated soon</p>
          </div>
          <div id="Coding4" class="tab-pane fade">
            <hr>
            <h3>Contact Us</h3>
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
        <h4 class="modal-title">Robo Display</h4>
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
            <h3>will be updated soon...</h3>
           
          </div>
          <div id="Robo2" class="tab-pane fade">
            <hr>
            <h3>Will be updated soon...</h3>
            
          </div>
          <div id="Robo3" class="tab-pane fade">
            <hr>
            <h3>Will be updated soon...</h3>
          </div>
          <div id="Robo4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
           <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Vaseem </b> | Phone: +91 85200 34225 </p>
              <p><b>Sri Krishna Teja </b>  | Phone: +91 94418 56427</p>
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
            <h3>Important points to note</h3>
            <ol type="1">
              <li>Participants need to provide a detailed description of project/module in the form of paper in IEEE format in the abstract</li>
              <li>The Abstract file should be uploaded in the "pdf" or "doc" format and less than 300kb</li>
              <li>A Project team can have a maximum of 4 persons.</li>
              <li>The team must be accompanied with their respective Project/model and a hard copy of abstract on the day of the event.</li>
              <li>Abstract should contain max of 8 pages and should strictly follow standard IEEE two-column format.Download the sample file Here</li>
              <li>Last Date for submission of abstracts is 15/02/2016</li>
            </ol>
          </div>
          <div id="Projects2" class="tab-pane fade">
            <hr>
            <h3>Rules</h3>
            <p>The event raises two rounds</p>
            <p>The Team should have a maximum of two participants.</p>
            <hr>
            <h4>First Round:</h4>
            <ol>
              <li>This round is an aptitude test on the fundamentals of digital and analog electronics.</li>
              <li>Selected teams from this round will proceed to next round.</li>
            </ol>
            <hr>
            <h4>Second Round:</h4>
            <ol>
              <li>In this round, participants will be tested on their simulation Skills. Some Specifications are given which they need to generate and simulate using any one of the software (Multisim or Pspice). Whatever participants are comfortable with.</li>
              <li>The accuracy and approach in building the circuit is tested.</li>
              <li>Based on the performance, the best two teams will be awarded first and second position.</li>
              <li>There is no negative marking in Round-1. Evaluation is based on the number of questions answered correctly.</li>
              <li>Round-2 is judged based on efficiency of the output and time to simulate the best possible circuits.</li>
            </ol>
          </div>
          <div id="Projects3" class="tab-pane fade">
            <hr>
            <h3>Will be updated soon</h3>
          </div>
          <div id="Projects4" class="tab-pane fade">
            <hr>
            <h3>Contact</h3>
            <div class="address" style="background:#ff9900; padding:5px;">
              <p><b>Vaseem  </b> | Phone: +91 85200 34225 </p>
              <p><b>Sri Krishna Teja </b>  | Phone: +91 94418 56427</p>
             
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
            <p style="white-space: break-word;">Circuitrix, as the name suggests is a event designed to test your mettle in the field of electronics, definitely a platform for all the electronics enthusiasts to exhibit their skills against the best of the best in this specialization. This event gives you the opportunity to show case your skills at designing and implementing electronic circuits, using simulation softwares (multisim or pspice).All your require to do is to brush up your concepts and get ready to unleash your designing skills.</p>
          </div>
          <div id="Circuitrix2" class="tab-pane fade">
            <hr>
            <h3>Rules</h3>
            <p>The event raises two rounds</p>
            <p>The Team should have a maximum of two participants.</p>
            <hr>
            <h4>First Round:</h4>
            <ol>
              <li>This round is an aptitude test on the fundamentals of digital and analog electronics.</li>
              <li>Selected teams from this round will proceed to next round.</li>
            </ol>
            <hr>
            <h4>Second Round:</h4>
            <ol>
              <li>In this round, participants will be tested on their simulation Skills. Some Specifications are given which they need to generate and simulate using any one of the software (Multisim or Pspice). Whatever participants are comfortable with.</li>
              <li>The accuracy and approach in building the circuit is tested.</li>
              <li>Based on the performance, the best two teams will be awarded first and second position.</li>
              <li>There is no negative marking in Round-1. Evaluation is based on the number of questions answered correctly.</li>
              <li>Round-2 is judged based on efficiency of the output and time to simulate the best possible circuits.</li>
            </ol>
          </div>
          <div id="Circuitrix3" class="tab-pane fade">
            <hr>
            <h3>Will be updated soon</h3>
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
            <p>   - Guest Lectures focus towards Entrepreneurship and career building <br>
			      - The speakers are eminent and come from all over the country<br>
	              - The Lectures would be helpful especially for the students who are determined to go in an unconventional way and working                    constantly to get into the list of top-most admirable people in the world.
</p>
            
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
                             <img src="images/sreenu mammaya.jpg">
                         </a>
                   </center>
                       <h2>
					       K S Rao
					   </h2>
                       <h4>
					    President & Chief Operating Officer of Sterlite Technologies
					   </h4>


              </div>
             
       </div>
       </div>
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
					    Delivery Head of Virtual Desk, Wipro
					   </h4>
                   
               </div>
              
        </div>
        </div>
       
</div>
</div>
			<p>   Yet to be confirmed:<br>
			   - Professor, Indian Institute of Management<br> 
			   - Psychologist, graduated from Oklahoma university<br>
			  </p>  

            
          </div>
          <div id="GuestLectures3" class="tab-pane fade">
            <hr>
            <h3>Fee Details</h3>
            <ol type="1">
          <li>
Pay the registration fee Rs. 200/- to register for Entrepreneurship</li>
<li>The Guest Lectures will be hosted on Sunday and you can participate in other events as well</li>
<li>The fee for Guest Lectures is 200/- per individual</li>
</ol>

<hr>
<a href="#" class="btn btn-lg btn-info">Make Payment </a>
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
           <li>Luxury(A/C room with TV) - 200/- per day </li>
<li>Semi Luxury (A/C dormitory) - 150/- per day</li>
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