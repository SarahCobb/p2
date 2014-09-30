$(":button").on({
	'click': function(){
		window.location.replace('http://p2.sarahecobb.com');
		console.log('clicked button');
	}
});

function validateForm () {
	var wordCase = document.forms['generator']['case'].value;
	var seperator = document.forms['generator']['seperator'].value;
    if (wordCase == null || wordCase == "") {
        alert("Case is required.");
        return false;
    } else if (seperator == null || seperator == "") {
    	alert("Seperator is required.");
    	return false;
    }
}

