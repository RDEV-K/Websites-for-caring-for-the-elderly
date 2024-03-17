$(function(){
	$.datepicker.setDefaults({
            'changeYear':true,
            'changeMonth':true,
            'yearRange':'1930:2020',
            'dateFormat': 'dd-mm-yy'
    });
    $('.dtp').datepicker();
	
});