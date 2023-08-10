<?php
//
//  Experience
//  Resume Section
//


$expList = array(

	5 => array(
		"company" => "Yoni Circle",
		"location" => "New York, NY",
		"start_date" => "Sep 2020",
		"end_date" => "Nov 2020",
		"years" => "Contract",
		"title" => "Lead Engineer / Part-time CTO",
		"desc" => array(
			"Mobile Architect for iOS-based video-conferencing app",
			"Back-end contributor to Firebase Functions/CloudStore based platform",
			"Maintained engineering output and bug fixes during transition to a full-time CTO",
			)
		),
		
	6 => array(
		"company" => "ShopKeep",
		"location" => "New York, NY",
		"start_date" => "Sep 2019",
		"end_date" => "Sep 2020",
		"years" => "1 year",
		"title" => "Senior iOS Engineer",
		"desc" => array(
			"Senior iOS contributor to POS mobile payments integration team",
			"Mentored fellow engineers, enforced PR-reviews, code coverage, git hygiene, style guides and other best practices",
			"Reduced technical debt and improved product stability through the refactoring of legacy code",
			)
		),
	7 => array(
		"company" => "Salido",
		"location" => "New York, NY",
		"start_date" => "May 2017",
		"end_date" => "May 2019",
		"years" => "2 years",
		"title" => "Team Lead / Mobile Architect",
		"desc" => array(
			"Agile coach / team lead for multiple feature development teams (both in-house and offshore)",
			"Drove company-wide engineering principles, mobile architecture and long-term goals for POS system",
			"Trained engineering teams in methods of modularizing and refactoring legacy code",
			"Provided in-house training to increase Swift adoption and improve code quality",
			"Redesigned company-wide agile usage and performance-tracking methods",
			)
		),
	8 => array(
		"company" => "Citibank",
		"location" => "Long Island City, NY",
		"start_date" => "May 2016",
		"end_date" => "Jan 2017",
		"years" => "Contract",
		"title" => "Senior iOS Systems Engineer / Analyst",
		"desc" => array(
			"Senior Swift engineer for the Citi-Gold Invest division",
			"Technical lead for ten-person agile feature team",
			"Architected the \"trade execution\" and \"security\" modules within the Citi Gold iOS app",
			"Trained and mentored junior engineers in Swift 3, Git, TDD, CICD and best coding practices",
			)
		),
	9 => array(
		"company" => "World Steel Dynamics",
		"location" => "Englewood Cliffs, NJ",
		"start_date" => "May 2012",
		"end_date" => "May 2016",
		"years" => "4 years",
		"title" => "Director of Engineering",
		"desc" => array(
			"Reported directly to CEO to meet revenue goals, release schedules",
			"Managed in-house web development and two offshore engineering teams",
			"Designed native iOS/Android apps to crowd-source prices for NASDAQ steel-scrap futures",
			"Developed the Global Steel Information System - a PHP/Java based suite of online computational analysis tools",
			"Worked with analysts to develop interactive web-based financial forecasting engines",
			)
		),
	10 => array(
		"company" => "CooCoo",
		"location" => "Huntington, NY",
		"start_date" => "Apr 2011",
		"end_date" => "May 2012",
		"years" => "1.2 years",
		"title" => "Lead Mobile Engineer",
		"desc" => array(
			"Architected a mobile POS/ticketing system piloted by two-dozen public transit agencies (incl. MTA, MBTA, BART)",
			"Lead developer for (6) iOS and (2) Android apps grossing over 3-million combined app downloads",
			"Managed devops team overseeing high-traffic servers and fail-safe systems across redundant colocations",
			"Responsible for network security, data encryption and PCI-compliance across products",
			)
		),
	11 => array(
		"company" => "Dreamware Systems LLC",
		"location" => "New York, NY",
		"start_date" => "Jan 2009",
		"end_date" => "May 2015",
		"years" => "Moonlighting",
		"title" => "Software Consultant (Self Employed)",
		"desc" => array(
			"Designed and launched eight independent commercial websites (<a href=\"#portfolio\">see project portfolio</a>)",
			"Cofounder and principal architect of a video-based mobile dating app (Obj-C/Swift)",
			"Built custom p2p e-commerce platform utilizing a unique chained-payment checkout process (PHP)",
			"Optimized and load-balanced linux clusters to perform under heavy loads (MySQL/Nginx/CentOS)",
			)
		),
	12 => array(
		"company" => "SS&amp;C Technologies",
		"location" => "New York, NY",
		"start_date" => "Sep 2006",
		"end_date" => "Apr 2011",
		"years" => "5 years",
		"title" => "Financial Programmer / Analyst – Municipal Finance Division",
		"desc" => array(
			"Promoted to lead developer for DBC Debt Manager - a database application for debt management and reporting",
			"Designed custom option-pricing models including the famed Black-Derman-Toy and Black-Scholes derivatives",
			"Enhanced C/C++ source code for DBC Finance – a linear optimization engine used to structure 95% of all U.S. municipal bonds",
			"Worked directly with top Wall Street clients to create custom bond financing tools",
			"Developed OLE APIs and Excel-VBA plugins to leverage DBC calculations within third-party WIN32 applications",
			)
		),
	13 => array(
		"company" => "Harve Benard",
		"location" => "Clifton, NJ",
		"start_date" => "May 2005",
		"end_date" => "Sep 2005",
		"years" => "Internship",
		"title" => "Assistant to CTO (Internship)",
		"desc" => array(
			"Maintained and serviced over 30 Unix, NT, and AS400 servers",
			"Taught basic/advanced Microsoft Excel, Word, and Visual Basic employee courses",
			"Designed and tested emergency data recovery procedures",
			"Debugged legacy AS400 source to factory production systems",
			)
		),
	);

?>

<div class="anchor_div" id="experience"></div>
<div class="cv_section_title">Professional Experience</div>
<div class="cv_section_clear" style="margin-top:0px;">

	<div class="cv_box cv_exp_box">
		<?php
		
			foreach($expList as $ind => $Info)
			{
				echo '<p>'.chr(10);
				
					echo '<div class="cv_exp_topleft">'.chr(10);
						echo '<div class="cv_exp_company">'.$Info["company"].'</div>'.chr(10);
						echo '<div class="cv_exp_location">'.$Info['location'].'</div>'.chr(10);
						echo '<div class="cv_exp_title">'.$Info['title'].'</div>'.chr(10);
					echo '</div>';
					
					echo '<div class="cv_exp_datebox">'.chr(10);
						echo '<div class="cv_exp_dates_years">'.$Info['years'].'</div>'.chr(10);
						echo '<div class="cv_exp_dates_dates">'.$Info['start_date'].' - '.$Info['end_date'].'</div>'.chr(10);
					echo '</div>'.chr(10);
				
					echo "\t".'<ul>'.chr(10);
						$descList = $Info['desc'];
						foreach($descList as $desc)
							echo "\t\t".'<li>'.$desc.'</li>'.chr(10);
					echo "\t".'</ul>'.chr(10);
					
				echo '</p>'.chr(10);
			}
		?>
	</div>
</div> 
<!-- end experience -->

