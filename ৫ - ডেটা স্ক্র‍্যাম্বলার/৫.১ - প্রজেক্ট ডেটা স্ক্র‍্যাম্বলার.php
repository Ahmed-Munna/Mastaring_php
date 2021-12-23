<?php
    $task = "encode";
    $key  = "abcdefghijklmnopqrstuvwxyz1234567890";
    if(isset($_GET["task"]) && $_GET["task"]!=""){
        $task = $_GET["task"];
    }
    if('key'==$task){
        $key_original = str_split($key);
        shuffle($key_original);
        $key = join('',$key_original);
    }elseif(isset($_POST["key"]) && $_POST["key"]!=""){
        $key = $_POST["key"];
    }

    // <<<<<<<<<<<<<<<<<<<<< ALL_FUNCTION_ARE_HERE >>>>>>>>>>>>>>>>>>>>>>>>>>

    function displayKey($key){
        printf("value = %s",$key);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <style>
        .container{
            width: 65% !important;
        }
        .container > h1{
            margin-top: 50px;
        }
    </style>
    <title>Data Scrambler</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <section>
        <div class="container">
            <h1> <img src="favicon.png" style="width:70px" alt=""> Data Scrambler</h1>
            <p>Use this application for scrambling your data</p>
            <div class="code">
                <a href="">Encode|</a>
                <a href="">Decode|</a>
                <a href="?task=key">General key</a>
            </div>
            <form action="৫.১ - প্রজেক্ট ডেটা স্ক্র‍্যাম্বলার.php" method="post">
                <fieldset>
                    <label for="key" style="margin-top: 20px">
                        <span>Key</span>
                        <input type="text" name="key" id="key" <?php displayKey($key); ?> >
                    </label>
                    <label for="data" style="margin-top: 20px">
                        <span>Data</span>
                        <textarea name="data" id="data" style="height:100px"></textarea>
                    </label>
                    <label for="result" style="margin-top: 20px">
                        <span>Result</span>
                        <textarea name="result" id="result" style="height:100px"></textarea>
                    </label>
                    <input type="submit" name="submit" value="Do it for me">
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>