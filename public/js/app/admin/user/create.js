$(document).ready(function()
{
    $('[data-buton=true]').click(function(e)
    {
        var pass1 = $('[data-password=true]').val();
        var pass2 = $('[data-password_confirm=true]').val();
        if(pass1 == pass2) {
            console.log("OK");
        }
        else {
            alert("Passwords don't Match");
            console.log("ERROR");
            e.preventDefault();
        }
    });
});