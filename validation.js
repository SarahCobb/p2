$(":button").on({
	'click': function(){
		window.location.replace('http://p2.sarahecobb.com');
		console.log('clicked button');
	}
});

$( "#generator" ).validate({
  rules: {
    numWords: {
    	required: true,
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
  		range: "Please choose a number between 2 and 6." 
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
