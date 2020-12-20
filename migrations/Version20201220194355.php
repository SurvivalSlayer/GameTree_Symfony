<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201220194355 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD username VARCHAR(180) NOT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', DROP pseudo');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677 ON user');
        $this->addSql('ALTER TABLE user ADD pseudo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, DROP username, DROP roles');
    }
}
