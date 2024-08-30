let items = document.querySelectorAll('.slider .item');
let active = 3;

function loadShow() {
    items.forEach(item => {
        item.style.transform = 'none';
        item.style.zIndex = -1;
        item.style.filter = 'blur(5px)';
        item.style.opacity = 0.6;
    });

    // items[active].style.transform = `none`;
    items[active].style.zIndex = 1;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;
    
    let stt = 0;
    for (let i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
        items[i].style.zIndex = -stt;
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    
    stt = 0;
    for (let i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
        items[i].style.zIndex = -stt;
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    
    if (active === items.length - 1) { 
        for (let i = 0; i < active; i++) {
            stt++;
            items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
    }
    
    if (active === 0) { 
        for (let i = items.length - 1; i > active; i--) {
            stt++;
            items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
    }
}

loadShow();

let next = document.getElementById('next');
let prev = document.getElementById('prev');

next.onclick = function() {
    active = (active + 1) % items.length;
    loadShow();
}

prev.onclick = function() {
    active = (active - 1 + items.length) % items.length;
    loadShow();
}
