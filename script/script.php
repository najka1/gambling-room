<script>
		var rolls = <?php echo $_SESSION["rollsLeftOne"] ?>;
		var rollsTwo = <?php echo $_SESSION["rollsLeftTwo"] ?>;
		var rollsThree = <?php echo $_SESSION["rollsLeftThree"] ?>;
		
		var rollsLeft = document.getElementById("rollsLeftOne");
		var rollsLeftTwo = document.getElementById("rollsLeftTwo");
		var rollsLeftThree = document.getElementById("rollsLeftThree");
				
		var score = <?php echo $_SESSION["scoreOne"] ?>;
		var score = <?php echo $_SESSION["scoreOne"] ?>;
		var scoreTwo = <?php echo $_SESSION["scoreTwo"] ?>;
		var scoreThree = <?php echo $_SESSION["scoreThree"] ?>;
		
		var newScore = document.getElementById("scoreOne");
		var newScoreTwo = document.getElementById("scoreTwo");
		var newScoreThree = document.getElementById("scoreThree");
		
		var button = document.getElementById("rollBtnOne");
		var buttonTwo = document.getElementById("rollBtnTwo");
		var buttonThree = document.getElementById("rollBtnThree");
		var temp;
		var temp2;
		var temp3;
		
		
		var img = new Image();
		var img2 = new Image();
		var img3 = new Image();
		var canvas;
		var canvas2;
		var canvas3;
		var ctx;
		var ctx2;
		var ctx3;
		
		var results = document.getElementById("results");
		
		function draw(temp, img, canvas, ctx){
			ctx = canvas.getContext("2d");	
			
			if(temp == 1){
				img.src='slike/k1.jpeg';
			}
			else if(temp == 2){
				img.src='slike/k2.jpeg';
			}
			else if(temp == 3){
				img.src='slike/k3.jpeg';
			}
			else if(temp == 4){
				img.src='slike/k4.jpeg';
			}
			else if(temp == 5){
				img.src='slike/k5.jpeg';
			}
			else if(temp == 6){
				img.src='slike/k6.jpeg';
			}
			
			img.onload = function(){
				ctx.drawImage(img, 1, 1);
			}
		}

		function remove(){
			ctx = canvas.getContext("2d");	
			ctx2 = canvas2.getContext("2d");	
			ctx3 = canvas3.getContext("2d");	
			ctx.clearRect(0, 0, canvas.width, canvas.height);
			ctx2.clearRect(0, 0, canvas.width, canvas.height);
			ctx3.clearRect(0, 0, canvas.width, canvas.height);
		}
		
		
		function rollTwo(){
			canvas = document.getElementById("dicePicOne");	
			canvas2 = document.getElementById("dicePicOne2");	
			canvas3 = document.getElementById("dicePicOne3");	
			remove();
			
			temp = Math.floor(Math.random()* 6) + 1;	
			canvas = document.getElementById("dicePicTwo");	
			temp2 = Math.floor(Math.random()* 6) + 1;
			canvas2 = document.getElementById("dicePicTwo2");	
			temp3 = Math.floor(Math.random()* 6) + 1;
			canvas3 = document.getElementById("dicePicTwo3");	
			
			if(rollsTwo != 0){
				rollsTwo--;
				rollsLeftTwo.innerHTML = rollsTwo;
				scoreTwo = scoreTwo+temp+temp2+temp3;
				newScoreTwo.innerHTML = scoreTwo;
				buttonTwo.classList.add('disabled');
				buttonTwo.disabled = true;
				buttonThree.classList.remove('disabled');
				buttonThree.disabled = false;
				draw(temp, img, canvas, ctx);		
				draw(temp2, img2, canvas2, ctx2);		
				draw(temp3, img3, canvas3, ctx3);
			}
		}
		
		function rollThree(){
			canvas = document.getElementById("dicePicTwo");	
			canvas2 = document.getElementById("dicePicTwo2");	
			canvas3 = document.getElementById("dicePicTwo3");	
			remove();			
			
			temp = Math.floor(Math.random()* 6) + 1;	
			canvas = document.getElementById("dicePicThree");
			temp2 = Math.floor(Math.random()* 6) + 1;
			canvas2 = document.getElementById("dicePicThree2");	
			temp3 = Math.floor(Math.random()* 6) + 1;
			canvas3 = document.getElementById("dicePicThree3");	
			
			if(rollsThree != 0){
				rollsThree--;
				rollsLeftThree.innerHTML = rollsThree;
				scoreThree = scoreThree+temp+temp2+temp3;
				newScoreThree.innerHTML = scoreThree;
				buttonThree.classList.add('disabled');
				buttonThree.disabled = true;
				button.classList.remove('disabled');
				button.disabled = false;
				draw(temp, img, canvas, ctx);
				draw(temp2, img2, canvas2, ctx2);		
				draw(temp3, img3, canvas3, ctx3);
			}
			if(rolls == 0){
				button.classList.add('disabled');
				button.disabled = true;
				results.style.transition = "opacity 1.5s"; 
				results.style.opacity = "1";
				results.style.cursor = "pointer";
				results.disabled = false;
				setVariables();
			}
		}

		function rollOne(){
			canvas = document.getElementById("dicePicThree");	
			canvas2 = document.getElementById("dicePicThree2");	
			canvas3 = document.getElementById("dicePicThree3");	
			remove();
			
			temp = Math.floor(Math.random()* 6) + 1;	
			canvas = document.getElementById("dicePicOne");		
			temp2 = Math.floor(Math.random()* 6) + 1;
			canvas2 = document.getElementById("dicePicOne2");	
			temp3 = Math.floor(Math.random()* 6) + 1;
			canvas3 = document.getElementById("dicePicOne3");	
			
			if(rolls != 0){
				rolls--;
				rollsLeft.innerHTML = rolls;
				score = score+temp+temp2+temp3;
				newScore.innerHTML = score;
				button.classList.add('disabled');
				button.disabled = true;
				buttonTwo.classList.remove('disabled');
				buttonTwo.disabled = false;	
				draw(temp, img, canvas, ctx);		
				draw(temp2, img2, canvas2, ctx2);		
				draw(temp3, img3, canvas3, ctx3);		
			}
		}
		

		
		function setVariables(){
			$.ajax({
				url: 'results.php',
				data: {"score":score, "scoreTwo":scoreTwo, "scoreThree":scoreThree},
				type: 'post',
				success:function(data){
					console.log("dela");
				}
			});
		}
</script>