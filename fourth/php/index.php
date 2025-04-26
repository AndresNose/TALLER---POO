<?php
    include('libreria/register.php');
    include('libreria/person.php');
    include('libreria/licenses.php');
    include('libreria/licenseA.php');
    include('libreria/licenseB.php');
    include('libreria/licenseC.php');
    $person = new Person(12, "Smith", "Santamaria", "Alguna calle de Riofrío", "3176891386", "O+", "A");
    $register = new Register();
    $register->setPerson($person);
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
    echo 'Identification: '.$register->getPerson()->getIdentification();
    echo '<br>';
    echo 'Names: '.$register->getPerson()->getName();
    echo '<br>';
    echo 'Last names: '.$register->getPerson()->getLastName();
    echo '<br>';
    echo 'Direction: '.$register->getPerson()->getAddress();
    echo '<br>';
    echo 'RH: '.$register->getPerson()->getRh();
    echo '<br>';
    echo 'Telephone: '.$register->getPerson()->getTelephone();
    echo '<br>';
    echo '<br>';
    echo 'TYPE LICENSE: '.$register->getPerson()->getSelection();
    echo '<br>';
    echo '<br>';
    echo 'Cost: '.$register->getLicenses()->getCost();
    echo '<br>';
    echo 'Duration: '.$register->getLicenses()->getDuration();
    echo '<br>';
    echo 'Description: '.$register->getLicenses()->getDescription();
    echo '<br>';
    echo 'Total: '.$register->getLicenses()->calculate();
    ?>
</body>
</html>