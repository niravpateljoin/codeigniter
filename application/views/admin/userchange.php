<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/validate.js'></script>
<!-- Code Added  by tricore.dev 10   Date : 06/12/14  start here -->
					<!--Ajax cast dropdown -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/cast_dropdown.js"></script>
<!-- Code Added  by tricore.dev 10   Date : 06/12/14  ended here -->  
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
                <a href="<?php echo base_url("admin/user"); ?>">User Management</a>
            </li>
			<li>
				<?php if(isset($edit_user)) { ?>
					<a href="<?php echo base_url("admin/user/edit/{$edit_user[0]->id}"); ?>">Edit User</a>
			    <?php } else { ?>
					<a href="<?php echo base_url("admin/user/add"); ?>">Add User</a>
			    <?php } ?>
			</li>
		</ul>
   </div> 
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <?php if(isset($edit_user)) { ?><h2><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit User</h2> 
                <?php } else { ?>
                <h2><i class="glyphicon glyphicon-edit"></i>&nbsp;Add User</h2>
                <?php } ?> 

                <div class="box-icon">
                    
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="<?php echo base_url("admin/dashboard"); ?>" class="btn btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
             <?php
			
				if($this->session->userdata('invalid_username'))
				{ ?>
            <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Oh snap!</strong> <?php echo $this->session->userdata('invalid_username'); $this->session->unset_userdata('invalid_username'); ?>.
                </div>
        					
			<?php		
				}
			?> 
            <?php
			
				if($this->session->userdata('invalid_email'))
				{ ?>
            <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Oh snap!</strong> <?php echo $this->session->userdata('invalid_email'); $this->session->unset_userdata('invalid_email'); ?>.
                </div>
        					
			<?php		
				}
			?> 
                       
            <div class="box-content">
				<?php if(isset($edit_user)) { ?>
                <form role="form" method="post" name="edituserform" onSubmit="return editusermanageform();" action="<?php echo base_url(); ?>admin/user/edit/<?php echo $edit_user[0]->id; ?>">
				<?php } else { ?>
				<form role="form" method="post" name="edituserform" id="userform" onSubmit="return userform();" action="<?php echo base_url(); ?>admin/user/add" >
				<?php } ?>	
				
				    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="UserName" value="<?php if(isset($edit_user)) { echo $edit_user[0]->username; } else { echo set_value('username'); } ?>">                       
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php if(isset($edit_user)) { echo $edit_user[0]->email; } else { echo set_value('email'); } ?>">
                    </div>
                    
                    <?php if(isset($edit_user)) { ?>
                           
                    <div class="form-group">
                        <label for="password">Change Password</label></label>
                        <input type="password" name="password" class="form-control" id="pass1" placeholder="Change Password" value="<?php echo set_value('password');  ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Confirm Password</label></label>
                        <input type="password" name="cpassword" class="form-control" id="pass2" placeholder="Confirm Password" value="<?php echo set_value('cpassword');  ?>">
                    </div>
                    
                    <?php } else { ?>       
                                        
                    <div class="form-group">
                        <label for="password">Password</label></label>
                        <input type="password" name="password" class="form-control" id="pass1" placeholder="Enter Password" value="<?php echo set_value('password');  ?>">
                    </div>
                    
                     <div class="form-group">
                        <label for="password">Confirm Password</label></label>
                        <input type="password" name="cpassword" class="form-control" id="pass2" placeholder="Confirm Password" value="<?php echo set_value('cpassword');  ?>">
                    </div>
                    
                    <?php } ?>
                    
                    <div class="form-group">
						<label class="control-label" for="selectError">Select Profile</label>
                           
						<div class="controls">
							<select name='profile' id='profile' data-rel="chosen" style="width:100%; height:40px;">
								<option value='0'>Select Profile</option> 
								<?php if(isset($edit_user)) { ?> 
								<?php foreach($profiles as $profile)
								{ 
									if($profile->profile_name == $edit_user[0]->profile)
									{
									echo "<option value='$profile->profile_name' selected>";								
									echo $profile->profile_name; 
									echo "</option>";								 
									}
									else
									{
									echo "<option value='$profile->profile_name'>";
									echo $profile->profile_name; 
									echo "</option>";											
									}
							    }
							    ?>
							    <?php } else { ?>
							    <?php foreach($profiles as $profile){ ?>
								<option value="<?php echo $profile->profile_name; ?>"><?php echo $profile->profile_name; ?></option>';
								<?php } } ?>	
							</select>								
						</div>
					</div>
                     
					<div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" value="<?php if(isset($edit_user)) { echo $edit_user[0]->first_name; } else { echo set_value('firstname') ;  } ?>">
                    </div>  
                    
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" value="<?php if(isset($edit_user)) { echo $edit_user[0]->last_name; } else { echo set_value('lastname'); } ?>">
                    </div>
                    
                    <div class="form-group">						
						<label for="gender">Gender</label><br>
						<?php if(isset($edit_user)) { ?>
						<?php if($edit_user[0]->gender == "male")
						{ ?>
						<label class="radio-inline">
							<input type="radio" name="gender" id="msex" value="male" checked> Male 
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" id="fsex" value="female"> Female
						</label>
						<?php } else { ?>
						<label class="radio-inline">
							<input type="radio" name="gender" id="msex" value="male"> Male 
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" id="fsex" value="female" checked> Female
						</label>
						<?php } ?>
						<?php } else { ?>
						<label class="radio-inline">
							<input type="radio" name="gender" id="msex" value="male"> Male 
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" id="fsex" value="female"> Female
						</label>
						<?php } ?>
						
                    </div>
                                  
                    <div class="form-group">
                        <label for="birthdate">Date Of Birth</label>
                        <input type="text" name="birth_date" class="form-control" id="birth_date" placeholder="Birth Date" value="<?php if(isset($edit_user)) { echo $edit_user[0]->dob; } else { echo set_value('birth_date'); } ?>">                       
                    </div>
                    
                     <div class="form-group">
						<label class="control-label" for="selectError">Religion</label>

						<div class="controls">
							<select name='religion' id='religion' data-rel="chosen" style="width:100%; height:40px;" >
								<option value='0'>Select Religion</option>
								<?php if(isset($edit_user)) { ?> 
								<?php foreach($religions as $religion)
								{ 
									if($religion->religion_name == $edit_user[0]->religion)
									{
									echo "<option value='$religion->religion_name' selected>";								
									echo $religion->religion_name; 
									echo "</option>";								 
									}
									else
									{
									echo "<option value='$religion->religion_name'>";
									echo $religion->religion_name; 
									echo "</option>";											
									}
							    }
							    ?>
							    <?php } else { ?>
							    <?php foreach($religions as $religion){ ?>
								<option value="<?php echo $religion->id; ?>"><?php echo $religion->religion_name; ?></option>';
								<?php } } ?>	
							</select>								
						</div>
					</div>
					
					<!-- Code Added  by tricore.dev 10   Date : 05/12/14  start here -->
					<!-- Ajax cast dropdown-->
					<div class="form-group">
						<label class="control-label" for="selectError">Cast</label>						
						<div class="controls">
							<select name="cast" id="cast" data-rel="chosen" style="width:100%; height:40px;" >
							</select>
						</div>
						
					</div>
					<!-- Code Added  by tricore.dev 10   Date : 06/12/14 end here -->

					
					 <div class="form-group">
						<label class="control-label" for="selectError">Mother Tongue</label>

						<div class="controls">
							<select name='mothertongue' id='mothertougue' data-rel="chosen" style="width:100%; height:40px;">
								<option value='0'>Select Mothertongue</option> 
								<?php if(isset($edit_user)) { ?> 
								<?php foreach($mothers as $mother)
								{ 
									if($mother->mother_name == $edit_user[0]->mtongue)
									{
									echo "<option value='$mother->mother_name' selected>";								
									echo $mother->mother_name;
									echo "</option>";								 
									}
									else
									{
									echo "<option value='$mother->mother_name'>";
									echo $mother->mother_name; 
									echo "</option>";											
									}
							    }
							    ?>
							    <?php } else { ?>
							    <?php foreach($mothers as $mother) { ?>
								<option value="<?php echo $mother->mother_name; ?>"><?php echo $mother->mother_name; ?></option>';
								<?php } } ?>	
							</select>								
						</div>
					</div>
					
					 <div class="form-group">
						<label class="control-label" for="selectError">Living In</label>

						<div class="controls">
							<select name='livingin' id='livingin' data-rel="chosen" style="width:100%; height:40px;">
								<option value='0'>Select Your Place </option> 
								<?php if(isset($edit_user)) { ?> 
								<?php foreach($livings as $living)
								{ 
									if($living->living_name == $edit_user[0]->livingin)
									{
									echo "<option value='$living->living_name' selected>";								
									echo $living->living_name;
									echo "</option>";								 
									}
									else
									{
									echo "<option value='$living->living_name'>";
									echo $living->living_name; 
									echo "</option>";											
									}
							    }
							    ?>
							    <?php } else { ?>
							    <?php foreach($livings as $living){ ?>
								<option value="<?php echo $living->living_name ?>"><?php echo $living->living_name; ?></option>';
								<?php } } ?>	
							</select>								
						</div>
					</div>
                                        
                    <div class="form-group">
                        <label for="address1">Address</label>
                        <textarea name="address1" id="address1" class="form-control" style="height:150px;"> <?php if(isset($edit_user)) { echo $edit_user[0]->address; } else { echo set_value('address1'); } ?>  </textarea>                     
                    </div>
                    
                    <div class="form-group">
                        <label for="contactno">Contact No</label>
                        <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="Contact No" value="<?php if(isset($edit_user)) { echo $edit_user[0]->contact_no; } else { echo set_value('contact_no'); } ?>">                       
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

