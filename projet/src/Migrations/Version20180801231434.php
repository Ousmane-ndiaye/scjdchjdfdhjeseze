<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180801231434 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC69E399D6');
        $this->addSql('DROP INDEX IDX_67F068BC69E399D6 ON commentaire');
        $this->addSql('ALTER TABLE commentaire CHANGE proprietaire user INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC8D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC8D93D649 ON commentaire (user)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC8D93D649');
        $this->addSql('DROP INDEX IDX_67F068BC8D93D649 ON commentaire');
        $this->addSql('ALTER TABLE commentaire CHANGE user proprietaire INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC69E399D6 FOREIGN KEY (proprietaire) REFERENCES proprietaire (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC69E399D6 ON commentaire (proprietaire)');
    }
}
