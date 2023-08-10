<?php
//
//  Portfolio
//  Resume Section
//
?>

<div class="anchor_div" id="portfolio"></div>
<div class="cv_section_title">Project Portfolio</div>



<?php
//
//======================
//  Mobile Development
//======================
//
?>
<div class="cv_proj_sect_title cv_app_color">Mobile App Development</div>
<div class="cv_section_clear" style="margin-top:0px;width:85%;">

	<?php
	// left column
	?>
	<div class="cv_proj_split">
			
		<div class="cv_proj_wrap cv_proj_app_wrap">
			<div class="cv_proj_thumb cv_proj_app">
				<a class="fancybox-button" rel="salido_pos" href="<?=$CONFIG->url?>images/projects/fullsize/app_salido_pos1.jpg" title="SALIDO POS">
					<img src="<?=$CONFIG->url?>images/projects/thumbnails/app_salido_dark.jpg" title="click for app preview" />
				</a>
				<div style="display:none;">
					<a class="fancybox-button" rel="salido_pos" title="SALIDO - Point Of Sale"><img src="<?=$CONFIG->url?>images/projects/fullsize/app_salido_pos2.jpg" alt="POS2"/></a>
				</div>
			</div>
			<div class="cv_proj_text">
				<div class="cv_proj_title">SALIDO - Point Of Sale (iOS)</div>
				<div class="cv_proj_link" style="clear:both;padding-top:2px;">(Enterprise Only)</div>
				<div class="cv_proj_desc">
					Designed to work as a standalone POS or "hot swappable" within a fleet, this app has over 500 operating modes and feature toggles. To achieve the needs of almost any restaurant environment out there, 
					the source code quickly became a highly complex beast.  While most apps off-load business logic to the server side, we often found ourselves doing the opposite; allowing the app to 
					operate under even the most adverse network conditions with near 99.999% fault tolerance.  This app pushes the hardware limits of even the latest model iPads and I'm proud to have 
					lead its development.
				</div>
			</div>
		</div>
		
		<div class="cv_proj_wrap cv_proj_app_wrap">
			<div class="cv_proj_thumb cv_proj_app">
				<a class="fancybox-button" rel="coocoo" href="<?=$CONFIG->url?>images/projects/fullsize/app_coocoo.png" title="CooCoo for Transit - iOS/Android Mobile App">
					<img src="<?=$CONFIG->url?>images/projects/thumbnails/app_coocoo.jpg" title="click for app preview" />
				</a>
			</div>
			<div class="cv_proj_text">
				<div class="cv_proj_title">CooCoo (iOS/Android)</div>
				<div class="cv_proj_link">
					<a class="cv_link_segment" href="https://itunes.apple.com/us/app/coocoo-for-transit/id482996025" target="_blank">App Store Link</a>
					<a class="cv_link_segment_final" href="https://play.google.com/store/apps/details?id=com.coocoo&hl=en" target="_blank">Google Play Link</a>
				</div>
				<div class="cv_proj_desc">
					In April 2011 I was hired by CooCoo to help build out their mobile application platform 
					from the ground-up. The first task was to convert the back-end of what had been until then a text-message based 
					system into a secure and scalable API.  I then developed CooCoo's primary mobile app natively for both iOS and 
					Android.
				</div>
			</div>
		</div>
		
		<div class="cv_proj_wrap cv_proj_app_wrap">
			<div class="cv_proj_thumb cv_proj_app">
				<a class="fancybox-button" rel="citi" href="<?=$CONFIG->url?>images/projects/fullsize/app_citigold.png" title="Citigold - iOS">
					<img src="<?=$CONFIG->url?>images/projects/thumbnails/app_citigold.jpg" title="click for app preview" />
				</a>
			</div>
			<div class="cv_proj_text">
				<div class="cv_proj_title">Citi Gold (iOS)</div>
				<div class="cv_proj_link">
					<a href="https://itunes.apple.com/us/app/citi-mobile/id301724680?mt=8" target="_blank">App Store Link</a>
				</div>
				<div class="cv_proj_desc">
					During a 9-month contract at Citibank I was a member of the newly minted FinTech division, tasked with developing Citibank's "Gold" iOS app: a feature rich extension 
					to their original "blue" app for high-net-worth investors.  I served as technical lead for one of three "Invest" teams; designing the trade execution and 
					general security layer for the MVP.
				</div>
			</div>
		</div>
		
		<div class="cv_proj_wrap cv_proj_app_wrap">
			<div class="cv_proj_thumb cv_proj_app">
				<a class="fancybox-button" rel="liub" href="<?=$CONFIG->url?>images/projects/fullsize/app_liub.png" title="Light It Up Blue 2012 - iOS/Android Mobile App">
					<img src="<?=$CONFIG->url?>images/projects/thumbnails/app_liub.jpg" title="click for app preview" />
				</a>
			</div>
			<div class="cv_proj_text">
				<div class="cv_proj_title">Light It Up Blue 2012 (iOS/Android)</div>
				<div class="cv_proj_link">
					<a href="http://otswithapps.com/2012/04/02/light-it-up-blue-2012-app-show-your-support-for-world-autism-awareness-day/" target="_blank">Legacy App Links &amp; Press Release</a>
				</div>
				<div class="cv_proj_desc">
					During a brief lapse in start-up funding while working for CooCoo, my expertise was loaned out to our VC-backed sister company that 
					specialized in micro-site development for non-profits. During this time, I was tasked with developing 
					both the native iOS and native Android editions of Light It Up Blue (2012) for Autism Speaks.
				</div>
			</div>
		</div>

	</div>
	
	
	<?php
	// right column
	?>
	<div class="cv_proj_split">
	
		<div class="cv_proj_wrap cv_proj_app_wrap">
			<div class="cv_proj_thumb cv_proj_app">
				<a class="fancybox-button" rel="salido_kds" href="<?=$CONFIG->url?>images/projects/fullsize/app_salido_kds.jpg" title="SALIDO KDS">
					<img src="<?=$CONFIG->url?>images/projects/thumbnails/app_salido_blue.jpg" title="click for app preview" />
				</a>
			</div>
			<div class="cv_proj_text">
				<div class="cv_proj_title">SALIDO - Kitchen Display System (iOS)</div>
				<div class="cv_proj_link" style="clear:both;padding-top:2px;">(Enterprise Only)</div>
				<div class="cv_proj_desc">
					The restaurant kitchen is one of the few places technology has failed to penetrate.  The KDS app is SALIDO's answer to this conundrum; providing 
					real-time food prep, inventory and management to full-service restaurant kitchens via an iPad app that seamlessly integrates with SALIDO's award winning POS.
				</div>
			</div>
		</div>
		
		<div class="cv_proj_wrap cv_proj_app_wrap">
			<div class="cv_proj_thumb cv_proj_app">
				<a class="fancybox-button" rel="ticketing" href="<?=$CONFIG->url?>images/projects/fullsize/app_ticketing.jpg" title="CooCoo Mobile POS &amp Ticketing System Concept">
					<img src="<?=$CONFIG->url?>images/projects/thumbnails/app_ticketing.jpg" title="click for app preview" />
				</a>
				<div style="display:none;">
					<a class="fancybox-button" rel="ticketing" title="North County Transit - Consumer App"><img src="<?=$CONFIG->url?>images/projects/fullsize/app_nctd.jpg" alt="NCTD Consumer App"/></a>
					<a class="fancybox-button" rel="ticketing" title="Mustang Bus Lines - Consumer App"><img src="<?=$CONFIG->url?>images/projects/fullsize/app_mustang.jpg" alt="Mustang Consumer App"/></a>
					<a class="fancybox-button" rel="ticketing" title="Enterprise Ticketing App Demo"><img src="<?=$CONFIG->url?>images/projects/fullsize/app_nctd_ent.jpg" alt="NCTD Enterprise App"/></a>
				</div>

			</div>
			<div class="cv_proj_text">
				<div class="cv_proj_title">CooCoo Ticketing (iOS)</div>
				<div class="cv_proj_link" style="clear:both;padding-top:2px;">Not publicly available (Enterprise Only)</div>
				<div class="cv_proj_desc">
					One of the more innovative projects I worked on while employed at CooCoo was the development of a mobile-based POS system for accepting 
					payments and validating tickets onboard commuter railroads / buses.  The concept utilized an enterprise iOS app paired with a fleet of 
					LineaPro devices capable of scanning barcodes and swiping payment cards.  Users could also purchase tickets through our many iOS/Android 
					apps that were custom-tailored to each transit provider.
				</div>
			</div>
		</div>
		
		<div class="cv_proj_wrap cv_proj_app_wrap">
			<div class="cv_proj_thumb cv_proj_app">
				<a class="fancybox-button" rel="nda" href="<?=$CONFIG->url?>images/projects/fullsize/app_nda.jpg" title="Video Dating App - iOS">
					<img src="<?=$CONFIG->url?>images/projects/thumbnails/app_nda.jpg" title="click for app preview" />
				</a>
			</div>
			<div class="cv_proj_text">
				<div class="cv_proj_title">Video Dating App (iOS)</div>
				<div class="cv_proj_link" style="clear:both;padding-top:2px;">Not yet released (under NDA)</div>
				<div class="cv_proj_link">
				</div>
				<div class="cv_proj_desc">
					In 2014 I was hired by a private firm to develop an iOS video-based dating app. While the MVP is complete and in beta, the app 
					has not been publicly released and remains under non-disclosure agreement so I cannot 
					divulge much about its features.  I was the sole architect of the app itself and the server platform that drives it. 
					In 2016, I divested myself of the project in order to focus on full-time employment.
				</div>
			</div>
		</div>

		<div class="cv_proj_wrap cv_proj_app_wrap">
			<div class="cv_proj_thumb cv_proj_app">
				<a class="fancybox-button" rel="holyquotes" href="<?=$CONFIG->url?>images/projects/fullsize/app_holyquotes.jpg" title="HolyQuotes - iOS Mobile App">
					<img src="<?=$CONFIG->url?>images/projects/thumbnails/app_holyquotes.jpg" title="click for app preview" />
				</a>
			</div>
			<div class="cv_proj_text">
				<div class="cv_proj_title">HolyQuotes (iOS)</div>
				<div class="cv_proj_link"><a href="http://appcrawlr.com/ios/holyquotes" target="_blank">App Store Link</a></div>
				<div class="cv_proj_desc">
					In 2012, my boss at the time bet me $1000 on a Friday afternoon that I could not develop a useful app in a single weekend 
					...and thus Holy Quotes 
					was born the following Monday.  After creating a shell script to parse meaningful quotes from a digital copy of the King James, 
					I spent the remainder of the weekend designing the app's interface.  The finished app generated 10,000 downloads in its first month.  
					I feel the need to note that I am not a particularly religious person; the concept simply struck me as useful.
				</div>
			</div>
		</div>
		
	</div>
	
</div> 
<div class="clearfix"></div>



<?php
//
//===================
//  Web Development 
//===================
//
?>

<div class="cv_proj_sect_title cv_web_color">Website Development</div>
<div class="cv_section_clear" style="margin-top:0px;width:85%;">	
	<?php
		$WebProjects = array(
			"wsdweb"      => array("col" => 1, "link" => "www.worldsteeldynamics.com",  "title" => "World Steel Dynamics",    "desc" => "Developed from scratch while working full-time for World Steel Dynamics Inc. Beyond advertising the company's primary business, a pay-walled client area hides a secure report access system and a custom-designed account management &amp; billing portal coded primarily in PHP."),
			"dbcinc"      => array("col" => 1, "link" => "www.dbcinc.com", 			    "title" => "DBC Corporate Website",   "desc" => "While working at SSNC, I was tasked with revamping the Municipal Finance Division's corporate website. Utilizing PHP and Python, it housed a large paywall area for clients and a API back-end to interface with DBC's fat-client database software."),
			"sammyandnat" => array("col" => 1, "link" => "www.sammyandnat.com",         "title" => "Sammy &amp; Nat",         "desc" => "Originally built using open-source e-commerce platform Opencart, I constructed SammyAndNat.com in a matter of months for my friend Samantha Benson to retail her line of fashionable baby rampors."),
			"facebake"    => array("col" => 1, "link" => "www.facebake.com",            "title" => "Facebake",                "desc" => "Coded in a single summer post college using the open-source social networking engine Elgg, facebake.com was one of my early \"million dollar ideas\" that didn't quite pan out as I had hoped.  Though the user base has moved on, the site and the concept still make for humorous cocktail conversation."),
			"ato"         => array("col" => 1, "link" => "www.albanytakeout.com",       "title" => "Albanytakeout",           "desc" => "One of the more profitable of my personal website endeavors, I built Albanytakeout during my sophomore year of college and its visitor numbers have steadily increased ever since. It's basically a query able database of restaurant menus in Albany, NY."),
			"tradeflow"   => array("col" => 1, "link" => "www.dreamware-systems.com",   "title" => "Global Tradeflow Demo",   "desc" => "For the purpose of showcasing my work in quantative programming on large data sets, I extracted a single module of the GSIS suite and converted it to a functional demo. I scrambled the original data to avoid giving away a proprietary software tool but it is otherwise fully functional."),
			"dreamware"   => array("col" => 2, "link" => "www.dreamwaresys.com",        "title" => "Dreamware Systems LLC",   "desc" => "A simple company site built to showcase my abilities as a self-employed software developer. While the site is still live, I have since abondoned moonlighting work in order to focus on full-time employment."),
			"coocoo"      => array("col" => 2, "link" => "www.coocoo.com",              "title" => "CooCoo",                  "desc" => "While primarily tasked with developing the mobile app platform at CooCoo, the lean start-up culture dictated that I lend a hand anywhere it was needed, including with their website presence.  I cannot take full credit for the site design as it was a team effort."),
			"gsis"        => array("col" => 2, "link" => "gsis.worldsteeldynamics.com", "title" => "GSIS Interactive System", "desc" => "While working at WSD full-time my primary task was maintaining and enhancing an online suite of market forecasting and analysis tools known as the Global Steel Information System. While development of the site was a team effort, I was personally responsible for coding 3 of the 7 final modules."),
			"groovecard"  => array("col" => 2, "link" => "www.groovecard.com",          "title" => "Student Groove Card",     "desc" => "The first commerical website I was begrudgingly coersed into coding.  Please don't judge it based on the table-based layout, I was largely ignorant of web development techniques at the time. I include it here only to show how far I've come... "),
			"resume"      => array("col" => 2, "link" => "www.dreamwaresys.com/resume", "title" => "Personal Resume Website", "desc" => "This one is self-explanatory given the context... The neat thing is that the source code is available below"),
			
			);
	
		echo '<div class="cv_proj_split">'.chr(10);
		
		$currCol = 1;
		foreach($WebProjects as $name => $Proj)
		{
			$title = $Proj['title'];
			$link = $Proj['link'];
			$desc = $Proj['desc'];
	
			if($currCol != $Proj['col'])
			{
				$currCol++;
				echo '</div>'.chr(10);
				echo '<div class="cv_proj_split">'.chr(10);
			}
			echo '<div class="cv_proj_wrap">'.chr(10);
				echo '<div class="cv_proj_thumb">';
					echo '<a class="fancybox-button" rel="web_preview" href="'.$CONFIG->url.'images/projects/fullsize/web_'.$name.'.jpg" title="'.$link.' - Website Snapshot">';
						echo '<img src="'.$CONFIG->url.'images/projects/thumbnails/web_'.$name.'.jpg" alt="'.$name.' - Website Thumbnail" title="click to preview website"/>';
					echo '</a>';
				echo '</div>'.chr(10);
				echo '<div class="cv_proj_text">'.chr(10);
					echo '<div class="cv_proj_title">'.$title.'</div>'.chr(10);
					echo '<div class="cv_proj_link"><a href="http://'.$link.'" target="_blank">'.$link.'</a></div>'.chr(10);
					echo '<div class="cv_proj_desc">'.$desc.'</div>'.chr(10);
				echo '</div>'.chr(10);
			echo '</div>'.chr(10);
		}
			
		echo '</div>'.chr(10);
		
	?>
	<div class="clear"></div>
</div>  

<!-- end portfolio -->

