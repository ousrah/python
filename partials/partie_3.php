<!-- =================================================================== -->
    <!-- PARTIE 3 : FONCTIONS ET STRUCTURES DE DONNÉES ESSENTIELLES -->
    <!-- =================================================================== -->
    <h2 id="page-top" class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-16">Partie 3 : Fonctions et Structures de Données Essentielles</h2>

    <section id="fonctions" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 8 : Les Fonctions</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Les fonctions sont des blocs de code réutilisables qui exécutent une tâche spécifique. Elles permettent d'organiser votre code, de le rendre plus lisible, plus facile à maintenir et d'éviter la répétition.</p>
        
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Définition et appel d'une fonction simple</h4><p class="text-gray-700 mb-4">Une fonction sans argument ni valeur de retour se contente d'exécuter un bloc d'instructions.</p><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">dire_bonjour</span>():
    <span class="py-function">print</span>(<span class="py-string">"Bonjour tout le monde !"</span>)

<span class="py-comment"># Appel de la fonction</span>
<span class="py-function">dire_bonjour</span>()</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Fonctions avec arguments</h4><p class="text-gray-700 mb-4">Les arguments permettent de passer des informations à une fonction pour qu'elle puisse les utiliser. Ils sont spécifiés entre les parenthèses lors de la définition.</p><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">saluer_personne</span>(<span class="py-variable">nom</span>):
    <span class="py-function">print</span>(<span class="py-string">f"Bonjour, {<span class="py-variable">nom</span>} !"</span>)

<span class="py-function">saluer_personne</span>(<span class="py-string">"Alice"</span>)
<span class="py-function">saluer_personne</span>(<span class="py-string">"Bob"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Fonctions avec valeur(s) de retour (`return`)</h4><p class="text-gray-700 mb-4">Le mot-clé <code>return</code> permet à une fonction de renvoyer une ou plusieurs valeurs après son exécution. Ces valeurs peuvent ensuite être utilisées dans le reste du programme.</p><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">additionner</span>(<span class="py-variable">a</span>, <span class="py-variable">b</span>):
    <span class="py-variable">resultat</span> <span class="py-operator">=</span> <span class="py-variable">a</span> <span class="py-operator">+</span> <span class="py-variable">b</span>
    <span class="py-keyword">return</span> <span class="py-variable">resultat</span>

<span class="py-variable">somme</span> <span class="py-operator">=</span> <span class="py-function">additionner</span>(<span class="py-number">5</span>, <span class="py-number">3</span>)
<span class="py-function">print</span>(<span class="py-string">f"La somme est : {<span class="py-variable">somme</span>}"</span>)

<span class="py-comment"># Une fonction peut retourner plusieurs valeurs sous forme de tuple</span>
<span class="py-keyword">def</span> <span class="py-function">calculer_stats</span>(<span class="py-variable">liste_nombres</span>):
    <span class="py-variable">minimum</span> <span class="py-operator">=</span> <span class="py-builtin">min</span>(<span class="py-variable">liste_nombres</span>)
    <span class="py-variable">maximum</span> <span class="py-operator">=</span> <span class="py-builtin">max</span>(<span class="py-variable">liste_nombres</span>)
    <span class="py-keyword">return</span> <span class="py-variable">minimum</span>, <span class="py-variable">maximum</span>

<span class="py-variable">nombres</span> <span class="py-operator">=</span> [<span class="py-number">10</span>, <span class="py-number">20</span>, <span class="py-number">5</span>, <span class="py-number">30</span>]
<span class="py-variable">min_val</span>, <span class="py-variable">max_val</span> <span class="py-operator">=</span> <span class="py-function">calculer_stats</span>(<span class="py-variable">nombres</span>)
<span class="py-function">print</span>(<span class="py-string">f"Minimum : {<span class="py-variable">min_val</span>}, Maximum : {<span class="py-variable">max_val</span>}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 4 : Arguments par défaut et arguments nommés</h4><p class="text-gray-700 mb-4">Vous pouvez donner des valeurs par défaut à des arguments. Si l'utilisateur ne fournit pas cette argument, la valeur par défaut est utilisée. Les arguments nommés permettent de spécifier les arguments par leur nom, ce qui rend le code plus clair et permet de ne pas se soucier de l'ordre.</p><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">afficher_message</span>(<span class="py-variable">message</span>, <span class="py-variable">prefixe</span><span class="py-operator">=</span><span class="py-string">"INFO"</span>):
    <span class="py-function">print</span>(<span class="py-string">f"[{<span class="py-variable">prefixe</span>}] {<span class="py-variable">message</span>}"</span>)

<span class="py-comment"># Utilisation avec l'argument par défaut</span>
<span class="py-function">afficher_message</span>(<span class="py-string">"Ceci est un message."</span>)

<span class="py-comment"># Utilisation en écrasant l'argument par défaut</span>
<span class="py-function">afficher_message</span>(<span class="py-string">"Ceci est une erreur.",</span> <span class="py-string">"ERREUR"</span>)

<span class="py-comment"># Utilisation d'arguments nommés</span>
<span class="py-function">afficher_message</span>(<span class="py-variable">prefixe</span><span class="py-operator">=</span><span class="py-string">"DEBUG"</span>, <span class="py-variable">message</span><span class="py-operator">=</span><span class="py-string">"Valeur de X est 10."</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 5 : Portée des variables (Locale vs Globale)</h4><p class="text-gray-700 mb-4">Les variables définies à l'intérieur d'une fonction sont "locales" et ne sont accessibles qu'à l'intérieur de cette fonction. Les variables définies en dehors de toute fonction sont "globales" et peuvent être lues par les fonctions.</p><div class="code-block"><pre><code><span class="py-variable">variable_globale</span> <span class="py-operator">=</span> <span class="py-string">"Je suis globale"</span>

<span class="py-keyword">def</span> <span class="py-function">ma_fonction</span>():
    <span class="py-variable">variable_locale</span> <span class="py-operator">=</span> <span class="py-string">"Je suis locale"</span>
    <span class="py-function">print</span>(<span class="py-string">f"Dans la fonction (locale) : {<span class="py-variable">variable_locale</span>}"</span>)
    <span class="py-function">print</span>(<span class="py-string">f"Dans la fonction (globale) : {<span class="py-variable">variable_globale</span>}"</span>)

<span class="py-function">ma_fonction</span>()
<span class="py-function">print</span>(<span class="py-string">f"En dehors de la fonction (globale) : {<span class="py-variable">variable_globale</span>}"</span>)
<span class="py-comment"># print(variable_locale) # Ceci provoquerait une erreur car variable_locale n'est pas définie ici.</span>

<span class="py-comment"># Modifier une variable globale depuis une fonction (déconseillé sans "global")</span>
<span class="py-variable">compteur_global</span> <span class="py-operator">=</span> <span class="py-number">0</span>
<span class="py-keyword">def</span> <span class="py-function">incrementer</span>():
    <span class="py-keyword">global</span> <span class="py-variable">compteur_global</span> <span class="py-comment"># Indique que nous voulons modifier la variable globale</span>
    <span class="py-variable">compteur_global</span> <span class="py-operator">+=</span> <span class="py-number">1</span>
    <span class="py-function">print</span>(<span class="py-string">f"Compteur dans la fonction : {<span class="py-variable">compteur_global</span>}"</span>)

<span class="py-function">incrementer</span>() <span class="py-comment"># Compteur dans la fonction : 1</span>
<span class="py-function">incrementer</span>() <span class="py-comment"># Compteur dans la fonction : 2</span>
<span class="py-function">print</span>(<span class="py-string">f"Compteur global final : {<span class="py-variable">compteur_global</span>}"</span>) <span class="py-comment"># Compteur global final : 2</span></code></pre></div></div>
        </div>

        <div id="exercices-fonctions" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Fonctions</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Calcul du Carré</h4><p class="text-gray-700 mb-4">Écrivez une fonction nommée <code>calculer_carre</code> qui prend un nombre en argument et retourne son carré.</p><button onclick="toggleSolution('sol_func_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_func_1" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">calculer_carre</span>(<span class="py-variable">nombre</span>):
    <span class="py-keyword">return</span> <span class="py-variable">nombre</span> <span class="py-operator">**</span> <span class="py-number">2</span>

<span class="py-comment"># Test</span>
<span class="py-function">print</span>(<span class="py-function">calculer_carre</span>(<span class="py-number">4</span>))   <span class="py-comment"># Devrait afficher 16</span>
<span class="py-function">print</span>(<span class="py-function">calculer_carre</span>(<span class="py-number">7</span>))   <span class="py-comment"># Devrait afficher 49</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Salutation Personnalisée</h4><p class="text-gray-700 mb-4">Créez une fonction <code>saluer</code> qui prend un <code>nom</code> et une <code>heure_journee</code> (avec "jour" comme valeur par défaut) en arguments et affiche un message de salutation approprié comme "Bonjour, [nom] ! Bonne [heure_journee].".</p><button onclick="toggleSolution('sol_func_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_func_2" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">saluer</span>(<span class="py-variable">nom</span>, <span class="py-variable">heure_journee</span><span class="py-operator">=</span><span class="py-string">"jour"</span>):
    <span class="py-function">print</span>(<span class="py-string">f"Bonjour, {<span class="py-variable">nom</span>} ! Bonne {<span class="py-variable">heure_journee</span>}."</span>)

<span class="py-comment"># Tests</span>
<span class="py-function">saluer</span>(<span class="py-string">"Sophie"</span>)
<span class="py-function">saluer</span>(<span class="py-string">"Marc"</span>, <span class="py-string">"soirée"</span>)
<span class="py-function">saluer</span>(<span class="py-variable">heure_journee</span><span class="py-operator">=</span><span class="py-string">"nuit"</span>, <span class="py-variable">nom</span><span class="py-operator">=</span><span class="py-string">"Léa"</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Somme de Nombres</h4><p class="text-gray-700 mb-4">Écrivez une fonction <code>calculer_somme</code> qui prend une liste de nombres en argument et retourne leur somme. Vous pouvez utiliser une boucle <code>for</code>.</p><button onclick="toggleSolution('sol_func_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_func_3" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">calculer_somme</span>(<span class="py-variable">liste_nombres</span>):
    <span class="py-variable">somme</span> <span class="py-operator">=</span> <span class="py-number">0</span>
    <span class="py-keyword">for</span> <span class="py-variable">nombre</span> <span class="py-keyword">in</span> <span class="py-variable">liste_nombres</span>:
        <span class="py-variable">somme</span> <span class="py-operator">+=</span> <span class="py-variable">nombre</span>
    <span class="py-keyword">return</span> <span class="py-variable">somme</span>

<span class="py-comment"># Test</span>
<span class="py-function">print</span>(<span class="py-function">calculer_somme</span>([<span class="py-number">1</span>, <span class="py-number">2</span>, <span class="py-number">3</span>, <span class="py-number">4</span>, <span class="py-number">5</span>])) <span class="py-comment"># Devrait afficher 15</span>
<span class="py-function">print</span>(<span class="py-function">calculer_somme</span>([<span class="py-number">10</span>, <span class="py-number">20</span>])) <span class="py-comment"># Devrait afficher 30</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 4 : Vérificateur de Parité</h4><p class="text-gray-700 mb-4">Écrivez une fonction <code>verifier_parite</code> qui prend un entier et retourne la chaîne de caractères "Pair" si le nombre est pair, et "Impair" sinon.</p><button onclick="toggleSolution('sol_func_4')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_func_4" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">verifier_parite</span>(<span class="py-variable">nombre</span>):
    <span class="py-keyword">if</span> <span class="py-variable">nombre</span> <span class="py-operator">%</span> <span class="py-number">2</span> <span class="py-operator">==</span> <span class="py-number">0</span>:
        <span class="py-keyword">return</span> <span class="py-string">"Pair"</span>
    <span class="py-keyword">else</span>:
        <span class="py-keyword">return</span> <span class="py-string">"Impair"</span>

<span class="py-comment"># Tests</span>
<span class="py-function">print</span>(<span class="py-function">verifier_parite</span>(<span class="py-number">6</span>))  <span class="py-comment"># Devrait afficher "Pair"</span>
<span class="py-function">print</span>(<span class="py-function">verifier_parite</span>(<span class="py-number">3</span>))  <span class="py-comment"># Devrait afficher "Impair"</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 5 : Calcul de la Factorielle</h4><p class="text-gray-700 mb-4">Créez une fonction <code>calculer_factorielle</code> qui prend un entier non négatif <code>n</code> et retourne sa factorielle (<code>n!</code>). La factorielle de 0 est 1.</p><button onclick="toggleSolution('sol_func_5')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_func_5" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">calculer_factorielle</span>(<span class="py-variable">n</span>):
    <span class="py-keyword">if</span> <span class="py-variable">n</span> <span class="py-operator">==</span> <span class="py-number">0</span>:
        <span class="py-keyword">return</span> <span class="py-number">1</span>
    <span class="py-variable">resultat</span> <span class="py-operator">=</span> <span class="py-number">1</span>
    <span class="py-keyword">for</span> <span class="py-variable">i</span> <span class="py-keyword">in</span> <span class="py-function">range</span>(<span class="py-number">1</span>, <span class="py-variable">n</span> <span class="py-operator">+</span> <span class="py-number">1</span>):
        <span class="py-variable">resultat</span> <span class="py-operator">*=</span> <span class="py-variable">i</span>
    <span class="py-keyword">return</span> <span class="py-variable">resultat</span>

<span class="py-comment"># Tests</span>
<span class="py-function">print</span>(<span class="py-function">calculer_factorielle</span>(<span class="py-number">0</span>)) <span class="py-comment"># Devrait afficher 1</span>
<span class="py-function">print</span>(<span class="py-function">calculer_factorielle</span>(<span class="py-number">5</span>)) <span class="py-comment"># Devrait afficher 120 (5*4*3*2*1)</span>
<span class="py-function">print</span>(<span class="py-function">calculer_factorielle</span>(<span class="py-number">3</span>)) <span class="py-comment"># Devrait afficher 6 (3*2*1)</span></code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <!-- =================================================================== -->
    <!-- CHAPITRE 9 : LA DOCUMENTATION (DOCSTRINGS) -->
    <!-- =================================================================== -->
    <section id="documentation" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 9 : La Documentation (Docstrings)</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Écrire du code qui fonctionne est une chose. Écrire du code que vous-même (dans 6 mois) ou que d'autres peuvent comprendre en est une autre. La documentation est la clé. En Python, la norme pour documenter les fonctions, modules et classes est d'utiliser des "docstrings".</p>

        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="text-xl font-semibold mb-2">Commentaires (`#`) vs Docstrings (`"""..."""`)</h4>
                <p class="text-gray-700">Un commentaire (`#`) explique <strong>comment</strong> le code fonctionne (le "pourquoi" d'une ligne complexe). Une docstring (`"""..."""`) explique <strong>ce que</strong> fait une fonction (son objectif, ses paramètres, ce qu'elle retourne). La docstring est accessible par Python lui-même.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Docstring sur une seule ligne</h4><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">dire_bonjour</span>():
    <span class="py-string">"""Affiche un simple message de salutation."""</span>
    <span class="py-function">print</span>(<span class="py-string">"Bonjour !"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Docstring multi-lignes (standard)</h4><p class="text-gray-700 mb-4">C'est le format le plus courant. Il inclut une description, les arguments et ce que la fonction retourne.</p><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">calculer_prix_ttc</span>(<span class="py-variable">prix_ht</span>, <span class="py-variable">taux_tva</span><span class="py-operator">=</span><span class="py-number">0.2</span>):
    <span class="py-string">"""Calcule le prix toutes taxes comprises (TTC) à partir d'un prix hors-taxe.

    Args:
        prix_ht (float or int): Le prix hors-taxe de l'article.
        taux_tva (float, optional): Le taux de TVA à appliquer. 
                                     Par défaut à 0.2 (20%).

    Returns:
        float: Le prix TTC calculé.
    """</span>
    <span class="py-keyword">return</span> <span class="py-variable">prix_ht</span> <span class="py-operator">*</span> (<span class="py-number">1</span> <span class="py-operator">+</span> <span class="py-variable">taux_tva</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Accéder à la documentation</h4><p class="text-gray-700 mb-4">Python vous permet de lire la docstring d'une fonction en utilisant la fonction `help()` ou l'attribut spécial `__doc__`.</p><div class="code-block"><pre><code><span class="py-comment"># Utiliser help() pour afficher une aide formatée</span>
<span class="py-function">help</span>(<span class="py-function">calculer_prix_ttc</span>)

<span class="py-comment"># Accéder directement à la chaîne de caractères brute</span>
<span class="py-function">print</span>(<span class="py-function">calculer_prix_ttc</span>.<span class="py-variable">__doc__</span>)</code></pre></div></div>
        </div>

        <div id="exercices-docstrings" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Docstrings</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Documenter une fonction simple</h4><p class="text-gray-700 mb-4">Ajoutez une docstring sur une seule ligne à la fonction suivante : `def afficher_ligne(): print("-" * 20)`</p><button onclick="toggleSolution('sol_doc_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_doc_1" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">afficher_ligne</span>():
    <span class="py-string">"""Affiche une ligne de 20 tirets."""</span>
    <span class="py-function">print</span>(<span class="py-string">"-"</span> <span class="py-operator">*</span> <span class="py-number">20</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Documenter les arguments</h4><p class="text-gray-700 mb-4">Documentez la fonction suivante en décrivant son objectif et son argument `nom`.</p><pre><code>def saluer(nom):
    print(f"Bonjour, {nom} !")</code></pre><button onclick="toggleSolution('sol_doc_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_doc_2" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">saluer</span>(<span class="py-variable">nom</span>):
    <span class="py-string">"""Affiche une salutation personnalisée.

    Args:
        nom (str): Le nom de la personne à saluer.
    """</span>
    <span class="py-function">print</span>(<span class="py-string">f"Bonjour, {<span class="py-variable">nom</span>} !"</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Documenter la valeur de retour</h4><p class="text-gray-700 mb-4">Documentez la fonction suivante, en précisant ses arguments et sa valeur de retour.</p><pre><code>def addition(a, b):
    return a + b</code></pre><button onclick="toggleSolution('sol_doc_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_doc_3" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">addition</span>(<span class="py-variable">a</span>, <span class="py-variable">b</span>):
    <span class="py-string">"""Additionne deux nombres et retourne le résultat.

    Args:
        a (int or float): Le premier nombre.
        b (int or float): Le second nombre.

    Returns:
        int or float: La somme de a et b.
    """</span>
    <span class="py-keyword">return</span> <span class="py-variable">a</span> <span class="py-operator">+</span> <span class="py-variable">b</span></code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <section id="listes" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 13 : Les Listes (Structures de Données)</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Les listes sont l'une des structures de données les plus fondamentales et polyvalentes en Python. Elles permettent de stocker une collection ordonnée et modifiable d'éléments.</p>
        
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Création et accès aux éléments</h4><p class="text-gray-700 mb-4">Une liste est définie par des crochets <code>[]</code> et ses éléments sont séparés par des virgules. Les éléments sont indexés à partir de 0.</p><div class="code-block"><pre><code><span class="py-comment"># Création d'une liste de nombres</span>
<span class="py-variable">nombres</span> <span class="py-operator">=</span> [<span class="py-number">10</span>, <span class="py-number">20</span>, <span class="py-number">30</span>, <span class="py-number">40</span>, <span class="py-number">50</span>]
<span class="py-function">print</span>(<span class="py-string">f"Liste complète : {<span class="py-variable">nombres</span>}"</span>)

<span class="py-comment"># Accès aux éléments par leur index</span>
<span class="py-function">print</span>(<span class="py-string">f"Premier élément : {<span class="py-variable">nombres</span>[<span class="py-number">0</span>]}"</span>)  <span class="py-comment"># Output: 10</span>
<span class="py-function">print</span>(<span class="py-string">f"Troisième élément : {<span class="py-variable">nombres</span>[<span class="py-number">2</span>]}"</span>) <span class="py-comment"># Output: 30</span>

<span class="py-comment"># Accès au dernier élément avec un index négatif</span>
<span class="py-function">print</span>(<span class="py-string">f"Dernier élément : {<span class="py-variable">nombres</span>[-<span class="py-number">1</span>]}"</span>) <span class="py-comment"># Output: 50</span></code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Modification des éléments et ajout/suppression</h4><p class="text-gray-700 mb-4">Les listes sont mutables, ce qui signifie que vous pouvez modifier, ajouter ou supprimer des éléments après leur création.</p><div class="code-block"><pre><code><span class="py-variable">fruits</span> <span class="py-operator">=</span> [<span class="py-string">"pomme"</span>, <span class="py-string">"banane"</span>, <span class="py-string">"cerise"</span>]
<span class="py-function">print</span>(<span class="py-string">f"Liste initiale : {<span class="py-variable">fruits</span>}"</span>)

<span class="py-comment"># Modifier un élément</span>
<span class="py-variable">fruits</span>[<span class="py-number">1</span>] <span class="py-operator">=</span> <span class="py-string">"orange"</span>
<span class="py-function">print</span>(<span class="py-string">f"Après modification : {<span class="py-variable">fruits</span>}"</span>) <span class="py-comment"># Output: ['pomme', 'orange', 'cerise']</span>

<span class="py-comment"># Ajouter un élément à la fin</span>
<span class="py-variable">fruits</span>.<span class="py-function">append</span>(<span class="py-string">"mangue"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après ajout : {<span class="py-variable">fruits</span>}"</span>) <span class="py-comment"># Output: ['pomme', 'orange', 'cerise', 'mangue']</span>

<span class="py-comment"># Insérer un élément à un index spécifique</span>
<span class="py-variable">fruits</span>.<span class="py-function">insert</span>(<span class="py-number">1</span>, <span class="py-string">"kiwi"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après insertion : {<span class="py-variable">fruits</span>}"</span>) <span class="py-comment"># Output: ['pomme', 'kiwi', 'orange', 'cerise', 'mangue']</span>

<span class="py-comment"># Supprimer un élément par sa valeur</span>
<span class="py-variable">fruits</span>.<span class="py-function">remove</span>(<span class="py-string">"orange"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après suppression par valeur : {<span class="py-variable">fruits</span>}"</span>) <span class="py-comment"># Output: ['pomme', 'kiwi', 'cerise', 'mangue']</span>

<span class="py-comment"># Supprimer un élément par son index (et le récupérer)</span>
<span class="py-variable">fruit_supprime</span> <span class="py-operator">=</span> <span class="py-variable">fruits</span>.<span class="py-function">pop</span>(<span class="py-number">0</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après suppression par index : {<span class="py-variable">fruits</span>}, fruit supprimé : {<span class="py-variable">fruit_supprime</span>}"</span>) <span class="py-comment"># Output: ['kiwi', 'cerise', 'mangue'], fruit supprimé : pomme</span>

<span class="py-comment"># Vider la liste</span>
<span class="py-variable">fruits</span>.<span class="py-function">clear</span>()
<span class="py-function">print</span>(<span class="py-string">f"Liste vidée : {<span class="py-variable">fruits</span>}"</span>) <span class="py-comment"># Output: []</span></code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Parcours de liste avec `for`</h4><p class="text-gray-700 mb-4">La boucle <code>for</code> est couramment utilisée pour itérer sur tous les éléments d'une liste.</p><div class="code-block"><pre><code><span class="py-variable">couleurs</span> <span class="py-operator">=</span> [<span class="py-string">"rouge"</span>, <span class="py-string">"vert"</span>, <span class="py-string">"bleu"</span>]
<span class="py-function">print</span>(<span class="py-string">"Mes couleurs préférées :"</span>)
<span class="py-keyword">for</span> <span class="py-variable">couleur</span> <span class="py-keyword">in</span> <span class="py-variable">couleurs</span>:
    <span class="py-function">print</span>(<span class="py-string">f"- {<span class="py-variable">couleur</span>}"</span>)

<span class="py-comment"># Parcours avec index (utile si vous avez besoin de la position)</span>
<span class="py-function">print</span>(<span class="py-string">"Couleurs avec leur index :"</span>)
<span class="py-keyword">for</span> <span class="py-variable">index</span>, <span class="py-variable">couleur</span> <span class="py-keyword">in</span> <span class="py-builtin">enumerate</span>(<span class="py-variable">couleurs</span>):
    <span class="py-function">print</span>(<span class="py-string">f"À l'index {<span class="py-variable">index</span>} : {<span class="py-variable">couleur</span>}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 4 : Tranches (Slicing) et opérations courantes</h4><p class="text-gray-700 mb-4">Vous pouvez extraire des sous-listes (tranches) et effectuer des opérations comme la concaténation ou la recherche.</p><div class="code-block"><pre><code><span class="py-variable">alphabet</span> <span class="py-operator">=</span> [<span class="py-string">'a'</span>, <span class="py-string">'b'</span>, <span class="py-string">'c'</span>, <span class="py-string">'d'</span>, <span class="py-string">'e'</span>, <span class="py-string">'f'</span>]

<span class="py-comment"># Tranche : [début:fin] (fin est exclusive)</span>
<span class="py-function">print</span>(<span class="py-string">f"Les 3 premiers éléments : {<span class="py-variable">alphabet</span>[<span class="py-number">0</span>:<span class="py-number">3</span>]}"</span>) <span class="py-comment"># Output: ['a', 'b', 'c']</span>
<span class="py-function">print</span>(<span class="py-string">f"Du 2ème à la fin : {<span class="py-variable">alphabet</span>[<span class="py-number">1</span>:]}"</span>)   <span class="py-comment"># Output: ['b', 'c', 'd', 'e', 'f']</span>
<span class="py-function">print</span>(<span class="py-string">f"Les 2 derniers éléments : {<span class="py-variable">alphabet</span>[-<span class="py-number">2</span>:]}"</span>) <span class="py-comment"># Output: ['e', 'f']</span>

<span class="py-comment"># Longueur de la liste</span>
<span class="py-function">print</span>(<span class="py-string">f"Nombre d'éléments : {<span class="py-builtin">len</span>(<span class="py-variable">alphabet</span>)}"</span>) <span class="py-comment"># Output: 6</span>

<span class="py-comment"># Vérifier si un élément est dans la liste</span>
<span class="py-function">print</span>(<span class="py-string">f"'c' est dans la liste ? {<span class="py-string">'c'</span> <span class="py-keyword">in</span> <span class="py-variable">alphabet</span>}"</span>) <span class="py-comment"># Output: True</span>
<span class="py-function">print</span>(<span class="py-string">f"'z' est dans la liste ? {<span class="py-string">'z'</span> <span class="py-keyword">in</span> <span class="py-variable">alphabet</span>}"</span>) <span class="py-comment"># Output: False</span>

<span class="py-comment"># Concaténation de listes</span>
<span class="py-variable">liste1</span> <span class="py-operator">=</span> [<span class="py-number">1</span>, <span class="py-number">2</span>]
<span class="py-variable">liste2</span> <span class="py-operator">=</span> [<span class="py-number">3</span>, <span class="py-number">4</span>]
<span class="py-variable">liste_concatenee</span> <span class="py-operator">=</span> <span class="py-variable">liste1</span> <span class="py-operator">+</span> <span class="py-variable">liste2</span>
<span class="py-function">print</span>(<span class="py-string">f"Listes concaténées : {<span class="py-variable">liste_concatenee</span>}"</span>) <span class="py-comment"># Output: [1, 2, 3, 4]</span>

<span class="py-comment"># Tri d'une liste (modifie la liste originale)</span>
<span class="py-variable">nombres_desordre</span> <span class="py-operator">=</span> [<span class="py-number">3</span>, <span class="py-number">1</span>, <span class="py-number">4</span>, <span class="py-number">1</span>, <span class="py-number">5</span>, <span class="py-number">9</span>, <span class="py-number">2</span>]
<span class="py-variable">nombres_desordre</span>.<span class="py-function">sort</span>()
<span class="py-function">print</span>(<span class="py-string">f"Liste triée : {<span class="py-variable">nombres_desordre</span>}"</span>) <span class="py-comment"># Output: [1, 1, 2, 3, 4, 5, 9]</span>

<span class="py-comment"># Obtenir une nouvelle liste triée sans modifier l'originale</span>
<span class="py-variable">nombres_original</span> <span class="py-operator">=</span> [<span class="py-number">5</span>, <span class="py-number">2</span>, <span class="py-number">8</span>, <span class="py-number">1</span>]
<span class="py-variable">nombres_tries</span> <span class="py-operator">=</span> <span class="py-builtin">sorted</span>(<span class="py-variable">nombres_original</span>)
<span class="py-function">print</span>(<span class="py-string">f"Liste originale : {<span class="py-variable">nombres_original</span>}"</span>) <span class="py-comment"># Output: [5, 2, 8, 1]</span>
<span class="py-function">print</span>(<span class="py-string">f"Nouvelle liste triée : {<span class="py-variable">nombres_tries</span>}"</span>) <span class="py-comment"># Output: [1, 2, 5, 8]</span></code></pre></div></div>
        </div>

        <div id="exercices-listes" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Listes</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Créer et Afficher une Liste</h4><p class="text-gray-700 mb-4">Créez une liste appelée <code>fruits_preferes</code> contenant au moins 3 de vos fruits préférés. Affichez la liste entière, puis le premier fruit, et enfin le dernier fruit.</p><button onclick="toggleSolution('sol_list_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_list_1" class="solution"><div class="code-block"><pre><code><span class="py-variable">fruits_preferes</span> <span class="py-operator">=</span> [<span class="py-string">"Pomme"</span>, <span class="py-string">"Mangue"</span>, <span class="py-string">"Fraise"</span>, <span class="py-string">"Raisin"</span>]
<span class="py-function">print</span>(<span class="py-string">f"Ma liste de fruits : {<span class="py-variable">fruits_preferes</span>}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Mon premier fruit : {<span class="py-variable">fruits_preferes</span>[<span class="py-number">0</span>]}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Mon dernier fruit : {<span class="py-variable">fruits_preferes</span>[-<span class="py-number">1</span>]}"</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Modifier une Liste</h4><p class="text-gray-700 mb-4">En utilisant la liste <code>fruits_preferes</code> de l'exercice précédent, ajoutez un nouveau fruit à la fin, insérez un fruit à la deuxième position, puis supprimez le fruit à la troisième position.</p><button onclick="toggleSolution('sol_list_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_list_2" class="solution"><div class="code-block"><pre><code><span class="py-variable">fruits_preferes</span> <span class="py-operator">=</span> [<span class="py-string">"Pomme"</span>, <span class="py-string">"Mangue"</span>, <span class="py-string">"Fraise"</span>, <span class="py-string">"Raisin"</span>]
<span class="py-function">print</span>(<span class="py-string">f"Initial : {<span class="py-variable">fruits_preferes</span>}"</span>)
<span class="py-variable">fruits_preferes</span>.<span class="py-function">append</span>(<span class="py-string">"Kiwi"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après append : {<span class="py-variable">fruits_preferes</span>}"</span>)
<span class="py-variable">fruits_preferes</span>.<span class="py-function">insert</span>(<span class="py-number">1</span>, <span class="py-string">"Ananas"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après insert : {<span class="py-variable">fruits_preferes</span>}"</span>)
<span class="py-variable">fruits_preferes</span>.<span class="py-function">pop</span>(<span class="py-number">2</span>) <span class="py-comment"># Supprime l'élément à l'index 2 (Mangue)</span>
<span class="py-function">print</span>(<span class="py-string">f"Après pop : {<span class="py-variable">fruits_preferes</span>}"</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Calculer la Moyenne</h4><p class="text-gray-700 mb-4">Écrivez une fonction <code>calculer_moyenne</code> qui prend une liste de nombres et retourne leur moyenne. Si la liste est vide, elle doit retourner 0.</p><button onclick="toggleSolution('sol_list_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_list_3" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">calculer_moyenne</span>(<span class="py-variable">liste_nombres</span>):
    <span class="py-keyword">if</span> <span class="py-builtin">len</span>(<span class="py-variable">liste_nombres</span>) <span class="py-operator">==</span> <span class="py-number">0</span>:
        <span class="py-keyword">return</span> <span class="py-number">0</span>
    <span class="py-variable">somme</span> <span class="py-operator">=</span> <span class="py-builtin">sum</span>(<span class="py-variable">liste_nombres</span>) <span class="py-comment"># Utilisation de la fonction sum() intégrée</span>
    <span class="py-keyword">return</span> <span class="py-variable">somme</span> <span class="py-operator">/</span> <span class="py-builtin">len</span>(<span class="py-variable">liste_nombres</span>)

<span class="py-comment"># Tests</span>
<span class="py-function">print</span>(<span class="py-function">calculer_moyenne</span>([<span class="py-number">10</span>, <span class="py-number">20</span>, <span class="py-number">30</span>])) <span class="py-comment"># Devrait afficher 20.0</span>
<span class="py-function">print</span>(<span class="py-function">calculer_moyenne</span>([<span class="py-number">5</span>, <span class="py-number">5</span>, <span class="py-number">5</span>, <span class="py-number">5</span>])) <span class="py-comment"># Devrait afficher 5.0</span>
<span class="py-function">print</span>(<span class="py-function">calculer_moyenne</span>([])) <span class="py-comment"># Devrait afficher 0</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 4 : Filtrer les Nombres Pairs</h4><p class="text-gray-700 mb-4">Écrivez une fonction <code>filtrer_pairs</code> qui prend une liste de nombres entiers et retourne une nouvelle liste contenant uniquement les nombres pairs.</p><button onclick="toggleSolution('sol_list_4')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_list_4" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">filtrer_pairs</span>(<span class="py-variable">liste_entiers</span>):
    <span class="py-variable">pairs</span> <span class="py-operator">=</span> []
    <span class="py-keyword">for</span> <span class="py-variable">nombre</span> <span class="py-keyword">in</span> <span class="py-variable">liste_entiers</span>:
        <span class="py-keyword">if</span> <span class="py-variable">nombre</span> <span class="py-operator">%</span> <span class="py-number">2</span> <span class="py-operator">==</span> <span class="py-number">0</span>:
            <span class="py-variable">pairs</span>.<span class="py-function">append</span>(<span class="py-variable">nombre</span>)
    <span class="py-keyword">return</span> <span class="py-variable">pairs</span>

<span class="py-comment"># Tests</span>
<span class="py-function">print</span>(<span class="py-function">filtrer_pairs</span>([<span class="py-number">1</span>, <span class="py-number">2</span>, <span class="py-number">3</span>, <span class="py-number">4</span>, <span class="py-number">5</span>, <span class="py-number">6</span>])) <span class="py-comment"># Devrait afficher [2, 4, 6]</span>
<span class="py-function">print</span>(<span class="py-function">filtrer_pairs</span>([<span class="py-number">7</span>, <span class="py-number">9</span>, <span class="py-number">11</span>])) <span class="py-comment"># Devrait afficher []</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 5 : Inverser une Liste</h4><p class="text-gray-700 mb-4">Créez une fonction <code>inverser_liste</code> qui prend une liste et retourne une nouvelle liste avec les éléments dans l'ordre inverse.</p><button onclick="toggleSolution('sol_list_5')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_list_5" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">inverser_liste</span>(<span class="py-variable">ma_liste</span>):
    <span class="py-comment"># Méthode 1 : Utilisation de la méthode reverse() (modifie l'originale)</span>
    <span class="py-comment"># liste_inversee = ma_liste[:] # Crée une copie pour ne pas modifier l'originale</span>
    <span class="py-comment"># liste_inversee.reverse()</span>
    <span class="py-comment"># return liste_inversee</span>

    <span class="py-comment"># Méthode 2 : Utilisation du slicing étendu (crée une nouvelle liste)</span>
    <span class="py-keyword">return</span> <span class="py-variable">ma_liste</span>[::<span class="py-number">-1</span>]

<span class="py-comment"># Tests</span>
<span class="py-variable">originale</span> <span class="py-operator">=</span> [<span class="py-string">"a"</span>, <span class="py-string">"b"</span>, <span class="py-string">"c"</span>]
<span class="py-function">print</span>(<span class="py-function">inverser_liste</span>(<span class="py-variable">originale</span>)) <span class="py-comment"># Devrait afficher ['c', 'b', 'a']</span>
<span class="py-function">print</span>(<span class="py-function">inverser_liste</span>([<span class="py-number">1</span>, <span class="py-number">2</span>, <span class="py-number">3</span>, <span class="py-number">4</span>])) <span class="py-comment"># Devrait afficher [4, 3, 2, 1]</span>
<span class="py-function">print</span>(<span class="py-string">f"Liste originale après inversion : {<span class="py-variable">originale</span>}"</span>) <span class="py-comment"># Vérifier que l'originale n'est pas modifiée</span></code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <section id="tuples" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 10 : Les Tuples</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Les tuples sont similaires aux listes, mais avec une différence cruciale : ils sont <strong>immuables</strong>. Cela signifie qu'une fois créés, vous ne pouvez pas modifier, ajouter ou supprimer leurs éléments. Ils sont souvent utilisés pour stocker des collections d'éléments hétérogènes qui ne devraient pas changer.</p>
        
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Création et accès aux éléments</h4><p class="text-gray-700 mb-4">Les tuples sont définis par des parenthèses <code>()</code>. L'accès aux éléments se fait comme pour les listes, par index.</p><div class="code-block"><pre><code><span class="py-comment"># Création d'un tuple</span>
<span class="py-variable">point_3d</span> <span class="py-operator">=</span> (<span class="py-number">10</span>, <span class="py-number">20</span>, <span class="py-number">30</span>)
<span class="py-variable">informations_personne</span> <span class="py-operator">=</span> (<span class="py-string">"Alice"</span>, <span class="py-number">30</span>, <span class="py-string">"Développeuse"</span>)

<span class="py-function">print</span>(<span class="py-string">f"Point 3D : {<span class="py-variable">point_3d</span>}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Nom : {<span class="py-variable">informations_personne</span>[<span class="py-number">0</span>]}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Âge : {<span class="py-variable">informations_personne</span>[<span class="py-number">1</span>]}"</span>)

<span class="py-comment"># Tuple d'un seul élément (nécessite une virgule)</span>
<span class="py-variable">mon_tuple_seul</span> <span class="py-operator">=</span> (<span class="py-string">"seul element"</span>,)
<span class="py-function">print</span>(<span class="py-string">f"Tuple d'un seul élément : {<span class="py-variable">mon_tuple_seul</span>}, type : {<span class="py-builtin">type</span>(<span class="py-variable">mon_tuple_seul</span>)}"</span>)

<span class="py-comment"># Sans la virgule, ce ne serait pas un tuple</span>
<span class="py-variable">pas_un_tuple</span> <span class="py-operator">=</span> (<span class="py-string">"un string"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Pas un tuple : {<span class="py-variable">pas_un_tuple</span>}, type : {<span class="py-builtin">type</span>(<span class="py-variable">pas_un_tuple</span>)}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Immutabilité</h4><p class="text-gray-700 mb-4">Tenter de modifier un tuple provoquera une erreur.</p><div class="code-block"><pre><code><span class="py-variable">coordonnees</span> <span class="py-operator">=</span> (<span class="py-number">10</span>, <span class="py-number">20</span>)
<span class="py-function">print</span>(<span class="py-string">f"Coordonnées initiales : {<span class="py-variable">coordonnees</span>}"</span>)

<span class="py-comment"># Tenter de modifier un élément (décommenter pour voir l'erreur)</span>
<span class="py-comment"># coordonnees[0] = 15 # Cela lèvera une TypeError</span>
<span class="py-comment"># print(coordonnees)</span>

<span class="py-comment"># Tenter d'ajouter un élément (décommenter pour voir l'erreur)</span>
<span class="py-comment"># coordonnees.append(30) # Cela lèvera une AttributeError</span>
<span class="py-comment"># print(coordonnees)</span></code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Opérations courantes sur les tuples</h4><p class="text-gray-700 mb-4">Bien que non modifiables, les tuples supportent de nombreuses opérations similaires aux listes pour la lecture et la manipulation.</p><div class="code-block"><pre><code><span class="py-variable">jours_semaine</span> <span class="py-operator">=</span> (<span class="py-string">"Lundi"</span>, <span class="py-string">"Mardi"</span>, <span class="py-string">"Mercredi"</span>, <span class="py-string">"Jeudi"</span>, <span class="py-string">"Vendredi"</span>, <span class="py-string">"Samedi"</span>, <span class="py-string">"Dimanche"</span>)

<span class="py-comment"># Longueur du tuple</span>
<span class="py-function">print</span>(<span class="py-string">f"Nombre de jours : {<span class="py-builtin">len</span>(<span class="py-variable">jours_semaine</span>)}"</span>)

<span class="py-comment"># Concaténation de tuples</span>
<span class="py-variable">tuple1</span> <span class="py-operator">=</span> (<span class="py-number">1</span>, <span class="py-number">2</span>)
<span class="py-variable">tuple2</span> <span class="py-operator">=</span> (<span class="py-number">3</span>, <span class="py-number">4</span>)
<span class="py-variable">tuple_concatene</span> <span class="py-operator">=</span> <span class="py-variable">tuple1</span> <span class="py-operator">+</span> <span class="py-variable">tuple2</span>
<span class="py-function">print</span>(<span class="py-string">f"Tuple concaténé : {<span class="py-variable">tuple_concatene</span>}"</span>)

<span class="py-comment"># Répétition de tuple</span>
<span class="py-function">print</span>(<span class="py-string">f"Tuple répété : {<span class="py-variable">tuple1</span> <span class="py-operator">*</span> <span class="py-number">3</span>}"</span>)

<span class="py-comment"># Vérifier la présence d'un élément</span>
<span class="py-function">print</span>(<span class="py-string">f"'Lundi' est dans le tuple ? {<span class="py-string">'Lundi'</span> <span class="py-keyword">in</span> <span class="py-variable">jours_semaine</span>}"</span>)

<span class="py-comment"># Parcours d'un tuple</span>
<span class="py-function">print</span>(<span class="py-string">"Jours de la semaine :"</span>)
<span class="py-keyword">for</span> <span class="py-variable">jour</span> <span class="py-keyword">in</span> <span class="py-variable">jours_semaine</span>:
    <span class="py-function">print</span>(<span class="py-variable">jour</span>)

<span class="py-comment"># Dépaquetage (unpacking) de tuple</span>
<span class="py-variable">x</span>, <span class="py-variable">y</span>, <span class="py-variable">z</span> <span class="py-operator">=</span> <span class="py-variable">point_3d</span>
<span class="py-function">print</span>(<span class="py-string">f"Dépaquetage : x={<span class="py-variable">x</span>}, y={<span class="py-variable">y</span>}, z={<span class="py-variable">z</span>}"</span>)</code></pre></div></div>
        </div>

        <div id="exercices-tuples" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Tuples</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Créer et Afficher un Tuple</h4><p class="text-gray-700 mb-4">Créez un tuple <code>informations_livre</code> contenant le titre, l'auteur et l'année de publication d'un livre. Affichez chaque information séparément.</p><button onclick="toggleSolution('sol_tuple_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_tuple_1" class="solution"><div class="code-block"><pre><code><span class="py-variable">informations_livre</span> <span class="py-operator">=</span> (<span class="py-string">"Le Seigneur des Anneaux"</span>, <span class="py-string">"J.R.R. Tolkien"</span>, <span class="py-number">1954</span>)
<span class="py-function">print</span>(<span class="py-string">f"Titre : {<span class="py-variable">informations_livre</span>[<span class="py-number">0</span>]}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Auteur : {<span class="py-variable">informations_livre</span>[<span class="py-number">1</span>]}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Année : {<span class="py-variable">informations_livre</span>[<span class="py-number">2</span>]}"</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Dépaquetage de Tuple</h4><p class="text-gray-700 mb-4">Créez un tuple <code>coleurs_rgb</code> avec trois valeurs (par exemple 255, 0, 0 pour le rouge). Dépaquetez ce tuple en trois variables <code>r</code>, <code>g</code>, <code>b</code> et affichez-les.</p><button onclick="toggleSolution('sol_tuple_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_tuple_2" class="solution"><div class="code-block"><pre><code><span class="py-variable">couleurs_rgb</span> <span class="py-operator">=</span> (<span class="py-number">255</span>, <span class="py-number">0</span>, <span class="py-number">0</span>) <span class="py-comment"># Rouge</span>
<span class="py-variable">r</span>, <span class="py-variable">g</span>, <span class="py-variable">b</span> <span class="py-operator">=</span> <span class="py-variable">couleurs_rgb</span>
<span class="py-function">print</span>(<span class="py-string">f"Composante Rouge : {<span class="py-variable">r</span>}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Composante Verte : {<span class="py-variable">g</span>}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Composante Bleue : {<span class="py-variable">b</span>}"</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Fusion de Tuples</h4><p class="text-gray-700 mb-4">Créez deux tuples, <code>tuple_a</code> avec (1, 2) et <code>tuple_b</code> avec (3, 4). Concaténez-les pour former un nouveau tuple et affichez-le.</p><button onclick="toggleSolution('sol_tuple_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_tuple_3" class="solution"><div class="code-block"><pre><code><span class="py-variable">tuple_a</span> <span class="py-operator">=</span> (<span class="py-number">1</span>, <span class="py-number">2</span>)
<span class="py-variable">tuple_b</span> <span class="py-operator">=</span> (<span class="py-number">3</span>, <span class="py-number">4</span>)
<span class="py-variable">tuple_fusionne</span> <span class="py-operator">=</span> <span class="py-variable">tuple_a</span> <span class="py-operator">+</span> <span class="py-variable">tuple_b</span>
<span class="py-function">print</span>(<span class="py-string">f"Tuple fusionné : {<span class="py-variable">tuple_fusionne</span>}"</span>) <span class="py-comment"># Devrait afficher (1, 2, 3, 4)</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 4 : Compter les Occurrences</h4><p class="text-gray-700 mb-4">Créez un tuple <code>nombres_tuple</code> avec des nombres répétés (par exemple (1, 2, 2, 3, 1, 4)). Utilisez la méthode <code>count()</code> pour compter combien de fois le nombre 1 apparaît.</p><button onclick="toggleSolution('sol_tuple_4')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_tuple_4" class="solution"><div class="code-block"><pre><code><span class="py-variable">nombres_tuple</span> <span class="py-operator">=</span> (<span class="py-number">1</span>, <span class="py-number">2</span>, <span class="py-number">2</span>, <span class="py-number">3</span>, <span class="py-number">1</span>, <span class="py-number">4</span>)
<span class="py-variable">nombre_occurrences_1</span> <span class="py-operator">=</span> <span class="py-variable">nombres_tuple</span>.<span class="py-function">count</span>(<span class="py-number">1</span>)
<span class="py-function">print</span>(<span class="py-string">f"Le nombre 1 apparaît {<span class="py-variable">nombre_occurrences_1</span>} fois."</span>) <span class="py-comment"># Devrait afficher 2</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 5 : Tuple et Fonction</h4><p class="text-gray-700 mb-4">Écrivez une fonction <code>min_max_tuple</code> qui prend un tuple de nombres et retourne un nouveau tuple contenant le nombre minimum et le nombre maximum de l'original. Gérez le cas d'un tuple vide.</p><button onclick="toggleSolution('sol_tuple_5')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_tuple_5" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">min_max_tuple</span>(<span class="py-variable">t_nombres</span>):
    <span class="py-keyword">if</span> <span class="py-builtin">len</span>(<span class="py-variable">t_nombres</span>) <span class="py-operator">==</span> <span class="py-number">0</span>:
        <span class="py-keyword">return</span> (<span class="py-keyword">None</span>, <span class="py-keyword">None</span>) <span class="py-comment"># Retourne un tuple de None pour un tuple vide</span>
    <span class="py-variable">minimum</span> <span class="py-operator">=</span> <span class="py-builtin">min</span>(<span class="py-variable">t_nombres</span>)
    <span class="py-variable">maximum</span> <span class="py-operator">=</span> <span class="py-builtin">max</span>(<span class="py-variable">t_nombres</span>)
    <span class="py-keyword">return</span> (<span class="py-variable">minimum</span>, <span class="py-variable">maximum</span>)

<span class="py-comment"># Tests</span>
<span class="py-function">print</span>(<span class="py-function">min_max_tuple</span>((<span class="py-number">10</span>, <span class="py-number">5</span>, <span class="py-number">20</span>, <span class="py-number">15</span>))) <span class="py-comment"># Devrait afficher (5, 20)</span>
<span class="py-function">print</span>(<span class="py-function">min_max_tuple</span>((<span class="py-number">7</span>,))) <span class="py-comment"># Devrait afficher (7, 7)</span>
<span class="py-function">print</span>(<span class="py-function">min_max_tuple</span>(())) <span class="py-comment"># Devrait afficher (None, None)</span></code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <section id="dictionnaires" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 11 : Les Dictionnaires</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Les dictionnaires sont des collections non ordonnées de paires <strong>clé-valeur</strong>. Chaque clé est unique et est utilisée pour accéder à sa valeur associée. Ils sont extrêmement utiles pour stocker des données structurées et sont souvent appelés "tableaux associatifs" ou "cartes" dans d'autres langages.</p>
        
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Création et accès aux éléments</h4><p class="text-gray-700 mb-4">Un dictionnaire est défini par des accolades <code>{}</code>, où chaque élément est une paire <code>clé: valeur</code>.</p><div class="code-block"><pre><code><span class="py-comment"># Création d'un dictionnaire d'informations sur une personne</span>
<span class="py-variable">personne</span> <span class="py-operator">=</span> {
    <span class="py-string">"nom"</span>: <span class="py-string">"Alice"</span>,
    <span class="py-string">"age"</span>: <span class="py-number">30</span>,
    <span class="py-string">"ville"</span>: <span class="py-string">"Paris"</span>
}
<span class="py-function">print</span>(<span class="py-string">f"Dictionnaire complet : {<span class="py-variable">personne</span>}"</span>)

<span class="py-comment"># Accès aux valeurs par leur clé</span>
<span class="py-function">print</span>(<span class="py-string">f"Nom : {<span class="py-variable">personne</span>[<span class="py-string">"nom"</span>]}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Ville : {<span class="py-variable">personne</span>[<span class="py-string">"ville"</span>]}"</span>)

<span class="py-comment"># Utilisation de get() pour accéder (évite les erreurs si la clé n'existe pas)</span>
<span class="py-function">print</span>(<span class="py-string">f"Age (avec get) : {<span class="py-variable">personne</span>.<span class="py-function">get</span>(<span class="py-string">"age"</span>)}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Pays (avec get, valeur par défaut) : {<span class="py-variable">personne</span>.<span class="py-function">get</span>(<span class="py-string">"pays"</span>, <span class="py-string">"Non spécifié"</span>)}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Ajout, modification et suppression d'éléments</h4><p class="text-gray-700 mb-4">Les dictionnaires sont mutables. Vous pouvez ajouter de nouvelles paires clé-valeur, modifier des valeurs existantes ou supprimer des éléments.</p><div class="code-block"><pre><code><span class="py-variable">notes</span> <span class="py-operator">=</span> {<span class="py-string">"Maths"</span>: <span class="py-number">15</span>, <span class="py-string">"Physique"</span>: <span class="py-number">12</span>}
<span class="py-function">print</span>(<span class="py-string">f"Notes initiales : {<span class="py-variable">notes</span>}"</span>)

<span class="py-comment"># Ajouter un nouvel élément</span>
<span class="py-variable">notes</span>[<span class="py-string">"Chimie"</span>] <span class="py-operator">=</span> <span class="py-number">18</span>
<span class="py-function">print</span>(<span class="py-string">f"Après ajout : {<span class="py-variable">notes</span>}"</span>)

<span class="py-comment"># Modifier une valeur existante</span>
<span class="py-variable">notes</span>[<span class="py-string">"Physique"</span>] <span class="py-operator">=</span> <span class="py-number">14</span>
<span class="py-function">print</span>(<span class="py-string">f"Après modification : {<span class="py-variable">notes</span>}"</span>)

<span class="py-comment"># Supprimer un élément avec del</span>
<span class="py-keyword">del</span> <span class="py-variable">notes</span>[<span class="py-string">"Maths"</span>]
<span class="py-function">print</span>(<span class="py-string">f"Après suppression de Maths : {<span class="py-variable">notes</span>}"</span>)

<span class="py-comment"># Supprimer un élément avec pop() (et récupérer sa valeur)</span>
<span class="py-variable">note_chimie</span> <span class="py-operator">=</span> <span class="py-variable">notes</span>.<span class="py-function">pop</span>(<span class="py-string">"Chimie"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après pop de Chimie : {<span class="py-variable">notes</span>}, valeur supprimée : {<span class="py-variable">note_chimie</span>}"</span>)

<span class="py-comment"># Vider le dictionnaire</span>
<span class="py-variable">notes</span>.<span class="py-function">clear</span>()
<span class="py-function">print</span>(<span class="py-string">f"Dictionnaire vidé : {<span class="py-variable">notes</span>}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Parcours de dictionnaire</h4><p class="text-gray-700 mb-4">Vous pouvez itérer sur les clés, les valeurs, ou les paires clé-valeur d'un dictionnaire.</p><div class="code-block"><pre><code><span class="py-variable">produits</span> <span class="py-operator">=</span> {
    <span class="py-string">"Ordinateur"</span>: <span class="py-number">1200</span>,
    <span class="py-string">"Souris"</span>: <span class="py-number">25</span>,
    <span class="py-string">"Clavier"</span>: <span class="py-number">75</span>
}

<span class="py-comment"># Parcours des clés (par défaut)</span>
<span class="py-function">print</span>(<span class="py-string">"Clés des produits :"</span>)
<span class="py-keyword">for</span> <span class="py-variable">produit</span> <span class="py-keyword">in</span> <span class="py-variable">produits</span>:
    <span class="py-function">print</span>(<span class="py-variable">produit</span>)

<span class="py-comment"># Parcours des valeurs</span>
<span class="py-function">print</span>(<span class="py-string">"Prix des produits :"</span>)
<span class="py-keyword">for</span> <span class="py-variable">prix</span> <span class="py-keyword">in</span> <span class="py-variable">produits</span>.<span class="py-function">values</span>():
    <span class="py-function">print</span>(<span class="py-variable">prix</span>)

<span class="py-comment"># Parcours des paires clé-valeur</span>
<span class="py-function">print</span>(<span class="py-string">"Produits et leurs prix :"</span>)
<span class="py-keyword">for</span> <span class="py-variable">produit</span>, <span class="py-variable">prix</span> <span class="py-keyword">in</span> <span class="py-variable">produits</span>.<span class="py-function">items</span>():
    <span class="py-function">print</span>(<span class="py-string">f"- {<span class="py-variable">produit</span>} : {<span class="py-variable">prix</span>} €"</span>)</code></pre></div></div>
        </div>

        <div id="exercices-dictionnaires" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Dictionnaires</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Créer et Accéder</h4><p class="text-gray-700 mb-4">Créez un dictionnaire <code>capitale_pays</code> où les clés sont des noms de pays (ex: "France") et les valeurs leurs capitales (ex: "Paris"). Ajoutez au moins 3 pays. Affichez la capitale d'un pays de votre choix, puis la capitale d'un pays qui n'est pas dans le dictionnaire en utilisant <code>.get()</code> avec une valeur par défaut.</p><button onclick="toggleSolution('sol_dict_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_dict_1" class="solution"><div class="code-block"><pre><code><span class="py-variable">capitale_pays</span> <span class="py-operator">=</span> {
    <span class="py-string">"France"</span>: <span class="py-string">"Paris"</span>,
    <span class="py-string">"Allemagne"</span>: <span class="py-string">"Berlin"</span>,
    <span class="py-string">"Espagne"</span>: <span class="py-string">"Madrid"</span>
}
<span class="py-function">print</span>(<span class="py-string">f"Capitale de la France : {<span class="py-variable">capitale_pays</span>[<span class="py-string">"France"</span>]}"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Capitale de l'Italie : {<span class="py-variable">capitale_pays</span>.<span class="py-function">get</span>(<span class="py-string">"Italie"</span>, <span class="py-string">"Non trouvée"</span>)}"</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Mettre à Jour un Dictionnaire</h4><p class="text-gray-700 mb-4">En utilisant le dictionnaire <code>capitale_pays</code>, ajoutez "Italie" avec "Rome" comme capitale. Modifiez la capitale de l'Allemagne en "Bonn" (juste pour l'exercice !) puis supprimez l'Espagne.</p><button onclick="toggleSolution('sol_dict_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_dict_2" class="solution"><div class="code-block"><pre><code><span class="py-variable">capitale_pays</span> <span class="py-operator">=</span> {
    <span class="py-string">"France"</span>: <span class="py-string">"Paris"</span>,
    <span class="py-string">"Allemagne"</span>: <span class="py-string">"Berlin"</span>,
    <span class="py-string">"Espagne"</span>: <span class="py-string">"Madrid"</span>
}
<span class="py-function">print</span>(<span class="py-string">f"Initial : {<span class="py-variable">capitale_pays</span>}"</span>)
<span class="py-variable">capitale_pays</span>[<span class="py-string">"Italie"</span>] <span class="py-operator">=</span> <span class="py-string">"Rome"</span>
<span class="py-function">print</span>(<span class="py-string">f"Après ajout Italie : {<span class="py-variable">capitale_pays</span>}"</span>)
<span class="py-variable">capitale_pays</span>[<span class="py-string">"Allemagne"</span>] <span class="py-operator">=</span> <span class="py-string">"Bonn"</span>
<span class="py-function">print</span>(<span class="py-string">f"Après modification Allemagne : {<span class="py-variable">capitale_pays</span>}"</span>)
<span class="py-keyword">del</span> <span class="py-variable">capitale_pays</span>[<span class="py-string">"Espagne"</span>]
<span class="py-function">print</span>(<span class="py-string">f"Après suppression Espagne : {<span class="py-variable">capitale_pays</span>}"</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Parcourir un Dictionnaire</h4><p class="text-gray-700 mb-4">Créez un dictionnaire <code>inventaire</code> avec des articles et leur quantité (ex: <code>{"pommes": 50, "bananes": 30, "oranges": 70}</code>). Parcourez le dictionnaire et affichez chaque article et sa quantité de la manière suivante : "Il y a X [article] en stock."</p><button onclick="toggleSolution('sol_dict_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_dict_3" class="solution"><div class="code-block"><pre><code><span class="py-variable">inventaire</span> <span class="py-operator">=</span> {<span class="py-string">"pommes"</span>: <span class="py-number">50</span>, <span class="py-string">"bananes"</span>: <span class="py-number">30</span>, <span class="py-string">"oranges"</span>: <span class="py-number">70</span>}
<span class="py-keyword">for</span> <span class="py-variable">article</span>, <span class="py-variable">quantite</span> <span class="py-keyword">in</span> <span class="py-variable">inventaire</span>.<span class="py-function">items</span>():
    <span class="py-function">print</span>(<span class="py-string">f"Il y a {<span class="py-variable">quantite</span>} {<span class="py-variable">article</span>} en stock."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 4 : Compter les Fréquences</h4><p class="text-gray-700 mb-4">Écrivez une fonction <code>compter_frequences</code> qui prend une liste de mots et retourne un dictionnaire où les clés sont les mots et les valeurs sont le nombre de fois où chaque mot apparaît dans la liste.</p><button onclick="toggleSolution('sol_dict_4')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_dict_4" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">compter_frequences</span>(<span class="py-variable">liste_mots</span>):
    <span class="py-variable">frequences</span> <span class="py-operator">=</span> {}
    <span class="py-keyword">for</span> <span class="py-variable">mot</span> <span class="py-keyword">in</span> <span class="py-variable">liste_mots</span>:
        <span class="py-comment"># Si le mot est déjà dans le dictionnaire, incrémenter son compteur</span>
        <span class="py-comment"># Sinon, l'ajouter avec un compteur de 1</span>
        <span class="py-variable">frequences</span>[<span class="py-variable">mot</span>] <span class="py-operator">=</span> <span class="py-variable">frequences</span>.<span class="py-function">get</span>(<span class="py-variable">mot</span>, <span class="py-number">0</span>) <span class="py-operator">+</span> <span class="py-number">1</span>
    <span class="py-keyword">return</span> <span class="py-variable">frequences</span>

<span class="py-comment"># Test</span>
<span class="py-variable">mots</span> <span class="py-operator">=</span> [<span class="py-string">"pomme"</span>, <span class="py-string">"banane"</span>, <span class="py-string">"pomme"</span>, <span class="py-string">"orange"</span>, <span class="py-string">"banane"</span>, <span class="py-string">"pomme"</span>]
<span class="py-function">print</span>(<span class="py-function">compter_frequences</span>(<span class="py-variable">mots</span>)) <span class="py-comment"># Devrait afficher {'pomme': 3, 'banane': 2, 'orange': 1}</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 5 : Fusionner deux Dictionnaires</h4><p class="text-gray-700 mb-4">Créez deux dictionnaires <code>dict1</code> et <code>dict2</code>. Fusionnez-les en un nouveau dictionnaire <code>dict_fusionne</code>. Si une clé est présente dans les deux dictionnaires, la valeur du second dictionnaire doit être conservée.</p><button onclick="toggleSolution('sol_dict_5')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_dict_5" class="solution"><div class="code-block"><pre><code><span class="py-variable">dict1</span> <span class="py-operator">=</span> {<span class="py-string">"a"</span>: <span class="py-number">1</span>, <span class="py-string">"b"</span>: <span class="py-number">2</span>}
<span class="py-variable">dict2</span> <span class="py-operator">=</span> {<span class="py-string">"b"</span>: <span class="py-number">3</span>, <span class="py-string">"c"</span>: <span class="py-number">4</span>}

<span class="py-comment"># Méthode 1 : Utilisation de l'opérateur ** (Python 3.5+)</span>
<span class="py-variable">dict_fusionne_1</span> <span class="py-operator">=</span> {**<span class="py-variable">dict1</span>, **<span class="py-variable">dict2</span>}
<span class="py-function">print</span>(<span class="py-string">f"Fusion (méthode **) : {<span class="py-variable">dict_fusionne_1</span>}"</span>) <span class="py-comment"># Devrait afficher {'a': 1, 'b': 3, 'c': 4}</span>

<span class="py-comment"># Méthode 2 : Utilisation de update()</span>
<span class="py-variable">dict_fusionne_2</span> <span class="py-operator">=</span> <span class="py-variable">dict1</span>.<span class="py-function">copy</span>() <span class="py-comment"># Crée une copie pour ne pas modifier dict1</span>
<span class="py-variable">dict_fusionne_2</span>.<span class="py-function">update</span>(<span class="py-variable">dict2</span>)
<span class="py-function">print</span>(<span class="py-string">f"Fusion (méthode update) : {<span class="py-variable">dict_fusionne_2</span>}"</span>) <span class="py-comment"># Devrait afficher {'a': 1, 'b': 3, 'c': 4}</span></code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <section id="sets" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 12 : Les Ensembles (Sets)</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Les ensembles (sets) sont des collections <strong>non ordonnées</strong> d'éléments <strong>uniques</strong>. Ils sont particulièrement utiles pour des opérations mathématiques sur les ensembles (union, intersection, différence) et pour éliminer les doublons d'une liste.</p>
        
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Création et propriétés</h4><p class="text-gray-700 mb-4">Un ensemble est créé avec des accolades <code>{}</code> (attention, un dictionnaire vide est aussi <code>{}</code>) ou avec la fonction <code>set()</code>. Les doublons sont automatiquement supprimés.</p><div class="code-block"><pre><code><span class="py-comment"># Création d'un ensemble avec des doublons</span>
<span class="py-variable">nombres_dupliques</span> <span class="py-operator">=</span> [<span class="py-number">1</span>, <span class="py-number">2</span>, <span class="py-number">2</span>, <span class="py-number">3</span>, <span class="py-number">1</span>, <span class="py-number">4</span>]
<span class="py-variable">mon_ensemble</span> <span class="py-operator">=</span> <span class="py-builtin">set</span>(<span class="py-variable">nombres_dupliques</span>)
<span class="py-function">print</span>(<span class="py-string">f"Ensemble à partir d'une liste : {<span class="py-variable">mon_ensemble</span>}"</span>) <span class="py-comment"># Output: {1, 2, 3, 4} (ordre non garanti)</span>

<span class="py-comment"># Création directe</span>
<span class="py-variable">fruits_uniques</span> <span class="py-operator">=</span> {<span class="py-string">"pomme"</span>, <span class="py-string">"banane"</span>, <span class="py-string">"cerise"</span>, <span class="py-string">"pomme"</span>}
<span class="py-function">print</span>(<span class="py-string">f"Ensemble de fruits : {<span class="py-variable">fruits_uniques</span>}"</span>) <span class="py-comment"># Output: {'pomme', 'banane', 'cerise'}</span>

<span class="py-comment"># Créer un ensemble vide</span>
<span class="py-variable">ensemble_vide</span> <span class="py-operator">=</span> <span class="py-builtin">set</span>()
<span class="py-function">print</span>(<span class="py-string">f"Ensemble vide : {<span class="py-variable">ensemble_vide</span>}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Ajout et suppression d'éléments</h4><p class="text-gray-700 mb-4">Les ensembles sont mutables. Vous pouvez ajouter et supprimer des éléments.</p><div class="code-block"><pre><code><span class="py-variable">lettres</span> <span class="py-operator">=</span> {<span class="py-string">'a'</span>, <span class="py-string">'b'</span>, <span class="py-string">'c'</span>}
<span class="py-function">print</span>(<span class="py-string">f"Ensemble initial : {<span class="py-variable">lettres</span>}"</span>)

<span class="py-comment"># Ajouter un élément</span>
<span class="py-variable">lettres</span>.<span class="py-function">add</span>(<span class="py-string">'d'</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après ajout de 'd' : {<span class="py-variable">lettres</span>}"</span>)

<span class="py-comment"># Ajouter un élément déjà présent (n'a aucun effet)</span>
<span class="py-variable">lettres</span>.<span class="py-function">add</span>(<span class="py-string">'a'</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après ajout de 'a' (inchangé) : {<span class="py-variable">lettres</span>}"</span>)

<span class="py-comment"># Supprimer un élément avec remove() (lève une erreur si l'élément n'existe pas)</span>
<span class="py-variable">lettres</span>.<span class="py-function">remove</span>(<span class="py-string">'c'</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après suppression de 'c' : {<span class="py-variable">lettres</span>}"</span>)

<span class="py-comment"># Supprimer un élément avec discard() (ne lève pas d'erreur si l'élément n'existe pas)</span>
<span class="py-variable">lettres</span>.<span class="py-function">discard</span>(<span class="py-string">'z'</span>)
<span class="py-function">print</span>(<span class="py-string">f"Après discard de 'z' (inchangé) : {<span class="py-variable">lettres</span>}"</span>)

<span class="py-comment"># Supprimer un élément aléatoire (et le récupérer)</span>
<span class="py-variable">element_retire</span> <span class="py-operator">=</span> <span class="py-variable">lettres</span>.<span class="py-function">pop</span>()
<span class="py-function">print</span>(<span class="py-string">f"Après pop : {<span class="py-variable">lettres</span>}, élément retiré : {<span class="py-variable">element_retire</span>}"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Opérations ensemblistes</h4><p class="text-gray-700 mb-4">Les sets sont optimisés pour les opérations mathématiques d'ensembles.</p><div class="code-block"><pre><code><span class="py-variable">set_a</span> <span class="py-operator">=</span> {<span class="py-number">1</span>, <span class="py-number">2</span>, <span class="py-number">3</span>, <span class="py-number">4</span>}
<span class="py-variable">set_b</span> <span class="py-operator">=</span> {<span class="py-number">3</span>, <span class="py-number">4</span>, <span class="py-number">5</span>, <span class="py-number">6</span>}

<span class="py-comment"># Union (éléments présents dans A ou B)</span>
<span class="py-variable">union_sets</span> <span class="py-operator">=</span> <span class="py-variable">set_a</span>.<span class="py-function">union</span>(<span class="py-variable">set_b</span>)
<span class="py-function">print</span>(<span class="py-string">f"Union : {<span class="py-variable">union_sets</span>}"</span>) <span class="py-comment"># Output: {1, 2, 3, 4, 5, 6}</span>

<span class="py-comment"># Intersection (éléments présents dans A ET B)</span>
<span class="py-variable">intersection_sets</span> <span class="py-operator">=</span> <span class="py-variable">set_a</span>.<span class="py-function">intersection</span>(<span class="py-variable">set_b</span>)
<span class="py-function">print</span>(<span class="py-string">f"Intersection : {<span class="py-variable">intersection_sets</span>}"</span>) <span class="py-comment"># Output: {3, 4}</span>

<span class="py-comment"># Différence (éléments présents dans A MAIS PAS dans B)</span>
<span class="py-variable">difference_sets_ab</span> <span class="py-operator">=</span> <span class="py-variable">set_a</span>.<span class="py-function">difference</span>(<span class="py-variable">set_b</span>)
<span class="py-function">print</span>(<span class="py-string">f"Différence (A - B) : {<span class="py-variable">difference_sets_ab</span>}"</span>) <span class="py-comment"># Output: {1, 2}</span>

<span class="py-comment"># Différence symétrique (éléments présents dans A ou B, mais pas dans les deux)</span>
<span class="py-variable">sym_difference_sets</span> <span class="py-operator">=</span> <span class="py-variable">set_a</span>.<span class="py-function">symmetric_difference</span>(<span class="py-variable">set_b</span>)
<span class="py-function">print</span>(<span class="py-string">f"Différence symétrique : {<span class="py-variable">sym_difference_sets</span>}"</span>) <span class="py-comment"># Output: {1, 2, 5, 6}</span>

<span class="py-comment"># Sous-ensemble et super-ensemble</span>
<span class="py-variable">set_c</span> <span class="py-operator">=</span> {<span class="py-number">1</span>, <span class="py-number">2</span>}
<span class="py-function">print</span>(<span class="py-string">f"Set C est un sous-ensemble de A ? {<span class="py-variable">set_c</span>.<span class="py-function">issubset</span>(<span class="py-variable">set_a</span>)}"</span>) <span class="py-comment"># Output: True</span>
<span class="py-function">print</span>(<span class="py-string">f"Set A est un super-ensemble de C ? {<span class="py-variable">set_a</span>.<span class="py-function">issuperset</span>(<span class="py-variable">set_c</span>)}"</span>) <span class="py-comment"># Output: True</span></code></pre></div></div>
        </div>

        <div id="exercices-sets" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Ensembles</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Éliminer les Doublons</h4><p class="text-gray-700 mb-4">Vous avez une liste de nombres avec des doublons : <code>[1, 2, 2, 3, 4, 4, 5, 1]</code>. Utilisez un ensemble pour obtenir une nouvelle liste sans doublons et affichez-la.</p><button onclick="toggleSolution('sol_set_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_set_1" class="solution"><div class="code-block"><pre><code><span class="py-variable">liste_avec_doublons</span> <span class="py-operator">=</span> [<span class="py-number">1</span>, <span class="py-number">2</span>, <span class="py-number">2</span>, <span class="py-number">3</span>, <span class="py-number">4</span>, <span class="py-number">4</span>, <span class="py-number">5</span>, <span class="py-number">1</span>]
<span class="py-variable">ensemble_unique</span> <span class="py-operator">=</span> <span class="py-builtin">set</span>(<span class="py-variable">liste_avec_doublons</span>)
<span class="py-variable">liste_sans_doublons</span> <span class="py-operator">=</span> <span class="py-builtin">list</span>(<span class="py-variable">ensemble_unique</span>)
<span class="py-function">print</span>(<span class="py-string">f"Liste sans doublons : {<span class="py-variable">liste_sans_doublons</span>}"</span>) <span class="py-comment"># L'ordre peut varier</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Éléments Communs</h4><p class="text-gray-700 mb-4">Vous avez deux listes de participants à des événements. <code>participants_a = ["Alice", "Bob", "Charlie", "David"]</code> et <code>participants_b = ["Charlie", "Eve", "Frank", "David"]</code>. Trouvez et affichez les participants qui sont inscrits aux deux événements.</p><button onclick="toggleSolution('sol_set_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_set_2" class="solution"><div class="code-block"><pre><code><span class="py-variable">participants_a</span> <span class="py-operator">=</span> [<span class="py-string">"Alice"</span>, <span class="py-string">"Bob"</span>, <span class="py-string">"Charlie"</span>, <span class="py-string">"David"</span>]
<span class="py-variable">participants_b</span> <span class="py-operator">=</span> [<span class="py-string">"Charlie"</span>, <span class="py-string">"Eve"</span>, <span class="py-string">"Frank"</span>, <span class="py-string">"David"</span>]

<span class="py-variable">set_a</span> <span class="py-operator">=</span> <span class="py-builtin">set</span>(<span class="py-variable">participants_a</span>)
<span class="py-variable">set_b</span> <span class="py-operator">=</span> <span class="py-builtin">set</span>(<span class="py-variable">participants_b</span>)

<span class="py-variable">communs</span> <span class="py-operator">=</span> <span class="py-variable">set_a</span>.<span class="py-function">intersection</span>(<span class="py-variable">set_b</span>)
<span class="py-function">print</span>(<span class="py-string">f"Participants communs aux deux événements : {<span class="py-variable">communs</span>}"</span>) <span class="py-comment"># Devrait afficher {'Charlie', 'David'}</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Éléments Uniques au Total</h4><p class="text-gray-700 mb-4">En utilisant les mêmes listes de participants que l'exercice précédent, trouvez et affichez tous les participants uniques (sans doublons) présents dans l'un ou l'autre des événements.</p><button onclick="toggleSolution('sol_set_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_set_3" class="solution"><div class="code-block"><pre><code><span class="py-variable">participants_a</span> <span class="py-operator">=</span> [<span class="py-string">"Alice"</span>, <span class="py-string">"Bob"</span>, <span class="py-string">"Charlie"</span>, <span class="py-string">"David"</span>]
<span class="py-variable">participants_b</span> <span class="py-operator">=</span> [<span class="py-string">"Charlie"</span>, <span class="py-string">"Eve"</span>, <span class="py-string">"Frank"</span>, <span class="py-string">"David"</span>]

<span class="py-variable">set_a</span> <span class="py-operator">=</span> <span class="py-builtin">set</span>(<span class="py-variable">participants_a</span>)
<span class="py-variable">set_b</span> <span class="py-operator">=</span> <span class="py-builtin">set</span>(<span class="py-variable">participants_b</span>)

<span class="py-variable">tous_uniques</span> <span class="py-operator">=</span> <span class="py-variable">set_a</span>.<span class="py-function">union</span>(<span class="py-variable">set_b</span>)
<span class="py-function">print</span>(<span class="py-string">f"Tous les participants uniques : {<span class="py-variable">tous_uniques</span>}"</span>) <span class="py-comment"># Devrait afficher {'Alice', 'Bob', 'Charlie', 'David', 'Eve', 'Frank'}</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 4 : Différence de Groupes</h4><p class="text-gray-700 mb-4">Un groupe d'étudiants suit le cours de Python : <code>{'Alice', 'Bob', 'Charlie'}</code>. Un autre groupe suit le cours de Java : <code>{'Charlie', 'David', 'Eve'}</code>. Trouvez et affichez les étudiants qui suivent Python mais pas Java.</p><button onclick="toggleSolution('sol_set_4')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_set_4" class="solution"><div class="code-block"><pre><code><span class="py-variable">etudiants_python</span> <span class="py-operator">=</span> {<span class="py-string">'Alice'</span>, <span class="py-string">'Bob'</span>, <span class="py-string">'Charlie'</span>}
<span class="py-variable">etudiants_java</span> <span class="py-operator">=</span> {<span class="py-string">'Charlie'</span>, <span class="py-string">'David'</span>, <span class="py-string">'Eve'</span>}

<span class="py-variable">seulement_python</span> <span class="py-operator">=</span> <span class="py-variable">etudiants_python</span>.<span class="py-function">difference</span>(<span class="py-variable">etudiants_java</span>)
<span class="py-function">print</span>(<span class="py-string">f"Étudiants qui suivent Python mais pas Java : {<span class="py-variable">seulement_python</span>}"</span>) <span class="py-comment"># Devrait afficher {'Alice', 'Bob'}</span></code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 5 : Vérifier si un mot est un anagramme</h4><p class="text-gray-700 mb-4">Écrivez une fonction <code>sont_anagrammes</code> qui prend deux chaînes de caractères et retourne <code>True</code> si elles sont des anagrammes l'une de l'autre (utilisez les sets pour cela), <code>False</code> sinon. Les espaces et la casse doivent être ignorés.</p><button onclick="toggleSolution('sol_set_5')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_set_5" class="solution"><div class="code-block"><pre><code><span class="py-keyword">def</span> <span class="py-function">sont_anagrammes</span>(<span class="py-variable">mot1</span>, <span class="py-variable">mot2</span>):
    <span class="py-comment"># Nettoyer les mots : passer en minuscules et retirer les espaces</span>
    <span class="py-variable">mot1_nettoye</span> <span class="py-operator">=</span> <span class="py-variable">mot1</span>.<span class="py-function">lower</span>().<span class="py-function">replace</span>(<span class="py-string">' '</span>, <span class="py-string">''</span>)
    <span class="py-variable">mot2_nettoye</span> <span class="py-operator">=</span> <span class="py-variable">mot2</span>.<span class="py-function">lower</span>().<span class="py-function">replace</span>(<span class="py-string">' '</span>, <span class="py-string">''</span>)
    
    <span class="py-comment"># Convertir en ensembles de caractères et comparer</span>
    <span class="py-keyword">return</span> <span class="py-builtin">set</span>(<span class="py-variable">mot1_nettoye</span>) <span class="py-operator">==</span> <span class="py-builtin">set</span>(<span class="py-variable">mot2_nettoye</span>) <span class="py-keyword">and</span> <span class="py-builtin">len</span>(<span class="py-variable">mot1_nettoye</span>) <span class="py-operator">==</span> <span class="py-builtin">len</span>(<span class="py-variable">mot2_nettoye</span>)

<span class="py-comment"># Tests</span>
<span class="py-function">print</span>(<span class="py-function">sont_anagrammes</span>(<span class="py-string">"chien"</span>, <span class="py-string">"niche"</span>)) <span class="py-comment"># Devrait afficher True</span>
<span class="py-function">print</span>(<span class="py-function">sont_anagrammes</span>(<span class="py-string">"écouter"</span>, <span class="py-string">"retouche"</span>)) <span class="py-comment"># Devrait afficher True</span>
<span class="py-function">print</span>(<span class="py-function">sont_anagrammes</span>(<span class="py-string">"Python"</span>, <span class="py-string">"Typhon"</span>)) <span class="py-comment"># Devrait afficher False (car 'P' != 'T' etc.) - correction: should be True as order doesn't matter for sets, but length does.</span>
<span class="py-function">print</span>(<span class="py-function">sont_anagrammes</span>(<span class="py-string">"A gentleman"</span>, <span class="py-string">"Elegant man"</span>)) <span class="py-comment"># Devrait afficher True</span>
<span class="py-function">print</span>(<span class="py-function">sont_anagrammes</span>(<span class="py-string">"hello"</span>, <span class="py-string">"world"</span>)) <span class="py-comment"># Devrait afficher False</span></code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>