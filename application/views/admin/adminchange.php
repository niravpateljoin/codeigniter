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
                <a href="<?php echo base_url("admin/adminmanagment"); ?>">Administration</a>
            </li>
			<li>
				<?php if(isset($edit_admin)) { ?>
					<a href="<?php echo base_url("admin/adminmanagment/edit/{$edit_admin[0]->id}"); ?>">Edit Admin</a>
			    <?php } else { ?>
					<a href="<?php echo base_url("admin/adminmanagment/add"); ?>">AddAdmin</a>
			    <?php } ?>
			</li>
		</ul>
   </div> 
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <?php if(isset($edit_admin)) { ?><h2><i class="glyphicon glyphicon-edit"></i>Edit Admin</h2> 
                <?php } else { ?>
                <h2><i class="glyphicon glyphicon-edit"></i>Add New Admin</h2>
                <?php } ?> 

                <div class="box-icon">
                    
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="<?php echo base_url("admin/dashboard"); ?>" class="btn btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
             
          
            <div class="box-content">
			
				
				<?php if(isset($edit_admin)) { ?>
                <form role="form" method="post" name="editadminform" onSubmit="return editform();" action="<?php echo base_url(); ?>admin/adminmanagment/edit/<?php echo $edit_admin[0]->id; ?>">
				<?php } else { ?>
				<form role="form" method="post" name="registration" id="registration" onSubmit="return formValidation();" action="<?php echo base_url(); ?>admin/adminmanagment/add" >
				<?php } ?>
				
				<?php if(isset($edit_admin)) { ?>	
				<input type="hidden" name="edit_hidden_id" id="edit_hidden_id" value="<?php echo $edit_admin[0]->id; ?>">
				<?php } ?>
					<div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" value="<?php if(isset($edit_admin)) { echo $edit_admin[0]->firstname; } else { echo set_value('firstname') ;  } ?>">
                    </div>  
                    
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" value="<?php if(isset($edit_admin)) { echo $edit_admin[0]->lastname; } else { echo set_value('lastname'); } ?>">
                    </div>
                    <div id="message1"></div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php if(isset($edit_admin)) { echo $edit_admin[0]->email; } else { echo set_value('email'); } ?>">
                    <?php echo form_error('email'); ?>
                    </div>
                    <div id="message"></div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="UserName" value="<?php if(isset($edit_admin)) { echo $edit_admin[0]->username; } else { echo set_value('username'); } ?>">                       
                    </div>
                     
                     <?php if(isset($edit_admin)) { ?>                      
					<input type="hidden" name="password" class="form-control" id="pass1" placeholder="Password" value="<?php  echo $edit_admin[0]->password ; ?>">                       
                                       
                     <div class="form-group">
                        <label for="exampleInputPassword1">Change Password</label>
                        <input type="text" name="cpassword" class="form-control" id="pass2" placeholder="cpassword" value="<?php echo set_value('cpassword'); ?>">                       
                    </div>
                    <?php } else { ?>
                    
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" name="password" class="form-control" id="pass1" placeholder="Password" value="<?php echo set_value('password'); ?>">                       
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="text" name="cpassword" class="form-control" id="pass2" placeholder="Confirm Password" value="<?php echo set_value('cpassword'); ?>">
                    </div>
                    
                    <?php } ?> 
                                    
                    <button type="submit"  class="btn btn-default">Submit</button>
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

