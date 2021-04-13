$(function(){
    $("#myevent_form").submit(function(e){//when submit is click
        e.preventDefault();//dont reload page
        var values = $("#myevent_form").serialize();//collect form info
        var errors = "";
        var ID = $("#ID").val();
        var ans = $("#url").val();
        console.log(ID + url);

        if(ID === null ||ID === "" || ID.length > 256 || ID.length <1){
            errors+= "ID must be valid \n";
        }
        if(ans === null || ans === "" || ans.length > 256 || ans.length <1){
            errors+="Your update must be longer than 200 characters and more than 0 \n";
        }
        
        console.log(errors);

        if(errors.length<1){
            $.ajax({//ajax calls php
                type: "POST",
                url: "update.php",
                data: values,
                success: function(){
                    window.location = "myevents.php"
                },
                error: function(){
                    alert("Something Went Wrong");
                }
            });
        }else{
            alert(errors);
        }
        
    });
});