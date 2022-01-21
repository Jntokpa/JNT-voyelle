<?php
$message = "";
$error = "";
if (isset($_POST['valider'])) {
    $max = 15;
    $prenom = htmlspecialchars($_POST['prenom']);
    $taille = strlen($prenom);
    if ($taille > $max) {
        $error = "Ne pas depasser 15 caractères!!";
    } else {
        $voyelles = array('a', 'e', 'i', 'o', 'u', 'y');
        $nbre_voy = 0;
        foreach ($voyelles as $voy) {
            $nbre_voy += substr_count(strtolower($prenom), $voy);
        }
        $message = "Votre prenom comprend " . $nbre_voy . " voyelle(s)";
    }
}
