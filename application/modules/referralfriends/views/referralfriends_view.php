

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->
<!-- Latest compiled JavaScript -->

<?php
//echo"<pre>"; print_r($first_level); die;

?>

<div id="allpage_login_in_top_leftcontent_cashoutallpage">

	<div class="pad_pageindx_cashoutallfields">
		<div id="pad_pageindx_adcamp_bulkads">REFERRAL FRIENDS</div>
		<div id="pad_pageindx_addfunds_trans_2" style="margin-bottom: 2px; ">
			<div class="pad_pageindx_addfunds_trans_referonce_title">Username</div>
			<div class="pad_pageindx_addfunds_trans_referonce_title">Joining date</div>
			<div class="pad_pageindx_addfunds_trans_referonce_title">Level</div>
		</div>
		<?php if(!empty($first_level))
		{
			//echo "<pre>";print_r($first_level); die;
			foreach($first_level['first_level'] as $key => $value)
			{

				echo'
				<div id="pad_pageindx_addfunds_trans_2" style="background-color: # fefefe;">
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['name'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['joining_date'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">First</div>
				</div>';

			}
			# code...
		}
		?>
		<?php if(!empty($second_level))
		{
			//echo "<pre>";print_r($first_level); die;
			foreach($second_level['second_level'] as $key => $value)
			{

				echo'
				<div id="pad_pageindx_addfunds_trans_2" style="background-color: # fefefe;">
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['name'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['joining_date'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">Second</div>
				</div>';

			}
			# code...
		}
		?>
		<?php if(!empty($third_level))
		{
			//echo "<pre>";print_r($first_level); die;
			foreach($third_level['third_level'] as $key => $value)
			{

				echo'
				<div id="pad_pageindx_addfunds_trans_2" style="background-color: # fefefe;">
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['name'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['joining_date'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">Third</div>
				</div>';

			}
			# code...
		}
		?>
		<?php if(!empty($fourth_level))
		{
			//echo "<pre>";print_r($first_level); die;
			foreach($fourth_level['fourth_level'] as $key => $value)
			{

				echo'
				<div id="pad_pageindx_addfunds_trans_2" style="background-color: # fefefe;">
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['name'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['joining_date'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">fourth</div>
				</div>';

			}
			# code...
		}
		?>
		<?php if(!empty($fifth_level))
		{
			//echo "<pre>";print_r($first_level); die;
			foreach($fifth_level['fifth_level'] as $key => $value)
			{

				echo'
				<div id="pad_pageindx_addfunds_trans_2" style="background-color: # fefefe;">
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['name'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['joining_date'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">Fifth</div>
				</div>';

			}
			# code...
		}
		?>
		<?php if(!empty($sixth_level))
		{
			//echo "<pre>";print_r($first_level); die;
			foreach($sixth_level['sixth_level'] as $key => $value)
			{

				echo'
				<div id="pad_pageindx_addfunds_trans_2" style="background-color: # fefefe;">
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['name'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">'.$value['joining_date'].'</div>
				<div class="pad_pageindx_addfunds_trans_referonce_title">Sixth</div>
				</div>';

			}
			# code...
		}
		?>
		

	</div>
</div>
<!-- ------------------ -->

</div>