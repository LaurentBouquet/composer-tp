<?php
require_once '../vendor/autoload.php';

use PDO;
use App\Manager\UsersManager;
use Monolog\Logger;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Monolog\Handler\StreamHandler;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__ . '/../log/app.log', Logger::INFO));

$logger->info('Démarrage du logiciel');

// Définir le dossier où se trouvent les templates
$loader = new FilesystemLoader('../templates');

// initialiser l'environnement de Twig et définir le dossier du cache
$twig = new Environment($loader, ['cache' => '../cache']);

require_once("conf.php");

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Si toutes les colonnes sont converties en string

    // Créer une instance de la classe UsersManager (un objet $manager)
    $manager = new UsersManager($db);

    // Affecter les variables du template et appeller le rendu
    echo $twig->render(
        'base.html.twig',
        [
            'title' => 'Liste des utilisateurs',
            'users' => $manager->getAll(),
        ]
    );
} catch (PDOException $e) {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
}
