<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127131759 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE description_image');
        $this->addSql('DROP TABLE featured_image');
        $this->addSql('DROP TABLE thumbnail_image');
        $this->addSql('ALTER TABLE work ADD thumbnail VARCHAR(255) NOT NULL, ADD featured_image VARCHAR(255) NOT NULL, ADD image_one VARCHAR(255) DEFAULT NULL, ADD image_two VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE description_image (id INT AUTO_INCREMENT NOT NULL, work_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, alt VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_DF11D8BDBB3453DB (work_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE featured_image (id INT AUTO_INCREMENT NOT NULL, work_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, alt VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_9C74FFC5BB3453DB (work_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE thumbnail_image (id INT AUTO_INCREMENT NOT NULL, work_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, alt VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_4AAD5FABB3453DB (work_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE description_image ADD CONSTRAINT FK_DF11D8BDBB3453DB FOREIGN KEY (work_id) REFERENCES work (id)');
        $this->addSql('ALTER TABLE featured_image ADD CONSTRAINT FK_9C74FFC5BB3453DB FOREIGN KEY (work_id) REFERENCES work (id)');
        $this->addSql('ALTER TABLE thumbnail_image ADD CONSTRAINT FK_4AAD5FABB3453DB FOREIGN KEY (work_id) REFERENCES work (id)');
        $this->addSql('ALTER TABLE work DROP thumbnail, DROP featured_image, DROP image_one, DROP image_two');
    }
}
