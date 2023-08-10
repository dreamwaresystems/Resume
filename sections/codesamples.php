<?php
//
//  Code Samples
//  Resume Section
//
?>

<div class="anchor_div" id="sourcecode"></div>
<div class="cv_section_title">Source Code Samples</div>
<div class="cv_section_clear" style="width:68%;">

<?php
	if(!$CONFIG->resume_sourcecode_is_active)
	{
		// should we wish to disable code-sample links but not the entire resume...
		echo '<div style="margin:0 auto;width:420px;font:bold 16px Arial;">';
		echo '<div style="float:left;margin-top:12px;">Code samples available on github:</div>';
		echo '<div style="float:right;">';
			echo '<a class="cv_github_btn" style="margin:0px;" href="https://github.com/Jonesyme/" target="_blank"></a>';
		echo '</div>';
		echo '</div>';
	}
	else
	{
?>

		<div class="cv_proj_split">
			<div class="cv_proj_wrap cv_proj_app_wrap">
				<div class="cv_proj_thumb cv_proj_app" style="margin-left:10px;">
					<!-- <img src="<?=$CONFIG->url?>images/projects/thumbnails/app_holyquotes.jpg" alt="HolyQuotes App" /> -->
				</div>
				<div class="cv_proj_text" style="width:60%;margin-left:12px;">
					<div class="cv_proj_title">HolyQuotes (iOS)</div>
					<div class="cv_proj_link" style="clear:both;">Source Code Sample</div>
					<div class="cv_proj_desc">
						<div class="cv_download_zip_btn" id="downloadLink" tag="holyquotes">Download Source Code</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cv_proj_split">
			<div class="cv_proj_wrap">
				<div class="cv_proj_thumb">
					<!-- <img src="<?=$CONFIG->url?>images/projects/thumbnails/web_dreamware.jpg" alt="Dreamware Systems LLC" /> -->
				</div>
				<div class="cv_proj_text">
					<div class="cv_proj_title">Dreamware / Resume (Website)</div>
					<div class="cv_proj_link" style="clear:both;">Source Code Sample</div>
					<div class="cv_proj_desc">
						<div class="cv_download_zip_btn" id="downloadLink" tag="dreamware">Download Source Code</div>
					</div>
				</div>
			</div>
		</div>
<?php
	}
?>
</div> 
<!-- end code samples -->

