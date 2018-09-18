<?php
ob_start();
$page="index";
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("inc/head.php"); ?>
<?php require_once("inc/meta.php"); ?>
</head>
<body>
<?php require_once("inc/header.php"); ?>
<br>
<br>
<br>
<br>
<section id="slider">
  <ul>
    <li><img src="img/slide-1.jpg" data-title="<h1>Best In-Class Sales and Marketing</h1><h2>We identify, evaluate and approach your future partners & alliances.</h2>"></li>
    <li><img src="img/slide-2.jpg" data-title="<h1>Expert PR & Event Planning</h1><h2>Forums, Trade Missions, Road Shows, Trade Show booth set-ups, Consumer Events. We are your expert team.</h2>"></li>
    <li><img src="img/slide-3.jpg" data-title="<h1>Advertising & Market Intelligence</h1><h2>Content, Brand Research & Media buying. Our countrywide network and Industry Leadership makes your life easier.</h2>"></li>
  </ul>
</section>
<script> $('#slider ul').bxSlider({captions: true, auto: true, speed:2000,pause:9000, mode: "fade", pager: false});  </script>
<section id="about">
  <div>
    <h1>Sartha is the Sanskrit word for "Successful". We believe that the three fundamental principles to success are Integrity, Transparency and Efficiency.</h1>
    <p>Sartha Global Marketing is a Tourism Marketing Representation, Destination Branding and Public Relations Company.        
The Sartha Group was established in April 2007 with the objective to provide integrated sales & marketing solutions and consultancy, for organizations wanting to do business in India. Our focus business segments are tourism, hospitality,  aviation and trade/ convention bureaus.
The Sartha Group acts as the Indian representative of several prestigious tourism boards/ destinations in the USA. Our retainer clients include Brand USA, Visit California, Las Vegas Conventions & Visitors Association, Philadelphia Convention & Visitors Bureau, San Francisco Travel and San Francisco International Airport, Beverly Hills Conference & Visitors Bureau, Nevada Commission on Tourism and Citrus Group of Leisure Hotels, Sri Lanka.
Our sister company Mileage Communications represents a host of International Tourism Boards in the Indian including the Hong Kong Tourism Board, Visit Flanders and Japan National Tourism Organization (JNTO).
Sartha is headquartered in New Delhi and has branch offices in Mumbai and Chennai.</p>
  </div>
</section>
<section id="policy">
  <ul class="clear">
    <li>
      <div class="fa fa-eye"></div>
      <h1>Vision</h1>
      <p>To establish a reputation of offering innovation and creative business solutions based on the needs of our clients. Additionally to be known as a value for money service provider and a leader in the business verticals serviced by us.</p>
    </li>
    <li>
      <div class="fa fa-line-chart"></div>
      <h1>Mission</h1>
      <p>To offer integrated sales and marketing consultancy and solutions to companies, tourism products and destinations seeking to set up operations and do business in India.</p>
    </li>
    <li>
      <div class="fa fa-users"></div>
      <h1>Management</h1>
      <p>Sheema Vohra is the Founder and Managing Director for Sartha Global Marketing Group & Director for Mileage Communications (India) Pvt. Ltd. She has been in the Tourism, Hospitality and Public Relations Industries for over two decades. Her experience ranges from sales & marketing & maintaining trade & media relationships.</p>
      <p>Sunil Puri is the Executive Director of Sartha Global Marketing and Managing Director of Mileage Communications (India) Private Limited. He has several years of experience in Finance; Public Relations and Marketing and in the travel and tourism industry. Sunil has been associated with several aviation and tourist projects - including All-India promotions and events.</p>
    </li>
  </ul>
</section>
<section id="services" class="clear">
  <h1>Services</h1>
  <p>The Sartha Team with its well established contacts & requisite marketing expertise in a range of Tourism, Aviation and Hospitality related verticals. Our services include:</p>
  <ul id="newtabs" class="clear">
    <li>
      <a href="../services/tourism-representation"><h1>Tourism Representation</h1></a>
    </li>
    <li>
      <a href="../services/public-relations"><h1>Public Relations</h1></a>
    </li>
    <li>
      <a href="../services/consumer-promotions"><h1>Consumer Promotions</h1></a>
    </li>
    <li>
      <a href="../services/digital-and-social-media"><h1>Digital & Social Media</h1></a>
    </li>
    <li>
      <a href="../services/hotel-sales-and-marketing"><h1>Hotel Sales & Marketing</h1></a>
    </li>
    <li>
      <a href="../services/trade-shows-and-events"><h1>Trade Shows & Events</h1></a>
    </li>
    <li>
      <a href="../services/market-intelligence-and-research"><h1>Market Intelligence & Research</h1></a>
    </li>
    <li>
      <a href="../services/brand-management-and-advertising-support"><h1>Brand Management & Advertising Support</h1></a>
    </li>
  </ul>
</section>
<section id="clients">
  <h1>Clients</h1>
  <ul>
    <li><img src="img/clients/1.gif"></li>
    <li><img src="img/clients/2.gif"></li>
    <li><img src="img/clients/3.jpg"></li>
    <li><img src="img/clients/4.gif"></li>
    <li><img src="img/clients/5.jpg"></li>
    <li><img src="img/clients/7.jpg"></li>
    <li><img src="img/clients/8.jpg"></li>
    <li><img src="img/clients/9.jpg"></li>
    <li><img src="img/clients/10.jpg"></li>
  </ul>
</section>
<script>
 $('#clients ul').bxSlider({
    slideWidth: 200,
    minSlides: 2,
    maxSlides: 5,
    slideMargin: 10,
	moveSlides:1,
	pager:false,
	controls:false,
	auto:true
  });
</script>
<section id="news">
  <h1>News & Updates</h1>
  <ul id="newsupdates">
    <li>
      <h2><span class="fa fa-info-circle"></span>Brand USA India Mission</h2>
      <img src="img/news-1.jpg">
      <div>06 September 2015</div>
      <p>We organized our 4th annual India Sales Mission 2015 for Brand USA from September 6th – 11th in Chennai, Mumbai & New Delhi. The delegation comprised of 31 U.S. Companies & 40 delegates. The activities include B2B table top trade show for travel agents , VIP Networking Dinner & a Media Day.</p>
    </li>
    <li>
      <h2><span class="fa fa-info-circle"></span>USA Discovery Program</h2>
      <img src="img/news-2.jpg">
      <div>02 September 2011</div>
      <p>Launched in September 2014, the USA Discovery Program is the online training program for travel agents. It is aimed to enhance the product offerings of the USA for travel agents. In its 2nd phase now, the online training program has several new exciting modules on newer regions of the USA. We have over 2100 active travel agents who are completing the program.</p>
    </li>
    <li>
      <h2><span class="fa fa-info-circle"></span>California Expert</h2>
      <img src="img/news-3.jpg">
      <div>05 September 2014</div>
      <p>Sartha successfully launched this online education program for travel agents in September ,2011.   There has been an overwhelming response from the industry and we have over 1800 travel agents that have completed the program with 3600 people who have registered and are in the process of completion.</p>
    </li>
  </ul>
  <div class="clear"></div>
</section>
<section id="careers">
  <article>
    <ul class="clear">
      <li><img src="img/careers.jpg"></li>
      <li>
        <h1>Work with us</h1>
        <p>Sartha Marketing is a leading company in the field of Tourism, Hospitality and Aviation representation and product sales and marketing. We work for a range of prestigious international clients and expect our team members to work within out ethos of quality, integrity and client satisfaction.<br>
          <br>
          If you are:<br>
          <br>
          <span>&bull;</span> Creative, passionate and willing to go that extra mile to meet your targets.<br>
          <span>&bull;</span> Willing to go that extra mile to fulfill your client requirements.<br>
          <span>&bull;</span> Willing to work with integrity and quality.<br>
          <span>&bull;</span> Want to ensure full client satisfaction and market reputation.<br>
          <br>
          Then you are ideal for our team. Apply at <a href="mailto:sarthamarketing@sarthaindia.com">sarthamarketing@sarthaindia.com</a></p>
      </li>
    </ul>
  </article>
</section>
<section id="contact">
  <article>
    <h1>Contact us</h1>
    <br>
    <br>
    <br>
    <div class="address">
      <p><span class="fa fa-map-marker"></span> 2nd Floor, Sishan House, 119, Shahpur Jat, New Delhi-110049, India <br>
        <br>
        <span class="fa fa-phone"></span> 91 11 49210000-19 <br>
        <br>
        <span class="fa fa-envelope"></span> <a href="mailto:sarthamarketing@sarthaindia.com">sarthamarketing@sarthaindia.com</a> <br>
        <br>
        <span class="fa fa-globe"></span> <a href="#">www.sarthaindia.com</a></p>
    </div>
    <div class="form">
      <input type="text" name="your-name" value="" placeholder="Name">
      <input type="text" name="your-name" value="" placeholder="Email">
      <input type="text" name="your-name" value="" placeholder="Phone">
      <input type="text" name="your-name" value="" placeholder="Country">
      <textarea type="text" name="your-name" value="" placeholder="Message"></textarea>
      <center>
        <input type="submit" value="Send">
      </center>
    </div>
    <div class="clear"></div>
  </article>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1752.3369995227586!2d77.21524304286471!3d28.549516944055267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce21426d8fe43%3A0x3da7787af204f6f9!2sShahpur+Jat%2C+Siri+Fort%2C+New+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1434060345853" width="100%" height="450" frameborder="0" style="border:0"></iframe>
<section id="clients" style='padding:20px !important;'>
  <h1 style="font-size:25px !important;;margin-bottom:20px !important;">Associate Company Mileage Communications</h1>
  <ul>
    <li><a href='http://mileage.in/' target='_blank'><img src="img/clients/11.jpg"></a></li>
  </ul>
</section>
<?php require_once("inc/footer.php"); ?>
</body>
</html>
<?php ob_flush(); ?>