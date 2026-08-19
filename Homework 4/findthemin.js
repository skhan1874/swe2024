var number1;
	number1 = prompt("Enter a number");
	
	//variable for the second number
	var number2;
	number2 = prompt("Enter a second number");
	
	//variable for the third number
	var number3;
	number3 = prompt("Enter a third number");
	
	//call the function
	var minNum = Math.min(number1, number2, number3);
	//prints to the browser window
	document.write("The minimum number is:" + minNum);
