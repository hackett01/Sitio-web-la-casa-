<?php 

$Custom_CSS = get_option("EWD_US_Custom_CSS");
$Autoplay_Slideshow = get_option("EWD_US_Autoplay_Slideshow");
$Autoplay_Delay = get_option("EWD_US_Autoplay_Delay");
$Autoplay_Interval = get_option("EWD_US_Autoplay_Interval");
$Slide_Transition_Effect = get_option("EWD_US_Slide_Transition_Effect");
$Transition_Time = get_option("EWD_US_Transition_Time");

?>

<div class="wrap us-options-page-tabbed">
	<div class="us-options-submenu-div">
		<ul class="us-options-submenu us-options-page-tabbed-nav">
			<li><a id="Basic_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == '' or $Display_Tab == 'Basic') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Basic');">Basic</a></li>
		</ul>
	</div>

	<div class="us-options-page-tabbed-content">
		<form method="post" action="edit.php?post_type=ultimate_slider&page=us-options&Action=EWD_US_UpdateOptions">
			<div id='Basic' class='us-option-set'>
				<h2 id='label-basic-options' class='us-options-page-tab-title'>Basic Options</h2>
				<table class="form-table">
				<tr>
						<th scope="row">Custom CSS</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Custom CSS</span></legend>
								<label title='Custom CSS'></label><textarea class='ewd-us-textarea' name='custom_css'> <?php echo $Custom_CSS; ?></textarea><br />
								<p>You can add custom CSS styles to your slider in the box above.</p>
							</fieldset>
						</td>
					</tr>

				<tr>
					<th scope="row">Autoplay Slideshow</th>
					<td>
						<fieldset><legend class="screen-reader-text"><span>Review Style</span></legend>
							<label title='Yes'><input type='radio' name='slider-autoplay' value='Yes' <?php if($Autoplay_Slideshow == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
							<label title='No'><input type='radio' name='slider-autoplay' value='No' <?php if($Autoplay_Slideshow  == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
							<p>Should the slider automatically toggle through slides?</p>
						</fieldset>
					</td>
				</tr>

				<tr>
					<th scope="row">Autoplay Delay (seconds)</th>
					<td>
						<fieldset><legend class="screen-reader-text"><span>Autoplay Delay (seconds)</span></legend>
							<input type='text' name='autoplay_delay' value='<?php echo $Autoplay_Delay; ?>' />
							<p>If autoplay is on, how long should should the timer wait before starting the slideshow?</p>
						</fieldset>
					</td>
				</tr>

				<tr>
					<th scope="row">Autoplay Interval (seconds)</th>
					<td>
						<fieldset><legend class="screen-reader-text"><span>Autoplay Interval (seconds)</span></legend>
							<input type='text' name='autoplay_interval' value='<?php echo $Autoplay_Interval; ?>' />
							<p>If autoplay is on, how long should the slideshow wait between each slide?</p>
						</fieldset>
					</td>
				</tr>

				<tr>
					<th scope="row">Slide Transition Effect</th>
						<td>
							<fieldset><legend class="screen-reader-text"><span>Slide Transition Effect</span></legend>
								<label title='Default'><input type='radio' name='slide_transition_effect' value='slide' <?php if($Slide_Transition_Effect == "slide") {echo "checked='checked'";} ?> /> <span>Default</span></label><br />
								<label title='Fade'><input type='radio' name='slide_transition_effect' value='fade' <?php if($Slide_Transition_Effect  == "fade") {echo "checked='checked'";} ?> /> <span>Fade</span></label><br />
								<label title='SlideUp'><input type='radio' name='slide_transition_effect' value='slide-up' <?php if($Slide_Transition_Effect  == "slide-up") {echo "checked='checked'";} ?> /> <span>Slide Up</span></label><br />
								<label title='SlideDown'><input type='radio' name='slide_transition_effect' value='slide-down' <?php if($Slide_Transition_Effect  == "slide-down") {echo "checked='checked'";} ?> /> <span>Slide Down</span></label><br />
								<label title='StretchRight'><input type='radio' name='slide_transition_effect' value='stretch-right' <?php if($Slide_Transition_Effect  == "stretch-right") {echo "checked='checked'";} ?> /> <span>Stretch Right</span></label><br />
								<label title='StretchLeft'><input type='radio' name='slide_transition_effect' value='stretch-left' <?php if($Slide_Transition_Effect  == "stretch-left") {echo "checked='checked'";} ?> /> <span>Stretch Left</span></label><br />
								<label title='Grow'><input type='radio' name='slide_transition_effect' value='grow' <?php if($Slide_Transition_Effect  == "grow") {echo "checked='checked'";} ?> /> <span>Grow</span></label><br />
								<label title='Expand'><input type='radio' name='slide_transition_effect' value='expand' <?php if($Slide_Transition_Effect  == "expand") {echo "checked='checked'";} ?> /> <span>Expand</span></label><br />
								<p>Which effect should be used to transition between slides?</p>
							</fieldset>
						</td>
					</tr>
				<tr>
					<th scope="row">Slide Transition Time (seconds)</th>
					<td>
						<fieldset><legend class="screen-reader-text"><span>Slider Transition Time (seconds)</span></legend>
							<input type='text' name='transition_time' value='<?php echo $Transition_Time; ?>' />
							<p>How long should each transition take to complete?</p>
						</fieldset>
					</td>
				</tr>

				</table>
			</div>
		
				<p class="submit"><input type="submit" name="Options_Submit" id="submit" class="button button-primary" value="Save Changes"  /></p></form>

	</div>