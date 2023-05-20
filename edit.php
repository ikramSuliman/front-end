<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Form</title>
    <style>
    /* CSS styles for the form */
    form {
        font-size: 0.9em;
        font-weight: 100;
        width: 94.5%;
        display: block;
        border: none;
        padding: 0.8em;
        max-width: 400px;
        margin: 0 auto;
        background-color: white;
        border: solid 1px rgba(255, 255, 255, 0.37);
    }

    label, input {
        display: block;
        margin-bottom: 10px;
        margin-left: 50px;
    }


    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }
    body {
        background: #76b852;
}
footer{
        text-align: center;
        color: white;
    }
</style>
</head>
<body>
<h1>Edit Data Form</h1>

<form method="POST" action="update_data.php">
    <label for="name">Name:</label>
    <input   class="text" type="text" id="name" name="name"  >

    <label for="email">Email:</label>
    <input  class="text"type="email" id="email" name="email"  >

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" >

    <input type="submit" value="Update">
</form>
<footer>
<?php
include('a.html')
?>
</footer>
</body>
</html>