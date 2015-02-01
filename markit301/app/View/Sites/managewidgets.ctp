<body class=""> 
  <!--<![endif]-->
       <?php echo $this->element('adminheader'); ?>
 
    <div class="sidebar-nav">
       <a href="#dashboard-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard<i class="icon-chevron-up"></i></a>
        <ul id="dashboard-menu" class="nav nav-list collapse ">
            <li><a href="<?php echo SITE_URL.'admin/'; ?>">Home</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-user-md"></i>User Management<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li><a href="<?php echo SITE_URL.'addmember/'; ?>">Add User</a></li>
            <li><a href="<?php echo SITE_URL.'admin/user/management/'; ?>">Manage user</a></li>
        </ul>
        
        <a href="#payment-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-money"></i>Payments<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="payment-menu" class="nav nav-list collapse">
        	<li><a href="<?php echo SITE_URL.'admin/pgsetup/'; ?>">Payment Gateway</a></li>
        	<li><a href="<?php echo SITE_URL.'admin/merchant_payment/'; ?>">Orders</a></li>
        	<li><a href="<?php echo SITE_URL.'admin/viewcommission/'; ?>">Commission Setup</a></li>
        	<li><a href="<?php echo SITE_URL.'admin/payments/'; ?>">Invoices</a></li>
        </ul>

        <a href="#coupons-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-key"></i>Coupons<i class="icon-chevron-up"></i></a>
        <ul id="coupons-menu" class="nav nav-list collapse">
        	<li><a href="<?php echo SITE_URL.'admin/addcoupon/'; ?>">Add coupon</a></li>
        	<li><a href="<?php echo SITE_URL.'admin/managecoupon/'; ?>">Manage coupon</a></li>
       		 <li><a href="<?php echo SITE_URL.'couponlog'; ?>">Logs Coupon </a></li>
         </ul>
           
        <a href="#giftcard-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-gift"></i>Giftcard<i class="icon-chevron-up"></i></a>
        <ul id="giftcard-menu" class="nav nav-list collapse">
        	<li><a href="<?php echo SITE_URL.'giftcard/'; ?>">Add Gift Card</a></li>
       		<li><a href="<?php echo SITE_URL.'giftcardlog/'; ?>">Logs</a></li>
        </ul>


        <a href="#storep-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-briefcase"></i>Store Preferences<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="storep-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo SITE_URL.'admin/view/category'; ?>">Manage Category</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/manage/items'; ?>">Manage Items</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/manage/affiliate'; ?>">Manage Affiliate</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/manage/price'; ?>">Manage Prices</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/manage/colors'; ?>">Manage Colors</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/manage/currency'; ?>">Manage Currency</a></li>
        	<li><a href="<?php echo SITE_URL.'admin/manage/sellers'; ?>">Manage Sellers</a></li>
        </ul>  
		 <a href="#dispute-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-group"></i>Dispute Management<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="dispute-menu" class="nav nav-list collapse">
	    <li ><a href="<?php echo SITE_URL.'admin/manage/problemlist'; ?>">User Options</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/user/dispute'; ?>">Manage Dispute</a></li>
        </ul>          
        
        <a href="#sellerchat-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-comments"></i>Seller Chat Management<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="sellerchat-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo SITE_URL.'admin/contacteditem'; ?>">Manage Seller Chat</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/manage/contactsellersubject'; ?>">Manage Subjects</a></li>
        </ul>  
        
        <a href="#sitemanage-menu" class="nav-header " data-toggle="collapse"><i class="icon-globe"></i>Site Management<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="sitemanage-menu" class="nav nav-list collapse in">
            <li ><a href="<?php echo SITE_URL.'admin/site/setting'; ?>">Manage Sites</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/manage/landingpage'; ?>">Manage Landing Page</a></li>
            <li class="active" ><a href="<?php echo SITE_URL.'admin/manage/widgets'; ?>">Manage Widgets</a></li>
	    <li ><a href="<?php echo SITE_URL.'admin/mobile/settings'; ?>">Mobile Apps Settings</a></li>
        </ul> 
        
        
        <a href="#sitesett-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-filter"></i>General Preferences<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="sitesett-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo SITE_URL.'admin/module/setting'; ?>">Manage Modules</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/google/code'; ?>">Google Analytics</a></li>
        </ul> 
        
        
        <a href="#banner-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-film"></i>Banner Management<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="banner-menu" class="nav nav-list collapse">
	        <li><a href="<?php echo SITE_URL.'admin/add/banner'; ?>">Add Banner</a></li>
            <li><a href="<?php echo SITE_URL.'admin/view/banner'; ?>">Manage Banner</a></li>
        </ul>
		
		<a href="#news-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-tint"></i>News Management<!--span class="label label-info">+3</span--><i class="icon-chevron-up"></i></a>
        <ul id="news-menu" class="nav nav-list collapse ">
            <li><a href="<?php echo SITE_URL.'admin/add/news'; ?>">Add News</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/view/news'; ?>">manage News</a></li>
        </ul>
		

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Error Pages <i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo SITE_URL.'err404'; ?>">404 page</a></li>
        </ul>

	<a href="#legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-legal"></i>Help Page Management <i class="icon-chevron-up"></i></a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo SITE_URL.'admin/faq'; ?>">Faq</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/contact'; ?>">Contact</a></li>
	    <li ><a href="<?php echo SITE_URL.'admin/terms_sale'; ?>">Terms of Sale</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/terms_service'; ?>">Terms of Service</a></li>
	    <li ><a href="<?php echo SITE_URL.'admin/privacy'; ?>">Privacy Policy</a></li>
            <li ><a href="<?php echo SITE_URL.'admin/terms_merchant'; ?>">Terms and Conditions</a></li>
	   <li ><a href="<?php echo SITE_URL.'admin/copyright'; ?>">Copyright Policy</a></li>
        </ul>

    </div>
   
   
   
   
   
   
 <div class="content">
 <div class="header">
     <h1 class="page-title">Manage Widgets</h1>
  </div>
<ul class="breadcrumb">
    <li><a href="<?php echo SITE_URL; ?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Manage Widgets</li>
</ul>
<div class="container-fluid">
    <div class="row-fluid">
  
<div class="well">
   
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">

<?php
	echo "<div class='containerdiv'>";
		echo $this->Form->Create('Managewidget',array('url'=>array('controller'=>'/',
				'action'=>'/admin/manage/widgets')));
			
			echo "<div id='forms'>";
				
				$availwidgets = array('Recently Added','Most Popular', 'Most Commented', 'Top Stores',
						'Most Popular Categories', 'Featured Items');
				if (!empty($homepageModel['Homepagesettings']['widgets'])){
					$widgets = $homepageModel['Homepagesettings']['widgets'];
					$widgetarray = explode('(,)', $widgets);
				}else{
					$widgets = '';
					$widgetarray = array();
				}
				if (!empty($homepageModel['Homepagesettings']['properties'])){
					$sliderProperty = json_decode($homepageModel['Homepagesettings']['properties'],true);
				}
				?>	
				<div class="customslider" style="<?php echo $displaydiv;?>">
					<P class="widgettophead">Widget Settings</P>
					<?php if (!empty($widgetarray)) {
						$widgettype['regular'] = 'Regular';
						$widgettype['compact'] = 'Compact';
						for ($i=6;$i<36; $i=$i+6){
							$widgetitm[$i] = $i;
						}
						echo "<table class='slidertable'>";
						echo "<thead>
								<tr>
									<th>#</th>
									<th>Widget</th>
									<th>Widget Type</th>
									<th>Item Count</th>
								<tr>
								</thead><tbody>";
						$curskey = 0;
						foreach ($widgetarray as $skey => $widget){
							//if ($widget != 'Most Popular Categories' && $widget != 'Top Stores'){
							if ($widget != 'Most Popular Categories'){
								$widgetTypedft = 'regular';
								$widgetItmcnt = '6';
								$widgettypelabel = $widget."type";
								$widgetitmlabel = $widget.'itmcount';
								if (isset($sliderProperty['widgets'][$widget])){
									$widgetTypedft = $sliderProperty['widgets'][$widget]['widgettype'];
									$widgetItmcnt = $sliderProperty['widgets'][$widget]['widgetitmcnt'];
								}
								$curskey  += 1;
								echo "<tr>";
								echo "<td>$curskey</td>";
								echo "<td>".$widget."</td>";
								echo "<td>";
								if ($widget != 'Top Stores'){
									echo $this->Form->input($widgettypelabel, array('options' => $widgettype,'default'=>$widgetTypedft,'id'=>'widgettype','class'=>'inputform widgettype','label' => false));
								}
								echo "</td>";
								echo "<td>";
								echo $this->Form->input($widgetitmlabel, array('options' => $widgetitm,'default'=>$widgetItmcnt,'id'=>'widgetitemcnt','class'=>'inputform widgetitemcnt','label' => false));
								echo"</td>";
								echo "</tr>";
							}
						}
						echo "</tbody></table>";
						if ($curskey < 1){
							echo "<div class='slideerror' style='color:red;margin-top:10px;'>Please select 
								some widgets in the Landing page settings, Other than the Top stores and 
								Most Popular Categories</div>";
						}
					}else{
						echo "<div class='slideerror'>No Widgets have be selected, 
								Please select some widgets in the Landing page settings</div>";
					}?>
				</div>
				<div class='slidererror error'></div>
				</br>
				<div class="savebtn">
			<?php 	
			echo $this->Form->submit('Save',array('div'=>false,'class'=>'btn btn-success reg_btn'));
			echo "</div>";
		echo $this->Form->end();
	echo "</div>";
?>


   </div></div></div>
     
<footer>
    <hr>
	<p class="pull-right">A <a href="#" target="_blank">Fancyclone script</a> by <a href="http://hitasoft.com" target="_blank">Simpl!it Services</a></p>
	&copy; <?PHP echo date("Y").' <a href="#" target="_blank">'.$setngs[0]['Sitesetting']['site_name'].'</a>';?>
</footer>
<style>
.slidertable td {
    padding: 14px 12px 0;
}
</style>
