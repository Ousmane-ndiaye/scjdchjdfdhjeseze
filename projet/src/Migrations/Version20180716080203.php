<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180716080203 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, client INT DEFAULT NULL, proprietaire INT DEFAULT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', etat TINYINT(1) NOT NULL, photo LONGBLOB NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), INDEX IDX_8D93D649C7440455 (client), INDEX IDX_8D93D64969E399D6 (proprietaire), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649C7440455 FOREIGN KEY (client) REFERENCES client (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64969E399D6 FOREIGN KEY (proprietaire) REFERENCES proprietaire (id)');
        $this->addSql('ALTER TABLE periode ADD reservation INT NOT NULL');
        $this->addSql('ALTER TABLE periode ADD CONSTRAINT FK_93C32DF342C84955 FOREIGN KEY (reservation) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_93C32DF342C84955 ON periode (reservation)');
        $this->addSql('ALTER TABLE reservation ADD bien INT NOT NULL, ADD client INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495545EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C7440455 FOREIGN KEY (client) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_42C8495545EDC386 ON reservation (bien)');
        $this->addSql('CREATE INDEX IDX_42C84955C7440455 ON reservation (client)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE periode DROP FOREIGN KEY FK_93C32DF342C84955');
        $this->addSql('DROP INDEX IDX_93C32DF342C84955 ON periode');
        $this->addSql('ALTER TABLE periode DROP reservation');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495545EDC386');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C7440455');
        $this->addSql('DROP INDEX IDX_42C8495545EDC386 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955C7440455 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP bien, DROP client');
    }
}
