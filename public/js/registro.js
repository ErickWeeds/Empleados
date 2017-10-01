var domiciliosCount = 1;
$(document).ready(function () {
    $("#addDomicilio").click(function () {
        addDomicilio();
    });
    
});
function addDomicilio() {
    domiciliosCount++;
    var htmlStr = '<div class="form-group domicilio'+domiciliosCount+'">\n\
<h4>Domicilio ' + domiciliosCount + ' <i class="fa fa-times-circle-o close" data-num="'+domiciliosCount+'" aria-hidden="true"></i></h4> <div class="row"> \n\
<div class="col-md-4">\n\
<label>Calle:</label> \n\
<input type="text" class="form-control" name="txtDcalle_' + domiciliosCount + '" placeholder="Calle" required="required">\n\
 </div><div class="col-md-4"> \n\
<label>N&uacute;mero:</label> \n\
<input type="number" class="form-control" name="txtDnumero_' + domiciliosCount + '" placeholder="Número exterior" required="required">\n\
 </div><div class="col-md-4"> \n\
<label>Interior:</label>\n\
 <input type="text" class="form-control" name="txtDinterior_' + domiciliosCount + '" placeholder="Número interior">\n\
 </div></div>\n\
<div class="row"> \n\
<div class="col-md-4"> <label>Colonia:</label> \n\
<input type="text" class="form-control" name="txtDcolonia_' + domiciliosCount + '" placeholder="Colonia" required="required">\n\
 </div><div class="col-md-4"> \n\
<label>C&oacute;digo Postal:</label> \n\
<input type="number" class="form-control" name="txtDcp_' + domiciliosCount + '" placeholder="CP" required="required"> </div>\n\
<div class="col-md-4"> <label>Estado:</label> \n\
<input type="text" class="form-control" name="txtDinterior_' + domiciliosCount + '" placeholder="Estado">\n\
 </div></div></div>';
    $(".form-holder").append(htmlStr);
    $("#domiciliosCount").val(domiciliosCount);
    $(".close").click(function(){
        var num = $(this).attr('data-num');
        removeDomicilio(num);
    });
}

function removeDomicilio(num){
    if (typeof num != 'undefined'){
        $(".domicilio"+num).remove();
    }
}

