const lien = document.getElementById('mon-lien');
const connexion = document.getElementById('connexion');

mon-lien.addEventListener('click', function (event) {
    event.preventDefault();
    connexion.style.display = 'none';
});