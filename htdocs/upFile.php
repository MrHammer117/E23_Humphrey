<?php

// --- Make sure that the upload was successful ---
//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	foreach ($_FILES as $fileKey => $fileArray) {
	  if ($fileArray["error"] != UPLOAD_ERR_OK) {
	    // error
	    echo "\nError: ".$fileKey." has error".$fileArray['error']."<br>";
	  } else { // no error
	    echo "\n".$fileKey . " Uploaded successfully ";
 	  }
	}
}

// ---- Validate type of file uploaded ----
//
$extensionValidation = array("jpg", "png");
$pathValid = array("image/jpeg", "image/png");

foreach($_FILES as $fileKey => $fileArray ){
    $extension = end(explode(".", $fileArray["name"]));
    if (in_array($fileArray["type"], $pathValid) && in_array($extension, $extensionValidation)) {
        echo "\nAll is well. Extension and mime types valid";
    } else {
        echo "\n".$fileKey." has an invalid mime type or extension";
    }
}

// ---- Move uploaded file to the final resting place ----
//
$movingFile = $_FILES['file1']['tmp_name'];
$location = $_FILES["file1"]["name"];

if (move_uploaded_file( $movingFile, $location)) {
    echo "<br />The file was uploaded and moved successfully!";

    echo "<br /><img src='$location' style='width:300px; height: 300px;'>";
} else {
    echo "\nThere was a problem moving the file.";
}

?>
