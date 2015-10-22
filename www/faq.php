<?php

require_once("global.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/fluidbox.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">

	<title> :: RakthaDatha :: </title>

</head>
<body>


	<header>

		<div id="logo-container">
			<div id="logo"><a href="#">RakthaDatha</a></div>
			<div id="subtitle">"donate Blood, save Life"</div>
		</div>
		<nav id="head">
			<ul>
				<li><a href="index.php">Home</a></li>
				<?php
					if(isset($_SESSION['username'])){
				?>
						<li><a href="logout.php">Log Out</a></li>
				<?php
					}
					else{
				?>
						<li><a href="signup.php">Sign Up</a></li>
						<li><a href="login.php">Log In</a></li>
						<li><a href="forgot_pw.php">Forgot Password</a></li>
				<?php
					}
				?>
				<li><a href="unsubscribe.php">Un Subscribe (delete user)</a></li>
				<li><a href="blood_request.php" class="bordered">Request Blood</a></li>
				<li><a href="faq.php">Frequently Asked Questions</a></li>
			</ul>
		</nav>

	</header>

	<div id="content">

		<section class="row">
			<div>

			<!--	// faq edit starts here -->
				 <h1>FAQs</h1>

        <p>If you can&#39;t find an answer to your question you can <a href="#contactus" title="Contact RakthaDatha">contact us here</a>.</p>

        <div class="cf popular-faqs">
          <h2 class="h2">Most popular FAQs</h2>

          <ul class="popular-list">
            <li class="media-ob left">
                <i class="media icon icon-question">Q</i>
                <i class="media icon arrow"></i>
                <a href="#faq-who-can-give-blood">Who can give blood?</a>
            </li>
            <li class="media-ob">
                <i class="media icon icon-question">Q</i>
                <i class="media icon arrow"></i>
                <a href="#faq-will-be-asked">Will I be asked a lot of questions before I give blood?</a>
            </li>
          </ul>
        </div>

      <!--  <div class="clear-left pod-round-wrap"> -->
          <div class="pod pod-accordian">
            <h2 class="h2"><i class="media icon arrow"></i>My donor account</h2>
            <ul id="faq-advice-for-men" class="faqs slider">
              <li>
                <h3><i>Q</i> <a href="#" title="What is my Donor ID?" id="faq-my-donor-ID">What is my Donor ID?</a></h3>
                <div class="cf">
                  <p>When you register as a blood donor for the first time, you will be assigned with a unique Donor ID
                  number. Entering this ID helps us to locate your records more quickly. Your donor number will be printed
                  on your official donor card and any correspondence we send you.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="What if I don't know my Donor ID?" id="faq-dont-know-ID">What if I don't know my Donor ID?</a></h3>
                <div class="cf">
                  <p>If you've forgotten or don't know your Donor ID, don't worry &ndash; we can still find your records by cross-checking
                  your personal details against our database. Once we've confirmed your identity, your Donor ID will appear in the
                  'My Account' section of the Donor Portal, so you can access it at any time.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="How do I find out my blood group?" id="faq-find-blood-group">How do I find out my blood group?</a></h3>
                <div class="cf">
                  <p>Your blood group, like your Donor ID, is printed on your official donors card. It will be determined after your
                  first donation, and after you donate blood with us it should appear in the 'My Account' section of the Donor Portal.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="How do I update my details?" id="faq-update-details">How do I update my details?</a></h3>
                <div class="cf">
                  <p>To update your personal details - such as your address or contact number - select 'personal details' from
                  the drop-down menu in the upper right-hand corner of the page. Once there you will be able to view and edit any
                  personal information.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="How do I book an appointment online?" id="faq-book-online">How do I book an appointment online?</a></h3>
                <div class="cf">
                  <p>Booking a blood donation appointment online couldn't be easier. Just locate your preferred venue or donation
                  event by entering your city, town or postcode into our session finder. When you select a session, a list of
                  available booking dates and times will be made available. Simply select a time that suits you and click 'book'. These
                  appointments are updated in real time.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="What does my appointment time mean?" id="faq-what-does-my-appointment-time-mean">What does my appointment time mean?</a></h3>
                <div class="cf">
                  <p>Your appointment time is the time we would like you to arrive at the session.  There are a number of stages to your donation
                  journey - registering your arrival, the Donor Health Check screening, your donation and your rest and refreshments.  We aim to ensure
                  that your whole donation journey lasts no more than one hour from your planned arrival time.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="When I turn up to my appointment, will I be seen straight away?" id="faq-when-I-turn-up-to-my-appointment">When I turn up to my appointment, will I be seen straight away?</a></h3>
                <div class="cf">
                  <p>There are a number of different stages to your donation journey - registering your arrival, the Donor Health Check screening, your
                  donation and your rest and refreshments.</p>

                  <p>Your appointment time is the time we want you to turn up.  We cannot commit to you going into the Donor Health Check immediately
                  after registering your  arrival as there are a number of factors that affect a session and we want to provide a safe and pleasant experience
                  for all our donors.  We commit to you finishing your donation journey within an hour of your appointment time.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Do I always need to book in advance?" id="faq-do-I-always-need-to-book-in-advance">Do I always need to book in advance?</a></h3>
                <div class="cf">
                  <p>We try hard to cater for both donors who book an appointment in advance and donors who prefer to just walk into a session to donate.
                  For most of our sessions we keep a number of slots available for walk-in donors. Whether or not a session caters for walk in donors
                  will be clear when you look up the session on the session finder.  You will see an icon under the session details and the text
                  'Available to walk in'.</p>

                  <p>We try our best to accommodate all walk in donors and aim to give them an expected time for their total donation experience when
                  they arrive.</p>

                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="What if I need to cancel or re-arrange an appointment?" id="faq-cancel-appointment">What if I need to cancel or re-arrange an appointment?</a></h3>
                <div class="cf">
                  <p>If you need to cancel or reschedule an existing blood donation appointment, simply go to your timeline and find
                  the details of the appointment. Then click 'Reschedule' or 'Cancel appointment'. Your timeline will be updated
                  immediately, and we'll send you an automatic email to confirm the changes you've made.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Why can't I book an appointment at certain times?" id="faq-appointment-times">Why can't I book an appointment at certain times?</a></h3>
                <div class="cf">
                  <p>We allow donors to give blood every 12 weeks if you're a male, or 16 weeks if you're female. The booking system
                  will not allow you to book an appointment unless you are eligible to donate.</p>
                  <p>If you're a new donor, you can only book one future appointment. Regular donors are able to book multiple
                  appointments using the session finder.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Why does the donation history on my timeline only go back five years?" id="faq-donation-history">Why does the donation history on my timeline only go back five years?</a></h3>
                <div class="cf">
                  <p>We can only show certain specific donation history going back five years on the online system. However, the
                  donation total highlighted at the top of the page and in the navigation menu represents your lifetime total to date.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="How do I know if I'm able to donate blood?" id="faq-able-to-donate">How do I know if I'm able to donate blood?</a></h3>
                <div class="cf">
                  <p>If you're aged between 17-66 for a first time donor or aged over 17 for a regular donor, haven't donated
                  in the past 12 weeks, are in good health, you should be able to donate blood. If you have a medical or travel
                  concern, select the 'Health' tab for more information on a wide range of conditions that may affect your
                  ability to give blood.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="How do I post my updates to Facebook and Twitter?" id="faq-post-facebook">How do I post my updates to Facebook and Twitter?</a></h3>
                <div class="cf">
                  <p>When in the 'My Account' section of the donor portal, click the 'Social Sharing' tab to bring up your social
                  media options. You can choose to automatically post an update to your timeline every time you book an appointment,
                  or un-check the automatic update option to be prompted to share manually every time you book.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Why can't I use the Donor portal to book appointments in my area?" id="faq-why-book">Why can't I use the Donor portal to book appointments in my area?</a></h3>
                <div class="cf">
                  <p>Our blood donation sessions only operate in England and North Wales. If you live in another part of the United
                  Kingdom such as Scotland, Northern Ireland or South Wales, we may not be able to provide session information in
                  your area. However, we are happy to put you in touch with our sister organisations working in these areas, so please
                  get in touch if you're not sure where to look.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="What phones and tablets are supported?" id="faq-phone-tablet">What phones and tablets are supported?</a></h3>
                <div class="cf">
                  <p>www.blood.co.uk has been implemented with standard HTML and is designed to respond to the screen resolution of the
                  PC, Tablet or Phone accessing the web site. This provides a "Full Desktop" version or a &quot;Mobile Optimised&quot; version
                  as appropriate. For phones and tablets this has been tested on the market leading operating systems (iOS and Android)
                  and devices (iPhone, iPad, and Samsung S3 and S4 phones). If you experience any difficulties with these or any other
                  operating systems and devices please feedback via the online Contact Form or call <strong>0300 123 23 23</strong>.</p>
                </div>
              </li>

            </ul>
          </div>
          <div class="pod pod-accordian">
            <h2 class="h2"><i class="media icon arrow"></i>Giving blood</h2>

            <ul id="faq-giving-blood" class="faqs slider">
              <li>
                <h3><i>Q</i><a href="#" title="Who can give blood?" id="faq-who-can-give-blood">Who can give blood?</a></h3>
                <div class="cf">
                  <p>Most people can give blood. If you are generally in good health, age 17 to 65 (if it's your first time) and
                  weigh at least 50kg (7st 12Ib) you can donate. However, If you are female, aged under 20 years old and weigh
                  under 65kg (10st 3lb) and are under 168cm (5'6) in height, we need to estimate your blood volume before donating.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="How often can I give blood?" id="faq-how-often">How often can I give blood?</a></h3>
                <div class="cf">
                  <p>Male donors can donate 4 times in 12 months with a minimum interval of 12 weeks between donations. We advise
                  female donors to donate at an average of 16 weeks or more to reduce the risk of iron deficiency.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="How much blood will be taken?" id="faq-how-much-will-be-taken">How much blood will be taken?</a></h3>
                <div class="cf">
                  <p>Only about 470ml, which is just under a pint. Your body will replace the lost fluid in a very short period of time.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="How long does it take to donate blood?" id="faq-how-long-does-it-take-to-donate-blood">How long does it take to donate blood?</a></h3>
                <div class="cf">
                  <p>For donors with an appointment, we aim to ensure that their donation journey lasts no more than one hour from their planned arrival time. We also aim to
                  accommodate all donors who walk into a session without an appointment at sessions that accept walk in donors.  However it is not always possible for us
                  to do so and it may take longer for walk in donors to complete their donation journey with us than if you’ve booked an appointment. We commit to provide
                  walk in donors with an expected time for their total donation experience when they arrive at the session. </p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Will I be asked a lot of questions before I give blood?" id="faq-will-be-asked">Will I be asked a lot of questions before I give blood?</a></h3>
                <div class="cf">
                  <p>We will ask you a number of questions, but we promise to get through it all as quickly as possible. Our
                  primary concerns are that giving blood will not harm you in any way and that your blood will be safe for patients.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="How will giving blood affect my health?" id="faq-affect-health">How will giving
                blood affect my health?</a></h3>
                <div class="cf">
                  <p>If you are fit and healthy, you should not experience any problems whatsoever.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="Why can women donate less frequently than men?" id="faq-women-less-frequently">Why can women donate less frequently than men?</a></h3>
                <div class="cf">
                  <p>Female donors do not have the same levels of stored iron as male donors for lots of reasons. This means
                  that they cannot donate as often as their male counterparts as to do so could potentially put them at risk
                  of anaemia and NHSBT will never risk the health of donors.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="Is it safe for men to donate more frequently?" id="faq-men-more-frequently">Is it safe for men to donate more frequently?</a></h3>
                <div class="cf">
                  <p>Male donors who give a whole blood donation can safely donate four times a year, as long as they wait
                  twelve weeks between donations. This allows them to improve the lives of thousands more people every year! Allowing
                  male whole blood donors to donate more often is a great step forward in meeting the 8,000 units needed every day
                  to meet hospital demands.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="I have heard that the donor's ethnic origin is requested. Why does this matter?" id="faq-ethnic-origin">I have heard that the donor's ethnic origin is requested. Why does this matter?</a></h3>
                <div class="cf">
                  <p>The ethnic origin of donors is medically important because it makes it easier for us to find and match blood
                  for recipients with rarer blood groups. Secondly, the Race Relations Amendment Act 2000 means that we have to
                  monitor the accessibility of our services to all communities, including how well we provide opportunities to
                  donate blood.</p>

                  <p>All personal donor information remains confidential, and is seen and used only by our staff and those we
                  work closely with in providing our services. If you prefer not to give us this information, please let us
                  know so that we do not ask you again.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="I have heard that blood is used for research. Isn't it all needed by patients?" id="faq-blood-research">I have heard that blood is used for research. Isn't it all needed by patients?</a></h3>
                <div class="cf">
                  <p>When you come to give blood the leaflet you are asked to read tells you that occasionally blood that is
                  not needed for transfusion may be used for research and development work to benefit patients. All such use
                  is carefully controlled, ethically approved where appropriate and no donor is identified.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="I am a vegetarian, can I give blood?" id="faq-vegetarian">I am a vegetarian, can I give blood?</a></h3>
                <div class="cf">
                  <p>There is no problem with vegetarians giving blood. The red blood cells, which require iron from the
                  stores in your body, will need to be replaced after the donation. Provided you eat a well-balanced diet
                  sufficient in iron, then you should be able to replenish your iron supply before your next donation.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i><a href="#" title="How do UK donation frequencies compare with other countries who have blood services?" id="faq-uk-donation-frequencies">How do UK donation frequencies compare with other countries who have blood services?</a></h3>
                <div class="cf">
                  <p>NHSBT is in line with countries such as Portugal who also allow men to donate 4 times and women 3 times
                  a year. Although other countries like Belgium, Denmark and Germany allow all donors to give more often, NHSBT
                  remains at the cautious end of the spectrum in order to protect the health of the donor and maintain our
                  excellent record in blood safety.</p>
                </div>
              </li>
              <li>
                <h3><i>Q</i> <a href="#" title="Giving blood after acupuncture, tattoos or piercings" id="faq-after-tattoos">Giving blood after acupuncture, tattoos or piercings</a></h3>
                <div class="cf">
                  <p>There is always an infection risk whenever the skin is pierced. If you have had acupuncture or any
                  complementary therapy involving penetration by needles, please wait 4 months from receiving any of these
                  treatments.</p>

                  <p>However, if your acupuncture was performed by NHS staff on NHS premises or was performed outside the NHS
                  but by a qualified Health Care Professional, registered with a statutory body, then you may donate.</p>

                  <p>Though your acupuncturist is voluntarily registered with a non statutory body, such organisations are
                  not subject to supervision by the Council for Regulatory Excellence in Healthcare (CHRE).</p>

                  <p>If you have had any body piercing including permanent and semi permanent makeup and tattooing, or
                  acupuncture outside the NHS and not perfomed by a qualified Health Care Professional registered with a
                  statutory body, please wait 4 months from your last piercing before donating. If your treatment was between
                  4 and 12 months ago, you must let us know as your donation will need an additional blood test.</p>
                </div>
              </li>
              <li>
                <h3><i>Q</i> <a href="#" title="Why are people who have or think they may have received a blood transfusion since 1980 no longer able to give blood?" id="faq-transfusion-after-1980">Why are people who have or think they may have received a blood transfusion since 1980 no longer able to give blood?</a></h3>
                <div class="cf">
                  <p>This step was implemented by all four of the UK Blood Services on 2nd August 2004. It is a further
                  precautionary measure against the possible risk of variant Creutzfeldt-Jakob Disease (vCJD) being transmitted
                  by blood and blood products.</p>

                  <p>vCJD is thought to be the consequence of eating contaminated beef, related to BSE (or mad cow disease) in
                  UK cattle after 1980. Fortunately, vCJD is very rare. But, there is evidence that vCJD may be transmitted
                  from an infected blood donor to the patient, via transfusion.</p>
                </div>
              </li>
            </ul>
          </div>

          <div class="pod pod-accordian">
            <h2 class="h2"><i class="media icon arrow"></i>Before and after giving blood</h2>
            <ul id="faq-advice-for-men" class="faqs slider">
              <li>
                <h3><i>Q</i> <a href="#" title="What can I do before and after giving blood?" id="faq-before-and-after">What can I do before and after giving blood?</a></h3>
                <div class="cf">
                  <p>Be sure to eat at your regular mealtimes and drink plenty of fluids before and after donating, but avoid alcohol.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Where does my blood go?" id="faq-where-does-blood-go">Where does my blood go?</a></h3>
                <div class="cf">
                  <p>Your blood will be taken to one of our blood centres up and down the country. To protect patients, your
                  blood is tested for HIV, hepatitis B and C, certain other infectious diseases and syphilis.</p>

                  <p>Once the blood has been sorted into its different types, and all the tests are clear, it is then
                  distributed to hospitals to meet their predicted demand. There your blood is matched to a particular
                  patient who requires a transfusion. View the
				  <a href="/about-blood/stock-levels-statistics/">current blood stock levels</a>.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Can I smoke after giving blood?" id="faq-smoking-after-donation">Can I smoke after giving blood?</a></h3>
                <div class="cf">
                  <p>We advise that you refrain from smoking for about two hours after donating, as it might make you feel
                  dizzy or faint.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Can I go back to work on the same day?" id="faq-work-same-day">Can I go back to work on the same day?</a></h3>
                <div class="cf">
                  <p>Most people feel fine after donating and you can resume your normal activity as long as you feel well. But
                  do avoid heavy lifting, pushing or picking up heavy objects for at least four hours after donating. However
                  you should not give blood if you are undertaking a hazardous activity that day. This includes hobbies such
                  as climbing, flying or diving or occupations, such as driving a crane, HGV or emergency services vehicle and
                  certain building workers.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="Can I exercise before or after giving blood?" id="faq-exercising-after-donation">Can I exercise before or after giving blood?</a></h3>
                <div class="cf">
                  <p>People who are planning to undertake exercise after giving blood should be advised that donation may
                  affect their performance and may also increase the risk of bleeding from the venepuncture (needle entry)
                  site and of other adverse events such as fainting. You may wish to wait until the following day so as to
                  avoid any problems.</p>

                  <p>Individuals who undertake sport at high levels of performance should be aware of both the short term
                  effect of blood donation on performance and the possible long term effects if they should become short of
                  iron. You may wish to seek specialist advice on how to avoid adverse affects on your performance from donation.</p>

                  <p>If you have undertaken exercise before you donate, you will need to be recovered from the exercise and
                  well hydrated in order to donate.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="What if I develop an infection after I donate?" id="faq-infection-after-donation">What if I develop an infection after I donate?</a></h3>
                <div class="cf">
                  <p>If you become unwell within two weeks of your donation, or if you believe there is any reason why your
                  blood should not be transfused to a patient, please call us on 0300 123 23 23.</p>
                </div>
              </li>

              <li>
                <h3><i>Q</i> <a href="#" title="What if I feel faint when I get home?" id="faq-faint-after-donation">What if I feel faint when I get home?</a></h3>
                <div class="cf">
                  <p>You need to take it easy for a few hours after giving blood, but if you do feel faint or dizzy, lie
                  down immediately with your legs raised. Ideally, let someone else know if you are feeling unwell. If
                  faintness persists after your donation, don't hesitate to call us on 0300 123 23 23 to let us know and
                  we will be able to advise you further.</p>
                </div>
              </li>
            </ul>
          </div>

				<!-- // faq edit ends here -->

			</div>
		</section>


		<section class="row">
			<a name="contactus" style="text-decoration:none;">
			<div class="col">
				<h2>Contact</h2>
				<p>
					Want to join us? Just send an <a href="mailto:joinus@rakthadatha.in">email</a>.
				</p>
			</div>
			<div class="col">
				<h2>In an Emergency ?</h2>
				<p>
					Ring us on <a href="tel://00918281753973">+918 281 753 973</a>, <a href="tel://00919446465211">+919 446 465 211</a> or <a href="tel://00918891428851">+918 891 428 851</a>.
				</p>
			</div>
		</a>
		</section>


		<section class="row">
			<div class="col-full">
				<p>
					© 2015 - Project done by <a href="#">RakthaDatha Team</a>
				</p>
			</div>
		</section>

	</div>

	<script src="js/jquery.1.11.min.js"></script>
	<script src="js/jquery.fluidbox.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>

</body>
</html>
