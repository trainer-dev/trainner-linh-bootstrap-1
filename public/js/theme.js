$('#recipeCarousel').carousel({
    interval: 5000
});

$('.carousel .items ').each(function(){
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children().clone().appendTo($(this));

    for (var i=0;i<3;i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children().clone().appendTo($(this));
    }


});

$('.carousel .items ').each(function() {
    // $(this).children().eq(2).css("border-left", "1px solid #e3e3e3")
    // $(this).children().eq(4).css("border-left", "1px solid #e3e3e3")
});