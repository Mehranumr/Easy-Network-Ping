<?php
function ping_request($host) { 
	if (!$socket = @fsockopen($host, 80, $errno, $errstr, 30)) { 
		return "<img src='img/down.jpg'>"; 
	} else { 
		return "<img src='img/up.jpg'>"; fclose($socket); 
	} 
}
?>