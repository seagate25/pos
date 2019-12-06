<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				<?php echo $title; ?>
			</h3>
		</div>
	</div>
	<!--begin::Form-->
	<form class="kt-form kt-form--label-right" action="<?php echo site_url('privillege/save');?>" method="post">
		<div class="kt-portlet__body">
			<div class="form-group row">
				<label class="col-form-label col-lg-3 col-sm-12">Level / Grup User</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
                    <select class="form-control kt-selectpicker" name="authGroupID" id="authGroupID">
                            <option selected disabled>Pilih Level / Grup</option>
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
            <div class="kt-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="submit" class="btn btn-brand">Simpan</button>
						<!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
					</div>
				</div>
			</div>
            <div class="form-group row">
                <div class="col-lg-12 col-md-12">
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1" style="font-size: 13px !important; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu</th>
                                <th>View</th>
                                <th>Add</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
		</div>
		<!-- <div class="kt-portlet__foot">
			
		</div> -->
	</form>
	<!--end::Form-->
</div>
<script type="text/javascript">
    "use strict";
    var KTDatatablesDataSourceAjaxServer = function(id) {
        
        var initTable1 = function(id) {
            console.log(id);
            var table = $('#kt_table_1');

            // begin first table
            table.DataTable({
                responsive: true,
                paging:false,
                sorting: false,
                searching: false,
                info: false,
                ordering: false,
                destroy: true,
                ajax: {
                    url: "<?php echo site_url('privillege'); ?>",
                    type: "POST",
                    data: { authGroupID: id }
                },
                columns: [
                    {data: "menu_checked", className: 'text-center' },
                    {data: "menuName"},
                    {data: "view_checked", className: 'text-center' },
                    {data: "add_checked", className: 'text-center' },
                    {data: "edit_checked", className: 'text-center' },
                    {data: "delete_checked", className: 'text-center' }
                ]
            });
        };

        return {

            //main function to initiate the module
            init: function(id) {
                initTable1(id);
            },

        };

    }();

    var KTBootstrapSelect = {
        init:function(){
            $(".kt-selectpicker").selectpicker();
            $('.kt-selectpicker').on('change', function(){
                KTDatatablesDataSourceAjaxServer.init($(this).val());
            });
        }
    };

    jQuery(document).ready(function() {
        KTBootstrapSelect.init();
        KTDatatablesDataSourceAjaxServer.init(0);
    });
</script>