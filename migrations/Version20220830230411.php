<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220830230411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE coupon_image (id INT AUTO_INCREMENT NOT NULL, coupons INT DEFAULT NULL, file_name VARCHAR(254) NOT NULL, createdAt DATETIME NOT NULL, INDEX IDX_2B735BAFF5641118 (coupons), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coupon_image ADD CONSTRAINT FK_2B735BAFF5641118 FOREIGN KEY (coupons) REFERENCES coupon (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupon_image DROP FOREIGN KEY FK_2B735BAFF5641118');
        $this->addSql('DROP TABLE coupon_image');
    }
}
