<?php
$number = $_POST['From'];
$body = $_POST['Body'];
if($body=='Rohan'){
    $responseText = 'Mr. Rohan';
}
header("content-type:text/xml");
?>

<Response>
    <Message>Hello <?php echo $responseText ?></Message>
</Response> 