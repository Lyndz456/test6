<!DOCTYPE html><!--This displays the face of microsoft -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft</title><!--This is the name of the tab -->
</head>
<body>
    
    <?php include_once("templates/nav.php");?> <!-- to access similar content-->
    <?php require_once ("templates/nav.php")?> 

    <!--Require once and include once are similar. The difference comes when yan error occurs in how you type them-->
    <!--In require once, when an error occure, it displays a critical error and refuses to display anything past that line . But in include once, it just displays an error and proceeds to display the content following-->


    <!--<a href="homepage.html">Home</a> <a href="index.html">About Us</a>   <a href="contacts.html">Contact Us</a> This shows the pages that one can visit while on this page and provides a way of accessing them-->

        <h1 style="text-align: center; color: rgb(37, 37, 116);font-size:xx-large;">Microsoft</h1> <br><!--This diplays the heading aligned in the middle and in the selected colour-->
        <img src="images.images/Microsoft-Logo-PNG-HD-Image.png" alt="" width="1250" height="300" style="object-fit: contain;"> <br><!--This puts the image at the middle of the page -->
       
        <?php include_once ("templates/footer.php")?>

    </body> <!--Shows the end of the body tag-->
</html>