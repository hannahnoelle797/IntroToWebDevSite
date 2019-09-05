<!DOCTYPE html>
<html lang = "en">
	<head>
		<title> Lab Exercise 4, Part 3 </title>
		<meta charset="UTF-8" />
		<?php
	      		$states = array("AL", "FL", "GA");
    		?>
		<script>
			function validate()
			{
				var chiselQuantity = document.getElementById("chisel").value;
				var planerQuantity = document.getElementById("planer").value;
				var wrenchQuantity = document.getElementById("wrench").value;
				var rexp = /\d+/;
				var rexp2 = /\S/;
				var valid = true;
				var e = [""];
				
				if(!(rexp.test(chiselQuantity)) && (rexp2.test(chiselQuantity)))
				{
					valid = false;
					e[0] = chiselQuantity;
				}
				if(!(rexp.test(planerQuantity)) && (rexp2.test(planerQuantity)))
				{
					valid = false;
					e[1] = planerQuantity;
				}
				if(!(rexp.test(wrenchQuantity)) && (rexp2.test(wrenchQuantity)))
				{
					valid = false;
					e[2] = wrenchQuantity;
				}
				
				if(!valid)
				{
					alert("The following are not valid inputs: " + e.join(" "));
					return false;
				}
				if(valid)
				{
					console.log("All values are valid. Submitting form.");
					return true;
				}				
			}
		</script>
	</head>
	<body>	
		<a href = "index.html"> Back to Home Page </a>
		<br />
		<h1 style = "text-align: center"> Order Form </h1>
		<h2 style = "text-align: center"> Lab Exercise 4, Part 3 </h2>
		<br />
		<br />
		<form name="orderform" action="/formtest.php" method = "post" onsubmit="return validate();">
		<p>
			<label> Name: <input type = "text" name = "name" size = "40" /> </label>
			<br />
			<label> Street Address: <input type = "text" name = "address" size = "40" /> </label>
			<br />
			<label> City: <input type = "text" name = "city" size = "40" /> </label>
			<br />
			<label>State:
				<select name="state" id = "state">
					<?php
					sort($states, SORT_STRING);
					foreach($states as $val)
					{
						printf("<option>%s</option>", $val);
					}
					?>
				</select>
			</label>
			<br />
			<label> Zip Code: <input type = "text" name = "zip" size = "10" /> </label>
		</p>
		<table>
			<tr>
				<th> Product Name </th>
				<th> Price </th>
				<th> Quantity </th>
			</tr>
			<tr>
            			<td> Professional Wood Carving Chisel Knife (Set of 4) </td>
            			<td> $19.99 </td>
            			<td> <input type = "text"  id = "chisel" size = "2" /> </td>
         		</tr>
			<tr>
            			<td> Cast Iron Hand Wood Planer </td>
            			<td> $29.99 </td>
            			<td> <input type = "text"  id = "planer" size = "2" /> </td>
         		</tr>
			<tr>
            			<td> Ratcheting Wrench Set (Set of 4) </td>
            			<td> $14.99 </td>
            			<td> <input type = "text"  id = "wrench" size = "2" /> </td>
         		</tr>
		</table>
        	<h3> Payment Method: </h3>
        	<p>
         		<label> <input type = "radio"  name = "payment" value = "visa"  checked = "checked" /> Visa </label> 
          		<br />
          		<label> <input type = "radio"  name = "payment" value = "master" /> Master Card </label> 
          		<br />
          		<label> <input type = "radio"  name = "payment" value = "american" /> American Express </label> 
          		<br /> 
			<label> <input type = "radio"  name = "payment" value = "paypal" /> PayPal </label> 
          		<br /> 
        	</p>
		<p>
          		<input type = "submit" value = "Submit"/>
          		<input type = "reset"  value = "Clear" />
        	</p>
		</form>
	</body>
</html>