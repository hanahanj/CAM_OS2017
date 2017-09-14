<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="container home">

	<div class="document" id="greeting">
		
		<!-- Use Later, Chris wrote this nice little script to indicate class time and activities. 	 -->
		<!-- <p>Class is currently:<br />
		<?php
			$states = Array('out to lunch', 'surfing', 'closed', 'on strike');
	    	if (date('D') == 'Mon' && date('H') >= 3 && date('H') <=  6) {
	        	echo 'in session';
	    	} else if (date('D') == 'Wed' && date('H') >= 3 && date('H') <=  6) {
	        	echo 'in session';
	    	} else {
	    		echo $states[array_rand($states)];
	    	}
		?>	
		</p>
		<p>Instructor is currently:<br />
		<?php
			$states = Array('riding his bike', 'cleaning his bike', 'dreaming about his bike', 'making dope stuff', 'on papa duty');
	    	if (date('D') == 'Mon' && date('H') >= 3 && date('H') <=  6) {
	        	echo 'in session';
	    	} else if (date('D') == 'Wed' && date('H') >= 3 && date('H') <=  6) {
	        	echo 'helping students make dope internet things';
	    	} else {
	    		echo $states[array_rand($states)];
	    	}
		?>	
		</p> -->
		<?php echo $page->text()->kirbytext() ?>
	</div>

	
</div>

<?php snippet('footer') ?>