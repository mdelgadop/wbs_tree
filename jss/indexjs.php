<script>
var parametros = {
	"username" : "<?=$_SESSION["valid_user"] ?>"
};
$.ajax(
	{
		data:  parametros,
		url: "ws/treews.php", 
		dataType : 'json',
		type     : 'post',
		success: function(result){
			var template = $.templates("#theTmpl");
			var htmlOutput = template.render(result);
			$("#result").html(htmlOutput);
    		}
	}
);

</script>