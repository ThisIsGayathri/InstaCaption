

<html>
<head>
    <title>InstaCaption</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <a href="http://localhost/InstaCaption/app/"><img height="34" width="34" src="images/home.png"></a>
            <span class="contact100-form-title">InstaCaption</span>
            <input id="img_b64" type="hidden" name="img" value={{b64val}}>
            <div>
                    <?php
						$file = $_FILES['imageLoader'];
						if (is_uploaded_file($_FILES['imageLoader']['tmp_name']) && $_FILES['imageLoader']['error']==0) 
						{
							$filepath = "images/" . $_FILES["imageLoader"]["name"];
 
							if(move_uploaded_file($_FILES["imageLoader"]["tmp_name"], $filepath)) 
							{
							echo "<img id=myImage class=image-display alt=Image img src=".$filepath." height=200 width=300/>";
							echo "***Caption here*** ";							
							} 
						else 
						{
						echo "Error !!";
						}
					 } 
					?>
					
            </div>

            
            <div
                class="navbar">
                    <a href="" target="_blank"><img src="images/github.png" target="_blank", height=42, width=42 /></a>
            </div>
            <div class="wrap-input100 validate-input">