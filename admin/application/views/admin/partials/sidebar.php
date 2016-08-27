<div id="sidebar-wrapper" class="collapse sidebar-collapse">

	<div id="search">
		<!-- <form>
			<input class="form-control input-sm" type="text" name="search" placeholder="Search..." />
			<button type="submit" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
		</form>		 -->
	</div>
	<!-- #search -->

	<nav id="sidebar">
		<ul id="main-nav" class="open-active">
			
            <?php 

                build_menu([
                    ['Posts', 'data/posts/'],
                    ]);

                // build_dropdown_menu('Job Openings', 'fa fa-table', [
                //     ['Internship Jobs', 'data/internship'],
                //     ['Part Time Jobs', 'data/part_time'],
                //     ['Full Time jobs', 'data/full_time']
                // ]);
            ?>
		</ul>
	</nav> <!-- #sidebar -->
</div> <!-- /#sidebar-wrapper -->