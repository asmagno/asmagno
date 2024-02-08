
document.addEventListener('DOMContentLoaded', function() {
    // Aquí va tu código JavaScript
 
const boxes = document.querySelectorAll('.box');
const circles = document.querySelectorAll('.circle');

let currentIndex = 0;

function showBox(index) {
  boxes.forEach((box, i) => {
    if (i === index) {
      box.classList.add('visible');
    } else {
      box.classList.remove('visible');
    }
  });
}

function updateCircles(index) {
  circles.forEach((circle, i) => {
    if (i === index) {
      circle.classList.add('active');
    } else {
      circle.classList.remove('active');
    }
  });
}

function moveToNext() {
  currentIndex = (currentIndex + 1) % boxes.length;
  showBox(currentIndex);
  updateCircles(currentIndex);
}

function moveToPrevious() {
  currentIndex = (currentIndex - 1 + boxes.length) % boxes.length;
  showBox(currentIndex);
  updateCircles(currentIndex);
}

// Agrega los listeners a los botones o eventos correspondientes
// Por ejemplo:
// document.getElementById('nextBtn').addEventListener('click', moveToNext);
// document.getElementById('prevBtn').addEventListener('click', moveToPrevious);

const container = document.querySelector('.container');

let touchStartX = 0;
let touchEndX = 0;

function handleTouchStart(event) {
  touchStartX = event.touches[0].clientX;
}

function handleTouchMove(event) {
  touchEndX = event.touches[0].clientX;
}

function handleTouchEnd() {
  const touchDiff = touchStartX - touchEndX;
  const threshold = 50; // Umbral de desplazamiento para considerar como deslizamiento válido

  if (touchDiff > threshold) {
    moveToNext();
  } else if (touchDiff < -threshold) {
    moveToPrevious();
  }
}

container.addEventListener('touchstart', handleTouchStart);
container.addEventListener('touchmove', handleTouchMove);
container.addEventListener('touchend', handleTouchEnd);



})