var images = [
    '../img/slider1.png', 
    '../img/slider4.png', 
    '../img/slider3.png',
	'../img/slider4.png',
	'../img/slider4.png',
];
var num = 0;
function next() {
    var slider = document.getElementById('sliderimg');
    num++;
    if(num >= images.length) {
        num = 0;
    }
    slider.src = images[num];
}

function prev() {
    var slider = document.getElementById('sliderimg');
    num--;
    if(num < 0) {
        num = images.length-1;
    }
    slider.src = images[num];
}
window.onload = function(){
    var slider=document.getElementById('sliderimg')
    t=setInterval(next,1000);
}