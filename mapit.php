<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="main.css">
<?php include('nav_bar.php'); ?>
<style>
    select {
    padding: 5px;
    border: 1px solid green;
      border-radius: .5em;
    background-color: lightblue;
    color: grey;
  }
  input {
    padding: 5px;
    border: 1px solid green;
      border-radius: .5em;
    background-color: lightblue;
    color: grey;
  }
  submit {
    padding: 5px;
    border: 1px solid green;
      border-radius: .5em;
    background-color: lightblue;
    color: grey;
  }
    </style>
</head>
<body>

<form method = "POST" action = "" id = "mapit" name = "mapit">
<div>
<span class="error">*</span>
<label for = "street">Street Address</label>
<input type = "text" id ="street" name ="street">
</div>
<div>
<span class="error">*</span>
<label for = "city">City</label>
<input type = "text" id ="city" name ="city">
</div>

<div>
<span class="error">*</span>
<label for = "province">Province</label>
<select id="province" name="province">
        <option value="bc">BC</option>
        <option value="ab">AB</option>
        <option value="mb">MB</option>
        <option value="nb">NB</option>
        <option value="nl">NL</option>
        <option value="nt">NT</option>
        <option value="ns">NS</option>
        <option value="nu">NU</option>
        <option value="on">ON</option>
        <option value="pei">PEI</option>
        <option value="qb">QB</option>
        <option value="sk">SK</option>
        <option value="yt">YT</option>
        </select>
</div>

<input type = "submit" name ="submit" id = "submit" value ="Submit Form">
</form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type ="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script>
$(document).ready(function() {
  $("#mapit").validate({
    rules: {
		street: {
			required: true,
			minlength: 4
		},
		city: {
			required: true,
			minlength: 4
		}
		
	}
  });
});
</script>
<?PHP
  if (isset($_POST['submit'])) {
    $city = $_POST['city'];
    $street = $_POST['street'];
    $province = $_POST['province'];
    echo "<iframe width='600' height='450' frameborder='0' style='border:0' src='https://www.google.com/maps/embed/v1/search?q=".$street."%2C%20".$city."%2C%20".$province."%2C%20Canada&key=AIzaSyCTmDpM2MJMdzDasWW5t3aMQqgnHs0ot1c' allowfullscreen></iframe>";
  }
  ?>
</body>
</html>
