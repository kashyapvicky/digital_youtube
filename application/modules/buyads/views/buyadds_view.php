<?php 
if($this->session->flashdata('url_added'))
{
	echo"<script>alert('Added Successfully')</script>";
}
?>
<div id="allpageinside_allthepage_inside_pagein_buyself">
	<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
		<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
			Enter the website URL want to promote: 
		</div>
		<form method="post" action="<?php base_url()?>buyads/insert_buyads_url">
		<input type="text" name="url" id="allpageinside_allthepage_inside_pagein_buyself_link_self" value="http://">
	</div>
	<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
		<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
			How many ad packs you want to purchase?
		</div>
		<div id="allpageinside_allthepage_inside_pagein_buyself_onceall_containquan">
			<input type="number" name="number" id="allpageinside_allthepage_inside_pagein_buyself_number_self" min="1" step="1" onkeyup="quantityofads(this.id)" value="1" pattern="[0-9]{10}" />
			<div id="allpageinside_allthepage_inside_pagein_buyself_onceall_contairight">
				<div id="allpageinside_allthepage_inside_pagein_buyself_onceall_contaistats">
					<span class="allpageinside_allthepage_inside_pagein_buyself_onceall_containline">
						<b><span id="allpageinside_allthepage_inside_pagein_buyself_onceallcountbaps">3120</span></b> Bonus Ad Points will be added to your account
					</span>
					<span class="allpageinside_allthepage_inside_pagein_buyself_onceall_containline">
						<b><span id="allpageinside_allthepage_inside_pagein_buyself_onceallcountviews">75</span></b> x 20 second visit to your website
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
		<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
			Enter your payment method: 
		</div>
		<!-- <select id="allpageinside_allthepage_inside_pagein_buyself_paymentbal">
			<option value="balance">Balance - $0.000</option>
			<option value="earnings">Earnings - $0.000</option>
		</select> -->
	</div>
	<div class="allpageinside_allthepage_inside_pagein_buyself_onceall">
		<div class="allpageinside_allthepage_inside_pagein_buyself_onceall_title">
			Purchase: 
		</div>
		<button  id="allpageinside_allthepage_inside_pagein_buyself_purchase" class="container_buyads_button">Purchase</button>
		</form>
		<div id="allpageinside_allthepage_inside_pagein_buyself_onceall_load"></div>
	</div>

