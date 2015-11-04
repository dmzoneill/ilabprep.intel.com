<?php

include_once( "inc_conf.php" );
include_once( "inc_functions.php" );

$parts = GetQuery();

switch( $parts[0] )
{
    case "github":
        header( 'Location: https://github.intel.com/ilab/iLab-Template-Scripts' );
        break;

    case "video":
        header( 'Location: http://software.intel.com/en-us/videos' );
        break;

    case "docs":
        header( 'Location:  https://github.intel.com/ilab/iLab-Template-Scripts/wiki' );
        break;

    case "dudes":
        header( 'Location: http://expertfinder.intel.com/profile.html?wwid=10715196' );
        break;

    default:
        header( 'Location: http://ilab.intel.com' );
        break;
}


