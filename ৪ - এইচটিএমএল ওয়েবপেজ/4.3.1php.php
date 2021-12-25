<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Our First Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aut et numquam, nostrum sapiente, animi, quasi non corporis ullam atque unde quibusdam sequi repudiandae eum!</p>
                <h3>
                  <?php
                    $fname = "";
                    $lname = "";
                    if(isset($_GET["fname"])){
                        $fname = filter_input(INPUT_POST,"fname",FILTER_SANITIZE_STRING);
                    }
                    if(isset($_GET["lname"])){
                        $lname = filter_input(INPUT_POST,"lname",FILTER_SANITIZE_STRING);
                    }
                  ?>
                  First Name: <?php echo $fname; ?><br>
                  Last Name: <?php echo $lname; ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="column column-offset-20">
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php if(isset($_GET["fname"])){
                            // echo htmlspecialchars($_GET["fname"]);
                            echo $_GET["fname"];
                            
                        } ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php if(isset($_GET["lname"])){
                            // echo htmlspecialchars($_GET["lname"]);
                            echo isset($_GET["lname"]);
                            
                        } ?>">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>