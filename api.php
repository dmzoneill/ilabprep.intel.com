<?php

include_once( "inc_conf.php" );
include_once( "inc_functions.php" );

$parts = GetQuery();

if( strtolower( $parts[0] ) == "build" )
{
	if( file_exists( "./releases/.build" ) == false )
	{
		touch( "./releases/.build" );
		print 0;
		shell_exec( "/nfs/site/disks/iir-ec_ilabprep/repohandler.sh > /dev/null 2>&1");
		exit;
	}
}

print 1;

