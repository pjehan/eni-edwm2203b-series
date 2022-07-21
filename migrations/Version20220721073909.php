<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220721073909 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE serie ADD vote NUMERIC(3, 1) NOT NULL, ADD popularity NUMERIC(6, 2) NOT NULL, ADD genres VARCHAR(255) NOT NULL, ADD first_air_date DATE NOT NULL, ADD last_air_date DATE NOT NULL, ADD backdrop VARCHAR(255) NOT NULL, ADD poster VARCHAR(255) NOT NULL, ADD tmdb_id INT NOT NULL, ADD date_created DATETIME NOT NULL, ADD date_modified DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE serie DROP vote, DROP popularity, DROP genres, DROP first_air_date, DROP last_air_date, DROP backdrop, DROP poster, DROP tmdb_id, DROP date_created, DROP date_modified');
    }
}
