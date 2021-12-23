<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <?php
        function isChecked($inputName, $value){
            if(isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value,$_REQUEST[$inputName])){
                echo " checked";
            }
        }
    
    ?>

    <form method="post">
        <input type="checkbox" name="player[]" value="Tamim" id="tam" <?php isChecked('player','Tamim')?>>
        <label for="tma">Tamim</label><br/>
        <input type="checkbox" name="player[]" value="Sakib" id="Sakib" <?php isChecked('player','Sakib')?>>
        <label for="Sakib">Sakib</label><br/>
        <input type="checkbox" name="player[]" value="Msfiq" id="Msfiq" <?php isChecked('player','Msfiq')?>>
        <label for="Msfiq">Msfiq</label><br/>
        <input type="checkbox" name="player[]" value="Mahmudullah" id="Mahmudullah" <?php isChecked('player','Mahmudullah')?>>
        <label for="Mahmudullah">Mahmudullah</label><br/>
        <input type="checkbox" name="player[]" value="Masrafi" id="Masrafi" <?php isChecked('player','Masrafi')?>>
        <label for="Masrafi">Masrafi</label><br/>
        <input type="checkbox" name="player[]" value="Mustafiz" id="Mustafiz" <?php isChecked('player','Mustafiz')?>>
        <label for="Mustafiz">Mustafiz</label><br>
        <input type="submit" value="Submit" name="submit">
    </form>




</body>
</html>

