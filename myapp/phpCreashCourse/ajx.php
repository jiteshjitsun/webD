<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 


<input type="text" name="" id="num1">
<a href="javascript:void(0)" onclick="click_here()">click_here</a>

<script>

    // dusre page se data le rahe h 
    function click_here(){
        let num1 = jQuery('#num1').val()
    
        jQuery.ajax({
            url:'demo.php',
            type: 'post',
            data: 'num1='+num1,
            success: function(result){
                alert(result);
            }
        })
    }
</script>