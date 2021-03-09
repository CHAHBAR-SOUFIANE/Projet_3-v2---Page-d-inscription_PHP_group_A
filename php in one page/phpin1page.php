<?php
// correct format to insert 
echo "Mon \"nom\" est Mateo21"; 
echo "<br>";
echo 'Je m\'appelle Mateo21';
echo "<br>";

//Affichage d'une variable avec une chaine de caractere
echo "<br>";
$age_du_visiteur = 17;
echo "Le visiteur a $age_du_visiteur ans";
echo "<br>";
echo 'Le visiteur a ' . $age_du_visiteur . ' ans';
echo "<br>";

//Type de variable
$personne = 17; //int
$poids = 57.3; //float
$je_suis_un_zero = true; //bool
$je_suis_bon_en_php = false; //bool
$pas_de_valeur = NULL; //Null //ne prend pas d'espace en memoire

echo "<br>";
echo "$je_suis_un_zero";
echo "$je_suis_bon_en_php";
echo "$pas_de_valeur";


//operation
$nombre = 2 + 4; // $nombre prend la valeur 6
$nombre = 5 - 1; // $nombre prend la valeur 4
$nombre = 3 * 5; // $nombre prend la valeur 15
$nombre = 10 / 2; // $nombre prend la valeur 5

// Allez on rajoute un peu de difficulté
$nombre = 3 * 5 + 1; // $nombre prend la valeur 16
$nombre = (1 + 2) * 2; // $nombre prend la valeur 6

//reutilisation d'une variable
$nombre = 10;
$resultat = ($nombre + 5) * $nombre; // $resultat prend la valeur 150


//modulo
$nombre = 10 % 5; // $nombre prend la valeur 0 car la division tombe juste
$nombre = 10 % 3; // $nombre prend la valeur 1 car il reste 1
echo "<br>";

//condition
echo "<br>";
$age = 8;
 
if ($age <= 12) // SI l'âge est inférieur ou égal à 12
{
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
}
else // SINON
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}
 
echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";

//Switch case
$note = 10;

switch ($note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

//Condition
$age_test = 24;

$majeur = ($age_test >= 18) ? true : false;
echo "<br>";echo "<br>";echo "<br>";


//Boucle :
//While
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 15)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++;
}
echo "<br>";echo "<br>";echo "<br>";

//boucle for
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
echo "<br>";echo "<br>";

//Tableau :
// 1 ere declaration : La fonction array permet de créer un array
$prenoms = array ('omar', 'khali', 'laila', 'si soufiane');

//2 eme declaration
$prenoms[0] = 'khali';
$prenoms[1] = 'wahed khana';
$prenoms[2] = 'si laila';

//3 eme declaration 
$prenoms[] = 'khali'; // Créera $prenoms[0]
$prenoms[] = 'wahed khana'; // Créera $prenoms[1]
$prenoms[] = 'si laila'; // Créera $prenoms[2]

//tableau associatif:
// 1 ere declaration: On crée notre array $coordonnees
$coordonnees = array (
    'prenom' => 'si soufian',
    'nom' => 'chahbar',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Tanger');
//2 eme declaration
$coordonnees['prenom'] = 'si soufian';
$coordonnees['nom'] = 'chahbar';
$coordonnees['adresse'] = '3 Rue du Paradis';
$coordonnees['ville'] = 'Tanger';

//Affichage
$prenoms = array ('omar', 'khali', 'laila', 'si soufiane');
// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}

echo "<br>";echo "<br>";

$pren = array ('hamid', 'elmorhit', 'abd el morhit', 'git', 'github');

foreach($pren as $element)
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
//utilisation de cle
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo '<pre>';
print_r($coordonnees);
echo '</pre>';

//fonctions definis en php
//longueur d'une chaine
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
 
 
echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;

echo "<br>";echo "<br>";


//chercher et remplacer
$ma_variable = str_replace('b', 'p', 'bim bam boum');
 
echo $ma_variable;

echo "<br>";echo "<br>";
//melanger une chaine
$chaine = 'Cette chaine va etre melangee !';
$chaine = str_shuffle($chaine);
 
echo $chaine;


echo "<br>";echo "<br>";
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
echo "<br>";echo "<br>";
//Propre fonction
function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour(' A khouti');
DireBonjour('Laila');
DireBonjour('Asmae');
DireBonjour('Khali');
DireBonjour('Sma3in');

echo "<br>";echo "<br>";

// Ci-dessous, la fonction qui calcule le volume du cône
function VolumeCone($rayon, $hauteur)
{
   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   return $volume; // indique la valeur à renvoyer, ici le volume
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
?>



