<html>
    <head>
        <title>Practical-2</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4">
            <input type="text" placeholder="Enter the string" name="first"><br>
            <input type="text" placeholder="Enter the second string" name="second" style="margin-top: 10px;"><br>
            <input type="button" value="submit" style="margin-top: 10px;">
        </div>
        <?php
            
            echo($first+$second);
        ?>
    </body>
</html>