<div id="cookie-popup">
	<div class="inner">

		<div class="notice">
			<h5><?php echo apply_filters('nom3/popup/title', 'Use the filter "nom3/popup/title" to alter the title') ?></h5>
			<?php echo apply_filters('nom3/popup/content', 'Use the filter "nom3/popup/content" to alter this text.') ?>
		</div>

		<div class="actions">
			<a id="cookie-accept" class="<?php echo nom3()->accept_button_classes() ?>" href="#"><?php echo apply_filters('nom3/popup/accept_label', 'OK') ?></a>
			<a id="cookie-info" class="<?php echo nom3()->info_button_classes() ?>" href="<?php echo apply_filters('nom3/popup/info_link', '#') ?>"><?php echo apply_filters('nom3/popup/info_label', 'Info') ?></a>
		</div>

	</div>
</div>