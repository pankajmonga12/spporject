	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU1 -->
			<ul class="page-sidebar-menu hidden-sm hidden-xs" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: Remove data-hover="megadropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->

				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search sidebar-search-bordered" action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<button class="btn submit"><i class="icon-magnifier"></i></button>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
											<li  class="<?php if ($active == 'cat') {
												echo 'active';
											} ?>">
												<a href="/category">Add Category</a>
											</li>
											<li class="<?php if ($active == 'subcat') {
												echo 'active';
											} ?>">
												<a href="/subcategory">Add SubCategory</a>
											</li>
											<li>
												<a href="/subcategory">Add SubCategory</a>
											</li>
											<li>
												<a href="/addeligibility">Add Eligibilities</a>
											</li>
											<li>
												<a href="/addagelimit">Add age limit</a>
											</li>
											<li>
												<a href="/addqualification">Add Qualification</a>
											</li>
											<li>
												<a href="/addjob">Add New Job</a>
											</li>
											<li>
												<a href="/jobboardlist">Job Listing</a>
											</li>
										</ul>
									</div>
							
		</div>