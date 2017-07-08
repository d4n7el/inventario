<?php 
	$icono = array(
		1 => "icon-home",
		2 => "icon-office",
		3 => "icon-headphones",
		4 => "icon-music",
		5 => "icon-film",
		6 => "icon-video-camera",
		7 => "icon-dice",
		8 => "icon-book",
		9 => "icon-folder-open",
		10 => "icon-alarm",
		11 => "icon-mobile",
		12 => "icon-display",
		13 => "icon-gift",
		14 => "icon-glass",
		15 => "icon-power-cord",
		16 => "icon-woman",
		17 => "icon-man",
		18 => "icon-magic-wand",
		19 => "icon-clubs",
		20 => "icon-file-empty",
		21 => "icon-lock",
		22 => "icon-hammer",
		23 => "icon-aid-kit",
		24 => "icon-heart",
		25 => "icon-android",
		26 => "icon-bin2",
		27 => "icon-paint-format",
		28 => "icon-camera",
		29=> "icon-cart",
		30 => "icon-books",	
		31 => "icon-calculator",
		32 => "icon-star-full",
		33 => "icon-mug",
		34 => "icon-scissors",
		35 => "icon-leaf",
		56 => "icon-dribbble",
		36 => "glyphicon glyphicon-scissors",
		37 => "glyphicon glyphicon-facetime-video",
		38 => "glyphicon glyphicon-picture",
		39 => "glyphicon glyphicon-tower",
		40 => "glyphicon glyphicon-king",
		41 => "glyphicon glyphicon-queen",
		42 => "glyphicon glyphicon-scissors",
		43 => "glyphicon glyphicon-education",
		44 => "glyphicon glyphicon-lamp",
		45 => "glyphicon glyphicon-piggy-bank",
		46 => "glyphicon glyphicon-knight",
		47 => "glyphicon glyphicon-apple",
		48 => "glyphicon glyphicon-sunglasses",
		49 => "glyphicon glyphicon-grain",
		50 => "glyphicon glyphicon-cd",
		51 => "glyphicon glyphicon-hourglass",
		52 => "glyphicon glyphicon-erase",
		53 => "glyphicon glyphicon-phone-alt",
		54 => "glyphicon glyphicon-briefcase",
		55 => "glyphicon glyphicon-camera",
		
	);
	foreach($icono as $key=>$value){ ?>
		<button class="btn btn-icono col-xs-4 col-sm-3 col-md-2 view_icono" icono="<?php echo $value; ?>" ><span class="<?php echo $value; ?> view_icono "></span></button>
	<?php }
?>