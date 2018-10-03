$.post('cart.php',{
        id:12,
        name:'Iphone X'
    },
    function(response){
        // console.log(typeof response)
        res = JSON.parse(response)
        console.log(res) //{id: "12", name: "Iphone X"}
        console.log(res.id) //12
})
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