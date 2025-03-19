

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>Admin | Add / Edit Profile</title>
    	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		
   		<!-- Bootstrap & custom css -->
		<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/custom.css" rel="stylesheet" type="text/css" />
    
    	<!-- Font Awsome -->
		<script src="https://kit.fontawesome.com/48403ccd1a.js" crossorigin="anonymous"></script>
		
    	<!-- Ionicons -->
    	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
   		
		<!-- Theme css -->
    	<link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    	<link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
		
   		<!-- Checkbox css -->
		<link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
        
        <!-- Validation css -->
		<link href="../css/validate.css" rel="stylesheet" type="text/css" />
        
        <!-- Chosen Css -->
    	<link rel="stylesheet" href="../css/prism.css">
    	<link rel="stylesheet" href="../css/chosen.css"> -->
        
        <script type="text/javascript">
            var numDays = {
                '01': 31,
                '02': 28,
                '03': 31,
                '04': 30,
                '05': 31,
                '06': 30,
                '07': 31,
                '08': 31,
                '09': 30,
                '10': 31,
                '11': 30,
                '12': 31
             };

             function setDays(oMonthSel, oDaysSel, oYearSel) {
                var nDays, oDaysSelLgth, opt, i = 1;
                nDays = numDays[oMonthSel[oMonthSel.selectedIndex].value];
                if (nDays == 28 && oYearSel[oYearSel.selectedIndex].value % 4 == 0)
                ++nDays;
                oDaysSelLgth = oDaysSel.length;
                if (nDays != oDaysSelLgth) {
                    if (nDays < oDaysSelLgth) oDaysSel.length = nDays;
                    else
                        for (i; i < nDays - oDaysSelLgth + 1; i++) {
                            opt = new Option(oDaysSelLgth + i, oDaysSelLgth + i);
                            oDaysSel.options[oDaysSel.length] = opt;
                        }
                }
                var oForm = oMonthSel.form;
                var month = oMonthSel.options[oMonthSel.selectedIndex].value;
                var day = oDaysSel.options[oDaysSel.selectedIndex].value;
                var year = oYearSel.options[oYearSel.selectedIndex].value;
                //oForm.datepicker.value = year + '-' + month + '-' + day;
             }
        </script>
        <script type="text/javascript">
            function check_status(status) {
                //alert(status);
                if (status == 'Never Married') {
                    $('#dis_child').hide();
                }
                if (status == 'Widower') {
                    $('#dis_child').show();
                }
                if (status == 'Widow') {
                    $('#dis_child').show();
                }
                if (status == 'Divorced') {
                    $('#dis_child').show();
                }
                if (status == 'Awaiting Divorce') {
                    $('#dis_child').show();
                }
             }
        </script>
        <style>
            .default {
                width: 252px !important;
            }
        </style>
    </head>
    <body class="skin-blue">
        <!-- Icon Loader -->
        <div class="preloader-wrapper text-center">
        	<div class="spinner"></div>
        </div>
        <!-- /. Icon Loader-->
        <div class="wrapper" style="display:none" id="body">
    		<!-- Header & Menu -->
            <!-- Font Awsome -->
<link href="../css/font/css/fontawesome.min.css" rel="stylesheet">
<link href="../css/font/css/all.min.css" rel="stylesheet">
<header class="main-header">
	<a href="dashboard" class="logo"><b>Control</b> Panel</a>
	<nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
       	<a href="javascript:;" class="sidebar-toggle" data-toggle="offcanvas" role="button"><i class="fas fa-bars"></i></a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              	<li class="dropdown user user-menu">
                	<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                  		<span class="hidden-xs">Hello, <b class="font600">admin1</b></span>
                	</a>
                	<ul class="dropdown-menu">
                  		<li class="user-header">
                    		<p>inlogixinfoway@gmail.com</p>
                  		</li>
                	</ul>
              	</li>
              	<li>
              		<a href="../index" target="_blank" class="">
                		<span class="pull-left mr-10"><i class="fa fa-desktop fontS12"></i></span>
                    	<span class="pull-left">Front End</span>
                    	<div class="clearfix"></div>
                	</a>
              	</li>
              	<li>
              		<a href="index.php?option=logout" class="">
                		<span class="pull-left mr-10"><i class="fas fa-sign-out-alt"></i></span>
                    	<span class="pull-left">Logout</span>
                    	<div class="clearfix"></div>
                	</a>
             	</li>
           	</ul>
        </div>
	</nav>
</header> 
            
<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu">
			<li id="dashy">
				<a href="dashboard">
					<i class="fas fa-columns"></i><span>My Dashboard</span>
				</a>
			</li>
            
            			<li id="first">
				<a href="first_form_data">
					<i class="fa fa-user"></i><span>First Form Data</span>
				</a>
			</li>
                        
            			<li class="treeview" id="site-settings">
				<a href="javascript:;">
					<i class="fa fa-cogs"></i>
					<span>Site Settings</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="sitelogo">
						<a href="SiteLogo" title="Update Favicon & Logo" >
							<i class="fa fa-square"></i>Update Favicon & Logo
						</a>
					</li>
					<li id="homepagebanner">
						<a href="SiteHomepageBanner" title="Update Home Page Banner" >
							<i class="fa fa-square"></i>Update Home Page Banner
						</a>
					</li>
					<li id="photowatermark">
						<a href="SitePhotoWatermark" title="Update Photo Watermark" >
							<i class="fa fa-square"></i>Update Watermark
						</a>
					</li>
					<li id="sitefield">
						<a href="SiteFieldSetting" title="Enable / Disable Field" >
							<i class="fa fa-square"></i>Enable / Disable Fields
						</a>
					</li>
					<li id="sitemenu">
						<a href="SiteMenuSetting" title="Enable / Disable Menu Item" >
							<i class="fa fa-square"></i>Enable / Disable Menu Item
						</a>
					</li>
					<li id="sitechangeid">
						<a href="SiteChangeId">
							<i class="fa fa-square"></i>Update Profile Id
						</a>
					</li>
					<li id="siteupdateemail">
						<a href="SiteUpdateEmail">
							<i class="fa fa-square"></i>Update Email Settings
						</a>
					</li>
					<li id="sitebasicsetting">
						<a href="SiteBasicSetting">
							<i class="fa fa-square"></i>Update Basic Site Update
						</a>
					</li>
					<li id="sitebasicconfig">
						<a href="SiteConfig">
							<i class="fa fa-square"></i>Update Basic Site Config
						</a>
					</li>
					<li id="siteanalyticscode">
						<a href="SiteAnalyticsCode">
							<i class="fa fa-square"></i>Update/Add Analytics Code
						</a>
					</li>
					<li id="sitepassword">
						<a href="SitePassword">
						<i class="fa fa-square"></i>Change Password
						</a>
					</li>
					<li id="sitesocialicon">
						<a href="SiteSocialIcon">
							<i class="fa fa-square"></i>Update Social Media Link
						</a>
					</li>
                    <li id="siteandroidbanner">
						<a href="SiteAndroidSettings">
							<i class="fa fa-square"></i>Android App Banner Setting
						</a>
					</li>
				</ul>
			</li>
                        <li class="treeview" id="frenchisee">
                <a href="javascript:;">
                    <i class="fas fa-user-tie"></i>
                    <span class="mr-10">Franchisee</span><span class="label label-danger">ADDON</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li id="franchisee_all">
                        <a href="franchise_all">
                            <i class="fa fa-square"></i>All Franchisee
                        </a>
                    </li>
                <li id="franchisee_payment_request">
                    <a href="frenchise_payment_pending">
                        <i class="fa fa-square"></i>Payment Request Pending</span>
                    </a>
                </li>
                <li id="franchisee_payment_done">
                    <a href="frenchise_payment_done">
                        <i class="fa fa-square"></i>Payment Request Approved</span>
                    </a>
                </li>

                </ul>
            </li>
            
            <li class="treeview" id="staff">
                <a href="javascript:;">
                    <i class="fas fa-user-friends"></i><span class="mr-10">Staff</span><span class="label label-danger">ADDON</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li id="Allstaff">
                        <a href="module_staff_all">
                            <i class="fa fa-square"></i>All Staff
                        </a>
                    </li>
                    <li id="AddStaff">
                        <a href="module_staff_add">
                            <i class="fa fa-square"></i>Add Staff
                        </a>
                    </li>
                </ul>
            </li>
            
            
            			<li class="treeview" id="add-new">
				<a href="javascript:;">
					<i class="fa fa-plus"></i>
					<span>Add New Details</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="religion">
						<a href="updateWebSiteReligion">
							<i class="fa fa-square"></i>Add Religion
							<span class="label label-primary pull-right">11</span>
						</a>
					</li>
					<li id="caste">
						<a href="updateWebSiteCaste">
							<i class="fa fa-square"></i>Add Caste
							<span class="label label-primary pull-right">851</span>
						</a>
					</li>
					<li id="subcaste">
						<a href="updateWebSiteSubCaste">
							<i class="fa fa-square"></i>Add Sub Caste
							<span class="label label-primary pull-right">1</span>
						</a>
					</li>
					<li id="country">
						<a href="updateWebSiteCountry">
							<i class="fa fa-square"></i>Add Country
							<span class="label label-primary pull-right">230</span>
						</a>
					</li>
					<li id="state">
						<a href="updateWebSiteState">
							<i class="fa fa-square"></i>Add State
							<span class="label label-primary pull-right">3874</span>
						</a>
					</li>
					<li id="city">
						<a href="updateWebSiteCity">
							<i class="fa fa-square"></i>Add City
							<span class="label label-primary pull-right">35363</span>
						</a>
					</li>
					<li id="occup">
						<a href="updateWebSiteOccupation">
						<i class="fa fa-square"></i>Add Occupation
						<span class="label label-primary pull-right">78</span>
						</a>
					</li>
					<li id="edu">
						<a href="updateWebSiteEducation">
							<i class="fa fa-square"></i>Add Education
							<span class="label label-primary pull-right">77</span>
						</a>
					</li>
					<li id="mtongue">
						<a href="updateWebSiteMotherTongue">
							<i class="fa fa-square"></i>Add Mother Tongue
							<span class="label label-primary pull-right">53</span>
						</a>
					</li>
					<li id="star">
						<a href="updateWebSiteStar">
							<i class="fa fa-square"></i>Add Star
							<span class="label label-primary pull-right">28</span>
						</a>
					</li>
					<li id="rasi">
						<a href="updateWebSiteRasi">
							<i class="fa fa-square"></i>Add Rasi(Moonsign)
							<span class="label label-primary pull-right">12</span>
						</a>
					</li>
					<li id="income">
						<a href="updateWebSiteAnnualIncome">
							<i class="fa fa-square"></i>Add Annual Income
							<span class="label label-primary pull-right">16</span>
						</a>
					</li>
					<li id="dosh">
						<a href="updateWebSiteDosh">
							<i class="fa fa-square"></i>Add Dosh
							<span class="label label-primary pull-right">11</span>
						</a>
					</li>
				</ul>
			</li>
                        
              
            
			<li class="treeview" id="members">
				<a href="javascript:;">
					<i class="fa fa-users"></i>
					<span>Members</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
                                         <li id="add-members">
						<a href="editprofile">
							<i class="fa fa-square"></i>Add Members
						</a> 
					</li>
                                        
                    					<li id="all-members">
						<a href="members">
							<i class="fa fa-square"></i>All Members
						</a> 
					</li>
					<li id="active-to-paid">
						<a href="memberActiveToPaid">
							<i class="fa fa-square"></i>Active To Paid
						</a>
					</li>
					<li id="renew-member">
						<a href="memberRenew">
							<i class="fa fa-square"></i>Renew Membership
						</a>
					</li>
					<li id="edit-plan-member">
						<a href="edit_plan">
							<i class="fa fa-square"></i>Change Membership Plan
						</a>
					</li>
					<li id="paid-to-spotlight">
						<a href="memberPaidToSpotlight">
							<i class="fa fa-square"></i>Featured Profile
						</a>
					</li>
                    				</ul>
			</li>
                        
            			<li class="treeview" id="match">
				<a href="javascript:;">
					<i class="fa fa-equals"></i>
					<span>Match Making</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="making">
						<a href="new-matchmacking">
							<i class="fa fa-square"></i><span>Profile Match Making</span>
						</a>
					</li>
				</ul>
			</li>
                        
            
            			<li class="treeview" id="mem_ship">
				<a href="javascript:;">
					<i class="fa fa-id-card"></i>
					<span>Membership Plan</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="Addplan">
						<a href="manage_plan">
							<i class="fa fa-square"></i>Add Membership Plan
						</a>
					</li>
					<li id="plan">
						<a href="membership_plan">
							<i class="fa fa-square"></i>Membership Plan 
							<span class="label label-primary pull-right">8</span>
						</a>
					</li>
				</ul>
			</li>
                        
            			<li class="treeview" id="approval">
				<a href="javascript:;">
					<i class="fa fa-user-check"></i>
					<span>Appprovals</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="about-approve">
						<a href="about_me_approval">
							<i class="fa fa-square"></i>About Me Approval
							<span class="label label-primary pull-right">61</span>
						</a>
					</li>
					<li id="expect-approve">
						<a href="part_expect_approval">
							<i class="fa fa-square"></i>Part Expectation Approve
							<span class="label label-primary pull-right">53</span>
						</a>
					</li>
					<li id="aadhaar-approve">
						<a href="aadhaar_approval">
							<i class="fa fa-square"></i>Aadhaar Approval
							<span class="label label-primary pull-right">6</span>
						</a>
					</li>
					<li id="succ-approve">
						<a href="success_story_approval">
							<i class="fa fa-square"></i>Success Approval
							<span class="label label-primary pull-right">0</span>
						</a>
					</li>
					<li id="horoscope-approve">
						<a href="horoscop_approval">
							<i class="fa fa-square"></i>Horoscope Approval
							<span class="label label-primary pull-right">1</span>
						</a>
					</li>
					<li id="photo1-approve">
						<a href="photo1_approval">
							<i class="fa fa-square"></i>Photo1 Approval
							<span class="label label-primary pull-right">11</span>
						</a>
					</li>
					<li id="photo2-approve">
						<a href="photo2_approval">
							<i class="fa fa-square"></i>Photo2 Approval
							<span class="label label-primary pull-right">0</span>
						</a>
					</li>
					<li id="photo3-approve">
						<a href="photo3_approval">
							<i class="fa fa-square"></i>Photo3 Approval
							<span class="label label-primary pull-right">0</span>
						</a>
					</li>
					<li id="photo4-approve">
						<a href="photo4_approval">
							<i class="fa fa-square"></i>Photo4 Approval
							<span class="label label-primary pull-right">0</span>
						</a>
					</li>
					<li id="photo5-approve">
						<a href="photo5_approval">
							<i class="fa fa-square"></i>Photo5 Approval
							<span class="label label-primary pull-right">0</span>
						</a>
					</li>
					<li id="photo6-approve">
						<a href="photo6_approval">
							<i class="fa fa-square"></i>Photo6 Approval
							<span class="label label-primary pull-right">0</span>
						</a>
					</li>
				</ul>
			</li>
                        
            
            			<li class="treeview" id="advmain">
				<a href="javascript:;">
					<i class="fa fa-ad"></i>
					<span>Advertise</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>

				<ul class="treeview-menu">
					<li id="adv">
						<a href="Advertise">
							<i class="fa fa-square"></i>Advertisement
						</a>
					</li>
				</ul>
			</li>
                        
            			<li class="treeview" id="useractivity">
				<a href="javascript:;">
					<i class="fa fa-user"></i>
					<span>User Activity</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="memexpdet">
						<a href="memberExpInterestDetail">
							<i class="fa fa-square"></i>Express Interest
							<span class="label label-primary pull-right">22</span>
						</a>
					</li>
					<li id="memmsgdet">
						<a href="memberMessageDetails">
							<i class="fa fa-square"></i>Message
							<span class="label label-primary pull-right">23</span>
						</a>
					</li>
					<li id="memviewedprofile">
						<a href="memberWhoViewedProfile">
							<i class="fa fa-square"></i>Viewed Profile
							<span class="label label-primary pull-right">35</span>
						</a>
					</li>
					<li id="memblockedprofile">
						<a href="memberBlockedProfile">
							<i class="fa fa-square"></i>Blocked Profile
							<span class="label label-primary pull-right">2</span>
						</a>
					</li>
					<li id="memshortlistedprofile">
						<a href="memberShortlistedProfile">
							<i class="fa fa-square"></i>Shortlisted Profile
							<span class="label label-primary pull-right">4</span>
						</a>
					</li>
					<li id="memphotoreq">
						<a href="memberPhotoPasswordReq">
							<i class="fa fa-square"></i> Photo Password Req
							<span class="label label-primary pull-right">0</span>
						</a>
					</li>
				</ul>
			</li>
                        
            			<li class="treeview" id="cms">
				<a href="javascript:;">
				<i class="fa fa-book"></i>
				<span>Content Management</span>
				<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="cms_page">
						<a href="cms_pages">
							<i class="fa fa-square"></i>CMS Pages <span class="label label-primary pull-right">9</span>
						</a>
					</li>
				</ul>
			</li>
                        
            			<li class="treeview" id="email-temp">
				<a href="javascript:;">
					<i class="fa fa-envelope"></i>
					<span>Email Templates</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="add-new-email">
						<a href="addNewEmailTemplate">
							<i class="fa fa-square"></i>Add New Email Template
						</a>
					</li>
					<li id="list-email">
						<a href="EmailTemplates">
							<i class="fa fa-square"></i>All Email Templates
							<span class="label label-primary pull-right">7</span>
						</a>
					</li>
				</ul>
			</li>
                        
            
            			<li class="treeview" id="payment">
				<a href="javascript:;">
					<i class="fa fa-credit-card"></i>
					<span>Payment Option</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="pay-add">
						<a href="PaymentOption">
							<i class="fa fa-square"></i>Manage Payment Option
						</a>
					</li>
				</ul>
			</li>
                        
            			<li class="treeview" id="sales">
				<a href="javascript:;">
					<i class="fa fa-file-alt"></i>
					<span>Member Report</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="reportMember">
						<a href="member-report/member-report.csv">
							<i class="fa fa-square"></i>Export Members to Excel File 
						</a>
					</li>
					<li id="reportSales">
						<a href="SalesReport">
							<i class="fa fa-square"></i>Sales Report
						</a>
					</li>
				</ul>
			</li>
                                    
			<li id="contactus">
				<a href="contactus_data">
					<i class="fa fa-phone-alt"></i><span>Contact Us Data</span>
				</a>
			</li>
                        			<li class="treeview" id="send-email">
				<a href="javascript:;">
					<i class="fa fa-paper-plane"></i>
					<span>Send Email</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="email-list">
						<a href="SendEmail">
							<i class="fa fa-square"></i>Send Email To Members
						</a>
					</li>
				</ul>
			</li>
                        
            			<li class="treeview" id="database">
				<a href="javascript:;">
					<i class="fa fa-download"></i><span>Database Operation</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li id="expdata">
						<a href="DatabaseBackup">
							<i class="fa fa-square"></i>Database BackUp
						</a>
					</li>
				</ul>
			</li>
            		</ul>
	</section>
</aside>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142522590-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142522590-1');
</script>
            <!-- /. Header & Menu -->
            <div class="content-wrapper">
                <section class="content-header">
				    <h1 class="lightGrey">Add Members</h1>
				    <ol class="breadcrumb">
					  	<li><a href="dashboard"><i class="fa fa-home"></i> Home</a></li>
				        <li class="active">Add Members</li>
				    </ol>
				</section>
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="box-top updateSite">
                                <div class="row">
                                    <div class="col-lg-2 col-xs-12 col-sm-6">
                                        <a href="members" class="btn btn-success btn-lg btn-block">
                                            <i class="fa fa-users"></i>All Member
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-xs-12 col-sm-6">
                                        <a href="editprofile?action=ADD" class="btn btn-success btn-lg btn-block">
                                            <i class="fa fa-user-plus"></i>Add Member
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <section class="content">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs nav-justified mt-10">
                                    <li class="active">
                                        <a href="#tab_1" data-toggle="tab">Member Details</a>
                                    </li>
                                    <li>
                                        <a href="#tab_2" data-toggle="tab">Upload Photos</a>	
                                    </li>
                                    <li>
                                        <a href="#tab_3" data-toggle="tab">Partner Preference </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <form method="post" name="user_detail" id="user_detail">
                                            <h3 class="text-success">
                                                <i class="fa fa-file-text gtMarginRight10"></i>Basic Details
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                 <label>First Name</label>
                                                                 <input type="text" class="form-control" placeholder="Enter First Name" data-validetta="required" value="" name="firstname">
                                                            </div>
                                                            <div class="col-xs-6">
                                                                 <label>Last Name</label>
                                                                 <input type="text" class="form-control" placeholder="Enter Last Name" data-validetta="required" value="" name="lastname">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Date Of Birth</label>
                                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <select name="day" id="day" class="form-control" onchange="setDays(month,this,year)" data-validetta="required">
                                                                    <option value="">Select</option>
                                                                    					
                                                                    <option value="01" >01</option>
                                                                    <option value="02" >02</option>
                                                                    <option value="03" >03</option>
                                                                    <option value="04" >04</option>
                                                                    <option value="05" >05</option>
                                                                    <option value="06" >06</option>
                                                                    <option value="07" >07</option>
                                                                    <option value="08" >08</option>
                                                                    <option value="09" >09</option>
                                                                    <option value="10" >10</option>
                                                                    <option value="11" >11</option>
                                                                    <option value="12" >12</option>
                                                                    <option value="13" >13</option>
                                                                    <option value="14" >14</option>
                                                                    <option value="15" >15</option>
                                                                    <option value="16" >16</option>
                                                                    <option value="17" >17</option>
                                                                    <option value="18" >18</option>
                                                                    <option value="19" >19</option>
                                                                    <option value="20" >20</option>
                                                                    <option value="21" >21</option>
                                                                    <option value="22" >22</option>
                                                                    <option value="23" >23</option>
                                                                    <option value="24" >24</option>
                                                                    <option value="25" >25</option>
                                                                    <option value="26" >26</option>
                                                                    <option value="27" >27</option>
                                                                    <option value="28" >28</option>
                                                                    <option value="29" >29</option>
                                                                    <option value="30" >30</option>
                                                                    <option value="31" >31</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <select name="month" id="month" class="form-control" onchange="setDays(this,day,year)" data-validetta="required">
                                                                    <option value="">Select</option>
                                                                    <option value="01" >Jan</option>
                                                                    <option value="02" >Feb</option>
                                                                    <option value="03" >Mar</option>
                                                                    <option value="04" >Apr</option>
                                                                    <option value="05" >May</option>
                                                                    <option value="06" >Jun</option>
                                                                    <option value="07" >Jul</option>
                                                                    <option value="08" >Aug</option>
                                                                    <option value="09" >Sep</option>
                                                                    <option value="10" >Oct</option>
                                                                    <option value="11" >Nov</option>
                                                                    <option value="12" >Dec</option>																		
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <select name="year" id="year" class="form-control" onchange="setDays(month,day,this)" data-validetta="required">
                                                                    <option value="">Select</option>
                                                                                                                                            <option value='2022' >
                                                                            2022                                                                        </option>
                                                                                                                                             <option value='2021' >
                                                                            2021                                                                        </option>
                                                                                                                                             <option value='2020' >
                                                                            2020                                                                        </option>
                                                                                                                                             <option value='2019' >
                                                                            2019                                                                        </option>
                                                                                                                                             <option value='2018' >
                                                                            2018                                                                        </option>
                                                                                                                                             <option value='2017' >
                                                                            2017                                                                        </option>
                                                                                                                                             <option value='2016' >
                                                                            2016                                                                        </option>
                                                                                                                                             <option value='2015' >
                                                                            2015                                                                        </option>
                                                                                                                                             <option value='2014' >
                                                                            2014                                                                        </option>
                                                                                                                                             <option value='2013' >
                                                                            2013                                                                        </option>
                                                                                                                                             <option value='2012' >
                                                                            2012                                                                        </option>
                                                                                                                                             <option value='2011' >
                                                                            2011                                                                        </option>
                                                                                                                                             <option value='2010' >
                                                                            2010                                                                        </option>
                                                                                                                                             <option value='2009' >
                                                                            2009                                                                        </option>
                                                                                                                                             <option value='2008' >
                                                                            2008                                                                        </option>
                                                                                                                                             <option value='2007' >
                                                                            2007                                                                        </option>
                                                                                                                                             <option value='2006' >
                                                                            2006                                                                        </option>
                                                                                                                                             <option value='2005' >
                                                                            2005                                                                        </option>
                                                                                                                                             <option value='2004' >
                                                                            2004                                                                        </option>
                                                                                                                                             <option value='2003' >
                                                                            2003                                                                        </option>
                                                                                                                                             <option value='2002' >
                                                                            2002                                                                        </option>
                                                                                                                                             <option value='2001' >
                                                                            2001                                                                        </option>
                                                                                                                                             <option value='2000' >
                                                                            2000                                                                        </option>
                                                                                                                                             <option value='1999' >
                                                                            1999                                                                        </option>
                                                                                                                                             <option value='1998' >
                                                                            1998                                                                        </option>
                                                                                                                                             <option value='1997' >
                                                                            1997                                                                        </option>
                                                                                                                                             <option value='1996' >
                                                                            1996                                                                        </option>
                                                                                                                                             <option value='1995' >
                                                                            1995                                                                        </option>
                                                                                                                                             <option value='1994' >
                                                                            1994                                                                        </option>
                                                                                                                                             <option value='1993' >
                                                                            1993                                                                        </option>
                                                                                                                                             <option value='1992' >
                                                                            1992                                                                        </option>
                                                                                                                                             <option value='1991' >
                                                                            1991                                                                        </option>
                                                                                                                                             <option value='1990' >
                                                                            1990                                                                        </option>
                                                                                                                                             <option value='1989' >
                                                                            1989                                                                        </option>
                                                                                                                                             <option value='1988' >
                                                                            1988                                                                        </option>
                                                                                                                                             <option value='1987' >
                                                                            1987                                                                        </option>
                                                                                                                                             <option value='1986' >
                                                                            1986                                                                        </option>
                                                                                                                                             <option value='1985' >
                                                                            1985                                                                        </option>
                                                                                                                                             <option value='1984' >
                                                                            1984                                                                        </option>
                                                                                                                                             <option value='1983' >
                                                                            1983                                                                        </option>
                                                                                                                                             <option value='1982' >
                                                                            1982                                                                        </option>
                                                                                                                                             <option value='1981' >
                                                                            1981                                                                        </option>
                                                                                                                                             <option value='1980' >
                                                                            1980                                                                        </option>
                                                                                                                                             <option value='1979' >
                                                                            1979                                                                        </option>
                                                                                                                                             <option value='1978' >
                                                                            1978                                                                        </option>
                                                                                                                                             <option value='1977' >
                                                                            1977                                                                        </option>
                                                                                                                                             <option value='1976' >
                                                                            1976                                                                        </option>
                                                                                                                                             <option value='1975' >
                                                                            1975                                                                        </option>
                                                                                                                                             <option value='1974' >
                                                                            1974                                                                        </option>
                                                                                                                                             <option value='1973' >
                                                                            1973                                                                        </option>
                                                                                                                                             <option value='1972' >
                                                                            1972                                                                        </option>
                                                                                                                                             <option value='1971' >
                                                                            1971                                                                        </option>
                                                                                                                                             <option value='1970' >
                                                                            1970                                                                        </option>
                                                                                                                                             <option value='1969' >
                                                                            1969                                                                        </option>
                                                                                                                                             <option value='1968' >
                                                                            1968                                                                        </option>
                                                                                                                                             <option value='1967' >
                                                                            1967                                                                        </option>
                                                                                                                                             <option value='1966' >
                                                                            1966                                                                        </option>
                                                                                                                                             <option value='1965' >
                                                                            1965                                                                        </option>
                                                                                                                                             <option value='1964' >
                                                                            1964                                                                        </option>
                                                                                                                                             <option value='1963' >
                                                                            1963                                                                        </option>
                                                                                                                                             <option value='1962' >
                                                                            1962                                                                        </option>
                                                                                                                                             <option value='1961' >
                                                                            1961                                                                        </option>
                                                                                                                                             <option value='1960' >
                                                                            1960                                                                        </option>
                                                                                                                                             <option value='1959' >
                                                                            1959                                                                        </option>
                                                                                                                                             <option value='1958' >
                                                                            1958                                                                        </option>
                                                                                                                                             <option value='1957' >
                                                                            1957                                                                        </option>
                                                                                                                                             <option value='1956' >
                                                                            1956                                                                        </option>
                                                                                                                                             <option value='1955' >
                                                                            1955                                                                        </option>
                                                                                                                                             <option value='1954' >
                                                                            1954                                                                        </option>
                                                                                                                                             <option value='1953' >
                                                                            1953                                                                        </option>
                                                                                                                                             <option value='1952' >
                                                                            1952                                                                        </option>
                                                                                                                                             <option value='1951' >
                                                                            1951                                                                        </option>
                                                                                                                                             <option value='1950' >
                                                                            1950                                                                        </option>
                                                                                                                                             <option value='1949' >
                                                                            1949                                                                        </option>
                                                                                                                                             <option value='1948' >
                                                                            1948                                                                        </option>
                                                                                                                                             <option value='1947' >
                                                                            1947                                                                        </option>
                                                                                                                                             <option value='1946' >
                                                                            1946                                                                        </option>
                                                                                                                                             <option value='1945' >
                                                                            1945                                                                        </option>
                                                                                                                                             <option value='1944' >
                                                                            1944                                                                        </option>
                                                                                                                                             <option value='1943' >
                                                                            1943                                                                        </option>
                                                                                                                                             <option value='1942' >
                                                                            1942                                                                        </option>
                                                                                                                                             <option value='1941' >
                                                                            1941                                                                        </option>
                                                                                                                                             <option value='1940' >
                                                                            1940                                                                        </option>
                                                                                                                                             <option value='1939' >
                                                                            1939                                                                        </option>
                                                                                                                                             <option value='1938' >
                                                                            1938                                                                        </option>
                                                                                                                                             <option value='1937' >
                                                                            1937                                                                        </option>
                                                                                                                                             <option value='1936' >
                                                                            1936                                                                        </option>
                                                                                                                                             <option value='1935' >
                                                                            1935                                                                        </option>
                                                                                                                                             <option value='1934' >
                                                                            1934                                                                        </option>
                                                                                                                                             <option value='1933' >
                                                                            1933                                                                        </option>
                                                                                                                                             <option value='1932' >
                                                                            1932                                                                        </option>
                                                                                                                                             <option value='1931' >
                                                                            1931                                                                        </option>
                                                                                                                                             <option value='1930' >
                                                                            1930                                                                        </option>
                                                                                                                                             <option value='1929' >
                                                                            1929                                                                        </option>
                                                                                                                                             <option value='1928' >
                                                                            1928                                                                        </option>
                                                                                                                                             <option value='1927' >
                                                                            1927                                                                        </option>
                                                                                                                                             <option value='1926' >
                                                                            1926                                                                        </option>
                                                                                                                                             <option value='1925' >
                                                                            1925                                                                        </option>
                                                                                                                                             <option value='1924' >
                                                                            1924                                                                        </option>
                                                                                                                                     </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select class="form-control" data-validetta="required" name="gender">
                                                            <option value="">Select Gender</option>
                                                            <option value="Female" > 
                                                                Female 
                                                            </option>
                                                            <option value="Male" >
                                                                Male 
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Profile Created By</label>
                                                        <select class="form-control" name="profileby">
                                                                                                                            <option value="1" >Self</option>
                                                                                                                                <option value="2" >Parents</option>
                                                                                                                                <option value="3" >Guardian</option>
                                                                                                                                <option value="4" >Friends</option>
                                                                                                                                <option value="5" >Sibling</option>
                                                                                                                                <option value="6" >Relatives</option>
                                                                                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email Id</label>
                                                        <input type="email" class="form-control" placeholder="Enter Email Id" data-validetta="required,email" value="" name="email">
                                                    </div>
													<p class="text-danger"><b>Note:- Disabled In Demo</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mobile No</label>
                                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <select class="form-control" name="mobile_code" id="mobile_code" data-validetta="required">
                                                                    																	<option value="+93"  >+93</option>
																																		<option value="+355"  >+355</option>
																																		<option value="+213"  >+213</option>
																																		<option value="+1684"  >+1684</option>
																																		<option value="+376"  >+376</option>
																																		<option value="+244"  >+244</option>
																																		<option value="+1264"  >+1264</option>
																																		<option value="+0"  >+0</option>
																																		<option value="+1268"  >+1268</option>
																																		<option value="+54"  >+54</option>
																																		<option value="+374"  >+374</option>
																																		<option value="+297"  >+297</option>
																																		<option value="+61"  >+61</option>
																																		<option value="+43"  >+43</option>
																																		<option value="+994"  >+994</option>
																																		<option value="+1242"  >+1242</option>
																																		<option value="+973"  >+973</option>
																																		<option value="+880"  >+880</option>
																																		<option value="+1246"  >+1246</option>
																																		<option value="+375"  >+375</option>
																																		<option value="+32"  >+32</option>
																																		<option value="+501"  >+501</option>
																																		<option value="+229"  >+229</option>
																																		<option value="+1441"  >+1441</option>
																																		<option value="+975"  >+975</option>
																																		<option value="+591"  >+591</option>
																																		<option value="+387"  >+387</option>
																																		<option value="+267"  >+267</option>
																																		<option value="+0"  >+0</option>
																																		<option value="+55"  >+55</option>
																																		<option value="+246"  >+246</option>
																																		<option value="+673"  >+673</option>
																																		<option value="+359"  >+359</option>
																																		<option value="+226"  >+226</option>
																																		<option value="+257"  >+257</option>
																																		<option value="+855"  >+855</option>
																																		<option value="+237"  >+237</option>
																																		<option value="+1"  >+1</option>
																																		<option value="+238"  >+238</option>
																																		<option value="+1345"  >+1345</option>
																																		<option value="+236"  >+236</option>
																																		<option value="+235"  >+235</option>
																																		<option value="+56"  >+56</option>
																																		<option value="+86"  >+86</option>
																																		<option value="+61"  >+61</option>
																																		<option value="+672"  >+672</option>
																																		<option value="+57"  >+57</option>
																																		<option value="+269"  >+269</option>
																																		<option value="+242"  >+242</option>
																																		<option value="+242"  >+242</option>
																																		<option value="+682"  >+682</option>
																																		<option value="+506"  >+506</option>
																																		<option value="+225"  >+225</option>
																																		<option value="+385"  >+385</option>
																																		<option value="+53"  >+53</option>
																																		<option value="+357"  >+357</option>
																																		<option value="+420"  >+420</option>
																																		<option value="+45"  >+45</option>
																																		<option value="+253"  >+253</option>
																																		<option value="+1767"  >+1767</option>
																																		<option value="+1809"  >+1809</option>
																																		<option value="+593"  >+593</option>
																																		<option value="+20"  >+20</option>
																																		<option value="+503"  >+503</option>
																																		<option value="+240"  >+240</option>
																																		<option value="+291"  >+291</option>
																																		<option value="+372"  >+372</option>
																																		<option value="+251"  >+251</option>
																																		<option value="+500"  >+500</option>
																																		<option value="+298"  >+298</option>
																																		<option value="+679"  >+679</option>
																																		<option value="+358"  >+358</option>
																																		<option value="+33"  >+33</option>
																																		<option value="+594"  >+594</option>
																																		<option value="+689"  >+689</option>
																																		<option value="+0"  >+0</option>
																																		<option value="+241"  >+241</option>
																																		<option value="+220"  >+220</option>
																																		<option value="+995"  >+995</option>
																																		<option value="+49"  >+49</option>
																																		<option value="+233"  >+233</option>
																																		<option value="+350"  >+350</option>
																																		<option value="+30"  >+30</option>
																																		<option value="+299"  >+299</option>
																																		<option value="+1473"  >+1473</option>
																																		<option value="+590"  >+590</option>
																																		<option value="+1671"  >+1671</option>
																																		<option value="+502"  >+502</option>
																																		<option value="+224"  >+224</option>
																																		<option value="+245"  >+245</option>
																																		<option value="+592"  >+592</option>
																																		<option value="+509"  >+509</option>
																																		<option value="+0"  >+0</option>
																																		<option value="+39"  >+39</option>
																																		<option value="+504"  >+504</option>
																																		<option value="+852"  >+852</option>
																																		<option value="+36"  >+36</option>
																																		<option value="+354"  >+354</option>
																																		<option value="+91" selected >+91</option>
																																		<option value="+62"  >+62</option>
																																		<option value="+98"  >+98</option>
																																		<option value="+964"  >+964</option>
																																		<option value="+353"  >+353</option>
																																		<option value="+972"  >+972</option>
																																		<option value="+39"  >+39</option>
																																		<option value="+1876"  >+1876</option>
																																		<option value="+81"  >+81</option>
																																		<option value="+962"  >+962</option>
																																		<option value="+7"  >+7</option>
																																		<option value="+254"  >+254</option>
																																		<option value="+686"  >+686</option>
																																		<option value="+850"  >+850</option>
																																		<option value="+82"  >+82</option>
																																		<option value="+965"  >+965</option>
																																		<option value="+996"  >+996</option>
																																		<option value="+856"  >+856</option>
																																		<option value="+371"  >+371</option>
																																		<option value="+961"  >+961</option>
																																		<option value="+266"  >+266</option>
																																		<option value="+231"  >+231</option>
																																		<option value="+218"  >+218</option>
																																		<option value="+423"  >+423</option>
																																		<option value="+370"  >+370</option>
																																		<option value="+352"  >+352</option>
																																		<option value="+853"  >+853</option>
																																		<option value="+389"  >+389</option>
																																		<option value="+261"  >+261</option>
																																		<option value="+265"  >+265</option>
																																		<option value="+60"  >+60</option>
																																		<option value="+960"  >+960</option>
																																		<option value="+223"  >+223</option>
																																		<option value="+356"  >+356</option>
																																		<option value="+692"  >+692</option>
																																		<option value="+596"  >+596</option>
																																		<option value="+222"  >+222</option>
																																		<option value="+230"  >+230</option>
																																		<option value="+269"  >+269</option>
																																		<option value="+52"  >+52</option>
																																		<option value="+691"  >+691</option>
																																		<option value="+373"  >+373</option>
																																		<option value="+377"  >+377</option>
																																		<option value="+976"  >+976</option>
																																		<option value="+1664"  >+1664</option>
																																		<option value="+212"  >+212</option>
																																		<option value="+258"  >+258</option>
																																		<option value="+95"  >+95</option>
																																		<option value="+264"  >+264</option>
																																		<option value="+674"  >+674</option>
																																		<option value="+977"  >+977</option>
																																		<option value="+31"  >+31</option>
																																		<option value="+599"  >+599</option>
																																		<option value="+687"  >+687</option>
																																		<option value="+64"  >+64</option>
																																		<option value="+505"  >+505</option>
																																		<option value="+227"  >+227</option>
																																		<option value="+234"  >+234</option>
																																		<option value="+683"  >+683</option>
																																		<option value="+672"  >+672</option>
																																		<option value="+1670"  >+1670</option>
																																		<option value="+47"  >+47</option>
																																		<option value="+968"  >+968</option>
																																		<option value="+92"  >+92</option>
																																		<option value="+680"  >+680</option>
																																		<option value="+970"  >+970</option>
																																		<option value="+507"  >+507</option>
																																		<option value="+675"  >+675</option>
																																		<option value="+595"  >+595</option>
																																		<option value="+51"  >+51</option>
																																		<option value="+63"  >+63</option>
																																		<option value="+0"  >+0</option>
																																		<option value="+48"  >+48</option>
																																		<option value="+351"  >+351</option>
																																		<option value="+1787"  >+1787</option>
																																		<option value="+974"  >+974</option>
																																		<option value="+262"  >+262</option>
																																		<option value="+40"  >+40</option>
																																		<option value="+70"  >+70</option>
																																		<option value="+250"  >+250</option>
																																		<option value="+290"  >+290</option>
																																		<option value="+1869"  >+1869</option>
																																		<option value="+1758"  >+1758</option>
																																		<option value="+508"  >+508</option>
																																		<option value="+1784"  >+1784</option>
																																		<option value="+684"  >+684</option>
																																		<option value="+378"  >+378</option>
																																		<option value="+239"  >+239</option>
																																		<option value="+966"  >+966</option>
																																		<option value="+221"  >+221</option>
																																		<option value="+381"  >+381</option>
																																		<option value="+248"  >+248</option>
																																		<option value="+232"  >+232</option>
																																		<option value="+65"  >+65</option>
																																		<option value="+421"  >+421</option>
																																		<option value="+386"  >+386</option>
																																		<option value="+677"  >+677</option>
																																		<option value="+252"  >+252</option>
																																		<option value="+27"  >+27</option>
																																		<option value="+0"  >+0</option>
																																		<option value="+34"  >+34</option>
																																		<option value="+94"  >+94</option>
																																		<option value="+249"  >+249</option>
																																		<option value="+597"  >+597</option>
																																		<option value="+47"  >+47</option>
																																		<option value="+268"  >+268</option>
																																		<option value="+46"  >+46</option>
																																		<option value="+41"  >+41</option>
																																		<option value="+963"  >+963</option>
																																		<option value="+886"  >+886</option>
																																		<option value="+992"  >+992</option>
																																		<option value="+255"  >+255</option>
																																		<option value="+66"  >+66</option>
																																		<option value="+670"  >+670</option>
																																		<option value="+228"  >+228</option>
																																		<option value="+690"  >+690</option>
																																		<option value="+676"  >+676</option>
																																		<option value="+1868"  >+1868</option>
																																		<option value="+216"  >+216</option>
																																		<option value="+90"  >+90</option>
																																		<option value="+7370"  >+7370</option>
																																		<option value="+1649"  >+1649</option>
																																		<option value="+688"  >+688</option>
																																		<option value="+256"  >+256</option>
																																		<option value="+380"  >+380</option>
																																		<option value="+971"  >+971</option>
																																		<option value="+44"  >+44</option>
																																		<option value="+1"  >+1</option>
																																		<option value="+1"  >+1</option>
																																		<option value="+598"  >+598</option>
																																		<option value="+998"  >+998</option>
																																		<option value="+678"  >+678</option>
																																		<option value="+58"  >+58</option>
																																		<option value="+84"  >+84</option>
																																		<option value="+1284"  >+1284</option>
																																		<option value="+1340"  >+1340</option>
																																		<option value="+681"  >+681</option>
																																		<option value="+212"  >+212</option>
																																		<option value="+967"  >+967</option>
																																		<option value="+260"  >+260</option>
																																		<option value="+263"  >+263</option>
																	                    
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-8">
                                                                <input type="text" class="form-control" placeholder="Enter Mobile No" data-validetta="required,number,minLength[10],maxLength[10]" value="" name="mobile">
                                                            </div>
                                                        </div>
                                                    </div>
													<p class="text-danger"><b>Note:- Disabled In Demo</b></p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Marital Status</label>
                                                        <select class="form-control" data-validetta="required" name="m_status" onChange="check_status(this.value)">
                                                            <option value="">Select</option>
                                                            <option value="Never Married" >
                                                                Never Married
                                                            </option>
                                                            <option value="Widower" >
                                                                Widower
                                                            </option>
                                                            <option value="Widow" >
                                                                Widow
                                                            </option>
                                                            <option value="Divorced" >
                                                                Divorced
                                                            </option>
                                                            <option value="Awaiting Divorce" >
                                                                Awaiting Divorce
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="dis_child">
                                                        <label>No Of Children</label>
                                                        <select class="form-control" name="no_child" id="check_child">
                                                            <option value=""> Select No Of Children</option>
                                                            <option value="No Child"  >None</option>
                                                            <option value="One" >One</option>
                                                            <option value="Two" >Two</option>
                                                            <option value="Three" >Three</option>
                                                            <option value="Four and above" >Four and above</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="dis_child_status">
                                                        <label>Children Living Status</label>
                                                        <select class="form-control" name="child_status">
                                                            <option value="">Select</option>
                                                            <option value="Living with me" >Living with me</option>
                                                            <option value="Not living with me" >Not living with me</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mother Tounge:</label>
                                                        <select name="mothertongue" class="form-control chosen-single chosen-select" data-validetta="required">
                                                            <option value="">Select</option>
                                                                                                                        <option value="59" >
                                                                Angika                                                            </option>
                                                                                                                        <option value="60" >
                                                                Arunachali                                                            </option>
                                                                                                                        <option value="61" >
                                                                Assamese                                                            </option>
                                                                                                                        <option value="62" >
                                                                Awadhi                                                            </option>
                                                                                                                        <option value="67" >
                                                                Badaga                                                            </option>
                                                                                                                        <option value="63" >
                                                                Bengali                                                            </option>
                                                                                                                        <option value="64" >
                                                                Bhojpuri                                                            </option>
                                                                                                                        <option value="66" >
                                                                Bihari                                                            </option>
                                                                                                                        <option value="65" >
                                                                Brij                                                            </option>
                                                                                                                        <option value="68" >
                                                                Chatisgarhi                                                            </option>
                                                                                                                        <option value="69" >
                                                                Dogri                                                            </option>
                                                                                                                        <option value="70" >
                                                                English                                                            </option>
                                                                                                                        <option value="71" >
                                                                French                                                            </option>
                                                                                                                        <option value="72" >
                                                                Garhwali                                                            </option>
                                                                                                                        <option value="73" >
                                                                Garo                                                            </option>
                                                                                                                        <option value="74" >
                                                                Gujarati                                                            </option>
                                                                                                                        <option value="75" >
                                                                Haryanvi                                                            </option>
                                                                                                                        <option value="76" >
                                                                Himachali/Pahari                                                            </option>
                                                                                                                        <option value="77" >
                                                                Hindi                                                            </option>
                                                                                                                        <option value="78" >
                                                                Kanauji                                                            </option>
                                                                                                                        <option value="79" >
                                                                Kannada                                                            </option>
                                                                                                                        <option value="80" >
                                                                Kashmiri                                                            </option>
                                                                                                                        <option value="81" >
                                                                Khandesi                                                            </option>
                                                                                                                        <option value="82" >
                                                                Khasi                                                            </option>
                                                                                                                        <option value="83" >
                                                                Konkani                                                            </option>
                                                                                                                        <option value="84" >
                                                                Koshali                                                            </option>
                                                                                                                        <option value="85" >
                                                                Kumaoni                                                            </option>
                                                                                                                        <option value="86" >
                                                                Kutchi                                                            </option>
                                                                                                                        <option value="88" >
                                                                Ladacki                                                            </option>
                                                                                                                        <option value="87" >
                                                                Lepcha                                                            </option>
                                                                                                                        <option value="89" >
                                                                Magahi                                                            </option>
                                                                                                                        <option value="90" >
                                                                Maithili                                                            </option>
                                                                                                                        <option value="91" >
                                                                Malayalam                                                            </option>
                                                                                                                        <option value="92" >
                                                                Manipuri                                                            </option>
                                                                                                                        <option value="93" >
                                                                Marathi                                                            </option>
                                                                                                                        <option value="94" >
                                                                Marwari                                                            </option>
                                                                                                                        <option value="95" >
                                                                Miji                                                            </option>
                                                                                                                        <option value="96" >
                                                                Mizo                                                            </option>
                                                                                                                        <option value="97" >
                                                                Monpa                                                            </option>
                                                                                                                        <option value="99" >
                                                                Nepali                                                            </option>
                                                                                                                        <option value="98" >
                                                                Nicobarese                                                            </option>
                                                                                                                        <option value="100" >
                                                                Oriya                                                            </option>
                                                                                                                        <option value="101" >
                                                                Punjabi                                                            </option>
                                                                                                                        <option value="102" >
                                                                Rajasthani                                                            </option>
                                                                                                                        <option value="103" >
                                                                Sanskrit                                                            </option>
                                                                                                                        <option value="104" >
                                                                Santhali                                                            </option>
                                                                                                                        <option value="105" >
                                                                Sindhi                                                            </option>
                                                                                                                        <option value="106" >
                                                                Sourashtra                                                            </option>
                                                                                                                        <option value="107" >
                                                                Tamil                                                            </option>
                                                                                                                        <option value="108" >
                                                                Telugu                                                            </option>
                                                                                                                        <option value="109" >
                                                                Tripuri                                                            </option>
                                                                                                                        <option value="110" >
                                                                Tulu                                                            </option>
                                                                                                                        <option value="111" >
                                                                Urdu                                                            </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" placeholder="Enter Password"  name="my_pass" data-validetta="required" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control" data-validetta="required,equalTo[my_pass]"  placeholder="Enter Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="text-success">
                                                <i class="fas fas-user gtMarginRight10"></i>&nbsp;Religion Information
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Religion</label>
                                                        <select class="form-control chosen-select" name="religion_id" id="religion_id" data-validetta="required">
                                                            <option value="">Select</option>
                                                                                                                            <option value="45" >
                                                                Muslim - Others                                                            </option>
                                                                                                                            <option value="44" >
                                                                Muslim - Sunni                                                            </option>
                                                                                                                            <option value="37" >
                                                                Hindu                                                            </option>
                                                                                                                            <option value="43" >
                                                                Muslim - Shia                                                            </option>
                                                                                                                            <option value="46" >
                                                                Christian                                                            </option>
                                                                                                                            <option value="47" >
                                                                Sikhh                                                            </option>
                                                                                                                            <option value="49" >
                                                                Jain - Shwetambar                                                            </option>
                                                                                                                            <option value="51" >
                                                                Parsi                                                            </option>
                                                                                                                            <option value="52" >
                                                                Buddhist                                                            </option>
                                                                                                                            <option value="53" >
                                                                Jewish                                                            </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div id="status"></div>
                                                    <div class="form-group">
                                                        <label>Caste</label>
                                                        <select class="form-control chosen-select" name="caste_id"  data-validetta="required" id="caste_id">
                                                            <option value="">Select</option>
                                                                                                                        <option value="477" >
                                                                Brahmin - Niyogi                                                            </option>
                                                                                                                        <option value="432" >
                                                                Brahmin - Audichya                                                            </option>
                                                                                                                        <option value="431" >
                                                                Brahmin - Anaviln Desai                                                            </option>
                                                                                                                        <option value="430" >
                                                                Brahmin - Anavil                                                            </option>
                                                                                                                        <option value="429" >
                                                                Brahmbatt                                                            </option>
                                                                                                                        <option value="428" >
                                                                Boyar                                                            </option>
                                                                                                                        <option value="427" >
                                                                Bondili                                                            </option>
                                                                                                                        <option value="426" >
                                                                Bishnoi/Vishnoi                                                            </option>
                                                                                                                        <option value="425" >
                                                                Billava                                                            </option>
                                                                                                                        <option value="424" >
                                                                Bhoyar                                                            </option>
                                                                                                                        <option value="423" >
                                                                Bhovi                                                            </option>
                                                                                                                        <option value="422" >
                                                                Bhoi                                                            </option>
                                                                                                                        <option value="421" >
                                                                Bhavasar Kshatriya                                                            </option>
                                                                                                                        <option value="420" >
                                                                Bhatraju                                                            </option>
                                                                                                                        <option value="419" >
                                                                Bhatia                                                            </option>
                                                                                                                        <option value="418" >
                                                                Bhandari                                                            </option>
                                                                                                                        <option value="417" >
                                                                Besta                                                            </option>
                                                                                                                        <option value="416" >
                                                                Beri Chettiar                                                            </option>
                                                                                                                        <option value="415" >
                                                                Barujibi                                                            </option>
                                                                                                                        <option value="414" >
                                                                Barnwal                                                            </option>
                                                                                                                        <option value="413" >
                                                                Baria                                                            </option>
                                                                                                                        <option value="412" >
                                                                Bari                                                            </option>
                                                                                                                        <option value="411" >
                                                                Barai                                                            </option>
                                                                                                                        <option value="410" >
                                                                Banjara                                                            </option>
                                                                                                                        <option value="409" >
                                                                Baniya - Kumuti                                                            </option>
                                                                                                                        <option value="408" >
                                                                Baniya - Bania                                                            </option>
                                                                                                                        <option value="407" >
                                                                Baniya                                                            </option>
                                                                                                                        <option value="406" >
                                                                Banik                                                            </option>
                                                                                                                        <option value="405" >
                                                                Banayat Oriya                                                            </option>
                                                                                                                        <option value="404" >
                                                                Balija Reddy                                                            </option>
                                                                                                                        <option value="403" >
                                                                Balija Naidu                                                            </option>
                                                                                                                        <option value="402" >
                                                                Balija                                                            </option>
                                                                                                                        <option value="401" >
                                                                Balai                                                            </option>
                                                                                                                        <option value="400" >
                                                                Bajantri                                                            </option>
                                                                                                                        <option value="399" >
                                                                Baishya                                                            </option>
                                                                                                                        <option value="398" >
                                                                Baishnab                                                            </option>
                                                                                                                        <option value="397" >
                                                                Bairwa                                                            </option>
                                                                                                                        <option value="396" >
                                                                Baidya                                                            </option>
                                                                                                                        <option value="395" >
                                                                Bagdi                                                            </option>
                                                                                                                        <option value="394" >
                                                                Badaga                                                            </option>
                                                                                                                        <option value="393" >
                                                                Ayyaraka                                                            </option>
                                                                                                                        <option value="392" >
                                                                Ayodhyavasi                                                            </option>
                                                                                                                        <option value="391" >
                                                                Ayira Vysya                                                            </option>
                                                                                                                        <option value="390" >
                                                                Asathi                                                            </option>
                                                                                                                        <option value="389" >
                                                                Arya Vysya                                                            </option>
                                                                                                                        <option value="388" >
                                                                Arunthathiyar                                                            </option>
                                                                                                                        <option value="387" >
                                                                Arora                                                            </option>
                                                                                                                        <option value="386" >
                                                                Arekatica                                                            </option>
                                                                                                                        <option value="385" >
                                                                Aramari / Gabit                                                            </option>
                                                                                                                        <option value="384" >
                                                                Anjana (Chowdary) Patel                                                            </option>
                                                                                                                        <option value="383" >
                                                                Ambalavasi                                                            </option>
                                                                                                                        <option value="382" >
                                                                Ahom                                                            </option>
                                                                                                                        <option value="381" >
                                                                Ahirwar                                                            </option>
                                                                                                                        <option value="380" >
                                                                Ahir Shimpi                                                            </option>
                                                                                                                        <option value="379" >
                                                                Agri                                                            </option>
                                                                                                                        <option value="378" >
                                                                Agrahari                                                            </option>
                                                                                                                        <option value="377" >
                                                                Agnikula Kshatriya                                                            </option>
                                                                                                                        <option value="376" >
                                                                Agarwal                                                            </option>
                                                                                                                        <option value="375" >
                                                                Agaram Vellan Chettiar                                                            </option>
                                                                                                                        <option value="374" >
                                                                Agamudayar / Arcot / Thuluva Vellala                                                            </option>
                                                                                                                        <option value="373" >
                                                                Adi Karnataka                                                            </option>
                                                                                                                        <option value="372" >
                                                                Adi Dravidar                                                            </option>
                                                                                                                        <option value="371" >
                                                                Adi Andhra                                                            </option>
                                                                                                                        <option value="370" >
                                                                Ad Dharmi                                                            </option>
                                                                                                                        <option value="369" >
                                                                Achirapakkam Chettiar                                                            </option>
                                                                                                                        <option value="368" >
                                                                Aaru Nattu Vellala                                                            </option>
                                                                                                                        <option value="476" >
                                                                Brahmin - Narmadiya                                                             </option>
                                                                                                                        <option value="475" >
                                                                Brahmin - Namboodiri                                                            </option>
                                                                                                                        <option value="474" >
                                                                Brahmin - Nagar                                                            </option>
                                                                                                                        <option value="473" >
                                                                Brahmin - Mohyal                                                            </option>
                                                                                                                        <option value="472" >
                                                                Brahmin - Modh                                                            </option>
                                                                                                                        <option value="471" >
                                                                Brahmin - Mevada                                                            </option>
                                                                                                                        <option value="470" >
                                                                Brahmin - Maithil                                                            </option>
                                                                                                                        <option value="469" >
                                                                Brahmin - Madhwa                                                            </option>
                                                                                                                        <option value="468" >
                                                                Brahmin - Kumaoni                                                            </option>
                                                                                                                        <option value="467" >
                                                                Brahmin - Kulin                                                            </option>
                                                                                                                        <option value="466" >
                                                                Brahmin - Koteshwara / Kota (Madhwa )                                                            </option>
                                                                                                                        <option value="465" >
                                                                Brahmin - Kota                                                            </option>
                                                                                                                        <option value="464" >
                                                                Brahmin - Kokanastha                                                            </option>
                                                                                                                        <option value="463" >
                                                                Brahmin - Khedaval                                                            </option>
                                                                                                                        <option value="462" >
                                                                Brahmin - Khandelwal                                                            </option>
                                                                                                                        <option value="367" >
                                                                96 Kuli Maratha                                                            </option>
                                                                                                                        <option value="461" >
                                                                Brahmin - Khadayata                                                            </option>
                                                                                                                        <option value="460" >
                                                                Brahmin - Karhade                                                            </option>
                                                                                                                        <option value="459" >
                                                                Brahmin - Kanyakubj                                                            </option>
                                                                                                                        <option value="366" >
                                                                24 Manai Telugu Chettiar                                                            </option>
                                                                                                                        <option value="458" >
                                                                Brahmin - Jyotish                                                            </option>
                                                                                                                        <option value="457" >
                                                                Brahmin - Jhadua                                                            </option>
                                                                                                                        <option value="456" >
                                                                Brahmin - Jangid                                                            </option>
                                                                                                                        <option value="455" >
                                                                Brahmin - Iyer                                                            </option>
                                                                                                                        <option value="454" >
                                                                Brahmin - Iyengar                                                            </option>
                                                                                                                        <option value="453" >
                                                                Brahmin - Hoysala                                                            </option>
                                                                                                                        <option value="452" >
                                                                Brahmin - Havyaka                                                            </option>
                                                                                                                        <option value="451" >
                                                                Brahmin - Halua                                                            </option>
                                                                                                                        <option value="450" >
                                                                Brahmin - Gurukkal                                                            </option>
                                                                                                                        <option value="449" >
                                                                Brahmin - Gujar Gaur                                                            </option>
                                                                                                                        <option value="448" >
                                                                Brahmin - Goswami/Gosavi                                                            </option>
                                                                                                                        <option value="447" >
                                                                Brahmin - Gaur                                                            </option>
                                                                                                                        <option value="446" >
                                                                Brahmin - Garhwali                                                            </option>
                                                                                                                        <option value="445" >
                                                                Brahmin - Embrandiri                                                            </option>
                                                                                                                        <option value="444" >
                                                                Brahmin - Dravida                                                            </option>
                                                                                                                        <option value="443" >
                                                                Brahmin - Dhiman                                                            </option>
                                                                                                                        <option value="442" >
                                                                Brahmin - Deshastha                                                            </option>
                                                                                                                        <option value="441" >
                                                                Brahmin - Danua                                                            </option>
                                                                                                                        <option value="440" >
                                                                Brahmin - Daivadnya                                                            </option>
                                                                                                                        <option value="439" >
                                                                Brahmin - Dadhich                                                            </option>
                                                                                                                        <option value="438" >
                                                                Brahmin - Bhumihar                                                            </option>
                                                                                                                        <option value="437" >
                                                                Brahmin - Bhatt                                                            </option>
                                                                                                                        <option value="436" >
                                                                Brahmin - Bhargav                                                            </option>
                                                                                                                        <option value="435" >
                                                                Brahmin - Barendra                                                            </option>
                                                                                                                        <option value="434" >
                                                                Brahmin - Bardai                                                            </option>
                                                                                                                        <option value="433" >
                                                                Brahmin - Baidhiki/Vaidhiki                                                            </option>
                                                                                                                        <option value="478" >
                                                                Brahmin - Others                                                            </option>
                                                                                                                        <option value="479" >
                                                                Brahmin - Paliwal                                                            </option>
                                                                                                                        <option value="480" >
                                                                Brahmin - Panda                                                            </option>
                                                                                                                        <option value="481" >
                                                                Brahmin - Pandit                                                            </option>
                                                                                                                        <option value="482" >
                                                                Brahmin - Panicker                                                            </option>
                                                                                                                        <option value="483" >
                                                                Brahmin - Pareek                                                            </option>
                                                                                                                        <option value="484" >
                                                                Brahmin - Pushkarna                                                            </option>
                                                                                                                        <option value="485" >
                                                                Brahmin - Rajgor                                                            </option>
                                                                                                                        <option value="486" >
                                                                Brahmin - Rarhi                                                            </option>
                                                                                                                        <option value="487" >
                                                                Brahmin - Rarhi/Radhi                                                            </option>
                                                                                                                        <option value="488" >
                                                                Brahmin - Rigvedi                                                            </option>
                                                                                                                        <option value="489" >
                                                                Brahmin - Rudraj                                                            </option>
                                                                                                                        <option value="490" >
                                                                Brahmin - Sakaldwipi                                                            </option>
                                                                                                                        <option value="491" >
                                                                Brahmin - Sanadya                                                            </option>
                                                                                                                        <option value="492" >
                                                                Brahmin - Sanketi                                                            </option>
                                                                                                                        <option value="493" >
                                                                Brahmin - Saraswat                                                            </option>
                                                                                                                        <option value="494" >
                                                                Brahmin - Sarua                                                            </option>
                                                                                                                        <option value="495" >
                                                                Brahmin - Saryuparin                                                            </option>
                                                                                                                        <option value="496" >
                                                                Brahmin - Shivalli (Madhva)                                                            </option>
                                                                                                                        <option value="497" >
                                                                Brahmin - Shivhalli                                                            </option>
                                                                                                                        <option value="498" >
                                                                Brahmin - Shri Gaud                                                            </option>
                                                                                                                        <option value="499" >
                                                                Brahmin - Shri Mali                                                            </option>
                                                                                                                        <option value="500" >
                                                                Brahmin - Shrimali                                                            </option>
                                                                                                                        <option value="501" >
                                                                Brahmin - Shukla Yajurvedi                                                            </option>
                                                                                                                        <option value="502" >
                                                                Brahmin - Sikhwal                                                            </option>
                                                                                                                        <option value="503" >
                                                                Brahmin - Smartha                                                            </option>
                                                                                                                        <option value="504" >
                                                                Brahmin - Sri Vaishnava                                                            </option>
                                                                                                                        <option value="505" >
                                                                Brahmin - Stanika                                                            </option>
                                                                                                                        <option value="506" >
                                                                Brahmin - Tapodhan                                                            </option>
                                                                                                                        <option value="507" >
                                                                Brahmin - Tyagi                                                            </option>
                                                                                                                        <option value="508" >
                                                                Brahmin - Vaidiki                                                            </option>
                                                                                                                        <option value="509" >
                                                                Brahmin - Vaikhanasa                                                            </option>
                                                                                                                        <option value="510" >
                                                                Brahmin - Valam                                                            </option>
                                                                                                                        <option value="511" >
                                                                Brahmin - Velanadu                                                            </option>
                                                                                                                        <option value="512" >
                                                                Brahmin - Vyas                                                            </option>
                                                                                                                        <option value="513" >
                                                                Brahmin - Zalora                                                            </option>
                                                                                                                        <option value="514" >
                                                                Brajastha Maithil                                                            </option>
                                                                                                                        <option value="515" >
                                                                Bunt (Shetty)                                                            </option>
                                                                                                                        <option value="516" >
                                                                CKP                                                            </option>
                                                                                                                        <option value="517" >
                                                                Chalawadi and Holeya                                                            </option>
                                                                                                                        <option value="518" >
                                                                Chambhar                                                            </option>
                                                                                                                        <option value="519" >
                                                                Chandravanshi Kahar                                                            </option>
                                                                                                                        <option value="520" >
                                                                Chasa                                                            </option>
                                                                                                                        <option value="521" >
                                                                Chattada Sri Vaishnava                                                             </option>
                                                                                                                        <option value="522" >
                                                                Chaturth                                                            </option>
                                                                                                                        <option value="523" >
                                                                Chaudary                                                            </option>
                                                                                                                        <option value="524" >
                                                                Chaurasia                                                            </option>
                                                                                                                        <option value="525" >
                                                                Chennadasar                                                            </option>
                                                                                                                        <option value="526" >
                                                                Cherakula Vellalar                                                            </option>
                                                                                                                        <option value="527" >
                                                                Chettiar                                                            </option>
                                                                                                                        <option value="528" >
                                                                Chhetri                                                            </option>
                                                                                                                        <option value="529" >
                                                                Chippolu (Mera)                                                            </option>
                                                                                                                        <option value="530" >
                                                                Choudhary                                                            </option>
                                                                                                                        <option value="531" >
                                                                Choudhary                                                            </option>
                                                                                                                        <option value="532" >
                                                                Coorgi                                                            </option>
                                                                                                                        <option value="533" >
                                                                Deshmukh                                                            </option>
                                                                                                                        <option value="534" >
                                                                Desikar                                                            </option>
                                                                                                                        <option value="535" >
                                                                Desikar Thanjavur                                                            </option>
                                                                                                                        <option value="536" >
                                                                Devadiga                                                            </option>
                                                                                                                        <option value="537" >
                                                                Devandra Kula Vellalar                                                            </option>
                                                                                                                        <option value="538" >
                                                                Devang Koshthi                                                            </option>
                                                                                                                        <option value="539" >
                                                                Devanga                                                            </option>
                                                                                                                        <option value="540" >
                                                                Devanga Chettiar                                                            </option>
                                                                                                                        <option value="541" >
                                                                Devar/Thevar/Mukkulathor                                                            </option>
                                                                                                                        <option value="542" >
                                                                Devrukhe Brahmin                                                            </option>
                                                                                                                        <option value="543" >
                                                                Dhanak                                                            </option>
                                                                                                                        <option value="544" >
                                                                Dhangar                                                            </option>
                                                                                                                        <option value="545" >
                                                                Dheevara                                                            </option>
                                                                                                                        <option value="546" >
                                                                Dhiman                                                            </option>
                                                                                                                        <option value="547" >
                                                                Dhoba                                                            </option>
                                                                                                                        <option value="548" >
                                                                Dhobi                                                            </option>
                                                                                                                        <option value="549" >
                                                                Dhor / Kakkayya                                                            </option>
                                                                                                                        <option value="550" >
                                                                Dommala                                                            </option>
                                                                                                                        <option value="551" >
                                                                Dosar / Dusra                                                            </option>
                                                                                                                        <option value="552" >
                                                                Dumal                                                            </option>
                                                                                                                        <option value="553" >
                                                                Dusadh (Paswan)                                                            </option>
                                                                                                                        <option value="554" >
                                                                Ediga                                                            </option>
                                                                                                                        <option value="555" >
                                                                Ediga /Goud (Balija)                                                            </option>
                                                                                                                        <option value="556" >
                                                                Elur Chetty                                                            </option>
                                                                                                                        <option value="557" >
                                                                Ezhava                                                            </option>
                                                                                                                        <option value="558" >
                                                                Ezhava Panicker                                                            </option>
                                                                                                                        <option value="559" >
                                                                Ezhava Thandan                                                            </option>
                                                                                                                        <option value="560" >
                                                                Ezhuthachan                                                            </option>
                                                                                                                        <option value="561" >
                                                                Gabit                                                            </option>
                                                                                                                        <option value="562" >
                                                                Gahoi                                                            </option>
                                                                                                                        <option value="563" >
                                                                Gajula / Kavarai                                                            </option>
                                                                                                                        <option value="564" >
                                                                Ganda                                                            </option>
                                                                                                                        <option value="565" >
                                                                Gandha Vanika                                                            </option>
                                                                                                                        <option value="566" >
                                                                Gandla                                                            </option>
                                                                                                                        <option value="567" >
                                                                Gandla / Ganiga                                                            </option>
                                                                                                                        <option value="568" >
                                                                Ganiga                                                            </option>
                                                                                                                        <option value="569" >
                                                                Garhwali                                                            </option>
                                                                                                                        <option value="570" >
                                                                Gatti                                                            </option>
                                                                                                                        <option value="571" >
                                                                Gavara                                                            </option>
                                                                                                                        <option value="572" >
                                                                Gawali                                                            </option>
                                                                                                                        <option value="573" >
                                                                Ghisadi                                                            </option>
                                                                                                                        <option value="574" >
                                                                Ghumar                                                            </option>
                                                                                                                        <option value="575" >
                                                                Goala                                                            </option>
                                                                                                                        <option value="576" >
                                                                Goan                                                            </option>
                                                                                                                        <option value="577" >
                                                                Gomantak                                                            </option>
                                                                                                                        <option value="578" >
                                                                Gondhali                                                            </option>
                                                                                                                        <option value="579" >
                                                                Goud                                                            </option>
                                                                                                                        <option value="580" >
                                                                Gounder                                                            </option>
                                                                                                                        <option value="581" >
                                                                Gounder - Kongu Vellala Gounder                                                            </option>
                                                                                                                        <option value="582" >
                                                                Gounder - Nattu Gounder                                                            </option>
                                                                                                                        <option value="583" >
                                                                Gounder - Others                                                            </option>
                                                                                                                        <option value="584" >
                                                                Gounder - Urali Gounder                                                            </option>
                                                                                                                        <option value="585" >
                                                                Gounder - Vanniya Kula Kshatriyar                                                            </option>
                                                                                                                        <option value="586" >
                                                                Gounder - Vettuva Gounder                                                            </option>
                                                                                                                        <option value="587" >
                                                                Gowda                                                            </option>
                                                                                                                        <option value="588" >
                                                                Gowda - Kuruba Gowda                                                            </option>
                                                                                                                        <option value="589" >
                                                                Gramani                                                            </option>
                                                                                                                        <option value="590" >
                                                                Gudia                                                            </option>
                                                                                                                        <option value="591" >
                                                                Gujjar                                                            </option>
                                                                                                                        <option value="592" >
                                                                Gulahre                                                            </option>
                                                                                                                        <option value="593" >
                                                                Gupta                                                            </option>
                                                                                                                        <option value="594" >
                                                                Guptan                                                            </option>
                                                                                                                        <option value="595" >
                                                                Gurav                                                            </option>
                                                                                                                        <option value="596" >
                                                                Gurjar                                                            </option>
                                                                                                                        <option value="597" >
                                                                Haihaivanshi                                                            </option>
                                                                                                                        <option value="598" >
                                                                Halba Koshti                                                            </option>
                                                                                                                        <option value="599" >
                                                                Helava                                                            </option>
                                                                                                                        <option value="600" >
                                                                Hugar (Jeer)                                                            </option>
                                                                                                                        <option value="601" >
                                                                Illaththu Pillai                                                            </option>
                                                                                                                        <option value="602" >
                                                                Intercaste                                                            </option>
                                                                                                                        <option value="603" >
                                                                Irani                                                            </option>
                                                                                                                        <option value="604" >
                                                                Isai Vellalar                                                            </option>
                                                                                                                        <option value="605" >
                                                                Jaalari                                                            </option>
                                                                                                                        <option value="606" >
                                                                Jaiswal                                                            </option>
                                                                                                                        <option value="607" >
                                                                Jandra                                                            </option>
                                                                                                                        <option value="608" >
                                                                Jangam                                                            </option>
                                                                                                                        <option value="609" >
                                                                Jangra - Brahmin                                                            </option>
                                                                                                                        <option value="610" >
                                                                Jat                                                            </option>
                                                                                                                        <option value="611" >
                                                                Jatav                                                            </option>
                                                                                                                        <option value="612" >
                                                                Jetty/Malla                                                            </option>
                                                                                                                        <option value="613" >
                                                                Jhadav                                                            </option>
                                                                                                                        <option value="614" >
                                                                Jijhotia Brahmin                                                            </option>
                                                                                                                        <option value="615" >
                                                                Jogi (Nath)                                                            </option>
                                                                                                                        <option value="616" >
                                                                Julaha                                                            </option>
                                                                                                                        <option value="617" >
                                                                Kachara                                                            </option>
                                                                                                                        <option value="618" >
                                                                Kadava Patel                                                            </option>
                                                                                                                        <option value="619" >
                                                                Kahar                                                            </option>
                                                                                                                        <option value="620" >
                                                                Kaibarta                                                            </option>
                                                                                                                        <option value="621" >
                                                                Kaikaala                                                            </option>
                                                                                                                        <option value="622" >
                                                                Kalal                                                            </option>
                                                                                                                        <option value="623" >
                                                                Kalanji                                                            </option>
                                                                                                                        <option value="624" >
                                                                Kalar                                                            </option>
                                                                                                                        <option value="625" >
                                                                Kalinga Vysya                                                            </option>
                                                                                                                        <option value="626" >
                                                                Kalita                                                            </option>
                                                                                                                        <option value="627" >
                                                                Kalwar                                                            </option>
                                                                                                                        <option value="628" >
                                                                Kamboj                                                            </option>
                                                                                                                        <option value="629" >
                                                                Kamma                                                            </option>
                                                                                                                        <option value="630" >
                                                                Kamma Naidu                                                            </option>
                                                                                                                        <option value="631" >
                                                                Kanakkan Padanna                                                            </option>
                                                                                                                        <option value="632" >
                                                                Kandara                                                            </option>
                                                                                                                        <option value="633" >
                                                                Kansari                                                            </option>
                                                                                                                        <option value="634" >
                                                                Kanykubj Bania                                                            </option>
                                                                                                                        <option value="635" >
                                                                Kapu                                                            </option>
                                                                                                                        <option value="636" >
                                                                Kapu Naidu                                                            </option>
                                                                                                                        <option value="637" >
                                                                Kapu Reddy                                                            </option>
                                                                                                                        <option value="638" >
                                                                Karakala Bhakthula                                                            </option>
                                                                                                                        <option value="639" >
                                                                Karana                                                            </option>
                                                                                                                        <option value="640" >
                                                                Karkathar                                                            </option>
                                                                                                                        <option value="641" >
                                                                Karmakar                                                            </option>
                                                                                                                        <option value="642" >
                                                                Karni Bhakthula                                                            </option>
                                                                                                                        <option value="643" >
                                                                Karuneegar                                                            </option>
                                                                                                                        <option value="644" >
                                                                Kasar                                                            </option>
                                                                                                                        <option value="645" >
                                                                Kasaundhan                                                            </option>
                                                                                                                        <option value="646" >
                                                                Kashyap                                                            </option>
                                                                                                                        <option value="647" >
                                                                Kasukara                                                            </option>
                                                                                                                        <option value="648" >
                                                                Katiya                                                            </option>
                                                                                                                        <option value="649" >
                                                                Kavara                                                            </option>
                                                                                                                        <option value="650" >
                                                                Kavuthiyya/Ezhavathy                                                            </option>
                                                                                                                        <option value="651" >
                                                                Kayastha                                                            </option>
                                                                                                                        <option value="652" >
                                                                Kayastha (Bengali)                                                            </option>
                                                                                                                        <option value="653" >
                                                                Kerala Mudali                                                            </option>
                                                                                                                        <option value="654" >
                                                                Keshri (Kesarwani)                                                            </option>
                                                                                                                        <option value="655" >
                                                                Khandayat                                                            </option>
                                                                                                                        <option value="656" >
                                                                Khandelwal                                                            </option>
                                                                                                                        <option value="657" >
                                                                Kharwa                                                            </option>
                                                                                                                        <option value="658" >
                                                                Kharwar                                                            </option>
                                                                                                                        <option value="659" >
                                                                Khatik                                                            </option>
                                                                                                                        <option value="660" >
                                                                Khatri                                                            </option>
                                                                                                                        <option value="661" >
                                                                Kirar                                                            </option>
                                                                                                                        <option value="662" >
                                                                Kodikal Pillai                                                            </option>
                                                                                                                        <option value="663" >
                                                                Kokanastha Maratha                                                            </option>
                                                                                                                        <option value="664" >
                                                                Koli                                                            </option>
                                                                                                                        <option value="665" >
                                                                Koli Mahadev                                                            </option>
                                                                                                                        <option value="666" >
                                                                Koli Patel                                                            </option>
                                                                                                                        <option value="667" >
                                                                Komti /Arya Vaishya                                                            </option>
                                                                                                                        <option value="668" >
                                                                Kongu Chettiar                                                            </option>
                                                                                                                        <option value="669" >
                                                                Kongu Nadar                                                            </option>
                                                                                                                        <option value="670" >
                                                                Kongu Vellala Gounder                                                            </option>
                                                                                                                        <option value="671" >
                                                                Konkani                                                            </option>
                                                                                                                        <option value="672" >
                                                                Korama                                                            </option>
                                                                                                                        <option value="673" >
                                                                Kori                                                            </option>
                                                                                                                        <option value="674" >
                                                                Kori/Koli                                                            </option>
                                                                                                                        <option value="675" >
                                                                Kosthi                                                            </option>
                                                                                                                        <option value="676" >
                                                                Krishnavaka                                                            </option>
                                                                                                                        <option value="677" >
                                                                Kshatriya                                                            </option>
                                                                                                                        <option value="678" >
                                                                Kshatriya Kurmi                                                            </option>
                                                                                                                        <option value="679" >
                                                                Kshatriya Raju                                                            </option>
                                                                                                                        <option value="680" >
                                                                Kudumbi                                                            </option>
                                                                                                                        <option value="681" >
                                                                Kulal                                                            </option>
                                                                                                                        <option value="682" >
                                                                Kulalar                                                            </option>
                                                                                                                        <option value="683" >
                                                                Kulita                                                            </option>
                                                                                                                        <option value="684" >
                                                                Kumaoni Rajput                                                            </option>
                                                                                                                        <option value="685" >
                                                                Kumawat                                                            </option>
                                                                                                                        <option value="686" >
                                                                Kumbhakar                                                            </option>
                                                                                                                        <option value="687" >
                                                                Kumbhar                                                            </option>
                                                                                                                        <option value="688" >
                                                                Kumhar                                                            </option>
                                                                                                                        <option value="689" >
                                                                Kummari                                                            </option>
                                                                                                                        <option value="690" >
                                                                Kunbi                                                            </option>
                                                                                                                        <option value="691" >
                                                                Kunbi Lonari                                                            </option>
                                                                                                                        <option value="692" >
                                                                Kunbi Maratha                                                            </option>
                                                                                                                        <option value="693" >
                                                                Kunbi Tirale                                                            </option>
                                                                                                                        <option value="694" >
                                                                Kuravan                                                            </option>
                                                                                                                        <option value="695" >
                                                                Kurmi                                                            </option>
                                                                                                                        <option value="696" >
                                                                Kurmi/Kurmi Kshatriya                                                            </option>
                                                                                                                        <option value="697" >
                                                                Kurni                                                            </option>
                                                                                                                        <option value="698" >
                                                                Kuruba                                                            </option>
                                                                                                                        <option value="699" >
                                                                Kuruhina Shetty                                                            </option>
                                                                                                                        <option value="700" >
                                                                Kuruhini Chetty                                                            </option>
                                                                                                                        <option value="701" >
                                                                Kurumbar                                                            </option>
                                                                                                                        <option value="702" >
                                                                Kuruva                                                            </option>
                                                                                                                        <option value="703" >
                                                                Kushwaha (Koiri)                                                            </option>
                                                                                                                        <option value="704" >
                                                                Kutchi                                                            </option>
                                                                                                                        <option value="705" >
                                                                Lad                                                            </option>
                                                                                                                        <option value="706" >
                                                                Lambadi                                                            </option>
                                                                                                                        <option value="707" >
                                                                Leva patel                                                            </option>
                                                                                                                        <option value="708" >
                                                                Leva patil                                                            </option>
                                                                                                                        <option value="709" >
                                                                Linga Balija                                                            </option>
                                                                                                                        <option value="710" >
                                                                Lingayath                                                            </option>
                                                                                                                        <option value="711" >
                                                                Lodhi Rajput                                                            </option>
                                                                                                                        <option value="712" >
                                                                Lohana                                                            </option>
                                                                                                                        <option value="713" >
                                                                Lohar                                                            </option>
                                                                                                                        <option value="714" >
                                                                Loniya                                                            </option>
                                                                                                                        <option value="715" >
                                                                Lubana                                                            </option>
                                                                                                                        <option value="716" >
                                                                Madhesiya/Kanu/Halwai                                                            </option>
                                                                                                                        <option value="717" >
                                                                Madiga                                                            </option>
                                                                                                                        <option value="718" >
                                                                Mahajan                                                            </option>
                                                                                                                        <option value="719" >
                                                                Mahar                                                            </option>
                                                                                                                        <option value="720" >
                                                                Mahendra                                                            </option>
                                                                                                                        <option value="721" >
                                                                Maheshwari                                                            </option>
                                                                                                                        <option value="722" >
                                                                Maheshwari / Meshri                                                            </option>
                                                                                                                        <option value="723" >
                                                                Mahishya                                                            </option>
                                                                                                                        <option value="724" >
                                                                Mahor                                                            </option>
                                                                                                                        <option value="725" >
                                                                Mahuri                                                            </option>
                                                                                                                        <option value="726" >
                                                                Mair Rajput Swarnkar                                                            </option>
                                                                                                                        <option value="727" >
                                                                Majabi                                                            </option>
                                                                                                                        <option value="728" >
                                                                Mala                                                            </option>
                                                                                                                        <option value="729" >
                                                                Mali                                                            </option>
                                                                                                                        <option value="730" >
                                                                Mallah                                                            </option>
                                                                                                                        <option value="731" >
                                                                Malviya Brahmin                                                            </option>
                                                                                                                        <option value="732" >
                                                                Malwani                                                            </option>
                                                                                                                        <option value="733" >
                                                                Mangalorean                                                            </option>
                                                                                                                        <option value="734" >
                                                                Manipuri                                                            </option>
                                                                                                                        <option value="735" >
                                                                Manjapudur Chettiar                                                            </option>
                                                                                                                        <option value="736" >
                                                                Mannan / Velan / Vannan                                                            </option>
                                                                                                                        <option value="737" >
                                                                Mapila                                                            </option>
                                                                                                                        <option value="738" >
                                                                Maratha                                                            </option>
                                                                                                                        <option value="739" >
                                                                Maratha Kshatriya                                                            </option>
                                                                                                                        <option value="740" >
                                                                Maruthuvar                                                            </option>
                                                                                                                        <option value="741" >
                                                                Matang                                                            </option>
                                                                                                                        <option value="742" >
                                                                Mathur                                                            </option>
                                                                                                                        <option value="743" >
                                                                Mathur Vaishya                                                            </option>
                                                                                                                        <option value="744" >
                                                                Maurya / Shakya                                                            </option>
                                                                                                                        <option value="745" >
                                                                Meena                                                            </option>
                                                                                                                        <option value="746" >
                                                                Meenavar                                                            </option>
                                                                                                                        <option value="747" >
                                                                Meghwal                                                            </option>
                                                                                                                        <option value="748" >
                                                                Mehra                                                            </option>
                                                                                                                        <option value="749" >
                                                                Meru Darji                                                            </option>
                                                                                                                        <option value="750" >
                                                                Mochi                                                            </option>
                                                                                                                        <option value="751" >
                                                                Modak                                                            </option>
                                                                                                                        <option value="752" >
                                                                Modi                                                            </option>
                                                                                                                        <option value="753" >
                                                                Modikarlu                                                            </option>
                                                                                                                        <option value="754" >
                                                                Mogaveera                                                            </option>
                                                                                                                        <option value="755" >
                                                                Mudaliyar                                                            </option>
                                                                                                                        <option value="756" >
                                                                Mudiraj                                                            </option>
                                                                                                                        <option value="757" >
                                                                Munnuru Kapu                                                            </option>
                                                                                                                        <option value="758" >
                                                                Musukama                                                            </option>
                                                                                                                        <option value="759" >
                                                                Muthuraja                                                            </option>
                                                                                                                        <option value="760" >
                                                                Naagavamsam                                                            </option>
                                                                                                                        <option value="761" >
                                                                Nabit                                                            </option>
                                                                                                                        <option value="762" >
                                                                Nadar                                                            </option>
                                                                                                                        <option value="763" >
                                                                Nagaralu                                                            </option>
                                                                                                                        <option value="764" >
                                                                Nai                                                            </option>
                                                                                                                        <option value="765" >
                                                                Naicker                                                            </option>
                                                                                                                        <option value="766" >
                                                                Naicker - Others                                                            </option>
                                                                                                                        <option value="767" >
                                                                Naicker - Vanniya Kula Kshatriyar                                                            </option>
                                                                                                                        <option value="768" >
                                                                Naidu                                                            </option>
                                                                                                                        <option value="769" >
                                                                Naik                                                            </option>
                                                                                                                        <option value="770" >
                                                                Nair                                                            </option>
                                                                                                                        <option value="771" >
                                                                Namasudra / Namassej                                                            </option>
                                                                                                                        <option value="772" >
                                                                Nambiar                                                            </option>
                                                                                                                        <option value="773" >
                                                                Namdarlu                                                            </option>
                                                                                                                        <option value="774" >
                                                                Nanjil Mudali                                                            </option>
                                                                                                                        <option value="775" >
                                                                Nanjil Nattu Vellalar                                                            </option>
                                                                                                                        <option value="776" >
                                                                Nanjil Vellalar                                                            </option>
                                                                                                                        <option value="777" >
                                                                Nanjil pillai                                                            </option>
                                                                                                                        <option value="778" >
                                                                Nankudi Vellalar                                                            </option>
                                                                                                                        <option value="779" >
                                                                Napit                                                            </option>
                                                                                                                        <option value="780" >
                                                                Nattu Gounder                                                            </option>
                                                                                                                        <option value="781" >
                                                                Nattukottai Chettiar                                                            </option>
                                                                                                                        <option value="782" >
                                                                Nayaka                                                            </option>
                                                                                                                        <option value="783" >
                                                                Neeli                                                            </option>
                                                                                                                        <option value="784" >
                                                                Neeli Saali                                                            </option>
                                                                                                                        <option value="785" >
                                                                Nema                                                            </option>
                                                                                                                        <option value="786" >
                                                                Nepali                                                            </option>
                                                                                                                        <option value="787" >
                                                                Nessi                                                            </option>
                                                                                                                        <option value="788" >
                                                                Nhavi                                                            </option>
                                                                                                                        <option value="789" >
                                                                Ontari                                                            </option>
                                                                                                                        <option value="790" >
                                                                Oswal                                                            </option>
                                                                                                                        <option value="791" >
                                                                Otari                                                            </option>
                                                                                                                        <option value="792" >
                                                                Othuvaar                                                            </option>
                                                                                                                        <option value="793" >
                                                                Padmasali                                                            </option>
                                                                                                                        <option value="794" >
                                                                Padmashali                                                            </option>
                                                                                                                        <option value="795" >
                                                                Padmavati Porwal                                                            </option>
                                                                                                                        <option value="796" >
                                                                Pagadala                                                            </option>
                                                                                                                        <option value="797" >
                                                                Pal                                                            </option>
                                                                                                                        <option value="798" >
                                                                Pallan / Devandra Kula Vellalan                                                            </option>
                                                                                                                        <option value="799" >
                                                                Panan                                                            </option>
                                                                                                                        <option value="800" >
                                                                Panchal                                                            </option>
                                                                                                                        <option value="801" >
                                                                Pandaram                                                            </option>
                                                                                                                        <option value="802" >
                                                                Pandiya Vellalar                                                            </option>
                                                                                                                        <option value="803" >
                                                                Panicker                                                            </option>
                                                                                                                        <option value="804" >
                                                                Pannirandam Chettiar                                                            </option>
                                                                                                                        <option value="805" >
                                                                Paravan / Bharatar                                                            </option>
                                                                                                                        <option value="806" >
                                                                Parit                                                            </option>
                                                                                                                        <option value="807" >
                                                                Parkava Kulam                                                            </option>
                                                                                                                        <option value="808" >
                                                                Parsi                                                            </option>
                                                                                                                        <option value="809" >
                                                                Partraj                                                            </option>
                                                                                                                        <option value="810" >
                                                                Parvatha Rajakulam                                                            </option>
                                                                                                                        <option value="811" >
                                                                Pasi                                                            </option>
                                                                                                                        <option value="812" >
                                                                Paswan / Dusadh                                                            </option>
                                                                                                                        <option value="813" >
                                                                Patel                                                            </option>
                                                                                                                        <option value="814" >
                                                                Pathare Prabhu                                                            </option>
                                                                                                                        <option value="815" >
                                                                Patil                                                            </option>
                                                                                                                        <option value="816" >
                                                                Patnaick/Sistakaranam                                                            </option>
                                                                                                                        <option value="817" >
                                                                Patra                                                            </option>
                                                                                                                        <option value="818" >
                                                                Pattinavar                                                            </option>
                                                                                                                        <option value="819" >
                                                                Pattusali                                                            </option>
                                                                                                                        <option value="820" >
                                                                Patwa                                                            </option>
                                                                                                                        <option value="821" >
                                                                Perika                                                            </option>
                                                                                                                        <option value="822" >
                                                                Perika/Puragiri Kshatriya                                                            </option>
                                                                                                                        <option value="823" >
                                                                Pillai                                                            </option>
                                                                                                                        <option value="824" >
                                                                Poosala                                                            </option>
                                                                                                                        <option value="825" >
                                                                Porwal                                                            </option>
                                                                                                                        <option value="826" >
                                                                Porwal / Porwar                                                            </option>
                                                                                                                        <option value="827" >
                                                                Poundra                                                            </option>
                                                                                                                        <option value="828" >
                                                                Prajapati                                                            </option>
                                                                                                                        <option value="829" >
                                                                Pulaya /  Cheruman                                                            </option>
                                                                                                                        <option value="830" >
                                                                Raigar                                                            </option>
                                                                                                                        <option value="831" >
                                                                Rajaka                                                            </option>
                                                                                                                        <option value="832" >
                                                                Rajastani                                                            </option>
                                                                                                                        <option value="833" >
                                                                Rajbhar                                                            </option>
                                                                                                                        <option value="834" >
                                                                Rajbonshi                                                            </option>
                                                                                                                        <option value="835" >
                                                                Rajpurohit                                                            </option>
                                                                                                                        <option value="836" >
                                                                Rajput                                                            </option>
                                                                                                                        <option value="837" >
                                                                Ramanandi                                                            </option>
                                                                                                                        <option value="838" >
                                                                Ramdasia                                                            </option>
                                                                                                                        <option value="839" >
                                                                Ramgariah                                                            </option>
                                                                                                                        <option value="840" >
                                                                Ramoshi                                                            </option>
                                                                                                                        <option value="841" >
                                                                Rastogi                                                            </option>
                                                                                                                        <option value="842" >
                                                                Rathi                                                            </option>
                                                                                                                        <option value="843" >
                                                                Rauniar                                                            </option>
                                                                                                                        <option value="844" >
                                                                Ravidasia                                                            </option>
                                                                                                                        <option value="845" >
                                                                Rawat                                                            </option>
                                                                                                                        <option value="846" >
                                                                Reddy                                                            </option>
                                                                                                                        <option value="847" >
                                                                Relli                                                            </option>
                                                                                                                        <option value="848" >
                                                                Rohit / Chamar                                                            </option>
                                                                                                                        <option value="849" >
                                                                Ror                                                            </option>
                                                                                                                        <option value="850" >
                                                                SC                                                            </option>
                                                                                                                        <option value="851" >
                                                                SKP                                                            </option>
                                                                                                                        <option value="852" >
                                                                ST                                                            </option>
                                                                                                                        <option value="853" >
                                                                Sadgope                                                            </option>
                                                                                                                        <option value="854" >
                                                                Sadhu Chetty                                                            </option>
                                                                                                                        <option value="855" >
                                                                Sagara (Uppara)                                                            </option>
                                                                                                                        <option value="856" >
                                                                Saha                                                            </option>
                                                                                                                        <option value="857" >
                                                                Sahu                                                            </option>
                                                                                                                        <option value="858" >
                                                                Saini                                                            </option>
                                                                                                                        <option value="859" >
                                                                Saiva Pillai Thanjavur                                                            </option>
                                                                                                                        <option value="860" >
                                                                Saiva Pillai Tirunelveli                                                            </option>
                                                                                                                        <option value="861" >
                                                                Saliya                                                            </option>
                                                                                                                        <option value="862" >
                                                                Samagar                                                            </option>
                                                                                                                        <option value="863" >
                                                                Sambava                                                            </option>
                                                                                                                        <option value="864" >
                                                                Sathwara                                                            </option>
                                                                                                                        <option value="865" >
                                                                Satnami                                                            </option>
                                                                                                                        <option value="866" >
                                                                Savji                                                            </option>
                                                                                                                        <option value="867" >
                                                                Senai Thalaivar                                                            </option>
                                                                                                                        <option value="868" >
                                                                Senguntha Mudaliyar                                                            </option>
                                                                                                                        <option value="869" >
                                                                Sengunthar/Kaikolar                                                            </option>
                                                                                                                        <option value="870" >
                                                                Settibalija                                                            </option>
                                                                                                                        <option value="871" >
                                                                Setty Balija                                                            </option>
                                                                                                                        <option value="872" >
                                                                Shaw / Sahu/Teli                                                            </option>
                                                                                                                        <option value="873" >
                                                                Shettigar                                                            </option>
                                                                                                                        <option value="874" >
                                                                Shilpkar                                                            </option>
                                                                                                                        <option value="875" >
                                                                Shimpi/Namdev                                                            </option>
                                                                                                                        <option value="876" >
                                                                Sindhi                                                            </option>
                                                                                                                        <option value="877" >
                                                                Sindhi-Amil                                                            </option>
                                                                                                                        <option value="878" >
                                                                Sindhi-Baibhand                                                            </option>
                                                                                                                        <option value="879" >
                                                                Sindhi-Bhanusali                                                            </option>
                                                                                                                        <option value="880" >
                                                                Sindhi-Bhatia                                                            </option>
                                                                                                                        <option value="881" >
                                                                Sindhi-Chhapru                                                            </option>
                                                                                                                        <option value="882" >
                                                                Sindhi-Dadu                                                            </option>
                                                                                                                        <option value="883" >
                                                                Sindhi-Hyderabadi                                                            </option>
                                                                                                                        <option value="884" >
                                                                Sindhi-Larai                                                            </option>
                                                                                                                        <option value="885" >
                                                                Sindhi-Larkana                                                            </option>
                                                                                                                        <option value="886" >
                                                                Sindhi-Lohana                                                            </option>
                                                                                                                        <option value="887" >
                                                                Sindhi-Rohiri                                                            </option>
                                                                                                                        <option value="888" >
                                                                Sindhi-Sahiti                                                            </option>
                                                                                                                        <option value="889" >
                                                                Sindhi-Sakkhar                                                            </option>
                                                                                                                        <option value="890" >
                                                                Sindhi-Sehwani                                                            </option>
                                                                                                                        <option value="891" >
                                                                Sindhi-Shikarpuri                                                            </option>
                                                                                                                        <option value="892" >
                                                                Sindhi-Thatai                                                            </option>
                                                                                                                        <option value="893" >
                                                                Sonar                                                            </option>
                                                                                                                        <option value="894" >
                                                                Soni                                                            </option>
                                                                                                                        <option value="895" >
                                                                Sonkar                                                            </option>
                                                                                                                        <option value="896" >
                                                                Sourashtra                                                            </option>
                                                                                                                        <option value="897" >
                                                                Sozhia Chetty                                                            </option>
                                                                                                                        <option value="898" >
                                                                Sozhiya Vellalar                                                            </option>
                                                                                                                        <option value="899" >
                                                                Srisayana                                                            </option>
                                                                                                                        <option value="900" >
                                                                Sugali (Naika)                                                            </option>
                                                                                                                        <option value="901" >
                                                                Sunari                                                            </option>
                                                                                                                        <option value="902" >
                                                                Sundhi                                                            </option>
                                                                                                                        <option value="903" >
                                                                Surya Balija                                                            </option>
                                                                                                                        <option value="904" >
                                                                Suthar                                                            </option>
                                                                                                                        <option value="905" >
                                                                Swakula Sali                                                            </option>
                                                                                                                        <option value="906" >
                                                                Tamboli                                                            </option>
                                                                                                                        <option value="907" >
                                                                Tanti                                                            </option>
                                                                                                                        <option value="908" >
                                                                Tantubai                                                            </option>
                                                                                                                        <option value="909" >
                                                                Telaga                                                            </option>
                                                                                                                        <option value="910" >
                                                                Teli                                                            </option>
                                                                                                                        <option value="911" >
                                                                Telugupatti                                                            </option>
                                                                                                                        <option value="912" >
                                                                Thakkar                                                            </option>
                                                                                                                        <option value="913" >
                                                                Thakore                                                            </option>
                                                                                                                        <option value="914" >
                                                                Thakur                                                            </option>
                                                                                                                        <option value="915" >
                                                                Thandan                                                            </option>
                                                                                                                        <option value="916" >
                                                                Thigala                                                            </option>
                                                                                                                        <option value="917" >
                                                                Thiyya                                                            </option>
                                                                                                                        <option value="918" >
                                                                Thiyya Thandan                                                            </option>
                                                                                                                        <option value="919" >
                                                                Thogata Veera Kshatriya                                                            </option>
                                                                                                                        <option value="920" >
                                                                Thogata Veerakshathriya                                                            </option>
                                                                                                                        <option value="921" >
                                                                Thondai Mandala Vellalar                                                            </option>
                                                                                                                        <option value="922" >
                                                                Thota                                                            </option>
                                                                                                                        <option value="923" >
                                                                Tili                                                            </option>
                                                                                                                        <option value="924" >
                                                                Togata                                                            </option>
                                                                                                                        <option value="925" >
                                                                Tonk Kshatriya                                                            </option>
                                                                                                                        <option value="926" >
                                                                Turupu Kapu                                                            </option>
                                                                                                                        <option value="927" >
                                                                Ummar / Umre / Bagaria                                                            </option>
                                                                                                                        <option value="928" >
                                                                Urali Gounder                                                            </option>
                                                                                                                        <option value="929" >
                                                                Urs                                                            </option>
                                                                                                                        <option value="930" >
                                                                Vada Balija                                                            </option>
                                                                                                                        <option value="931" >
                                                                Vadambar                                                            </option>
                                                                                                                        <option value="932" >
                                                                Vaddera                                                            </option>
                                                                                                                        <option value="933" >
                                                                Vadugan                                                            </option>
                                                                                                                        <option value="934" >
                                                                Vaish                                                            </option>
                                                                                                                        <option value="935" >
                                                                Vaishnav                                                            </option>
                                                                                                                        <option value="936" >
                                                                Vaishnav Dishaval                                                            </option>
                                                                                                                        <option value="937" >
                                                                Vaishnav Kapol                                                            </option>
                                                                                                                        <option value="938" >
                                                                Vaishnav Khadyata                                                            </option>
                                                                                                                        <option value="939" >
                                                                Vaishnav Lad                                                            </option>
                                                                                                                        <option value="940" >
                                                                Vaishnav Modh                                                            </option>
                                                                                                                        <option value="941" >
                                                                Vaishnav Porvad                                                            </option>
                                                                                                                        <option value="942" >
                                                                Vaishnav Shrimali                                                            </option>
                                                                                                                        <option value="943" >
                                                                Vaishnav Sorathaiya                                                            </option>
                                                                                                                        <option value="944" >
                                                                Vaishnav Vania                                                            </option>
                                                                                                                        <option value="945" >
                                                                Vaishnava                                                            </option>
                                                                                                                        <option value="946" >
                                                                Vaishya                                                            </option>
                                                                                                                        <option value="947" >
                                                                Vaishya Vani                                                            </option>
                                                                                                                        <option value="948" >
                                                                Valluvan                                                            </option>
                                                                                                                        <option value="949" >
                                                                Valmiki                                                            </option>
                                                                                                                        <option value="950" >
                                                                Vani                                                            </option>
                                                                                                                        <option value="951" >
                                                                Vani / Vaishya                                                            </option>
                                                                                                                        <option value="952" >
                                                                Vania                                                            </option>
                                                                                                                        <option value="953" >
                                                                Vanika Vyshya                                                            </option>
                                                                                                                        <option value="954" >
                                                                Vaniya                                                            </option>
                                                                                                                        <option value="955" >
                                                                Vaniya Chettiar                                                            </option>
                                                                                                                        <option value="956" >
                                                                Vanjara                                                            </option>
                                                                                                                        <option value="957" >
                                                                Vanjari                                                            </option>
                                                                                                                        <option value="958" >
                                                                Vankar                                                            </option>
                                                                                                                        <option value="959" >
                                                                Vannar                                                            </option>
                                                                                                                        <option value="960" >
                                                                Vannia Kula Kshatriyar                                                            </option>
                                                                                                                        <option value="961" >
                                                                Variar                                                            </option>
                                                                                                                        <option value="962" >
                                                                Varshney                                                            </option>
                                                                                                                        <option value="963" >
                                                                Varshney (Barahseni)                                                            </option>
                                                                                                                        <option value="964" >
                                                                Veera Saivam                                                            </option>
                                                                                                                        <option value="965" >
                                                                Veerakodi Vellala                                                            </option>
                                                                                                                        <option value="966" >
                                                                Velaan                                                            </option>
                                                                                                                        <option value="967" >
                                                                Velama                                                            </option>
                                                                                                                        <option value="968" >
                                                                Vellalar                                                            </option>
                                                                                                                        <option value="969" >
                                                                Vellan Chettiars                                                            </option>
                                                                                                                        <option value="970" >
                                                                Veluthedathu Nair                                                            </option>
                                                                                                                        <option value="971" >
                                                                Vettuva Gounder                                                            </option>
                                                                                                                        <option value="972" >
                                                                Vettuvan                                                            </option>
                                                                                                                        <option value="973" >
                                                                Vijayvargia                                                            </option>
                                                                                                                        <option value="974" >
                                                                Vilakithala Nair                                                            </option>
                                                                                                                        <option value="975" >
                                                                Vilakkithala Nair                                                            </option>
                                                                                                                        <option value="976" >
                                                                Vishwakarma                                                            </option>
                                                                                                                        <option value="977" >
                                                                Viswabrahmin                                                            </option>
                                                                                                                        <option value="978" >
                                                                Vokkaliga                                                            </option>
                                                                                                                        <option value="979" >
                                                                ARYA VYSYA                                                            </option>
                                                                                                                        <option value="980" >
                                                                Yadav                                                            </option>
                                                                                                                        <option value="981" >
                                                                Yadava Naidu                                                            </option>
                                                                                                                        <option value="982" >
                                                                Yellapu                                                            </option>
                                                                                                                        <option value="983" >
                                                                Anavil Brahmin                                                              </option>
                                                                                                                        <option value="984" >
                                                                Audichya Brahmin                                                              </option>
                                                                                                                        <option value="985" >
                                                                Barendra Brahmin                                                               </option>
                                                                                                                        <option value="986" >
                                                                Bhatt Brahmin                                                              </option>
                                                                                                                        <option value="987" >
                                                                Bhumihar Brahmin                                                              </option>
                                                                                                                        <option value="988" >
                                                                Daivadnya Brahmin                                                              </option>
                                                                                                                        <option value="989" >
                                                                Danua Brahmin                                                              </option>
                                                                                                                        <option value="990" >
                                                                Deshastha Brahmin                                                              </option>
                                                                                                                        <option value="991" >
                                                                Dhiman Brahmin                                                              </option>
                                                                                                                        <option value="992" >
                                                                Dravida Brahmin                                                              </option>
                                                                                                                        <option value="993" >
                                                                Embrandiri Brahmin                                                              </option>
                                                                                                                        <option value="994" >
                                                                Garhwali Brahmin                                                              </option>
                                                                                                                        <option value="995" >
                                                                Gaur Brahmin                                                              </option>
                                                                                                                        <option value="996" >
                                                                Goswami/Gosavi Brahmin                                                              </option>
                                                                                                                        <option value="997" >
                                                                Gujar Gaur Brahmin                                                              </option>
                                                                                                                        <option value="998" >
                                                                Gurukkal Brahmin                                                              </option>
                                                                                                                        <option value="999" >
                                                                Halua Brahmin                                                              </option>
                                                                                                                        <option value="1000" >
                                                                Havyaka Brahmin                                                              </option>
                                                                                                                        <option value="1001" >
                                                                Hoysala Brahmin                                                              </option>
                                                                                                                        <option value="1002" >
                                                                Iyengar Brahmin                                                              </option>
                                                                                                                        <option value="1003" >
                                                                Iyer Brahmin                                                              </option>
                                                                                                                        <option value="1004" >
                                                                Jangid Brahmin                                                              </option>
                                                                                                                        <option value="1005" >
                                                                Jhadua Brahmin                                                              </option>
                                                                                                                        <option value="1006" >
                                                                Kanyakubj Brahmin                                                              </option>
                                                                                                                        <option value="1007" >
                                                                Karhade Brahmin                                                              </option>
                                                                                                                        <option value="1008" >
                                                                Kokanastha Brahmin                                                              </option>
                                                                                                                        <option value="1009" >
                                                                Kota Brahmin                                                              </option>
                                                                                                                        <option value="1010" >
                                                                Kulin Brahmin                                                              </option>
                                                                                                                        <option value="1011" >
                                                                Kumaoni Brahmin                                                              </option>
                                                                                                                        <option value="1012" >
                                                                Madhwa Brahmin                                                              </option>
                                                                                                                        <option value="1013" >
                                                                Maithil Brahmin                                                              </option>
                                                                                                                        <option value="1014" >
                                                                Modh Brahmin                                                              </option>
                                                                                                                        <option value="1015" >
                                                                Mohyal Brahmin                                                              </option>
                                                                                                                        <option value="1016" >
                                                                Nagar Brahmin                                                              </option>
                                                                                                                        <option value="1017" >
                                                                Namboodiri Brahmin                                                              </option>
                                                                                                                        <option value="1018" >
                                                                Narmadiya Brahmin                                                              </option>
                                                                                                                        <option value="1019" >
                                                                Niyogi Brahmin                                                              </option>
                                                                                                                        <option value="1020" >
                                                                Panda Brahmin                                                              </option>
                                                                                                                        <option value="1021" >
                                                                Pandit Brahmin                                                              </option>
                                                                                                                        <option value="1022" >
                                                                Pushkarna Brahmin                                                              </option>
                                                                                                                        <option value="1023" >
                                                                Rarhi Brahmin                                                              </option>
                                                                                                                        <option value="1024" >
                                                                Rigvedi Brahmin                                                              </option>
                                                                                                                        <option value="1025" >
                                                                Rudraj Brahmin                                                              </option>
                                                                                                                        <option value="1026" >
                                                                Sakaldwipi Brahmin                                                              </option>
                                                                                                                        <option value="1027" >
                                                                Sanadya Brahmin                                                              </option>
                                                                                                                        <option value="1028" >
                                                                Sanketi Brahmin                                                               </option>
                                                                                                                        <option value="1029" >
                                                                Saraswat Brahmin                                                              </option>
                                                                                                                        <option value="1030" >
                                                                Saryuparin Brahmin                                                              </option>
                                                                                                                        <option value="1031" >
                                                                Shivhalli Brahmin                                                              </option>
                                                                                                                        <option value="1032" >
                                                                Shrimali Brahmin                                                              </option>
                                                                                                                        <option value="1033" >
                                                                Sikhwal Brahmin                                                              </option>
                                                                                                                        <option value="1034" >
                                                                Smartha Brahmin                                                              </option>
                                                                                                                        <option value="1035" >
                                                                Sri Vaishnava Brahmin                                                              </option>
                                                                                                                        <option value="1036" >
                                                                Stanika Brahmin                                                              </option>
                                                                                                                        <option value="1037" >
                                                                Tyagi Brahmin                                                              </option>
                                                                                                                        <option value="1038" >
                                                                Vaidiki Brahmin                                                              </option>
                                                                                                                        <option value="1039" >
                                                                Vaikhanasa Brahmin                                                              </option>
                                                                                                                        <option value="1040" >
                                                                Velanadu Brahmin                                                              </option>
                                                                                                                        <option value="1041" >
                                                                Vyas Brahmin                                                              </option>
                                                                                                                        <option value="1042" >
                                                                Shetty                                                              </option>
                                                                                                                        <option value="1043" >
                                                                Mera                                                              </option>
                                                                                                                        <option value="1044" >
                                                                Mukkulathor                                                              </option>
                                                                                                                        <option value="1045" >
                                                                Paswan                                                              </option>
                                                                                                                        <option value="1046" >
                                                                Jeer                                                              </option>
                                                                                                                        <option value="1047" >
                                                                Brahmin Jijhotia                                                              </option>
                                                                                                                        <option value="1048" >
                                                                Nath                                                              </option>
                                                                                                                        <option value="1049" >
                                                                Koiri                                                              </option>
                                                                                                                        <option value="1050" >
                                                                Brahmin Malviya                                                              </option>
                                                                                                                        <option value="1051" >
                                                                Darji                                                              </option>
                                                                                                                        <option value="1052" >
                                                                Amil Sindhi                                                              </option>
                                                                                                                        <option value="1053" >
                                                                Baibhand Sindhi                                                              </option>
                                                                                                                        <option value="1054" >
                                                                Bhanusali Sindhi                                                              </option>
                                                                                                                        <option value="1055" >
                                                                Bhatia Sindhi                                                              </option>
                                                                                                                        <option value="1056" >
                                                                Chhapru Sindhi                                                              </option>
                                                                                                                        <option value="1057" >
                                                                Dadu Sindhi                                                              </option>
                                                                                                                        <option value="1058" >
                                                                Hyderabadi Sindhi                                                              </option>
                                                                                                                        <option value="1059" >
                                                                Larai Sindhi                                                              </option>
                                                                                                                        <option value="1060" >
                                                                Larkana Sindhi                                                              </option>
                                                                                                                        <option value="1061" >
                                                                Lohana Sindhi                                                              </option>
                                                                                                                        <option value="1062" >
                                                                Rohiri Sindhi                                                              </option>
                                                                                                                        <option value="1063" >
                                                                Sahiti Sindhi                                                              </option>
                                                                                                                        <option value="1064" >
                                                                Sakkhar Sindhi                                                              </option>
                                                                                                                        <option value="1065" >
                                                                Sehwani Sindhi                                                              </option>
                                                                                                                        <option value="1066" >
                                                                Shikarpuri Sindhi                                                              </option>
                                                                                                                        <option value="1067" >
                                                                Thatai Sindhi                                                              </option>
                                                                                                                        <option value="1068" >
                                                                Naika                                                              </option>
                                                                                                                        <option value="1069" >
                                                                Muslim - Ansari                                                            </option>
                                                                                                                        <option value="1070" >
                                                                Muslim - Arain                                                            </option>
                                                                                                                        <option value="1071" >
                                                                Muslim - Awan                                                            </option>
                                                                                                                        <option value="1072" >
                                                                Muslim - Bohra                                                            </option>
                                                                                                                        <option value="1073" >
                                                                Muslim - Dekkani                                                            </option>
                                                                                                                        <option value="1074" >
                                                                Muslim - Dudekula                                                            </option>
                                                                                                                        <option value="1075" >
                                                                Muslim - Hanafi                                                            </option>
                                                                                                                        <option value="1076" >
                                                                Muslim - Jat                                                            </option>
                                                                                                                        <option value="1077" >
                                                                Muslim - Khoja                                                            </option>
                                                                                                                        <option value="1078" >
                                                                Muslim - Lebbai                                                            </option>
                                                                                                                        <option value="1079" >
                                                                Muslim - Malik                                                            </option>
                                                                                                                        <option value="1080" >
                                                                Muslim - Mapila                                                            </option>
                                                                                                                        <option value="1081" >
                                                                Muslim - Maraicar                                                            </option>
                                                                                                                        <option value="1082" >
                                                                Muslim - Memon                                                            </option>
                                                                                                                        <option value="1083" >
                                                                Muslim - Mughal                                                            </option>
                                                                                                                        <option value="1084" >
                                                                Muslim - Others                                                            </option>
                                                                                                                        <option value="1085" >
                                                                Muslim - Pathan                                                            </option>
                                                                                                                        <option value="1086" >
                                                                Muslim - Qureshi                                                            </option>
                                                                                                                        <option value="1087" >
                                                                Muslim - Rajput                                                            </option>
                                                                                                                        <option value="1088" >
                                                                Muslim - Rowther                                                            </option>
                                                                                                                        <option value="1089" >
                                                                Muslim - Shafi                                                            </option>
                                                                                                                        <option value="1090" >
                                                                Muslim - Sheikh                                                            </option>
                                                                                                                        <option value="1091" >
                                                                Muslim - Siddiqui                                                            </option>
                                                                                                                        <option value="1092" >
                                                                Muslim - Syed                                                            </option>
                                                                                                                        <option value="1093" >
                                                                Muslim - UnSpecified                                                            </option>
                                                                                                                        <option value="1094" >
                                                                Muslim - Ansari                                                            </option>
                                                                                                                        <option value="1095" >
                                                                Muslim - Arain                                                            </option>
                                                                                                                        <option value="1096" >
                                                                Muslim - Awan                                                            </option>
                                                                                                                        <option value="1097" >
                                                                Muslim - Bohra                                                            </option>
                                                                                                                        <option value="1098" >
                                                                Muslim - Dekkani                                                            </option>
                                                                                                                        <option value="1099" >
                                                                Muslim - Dudekula                                                            </option>
                                                                                                                        <option value="1100" >
                                                                Muslim - Hanafi                                                            </option>
                                                                                                                        <option value="1101" >
                                                                Muslim - Jat                                                            </option>
                                                                                                                        <option value="1102" >
                                                                Muslim - Khoja                                                            </option>
                                                                                                                        <option value="1103" >
                                                                Muslim - Lebbai                                                            </option>
                                                                                                                        <option value="1104" >
                                                                Muslim - Malik                                                            </option>
                                                                                                                        <option value="1105" >
                                                                Muslim - Mapila                                                            </option>
                                                                                                                        <option value="1106" >
                                                                Muslim - Maraicar                                                            </option>
                                                                                                                        <option value="1107" >
                                                                Muslim - Memon                                                            </option>
                                                                                                                        <option value="1108" >
                                                                Muslim - Mughal                                                            </option>
                                                                                                                        <option value="1109" >
                                                                Muslim - Others                                                            </option>
                                                                                                                        <option value="1110" >
                                                                Muslim - Pathan                                                            </option>
                                                                                                                        <option value="1111" >
                                                                Muslim - Qureshi                                                            </option>
                                                                                                                        <option value="1112" >
                                                                Muslim - Rajput                                                            </option>
                                                                                                                        <option value="1113" >
                                                                Muslim - Rowther                                                            </option>
                                                                                                                        <option value="1114" >
                                                                Muslim - Shafi                                                            </option>
                                                                                                                        <option value="1115" >
                                                                Muslim - Sheikh                                                            </option>
                                                                                                                        <option value="1116" >
                                                                Muslim - Siddiqui                                                            </option>
                                                                                                                        <option value="1117" >
                                                                Muslim - Syed                                                            </option>
                                                                                                                        <option value="1118" >
                                                                Muslim - UnSpecified                                                            </option>
                                                                                                                        <option value="1119" >
                                                                Muslim - Ansari                                                            </option>
                                                                                                                        <option value="1120" >
                                                                Muslim - Arain                                                            </option>
                                                                                                                        <option value="1121" >
                                                                Muslim - Awan                                                            </option>
                                                                                                                        <option value="1122" >
                                                                Muslim - Bohra                                                            </option>
                                                                                                                        <option value="1123" >
                                                                Muslim - Dekkani                                                            </option>
                                                                                                                        <option value="1124" >
                                                                Muslim - Dudekula                                                            </option>
                                                                                                                        <option value="1125" >
                                                                Muslim - Hanafi                                                            </option>
                                                                                                                        <option value="1126" >
                                                                Muslim - Jat                                                            </option>
                                                                                                                        <option value="1127" >
                                                                Muslim - Khoja                                                            </option>
                                                                                                                        <option value="1128" >
                                                                Muslim - Lebbai                                                            </option>
                                                                                                                        <option value="1129" >
                                                                Muslim - Malik                                                            </option>
                                                                                                                        <option value="1130" >
                                                                Muslim - Mapila                                                            </option>
                                                                                                                        <option value="1131" >
                                                                Muslim - Maraicar                                                            </option>
                                                                                                                        <option value="1132" >
                                                                Muslim - Maraicar                                                            </option>
                                                                                                                        <option value="1133" >
                                                                Muslim - Memon                                                            </option>
                                                                                                                        <option value="1134" >
                                                                Muslim - Mughal                                                            </option>
                                                                                                                        <option value="1135" >
                                                                Muslim - Others                                                            </option>
                                                                                                                        <option value="1136" >
                                                                Muslim - Pathan                                                            </option>
                                                                                                                        <option value="1137" >
                                                                Muslim - Qureshi                                                            </option>
                                                                                                                        <option value="1138" >
                                                                Muslim - Rajput                                                            </option>
                                                                                                                        <option value="1139" >
                                                                Muslim - Rowther                                                            </option>
                                                                                                                        <option value="1140" >
                                                                Muslim - Shafi                                                            </option>
                                                                                                                        <option value="1141" >
                                                                Muslim - Sheikh                                                            </option>
                                                                                                                        <option value="1142" >
                                                                Muslim - Siddiqui                                                            </option>
                                                                                                                        <option value="1143" >
                                                                Muslim - Syed                                                            </option>
                                                                                                                        <option value="1144" >
                                                                Muslim - UnSpecified                                                            </option>
                                                                                                                        <option value="1145" >
                                                                Born Again                                                            </option>
                                                                                                                        <option value="1146" >
                                                                Brethren                                                            </option>
                                                                                                                        <option value="1147" >
                                                                Church of South India                                                            </option>
                                                                                                                        <option value="1148" >
                                                                Evangelist                                                            </option>
                                                                                                                        <option value="1149" >
                                                                Jacobite                                                            </option>
                                                                                                                        <option value="1150" >
                                                                Knanaya                                                            </option>
                                                                                                                        <option value="1151" >
                                                                Knanaya Catholic                                                            </option>
                                                                                                                        <option value="1152" >
                                                                Knanaya Jacobite                                                            </option>
                                                                                                                        <option value="1153" >
                                                                Latin Catholic                                                            </option>
                                                                                                                        <option value="1154" >
                                                                Malankara Catholic                                                            </option>
                                                                                                                        <option value="1155" >
                                                                Marthoma                                                            </option>
                                                                                                                        <option value="1156" >
                                                                Pentecost                                                            </option>
                                                                                                                        <option value="1157" >
                                                                Roman Catholic                                                            </option>
                                                                                                                        <option value="1158" >
                                                                Seventh-day Adventist                                                            </option>
                                                                                                                        <option value="1159" >
                                                                Syrian Catholic                                                            </option>
                                                                                                                        <option value="1160" >
                                                                Syrian Jacobite                                                            </option>
                                                                                                                        <option value="1161" >
                                                                Syrian Orthodox                                                            </option>
                                                                                                                        <option value="1162" >
                                                                Syro Malabar                                                            </option>
                                                                                                                        <option value="1163" >
                                                                Christian - Others                                                            </option>
                                                                                                                        <option value="1164" >
                                                                Sikh - Ahluwalia                                                            </option>
                                                                                                                        <option value="1165" >
                                                                Sikh - Arora                                                            </option>
                                                                                                                        <option value="1166" >
                                                                Sikh - Bhatia                                                            </option>
                                                                                                                        <option value="1167" >
                                                                Sikh - Bhatra                                                            </option>
                                                                                                                        <option value="1168" >
                                                                Sikh - Ghumar                                                            </option>
                                                                                                                        <option value="1169" >
                                                                Sikh - Intercaste                                                            </option>
                                                                                                                        <option value="1170" >
                                                                Sikh - Jat                                                            </option>
                                                                                                                        <option value="1171" >
                                                                Sikh - Kamboj                                                            </option>
                                                                                                                        <option value="1172" >
                                                                Sikh - Khatri                                                            </option>
                                                                                                                        <option value="1173" >
                                                                Sikh - Kshatriya                                                            </option>
                                                                                                                        <option value="1174" >
                                                                Sikh - Lubana                                                            </option>
                                                                                                                        <option value="1175" >
                                                                Sikh - Majabi                                                            </option>
                                                                                                                        <option value="1176" >
                                                                Sikh - Nai                                                            </option>
                                                                                                                        <option value="1177" >
                                                                Sikh - Others                                                            </option>
                                                                                                                        <option value="1178" >
                                                                Sikh - Rajput                                                            </option>
                                                                                                                        <option value="1179" >
                                                                Sikh - Ramdasia                                                            </option>
                                                                                                                        <option value="1180" >
                                                                Sikh - Ramgharia                                                            </option>
                                                                                                                        <option value="1181" >
                                                                Sikh - Ravidasia                                                            </option>
                                                                                                                        <option value="1182" >
                                                                Sikh - Saini                                                            </option>
                                                                                                                        <option value="1183" >
                                                                Sikh - Tonk Kshatriya                                                            </option>
                                                                                                                        <option value="1184" >
                                                                Sikh - Unspecified                                                            </option>
                                                                                                                        <option value="1185" >
                                                                Jain - Agarwal                                                            </option>
                                                                                                                        <option value="1186" >
                                                                Jain - Bania                                                            </option>
                                                                                                                        <option value="1187" >
                                                                Jain - Intercaste                                                            </option>
                                                                                                                        <option value="1188" >
                                                                Jain - Jaiswal                                                            </option>
                                                                                                                        <option value="1189" >
                                                                Jain - KVO                                                            </option>
                                                                                                                        <option value="1190" >
                                                                Jain - Khandelwal                                                            </option>
                                                                                                                        <option value="1191" >
                                                                Jain - Kutchi                                                            </option>
                                                                                                                        <option value="1192" >
                                                                Jain - Oswal                                                            </option>
                                                                                                                        <option value="1193" >
                                                                Jain - Others                                                            </option>
                                                                                                                        <option value="1194" >
                                                                Jain - Porwal                                                            </option>
                                                                                                                        <option value="1195" >
                                                                Jain - Unspecified                                                            </option>
                                                                                                                        <option value="1196" >
                                                                Jain - Vaishya                                                            </option>
                                                                                                                        <option value="1197" >
                                                                Jain - Agarwal                                                            </option>
                                                                                                                        <option value="1198" >
                                                                Jain - Bania                                                            </option>
                                                                                                                        <option value="1199" >
                                                                Jain - Intercaste                                                            </option>
                                                                                                                        <option value="1200" >
                                                                Jain - Jaiswal                                                            </option>
                                                                                                                        <option value="1201" >
                                                                Jain - KVO                                                            </option>
                                                                                                                        <option value="1202" >
                                                                Jain - Khandelwal                                                            </option>
                                                                                                                        <option value="1203" >
                                                                Jain - Kutchi                                                            </option>
                                                                                                                        <option value="1204" >
                                                                Jain - Oswal                                                            </option>
                                                                                                                        <option value="1205" >
                                                                Jain - Others                                                            </option>
                                                                                                                        <option value="1206" >
                                                                Jain - Porwal                                                            </option>
                                                                                                                        <option value="1207" >
                                                                Jain - Unspecified                                                            </option>
                                                                                                                        <option value="1208" >
                                                                Jain - Vaishya                                                            </option>
                                                                                                                        <option value="1209" >
                                                                Other Caste                                                            </option>
                                                                                                                        <option value="1210" >
                                                                Intercaste                                                            </option>
                                                                                                                        <option value="1211" >
                                                                Irani                                                            </option>
                                                                                                                        <option value="1212" >
                                                                Parsi                                                            </option>
                                                                                                                        <option value="1213" >
                                                                Other Caste                                                            </option>
                                                                                                                        <option value="1214" >
                                                                Other Caste                                                            </option>
                                                                                                                        <option value="1215" >
                                                                Other Caste                                                            </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label>Sub Caste</label>
                                                        <select class="form-control chosen-select" name="sub_caste_id">
                                                            <option value="">Select</option>
                                                                                                                        <option value="2" >
                                                                Test                                                            </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pt-20 pb-20">
                                                    <div class="form-group">
                                                        <label class="col-xs-10" for="willtomarry">Willing To Marry In Other Caste ?</label>
                                                        <span class="col-xs-2">
                                                            <input type="checkbox" name="willing_to_mary" value="1" id="willtomarry" >
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="text-success">
                                                <i class="fa fa-university gtMarginRight10"></i>&nbsp;Education & Occupation Details
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Highest Education</label>
                                                        <select class="form-control chosen-select" name="edu_id" id="edu_id" data-validetta="required">
                                                            <option value="">Select</option>
                                                                                                                                                                                        <option value="8" >
                                                                    BCA                                                                </option>
                                                                                                                            <option value="10" >
                                                                    B Plan                                                                </option>
                                                                                                                            <option value="9" >
                                                                    B Arch                                                                </option>
                                                                                                                            <option value="11" >
                                                                    BE                                                                </option>
                                                                                                                            <option value="12" >
                                                                    B Tech                                                                </option>
                                                                                                                            <option value="13" >
                                                                    BSc Computer Science                                                                </option>
                                                                                                                            <option value="14" >
                                                                    BSc IT                                                                </option>
                                                                                                                            <option value="15" >
                                                                    B Phil                                                                </option>
                                                                                                                            <option value="16" >
                                                                    B Com                                                                </option>
                                                                                                                            <option value="17" >
                                                                    BA                                                                </option>
                                                                                                                            <option value="18" >
                                                                    BFA                                                                </option>
                                                                                                                            <option value="19" >
                                                                    BLIS                                                                </option>
                                                                                                                            <option value="20" >
                                                                    BSW                                                                </option>
                                                                                                                            <option value="21" >
                                                                    BMM (MASS MEDIA)                                                                </option>
                                                                                                                            <option value="22" >
                                                                    BEd                                                                </option>
                                                                                                                            <option value="23" >
                                                                    MEd                                                                </option>
                                                                                                                            <option value="24" >
                                                                    BHM                                                                </option>
                                                                                                                            <option value="25" >
                                                                    BBA                                                                </option>
                                                                                                                            <option value="26" >
                                                                    BFM (Financial Management)                                                                </option>
                                                                                                                            <option value="27" >
                                                                    ME                                                                </option>
                                                                                                                            <option value="28" >
                                                                    M Arch                                                                </option>
                                                                                                                            <option value="29" >
                                                                    MCA                                                                </option>
                                                                                                                            <option value="30" >
                                                                    PGDCA                                                                </option>
                                                                                                                            <option value="31" >
                                                                    M Tech                                                                </option>
                                                                                                                            <option value="32" >
                                                                    MSc Computer Science                                                                </option>
                                                                                                                            <option value="33" >
                                                                    MSc IT                                                                </option>
                                                                                                                            <option value="34" >
                                                                    M Phil                                                                </option>
                                                                                                                            <option value="35" >
                                                                    M Com                                                                </option>
                                                                                                                            <option value="36" >
                                                                    M Sc                                                                </option>
                                                                                                                            <option value="37" >
                                                                    MA                                                                </option>
                                                                                                                            <option value="38" >
                                                                    MLIS                                                                </option>
                                                                                                                            <option value="39" >
                                                                    MSW                                                                </option>
                                                                                                                            <option value="40" >
                                                                    MHM                                                                </option>
                                                                                                                            <option value="41" >
                                                                    MBA                                                                </option>
                                                                                                                            <option value="42" >
                                                                    PGDM                                                                </option>
                                                                                                                            <option value="43" >
                                                                    MFM (Financial Management)                                                                </option>
                                                                                                                            <option value="44" >
                                                                    MBBS                                                                </option>
                                                                                                                            <option value="45" >
                                                                    MD / MS (Medical)                                                                </option>
                                                                                                                            <option value="46" >
                                                                    MCh - Master Of Chirurgiae                                                                </option>
                                                                                                                            <option value="47" >
                                                                    DM - Doctorate Of Medicine                                                                </option>
                                                                                                                            <option value="48" >
                                                                    BDS                                                                </option>
                                                                                                                            <option value="49" >
                                                                    MDS                                                                </option>
                                                                                                                            <option value="50" >
                                                                    BHMS                                                                </option>
                                                                                                                            <option value="51" >
                                                                    MHMS                                                                </option>
                                                                                                                            <option value="52" >
                                                                    BAMS                                                                </option>
                                                                                                                            <option value="53" >
                                                                    MAMS                                                                </option>
                                                                                                                            <option value="54" >
                                                                    Bachelor Of Veterinary Science                                                                </option>
                                                                                                                            <option value="55" >
                                                                    Master Of Veterinary Science                                                                </option>
                                                                                                                            <option value="56" >
                                                                    Degree In Medicine                                                                </option>
                                                                                                                            <option value="57" >
                                                                    Master In Medicine                                                                </option>
                                                                                                                            <option value="58" >
                                                                    BPT                                                                </option>
                                                                                                                            <option value="59" >
                                                                    MPT                                                                </option>
                                                                                                                            <option value="60" >
                                                                    B.Pharm                                                                </option>
                                                                                                                            <option value="61" >
                                                                    M.Pharm                                                                </option>
                                                                                                                            <option value="62" >
                                                                    BSc Nursing                                                                </option>
                                                                                                                            <option value="63" >
                                                                    MSc Nursing                                                                </option>
                                                                                                                            <option value="64" >
                                                                    Diploma In Nursing                                                                </option>
                                                                                                                            <option value="65" >
                                                                    Medical Laboratory Technology                                                                </option>
                                                                                                                            <option value="66" >
                                                                    BGL                                                                </option>
                                                                                                                            <option value="67" >
                                                                    Bachelor Of Law                                                                </option>
                                                                                                                            <option value="68" >
                                                                    LLB                                                                </option>
                                                                                                                            <option value="69" >
                                                                    Master Of Law                                                                </option>
                                                                                                                            <option value="70" >
                                                                    LLM                                                                </option>
                                                                                                                            <option value="71" >
                                                                    CA Inter                                                                </option>
                                                                                                                            <option value="72" >
                                                                    CA Final                                                                </option>
                                                                                                                            <option value="73" >
                                                                    ICWA                                                                </option>
                                                                                                                            <option value="74" >
                                                                    Company Secretary (CS)                                                                </option>
                                                                                                                            <option value="75" >
                                                                    CFA (Chartered Financial Analyst)                                                                </option>
                                                                                                                            <option value="76" >
                                                                    Ph D                                                                </option>
                                                                                                                            <option value="77" >
                                                                    IAS                                                                </option>
                                                                                                                            <option value="78" >
                                                                    IPS                                                                </option>
                                                                                                                            <option value="79" >
                                                                    IRS                                                                </option>
                                                                                                                            <option value="80" >
                                                                    Diploma                                                                </option>
                                                                                                                            <option value="81" >
                                                                    Polytechnic                                                                </option>
                                                                                                                            <option value="82" >
                                                                    High School                                                                </option>
                                                                                                                            <option value="83" >
                                                                    Less Than High School                                                                </option>
                                                                                                                            <option value="84" >
                                                                    Other Education                                                                </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Additional Degree</label>
                                                        <select class="form-control" name="edu_id1" id="edu_id1" >
                                                            <option value="">Select Your Additional Degree</option>
                                                                                                                            <option value="8" >
                                                                    BCA                                                                </option>
                                                                                                                            <option value="10" >
                                                                    B Plan                                                                </option>
                                                                                                                            <option value="9" >
                                                                    B Arch                                                                </option>
                                                                                                                            <option value="11" >
                                                                    BE                                                                </option>
                                                                                                                            <option value="12" >
                                                                    B Tech                                                                </option>
                                                                                                                            <option value="13" >
                                                                    BSc Computer Science                                                                </option>
                                                                                                                            <option value="14" >
                                                                    BSc IT                                                                </option>
                                                                                                                            <option value="15" >
                                                                    B Phil                                                                </option>
                                                                                                                            <option value="16" >
                                                                    B Com                                                                </option>
                                                                                                                            <option value="17" >
                                                                    BA                                                                </option>
                                                                                                                            <option value="18" >
                                                                    BFA                                                                </option>
                                                                                                                            <option value="19" >
                                                                    BLIS                                                                </option>
                                                                                                                            <option value="20" >
                                                                    BSW                                                                </option>
                                                                                                                            <option value="21" >
                                                                    BMM (MASS MEDIA)                                                                </option>
                                                                                                                            <option value="22" >
                                                                    BEd                                                                </option>
                                                                                                                            <option value="23" >
                                                                    MEd                                                                </option>
                                                                                                                            <option value="24" >
                                                                    BHM                                                                </option>
                                                                                                                            <option value="25" >
                                                                    BBA                                                                </option>
                                                                                                                            <option value="26" >
                                                                    BFM (Financial Management)                                                                </option>
                                                                                                                            <option value="27" >
                                                                    ME                                                                </option>
                                                                                                                            <option value="28" >
                                                                    M Arch                                                                </option>
                                                                                                                            <option value="29" >
                                                                    MCA                                                                </option>
                                                                                                                            <option value="30" >
                                                                    PGDCA                                                                </option>
                                                                                                                            <option value="31" >
                                                                    M Tech                                                                </option>
                                                                                                                            <option value="32" >
                                                                    MSc Computer Science                                                                </option>
                                                                                                                            <option value="33" >
                                                                    MSc IT                                                                </option>
                                                                                                                            <option value="34" >
                                                                    M Phil                                                                </option>
                                                                                                                            <option value="35" >
                                                                    M Com                                                                </option>
                                                                                                                            <option value="36" >
                                                                    M Sc                                                                </option>
                                                                                                                            <option value="37" >
                                                                    MA                                                                </option>
                                                                                                                            <option value="38" >
                                                                    MLIS                                                                </option>
                                                                                                                            <option value="39" >
                                                                    MSW                                                                </option>
                                                                                                                            <option value="40" >
                                                                    MHM                                                                </option>
                                                                                                                            <option value="41" >
                                                                    MBA                                                                </option>
                                                                                                                            <option value="42" >
                                                                    PGDM                                                                </option>
                                                                                                                            <option value="43" >
                                                                    MFM (Financial Management)                                                                </option>
                                                                                                                            <option value="44" >
                                                                    MBBS                                                                </option>
                                                                                                                            <option value="45" >
                                                                    MD / MS (Medical)                                                                </option>
                                                                                                                            <option value="46" >
                                                                    MCh - Master Of Chirurgiae                                                                </option>
                                                                                                                            <option value="47" >
                                                                    DM - Doctorate Of Medicine                                                                </option>
                                                                                                                            <option value="48" >
                                                                    BDS                                                                </option>
                                                                                                                            <option value="49" >
                                                                    MDS                                                                </option>
                                                                                                                            <option value="50" >
                                                                    BHMS                                                                </option>
                                                                                                                            <option value="51" >
                                                                    MHMS                                                                </option>
                                                                                                                            <option value="52" >
                                                                    BAMS                                                                </option>
                                                                                                                            <option value="53" >
                                                                    MAMS                                                                </option>
                                                                                                                            <option value="54" >
                                                                    Bachelor Of Veterinary Science                                                                </option>
                                                                                                                            <option value="55" >
                                                                    Master Of Veterinary Science                                                                </option>
                                                                                                                            <option value="56" >
                                                                    Degree In Medicine                                                                </option>
                                                                                                                            <option value="57" >
                                                                    Master In Medicine                                                                </option>
                                                                                                                            <option value="58" >
                                                                    BPT                                                                </option>
                                                                                                                            <option value="59" >
                                                                    MPT                                                                </option>
                                                                                                                            <option value="60" >
                                                                    B.Pharm                                                                </option>
                                                                                                                            <option value="61" >
                                                                    M.Pharm                                                                </option>
                                                                                                                            <option value="62" >
                                                                    BSc Nursing                                                                </option>
                                                                                                                            <option value="63" >
                                                                    MSc Nursing                                                                </option>
                                                                                                                            <option value="64" >
                                                                    Diploma In Nursing                                                                </option>
                                                                                                                            <option value="65" >
                                                                    Medical Laboratory Technology                                                                </option>
                                                                                                                            <option value="66" >
                                                                    BGL                                                                </option>
                                                                                                                            <option value="67" >
                                                                    Bachelor Of Law                                                                </option>
                                                                                                                            <option value="68" >
                                                                    LLB                                                                </option>
                                                                                                                            <option value="69" >
                                                                    Master Of Law                                                                </option>
                                                                                                                            <option value="70" >
                                                                    LLM                                                                </option>
                                                                                                                            <option value="71" >
                                                                    CA Inter                                                                </option>
                                                                                                                            <option value="72" >
                                                                    CA Final                                                                </option>
                                                                                                                            <option value="73" >
                                                                    ICWA                                                                </option>
                                                                                                                            <option value="74" >
                                                                    Company Secretary (CS)                                                                </option>
                                                                                                                            <option value="75" >
                                                                    CFA (Chartered Financial Analyst)                                                                </option>
                                                                                                                            <option value="76" >
                                                                    Ph D                                                                </option>
                                                                                                                            <option value="77" >
                                                                    IAS                                                                </option>
                                                                                                                            <option value="78" >
                                                                    IPS                                                                </option>
                                                                                                                            <option value="79" >
                                                                    IRS                                                                </option>
                                                                                                                            <option value="80" >
                                                                    Diploma                                                                </option>
                                                                                                                            <option value="81" >
                                                                    Polytechnic                                                                </option>
                                                                                                                            <option value="82" >
                                                                    High School                                                                </option>
                                                                                                                            <option value="83" >
                                                                    Less Than High School                                                                </option>
                                                                                                                            <option value="84" >
                                                                    Other Education                                                                </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Employed In</label>
                                                        <select class="form-control" name="employed_in" >
                                                            <option value="">Select</option>
                                                            <option value="Government" >Government</option>
                                                            <option value="Private" >Private</option>
                                                            <option value="Business" >Business</option>
                                                            <option value="Defence" >Defence</option>
                                                            <option value="Self Employed" >Self Employed</option>
                                                            <option value="Not Working" >Not Working</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Occupation</label>
                                                        <select class="form-control" name="occupation" data-validetta="required">
                                                            <option value=""> Select</option>
                                                                                                                            <option value="18" >Civil Engineer</option>
                                                                                                                            <option value="19" >Clerical Official</option>
                                                                                                                            <option value="20" >Commercial Pilot</option>
                                                                                                                            <option value="21" >Company Secretary</option>
                                                                                                                            <option value="22" >Computer Professional</option>
                                                                                                                            <option value="23" >Consultant</option>
                                                                                                                            <option value="24" >Contractor</option>
                                                                                                                            <option value="25" >Cost Accountant</option>
                                                                                                                            <option value="26" >Creative Person</option>
                                                                                                                            <option value="27" >Customer Support Professional</option>
                                                                                                                            <option value="28" >Defense Employee</option>
                                                                                                                            <option value="29" >Dentist</option>
                                                                                                                            <option value="30" >Designer</option>
                                                                                                                            <option value="31" >Doctor</option>
                                                                                                                            <option value="32" >Economist</option>
                                                                                                                            <option value="33" >Engineer</option>
                                                                                                                            <option value="34" >Engineer (Mechanical)</option>
                                                                                                                            <option value="35" >Engineer (Project)</option>
                                                                                                                            <option value="36" >Entertainment Professional</option>
                                                                                                                            <option value="37" >Event Manager</option>
                                                                                                                            <option value="38" >Executive</option>
                                                                                                                            <option value="39" >Factory worker</option>
                                                                                                                            <option value="40" >Farmer</option>
                                                                                                                            <option value="41" >Fashion Designer</option>
                                                                                                                            <option value="42" >Finance Professional</option>
                                                                                                                            <option value="43" >Flight Attendant</option>
                                                                                                                            <option value="44" >Government Employee</option>
                                                                                                                            <option value="45" >Health Care Professional</option>
                                                                                                                            <option value="46" >Home Maker</option>
                                                                                                                            <option value="47" >Hotel & Restaurant Professional</option>
                                                                                                                            <option value="48" >Human Resources Professional</option>
                                                                                                                            <option value="49" >Interior Designer</option>
                                                                                                                            <option value="50" >Investment Professional</option>
                                                                                                                            <option value="51" >IT / Telecom Professional</option>
                                                                                                                            <option value="52" >Journalist</option>
                                                                                                                            <option value="53" >Lawyer</option>
                                                                                                                            <option value="54" >Lecturer</option>
                                                                                                                            <option value="55" >Legal Professional</option>
                                                                                                                            <option value="56" >Manager</option>
                                                                                                                            <option value="57" >Marketing Professional</option>
                                                                                                                            <option value="58" >Media Professional</option>
                                                                                                                            <option value="59" >Medical Professional</option>
                                                                                                                            <option value="60" >Medical Transcriptionist</option>
                                                                                                                            <option value="61" >Merchant Naval Officer</option>
                                                                                                                            <option value="95" >Not Working</option>
                                                                                                                            <option value="62" >Nurse</option>
                                                                                                                            <option value="63" >Occupational Therapist</option>
                                                                                                                            <option value="64" >Optician</option>
                                                                                                                            <option value="94" >Others</option>
                                                                                                                            <option value="65" >Pharmacist</option>
                                                                                                                            <option value="66" >Physician Assistant</option>
                                                                                                                            <option value="67" >Physicist</option>
                                                                                                                            <option value="68" >Physiotherapist</option>
                                                                                                                            <option value="69" >Pilot</option>
                                                                                                                            <option value="70" >Politician</option>
                                                                                                                            <option value="71" >Production professional</option>
                                                                                                                            <option value="72" >Professor</option>
                                                                                                                            <option value="73" >Psychologist</option>
                                                                                                                            <option value="74" >Public Relations Professional</option>
                                                                                                                            <option value="75" >Real Estate Professional</option>
                                                                                                                            <option value="76" >Research Scholar</option>
                                                                                                                            <option value="78" >Retail Professional</option>
                                                                                                                            <option value="77" >Retired Person</option>
                                                                                                                            <option value="79" >Sales Professional</option>
                                                                                                                            <option value="80" >Scientist</option>
                                                                                                                            <option value="81" >Self-employed Person</option>
                                                                                                                            <option value="82" >Social Worker</option>
                                                                                                                            <option value="83" >Software Consultant</option>
                                                                                                                            <option value="84" >Sportsman</option>
                                                                                                                            <option value="85" >Student</option>
                                                                                                                            <option value="86" >Teacher</option>
                                                                                                                            <option value="87" >Technician</option>
                                                                                                                            <option value="88" >Training Professional</option>
                                                                                                                            <option value="89" >Transportation Professional</option>
                                                                                                                            <option value="90" >Veterinary Doctor</option>
                                                                                                                            <option value="91" >Volunteer</option>
                                                                                                                            <option value="92" >Writer</option>
                                                                                                                            <option value="93" >Zoologist</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Annual Income</label>
                                                        <select class="form-control chosen-select" name="annual_income">
                                                            <option value="">Select</option>
                                                                                                                        <option value="1" >50,000</option>
                                                                                                                        <option value="2" >1,00,000</option>
                                                                                                                        <option value="3" >2,00,000</option>
                                                                                                                        <option value="4" >3,00,000</option>
                                                                                                                        <option value="5" >4,00,000</option>
                                                                                                                        <option value="6" >5,00,000</option>
                                                                                                                        <option value="7" >6,00,000</option>
                                                                                                                        <option value="8" >7,00,000</option>
                                                                                                                        <option value="9" >8,00,000</option>
                                                                                                                        <option value="10" >9,00,000</option>
                                                                                                                        <option value="11" >10,00,000</option>
                                                                                                                        <option value="12" >11,00,000</option>
                                                                                                                        <option value="13" >12,00,000</option>
                                                                                                                        <option value="14" >13,00,000</option>
                                                                                                                        <option value="15" >14,00,000</option>
                                                                                                                        <option value="16" >15,00,000</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="text-success">
                                                <i class="fa fa-group gtMarginRight10"></i>&nbsp;Family Details
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Family Type</label>
                                                        <select class="form-control" name="family_type" >
                                                            <option value="">Select</option>
                                                            <option value="Joint" >
                                                                Joint
                                                            </option>
                                                            <option value="Nuclear" >
                                                                Nuclear
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Family value</label>
                                                        <select class="form-control" name="family_value" >
                                                            <option value="">Select</option>
                                                            <option value="Orthodox" >
                                                                Orthodox
                                                            </option>
                                                            <option value="Traditional" >
                                                                Traditional
                                                            </option>
                                                            <option value="Moderate" >
                                                                Moderate
                                                            </option>
                                                            <option value="Liberal" >
                                                                Liberal
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Family Status</label>
                                                        <select class="form-control" name="family_status">
                                                            <option value="">Select</option>
                                                            <option value="Middle class" >
                                                                Middle class
                                                            </option>
                                                            <option value="Upper middle class" >
                                                                Upper middle class
                                                            </option>
                                                            <option value="Rich" >
                                                                Rich
                                                            </option>
                                                            <option value="Affluent" >
                                                                Affluent
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Fathers Occupation</label>
                                                        <input type="text" class="form-control" name="father_occupation" placeholder="Enter Fathers Occupation" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mothers Occupation</label>
                                                        <input type="text" class="form-control" name="mother_occupation" placeholder="Enter Fathers Occupation" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>No of Brothers</label>
                                                        <select class="form-control" name="no_of_brother">
                                                            <option value="">Select</option>
                                                            <option value="No Brother" >No Brother</option>
                                                            <option value="1 Brother" >1 Brother</option>
                                                            <option value="2 Brothers" >2 Brothers</option>
                                                            <option value="3 Brothers" >3 Brothers</option>
                                                            <option value="4 Brothers" >4 Brothers</option>
                                                            <option value="4 + Brothers" >4 + Brothers</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>No of Married Brothers</label>
                                                        <select class="form-control" name="no_of_marri_brother">
                                                            <option value="">Select</option>
                                                            <option value="No married brother" >No married brother</option>
                                                            <option value="1 married brother"  >1 married brother</option>
                                                            <option value="2 married brothers" >2 married brothers</option>
                                                            <option value="3 married brothers" >3 married brothers</option>
                                                            <option value="4 married brothers" >4 married brothers</option>
                                                            <option value="4+ married brothers" >4+ married brothers</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>No of Sisters</label>
                                                        <select class="form-control" name="no_of_sister">
                                                            <option value="">Select</option>
                                                            <option value="No Sister" >No Sister</option>
                                                            <option value="1 Sister" >1 Sister</option>
                                                            <option value="2 Sisters" >2 Sisters</option>
                                                            <option value="3 Sisters" >3 Sisters</option>
                                                            <option value="4 Sisters" >4 Sisters</option>
                                                            <option value="4 + Sisters" >4 + Sisters</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>No of Married Sisters</label>
                                                        <select class="form-control" name="no_of_marri_sister">
                                                            <option value="">Select</option>
                                                            <option value="No married sister" >No married Sister</option>
                                                            <option value="1 married sister" >1 married sister</option>
                                                            <option value="2 married sisters" >2 married sisters</option>
                                                            <option value="3 married sisters" >3 married sisters</option>
                                                            <option value="4 married sisters" >4 married sisters</option>
                                                            <option value="4+ married sisters" >4+ married sisters</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="text-success">
                                                <i class="fa fa-map-marker gtMarginRight10"></i>&nbsp;Location Details
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label>Country Living In</label>
                                                        <select class="form-control chosen-select" name="country_id" id="country_id" data-validetta="required">
                                                            <option value="">Select Your Country</option>
                                                                                                                        <option value="1" >
                                                                Andorra                                                            </option>
                                                                                                                        <option value="2" >
                                                                United Arab Emirates                                                            </option>
                                                                                                                        <option value="3" >
                                                                Afghanistan                                                            </option>
                                                                                                                        <option value="4" >
                                                                Antigua And Barbuda                                                            </option>
                                                                                                                        <option value="5" >
                                                                Albania                                                            </option>
                                                                                                                        <option value="6" >
                                                                Armenia                                                            </option>
                                                                                                                        <option value="7" >
                                                                Angola                                                            </option>
                                                                                                                        <option value="8" >
                                                                Antarctica                                                            </option>
                                                                                                                        <option value="9" >
                                                                Argentina                                                            </option>
                                                                                                                        <option value="10" >
                                                                American Samoa                                                            </option>
                                                                                                                        <option value="11" >
                                                                Austria                                                            </option>
                                                                                                                        <option value="12" >
                                                                Australia                                                            </option>
                                                                                                                        <option value="13" >
                                                                Aruba                                                            </option>
                                                                                                                        <option value="14" >
                                                                Aland Islands                                                            </option>
                                                                                                                        <option value="15" >
                                                                Azerbaijan                                                            </option>
                                                                                                                        <option value="16" >
                                                                Bosnia And Herzegovina                                                            </option>
                                                                                                                        <option value="17" >
                                                                Barbados                                                            </option>
                                                                                                                        <option value="18" >
                                                                Bangladesh                                                            </option>
                                                                                                                        <option value="19" >
                                                                Belgium                                                            </option>
                                                                                                                        <option value="20" >
                                                                Burkina Faso                                                            </option>
                                                                                                                        <option value="21" >
                                                                Bulgaria                                                            </option>
                                                                                                                        <option value="22" >
                                                                Bahrain                                                            </option>
                                                                                                                        <option value="23" >
                                                                Burundi                                                            </option>
                                                                                                                        <option value="24" >
                                                                Benin                                                            </option>
                                                                                                                        <option value="25" >
                                                                Bermuda                                                            </option>
                                                                                                                        <option value="26" >
                                                                Brunei                                                            </option>
                                                                                                                        <option value="27" >
                                                                Bolivia                                                            </option>
                                                                                                                        <option value="28" >
                                                                Bonaire, Saint Eustatius And Saba                                                             </option>
                                                                                                                        <option value="29" >
                                                                Brazil                                                            </option>
                                                                                                                        <option value="30" >
                                                                Bahamas                                                            </option>
                                                                                                                        <option value="31" >
                                                                Bhutan                                                            </option>
                                                                                                                        <option value="32" >
                                                                Bouvet Island                                                            </option>
                                                                                                                        <option value="33" >
                                                                Botswana                                                            </option>
                                                                                                                        <option value="34" >
                                                                Belarus                                                            </option>
                                                                                                                        <option value="35" >
                                                                Belize                                                            </option>
                                                                                                                        <option value="36" >
                                                                Canada                                                            </option>
                                                                                                                        <option value="37" >
                                                                Democratic Republic Of The Congo                                                            </option>
                                                                                                                        <option value="38" >
                                                                Central African Republic                                                            </option>
                                                                                                                        <option value="39" >
                                                                Republic Of The Congo                                                            </option>
                                                                                                                        <option value="40" >
                                                                Switzerland                                                            </option>
                                                                                                                        <option value="41" >
                                                                Ivory Coast                                                            </option>
                                                                                                                        <option value="42" >
                                                                Chile                                                            </option>
                                                                                                                        <option value="43" >
                                                                Cameroon                                                            </option>
                                                                                                                        <option value="44" >
                                                                China                                                            </option>
                                                                                                                        <option value="45" >
                                                                Colombia                                                            </option>
                                                                                                                        <option value="46" >
                                                                Costa Rica                                                            </option>
                                                                                                                        <option value="47" >
                                                                Cuba                                                            </option>
                                                                                                                        <option value="48" >
                                                                Cape Verde                                                            </option>
                                                                                                                        <option value="49" >
                                                                Cyprus                                                            </option>
                                                                                                                        <option value="50" >
                                                                Czech Republic                                                            </option>
                                                                                                                        <option value="51" >
                                                                Germany                                                            </option>
                                                                                                                        <option value="52" >
                                                                Djibouti                                                            </option>
                                                                                                                        <option value="53" >
                                                                Denmark                                                            </option>
                                                                                                                        <option value="54" >
                                                                Dominica                                                            </option>
                                                                                                                        <option value="55" >
                                                                Dominican Republic                                                            </option>
                                                                                                                        <option value="56" >
                                                                Algeria                                                            </option>
                                                                                                                        <option value="57" >
                                                                Ecuador                                                            </option>
                                                                                                                        <option value="58" >
                                                                Estonia                                                            </option>
                                                                                                                        <option value="59" >
                                                                Egypt                                                            </option>
                                                                                                                        <option value="60" >
                                                                Western Sahara                                                            </option>
                                                                                                                        <option value="61" >
                                                                Eritrea                                                            </option>
                                                                                                                        <option value="62" >
                                                                Spain                                                            </option>
                                                                                                                        <option value="63" >
                                                                Ethiopia                                                            </option>
                                                                                                                        <option value="64" >
                                                                Finland                                                            </option>
                                                                                                                        <option value="65" >
                                                                Fiji                                                            </option>
                                                                                                                        <option value="66" >
                                                                Micronesia                                                            </option>
                                                                                                                        <option value="67" >
                                                                Faroe Islands                                                            </option>
                                                                                                                        <option value="68" >
                                                                France                                                            </option>
                                                                                                                        <option value="69" >
                                                                Gabon                                                            </option>
                                                                                                                        <option value="70" >
                                                                United Kingdom                                                            </option>
                                                                                                                        <option value="71" >
                                                                Grenada                                                            </option>
                                                                                                                        <option value="72" >
                                                                Georgia                                                            </option>
                                                                                                                        <option value="73" >
                                                                French Guiana                                                            </option>
                                                                                                                        <option value="74" >
                                                                Guernsey                                                            </option>
                                                                                                                        <option value="75" >
                                                                Ghana                                                            </option>
                                                                                                                        <option value="76" >
                                                                Greenland                                                            </option>
                                                                                                                        <option value="77" >
                                                                Gambia                                                            </option>
                                                                                                                        <option value="78" >
                                                                Guinea                                                            </option>
                                                                                                                        <option value="79" >
                                                                Guadeloupe                                                            </option>
                                                                                                                        <option value="80" >
                                                                Equatorial Guinea                                                            </option>
                                                                                                                        <option value="81" >
                                                                Greece                                                            </option>
                                                                                                                        <option value="82" >
                                                                Guatemala                                                            </option>
                                                                                                                        <option value="83" >
                                                                Guam                                                            </option>
                                                                                                                        <option value="84" >
                                                                Guinea-Bissau                                                            </option>
                                                                                                                        <option value="85" >
                                                                Guyana                                                            </option>
                                                                                                                        <option value="86" >
                                                                Hong Kong                                                            </option>
                                                                                                                        <option value="87" >
                                                                Honduras                                                            </option>
                                                                                                                        <option value="88" >
                                                                Croatia                                                            </option>
                                                                                                                        <option value="89" >
                                                                Haiti                                                            </option>
                                                                                                                        <option value="90" >
                                                                Hungary                                                            </option>
                                                                                                                        <option value="91" >
                                                                Indonesia                                                            </option>
                                                                                                                        <option value="92" >
                                                                Ireland                                                            </option>
                                                                                                                        <option value="93" >
                                                                Israel                                                            </option>
                                                                                                                        <option value="94" >
                                                                Isle Of Man                                                            </option>
                                                                                                                        <option value="95" >
                                                                India                                                            </option>
                                                                                                                        <option value="96" >
                                                                British Indian Ocean Territory                                                            </option>
                                                                                                                        <option value="97" >
                                                                Iraq                                                            </option>
                                                                                                                        <option value="98" >
                                                                Iran                                                            </option>
                                                                                                                        <option value="99" >
                                                                Iceland                                                            </option>
                                                                                                                        <option value="100" >
                                                                Italy                                                            </option>
                                                                                                                        <option value="101" >
                                                                Jersey                                                            </option>
                                                                                                                        <option value="102" >
                                                                Jamaica                                                            </option>
                                                                                                                        <option value="103" >
                                                                Jordan                                                            </option>
                                                                                                                        <option value="104" >
                                                                Japan                                                            </option>
                                                                                                                        <option value="105" >
                                                                Kenya                                                            </option>
                                                                                                                        <option value="106" >
                                                                Kyrgyzstan                                                            </option>
                                                                                                                        <option value="107" >
                                                                Cambodia                                                            </option>
                                                                                                                        <option value="108" >
                                                                Kiribati                                                            </option>
                                                                                                                        <option value="109" >
                                                                Comoros                                                            </option>
                                                                                                                        <option value="110" >
                                                                Saint Kitts And Nevis                                                            </option>
                                                                                                                        <option value="111" >
                                                                North Korea                                                            </option>
                                                                                                                        <option value="112" >
                                                                South Korea                                                            </option>
                                                                                                                        <option value="113" >
                                                                Kuwait                                                            </option>
                                                                                                                        <option value="114" >
                                                                Kazakhstan                                                            </option>
                                                                                                                        <option value="115" >
                                                                Laos                                                            </option>
                                                                                                                        <option value="116" >
                                                                Lebanon                                                            </option>
                                                                                                                        <option value="117" >
                                                                Saint Lucia                                                            </option>
                                                                                                                        <option value="118" >
                                                                Liechtenstein                                                            </option>
                                                                                                                        <option value="119" >
                                                                Sri Lanka                                                            </option>
                                                                                                                        <option value="120" >
                                                                Liberia                                                            </option>
                                                                                                                        <option value="121" >
                                                                Lesotho                                                            </option>
                                                                                                                        <option value="122" >
                                                                Lithuania                                                            </option>
                                                                                                                        <option value="123" >
                                                                Luxembourg                                                            </option>
                                                                                                                        <option value="124" >
                                                                Latvia                                                            </option>
                                                                                                                        <option value="125" >
                                                                Libya                                                            </option>
                                                                                                                        <option value="126" >
                                                                Morocco                                                            </option>
                                                                                                                        <option value="127" >
                                                                Monaco                                                            </option>
                                                                                                                        <option value="128" >
                                                                Moldova                                                            </option>
                                                                                                                        <option value="129" >
                                                                Montenegro                                                            </option>
                                                                                                                        <option value="130" >
                                                                Madagascar                                                            </option>
                                                                                                                        <option value="131" >
                                                                Marshall Islands                                                            </option>
                                                                                                                        <option value="132" >
                                                                Macedonia                                                            </option>
                                                                                                                        <option value="133" >
                                                                Mali                                                            </option>
                                                                                                                        <option value="134" >
                                                                Myanmar                                                            </option>
                                                                                                                        <option value="135" >
                                                                Mongolia                                                            </option>
                                                                                                                        <option value="136" >
                                                                Macao                                                            </option>
                                                                                                                        <option value="137" >
                                                                Northern Mariana Islands                                                            </option>
                                                                                                                        <option value="138" >
                                                                Martinique                                                            </option>
                                                                                                                        <option value="139" >
                                                                Mauritania                                                            </option>
                                                                                                                        <option value="140" >
                                                                Montserrat                                                            </option>
                                                                                                                        <option value="141" >
                                                                Mauritius                                                            </option>
                                                                                                                        <option value="142" >
                                                                Maldives                                                            </option>
                                                                                                                        <option value="143" >
                                                                Malawi                                                            </option>
                                                                                                                        <option value="144" >
                                                                Mexico                                                            </option>
                                                                                                                        <option value="145" >
                                                                Malaysia                                                            </option>
                                                                                                                        <option value="146" >
                                                                Mozambique                                                            </option>
                                                                                                                        <option value="147" >
                                                                Namibia                                                            </option>
                                                                                                                        <option value="148" >
                                                                New Caledonia                                                            </option>
                                                                                                                        <option value="149" >
                                                                Niger                                                            </option>
                                                                                                                        <option value="150" >
                                                                Nigeria                                                            </option>
                                                                                                                        <option value="151" >
                                                                Nicaragua                                                            </option>
                                                                                                                        <option value="152" >
                                                                Netherlands                                                            </option>
                                                                                                                        <option value="153" >
                                                                Norway                                                            </option>
                                                                                                                        <option value="154" >
                                                                Nepal                                                            </option>
                                                                                                                        <option value="155" >
                                                                Nauru                                                            </option>
                                                                                                                        <option value="156" >
                                                                New Zealand                                                            </option>
                                                                                                                        <option value="157" >
                                                                Oman                                                            </option>
                                                                                                                        <option value="158" >
                                                                Panama                                                            </option>
                                                                                                                        <option value="159" >
                                                                Peru                                                            </option>
                                                                                                                        <option value="160" >
                                                                French Polynesia                                                            </option>
                                                                                                                        <option value="161" >
                                                                Papua New Guinea                                                            </option>
                                                                                                                        <option value="162" >
                                                                Philippines                                                            </option>
                                                                                                                        <option value="163" >
                                                                Pakistan                                                            </option>
                                                                                                                        <option value="164" >
                                                                Poland                                                            </option>
                                                                                                                        <option value="165" >
                                                                Saint Pierre And Miquelon                                                            </option>
                                                                                                                        <option value="166" >
                                                                Puerto Rico                                                            </option>
                                                                                                                        <option value="167" >
                                                                Palestinian Territory                                                            </option>
                                                                                                                        <option value="168" >
                                                                Portugal                                                            </option>
                                                                                                                        <option value="169" >
                                                                Palau                                                            </option>
                                                                                                                        <option value="170" >
                                                                Paraguay                                                            </option>
                                                                                                                        <option value="171" >
                                                                Qatar                                                            </option>
                                                                                                                        <option value="172" >
                                                                Reunion                                                            </option>
                                                                                                                        <option value="173" >
                                                                Romania                                                            </option>
                                                                                                                        <option value="174" >
                                                                Serbia                                                            </option>
                                                                                                                        <option value="175" >
                                                                Russia                                                            </option>
                                                                                                                        <option value="176" >
                                                                Rwanda                                                            </option>
                                                                                                                        <option value="177" >
                                                                Saudi Arabia                                                            </option>
                                                                                                                        <option value="178" >
                                                                Solomon Islands                                                            </option>
                                                                                                                        <option value="179" >
                                                                Seychelles                                                            </option>
                                                                                                                        <option value="180" >
                                                                Sudan                                                            </option>
                                                                                                                        <option value="181" >
                                                                Sweden                                                            </option>
                                                                                                                        <option value="182" >
                                                                Singapore                                                            </option>
                                                                                                                        <option value="183" >
                                                                Saint Helena                                                            </option>
                                                                                                                        <option value="184" >
                                                                Slovenia                                                            </option>
                                                                                                                        <option value="185" >
                                                                Svalbard And Jan Mayen                                                            </option>
                                                                                                                        <option value="186" >
                                                                Slovakia                                                            </option>
                                                                                                                        <option value="187" >
                                                                Sierra Leone                                                            </option>
                                                                                                                        <option value="188" >
                                                                San Marino                                                            </option>
                                                                                                                        <option value="189" >
                                                                Senegal                                                            </option>
                                                                                                                        <option value="190" >
                                                                Somalia                                                            </option>
                                                                                                                        <option value="191" >
                                                                Suriname                                                            </option>
                                                                                                                        <option value="192" >
                                                                South Sudan                                                            </option>
                                                                                                                        <option value="193" >
                                                                Sao Tome And Principe                                                            </option>
                                                                                                                        <option value="194" >
                                                                El Salvador                                                            </option>
                                                                                                                        <option value="195" >
                                                                Syria                                                            </option>
                                                                                                                        <option value="196" >
                                                                Swaziland                                                            </option>
                                                                                                                        <option value="197" >
                                                                Chad                                                            </option>
                                                                                                                        <option value="198" >
                                                                French Southern Territories                                                            </option>
                                                                                                                        <option value="199" >
                                                                Togo                                                            </option>
                                                                                                                        <option value="200" >
                                                                Thailand                                                            </option>
                                                                                                                        <option value="201" >
                                                                Tajikistan                                                            </option>
                                                                                                                        <option value="202" >
                                                                Tokelau                                                            </option>
                                                                                                                        <option value="203" >
                                                                East Timor                                                            </option>
                                                                                                                        <option value="204" >
                                                                Turkmenistan                                                            </option>
                                                                                                                        <option value="205" >
                                                                Tunisia                                                            </option>
                                                                                                                        <option value="206" >
                                                                Tonga                                                            </option>
                                                                                                                        <option value="207" >
                                                                Turkey                                                            </option>
                                                                                                                        <option value="208" >
                                                                Trinidad And Tobago                                                            </option>
                                                                                                                        <option value="209" >
                                                                Tuvalu                                                            </option>
                                                                                                                        <option value="210" >
                                                                Taiwan                                                            </option>
                                                                                                                        <option value="211" >
                                                                Tanzania                                                            </option>
                                                                                                                        <option value="212" >
                                                                Ukraine                                                            </option>
                                                                                                                        <option value="213" >
                                                                Uganda                                                            </option>
                                                                                                                        <option value="214" >
                                                                United States Minor Outlying Islands                                                            </option>
                                                                                                                        <option value="215" >
                                                                United States                                                            </option>
                                                                                                                        <option value="216" >
                                                                Uruguay                                                            </option>
                                                                                                                        <option value="217" >
                                                                Uzbekistan                                                            </option>
                                                                                                                        <option value="218" >
                                                                Saint Vincent And The Grenadines                                                            </option>
                                                                                                                        <option value="219" >
                                                                Venezuela                                                            </option>
                                                                                                                        <option value="220" >
                                                                U.S. Virgin Islands                                                            </option>
                                                                                                                        <option value="221" >
                                                                Vietnam                                                            </option>
                                                                                                                        <option value="222" >
                                                                Vanuatu                                                            </option>
                                                                                                                        <option value="223" >
                                                                Wallis And Futuna                                                            </option>
                                                                                                                        <option value="224" >
                                                                Samoa                                                            </option>
                                                                                                                        <option value="225" >
                                                                Kosovo                                                            </option>
                                                                                                                        <option value="226" >
                                                                Yemen                                                            </option>
                                                                                                                        <option value="227" >
                                                                Mayotte                                                            </option>
                                                                                                                        <option value="228" >
                                                                South Africa                                                            </option>
                                                                                                                        <option value="229" >
                                                                Zambia                                                            </option>
                                                                                                                        <option value="230" >
                                                                Zimbabwe                                                            </option>
                                                                                                                    </select>
                                                        <div id="status123"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>State Living In</label>
                                                        <select class="form-control chosen-select" id="state123" name="state" data-validetta="required">
                                                                                                                     </select>
                                                        <div id="status23"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>City Living In</label>
                                                        <select class="form-control chosen-select" name="city" id="city123" data-validetta="required">
                                                            <option value="">Select state first</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <h3 class="text-success">
                                                <i class="fa fa-glass gtMarginRight10"></i>&nbsp;Habits & Hobbies
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Diet</label>
                                                        <select class="form-control" name="diet">
                                                            <option value="">Select</option>
                                                            <option value="Vegetarian" >
                                                                Vegetarian
                                                            </option>
                                                            <option value="Non Vegetarian" >
                                                                Non Vegetarian
                                                            </option>
                                                            <option value="Eggetarian" >
                                                                Eggetarian
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Smoking Habits</label>
                                                        <select class="form-control" name="smoke">
                                                            <option value="">Select</option>
                                                            <option value="No" >
                                                                No
                                                            </option>
                                                            <option value="Yes" >
                                                                Yes
                                                            </option>
                                                            <option value="Occasionally" >
                                                                Occasionally
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Drinking Habits</label>
                                                        <select class="form-control" name="drink">
                                                            <option value="">Select</option>
                                                            <option value="No" >
                                                                No
                                                            </option>
                                                            <option value="Yes" >
                                                                Yes
                                                            </option>
                                                            <option value="Drinks Socially"  >
                                                                Drinks Socially
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="text-success">
                                                <i class="fa fa-male gtMarginRight10"></i>&nbsp;Physical Attribute
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Height</label>
                                                        <select class="form-control" data-validetta="required" name="height">
                                                                                                                        <option value="1"   >Below 4ft 6in - 137cm</option>
                                                                                                                        <option value="2"   >4ft 6in - 137cm</option>
                                                                                                                        <option value="3"   >4ft 7in - 139cm</option>
                                                                                                                        <option value="4"   >4ft 8in - 142cm</option>
                                                                                                                        <option value="5"   >4ft 9in - 144cm</option>
                                                                                                                        <option value="6"   >4ft 10in - 147cm</option>
                                                                                                                        <option value="7"   >4ft 11in - 149cm</option>
                                                                                                                        <option value="8"   >5ft - 152cm</option>
                                                                                                                        <option value="9"   >5ft 1in - 154cm</option>
                                                                                                                        <option value="10"   >5ft 2in - 157cm</option>
                                                                                                                        <option value="11"   >5ft 3in - 160cm</option>
                                                                                                                        <option value="12"   >5ft 4in - 162cm</option>
                                                                                                                        <option value="13"   >5ft 5in - 165cm</option>
                                                                                                                        <option value="14"   >5ft 6in - 167cm</option>
                                                                                                                        <option value="15"   >5ft 7in - 170cm</option>
                                                                                                                        <option value="16"   >5ft 8in - 172cm</option>
                                                                                                                        <option value="17"   >5ft 9in - 175cm</option>
                                                                                                                        <option value="18"   >5ft 10in - 177cm</option>
                                                                                                                        <option value="19"   >5ft 11in - 180cm</option>
                                                                                                                        <option value="20"   >6ft - 182cm</option>
                                                                                                                        <option value="21"   >6ft 1in - 185cm</option>
                                                                                                                        <option value="22"   >6ft 2in - 187cm</option>
                                                                                                                        <option value="23"   >6ft 3in - 190cm</option>
                                                                                                                        <option value="24"   >6ft 4in - 193cm</option>
                                                                                                                        <option value="25"   >6ft 5in - 195cm</option>
                                                                                                                        <option value="26"   >6ft 6in - 198cm</option>
                                                                                                                        <option value="27"   >6ft 7in - 200cm</option>
                                                                                                                        <option value="28"   >6ft 8in - 203cm</option>
                                                                                                                        <option value="29"   >6ft 9in - 205cm</option>
                                                                                                                        <option value="30"   >6ft 10in - 208cm</option>
                                                                                                                        <option value="31"   >6ft 11in - 210cm</option>
                                                                                                                        <option value="32"   >7ft - 213cm</option>
                                                                                                                        <option value="33"   >Above 7ft - 213cm</option>
                                                            	
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Weight</label>
                                                        <select class="form-control" name="weight" data-validetta="required">
                                                                                                                            <option value='30'  >
                                                                    30 Kg
                                                                </option>
                                                                                                                             <option value='31'  >
                                                                    31 Kg
                                                                </option>
                                                                                                                             <option value='32'  >
                                                                    32 Kg
                                                                </option>
                                                                                                                             <option value='33'  >
                                                                    33 Kg
                                                                </option>
                                                                                                                             <option value='34'  >
                                                                    34 Kg
                                                                </option>
                                                                                                                             <option value='35'  >
                                                                    35 Kg
                                                                </option>
                                                                                                                             <option value='36'  >
                                                                    36 Kg
                                                                </option>
                                                                                                                             <option value='37'  >
                                                                    37 Kg
                                                                </option>
                                                                                                                             <option value='38'  >
                                                                    38 Kg
                                                                </option>
                                                                                                                             <option value='39'  >
                                                                    39 Kg
                                                                </option>
                                                                                                                             <option value='40'  >
                                                                    40 Kg
                                                                </option>
                                                                                                                             <option value='41'  >
                                                                    41 Kg
                                                                </option>
                                                                                                                             <option value='42'  >
                                                                    42 Kg
                                                                </option>
                                                                                                                             <option value='43'  >
                                                                    43 Kg
                                                                </option>
                                                                                                                             <option value='44'  >
                                                                    44 Kg
                                                                </option>
                                                                                                                             <option value='45'  >
                                                                    45 Kg
                                                                </option>
                                                                                                                             <option value='46'  >
                                                                    46 Kg
                                                                </option>
                                                                                                                             <option value='47'  >
                                                                    47 Kg
                                                                </option>
                                                                                                                             <option value='48'  >
                                                                    48 Kg
                                                                </option>
                                                                                                                             <option value='49'  >
                                                                    49 Kg
                                                                </option>
                                                                                                                             <option value='50'  >
                                                                    50 Kg
                                                                </option>
                                                                                                                             <option value='51'  >
                                                                    51 Kg
                                                                </option>
                                                                                                                             <option value='52'  >
                                                                    52 Kg
                                                                </option>
                                                                                                                             <option value='53'  >
                                                                    53 Kg
                                                                </option>
                                                                                                                             <option value='54'  >
                                                                    54 Kg
                                                                </option>
                                                                                                                             <option value='55'  >
                                                                    55 Kg
                                                                </option>
                                                                                                                             <option value='56'  >
                                                                    56 Kg
                                                                </option>
                                                                                                                             <option value='57'  >
                                                                    57 Kg
                                                                </option>
                                                                                                                             <option value='58'  >
                                                                    58 Kg
                                                                </option>
                                                                                                                             <option value='59'  >
                                                                    59 Kg
                                                                </option>
                                                                                                                             <option value='60'  >
                                                                    60 Kg
                                                                </option>
                                                                                                                             <option value='61'  >
                                                                    61 Kg
                                                                </option>
                                                                                                                             <option value='62'  >
                                                                    62 Kg
                                                                </option>
                                                                                                                             <option value='63'  >
                                                                    63 Kg
                                                                </option>
                                                                                                                             <option value='64'  >
                                                                    64 Kg
                                                                </option>
                                                                                                                             <option value='65'  >
                                                                    65 Kg
                                                                </option>
                                                                                                                             <option value='66'  >
                                                                    66 Kg
                                                                </option>
                                                                                                                             <option value='67'  >
                                                                    67 Kg
                                                                </option>
                                                                                                                             <option value='68'  >
                                                                    68 Kg
                                                                </option>
                                                                                                                             <option value='69'  >
                                                                    69 Kg
                                                                </option>
                                                                                                                             <option value='70'  >
                                                                    70 Kg
                                                                </option>
                                                                                                                             <option value='71'  >
                                                                    71 Kg
                                                                </option>
                                                                                                                             <option value='72'  >
                                                                    72 Kg
                                                                </option>
                                                                                                                             <option value='73'  >
                                                                    73 Kg
                                                                </option>
                                                                                                                             <option value='74'  >
                                                                    74 Kg
                                                                </option>
                                                                                                                             <option value='75'  >
                                                                    75 Kg
                                                                </option>
                                                                                                                             <option value='76'  >
                                                                    76 Kg
                                                                </option>
                                                                                                                             <option value='77'  >
                                                                    77 Kg
                                                                </option>
                                                                                                                             <option value='78'  >
                                                                    78 Kg
                                                                </option>
                                                                                                                             <option value='79'  >
                                                                    79 Kg
                                                                </option>
                                                                                                                             <option value='80'  >
                                                                    80 Kg
                                                                </option>
                                                                                                                             <option value='81'  >
                                                                    81 Kg
                                                                </option>
                                                                                                                             <option value='82'  >
                                                                    82 Kg
                                                                </option>
                                                                                                                             <option value='83'  >
                                                                    83 Kg
                                                                </option>
                                                                                                                             <option value='84'  >
                                                                    84 Kg
                                                                </option>
                                                                                                                             <option value='85'  >
                                                                    85 Kg
                                                                </option>
                                                                                                                             <option value='86'  >
                                                                    86 Kg
                                                                </option>
                                                                                                                             <option value='87'  >
                                                                    87 Kg
                                                                </option>
                                                                                                                             <option value='88'  >
                                                                    88 Kg
                                                                </option>
                                                                                                                             <option value='89'  >
                                                                    89 Kg
                                                                </option>
                                                                                                                             <option value='90'  >
                                                                    90 Kg
                                                                </option>
                                                                                                                             <option value='91'  >
                                                                    91 Kg
                                                                </option>
                                                                                                                             <option value='92'  >
                                                                    92 Kg
                                                                </option>
                                                                                                                             <option value='93'  >
                                                                    93 Kg
                                                                </option>
                                                                                                                             <option value='94'  >
                                                                    94 Kg
                                                                </option>
                                                                                                                             <option value='95'  >
                                                                    95 Kg
                                                                </option>
                                                                                                                             <option value='96'  >
                                                                    96 Kg
                                                                </option>
                                                                                                                             <option value='97'  >
                                                                    97 Kg
                                                                </option>
                                                                                                                             <option value='98'  >
                                                                    98 Kg
                                                                </option>
                                                                                                                             <option value='99'  >
                                                                    99 Kg
                                                                </option>
                                                                                                                             <option value='100'  >
                                                                    100 Kg
                                                                </option>
                                                                                                                             <option value='101'  >
                                                                    101 Kg
                                                                </option>
                                                                                                                             <option value='102'  >
                                                                    102 Kg
                                                                </option>
                                                                                                                             <option value='103'  >
                                                                    103 Kg
                                                                </option>
                                                                                                                             <option value='104'  >
                                                                    104 Kg
                                                                </option>
                                                                                                                             <option value='105'  >
                                                                    105 Kg
                                                                </option>
                                                                                                                             <option value='106'  >
                                                                    106 Kg
                                                                </option>
                                                                                                                             <option value='107'  >
                                                                    107 Kg
                                                                </option>
                                                                                                                             <option value='108'  >
                                                                    108 Kg
                                                                </option>
                                                                                                                             <option value='109'  >
                                                                    109 Kg
                                                                </option>
                                                                                                                             <option value='110'  >
                                                                    110 Kg
                                                                </option>
                                                                                                                             <option value='111'  >
                                                                    111 Kg
                                                                </option>
                                                                                                                             <option value='112'  >
                                                                    112 Kg
                                                                </option>
                                                                                                                             <option value='113'  >
                                                                    113 Kg
                                                                </option>
                                                                                                                             <option value='114'  >
                                                                    114 Kg
                                                                </option>
                                                                                                                             <option value='115'  >
                                                                    115 Kg
                                                                </option>
                                                                                                                             <option value='116'  >
                                                                    116 Kg
                                                                </option>
                                                                                                                             <option value='117'  >
                                                                    117 Kg
                                                                </option>
                                                                                                                             <option value='118'  >
                                                                    118 Kg
                                                                </option>
                                                                                                                             <option value='119'  >
                                                                    119 Kg
                                                                </option>
                                                                                                                             <option value='120'  >
                                                                    120 Kg
                                                                </option>
                                                                                                                             <option value='121'  >
                                                                    121 Kg
                                                                </option>
                                                                                                                             <option value='122'  >
                                                                    122 Kg
                                                                </option>
                                                                                                                             <option value='123'  >
                                                                    123 Kg
                                                                </option>
                                                                                                                             <option value='124'  >
                                                                    124 Kg
                                                                </option>
                                                                                                                             <option value='125'  >
                                                                    125 Kg
                                                                </option>
                                                                                                                             <option value='126'  >
                                                                    126 Kg
                                                                </option>
                                                                                                                             <option value='127'  >
                                                                    127 Kg
                                                                </option>
                                                                                                                             <option value='128'  >
                                                                    128 Kg
                                                                </option>
                                                                                                                             <option value='129'  >
                                                                    129 Kg
                                                                </option>
                                                                                                                             <option value='130'  >
                                                                    130 Kg
                                                                </option>
                                                                                                                             <option value='131'  >
                                                                    131 Kg
                                                                </option>
                                                                                                                             <option value='132'  >
                                                                    132 Kg
                                                                </option>
                                                                                                                             <option value='133'  >
                                                                    133 Kg
                                                                </option>
                                                                                                                             <option value='134'  >
                                                                    134 Kg
                                                                </option>
                                                                                                                             <option value='135'  >
                                                                    135 Kg
                                                                </option>
                                                                                                                             <option value='136'  >
                                                                    136 Kg
                                                                </option>
                                                                                                                             <option value='137'  >
                                                                    137 Kg
                                                                </option>
                                                                                                                             <option value='138'  >
                                                                    138 Kg
                                                                </option>
                                                                                                                             <option value='139'  >
                                                                    139 Kg
                                                                </option>
                                                                                                                             <option value='140'  >
                                                                    140 Kg
                                                                </option>
                                                                                                                             <option value='141'  >
                                                                    141 Kg
                                                                </option>
                                                                                                                             <option value='142'  >
                                                                    142 Kg
                                                                </option>
                                                                                                                             <option value='143'  >
                                                                    143 Kg
                                                                </option>
                                                                                                                             <option value='144'  >
                                                                    144 Kg
                                                                </option>
                                                                                                                             <option value='145'  >
                                                                    145 Kg
                                                                </option>
                                                                                                                             <option value='146'  >
                                                                    146 Kg
                                                                </option>
                                                                                                                             <option value='147'  >
                                                                    147 Kg
                                                                </option>
                                                                                                                             <option value='148'  >
                                                                    148 Kg
                                                                </option>
                                                                                                                             <option value='149'  >
                                                                    149 Kg
                                                                </option>
                                                                                                                             <option value='150'  >
                                                                    150 Kg
                                                                </option>
                                                                                                                             <option value='151'  >
                                                                    151 Kg
                                                                </option>
                                                                                                                             <option value='152'  >
                                                                    152 Kg
                                                                </option>
                                                                                                                             <option value='153'  >
                                                                    153 Kg
                                                                </option>
                                                                                                                             <option value='154'  >
                                                                    154 Kg
                                                                </option>
                                                                                                                             <option value='155'  >
                                                                    155 Kg
                                                                </option>
                                                                                                                             <option value='156'  >
                                                                    156 Kg
                                                                </option>
                                                                                                                             <option value='157'  >
                                                                    157 Kg
                                                                </option>
                                                                                                                             <option value='158'  >
                                                                    158 Kg
                                                                </option>
                                                                                                                             <option value='159'  >
                                                                    159 Kg
                                                                </option>
                                                                                                                             <option value='160'  >
                                                                    160 Kg
                                                                </option>
                                                                                                                             <option value='161'  >
                                                                    161 Kg
                                                                </option>
                                                                                                                             <option value='162'  >
                                                                    162 Kg
                                                                </option>
                                                                                                                             <option value='163'  >
                                                                    163 Kg
                                                                </option>
                                                                                                                             <option value='164'  >
                                                                    164 Kg
                                                                </option>
                                                                                                                             <option value='165'  >
                                                                    165 Kg
                                                                </option>
                                                                                                                             <option value='166'  >
                                                                    166 Kg
                                                                </option>
                                                                                                                             <option value='167'  >
                                                                    167 Kg
                                                                </option>
                                                                                                                             <option value='168'  >
                                                                    168 Kg
                                                                </option>
                                                                                                                             <option value='169'  >
                                                                    169 Kg
                                                                </option>
                                                                                                                             <option value='170'  >
                                                                    170 Kg
                                                                </option>
                                                                                                                             <option value='171'  >
                                                                    171 Kg
                                                                </option>
                                                                                                                             <option value='172'  >
                                                                    172 Kg
                                                                </option>
                                                                                                                             <option value='173'  >
                                                                    173 Kg
                                                                </option>
                                                                                                                             <option value='174'  >
                                                                    174 Kg
                                                                </option>
                                                                                                                             <option value='175'  >
                                                                    175 Kg
                                                                </option>
                                                                                                                             <option value='176'  >
                                                                    176 Kg
                                                                </option>
                                                                                                                             <option value='177'  >
                                                                    177 Kg
                                                                </option>
                                                                                                                             <option value='178'  >
                                                                    178 Kg
                                                                </option>
                                                                                                                             <option value='179'  >
                                                                    179 Kg
                                                                </option>
                                                                                                                             <option value='180'  >
                                                                    180 Kg
                                                                </option>
                                                                                                                     </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Body Type</label>
                                                        <select class="form-control" name="bodytype">
                                                            <option value="Slim" >
                                                                Slim
                                                            </option>
                                                            <option value="Average" >
                                                                Average
                                                            </option>
                                                            <option value="Athletic" >
                                                                Athletic
                                                            </option>
                                                            <option value="Heavy" >
                                                                Heavy
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Complextion</label>
                                                        <select class="form-control" name="complexion">
                                                            <option value="Very Fair" >
                                                                Very Fair
                                                            </option>
                                                            <option value="Fair" >
                                                                Fair
                                                            </option>
                                                            <option value="Wheatish" >
                                                                Wheatish
                                                            </option>
                                                            <option value="Wheatish Brown" >
                                                                Wheatish Brown
                                                            </option>
                                                            <option value="Dark" >
                                                                Dark
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Physical Status</label>
                                                        <select class="form-control" name="physical_status">
                                                            <option class="">Select Physical Status</option>
                                                            <option value="Normal" >Normal</option>
                                                            <option value="Physically challenged" >Physically challenged</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="text-success">
                                                <i class="fa fa-moon-o gtMarginRight10"></i>&nbsp;Horoscope Details
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Dosh Type</label>
                                                        <select class="chosen-select form-control" name="manglik[]" multiple data-placeholder="Choose a Dosh type...">
                                                                                                                                                                                    <option value="1" >Mangal Dosh                                                            </option>
                                                                                                                        <option value="2" >Kaal Sarp Dosh                                                            </option>
                                                                                                                        <option value="3" >Pitru Dosh                                                            </option>
                                                                                                                        <option value="4" >Nadi Dosh                                                            </option>
                                                                                                                        <option value="5" >Guru Chandal Dosh                                                            </option>
                                                                                                                        <option value="6" >Grahan Dosh                                                            </option>
                                                                                                                        <option value="7" >Gandamool Dosh                                                            </option>
                                                                                                                        <option value="8" >Shani Dosh                                                            </option>
                                                                                                                        <option value="9" >Shrapit Dosh                                                            </option>
                                                                                                                        <option value="10" >Chandra Dosh                                                            </option>
                                                                                                                        <option value="11" >Kemadruma dosh                                                            </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Star</label>
                                                        <select class="form-control chosen-select"  name="star">
                                                            <option value="">Select</option>
                                                                                                                            <option value="1"  >
                                                                    Ashwini                                                                </option>
                                                                                                                            <option value="2"  >
                                                                    Bharani                                                                </option>
                                                                                                                            <option value="3"  >
                                                                    Krittika                                                                </option>
                                                                                                                            <option value="4"  >
                                                                    Rohini                                                                </option>
                                                                                                                            <option value="5"  >
                                                                    Mrigashira                                                                </option>
                                                                                                                            <option value="6"  >
                                                                    Ardra                                                                </option>
                                                                                                                            <option value="7"  >
                                                                    Punarvasu                                                                </option>
                                                                                                                            <option value="8"  >
                                                                    Pushyaa                                                                </option>
                                                                                                                            <option value="9"  >
                                                                    Ashlesha                                                                </option>
                                                                                                                            <option value="10"  >
                                                                    Magha                                                                </option>
                                                                                                                            <option value="11"  >
                                                                    Purva Phalguni                                                                </option>
                                                                                                                            <option value="12"  >
                                                                    Uttara Phalguni                                                                </option>
                                                                                                                            <option value="13"  >
                                                                    Hasta                                                                </option>
                                                                                                                            <option value="14"  >
                                                                    Chitra                                                                </option>
                                                                                                                            <option value="15"  >
                                                                    Swati                                                                </option>
                                                                                                                            <option value="17"  >
                                                                    Anuradha                                                                </option>
                                                                                                                            <option value="18"  >
                                                                    Jyeshtha                                                                </option>
                                                                                                                            <option value="19"  >
                                                                    Mula                                                                </option>
                                                                                                                            <option value="20"  >
                                                                    Purva Ashadha                                                                </option>
                                                                                                                            <option value="21"  >
                                                                    Uttara Ashadha                                                                </option>
                                                                                                                            <option value="22"  >
                                                                    Abhijit                                                                </option>
                                                                                                                            <option value="23"  >
                                                                    Shravana                                                                </option>
                                                                                                                            <option value="24"  >
                                                                    Dhanishta                                                                </option>
                                                                                                                            <option value="25"  >
                                                                    Shatabhisha                                                                </option>
                                                                                                                            <option value="26"  >
                                                                    Purva Bhadrapada                                                                </option>
                                                                                                                            <option value="27"  >
                                                                    Uttara Bhadrapada                                                                </option>
                                                                                                                            <option value="28"  >
                                                                    Revati                                                                </option>
                                                                                                                            <option value="30"  >
                                                                    Vishakha                                                                </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Raasi/Moonsign</label>
                                                        <select class="form-control chosen-select" name="moonsign" id="moonsign">
                                                             <option value="">Select</option>
                                                                                                                        <option value="1" >Aries</option>
                                                                                                                        <option value="2" >Taurus</option>
                                                                                                                        <option value="3" >Gemini</option>
                                                                                                                        <option value="4" >Cancer</option>
                                                                                                                        <option value="5" >Leo</option>
                                                                                                                        <option value="6" >Virgo</option>
                                                                                                                        <option value="7" >Libra</option>
                                                                                                                        <option value="8" >Scorpio</option>
                                                                                                                        <option value="9" >Saggitarius</option>
                                                                                                                        <option value="10" >Capricorn</option>
                                                                                                                        <option value="11" >Aquarius</option>
                                                                                                                        <option value="12" >Pisces</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Birth Time</label>
                                                        <input type="time" name="birth_time" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Birth Place</label>
                                                        <input type="text" class="form-control" name="birth_place" placeholder="Enter Birth Place" value="">
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <h3 class="text-success">
                                                <i class="fa fa-file-o gtMarginRight10"></i>&nbsp;About Me
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="profile_text" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="submit" class="btn btnThemeG3" name="submit_form1" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab_2">
                                        <div class='error-msg' id='validationSummary' style="display:none !important;"></div>
                                        <div class="clearfix"></div>
                                        First add basic deatil                                    </div>
                                    <div class="tab-pane" id="tab_3">
                                        <div class='error-msg' id='validationSummary' style="display:none !important;"></div>
                                        <div class="clearfix"></div>
                                        First add basic deatil                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
            <footer class="main-footer">       
	Copyright &copy;.&nbsp;<a href="https://matrimonialphpscript.com/premium-demo-2/" target="_blank">Design and developed by C R Reddy</a>.&nbsp;All rights reserved.
</footer>        </div>
        <!-- ./wrapper -->
        
        <!-- jQuery -->
		<!-- <script src="../js/jquery.min.js"></script>
    
	jQuery UI -->
		<!--<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>-->
        
        <!-- Bootstrap JS -->
		<!-- <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
		   		$('#body').show();
		   		$('.preloader-wrapper').hide();
		   	}); -->
	  
        <!-- Chosen Js -->
       	<!-- <script src="js/chosen.jquery.js" type="text/javascript"></script>
        <script src="js/prism.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            var config = {
                '.chosen-select': {},
                '.chosen-select-deselect': {allow_single_deselect: true},
                '.chosen-select-no-single': {disable_search_threshold: 10},
                '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
                '.chosen-select-width': {width: "100%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
        </script>
      jquery for left menu active class-->
		<!-- <script type="text/javascript" src="dist/js/general.js"></script>
		<script type="text/javascript" src="dist/js/cookieapi.js"></script>
		<script type="text/javascript">
			 setPageContext("members","add-members");
		</script>
         -->
        <!-- Theme Js -->
		<!-- <script src="dist/js/app.min.js" type="text/javascript"></script> -->
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<!-- <script>
			$.widget.bridge('uibutton', $.ui.button);
		</script> 
        
       
        <script type="text/javascript" src="js/util/location.js"></script>
        <script type="text/javascript" src="js/util/jquery.form.js"></script>
        <script type="text/javascript" src="./js/util/location-validation.js"></script>
        <script type="text/javascript">
          imageform();
        </script> -->
        <!-- Validetta -->
		<!-- <script src="../js/validetta.js" type="text/javascript"></script>
		<script type="text/javascript">
            $(function() {
                $('#user_detail').validetta({
                    errorClose: false,
                    realTime: true
                });
                $('#other_detail').validetta({
                    errorClose: false,
                    realTime: true
                });
            });
        </script>
        <script type="text/javascript">
            $("#religion_id").on('change', function(){
                $("#status").html('<div>Loading...</div>');			
                var id=$(this).val();
                var dataString = 'c_id='+id;
                jQuery.ajax({
                    type: "POST", // HTTP method POST or GET
                    url: "../get_caste", //Where to make Ajax calls
                    dataType:"text", // Data type, HTML, json etc.
                    data:dataString,			
                    success:function(response){
                        $("#caste_id").find('option').remove().end().append(response);
                        $('#caste_id').trigger('chosen:updated');
                        $("#status").html('');		
                    },			
                });		
            });
            $("#country_id").on('change', function(){
                $("#status123").html('<div class="gtLoaderBottom"><i class="gi gi-spin gi-loader"></i>&nbsp;&nbsp;Please Wait Loading...</div>');			
                 var id = $(this).val();
                 var dataString = 'id=' + id;
                jQuery.ajax({
                    type: "POST", // HTTP method POST or GET
                    url: "../ajax_country_state", //Where to make Ajax calls
                    dataType:"text", // Data type, HTML, json etc.
                    data:dataString,			
                    success:function(response){
                        $("#state123").find('option').remove().end().append(response);
                        $("#state123").trigger('chosen:updated');
                        $("#status123").html('');		
                    },			
                });		
            });
            $("#state123").on('change', function(){
                $("#status234").html('<div class="gtLoaderBottom"><i class="gi gi-spin gi-loader"></i>&nbsp;&nbsp;Please Wait Loading...</div>');			
                var id = $(this).val();
                var cnt_id = $("#country_id").val();
                var dataString = 'state_id=' + id + '&country_id=' + cnt_id;
                jQuery.ajax({
                    type: "POST", // HTTP method POST or GET
                    url: "../ajax_country_state", //Where to make Ajax calls
                    dataType:"text", // Data type, HTML, json etc.
                    data:dataString,			
                    success:function(response){
                        $("#city123").find('option').remove().end().append(response);
                        $('#city123').trigger('chosen:updated');
                        $("#status234").html('');		
                    },			
                });		
            });
        </script> -->
        <!-- <script type="text/javascript">
            $("#from_age").on('change', function() {
                $("#Loadtoage").html('<div>Loading...</div>');
                var id = $(this).val();
                var dataString = 'id=' + id;
                $.ajax({
                    type: "POST",
                    url: "../ajax-to-age-data",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                        $("#part_to_age").html(html);
                        $("#Loadtoage").html('');
                    }
                });
            });
            $("#from_height").on('change', function() {
                $("#Loadtoheight").html('<div>Loading...</div>');
                var height_id = $(this).val();
                var dataString = 'height_id=' + height_id;
                $.ajax({
                    type: "POST",
                    url: "../ajax-to-height-data",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                        $("#part_to_height").html(html);
                        $("#Loadtoheight").html('');
                    }
                });
            });
        </script> -->
        <!-- <script type="text/javascript"> 
            $(document).ready(function(e) {
                $('#dis_child').hide();
                $('#dis_child_status').hide();
                setTimeout(function() {
                    $('#success_msg').fadeOut('slow');
                }, 6000);
                
                function check_status(status) {
                    if (status == 'never-married'){
                        $('#dis_child').hide();
                        //$('#dis_child_status').hide();
                    }
                    if (status == 'widower'){
                        $('#dis_child').show();
                    }
                    if (status == 'widow'){
                        $('#dis_child').show();
                    }
                    if (status == 'divorced'){
                        $('#dis_child').show();
                    }
                
                    if (status == 'awaiting-divorce'){
                        $('#dis_child').show();
                    }
                }
                $("#check_child").on("change",check_child);
                function check_child(value){
                    if (value != 'No Child' && value != ''){
                        $('#dis_child_status').show();
                    } else {

                        $('#dis_child_status').hide();
                    }

                }
            });
     
            $("#part_religion_id").on('change', function() {
                $("#CasteDivloader").html('<img src="img/9.gif" align="absmiddle">&nbsp;Loading...');
                var selectedReligion = $("#part_religion_id").val()
                var dataString = 'religionId=' + selectedReligion;
                jQuery.ajax({
                    type: "POST", // HTTP method POST or GET
                    url: "../part_rel_caste", //Where to make Ajax calls
                    dataType: "text", // Data type, HTML, json etc.
                    data: dataString,
                    success: function(response) {
                        $('#part_caste_id').find('option').remove().end().append(response);
                        $('#part_caste_id').trigger('chosen:updated');
                        $("#CasteDivloader").html('');
                    },
                });
            });
        </script> -->
        <!-- <script type="text/javascript">
            $("#part_country").change(function(e) {
                $("#part_status1").html('<img src="img/9.gif" align="absmiddle">&nbsp;Loading Please wait...');
                values = 'state=' + $("#part_country").chosen().val();
                $.ajax({
                    type: "POST",
                    url: "../search_state",
                    data: values,
                    cache: false,
                    success: function(html) {
                        $("#part_state").html(html);
                        $("#part_city").html('');
                        $("#part_city").append('<option value="">Select State</option>');
                        $("#part_status1").html('');
                        $("#part_state").trigger("chosen:updated");
                    }
                });
            });
            $("#part_state").change(function(e) {
                $("#part_status2").html('<img src="img/9.gif" align="absmiddle">&nbsp;Loading Please wait...');
                values = 'state_id=' + $("#part_state").chosen().val() + '&country_id=' + $("#part_country").chosen().val();
                $.ajax({
                    type: "POST",
                    url: "../search_city",
                    data: values,
                    cache: false,
                    success: function(html) {
                        $("#part_city").html(html);
                        $("#part_status2").html('');
                        $("#part_city").trigger("chosen:updated");
                    }
                });
            });
        </script> -->
                
    </body>
</html>