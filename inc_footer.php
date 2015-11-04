<?php

print "</div>
			<div class='footer'>
			
				<span class='footerblock' id='mb1'>
					<a href='' target='_blank'>
						<img src='" . WWWROOT . "/images/bug-white.png' height='50'/><br/>
							<h5>Bugs</h5>
					</a>
				</span>
				<span class='footerblock' id='mb2'>
					<a href='" . WWWROOT . "/go/github' target='_blank'>
						<img src='" . WWWROOT . "/images/github-white.png' height='50'/><br/>
							<h5>Development</h5>
					</a>
				</span>
				<span class='footerblock' id='mb3'>
					<a href='" . WWWROOT . "/video/watch' target='_blank'>
						<img src='" . WWWROOT . "/images/video-white.png' height='50'/><br/>
							<h5>Video</h5>
					</a>
				</span>
				<span class='footerblocklogo'>
					<img src='" . WWWROOT . "/images/intel.png' />
				</span>
				<span class='footerblock' id='mb4'>
					<a href='" . WWWROOT . "/go/docs' target='_blank'>
						<img src='" . WWWROOT . "/images/document-white.png' height='50'/><br/>
							<h5>Documentation</h5>
					</a>
				</span>
				<span class='footerblock' id='mb5'>
					<a href='" . WWWROOT . "/go/dudes' target='_blank'>
						<img src='" . WWWROOT . "/images/person-white.png' height='50'/><br/>
							<h5>Contact</h5>
					</a>
				</span>
				<span class='footerblock' id='mb6'>
					<a href='" . WWWROOT . "/ovf/start'>
						<img src='" . WWWROOT . "/images/deploy.png' height='50'/><br/>
							<h5>Template Deployer</h5>
					</a>
				</span>
					
			</div>
		
		<script language='javascript'>"; 
?>

	function loading( num )
	{
		$( "#mb" + num ).animate(
		{
			opacity: 1.0,
			left: "-=50",
			height: "toggle"
		}, 150, function() 
		{
			if( num != 6 )
			{
				loading( num + 1 ); 
			}
			
			$( "#mb" + num ).animate(
			{
				opacity: 0.8,
				left: "+=50",
				height: "toggle"
			}, 150 );
		});
	}

	$( document ).ready( function()
	{
		loading( 1 );
		
		$( ".osimage, .footerblock" ).hover(function()
		{
			$( this ).animate(
			{
				opacity: 1.0
			}, 750 );
		},
		function()
		{
			$( this ).animate(
			{
				opacity: 0.6
			}, 750 );
		});
		
		$( "a.ilabdownload" ).click(function( event )
		{
			event.preventDefault();
			url = $( this ).attr( "href" );
			$( "#content" ).fadeTo( "fast", 1.0, function() 
			{
				document.location.href = url;
				$( "#content" ).fadeTo( 2000 , 0.25 );
			});
        });
    
        resizeVideoJS(); // Initialize the function
    });

    $( window ).resize(function() { resizeVideoJS();  });
    
    function resizeVideoJS()
    {
        var myPlayer = $( "#ilabprepvideo" );
        var aspectRatio = 16/9;
        var height = document.getElementById( "pageContent" ).offsetHeight - 20;
        myPlayer.height( height ).width( height * aspectRatio );
        var pcenter = window.width / 2;
        var vwidth = ( height * aspectRatio );
        var vleft = Math.round( pcenter - (vwidth / 2) , 0 );
        myPlayer.css( { left: vleft, position:'absolute' } );
    }
<?php

print "</script>
		
	</body>
</html>";

		
