<?php 
if(session_id() == '') {
session_start();
}
$site = $_SESSION['site_url'];
$media = $_SESSION['media_url'];
@$username = @$_SESSION['media_server_username'];
@$password = @$_SESSION['media_server_password']; 
@$hostname = $_SESSION['media_host_name'];

$roundProfile = "border-radius:3px;";
if ($roundProf == 'round') {
	$roundProfile = "border-radius:50px;";
}
?>
<div class="container set_area" style="width:940px;">
		
        <div id="content"  style="float:right;">
		<h2 class="ptit"><?php  echo __('Settings' ); ?></h2>
		
		<?php	echo $this->Form->Create('settings',array('url'=>array('controller'=>'/','action'=>'/settings'),'onsubmit'=>'return userinfo()')); ?>
  		
		<div class="section">
			<h3 class="stit"><?php echo __('Personal Info');?></h3>
			<fieldset class="frm">
            <div class="frm_noti">
				<label><?php echo __('First Name'); ?>
				<?php echo "<div id='alert_FName' style='color:red;display:inline;padding-left:7em;height:0px;'></div>"; ?></label>
				<input id="name" name="setting-fullname" type="text" value="<?php echo $usr_datas['User']['first_name']; ?>" class="text"/>
				<small class="comment"><?php echo __('Your real name, so your friends can find you.');?></small>
				
				<label><?php echo __('Username'); ?></label>
				<input type="text" value="<?php echo $usr_datas['User']['username']; ?>" disabled="true" style="cursor:not-allowed;opacity:0.4;"/>
				
				<label><?php echo __('Website'); ?></label>
				<input id="website" name="website" type="text" value="<?php echo $usr_datas['User']['website']; ?>" class="text" />
				
				<label><?php echo __('Country');?>
				<?php echo "<div id='alert_cntry' style='color:red;display:inline;padding-left:7em;height:0px;'></div>"; ?></label>
				<div class="selectdiv" style="width: 280px; height: 28px; padding-top: 3px;">
				<select id="countrys" name="cntry" class="selectboxdiv" style="width: 280px ! important;">
					<option value=""><?php echo __('Select Country');?></option>
					<?php $selected = ''; 
							foreach ($countrylist as $country) { 
								if (isset($usr_datas)  && $country['Country']['country'] == $usr_datas['User']['country'])
									$selected = 'selected';
					?>
					<option value="<?php echo $country['Country']['id'];?>" <?php echo $selected;?>><?php echo $country['Country']['country']; ?></option>
					<?php $selected = '';} ?>
				</select><div class="out" ><?php echo $usr_datas['User']['country']; ?></div>
				</div>
				
				
				
				
				<label><?php echo __('Last Name'); ?>
				<?php echo "<div id='alert_LName' style='color:red;display:inline;padding-left:7em;height:0px;'></div>"; ?></label>
				<input id="lastname" name="lastname" type="text" value="<?php echo $usr_datas['User']['last_name']; ?>" class="text"/>
				
				<label><?php echo __('Mobile');?>
				<?php echo "<div id='alert_Mobile' style='color:red;display:inline;padding-left:7em;height:0px;'></div>"; ?></label>
				<input id="mobile" name="mobile" type="text" value="<?php echo $usr_datas['User']['mobile']; ?>" class="text" />
				
				<label><?php echo __('Telephone');?></label>
				<input id="telephone" name="telephone" type="text" value="<?php echo $usr_datas['User']['telephone']; ?>" class="text" />
				
				<label><?php echo __('Area');?>
				<?php echo "<div id='alert_Area' style='color:red;display:inline;padding-left:7em;height:0px;'></div>"; ?></label>
				<div class="selectdiv" style="width: 280px; height: 28px; padding-top: 3px;">
				<select id="area" name="area" class="selectboxdiv" style="width: 280px ! important;">
					<option value=""><?php echo __('Select Country');?></option>
					<?php $selected = ''; 
							foreach ($countrylist as $country) { 
								if (isset($usr_datas)  && $country['Country']['country'] == $usr_datas['User']['country'])
									$selected = 'selected';
					?>
					<option value="<?php echo $country['Country']['id'];?>" <?php echo $selected;?>><?php echo $country['Country']['country']; ?></option>
					<?php $selected = '';} ?>
				</select><div class="out" ><?php echo $usr_datas['User']['country']; ?></div>
				</div>
				
				<label><?php echo __('Block'); ?></label>
				<input id="block" name="block" type="text" value="<?php echo $usr_datas['User']['block']; ?>" class="text" />
				
				<label><?php echo __('Street'); ?></label>
				<input id="street" name="street" type="text" value="<?php echo $usr_datas['User']['street']; ?>" class="text" />
				
				<label><?php echo __('Avenue'); ?></label>
				<input id="avenue" name="avenue" type="text" value="<?php echo $usr_datas['User']['avenue']; ?>" class="text" />
				
				<label><?php echo __('House/Building No.'); ?></label>
				<input id="bild_no" name="bildng" type="text" value="<?php echo $usr_datas['User']['bilding']; ?>" class="text" />
				
				<label><?php echo __('Floor'); ?></label>
				<input id="floor" name="floor" type="text" value="<?php echo $usr_datas['User']['floor']; ?>" class="text" />
				
				<label><?php echo __('Flat/Apartment No.'); ?></label>
				<input id="aprt_no" name="aprtmnt" type="text" value="<?php echo $usr_datas['User']['aprtmnt']; ?>" class="text" />
				
				
				
				
				<label><?php echo __('State'); ?></label>
				<input id="state" name="state" type="text" value="<?php echo $usr_datas['User']['state']; ?>" class="text" placeholder="e.g. New York, NY"/>
				<label><?php echo __('City'); ?></label>
				<input id="loc" name="city" type="text" value="<?php echo $usr_datas['User']['city']; ?>" class="text" placeholder="e.g. New York, NY"/>
				<label><?php echo __('Address'); ?>1</label>
				<input id="adres1" name="address1" type="text" value="<?php echo $usr_datas['User']['address1']; ?>" class="text" />
				
				<label><?php echo __('Address'); ?>2</label>
				<input id="adres2" name="address2" type="text" value="<?php echo $usr_datas['User']['address2']; ?>" class="text" />

				<label><?php echo __('Twitter');?></label>
				<input id="twitter" name="twitter_email" type="text" value="<?php echo $usr_datas['User']['twitter']; ?>" class="text" />
				
				<label><?php echo __('Birthday'); ?></label>
				<div class="selectdiv" style="width: 70px;float: left; margin-right: 10px;">
				<select id="birthday_year" name="setting-birthday-year" class="selectboxdiv">
                    <option value="0"><?php echo __('Year');?></option>
                    <?php 
                    $dates = explode("-", $usr_datas['User']['birthday']);
                    for($i=2013;$i>1900;$i--){
                    if($dates[0] == $i){ 
                    	echo '<option value="'.$i.'"  selected>'.$i.'</option>';
                    }else{                 
                    	echo '<option value="'.$i.'"  >'.$i.'</option>';
                    	}
                    }
                    ?>
                    
                </select>
	            <?php
	                if($dates[0]!="" && $dates[0]!=0)
	                {
	                	echo '<div class="out" >'.$dates[0].'</div>';
	                }
	                else
	                {
	                	echo '<div class="out" >Year</div>';
	                }
                ?>
				</div>
				
				<div class="selectdiv" style="width: 126px;float: left; margin-right: 10px;">
				<select id="birthday_month" name="setting-birthday-month" class="selectboxdiv">
                    <option value="0"><?php echo __('Month');?></option>
                    <?php for($i=1;$i<13;$i++){
                    if($dates[1] == $i){ 
                    	echo '<option value="'.$i.'"  selected>'.$i.'</option>';
                    }else{                 
                    	echo '<option value="'.$i.'"  >'.$i.'</option>';
                    }
                    }
                    ?>
                    
                </select>
	            <?php
	                if($dates[1]!="" && $dates[1]!=0)
	                {
	                	echo '<div class="out" >'.$dates[1].'</div>';
	                }
	                else
	                {
	                	echo '<div class="out" >Month</div>';
	                }
                ?>
				</div>
                
                <div class="selectdiv" style="width: 66px;float: left; margin-right: 10px;">
				<select id="birthday_day" name="setting-birthday-day"  class="selectboxdiv">
                    <option value="0"><?php echo __('Day');?></option>
                    
                   <?php for($i=1;$i<32;$i++){
                   if($dates[2] == $i){ 
                    	echo '<option value="'.$i.'"  selected>'.$i.'</option>';
                    }else{                 
                    	echo '<option value="'.$i.'"  >'.$i.'</option>';
                    }
                    }
                    ?>
                    
                </select>
	            <?php
	                if($dates[2]!="" && $dates[2]!=0)
	                {
	                	echo '<div class="out" >'.$dates[2].'</div>';
	                }
	                else
	                {
	                	echo '<div class="out" >Day</div>';
	                }
                ?>                
				</div>
				<br />
				
				
				<small class="comment"><?php  echo __('We will send you a surprise on your birthday'); ?></small>
				
				<label><?php echo __('About'); ?></label>
				<?php $strleng = 180-strlen($usr_datas['User']['about']); ?>
				<textarea class="text" id="bio" name="setting-bio" maxlength="180"><?php echo $usr_datas['User']['about']; ?></textarea>
				<small class="comment"><b class="byte"><input size=3 value=<?php echo $strleng; ?> id=text_num></b> <?php  echo __('Write something about yourself'); ?></small>
				<span id="biodata_tex"></span>



        </div>
			</fieldset>
		</div>
		<div class="section">
			<h3 class="stit"><?php  echo __('Account'); ?></h3>
			<fieldset class="frm">
            <div class="frm_noti">
				<label><?php echo __('Email');?>
				<?php echo "<div id='alert_Email' style='color:red;display:inline;padding-left:7em;height:0px;'></div>"; ?></label>
				<input id="email" name="setting-email" type="text" value="<?php echo $usr_datas['User']['email']; ?>" class="text" disabled />
				<small class="comment"><?php  echo __('Email will not be publicly displayed.'); ?></small>
				
				
				<?php $agebtween = $usr_datas['User']['age_between']; ?>
				<label><?php echo __('Age'); ?></label>
				<div class="selectdiv" style="width: 285px;">
				<select name="agebtwen" id="agebtwen"  class="selectboxdiv" style="width: 285px !important;">
					<option value="none">I'd rather not say</option>
					<option value="0" <?php if($agebtween == '0'){ echo "selected";}else{ echo "";} ?> >13 to 17</option>
					<option value="1" <?php if($agebtween == '1'){ echo "selected";}else{ echo "";} ?> >18 to 24</option>
					<option value="2" <?php if($agebtween == '2'){ echo "selected";}else{ echo "";} ?> >25 to 34</option>
					<option value="3" <?php if($agebtween == '3'){ echo "selected";}else{ echo "";} ?> >35 to 44</option>
					<option value="4" <?php if($agebtween == '4'){ echo "selected";}else{ echo "";} ?> >45 to 54</option>
					<option value="5" <?php if($agebtween == '5'){ echo "selected";}else{ echo "";} ?> >55+</option>
				</select>
				<?php
				if($agebtween == '0')
				{
					echo '<div class="out" >13 to 17</div>';
				}
				else if($agebtween == '1')
				{
					echo '<div class="out" >18 to 24</div>';
				}
				else if($agebtween == '2')
				{
					echo '<div class="out" >25 to 34</div>';
				}
				else if($agebtween == '3')
				{
					echo '<div class="out" >35 to 44</div>';
				}
				else if($agebtween == '4')
				{
					echo '<div class="out" >45 to 54</div>';
				}									
				else if($agebtween == '5')
				{
					echo '<div class="out" >55+</div>';
				}	
				else
				{															
					echo '<div class="out" >I\'d rather not say</div>';
				}
				?>
				</div>
				
				
				
				<label><?php echo __('Gender'); ?></label>
				<?php if($usr_datas['User']['gender'] == 'male'){ ?>
				<input type="radio" name="gender" value="male" id="gender1" checked /><span style="font-size:13px;margin-left: 7px;margin-right: 20px;"><?php echo __('Male'); ?></span>
				<?php }else{ ?>
					<input type="radio" name="gender" value="male" id="gender1" /><span style="font-size:13px; margin-left: 7px;margin-right: 20px;"><?php echo __('Male'); ?></span>
				<?php  } if($usr_datas['User']['gender'] == 'female'){ ?>
					<input type="radio" name="gender" value="female" id="gender2" checked /><span style="font-size:13px; margin-left: 7px;margin-right: 20px;"><?php echo __('female'); ?></span>
				<?php }else{ ?>
					<input type="radio" name="gender" value="female" id="gender2" /><span style="font-size:13px; margin-left: 7px;margin-right: 20px;"><?php echo __('female'); ?></span>
				<?php  }  ?>
				<?php if($usr_datas['User']['gender'] == null){ ?>
				<input type="radio" name="gender" value="none" id="gender3" checked /><span style="font-size:13px; margin-left: 7px;margin-right: 20px;"><?php echo __('Unspecified'); ?></span>
				<?php }else{ ?>
				<input type="radio" name="gender" value="none" id="gender3" /><span style="font-size:13px; margin-left: 7px;margin-right: 20px;"><?php echo __('Unspecified'); ?></span>
				<?php  }  ?>
        </div>
			</fieldset>
		</div>
		<div class="section photo">
			<h3 class="stit"><?php echo __('Photo'); ?> </h3>
			<fieldset class="frm">
			
				<?php 
				
				if(empty($usr_datas['User']['profile_image'])){
					$image_computer = '';
				}else{
					$image_computer = $usr_datas['User']['profile_image'];
				}
		
				echo "<div class='input-group'>";
						echo '<div class="venueimg"><iframe class="image_iframe" id="frame" name="frame" src="'.$this->webroot.'userupload.php?media_url='.$media.'&site_url='.$site.'&username='.$username.'&password='.$password.'&hostname='.$hostname.'" frameborder="0" height="40px" width="130px" scrolling="no" HSPACE=0 VSPACE=0 style="float:left; margin-left: 90px;"></iframe>';												
							echo $this->Form->input('item_image', array('type'=>'hidden','id'=>'image_computer', 'class'=> 'fullwidth','class'=>'celeb_name','value'=>$image_computer,'name'=>'image'));
							if(!empty($image_computer)){  echo "<a href='javascript:void(0);' id='removeimg' class='btn' style='display: inline; margin-top: 5px; float: left;' onclick='removeusrimg(\" 1 \")'>Remove</a>"; }else{echo "<a href='javascript:void(0);' id='removeimg' class='btn' style='display: none; margin-top: 5px; float: left;' onclick='removeusrimg(\" 1 \")'> " ?><?php echo __('Remove'); echo "</a>"; }
						echo "</div>";
						if(!empty($image_computer)){
						echo "<img id='show_url'  style='float: left;margin-left: 10px;width: 70px;height:70px; border: 1px solid rgb(221, 221, 221); padding: 5px; ".$roundProfile."' src='".$_SESSION['media_url']."media/avatars/thumb70/".$image_computer."'>";
						}else{
						echo "<img id='show_url'  style='float: left;margin-left: 10px;width: 70px;height:70px; border: 1px solid rgb(221, 221, 221); padding: 5px; ".$roundProfile."' src='".$_SESSION['media_url']."media/avatars/thumb70/usrimg.jpg'>";
						}
				echo "</div>";
			
			echo "<br clear='all' />";
			
				?>
			
			</fieldset>
		</div>
		
		<div class="btn-area">
			<button class="btn-save" id="save_account"><?php echo __('Save Profile'); ?></button>
			<span class="checking" style="display:none"><i class="ic-loading"></i></span>
			<?php echo '<a id="close_account" onclick="deactiateac('.$loguser[0]['User']['id'].');" style="float: right;margin: 1px 24px -1px 0; background: none repeat scroll 0 0 transparent;color: #92969C;font-size: 13px;line-height: 32px;text-decoration: none;">';?>
			<?php echo __('Deactivate my account');?>
			<?php echo'</a>'; ?>
			
		</div>
		</form>
	</div>
	<div id="sidebar">
			<dl class="set_menu">
				<dt><?php echo __('ACCOUNT');?></dt>
				<dd><a href="<?php echo SITE_URL; ?>settings"  class="current"><?php echo __('Profile');?></a></dd>
				<dd><a href="<?php echo SITE_URL; ?>password" ><?php echo __('Password');?></a></dd>
				<dd><a href="<?php echo SITE_URL; ?>notifications" ><?php echo __('Notifications'); ?></a></dd>
				<dd><a href="<?php echo SITE_URL; ?>dispute/<?php echo $_SESSION['first_name'];?>?buyer" ><?php echo __('Disputes'); ?></a></dd>
				<dd><a href="<?php echo SITE_URL; ?>messages" > 
					<?php echo __('Messages'); 
					if($_SESSION['userMessageCount'] != 0){ ?> 
					<div class="msgcnt"><span><?php echo $_SESSION['userMessageCount']; ?></span></div>
					<?php } ?>
					</a>
				</dd>
			</dl>
			<dl class="set_menu">
				<dt><?php echo __('Shop'); ?></dt>
	            <dd><a href="<?php echo SITE_URL; ?>purchases" ><i class="ic-ship current"></i><?php echo __('My Orders'); ?></a></dd>
	            <dd><a href="<?php echo SITE_URL; ?>shipping" ><?php echo __('Shipping'); ?></a></dd>
	            <dd><a href="<?php echo SITE_URL; ?>addshipping" ><?php echo __('Add Shipping'); ?></a></dd>
	        </dl>
			<dl class="set_menu">
				<dt><?php echo __('MERCHANT'); ?></dt>
	            <dd><a href="<?php echo SITE_URL; ?>sellersignup" ><?php echo __('Information'); ?></a></dd>
	           	<dd><a href="<?php echo SITE_URL; ?>orders" ><i class="ic-ship current"></i><?php echo __('My Sales'); ?></a></dd>
	        </dl>
	        
	        
	        <dl class="set_menu">
				<dt><?php echo __('SHARING');?></dt>
           		 <dd><a  href="<?php echo SITE_URL; ?>credits" ><i class="ic-pur"></i> <?php echo __('Credits');?></a></dd>
       			 <dd><a  href="<?php echo SITE_URL; ?>referrals" ><i class="ic-pur"></i> <?php echo __('Referrals');?></a></dd>
     			 <dd><a  href="<?php echo SITE_URL; ?>gift_cards" ><i class="ic-pur"></i> <?php echo __('Gift card');?></a></dd>
	        </dl>
			
		</div>
				
			<footer id="footer">
		<!-- <a href="https://twitter.com/markitkw" class="follow-twitter">Follow on Twitter</a> -->
		<hr>
		<ul class="footer-nav">
			<li><a href="<?php //echo SITE_URL.'help'; ?>"><!-- Help --></a></li>
			<li><a href="<?php //echo SITE_URL.'help'; ?>/contact"><!-- Contact --></a></li>
			<li><a href="<?php //echo SITE_URL.'help'; ?>/terms_service"><!-- Terms --></a></li>
		</ul>
		<!-- / footer-nav -->
	</footer>
			
</div>	

<script>

setTimeout(function(){$('#flashmsg').fadeOut();}, 2000);

</script>
