
<!DOCTYPE html>
<html lang="en">
	<head>		
	    <link href="<?php  echo base_url(); ?>assets/css/style.css" rel="stylesheet"> 
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<title><?php echo $title; ?></title>
		<script type="text/javascript">
$(document).ready(function(){
	$("#login_a").click(function(){
       // $("#shadow").fadeIn("normal");
         
         $("#login_form").fadeIn("normal");
         $("#user_name").focus();
    });
	$("#cancel_hide").click(function(){
        $("#login_form").fadeOut("normal");
        $("#shadow").fadeOut();
   });
   
   $("#login").click(function(){
    
        username=$("#user_name").val();
        password=$("#password").val();
         $.ajax({
            type: "POST",
            url: "front/login",
            data: "username="+username+"&password="+password,
            success: function(html){
              if(html=='true')
              {
                $("#login_form").fadeOut("normal");
				$("#shadow").fadeOut();
				$("#profile").html("<a href='front/logout' id='logout'>Logout</a>");
				
              }
              else
              {
				     $("#add_err").show();
                    $("#add_err").html("Wrong username or password");
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html("Loading...")
            }
        });
         return false;
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
		
	$(".various").fancybox({
		maxWidth	: 600,
		maxHeight	: 600,
		fitToView	: false,
		width		: '300',
		height		: '160',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
		
});
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery-lib.js"></script>
		
<!-- Add required fancyBox files -->
<link rel="stylesheet" href="<?php  echo base_url(); ?>assets/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php  echo base_url(); ?>assets/fancybox/source/jquery.fancybox.pack.js"></script>


	</head>
<body>
<div class="header">
		
		<img src="<?php echo base_url(); ?>assets/img/headertop.jpg"; style= "width:100%; height:245px;"  >
		<div class="logo"></div>	
</div>	
