<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
require "sanpham.php";
// include_once "arrSP.php";
// print_r($arrSP);
?>
<body>
    <div class="content">
        <?php 
        foreach($arrSP as $sp):
        ?>
            <div class="item">
                <div class="image">
                    <img src="../images/<?php echo $sp['image']?>">
                </div>
                <div class="info">
                    <div class="name"><?=$sp['name']?></div>
                    <p>Nhắn tin 5.000đ xác nhận mua hàng</p>
                    <p class="promotion">Khuyến mãi</p> 
                    <p>Nhận sản phẩm trong 48h</p> 
                    <p>Không áp dụng chuyển hàng</p>
                </div>
                <div class="name"><?=$sp['name']?></div>
                <div class="price"><?=number_format($sp['price'])?> vnd</div>
                <div class="add-to-cart">Thêm vào giỏ hàng</div>
            </div>
        <?php
        endforeach
        ?>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
    
        $('.add-to-cart').click(function(){
            // $.post('cart.php',{
            //         id:12,
            //         name:'Iphone X'
            //     },
            //     function(response){
            //         // console.log(typeof response)
            //         res = JSON.parse(response)
            //         console.log(res) //{id: "12", name: "Iphone X"}
            //         console.log(res.id) //12
            // })
            $.ajax({
                url:'cart.php',
                type:'POST',
                data:{
                    id:5,
                    name:'Iphone 8'
                },
                success:function(response){
                    res = JSON.parse(response)
                    console.log(res) 
                    console.log(res.id) 
                },
                error:function(err){
                    console.log(err)
                }
            })
        })
        
    
    })
</script>
</html>