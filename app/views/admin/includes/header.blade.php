<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title>{{ Config::get('admin-constants.AMIN_PANEL_PAGE_TITLE') }}</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="/admin_root/css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="/admin_root/css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/admin_root/css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="/admin_root/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="/admin_root/css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="/admin_root/css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="/admin_root/css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- chosen -->
	<link rel="stylesheet" href="/admin_root/css/plugins/chosen/chosen.css">
	<!-- select2 -->
	<link rel="stylesheet" href="/admin_root/css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="/admin_root/css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/admin_root/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/admin_root/css/themes.css">
	<!-- Agrifood css custom css	-->
	<link rel="stylesheet" href="/admin_root/css/agrifood.css">
	<!-- jQuery -->
	<!--<script src="/admin_root/js/jquery.min.js"></script>
	<!-- Nice Scroll -->
	<!--<script src="/admin_root/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<!--<script src="/admin_root/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="/admin_root/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="/admin_root/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="/admin_root/js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
	<script src="/admin_root/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="/admin_root/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- Touch enable for jquery UI -->
	<!--<script src="/admin_root/js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<!--<script src="/admin_root/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<!--<script src="/admin_root/js/bootstrap.min.js"></script>
	<!-- vmap -->
	<!--<script src="/admin_root/js/plugins/vmap/jquery.vmap.min.js"></script>
	<script src="/admin_root/js/plugins/vmap/jquery.vmap.world.js"></script>
	<script src="/admin_root/js/plugins/vmap/jquery.vmap.sampledata.js"></script>
	<!-- Bootbox -->
	<!--<script src="/admin_root/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Flot -->
	<!--<script src="/admin_root/js/plugins/flot/jquery.flot.min.js"></script>
	<script src="/admin_root/js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="/admin_root/js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="/admin_root/js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- imagesLoaded -->
	<!--<script src="/admin_root/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- PageGuide -->
	<!--<script src="/admin_root/js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- FullCalendar -->
	<!--<script src="/admin_root/js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<!-- Chosen -->
	<!--<script src="/admin_root/js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- select2 -->
	<!--<script src="/admin_root/js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<!--<script src="/admin_root/js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Theme framework -->
	<!--<script src="/admin_root/js/eakroko.js"></script>
	<!-- Theme scripts -->
	<!--<script src="js/application.min.js"></script>-->
	<!-- Just for demonstration -->
	<!--<script src="/admin_root/js/demonstration.min.js"></script>-->
	<!--[if lte IE 9]>
		<script src="/admin_root/js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	<!-- Favicon -->
	<link href="http://smartpit.otel.co.jp/assets/css/adminlte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="http://smartpit.otel.co.jp/assets/css/adminlte/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="http://smartpit.otel.co.jp/assets/css/adminlte/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<link href="http://smartpit.otel.co.jp/assets/css/adminlte/css/AdminLTE.css" rel="stylesheet" type="text/css" />
<link href="http://smartpit.otel.co.jp/assets/css/adminlte/css/AdminLTE_extended.css" rel="stylesheet" type="text/css" />
<link href="http://smartpit.otel.co.jp/assets/css/app.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
<script type="text/javascript" src="/assets/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/assets/js/app.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxlistbox.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxdropdownlist.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxmenu.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxgrid.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxgrid.filter.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxgrid.sort.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxgrid.selection.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxpanel.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxcalendar.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxdatetimeinput.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxcheckbox.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxgrid.pager.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxgrid.columnsresize.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxgrid.columnsreorder.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxinput.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxnumberinput.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxwindow.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxvalidator.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxcombobox.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxchart.core.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxchart.js"></script>
<script type="text/javascript" src="/assets/js/jqwidgets/jqxchart.rangeselector.js"></script>
<script type="text/javascript" src="/assets/js/date.js"></script>
</head>