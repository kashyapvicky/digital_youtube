<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="advertslab,ptc,online earning,online earn,similar to,paid to click,traffic,long term,advertisers,earn money,advertise, get paid">
<meta name="description" content="Advertslab gives you the opportunity to both of advertising and earning, you can make earnings starts from $0.004 up to $475 per ad view, your earnings depends on how much you invest in buying ads.">
<title>Welcome To Advertslab.com</title>
<link rel="shortcut icon" href="img/logo.png"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>user_css/styles/style.css">
<script src="<?php echo base_url()?>user_css/jquery/jquery.js"></script>
<script src="<?php echo base_url()?>user_css/jquery/logintoindex.js"></script>
<script src="<?php echo base_url()?>user_css/jquery/logout.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a952da04b401e45400d3cc7/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body id="body">
	<?php
	$userdata = $this->session->userdata('user_data');
	$user_id = $userdata['id'];
	$this->db->select('*');
	$this->db->where('user_id',$user_id);
	$query = $this->db->get('income');
	$header_data = $query->row_array();

	?>
	<div id="container">
		<center>
		<div id="container_center">
			<div id="top_menu">
					<div id="left_menu">
						<div id="left_logo"></div>
						<div id="left_sitetitle">Advertslab</div>
					</div>
					<div id="right_topmenu">
						<a href="contact.php"><button class="right_menu_right">CONTACT</button></a>
						<a href="tos.php"><button class="right_menu_right">TOS</button></a>
						<a href="htw.php"><button class="right_menu_right">HOW IT WORKS</button></a>
						<a href="index.php"><button class="right_menu_right">INDEX PAGE</button></a>	
					</div>
			</div>
			<div class="pad_pageindx">
				<div id="pad_pageindx_headerleft">
					<div id="pad_page_user_info">
						<div id="pad_page_user_header">
							<img src="img/boy.png" id="pad_page_user_img">
							<span id="pad_page_user_username"><?php ?></span>
							<a href="settings.php"><span id="pad_page_user_sttings">settings</span></a>
						</div>
						<div id="pad_page_user_help">
							<div id="pad_page_user_header_wlcm">
								Server Time : 03/Jun/2018 16:58:25							</div>
							<div class="right_menu_user_infoinside">
								<div class="right_menu_user_infoearn">
									<span class="right_menu_user_infoearnbalancetitle">Balance</span>
									<span class="right_menu_user_infoearnbalance">$0.000</span>
									<a href="addfunds.php"><button class="right_menu_user_infoearnbalancebtn">Add Funds</button></a>
								</div>
								<div class="right_menu_user_infoearn">
									<span class="right_menu_user_infoearnbalancetitle">Earnings</span>
									<span class="right_menu_user_infoearnbalance">$0.000</span>
									<a href="cashout.php"><button class="right_menu_user_infoearnbalancebtn">Cashout</button></a>
								</div>
								<a href="https://www.facebook.com/Advertslab-447296425715467" target="_blank">
								<div class="right_menu_user_infosocial">
									Join Our Facebook Page
								</div>
								</a>
							</div>
						</div>
						<div id="pad_page_user_menu">
							<div id="pad_page_user_menuheader">
							YOUR NAVIGATION<h1>
							</div>
							<a href="<?php echo base_url()?>dashboard">
							<div class="right_menu_line home">            
								Home Page
							</div>
							</a>
							<a href="<?php echo base_url()?>addfunds">
							<div class="right_menu_line addfunds">            
								Add Funds
							</div>
							</a>
							<a href="<?php echo base_url()?>cashout">
							<div class="right_menu_line cashout">            
								Cashout
							</div>
							</a>
							<a href="<?php echo base_url()?>buyads">
							<div class="right_menu_line buyads">            
								Buy Ads
							</div>
							</a>
							<a href="<?php echo base_url()?>adcampaigns">
							<div class="right_menu_line campain">            
								Ad Campaigns
							</div>
							</a>
							<a href="<?php echo base_url()?>paidads">
							<div class="right_menu_line paidads">            
								Paid Ads
							</div>
							</a>	
							<a href="<?php echo base_url()?>bonusadpoint">
							<div class="right_menu_line bonusadspoints">            
								Bonus Ad Points
							</div>
							</a>
							<a href="<?php echo base_url()?>buybanners">
							<div class="right_menu_line banners">            
								Buy Banners
							</div>
							</a>
							<a href="<?php echo base_url()?>referralfriends">
							<div class="right_menu_line ref">            
								Referral friends
							</div>
							</a>
							<a href="<?php echo base_url()?>marketingmaterials">
							<div class="right_menu_line promotionnal">            	
								Marketing Materials
							</div>
							</a>
							<a href="<?php echo base_url()?>activitylogs">
							<div class="right_menu_line activity">            
								Activity Logs
							</div>
							</a>
							<a href="<?php echo base_url()?>settings">
							<div class="right_menu_line settings">            
								Settings
							</div>
							</a>
							<a href="<?php echo base_url()?>website/logout">
							<div id="" class="right_menu_line logout">
								Logout
							</div>
							</a>
						</div>
					</div>
				</div>
				<div id="pad_pageindx_insideheader">
				<div id="pad_pageindx_balancesall">
					<div class="pad_pageindx_balances">
						<div class="pad_pageindx_balancehead">Balance</div>
						<div class="pad_pageindx_balancecontant">$0.000</div>
					</div>
					<div class="pad_pageindx_balances">
						<div class="pad_pageindx_balancehead">Earnings</div>
						<div class="pad_pageindx_balancecontant">$0.000</div>
					</div>
					<div class="pad_pageindx_balances">
						<div class="pad_pageindx_balancehead referbalance">My Referrals</div>
						<div class="pad_pageindx_balancecontant">
							0.000						</div>
					</div>
					<div class="pad_pageindx_balances">
						<div class="pad_pageindx_balancehead">BAPs</div>
						<div class="pad_pageindx_balancecontant"><?php echo $header_data['bap'];?></div>
					</div>
					<div class="pad_pageindx_balances">
						<div class="pad_pageindx_balancehead">Group</div>
						<div class="pad_pageindx_balancecontant">0/14</div>
					</div>
					<div class="pad_pageindx_balances">
						<div class="pad_pageindx_balancehead referbalance">My Commissions</div>
						<div class="pad_pageindx_balancecontant">
							$0.000						</div>
					</div>
				</div>
				<div id="pad_pageindx_banners">
					<a href="inc/readthebanner.php?theid=17" target="_blank"><img src="<?php echo base_url()?>user_css/img/animation.gif" class="pad_pageindx_banner_once"></a>
					<a href="inc/readthebanner.php?theid=69" target="_blank"><img src="<?php echo base_url()?>user_css/img/animation.gif" class="pad_pageindx_banner_once"></a>
					<a href="inc/readthebanner.php?theid=18" target="_blank"><img src="<?php echo base_url()?>user_css/img/animation.gif" class="pad_pageindx_banner_once"></a>
					<a href="inc/readthebanner.php?theid=15" target="_blank"><img src="<?php echo base_url()?>user_css/img/animation.gif" class="pad_pageindx_banner_once"></a>
					<a href="inc/readthebanner.php?theid=12" target="_blank"><img src="<?php echo base_url()?>user_css/img/animation.gif" class="pad_pageindx_banner_once"></a>
				</div>
			</div>
			<!--header ends here-->	