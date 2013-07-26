<?php 

/***************************************************************************/
/*
/* 	----------------------------------------------------------------------
/* 						DO NOT EDIT THIS FILE
/*	----------------------------------------------------------------------
/* 
/*  			Built by Darcy Clarke. http://themify.me
/*  				Copyright (C) 2010 Themify
/*
/***************************************************************************/

require_once(TEMPLATEPATH . '/themify/themify-database.php');

require_once(TEMPLATEPATH . '/themify/themify-utils.php');

require_once(TEMPLATEPATH . '/themify/themify-config.php');

require_once(TEMPLATEPATH . '/themify/themify-modules.php');

if(is_file(TEMPLATEPATH . '/custom_modules.php')){
	require_once(TEMPLATEPATH . '/custom_modules.php');
}

if(is_file(TEMPLATEPATH . '/custom_functions.php')){
	require_once(TEMPLATEPATH . '/custom_functions.php');
}

require_once(TEMPLATEPATH . '/themify/themify-widgets.php');

?>