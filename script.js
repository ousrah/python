// Fonction pour afficher/masquer les solutions
function toggleSolution(id) {
    const solution = document.getElementById(id);
    const button = solution.previousElementSibling;

    // Utiliser une classe pour gérer la visibilité est plus propre
    if (solution.classList.contains('visible')) {
        solution.classList.remove('visible');
        // Réappliquer display:none au cas où la classe serait lente à être traitée
        solution.style.display = 'none'; 
        button.textContent = 'Afficher la solution';
    } else {
        solution.classList.add('visible');
        solution.style.display = 'block'; // Forcer l'affichage
        button.textContent = 'Masquer la solution';
    }
}

// Fonction pour ajouter les boutons "Copier"
function addCopyButtons() {
    document.querySelectorAll('.code-block').forEach(block => {
        // Éviter d'ajouter plusieurs fois le bouton
        if (block.querySelector('.copy-btn')) {
            return;
        }

        const button = document.createElement('button');
        button.className = 'copy-btn';
        button.textContent = 'Copier';
        block.appendChild(button);

        button.addEventListener('click', () => {
            const code = block.querySelector('pre code').innerText;
            navigator.clipboard.writeText(code).then(() => {
                button.textContent = 'Copié !';
                setTimeout(() => {
                    button.textContent = 'Copier';
                }, 2000);
            });
        });
    });
}

// Lancer l'ajout des boutons une fois que la page est chargée
document.addEventListener('DOMContentLoaded', addCopyButtons);