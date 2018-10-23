<?php
$number = $_POST['From'];
$body = $_POST['Body'];
if($body=='Rohan'){
    $responseText = 'Mr. Rohan';
}
else if($body=='Gayatri'){
    $responseText = 'Ms. Gayatri';
}
else if($body=='Ashutosh'){
    $responseText = 'Mr. Ashutosh';
}
header("content-type:text/xml");
?>

<Response>
    <Message>Hello <?php echo $responseText ?></Message>
</Response> 