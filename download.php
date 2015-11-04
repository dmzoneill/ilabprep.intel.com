<?php

set_time_limit(0);

include_once( "inc_conf.php" );
include_once( "inc_functions.php" );

$parts = GetQuery();

if( count( $parts ) < 2 )
{
    print "Beautiful error";
    exit;
}

$release = strtolower( $parts[0] );
$os = strtolower( $parts[1] );
$os = ( $os == "windows" ) ? "exe" : "run";

if( ! file_exists( "downloads/$release" ) )
{
    print "No such release";
    exit;
}

$fp = fopen( "downloads.txt" , "r" ); 
$count = fread( $fp , 1024 ); 
fclose( $fp ); 
$count = $count + 1; 
$fp = fopen( "downloads.txt" , "w" ); 
fwrite( $fp , $count );
fclose( $fp ); 

header( 'Content-Description: File Transfer' );
header( 'Content-Type: application/octet-stream' );
header( 'Content-Disposition: attachment; filename="' . basename( "downloads/$release/ilab.$os" ) . '"' );
header( 'Content-Transfer-Encoding: binary' );
header( 'Connection: Keep-Alive' );
header( 'Expires: 0' );
header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
header( 'Pragma: public' );
header( 'Content-Length: ' . filesize( "downloads/$release/ilab.$os" ) );

ob_clean();
flush();

$file = @fopen( "downloads/$release/ilab.$os" , "rb" );
while( !feof( $file ) )
{
	print( @fread( $file , 1024*8 ) );
	ob_flush();
	flush();
}

exit;
