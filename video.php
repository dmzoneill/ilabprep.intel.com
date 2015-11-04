<?php

include_once( "inc_conf.php" );
include_once( "inc_functions.php" );

$parts = GetQuery( true );

if( $parts[0] == "deploy" )
{
	print 1;
	exit;
}

include_once( "inc_header.php" );

print "<br>
    <video id='ilabprepvideo' class='sublime' width='640' height='360' data-uid='b73d8565' preload='none'>
        <source src='http://ilabprep.intel.com/itss.mp4' />
        <source src='http://ilabprep.intel.com/dev-overview.mp4' type='video/mp4' />
    </video>
";
			
include_once( "inc_footer.php" );	
