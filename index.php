<?php
//
//==============
//  MTJ Resume 
//==============
//

include_once('library/start.php');
global $CONFIG;


$PT = new ResumePageTemplate();
$PT->printWrapperBegin("resume");
$PT->printContentBegin(true);


//===========================
//  Modular Resume Sections
//===========================
	
	if(!$CONFIG->resume_is_active)
	{
		// turn-off resume
		include("sections/inactive.php");
	}
	else
	{
		// summary
		include("sections/summary.php");
		
		// professional skills
		include("sections/skills.php");
		
		// experience
		include("sections/experience.php");
		
		// education
		include("sections/education.php");
	
		// project portfolio
		include("sections/portfolio.php");
		
		// source code samples
		include("sections/codesamples.php");
	}
?>

<script>

	$(document).ready(function(){
		
		/* custom js twinkle */
		/* configureStarlightForHomepage(); */
	
		/* project detail popups */
		$(".fancybox-button").fancybox({
			prevEffect: 'none',
			nextEffect: 'none',
			closeBtn: false,
			helpers:{
				title:{type:'outside'},
				buttons:{},
				/*overlay:{
					css:{'background-color':'#555'}
				},*/
			},
			beforeShow: function(){
				$(".fancybox-skin").css("backgroundColor","#555");
			}
		});
	});

	$(document).on('click', '#downloadLink', function(){
		var target = $(this).attr('tag');
		document.location.href = '<?=$CONFIG->url?>/download.php?target=' + target;
	});
	
</script>
<?php

$PT->printContentEnd();
$PT->printWrapperEnd();
$PT->outputPage();

?>