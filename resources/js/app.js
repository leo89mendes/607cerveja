import anime from 'animejs/lib/anime.es.js';

let elements;
var count = 0;
var contador = 1;
var active = true;
elements = [
    {
        "image": 'mexeripa01.png',
        "top":-80,
        "left":280,
        "width": 515,
        "height": 488,
        'pos': 'right'
    },
    {
        "image": 'beer_transparent_03.png',
        "top":650,
        "left":100,
        "width": 200,
        "height": 200,
        'pos': 'right'
    },
    {
        "image": 'mel01.png',
        "top":850,
        "left":0,
        "width": 540,
        "height": 440,
        'pos': 'left'
    },
    {
        "image": 'beer_transparent.png',
        "top":1500,
        "left":-150,
        "width": 320,
        "height": 320,
        'pos': 'left'
    },
    {
        "image": 'dark-choc.png',
        "top":1705,
        "left":500,
        "width": 478,
        "height": 304,
        'pos': 'right'
    },
    {
        "image": 'batata.png',
        "top":2210,
        "left":200,
        "width": 301,
        "height": 380,
        "pos": "right",
    },
    {
        "image": 'beer-side.png',
        "top":2930,
        "left":-200,
        "width": 514,
        "height": 458,
        "pos": "left",
    },
    {
        "image": 'abridor.png',
        "top":3420,
        "left":280,
        "width": 243,
        "height": 297,
        "pos": "right"
    }
];
window.addEventListener('resize', function(){
    positionsEl();
})
var firstEl = document.getElementById('element_1').offsetHeight;
window.addEventListener('scroll', function(){
    if(elements[count] != undefined)
    {
        var elH = (firstEl + elements[count].top) - 200;
        var _top = firstEl + elements[count].top;
        if(window.scrollY > elH  && count < elements.length && active)
        {
            elementsPos(document.createElement('div'), window.screen.width, _top)
        };
    }
    if(document.getElementById('element_'+contador) != undefined){
        var Elcontainer = document.getElementById('element_'+contador);
        var _height = contador > 0 ? (Math.floor(Elcontainer.getBoundingClientRect().top) + window.scrollY) - 200 : window.screen.height - 200;

        if( window.scrollY >= _height && document.querySelectorAll('.element').length >= contador && active)
        {
            fadeIn(document.getElementById('element_'+contador));
        }
    }
})
function elementsPos(el, _w, _h){
    el.id = 'el_'+count;
    el.className = 'elements';
    document.getElementById('body').appendChild(el);
    el.style.opacity = 0;
    el.style.position = "absolute";
    el.style.backgroundImage = "url(/storage/assets/img/" + elements[count].image + ")"; 
    el.style.backgroundRepeat = "no-repeat";
    el.style.top = _h  + 'px';
    el.style.left = elements[count].pos == 'right' ? _w + 'px' : -elements[count].width  +'px';
    el.style.width = elements[count].width + 'px';
    el.style.height = elements[count].height + 'px';
    animeEl(el)
}
function positionsEl(){
    var hScreen = window.screen.availHeight;
    var wScreen = window.screen.availWidth;
    for (let i = 0; i < elements.length; i++) {
        document.getElementById('el_'+i).style.opacity = 1;
        document.getElementById('el_'+i).style.top = elements[i].top + hScreen + 'px';
        document.getElementById('el_'+i).style.left = elements[i].pos == 'right' ? wScreen + 'px' : -elements[i].width  +'px';
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
    count+=1
}
function fadeIn(el){
    anime({
        targets: el,
        duration: 100,
        scale: [0, 1],
        opacity: [0 , 1],
        easing: 'spring(1, 80, 10, 0)',
    });
    contador+=1
}
function getElementYPosition(element) {
    if(element != null)
    {
        const rect = element.getBoundingClientRect();
        const yPosition = Math.round(rect.top) + window.scrollY; // or `window.pageYOffset`
        return yPosition;
    }
}
function isMobile() {
    const regex = /Mobi|Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;
    return regex.test(navigator.userAgent);
}

