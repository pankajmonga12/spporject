<!DOCTYPE html>
<html>
<?php echo ($header) ?> 
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo">
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			
			</a>
			<div class="menu-toggler sidebar-toggler">
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<!-- DOC: Remove "hor-menu-light" class to have a horizontal menu with theme background instead of white background -->
		<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) in the responsive menu below along with sidebar menu. So the horizontal menu has 2 seperate versions -->
	
		<!-- END HORIZANTAL MENU -->
		<!-- BEGIN HEADER SEARCH BOX -->
		<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
		<form class="search-form" action="extra_search.html" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="query">
				<span class="input-group-btn">
				<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
				</span>
			</div>
		</form>
		<!-- END HEADER SEARCH BOX -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
		
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="../../assets/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					Admin </span>
					
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="{!! URL::to('logout') !!}">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->

	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU1 -->
			<ul class="page-sidebar-menu hidden-sm hidden-xs" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<!-- DOC: This is mobile version of the horizontal menu. The desktop version is defined(duplicated) in the header above -->
			
			
				
				<?php echo $submenu; ?>
				
			</ul>
			<!-- END SIDEBAR MENU1 -->
			<!-- END RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			




				
				<!-- /.modal-dialog -->




	
  
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->

			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Job Board List
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="/">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					 <li>
						<i class="fa"></i>
						<a href="#">User Search List</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
			</div>
			<!-- END PAGE CONTENT-->
			<div class="row">
				<meta name="csrf-token" content="{{ csrf_token() }}" />
				<?php  echo "<pre> Data : ".print_r( $usersearchData , TRUE )."</pre>"; ?>

			</div>
        {!! $usersearchData->render() !!}
			</div>
			
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	
		</div>
	</div>
	<!-- END QUICK SIDEBAR -->
</div>
</body>
<footer>
	<?php echo ($footer) ?> 
</footer>
<style type="text/css">
	select {
    max-width: 226px;
}
</style>
<script>
    jQuery(document).ready(function() {    
       Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
    });
  </script>


</html>


 
<script type="text/javascript">
	function DeleteJob(id) {
   
    if (confirm("Are You Sure you want to Delete ? ") == true) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       var user = {
            id: id,
            _token: CSRF_TOKEN
        }

      $.ajax({
            url: 'deletejob',
            type: 'post',
            data: user,
            dataType: 'json',
            success: function (data) {
                   console.log(data);
                   if (data.status==true) {}
                  window.location.reload();
            },
            
        });

    } else {
      

    }
    
}
</script>


<script type="text/javascript">
	function Deletepost(id) {
   
    if (confirm("Are You Sure you want to Delete ? ") == true) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       var user = {
            id: id,
            _token: CSRF_TOKEN
        }

      $.ajax({
            url: 'deletepost',
            type: 'post',
            data: user,
            dataType: 'json',
            success: function (data) {
                   console.log(data);
                   if (data.status==true) {}
                  window.location.reload();
            },
            
        });

    } else {
      

    }
    
}
</script>

<script type="text/javascript">
	
	function Editjob(id) {

         window.open('jobboardedit/'+id, "MsgWindow", "width=1000, height=1000");
	}
</script>


<script type="text/javascript">
	function Addpost( id) {
     
     document.getElementById('pid').value = id;
     document.getElementById('postTable').innerHTML = '';

     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var post = {
            id: id,
            _token: CSRF_TOKEN
        }

      $.ajax({
            url: 'fetchposttype',
            type: 'post',
            data: post,
            dataType: 'json',
            success: function (obj) {
                   console.log(obj);
                
                var tr="<tr>";
				var td1="<td>Post For</td>";
				var td2="<td>Eligibility</td>";
				var td3="<td>Qualification</td>";
				var td4="<td>No Of Post</td>";
				var td5="<td colspan='2'>Action</td></tr>";

				$("#postTable").append(tr+td1+td2+td3+td4+td5);

				for(var i=0;i<obj.length;i++)
				{

				var tr="<tr>";
				var td1="<td>"+obj[i]["posttype"]+"</td>";
				var td2="<td>"+obj[i]["eligibility"]+"</td>";
				var td3="<td>"+obj[i]["qualification"]+"</td>";
				var td4="<td>"+obj[i]["no_of_post"]+"</td>";
				var td5="<td> <button onclick=Deletepost("+obj[i]["id"]+") >Delete Post</button></td>";
				var td6="<td> <button onclick=Editpostdata("+obj[i]["id"]+") >Edit Post</button></td></tr>";

				$("#postTable").append(tr+td1+td2+td3+td4+td5+td6); 

				} 
                
            },
            
        });

		$('#change-category').modal('show');
	}
</script>
<script type="text/javascript">
	function Editpostdata(id) {
		
		//console.log(id);
		document.getElementById('pcid').value = id;
		
		$('#change-category').modal('hide');
		

		//document.getElementById('pid').value = id;
  
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
         
        var postData = {
            id: id,
            _token: CSRF_TOKEN
        }

         console.log(postData);

         $.ajax({
            url: 'fetchposttypedata',
            type: 'post',
            data: postData,
            dataType: 'json',
            success: function (obj) {
                   console.log(obj);
                   document.getElementById('posttypep').value = obj[0].posttype;
                   document.querySelector('[name="eligibilityp"]').value = obj[0].eligibility;
                   document.querySelector('[name="qualificationp"]').value = obj[0].qualification;
                   document.querySelector('[name="exp_reqp"]').value = obj[0].exp_req;
                   document.querySelector('[name="age_limitp"]').value = obj[0].age_limit;
                   document.querySelector('[name="max_age_limitp"]').value = obj[0].max_age_limit;
                   document.querySelector('[name="scst_min_age_limitp"]').value = obj[0].scst_min_age_limit;
                   document.querySelector('[name="scst_max_age_limitp"]').value = obj[0].scst_max_age_limit;
                   document.querySelector('[name="obc_min_age_limitp"]').value = obj[0].obc_min_age_limit;
                   document.querySelector('[name="obc_max_age_limitp"]').value = obj[0].obc_max_age_limit;
                   document.querySelector('[name="other_min_age_limitp"]').value = obj[0].other_min_age_limit;
                   document.querySelector('[name="other_max_age_limitp"]').value = obj[0].other_max_age_limit;
                   document.querySelector('[name="no_of_postp"]').value = obj[0].no_of_post;
                   document.querySelector('[name="post_descriptionp"]').value = obj[0].post_description;
                   document.querySelector('[name="application_feesp"]').value = obj[0].application_fees;
                   document.querySelector('[name="scst_application_feesp"]').value = obj[0].scst_application_fees;
                   document.querySelector('[name="obc_application_feesp"]').value = obj[0].obc_application_fees;
                   document.querySelector('[name="others_application_feesp"]').value = obj[0].others_application_fees;
                 
                $('#changepostdata').modal('show');
            },
            
        });
	}
</script>
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>