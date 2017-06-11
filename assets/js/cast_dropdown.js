/* Code Added  by tricore.dev 10   Date : 06/12/14  start here */
					/* Ajax cast dropdown */
$(document).ready(function()
{
	$("#religion").on("change",function(){
		var religion_id = $('#religion').val();
		$.ajax({
			type:"POST",
			url:"get_cast/", //controller url
			data:"religion_id="+religion_id,
			success:function(resp)
			{
				$('#cast').html(resp);
				$("#cast").data("placeholder","Select cast").trigger('chosen:updated');
				
			}
		});
	});
		
});
/* Code Added  by tricore.dev 10   Date : 06/12/14  ended here */
