<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				<?php echo $title; ?>
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
	            <div class="kt-portlet__head-actions">
		            <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i> Export  	
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__section kt-nav__section--first">
                                    <span class="kt-nav__section-text">Choose an option</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-print"></i>
                                        <span class="kt-nav__link-text">Print</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                        <span class="kt-nav__link-text">CSV</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                        <span class="kt-nav__link-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
		            </div>
		            &nbsp;
                    <?php echo generate_button('menu', 'authCreate', '<button class="btn btn-brand btn-elevate btn-icon-sm" onclick="return Actions.add();"><i class="la la-plus"></i>Tambah</button>'); ?>
	            </div>	
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1" style="font-size: 13px !important;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Parent Menu</th>
                    <th>URL</th>
                    <th>Icon</th>
                    <th>Order</th>
                    <th>Aktif</th>
                    <th>Actions</th>
                </tr>
            </thead>

            
        </table>
		<!--end: Datatable -->
	</div>
</div>
<div class="modal fade" id="kt_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="kt-form kt-form--label-right" method="POST" id="kt_modal_form">
                <input type="hidden" value="" name="menuID" id="menuID">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Nama Menu</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control" type="text" name="menuName" id="menuName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Menu Parent</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control kt-selectpicker" name="menuParentID" id="menuParentID">
                                <option value="0">No Parent</option>
                                <?php
                                    foreach($menus as $menu) {
                                ?>
                                <option value="<?php echo $menu->menuID; ?>"><?php echo $menu->menuName; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">URL (modul)</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control" type="text" name="menuUri" id="menuUri">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Icon</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control" type="text" name="menuIcon" id="menuIcon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Order</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control" type="number" name="menuOrder" id="menuOrder">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Status</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="kt-radio-inline">
                                <label class="kt-radio kt-radio--bold kt-radio--success">
                                    <input type="radio" checked name="menuStatus" value="1"> Aktif
                                    <span></span>
                                </label>
                                <label class="kt-radio kt-radio--bold kt-radio--danger">
                                    <input type="radio" name="menuStatus" value="0"> Non Aktif
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" id="btn_submit" class="btn btn-elevate "></button>
                </div>
			</form>
        </div>
    </div>
</div>
<script type="text/javascript">
    "use strict";
    var KTDatatablesDataSourceAjaxServer = function() {

        var initTable1 = function() {
            var table = $('#kt_table_1');

            // begin first table
            table.DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                destroy: true,
                ajax: {
                    url: "<?php echo site_url('menu'); ?>",
                    type: "POST"
                },
                columns: [
                    {data: 'number'},
                    {data: 'menuName'},
                    {data: 'parent_name'},
                    {data: 'menuUri'},
                    {data: 'menuIcon'},
                    {data: 'menuOrder'},
                    {data: 'menuStatus'},
                    {data: 'actions', responsivePriority: -1},
                ],
                columnDefs: [
                    {
                        targets: [0, -1],
                        orderable: false
                    },
                    {
                        targets: -2,
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var status = {
                                0: {'title': 'Tidak', 'class': 'kt-badge--danger'},
                                1: {'title': 'Ya', 'class': ' kt-badge--success'}
                            };
                            if (typeof status[data] === 'undefined') {
                                return data;
                            }
                            return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
                        },
                    }
                ],
                order: [1, "ASC"]
            });
        };

        return {

            //main function to initiate the module
            init: function() {
                initTable1();
            },

        };

    }();

    var Actions = {
        
        add: function() {
            $('#kt_modal').modal({
                backdrop: 'static',
                keyboard: true, 
                show: true
            });
            $('select[name=menuParentID]').val(0);
            $('.kt-selectpicker').selectpicker('refresh');
            $("#exampleModalLongTitle").text('Tambah Menu');
            $("#btn_submit").addClass('btn-brand');
            $("#btn_submit").text('Simpan');
            $("#kt_modal").on('hidden.bs.modal', function() {
                $('#kt_modal_form')[0].reset();
                $("#kt_modal_form").validate().resetForm();
                $("#btn_submit").removeClass('btn-brand');
            });
        },
        edit: function(id) {
            $('#kt_modal').modal({
                backdrop: 'static',
                keyboard: true, 
                show: true
            });
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('menu/edit'); ?>",
                data: { menuID: id },
                success: function(response) {
                    var obj = jQuery.parseJSON(response);
                    $("#menuID").val(obj.data.menuID);
                    $("#menuName").val(obj.data.menuName);
                    $('select[name=menuParentID]').val(obj.data.menuParentID);
                    $('.kt-selectpicker').selectpicker('refresh');
                    $("#menuUri").val(obj.data.menuUri);
                    $("#menuIcon").val(obj.data.menuIcon);
                    $("#menuOrder").val(obj.data.menuOrder);
                    // $("#menuStatus").val(obj.data.menuStatus);
                    $("input[name=menuStatus][value='"+obj.data.menuStatus+"']").prop("checked",true);
                }
            });
            $("#exampleModalLongTitle").text('Edit Menu');
            $("#btn_submit").addClass('btn-success');
            $("#btn_submit").text('Ubah');
            $("#kt_modal").on('hidden.bs.modal', function() {
                $("#menuID").val('');
                $('#kt_modal_form')[0].reset();
                $("#kt_modal_form").validate().resetForm();
                $("#btn_submit").removeClass('btn-success');
            });
        },
        delete: function(id) {
            swal.fire({
                title:"Konfirmasi",
                text:"Anda yakin ingin menghapus data ini ?",
                type:"warning",
                showCancelButton:!0,
                confirmButtonText:"Ya",
                cancelButtinText: "Tidak"
            }).then(function(e){
                if(e.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('menu/delete'); ?>",
                        data: { menuID: id },
                        success: function(response) {
                            var obj = jQuery.parseJSON(response);
                            swal.fire("Sukses",obj.msg,"success");
                            KTDatatablesDataSourceAjaxServer.init();
                        }
                    })
                }
            });
        }

    };

    var KTBootstrapSelect = {

        init: function(){
            $(".kt-selectpicker").selectpicker()
        }

    };

    var KTHandleForm = {

        init: function() {
            $('#kt_modal_form').submit(function(e) {
                e.preventDefault();
                var btn = $("#btn_submit");
                var form = $(this).closest('form');
                var menuID = $("#menuID").val();
                var url = "";

                form.validate({
                    rules: {
                        menuName: {
                            required: true,
                        },
                        menuOrder: {
                            required: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                if(menuID == '') {
                    url = "<?php echo site_url('menu/save'); ?>";
                } else {
                    url = "<?php echo site_url('menu/update'); ?>";
                }

                console.log(url);

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
                                swal.fire("Sukses",obj.msg,"success");
                                if(menuID == '') {
                                    $('#kt_modal_form')[0].reset();
                                    $("#kt_modal_form").validate().resetForm();
                                    $("#btn_submit").removeClass('btn-brand');
                                } else {
                                    $("#menuID").val('');
                                    $('#kt_modal_form')[0].reset();
                                    $("#kt_modal_form").validate().resetForm();
                                    $("#btn_submit").removeClass('btn-success');
                                }
                                $('#kt_modal').modal('hide');
                                KTDatatablesDataSourceAjaxServer.init();
                            } else {
                                swal.fire("Error",obj.msg,"danger");
                            }
                        }, 2000);
                    }
                });
            });
            
        }
    }

    jQuery(document).ready(function() {
        KTDatatablesDataSourceAjaxServer.init();
        KTBootstrapSelect.init();
        KTHandleForm.init();
    });
</script>