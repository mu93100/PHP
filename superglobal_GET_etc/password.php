
  /**
   * 🔐 Algorithmes de hachage disponibles avec password_hash() en PHP :
   *
   * 1. PASSWORD_DEFAULT :
   *    - Utilise l’algorithme le plus sécurisé disponible (actuellement bcrypt).
   *    - Recommandé pour la majorité des cas.
   *    - Attention : peut changer dans les futures versions de PHP.
   *
   * 2. PASSWORD_BCRYPT :
   *    - Utilise l’algorithme bcrypt (fixe).
   *    - Génère une chaîne de 60 caractères.
   *    - Très compatible avec les anciennes versions de PHP et les bases de données.
   *    - Supporte une option 'cost' (coût de calcul, plus il est élevé, plus c’est sécurisé).
   *      Exemple : ['cost' => 12]
   *
   * 3. PASSWORD_ARGON2I (PHP ≥ 7.2) :
   *    - Utilise l’algorithme Argon2i.
   *    - Conçu pour résister aux attaques par canal auxiliaire (side-channel).
   *    - Supporte : memory_cost, time_cost, threads.
   *
   * 4. PASSWORD_ARGON2ID (PHP ≥ 7.3) :
   *    - Variante hybride de Argon2i et Argon2d.
   *    - Plus sécurisé que Argon2i seul.
   *    - Fortement recommandé pour une sécurité maximale.
   *
   * Exemple de hachage :
   *     $hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
   *     // ou avec options :
   *     $hash = password_hash($mot_de_passe, PASSWORD_ARGON2ID, [
   *         'memory_cost' => 1 << 17, // 128 MB
   *         'time_cost' => 4,
   *         'threads' => 2
   *     ]);
   *
   * Pour vérifier un mot de passe :
   *     if (password_verify($mot_de_passe_saisi, $hash_enregistre)) {
   *         // Mot de passe correct
   *     }
   */


?>
