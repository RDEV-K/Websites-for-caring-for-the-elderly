String.prototype.ReplaceAll = function(stringToFind,stringToReplace){
    var temp = this;
    var index = temp.indexOf(stringToFind);
    while(index != -1){
        temp = temp.replace(stringToFind,stringToReplace);
        index = temp.indexOf(stringToFind);
    }
    return temp;
} 
function validate(form){
	var canSubmit = true;
    $('form').find(".error-message").remove();
    //$(".withinRange").each(function(){
    //    var maxDisplayOrder = $("#CategoryHiddenMaxDisplayOrder").val();        
    //    if(!($(this).val() <= maxDisplayOrder && $(this).val() >= 1)){
    //        $(this).parent().find(".error-message").remove();
    //        $(this).after("<div class='error-message'>Order must be within range(Check help icon for more detail)</div>");
    //        canSubmit = false;
    //    }
    //});
    //$(".alphaNumeric").each(function(){
    //    var rx = /^([A-Za-z][A-Za-z0-9 ]{1,49})$/;
    //    if(!rx.test($(this).val())){
    //        $(this).parent().find(".error-message").remove();
    //        $(this).after("<div class='error-message'>Must be alpha-numeric and starting with an alphabet</div>")
    //        canSubmit=false;
    //    }
    //});
    $(form+" .numeric").each(function(){
        var rx = /^([])|([0-9]{1,11})$/;
        if(!rx.test($(this).val()) && (!$(this).val()=="")){
            $(this).parent().find(".error-message").remove();
            $(this).after("<div class='error-message'>Must be numeric</div>");
			canSubmit=false;
        }
    });
    $(form+' .validEmail:visible').each(function(){
        var filter =/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        if(!filter.test( $(this).val())){
            $(this).parent().find(".error-message").remove();
            $(this).after("<div class='error-message'>Please provide a valid email address</div>");
			canSubmit=false;
        }
    });
    $(form+" .notEmpty:visible").each(function(){
        if($(this).val()==""){
            $(this).parent().find(".error-message").remove();
            $(this).after("<div class='error-message'>Value required</div>");
			canSubmit=false;
        }
    });

	return canSubmit;
}


function validateStock(){
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
    $(".notEmpty:visible,.stock").each(function(){
        if($(this).val()=="" || $(this).val()=="0"){
            $(this).parent().find(".error-message").remove();
            $(this).after("<div class='error-message'>Value required</div>");
			canSubmit=false;
        }
    });

	return canSubmit;
}