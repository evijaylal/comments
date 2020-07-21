<html>
     <head>
        <title>Comment box </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Leave as a Comment</h2>
            <form action="" method="post">
                <textarea placeholder="Add your comment" name="mes"></textarea>
                <div class="btn">
                    <input type="submit" value="Comment" name="comment">
                    <button id="clear">Cancel</button>
                </div>
            </form>
        </div>
    
        <script src="plugin.js"></script>
   

<?php

$post = '';
if(isset($_POST["comment"])){
$text = $_POST["mes"];
$post = $_POST["comment"];
}

if($post)
{
    $write =  fopen("com.txt","a+");
    fwrite($write,"$text<br></br>");
    fclose($write);
     $read = fopen("com.txt","r+t");
    echo "All Comments:<br>";
    
    while(!feof($read))
    {
        echo fread($read,1024);
        
    }
    fclose($read);
    
   
}

else
{
     $read = fopen("com.txt","r+t");
    echo "All Comments:<br>";
    
    while(!feof($read))
    {
        echo fread($read,1024);
        
    }
    fclose($read);
}

?>
    </body>

</html>
