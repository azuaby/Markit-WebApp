<style>
body{
	margin:0px;
}
.file-holder .file-input-area {
	
    cursor: pointer;
    /* left: -137px; */
    left: -86px;
    margin: 0;
    position: absolute;
	top: 0;
    z-index: 3;
	height:32px;	
}
.file-holder1 .file-input-area1 {	
    cursor: pointer;
    /* left: -137px; */
    left: -140px;
    margin: 0;
    position: absolute;
	top: 0;
    z-index: 3;
	height:32px;	
}
.btn {
    -moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #F5F5F5;
    background-image: -moz-linear-gradient(center top , #FFFFFF, #E6E6E6);
    background-repeat: repeat-x;
    border-color: #E6E6E6 #E6E6E6 #B3B3B3;
    border-radius: 4px 4px 4px 4px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
    color: #333333;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    height: 30px;
    line-height: 18px;
    margin-bottom: 0;
    margin-top: 5px;
    padding: 4px 1px;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
	width: 118px !important;
}
.btn:hover {
  color: #333333;
  text-decoration: none;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
  /* Buttons in IE7 don't get borders, so darken on hover */

  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
     -moz-transition: background-position 0.1s linear;
      -ms-transition: background-position 0.1s linear;
       -o-transition: background-position 0.1s linear;
          transition: background-position 0.1s linear;
}
#iform{
	margin:0px;
}
</style>
<?php
//$site_url = 'http://fancyclone.net/demo/';
/* session_name('PHPSESSID');
$site_url = $_SESSION['media_url']; */
//echo $site_url;
//print_r($config['Settings']);die;
$media_url = $_REQUEST['media_url'];
$site_url = $_REQUEST['site_url'];

@$ftmp = $_FILES['image']['tmp_name'];
@$oname = $_FILES['image']['name'];
@$fname = $_FILES['image']['name'];
@$fsize = $_FILES['image']['size'];
@$ftype = $_FILES['image']['type'];

//$newimage = 'articles/original/' .$newfilename;
$user_image_path = "media/avatars/";
$newimage = "";
$thumbimage = "";

$ext = strrchr($oname, '.');
if($ext){
	if(($ext != '.JPG' && $ext != '.PNG' && $ext != '.JPEG' && $ext != '.GIF' && $ext != '.jpg' && $ext != '.png' && $ext != '.jpeg' && $ext != '.gif') || $fsize > 200*1024*1024){
		//echo 'error';
	}else{
		if(isset($ftmp)){
			$newname = time().$ext;
			$newimage = $user_image_path . $newname;
			$finalPath = $user_image_path . "original/";
			$thumbimage1 = $user_image_path . "thumb350/" . $newname;
			$thumbimage2 = $user_image_path . "thumb150/" . $newname;
			$thumbimage3 = $user_image_path . "thumb70/" . $newname;
			
			//$result = @move_uploaded_file($ftmp,$newimage);
			$result = move_uploaded_file($ftmp,$finalPath.$newname);
			
			chmod($finalPath.$newname, 0644);
			if(empty($result))
				$error["result"] = "There was an error moving the uploaded file.";

			if ($media_url != $site_url) {
			
				$host = explode("/", $media_url);
				$count = count($host)-1;
				$path = 'public_html/';$i = 3;
				while ($i < $count){
					$path .= $host[$i]."/";
					$i += 1;
				}
				// set up basic connection
				$conn_id = ftp_connect($_REQUEST['hostname']);
			
				// login with username and password
				$login_result = ftp_login($conn_id, $_REQUEST['username'], $_REQUEST['password']);
			
				//check if directory exists and if not then create it
				if(!@ftp_chdir($conn_id, $path.$finalPath)) {
					//create diectory
					ftp_mkdir($conn_id, $path.$finalPath);
					//change directory
					ftp_chdir($conn_id, $path.$finalPath);
				}
				//echo "Dir: ".ftp_pwd($conn_id);
			
				$ret = ftp_nb_put($conn_id, $newname, $finalPath.$newname, FTP_BINARY, FTP_AUTORESUME);
				while(FTP_MOREDATA == $ret) {
					$ret = ftp_nb_continue($conn_id);
				}
			
				if($ret == FTP_FINISHED) {
					//success message
				} else {
					$error["result"] = "Failed uploading file '" . $newname . "'.";
				}
				// close the connection
				//ftp_close($conn_id);
			}
			
			// create thumbnail here
			include_once "pThumb.php";						
				$img=new pThumb();
				
				$img->pSetSize('150', '150');
				$img->pSetQuality(100);
				$img->pCreate($finalPath.$newname, 150, 150);
				$img->pSave($thumbimage2);
				chmod($thumbimage2, 0644);
				$img = "";	
				
				if ($media_url != $site_url) {
					ftp_cdup($conn_id);
					//echo "Dir: ".ftp_pwd($conn_id);
					if(!@ftp_chdir($conn_id, "thumb150")) {
						//create diectory
						ftp_mkdir($conn_id, "thumb150");
						//change directory
						ftp_chdir($conn_id, "thumb150");
					}
					//echo "Dir: ".ftp_pwd($conn_id);
						
					$ret = ftp_nb_put($conn_id, $newname, $thumbimage2, FTP_BINARY, FTP_AUTORESUME);
					while(FTP_MOREDATA == $ret) {
						$ret = ftp_nb_continue($conn_id);
					}
						
					if($ret == FTP_FINISHED) {
						//success message
					} else {
						$error["result"] = "Failed uploading file '" . $newname . "'.";
					}
					unlink($thumbimage2);
				}
				
				$img=new pThumb();
				
				$img->pSetSize('70', '70');
				$img->pSetQuality(100);
				$img->pCreate($finalPath.$newname, 70, 70);
				$img->pSave($thumbimage3);
				chmod($thumbimage3, 0644);
				$img = "";	
				
				if ($media_url != $site_url) {
					ftp_cdup($conn_id);
					//echo "Dir: ".ftp_pwd($conn_id);
					if(!@ftp_chdir($conn_id, "thumb70")) {
						//create diectory
						ftp_mkdir($conn_id, "thumb70");
						//change directory
						ftp_chdir($conn_id, "thumb70");
					}
					//echo "Dir: ".ftp_pwd($conn_id);
						
					$ret = ftp_nb_put($conn_id, $newname, $thumbimage3, FTP_BINARY, FTP_AUTORESUME);
					while(FTP_MOREDATA == $ret) {
						$ret = ftp_nb_continue($conn_id);
					}
						
					if($ret == FTP_FINISHED) {
						//success message
					} else {
						$error["result"] = "Failed uploading file '" . $newname . "'.";
					}
					unlink($thumbimage3);
				}
				
				$heightandwidth = getimagesize($finalPath.$newname);
				$img=new pThumb();
				//if($heightandwidth[0]>70 || $heightandwidth[1]>70){
					$img->pSetSize('350', '350');
					$img->pSetQuality(100);
					$img->pCreate($finalPath.$newname, $heightandwidth[0], $heightandwidth[1]);
				//}
				$img->pSave($thumbimage1);
				chmod($thumbimage1, 0644);
				$img = "";
				
				if ($media_url != $site_url) {
					ftp_cdup($conn_id);
					//echo "Dir: ".ftp_pwd($conn_id);
					if(!@ftp_chdir($conn_id, "thumb350")) {
						//create diectory
						ftp_mkdir($conn_id, "thumb350");
						//change directory
						ftp_chdir($conn_id, "thumb350");
					}
					//echo "Dir: ".ftp_pwd($conn_id);
				
					$ret = ftp_nb_put($conn_id, $newname, $thumbimage1, FTP_BINARY, FTP_AUTORESUME);
					while(FTP_MOREDATA == $ret) {
						$ret = ftp_nb_continue($conn_id);
					}
				
					if($ret == FTP_FINISHED) {
						//success message
					} else {
						$error["result"] = "Failed uploading file '" . $newname . "'.";
					}
					unlink($thumbimage1);
					unlink($finalPath.$newname);
					ftp_close($conn_id);
					$img_src = "http://".$media_url.$thumbimage1;
				} else {
					$img_src = $site_url.$thumbimage1;
				}
				
			
			$ori = $site_url.$finalPath;
			?>
			<!-- Copy & Paste "Javascript Upload Script" -->
			<script>
				var par = window.parent.document;
				par.getElementById('show_shop_photo_url').src = '<?php echo $img_src; ?>';

				//alert(par.getElementById('show_url').src);
				par.getElementById('image_computer').value = '<?php echo $newname; ?>';	
				var imagename = par.getElementById('image_computer').value;
				if(imagename){
					parent.document.getElementById('removeimg').style.display='inline-block';
				}
			</script>
			<?php
		}
	}
}
?>
<script>
function upload(){
    var par = window.parent.document;
	document.getElementById('iform').submit();
	par.getElementById('show_shop_photo_url').src = '<?php echo $site_url."img/loading.gif";?>';
}
</script>
<form id="iform" name="iform" class="settings" action="" method="post" enctype="multipart/form-data">
	<div class="row file-holder1">
		<div class="file file-input-js-active">
			<input type="file" value="Browse..." class="file-input-area1" id="file" style="opacity: 0;filter: alpha(opacity = 0);" name="image" onchange="upload()"/>
			<input type="text" id="input_value" value="Add your photos" class="btn text file-input-value" readonly="readonly"/>			
		</div>
	</div>
</form>
