<?php

include_once( "inc_header.php" );

print "
	<div id='content'></div>	
	<div class='blockscontainer'>
		<table width='100%'>
			<tr>
				<td style='text-align:center;vertical-align:top;width:200px'>
					<img src='" . WWWROOT . "/images/distros/win7.png' width='120' style='margin:10px'/><br/>
					<img src='" . WWWROOT . "/images/distros/win8.png' width='120' style='margin:10px'/><br/>
					<img src='" . WWWROOT . "/images/distros/win10.png' width='120' style='margin:10px'/><br/>
					<img src='" . WWWROOT . "/images/distros/win2008.png' width='120' style='margin:10px'/><br/>
					<img src='" . WWWROOT . "/images/distros/win2012.png' width='120' style='margin:10px'/><br/>
				</td>
				<td style='text-align:center;vertical-align:top;width:200px'>
					<img class='osimage' src='" . WWWROOT . "/images/win.png' height='120'/>" . PrintReleases( 'windows' ) . "<br/>
				</td>
				<td style='text-align:center;vertical-align:top;width:200px'>
					<img class='osimage' src='" . WWWROOT . "/images/lin.png' height='120'/>" . PrintReleases( 'linux' ) . "<br/>
				</td>
				<td style='text-align:center;vertical-align:top;width:200px'>
					<table>
						<tr>
							<td style='width:33%;text-align:left'>
								<img src='" . WWWROOT . "/images/distros/arch.png' width='40' style='margin:10px'/><br/>
								<img src='" . WWWROOT . "/images/distros/centos.png' width='40' style='margin:10px'/><br/>
								<img src='" . WWWROOT . "/images/distros/debian.png' width='40' style='margin:10px'/><br/>
								<img src='" . WWWROOT . "/images/distros/fedora.png' width='40' style='margin:10px'/><br/>
							</td>
							<td style='width:33%;text-align:right'>
								<img src='" . WWWROOT . "/images/distros/gentoo.png' width='40' style='margin:10px'/><br/>
								<img src='" . WWWROOT . "/images/distros/mandriva.png' width='40' style='margin:10px'/><br/>
								<img src='" . WWWROOT . "/images/distros/redhat.png' width='40' style='margin:10px'/><br/>
								<img src='" . WWWROOT . "/images/distros/slackware.png' width='40' style='margin:10px'/><br/>

							</td>
							<td style='width:33%;text-align:right'>
								<img src='" . WWWROOT . "/images/distros/suse.png' width='40' style='margin:10px'/><br/>
								<img src='" . WWWROOT . "/images/distros/ubuntu.png' width='40' style='margin:10px'/><br/>
								<img src='" . WWWROOT . "/images/distros/freebsd.png' width='40' style='margin:10px'/><br/>
								<a href='" . WWWROOT . "/downloads/ilab.run' download>
								<img src='" . WWWROOT . "/images/distros/puppet.png' width='40' style='margin:10px'/><br/>
								</a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>";
			
include_once( "inc_footer.php" );	