<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180716084012 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC3863A3B64C4');
        $this->addSql('DROP INDEX IDX_45EDC3863A3B64C4 ON bien');
        $this->addSql('ALTER TABLE bien CHANGE arrondissement cArrondissement INT NOT NULL');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC386A27449A6 FOREIGN KEY (cArrondissement) REFERENCES carrondissement (id)');
        $this->addSql('CREATE INDEX IDX_45EDC386A27449A6 ON bien (cArrondissement)');
        $this->addSql('ALTER TABLE carrondissement DROP FOREIGN KEY FK_6F10317EE2E2D1EE');
        $this->addSql('DROP INDEX IDX_6F10317EE2E2D1EE ON carrondissement');
        $this->addSql('ALTER TABLE carrondissement CHANGE commune arrondissement INT NOT NULL');
        $this->addSql('ALTER TABLE carrondissement ADD CONSTRAINT FK_6F10317E3A3B64C4 FOREIGN KEY (arrondissement) REFERENCES arrondissement (id)');
        $this->addSql('CREATE INDEX IDX_6F10317E3A3B64C4 ON carrondissement (arrondissement)');
        $this->addSql('ALTER TABLE arrondissement DROP FOREIGN KEY FK_3A3B64C4A27449A6');
        $this->addSql('DROP INDEX IDX_3A3B64C4A27449A6 ON arrondissement');
        $this->addSql('ALTER TABLE arrondissement CHANGE carrondissement commune INT NOT NULL');
        $this->addSql('ALTER TABLE arrondissement ADD CONSTRAINT FK_3A3B64C4E2E2D1EE FOREIGN KEY (commune) REFERENCES commune (id)');
        $this->addSql('CREATE INDEX IDX_3A3B64C4E2E2D1EE ON arrondissement (commune)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE arrondissement DROP FOREIGN KEY FK_3A3B64C4E2E2D1EE');
        $this->addSql('DROP INDEX IDX_3A3B64C4E2E2D1EE ON arrondissement');
        $this->addSql('ALTER TABLE arrondissement CHANGE commune cArrondissement INT NOT NULL');
        $this->addSql('ALTER TABLE arrondissement ADD CONSTRAINT FK_3A3B64C4A27449A6 FOREIGN KEY (cArrondissement) REFERENCES carrondissement (id)');
        $this->addSql('CREATE INDEX IDX_3A3B64C4A27449A6 ON arrondissement (cArrondissement)');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC386A27449A6');
        $this->addSql('DROP INDEX IDX_45EDC386A27449A6 ON bien');
        $this->addSql('ALTER TABLE bien CHANGE carrondissement arrondissement INT NOT NULL');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC3863A3B64C4 FOREIGN KEY (arrondissement) REFERENCES arrondissement (id)');
        $this->addSql('CREATE INDEX IDX_45EDC3863A3B64C4 ON bien (arrondissement)');
        $this->addSql('ALTER TABLE carrondissement DROP FOREIGN KEY FK_6F10317E3A3B64C4');
        $this->addSql('DROP INDEX IDX_6F10317E3A3B64C4 ON carrondissement');
        $this->addSql('ALTER TABLE carrondissement CHANGE arrondissement commune INT NOT NULL');
        $this->addSql('ALTER TABLE carrondissement ADD CONSTRAINT FK_6F10317EE2E2D1EE FOREIGN KEY (commune) REFERENCES commune (id)');
        $this->addSql('CREATE INDEX IDX_6F10317EE2E2D1EE ON carrondissement (commune)');
    }
}
