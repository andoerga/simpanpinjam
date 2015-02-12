<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url: 'index.php/user_group/get_list',
			type: 'get',
			dataType: 'html',
			success: function(response){
				$('#data-plate').html(response);
			}
		})
	});
</script>
<div id="data-plate">
	
</div>