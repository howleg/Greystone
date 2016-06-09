// NOTE: This example will only work if you run it on a web server (it will not work locally)
// or run it on your own server.

$(document).ready(function()                           //run this function only when the dom is fully loaded
{

    $('#register').on('submit', function(e)               // When form is submitted
    {
        e.preventDefault();                               // Prevent it being sent
        var details = $('#register').serialize();         // Serialize form data
        $.post('contact.php', details, function(data)    // Use $.post() to send it
        {
            alert(data);
            console.log(data);
            // $('#register').html(data);                       // Where to display result
        })
            .fail( function()                                                  // THERE IS AN ERROR
            {
                alert('Server down at the moment, please try again in a few mins');              // Show error message
            })

    });

});