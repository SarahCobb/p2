$(":button").on({
	'click': function(){
		window.location.replace('http://p2.sarahecobb.com');
		console.log('clicked button');
	}
});

/*
function validateForm () {
	var wordCase = document.forms['generator']['case'].value;
	var separator = document.forms['generator']['separator'].value;
    if (wordCase == null || wordCase == "") {
        alert("Case is required.");
        return false;
    } else if (separator == null || separator == "") {
    	alert("separator is required.");
    	return false;
    }
} */

/*jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});*/
$( "#generator" ).validate({
  rules: {
    numWords: {
    	range: [2,6]
    },
    letterCase: {
      required: true
    },
    separator: {
    	required: true
    }
  },
  messages: {
  	numWords: {
  		range: "Please choose a number between 2 and 6" 
  	},
  	letterCase: {
  		required: "Please choose a case."
  	},
  	separator: {
  		required: "Please choose a separator."
  	}
  },
  errorPlacement: function(error,element) {
	error.insertAfter("#insertError");
  } 
});
