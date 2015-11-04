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

print "		
	<img id='top' src='" . WWWROOT . "/images/top.png' alt=''>
		<div id='form_container'>
			<h1><a>OVF Template Deployer</a></h1>
			<form id='form_782309' class='appnitro'>
				<div class='form_description'>
					<h2>OVF Template Deployer</h2>
					<p>Deploy an OVF template to the ILab hypervisor/cluster</p>
				</div>						
				<ul >						
					<li id='li_1' >
					<label class='description' for='element_1'>Hypervisor User </label>
					<div>
						<input id='element_1' name='element_1' class='element text medium' type='text' maxlength='255' value=''/> 
					</div> 
					</li>		
					<li id='li_2' >
					<label class='description' for='element_2'>Hypervisor Password </label>
					<div>
						<input id='element_2' name='element_2' class='element text medium' type='text' maxlength='255' value=''/> 
					</div> 
					</li>		
					<li id='li_6' >
					<label class='description' for='element_6'>Image </label>
					<div>
					<select class='element select medium' id='element_6' name='element_6'> 
						<option value='' selected='selected'></option>
						<option value='1' >Fedora 16</option>
						<option value='2' >Fedora 17 32</option>
						<option value='3' >Centos 64</option>
					</select>
					</div> 
					</li>		
					<li id='li_5' >
					<label class='description' for='element_5'>Target Tree Path </label>
					<div>
						<input id='element_5' name='element_5' class='element text medium' type='text' maxlength='255' value=''/> 
					</div> 
					</li>		
					<li id='li_4' >
					<label class='description' for='element_4'>Virtual Machine Name </label>
					<div>
						<input id='element_4' name='element_4' class='element text medium' type='text' maxlength='255' value=''/> 
					</div> 
					</li>		
					<li id='li_3' >
					<label class='description' for='element_3'>Hypervisor Datastore </label>
					<div>
						<input id='element_3' name='element_3' class='element text medium' type='text' maxlength='255' value=''/> 
					</div> 
					</li>				
					<li class='buttons'>
						<input type='hidden' name='form_id' value='782309' />
						<input id='deployForm' class='button_text' type='button' name='submit' value='Submit' />
					</li>
				</ul>
			</form>	
		</div>
	<img id='bottom' src='" . WWWROOT . "/images/bottom.png' alt=''>";
			
include_once( "inc_footer.php" );	