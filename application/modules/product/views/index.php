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
                    <?php echo generate_button('product', 'authCreate', '<button class="btn btn-brand btn-elevate btn-icon-sm" onclick="return Actions.add();"><i class="la la-plus"></i>Tambah</button>'); ?>
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
                    <th>Kode Barcode</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Diskon</th>
                    <th>Actions</th>
                </tr>
            </thead>

            
        </table>
		<!--end: Datatable -->
	</div>
</div>
<div class="modal fade" id="kt_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="kt-form kt-form--label-right" method="POST" id="kt_modal_form">
                <input type="hidden" value="" name="productID" id="productID">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Barcode</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" type="text" name="productBarcode" id="productBarcode">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Nama Barang</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" type="text" name="productName" id="productName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Supplier</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control kt-selectpicker" data-live-search="true" name="supplierID" id="supplierID">
                                        <option selected disabled>Silahkan Pilih</option>
                                        <?php
                                            foreach($suppliers as $supplier) {
                                        ?>
                                        <option value="<?php echo $supplier->supplierID; ?>"><?php echo $supplier->supplierName; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Kategori</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control kt-selectpicker" data-live-search="true" name="categoryID" id="categoryID">
                                        <option selected disabled>Silahkan Pilih</option>
                                        <?php
                                            foreach($categories as $category) {
                                        ?>
                                        <option value="<?php echo $category->categoryID; ?>"><?php echo $category->categoryName; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Merk</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control kt-selectpicker" data-live-search="true" name="brandID" id="brandID">
                                        <option selected disabled>Silahkan Pilih</option>
                                        <?php
                                            foreach($brands as $brand) {
                                        ?>
                                        <option value="<?php echo $brand->brandID; ?>"><?php echo $brand->brandName; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Harga Beli</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" type="text" name="productBuyPrice" id="productBuyPrice">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Harga Jual</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" type="text" name="productSalePrice" id="productSalePrice">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Diskon</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" type="text" name="productDiscount" id="productDiscount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Stok</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" type="number" name="productStock" id="productStock">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Catatan</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" type="text" name="productNote" id="productNote">
                                </div>
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
                    url: "<?php echo site_url('product'); ?>",
                    type: "POST"
                },
                columns: [
                    {data: 'number', className: 'text-center'},
                    {data: 'productBarcode'},
                    {data: 'productName'},
                    {data: 'productStock'},
                    {data: 'productBuyPrice'},
                    {data: 'productSalePrice'},
                    {data: 'productDiscount'},
                    {data: 'actions', responsivePriority: -1, className: 'text-center'},
                ],
                columnDefs: [
                    {
                        targets: [0, -1],
                        orderable: false
                    }
                ],
                order: [2, "ASC"]
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
            $("#exampleModalLongTitle").text('Tambah Barang');
            $("#btn_submit").addClass('btn-brand');
            $("#btn_submit").text('Simpan');
            $("#kt_modal").on('hidden.bs.modal', function() {
                $('.kt-selectpicker').selectpicker('refresh');
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
                url: "<?php echo site_url('product/edit'); ?>",
                data: { productID: id },
                success: function(response) {
                    var obj = jQuery.parseJSON(response);
                    $("#productID").val(obj.data.productID);
                    $("#productBarcode").val(obj.data.productBarcode);
                    $("#productName").val(obj.data.productName);
                    $('select[name=supplierID]').val(obj.data.supplierID);
                    $('select[name=categoryID]').val(obj.data.categoryID);
                    $('select[name=brandID]').val(obj.data.brandID);
                    $('.kt-selectpicker').selectpicker('refresh');
                    $("#productBuyPrice").val(obj.data.productBuyPrice);
                    $("#productSalePrice").val(obj.data.productSalePrice);
                    $("#productDiscount").val(obj.data.productDiscount);
                    $("#productStock").val(obj.data.productStock);
                    $("#productNote").val(obj.data.productNote);
                }
            });
            $("#exampleModalLongTitle").text('Edit Barang');
            $("#btn_submit").addClass('btn-success');
            $("#btn_submit").text('Ubah');
            $("#kt_modal").on('hidden.bs.modal', function() {
                $("#productID").val('');
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
                        url: "<?php echo site_url('product/delete'); ?>",
                        data: { productID: id },
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
                var productID = $("#productID").val();
                var url = "";

                form.validate({
                    rules: {
                        productBarcode: {
                            required: true,
                            number: true
                        },
                        productName: {
                            required: true,
                        },
                        supplierID: {
                            required: true,
                        },
                        categoryID: {
                            required: true,
                        },
                        brandID: {
                            required: true,
                        },
                        productBuyPrice: {
                            required: true,
                            number: true,
                        },
                        productSalePrice: {
                            required: true,
                            number: true,
                        },
                        productDiscount: {
                            required: true,
                            number: true,
                        },
                        productStock: {
                            required: true,
                            number: true,
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                if(productID == '') {
                    url = "<?php echo site_url('product/save'); ?>";
                } else {
                    url = "<?php echo site_url('product/update'); ?>";
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
                                if(productID == '') {
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