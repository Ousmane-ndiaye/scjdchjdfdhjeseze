<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180717114936 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ouvrable ADD bien INT NOT NULL, ADD jour INT NOT NULL');
        $this->addSql('ALTER TABLE ouvrable ADD CONSTRAINT FK_B089F1D545EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('ALTER TABLE ouvrable ADD CONSTRAINT FK_B089F1D5DA17D9C5 FOREIGN KEY (jour) REFERENCES jour (id)');
        $this->addSql('CREATE INDEX IDX_B089F1D545EDC386 ON ouvrable (bien)');
        $this->addSql('CREATE INDEX IDX_B089F1D5DA17D9C5 ON ouvrable (jour)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ouvrable DROP FOREIGN KEY FK_B089F1D545EDC386');
        $this->addSql('ALTER TABLE ouvrable DROP FOREIGN KEY FK_B089F1D5DA17D9C5');
        $this->addSql('DROP INDEX IDX_B089F1D545EDC386 ON ouvrable');
        $this->addSql('DROP INDEX IDX_B089F1D5DA17D9C5 ON ouvrable');
        $this->addSql('ALTER TABLE ouvrable DROP bien, DROP jour');
    }
}
