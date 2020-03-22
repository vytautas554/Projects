$("ul").on("click", "li", function(){
    $(this).toggleClass("completed");
});

//Paspaudus x issitrina
$("ul").on("click", "span", function(event){
    $(this).parent().fadeOut(500, function(){
        $(this).remove();
    });
    event.stopPropagation();
})

$("input[type='text']").keypress(function(event){
    if(event.which === 13){
        var todoText = $(this).val();
        $(this).val("");
        $("ul").append("<li><span><i class='large material-icons'>delete</i></span> "+ todoText +"</li>");
    }
    
});

$(".large").click(function(){
    $("input[type='text']").fadeToggle();
});