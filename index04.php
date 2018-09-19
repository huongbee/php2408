<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.banco{
    width:400px;
    margin:0 auto;
    border:1px solid #000;
    height:400px
}
.white{
    background-color:#fff
}
.black{
    background-color:#000
}
.white, .black{
    width:50px;
    height:50px;
    float:left
}
</style>
<body>
    <div class='banco'>
        <?php 
        for($i=1; $i<=8; $i++){
            for($j=1;$j<=8; $j++){
                if(($i+$j)%2==0){
                    echo '<div class="white"></div>';
                }
                else echo '<div class="black"></div>';
            }
        }
        ?>
        
        <!--  -->

    </div>
</body>
</html>