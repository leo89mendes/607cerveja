import anime from 'animejs/lib/anime.es.js';

var elements;
var Elcontainer;
var contador = 1;
if(isMobile()){
    elements = {
        'element_1':
        {
            'el_0':{
                "image": 'mexeripa01_mobile.png',
                "top":-100,
                "left":100,
                "width": 258,
                "height": 244,
                'pos': 'right'
            },
            'el_1':{
                "image": 'beer_transparent_mobile.png',
                "top":480,
                "left":-75,
                "width": 150,
                "height": 160,
                'pos': 'left'
            }
            
        },
        'element_2':
        {
            'el_2':{
                "image": 'mel01_mobile.png',
                "top":-195,
                "left":0,
                "width": 253,
                "height": 206,
                'pos': 'left'
            },
            'el_3':{
                "image": 'beer_transparent_03.png',
                "top":455,
                "left":50,
                "width": 200,
                "height": 200,
                'pos': 'right'
            },
        },
        'element_3':
        {
            'el_4':{
                "image": 'dark-choc_mobile.png',
                "top":-130,
                "left":100,
                "width": 242,
                "height": 137,
                'pos': 'left'
            },
            'el_5':{
                "image": 'batata_mobile.png',
                "top":610,
                "left":80,
                "width": 198,
                "height": 250,
                'pos': 'right'
            },
        },
        'element_4':
        {
        },
        'element_5':
        {
            'el_6':{
                "image": 'beer-side_mobile.png',
                "top":-140,
                "left":-100,
                "width": 178,
                "height": 133,
                "pos": "left",
            },
            'el_7':{
                "image": 'abridor_mobile.png',
                "top":480,
                "left":150,
                "width": 150,
                "height": 184,
                "pos": "right"
            },
        },
        'element_6':
        {
        },
    }
}else{
    elements = {
        'element_1':
        {
            'el_0':{
                "image": 'mexeripa01.png',
                "top":0,
                "left":180,
                "width": 488,
                "height": 440,
                'pos': 'right'
            },
            'el_1':{
                "image": 'beer_transparent.png',
                "top":600,
                "left":130,
                "width": 320,
                "height": 320,
                'pos': 'right'
            }
            
        },
        'element_2':
        {
            'el_2':{
                "image": 'mel01.png',
                "top":-150,
                "left":0,
                "width": 540,
                "height": 440,
                'pos': 'left'
            },
            'el_3':{
                "image": 'beer_transparent_03.png',
                "top":550,
                "left":-100,
                "width": 200,
                "height": 200,
                'pos': 'left'
            },
        },
        'element_3':
        {
            'el_4':{
                "image": 'dark-choc.png',
                "top":-70,
                "left":500,
                "width": 409,
                "height": 225,
                'pos': 'right'
            },
            'el_5':{
                "image": 'batata.png',
                "top":400,
                "left":150,
                "width": 301,
                "height": 380,
                'pos': 'right'
            },
        },
        'element_4':
        {
        },
        'element_5':
        {
            'el_6':{
                "image": 'beer-side.png',
                "top":0,
                "left":-500,
                "width": 514,
                "height": 322,
                "pos": "left",
            },
            'el_7':{
                "image": 'abridor.png',
                "top":300,
                "left":600,
                "width": 243,
                "height": 297,
                "pos": "right"
            },
        },
        'element_6':
        {
        },
    }
}

window.addEventListener('scroll', function(){   
    var winH = window.innerHeight; 
    if(document.getElementById('element_'+contador) != undefined){
        Elcontainer = document.getElementById('element_'+contador);
        Elcontainer.style.opacity = 0;
        var _height = contador > 0 ? getElementYPosition(Elcontainer) : window.innerHeight;
        if( window.scrollY >= (_height - (winH / 3)) && document.querySelectorAll('.element').length >= contador)
        {
            fadeIn(Elcontainer);
            elementsPos(Elcontainer);
        }
    }
})
function elementsPos(el){
    Object.keys(elements[el.id]).forEach(key => {
        var ele = document.createElement('div');
        el.appendChild(ele);
        ele.id = key;
        ele.className = 'elements';
        ele.style.position = "absolute";
        ele.style.backgroundImage = "url(/storage/assets/img/" + elements[el.id][key].image + ")"; 
        ele.style.backgroundRepeat = "no-repeat";
        ele.style.width = elements[el.id][key].width + 'px';
        ele.style.height = elements[el.id][key].height + 'px';
        ele.style.top = elements[el.id][key].top  + 'px';
        if(elements[el.id][key].pos == 'right')
            ele.style.left = (window.innerWidth - elements[el.id][key].left) + 'px';
        else
            ele.style.left = elements[el.id][key].left + 'px';
        
        animeEl(ele, elements[el.id][key].pos)
    });
    
}
function animeEl(el, pos){
    var move = pos == "left"  ? -1000 : (window.innerWidth*2);
    var motions = anime({
        targets: el,
        left: [move, el.style.left],
        duration: 1000,
        scale: [0, 1],
        opacity: 1,
        easing: 'spring(1, 70, 40, 0)',
    });
}
function fadeIn(el){
    anime({
        targets: el,
        duration: 100,
        scale: [0, 1],
        opacity: 1,
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

