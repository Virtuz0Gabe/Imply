const turnOn = document.getElementById ( 'turnOn' );
const turnOff = document.getElementById ( 'turnOff' );
const lamp = document.getElementById ( 'lamp' );
const fix = document.getElementById('fix');

function isLampBroken () {
    return lamp.src.indexOf ( 'quebrada' ) > -1
}

function lampOn () {
    if ( !isLampBroken () ) {
        lamp.src = './img/ligada.jpg';
        document.body.style.backgroundColor = 'white';
        
    }
}

function lampOff () {
    if ( !isLampBroken () ) {
        lamp.src = './img/desligada.png';
        document.body.style.backgroundColor = 'black';
    }
}

function lampBroken () {
    lamp.src = './img/quebrada.png';
    document.body.style.backgroundColor = 'black';
}

function lampFixed (){
    if ( isLampBroken () ) {
        document.body.style.backgroundColor = 'white';
        lamp.src = './img/ligada.jpg';
    }
}

fix.addEventListener('click', lampFixed)

turnOn.addEventListener ( 'click', lampOn );
turnOff.addEventListener ( 'click', lampOff );
lamp.addEventListener ( 'mouseover', lampOn );
lamp.addEventListener ( 'mouseleave', lampOff );
lamp.addEventListener ( 'dblclick', lampBroken );