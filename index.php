<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta charset="utf-8">
	<title>PPM Desktop</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	
	<!-- jQuery -->
	<script src="./lib/jquery-1.11.1.min.js"></script>
	<script src="./lib/bootstrap.min.js"></script>
	<script src="./lib/jsrender.min.js"></script>
    <link rel="stylesheet" href="./css/tree.css">
</head>
<body>

<script id="theTmpl" type="text/x-jsrender">

<ul>

<li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#Web" aria-expanded="true" aria-controls="Web"><h3>{{:desc}}</h3></a></span>
<div id="Web" class="collapse show">
<ul>
{{for activities}}
 <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#page{{:id}}" aria-expanded="false" aria-controls="page{{:i}}"><img src="./icons/folderC.png" /> {{:desc}}</a></span>
   <ul><div id="page{{:id}}" class="collapse">
	{{for tasks}}
		<li><span>
			<img src="./icons/task.png" />
			<div class="btn-group" role="group" aria-label="...">
			  
			  <button type="button" class="btn btn-default"><?=$mensajes[$_SESSION["idioma"]][30] ?>&nbsp;{{:fi}}</button>
			  <button type="button" class="btn btn-default"><?=$mensajes[$_SESSION["idioma"]][31] ?>&nbsp;{{:ff}}</button>
			</div>
			<br />
			<div style="margin-top:10px;margin-bottom:10px">{{:desc}}</div>
		</span></li>
	{{/for}}
	 </div>
   </ul>
 </li>
{{/for}}
</ul>
</div>
</li>
</ul>

</script>
<?php
include('./jss/indexjs.php');
?>
<div id="result" class="tree "></div>

</body>
</html>
