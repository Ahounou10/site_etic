<?php
require 'connexion.php';

// 1. Récupération des données du parent
$type_parent = $_POST['parent_type'];       // pere, mere, tuteur, tutrice
$nom_parent = $_POST['nom_parent'];
$prenoms_parent = $_POST['prenoms_parent'];
$domicile = $_POST['domicile'];
$tel_parent = $_POST['tel_parent'];
$tel_parent_opt = !empty($_POST['tel_parent_opt']) ? $_POST['tel_parent_opt'] : null;

// 2. Insertion du parent
$stmtParent = $pdo->prepare("INSERT INTO parents (type_parent, nom, prenoms, domicile, tel_parent, tel_parent_opt)
                             VALUES (:type_parent, :nom, :prenoms, :domicile, :tel_parent, :tel_parent_opt)");
$stmtParent->execute([
    ':type_parent' => $type_parent,
    ':nom' => $nom_parent,
    ':prenoms' => $prenoms_parent,
    ':domicile' => $domicile,
    ':tel_parent' => $tel_parent,
    ':tel_parent_opt' => $tel_parent_opt
]);

// Récupération de l'id du parent
$id_parent = $pdo->lastInsertId();

// 3. Récupération des données de l'étudiant
$ecole = $_POST['ecole'];
$annee_acade = $_POST['annee_acade'];
$nom = $_POST['nom'];
$prenoms = $_POST['prenoms'];
$date_naissance = $_POST['date_naissance'];
$lieu_naissance = $_POST['lieu_naissance'];
$sexe = $_POST['sexe'];
$lieu_residence = $_POST['lieu_residence'];
$nationalite = $_POST['nationalite'];
$tel_etu = $_POST['tel_etu'];
$tel_etu_opt = !empty($_POST['tel_etu_opt']) ? $_POST['tel_etu_opt'] : null;
$email = !empty($_POST['email']) ? $_POST['email'] : null;
$mat_nat = $_POST['mat_nat'];
$mat_mesrs = !empty($_POST['mat_mesrs']) ? $_POST['mat_mesrs'] : null;
$diplome = !empty($_POST['diplome']) ? $_POST['diplome'] : null;
$table_exam = !empty($_POST['table_exam']) ? $_POST['table_exam'] : null;
$dernier_etablis = $_POST['dernier_etablis'];
$class_anterieure = $_POST['class_anterieure'];
$class_suivante = $_POST['class_suivante'];
$filiere = $_POST['filiere'];
$statut = $_POST['statut'];
$prise_en_charge = $_POST['prise_en_charge'];
$probleme_sante = $_POST['probleme_sante'];
$details_sante = !empty($_POST['details_sante']) ? $_POST['details_sante'] : null;

// 4. Insertion de l'étudiant
$stmtEtudiant = $pdo->prepare("INSERT INTO etudiants 
    (ecole, annee_acade, nom, prenoms, date_naissance, lieu_naissance, sexe, lieu_residence, nationalite, 
     tel_etu, tel_etu_opt, email, id_parent, mat_nat, mat_mesrs, diplome, table_exam, dernier_etablis, 
     class_anterieure, class_suivante, filiere, statut, prise_en_charge, probleme_sante, details_sante)
    VALUES
    (:ecole, :annee_acade, :nom, :prenoms, :date_naissance, :lieu_naissance, :sexe, :lieu_residence, :nationalite, 
     :tel_etu, :tel_etu_opt, :email, :id_parent, :mat_nat, :mat_mesrs, :diplome, :table_exam, :dernier_etablis, 
     :class_anterieure, :class_suivante, :filiere, :statut, :prise_en_charge, :probleme_sante, :details_sante)");

$stmtEtudiant->execute([
    ':ecole' => $ecole,
    ':annee_acade' => $annee_acade,
    ':nom' => $nom,
    ':prenoms' => $prenoms,
    ':date_naissance' => $date_naissance,
    ':lieu_naissance' => $lieu_naissance,
    ':sexe' => $sexe,
    ':lieu_residence' => $lieu_residence,
    ':nationalite' => $nationalite,
    ':tel_etu' => $tel_etu,
    ':tel_etu_opt' => $tel_etu_opt,
    ':email' => $email,
    ':id_parent' => $id_parent,
    ':mat_nat' => $mat_nat,
    ':mat_mesrs' => $mat_mesrs,
    ':diplome' => $diplome,
    ':table_exam' => $table_exam,
    ':dernier_etablis' => $dernier_etablis,
    ':class_anterieure' => $class_anterieure,
    ':class_suivante' => $class_suivante,
    ':filiere' => $filiere,
    ':statut' => $statut,
    ':prise_en_charge' => $prise_en_charge,
    ':probleme_sante' => $probleme_sante,
    ':details_sante' => $details_sante
]);
header("Location: formulaire.html?success=1");
exit;