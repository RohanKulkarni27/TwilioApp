<?php
$number = $_POST['From'];
$body = $_POST['Body'];
header("content-type:text/xml");
?>

<Response>
    <Message>Hello <?php echo $body ?></Message>
</Response> 