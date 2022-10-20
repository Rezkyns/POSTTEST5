//menu
// alert('Ini benar Anda');
var tombolmenu = $(".tombol-menu");
var menu = $("nav .menu ul");

function gelap(){
    var x = document.body;
    x.classList.toggle("dark")
}



var a = document.getElementById("a");
var b = document.getElementById("b");

a.addEventListener("click", gelap);
// b.addEventListener("click", terang);



function klikmenu(){
    tombolmenu.click(function(){
        menu.toggle(); 
    });
    menu.click(function(){
        menu.toggle();
    })
}

$(document).ready(function() {
    var width = $(window).width();
    if(width < 990) {
        klikmenu();
    }
})


//cek lebar

$(window).resize(function(){
    var width = $(window).width();
    if(width > 989){
        menu.css("display","block");
    }else{
        menu.css("display","none")
    }
    klikmenu();
})

// efek skrol
$(document).ready(function(){
    var scroll_pos = 0;
    $(document).scroll(function (){
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 0){
            $("nav").addClass("putih");
        }else{
            $("nav").removeClass("putih");
        }
    })
})

var element = document.body;

const button = document.getElementById('btn-info');
button.addEventListener("click", function showInfo(){
    const x = document.getElementById('info');
    if (x.style.display == 'none'){
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
});

const aboutme = document.getElementById('aboutme');
aboutme.style.color = 'red';

const clas = document.getElementById('contact');
contact.style.color = 'red'

