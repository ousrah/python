<!-- =================================================================== -->
<!-- PARTIE 1 : L'ENVIRONNEMENT ET LES BASES -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 1 : L'Environnement et les Bases</h2>

<section id="introduction" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 1 : Introduction à Python</h3>
    <p class="text-xl text-gray-600 mb-8 leading-relaxed">Bienvenue dans l'univers de Python ! Ce langage est réputé pour sa simplicité, sa lisibilité et sa puissance. Il est utilisé partout : développement web, science des données, intelligence artificielle, automatisation... Ce cours vous donnera les clés pour maîtriser ses fondations.</p>
    
    <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
            <h4 class="text-xl font-bold mb-2">Pourquoi Python ?</h4>
            <ul class="list-disc ml-6 text-gray-700 space-y-1">
                <li><strong>Syntaxe simple et claire :</strong> Très proche de l'anglais, Python permet d'écrire du code concis et facile à relire, ce qui est idéal pour les débutants.</li>
                <li><strong>Polyvalent :</strong> Un seul langage pour de multiples applications (sites web, jeux, scripts, analyse de données...).</li>
                <li><strong>Communauté immense :</strong> Vous trouverez toujours de l'aide sur des forums comme Stack Overflow et des milliers de bibliothèques (des boîtes à outils de code) pour presque tous les besoins.</li>
            </ul>
        </div>

         <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500">
            <h4 class="text-xl font-bold mb-2">Installation des Outils Essentiels</h4>
            <p class="text-gray-700 mb-4">Pour commencer, vous avez besoin de deux choses :</p>
            <ol class="list-decimal ml-6 text-gray-700 space-y-2">
                <li><strong>L'interpréteur Python :</strong> C'est le "moteur" qui exécute votre code.
                    <ul class="list-disc ml-6 mt-1">
                        <li>Allez sur <a href="https://www.python.org/downloads/" target="_blank" class="text-blue-600 hover:underline">python.org/downloads/</a>.</li>
                        <li>Téléchargez la dernière version stable.</li>
                        <li><strong>Très important (Windows) :</strong> Cochez la case <strong>"Add Python to PATH"</strong> lors de l'installation.</li>
                    </ul>
                </li>
                <li><strong>Un éditeur de code :</strong> Un logiciel pour écrire votre code. <a href="https://code.visualstudio.com/" target="_blank" class="text-blue-600 hover:underline">Visual Studio Code</a> est un excellent choix.</li>
            </ol>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-2">Vérifier son Installation</h4>
            <p class="text-gray-600 mb-4">Ouvrez un terminal (PowerShell sur Windows) et tapez la commande suivante :</p>
            <div class="code-block"><pre><code>python --version</code></pre></div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-orange-500">
            <h4 class="text-xl font-bold mb-2">PIP, l'App Store de Python</h4>
            <p class="text-gray-600 mb-4">Python est livré avec un outil appelé <strong>`pip`</strong> qui vous permet de télécharger et d'installer très facilement des "packages" (bibliothèques de code réutilisable).</p>
            <div class="code-block"><pre><code><span class="py-comment"># Syntaxe pour installer le package 'numpy' (pour les maths)</span>
pip install numpy</code></pre></div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<section id="jupyter" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 2 : Prise en main de Jupyter Notebook</h3>
    <p class="text-gray-700 mb-8">Jupyter Notebook est un outil interactif formidable pour apprendre et expérimenter. Il vous permet de mélanger du code exécutable, du texte, et des visualisations dans un seul document.</p>

    <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-yellow-500">
            <h4 class="text-xl font-bold mb-2">Installation et Lancement</h4>
            <p class="text-gray-600 mb-4">Ouvrez un terminal et tapez ces deux commandes, l'une après l'autre :</p>
            <div class="code-block"><pre><code><span class="py-comment"># 1. Installer Jupyter</span>
pip install jupyter

<span class="py-comment"># 2. Le lancer (après vous être placé dans votre dossier de travail)</span>
jupyter notebook</code></pre></div>
              <p class="text-gray-600 my-4">Certains systèmes préfèrent cette syntaxe pour le lancement :</p>
            <div class="code-block"><pre><code><span class="py-comment"># Alternative pour lancer notebook</span>
python -m notebook</code></pre></div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<section id="variables-types" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 3 : Variables, Types et Commentaires</h3>
    <p class="text-gray-700 mb-8">Une variable est une "étiquette" que l'on pose sur une "boîte" en mémoire pour stocker une information. Les commentaires, eux, sont des notes pour les humains que Python ignore.</p>
    <div class="space-y-8">
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-2">Déclaration et Types de Données</h4>
            <p class="text-gray-600 mb-4">En Python, le type d'une variable est deviné automatiquement. Par convention, on nomme les variables en <strong>snake_case</strong>.</p>
            <div class="code-block"><pre><code><span class="py-comment"># Python détecte les types automatiquement</span>
<span class="py-variable">nom_stagiaire</span> <span class="py-operator">=</span> <span class="py-string">"Ali"</span>        <span class="py-comment"># String (str)</span>
<span class="py-variable">age</span> <span class="py-operator">=</span> <span class="py-number">21</span>               <span class="py-comment"># Integer (int)</span>
<span class="py-variable">moyenne</span> <span class="py-operator">=</span> <span class="py-number">15.5</span>           <span class="py-comment"># Float (float)</span>
<span class="py-variable">est_present</span> <span class="py-operator">=</span> <span class="py-keyword">True</span>         <span class="py-comment"># Boolean (bool)</span></code></pre></div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<!-- =================================================================== -->
<!-- NOUVELLE SECTION AJOUTÉE -->
<!-- =================================================================== -->
<section id="aide-memoire" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 5 : Aide-Mémoire des Opérateurs et Fonctions</h3>
    <p class="text-gray-700 mb-8">Voici quelques tableaux récapitulatifs à garder sous la main. Ils résument les types de données de base, les opérateurs et quelques fonctions très utiles.</p>
    
    <div class="space-y-12">

        <!-- 1. Tableau des types de variables -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-4">Tableau des Types Standards</h4>
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-3 text-left">Type</th>
                            <th class="border p-3 text-left">Nom Complet</th>
                            <th class="border p-3 text-left">Description</th>
                            <th class="border p-3 text-left">Exemple</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-3 font-mono">int</td>
                            <td class="border p-3">Integer</td>
                            <td class="border p-3">Nombre entier, positif ou négatif, sans décimale.</td>
                            <td class="border p-3 font-mono">x = 100</td>
                        </tr>
                        <tr>
                            <td class="border p-3 font-mono">float</td>
                            <td class="border p-3">Float</td>
                            <td class="border p-3">Nombre à virgule flottante (décimal).</td>
                            <td class="border p-3 font-mono">y = 3.14</td>
                        </tr>
                        <tr>
                            <td class="border p-3 font-mono">str</td>
                            <td class="border p-3">String</td>
                            <td class="border p-3">Séquence de caractères, entourée de guillemets.</td>
                            <td class="border p-3 font-mono">nom = "Python"</td>
                        </tr>
                        <tr>
                            <td class="border p-3 font-mono">bool</td>
                            <td class="border p-3">Boolean</td>
                            <td class="border p-3">Valeur de vérité, ne peut être que Vrai (True) ou Faux (False).</td>
                            <td class="border p-3 font-mono">est_valide = True</td>
                        </tr>
                        <tr>
                            <td class="border p-3 font-mono">list</td>
                            <td class="border p-3">List</td>
                            <td class="border p-3">Collection ordonnée et modifiable d'éléments.</td>
                            <td class="border p-3 font-mono">notes = [12, 18, 15]</td>
                        </tr>
                         <tr>
                            <td class="border p-3 font-mono">tuple</td>
                            <td class="border p-3">Tuple</td>
                            <td class="border p-3">Collection ordonnée mais non modifiable (immuable).</td>
                            <td class="border p-3 font-mono">coordonnees = (10, 20)</td>
                        </tr>
                         <tr>
                            <td class="border p-3 font-mono">dict</td>
                            <td class="border p-3">Dictionary</td>
                            <td class="border p-3">Collection non ordonnée de paires clé-valeur.</td>
                            <td class="border p-3 font-mono">personne = {"nom": "Ali", "age": 25}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 2. Tableau des opérateurs -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-4">Tableau des Opérateurs Courants</h4>
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-3 text-left">Catégorie</th>
                            <th class="border p-3 text-left">Opérateur</th>
                            <th class="border p-3 text-left">Description</th>
                            <th class="border p-3 text-left">Exemple</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Opérateurs Arithmétiques -->
                        <tr><td rowspan="7" class="border p-3 font-semibold align-middle">Arithmétiques</td><td class="border p-3 font-mono">+</td><td class="border p-3">Addition</td><td class="border p-3 font-mono">5 + 2 # 7</td></tr>
                        <tr><td class="border p-3 font-mono">-</td><td class="border p-3">Soustraction</td><td class="border p-3 font-mono">5 - 2 # 3</td></tr>
                        <tr><td class="border p-3 font-mono">*</td><td class="border p-3">Multiplication</td><td class="border p-3 font-mono">5 * 2 # 10</td></tr>
                        <tr><td class="border p-3 font-mono">/</td><td class="border p-3">Division (résultat flottant)</td><td class="border p-3 font-mono">5 / 2 # 2.5</td></tr>
                        <tr><td class="border p-3 font-mono">//</td><td class="border p-3">Division entière (quotient)</td><td class="border p-3 font-mono">5 // 2 # 2</td></tr>
                        <tr><td class="border p-3 font-mono">%</td><td class="border p-3">Modulo (reste de la division)</td><td class="border p-3 font-mono">5 % 2 # 1</td></tr>
                        <tr><td class="border p-3 font-mono">**</td><td class="border p-3">Puissance</td><td class="border p-3 font-mono">5 ** 2 # 25</td></tr>
                        <!-- Opérateurs de Comparaison -->
                        <tr><td rowspan="6" class="border p-3 font-semibold align-middle">Comparaison</td><td class="border p-3 font-mono">==</td><td class="border p-3">Égal à</td><td class="border p-3 font-mono">a == b</td></tr>
                        <tr><td class="border p-3 font-mono">!=</td><td class="border p-3">Différent de</td><td class="border p-3 font-mono">a != b</td></tr>
                        <tr><td class="border p-3 font-mono">></td><td class="border p-3">Strictement supérieur à</td><td class="border p-3 font-mono">a > b</td></tr>
                        <tr><td class="border p-3 font-mono"><</td><td class="border p-3">Strictement inférieur à</td><td class="border p-3 font-mono">a < b</td></tr>
                        <tr><td class="border p-3 font-mono">>=</td><td class="border p-3">Supérieur ou égal à</td><td class="border p-3 font-mono">a >= b</td></tr>
                        <tr><td class="border p-3 font-mono"><=</td><td class="border p-3">Inférieur ou égal à</td><td class="border p-3 font-mono">a <= b</td></tr>
                        <!-- Opérateurs Logiques -->
                        <tr><td rowspan="3" class="border p-3 font-semibold align-middle">Logiques</td><td class="border p-3 font-mono">and</td><td class="border p-3">ET (vrai si les deux sont vrais)</td><td class="border p-3 font-mono">x > 0 and y > 0</td></tr>
                        <tr><td class="border p-3 font-mono">or</td><td class="border p-3">OU (vrai si au moins un est vrai)</td><td class="border p-3 font-mono">age < 18 or est_etudiant</td></tr>
                        <tr><td class="border p-3 font-mono">not</td><td class="border p-3">NON (inverse la valeur)</td><td class="border p-3 font-mono">not est_bloque</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- 3. Tableau des fonctions standards -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-4">Tableau des Fonctions Standards Utiles</h4>
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-3 text-left">Fonction</th>
                            <th class="border p-3 text-left">Description</th>
                            <th class="border p-3 text-left">Exemple</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td colspan="3" class="p-2 bg-gray-200 font-semibold">Fonctions générales</td></tr>
                        <tr><td class="border p-3 font-mono">print()</td><td class="border p-3">Affiche une valeur dans la console.</td><td class="border p-3 font-mono">print("Bonjour")</td></tr>
                        <tr><td class="border p-3 font-mono">input()</td><td class="border p-3">Lit une chaîne de caractères depuis le clavier.</td><td class="border p-3 font-mono">nom = input("Votre nom ?")</td></tr>
                        <tr><td class="border p-3 font-mono">len()</td><td class="border p-3">Retourne la longueur (nombre d'éléments) d'un objet.</td><td class="border p-3 font-mono">len("abc") # 3</td></tr>
                        <tr><td class="border p-3 font-mono">type()</td><td class="border p-3">Retourne le type d'un objet.</td><td class="border p-3 font-mono">type(10) # &lt;class 'int'></td></tr>
                        
                        <tr><td colspan="3" class="p-2 bg-gray-200 font-semibold">Conversion de type</td></tr>
                        <tr><td class="border p-3 font-mono">int()</td><td class="border p-3">Convertit une valeur en entier.</td><td class="border p-3 font-mono">int("25") # 25</td></tr>
                        <tr><td class="border p-3 font-mono">float()</td><td class="border p-3">Convertit une valeur en nombre à virgule.</td><td class="border p-3 font-mono">float("3.14") # 3.14</td></tr>
                        <tr><td class="border p-3 font-mono">str()</td><td class="border p-3">Convertit une valeur en chaîne de caractères.</td><td class="border p-3 font-mono">str(123) # "123"</td></tr>
                        
                        <tr><td colspan="3" class="p-2 bg-gray-200 font-semibold">Fonctions sur les nombres</td></tr>
                        <tr><td class="border p-3 font-mono">abs()</td><td class="border p-3">Retourne la valeur absolue d'un nombre.</td><td class="border p-3 font-mono">abs(-5) # 5</td></tr>
                        <tr><td class="border p-3 font-mono">round()</td><td class="border p-3">Arrondit un nombre à n décimales.</td><td class="border p-3 font-mono">round(3.14159, 2) # 3.14</td></tr>
                        
                        <tr><td colspan="3" class="p-2 bg-gray-200 font-semibold">Méthodes sur les chaînes de caractères</td></tr>
                        <tr><td class="border p-3 font-mono">.upper()</td><td class="border p-3">Met la chaîne en majuscules.</td><td class="border p-3 font-mono">"bonjour".upper() # "BONJOUR"</td></tr>
                        <tr><td class="border p-3 font-mono">.lower()</td><td class="border p-3">Met la chaîne en minuscules.</td><td class="border p-3 font-mono">"Salut".lower() # "salut"</td></tr>
                        <tr><td class="border p-3 font-mono">.strip()</td><td class="border p-3">Supprime les espaces au début et à la fin.</td><td class="border p-3 font-mono">"  ok  ".strip() # "ok"</td></tr>
                         <tr><td class="border p-3 font-mono">.replace()</td><td class="border p-3">Remplace une sous-chaîne par une autre.</td><td class="border p-3 font-mono">"chat".replace("a", "o") # "chot"</td></tr>
                        <tr><td class="border p-3 font-mono">.split()</td><td class="border p-3">Découpe une chaîne en une liste.</td><td class="border p-3 font-mono">"a-b-c".split("-") # ['a', 'b', 'c']</td></tr>

                        <tr><td colspan="3" class="p-2 bg-gray-200 font-semibold">Fonctions sur les dates (avec module)</td></tr>
                        <tr><td class="border p-3 font-mono">datetime.now()</td><td class="border p-3">Donne la date et l'heure actuelles (nécessite <code>import datetime</code>).</td><td class="border p-3 font-mono">datetime.datetime.now()</td></tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>
<!-- =================================================================== -->
<!-- FIN DE LA SECTION AJOUTÉE -->
<!-- =================================================================== -->


<section id="entrees-sorties" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 4 : Affichage et Lecture de Données</h3>
    <p class="text-gray-700 mb-8">Un programme interagit avec le monde extérieur : il affiche des résultats (sortie) et demande des informations à l'utilisateur (entrée).</p>
    
    <div class="space-y-8">
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-2">Maîtriser <code>print()</code> : Séparateurs et Terminaisons</h4>
            <div class="code-block"><pre><code><span class="py-comment"># Utiliser 'sep' pour joindre des éléments avec un séparateur personnalisé</span>
<span class="py-function">print</span>(<span class="py-number">24</span>, <span class="py-number">10</span>, <span class="py-number">2025</span>, <span class="py-function">sep</span><span class="py-operator">=</span><span class="py-string">"/"</span>)
<span class="py-comment">> Affiche: 24/10/2025</span>

<span class="py-comment"># Utiliser 'end' pour contrôler ce qui se passe à la fin de la ligne</span>
<span class="py-function">print</span>(<span class="py-string">"Progression : "</span>, <span class="py-function">end</span><span class="py-operator">=</span><span class="py-string">""</span>) <span class="py-comment"># Ne pas aller à la ligne</span>
<span class="py-function">print</span>(<span class="py-string">"100%"</span>)
<span class="py-comment">> Affiche: Progression : 100%</span></code></pre></div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-2">Les Caractères d'Échappement</h4>
            <p class="text-gray-600 mb-4">Dans les chaînes de caractères, le backslash <code>\</code> permet d'insérer des caractères spéciaux.</p>
            <ul class="list-disc ml-6 text-gray-700 space-y-2 mb-4">
                <li><code>\n</code> : pour un retour à la ligne.</li>
                <li><code>\t</code> : pour une tabulation (un grand espace).</li>
                <li><code>\'</code> ou <code>\"</code> : pour afficher un guillemet à l'intérieur d'une chaîne.</li>
            </ul>
            <div class="code-block"><pre><code><span class="py-comment"># Utiliser \n pour sauter des lignes</span>
<span class="py-function">print</span>(<span class="py-string">"Titre du Rapport\n"</span> <span class="py-operator">+</span> <span class="py-string">"-"</span><span class="py-operator">*</span><span class="py-number">20</span>)

<span class="py-comment"># Utiliser \t pour aligner du texte en colonnes</span>
<span class="py-function">print</span>(<span class="py-string">"Produit\tQuantité\tPrix"</span>)
<span class="py-function">print</span>(<span class="py-string">"Clavier\t10\t\t250 DH"</span>)

<span class="py-comment"># Afficher une citation</span>
<span class="py-function">print</span>(<span class="py-string">'L\'important c\'est de participer.'</span>)</code></pre></div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-2">Lire les entrées avec <code>input()</code></h4>
            <p class="text-red-700 bg-red-100 p-3 rounded-md mb-4"><strong>Rappel crucial :</strong> <code>input()</code> retourne <strong>toujours</strong> une chaîne (`str`). La conversion est presque toujours nécessaire pour les nombres !</p>
            <div class="code-block"><pre><code><span class="py-comment"># On peut combiner la lecture et la conversion en une seule ligne</span>
<span class="py-variable">annee_naissance</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Quelle est votre année de naissance ? "</span>))
<span class="py-variable">age</span> <span class="py-operator">=</span> <span class="py-number">2025</span> <span class="py-operator">-</span> <span class="py-variable">annee_naissance</span>
<span class="py-function">print</span>(<span class="py-string">f"Vous aurez environ {<span class="py-variable">age</span>} ans en 2025."</span>)</code></pre></div>
        </div>
    </div>
</section>

<section id="exercices-pratiques" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Série d'Exercices : Les Fondamentaux</h3>
    <p class="text-gray-700 mb-8">Mettez en pratique ce que vous venez d'apprendre. Essayez de résoudre chaque exercice avant de regarder la solution.</p>
    
    <div class="space-y-6">

        <!-- Exercice 1 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Salutation Personnalisée</h4>
            <p class="text-gray-700 mb-4">Demandez le prénom et le nom de l'utilisateur, puis affichez un message de bienvenue sous la forme "Bonjour [Prénom] [Nom] !".</p>
            <button hidden onclick="toggleSolution('solution_ex1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex1" class="solution"><div class="code-block"><pre><code><span class="py-variable">prenom</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Quel est votre prénom ? "</span>)
<span class="py-variable">nom</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Quel est votre nom ? "</span>)
<span class="py-function">print</span>(<span class="py-string">f"Bonjour {<span class="py-variable">prenom</span>} {<span class="py-variable">nom</span>} !"</span>)</code></pre></div></div>
        </div>

        <!-- Exercice 2 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Calcul de la Surface d'un Rectangle</h4>
            <p class="text-gray-700 mb-4">Demandez la longueur et la largeur d'un rectangle à l'utilisateur (qui peuvent être des nombres à virgule), puis calculez et affichez sa surface.</p>
            <button hidden onclick="toggleSolution('solution_ex2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex2" class="solution"><div class="code-block"><pre><code><span class="py-variable">longueur</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez la longueur du rectangle : "</span>))
<span class="py-variable">largeur</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez la largeur du rectangle : "</span>))
<span class="py-variable">surface</span> <span class="py-operator">=</span> <span class="py-variable">longueur</span> <span class="py-operator">*</span> <span class="py-variable">largeur</span>
<span class="py-function">print</span>(<span class="py-string">f"La surface du rectangle est de {<span class="py-variable">surface</span>} unités carrées."</span>)</code></pre></div></div>
        </div>

        <!-- Exercice 3 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Répéteur de Mot</h4>
            <p class="text-gray-700 mb-4">Demandez un mot et un nombre entier. Affichez ensuite le mot répété le nombre de fois demandé.</p>
            <button hidden onclick="toggleSolution('solution_ex3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex3" class="solution"><div class="code-block"><pre><code><span class="py-variable">mot</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez un mot : "</span>)
<span class="py-variable">nombre</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Combien de fois le répéter ? "</span>))
<span class="py-function">print</span>(<span class="py-variable">mot</span> <span class="py-operator">*</span> <span class="py-variable">nombre</span>)</code></pre></div></div>
        </div>

        <!-- Exercice 4 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 4 : Calculateur de Pourboire</h4>
            <p class="text-gray-700 mb-4">Demandez le montant d'une addition et le pourcentage de pourboire souhaité (ex: 15 pour 15%). Calculez le montant du pourboire et le total à payer.</p>
            <button hidden onclick="toggleSolution('solution_ex4')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex4" class="solution"><div class="code-block"><pre><code><span class="py-variable">addition</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Montant de l'addition : "</span>))
<span class="py-variable">pourcentage</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Pourcentage du pourboire (ex: 15) : "</span>))
<span class="py-variable">pourboire</span> <span class="py-operator">=</span> <span class="py-variable">addition</span> <span class="py-operator">*</span> (<span class="py-variable">pourcentage</span> <span class="py-operator">/</span> <span class="py-number">100</span>)
<span class="py-variable">total</span> <span class="py-operator">=</span> <span class="py-variable">addition</span> <span class="py-operator">+</span> <span class="py-variable">pourboire</span>
<span class="py-function">print</span>(<span class="py-string">f"Pourboire : {<span class="py-variable">pourboire</span><span class="py-operator">:.2f</span>} DH"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Total à payer : {<span class="py-variable">total</span><span class="py-operator">:.2f</span>} DH"</span>)</code></pre></div></div>
        </div>

        <!-- Exercice 5 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 5 : Convertisseur de Durée</h4>
            <p class="text-gray-700 mb-4">Demandez un nombre total de minutes, puis convertissez-le en heures et minutes (ex: 130 minutes = 2 heure(s) et 10 minute(s)).</p>
            <button hidden onclick="toggleSolution('solution_ex5')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex5" class="solution"><div class="code-block"><pre><code><span class="py-variable">total_minutes</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez une durée en minutes : "</span>))
<span class="py-variable">heures</span> <span class="py-operator">=</span> <span class="py-variable">total_minutes</span> <span class="py-operator">//</span> <span class="py-number">60</span>  <span class="py-comment"># La division entière // donne le nombre d'heures</span>
<span class="py-variable">minutes</span> <span class="py-operator">=</span> <span class="py-variable">total_minutes</span> <span class="py-operator">%</span> <span class="py-number">60</span>   <span class="py-comment"># Le modulo % donne le reste de la division</span>
<span class="py-function">print</span>(<span class="py-string">f"{<span class="py-variable">total_minutes</span>} minutes = {<span class="py-variable">heures</span>} heure(s) et {<span class="py-variable">minutes</span>} minute(s)."</span>)</code></pre></div></div>
        </div>

        <!-- Exercice 6 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 6 : Reçu Simplifié</h4>
            <p class="text-gray-700 mb-4">Demandez le nom d'un produit, sa quantité et son prix unitaire. Affichez un mini-reçu bien formaté.</p>
            <button hidden onclick="toggleSolution('solution_ex6')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex6" class="solution"><div class="code-block"><pre><code><span class="py-variable">produit</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Nom du produit : "</span>)
<span class="py-variable">quantite</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Quantité achetée : "</span>))
<span class="py-variable">prix_unitaire</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Prix unitaire (DH) : "</span>))
<span class="py-variable">total</span> <span class="py-operator">=</span> <span class="py-variable">quantite</span> <span class="py-operator">*</span> <span class="py-variable">prix_unitaire</span>
<span class="py-function">print</span>(<span class="py-string">"\n--- TICKET DE CAISSE ---"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Produit : \t{<span class="py-variable">produit</span>}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Quantité : \t{<span class="py-variable">quantite</span>}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Total à payer : {<span class="py-variable">total</span><span class="py-operator">:.2f</span>} DH"</span>)</code></pre></div></div>
        </div>
        
        <!-- Exercice 7 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 7 : Permutation de Valeurs</h4>
            <p class="text-gray-700 mb-4">Demandez deux valeurs, `A` et `B`, à l'utilisateur. Affichez-les, puis échangez leurs valeurs (ce qui était dans `A` va dans `B` et vice-versa) et affichez-les de nouveau.</p>
            <button hidden onclick="toggleSolution('solution_ex7')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex7" class="solution"><div class="code-block"><pre><code><span class="py-variable">a</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez la valeur de A : "</span>)
<span class="py-variable">b</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez la valeur de B : "</span>)
<span class="py-function">print</span>(<span class="py-string">f"Avant permutation : A = {<span class="py-variable">a</span>}, B = {<span class="py-variable">b</span>}"</span>)
<span class="py-comment"># Astuce Python pour permuter en une seule ligne !</span>
<span class="py-variable">a</span>, <span class="py-variable">b</span> <span class="py-operator">=</span> <span class="py-variable">b</span>, <span class="py-variable">a</span>
<span class="py-function">print</span>(<span class="py-string">f"Après permutation : A = {<span class="py-variable">a</span>}, B = {<span class="py-variable">b</span>}"</span>)</code></pre></div></div>
        </div>

        <!-- Exercice 8 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 8 : Longueur d'un Nom</h4>
            <p class="text-gray-700 mb-4">Demandez son nom complet à l'utilisateur et dites-lui de combien de caractères il est composé (espaces inclus) en utilisant la fonction `len()`.</p>
            <button hidden onclick="toggleSolution('solution_ex8')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex8" class="solution"><div class="code-block"><pre><code><span class="py-variable">nom_complet</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez votre nom complet : "</span>)
<span class="py-variable">longueur</span> <span class="py-operator">=</span> <span class="py-builtin">len</span>(<span class="py-variable">nom_complet</span>)
<span class="py-function">print</span>(<span class="py-string">f"Votre nom complet contient {<span class="py-variable">longueur</span>} caractères."</span>)</code></pre></div></div>
        </div>

        <!-- Exercice 9 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 9 : Calcul de la Moyenne</h4>
            <p class="text-gray-700 mb-4">Demandez 3 notes à l'utilisateur (maths, français, histoire) et calculez la moyenne de ces trois notes. Affichez le résultat avec une seule décimale.</p>
            <button hidden onclick="toggleSolution('solution_ex9')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex9" class="solution"><div class="code-block"><pre><code><span class="py-function">print</span>(<span class="py-string">"--- Calcul de Moyenne ---"</span>)
<span class="py-variable">note_maths</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Note de Maths : "</span>))
<span class="py-variable">note_fr</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Note de Français : "</span>))
<span class="py-variable">note_hist</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Note d'Histoire : "</span>))
<span class="py-variable">moyenne</span> <span class="py-operator">=</span> (<span class="py-variable">note_maths</span> <span class="py-operator">+</span> <span class="py-variable">note_fr</span> <span class="py-operator">+</span> <span class="py-variable">note_hist</span>) <span class="py-operator">/</span> <span class="py-number">3</span>
<span class="py-function">print</span>(<span class="py-string">f"Votre moyenne générale est de : {<span class="py-variable">moyenne</span><span class="py-operator">:.1f</span>}/20"</span>)</code></pre></div></div>
        </div>

        <!-- Exercice 10 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 10 : Générateur d'Acronyme</h4>
            <p class="text-gray-700 mb-4">Demandez à l'utilisateur trois mots (par exemple "Office", "Formation", "Professionnelle"). Affichez l'acronyme en prenant la première lettre de chaque mot en majuscule.</p>
            <button hidden  onclick="toggleSolution('solution_ex10')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button>
            <div id="solution_ex10" class="solution"><div class="code-block"><pre><code><span class="py-variable">mot1</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez le premier mot : "</span>)
<span class="py-variable">mot2</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez le deuxième mot : "</span>)
<span class="py-variable">mot3</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez le troisième mot : "</span>)
<span class="py-comment"># On accède à la première lettre avec [0]</span>
<span class="py-variable">acronyme</span> <span class="py-operator">=</span> <span class="py-variable">mot1</span>[<span class="py-number">0</span>] <span class="py-operator">+</span> <span class="py-variable">mot2</span>[<span class="py-number">0</span>] <span class="py-operator">+</span> <span class="py-variable">mot3</span>[<span class="py-number">0</span>]
<span class="py-function">print</span>(<span class="py-string">f"L'acronyme est : {<span class="py-variable">acronyme</span>.upper()}"</span>) <span class="py-comment"># .upper() pour mettre en majuscules</span></code></pre></div></div>
        </div>

    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>