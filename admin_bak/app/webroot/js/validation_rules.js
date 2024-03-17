String.prototype.ReplaceAll = function(stringToFind,stringToReplace){
    var temp = this;
    var index = temp.indexOf(stringToFind);
    while(index != -1){
        temp = temp.replace(stringToFind,stringToReplace);
        index = temp.indexOf(stringToFind);
    }
    return temp;
}

function validate(){	
	var canSubmit = true;
    $('form').find(".error-message").remove();
    
    $(".numeric").each(function(){
        var rx = /^([])|([0-9]{1,11})$/;
        if(!rx.test($(this).val()) && (!$(this).val()=="")){
            $(this).parent().find(".error-message").remove();
            $(this).after("<div class='error-message'>Must be numeric</div>");
			canSubmit=false;
        }
    });
    $('.validEmail:visible').each(function(){
        var filter =/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        if(!filter.test( $(this).val())){
            $(this).parent().find(".error-message").remove();
            $(this).after("<div class='error-message'>Please provide a valid email address</div>");
			canSubmit=false;
        }
    });
    $(".notEmpty:visible").each(function(){
        if($(this).val()==""){
            $(this).parent().find(".error-message").remove();
            $(this).after("<div class='error-message'>Value required</div>");
			canSubmit=false;
        }
    });

	return canSubmit;
}

