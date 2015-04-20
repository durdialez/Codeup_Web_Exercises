<?php
  var_dump($_GET);
?>

<!DOCTYPE html>
<html>
<head>
        <title>Codeup.dev
            
        </title>
        <link rel="stylesheet" href="/css/site.css">
</head>
<body>


    <form method="POST" action="process-form.php">
        <label for="username">Username: </label>
        <input type="text" name"username" placeholder="Username" id="username"><br>
        
        <label>
            Password:
            <input type="password" name="password"><br>
        </label><br>
        
        <textarea name="comment">This is my comment</textarea><br>

        <label>
            Is Codeup Awesome?
            <input type="checkbox" value="obviously" name="codeup_awesome" checked="checked">
        </label>

        <p>Do you like these foods: </p>

        <label>Bacon<input type="radio" name="food" value="bacon"></label><br>
        <label>Cheese<input type="radio" name="food" value="cheese"></label><br>
        <label>Eggs<input type="radio" name="food" value="eggs"></label><br>

        <input type="submit">
    </form>


        <form method="GET" action="process-form.php">

        <p><strong>User Login</strong></p>
            <label for="username">Username: </label>
                <input type="text" name"user_id" placeholder="Username" id="user_id"><br>
        
        <label>
            Password:
            <input type="password" name="password" placeholder="Enter Password Here" id="password"><br>

        <input type="submit" value="login">
            
        <p><strong>Compose an Email</strong>
        <input type="checkbox" id="compose_email" value="yes" checked><br>
        </p>

            <label for="To">To: </label>
            <input type="text" name="To" placeholer="To" id="To"><br>

            <label for="From">From: </label>
            <input type="text" name="From" placeholer="From" id="From"><br>

            <label for="Subject">Subject: </label>
            <input type="text" name="Subject" placeholer="Subject" id="Subject"><br>

            <textarea id="email_body" name="email_body">Body</textarea><br>

            <input type="submit" value="submit">


        </form>

        <form method="GET" action="process-form.php">
        <p><strong>Multiple Choice Test</strong></p>

        <p>How many slices of pizza can Daniel eat in one sitting?</p>
            <label>
                <input type="radio" name="q1" value="one">
                One
            </label> 

            <label>
                <input type="radio" name="q1" value="three">
                Three
            </label> 

            <label>
                <input type="radio" name="q1" value="eight">
                Eight
            </label> 

            <label>
                <input type="radio" name="q1" value="No limit">
                No Limit
            </label>    

        <p><h1>How many phones has Daniel broken in the last year?</h1></p>
            <label>
                <input type="radio" name="q2" value="one">
                One
            </label> 

            <label>
                <input type="radio" name="q2" value="four">
                Four
            </label> 

            <label>
                <input type="radio" name="q2" value="two">
                Two
            </label> 

            <label>
                <input type="radio" name="q2" value="none">
                None
            </label><br>

        <p>Which of the following are spicy?</p>
            <input type="checkbox" id="habanero"


        <input type="submit" value="submit">


        </form>


        <p>What's your favorite color?</p>
        <label for="color">Color: </label>
        <select name="color" id="color" multiple>
            <option value="1">blue</option>
            <option value="2">orange</option>
            <option value="3">red</option>
            <option value="4">yellow</option>
            <option value="5">purple</option>
        </select>

        <br>

        <form method="GET" action="process-form.php">
            <p><strong>Select Testing:</strong></p> 
            <label for="ChaCha">Do you like to do da ChaCha: </label>
            <select name="ChaCha" id="ChaCha">
                <option value="1">Yes</option>
                <option value="0">No</option>

            <input type="submit" value="submit">
            </select>


        </form>





  

</body>
</html>




