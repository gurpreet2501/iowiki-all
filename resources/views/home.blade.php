@include('partials.header')
	<div class="row">
		<div class="col-md-8">
			 	<!-- main content areas -->
		<?php $test = 'Hello';	 	 ?>
		@include('category.php')
		@include('category.technology')
		@include('videos')
		</div>
		<div class="col-md-4">
			<!-- Sidebar -->
		</div>
	</div>
@include('partials.footer') 