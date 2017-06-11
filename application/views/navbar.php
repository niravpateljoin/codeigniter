<div class="navbar">
	<div class="login">	
		<div id="profile">
			<?php if($this->session->userdata('logged_in'))
			  {
				?>
				<a href='logout.php' id='logout'>Logout</a>
			<?php } else {?>
			<a href="#login_form"  class="various">login</a>
			<?php } ?>
		</div>
	</div>
	 <div id="login_form">
        <div  id="add_err" style="display:none;" ></div>
    	<form method="post">			
			<input type="text" id="user_name" name="user_name" placeholder="Username" />
			<input type="password" id="password" name="password" placeholder="Password" />
			<div><input type="submit" id="login" value="Login" />
			<input type="button" id="cancel_hide" value="Cancel" />
		</form>
    </div>
	<div id="shadow" class="popup"></div>
		Navigation Bar
	</div>
</div>
