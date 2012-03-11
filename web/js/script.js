$(document).ready(function(){
    // Popover
    $("[rel=tooltip]").tooltip();
    
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
    
    // Ajout de la classe error sur les forms erronés
    $(".control-group .help-inline").each(function(){
        if($(this).html() != ""){
            $(this).parent().addClass('error');
        }
    });
    
    // DataTable Filter INPUT & SELECT
    $("table.with-filter thead > tr th").each(function(i){
        if($(this).hasClass('input')){
            this.innerHTML = "<input type='text' placeholder='" + $(this).html() + "' />";
           
            $('input', this).keyup(function(){
                oTable.fnFilter(this.value, i);
            });
        }else if($(this).hasClass('select')){
          if(!$(this).hasClass('custom')){
                this.innerHTML = fnCreateSelect(oTable.fnGetColumnData(i), $(this).html());
          }
            $('select', this).change(function(){
                oTable.fnFilter($(this).val(), i);
            });
        }
    });
    // On le fait en 2 étapes pour ne pas fausser le filtre par colonne
    $("table.with-filter thead > tr th").each(function(i){
          if($(this).hasClass('input')){
                if($(this).attr('data-default')){
                      $(this).children('input').val($(this).attr('data-default'));
                      $(this).children('input').trigger('keyup');
                }
          }else if($(this).hasClass('select')){
                if($(this).attr('data-default')){
                      $(this).children('select').val($(this).attr('data-default')).change();
                }
          }
    });

});