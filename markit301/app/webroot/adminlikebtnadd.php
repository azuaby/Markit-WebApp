
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
$user_image_path = "images/logo/";
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
			$finalPath = $user_image_path;
			$thumbimage1 = $user_image_path . $newname;
			
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
			
			$heightandwidth = getimagesize($finalPath.$newname);
			/* include_once "pThumb.php";						
				
				
				$img=new pThumb();
				if($heightandwidth[0]>32 || $heightandwidth[1]>32){
				$img->pSetSize('32', '32');
				$img->pSetQuality(100);
				$img->pCreateCropped($finalPath.$newname, 32, 32);
				}
				$img->pSave($thumbimage1);
				chmod($thumbimage1, 0644);
				$img = ""; */
			
			// *** Include the class
			require_once("resize-class.php");
				
			// *** 1) Initialize / load image
			$resizeObj = new resize($finalPath.$newname);
				
			// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
			$resizeObj -> resizeImage(32, 32, 'auto');
				
			// *** 3) Save image
			$resizeObj -> saveImage($thumbimage1, 100);
			chmod($thumbimage1, 0644);
			$resizeObj = "";
				
				if ($media_url != $site_url) {
					ftp_cdup($conn_id);
					//echo "Dir: ".ftp_pwd($conn_id);
					if(!@ftp_chdir($conn_id, "")) {
						//create diectory
						ftp_mkdir($conn_id, "");
						//change directory
						ftp_chdir($conn_id, "");
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
				par.getElementById('show_url_like').src = '<?php echo $img_src; ?>';
				par.getElementById('image_computer_like').value = '<?php echo $newname; ?>';	
				var imagename = par.getElementById('image_computer_like').value;
				if(imagename){
					parent.document.getElementById('removeimg_like').style.display='block';
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
	par.getElementById('show_url_like').src = '<?php echo $site_url."img/indicator.gif";?>';
}
</script>
<!-- <form id="iform" name="iform" action="" method="post" enctype="multipart/form-data">
<input id="file" type="file" onchange="upload()" name="image">
<input id="file" type="file" onchange="upload()" name="image" onclick="parent.document.getElementById('removeimg').style.display='block';">
</form>-->

<form id="iform" name="iform" class="settings" action="" method="post" enctype="multipart/form-data">
	<div class="row file-holder1">
		<div class="file file-input-js-active">
			<input type="file" value="Browse..." class="file-input-area1" id="file" style="opacity: 0;filter: alpha(opacity = 0);" name="image" onchange="upload()"/>
			<input type="text" id="input_value" value="Change image" class="btn text file-input-value" readonly="readonly"/>			
		</div>
	</div>
</form>
