<!DOCTYPE html>
<html>
<head>
</head>
<style type="text/css">
	#datepicker{
		width: 180px;
		margin:0 20px 20px 20px;
	}
	#datepicker>span:hover{
		cursor: pointer;
	}
</style>
<body>
	<div id="datepicker" class="input-group date" date-date-format="dd-mm-yyyy">
	<input type="date" name="">
	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>	
	</div>
	<script type="text/javascript">
		$(function(){
				$("#datepicker").datepicker({
					autoclose:true,
					todayHighlight:true
				}).datepicker('update', new Date());
		});
	</script>

</body>
</html>