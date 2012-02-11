$(document).ready(function(){
	// Popover
	$("[rel=popover]").popover({
		offset: 10,
		placement: "right"
	});
	
	// DataTable Filter INPUT & SELECT
	$("table.with-filter thead > tr th").each(function(i){
		if($(this).hasClass('input')){
			this.innerHTML = "<input type='text' placeholder='" + $(this).html() + "' />";
			$('input', this).keyup(function(){
				oTable.fnFilter(this.value, i);
			});
		}else if($(this).hasClass('select')){
			this.innerHTML = fnCreateSelect(oTable.fnGetColumnData(i), $(this).html());
			$('select', this).change(function(){
				oTable.fnFilter($(this).val(), i);
			});
		}
    });
	
	// Input file
	$('.input-file').customFileInput({
        button_position : 'right'
    });
});

// DATATABLES
// Bootstrap Twitter style 
$.extend( $.fn.dataTableExt.oStdClasses, {
	"sSortAsc": "header headerSortDown",
	"sSortDesc": "header headerSortUp",
	"sSortable": "header"
} );

// Dropdown Filter
$.fn.dataTableExt.oApi.fnGetColumnData = function ( oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty ) {
	// check that we have a column id
	if ( typeof iColumn == "undefined" ) return new Array();

	// by default we only wany unique data
	if ( typeof bUnique == "undefined" ) bUnique = true;

	// by default we do want to only look at filtered data
	if ( typeof bFiltered == "undefined" ) bFiltered = true;

	// by default we do not wany to include empty values
	if ( typeof bIgnoreEmpty == "undefined" ) bIgnoreEmpty = true;

	// list of rows which we're going to loop through
	var aiRows;

	// use only filtered rows
	if (bFiltered == true) aiRows = oSettings.aiDisplay;
	// use all rows
	else aiRows = oSettings.aiDisplayMaster; // all row numbers

	// set up data array
	var asResultData = new Array();

	for (var i=0,c=aiRows.length; i<c; i++) {
		iRow = aiRows[i];
		var aData = this.fnGetData(iRow);
		var sValue = aData[iColumn];

		// ignore empty values?
		if (bIgnoreEmpty == true && sValue.length == 0) continue;

		// ignore unique values?
		else if (bUnique == true && jQuery.inArray(sValue, asResultData) > -1) continue;

		// else push the value onto the result data array
		else asResultData.push(sValue);
	}

	return asResultData;
};

function fnCreateSelect(aData, content)
{
	var r='<select><option value="">' + content + '</option>', i, iLen=aData.length;
	for ( i=0 ; i<iLen ; i++ ){
		r += '<option value="'+aData[i]+'">'+aData[i]+'</option>';
	}
	return r+'</select>';
}