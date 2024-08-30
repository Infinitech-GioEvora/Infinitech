// let items = document.querySelectorAll('.slider .item');
// let active = 3;

// function loadShow() {
//     items.forEach(item => {
//         item.style.transform = 'none';
//         item.style.zIndex = -1;
//         item.style.filter = 'blur(5px)';
//         item.style.opacity = 0.6;
//     });

//     // items[active].style.transform = `none`;
//     items[active].style.zIndex = 1;
//     items[active].style.filter = 'none';
//     items[active].style.opacity = 1;
    
//     let stt = 0;
//     for (let i = active + 1; i < items.length; i++) {
//         stt++;
//         items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
//         items[i].style.zIndex = -stt;
//         items[i].style.opacity = stt > 2 ? 0 : 0.6;
//     }
    
//     stt = 0;
//     for (let i = active - 1; i >= 0; i--) {
//         stt++;
//         items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
//         items[i].style.zIndex = -stt;
//         items[i].style.opacity = stt > 2 ? 0 : 0.6;
//     }
    
//     if (active === items.length - 1) { 
//         for (let i = 0; i < active; i++) {
//             stt++;
//             items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
//             items[i].style.zIndex = -stt;
//             items[i].style.opacity = stt > 2 ? 0 : 0.6;
//         }
//     }
    
//     if (active === 0) { 
//         for (let i = items.length - 1; i > active; i--) {
//             stt++;
//             items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
//             items[i].style.zIndex = -stt;
//             items[i].style.opacity = stt > 2 ? 0 : 0.6;
//         }
//     }
// }

// loadShow();

// let next = document.getElementById('next');
// let prev = document.getElementById('prev');

// next.onclick = function() {
//     active = (active + 1) % items.length;
//     loadShow();
// }

// prev.onclick = function() {
//     active = (active - 1 + items.length) % items.length;
//     loadShow();
// }

let items = document.querySelectorAll('.slider .item');
let slider = document.querySelector('.slider');
let active = 3;

// Clone the first and last items
let firstClone = items[0].cloneNode(true);
let lastClone = items[items.length - 1].cloneNode(true);

// Add clones to the slider
slider.appendChild(firstClone);
slider.insertBefore(lastClone, items[0]);

// Re-select items after adding clones
items = document.querySelectorAll('.slider .item');

function loadShow() {
    items.forEach(item => {
        item.style.transform = 'none';
        item.style.zIndex = -1;
        item.style.filter = 'blur(5px)';
        item.style.opacity = 0.6;
    });

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

    // Handle seamless transition at the boundaries
    if (active === items.length - 1) { 
        setTimeout(() => {
            active = 1; // Skip to the real first item
            slider.style.transition = 'none';
            loadShow();
        }, 50); // Adjust the timing to match your transition duration
    }

    if (active === 0) { 
        setTimeout(() => {
            active = items.length - 2; // Skip to the real last item
            slider.style.transition = 'none';
            loadShow();
        }, 500);
    }
}

loadShow();

let next = document.getElementById('next');
let prev = document.getElementById('prev');

next.onclick = function() {
    slider.style.transition = 'transform 0.5s ease'; // Adjust the timing to match your needs
    active++;
    loadShow();
}

prev.onclick = function() {
    slider.style.transition = 'transform 0.5s ease';
    active--;
    loadShow();
}
