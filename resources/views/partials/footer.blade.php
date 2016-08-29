</div> <!-- Header Container Closed -->	
	</body>
</html>
<script type="text/javascript" src="assets/js/jquery-3.1.0.min.js"></script>

<!-- Script to lazy load images -->
<script>
	jQuery(function($){
			
		$('.youtube').each(function( index, value ) {
		  	$(this).on('click',function(e){
		  		e.preventDefault();
		  		 var hash =  "https://www.youtube.com/embed/"+$(this).data('video-hash')+"?autoplay=1";
		  		 $('iframe',this).attr('src', hash);
		  		 $('.play-button',this).hide();
		  	});
		});

	});

</script>