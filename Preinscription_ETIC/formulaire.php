<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Pré-inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <nav>
            <ul class="menu">
                <li><a href="../index.html">ACCUEIL</a></li>

                <li><a href="#">PRESENTATION</a>
                    <ul class="sous-menu">
                        <li><a href="#section1">HISTORIQUE</a></li>
                        <li><a href="#section2">ORGANIGRAMME</a></li>
                        <li><a href="#section3">MOTS DU DIRECTEUR GÉNÉRAL</a></li>
                        <li><a href="#section1">NOS PARTENAIRES</a></li>
                    </ul>
                </li>

                <li><a href="#section3">FORMATION</a>

                    <ul class="sous-menu">
                        <li><a href="#section1">SECONDAIRE TECHNIQUE</a></li>
                        <li><a href="#section2">SECONDAIRE PROFESSIONNEL</a></li>
                        <li><a href="#section3">FORMATION QUALIFIANTE</a></li>
                        <li><a href="#section1">BTS/DTS (JOUR ET SOIR)</a></li>
                        <li><a href="#section1">LICENCE PROFESSIONNELLE (JOUR ET SOIR)</a></li>
                        <li><a href="#section2">MASTER PROFESSIONNEL (JOUR ET SOIR)</a></li>
                        <li><a href="#section3">FORMATION QUALIFIANTE</a></li>
                        <li><a href="#section1">INGÉNIEUR (JOUR ET SOIR)</a></li>

                    </ul>
                </li>

                <li><a href="#section1">NOS ECOLES</a>
                    <ul class="sous-menu">
                        <li><a href="#">GRANDES ECOLES</a>
                            <ul class="sous-sous-menu">
                                <li><a href="#section1">ETIC II PLATEAUX</a></li>
                                <li><a href="#section2">ETIC MARCORY</a></li>
                                <li><a href="#section3">ETIC YOPOUGON</a></li>
                                <li><a href="#section1">ETIC KORHOGO</a></li>
                                <li><a href="#section2">ETIC ABOBO</a></li>
                                <li><a href="#section3">ETIC BANDOUKOU</a></li>
                                <li><a href="#section1">ETIC ODIENNE</a></li>
                            </ul>
                        </li>

                        <li><a href="#">UNIVERSITES</a>
                            <ul class="sous-sous-menu" id="university">
                                <li><a href="#section1">ETIC UNIVERSITY</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><img id="logo" src="img/logo.png" alt=""></li>

                <li><a href="#section2">ACTUALITÉS</a></li>

                <li><a href="#section1">VIE ÉTUDIANTE</a>
                    <ul class="sous-menu">
                        <li><a href="#section1">CLUBS ET ASSOCIATIONS</a></li>
                        <li><a href="#section2">ÉVÉNEMENTS</a></li>
                        <li><a href="#section3">RÉSULTATS</a></li>
                        <li><a href="#section1">ANCIENS</a></li>
                    </ul>
                </li>

                <li><a href="#section2">MÉDIA</a>
                    <ul class="sous-menu">
                        <li><a href="#section1">PHOTOS</a></li>
                        <li><a href="#section2">VIDEOS</a></li>
                    </ul>
                </li>

                <li><a href="#section3">NOS CONTACTS</a></li>
            </ul>
        </nav>
    </header>

    <form action="traitement.php" method="post">

        <h2>FICHE DE PRÉ-INSCRIPTION</h2>

        <fieldset>
            <legend>ETAT CIVIL</legend>
            <hr>

            <div class="aligne">
                <label for="ecole">Choisir une école :</label>
                <select name="ecole" id="ecole" required>

                    <option value="etic_plateaux">ETIC II PLATEAUX</option>
                    <option value="etic_marcory">ETIC MARCORY</option>
                    <option value="etic_yopougon">ETIC YOPOUGON</option>
                    <option value="etic_korhogo">ETIC KORHOGO</option>
                    <option value="etic_abobo">ETIC ABOBO</option>
                    <option value="etic_bandoukrou">ETIC BANDOUKOU</option>
                    <option value="etic_odienne">ETIC ODIENNE</option>

                </select>
            </div>

            <div class="aligne">
                <label for="annee_acade">Année académique</label>
                <select name="annee_acade" id="annee_acade" required>

                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                </select>
            </div>

            <div class="aligne">
                <label for="nom">Nom </label>
                <input type="text" id="nom" name="nom" placeholder="NOM" required>
            </div>

            <div class="aligne">
                <label for="prenoms">Prénoms</label>
                <input type="text" id="prenoms" name="prenoms" placeholder="PRENOMS" required>
            </div>


            <div class="aligne">
                <label for="date_naissance">Date de naissance</label>
                <input type="date" id="date_naissance" name="date_naissance" required>
            </div>

            <div class="aligne">
                <label for="lieu_naissance">Lieu de naissance</label>
                <input type="text" id="lieu_naissance" name="lieu_naissance" placeholder="LIEU DE NAISSANCE" required>
            </div>

            <div class="aligne">
                <label for="M">Sexe</label>
                <div>
                    <input type="radio" id="M" name="sexe" value="masculin" checked required>
                    <label for="M">M</label>

                    <input type="radio" id="F" name="sexe" value="feminin" required>
                    <label for="F">F</label>
                </div>
            </div>

            <div class="aligne">
                <label for="lieu_residence">Lieu de résidence</label>
                <input type="text" id="lieu_residence" name="lieu_residence" placeholder="LIEU DE RESIDENCE" required>
            </div>

            <div class="aligne">
                <label for="nationalite">Nationalité</label>
                <input type="text" id="nationalite" name="nationalite" placeholder="NATIONALITE" required>
            </div>

            <div class="aligne">
                <label for="">N° Téléphone</label>

                <input type="number" name="tel_etu" placeholder="Tel" required>

                <input type="number" name="tel_etu_opt" placeholder="Tel (OPTIONNEL)">

            </div>

            <div class="aligne">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="EMAIL (OPTIONNEL)">
            </div>

        </fieldset>



        <fieldset>
            <legend>RENSEIGNEMENTS SUR LES PARENTS</legend>
            <hr>

            <div class="aligne">
                <label for="pere">Faire un choix</label>
                <div>
                    <input type="radio" id="pere" name="parent_type" value="pere" required>
                    <label for="pere">Père</label>

                    <input type="radio" id="tuteur" name="parent_type" value="tuteur" required>
                    <label for="tuteur">Tuteur</label>

                    <input type="radio" id="mere" name="parent_type" value="mere" required checked>
                    <label for="mere">Mère</label>

                    <input type="radio" id="tutrice" name="parent_type" value="tutrice" required>
                    <label for="tutrice">Tutrice</label>
                </div>
            </div>

            <div class="aligne">
                <label for="nom_parent">Nom </label>
                <input type="text" id="nom_parent" name="nom_parent" placeholder="NOM" required>
            </div>

            <div class="aligne">
                <label for="prenoms_parent">Prénoms</label>
                <input type="text" id="prenoms_parent" name="prenoms_parent" placeholder="PRENOMS" required>
            </div>


            <div class="aligne">
                <label for="domicile">Domicile </label>
                <input type="text" id="domicile" name="domicile" placeholder="DOMICILE" required>
            </div>



            <div class="aligne">
                <label for="tel_parent">N° Téléphone</label>

                <input type="number" id="tel_parent" name="tel_parent" placeholder="Tel" required>

                <input type="number" name="tel_parent_opt" placeholder="Tel (OPTIONNEL)">

            </div>

        </fieldset>



        <fieldset>
            <legend>INFORMATIONS SUR LES ÉTUDES</legend>
            <hr>

            <div class="aligne">
                <label for="mat_nat">N° matricule national</label>
                <input type="text" id="mat_nat" name="mat_nat" placeholder="N° MATRICULE NATIONAL">
            </div>

            <div class="aligne">
                <label for="mat_mesrs">N° matricule MESRS</label>
                <input type="text" id="mat_mesrs" name="mat_mesrs" placeholder="N° MATRICULE MESRS (OPTIONNEL)">
            </div>

            <div class="aligne">
                <label for="diplome">Diplome actuel</label>
                <input type="text" id="diplome" name="diplome" placeholder="DIPLOME ACTUEL (OPTIONNEL)">
            </div>

            <div class="aligne">
                <label for="table_exam">N° de table</label>
                <input type="number" id="table_exam" name="table_exam" placeholder="N° DE TABLE (OPTIONNEL)">
            </div>


            <div class="aligne">
                <label for="dernier_etablis">Dernier établissement</label>
                <input type="text" id="dernier_etablis" name="dernier_etablis"
                    placeholder="DERNIER ÉTABLISSEMENT FRÉQUENTÉ">
            </div>

            <div class="aligne">
                <label for="class_anterieure">Classe anterieure</label>
                <input type="text" id="class_anterieure" name="class_anterieure" placeholder="CLASSE ANTERIEURE">
            </div>

            <div class="aligne">
                <label for="class_suivante">Classe à suivre</label>
                <input type="text" id="class_suivante" name="class_suivante" placeholder="CLASSE À SUIVRE">
            </div>

            <div class="aligne">
                <label for="filiere">
                    Choisir une filière <br> (nouveau bachelier)
                </label>

                <select name="filiere" id="filiere" required>
                    <option value="" selected disabled hidden>
                        Sélectionner une filière
                    </option>

                    <option value="sei">Systèmes Électroniques et Informatiques (SEI)</option>
                    <option value="rit">Réseau Informatique et Télécommunication (RIT)</option>
                    <option value="rhc">Ressources Humaines et Communication (RHC)</option>
                    <option value="log">Logistique (LOG)</option>
                    <option value="ida">Informatique – Développeur d’Application (IDA)</option>
                    <option value="gec">Gestion Commerciale (GEC)</option>
                    <option value="gbat">Génie Civil – Option Bâtiment (GBAT)</option>
                    <option value="fcge">Finance Comptabilité et Gestion d’Entreprises (FCGE)</option>
                    <option value="elt">Électrotechnique (ELT)</option>
                    <option value="cv">Communication Visuelle (CV)</option>
                    <option value="atpv">Agriculture Tropicale – Option Végétale (ATPV)</option>
                    <option value="atpa">Agriculture Tropicale – Option Animale (ATPA)</option>
                    <option value="ad">Assistanat de Direction (AD)</option>
                    <option value="mine_geo">Mine – Géologie</option>
                    <option value="msp">Maintenance des Systèmes de Production (MSP)</option>
                </select>
            </div>

            <p><a href="">Information sur les filières</a></p>

        </fieldset>




        <fieldset>
            <legend> AUTRES INFORMATIONS </legend>
            <hr>

            <div class="aligne">
                <label>Statut</label>
                <div>

                    <input type="radio" id="affecte" name="statut" value="affecte" checked required>
                    <label for="affecte">Affecté</label>

                    <input type="radio" id="non_affecte" name="statut" value="non_affecte" required>
                    <label for="non_affecte">Non affecté</label>
                </div>
            </div>

            <div class="aligne">
                <label>Prise en charge</label>

                <div>
                    <input type="radio" id="oui" name="prise_en_charge" value="oui" checked required>
                    <label for="oui">Oui</label>

                    <input type="radio" id="non" name="prise_en_charge" value="non" required>
                    <label for="non">Non</label>
                </div>

            </div>

            <div class="aligne">
                <label>Avez-vous un <br> problème de santé <br> particulier ?</label>
                <div>

                    <input type="radio" id="sante" name="probleme_sante" value="oui" checked required>
                    <label for="sante">Oui</label>

                    <input type="radio" id="non_sante" name="probleme_sante" value="non" required>
                    <label for="non_sante">Non</label>
                </div>
            </div>

            <div class="aligne">
                <label for="details_sante">Si oui, précisez :</label>
                <input type="text" id="details_sante" name="details_sante" placeholder="Si oui, précisez ici">
            </div>

        </fieldset>



        <input type="submit" value="Valider">



        <fieldset>

            <legend>RAPPEL DES DOSSIERS À FOURNIR À L'INSCRIPTION</legend>
            <hr>
            <p>
                2 Extraits de naissance ou jugement supplétif (originaux),
                2 Photocopies de la pièce d'identité (CNI, Attestation d'identité ou
                passeport), 2 Photocopies du dernier diplôme légalisé, 2 Photocopies
                du dernier bulletin, 8 Photos d'identité (même tirage), 1 Paquet de
                RAME 80g (Suprême, Double A, Smart Copy, Impulse), 1 Paquet de marqueur
                effaçable de 10 (Schneider 293, BIC).
                NB: 1 Copie de chaque dossier suscité pour les réinscriptions (Anciens
                élèves/étudiant du Groupe ETIC)
            </p>
        </fieldset>


    </form>


    <footer>
        <p> Copyright &copy; 2018 - 2025 ETIC - École Technique Informatique et Commerciale <br>
            administration@eticecole.com / Enseignants
        </p>
    </footer>

</body>

</html>

<?php if (isset($_GET['success'])): ?>
    <p style="color: green; font-weight: bold;">
        Pré-inscription réussie ✅
    </p>
<?php endif; ?>