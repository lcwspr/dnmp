<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>
    <ul>
        <?php 

            for($i = 0; $i < 10; $i++) {
                echo "<li>  . $i . </li>";
            }

            $arr = array(
                "foo" => "bar",
                "bar" => "foo",
            );

            echo json_encode($arr);

        ?>
    </ul>
</body>

</html>