<body class=""> 
  <!--<![endif]-->
     
   
    
<div class="content">
	<div class="box span12">
		<div class="box-header">
			<h2>Delivery Charges Countries</h2>
		</div>
		<div class="box-content" style="margin-bottom:-20px;">
			<ul class="breadcrumb">
				<li><a href="<?php echo SITE_URL; ?>">Home</a> <span class="divider">/</span></li>
				<li><a href="<?php echo SITE_URL.'admin/deliverycharges/'; ?>">Delivery Charges Countries</a><span class="divider">/</span></li>
				<li class="active"><a href="<?php echo SITE_URL.'admin/deliveryarea/'; ?>">Add Area</a></li>
			</ul>
		</div>
	</div>

    <div class="btn-toolbar">
        <!--button class="btn btn-primary"><i class="icon-save"></i> Save</button>
        <a href="#myModal" data-toggle="modal" class="btn">Delete</a-->
      <div class="btn-group">
      </div>
    </div>

      <!-----Commission------->				
	<div class="row-fluid">		
		<div class="box span12">
			<div class="box-header" data-original-title="">
				<h2>Add Delivery Area</h2>
			</div>
			<div class="box-content">
    <?php
            echo "<div class='containerdiv'>";
            echo $this->Form->Create('delcharges',array('id'=>'Delchargeform'));
		        echo $this->Form->input('zone_name',array('type'=>'text','label'=>'Zone name','id'=>'zone_name','class'=>'inputform1'));
		        echo $this->Form->input('regulr_chrge',array('type'=>'float','label'=>'Regular Delivery charge','id'=>'regulr_chrge', 'class'=>'inputform2'));
		        echo $this->Form->input('expres_chrge',array('type'=>'float','label'=>'Express Delivery charge','id'=>'expres_chrge', 'class'=>'inputform3'));
		        echo $this->Form->submit('Save',array('div'=>false,'class'=>'btn btn-primary reg_btn' ));
        echo $this->Form->end();
	        echo "</div>";
    ?>
		    </div>
	    </div><!--/span-->
    </div><!--/row-->
						<!-----Commission------->	
</div>


