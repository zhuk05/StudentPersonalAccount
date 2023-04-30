function scan() 
{
    if ($('#ivt').val() != "" && $('#ivp').val() != "" )
    $('#coming').removeAttr('disabled');

    else
    $('#coming').attr('disabled', 'disable');

}

function goBack()
{    
    window.history.back();
}