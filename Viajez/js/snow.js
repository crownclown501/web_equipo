const snowContainer = document.body;

for (let i = 0; i < 100; i++) {
    const snow = document.createElement('div');
    snow.classList.add('snow');
    snow.style.left = `${Math.random() * 100}vw`; // Posición aleatoria
    snow.style.animationDuration = `${Math.random() * 5 + 5}s`; 
    snowContainer.appendChild(snow);
}
