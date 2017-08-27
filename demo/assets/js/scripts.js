
jQuery(document).ready(function() 
{
    /*
        Background slideshow
    */
    $.backstretch([
      "assets/img/backgrounds/1.jpg"
    , "assets/img/backgrounds/2.jpg"
    , "assets/img/backgrounds/3.jpg"
    ], {duration: 3000, fade: 750});

    /*
        Tooltips
    */
    $('.links a.home').tooltip();
    $('.links a.blog').tooltip();

    /*
        Form validation
    */
    $('.register form').submit(function(){
        $(this).find("label[for='Name']").html('name');
        $(this).find("label[for='Email']").html('email');
        $(this).find("label[for='Address']").html('address');
        $(this).find("label[for='City']").html('city');
		$(this).find("label[for='State']").html('state');
        $(this).find("label[for='Feedback']").html('feedback');

        var name = $(this).find('input#name').val();
        var email = $(this).find('input#email').val();
        var address = $(this).find('input#address').val();
		var city = $(this).find('input#city').val();
        var state = $(this).find('input#state').val();
        var feedback = $(this).find('input#feedback').val();
		
        if(name == '')
		{  
			$(this).find("label[for='Name']").append("<span style='display:none' class='red'> Invalid Characters</span>");
            $(this).find("label[for='Name'] span").fadeIn('medium'); 
			return false;  
		}
        if(email == '') 
		{
            $(this).find("label[for='Email']").append("<span style='display:none' class='red'> - Please Enter your Email.</span>");
            $(this).find("label[for='Email'] span").fadeIn('medium');
            return false;
		}
        if(address == '') 
		{
            $(this).find("label[for='Address']").append("<span style='display:none' class='red'> - Please Enter a valid Address.</span>");
            $(this).find("label[for='Address'] span").fadeIn('medium');
            return false;
        }
        if(feedback == '') 
		{
            $(this).find("label[for='Feedback']").append("<span style='display:none' class='red'> - Please Enter your comments.</span>");
            $(this).find("label[for='Feedback'] span").fadeIn('medium');
            return false;
        } 
    });
});


