		</div>
	</div>

<footer class="col-md-12" style="background:#191818;padding: 20px;color: white;font-weight: bolder;text-shadow: 0px  0px 1px rgb(0, 0, 0);">
	<div class="container">
		<div class="col-sm-6">Copyright © <?php echo date('Y');?> | <?php echo $config->title;?></div>
		<div class="col-sm-6">
				<button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target=".dcma" style="min-width: 100px;">DMCA</button> <button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target=".privacy" style="min-width: 100px;">Privacy Police</button> <button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target=".contact" style="min-width: 100px;">Contact Us</button>
		</div>
	</div>
</footer>

<script>
	$(document).ready(function() {
		$('#user, #username').focus();
		$('#submit, #login').click(function() {
			event.preventDefault(); // prevent PageReLoad
			$('.error').css('display', 'none'); // hide error msg
			$('#spiner_login, #spiner_login_menu').css('display', 'block');
			var ValidEmail = $('#user').val() === 'plese@login.here'; // Email Value
			var ValidPassword = $('#password').val() === 'YourPassword'; // Password Value
			if (ValidEmail === false && ValidPassword === false) { // if ValEmail & ValPass are as above
				var delay=1500;
				setTimeout(function(){
					$('.error, .error_menu').css('display', 'block');
					$('.pesan, .error_menu').css('display', 'none');
					$('#spiner_login, #spiner_login_menu').css('display', 'none');
					var tutup=5000;
					setTimeout(function(){
						$('.error, .error_menu').css('display', 'none');
						$('.pesan, .error_menu').css('display', 'block');
					},tutup);
				},delay);
			}
		});
	});
	$('.player').modal({backdrop: 'static'})  
</script>

<div class="modal fade dcma" tabindex="-1" role="dialog" aria-labelledby="dcma" aria-hidden="true">
	<div class="modal-dialog">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">DMCA Notice <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></h3>
			</div>
			<div class="panel-body" style="text-align:justify;">
				<p><?php echo $config->title;?>  respects the intellectual property rights of all content creators, whether their work is affiliated with our site or not. </p>
				<p>If you have reason to suspect that your intellectual property rights have been infringed in any way that connects to our site, we strongly advise that you contact our copyright agent with a complaint as soon as possible. We take all violations of the Digital Millennium Copyright Act of 1998 extremely seriously. In order to ensure your complaint remains legitimate under the DCMA, please ensure your copyright complaint contains all of the following information:</p>
				<ul style="text-align: left;">
					<li>A signature, electronic or physical, of an individual who has been authorized to represent you, the copyright holder;</li>
					<li>Clear identification of the copyrighted item(s) in question, as well as identification of the work(s) infringing on the copyright holder’s intellectual property rights;</li>
					<li>Contact information for you, the copyright holder, that <?php echo $config->title;?>  can use to contact you, including your full name, telephone number, physical address and e-mail address;</li>
					<li>A written letter stating that you, the copyright holder, “in good faith believes that the use of the material in the manner complained of is not authorized by the copyright owner, its agent or the law”;</li>
				</ul>
				<p>A written letter stating that all of the information provided in the statement above is wholly accurate, and reaffirming that the writer of said letter has been legally authorized, under penalty of perjury, to represent you, the copyright holder.</p>
				<p>The statement of complaint that you provide us, containing all of the above information, should be sent to our Designated Copyright Agent by post, fax or email to one of the respective contact addresses below:</p>
				<p>Contact Us : <b><?php echo $config->email;?></b></p>
				<p>PLEASE REMEMBER THAT IF YOU CHOOSE TO MISREPRESENT ANY OF THE DETAILS REGARDING AN ALLEGED COPYRIGHT INFRINGEMENT, YOU WILL BE SUBJECT TO SERIOUS CIVIL PENALTIES UNDER FEDERAL LAW, INCLUDING ANY MONETARY DAMAGES, COURT COSTS AND LAWYERS FEES ACCRUED BY US, AND ANY COPYRIGHT HOLDERS OR COPYRIGHT HOLDER’S LICENSEES WHO ARE INJURED IN ANY CAPACITY FOLLOWING OUR RELIANCE ON THE VERACITY OF YOUR REPRESENTATION. YOU COULD ALSO BE CRIMINALLY PROSECUTED FOR ACTS OF PERJURY. </p>
				<p>Do not take anything outlined in this document as formal legal advice. For further information on the details required to lodge a formal DMCA notification, please refer to 17 U.S.C. 512(c)(3).</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade privacy" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
	<div class="modal-dialog">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Privacy Policy <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></h3>
			</div>
			<div class="panel-body" style="text-align:justify;">
				
					<div class="panel-body" style="text-align: justify">
						<p>We recognize that your privacy is important. This document outlines the types of personal information we receive and collect when you use <?php echo $config->title;?>, as well as some of the steps we take to safeguard information. We hope this will help you make an informed decision about sharing personal information with us. <?php echo $config->title;?> strives to maintain the highest standards of decency, fairness and integrity in all our operations. Likewise, we are dedicated to protecting our customers', consumers' and online visitors' privacy on our website.</p>
						<p><strong>Personal Information</strong></p>
						<p><?php echo $config->title;?> collects personally identifiable information from the visitors to our website only on a voluntary basis. Personal information collected on a voluntary basis may include name, postal address, email address, company name and telephone number.</p>
						<p>This information is collected if you request information from us, participate in a contest or sweepstakes, and sign up to join our email list or request some other service or information from us. The information collected is internally reviewed, used to improve the content of our website, notify our visitors of updates, and respond to visitor inquiries.</p>
						<p>Once information is reviewed, it is discarded or stored in our files. If we make material changes in the collection of personally identifiable information we will inform you by placing a notice on our site. Personal information received from any visitor will be used only for internal purposes and will not be sold or provided to third parties.</p>
						<p><strong>Use of Cookies and Web Beacons</strong></p>
						<p>We may use cookies to help you personalize your online experience. Cookies are identifiers that are transferred to your computer's hard drive through your Web browser to enable our systems to recognize your browser. The purpose of a cookie is to tell the Web server that you have returned to a specific page. For example, if you personalize the sites pages, or register with any of our site's services, a cookie enables <?php echo $config->title;?> to recall your specific information on subsequent visits.</p>
						<p>You have the ability to accept or decline cookies by modifying your Web browser; however, if you choose to decline cookies, you may not be able to fully experience the interactive features of the site.</p>
						<p>A web beacon is a transparent image file used to monitor your journey around a single website or collection of sites. They are also referred to as web bugs and are commonly used by sites that hire third-party services to monitor traffic. They may be used in association with cookies to understand how visitors interact with the pages and content on the pages of a web site.</p>
						<p>We may serve third-party advertisements that use cookies and web beacons in the course of ads being served on our web site to ascertain how many times you've seen an advertisement. No personally identifiable information you give us is provided to them for cookie or web beacon use, so they cannot personally identify you with that information on our web site.</p>
						<p>Some third-party advertisements may be provided by Google, which uses cookies to serve ads on this site. Google uses the DART cookie, which enables it to serve ads to our users based on their visits to this site and other sites on the Web. You may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.</p>
						<p>Browsers can be set to accept or reject cookies or notify you when a cookie is being sent. Privacy software can be used to override web beacons. Taking either of these actions shouldn't cause a problem with our site, should you so choose.</p>
						<p><strong>Children's Online Privacy Protection Act</strong></p>
						<p>This website is directed to adults; it is not directed to children under the age of 13. We operate our site in compliance with the Children's Online Privacy Protection Act, and will not knowingly collect or use personal information from anyone under 13 years of age.</p>
						<p><strong>Non-Personal Information</strong></p>
						<p>In some cases, we may collect information about you that is not personally identifiable. We use this information, which does not identify individual users, to analyze trends, to administer the site, to track users' movements around the site and to gather demographic information about our user base as a whole. The information collected is used solely for internal review and not shared with other organizations for commercial purposes.</p>
						<p><strong>Release of Information</strong></p>
						<p>If <?php echo $config->title;?> is sold, the information we have obtained from you through your voluntary participation in our site may transfer to the new owner as a part of the sale in order that the service being provided to you may continue. In that event, you will receive notice through our website of that change in control and practices, and we will make reasonable efforts to ensure that the purchaser honors any opt-out requests you might make of us.</p>
						<p><strong>How You Can Correct or Remove Information</strong></p>
						<p>We provide this privacy policy as a statement to you of our commitment to protect your personal information. If you have submitted personal information through our website and would like that information deleted from our records or would like to update or correct that information, please use our Contact Us page.</p>
						<p><strong>Updates and Effective Date</strong></p>
						<p><?php echo $config->title;?> reserves the right to make changes in this policy. If there is a material change in our privacy practices, we will indicate on our site that our privacy practices have changed and provide a link to the new privacy policy. We encourage you to periodically review this policy so that you will know what information we collect and how we use it.</p>
						<p><strong>Agreeing to Terms</strong></p>
						<p>If you do not agree to <?php echo $config->title;?> Privacy Policy as posted here on this website, please do not use this site or any services offered by this site.</p>
						<p>Your use of this site indicates acceptance of this privacy policy.</p>
						<p><strong>DISCLAIMER</strong></p>
						<p><?php echo $config->title;?> provides this website as a service. While the information contained within the site is periodically updated, no guarantee is given that the information provided in this website is correct, complete, and/or up-to- date.</p>
						<p>The materials contained on this website are provided for general information purposes only. <?php echo $config->title;?> does not accept any responsibility for any loss which may arise from reliance on information contained on this site.</p>
						<p>Permission is given for the downloading and temporary storage of one or more of these pages for the purpose of viewing on a personal computer. The contents of this site are protected by copyright under international conventions and, apart from the permission stated, the reproduction, permanent storage, or retransmission of the contents of this site is prohibited without the prior written consent of <?php echo $config->title;?>.</p>
						<p>Some links within this website may lead to other websites, including those operated and maintained by third parties. <?php echo $config->title;?> includes these links solely as a convenience to you, and the presence of such a link does not imply a responsibility for the linked site or an endorsement of the linked site, its operator, or its contents (exceptions may apply).</p>
						<p>This website and its contents are provided "AS IS" without warranty of any kind, either express or implied, including, but not limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>
						<p>Reproduction, distribution, republication, and/or retransmission of material contained within this website are prohibited unless the prior written permission of <?php echo $config->title;?> has been obtained. provides this website as a service. While the information contained within the site is periodically updated, no guarantee is given that the information provided in this website is correct, complete, and/or up-to- date.</p>
						<p>The materials contained on this website are provided for general information purposes only. <?php echo $config->title;?> does not accept any responsibility for any loss which may arise from reliance on information contained on this site.</p>
						<p>Permission is given for the downloading and temporary storage of one or more of these pages for the purpose of viewing on a personal computer. The contents of this site are protected by copyright under international conventions and, apart from the permission stated, the reproduction, permanent storage, or retransmission of the contents of this site is prohibited without the prior written consent of <?php echo $config->title;?>.<br>
						Some links within this website may lead to other websites, including those operated and maintained by third parties. <?php echo $config->title;?> includes these links solely as a convenience to you, and the presence of such a link does not imply a responsibility for the linked site or an endorsement of the linked site, its operator, or its contents (exceptions may apply).</p>
						<p>This website and its contents are provided "AS IS" without warranty of any kind, either express or implied, including, but not limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>
						<p>Reproduction, distribution, republication, and/or retransmission of material contained within this website are prohibited unless the prior written permission of <?php echo $config->title;?> has been obtained.</p>
					</div>
				
			</div>
		</div>
	</div>
</div>

<div class="modal fade contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
	<div class="modal-dialog">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Contact Us <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></h3>
			</div>
			<div class="panel-body">
			<?php 
			$contact=$_REQUEST['contact']; 
				if ($contact=="")    /* display the contact form */ 
				{ 
				?> 
				<form action="" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" required="" type="text" class="form-control" id="name" placeholder="Your Name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" required="" type="email" class="form-control" id="email" placeholder="Your Email">
					</div>
					<div class="form-group">
						<label for="">Message</label>
						<textarea name="message" required="" class="form-control" id="message" placeholder="Your Message" style="resize: none;"></textarea>
					</div>
                                                <input type="hidden" name="contact" value="submit">
						<button id="submitcontact" type="submit" class="btn btn-primary pull-right">Submit</button>
				</form>
				<?php 
				}  
				else                /* send the submitted data */ 
				{ 
					$name=$_REQUEST['name']; 
					$email=$_REQUEST['email']; 
					$message=$_REQUEST['message']; 
					if (($name=="")||($email=="")||($message=="")) 
					{ 
						echo "All fields are required, please fill <div class=\"alert alert-danger\">the form</div> again."; 
					} 
					else{         
						$from="From: $name<$email>\r\nReturn-path: $email"; 
        					$subject="Message from $hostname"; 
        					mail($config->email, $subject, $message, $from); 
        					echo "Email sent!"; 
        				} 
				}   
				?> 
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="/include/js/scripts.js"></script>
<script type="text/javascript" src="/include/js/screenfull.min.js"></script>

</body>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3029782,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3029782&101" alt="free website stats program" border="0"></a></noscript>
<!-- Histats.com  END  -->

</html>