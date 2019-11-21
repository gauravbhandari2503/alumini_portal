$(document).ready(function () {
    display(); 
    });



        function display(){
        
        var readrecords = "display";
        jQuery.ajax({
            url:"registrationdata.php",
            type:"POST",
            data:{display:display},
            success:function(data,status){
                $('#records_content').html(data);
            },

        });
        }    


    