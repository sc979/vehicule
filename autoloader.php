<?php

function autoLoader($class)
{
	include strtolower($class).'.class.php';
}

spl_autoload_register('autoLoader');
