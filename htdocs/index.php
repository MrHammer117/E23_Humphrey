<?php
require_once('includes/define.inc.php');
require_once('includes/header.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/styles.css" />
    <!-- TODO: step 3 -->
    <script src="script.js"></script>
  </head>

  <body id="home">
  	<?php require_once(INC_HEADER);?>
    <div id="maincontent">
    <fieldset>
    	<form method="POST" name="fileUpload" action="upFile.php" enctype="multipart/form-data">
    		<legend>Profile Image</legend>
    		<label for="file1" id="file1">Select image to upload:</label>
    		<input type="file" name="file1" id="file1">
    		<br /><br />
    		<div class="rectangle centered">
    			<input type="submit" value="Upload Image" name="submit" class="btn">
    		</div>
    	</fieldset>
    </form>
    <form method="GET" name="mainForm" action="process.php">
	   <fieldset>
	      <legend>Contact Information</legend>
	      <p id="required">Fields marked with (*) are required.</p>

	      <p>
	      <label for="author" id="authorlabel">Author * [First Last]</label><br/>
	      <input type="text" name="author" id="author" />
	      </p>

	      <p>
	      <label for="address">Address *</label><br/>
	      <input type="text" name="address" id="address" />
	      </p>

	      <p>
	      <label for="city">City *</label><br/>
	      <input type="text" name="city" id="city"  />
	      </p>

	      <p>
	      <label for="state">State * [Two letter abbrev.]</label><br/>
	      <input type="text" name="state" id="state" maxlength="2" />
	      </p>

	      <p>
	      <label for="zip">Postal code * [99999]</label><br/>
	      <input type="text" name="zip" id="zip" maxlength="5" />
	      </p>

	      <p>
	      <label for="phone" id="phonelabel">Phone number * [999-999-9999]</label><br/>
	      <input type="text" name="phone" id="phone" maxwidth="14"/>
	      </p>

	      <div class="rectangle centered">
	         <input type="submit" value="Submit" class="btn" onclick="validate()" />
             <input type="reset" value="Clear Form" class="btn" />
	      </div>
	   </fieldset>
	</form>
	</div> <!-- maincontent -->
	<?php require_once(INC_FOOTER);?>
  </body>

</html>
