$(document).ready(function(){
	$("a[rel=external]").attr('target','_blank');
});

$(document).ready(function(){
    $('head').append('<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />')
});

$(function(){
    // Set starting slide to 1
    var startSlide = 1;
    // Get slide number if it exists
    if (window.location.hash) {
        startSlide = window.location.hash.replace('#','');
    }
    // Initialize Slides
    $('#slide-home').slides({
        preload: true,
        preloadImage: 'img/loading.gif',
        generatePagination: true,
        play: 5000,
        pause: 2500,
        hoverPause: true,
        // Get the starting slide
        start: startSlide
    });
});

$(document).ready(function() {
    $(".sub").hide();
    var menus = $('#navMenu li');
    menus.on('mouseenter keyup mouseleave keydown',function(e) {
        clearTimeout($.data(this, 'timer'));
        if(e.type == 'mouseenter' || e.type == 'keyup'){
            if($(this).find('ul').hasClass('sub')){
                $(this).find('a').eq(0).addClass('current-menu');
            }
        $.data(this, 'timer', setTimeout($.proxy(function() {
            $('.sub', this).stop(true, true).fadeIn('slow');
        }, this), 100));
            
        } else if(e.type == 'mouseleave'){
            $(this).find('a').eq(0).removeClass('current-menu');
            $('.sub', this).stop(true, true).fadeOut();

        } else if(e.type == 'keydown'){
            var totalLi = $(this).find('.sub li');
            var qtLi = totalLi.length-1;
            $(this).find('a').eq(0).removeClass('current-menu');
            $(this).find('.sub li').eq(qtLi).focusout(function(){
                $('.sub').stop(true, true).fadeOut('slow');
            });
        }
    });
});

// navegacao entre abas
$(document).ready(function() {
    $(".tab_content").hide(); 
        if(location.hash != "") {
        var target = "#"+location.hash.split("#")[1]; // need semicolon at end of line
        $(location.hash).show(); //Show first tab content
        $("ul.tabs li:has(a[href="+target+"])").addClass("active").show();
        rotateTabs=false;
        } else {
        $("ul.tabs li:eq(0)").addClass("active").show(); //Activate first tab
        $(".tab_content:eq(0)").show(); //Show first tab content
    }

    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active"); 
        $(this).addClass("active"); 
        $(".tab_content").hide(); 
        var activeTab = $(this).find("a").attr("href"); 
        $(activeTab).fadeIn();
        return false
    });
});

// Link box-pdr
$(document).ready(function(){                  
    $(".lancamentos, .produtos li, .lista-produtos li").click(function(){
        window.location=$(this).find("a").attr("href");return false;
    });
});

$(".produtos li:nth-child(4n), .lista-produtos li:nth-child(4n)").addClass("sem-mrg-right");

// translate
function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'pt', includedLanguages: 'en,es,pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}

// funcao muda imagem no produtos detalhe
function mostraFotos(obj){
    base = document.getElementById("fotos").getElementsByTagName("div")
    for(i=0;i<base.length;i++){
        base[i].style.display="none";
    }
    document.getElementById(obj).style.display = "block";
}

function mostraItemSub(obj,group){
    base = document.getElementById(group).getElementsByTagName("div")
    for(i=0;i<base.length;i++){
        base[i].style.display="none";
    }
    document.getElementById(obj).style.display = "block";
}

function abreLink(obj,classe,group){
    base = document.getElementById(group).getElementsByTagName("div")
    for(i=0;i<base.length;i++){
        if (base[i].className == classe){
        base[i].style.display="none";
        }
    }
    document.getElementById(obj).style.display = "block";
}

/*****************************************************/

function mudaImg(objDestino,novaImg,texto,numeracao){
    document.getElementById(objDestino).src = novaImg;
    //document.getElementById("ultimosRealizadosTxt").innerHTML = texto;
    atual = numeracao;
    
    
}

// select da pag distribuidores
$('#selecione').change(function(){
        $('.box-padrao').hide();
        $('#' + $(this).val()).show();
 });