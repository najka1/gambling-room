<script>
	var numberOne = document.getElementById("numberOne");
	var numberTwo = document.getElementById("numberTwo");
	var numberThree = document.getElementById("numberThree");
	var second = document.getElementById("second");
	var third = document.getElementById("third");
	var secondPlayer = document.getElementById("secondPlayer");
	var thirdPlayer = document.getElementById("thirdPlayer");
	var secondScore = document.getElementById("secondScore");
	var thirdScore = document.getElementById("thirdScore");

	const scores = [
		[<?php echo $_SESSION["score"]?>, "<?php echo $_SESSION["userOne"]; ?>"],
		[<?php echo $_SESSION["scoreTwo"]?>, "<?php echo $_SESSION["userTwo"]; ?>"],
		[<?php echo $_SESSION["scoreThree"]?>, "<?php echo $_SESSION["userThree"]; ?>"]
	];
	
	scores.sort(function(a,b){
		return b[0]-a[0];
	});
		
	document.getElementById("firstScore").innerHTML = scores[0][0];
	secondScore.innerHTML = scores[1][0];
	thirdScore.innerHTML = scores[2][0];
	document.getElementById("firstPlayer").innerHTML = scores[0][1];
	secondPlayer.innerHTML = scores[1][1];
	thirdPlayer.innerHTML = scores[2][1];
	
	if(scores[0][0] == scores[1][0]){
		if(scores[0][0] == scores[2][0]){
			numberTwo.innerHTML = 1;
			second.style.height = "80%";
			second.style.top = "20%";
			secondPlayer.style.top = "20%";
			secondScore.style.top = "30%";
			numberThree.innerHTML = 1;
			third.style.height = "80%";
			third.style.top = "20%";
			thirdPlayer.style.top = "20%";
			thirdScore.style.top = "30%";
		}
		else{
			numberTwo.innerHTML = 1;
			second.style.height = "80%";
			second.style.top = "20%";
			secondPlayer.style.top = "20%";
			secondScore.style.top = "30%";
			numberThree.innerHTML = 2;
			third.style.height = "50%";
			third.style.top = "50%";
			thirdPlayer.style.top = "30%";
			thirdScore.style.top = "45%";
		}
	}
	else if(scores[1][0] == scores[2][0]){
		numberThree.innerHTML = 2;
		third.style.height = "50%";
		third.style.top = "50%";
		thirdPlayer.style.top = "30%";
		thirdScore.style.top = "45%";
	}
</script>