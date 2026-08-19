
function createastring() {
	var string1
	string1 = prompt("Enter in a string:");
	var regex
	regex = /^[a-zA-Z]+$/;

	if (regex.test(string1)) {
		document.write("Valid input " + string1);
		return true;
	} else {
		document.write("Invalid input " + string1);
		return false;
	}
}
