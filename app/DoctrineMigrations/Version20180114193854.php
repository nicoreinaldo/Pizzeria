<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180114193854 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Cliente ADD id_fos_id INT DEFAULT NULL, DROP id_fos');
        $this->addSql('ALTER TABLE Cliente ADD CONSTRAINT FK_3BA1A2B9B2B00BC5 FOREIGN KEY (id_fos_id) REFERENCES fos_user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3BA1A2B9B2B00BC5 ON Cliente (id_fos_id)');
        $this->addSql('ALTER TABLE EstadoPedido CHANGE idEstadoPedido idEstadoPedido INT AUTO_INCREMENT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Cliente DROP FOREIGN KEY FK_3BA1A2B9B2B00BC5');
        $this->addSql('DROP INDEX UNIQ_3BA1A2B9B2B00BC5 ON Cliente');
        $this->addSql('ALTER TABLE Cliente ADD id_fos INT NOT NULL, DROP id_fos_id');
        $this->addSql('ALTER TABLE EstadoPedido CHANGE idEstadoPedido idEstadoPedido INT NOT NULL');
    }
}
