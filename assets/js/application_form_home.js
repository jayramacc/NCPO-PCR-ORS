$(function(){

	var gformdate = "";
	$("#c_applicant_purpose").focus();

	baseURL = $("#baseurl").val()
	$("#appform").submit(function(e){
		e.preventDefault();
		
		formdata = $.fn.serializeObject();

		gformdate = formdata;
		$("#bdatedateID").css('border','0px solid #cccccc');
		$("#ceddateID").css('border','0px solid #cccccc');
		$("#passdateID").css('border','0px solid #cccccc');

		for (var key in formdata) {
		  if (formdata.hasOwnProperty(key)) {
		    $("#" + key).css('border-color','#cccccc');
		  }
		}

		$.ajax({ 
			  
			  url  :   baseURL + "/sumbitform", 
			  type :   'POST',
	          data :   formdata,
	         
	          beforeSend : function()
	          {
	             $.blockUI({  
                    message: "<h1>Please wait...</h1>",
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                 }});
	          },
	          success: function(response)
	          { 
         		var status = response.status;
         		var msg = response.msg;
         		$("#errorMessage").html(msg);
	            $.unblockUI();

	          	if(status == 400){
	          			
	          		$("#error-modal").modal("show");

	          		if(response.field == "bdatedateID")
	          			document.getElementById('bdatedateID').scrollIntoView();
	      			if(response.field == "ceddateID")
	      				document.getElementById('ceddateID').scrollIntoView();
          			if(response.field == "passdateID")
          				document.getElementById('passdateID').scrollIntoView();

	          		$("#" + response.field).focus();
	          		$("#" + response.field).css('border','1px solid red');

	          	}

	          	if(status == 200){

	          		$("#success-modal").modal("show");
	          	}

			  }
		});
	
	});
	
	$("#btncontinue").click(function(){
		$.ajax({ 
			  
			  url  :   baseURL + "/sumbitfinalform", 
			  type :   'POST',
	          data :   gformdate,
	          
	          beforeSend : function()
	          {
	             $.blockUI({  
                    message: "<h1>Please wait...</h1>",
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                 }});
	          },
	          success: function(response)
	          { 
	          	$.unblockUI();
	      
         		var status = response.status;
         		var msg = response.msg;
         		$("#errorMessage").html(msg);
	          
	          	if(status == 400){
	          		$.unblockUI();
	          		   	console.log(response.url);
	          		$("#error-modal").modal("show");

	          		if(response.field == "bdatedateID")
	          			document.getElementById('bdatedateID').scrollIntoView();
	      			if(response.field == "ceddateID")
	      				document.getElementById('ceddateID').scrollIntoView();
          			if(response.field == "passdateID")
          				document.getElementById('passdateID').scrollIntoView();

	          		$("#" + response.field).focus();
	          		$("#" + response.field).css('border','1px solid red');

	          	}

	          	if(status == 200){

	          		for (var key in gformdate) {
					  if (formdata.hasOwnProperty(key)) {
					    $("#" + key).val("")
					  }
					}
	          		location = response.url;
	          	}

			  }
		});
	
	})
	
	$("#refresh").click(function(){

		$("#captchaloader").css("display","block");
		$("#captchaid").css("display","none");
		
		$.ajax({ 
				  url:    baseURL + "/refcaptcha", 
				  type:   'POST',
		          data: { _token : $("input[name='_token']").val() },
		          
		          success: function(url)
		          { 
		          	$("#captchaid").attr("src",url);
		          	$("#captchaloader").css("display","none");
					$("#captchaid").css("display","block");
		          	$("#captcha").val("");
		          	$("#captcha").focus();

    			  }
  		 });
	})

	$.fn.serializeObject = function()
	{
	    var o = {};
	    var a = $("#appform").serializeArray();
	    $.each(a, function() {
	        if (o[this.name] !== undefined) {
	            if (!o[this.name].push) {
	                o[this.name] = [o[this.name]];
	            }
	            o[this.name].push(this.value || '');
	        } else {
	            o[this.name] = this.value || '';
	        }
	    });
	    return o;
	};
	

	

	
	$("#c_applicant_age").keypress(function(evt){
		return isNumberKey(evt);
	});
	
	$("#bdateYear").keypress(function(evt){
		return isNumberKey(evt);
	});
	
	$("#cedYear").keypress(function(evt){
		return isNumberKey(evt);
	});
	
	$("#passYear").keypress(function(evt){
		return isNumberKey(evt);
	});

	$("#heightFeet").keypress(function(evt){
		return isNumberKeyAndOnlyOne(evt);
	});

	$("#heightInches").keypress(function(evt){
		return isNumberKey(evt);
	});
	
	$("#c_applicant_weight").keypress(function(evt){
		return isNumberKey(evt);
	});

	$("#c_applicant_noofyears").keypress(function(evt){
		return isNumberKey(evt);
	});	

	$("#c_applicant_cellphoneno").keypress(function(evt){
		return isNumberKey(evt);
	});
	$('#print').on('click',function(){
	  return printData();
	});


  	$("#bdateYear").blur(function(){
	   $.fn.age();
	})

	$("#bdateMonth").on('change',function(){
		$.fn.age();
	})

	$("#bdateDay").on('change',function(){
		$.fn.age();
	})

	$.fn.age = function(){

		 year = $('#bdateYear').val();
		 month = $('#bdateMonth').val();
		 day = $('#bdateDay').val();

		 if(year == "" || month == "" || day == "" || year.length != 4){
		 	return false;
		 }
				
		if(month.length < 2){
			month = "0" + month;
		}

		if(day.length < 2){
			day = "0" + day;
		}

		value = year + "-" + month + "-" + day;
		
		  if($.fn.checkdate(value) == true){
		   		var age = $.fn.calculateAge(value);
		   		if(parseInt(age) < 0){
					age = 0;
				}
			$("#c_applicant_age").val(age)
	 	  }
	}

	$.fn.calculateAge = function(bdate){
		dob = new Date(bdate);
		var today = new Date();
		var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
		return age;
	}

	$.fn.checkdate = function(date) {
	   		var date_regex = /^(19|20)\d{2}\-(0[1-9]|1[0-2])\-(0[1-9]|1\d|2\d|3[01])$/ ;
	  		return date_regex.test(date);
	}
	
 	function isNumberKey(evt)
    {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
	  if (charCode != 46 && charCode > 31 
	        && (charCode < 48 || charCode > 57))
	         return false;

	      return true;
	}
	
	function isNumberKeyAndOnlyOne(evt)
    {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
         return false;

      if($("#heightFeet").val().length != 0){
		 return false;
	  }
      return true;
    }

    $("#bankITC").hover(function(){
      $(this).popover('toggle')
   })
   
   $("#bankOnline").hover(function(){
      $(this).popover('toggle')
   })

   $("#mobilep").hover(function(){
      $(this).popover('toggle')
   })
 
   $("#bayadcenter").hover(function(){
      $(this).popover('toggle')
   })

 	$("#linkconvertheight").click(function(){
 		$("#convert-height-modal").modal("show")
 	})

 	$('#convert-height-modal').on('shown.bs.modal', function() {
        $("#feet").focus();
    })

    $("#btnconvert").click(function(){

    	var feet =  $("#feet").val();
    	var inches =  $("#inches").val();

    	if($.trim(feet) == "" ||  $.trim(inches) == "")
    	{
    		$("#msgError").html("All fields are required.");
    		return false;
    	}

   		height = (feet * 30.48) + (inches * 2.54);

   		$("#c_applicant_height").val(height.toFixed(2));
   		$("#convert-height-modal").modal("hide");
    })

    $("#feet").keypress(function(evt){
		return isNumberKey(evt);
	});
	$("#inches").keypress(function(evt){
		return isNumberKey(evt);
	});
	$("#c_applicant_height").keypress(function(evt){
		return isNumberKey(evt);
	});
	$("#c_applicant_weight").keypress(function(evt){
		return isNumberKey(evt);
	});

	
	

})