var val = jQuery.noConflict();
val(document).ready(function(){

val('#sendEmail').submit(function(e){
e.preventDefault();
	}).validate({
		debug:true,
		success: "Valid",
		rules : {
		 'email' : {
		 	required: true,
		 	email: true,
		 	maxlength: 50,
		 	minlength: 12
		 },
		 'name' : {
		 	required: true,
		 	maxlength: 40,
		 	minlength: 10
		 },
		 'siteUrl' : {
		 	required: true		 
		 }
		},
		messages: {
			'email' : {
				required: "The email is required",
				email: "That's not a valid email",
				maxlength: "The field must contain at least 50 characters",
				minlength: "The field must not be less than 12 characters"
			},
			'name' : {
				required: "The name is required",
				maxlength: "The field must contain at least 40 characters",
				minlength: "The field must not be less than 10 characters"
			},
			'siteUrl' : {
				required: "The URL is required"
			}
		},
		
        submitHandler: function(form) {
            form.submit();
        }
	});
});



/*animations*/

var anim = jQuery.noConflict();
	/*animation of title of the section content*/
        anim(window).bind("scroll", function(){
            anim(window).scrollTop() / anim(document).height()*100 > 4 && 
                (anim('#content .title').addClass("anim-title"));
        });

     /*animation of icon1 of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 8 && 
            (anim('#content .icon1').addClass("anim-icon1"));
    });

     /*animation of icon2 of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 8 && 
            (anim('#content .icon2').addClass("anim-icon2"));
    });

     /*animation of text1 of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 12 && 
            (anim('#content .text1').addClass("anim-text1"));
    });

    /*animation of text2 of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 12 && 
            (anim('#content .text2').addClass("anim-text2"));
    });

     /*animation of icon3 of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 16 && 
            (anim('#content .icon3').addClass("anim-icon3"));
    });

     /*animation of icon4 of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 16 && 
            (anim('#content .icon4').addClass("anim-icon4"));
    });

     /*animation of text3 of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 20 && 
            (anim('#content .text3').addClass("anim-text3"));
    });

     /*animation of text4 of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 20 && 
            (anim('#content .text4').addClass("anim-text4"));
    });

    /*animation of google of the section content*/
	    anim(window).bind("scroll", function(){
            anim(window).scrollTop() / anim(document).height()*100 > 26 && 
                (anim('#optimization .google').addClass("anim-google"));
        });

      /*animation of before optimization of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 34 && 
            (anim('#optimization .before').addClass("anim-before"));
    });

    /*animation of after optimization of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 34 && 
            (anim('#optimization .after').addClass("anim-after"));
    });

     /*animation of pack optimization of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 47 && 
            (anim('#packages .pack').addClass("anim-pack"));
    });

     /*animation of all optimization of the section content*/
    anim(window).bind("scroll", function(){
        anim(window).scrollTop() / anim(document).height()*100 > 49 && 
            (anim('#packages .all').addClass("anim-all"));
    });
    

