		
<div class="pad_pageindx_c_mxinside_allpaidadstime">
	You receive daily Bonus ad points at 18:00 maximum 19:00 Server time.
</div>
<div id="pad_pageindx_c_mxinside_allads">


	<?php
	foreach($urls  as $key => $value)
	{
 		//sprint_r($value);
		echo'

		<div class="pad_pageindx_c_mxinside_exp_allad"  id="allpageinside_allthepage_inside_pagein_adstoclickonce1">
		<div class="pad_pageindx_c_mxinside_title">
			<div class="pad_pageindx_c_mxinside_expall">
				<span class="pad_pageindx_c_mxinside_exp">Ad Expires in</span>
				<span class="pad_pageindx_c_mxinside_expt" id="allpageinside_allthepage_inside_pagein_adstoclickonce_time_lasts1">09:16:26</span>
			</div>
		</div>
		<div class="pad_pageindx_c_mxinside_exp_amount"><center>20 BAP</center></div>
		<center><a href="'. base_url().'bonusadpoint/show_data?id='.$value['id'].'"><button class="ads_btn_all">View Bonus Ad Points</button></a></center>
		</div>

		';
	}
	?>


</div>
</div>
