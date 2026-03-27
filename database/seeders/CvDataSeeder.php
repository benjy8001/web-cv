<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Diploma;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class CvDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedSettings();
        $this->seedDiplomas();
        $this->seedExperiences();
        $this->seedSkills();
        $this->seedProjects();
    }

    private function seedSettings(): void
    {
        $settings = [
            'name' => 'Benjamin Mabille',
            'title' => json_encode(['fr' => 'Développeur PHP Full Stack', 'en' => 'PHP Full Stack Developer']),
            'bio' => json_encode([
                'fr' => "Je suis actuellement en poste en tant que Consultant IT. Mes différentes missions m'ont apporté une expérience certaine au niveau des CI/CD, du respect des PSR, de la rédaction de SFD/STD et du chiffrage de tâches.",
                'en' => "I am currently working as an IT Consultant. My various missions have given me solid experience in CI/CD, PSR compliance, writing SFD/STD documentation, and task estimation.",
            ]),
            'email' => 'benjy80@gmail.com',
            'phone' => '06 14 63 61 41',
            'address' => '18 rue Principale, 80110 AUBERCOURT',
            'linkedin' => '',
            'github' => '',
            'is_available' => 'true',
            'is_maintenance' => 'false',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }
    }

    private function seedDiplomas(): void
    {
        $diplomas = [
            [
                'school' => 'IUT de Calais (62)',
                'title' => ['fr' => 'Licence Pro RSC, Exploitation Réseau', 'en' => 'Professional License RSC, Network Operations'],
                'specialization' => ['fr' => 'Mention Bien', 'en' => 'With Honours'],
                'mention' => 'Bien',
                'year_start' => 2006,
                'year_end' => 2007,
                'sort_order' => 1,
            ],
            [
                'school' => 'IUT de Calais (62)',
                'title' => ['fr' => 'DUT Informatique, Imagerie Numérique', 'en' => 'DUT Computer Science, Digital Imaging'],
                'specialization' => null,
                'mention' => null,
                'year_start' => 2004,
                'year_end' => 2006,
                'sort_order' => 2,
            ],
            [
                'school' => 'Lycée du Vimeu',
                'title' => ['fr' => 'BAC STI Electrotechnique', 'en' => 'BAC STI Electrotechnics'],
                'specialization' => ['fr' => 'Mention Bien', 'en' => 'With Honours'],
                'mention' => 'Bien',
                'year_start' => 2003,
                'year_end' => 2004,
                'sort_order' => 3,
            ],
        ];

        foreach ($diplomas as $data) {
            Diploma::create($data);
        }
    }

    private function seedExperiences(): void
    {
        $experiences = [
            [
                'company' => '1min30',
                'position' => ['fr' => 'Consultant IT', 'en' => 'IT Consultant'],
                'description' => [
                    'fr' => "Réalisation d'applications tiers en lien avec un CRM (Hubspot)\nUsine Logicielle (Gitlab, CI/CD, Review de code, phpqa)",
                    'en' => "Development of third-party applications linked to a CRM (Hubspot)\nSoftware Factory (Gitlab, CI/CD, Code review, phpqa)",
                ],
                'url' => 'https://www.1min30.com/',
                'location' => 'Paris (75)',
                'date_start' => '2023-05-01',
                'date_end' => null,
                'is_current' => true,
                'sort_order' => 1,
            ],
            [
                'company' => 'Converteo',
                'position' => ['fr' => 'Consultant IT', 'en' => 'IT Consultant'],
                'description' => [
                    'fr' => "Réalisation d'applications tiers en lien avec un CRM (Hubspot)\nUsine Logicielle (Gitlab, CI/CD, Review de code, phpqa)",
                    'en' => "Development of third-party applications linked to a CRM (Hubspot)\nSoftware Factory (Gitlab, CI/CD, Code review, phpqa)",
                ],
                'url' => 'https://converteo.com/',
                'location' => 'Paris (75)',
                'date_start' => '2022-01-01',
                'date_end' => '2023-04-30',
                'is_current' => false,
                'sort_order' => 2,
            ],
            [
                'company' => 'Business&Decision',
                'position' => ['fr' => 'Consultant Sénior', 'en' => 'Senior Consultant'],
                'description' => [
                    'fr' => "Réalisation d'études et chiffrages\nRefonte\nUsine Logicielle (Gitlab, CI/CD, Rancher, Review de code, phpqa)",
                    'en' => "Studies and estimations\nRefactoring\nSoftware Factory (Gitlab, CI/CD, Rancher, Code review, phpqa)",
                ],
                'url' => 'https://www.businessdecision.com/fr-fr',
                'location' => 'Amiens (80)',
                'date_start' => '2018-01-01',
                'date_end' => '2022-12-31',
                'is_current' => false,
                'sort_order' => 3,
            ],
            [
                'company' => 'Ugloo',
                'position' => ['fr' => 'Développeur', 'en' => 'Developer'],
                'description' => [
                    'fr' => "Maintien et évolution de l'interface Web de pilotage d'une solution de backup (Laravel, NodeJS, Redis, InfluxDB)\nParticipation à l'élaboration de la core-tech (Python, Redis, libtorrent)",
                    'en' => "Maintenance and evolution of a backup solution web dashboard (Laravel, NodeJS, Redis, InfluxDB)\nContribution to core-tech development (Python, Redis, libtorrent)",
                ],
                'url' => 'https://www.ugloo.com/',
                'location' => 'Amiens (80)',
                'date_start' => '2017-01-01',
                'date_end' => '2018-12-31',
                'is_current' => false,
                'sort_order' => 4,
            ],
            [
                'company' => 'Plug-It',
                'position' => ['fr' => 'Développeur Full Stack', 'en' => 'Full Stack Developer'],
                'description' => [
                    'fr' => "Maintien, création et évolution des outils internes ; création de sites web et de progiciels.",
                    'en' => "Maintenance, creation, and evolution of internal tools; creation of websites and business software.",
                ],
                'url' => null,
                'location' => 'Ailly-Sur-Noye (80)',
                'date_start' => '2014-01-01',
                'date_end' => '2017-12-31',
                'is_current' => false,
                'sort_order' => 5,
            ],
            [
                'company' => 'CCA International',
                'position' => ['fr' => 'Administrateur BDD', 'en' => 'Database Administrator'],
                'description' => [
                    'fr' => 'Administration de bases de données.',
                    'en' => 'Database administration.',
                ],
                'url' => null,
                'location' => 'Amiens (80)',
                'date_start' => '2010-01-01',
                'date_end' => '2014-12-31',
                'is_current' => false,
                'sort_order' => 6,
            ],
            [
                'company' => 'Intracall Center',
                'position' => ['fr' => 'Développeur LAMP', 'en' => 'LAMP Developer'],
                'description' => [
                    'fr' => "Création d'applications Intranet / Extranet en interaction avec un système de composition téléphonique.",
                    'en' => "Creation of Intranet/Extranet applications interfacing with a telephone dialing system.",
                ],
                'url' => null,
                'location' => 'Amiens (80)',
                'date_start' => '2008-01-01',
                'date_end' => '2010-12-31',
                'is_current' => false,
                'sort_order' => 7,
            ],
        ];

        foreach ($experiences as $data) {
            Experience::create($data);
        }
    }

    private function seedSkills(): void
    {
        $skills = [
            // Backend
            ['name' => 'PHP 8', 'category' => 'backend', 'icon' => 'devicon-php-plain', 'level' => 95, 'sort_order' => 1],
            ['name' => 'Laravel', 'category' => 'backend', 'icon' => 'devicon-laravel-original', 'level' => 85, 'sort_order' => 2],
            ['name' => 'Symfony', 'category' => 'backend', 'icon' => 'devicon-symfony-original', 'level' => 75, 'sort_order' => 3],
            ['name' => 'API Platform', 'category' => 'backend', 'icon' => null, 'level' => 70, 'sort_order' => 4],
            ['name' => 'MySQL', 'category' => 'backend', 'icon' => 'devicon-mysql-original', 'level' => 95, 'sort_order' => 5],
            ['name' => 'PostgreSQL', 'category' => 'backend', 'icon' => 'devicon-postgresql-plain', 'level' => 70, 'sort_order' => 6],
            ['name' => 'Redis', 'category' => 'backend', 'icon' => 'devicon-redis-plain', 'level' => 75, 'sort_order' => 7],
            ['name' => 'Python', 'category' => 'backend', 'icon' => 'devicon-python-plain', 'level' => 60, 'sort_order' => 8],

            // DevOps
            ['name' => 'Docker', 'category' => 'devops', 'icon' => 'devicon-docker-plain', 'level' => 90, 'sort_order' => 1],
            ['name' => 'GitLab CI/CD', 'category' => 'devops', 'icon' => 'devicon-gitlab-plain', 'level' => 95, 'sort_order' => 2],
            ['name' => 'Git', 'category' => 'devops', 'icon' => 'devicon-git-plain', 'level' => 90, 'sort_order' => 3],
            ['name' => 'Linux', 'category' => 'devops', 'icon' => 'devicon-linux-plain', 'level' => 90, 'sort_order' => 4],
            ['name' => 'Rancher', 'category' => 'devops', 'icon' => null, 'level' => 70, 'sort_order' => 5],
            ['name' => 'Nginx', 'category' => 'devops', 'icon' => 'devicon-nginx-original', 'level' => 80, 'sort_order' => 6],

            // Frontend
            ['name' => 'React', 'category' => 'frontend', 'icon' => 'devicon-react-original', 'level' => 70, 'sort_order' => 1],
            ['name' => 'Vue.js', 'category' => 'frontend', 'icon' => 'devicon-vuejs-plain', 'level' => 70, 'sort_order' => 2],
            ['name' => 'Tailwind CSS', 'category' => 'frontend', 'icon' => 'devicon-tailwindcss-original', 'level' => 80, 'sort_order' => 3],
            ['name' => 'Alpine.js', 'category' => 'frontend', 'icon' => null, 'level' => 75, 'sort_order' => 4],
            ['name' => 'Inertia.js', 'category' => 'frontend', 'icon' => null, 'level' => 80, 'sort_order' => 5],

            // Soft skills
            ['name' => 'Autodidacte', 'category' => 'soft', 'icon' => 'book', 'level' => 90, 'sort_order' => 1],
            ['name' => 'Travail en équipe', 'category' => 'soft', 'icon' => 'users', 'level' => 90, 'sort_order' => 2],
            ['name' => 'Polyvalent', 'category' => 'soft', 'icon' => 'star', 'level' => 85, 'sort_order' => 3],
        ];

        foreach ($skills as $data) {
            Skill::create($data);
        }
    }

    private function seedProjects(): void
    {
        $projects = [
            [
                'title' => ['fr' => 'Je gère ma carte Navigo', 'en' => 'Navigo Card Management'],
                'description' => [
                    'fr' => "Pour le client COMUTITRES (Groupement RATP/SNCF/OPTILE) : Reprise TMA site de Services En Ligne (achat de titres, SAV). Réalisation d'études et chiffrages (OpenStreetMap, OpenCV). Rédaction de SFD/STD.",
                    'en' => "For COMUTITRES client (RATP/SNCF/OPTILE Group): Took over maintenance of the Online Services website (ticket purchase, after-sales). Studies and estimates (OpenStreetMap, OpenCV). SFD/STD documentation.",
                ],
                'url' => 'https://www.jegeremacartenavigo.fr/touslesservices',
                'technologies' => ['Symfony 2.8', 'OpenStreetMap', 'OpenCV'],
                'category' => 'web',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => ['fr' => 'Offres promotionnelles Samsung (ODR)', 'en' => 'Samsung Promotional Offers (ODR)'],
                'description' => [
                    'fr' => "Projet de build pour le client SAMSUNG : Refonte d'un outil de configuration de promotions dématérialisées. CI/CD GitLab avec contrôle qualité de code.",
                    'en' => "Build project for SAMSUNG client: Redesign of a digital promotions configuration tool. GitLab CI/CD with code quality control.",
                ],
                'url' => 'https://offres.samsung.fr',
                'technologies' => ['Symfony 4.3', 'API Platform', 'Symfony Workflow', 'GitLab CI/CD'],
                'category' => 'web',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => ['fr' => 'Sauvegarde décentralisée P2P', 'en' => 'P2P Decentralized Backup'],
                'description' => [
                    'fr' => "Élaboration de la core-tech : solution de backup décentralisée basée sur le réseau P2P.",
                    'en' => "Core-tech development: decentralized backup solution based on P2P network.",
                ],
                'url' => null,
                'technologies' => ['Python 3.4', 'Libtorrent', 'Fuse', 'Redis', 'InfluxDB'],
                'category' => 'software',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => ['fr' => 'Interface de gestion de sauvegarde', 'en' => 'Backup Management Interface'],
                'description' => [
                    'fr' => "Interface Web de pilotage d'une solution de backup.",
                    'en' => "Web dashboard for managing a backup solution.",
                ],
                'url' => null,
                'technologies' => ['Laravel 5.4', 'VueJS', 'PHP 7', 'PostgreSQL', 'Redis', 'InfluxDB'],
                'category' => 'web',
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'title' => ['fr' => 'Gestion de stock', 'en' => 'Stock Management'],
                'description' => [
                    'fr' => "Outil de suivi du stock. Saisie rapide avec système de douchette. Export Excel.",
                    'en' => "Stock tracking tool. Quick input with barcode scanner. Excel export.",
                ],
                'url' => null,
                'technologies' => ['Laravel 5.4', 'Materialize CSS', 'PHP 7', 'MySQL 5.7'],
                'category' => 'web',
                'is_featured' => true,
                'sort_order' => 5,
            ],
            [
                'title' => ['fr' => 'Outil de Bon à Tirer en ligne', 'en' => 'Online Print Proof Tool'],
                'description' => [
                    'fr' => "Outil intégrant automatiquement des éditions à imprimer (déposés sur FTP, détectés avec Inotify). Validation client page par page avec compte rendu par mail.",
                    'en' => "Tool automatically integrating print editions (FTP upload, Inotify detection). Client page-by-page validation with email reports.",
                ],
                'url' => 'https://webextranet.rotopicardie.fr/',
                'technologies' => ['Materialize CSS', 'Ajax', 'PHP', 'MySQL'],
                'category' => 'web',
                'is_featured' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($projects as $data) {
            Project::create($data);
        }
    }
}
