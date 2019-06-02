<?php
//for($x=0;$x<=10;$x++){
//    echo $x;
//   echo"<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <style>
        .box {
            background: blue;
           width: 200px;
            height: 200px;
            float: left;
            margin: 2px
}
 </style>
</head>
<body>
<?php for ($i=0;$i<5;$i++) { ?>
   <div class='box'></div>
<?php } ?>

</body>
</html>