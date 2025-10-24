
    <!-- =================================================================== -->
    <!-- PARTIE 2 : LOGIQUE ET CONTRÔLE (VERSION FINALE CORRIGÉE) -->
    <!-- =================================================================== -->
    <h2 id="page-top" class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-16">Partie 2 : Logique et Contrôle</h2>

    <section id="conditions" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 5 : Les Structures Conditionnelles (if...elif...else)</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Les conditions sont les carrefours de votre programme : elles lui permettent de prendre des décisions et de réagir différemment selon les situations, le rendant "intelligent" et dynamique.</p>
        
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Le `if` simple</h4><div class="code-block"><pre><code><span class="py-variable">age</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Quel est votre âge ? "</span>))
<span class="py-keyword">if</span> <span class="py-variable">age</span> <span class="py-operator">>=</span> <span class="py-number">18</span>:
    <span class="py-function">print</span>(<span class="py-string">"Vous êtes majeur. L'accès est autorisé."</span>)
<span class="py-function">print</span>(<span class="py-string">"Fin du programme."</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Le `else`</h4><div class="code-block"><pre><code><span class="py-variable">temperature</span> <span class="py-operator">=</span> <span class="py-number">12</span>
<span class="py-keyword">if</span> <span class="py-variable">temperature</span> <span class="py-operator">></span> <span class="py-number">25</span>:
    <span class="py-function">print</span>(<span class="py-string">"Il fait chaud, sortez en t-shirt !"</span>)
<span class="py-keyword">else</span>:
    <span class="py-function">print</span>(<span class="py-string">"Il fait frais, prenez une veste."</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 3 : Le `elif`</h4><div class="code-block"><pre><code><span class="py-variable">note</span> <span class="py-operator">=</span> <span class="py-number">14.5</span>
<span class="py-keyword">if</span> <span class="py-variable">note</span> <span class="py-operator">>=</span> <span class="py-number">16</span>:
    <span class="py-function">print</span>(<span class="py-string">"Mention Très Bien"</span>)
<span class="py-keyword">elif</span> <span class="py-variable">note</span> <span class="py-operator">>=</span> <span class="py-number">14</span>:
    <span class="py-function">print</span>(<span class="py-string">"Mention Bien"</span>)
<span class="py-keyword">elif</span> <span class="py-variable">note</span> <span class="py-operator">>=</span> <span class="py-number">12</span>:
    <span class="py-function">print</span>(<span class="py-string">"Mention Assez Bien"</span>)
<span class="py-keyword">else</span>:
    <span class="py-function">print</span>(<span class="py-string">"Passable ou Insuffisant"</span>)</code></pre></div></div>

            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 4 : Conditions complexes avec `and` et `or`</h4><div class="code-block"><pre><code><span class="py-variable">age</span> <span class="py-operator">=</span> <span class="py-number">25</span>
<span class="py-variable">permis</span> <span class="py-operator">=</span> <span class="py-keyword">True</span>
<span class="py-keyword">if</span> <span class="py-variable">age</span> <span class="py-operator">>=</span> <span class="py-number">18</span> <span class="py-keyword">and</span> <span class="py-variable">permis</span>:
    <span class="py-function">print</span>(<span class="py-string">"Vous pouvez louer la voiture."</span>)

<span class="py-variable">est_etudiant</span> <span class="py-operator">=</span> <span class="py-keyword">False</span>
<span class="py-variable">a_moins_de_26_ans</span> <span class="py-operator">=</span> <span class="py-keyword">True</span>
<span class="py-keyword">if</span> <span class="py-variable">est_etudiant</span> <span class="py-keyword">or</span> <span class="py-variable">a_moins_de_26_ans</span>:
    <span class="py-function">print</span>(<span class="py-string">"Vous bénéficiez du tarif réduit."</span>)</code></pre></div></div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 5 : Conditions imbriquées</h4><div class="code-block"><pre><code><span class="py-variable">montant_achat</span> <span class="py-operator">=</span> <span class="py-number">120</span>
<span class="py-variable">est_membre_fidele</span> <span class="py-operator">=</span> <span class="py-keyword">True</span>
<span class="py-keyword">if</span> <span class="py-variable">est_membre_fidele</span>:
    <span class="py-function">print</span>(<span class="py-string">"Bienvenue, membre fidèle !"</span>)
    <span class="py-keyword">if</span> <span class="py-variable">montant_achat</span> <span class="py-operator">></span> <span class="py-number">100</span>:
        <span class="py-function">print</span>(<span class="py-string">"Vous avez droit à une réduction de 15% !"</span>)
    <span class="py-keyword">else</span>:
        <span class="py-function">print</span>(<span class="py-string">"Vous avez droit à une réduction de 5%."</span>)
<span class="py-keyword">else</span>:
    <span class="py-function">print</span>(<span class="py-string">"Devenez membre pour profiter de nos offres."</span>)</code></pre></div></div>
        </div>

        <div id="exercices-conditions" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Conditions</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Calculateur de Tarif de Cinéma</h4><p class="text-gray-700 mb-4">Demandez l'âge d'un spectateur. Le prix est de 7€ pour les enfants (&lt;13 ans), 12€ pour les adultes (13-64 ans), et 9€ pour les seniors (>=65 ans). Affichez le prix.</p><button onclick="toggleSolution('sol_cond_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_cond_1" class="solution"><div class="code-block"><pre><code><span class="py-variable">age</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Quel est votre âge ? "</span>))
<span class="py-keyword">if</span> <span class="py-variable">age</span> <span class="py-operator">&lt;</span> <span class="py-number">13</span>:
    <span class="py-variable">prix</span> <span class="py-operator">=</span> <span class="py-number">7</span>
<span class="py-keyword">elif</span> <span class="py-variable">age</span> <span class="py-operator">>=</span> <span class="py-number">65</span>:
    <span class="py-variable">prix</span> <span class="py-operator">=</span> <span class="py-number">9</span>
<span class="py-keyword">else</span>:
    <span class="py-variable">prix</span> <span class="py-operator">=</span> <span class="py-number">12</span>
<span class="py-function">print</span>(<span class="py-string">f"Le prix de votre billet est de {<span class="py-variable">prix</span>}€."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 2 : Vérificateur de Mot de Passe</h4><p class="text-gray-700 mb-4">Demandez un mot de passe. S'il fait moins de 8 caractères, affichez "Mot de passe trop court". Sinon, affichez "Mot de passe valide".</p><button onclick="toggleSolution('sol_cond_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_cond_2" class="solution"><div class="code-block"><pre><code><span class="py-variable">mdp</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez votre mot de passe : "</span>)
<span class="py-keyword">if</span> <span class="py-builtin">len</span>(<span class="py-variable">mdp</span>) <span class="py-operator">&lt;</span> <span class="py-number">8</span>:
    <span class="py-function">print</span>(<span class="py-string">"Mot de passe trop court."</span>)
<span class="py-keyword">else</span>:
    <span class="py-function">print</span>(<span class="py-string">"Mot de passe valide."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 3 : Année Bissextile</h4><p class="text-gray-700 mb-4">Demandez une année. Affichez si elle est bissextile. Rappel : une année est bissextile si (divisible par 4 ET non divisible par 100) OU (divisible par 400).</p><button onclick="toggleSolution('sol_cond_3')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_cond_3" class="solution"><div class="code-block"><pre><code><span class="py-variable">annee</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez une année : "</span>))
<span class="py-keyword">if</span> (<span class="py-variable">annee</span> <span class="py-operator">%</span> <span class="py-number">4</span> <span class="py-operator">==</span> <span class="py-number">0</span> <span class="py-keyword">and</span> <span class="py-variable">annee</span> <span class="py-operator">%</span> <span class="py-number">100</span> <span class="py-operator">!=</span> <span class="py-number">0</span>) <span class="py-keyword">or</span> (<span class="py-variable">annee</span> <span class="py-operator">%</span> <span class="py-number">400</span> <span class="py-operator">==</span> <span class="py-number">0</span>):
    <span class="py-function">print</span>(<span class="py-string">f"{<span class="py-variable">annee</span>} est une année bissextile."</span>)
<span class="py-keyword">else</span>:
    <span class="py-function">print</span>(<span class="py-string">f"{<span class="py-variable">annee</span>} n'est pas une année bissextile."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 4 : Calcul de l'IMC</h4><p class="text-gray-700 mb-4">Demandez poids (kg) et taille (m). Calculez l'IMC (poids / taille²). Affichez la catégorie : "Maigreur" (&lt;18.5), "Poids normal" (18.5-25), "Surpoids" (&gt;25).</p><button onclick="toggleSolution('sol_cond_4')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_cond_4" class="solution"><div class="code-block"><pre><code><span class="py-variable">poids</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Votre poids (kg) : "</span>))
<span class="py-variable">taille</span> <span class="py-operator">=</span> <span class="py-builtin">float</span>(<span class="py-function">input</span>(<span class="py-string">"Votre taille (m) : "</span>))
<span class="py-variable">imc</span> <span class="py-operator">=</span> <span class="py-variable">poids</span> <span class="py-operator">/</span> (<span class="py-variable">taille</span> <span class="py-operator">**</span> <span class="py-number">2</span>)
<span class="py-keyword">if</span> <span class="py-variable">imc</span> <span class="py-operator">&lt;</span> <span class="py-number">18.5</span>:
    <span class="py-variable">categorie</span> <span class="py-operator">=</span> <span class="py-string">"Maigreur"</span>
<span class="py-keyword">elif</span> <span class="py-variable">imc</span> <span class="py-operator">&lt;=</span> <span class="py-number">25</span>:
    <span class="py-variable">categorie</span> <span class="py-operator">=</span> <span class="py-string">"Poids normal"</span>
<span class="py-keyword">else</span>:
    <span class="py-variable">categorie</span> <span class="py-operator">=</span> <span class="py-string">"Surpoids"</span>
<span class="py-function">print</span>(<span class="py-string">f"Votre IMC est de {<span class="py-variable">imc</span>:.2f}. Catégorie : {<span class="py-variable">categorie</span>}."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 5 : Tri de Trois Nombres</h4><p class="text-gray-700 mb-4">Demandez trois nombres (a, b, c). Affichez-les dans l'ordre croissant en utilisant des conditions.</p><button onclick="toggleSolution('sol_cond_5')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_cond_5" class="solution"><div class="code-block"><pre><code><span class="py-variable">a</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Nombre a : "</span>))
<span class="py-variable">b</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Nombre b : "</span>))
<span class="py-variable">c</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Nombre c : "</span>))
<span class="py-keyword">if</span> <span class="py-variable">a</span> <span class="py-operator">&lt;=</span> <span class="py-variable">b</span> <span class="py-keyword">and</span> <span class="py-variable">a</span> <span class="py-operator">&lt;=</span> <span class="py-variable">c</span>:
    <span class="py-keyword">if</span> <span class="py-variable">b</span> <span class="py-operator">&lt;=</span> <span class="py-variable">c</span>:
        <span class="py-function">print</span>(<span class="py-variable">a</span>, <span class="py-variable">b</span>, <span class="py-variable">c</span>)
    <span class="py-keyword">else</span>:
        <span class="py-function">print</span>(<span class="py-variable">a</span>, <span class="py-variable">c</span>, <span class="py-variable">b</span>)
<span class="py-keyword">elif</span> <span class="py-variable">b</span> <span class="py-operator">&lt;=</span> <span class="py-variable">a</span> <span class="py-keyword">and</span> <span class="py-variable">b</span> <span class="py-operator">&lt;=</span> <span class="py-variable">c</span>:
    <span class="py-keyword">if</span> <span class="py-variable">a</span> <span class="py-operator">&lt;=</span> <span class="py-variable">c</span>:
        <span class="py-function">print</span>(<span class="py-variable">b</span>, <span class="py-variable">a</span>, <span class="py-variable">c</span>)
    <span class="py-keyword">else</span>:
        <span class="py-function">print</span>(<span class="py-variable">b</span>, <span class="py-variable">c</span>, <span class="py-variable">a</span>)
<span class="py-keyword">else</span>:
    <span class="py-keyword">if</span> <span class="py-variable">a</span> <span class="py-operator">&lt;=</span> <span class="py-variable">b</span>:
        <span class="py-function">print</span>(<span class="py-variable">c</span>, <span class="py-variable">a</span>, <span class="py-variable">b</span>)
    <span class="py-keyword">else</span>:
        <span class="py-function">print</span>(<span class="py-variable">c</span>, <span class="py-variable">b</span>, <span class="py-variable">a</span>)</code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <section id="match-case" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 6 : Le Filtrage par Motif (match...case)</h3>
        <p class="text-gray-700 mb-8">Introduit en Python 3.10, `match...case` est une alternative plus lisible aux longues chaînes de `if/elif/else`, surtout quand on teste les différentes valeurs possibles d'une seule variable.</p>
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Cas d'usage simple (menu)</h4><div class="code-block"><pre><code><span class="py-variable">choix</span> <span class="py-operator">=</span> <span class="py-string">"3"</span>
<span class="py-keyword">match</span> <span class="py-variable">choix</span>:
    <span class="py-keyword">case</span> <span class="py-string">"1"</span>:
        <span class="py-function">print</span>(<span class="py-string">"Action 1 sélectionnée."</span>)
    <span class="py-keyword">case</span> <span class="py-string">"2"</span>:
        <span class="py-function">print</span>(<span class="py-string">"Action 2 sélectionnée."</span>)
    <span class="py-keyword">case</span> <span class="py-string">"3"</span>:
        <span class="py-function">print</span>(<span class="py-string">"Action 3 sélectionnée."</span>)
    <span class="py-keyword">case</span> _:
        <span class="py-function">print</span>(<span class="py-string">"Choix invalide."</span>)</code></pre></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Combiner plusieurs cas avec `|`</h4><div class="code-block"><pre><code><span class="py-variable">reponse</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Voulez-vous continuer (oui/non) ? "</span>).lower()
<span class="py-keyword">match</span> <span class="py-variable">reponse</span>:
    <span class="py-keyword">case</span> <span class="py-string">"oui"</span> | <span class="py-string">"o"</span> | <span class="py-string">"yes"</span>:
        <span class="py-function">print</span>(<span class="py-string">"Continuation..."</span>)
    <span class="py-keyword">case</span> <span class="py-string">"non"</span> | <span class="py-string">"n"</span> | <span class="py-string">"no"</span>:
        <span class="py-function">print</span>(<span class="py-string">"Arrêt du programme."</span>)
    <span class="py-keyword">case</span> _:
        <span class="py-function">print</span>(<span class="py-string">"Réponse non reconnue."</span>)</code></pre></div></div>
        </div>
        <div id="exercices-match-case" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur `match...case`</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice 1 : Jours de la Semaine</h4><p class="text-gray-700 mb-4">Demandez un numéro de jour (1-7). Affichez le nom du jour correspondant. Gérez les cas invalides.</p><button onclick="toggleSolution('sol_match_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_match_1" class="solution"><div class="code-block"><pre><code><span class="py-variable">jour</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Entrez le numéro du jour (1-7) : "</span>))
<span class="py-keyword">match</span> <span class="py-variable">jour</span>:
    <span class="py-keyword">case</span> <span class="py-number">1</span>: <span class="py-function">print</span>(<span class="py-string">"Lundi"</span>)
    <span class="py-keyword">case</span> <span class="py-number">2</span>: <span class="py-function">print</span>(<span class="py-string">"Mardi"</span>)
    <span class="py-keyword">case</span> <span class="py-number">3</span>: <span class="py-function">print</span>(<span class="py-string">"Mercredi"</span>)
    <span class="py-keyword">case</span> <span class="py-number">4</span>: <span class="py-function">print</span>(<span class="py-string">"Jeudi"</span>)
    <span class="py-keyword">case</span> <span class="py-number">5</span>: <span class="py-function">print</span>(<span class="py-string">"Vendredi"</span>)
    <span class="py-keyword">case</span> <span class="py-number">6</span>: <span class="py-function">print</span>(<span class="py-string">"Samedi"</span>)
    <span class="py-keyword">case</span> <span class="py-number">7</span>: <span class="py-function">print</span>(<span class="py-string">"Dimanche"</span>)
    <span class="py-keyword">case</span> _: <span class="py-function">print</span>(<span class="py-string">"Numéro de jour invalide."</span>)</code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>

    <section id="boucles" class="mb-16">
        <h3 class="text-2xl font-semibold mb-3">Chapitre 7 : Les Boucles (`for` et `while`)</h3>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">Les boucles sont le cœur de l'automatisation. Elles permettent de répéter une action un nombre défini de fois (`for`) ou tant qu'une condition reste vraie (`while`).</p>
        
        <div class="space-y-8">
            <div class="bg-gray-100 p-4 rounded-lg"><h4 class="text-2xl font-bold mb-2 text-gray-700">La Boucle `for`</h4></div>
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Utilisation de `range()`</h4><div class="code-block"><pre><code><span class="py-comment"># Compter de 0 à 4</span>
<span class="py-keyword">for</span> <span class="py-variable">i</span> <span class="py-keyword">in</span> <span class="py-function">range</span>(<span class="py-number">5</span>):
    <span class="py-function">print</span>(<span class="py-string">f"Le compteur est à {<span class="py-variable">i</span>}"</span>)

<span class="py-comment"># Table de multiplication</span>
<span class="py-keyword">for</span> <span class="py-variable">i</span> <span class="py-keyword">in</span> <span class="py-function">range</span>(<span class="py-number">1</span>, <span class="py-number">11</span>):
    <span class="py-function">print</span>(<span class="py-string">f"7 x {<span class="py-variable">i</span>} = {<span class="py-number">7</span> <span class="py-operator">*</span> <span class="py-variable">i</span>}"</span>)</code></pre></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 2 : Contrôler la boucle avec `break` et `continue`</h4><div class="code-block"><pre><code><span class="py-comment"># Arrêter la boucle avec break</span>
<span class="py-keyword">for</span> <span class="py-variable">i</span> <span class="py-keyword">in</span> <span class="py-function">range</span>(<span class="py-number">1</span>, <span class="py-number">20</span>):
    <span class="py-keyword">if</span> <span class="py-variable">i</span> <span class="py-operator">%</span> <span class="py-number">5</span> <span class="py-operator">==</span> <span class="py-number">0</span>:
        <span class="py-function">print</span>(<span class="py-string">f"Trouvé ! {<span class="py-variable">i</span>} est un multiple de 5."</span>)
        <span class="py-keyword">break</span>
<span class="py-comment"># Sauter une itération avec continue</span>
<span class="py-keyword">for</span> <span class="py-variable">i</span> <span class="py-keyword">in</span> <span class="py-function">range</span>(<span class="py-number">1</span>, <span class="py-number">10</span>):
    <span class="py-keyword">if</span> <span class="py-variable">i</span> <span class="py-operator">%</span> <span class="py-number">2</span> <span class="py-operator">==</span> <span class="py-number">0</span>: <span class="py-comment"># Si i est pair</span>
        <span class="py-keyword">continue</span>
    <span class="py-function">print</span>(<span class="py-string">f"{<span class="py-variable">i</span>} est impair."</span>)</code></pre></div></div>

            <div class="bg-gray-100 p-4 rounded-lg mt-8"><h4 class="text-2xl font-bold mb-2 text-gray-700">La Boucle `while`</h4></div>
            <div class="bg-white p-6 rounded-lg shadow-sm"><h4 class="text-xl font-semibold mb-2">Exemple 1 : Validation de saisie</h4><div class="code-block"><pre><code><span class="py-variable">mot_de_passe</span> <span class="py-operator">=</span> <span class="py-string">""</span>
<span class="py-keyword">while</span> <span class="py-variable">mot_de_passe</span> <span class="py-operator">!=</span> <span class="py-string">"python123"</span>:
    <span class="py-variable">mot_de_passe</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez le mot de passe : "</span>)
<span class="py-function">print</span>(<span class="py-string">"Accès autorisé !"</span>)</code></pre></div></div>
        </div>
        
        <div id="exercices-boucles" class="mt-16"><h3 class="text-2xl font-semibold mb-4">Série d'Exercices sur les Boucles</h3><div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice (`for`) : Compteur de voyelles</h4><p class="text-gray-700 mb-4">Demandez une phrase. Parcourez-la pour compter le nombre de voyelles (a, e, i, o, u, y).</p><button onclick="toggleSolution('sol_for_2')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_for_2" class="solution"><div class="code-block"><pre><code><span class="py-variable">phrase</span> <span class="py-operator">=</span> <span class="py-function">input</span>(<span class="py-string">"Entrez une phrase : "</span>).lower()
<span class="py-variable">voyelles</span> <span class="py-operator">=</span> <span class="py-string">"aeiouy"</span>
<span class="py-variable">compteur</span> <span class="py-operator">=</span> <span class="py-number">0</span>
<span class="py-keyword">for</span> <span class="py-variable">lettre</span> <span class="py-keyword">in</span> <span class="py-variable">phrase</span>:
    <span class="py-keyword">if</span> <span class="py-variable">lettre</span> <span class="py-keyword">in</span> <span class="py-variable">voyelles</span>:
        <span class="py-variable">compteur</span> <span class="py-operator">+=</span> <span class="py-number">1</span>
<span class="py-function">print</span>(<span class="py-string">f"Il y a {<span class="py-variable">compteur</span>} voyelles dans cette phrase."</span>)</code></pre></div></div></div>
            <div class="bg-white p-6 rounded-lg shadow-sm border"><h4 class="text-lg font-semibold text-gray-900 mb-2">Exercice (`while`) : Le jeu du "Plus ou Moins"</h4><p class="text-gray-700 mb-4">Le programme choisit un nombre secret (ex: 42). L'utilisateur doit le deviner, et le programme répond "plus grand" ou "plus petit" jusqu'à la bonne réponse.</p><button onclick="toggleSolution('sol_while_1')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition-colors">Afficher la solution</button><div id="sol_while_1" class="solution"><div class="code-block"><pre><code><span class="py-variable">nombre_secret</span> <span class="py-operator">=</span> <span class="py-number">42</span>
<span class="py-variable">tentative</span> <span class="py-operator">=</span> <span class="py-number">0</span>
<span class="py-keyword">while</span> <span class="py-variable">tentative</span> <span class="py-operator">!=</span> <span class="py-variable">nombre_secret</span>:
    <span class="py-variable">tentative</span> <span class="py-operator">=</span> <span class="py-builtin">int</span>(<span class="py-function">input</span>(<span class="py-string">"Devinez le nombre : "</span>))
    <span class="py-keyword">if</span> <span class="py-variable">tentative</span> <span class="py-operator">&lt;</span> <span class="py-variable">nombre_secret</span>:
        <span class="py-function">print</span>(<span class="py-string">"C'est plus grand !"</span>)
    <span class="py-keyword">elif</span> <span class="py-variable">tentative</span> <span class="py-operator">></span> <span class="py-variable">nombre_secret</span>:
        <span class="py-function">print</span>(<span class="py-string">"C'est plus petit !"</span>)
<span class="py-function">print</span>(<span class="py-string">f"Bravo ! Le nombre secret était bien {<span class="py-variable">nombre_secret</span>}."</span>)</code></pre></div></div></div>
        </div></div>
        <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
    </section>
