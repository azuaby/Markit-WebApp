 <?php echo $this->element('emailHeader'); ?>  
				<table cellpadding="0" cellspacing="0" border="0" align="center" width="650" style="font-family: Georgia, serif; background: #fff;" bgcolor="#ffffff">
			      <tr>
			        <td width="14" style="font-size: 0px;" bgcolor="#ffffff">&nbsp;</td>
					<td width="620" valign="top" align="left" bgcolor="#ffffff"style="font-family: Georgia, serif; background: #fff;">
						<table cellpadding="0" cellspacing="0" border="0"  style="color: #717171; font: normal 11px Georgia, serif; margin: 0; padding: 0;" width="620" class="content">
						<!-- <tr>
							<td style="padding: 25px 0 5px; border-bottom: 2px solid #d2b49b;font-family: Georgia, serif; "  valign="top" align="center">
								<h3 style="color:#767676; font-weight: normal; margin: 0; padding: 0; font-style: italic; line-height: 13px; font-size: 13px;">~ <currentmonthname> <currentday>, <currentyear> ~</h3>
							</td>
						</tr> -->
						<tr>
							<td style="padding: 25px 0 0;" align="left">			
								<h2 style="color:#8598a3; font-weight: normal; margin: 0; padding: 0; font-style: italic; line-height: 30px; font-size: 30px;font-family: Georgia, serif; "> Hi, <?php echo $name; ?></h2>
							</td>
						</tr>
						
							<tr>
								<td style="padding: 15px 0 45px;"  valign="top">
									<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 12px;font-family: Georgia, serif; ">
											<?php 
											$usrimg = $cmntUser['User']['profile_image'];
											if(!empty($usrimg)){
											echo "<img id='show_url'  style='float: left;width: 70px;height:70px; border: 1px solid rgb(221, 221, 221); padding: 5px; border-radius: 3px 3px 3px 3px;' src='".$_SESSION['media_url']."media/avatars/thumb70/".$usrimg."'>";
											}else{
											echo "<img id='show_url'  style='float: left;width: 70px;height:70px; border: 1px solid rgb(221, 221, 221); padding: 5px; border-radius: 3px 3px 3px 3px;' src='".$_SESSION['media_url']."media/avatars/original/usrimg.jpg'>";
											}
											
											?>
									</p>
									<br>
									<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 12px;font-family: Georgia, serif; ">
											<?php echo $cmntUser['User']['username']; ?> is commented on your post  on <b> <?php echo ucwords(strtolower($setngs[0]['Sitesetting']['site_name'])); ?></b><br clear="all" />
											<?php echo $getcmntbydate['comments']; ?>
									</p>
								
								</td>
							</tr>			
							
							<tr>
								<td style="padding: 15px 0 45px;"  valign="top">
									<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 12px;font-family: Georgia, serif; ">
										By Team,
										<br />
										<b><?php echo ucwords(strtolower($setngs[0]['Sitesetting']['site_name'])); ?>.</b>
									</p>
									<br>
								</td>
							</tr>
						</table>	
					</td>
					<td width="16" bgcolor="#ffffff" style="font-size: 0px;font-family: Georgia, serif; background: #fff;">&nbsp;</td>
			      </tr>
				</table><!-- body -->
				  <?php echo $this->element('emailFooter'); ?>  
		  	</td>
		</tr>
    </table>
  </body>
</html>
<?php //die; ?>