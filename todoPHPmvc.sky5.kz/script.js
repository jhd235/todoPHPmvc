function sortTable(columnName){
    
    var sort = $("#sort").val();
    $.ajax({
        url:'#',
        type:'post',
        data:{columnName:columnName,sort:sort},
        success: function(response){
       
            $("#starter-template").remove();
            //$("#empTable").remove();
            //$("#starter-template").remove();
            //$("main").append();
            $("<div id='starter-template'>").appendTo("#outer");
            $("<table class='table table-striped custab' width='100%' id='empTable' border='1' cellpadding='10'>").appendTo("#starter-template");
            
            $("#empTable").append(response);
            if(sort == "asc"){
                $("#sort").val("desc");
            }else{
                $("#sort").val("asc");
            }
        
                        
        }
      
    });
}


