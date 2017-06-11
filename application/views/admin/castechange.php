

<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/validate.js'></script>  
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
</noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
		<ul class="breadcrumb">
			<li>
				<a href="<?php echo base_url("admin/dashboard"); ?>">Home</a>
			</li>
			 <li>
                <a href="<?php echo base_url("admin/caste"); ?>">Caste Management</a>
            </li>
			<li>
			<?php if(isset($edit_caste)) { ?> 	<a href="<?php echo base_url("admin/caste/edit/{$edit_caste[0]->id}"); ?>">Edit Caste</a>
			<?php } else { ?>
			   <a href="<?php echo base_url("admin/caste/add"); ?>">Add New Caste</a>
			 <?php } ?>  
			</li>
		</ul>
   </div> 
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
				<?php if(isset($edit_caste)) { ?> 
                <h2><i class="glyphicon glyphicon-edit"></i>Edit Caste</h2>
                <?php } else { ?>
                <h2><i class="glyphicon glyphicon-edit"></i> Add New Caste</h2>
                <?php } ?> 
                <div class="box-icon">
                    
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="<?php echo base_url("admin/dashboard"); ?>" class="btn btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
          
            <div class="box-content">
				<?php if(isset($edit_caste)) { ?>
                <form role="form" method="post" name="castemanageform" id="castemanageform" onSubmit="return casteform();" action="<?php echo base_url(); ?>admin/caste/edit/<?php echo $edit_caste[0]->id; ?>">
				    <?php } else { ?>
				<form role="form" method="post" name="castemanageform" id="castemanageform" onSubmit="return casteform();" action="<?php echo base_url(); ?>admin/caste/add">
				    <?php } ?>
				    
				     <div class="form-group">
						<label class="control-label" for="selectError">Religion</label>
						

						<div class="controls">
							<select name='religion_name' id='religion_name' data-rel="chosen" style="width:100%; height:40px;">
								<option value='0'>Select Religion</option>
								<?php if(isset($edit_caste)) { ?> 
								<?php foreach($castes as $caste)
								{ 
									
									if($caste->id == $edit_caste[0]->religionid)
									{										
									echo "<option value='$caste->id' selected>";								
									echo $caste->religion_name; 
									echo "</option>";								 
									}
									else
									{
									echo "<option value='$caste->id'>";
									echo $caste->religion_name; 
									echo "</option>";											
									}
							    }
							    ?>
							    <?php } else { ?>
							    <?php foreach($castes as $caste){ ?>
								<option value="<?php echo $caste->id; ?>"><?php echo $caste->religion_name; ?></option>';
								<?php } } ?>	
							</select>								
						</div>
					</div>
				    
                    <div class="form-group">
                        <label for="caste">Caste Name </label>
                        <input type="text" name="caste_name" class="form-control" id="caste_name" placeholder="caste Name" value="<?php if(isset($edit_caste)) { echo $edit_caste[0]->caste_name;  } else {echo set_value('caste_name');} ?>">
                    </div>
                                                        
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>


