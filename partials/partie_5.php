<!-- =================================================================== -->
    <!-- PARTIE 5 : MODULES, BIBLIOTHÈQUES ET L'ÉCOSYSTÈME PYTHON -->
    <!-- =================================================================== -->
    <h2 id="page-top" class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-16">Partie 5 : Modules, Bibliothèques et l'Écosystème Python</h2>

    <section id="bibliotheques" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 16 : Utiliser des Bibliothèques (Standard & Externe)</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Personne ne réinvente la roue en programmation. Python est livré avec une vaste "boîte à outils" appelée la **Bibliothèque Standard**, et vous donne accès à des centaines de milliers d'outils supplémentaires créés par la communauté. Apprendre à les utiliser est la compétence la plus importante pour devenir efficace en Python.</p>

        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="text-xl font-semibold mb-2">Le mot-clé `import`</h4>
                <p class="text-gray-700 mb-4">Pour utiliser les fonctions d'une bibliothèque (aussi appelée module ou paquet), vous devez d'abord l'importer dans votre script. Il y a plusieurs façons de le faire :</p>
                <div class="code-block"><pre><code><span class="py-comment"># 1. Importer le module entier (le plus courant)</span>
<span class="py-keyword">import</span> <span class="py-namespace">math</span>
<span class="py-function">print</span>(<span class="py-namespace">math</span>.<span class="py-function">sqrt</span>(<span class="py-number">16</span>)) <span class="py-comment"># On utilise le nom du module comme préfixe</span>

<span class="py-comment"># 2. Importer une fonction spécifique d'un module</span>
<span class="py-keyword">from</span> <span class="py-namespace">random</span> <span class="py-keyword">import</span> <span class="py-function">randint</span>
<span class="py-function">print</span>(<span class="py-function">randint</span>(<span class="py-number">1</span>, <span class="py-number">10</span>)) <span class="py-comment"># La fonction est directement utilisable</span>

<span class="py-comment"># 3. Importer un module avec un alias (un surnom plus court)</span>
<span class="py-keyword">import</span> <span class="py-namespace">datetime</span> <span class="py-keyword">as</span> <span class="py-variable">dt</span>
<span class="py-function">print</span>(<span class="py-variable">dt</span>.<span class="py-variable">date</span>.<span class="py-function">today</span>())</code></pre></div>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg mt-8"><h4 class="text-2xl font-bold mb-2 text-gray-700">La Bibliothèque Standard ("Batteries incluses")</h4></div>
            <p class="text-gray-700">Voici quelques-uns des modules les plus utiles inclus par défaut avec Python.</p>
            
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Le module `math`</h4><p class="text-gray-700 mb-4">Fournit l'accès aux fonctions mathématiques de base.</p><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">math</span>
<span class="py-function">print</span>(<span class="py-string">f"Racine carrée de 81 : {<span class="py-namespace">math</span>.<span class="py-function">sqrt</span>(<span class="py-number">81</span>)}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Valeur de Pi : {<span class="py-namespace">math</span>.<span class="py-variable">pi</span>}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Arrondi supérieur de 2.3 : {<span class="py-namespace">math</span>.<span class="py-function">ceil</span>(<span class="py-number">2.3</span>)}"</span>)</code></pre></div></div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Le module `random`</h4><p class="text-gray-700 mb-4">Permet de générer des nombres pseudo-aléatoires, de faire des choix au hasard, etc.</p><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">random</span>
<span class="py-function">print</span>(<span class="py-string">f"Nombre entier aléatoire entre 1 et 100 : {<span class="py-namespace">random</span>.<span class="py-function">randint</span>(<span class="py-number">1</span>, <span class="py-number">100</span>)}"</span>)
<span class="py-variable">joueurs</span> <span class="py-operator">=</span> [<span class="py-string">'Alice'</span>, <span class="py-string">'Bob'</span>, <span class="py-string">'Charlie'</span>]
<span class="py-function">print</span>(<span class="py-string">f"Le gagnant est : {<span class="py-namespace">random</span>.<span class="py-function">choice</span>(<span class="py-variable">joueurs</span>)}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Le module `datetime`</h4><p class="text-gray-700 mb-4">Pour manipuler les dates et les heures.</p><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">datetime</span> <span class="py-keyword">as</span> <span class="py-variable">dt</span>
<span class="py-variable">maintenant</span> <span class="py-operator">=</span> <span class="py-variable">dt</span>.<span class="py-variable">datetime</span>.<span class="py-function">now</span>()
<span class="py-function">print</span>(<span class="py-string">f"Date et heure actuelles : {<span class="py-variable">maintenant</span>}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Format personnalisé : {<span class="py-variable">maintenant</span>.<span class="py-function">strftime</span>(<span class="py-string">'%d/%m/%Y %H:%M'</span>)}"</span>)</code></pre></div></div>

            <div class="bg-gray-100 p-4 rounded-lg mt-8"><h4 class="text-2xl font-bold mb-2 text-gray-700">Installer des Bibliothèques Externes avec `pip`</h4></div>
            <p class="text-gray-700 mb-4">L'immense majorité des bibliothèques Python se trouvent sur un dépôt public appelé <a href="https://pypi.org/" target="_blank" class="text-blue-600 hover:underline">PyPI (Python Package Index)</a>. On les installe avec un outil en ligne de commande appelé <strong>pip</strong>.</p>
            <div class="bg-gray-800 text-white p-4 rounded-lg font-mono text-sm">
                <p class="mb-2"><span class="text-green-400">$</span> pip install nom_de_la_bibliotheque</p>
                <p class="mb-2"><span class="text-green-400">$</span> pip uninstall nom_de_la_bibliotheque</p>
                <p><span class="text-green-400">$</span> pip list <span class="text-gray-400"># Pour voir ce qui est déjà installé</span></p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm mt-8">
                <h4 class="text-xl font-semibold mb-2">Présentation de quelques bibliothèques incontournables</h4>
                <ul class="list-disc list-inside space-y-2 mt-4 text-gray-700">
                    <li><strong>Requests</strong> : Pour faire des requêtes HTTP et interagir avec des sites web ou des APIs. C'est le standard de facto.</li>
                    <li><strong>Pillow (PIL Fork)</strong> : Pour manipuler des images (redimensionner, appliquer des filtres, etc.).</li>
                    <li><strong>NumPy</strong> : La base du calcul scientifique en Python. Fournit des tableaux multi-dimensionnels ultra-performants.</li>
                    <li><strong>Pandas</strong> : Pour l'analyse et la manipulation de données. Structure les données dans des "DataFrames", des tableaux intelligents et faciles à utiliser.</li>
                    <li><strong>Matplotlib</strong> : Pour créer des graphiques et des visualisations de données.</li>
                </ul>
            </div>
        </div>

        <div id="exercices-bibliotheques" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Bibliothèques</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Le jeu du "Plus ou Moins" (amélioré)</h4><p class="text-gray-700 mb-4">Reprenez le jeu du "Plus ou Moins", mais cette fois, faites en sorte que le nombre secret soit un nombre aléatoire entre 1 et 100, choisi par l'ordinateur à chaque nouvelle partie. Utilisez le module `random`.</p><button onclick="toggleSolution('sol_lib_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_lib_1" class="solution"><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">random</span>
<span class="py-variable">nombre_secret</span> <span class="py-operator">=</span> <span class="py-namespace">random</span>.<span class="py-function">randint</span>(<span class="py-number">1</span>, <span class="py-number">100</span>)
<span class="py-comment"># ... le reste de la logique du jeu ...</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Calculer l'aire d'un cercle</h4><p class="text-gray-700 mb-4">Écrivez une fonction qui demande à l'utilisateur le rayon d'un cercle, et qui calcule et affiche son aire. Utilisez la constante `pi` du module `math` pour le calcul (Aire = π * rayon²).</p><button onclick="toggleSolution('sol_lib_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_lib_2" class="solution"><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">math</span>
<span class="py-keyword">def</span> <span class="py-function">aire_cercle</span>():
    <span class="py-keyword">try</span>:
        <span class="py-variable">rayon</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez le rayon du cercle : "</span>))
        <span class="py-variable">aire</span> <span class="py-operator">=</span> <span class="py-namespace">math</span>.<span class="py-variable">pi</span> <span class="py-operator">*</span> (<span class="py-variable">rayon</span> <span class="py-operator">**</span> <span class="py-number">2</span>)
        <span class="py-function">print</span>(<span class="py-string">f"L'aire du cercle est : {<span class="py-variable">aire</span>:.2f}"</span>)
    <span class="py-keyword">except</span> <span class="py-exception">ValueError</span>:
        <span class="py-function">print</span>(<span class="py-string">"Veuillez entrer un nombre."</span>)
<span class="py-function">aire_cercle</span>()</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Compte à rebours</h4><p class="text-gray-700 mb-4">Écrivez un programme qui affiche le nombre de jours restants jusqu'à Noël prochain. Utilisez le module `datetime`.</p><button onclick="toggleSolution('sol_lib_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_lib_3" class="solution"><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">datetime</span> <span class="py-keyword">as</span> <span class="py-variable">dt</span>
<span class="py-variable">aujourdhui</span> <span class="py-operator">=</span> <span class="py-variable">dt</span>.<span class="py-variable">date</span>.<span class="py-function">today</span>()
<span class="py-variable">noel</span> <span class="py-operator">=</span> <span class="py-variable">dt</span>.<span class="py-variable">date</span>(<span class="py-variable">aujourdhui</span>.<span class="py-variable">year</span>, <span class="py-number">12</span>, <span class="py-number">25</span>)
<span class="py-keyword">if</span> <span class="py-variable">noel</span> <span class="py-operator">&lt;</span> <span class="py-variable">aujourdhui</span>: <span class="py-comment"># Si Noël est déjà passé cette année</span>
    <span class="py-variable">noel</span> <span class="py-operator">=</span> <span class="py-variable">dt</span>.<span class="py-variable">date</span>(<span class="py-variable">aujourdhui</span>.<span class="py-variable">year</span> <span class="py-operator">+</span> <span class="py-number">1</span>, <span class="py-number">12</span>, <span class="py-number">25</span>)
<span class="py-variable">difference</span> <span class="py-operator">=</span> <span class="py-variable">noel</span> <span class="py-operator">-</span> <span class="py-variable">aujourdhui</span>
<span class="py-function">print</span>(<span class="py-string">f"Il reste {<span class="py-variable">difference</span>.<span class="py-variable">days</span>} jours avant Noël."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 4 : Installer et utiliser `requests`</h4><p class="text-gray-700 mb-4">Ouvrez un terminal, installez la bibliothèque `requests` (`pip install requests`). Ensuite, écrivez un script qui récupère et affiche les informations d'un utilisateur aléatoire depuis l'API de test <a href="https://jsonplaceholder.typicode.com/users/1" target="_blank" class="text-blue-600 hover:underline">JSONPlaceholder</a>.</p><button onclick="toggleSolution('sol_lib_4')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_lib_4" class="solution"><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">requests</span>
<span class="py-keyword">import</span> <span class="py-namespace">random</span>

<span class="py-variable">user_id</span> <span class="py-operator">=</span> <span class="py-namespace">random</span>.<span class="py-function">randint</span>(<span class="py-number">1</span>, <span class="py-number">10</span>)
<span class="py-variable">url</span> <span class="py-operator">=</span> <span class="py-string">f"https://jsonplaceholder.typicode.com/users/{<span class="py-variable">user_id</span>}"</span>

<span class="py-keyword">try</span>:
    <span class="py-variable">reponse</span> <span class="py-operator">=</span> <span class="py-namespace">requests</span>.<span class="py-function">get</span>(<span class="py-variable">url</span>)
    <span class="py-variable">reponse</span>.<span class="py-function">raise_for_status</span>() <span class="py-comment"># Lève une exception si la requête a échoué</span>
    <span class="py-variable">user_data</span> <span class="py-operator">=</span> <span class="py-variable">reponse</span>.<span class="py-function">json</span>() <span class="py-comment"># Convertit la réponse JSON en dictionnaire</span>

    <span class="py-function">print</span>(<span class="py-string">f"Nom : {<span class="py-variable">user_data</span>[<span class="py-string">'name'</span>]}"</span>)
    <span class="py-function">print</span>(<span class="py-string">f"Email : {<span class="py-variable">user_data</span>[<span class="py-string">'email'</span>]}"</span>)
    <span class="py-function">print</span>(<span class="py-string">f"Ville : {<span class="py-variable">user_data</span>[<span class="py-string">'address'</span>][<span class="py-string">'city'</span>]}"</span>)
<span class="py-keyword">except</span> <span class="py-namespace">requests</span>.<span class="py-exception">exceptions</span>.<span class="py-variable">RequestException</span> <span class="py-keyword">as</span> <span class="py-variable">e</span>:
    <span class="py-function">print</span>(<span class="py-string">f"Erreur de réseau : {<span class="py-variable">e</span>}"</span>)</code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>