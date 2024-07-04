<!DOCTYPE html> <!--This shows the begining of a page  and shows the type of language being used is html. This page is supposed to provide contact details to the user so that they can reach out -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title><!--Shows the name of the tab-->
</head>
<body>
<link rel="stylesheet" href="styles.css">

   <p> 
      <?php include_once("templates/nav.php")?>
    
        
    <img src="images.images/Microsoft-Logo-PNG-HD-Image.png" alt="" width="1350" height="250" style="object-fit: contain;"><!--This displays the image at the center of the page -->
     <br>
    Contact us on either of the numbers:<ul> <!--This shows an unordered list which will display the content under bullettin format-->
        
        <li>0721346785</li> 
        <LI>0128397654</LI> 
        <li>0768908642</li> 
     </ul> <br>

     Or email us on:
     <ul>
        <li>microsoft@gmail.com</li>
        <li>micro@gmail.com</li>
     </ul>
        
</p>
<?php include_once("templates/footer.php") ?>

</body>
</html>