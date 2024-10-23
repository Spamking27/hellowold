<!DOCTYPE html>
<html>
<style>
    h3 {
        text-align: center;
        color: aqua;
    }
</style>
    <head>
        <title>Wazoo party time</title>

    </head>

	<script>
/*
		function my_event(){
			document.getElementById("message").innerHTML = "CHEESE CHEESE CHEESE !!!";
				}

		function clearbutton(){
			var x= document.getElementById("divoo");
			if(x.style.display == "none"){
				x.style.display ="block";
			}
			else
			{
				x.style.display ="none";
			}
				}
		function changebutton(){
			document.getElementById("god").src ="figs.jpg";
					}
		function mandatory(){

			var x= document.getElementById("reminder");
			if(x.style.display == "none"){
				x.style.display="block";
			}
			else
			{
				x.style.display="none";
			}
		}

		getText("banana.txt");

		async function getText(file){

			let x = await fetch(file);
			let y = await x.text();
			document.getElementById("summoningwizard").innerHTML =y;
		}*/
	</script>


	



        <body>
		<h1> Welcome to the church of cheese </h1>

            <p>
                Cheese is the greatest thing we have created. God bless out taste buds.God bless cheese.
                As such we shall praise it. Figs are great to.
                <a href="https://en.wikipedia.org/wiki/Cheese" target="_blank">Our source page</a>
            </p>

            <h3>Our lord and Savior</h3> 

            <img id="god"src="cheese.jpg" alt="Our lord and Savior">
                
                <h2>Text input fields</h2>
                <p>
                    Donate your way into heaven. Donors will even receive land after 95 donations!!!
                </p>
                <form>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <label for="fname">Ethnicity:</label><br>
                    <input type="text" id="Ethnicty" name="Ethnicity"
                    pattern="[A-Za-z]{12}" title="Ethnicity"><br>
                    
                    <label for="Credit card">Credit card:</label><br>
                    <input type="text" id="credit card" name="fname" required><br>
                    <label for="Security code">Security code:</label><br>
                    <input type="text" id="code" name="code" required><br>
                    <label for="Expiration date">Expiration date:</label><br>
                    <input type="text" id="exp" name="exp"required><br>
                    <label for="Social insurance number">Social insurance number:</label><br>
                    <input type="text" id="SIN" name="SIN" onblur="mandatoryfx()" required> <br>
		   
                    <p></p>
                    <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                    <P></P>
		<p id="message"> Press the button to submit.</p>
		<button type="button" onclick="alert('Thank you!!! :)');">Submit</button> <br>
		    <button type="button" onclick="my_event();"> </button>
		<button type="button" onclick="clearbutton();"></button>
		<button type="button" onclick="changebutton();"></button>
		<button id+"summoningwizard" type="button" onclick="getText();" > </button>
                </form>
		<div id="divoo">
			<p> FIGS ARE ALSO GREAT <p>
		</div>

		<div id="reminder"

			<p>This field is required.	</p>
		  </div>
		<p>
			Form for php and sql lab to be found	

		</p>

		<?php
			//$id = htmlspecialchars($_GET["id"]);
			$server = "localhost";
		     	$username = "php";
		     	$password = "hellonearth";
		     	$database = "for_site";
		     	$conn = mysqli_connect($server,$username,$password,$database);

		     if (!$conn) {
		     die("Connection failed: {mysqli_connect_error()}");
		     }
		     $sql = "select * from info";
		     $result = mysqli_query($conn,$sql);

		 ?>

			<form action="/hellowold/badoom.php" method ="get">
				<label for "id"> Select and ID:</label><br/>
				<select id="id" name="id">
				<?php
					foreach($result as $row)
					{
						echo "<option value ='{$row['id']}'> {$row['id']}</option>\n";
					}

					mysqli_close($conn);

				?>
				</select>
				<br/>
				<input type="submit" value= "submit"/>
				</form>

<p> Yet another form </p>
		
		<form action="/hellowold/badoom.php" method ="get">
		<label for "SIN"> ADD a SIN: </label><br/>
		<select id ="SIN" name="SIN">
		<input type "text" value="submit"?>
		</form>
		

		

	
                <a href="index.html">Other page</a>
        </body>



</html>
