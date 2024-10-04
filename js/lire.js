const title = document.getElementById('title');
const image = document.getElementById('image');
const num = document.getElementById('num');
const changeBtn = document.getElementById('changeBtn');

const data = [
    { title: 'Mimus Harcelé 1', src: 'média/bd1.jpg', alt: 'Image de la BD N°1', num: 'BD n°1', cont : 'Nous suivons l’histoire de Mimuss, un personnage non genré qui représente chacun d’entre nous. Mimuss est passionné(e) d’informatique et de réseaux sociaux. Un jour, il/elle devient la cible de cyberharcèlement. Des messages haineux, des menaces et des rumeurs commencent à envahir sa vie virtuelle, mais aussi sa vie réelle. Mimuss se sent isolé(e), impuissant(e) et effrayé(e). Cependant, tout change lorsque Mimuss découvre un centre d’aide spécialisé dans la lutte contre le cyberharcèlement. Il/elle y rencontre des professionnels bienveillants : psychologues, avocats et experts en sécurité numérique. Ils l’écoutent sans jugement, lui offrent des conseils et l’encouragent à briser le silence. Mimuss réalise que parler de son expérience est la première étape vers la résolution de ce cauchemar.' },
    { title: 'Mimus Harcelé 2', src: 'média/bd2.jpg', alt: 'Image de la BD N°2', num: 'BD n°2', cont : ' LA suite est a venir' },
    { title: 'Mimus Harcelé 3', src: 'média/bd2.jpg', alt: 'Image de la BD N°3', num: 'BD n°3', cont : '' },
];

// Variable pour suivre l'indice actuel
let currentIndex = 0;

fleche.addEventListener('click', () => {
    // Augmentez l'indice ou réinitialisez-le s'il dépasse la taille des données
    currentIndex = (currentIndex + 1) % data.length;

    title.textContent = data[currentIndex].title;
    image.src = data[currentIndex].src;
    image.alt = data[currentIndex].alt;
    num.textContent = data[currentIndex].num;
});
