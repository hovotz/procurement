<?php 
	$url = $this->Html->url('/');
	echo $this->Html->scriptBlock('var main_url = ' . $url);