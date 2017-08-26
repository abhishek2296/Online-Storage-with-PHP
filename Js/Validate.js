 function validate()
 {  
 
    if(document.getElementById('name').value==null || document.getElementById('name').value==""){  
		alert("Name can't be blank");
		document.getElementById('name').focus();
		return false;  
    }    
	
	if(document.getElementById('email').value==null || document.getElementById('email').value==""){  
		alert("Email can't be blank");  
		document.getElementById('email').focus();
		return false;  
    }
	
	var x = document.getElementById('email').value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if(atpos<2 || dotpos<atpos+2 || dotpos+2>=x.length){
        alert("Not a valid e-mail address");
		document.getElementById('email').focus();
        return false;
    }
	
	if(document.getElementById('pass').value==null || document.getElementById('pass').value==""){
		alert("password can't be blank");
		document.getElementById('pass').focus();
		return false;
	}
	
	if(document.getElementById('cpass').value!=document.getElementById('cpass').value){
		alert("password does not match");
		document.getElementById('cpass').focus();
		return false;
	}
	
		if(document.getElementById('dob').value==null || document.getElementById('dob').value==""){
		alert("dob can't be blank");
		document.getElementById('dob').focus();
		return false;
	}

	if(document.getElementById('mobile').value==null || document.getElementById('mobile').value==""){  
		alert("Mobile can't be blank"); 
		document.getElementById('mobile').focus();	 
		return false;  
    }  
  
	if(isNaN(document.getElementById('mobile').value)){
		 alert("Enter numeric value")
		 document.getElementById('mobile').focus();
		 return false; 
    }
    if(document.getElementById('mobile').value.length>10 || document.getElementById('mobile').value.length<10){
		 alert("enter a valid mobile number");
		 document.getElementById('mobile').focus();
		 return false;
		 }
}


function check()
{
	if(document.getElementById('idd').value==null || document.getElementById('idd').value==""){  
		alert("id can't be blank"); 
		document.getElementById('idd').focus();	 
		return false;  
    }  
	
		if(document.getElementById('pas').value==null || document.getElementById('pas').value==""){  
		alert("password can't be blank"); 
		document.getElementById('pas').focus();	 
		return false;  
    }  

}
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

