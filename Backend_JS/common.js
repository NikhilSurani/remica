
$(document).ready(function(){

    



    $(document.body).on("click", ".drop_down_nav li > a ", function(e){       
        var temp = $(this);
        temp.parent().children().removeClass('active');
        temp.addClass("active");
        // console.log(temp);
        // alert("hi");

    });


});

window.onload = function(){   
    var location = window.location.href;
    // this.alert();
    var find = location.split("/");
    location = find[find.length - 1];
    
    $("#"+location.split(".")[0]).addClass("active");
    
}

function active_tab(e){
    // alert(e);
    var li = $(e).parent();
    var ul = $(e).parent().parent();
    
    ul.children().removeClass('active');
    li.addClass("active");

}