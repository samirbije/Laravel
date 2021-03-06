<link href="/assets/css/adminlte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/adminlte/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/adminlte/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/adminlte/css/AdminLTE.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/adminlte/css/AdminLTE_extended.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/app.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/jqwidgets/styles/jqx.base.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/jqwidgets/styles/jqx.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/jqwidgets/styles/jqx.base.extended.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/treeview.css" rel="stylesheet" type="text/css" />
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1><?php //echo lang('country');?></h1>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- row -->
		<div class="row">
			<div class="col-xs-12 connectedSortable">
				<?php //print displayStatus();?>
		<button type="button" class="btn btn-success btn-flat btn-xs" id="jqxGridInsert">Create</button>
				<button type="button" class="btn btn-success btn-flat btn-xs" id="jqxGridCountryFilterClear">Clear</button>
				<br /><br />
				<div id="jqxGridCountry"></div>
			</div><!-- /.col -->
		</div>
		<!-- /.row -->
	</section><!-- /.content -->
</aside><!-- /.right-side -->

<div id="jqxPopupWindow">
   <div class='jqxExpander-custom-div'>
        <span class='popup_title' id="window_poptup_title"></span>
    </div>
    <div class="form_fields_area">
        <form action="http://localhost/ercs/admin/country" method="post" accept-charset="utf-8" id="form-country" onsubmit="return false">        	<input type="hidden" name="id" id="id" />
            <table class="form-table">
                <tr>
                    <td><label for="country">Country<span class="mandatory">*</span></label></td>
                    <td><input id="title" class="text_input" name="title"></td>
                </tr>
                <tr>
                	<td><label for="code">Code<span class="mandatory">*</span></label></td>
                    <td><input id="slug" name="slug" class="text_input"></td>
                </tr>
                <tr>
                    <td><label for="active">Active<span class="mandatory">*</span></label></td>
                    <td>
                        <input type="radio" value="1" name="active" id="active1" />&nbsp;Yes &nbsp;
                        <input type="radio" value="0" name="active" id="active0" />&nbsp;No                    </td>
                </tr>
                <tr>
                    <th colspan="4">
                        <button type="button" class="btn btn-success btn-xs btn-flat" id="jqxCountrySubmitButton">Save</button>
                        <button type="button" class="btn btn-default btn-xs btn-flat" id="jqxCountryCancelButton">Cancel</button>
                    </th>
                </tr>
          </table>
        </form>    </div>
</div>
<script language="javascript" type="text/javascript">
$(function(){
	var countryDataSource =
	{
		datatype: "json",
		datafields: [
			{ name: 'id', 				type: 'number' },
			{ name: 'title', 			type: 'string' },
			{ name: 'slug', 			type: 'string' },
            { name: 'active',           type: 'bool' },
        ],
		url: '/admin/test/call_new',
		pagesize: defaultPageSize,
		root: 'rows',
		id : 'sn',
		cache: true,
		pager: function (pagenum, pagesize, oldpagenum) {
        	//callback called when a page or page size is changed.
        },
        beforeprocessing: function (data) {
        	countryDataSource.totalrecords = data.total;
        },
	    // update the grid and send a request to the server.
	    filter: function () {
	    	$("#jqxGridCountry").jqxGrid('updatebounddata', 'filter');
	    },
	    // update the grid and send a request to the server.
	    sort: function () {
	    	$("#jqxGridCountry").jqxGrid('updatebounddata', 'sort');
	    },
	    processdata: function(data) {
	    }
	};
	$("#jqxGridCountry").jqxGrid({
		theme: theme_grid,
		width: '100%',
		height: gridHeight,
		source: countryDataSource,
		altrows: true,
		pageable: true,
		sortable: true,
		rowsheight: 30,
		columnsheight:30,
		showfilterrow: true,
		filterable: true,
		columnsresize: true,
		autoshowfiltericon: true,
		columnsreorder: true,
		selectionmode: 'none',
		virtualmode: true,
		enableanimations: false,
		pagesizeoptions: pagesizeoptions,
		columns: [
			{ text: 'SN', width: 50, pinned: true, exportable: false,  columntype: 'number', cellclassname: 'jqx-widget-header', renderer: gridColumnsRenderer, cellsrenderer: rownumberRenderer , filterable: false},
			{
				text: 'Edit', datafield: 'action', width:75, sortable:false,filterable:false, pinned:true, align: 'center' , cellsalign: 'center', cellclassname: 'grid-column-center', 
				cellsrenderer: function (index) {
					var e = '';
					e = '<a href="javascript:void(0)" onclick="editRecord(' + index + '); return false;" title="Edit Page "><i class="glyphicon glyphicon-edit"></i></a>';
					//return '<div style="text-align: center; margin-top: 8px;">' + e + '</div>';
					//var f = '';
				//	f = '<a href="javascript:void(0)" onclick="deleteRecord(' + index + '); return false;" title="Edit Page "><i class="glyphicon glyphicon-edit"></i></a>';
					return '<div style="text-align: center; margin-top: 8px;">' + e +  '</div>';
				}
			},
			{
				text: 'Delete', datafield: 'del', width:75, sortable:false,filterable:false, pinned:true, align: 'center' , cellsalign: 'center', cellclassname: 'grid-column-center', 
				cellsrenderer: function (index) {
					//var e = '';
					//e = '<a href="javascript:void(0)" onclick="editRecord(' + index + '); return false;" title="Edit Page "><i class="glyphicon glyphicon-edit"></i></a>';
					//return '<div style="text-align: center; margin-top: 8px;">' + e + '</div>';
					var f = '';
					f = '<a href="javascript:void(0)" onclick="deleteRecord(' + index + '); return false;" title="Delete Page "><i class="glyphicon glyphicon-edit"></i></a>';
					return '<div style="text-align: center; margin-top: 8px;">'  +  f + '</div>';
				}
			},
			{ text: 'Title', 			datafield: 'title', 			width: 150, filterable: true, renderer: gridColumnsRenderer},
			{ text: 'Slug', 				datafield: 'slug', 				width: 150, filterable: true, renderer: gridColumnsRenderer},
            { text: '1',             datafield: 'is_active',            width: 75, columntype: 'checkbox', filtertype: 'bool', filterable: true, renderer: gridColumnsRenderer },
		],
		rendergridrows: function (result) {
			return result.data;
		}
	});
	$("[data-toggle='offcanvas']").click(function(e) {
	    e.preventDefault();
	    $("#jqxGridCountry").jqxGrid('refresh');
	});
	$('#jqxGridCountryFilterClear').on('click', function () { 
		$('#jqxGridCountry').jqxGrid('clearfilters');
	});
	$('#jqxGridInsert').on('click', function(){
		//alert('sfssf');
		openPopupWindow('Add Pages');
    });
	// initialize the popup window
    $("#jqxPopupWindow").jqxWindow({ 
        theme: theme_window,
        width: 350,
        maxWidth: 350,
        height: 200,  
        isModal: true, 
        autoOpen: false,
        modalOpacity: 0.7,
        showCollapseButton: false
		 
    });
     $("#jqxCountryCancelButton").on('click', function () {
        $('#id').val('');
        $('#form-country')[0].reset();
        $('#jqxPopupWindow').jqxWindow('close');
    });
    $('#form-country').jqxValidator({
        hintType: 'label',
        animationDuration: 500,
        rules: [
            { input: '#title', message: 'Required', action: 'blur', 
                rule: function(input) {
                    val = $("#title").val();
                    return (val == '' || val == null || val == 0) ? false: true;
                }
            },
            { input: '#slug', message: 'Required', action: 'blur', 
                rule: function(input) {
                    val = $("#slug").val();
                    return (val == '' || val == null || val == 0) ? false: true;
                }
            },
            { input: '#slug', message: 'Code already exists', action: 'blur', 
                rule: function(input, commit) {
                    val = $("#slug").val();
                    $.ajax({
                        url: "{{ asset('/admin/test/check_duplicate') }}",
                        type: 'POST',
                        data: {field: 'slug', value:val, id: $('input#id').val()},
                        success: function (result) {
                            var result = eval('('+result+')');
                            return commit(result.success);
                        },
                        error: function(result) {
                            return commit(false);
                        }
                    });
                }
            },
        ]
    });
      $("#jqxCountrySubmitButton").on('click', function () {
        var validationResult = function (isValid) {
                if (isValid) {
                   saveRecord();
                }
            };
        $('#form-country').jqxValidator('validate', validationResult);
    });
});
function deleteRecord(index){
		if (confirm('Are you sure you want to Delete this?')) {
	var datarow = $("#jqxGridCountry").jqxGrid('getrowdata', index);
		$.ajax({
        type: "POST",
        url: '{{ asset('/admin/test/delete') }}/' +  datarow.id,
        cache: false,
        success: function (result) {
                $('#jqxGridCountry').jqxGrid('updatebounddata');
        }
    });
    }
};
function editRecord(index){
    var row =  $("#jqxGridCountry").jqxGrid('getrowdata', index);
  	if (row) {
        $('#id').val(row.id);
        $('#title').val(row.title);
        $('#slug').val(row.slug);
        if(row.active == true) {
            $('#active1').prop('checked', 'checked');   
        } else {
            $('#active0').prop('checked', 'checked');   
        }
       openPopupWindow('Edit pages');
    }
}
function saveRecord(){
    var data = $("#form-country").serialize();
    $.ajax({
        type: "POST",
        url: "{{ asset('/admin/test/save') }}",
        data: data,
        success: function (result) {
            var result = eval('('+result+')');
            if (result.success) {
                $('#id').val('');
                $('#form-country')[0].reset();
                $('#jqxGridCountry').jqxGrid('updatebounddata');
                $('#jqxPopupWindow').jqxWindow('close');
            }
        }
    });
}
</script>