<?php

function PrintReleases( $os )
{	
	$dir =  DOCROOT . "/downloads";
	$output = "<table width='100' style='margin-top:40px;margin-right:25%;margin-left:25%'/>";
	
	if( is_dir( $dir ) ) 
	{
		if( $dh = opendir( $dir ) ) 
		{
			$files = array();
			while( $files[] = readdir( $dh ) );
			sort( $files );
			closedir( $dh );

			foreach( $files as $file ) 
			{
				if( is_dir( $dir . "/" . $file ) )
				{
					if( $file == "." || $file == ".." || $file == "" )
					{
						continue;
					}
					
					$img = ( $os == "windows" ) ? "settings-26" : "dropbox-26";
					
					if( $file == "devel" )
					{
						$line = "<tr style='height:40px'>";
						$line .= "<td width='40' align='right'><img width='26' src='images/$img.png'/></td>";
						$line .= "<td width='80'><a style='font-size:22pt;margin-left:10px' class='ilabdownload' href='" . WWWROOT . "/download/devel/$os'> " . ucfirst( $file ) . "</a></td>";
						$line .= "</tr>";
						$output .= $line;
					}
					else
					{
						$line = "<tr style='height:30px'>";
						$line .= "<td width='40' align='right'><img width='16' src='images/$img.png'/></td>";
						$line .= "<td width='80'><a style='margin-left:10px' class='ilabdownload' href='" . WWWROOT . "/download/$file/$os'>" . ucfirst( $file ) . "</a></td>";
						$line .= "</tr>";
						$output .= $line;
					}
				}
			}
		}
	}
	
	return $output . "</table>";
}


function GetQuery( $lowercase = false )
{
	$query = isset( $_GET[ 'q' ] ) ? $_GET[ 'q' ] : false;

	if( $query == false )
	{
		print "Beautiful error";
		exit;
	}

	if( $lowercase == true )
	{
		$parts = array();
		
		foreach( explode( "/" , $query ) as $part )
		{
			$parts[] = strtolower( $part );
		}
	}
	
	return isset( $parts ) ? $parts : explode( "/" , $query );
}