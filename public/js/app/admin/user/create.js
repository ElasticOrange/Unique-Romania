$(document).ready(function()
{
    $('[data-buton=true]').click(function(e)
    {
        e.preventDefault();
        
        var pass1 = $('[data-password=true]').val();
        var pass2 = $('[data-password_confirm=true]').val();
        if(pass1.length >= 4)
        {
            if(pass1 === pass2) 
            {
                console.log("OK");
                ajax_submit();
            }
            else 
            {
                alert("Passwords don't Match");
                console.log("Error");
            }
        }
        else
        {
            alert("Parola trebuie sa contina minim 4 caractere");
        }
    });
    
    function ajax_submit()
    {
        var u = 
        {
            username: $('[data-username=true]').val(),
            password: ''
        };
        return $.ajax(
            {
                url: $('[data-form=true]').attr('action'),
                type: $('[data-form=true]').attr('method'),
                data: u,
                content: 'json',
                success: function(data)
                {
                    // data
                    /* 
                    {
                        status: 'OK',
                        message: 'all ok'
                    }
                    */
                    
                    console.log(data.status);
                }
            });
    }
        
});
