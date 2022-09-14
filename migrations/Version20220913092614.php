<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220913092614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupon ADD user INT DEFAULT NULL, ADD is_deleted TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE coupon ADD CONSTRAINT FK_64BF3F028D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_64BF3F028D93D649 ON coupon (user)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupon DROP FOREIGN KEY FK_64BF3F028D93D649');
        $this->addSql('DROP INDEX IDX_64BF3F028D93D649 ON coupon');
        $this->addSql('ALTER TABLE coupon DROP user, DROP is_deleted');
    }
}
