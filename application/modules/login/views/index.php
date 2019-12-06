<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="../../../">
		<meta charset="utf-8" />
		<title>Point of Sales | Login</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="<?php echo base_url(); ?>assets/css/pages/login/login-3.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->

		<!--begin:: Vendor Plugins -->
		<link href="<?php echo base_url(); ?>assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/plugins/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/plugins/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/plugins/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Vendor Plugins -->
		<link href="<?php echo base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--begin:: Vendor Plugins for custom pages -->
		<link href="<?php echo base_url(); ?>assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/core/main.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/daygrid/main.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/list/main.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/timegrid/main.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/jqvmap/dist/jqvmap.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/uppy/dist/uppy.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Styles -->

        <!--begin::Custom Styling-->
        <style>
            .kt-login.kt-login--v3 .kt-login__wrapper .kt-login__container .kt-form .form-control {
                background: rgba(255, 255, 255, 0.8);
            }
        </style>
        <!--end::Custom Styling-->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?php echo base_url();?>assets/media/bg/bg-material.png);">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<a href="#">
									<img src="<?php echo base_url(); ?>assets/media/logos/poslogo.png" width="150">
								</a>
							</div>
							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Silahkan Masuk</h3>
								</div>
								<form class="kt-form" action="<?php echo site_url('login/do_login'); ?>">
									<div class="input-group">
										<input class="form-control" type="text" placeholder="Username" name="username" autocomplete="off">
									</div>
									<div class="input-group">
										<input class="form-control" type="password" placeholder="Password" name="password">
									</div>
									<div class="kt-login__actions">
										<button id="kt_login_signin_submit" class="kt-pull-right btn btn-brand btn-elevate kt-login__btn-primary">Masuk</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->

		<!--begin:: Vendor Plugins -->
		<script src="<?php echo base_url(); ?>assets/plugins/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/wnumb/wNumb.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/quill/dist/quill.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js/global/integration/plugins/jquery-validation.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/plugins/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/js/global/integration/plugins/sweetalert2.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Vendor Plugins -->
		<script src="<?php echo base_url(); ?>assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--begin:: Vendor Plugins for custom pages -->
		<script src="<?php echo base_url(); ?>assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/core/main.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/daygrid/main.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/google-calendar/main.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/interaction/main.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/list/main.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/@fullcalendar/timegrid/main.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/flot/dist/es5/jquery.flot.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/flot/source/jquery.flot.resize.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/flot/source/jquery.flot.categories.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/flot/source/jquery.flot.pie.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/flot/source/jquery.flot.stack.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/flot/source/jquery.flot.crosshair.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/flot/source/jquery.flot.axislabels.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/js/global/integration/plugins/datatables.init.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/jszip/dist/jszip.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/pdfmake/build/pdfmake.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/pdfmake/build/vfs_fonts.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-buttons/js/buttons.colVis.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-buttons/js/buttons.flash.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-buttons/js/buttons.html5.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-buttons/js/buttons.print.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/datatables.net-select/js/dataTables.select.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/jqvmap/dist/jquery.vmap.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/custom/uppy/dist/uppy.min.js" type="text/javascript"></script>

		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
        <script type="text/javascript">
            "use strict";

            // Class Definition
            var KTLoginGeneral = function() {

                var login = $('#kt_login');

                var showErrorMsg = function(form, type, msg) {
                    var alert = $('<div class="alert alert-' + type + ' alert-dismissible" role="alert">\
                        <div class="alert-text">'+msg+'</div>\
                        <div class="alert-close">\
                            <i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i>\
                        </div>\
                    </div>');

                    form.find('.alert').remove();
                    alert.prependTo(form);
                    //alert.animateClass('fadeIn animated');
                    KTUtil.animateClass(alert[0], 'fadeIn animated');
                    alert.find('span').html(msg);
                }

                // Private Functions
                var displaySignUpForm = function() {
                    login.removeClass('kt-login--forgot');
                    login.removeClass('kt-login--signin');

                    login.addClass('kt-login--signup');
                    KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');
                }

                var displaySignInForm = function() {
                    login.removeClass('kt-login--forgot');
                    login.removeClass('kt-login--signup');

                    login.addClass('kt-login--signin');
                    KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
                    //login.find('.kt-login__signin').animateClass('flipInX animated');
                }

                var displayForgotForm = function() {
                    login.removeClass('kt-login--signin');
                    login.removeClass('kt-login--signup');

                    login.addClass('kt-login--forgot');
                    //login.find('.kt-login--forgot').animateClass('flipInX animated');
                    KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');

                }

                var handleFormSwitch = function() {
                    $('#kt_login_forgot').click(function(e) {
                        e.preventDefault();
                        displayForgotForm();
                    });

                    $('#kt_login_forgot_cancel').click(function(e) {
                        e.preventDefault();
                        displaySignInForm();
                    });

                    $('#kt_login_signup').click(function(e) {
                        e.preventDefault();
                        displaySignUpForm();
                    });

                    $('#kt_login_signup_cancel').click(function(e) {
                        e.preventDefault();
                        displaySignInForm();
                    });
                }

                var handleSignInFormSubmit = function() {
                    $('#kt_login_signin_submit').click(function(e) {
                        e.preventDefault();
                        var btn = $(this);
                        var form = $(this).closest('form');
                        var url = form.attr('action');

                        form.validate({
                            rules: {
                                username: {
                                    required: true,
                                },
                                password: {
                                    required: true
                                }
                            }
                        });

                        if (!form.valid()) {
                            return;
                        }

                        btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                        form.ajaxSubmit({
                            type: 'POST',
                            url: url,
                            success: function(response, status, xhr, $form) {
                                var obj = jQuery.parseJSON(response);
                                // similate 2s delay
                                setTimeout(function() {
                                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                    if(obj.code == 200) {
                                        window.location = obj.data;
                                    } else {
                                        showErrorMsg(form, 'danger', obj.msg);
                                    }
                                }, 2000);
                            }
                        });
                    });
                }

                var handleSignUpFormSubmit = function() {
                    $('#kt_login_signup_submit').click(function(e) {
                        e.preventDefault();

                        var btn = $(this);
                        var form = $(this).closest('form');

                        form.validate({
                            rules: {
                                fullname: {
                                    required: true
                                },
                                email: {
                                    required: true,
                                    email: true
                                },
                                password: {
                                    required: true
                                },
                                rpassword: {
                                    required: true
                                },
                                agree: {
                                    required: true
                                }
                            }
                        });

                        if (!form.valid()) {
                            return;
                        }

                        btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                        form.ajaxSubmit({
                            url: '',
                            success: function(response, status, xhr, $form) {
                                // similate 2s delay
                                setTimeout(function() {
                                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                    form.clearForm();
                                    form.validate().resetForm();

                                    // display signup form
                                    displaySignInForm();
                                    var signInForm = login.find('.kt-login__signin form');
                                    signInForm.clearForm();
                                    signInForm.validate().resetForm();

                                    showErrorMsg(signInForm, 'success', 'Thank you. To complete your registration please check your email.');
                                }, 2000);
                            }
                        });
                    });
                }

                var handleForgotFormSubmit = function() {
                    $('#kt_login_forgot_submit').click(function(e) {
                        e.preventDefault();

                        var btn = $(this);
                        var form = $(this).closest('form');

                        form.validate({
                            rules: {
                                email: {
                                    required: true,
                                    email: true
                                }
                            }
                        });

                        if (!form.valid()) {
                            return;
                        }

                        btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                        form.ajaxSubmit({
                            url: '',
                            success: function(response, status, xhr, $form) {
                                // similate 2s delay
                                setTimeout(function() {
                                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false); // remove
                                    form.clearForm(); // clear form
                                    form.validate().resetForm(); // reset validation states

                                    // display signup form
                                    displaySignInForm();
                                    var signInForm = login.find('.kt-login__signin form');
                                    signInForm.clearForm();
                                    signInForm.validate().resetForm();

                                    showErrorMsg(signInForm, 'success', 'Cool! Password recovery instruction has been sent to your email.');
                                }, 2000);
                            }
                        });
                    });
                }

                // Public Functions
                return {
                    // public functions
                    init: function() {
                        handleFormSwitch();
                        handleSignInFormSubmit();
                        handleSignUpFormSubmit();
                        handleForgotFormSubmit();
                    }
                };
            }();

            // Class Initialization
            jQuery(document).ready(function() {
                KTLoginGeneral.init();
            });

        </script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>