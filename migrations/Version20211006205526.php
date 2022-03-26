<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211006205526 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ch_cookieconsent_log (id INT AUTO_INCREMENT NOT NULL, ip_address VARCHAR(255) NOT NULL, cookie_consent_key VARCHAR(255) NOT NULL, cookie_name VARCHAR(255) NOT NULL, cookie_value VARCHAR(255) NOT NULL, timestamp DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact_form (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(128) NOT NULL, email VARCHAR(128) NOT NULL, subject VARCHAR(128) NOT NULL, message LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ch_cookieconsent_log');
        $this->addSql('DROP TABLE contact_form');
    }
}
