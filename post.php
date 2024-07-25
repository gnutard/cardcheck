<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has your card been hacked?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            width: 100%;
            text-align: center;
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        footer, address {
            text-align: center;
            margin: 1rem 0;
        }
</style>
<body>
<p>You're lucky, we didn't find it. Your card details:</p>
<?php echo $_POST["name"]; ?>
<?php echo $_POST["exp"]; ?>
<?php echo $_POST["ccnumber"]; ?>
<?php echo $_POST["ccv"]; ?>
</body>
<footer>
     <p>Copyright (C) 2024</p>
</footer>
<address>
     <p>Buy this website! Send an e-mail <a href=mailto:installerwizard@national.shitposting.agency>here.</a></p>
</address>
</html>
