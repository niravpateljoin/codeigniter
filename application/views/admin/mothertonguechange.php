

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
                <a href="<?php echo base_url("admin/mothertongue"); ?>">Mothertongue Management</a>
            </li>
			<li>
			<?php if(isset($edit_mothertongue)) { ?> 	<a href="<?php echo base_url("admin/mothertongue/edit/{$edit_mothertongue[0]->id}"); ?>">Edit Mothertongue</a>
			<?php } else { ?>
			   <a href="<?php echo base_url("admin/mothertongue/add"); ?>">Add New Mothertongue</a>
			 <?php } ?>  
			</li>
		</ul>
   </div> 
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
				<?php if(isset($edit_mothertongue)) { ?> 
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Mothertongue</h2>
                <?php } else { ?>
                <h2><i class="glyphicon glyphicon-edit"></i> Add New Mothertongue</h2>
                <?php } ?> 
                <div class="box-icon">
                    
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="<?php echo base_url("admin/dashboard"); ?>" class="btn btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
          
            <div class="box-content">
				<?php if(isset($edit_mothertongue)) { ?>
                <form role="form" method="post" name="mothertonguemanageform" id="mothertonguemanageform" onSubmit="return mothertongueform();" action="<?php echo base_url(); ?>admin/mothertongue/edit/<?php echo $edit_mothertongue[0]->id; ?>">
				    <?php } else { ?>
				<form role="form" method="post" name="mothertonguemanageform" id="mothertonguemanageform" onSubmit="return mothertongueform();" action="<?php echo base_url(); ?>admin/mothertongue/add">
				    <?php } ?>
				    
                    <div class="form-group">
                        <label for="mothertongue">Mothertongue Name </label>
                        <input type="text" name="mothertongue_name" class="form-control" id="mothertongue_name" placeholder="mothertongue Name" value="<?php if(isset($edit_mothertongue)) { echo $edit_mothertongue[0]->mother_name;  } else {echo set_value('mothertongue_name');} ?>">
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


