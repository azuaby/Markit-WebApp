<div id="container-wrapper">
	<div class="container timeline vertical">	
	<?php 	
	$roundProf = "";
	if ($profileImgStyle == "round") {
		$roundProf = "border-radius:40px;";	
	}
	 ?>	
		<div class="wrapper-content" style="background:none;">
			
				

		<div id="content" >
		<ol class="stream">
			<?php
		  
	
		 
		if(!empty($items_data)){
			
			foreach($items_data as $key=>$itms){
				$usercmntcount='';
				$itm_id = $itms['Item']['id'];
				$user_id = $itms['Item']['user_id'];
				$item_title_url = $itms['Item']['item_title_url'];
				$item_title = $itms['Item']['item_title'];
				$item_price = round($itms['Item']['price'] * $_SESSION['currency_value'], 2);
				
				if(isset($itms['Photo'][0])){
					$image_name = $itms['Photo'][0]['image_name'];
				}
				$username_url = $itms['User']['profile_image'];
				$username = $itms['User']['username'];
				
				$username_url_ori = $itms['User']['username_url'];
				$favorte_count = $itms['Item']['fav_count'];
				$shop_address = $itms['Shop']['shop_address'];
				//$cdate = $itms['Item']['created_on'];
				//$cdate = UrlfriendlyComponent::txt_time_diff(strtotime($cdate));
				$item_titletwo = UrlfriendlyComponent::limit_char($item_title,16);
				echo "<div class='ui-body ui-body-a'>";
				echo  '<span imgid="'.$image_name.'"  class="big" >'; 
				echo  '<div class="figure-item">';
				
				
				$mediaul = trim($_SESSION['media_url']);
				$border = "";
				list($width, $height) = getimagesize($mediaul."media/items/thumb350/".$image_name);
				list($width_ori, $height_ori) = getimagesize($mediaul."media/items/original/".$image_name);
				//list($width, $height) = getimagesize($_SESSION['media_url']."media/items/thumb350/".$image_name);
				echo  "<a href='".SITE_URL."mobile/listing/".$itm_id."/".$item_title_url."' alt='".$item_title."'  title ='".$item_title."' class='figure-img' id='img_id".$itms['Item']['id']."'>";
				echo  "<span class='figure grid' style='background-size:cover' data-ori-url='".$_SESSION['media_url']."media/items/original/".$image_name."' data-310-url='".$_SESSION['media_url']."media/items/thumb350/".$image_name."' ><em class='back'></em></span>";
				
				echo "<div class='userimagesthirtyfive'>";
				echo '<div style="with:98%!important;padding:5px;height:45px;">
				<div style="width:70%;float:left;">';
				//echo "<table width='100%'><thead><tr><th width='5%'></th><th width='20%'></th><th width='70%'></th></tr></thead><tbody><tr><td>";
			if(!empty($username_url)){
					
					echo  "<a href='".SITE_URL."mobile/people/".$username_url_ori."' class='userv vcard'>
					<img src='".$_SESSION['media_url']."media/avatars/thumb70/".$username_url."' style='".$roundProf."'></a>
					<a href='".SITE_URL."mobile/people/".$username_url_ori."' class='userv vcard' style='text-decoration:none;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;width:120px;font-size: 11px;position: relative; left:7px;top: -10px;font-weight:normal!important;color:#979797!important;'>
					<i class='arrow-sml' style='margin-top: 17px;'>$username</i>
					<br />
						
					</a>";
					//echo '<small id="font_s_time">'.UrlfriendlyComponent::txt_time_diff($cdate).'</small>';
				}else{
					
					echo  "<a href='".SITE_URL."mobile/people/".$username_url_ori."' class='userv vcard'>
					<img src='".$_SESSION['media_url']."media/avatars/thumb70/usrimg.jpg' style='".$roundProf."'></a>
					<a href='".SITE_URL."people/".$username_url_ori."' class='userv vcard' style='text-decoration:none;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;width:120px;font-size: 11px;position: relative; left:7px;top: -10px;font-weight:normal!important;color:#979797!important;'>
					<i class='arrow-sml' style='margin-top: 17px;'>$username</i>
					<br />
					</a>";
					}
					
					echo  "<a style='text-decoration:none;margin-top:-55px;font-weight: bold ! important;float:left;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;position: relative; left:80px;color: #373D48;width:120px;font-size:15px;' href='".SITE_URL."mobile/listing/".$itm_id."/".$item_title_url."' alt='".$item_title."'  title ='".$item_title."' class='titleforitm'>".$item_titletwo."</a>";
					echo '</div> <div style="width:28%;float:left;text-align:right;">';
					echo "<div style='font-weight:bold;margin-top:5px;'>
                            <b style='color:#969696!important;'> ".$_SESSION['currency_symbol'].$item_price."</b></div>";
					echo '</div></div>';
					echo  '</div>';
					//echo '<a data-ajax="false" id="mdd722" onclick="itemcou1(722);" style="margin-left:10px;" class="fantacy ui-link"><img src="http://www.simplit.co/dev/mobilefantacy/mobile/fantacybtn.png"></a>';
				
				echo  '<span class="figure classic">';
				echo  '<em class="back"></em>';
				if ($height_ori < 640){
					$border = "border-radius:0;";
				}
				echo  "<center><a href='".SITE_URL."mobile/listing/".$itm_id."/".$item_title_url."' alt='".$item_title."'  title ='".$item_title."' class='titleforitm'> 
				<img src='".$_SESSION['media_url']."media/items/original/".$image_name."' align='center' style='background:#F9F9F9;".$border."' ></a></center>";
				echo  '</span>';
				
								
				echo  '<span class="figure vertical">';
				
				//echo  "<img src='".$_SESSION['media_url']."media/items/thumb350/".$image_name."' style='background:#F9F9F9;' data-height=".$height." data-width=".$width.">";
				echo  '</span>';
				echo  '<span class="figcaption" id="figcaption_titles'.$itms['Item']['id'].'" figcaption_title ="'.$item_title.'" ></span>';
				echo  '</a>';
				echo  '<em class="figure-detail back">';
				echo  '<span class="price" id="price_vals'.$itms['Item']['id'].'" price_val="'.$item_price.'" > </span>';
				echo  '<span class="username"><em><i> &nbsp; &nbsp;</i><a href="'.SITE_URL."people/".$username_url_ori.'"  id="user_n'.$itms['Item']['id'].'" usernameval ="'.$username.'"> </a>   <span class="fav_count" id="fav_count'.$itms['Item']['id'].'" fav_counts ="'.$favorte_count.'" ></em></span>';
				echo  '</em>';
				
				
				
				
				foreach($itms['Itemfav'] as $useritemfav){
					if($useritemfav['user_id'] == $userid ){
						$usecoun[] = $useritemfav['item_id'];
					}
				}
				
				foreach($itms['Comment'] as $usrcmnts){
					$usercmntcount[] = $usrcmnts['id'];					
				}
				echo '<div>
				<div style="width:70%;float:left;">';
				if(isset($itms['Itemfav'][0]['user_id']) && isset($usecoun) && in_array($itm_id,$usecoun)){
				echo  '<a class="button fantacyd" style="cursor:default;background-color:#FFFFFF;font-size: 15px;
    padding: .45em 10px .4em;" iteid="'.$itms['Item']['id'].'" onclick = "itemcou1('.$itms['Item']['id'].');"  id="dd'.$itms['Item']['id'].'" >
    <span class="ui-body ui-body-a" style="width:85px;"><span id="spandd'.$itms['Item']['id'].'" >
    <img border="1" src="'.SITE_URL.'images/logo/'.$setngs[0]['Sitesetting']['site_likebtn_logo'].'" style="margin: -4px;"></span> 
    <span style="margin-left:4px;" class="itemdd'.$itms['Item']['id'].'" id="faval'.$itms['Item']['id'].'">'.$setngs[0]['Sitesetting']['liked_btn_cmnt'].'</span>
    <input type="hidden" value="'.$setngs[0]['Sitesetting']['liked_btn_cmnt'].'">
    </span></a>';
				}else{
				echo  '<a class="button fantacy" style="cursor:default;background-color:#FFFFFF;font-size: 15px;
    padding: .45em 10px .4em;" onclick = "itemcou1('.$itms['Item']['id'].');"  id="dd'.$itms['Item']['id'].'" >
    <span class="ui-body ui-body-a" style="width:85px;"><span id="spandd'.$itms['Item']['id'].'">
    <img src="'.SITE_URL.'images/logo/'.$setngs[0]['Sitesetting']['site_likebtn_logo'].'" style="margin: -4px;"></span>
     <span style="margin-left:4px;" class="itemdd'.$itms['Item']['id'].'" id="faval'.$itms['Item']['id'].'">'.$setngs[0]['Sitesetting']['like_btn_cmnt'].'</span>
     <input type="hidden" value="'.$setngs[0]['Sitesetting']['like_btn_cmnt'].'">
     </span></a>';
				}
				echo '</div> <div style="width:28%;float:left;text-align:right;">';
				echo '<span class="fav_count" id="fav_count'.$itms['Item']['id'].'" fav_counts ="'.$favorte_count.'" style="margin-right:-25px;float:right;margin-top:20px;">
				<span class="ui-body ui-body-a" style="width:30px;"><img src="/fantacy/images/menu/icon-comment.png"> '.$favorte_count.'</span></span>';
				?>
				
				
<?php 

				
				
								echo '</div></div>';
			
				
					
				
				
			

				echo  '</div>';
			echo  '</span>';
			echo '</div><br />';
			}	
			}else{
				echo "<center>No Items Found</center>";
			}
		?>


		</ol>
	
			
			<div id="infscr-loading" style="display:none;text-align:center;">
					<img alt='Loading...' src="<?php echo SITE_URL; ?>img/loading.gif">
				</div>
			
				<div id="index-loading" style="display:none;line-height:34;text-align:center;min-height:600px;">
					<img alt='Loading...' src="<?php echo SITE_URL; ?>images/loading.gif">
					<!--span class="loading">Loading...</span-->
				</div>

		</div>
		<!-- / content 

		<a href="#header" id="scroll-to-top"><span>Jump to top</span></a>
-->
	</div>
	<!-- / container -->
</div>

<!-- popups -->
<div id="popup_container" style="display:none;">



<!-- slideshow_box -->
 <section id="slideshow-box" tabindex="0">
	<header>
		<div class="container">
			<a href="<?php echo SITE_URL; ?>" class="slideHeader">
				<img src="<?php echo SITE_URL.'images/logo.png'; ?>" style="width: 130px; margin-top: -4px; margin-left: -1px;">
			</a>
			<div class="controller">
				<a href="#" id="btn-browse" title="close" style="color:#fff;font-weight:bold;">x
				<!--<img src="<?php echo SITE_URL; ?>images/gclose.png"/>-->
				</a>
			</div>
		</div>
	</header>
	<div class='ui-body ui-body-a'>
		<div id="gallery" class="content">
					
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
						<div id="caption" class="caption-container"></div>
					</div>

					<div id="controls" class="controls"></div>
				</div>

				<!-- Start Advanced Gallery Html Containers -->				
				<div class="navigation-container">
					<div id="thumbs" class="navigation">
						<a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>
					
						<ul class="thumbs noscript">
							<?php
									if(!empty($items_gallery)){
										foreach($items_gallery as $key=>$itms){
											$username = $itms['User']['username'];
											$favorte_count = $itms['Item']['fav_count'];
											$itemId = $itms['Item']['id'];
											$itemTitle = $itms['Item']['item_title_url'];
											if(isset($itms['Photo'][0])){
											$image_name = $itms['Photo'][0]['image_name'];
											
								echo '<a class="thumb" href="'.$_SESSION['media_url'].'media/items/original/'.$image_name.'" title="'.$itms['Item']['item_title'].'-~_~-'.SITE_URL.'mobile/listing/'.$itemId.'/'.$itemTitle.'">';
									echo '<img src="'.$_SESSION['media_url'].'media/items/thumb70/'.$image_name.'" alt="'.$itms['Item']['item_title'].'" width="75px" height="75px"/>';
									//echo '<span style="background: url(\''.$_SESSION['media_url'].'media/items/thumb70/'.$image_name.'\');width:75px; height:75px;float:left;" />';
								echo '</a>';
								echo '<div class="caption">';
									echo '<div class="image-title"><a href="'.SITE_URL.'mobile/listing/'.$itemId.'/'.$itemTitle.'">'.$itms['Item']['item_title'].'</a></div>';
									echo '<div class="image-desc"><span class="username"><em><i>  by &nbsp;&nbsp;  </i><a href="'.SITE_URL."mobile/people/".$username.'"  id="user_n'.$itms['Item']['id'].'" usernameval ="'.$username.'">'.$username.'</a>  + <span class="fav_count" id="fav_count'.$itms['Item']['id'].'" fav_counts ="'.$favorte_count.'" >'.$favorte_count.'</em></span></div>';
								echo '</div>';
							
											
												
											}
										}
									}
							?>
							
						</ul>
						<a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
					</div>
					
				</div>
				<!--<div class="content">
					<div class="slideshow-container" style="position:relative;">
						<div id="controls" class="controls"></div>
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container">
						<div class="photo-index"></div>
					</div>
				</div>-->
					
				<!-- End Gallery Html Containers -->
				<div style="clear: both;"></div>
	</div>
	
</section>
<!-- /slideshow_box -->



<!--share-social-->
<div id="share-social" class="popup ly-title share-new"  style="margin-top: 100px; margin-left: 414px; opacity: 1; display: none;">
	 
	<p class="ltit">
		<span class="share-thing">Share This Thing</span>
	</p>
	<div class="fig">
		<span class="thum"  style="width:100px;height:100px" ><img id="thum_img" src=""></span>
		<div class="fig-info">
			<span class="figcaption"   style="font-size:20px;" id="figcaption_title_popup" > </span>
			<span class="username"  style="font-size:15px;"><b><?php echo $_SESSION['currency_symbol']; ?><span id="username_popup" ></span></b>, By  <span id="usernames_popup" ></span> + <span id="fav_countsvv" ></span>&nbsp; Others</span>
			<h4>dsasas</h4><p class="from">qq</p>
		</div>
		
		
		
		
		
	</div>
	<div class="share-via">
		<ul class="less">
		
		
			
			<li><a style="float: left;margin-left: 5px;" class='facebook' href="" alt="Share this on facebook"  title="Facebook"  onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');"><img src="<?php echo SITE_URL; ?>images/facebook.png"></a> </li>
			<li><a style="float: left;margin-left: 5px;" class='twitter' href="" alt="Share this on twitter"   title="Twitter"   onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');"><img src="<?php echo SITE_URL; ?>images/twittershare.png"></a></li>
			<li><a style="float: left;margin-left: 5px;" class='google'  href="" alt="Share this on Google+"  title="Google +" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');"><img src="<?php echo SITE_URL; ?>images/gshare.png"></a></li>
  			<li><a style="float: left;margin-left: 5px;" class='linkedin' href="" alt="Share this on linkedin"      title="Linkedin"    onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');" ><img src="<?php echo SITE_URL; ?>images/linkshare.png"></a></li>
 			<li><a style="float: left;margin-left: 5px;" class='stumbleupon' href="" title="Stumbleupon"  onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');" target="_blank"><img src="<?php echo SITE_URL; ?>images/stumbleupon.png"></a></li>
 			<li><a style="margin-left: 5px;"class='tumblr' href=""  title="Tumblr" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');"><img src="<?php echo SITE_URL; ?>images/tumblrshare.png"></a></li>
			
			
			
			
			
			<!--
			<li><a  href="http://www.facebook.com/sharer.php?s=100&p[title]='titlesssss'&p[summary]=' + encodeURIComponent('description here') + '&p[url]=' + encodeURIComponent('http://www.nufc.com') + '&p[images][0]='http://cf1.thingd.com/default/179335694966068439_d27b575231de.jpeg.small.jpeg')" >Fb Share</a> </li>
			
			-->
			
			
			
			
		</ul>
		<a href="#" class="show"><i class="arrow"></i></a>
	</div>
		
	<button type="button" class="ly-close" title="Close" id="btn_close_share"><img src="<?php echo SITE_URL.'images/closebt.png'; ?>" ></button>
	
	
</div>
<!--/share-social-->





</div>
<!-- /popups -->




<script>



jQuery(function($){
	$('a.more').mouseover(function(){$('.sns-minor').show();return false;});
	$('a.more').click(function(){
		$('.sns-minor').toggleClass('toggle');
	});
	$('.sns-minor .trick').click(function(){
		$('.sns-minor').removeClass('toggle');
		return false;
	});
	$('.sns-major').mouseover(function(){$('.sns-minor').hide();return false;});
	$('.sns-minor').mouseover(function(){if ($(this).hasClass('toggle')==false) $(this).hide();});
});
</script>
<div id="fb-root"></div>



<script>


jQuery(function($){
	
    /* $('ol.stream')
        .delegate('div.figure-item > a', 'click', function(){
            var url = $(this).parent().find('a[rel]').attr('href');
            //alert(url.val());
            $('#fancy-g-signin').attr('next', url);
            $social = $('.social');
            if ($social.length > 0) {
                 $social.attr('next', url);
            }
            $(".popup.signin-overlay")
                .find('input.next_url').val(url).end()
                .find('a.signup').attr('href','/register?next='+url).end()
                .find('a.signin').attr('href','/login?next='+url);
            $.dialog('signin-overlay').open();
            return false;
        });*/
    });



	
	
	var sIndex = 20, offSet = 10, isPreviousEventComplete = true, isDataAvailable = true;
	var followid = 0, loadmoretab = 'all';
var baseurl = getBaseURL();

$(window).scroll(function () {alert(sIndex);
 //if ($(document).height() - 50 <= $(window).scrollTop() + $(window).height()) {
	if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.5) {	 
  if (isPreviousEventComplete && isDataAvailable) {

    isPreviousEventComplete = false;
    $(".LoaderImage").css("display", "block");

    $.ajax({
      type: "GET",
      url: baseurl+'mobile/getMorePosts?startIndex=' + sIndex + '&offset=' + offSet + '&followid='+followid+'&loadmoretab='+loadmoretab,
      beforeSend: function () {
			$('#infscr-loading').show();
		},
	  dataType: 'html',
      success: function (result) {
      	$('#infscr-loading').hide();
      	var out = result.toString();
      	if (out != 'false') {//When data is not available
        	$(".stream").append(result);
        	var $latest = $stream.find('>#'+latest_id).removeAttr('id'),
	 	    $first = $stream.find('>#'+first_id).removeAttr('id'),
		    $target=$(), viewMode;
		// merge sameuser thing 
		var userid = $latest.attr('auserid');
		
		var $currents = $latest.prevUntil('li[auserid!='+userid+"]");
		var $nexts = $latest.nextUntil('li[auserid!='+userid+"]");
		var $group = $($currents).add($latest).add($nexts);
		$nexts.filter(".clear").removeClass("clear").find("a.vcard").detach();
		
		
		var forceRefresh = true;

		if(!$first.length || !$latest.length) {
			$target = $stream.children('li');
		} else {
			var newThings = $first.prevAll('li');			
			if(newThings.length) forceRefresh = true;
			$target = newThings.add($latest.nextAll('li'));
		}

		$stream.find('>li:first-child').attr('id', first_id);
		$stream.find('>li:last-child').attr('id', latest_id);

	    viewMode = $container.hasClass('vertical') ? 'vertical' : ($container.hasClass('normal') ? 'grid':'classic');

		if(viewMode=='grid'){
			$target.each(function(i,v,a){
				var $li = $(this), src_g;
				var $grid_img = $li.find(".figure.grid");
				
				if($grid_img.height()>400){
					$grid_img.css("background-image", "url("+$grid_img.attr("data-ori-url")+")");					
				}else{
					$grid_img.css("background-image", "url("+$grid_img.attr("data-310-url")+")");
				}
			});
		}

		if(viewMode == 'vertical'){
			$('#infscr-loading').show();
			setTimeout(function(){
				arrange(forceRefresh);
				$('#infscr-loading').hide();
			},10);
		}
        }else {
            isDataAvailable = false;
		}
        sIndex = sIndex + offSet;
        isPreviousEventComplete = true;
      }
    });

  }
 }
 });
	
	
	
	
	(function(){

	var onMouseOutOpacity = 0.67;
	$('#thumbs ul.thumbs li, div.navigation a.pageLink').opacityrollover({
		mouseOutOpacity:   onMouseOutOpacity,
		mouseOverOpacity:  1.0,
		fadeSpeed:         'fast',
		exemptionSelector: '.selected'
	});
	var captionOpacity = 0.7;
	
	// Initialize Advanced Galleriffic Gallery
	var gallery = $('#thumbs').galleriffic({
		delay:                     2500,
		numThumbs:                 10,
		preloadAhead:              10,
		enableTopPager:            false,
		enableBottomPager:         false,
		imageContainerSel:         '#slideshow',
		controlsContainerSel:      '#controls',
		captionContainerSel:       '#caption',
		loadingContainerSel:       '#loading',
		renderSSControls:          true,
		renderNavControls:         true,
		playLinkText:              'Play Slideshow',
		pauseLinkText:             'Pause Slideshow',
		prevLinkText:              '&lsaquo; Previous Photo',
		nextLinkText:              'Next Photo &rsaquo;',
		nextPageLinkText:          'Next &rsaquo;',
		prevPageLinkText:          '&lsaquo; Prev',
		enableHistory:             true,
		autoStart:                 false,
		syncTransitions:           true,
		defaultTransitionDuration: 900,
		onSlideChange:             function(prevIndex, nextIndex) {
			// 'this' refers to the gallery, which is an extension of $('#thumbs')
			this.find('ul.thumbs').children()
				.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
				.eq(nextIndex).fadeTo('fast', 1.0);

			if (gallery){
				var ajaxpage = gallery.ajaxCurrentPage();
				var ajaxlastPage = gallery.ajaxLastPage() - 1;
				var innerPage = ajaxlastPage - ajaxpage;
				var imageCount = gallery.ajaxGetimagecount();
				if (innerPage < 2) {
					getmorepostGallery (ajaxlastPage, imageCount, gallery);
				}
			}
		},
		onTransitionOut:           function(slide, caption, isSync, callback) {
			slide.fadeTo(this.getDefaultTransitionDuration(isSync), 0.0, callback);
			caption.fadeTo(this.getDefaultTransitionDuration(isSync), 0.0);
		},
		onTransitionIn:            function(slide, caption, isSync) {
			var duration = this.getDefaultTransitionDuration(isSync);
			slide.fadeTo(duration, 1.0);
			
			// Position the caption at the bottom of the image and set its opacity
			var slideImage = slide.find('img');
			caption.width(slideImage.width())
				.css({
					'bottom' : Math.floor((slide.height() - slideImage.outerHeight()) / 2),
					'left' : Math.floor((slide.width() - slideImage.width()) / 2) + slideImage.outerWidth() - slideImage.width()
				})
				.fadeTo(duration, captionOpacity);
		},
		onPageTransitionOut:       function(callback) {
			this.fadeTo('fast', 0.0, callback);
		},
		onPageTransitionIn:        function() {
			var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
			var nextPageLink = this.find('a.next').css('visibility', 'hidden');
			
			// Show appropriate next / prev page links
			if (this.displayedPage > 0)
				prevPageLink.css('visibility', 'visible');

			var lastPage = this.getNumPages() - 1;
			if (this.displayedPage < lastPage)
				nextPageLink.css('visibility', 'visible');

			this.fadeTo('fast', 1.0);
		}
	});

	/**************** Event handlers for custom next / prev page links **********************/

	gallery.find('a.prev').click(function(e) {
		gallery.previousPage();
		e.preventDefault();
	});

	gallery.find('a.next').click(function(e) {
		gallery.nextPage();
		var ajaxpage = gallery.ajaxCurrentPage();
		var ajaxlastPage = gallery.ajaxLastPage() - 1;
		var innerPage = ajaxlastPage - ajaxpage;
		var imageCount = gallery.ajaxGetimagecount();
		if (innerPage < 2) {
			getmorepostGallery (ajaxlastPage, imageCount, gallery);
		}
		e.preventDefault();
	});

	/****************************************************************************************/

	/**** Functions to support integration of galleriffic with the jquery.history plugin ****/

	// PageLoad function
	// This function is called when:
	// 1. after calling $.historyInit();
	// 2. after calling $.historyLoad();
	// 3. after pushing "Go Back" button of a browser
	function pageload(hash) {
		// alert("pageload: " + hash);
		// hash doesn't contain the first # character.
		if(hash) {
			$.galleriffic.gotoImage(hash);
		} else {
			gallery.gotoIndex(0);
		}
	}

	// Initialize history plugin.
	// The callback is called at once by present location.hash. 
	$.historyInit(pageload, "advanced.html");

	// set onlick event for buttons using the jQuery 1.3 live method
	$("a[rel='history']").live('click', function(e) {
		if (e.button != 0) return true;

		var hash = this.href;
		hash = hash.replace(/^.*#/, '');

		// moves to a new page. 
		// pageload is called at once. 
		// hash don't contain "#", "?"
		$.historyLoad(hash);

		return false;
	});





	var $btns = $('.viewer li'), $stream = $('ol.stream'), $container=$('.container'), $wrapper = $('.wrapper-content'), first_id = 's-f_', latest_id = 's-l_';
	//alert($btns.val());
	$stream.data('feed-url', '/');
	
	// show images as each image is loaded
	$stream.on('itemloaded', function(){
		
		var $latest = $stream.find('>#'+latest_id).removeAttr('id'),
	 	    $first = $stream.find('>#'+first_id).removeAttr('id'),
		    $target=$(), viewMode;
		// merge sameuser thing 
		var userid = $latest.attr('auserid');
		
		var $currents = $latest.prevUntil('li[auserid!='+userid+"]");
		var $nexts = $latest.nextUntil('li[auserid!='+userid+"]");
		var $group = $($currents).add($latest).add($nexts);
		$nexts.filter(".clear").removeClass("clear").find("a.vcard").detach();
		if($group.length>2){
			$group.removeClass("big mid").addClass("sm").each(function(i){
				if(i%3==0) $(this).addClass("clear");
			});

			if($group.length%3==2){
				$group.last().removeClass("sm").addClass("mid").prev().removeClass("sm").addClass("mid");
			}else if($group.length%3==1){
				$group.last().removeClass("sm").addClass("big");
			}
		}else if($group.length==2){
			$group.removeClass("big").addClass("mid");
		}
		
		var forceRefresh = true;

		if(!$first.length || !$latest.length) {
			$target = $stream.children('li');
		} else {
			var newThings = $first.prevAll('li');			
			if(newThings.length) forceRefresh = true;
			$target = newThings.add($latest.nextAll('li'));
		}

		$stream.find('>li:first-child').attr('id', first_id);
		$stream.find('>li:last-child').attr('id', latest_id);

	    viewMode = $container.hasClass('vertical') ? 'vertical' : ($container.hasClass('normal') ? 'grid':'classic');

		if(viewMode=='grid'){
			$target.each(function(i,v,a){
				var $li = $(this), src_g;
				var $grid_img = $li.find(".figure.grid");
				
				if($grid_img.height()>400){
					$grid_img.css("background-image", "url("+$grid_img.attr("data-ori-url")+")");					
				}else{
					$grid_img.css("background-image", "url("+$grid_img.attr("data-310-url")+")");
				}
			});
		}

		if(viewMode == 'vertical'){
				//arrange(forceRefresh);
			$('#infscr-loading').show();
			setTimeout(function(){
				arrange(forceRefresh);
				$('#infscr-loading').hide();
			},10);
		}

	});
	$stream.trigger('itemloaded');
	
	
	$btns.each(function(){
		var $tip = $(this).find('span');
		$tip.css('margin-left', -$tip.width()/2 - 8 + 'px');
	});
	
	$(window).resize(function() {
		$btns.each(function(){
		var $tip = $(this).find('span');
		$tip.css('margin-left', -$tip.width()/2 - 8 + 'px');
	});
	});
	
	$('.btn-slideshow').click(function(){
	$('#popup_container').show();
	$('#popup_container').css({"opacity":"1"});
	$('#slideshow-box').show();
	$('#add-to-list-new').hide();
			// We only want these styles applied when javascript is enabled
			$('div.content').css('display', 'block');
			
			var slideImage = $('#slideshow img');
			var slide = $('.slideshow-container');
		$('.image-caption').width(slideImage.width());
		$('.image-caption').css({
				'bottom' : Math.floor((slide.height() - slideImage.outerHeight()) / 2),
				'left' : Math.floor((slide.width() - slideImage.width()) / 2) + slideImage.outerWidth() - slideImage.width()
			});
			var screenSize = screen.height;
	
		if (screenSize > 768) {
			screenSize = (screenSize - 768)/2 + 'px';
			$('#slideshow-box .contant').css({ 'margin-top' : screenSize })
		}
	});
	
	$(document).keydown(function(e) {
		var keycode = e.keyCode;
		
		if (keycode == 27) {
			$('#popup_container').hide();
			$('#popup_container').css({"opacity":"0"}); 
			$('#slideshow-box').hide();
			$('.btn-slideshow').removeClass('current');
		}
	});
	
    $('#btn-browse').click(function(){
		$('#popup_container').hide();
		$('#popup_container').css({"opacity":"0"}); 
		$('#slideshow-box').hide();
		$('.btn-slideshow').removeClass('current');
    });
    
    $('#btn-browses').click(function(){
		$('#popup_container').hide();
		$('#popup_container').css({"opacity":"0"});
		
    });
	
	$('#btn_close_share').click(function(){
		$('#popup_container').hide();
		$('#popup_container').css({"opacity":"0"});
		$('#share-social').hide();
		$('.share-thing').hide();
		
    });
	
	
	$btns.click(function(event){
		event.preventDefault();
		if($wrapper.hasClass('anim')) return;
		
		var $btn = $(this);

		// hightlight this button only
		$btns.find('a.current').removeClass('current');
		$btn.find('a').addClass('current');
		
		if(/\b(normal|vertical|classic)\b/.test($btn.attr('class'))){
			setView(RegExp.$1);
		}
	});

	$wrapper.on('redraw', function(event){
		var curMode = '';
		if(/\b(normal|vertical|classic)\b/.test($container.attr('class'))) curMode = RegExp.$1;
		if(curMode) setView(curMode, true);
	});

	function setView(mode, force){
		if(!force && $container.hasClass(mode)) return;
		var $items = $stream.find('>li');

		if($items.length>100){
			$items.filter(":eq(100)").nextAll().detach();			
		}

		if(!window.Modernizr || !Modernizr.csstransitions ){
			$stream.addClass('loading');
			$wrapper.trigger('before-fadeout');
			$stream.removeClass('loading');

			$wrapper.trigger('before-fadein');
			switchTo(mode);	

			if(mode=='normal'){
					//alert('mod1212');
			
				$items.each(function(i,v,a){
					var $li = $(this);
					var $grid_img = $li.find(".figure.grid");
					//alert($li.height());
					//$li.css("left","0");
					if($li.height()>400){
						$grid_img.css("background-image", "url("+$grid_img.attr("data-ori-url")+")");					
					}else{
						$grid_img.css("background-image", "url("+$grid_img.attr("data-310-url")+")");
					}
				});
			}
			
			$stream.find('>li').css('opacity',1);
			//$stream.find('>li').css('left',0);
			$wrapper.trigger('after-fadein');
			return;
		} 

		$wrapper.trigger('before-fadeout').addClass('anim');
		$stream.addClass('loading');

		var item,
		    $visibles, visibles = [], prevVisibles, thefirst, 
		    offsetTop = $stream.offset().top,
		    hh = $('#header-new').height(),
		    sc = $(window).scrollTop(),
		    wh = $(window).innerHeight(),
			f_right, f_bottom, v_right, v_bottom,
			i, c, v, d, animated = 0;
//alert();
		// get visible elements
		for(i=0,c=$items.length; i < c; i++){
			item = $items[i];
			if (offsetTop + item.offsetTop + item.offsetHeight < sc + hh) {
				//item.style.visibility = 'hidden';
			} else if (offsetTop + item.offsetTop > sc + wh) {
				//item.style.visibility = 'hidden';
				break;
			} else {
				visibles[visibles.length] = item;
			}
		}
		prevVisibles = visibles;

		// get the first animated element
		for(i=0,c=Math.min(visibles.length,10),thefirst=null; i < c; i++){
			v = visibles[i];
			
			if( !thefirst || (thefirst.offsetLeft > v.offsetLeft) || (thefirst.offsetLeft == v.offsetLeft && thefirst.offsetTop > v.offsetTop) ) {
				thefirst = v;
			}
		}

		if(visibles.length==0) fadeIn();
		// fade out elements using delay based on the distance between each element and the first element.
		for(i=0,c=visibles.length; i < c; i++){
			v = visibles[i];

			d = Math.sqrt(Math.pow((v.offsetLeft - thefirst.offsetLeft),2) + Math.pow(Math.max(v.offsetTop-thefirst.offsetTop,0),2));
			delayOpacity(v, 0, d/5);

			if(i == c -1){
				setTimeout(fadeIn,300+d/5);
			}
		}

		function fadeIn(){
			$wrapper.trigger('before-fadein');

			if($wrapper.hasClass("wait")){
				setTimeout(fadeIn, 50);
				return;
			}

			var i, c, v, thefirst, COL_COUNT, visibles = [], item;
			
			if($items.length !== $stream.get(0).childNodes.length || $items.get(0).parentNode !== $stream.get(0)) $items = $stream.find('>li');
			$stream.height($stream.parent().height());
			
			switchTo(mode);

			if(mode=='normal'){
			//alert($items.length);
				$items.each(function(i,v,a){
					var $li = $(this);
					$li.css({top:0, left:6})
					
					var $grid_img = $li.find(".figure.grid");
					
					if($li.height()>400){
						$grid_img.css("background-image", "url("+$grid_img.attr("data-ori-url")+")");					
					}else{
						$grid_img.css("background-image", "url("+$grid_img.attr("data-310-url")+")");
					}
				});
			}

			$stream.removeClass('loading');
			$wrapper.removeClass('anim');

			// get visible elements
			for(i=0,c=$items.length; i < c; i++){
				item = $items[i];
				if (offsetTop + item.offsetTop + item.offsetHeight < sc + hh) {
					//item.style.visibility = 'hidden';
				} else if (offsetTop + item.offsetTop > sc + wh) {
					//item.style.visibility = 'hidden';
					break;
				} else {
					visibles[visibles.length] = item;
					item.style.opacity = 0;
				}
			}
			
			$wrapper.addClass('anim');

			$(visibles).css({opacity:0,visibility:''});
			COL_COUNT = Math.floor($stream.width()/$(visibles[0]).width());

			// get the first animated element
			for(i=0,c=Math.min(visibles.length,COL_COUNT),thefirst=null; i < c; i++){
				v = visibles[i];
				
				if( !thefirst || (thefirst.offsetLeft > v.offsetLeft) || (thefirst.offsetLeft == v.offsetLeft && thefirst.offsetTop > v.offsetTop) ) {
					thefirst = v;
				}
			}

			// fade in elements using delay based on the distance between each element and the first element.
			if(visibles.length==0) done();
			for(i=0,c=visibles.length; i < c; i++){
				v = visibles[i];

				d = Math.sqrt(Math.pow((v.offsetLeft - thefirst.offsetLeft),2) + Math.pow(Math.max(v.offsetTop-thefirst.offsetTop,0),2));
				delayOpacity(v, 1, d/5);

				if(i == c -1) setTimeout(done, 300+d/5);
			}
		};

		function done(){
			$wrapper.removeClass('anim');
			/*if(prevVisibles && prevVisibles.length) {
				for(var i=0,c=visibles.length; i < c; i++){
					if(visibles[i].style.opacity == '0') visibles[i].style.opacity = 1;
				}
			}*/
			$stream.find('>li').css('opacity',1);
			$wrapper.trigger('after-fadein');
		};
		
		function delayOpacity(element, opacity, interval){
			setTimeout(function(){ element.style.opacity = opacity }, Math.floor(interval));
		};
		
		function switchTo(mode){
			var currentMode = $container.hasClass('vertical')?'vertical':($container.hasClass('classic')?'classic':'normal')
			$container.removeClass('vertical normal classic').addClass(mode);
			if(mode == 'vertical') {
			//alert('ddd');
				arrange(true);
				$.infiniteshow.option('prepare',2000);
			} else {
				$stream.css('height','');
				$.infiniteshow.option('prepare',4000);
			}
			if($.browser.msie) $.infiniteshow.option('prepare',1000);
			$.cookie.set('timeline-view',mode,9999);
		};

	};
	
	var bottoms = [0,0,0,0];
	function arrange(force_refresh){
		$('.stream').show();
		var i, c, x, w, h, nh, min, $target, $marker, $first, $img, COL_COUNT, ITEM_WIDTH;

		var ts = new Date().getTime();
		$marker = $stream.find('li.page_marker_');
		
		if(force_refresh || !$marker.length) {
			force_refresh = true;
			bottoms = [0,0,0,0];
			$target = $stream.children('li');
		} else {
			$target = $marker.nextAll('li');
		}

		if(!$target.length) return;

		$first = $target.eq(0);
		$target.eq(-1).addClass('page_marker_');
		$marker.removeClass('page_marker_');
			
		//ITEM_WIDTH  = parseInt($first.width());
		//COL_COUNT   = Math.floor($stream.width()/ITEM_WIDTH);
		ITEM_WIDTH = 255;
		COL_COUNT = 4;
		
		for(i=0,c=$target.length; i < c; i++){
			min = Math.min.apply(Math, bottoms);			

			for(x=0; x < COL_COUNT; x++) if(bottoms[x] == min) break;

			//$li = $target.eq(i);
			$li = $($target[i]);
			$img = $li.find('.figure.vertical > img');
			if(!(nh = $img.attr('data-calcHeight'))){
				w = +$img.attr('data-width');
				h = +$img.attr('data-height');

				if(w && h) {
					nh = $img.width()/w * h;
					//nh = 210/w * h;
					nh = Math.max(nh,150);
					$img.attr('height', nh).data('calcHeight', nh);
				}else{
					nh = $img.height();
				}
			}
			

			if (i < 24) {
			$li.css({top:bottoms[x], left:x*ITEM_WIDTH})
			}else {
			bottoms[x] += 2;
			$li.css({top:bottoms[x], left:x*ITEM_WIDTH});
			}


			//$li.css({top:bottoms[x], left:x*ITEM_WIDTH})
			bottoms[x] = bottoms[x] + nh + 58;
		}
		
		$stream.height(Math.max.apply(Math, bottoms));	
		
	};
	$wrapper.on('arrange', function(){ arrange(true); });

	$notibar = $('.new-content');
	$notibar.off('click').on('click', function(){
		setTimeout(function(){
		    $.jStorage.deleteKey("fancy.prefetch.stream");
		    $.jStorage.deleteKey("first-featured");
		    $.jStorage.deleteKey("first-all");
		    $.jStorage.deleteKey("first-following");
			$stream.trigger('itemloaded');	

			if( $container.hasClass("normal") ){					
				$stream.find("li").each(function(i,v,a){
					var $li = $(this), src_g;
					var $grid_img = $li.find(".figure.grid");

					if($grid_img.height()>400){
						$grid_img.css("background-image", "url("+$grid_img.attr("data-ori-url")+")");
					}else{
						$grid_img.css("background-image", "url("+$grid_img.attr("data-310-url")+")");
					}
				});
			}		
		},100);
	});

	// feed selection
	var $feedtabs = $('.sorting a[data-feed]');	
	var init_ts = $stream.attr("ts");
	var ttl  = 5 * 60 * 1000;

	$feedtabs.click(function(e){
		var tab = $(e.target).data("feed")||"featured";
		switchTab(tab);
		e.preventDefault();
	});

	function switchTab(tab){
		$.jStorage.deleteKey("fancy.prefetch.stream");
		$feedtabs.removeClass("current");
		var $currentTab = $feedtabs.filter("a[data-feed="+tab+"]").addClass("current");
		$url = $('a.btn-more').hide();
		$win = $(window);

		var result = null;
		$wrapper.addClass("wait");	
		// hide notibar if it showing
		$notibar.hide();
		$stream.attr('ts','').data('feed-url', '/user-stream-updates?new-timeline&feed='+tab);
		var loc = tab;
		var keys = {
			timestamp : 'fancy.home-new.timestamp.'+loc,
			stream  : 'fancy.home-new.stream.'+loc,
			latest  : 'fancy.home-new.latest.'+loc,
			nextURL : 'fancy.home-new.nexturl.'+loc
		};
		var baseurl = getBaseURL();
		if(!(result=$.jStorage.get('first-'+tab))){			
			$.ajax({
				url : baseurl+'mobile/changeTab?feed='+tab,
				dataType : 'html',
				beforeSend : function () {
					$(".stream").fadeOut("fast");
					$('#index-loading').show();
				},
				success : function(data, st, xhr) {
					var out = eval(data);
					if (tab == 'following') {
						followid = out[1];
						loadmoretab = tab;
					}else {
						followid = 0;
						loadmoretab = tab;
					}
					$(".stream").html(out[0]);
					$('#index-loading').hide();
					$(".stream").fadeIn(3000);
					$wrapper.removeClass("wait");
					$wrapper.removeClass("swapping");
					var done = function(){
						setTimeout(function(){$('#content ol.stream > li').css('opacity',1)},1000);
					}
					$stream.trigger("changeloc");
					$wrapper.off('before-fadein').on('before-fadein');				
					$wrapper.trigger("redraw");
					$wrapper.off('after-fadein').on('after-fadein', done);
					$.cookie.set('timeline-feed',tab,9999);
					sIndex = 20; offSet = 10; isPreviousEventComplete = true; isDataAvailable = true;
					//result = data;
					//$.jStorage.set('first-'+tab, result, {TTL:5*60*1000});
				},
				error : function(xhr, st, err) {
					url = '';
				},
				complete : function(){
				}
			});
		}
	}

	$stream.on('changeloc',function(){
		$stream.attr("loc", ($feedtabs.filter(".current").attr("data-feed")||"featured") );
	})

	if("vertical"=="normal"){
		$wrapper.trigger("arrange");		
	}
	$(window).trigger("prefetch.infiniteshow");

	$stream.delegate('.figure-item',"mouseover",function(){
		if ($(this).parents('.timeline').hasClass('classic')==true) {
			var bordertopl, bordertopr;
			if ($(this).find('.figure.classic img').width() < 640){
				bordertopl = "0px";
				bordertopr = "0px";
			}else{
				bordertopl = "4px";
				bordertopr = "4px";
			}
			$(this).find('.figure.classic .back')
				.width($(this).find('.figure.classic img').width())
				.height($(this).find('.figure.classic img').height())
				.css('margin-left',-($(this).find('.figure.classic img').width()/2)+'px')
				.css('margin-top',-($(this).find('.figure.classic img').height()/2)+'px')
				.css('left','50%')
				.css('top','50%')
				.css('border-top-left-radius',bordertopl)
				.css('border-top-right-radius',bordertopr)
			.end();
			//$(this).find('.price').css('margin-top',($(this).find('.figure.classic').height()-$(this).find('.figure.classic img').height())/2+'px').css('margin-left',($(this).find('.figure.classic').width()-$(this).find('.figure.classic img').width())/2+'px');
			$(this).find('.shareli').css('margin-top',($(this).find('.figure.classic').height()-$(this).find('.figure.classic img').height())/2+'px').css('margin-right',($(this).find('.figure.classic').width()-$(this).find('.figure.classic img').width())/2+'px');
			$(this).find('.heartli').css('margin-top',($(this).find('.figure.classic').height()-$(this).find('.figure.classic img').height())/2+'px').css('margin-left',($(this).find('.figure.classic').width()-$(this).find('.figure.classic img').width())/2+'px');
			}else{
			$(this).find('.figure.classic .back').removeAttr('style').end()
			.find('.price').removeAttr('style').end()
			.find('.figure.classic .share').removeAttr('style');
		}
	});
})();

	$.infiniteshow({
		itemSelector:'#content ol.stream > li',
		streamSelector:'#content ol.stream',
		dataKey:'home-new',
		post_callback: function($items){ $('ol.stream').trigger('itemloaded') },
		prefetch:true,
		
		newtimeline:true
	})
	if($.browser.msie) $.infiniteshow.option('prepare',1000);

</script>
<?php

echo '<input type="hidden" id="likebtncnt" value="'.$setngs[0]['Sitesetting']['like_btn_cmnt'].'" />';
echo '<input type="hidden" id="likedbtncnt" value="'.$setngs[0]['Sitesetting']['liked_btn_cmnt'].'" />';

if(!empty($loguser)){
	echo "<input type='hidden' id='loguserid' value='".$loguser[0]['User']['id']."' />";
}else{
	echo "<input type='hidden' id='loguserid' value='0' />";
}
?>
