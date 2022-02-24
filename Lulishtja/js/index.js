const box_container = document.querySelector('.box-container');

const generateRandomInteger = (min, max) => {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

let html = '';
if (flowers.length > 0) {
    flowers.splice(generateRandomInteger(0, flowers.length - 3), 3).forEach(flower => {
        html += flowerItem(flower);
    });
} else {
    html += '<h1 style="font-size: 6rem; color: #333; margin: auto;">Sorry, no flowers!</h1>'
}

box_container.innerHTML = html;