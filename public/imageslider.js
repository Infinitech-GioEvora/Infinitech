let imageitem = document.querySelectorAll('.imageslider .imageitem');
let imageslider = document.querySelector('.imageslider');
let active = 3;
let autoSlideInterval = 3000; // Interval for auto-sliding (in milliseconds)
let autoSlideTimer;

let firstClone = imageitem[0].cloneNode(true);
let lastClone = imageitem[imageitem.length - 1].cloneNode(true);

imageslider.appendChild(firstClone);
imageslider.insertBefore(lastClone, imageitem[0]);

imageitem = document.querySelectorAll('.imageslider .imageitem');

function loadShow() {
    imageitem.forEach(item => {
        item.style.transform = 'none';
        item.style.zIndex = -1;
        item.style.filter = 'blur(5px)';
        item.style.opacity = 0.6;
    });

    imageitem[active].style.zIndex = 1;
    imageitem[active].style.filter = 'none';
    imageitem[active].style.opacity = 1;

    let stt = 0;
    for (let i = active + 1; i < imageitem.length; i++) {
        stt++;
        imageitem[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
        imageitem[i].style.zIndex = -stt;
        imageitem[i].style.opacity = stt > 2 ? 0 : 0.6;
    }

    stt = 0;
    for (let i = active - 1; i >= 0; i--) {
        stt++;
        imageitem[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
        imageitem[i].style.zIndex = -stt;
        imageitem[i].style.opacity = stt > 2 ? 0 : 0.6;
    }

    if (active === imageitem.length - 1) { 
        setTimeout(() => {
            active = 1; 
            imageslider.style.transition = 'none';
            loadShow();
        }, 50); 
    }

    if (active === 0) { 
        setTimeout(() => {
            active = imageitem.length - 2; 
            imageslider.style.transition = 'none';
            loadShow();
        }, 500);
    }
}

function startAutoSlide() {
    autoSlideTimer = setInterval(() => {
        nextt.onclick();
    }, autoSlideInterval);
}

function stopAutoSlide() {
    clearInterval(autoSlideTimer);
}

loadShow();
startAutoSlide();

let nextt = document.getElementById('nextt');
let prevv = document.getElementById('prevv');

nextt.onclick = function() {
    imageslider.style.transition = 'transform 0.5s ease'; 
    active++;
    loadShow();
    stopAutoSlide(); 
    startAutoSlide(); 
}

prevv.onclick = function() {
    imageslider.style.transition = 'transform 0.5s ease';
    active--;
    loadShow();
    stopAutoSlide(); 
    startAutoSlide(); 
}
