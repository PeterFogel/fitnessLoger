<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181030054714 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE zaznam (id INT AUTO_INCREMENT NOT NULL, datum DATETIME NOT NULL, partia VARCHAR(255) NOT NULL, cvik VARCHAR(255) NOT NULL, vaha INT NOT NULL, prva_seria INT NOT NULL, ciel INT NOT NULL, realizovane INT NOT NULL, poznamky VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE zaznamy');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE zaznamy (id INT AUTO_INCREMENT NOT NULL, datum DATE NOT NULL, partia VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, cvik VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, vaha INT NOT NULL, prva_seria INT NOT NULL, ciel INT NOT NULL, realizovane INT NOT NULL, poznamky VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE zaznam');
    }
}
