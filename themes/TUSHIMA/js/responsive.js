$('document').ready(function(){
    
    if (document.getElementById && document.getElementsByTagName) {
        var aImgs = document.getElementById("layout").getElementsByTagName("img");
        imgSizer.collate(aImgs);
    }
    
    $(window).setBreakpoints({
        distinct: true, 
        breakpoints: [
        1,
        519,
        759,
        959
        ] 
    });     

    $(window).bind('enterBreakpoint1',function() {
        });

    $("<select id='selectMenu' />").appendTo(".sf-contener");

    $(".sf-menu li a").each(function() {
        var el = $(this);
        var prefix = '';
        
        if(el.parent().parent().parent().parent().attr('id') == 'header'){          
        }else{
            prefix = '- ';
        }
        
        $("<option />", {
            "value"   : el.attr("href"),
            "text"    : prefix + el.text()
        }).appendTo("#selectMenu");
    });    
    
    $("#selectMenu").change(function() {
        window.location = $(this).find("option:selected").val();
    });
        
    
    $("#block_cart_close").click(
        function() {
            
            $('#shopping_cart a').css('border-radius', '3px');
            $("#header #cart_block").stop(true, true).slideUp(450);
            return false;
        }
        );
        
    $("#search_block_top .button").click(
        function() {
            if($('#search_block_top #search_query_top').css('display') == 'none'){
                $('#currencies_block_top').hide();
                $('#languages_block_top').hide();
                $('#search_block_top #search_query_top').show();
                $("#search_block_top").addClass('absoluteSearch');
                return false;
            }
            return true;
        }
        );
              
    
    
});



