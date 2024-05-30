<?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 1) {
  ?>
  <!-- TDIA1 -->
          <select id="module" name="module" required>
              <option value="">Sélectionner un module</option>
              <option value="">S1</option>
              <option value="3">Computer Architectures and Organisation</option>
              <option value="3">Architecture d'entreprise et Transformation Digital</option>
              <option value="3">Communication Professionnelle & Soft Skills  1 en FRANÇAIS</option>
              <option value="3">Structure de Données et Algorithmique avancées</option>
              <option value="3">Systèmes d'Information et Bases de Données</option>
              <option value="3">Théorie des langages et compilation</option>
              <option value="">S2</option>

              <option value="3"> Gestion des projets Informatiques</option>
              <option value="3">Programmation Python / Programmation fonctionnelle</option>
              <option value="3">Industrie de numérique</option>
              <option value="3">Développement Web</option>
              <option value="3">POO Java</option>
              <option value="3">Business, Marketing and Management Principles for IT</option>
          </select>
  <?php
      }
  }
  ?>
  <?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 2) {
  ?>
  <!-- ID1 -->
   <select id="module" name="module" required>
              <option value="">Sélectionner un module</option>
              <option value="">S1</option>

              <option value="6">Analyse Numérique Matricielle/Statistique Inférentielle</option>
              <option value="6">Architecture des ordinateurs et systemes d'explotation</option>
              <option value="6">Communication Professionnelle & Soft Skills  1 en FRANÇAIS</option>
              <option value="6">Structure de Données et Algorithmique avancées</option>
              <option value="6">Systèmes d'Information et Bases de Données</option>
              <option value="6">Théorie des langages et compilation</option>
              <option value="">S2</option>


              <option value="6">Python et les bases du Web</option>
              <option value="6">POO Java</option>
              <option value="6">Entreprenariat</option>
              <option value="6">Data Minig</option>
              <option value="6">Administration et optimisation des Bases de Données</option>
              <option value="6">Statistique en grande dimension</option>
          </select>

<?php
      }
  }
  ?>
   <?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 3) {
  ?>
  <!-- GI1 -->
      <select id="module" name="module" required>
            <option value="">Sélectionner un module</option>
            <option value="">S1</option>

            <option value="9">Architecture des ordinateurs</option>
            <option value="9 ">Langues et Communication Professionnelles 1</option>
            <option value="9">Méthodes numériques pour l'ingénieur et Analyse des Données</option>
            <option value="9">Réseaux informatiques</option>
            <option value="9 ">Structure de données et programmation avancée en </option>
            <option value="9">Systèmes d'Information et Bases de Données Relationnelles</option>
            <option value="">S2</option>


            <option value="9">Algorithmique Avancée et complexité</option>
            <option value="9">Architecture Logicielle et UML</option>
            <option value="9">Développement d'applications Web</option>
            <option value="9">Entreprenariat 1 & Atelier Start up</option>
            <option value="9">Programmation Orientée Objet C++</option>
            <option value="9">Réscaux informatiques</option>
          </select>
  <?php
      }
  }
  ?>
   <?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 4) {
  ?>
  <!-- TDIA2 -->
          <select id="module" name="module" required>
              <option value="">Sélectionner un module</option>
              <option value="">S3</option>

              <option value="4">Architecture Logicielle et UML</option>
              <option value="4">Bases de Intelligence Artificielle</option>
              <option value="4">Cartographie des systèmes d'information</option>
              <option value="4">Cloud computing</option>
              <option value="4">Communication Professionnelle et Soft Skills 2</option>
              <option value="4">Gestion de projets digitaux</option>
              <option value="">S4</option>

              <option value="4"> Applications de l'Intelligence Artificielle</option>
              <option value="4">Droit et sécurité des données</option>
              <option value="4">Big data</option>
              <option value="4">Cyber Security</option>
              <option value="4">Entreprenariat</option>
              <option value="4">Ingestion et stockage des données</option>
          </select>
  <?php
      }
  }
  ?>
  <?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 5) {
  ?>
  <!-- ID2 -->
   <select id="module" name="module" required>
              <option value="">Sélectionner un module</option>
              <option value="">S3</option>

              <option value="7">Architecture Logicielle et UML</option>
              <option value="7">Bases de données avancées</option>
              <option value="7">Communication Professionnelle et Soft Skills II</option>
              <option value="7">Fondements du Big Data</option>
              <option value="7">Intelligence Artificielle | - Machine Learning</option>
              <option value="7">Programmation Python / Programmation fonctionnelle</option>

              <option value="">S4</option>

              <option value="7">Applications Web avancées avec Java et Spring</option>
              <option value="7">Big Data Avancées</option>
              <option value="7">Data Warchouse et Data Lake</option>
              <option value="7">Entreprenariat II</option>
              <option value="7">Intelligence Artificielle</option>
              <option value="7">Traitement Automatique de Langue (TAL) naturelle et ses applications
</option>
          </select>

<?php
      }
  }
  ?>
   <?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 6) {
  ?>
  
  <!-- GI2 -->
      <select id="module" name="module" required>
            <option value="">Sélectionner un module</option>
            <option value="">S3</option>

            <option value="10">Administration Système Linux</option>
            <option value="10">Apprentissage statistique</option>
            <option value="10">Génie logiciel et IHM</option>
            <option value="10">Gestion de l'entreprise</option>
            <option value="10">Programmation JAVA </option>
            <option value="10">XML et Applications Web avancées</option>

            <option value="">S4</option>

            <option value="10">Bases de données avancées</option>
            <option value="10">Communication professionnelle</option>
            <option value="10">Gestion de projet / PFA</option>
            <option value="10">Intelligence artificielle</option>
            <option value="10">Interconnexion et Administration des réseaux</option>
            <option value="10">Technologies distribuées</option>
          </select>
  <?php
      }
  }
  ?>
   <?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 7) {
  ?>

  <!-- TDIA3 -->
          <select id="module" name="module" required>
              <option value="">Sélectionner un module</option>
              <option value="">S5</option>

              <option value="5">Architecture Logicielle et UML</option>
              <option value="5">Bases de Intelligence Artificielle</option>
              <option value="5">Cartographie des systèmes d'information</option>
              <option value="5">Cloud computing</option>
              <option value="5">Communication Professionnelle et Soft Skills 2</option>
              <option value="5">Gestion de projets digitaux</option>
              <option value="">S6</option>

              <option value="5"> Applications de l'Intelligence Artificielle</option>
              <option value="5">Big data</option>
              <option value="5">Cyber Security</option>
              <option value="5">Droit et sécurité des données</option>
              <option value="5">Entreprenariat</option>
              <option value="5">Ingestion et stockage des données</option>
          </select>
  <?php
      }
  }
  ?>
  <?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 8) {
  ?>
  <!-- ID3 -->
   <select id="module" name="module" required>
              <option value="">Sélectionner un module</option>
              <option value="">S5</option>

              <option value="8">Big Data Visualisation</option>
              <option value="8">Business Intelligence et Veille Stratégique</option>
              <option value="8">Entreprenariat III</option>
              <option value="8">Social Network Mining</option>
              <option value="8">Transformation digitale</option>
              <option value="8">Web Marketing et CRM</option>
              <option value="">S6</option>


              <option value="8">Projet de Fin d'Année (PFE)</option>
              <option value="8">Big Data Visualisation et Cloud Computing</option>
              
          </select>

<?php
      }
  }
  ?>
   <?php
  require_once './conn.php';

  if (isset($_POST['Filier'])) {
      $postType = filter_input(INPUT_POST, 'Filier', FILTER_SANITIZE_STRING);

      if ($postType == 9) {
  ?>
  <!-- GI3 -->
      <select id="module" name="module" required>
            <option value="">Sélectionner un module</option>
            <option value="">S5</option>

            <option value="11">Cryptographie et Sécurité Informatique</option>
            <option value="11">Développement des applications mobiles</option>
            <option value="11">Ingénierie des systèmes temps réel et embarqués</option>
            <option value="11">Ingénierie et Qualité logiciel</option>
            <option value="11">Ressources humaines et gestion financière des entreprises </option>
            <option value="11">Virtualisation et Cloud Computing</option>

            <option value="">S6</option>

            <option value="11">PFE_GI_GL</option>
            <option value="11">Analyse et conception des systèmes décisionnels</option>
            <option value="11">Business Intelligence et la Veille Stratégique</option>
            <option value="11">CRM / ERP</option>
            <option value="11">Data Mining et Statistique Décisionnelle</option>
            <option value="11">L'ingénierie de l'information et des connaissances</option>
          </select>
  <?php
      }
  }
  ?>