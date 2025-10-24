<!-- =================================================================== -->
    <!-- PARTIE 4 : ALLER PLUS LOIN -->
    <!-- =================================================================== -->
    <h2 id="page-top" class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-16">Partie 4 : Aller Plus Loin</h2>

    <!-- =================================================================== -->
    <!-- CHAPITRE 14 : LA GESTION DES EXCEPTIONS -->
    <!-- =================================================================== -->
    <section id="exceptions" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 14 : La Gestion des Exceptions (try...except)</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Un programme robuste ne doit pas "planter" à la moindre erreur inattendue (une saisie utilisateur incorrecte, un fichier manquant...). La gestion des exceptions est le mécanisme de Python qui permet d'anticiper ces erreurs, de les "attraper" (catch) et d'exécuter un plan B pour que le programme continue de fonctionner ou se termine proprement.</p>

        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Attraper une erreur de saisie (`ValueError`)</h4><p class="text-gray-700 mb-4">Sans `try...except`, si l'utilisateur tape "abc" au lieu d'un nombre, le programme plante. Voici comment l'éviter.</p><div class="code-block"><pre><code><span class="py-keyword">try</span>:
    <span class="py-variable">age</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez votre âge : "</span>))
    <span class="py-function">print</span>(<span class="py-string">f"Vous avez {<span class="py-variable">age</span>} ans."</span>)
<span class="py-keyword">except</span> <span class="py-exception">ValueError</span>:
    <span class="py-function">print</span>(<span class="py-string">"Erreur : Vous n'avez pas entré un nombre valide."</span>)

<span class="py-function">print</span>(<span class="py-string">"Le programme continue..."</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Gérer plusieurs exceptions</h4><p class="text-gray-700 mb-4">On peut anticiper plusieurs types d'erreurs, comme une division par zéro.</p><div class="code-block"><pre><code><span class="py-keyword">try</span>:
    <span class="py-variable">numerateur</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez le numérateur : "</span>))
    <span class="py-variable">denominateur</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez le dénominateur : "</span>))
    <span class="py-variable">resultat</span> <span class="py-operator">=</span> <span class="py-variable">numerateur</span> <span class="py-operator">/</span> <span class="py-variable">denominateur</span>
    <span class="py-function">print</span>(<span class="py-string">f"Le résultat est {<span class="py-variable">resultat</span>}"</span>)
<span class="py-keyword">except</span> <span class="py-exception">ValueError</span>:
    <span class="py-function">print</span>(<span class="py-string">"Erreur : Veuillez entrer des nombres entiers."</span>)
<span class="py-keyword">except</span> <span class="py-exception">ZeroDivisionError</span>:
    <span class="py-function">print</span>(<span class="py-string">"Erreur : La division par zéro est impossible."</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Les blocs `else` et `finally`</h4><p class="text-gray-700 mb-4">Le bloc `else` s'exécute uniquement si aucune exception n'est levée dans le `try`. Le bloc `finally` s'exécute <strong>toujours</strong>, qu'il y ait eu une erreur ou non (parfait pour nettoyer des ressources).</p><div class="code-block"><pre><code><span class="py-keyword">try</span>:
    <span class="py-variable">num</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez un nombre : "</span>))
<span class="py-keyword">except</span> <span class="py-exception">ValueError</span>:
    <span class="py-function">print</span>(<span class="py-string">"Saisie invalide."</span>)
<span class="py-keyword">else</span>:
    <span class="py-function">print</span>(<span class="py-string">f"Le carré de {<span class="py-variable">num</span>} est {<span class="py-variable">num</span> <span class="py-operator">**</span> <span class="py-number">2</span>}"</span>)
<span class="py-keyword">finally</span>:
    <span class="py-function">print</span>(<span class="py-string">"Fin de la tentative de calcul."</span>)</code></pre></div></div>
        </div>

        <div id="exercices-exceptions" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Exceptions</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Calculatrice sécurisée</h4><p class="text-gray-700 mb-4">Demandez deux nombres à l'utilisateur et affichez le résultat de leur division. Gérez les cas où la saisie n'est pas un nombre et où le deuxième nombre est zéro.</p><button hidden onclick="toggleSolution('sol_except_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_except_1" class="solution"><div class="code-block"><pre><code><span class="py-keyword">try</span>:
    <span class="py-variable">a</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Premier nombre : "</span>))
    <span class="py-variable">b</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Second nombre : "</span>))
    <span class="py-function">print</span>(<span class="py-string">f"{<span class="py-variable">a</span>} / {<span class="py-variable">b</span>} = {<span class="py-variable">a</span> <span class="py-operator">/</span> <span class="py-variable">b</span>}"</span>)
<span class="py-keyword">except</span> <span class="py-exception">ValueError</span>:
    <span class="py-function">print</span>(<span class="py-string">"Erreur, veuillez entrer des nombres valides."</span>)
<span class="py-keyword">except</span> <span class="py-exception">ZeroDivisionError</span>:
    <span class="py-function">print</span>(<span class="py-string">"Erreur, division par zéro impossible."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Accès à une liste</h4><p class="text-gray-700 mb-4">Créez une liste `couleurs = ["rouge", "vert", "bleu"]`. Demandez à l'utilisateur un index et affichez la couleur correspondante. Gérez l'erreur `IndexError` si l'index est en dehors des limites.</p><button hidden onclick="toggleSolution('sol_except_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_except_2" class="solution"><div class="code-block"><pre><code><span class="py-variable">couleurs</span> <span class="py-operator">=</span> [<span class="py-string">"rouge"</span>, <span class="py-string">"vert"</span>, <span class="py-string">"bleu"</span>]
<span class="py-keyword">try</span>:
    <span class="py-variable">index</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">f"Entrez un index entre 0 et {<span class="py-builtin">len</span>(<span class="py-variable">couleurs</span>)<span class="py-operator">-</span><span class="py-number">1</span>} : "</span>))
    <span class="py-function">print</span>(<span class="py-string">f"La couleur est : {<span class="py-variable">couleurs</span>[<span class="py-variable">index</span>]}"</span>)
<span class="py-keyword">except</span> <span class="py-exception">IndexError</span>:
    <span class="py-function">print</span>(<span class="py-string">"Erreur : cet index n'existe pas dans la liste."</span>)
<span class="py-keyword">except</span> <span class="py-exception">ValueError</span>:
    <span class="py-function">print</span>(<span class="py-string">"Erreur : veuillez entrer un nombre entier."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Accès à un dictionnaire</h4><p class="text-gray-700 mb-4">Soit le dictionnaire `capitales = {"France": "Paris", "Allemagne": "Berlin"}`. Demandez un pays à l'utilisateur et affichez sa capitale. Gérez l'erreur `KeyError` si le pays n'est pas dans le dictionnaire.</p><button hidden onclick="toggleSolution('sol_except_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_except_3" class="solution"><div class="code-block"><pre><code><span class="py-variable">capitales</span> <span class="py-operator">=</span> {<span class="py-string">"France"</span>: <span class="py-string">"Paris"</span>, <span class="py-string">"Allemagne"</span>: <span class="py-string">"Berlin"</span>}
<span class="py-variable">pays</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez un nom de pays : "</span>)
<span class="py-keyword">try</span>:
    <span class="py-function">print</span>(<span class="py-string">f"La capitale de {<span class="py-variable">pays</span>} est {<span class="py-variable">capitales</span>[<span class="py-variable">pays</span>]}."</span>)
<span class="py-keyword">except</span> <span class="py-exception">KeyError</span>:
    <span class="py-function">print</span>(<span class="py-string">f"Désolé, je ne connais pas la capitale de {<span class="py-variable">pays</span>}."</span>)</code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    
    <section id="fichiers" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 15 : Manipulation de Fichiers Texte (.txt)</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">La manipulation de fichiers est essentielle car elle permet de sauvegarder des données de manière permanente (persistance), de lire des configurations, de traiter de grands volumes d'informations et de faire communiquer vos programmes avec le monde extérieur.</p>
        
        <div class="bg-blue-50 border-l-4 border-blue-500 text-blue-800 p-4 mb-8" role="alert">
            <p class="font-bold">La meilleure pratique : `with open(...)`</p>
            <p>La manière moderne et la plus sûre de manipuler des fichiers en Python est d'utiliser un gestionnaire de contexte avec le mot-clé <code>with</code>. Cela garantit que le fichier est automatiquement fermé, même si des erreurs se produisent pendant son traitement. Tous les exemples suivants utiliseront cette syntaxe.</p>
        </div>

        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="text-xl font-semibold mb-2">Syntaxe générale</h4>
                <div class="code-block"><pre><code><span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">"nom_du_fichier.txt"</span>, <span class="py-string">"mode"</span>) <span class="py-keyword">as</span> <span class="py-variable">variable_fichier</span>:
    <span class="py-comment"># Opérations sur le fichier (lecture, écriture...)</span>
    <span class="py-variable">variable_fichier</span>.<span class="py-function">read</span>()  <span class="py-comment"># Exemple de lecture</span></code></pre></div>
                <p class="text-gray-700 mt-4">Les <strong>modes d'ouverture</strong> les plus courants sont :</p>
                <ul class="list-disc list-inside ml-4 mt-2 text-gray-700">
                    <li><code>'r'</code> (read) : Lecture seule. C'est le mode par défaut. Le fichier doit exister.</li>
                    <li><code>'w'</code> (write) : Écriture seule. <strong>Crée le fichier s'il n'existe pas, ou l'écrase complètement s'il existe.</strong></li>
                    <li><code>'a'</code> (append) : Ajout. Ajoute du contenu à la fin du fichier sans l'écraser. Crée le fichier s'il n'existe pas.</li>
                    <li><code>'r+'</code> : Lecture et écriture. Le fichier doit exister.</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Lecture d'un fichier existant</h4><p class="text-gray-700 mb-4">Supposons que nous ayons un fichier <code>poeme.txt</code> avec le contenu suivant :<br><em>Le ciel est bleu.<br>Les oiseaux chantent.</em></p><div class="code-block"><pre><code><span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">"poeme.txt"</span>, <span class="py-string">"r"</span>) <span class="py-keyword">as</span> <span class="py-variable">fichier</span>:
    <span class="py-keyword">for</span> <span class="py-variable">ligne</span> <span class="py-keyword">in</span> <span class="py-variable">fichier</span>:
        <span class="py-function">print</span>(<span class="py-variable">ligne</span>.<span class="py-function">strip</span>()) <span class="py-comment"># .strip() retire les sauts de ligne invisibles</span></code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Écrire dans un fichier (mode `'w'`)</h4><div class="code-block"><pre><code><span class="py-variable">articles</span> <span class="py-operator">=</span> [<span class="py-string">"Pommes"</span>, <span class="py-string">"Lait"</span>, <span class="py-string">"Pain"</span>]
<span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">"liste_courses.txt"</span>, <span class="py-string">"w"</span>) <span class="py-keyword">as</span> <span class="py-variable">fichier</span>:
    <span class="py-keyword">for</span> <span class="py-variable">article</span> <span class="py-keyword">in</span> <span class="py-variable">articles</span>:
        <span class="py-variable">fichier</span>.<span class="py-function">write</span>(<span class="py-string">f"{<span class="py-variable">article</span>}\n"</span>) <span class="py-comment"># \n est crucial pour le saut de ligne</span></code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Ajouter du contenu à un fichier (mode `'a'`)</h4><div class="code-block"><pre><code><span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">"liste_courses.txt"</span>, <span class="py-string">"a"</span>) <span class="py-keyword">as</span> <span class="py-variable">fichier</span>:
    <span class="py-variable">fichier</span>.<span class="py-function">write</span>(<span class="py-string">"Beurre\n"</span>)</code></pre></div></div>
        </div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <!-- =================================================================== -->
    <!-- CHAPITRE 16 : FICHIERS CSV -->
    <!-- =================================================================== -->
    <section id="fichiers-csv" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 16 : Travailler avec les Fichiers CSV</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Le format CSV (Comma-Separated Values) est un standard pour stocker des données tabulaires (comme dans un tableur Excel). Python dispose d'un module intégré <code>csv</code> qui rend la lecture et l'écriture de ces fichiers très simples et fiables.</p>

        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Lire un fichier CSV</h4><p class="text-gray-700 mb-4">Supposons un fichier <code>utilisateurs.csv</code> :<br><code>nom,email,ville</code><br><code>Alice,alice@email.com,Paris</code><br><code>Bob,bob@email.com,Lyon</code></p><p class="text-gray-700 mb-4">La meilleure façon de le lire est avec <code>csv.DictReader</code>, qui traite chaque ligne comme un dictionnaire.</p><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">csv</span>

<span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">'utilisateurs.csv'</span>, <span class="py-string">'r'</span>, <span class="py-variable">newline</span><span class="py-operator">=</span><span class="py-string">''</span>) <span class="py-keyword">as</span> <span class="py-variable">fichier_csv</span>:
    <span class="py-variable">lecteur</span> <span class="py-operator">=</span> <span class="py-namespace">csv</span>.<span class="py-function">DictReader</span>(<span class="py-variable">fichier_csv</span>)
    <span class="py-function">print</span>(<span class="py-string">"Liste des utilisateurs :"</span>)
    <span class="py-keyword">for</span> <span class="py-variable">ligne</span> <span class="py-keyword">in</span> <span class="py-variable">lecteur</span>:
        <span class="py-comment"># Chaque ligne est un dictionnaire</span>
        <span class="py-function">print</span>(<span class="py-string">f"- {<span class="py-variable">ligne</span>[<span class="py-string">'nom'</span>]} de {<span class="py-variable">ligne</span>[<span class="py-string">'ville'</span>]} ({<span class="py-variable">ligne</span>[<span class="py-string">'email'</span>]})"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Écrire dans un fichier CSV</h4><p class="text-gray-700 mb-4">Nous allons écrire une liste de dictionnaires dans un nouveau fichier <code>produits.csv</code>.</p><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">csv</span>

<span class="py-variable">donnees_produits</span> <span class="py-operator">=</span> [
    {<span class="py-string">'produit'</span>: <span class="py-string">'Laptop'</span>, <span class="py-string">'prix'</span>: <span class="py-number">1200</span>, <span class="py-string">'stock'</span>: <span class="py-number">50</span>},
    {<span class="py-string">'produit'</span>: <span class="py-string">'Souris'</span>, <span class="py-string">'prix'</span>: <span class="py-number">25</span>, <span class="py-string">'stock'</span>: <span class="py-number">200</span>},
    {<span class="py-string">'produit'</span>: <span class="py-string">'Clavier'</span>, <span class="py-string">'prix'</span>: <span class="py-number">75</span>, <span class="py-string">'stock'</span>: <span class="py-number">150</span>}
]
<span class="py-variable">noms_colonnes</span> <span class="py-operator">=</span> [<span class="py-string">'produit'</span>, <span class="py-string">'prix'</span>, <span class="py-string">'stock'</span>]

<span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">'produits.csv'</span>, <span class="py-string">'w'</span>, <span class="py-variable">newline</span><span class="py-operator">=</span><span class="py-string">''</span>) <span class="py-keyword">as</span> <span class="py-variable">fichier_csv</span>:
    <span class="py-variable">ecrivain</span> <span class="py-operator">=</span> <span class="py-namespace">csv</span>.<span class="py-function">DictWriter</span>(<span class="py-variable">fichier_csv</span>, <span class="py-variable">fieldnames</span><span class="py-operator">=</span><span class="py-variable">noms_colonnes</span>)
    
    <span class="py-variable">ecrivain</span>.<span class="py-function">writeheader</span>() <span class="py-comment"># Écrit la ligne d'en-tête (produit,prix,stock)</span>
    <span class="py-variable">ecrivain</span>.<span class="py-function">writerows</span>(<span class="py-variable">donnees_produits</span>) <span class="py-comment"># Écrit toutes les lignes de données</span>

<span class="py-function">print</span>(<span class="py-string">"Le fichier produits.csv a été créé."</span>)</code></pre></div></div>
        </div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <!-- =================================================================== -->
    <!-- CHAPITRE 17 : FICHIERS JSON -->
    <!-- =================================================================== -->
    <section id="fichiers-json" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 17 : Travailler avec les Fichiers JSON</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Le format JSON (JavaScript Object Notation) est le standard du web pour l'échange de données structurées. Sa syntaxe est très proche des dictionnaires et listes Python, ce qui le rend extrêmement facile à manipuler avec le module intégré <code>json</code>.</p>

        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Lire un fichier JSON</h4><p class="text-gray-700 mb-4">Supposons un fichier <code>config.json</code> :<br><code>{ "user": "admin", "theme": "dark", "notifications_enabled": true }</code></p><p class="text-gray-700 mb-4">La fonction <code>json.load()</code> lit le fichier et le convertit directement en dictionnaire Python.</p><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">json</span>

<span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">'config.json'</span>, <span class="py-string">'r'</span>) <span class="py-keyword">as</span> <span class="py-variable">fichier_json</span>:
    <span class="py-variable">config</span> <span class="py-operator">=</span> <span class="py-namespace">json</span>.<span class="py-function">load</span>(<span class="py-variable">fichier_json</span>) <span class="py-comment"># Charge les données en dictionnaire</span>

<span class="py-function">print</span>(<span class="py-string">"Configuration chargée :"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Utilisateur : {<span class="py-variable">config</span>[<span class="py-string">'user'</span>]}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Thème : {<span class="py-variable">config</span>[<span class="py-string">'theme'</span>]}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Écrire dans un fichier JSON</h4><p class="text-gray-700 mb-4">Nous allons créer un dictionnaire Python et le sauvegarder dans un fichier <code>data.json</code> de manière lisible.</p><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">json</span>

<span class="py-variable">user_profile</span> <span class="py-operator">=</span> {
    <span class="py-string">"id"</span>: <span class="py-number">123</span>,
    <span class="py-string">"nom"</span>: <span class="py-string">"Léa Martin"</span>,
    <span class="py-string">"active"</span>: <span class="py-keyword">True</span>,
    <span class="py-string">"competences"</span>: [<span class="py-string">"Python"</span>, <span class="py-string">"Data Analysis"</span>, <span class="py-string">"SQL"</span>],
    <span class="py-string">"adresse"</span>: <span class="py-keyword">None</span>
}

<span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">'data.json'</span>, <span class="py-string">'w'</span>) <span class="py-keyword">as</span> <span class="py-variable">fichier_json</span>:
    <span class="py-comment"># json.dump() écrit l'objet Python dans le fichier au format JSON</span>
    <span class="py-comment"># indent=4 rend le fichier joliment formaté et lisible</span>
    <span class="py-namespace">json</span>.<span class="py-function">dump</span>(<span class="py-variable">user_profile</span>, <span class="py-variable">fichier_json</span>, <span class="py-variable">indent</span><span class="py-operator">=</span><span class="py-number">4</span>)

<span class="py-function">print</span>(<span class="py-string">"Le fichier data.json a été créé."</span>)</code></pre></div></div>
        </div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <!-- =================================================================== -->
    <!-- EXERCICES GÉNÉRAUX SUR LES FICHIERS -->
    <!-- =================================================================== -->
    <div id="exercices-fichiers" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Fichiers</h3><div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice (Texte) : Journal d'Événements</h4><p class="text-gray-700 mb-4">Créez une fonction <code>log_event(message)</code>. Chaque fois qu'elle est appelée, elle doit ajouter une ligne au fichier <code>app.log</code> au format : <code>[AAAA-MM-JJ HH:MM:SS] - message</code>. (Indice : utilisez le module <code>datetime</code>).</p><button hidden onclick="toggleSolution('sol_file_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_file_1" class="solution"><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">datetime</span>
<span class="py-keyword">def</span> <span class="py-function">log_event</span>(<span class="py-variable">message</span>):
    <span class="py-variable">timestamp</span> <span class="py-operator">=</span> <span class="py-namespace">datetime</span>.<span class="py-variable">datetime</span>.<span class="py-function">now</span>().<span class="py-function">strftime</span>(<span class="py-string">'%Y-%m-%d %H:%M:%S'</span>)
    <span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">'app.log'</span>, <span class="py-string">'a'</span>) <span class="py-keyword">as</span> <span class="py-variable">f</span>:
        <span class="py-variable">f</span>.<span class="py-function">write</span>(<span class="py-string">f"[{<span class="py-variable">timestamp</span>}] - {<span class="py-variable">message</span>}\n"</span>)
<span class="py-function">log_event</span>(<span class="py-string">"Démarrage de l'application."</span>)
<span class="py-function">print</span>(<span class="py-string">"Événement enregistré dans app.log."</span>)</code></pre></div></div></div>
        <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice (CSV) : Calcul de la valeur du stock</h4><p class="text-gray-700 mb-4">En utilisant le fichier <code>produits.csv</code> créé précédemment, écrivez un script qui lit le fichier et calcule la valeur totale du stock (somme de `prix * stock` pour chaque produit).</p><button hidden onclick="toggleSolution('sol_file_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_file_2" class="solution"><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">csv</span>
<span class="py-variable">valeur_totale</span> <span class="py-operator">=</span> <span class="py-number">0</span>
<span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-string">'produits.csv'</span>, <span class="py-string">'r'</span>) <span class="py-keyword">as</span> <span class="py-variable">f</span>:
    <span class="py-variable">lecteur</span> <span class="py-operator">=</span> <span class="py-namespace">csv</span>.<span class="py-function">DictReader</span>(<span class="py-variable">f</span>)
    <span class="py-keyword">for</span> <span class="py-variable">ligne</span> <span class="py-keyword">in</span> <span class="py-variable">lecteur</span>:
        <span class="py-variable">prix</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-variable">ligne</span>[<span class="py-string">'prix'</span>])
        <span class="py-variable">stock</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-variable">ligne</span>[<span class="py-string">'stock'</span>])
        <span class="py-variable">valeur_totale</span> <span class="py-operator">+=</span> <span class="py-variable">prix</span> <span class="py-operator">*</span> <span class="py-variable">stock</span>
<span class="py-function">print</span>(<span class="py-string">f"La valeur totale du stock est de : {<span class="py-variable">valeur_totale</span>}€"</span>)</code></pre></div></div></div>
        <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice (JSON) : Mettre à jour une configuration</h4><p class="text-gray-700 mb-4">Écrivez une fonction <code>update_theme(nouveau_theme)</code> qui lit le fichier <code>config.json</code>, change la valeur de la clé "theme", puis réécrit le fichier entier avec la nouvelle configuration.</p><button hidden onclick="toggleSolution('sol_file_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_file_3" class="solution"><div class="code-block"><pre><code><span class="py-keyword">import</span> <span class="py-namespace">json</span>
<span class="py-keyword">def</span> <span class="py-function">update_theme</span>(<span class="py-variable">nouveau_theme</span>):
    <span class="py-variable">nom_fichier</span> <span class="py-operator">=</span> <span class="py-string">'config.json'</span>
    <span class="py-comment"># Étape 1 : Lire les données actuelles</span>
    <span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-variable">nom_fichier</span>, <span class="py-string">'r'</span>) <span class="py-keyword">as</span> <span class="py-variable">f</span>:
        <span class="py-variable">data</span> <span class="py-operator">=</span> <span class="py-namespace">json</span>.<span class="py-function">load</span>(<span class="py-variable">f</span>)
    
    <span class="py-comment"># Étape 2 : Modifier les données</span>
    <span class="py-variable">data</span>[<span class="py-string">'theme'</span>] <span class="py-operator">=</span> <span class="py-variable">nouveau_theme</span>
    
    <span class="py-comment"># Étape 3 : Réécrire le fichier complet</span>
    <span class="py-keyword">with</span> <span class="py-function">open</span>(<span class="py-variable">nom_fichier</span>, <span class="py-string">'w'</span>) <span class="py-keyword">as</span> <span class="py-variable">f</span>:
        <span class="py-namespace">json</span>.<span class="py-function">dump</span>(<span class="py-variable">data</span>, <span class="py-variable">f</span>)
    <span class="py-function">print</span>(<span class="py-string">f"Thème mis à jour à '{<span class="py-variable">nouveau_theme</span>}' dans {<span class="py-variable">nom_fichier</span>}"</span>)

<span class="py-comment"># Test</span>
<span class="py-function">update_theme</span>(<span class="py-string">'light'</span>)</code></pre></div></div></div>
    </div></div>