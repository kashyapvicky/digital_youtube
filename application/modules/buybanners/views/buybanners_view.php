		<form name="banner125" method="POST" action="<?php echo base_url()?>buybanners/insert_banner" enctype="multipart/form-data">
			<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
				<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
					Enter Your Banner File Here: 
				</div>
				<input type="file" name="banner125img" id="allpageinside_allthepage_inside_pagein_buyself_file">
			</div>
			<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
				<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
					Enter the website URL you would like to promote: 
				</div>
				<input type="text" name="thelinkbanner" id="allpageinside_allthepage_inside_pagein_buybannersself_link_self" value="http://">
			</div>
			<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
				<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
					Number Of Banner Impression You Want To Buy:
				</div>
				<div id="allpageinside_allthepage_inside_pagein_buyself_onceall_containquan">
					<!-- --------------------- -->
					<span class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio_container"><input type="radio" name="bannerprice" class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio" value="1251000at">1,000,000 x 125*125 banner impressions for $18.50</span>
					<span class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio_container"><input type="radio" name="bannerprice" class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio" value="125500at">500,000 x 125*125 banner impressions for $11.35</span>
					<span class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio_container"><input type="radio" name="bannerprice" class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio" value="125250at">250,000 x 125*125 banner impressions for $6.75</span>
					<span class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio_container"><input type="radio" name="bannerprice" class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio" value="125100at">100,000 x 125*125 banner impressions for $2.95</span>
					<span class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio_container" id="allpageinside_allthepage_inside_pagein_desc_line_theradio_container_bottom"><input type="radio" name="bannerprice" class="allpageinside_allthepage_inside_pagein_desc_line_theradio_radio" value="12540at">40,000 x 125*125 banner impressions for $1.25</span>
					<!-- --------------------- -->
				</div>
			</div>
			<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
				<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
					Enter your payment method:
				</div>
				<select id="allpageinside_allthepage_inside_pagein_buyself_paymentbal" name="thebalancefrom">
					<option value="balance">Balance - $0.000</option>
					<option value="earnings">Earnings - $0.000</option>
				</select>
			</div>
			<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
				<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
					Purchase: 
				</div>
				<button type="submit" id="allpageinside_allthepage_inside_pagein_buyself_purchase" class="container_buyads_button">Purchase</button>
				<div id="allpageinside_allthepage_inside_pagein_bannerself_onceallbanner_load"></div>
			</div>
			<iframe name="iframebanner" id="allpageinside_allthepage_inside_pagein_buyself_onceall_frame"></iframe>
		</form>
	</div>


