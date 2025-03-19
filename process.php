<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['send_email'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        $to = "chaaraouiabdelaziz@gmail.com";
        $headers = "From: " . $name . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $message, $headers)) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false]);
        }
    } elseif (isset($_POST['choix'])) {
        $choix = $_POST['choix'];
        if ($choix == '1') {
            echo json_encode([
                "content" => "
                <div class='formations'>
                    <h1>Formation</h1>
                    <div class='image-container'>
                        <img class='uvsq' src='images/IUT%20Velizy%20Villacoublay%20logo%202020%20ecran.png'>
                    </div>
                    <h3 class='etudes-title'>Compétences Acquises au Cours de Mes Études</h3>
                    <ul class='etudes-description'>
                        <li><strong>Développement Web :</strong> Au cours de mes études, j'ai acquis des compétences solides en développement web, en utilisant des technologies telles que HTML, CSS, JavaScript, ainsi que des frameworks comme Flask.</li><br>
                        <li><strong>Développement Logiciel :</strong> J'ai également développé des compétences en programmation logicielle avec des langages tels que Python, Java et PHP, en abordant des concepts comme la programmation orientée objet et le développement d'applications logicielles robustes.</li><br>
                        <li><strong>Administration de Bases de Données :</strong> J'ai une expérience en gestion et en administration de bases de données avec MySQL et PostgreSQL, ce qui m'a permis de concevoir des schémas de données efficaces et d'optimiser les requêtes SQL.</li><br>
                        <li><strong>Réseaux :</strong> J'ai acquis des connaissances sur les réseaux informatiques, y compris les protocoles de communication, la configuration de serveurs, ainsi que la gestion de la sécurité des réseaux.</li><br>
                        <li><strong>Gestion de Projet :</strong> En parallèle de mes compétences techniques, j'ai également développé des compétences en gestion de projet, en utilisant des outils comme Trello et Git pour coordonner les tâches, suivre l'avancement des projets et travailler efficacement en équipe.</li><br>
                    </ul>
                </div>
                "
            ]);
        } elseif ($choix == '2') {
            echo json_encode([
                "content" => "
                <div class='technologies'>
                    <h1 class='technologies-title'>Technologies</h1>
                    <div class='technologies-images'>
                        <img class='techs' src='images/php-svgrepo-com.png'>
                        <img class='techs' src='images/html-5-svgrepo-com.png'>
                        <img class='techs' src='images/css-3-svgrepo-com.png'>
                        <img class='techs' src='images/python-svgrepo-com.png'>
                        <img class='techs' src='images/flask-svgrepo-com.png'>
                        <img class='techs' src='images/js-svgrepo-com.png'>
                        <img class='techs' src='images/postgresql-svgrepo-com.png'>
                        <img class='techs' src='images/java-svgrepo-com.png'>
                    </div>
                </div>
                "
            ]);
        } elseif ($choix == '3') {
            echo json_encode([
                "content" => "
                <div class='projets'>
                    <h1 class='projets-title'>Projets</h1>
                    <div class='sigmax'>
                        <h3 class='projet-title'>Plateforme Web de Calculs de Probabilités et Cryptographie</h3>
                        <a class='projet-link' href='https://github.com/RayanSUK/SAE_DEV_APP' target='_blank'>Lien vers le projet</a>
                        <ul class='projet-description'>
                            <li><strong>Situation :</strong> Cette plateforme web, hébergée sur un Raspberry Pi de l'IUT, permet aux utilisateurs d’effectuer des calculs de probabilités et de tester des algorithmes de cryptographie.</li><br>
                            <li><strong>Tâche :</strong> Ma mission consistait à mettre en place une plateforme fiable et sécurisée permettant à des utilisateurs d'effectuer des calculs complexes et de tester divers algorithmes de cryptographie.</li><br>
                            <li><strong>Action :</strong>
                                <ul>
                                    <li>J'ai configuré un serveur <strong>Apache</strong> pour héberger la plateforme web et utilisé <strong>MySQL</strong> comme base de données pour stocker les informations nécessaires.</li>
                                    <li>J'ai configuré <strong>SSH</strong> sur le Raspberry Pi pour sécuriser les connexions distantes et installé <strong>Fail2Ban</strong> afin de protéger l'accès contre les tentatives de connexion malveillantes.</li>
                                </ul>
                            </li><br>
                            <li><strong>Résultat :</strong> La plateforme est opérationnelle et permet aux utilisateurs d'effectuer des calculs de probabilités et de tester des algorithmes de cryptographie dans un environnement sécurisé. La sécurité est renforcée grâce à l'utilisation de SSH et Fail2Ban, garantissant une protection contre les attaques malveillantes.</li><br>
                        </ul>
                    </div>
                    <div class='archilog'>
                        <h3 class='projet-title'>Archilog</h3>
                        <a class='projet-link' href='https://github.com/abdmnhjs/Archilog' target='_blank'>Lien vers le projet</a>
                        <ul class='projet-description'>
                            <li><strong>Situation :</strong> J'ai développé une application de gestion de budget dans le cadre d’un projet. L’objectif était de permettre aux utilisateurs d’enregistrer, de modifier et d'exporter des transactions financières.</li><br>
                            <li><strong>Tâche :</strong> Ma mission consistait à concevoir et à développer une application web sécurisée et modulaire pour la gestion des finances personnelles, avec une API REST intégrée, une gestion des rôles, et une validation des données.</li><br>
                            <li><strong>Action :</strong>
                                <ul>
                                    <li>J'ai utilisé <strong>Python avec Flask</strong> pour le développement de l'application, en intégrant <strong>SQLite</strong> comme base de données.</li>
                                    <li>J'ai mis en place une <strong>API REST sécurisée</strong> et un système d'<strong>authentification par rôles</strong> pour assurer la sécurité des données.</li>
                                    <li>J'ai utilisé <strong>WTForms</strong> pour valider les données saisies par l'utilisateur, garantissant ainsi leur intégrité.</li>
                                    <li>Pour faciliter le déploiement, j'ai opté pour <strong>Docker</strong> et <strong>Gunicorn</strong>, permettant une mise en production fluide et optimisée.</li>
                                </ul>
                            </li><br>
                            <li><strong>Résultat :</strong> Le projet est entièrement fonctionnel et permet aux utilisateurs de gérer efficacement leurs finances personnelles. Grâce à l'utilisation de Docker et Gunicorn, l'application est facile à déployer et prête pour une mise en production. Le projet est également disponible sur GitHub pour d'autres utilisateurs et développeurs qui souhaitent l'utiliser ou y contribuer.</li>
                        </ul>
                    </div>
                </div>
                "
            ]);
        }
    }
}
?>
