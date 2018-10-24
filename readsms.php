<?php
$number = $_POST['From'];
$body = "Rohan,23,week 1";
$splitValues = explode(',',$body);
$name = $splitValues[0];
$weekNumber = $splitValues[2];
$responseText="";
if($weekNumber=='week 1'){
    $responseText = 'Recommended exercises:- Yoga, walking , jogging, pilates.Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';

}
else if($weekNumber=='week 2'){
    $responseText = 'Recommended exercises:- Yoga, walking , jogging, pilates.Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}
else if($weekNumber=='week 3'){
    $responseText = 'Recommended exercises:- Yoga, walking , jogging, pilates.Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}
else if($weekNumber=='week 4'){
    $responseText = $responseText+'Recommended exercises:- Yoga, lunges, squats. Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}
else if($weekNumber=='week 5'){
    $responseText = $responseText+'Recommended exercises:- Yoga, lunges, squats. Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}
else if($weekNumber=='week 6'){
    $responseText = $responseText+'Recommended exercises:- Yoga, lunges, squats. Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}
else if($weekNumber=='week 7'){
    $responseText = $responseText+'Recommended exercises:- Slow Walking,yoga. Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}
else if($weekNumber=='week 8'){
    $responseText = $responseText+'Recommended exercises:- Slow Walking,yoga. Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}
else if($weekNumber=='week 9'){
    $responseText = $responseText+'Recommended exercises:- Slow Walking,yoga. Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}
else if($weekNumber=='week 10'){
    $responseText = $responseText+'Recommended exercises:- Slow Walking,yoga. Recommended medicines:- For pain:Tylenol
    Constipation: Metamucil, Colace, Citracel, Milk of Magnesia, Dulcolax
    Indigestion and heart burn: Tums, Maalox, Mylanta, Pepcid 
    Cold: Benadryl, Sudafed, Afrin nasal spray, Claratin, Robitussin DM, Vicks Formula 44, Halls cough drops. 
    Flu: Tamiflu';
}

header("content-type:text/xml");
?>

<Response>
    <Message>Hello <?php echo $responseText ?></Message>
</Response> 