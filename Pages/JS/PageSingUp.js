function check() 
{
    if ($('#itv').val() != "" && $('#ipv').val() != "" )
    $('#entry').removeAttr('disabled');

    else
    $('#entry').attr('disabled', 'disable');

}



function SingInMenu()
{
    console.log("Привет");
}