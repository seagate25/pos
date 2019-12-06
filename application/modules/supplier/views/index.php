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
                    <?php echo generate_button('supplier', 'authCreate', '<button class="btn btn-brand btn-elevate btn-icon-sm" onclick="return Actions.add();"><i class="la la-plus"></i>Tambah</button>'); ?>
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
                    <th>Kode</th>
                    <th>Supplier</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Fax</th>
                    <th>Contact Person</th>
                    <th>HP</th>
                    <th>Status</th>
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
                <input type="hidden" value="" name="supplierID" id="supplierID">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-4 col-sm-12 col-form-label">Kode Supplier</label>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <input class="form-control" type="text" name="supplierCode" id="supplierCode" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-4 col-sm-12 col-form-label">Nama Supplier</label>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <input class="form-control" type="text" name="supplierName" id="supplierName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-4 col-sm-12 col-form-label">Alamat</label>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <textarea name="supplierAddress" id="supplierAddress" cols="20" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-4 col-sm-12 col-form-label">Telepon</label>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <input class="form-control" type="text" name="supplierPhone" id="supplierPhone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-4 col-sm-12 col-form-label">Fax</label>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <input class="form-control" type="text" name="supplierFax" id="supplierFax">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-4 col-sm-12 col-form-label">Contact Person</label>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <input class="form-control" type="text" name="supplierContactPerson" id="supplierContactPerson">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-4 col-sm-12 col-form-label">Contact Person HP</label>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <input class="form-control" type="text" name="supplierCPHp" id="supplierCPHp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-4 col-sm-12 col-form-label">Aktif</label>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="kt-radio-inline">
                                <label class="kt-radio kt-radio--bold kt-radio--danger">
                                    <input type="radio" checked name="supplierStatus" value="Y"> Ya
                                    <span></span>
                                </label>
                                <label class="kt-radio kt-radio--bold kt-radio--success">
                                    <input type="radio" name="supplierStatus" value="N"> Tidak
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
                autoWidth: true,
                destroy: true,
                ajax: {
                    url: "<?php echo site_url('supplier'); ?>",
                    type: "POST"
                },
                columns: [
                    {data: 'number', className: 'text-center', width: 30},
                    {data: 'supplierCode', className: 'text-center'},
                    {data: 'supplierName', className: 'text-center'},
                    {data: 'supplierAddress', className: 'text-center'},
                    {data: 'supplierPhone', className: 'text-center'},
                    {data: 'supplierFax', className: 'text-center'},
                    {data: 'supplierContactPerson', className: 'text-center'},
                    {data: 'supplierCPHp', className: 'text-center'},
                    {data: 'supplierStatus', className: 'text-center'},
                    {data: 'actions', responsivePriority: -1, className: 'text-center', width: 100},
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
                                N: {'title': 'Tidak', 'class': 'kt-badge--danger'},
                                Y: {'title': 'Ya', 'class': ' kt-badge--success'}
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
            $("#exampleModalLongTitle").text('Tambah Supplier');
            $.ajax({
                type: "GET",
                url: "<?php echo site_url('supplier/generate_supplier_code'); ?>",
                success: function(response) {
                    var obj = jQuery.parseJSON(response);
                    $("#supplierCode").val(obj.data);
                }
            });
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
                url: "<?php echo site_url('supplier/edit'); ?>",
                data: { supplierID: id },
                success: function(response) {
                    var obj = jQuery.parseJSON(response);
                    $("#supplierID").val(obj.data.supplierID);
                    $("#supplierCode").val(obj.data.supplierCode);
                    $("#supplierName").val(obj.data.supplierName);
                    $("#supplierAddress").val(obj.data.supplierAddress);
                    $("#supplierPhone").val(obj.data.supplierPhone);
                    $("#supplierFax").val(obj.data.supplierFax);
                    $("#supplierContactPerson").val(obj.data.supplierContactPerson);
                    $("#supplierCPHp").val(obj.data.supplierCPHp);
                    $("input[name=supplierStatus][value='"+obj.data.supplierStatus+"']").prop("checked",true);
                }
            });
            $("#exampleModalLongTitle").text('Edit Supplier');
            $("#btn_submit").addClass('btn-success');
            $("#btn_submit").text('Ubah');
            $("#kt_modal").on('hidden.bs.modal', function() {
                $("#supplierID").val('');
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
                        url: "<?php echo site_url('supplier/delete'); ?>",
                        data: { supplierID: id },
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

    var KTHandleForm = {

        init: function() {
            $('#kt_modal_form').submit(function(e) {
                e.preventDefault();
                var btn = $("#btn_submit");
                var form = $(this).closest('form');
                var supplierID = $("#supplierID").val();
                var url = "";

                form.validate({
                    rules: {
                        supplierName: {
                            required: true,
                        },
                        supplierAddress: {
                            required: true,
                        },
                        supplierPhone: {
                            required: true,
                        },
                        supplierContactPerson: {
                            required: true,
                        },
                        supplierCPHp: {
                            required: true,
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                if(supplierID == '') {
                    url = "<?php echo site_url('supplier/save'); ?>";
                } else {
                    url = "<?php echo site_url('supplier/update'); ?>";
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
                                swal.fire("Sukses",obj.msg,"success");
                                if(supplierID == '') {
                                    $('#kt_modal_form')[0].reset();
                                    $("#kt_modal_form").validate().resetForm();
                                    $("#btn_submit").removeClass('btn-brand');
                                } else {
                                    $("#supplierID").val('');
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
        KTHandleForm.init();
    });
</script>