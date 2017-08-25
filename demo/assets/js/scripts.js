
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
        $(this).find("label[for='name']").html('name');
        $(this).find("label[for='email']").html('email');
        $(this).find("label[for='add']").html('add');
        $(this).find("label[for='city']").html('city');
		$(this).find("label[for='state']").html('state');
        $(this).find("label[for='feedback']").html('feedback');

        var name = $(this).find('input#name').val();
        var email = $(this).find('input#email').val();
        var add = $(this).find('input#add').val();
		var city = $(this).find('input#city').val();
        var state = $(this).find('input#state').val();
        var feedback = $(this).find('input#feedback').val();
		var name = $(this).find('input#name').val();
		var letters = /^[A-Za-z]+$/; 
		
        if(name.value.match(letters))
		{  
			return true;  
		}  
		else
		{  
			$(this).find("label[for='name']").append("<span style='display:none' class='red'> Invalid Characters</span>");
            $(this).find("label[for='name'] span").fadeIn('medium'); 
			return false;  
		}
        if(email == '') 
		{
            $(this).find("label[for='email']").append("<span style='display:none' class='red'> - Please enter your Email.</span>");
            $(this).find("label[for='email'] span").fadeIn('medium');
            return false;
		}
        if(add == '') 
		{
            $(this).find("label[for='add']").append("<span style='display:none' class='red'> - Please enter a valid Address.</span>");
            $(this).find("label[for='add'] span").fadeIn('medium');
            return false;
        }
        if(feedback == '') 
		{
            $(this).find("label[for='feedback']").append("<span style='display:none' class='red'> - Please enter your comments.</span>");
            $(this).find("label[for='feedback'] span").fadeIn('medium');
            return false;
        } 
    });
});


