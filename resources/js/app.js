import anime from 'animejs/lib/anime.es.js';

var elements;
var count = 0;
var contador = 1;
window.addEventListener('resize', function(){
    //if(!isMobile())
        elementsPos();
})
window.addEventListener('scroll', function(){
    var Elcontainer = document.getElementById('element_'+contador);
    var el = document.getElementById('el_'+count);
    if(window.scrollY > (getElementYPosition(el) - 300) && count < elements.length)
    {
        animeEl(document.getElementById('el_'+count))
    };

    if( window.scrollY >= (getElementYPosition(Elcontainer) - 500) && document.querySelectorAll('.element').length >= contador)
    {
        fadeIn(document.getElementById('element_'+contador));
    }
})
document.addEventListener("DOMContentLoaded", function(){
    if(!isMobile())
        elementsPos();
});
function elementsPos(){
    var hScreen = window.innerHeight; 
    var wScreen = window.innerWidth;
    if(!isMobile()){
        elements = [
            {
                "image": 'mexeripa01.png',
                "top":50,
                "left":280,
                "width": 515,
                "height": 488,
                'pos': 'right'
            },
            {
                "image": 'mel01.png',
                "top":1000,
                "left":0,
                "width": 540,
                "height": 440,
                'pos': 'left'
            },
            {
                "image": 'beer_transparent_03.png',
                "top":800,
                "left":100,
                "width": 200,
                "height": 200,
                'pos': 'right'
            },
            {
                "image": 'beer_transparent.png',
                "top":1680,
                "left":-150,
                "width": 320,
                "height": 320,
                'pos': 'left'
            },
            {
                "image": 'dark-choc.png',
                "top":1900,
                "left":500,
                "width": 478,
                "height": 304,
                'pos': 'right'
            },
            {
                "image": 'batata.png',
                "top":2410,
                "left":200,
                "width": 301,
                "height": 380,
                "pos": "right",
            },
            {
                "image": 'beer-side.png',
                "top":3160,
                "left":-200,
                "width": 514,
                "height": 458,
                "pos": "left",
            },
            {
                "image": 'abridor.png',
                "top":3600,
                "left":280,
                "width": 243,
                "height": 297,
                "pos": "right"
            }
        ];
    }else{
        elements = [
            {
                "image": 'mexeripa01_mobile.png',
                "top":50,
                "left":280,
                "width": 132,
                "height": 133,
                'pos': 'right'
            },
            {
                "image": 'mel01_mobile.png',
                "top":1000,
                "left":0,
                "width": 140,
                "height": 114,
                'pos': 'left'
            },
            // {
            //     "image": 'beer_transparent_03.png',
            //     "top":800,
            //     "left":100,
            //     "width": 200,
            //     "height": 200,
            //     'pos': 'right'
            // },
            // {
            //     "image": 'beer_transparent.png',
            //     "top":1680,
            //     "left":-150,
            //     "width": 320,
            //     "height": 320,
            //     'pos': 'left'
            // },
            // {
            //     "image": 'dark-choc.png',
            //     "top":1900,
            //     "left":500,
            //     "width": 478,
            //     "height": 304,
            //     'pos': 'right'
            // },
            // {
            //     "image": 'batata.png',
            //     "top":2410,
            //     "left":200,
            //     "width": 301,
            //     "height": 380,
            //     "pos": "right",
            // },
            // {
            //     "image": 'beer-side.png',
            //     "top":3160,
            //     "left":-200,
            //     "width": 514,
            //     "height": 458,
            //     "pos": "left",
            // },
            // {
            //     "image": 'abridor.png',
            //     "top":3600,
            //     "left":280,
            //     "width": 243,
            //     "height": 297,
            //     "pos": "right"
            // }
        ];
    }
    
    for (let i = 0; i < elements.length; i++) {
        let el = document.createElement('div');
        el.className = 'elements'
        el.id = 'el_'+i;
        document.getElementById('body').appendChild(el);
        document.getElementById('el_'+i).style.opacity = 0;
        document.getElementById('el_'+i).style.position = "absolute";
        document.getElementById('el_'+i).style.backgroundImage = "url(/storage/assets/img/" + elements[i].image + ")"; 
        document.getElementById('el_'+i).style.top = elements[i].top + hScreen + 'px';
        document.getElementById('el_'+i).style.left = elements[i].pos == 'right' ? wScreen + 'px' : -elements[i].width  +'px';
        document.getElementById('el_'+i).style.width = elements[i].width + 'px';
        document.getElementById('el_'+i).style.height = elements[i].height + 'px';
    }
}
function animeEl(el){
    var move = elements[count].pos == 'right' ? window.innerWidth - elements[count].left : elements[count].left;
    anime({
        targets: el,
        left: move,
        duration: 2000,
        scale: [0, 1],
        opacity: 1,
        easing: 'spring(1, 80, 10, 0)',
    });
    if(count < elements.length )
    count = count <= elements.length ? count+=1 : count;
}
function fadeIn(el){
    anime({
        targets: el,
        duration: 100,
        scale: [0, 1],
        opacity: [0 , 1],
        easing: 'spring(1, 80, 10, 0)',
    });
    contador = contador <= document.querySelectorAll('.element').length ? contador += 1 : document.querySelectorAll('.element').length;
}
function getElementYPosition(element) {
    if(element != null)
    {
        const rect = element.getBoundingClientRect();
        const yPosition = rect.top + window.scrollY; // or `window.pageYOffset`
        return yPosition;
    }
}
function isMobile() {
    const regex = /Mobi|Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;
    return regex.test(navigator.userAgent);
}

