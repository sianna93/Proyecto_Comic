
<div>

	<?php
	foreach($list as $value){
		echo '<div class="content_comic"><div class="content_img"><img src="'.base_url(),$value['portada'].'" style="width: 300px; height:200px; border-radius: 10px;"> </img></div>
		<div class="content_header"><label class="title_comic">'.$value['nombre'].'</label>
		</br><label >'.$value['genero'].'</label></div></div>';
	}
	?>

	<style>
	.content_img{
		float: left;
		position: relative;

	}

	.content_header{
		float: left;
		position: relative;
		height: 200px;
		width: 450px;
		margin-top: 10px;
	}
	.content_comic{

		clear: both;
		border-style: outset;
		border-color: pink;
		width: 50%;
		height: 225px;

	}

	.content_img{
		margin: 10px;
		min-width: 310px;
	}

	.title_comic{
		font-size: 18pt;
		font-weight	: bold;

	}
	</style>
</div>