$(document).ready(function(){
	// Popover
	$("[rel=popover]").popover({
		offset: 10,
		placement: "right"
	});
	
	// Input file
	$('.input-file').customFileInput({
        button_position : 'right'
    });
	
	// Datepicker
    $('.datepicker').datepicker();
    
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
});