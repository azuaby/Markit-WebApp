<body class=""> 
  <!--<![endif]-->
  
  
 <div class="content">

 			<div class="box span12">
				<div class="box-header">
					<h2>Category</h2>
				</div>
				<div class="box-content" style="margin-bottom:-20px;">
			        <ul class="breadcrumb">
            <li><a href="<?php echo SITE_URL; ?>">Home</a> <span class="divider">/</span></li>
           	<li><a href="<?php echo SITE_URL.'admin/view/category'; ?>">Category</a> <span class="divider">/</span></li>
            <li class="active">Add Category</li>
			        </ul>
				</div>
			</div> 
						<div class="row-fluid">		
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2>Category</h2>
						
					</div>
					<div class="box-content">
<?php
	echo "<div class='containerdiv'>";
		echo $this->Form->Create('Category',array('url'=>array('controller'=>'/','action'=>'/admin/add/category'),'id'=>'Categoryform'));
			if(!empty($mainsec)){
				foreach($mainsec as $main_sec){
					$options2[$main_sec['Category']['id']] =  $main_sec['Category']['category_name'];
				}
			}else{
				$options2 = '';
			}
			echo $this->Form->input('categories', array('options' => $options2,'empty' => '-- Select Main Category --','id'=>'mainsec','class'=>'inputform catchnge'));
			echo "<span><b>hints : if you select the main category , the below category will be treated as subcategory.</b></span>";
			echo $this->Form->input('categoryname',array('type'=>'text','label'=>'Category Name','class'=>'inputform'));
			echo $this->Form->input('vrintype',array('type'=>'text','label'=>'Variant Name','class'=>'inputform'));
			echo $this->Form->input('sub_vrintype',array('type'=>'text','label'=>'Sub Variant','class'=>'inputform'));
            echo $this->Form->input('delivery_type', array('options' => array('regular' => 'Regular', 'special' => 'Special')));

			
			
			
			
			
			
			/*			echo $this->Form->input('categories', array('options' => $options2,'empty' => '-- Select Main Category --','id'=>'mainsec','class'=>'inputform catchnge'));
			echo "<span><b>hints : if you select the main category , the below category will be treated as subcategory.</b></span>";
			echo $this->Form->input('categoryname',array('type'=>'text','label'=>'Category Name','class'=>'inputform'));
			echo $this->Form->input('categoryname',array('type'=>'text','label'=>'Category Name','class'=>'inputform'));
			
			echo '<select name="dis_type" class="coupontype" id="coupontype">';			
				echo '<option value="">select</option>';		
				echo '<option value="percent">%</option>';
				echo '<option value="fixed">$</option>';
			echo '</select>'; 
			//echo $this->Form->input('coupontype',array('type'=>'option','name'=>'dis_type','value'=>'percent','class'=>'coupontype'));*/
			
			
			
			echo "<div id='forms'></div>";
			echo "<a href='javascript:void(0);' onclick='addform();' class='show_hid'>Add another Sub category</a>";
			//echo "<a href='javascript:void(0);' onclick='deleteform()' style='display:none;' class='deletfrm'>Delete</a>";
			echo $this->Form->submit('Submit',array('div'=>false,'class'=>'btn btn-primary reg_btn'));
		echo $this->Form->end();
	echo "</div>";
?>


</div>

</div>

</div>



<style>
	
.show_hid{
	display:none;
}
</style>
