Array: <?php
    $array = [5, 10, 15, 20, 0, 1, 1, 1, 1, 0, 5];
    for ($i =0; $i < count($array); $i++){
        echo $array[$i].", ";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Count occurrences</title>
</head>
<body>
<form action="" method="post">
    Your Number:<input type="number" name="inputData">
    <button type="submit">Tim kiem</button><br/>

    <?php
    $count = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $myNumber = $_POST["inputData"];
        function Search($arr,$value){
            $count = 0;
            for ($i = 0 ;$i< count($arr); $i++){
                if ($value == $arr[$i]){
                    $count++;
                }
            }
            return $count;
        }
        echo "Occurrences of ".' '.$myNumber." is: ". Search($array,$myNumber) ;
    }
    ?>
</form>
</body>
</html>