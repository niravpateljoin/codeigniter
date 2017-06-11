<html>
<head>
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/jquery.min.js"></script>	

<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>	
	<body>
		<div id="page">
				
				<form role="form" method="post" name="edituserform" id="userform" action="<?php echo base_url(); ?>search/searchby" >
				
				<h1>Search Here</h1>
								
				<div class="input-field">
					<label for="Username">Username<span class="required">*</span></label>  
					<input type='text' name='username' id='username' value="<?php echo set_value('username'); ?>" placeholder='Username' required >
				</div>
				
				<div class="input-field">
					<label for="Email">Email<span class="required">*</span></label>  
					<input type='text' name='email' id='email' value="<?php echo set_value('email'); ?>" placeholder='Email' >
					
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
					<label for="living">Living In<span class="required">*</span></label> 
					<select name='livingin' id='livingin'>
						<option value='0'>Select</option> 
						<?php foreach($livings as $live){ ?>
						<option value="<?php echo $live->living_name; ?>"><?php echo $live->living_name; ?></option>';
						<?php } ?>							
						</select>					
				</div>
										
				
				<div class="input-field">
					<label for="Submit"><input type='submit' value='Search' class='myButton'></label>
				</div>			                 
		</div>
	</body>	
</html>		
