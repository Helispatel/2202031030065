<html>
    <head>
        <title>
            Registration Form
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            table{
                background-color: cadetblue;
            }
        </style>
    </head>
    <body>
        <form  method="get" class="container">
        <center>
            <h1> Registration Form</h1>
            <table border="10px">
            <tr>
                <td>
                    <label>First Name: </label>
                </td>
                <td>
                    <input  id="Fname" name="fname" type="text" placeholder="Enter Fname" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Midle Name: </label>
                </td>
                <td>
                    <input id="Mname" name="mname" type="text" placeholder="Enter Mname" style="width: 300px;">
                </td>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Last Name: </label>
                </td>
                <td>
                    <input id="Lname" name="lname" type="text"  placeholder="Enter Lname" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label id="age">Age: </label>
                </td>
                <td>
                    <input type="number"  placeholder="Enter Age" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Date of Birth: </label>
                </td>
                <td>
                    <input id="age" type="date" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Adderrss: </label>
                </td>
                <td>
                    <textarea id="Add" cols="10" rows="1" style="width: 300px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Perment Adderrss: </label>
                </td>
                <td>
                    <textarea id="PerAdd" cols="10" rows="1" style="width: 300px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Pin Code: </label>
                </td>
                <td>
                    <input id="pin" type="tel" maxlength="6" placeholder="Pin Address" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone Number: </label>
                </td>
                <td>
                    <input id="Phone" type="tel" maxlength="10" placeholder="Phone no." style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Gender: </label>
                </td>
                <td>
                    <input name="Gender" type="radio" value="Male"> Male
                    <input name="Gender" type="radio" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label>
                </td>
                <td>
                    <input id="Email" type="email"  placeholder="Enter Email" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label>password: </label>
                </td>
                <td>
                    <input id="pass" type="password"  placeholder="Enter Password" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Conform password: </label>
                </td>
                <td>
                    <input id="Cpass" type="password"  placeholder="Enter Conform Password" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Enter CV: </label>
                </td>
                <td>
                    <input id="Cv" type="file">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="Sem">
                        <option>Select Sem</option>
                        <option value="4Th">4Th</option>
                        <option value="5th">5Th</option>
                    </select>
                </td>
                <td>
                    <input id="T&C" type="checkbox"> I Accept all T&C
                </td>
            </tr>
            <tr>
                <td>
                    <input id="submit" type="submit" name="submit" style="width: 100px; padding: 5px; margin-top: 5px;">
                </td>
            </tr>
        </table>
    </center>
    </form>


    <?php
    if(isset($_GET["submit"])){
        if(isset($_GET["fname"]) && isset($_GET["mname"]) && isset($_GET["lname"])){
            $fname = $_GET["fname"];
            $mname = $_GET["mname"];
            $lname = $_GET["lname"];

            $name = $fname." ".$mname." ".$lname;
        }
    }
    ?>
    <p><?php if(isset($name)){ echo $name;} ?></p>
    </body>
</html>