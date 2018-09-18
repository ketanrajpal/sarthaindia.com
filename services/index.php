<?php
ob_start();
$page="services";
$name=$_GET["slug"];
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("../inc/head.php"); ?>
<?php require_once("../inc/meta.php"); ?>
</head>
<body>
<?php require_once("../inc/header.php"); ?>


<img src="../img/services_pages/<?php echo $name; ?>.jpg" width="100%">
<section id="service-section">
 <?php if($name=="tourism-representation"){ ?>
 
 <h1>Tourism Representation & Travel Trade Engagement</h1>
 
 <ul>
  <li>Travel trade interaction and brand positioning in-market.</li>
  <li>Identifying key operators and product development.</li>
  <li>Marketing co-promotions targeted at relevant key audiences.</li>
  <li>Sourcing and building In-market partnerships.</li>
  <li>Familiarization trips for key decision makers.</li>
  <li>Constant contact programs- including training.</li>
  <li>Digital engagement- including content management.</li>
  <li>Brochures and Collateral dissemination.</li>
  <li>Online Webinars and Destination Training module promotions.</li>
 </ul>

 
 <?php }else if($name=="public-relations"){ ?>
 
 <h1>Public Relations and Communication</h1>
 
 <p>In Today, and in times ahead, the significance of Public Relations and Communications (as a part of any organization's overall marketing strategy) has only been increasing. When it comes to your brand, we don't just become an 'outsourced agency', but your 'Communication Partner' and 'Brand Custodian'. We take care of your brand's overall perception and image in the market. Our services cover all PR tools which include</p>
 
 <ul>
  <li>Media Outreach and Media Relations.</li>
  <li>Press Releases: Draft and disseminate all official communications to the media on behalf of your brand.</li>
  <li>E-Newsletters</li>
  <li>Press Conferences & Media Events</li>
  <li>FAM Trips</li>
  <li>Interviews and Feature Story Placements</li>
 </ul>
 
 <?php }else if($name=="consumer-promotions"){ ?>
 
 <h1>Consumer Promotions</h1>
 <p>The right alliance is crucial to establishing a brand connect with the Indian consumer. Sartha Global Marketing can identify, evaluate and approach the right industry partners to promote your brand through various channels :-</p>
 <ul>
  <li>Targeted coop campaign with focus on ROI</li>
  <li> Proactively sourcing marketing opportunities with non- traditional (non-travel) partners and brands with synergies compatible with our clients. This includes key decision-makers in the corporate world, travel trade & the Indian Film industry, key consumer brands to name a few</li>
 </ul>

 
 <?php }else if($name=="digital-and-social-media"){ ?>
 
 <h1>Digital & Social Media</h1>
 
 <ul>
  <li>Our services include &ndash; creation of Facebook/Twitter content</li>
  <li>Update and manage posts on a daily basis</li>
  <li>Monitor posts on a daily basis</li>
  <li>Social media platform integration as part of our coop activities with major tour operators and airlines. </li>
  <li>Coop's with OTA's</li>
 </ul>
 
 <?php }else if($name=="hotel-sales-and-marketing"){ ?>
 
 <h1>Hotel Sales & Marketing</h1>
 
 <p>Sartha Global Marketing offers services to hospitality businesses looking at establishing their presence in the Indian market and increasing their market share.<br><br>Our pan-India specialist sales team can</p>
 <ul>
  <li>Identify and engage the right customer segment</li>
  <li>Brand positioning</li>
  <li>Targeted sales and marketing activities</li>
  <li>Organize workshops</li>
  <li>Promote your brand offerings that sets you apart from the competition</li>
 </ul>

 
 <?php }else if($name=="trade-shows-and-events"){ ?>
 
 <h1>Trade Shows & Events</h1>
 
 <p>Sartha Global Marketing can help you:</p>
 <ul>
  <li>Plan and coordinate events such as Forums, Trade Missions, Road Shows</li>
  <li>Trade Show booth manage & set-ups</li>
  <li>Consumer Events etc.</li>
 </ul>

 
 <?php }else if($name=="market-intelligence-and-research"){ ?>
 
 <h1>Market Intelligence & Research</h1>
 <p>With our countrywide network and ongoing contact program with industry leaders and experts, we maintain our knowledge base of various happenings and changes in the travel/tourism/hospitality industry; trade bodies and associations; and the media. Additionally we regularly conduct various surveys and research programs for our clients.<br><br>We have a Strategic Planning Cell comprising of our leadership team, supported by outsourced research associates, that meets at various intervals throughout the year. This Planning Cell provides ongoing statistical data, market intelligence, strategic solutions and targeted research studies to our clients.</p>

 
 <?php }else if($name=="brand-management-and-advertising-support"){ ?>
 
 <h1>Brand Management & Advertising Support</h1>
 
 <p>Sartha Global Marketing adopts a long-term focus to attract and retain a loyal customer base for your brand.<br><br>Our dedicated team of Marketing and PR professionals take care of all your advertising needs</p>
 <ul>
  <li>Forging media partnerships and media buys</li>
  <li>The right brand messaging</li>
  <li>Optimum placement of editorial or advertorial content</li>
  <li>Brand research and media buying across various channels. </li>
  <li>Create brand awareness</li>
  <li>Engage the right consumer segment</li>
  <li>Identify and execute the right co-branding opportunities.</li>
 </ul>

 
 <?php }else{ header("Location: ../"); } ?>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php ob_flush(); ?>