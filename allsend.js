$("#comment1").on('submit',function(e){


    var form_data = $(this).serialize();
    $.ajax({
        type:"POST",
        url:"add_comment.php",
        data:form_data,
        success:function(){
            
            $('#comment1')[0].reset();
            alert('comment sent');
            
        }
    
    })
    e.preventDefault();
    }); 
    
    $("#sendmessage").on('submit',function(e){
    
       
    var form_data = $(this).serialize();
    $.ajax({
        type:"POST",
        url:"quickmessage.php",
        data:form_data,
        success:function(){
    
            // if(data.error != ''){
                alert('message sent');
                 $('#sendmessage')[0].reset();
            //      $('#comment_message').html(data.error);
            // }
        }
        
    })
    e.preventDefault();
    }); 