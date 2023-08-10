<?php
//
//  Professional Skills
//  Resume Section
//
?>

<div class="anchor_div" id="skills"></div>
<div class="cv_section_title">Professional Skills</div>
<div class="cv_section_clear">
<?php

	$Skills = array(
		"PHP"          => array("years" => 15, "type" => "lang"),
		"Javascript"   => array("years" => 14, "type" => "lang", "abbr" => "JS"),
		"C"            => array("years" => 12, "type" => "lang"),
		"C++"          => array("years" => 11, "type" => "lang"),
		"Objective-C"  => array("years" => 9,  "type" => "lang", "abbr" => "Obj-C"),
		"Python"       => array("years" => 7,  "type" => "lang"),
		//".NET"         => array("years" => 6,  "type" => "lang"),
		"C#"           => array("years" => 6,  "type" => "lang"),
		"Swift"        => array("years" => 5,  "type" => "lang"),
		"Java"         => array("years" => 5,  "type" => "lang"),
		"VB"           => array("years" => 4,  "type" => "lang"),
		"Ruby"         => array("years" => 3,  "type" => "lang"),
		
		
		"Laravel"  	 => array("years" => 10, "type" => "web"),
		"Django"     => array("years" => 8,  "type" => "web"),
		"JQuery"     => array("years" => 8,  "type" => "web"),
		"NodeJS"     => array("years" => 3,  "type" => "web"),
		"Zend" 		 => array("years" => 3,  "type" => "web"),
		"JQuery"     => array("years" => 3,  "type" => "web"),
		"Elgg"       => array("years" => 3,  "type" => "web"),
		"ReactJS"    => array("years" => 3,  "type" => "web"),
		"AngularJS"  => array("years" => 3,  "type" => "web"),
		
		"MySQL"        => array("years" => 12, "type" => "db"),
		"SQL Server"   => array("years" => 8,  "type" => "db"),
		"PostGRES"     => array("years" => 4,  "type" => "db"),
		"NoSQL"   	   => array("years" => 2,  "type" => "db"),
		"MongoDB"      => array("years" => 2,  "type" => "db"),
		"Sybase"   	   => array("years" => 5,  "type" => "db"),
		"Oracle"   	   => array("years" => 3,  "type" => "db"),
		
		"iOS"           => array("years" => 8,  "type" => "platform"),
		"Android"       => array("years" => 5,  "type" => "platform"),
		"Linux"         => array("years" => 14, "type" => "platform"),
		"Win32"         => array("years" => 14, "type" => "platform"),
		"MIPS Assembly" => array("years" => 4,  "type" => "platform"),
		"x86 Assembly"  => array("years" => 10, "type" => "platform"),
		
		"RxSwift"   	  => array("years" => 1,  "type" => "mframework"),
		"ReactiveSwift"   => array("years" => 1,  "type" => "mframework"),
		"ReactiveCocoa"   => array("years" => 1,  "type" => "mframework"),
		"AlamoFire"   	  => array("years" => 1,  "type" => "mframework"),
		"AFNetworking"    => array("years" => 1,  "type" => "mframework"),
		"CFNetwork" 	  => array("years" => 1,  "type" => "mframework"),
		"ASIFormHandler"  => array("years" => 1,  "type" => "mframework"),
		"Realm"		      => array("years" => 1,  "type" => "mframework"),
		"CoreData" 		  => array("years" => 1,  "type" => "mframework"),
		"SQLite" 		  => array("years" => 1,  "type" => "mframework"),
		"Firebase"        => array("years" => 1,  "type" => "mframework"),
		"Mantle"      	  => array("years" => 1,  "type" => "mframework"),
		"Masonry"         => array("years" => 1,  "type" => "mframework"),
		"PBJVision"   	  => array("years" => 1,  "type" => "mframework"),
		"ReactiveSwift"   => array("years" => 1,  "type" => "mframework"),
		"ReactiveCocoa"   => array("years" => 1,  "type" => "mframework"),
		"SDWebImage"	  => array("years" => 1,  "type" => "mframework"),
		"CocoaLumberjack" => array("years" => 1,  "type" => "mframework"),
		"SwiftHTTP" 	  => array("years" => 1,  "type" => "mframework"),
		"MapKit" 		  => array("years" => 1,  "type" => "mframework"),
		"SnapKit" 		  => array("years" => 1,  "type" => "mframework"),
		"Fabric" 		  => array("years" => 1,  "type" => "mframework"),
		"AWS" 		  	  => array("years" => 1,  "type" => "mframework"),
		

		"Financial Analysis"   					=> array("years" => 12, "type" => "field"),
		"Info Security & Encryption" 			=> array("years" => 12, "type" => "field"),
		"Relational Database Optimization"    	=> array("years" => 10, "type" => "field"),
		"Database Tuning"       				=> array("years" => 8,  "type" => "field"),
		
		);
	
	// refactor skills list into categories
	$profLists = array(
		"lang"       => array("title" => "Programming Languages", "list" => array()),
		"db"         => array("title" => "Database Engines",      "list" => array()),
		"mframework" => array("title" => "Mobile Frameworks",     "list" => array()),
		"web"     	 => array("title" => "Web Frameworks",        "list" => array()),
		"platform"   => array("title" => "Architectures",         "list" => array()),
		"field"      => array("title" => "General Fields",        "list" => array(), "disable" => 1),
		);
	$langLabelList = array();
	$langYearList = array();
	foreach($Skills as $name => $Info)
	{
		$title = $name;
		if($Info['abbr']!="")
			$title = $Info['abbr'];
		
		if($Info['type']=="lang")
		{
			// for programming language bar-chart
			array_push($langLabelList, $title);
			array_push($langYearList, $Info['years']);
		}
		$profLists[$Info['type']]['list'][] = $title;
	}
?>

	<div class="cv_split_box" style="width:40%;float:left;">
		<?php
		foreach($profLists as $prof => $Data)
		{
			if($Data["disable"]==1)
				continue;
				
			echo '<div class="cv_skills_group">'.chr(10);
				echo "\t<h1>".$Data['title']."</h1>".chr(10);
				echo "\t<ul>".chr(10);
				$list = $Data["list"];
				for($i=0;$i<count($list);$i++)
				{
					echo "\t\t<li>".$list[$i];
					if($i<count($list)-1)
						echo ',';
					echo '</li>'.chr(10);
				}
				
				echo "\t</ul>".chr(10);
			echo '</div>'.chr(10);
		}
		?>
	</div>
	
	<div class="cv_split_box" style="width:58%;float:right;">
		<h1>Programming Languages by Years of Experience</h1>
		<canvas id="langChart" width="650" height="350"></canvas>
	</div>
	
	<div class="clear"></div>

	
	<script>
		var barOptions = {
			scaleIntegersOnly: false,
			scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
			scaleFontSize: 15,
			scaleFontStyle: "bold",
			scaleFontColor: "#FFF",
			responsive: true,
			// bar-specific options
			//drawTicks: true,
			scaleBeginAtZero : true,
			scaleShowGridLines : true,
			scaleGridLineColor : "rgba(1,1,1,0.5)",
			scaleGridLineWidth : 1,
			scaleShowHorizontalLines: false,
			scaleShowVerticalLines: true,
			barShowStroke : false,
			barStrokeWidth : 2,
			barValueSpacing : 8,
			barDatasetSpacing : 1,
			legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
		}


		/* language bar chart */
		var langData = {
			labels: <?=getJSArrayString($langLabelList)?>,
			datasets: 
				[
					{
						label: "Years", 
						fillColor: ["#B9BEDC","#92C5B6","#61B4D6","#B4B48E","#689365","#937365","#994949","#639698","#484779","#CCCCCC","#0B5015"],
						data: <?=getJSArrayString($langYearList, true)?>
					}
				]
			};
		var ctx = document.getElementById("langChart").getContext("2d");
		var langChart = new Chart(ctx).Bar(langData, barOptions);

	</script>
</div> 
<!-- end skills -->

