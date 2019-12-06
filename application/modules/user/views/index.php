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
                    <?php echo generate_button('group', 'authCreate', '<button class="btn btn-brand btn-elevate btn-icon-sm" onclick="return Actions.add();"><i class="la la-plus"></i>Tambah</button>'); ?>
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
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Telepon</th>
                    <th>Grup</th>
                    <th>Username</th>
                    <th>Blokir</th>
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
                <input type="hidden" value="" name="userID" id="userID">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">NIP</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control" type="text" name="userNIP" id="userNIP" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Nama Lengkap</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control" type="text" name="userFullName" id="userFullName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Telepon / HP</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control" type="text" name="userPhone" id="userPhone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Grup</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control kt-selectpicker" name="userLevel" id="userLevel">
                                <option selected disabled>Silahkan Pilih</option>
                                <?php
                                    foreach($groups as $group) {
                                ?>
                                <option value="<?php echo $group->groupID; ?>"><?php echo $group->groupName; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Username</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control" type="text" name="userName" id="userName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Blokir</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="kt-radio-inline">
                                <label class="kt-radio kt-radio--bold kt-radio--danger">
                                    <input type="radio" name="userBlocked" value="Y"> Ya
                                    <span></span>
                                </label>
                                <label class="kt-radio kt-radio--bold kt-radio--success">
                                    <input type="radio" checked name="userBlocked" value="N"> Tidak
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
                    url: "<?php echo site_url('user'); ?>",
                    type: "POST"
                },
                columns: [
                    {data: 'number', className: 'text-center'},
                    {data: 'userNIP'},
                    {data: 'userFullName'},
                    {data: 'userPhone'},
                    {data: 'groupName'},
                    {data: 'userName'},
                    {data: 'userBlocked', className: 'text-center'},
                    {data: 'actions', responsivePriority: -1, className: 'text-center'},
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
                                N: {'title': 'Tidak', 'class': 'kt-badge--success'},
                                Y: {'title': 'Ya', 'class': ' kt-badge--danger'}
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
            $("#exampleModalLongTitle").text('Tambah User');
            $.ajax({
                type: "GET",
                url: "<?php echo site_url('user/generate_user_nip'); ?>",
                success: function(response) {
                    var obj = jQuery.parseJSON(response);
                    $("#userNIP").val(obj.data);
                }
            });
            $("input[name=userBlocked]").attr('disabled', true);
            $("#btn_submit").addClass('btn-brand');
            $("#btn_submit").text('Simpan');
            $("#kt_modal").on('hidden.bs.modal', function() {
                $('.kt-selectpicker').selectpicker('refresh');
                $("input[name=userBlocked]").attr('disabled', false);
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
                url: "<?php echo site_url('user/edit'); ?>",
                data: { userID: id },
                success: function(response) {
                    var obj = jQuery.parseJSON(response);
                    $("#userID").val(obj.data.userID);
                    $("#userNIP").val(obj.data.userNIP);
                    $("#userFullName").val(obj.data.userFullName);
                    $("#userPhone").val(obj.data.userPhone);
                    $('select[name=userLevel]').val(obj.data.userLevel);
                    $('.kt-selectpicker').selectpicker('refresh');
                    $("#userName").val(obj.data.userName);
                    $("input[name=userBlocked][value='"+obj.data.userBlocked+"']").prop("checked",true);
                }
            });
            $("#exampleModalLongTitle").text('Edit Grup');
            $("#btn_submit").addClass('btn-success');
            $("#btn_submit").text('Ubah');
            $("#kt_modal").on('hidden.bs.modal', function() {
                $("#userID").val('');
                $('.kt-selectpicker').selectpicker('refresh');
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
                        url: "<?php echo site_url('user/delete'); ?>",
                        data: { userID: id },
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
                var userID = $("#userID").val();
                var url = "";

                form.validate({
                    rules: {
                        userFullName: {
                            required: true,
                        },
                        userLevel: {
                            required: true,
                        },
                        userName: {
                            required: true,
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                if(userID == '') {
                    url = "<?php echo site_url('user/save'); ?>";
                } else {
                    url = "<?php echo site_url('user/update'); ?>";
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
                                if(userID == '') {
                                    $('#kt_modal_form')[0].reset();
                                    $("#kt_modal_form").validate().resetForm();
                                    $("#btn_submit").removeClass('btn-brand');
                                } else {
                                    $("#groupID").val('');
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

    var KTBootstrapSelect = {

        init: function(){
            $(".kt-selectpicker").selectpicker({
                noneSelectedText : 'Silahkan Pilih'
            });
        }

    };

    jQuery(document).ready(function() {
        KTDatatablesDataSourceAjaxServer.init();
        KTHandleForm.init();
        KTBootstrapSelect.init();
    });
</script>