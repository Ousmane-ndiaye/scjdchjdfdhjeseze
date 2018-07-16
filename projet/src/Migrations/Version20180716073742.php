<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180716073742 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE periode (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, etat TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commune ADD departement INT NOT NULL');
        $this->addSql('ALTER TABLE commune ADD CONSTRAINT FK_E2E2D1EEC1765B63 FOREIGN KEY (departement) REFERENCES departement (id)');
        $this->addSql('CREATE INDEX IDX_E2E2D1EEC1765B63 ON commune (departement)');
        $this->addSql('ALTER TABLE bien ADD proprietaire INT NOT NULL, ADD cArrondissement INT NOT NULL, ADD typeDeBien INT NOT NULL');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC386A27449A6 FOREIGN KEY (cArrondissement) REFERENCES carrondissement (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC3863476C92B FOREIGN KEY (typeDeBien) REFERENCES typedebien (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC38669E399D6 FOREIGN KEY (proprietaire) REFERENCES proprietaire (id)');
        $this->addSql('CREATE INDEX IDX_45EDC386A27449A6 ON bien (cArrondissement)');
        $this->addSql('CREATE INDEX IDX_45EDC3863476C92B ON bien (typeDeBien)');
        $this->addSql('CREATE INDEX IDX_45EDC38669E399D6 ON bien (proprietaire)');
        $this->addSql('ALTER TABLE carrondissement ADD commune INT NOT NULL');
        $this->addSql('ALTER TABLE carrondissement ADD CONSTRAINT FK_6F10317EE2E2D1EE FOREIGN KEY (commune) REFERENCES arrondissement (id)');
        $this->addSql('CREATE INDEX IDX_6F10317EE2E2D1EE ON carrondissement (commune)');
        $this->addSql('ALTER TABLE departement ADD region INT NOT NULL');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B63F62F176 FOREIGN KEY (region) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_C1765B63F62F176 ON departement (region)');
        $this->addSql('ALTER TABLE region ADD pays INT NOT NULL');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F176349F3CAE FOREIGN KEY (pays) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_F62F176349F3CAE ON region (pays)');
        $this->addSql('ALTER TABLE arrondissement ADD commune INT NOT NULL');
        $this->addSql('ALTER TABLE arrondissement ADD CONSTRAINT FK_3A3B64C4E2E2D1EE FOREIGN KEY (commune) REFERENCES commune (id)');
        $this->addSql('CREATE INDEX IDX_3A3B64C4E2E2D1EE ON arrondissement (commune)');
        $this->addSql('ALTER TABLE video ADD bien INT NOT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C45EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2C45EDC386 ON video (bien)');
        $this->addSql('ALTER TABLE image ADD bien INT NOT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F45EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F45EDC386 ON image (bien)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE periode');
        $this->addSql('ALTER TABLE arrondissement DROP FOREIGN KEY FK_3A3B64C4E2E2D1EE');
        $this->addSql('DROP INDEX IDX_3A3B64C4E2E2D1EE ON arrondissement');
        $this->addSql('ALTER TABLE arrondissement DROP commune');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC386A27449A6');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC3863476C92B');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC38669E399D6');
        $this->addSql('DROP INDEX IDX_45EDC386A27449A6 ON bien');
        $this->addSql('DROP INDEX IDX_45EDC3863476C92B ON bien');
        $this->addSql('DROP INDEX IDX_45EDC38669E399D6 ON bien');
        $this->addSql('ALTER TABLE bien DROP proprietaire, DROP cArrondissement, DROP typeDeBien');
        $this->addSql('ALTER TABLE carrondissement DROP FOREIGN KEY FK_6F10317EE2E2D1EE');
        $this->addSql('DROP INDEX IDX_6F10317EE2E2D1EE ON carrondissement');
        $this->addSql('ALTER TABLE carrondissement DROP commune');
        $this->addSql('ALTER TABLE commune DROP FOREIGN KEY FK_E2E2D1EEC1765B63');
        $this->addSql('DROP INDEX IDX_E2E2D1EEC1765B63 ON commune');
        $this->addSql('ALTER TABLE commune DROP departement');
        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B63F62F176');
        $this->addSql('DROP INDEX IDX_C1765B63F62F176 ON departement');
        $this->addSql('ALTER TABLE departement DROP region');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F45EDC386');
        $this->addSql('DROP INDEX IDX_C53D045F45EDC386 ON image');
        $this->addSql('ALTER TABLE image DROP bien');
        $this->addSql('ALTER TABLE region DROP FOREIGN KEY FK_F62F176349F3CAE');
        $this->addSql('DROP INDEX IDX_F62F176349F3CAE ON region');
        $this->addSql('ALTER TABLE region DROP pays');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C45EDC386');
        $this->addSql('DROP INDEX IDX_7CC7DA2C45EDC386 ON video');
        $this->addSql('ALTER TABLE video DROP bien');
    }
}
