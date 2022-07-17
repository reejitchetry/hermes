setTimeout(animation,2000);
setInterval(loading,200);


function loading()
{
    if($("#hermes").is(':visible'))
    $("#hermes").fadeOut();
    else
    $("#hermes").fadeIn();

}


function animation()
{
 
$("#jadu").hide();
$("#mainbody").show();
$('body').finish();


}



