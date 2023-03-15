document.addEventListener('DOMContentLoaded', ()=>{
    const elementos = document.querySelectorAll('.carousel')
    M.Carousel.init(elementos, {
        duration: 150,
        dist: -25,
        shift: 50,
        numVisible:5,
        indicators: true,
        noWrap: false
    });
});