<?php
 //print_r($element);
?>

<div class="row">
	<span>Car make:</span>
	<span><?php print $element->make; ?></span>
</div>
<div class="row">
	<span>Car model:</span>
	<span><?php print $element->model; ?></span>
</div>
<div class="row">
	<span>Car color:</span>
	<span><?php print $element->color; ?></span>
</div>
<div class="row">
	<span>Top speed:</span>
	<span><?php print $element->top_speed; ?></span>
</div>
<div class="row">
	<span>Price:</span>
	<span><?php print $element->price; ?></span>
</div>

<style>
	.row > :first-child {
		width: 30%;
		float: left;
		display: inline-block;
		font-size: 1.2rem;
		clear: left;
	}

	.row > :last-child {
		width: 69%;
		float: left;
		display: inline-block;
		font-size: 1.2rem;
	}
</style>