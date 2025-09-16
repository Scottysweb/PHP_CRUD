<!DOCTYPE html>
<html>
<head>
<?PHP include('nav_bar.php'); ?>
<link rel="stylesheet"  href="main.css">
<style>
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

<form method = "POST" action = "myjqadd.php" id = "myjq_add" name = "myjq_add" enctype="multipart/form-data">
<div>
<span class="error" id = "fname-error">*</span>
<label for = "fname">First Name</label>
<input type = "text" id ="fname" name ="fname">
</div>
<div>
<span class="error">*</span>
<label for = "lname">Last Name</label>
<input type = "text" id ="lname" name ="lname">
</div>

<div>
<span class="error">*</span>
<label for = "email">Email</label>
<input type = "email" id ="email" name ="email">
</div>
<div>
<span class="error">*</span>
<label for = "email">Confirm Email</label>
<input type = "email" id ="conemail" name ="conemail">
</div>
<!--<div>
<span class="error">*</span>
<label for = "phone">Phone</label>
<input type = "number" id ="phone" name ="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number"
        maxlength = "10">
</div> -->

<!-- <div>
<select onchange="cngfuc(this.value)" name = "items">
	<option>Select type of bakery item</option>
	<option value ="cookie" id = "cookies">Cookies</option>
	<option value = "pastries" id = "pastires">Pastries</option>
</select>
</div>
<div id ="bakeitems">
<select id="thebake">
   <option value ="test">Select Pastry</option>
</select>
</div> -->
<div>
<span class="error">*</span>
<label for = "phone">Phone</label>
<input type = "number" id ="phone" name ="phone">
</div>
<div>
<span class="error">*</span>
<label for = "artist">Your favorite Artist</label>
<input type = "text" id ="artist" name ="artist">
</div>
<!-- <input type = "number" id ="quanity" name ="quanity" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number"
        maxlength = "3">-->
		<div>
<!-- <span class="error">*</span>
<label for = "artist">Add Image</label>
<input type = "file" id ="image1" name ="image1">
</div> -->
<input type = "submit" name ="submit" id = "submit" value ="Submit Form">
</form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type ="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script>
$(document).ready(function() {
  $("#myjq_add").validate({
    rules: {
		fname: {
			required: true,
			minlength: 4
		},
		lname: {
			required: true,
			minlength: 4
		},
		email: {
			required: true,
			email: true
		},
		conemail: {
			required: true,
			email: true,
			equalTo: email
		},
		phone: {
			required: true,
			minlength: 10,
			maxlength: 10
		},
		quanity: {
			required: true,
			minlength: 1
		},
		artist: {
			required: true,
			minlength: 3
		}
	},
	messages: {
		conemail: {
			equalTo: "Emails dont match"
		}
	}
  });
});
</script>

</body>
</html>
