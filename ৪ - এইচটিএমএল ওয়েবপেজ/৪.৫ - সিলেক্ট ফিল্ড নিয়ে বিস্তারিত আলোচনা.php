<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form vaalidation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

    <?php
        $foods = [
            "apple",
            "Mango",
            "Banana",
            "Lichi",
            "Greap",
            "Malta"
        ];
        function displayOption($option,$selectedOption){
            foreach($option as $options){
                $selected = "";
            if(in_array($options,$selectedOption)){
                $selected = "selected";
            }
                printf("<option value='%s' %s>%s</option>\n",strtolower($options),$selected,ucwords($options));
            }
        }
    ?>

    <div class="container" style="width:50%">
        <br><br>
        <h2>Seleact/Dropdown</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam earum vel illum dignissimos ex at ipsum cumque praesentium quae. Porro reiciendis quae ducimus quidem similique reprehenderit! Doloribus veritatis architecto fugit vitae ut? Rem ad laborum totam illum obcaecati dolores! Exercitationem quasi voluptatum labore doloribus sint incidunt quas. Iure, ipsum nemo.</p>
        <p>
            <?php
                // if(isset($_POST["foods"]) && $_POST["foods"] != ""){
                //     printf("Your food is => %s",filter_input( INPUT_POST ,"foods" ,FILTER_SANITIZE_STRING));
                // }
                
                // multiple element

                $fod = filter_input(INPUT_POST,'foods',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY) ?? array();
                if(count($fod) > 0){
                    echo "Your food is => ". join(',',$fod);
                };
                
            ?>
        </p>
        <form method="POST">
            <fieldset>
                <label for="ageRangeField">select some foods</label>
                <select style="height: 200px;" name="foods[]" id="ageRangeField" multiple >
                    <option disabled selected>Select your foods</option>
                    <?= displayOption($foods,$fod) ?>
                </select>
                <input class="button-primary" type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

</body>
</html>