<?php if($view_mode == 'full'): ?>
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
		<span><?php print $element->top_speed; ?> MPH</span>
	</div>
	<div class="row">
		<span>Price:</span>
		<span>$<?php print $element->price; ?></span>
	</div>
<?php endif; ?>