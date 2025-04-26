<?php
    include('libreria/registerGymGyn.php');
    include('libreria/person.php');
    include('libreria/plan.php');
    include('libreria/basic.php');
    include('libreria/medium.php');
    include('libreria/premium.php');
    $person = new Person(12, "Andrés", "Guti", 55, 150, 1);
    $registerGym = new RegisterGym();
    $registerGym->setPerson($person);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Names: '.$registerGym->getPerson()->getNames();
    echo '<br>';
    echo 'Last names: '.$registerGym->getPerson()->getLastNames();
    echo '<br>';
    echo 'Weight: '.$registerGym->getPerson()->getWeight();
    echo '<br>';
    echo 'Stature: '.$registerGym->getPerson()->getStature();
    echo '<br>';
    echo '<br>';
    echo 'Name: '.$registerGym->getPlan()->getName();
    echo '<br>';
    echo 'Cost: '.$registerGym->getPlan()->getCost();
    echo '<br>';
    echo 'Services: '.$registerGym->getPlan()->getService();
    ?>
</body>
</html>