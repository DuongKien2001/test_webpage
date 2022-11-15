<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form</title>
    </head>
    <body>
        <?php
        function check_infor($fn, $ls, $ea, $os){
            if ($ea == "") return 1;
            else if ($ls == "") return 2;
            else return false;
        }
        ?>
        <?php
        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $email_address = $_POST["email"];
        $os = $_POST["os"];
        $result = check_infor($first_name, $last_name, $email_address, $os);
        if ($result == 1) echo"<p style=\"color:red\">"."Email Address is empty"."</p>";
        else if ($result == 2) echo "<p style=\"color:red\">"."Last Adress is empty"."</p>";
        else echo "<p style=\"color:red\">"."Sign in Successfully!"."</p>"

        ?>
        <form method="post">
            <p><b>Please enter your information</b></p>
            <p>Fields with a * are required</p>
            <label for="fname">First Name: </label>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last Name*: </label>
            <input type="text" id="lname" name="lname"><br>
            <label for="email">Email Address*: </label>
            <input type="email" name="email" id="email"><br>
            <label for="os">Operating System: </label>
            <input type="text" id="os" name="os"><br>
            <input type="submit" value="Submit" formaction="index1.php">
            <input type="submit" value="Reset" formaction="index1.html">
        </form>
    </body>
</html>
