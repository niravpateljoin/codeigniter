<html>
<head>
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/jquery.min.js"></script>	
<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/validate.js'></script>  	
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>	
	<body>
		<div id="page">
				
				<form role="form" method="post" name="edituserform" id="userform" onSubmit="return userform();" action="<?php echo base_url(); ?>registration" >
				
				<h1>REGISTRATION FORM</h1>
				
				<div class="input-field">
					<label for="Username">Username<span class="required">*</span></label>  
					<input type='text' name='username' id='username' value="<?php echo set_value('username'); ?>" placeholder='Username' >
				</div>
				
				<div class="input-field">
					<label for="Email">Email<span class="required">*</span></label>  
					<input type='text' name='email' id='email' value="<?php echo set_value('email'); ?>" placeholder='Email' >
					
				</div>
				
				<div class="input-field">
					<label for="Password">Password<span class="required">*</span></label>
					<input type='password' id='pass1' name='password' value="<?php echo set_value('password'); ?>" placeholder='Password'></label>
				</div>
				
				<div class="input-field">
					<label for="Confirm Password">Confirm Password <span class="required">*</span></label>
					<input type='password' id='pass2' name='cpassword' value="<?php echo set_value('cpassword'); ?>" placeholder='Confirm Password'></label>
				</div>
				
				<div class="input-field">
					<label for="Last Name">Profile For<span class="required">*</span></label> 
					<select name='profile' id='profile'>
					<option value='0'>Select Profile</option>	
					<?php foreach($profiles as $profile){ ?>
						<option valuea="<?php echo $profile->profile_name; ?>" ><?php echo $profile->profile_name; ?></option>';
					<?php } ?>
					</select>										
				</div>
				
				<div class="input-field">
					<label for="First Name">First Name<span class="required">*</span></label>
					<input type='text' name='firstname' id='firstname' value="<?php echo set_value('firstname'); ?>" placeholder='First Name' >			
				</div>
				
				<div class="input-field">
					<label for="Last Name">Last Name<span class="required">*</span></label>
					<input type='text' name='lastname' id='lastname' value="<?php echo set_value('lastname'); ?>" placeholder='Last Name' >			
				</div>		
						
				<div class="input-field">
					<label for="gender">Gender<span class="required">*</span></label>
					<div class="subradio" >
						Male : <input type='radio' id='msex' name='gender' value='male'>
						Female : <input type='radio' id='fsex' name='gender' value='female'>		
					</div>						
				</div>
				
				<div class="input-field">
					<label for="Date">Date Of Birth<span class="required">*</span></label>
					<input type='text' id='birth_date' name='birth_date' placeholder='Date Of Birth'>					
				</div>
				
				<div class="input-field">
					<label for="religion">Religion<span class="required">*</span></label> 
					<select name='religion' id='religion'>
						<option value='0'>Select Religion</option> 
						<?php foreach($religions as $rel){ ?>
						<option value="<?php echo $rel->religion_name; ?>"><?php echo $rel->religion_name; ?></option>';
						<?php } ?>
						</select>						
				</div>
				
				<div class="input-field">
					<label for="mother-tongue">Mother Tongue<span class="required">*</span></label> 
					<select name='mothertongue' id='mothertongue'>
						<option value='0'>Select Mother-Tongue</option> 
					    <?php foreach($mothers as $mother){ ?>
						<option value="<?php echo $mother->mother_name; ?>"><?php echo $mother->mother_name; ?></option>';
						<?php } ?>	
					</select> 
				</div>
				
				<div class="input-field">
					<label for="living">Living In<span class="required">*</span></label> 
					<select name='livingin' id='livingin'>
						<option value='0'>Select</option> 
						<?php foreach($livings as $live){ ?>
						<option value="<?php echo $live->living_name; ?>"><?php echo $live->living_name; ?></option>';
						<?php } ?>							
						</select>					
				</div>
				
				<div class="input-field">
                        <label for="address1">Address <span class="required">*</span></label><br/>
                        <textarea name="address1" id="address1" class="form-control" style="height:150px; width:449px;"> <?php  echo set_value('address1');  ?>  </textarea>                     
				</div>
				
				<div class="input-field">
					<div class="form-group">
                        <label for="contactno">Contact No <span class="required">*</span></label>
                        <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="Contact No" value="<?php echo set_value('contact_no'); ?>">                       
                    </div>			
				</div>		
						
				<div class="input-field">
					<label for="Submit"><input type='submit' value='submit' class='myButton'></label>
				</div>
				
			                 
		</div>
	</body>	
</html>		
