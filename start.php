<?php

// Plugin links_thewire
// autor: Polycarpe MAKOMBO
// Website: http://maongezi.com



elgg_register_event_handler('init', 'system', 'links_thewire_init');

include 'lib/elgg_preview.php';

elgg_extend_view('css/elgg', 'links_thewire/css');

function links_thewire_init() {
	global $CONFIG;
}
