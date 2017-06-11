<html>
<head>
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/jquery.min.js"></script>	
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>       
    <script type="text/javascript">
    //$(document).ready(function()
    //{
        function search()
        {

              var title = $("#searchbox").val();

              if(title != "")
              {
                 $.ajax({
                    type:"post",
                    url:"search1/searchby",
                    data:"title="+title,
                    success:function(data)
                    {
                        $("#result").html(data);                        
                    }
                  });
              }
              else
              {
                 $("#result").html(""); 
              }
              
        }

          $("#searchbox").click(function(){
            search();
          });

          
//    });
    </script>
</head>	
	<body>
		<div id="page">								
			<div id="search">  <h1>Search Box</h1> </div>
			<input type="text"  name="search1" id="searchbox" onkeyup="search();" placeholder = "Search Here "/>
			<ul id="result"> </ul>
		</div>
	</body>	
</html>		
