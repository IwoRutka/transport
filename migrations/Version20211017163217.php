<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211017163217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE loads (id INT AUTO_INCREMENT NOT NULL, loading_id INT NOT NULL, unloading_id INT NOT NULL, capacity_id INT NOT NULL, vehicle_type_id INT NOT NULL, added_by_id INT NOT NULL, create_date DATETIME NOT NULL, UNIQUE INDEX UNIQ_782DA536FE3B4E08 (loading_id), UNIQUE INDEX UNIQ_782DA536D82FABCB (unloading_id), UNIQUE INDEX UNIQ_782DA53666B6F0BA (capacity_id), UNIQUE INDEX UNIQ_782DA536DA3FD1FC (vehicle_type_id), UNIQUE INDEX UNIQ_782DA53655B127A4 (added_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE loads ADD CONSTRAINT FK_782DA536FE3B4E08 FOREIGN KEY (loading_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE loads ADD CONSTRAINT FK_782DA536D82FABCB FOREIGN KEY (unloading_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE loads ADD CONSTRAINT FK_782DA53666B6F0BA FOREIGN KEY (capacity_id) REFERENCES capacity (id)');
        $this->addSql('ALTER TABLE loads ADD CONSTRAINT FK_782DA536DA3FD1FC FOREIGN KEY (vehicle_type_id) REFERENCES vehicle_type (id)');
        $this->addSql('ALTER TABLE loads ADD CONSTRAINT FK_782DA53655B127A4 FOREIGN KEY (added_by_id) REFERENCES contractor (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE loads');
    }
}
