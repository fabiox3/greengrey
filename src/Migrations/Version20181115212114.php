<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181115212114 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE weather_hist (id INT AUTO_INCREMENT NOT NULL, localita VARCHAR(60) NOT NULL, date DATE NOT NULL, tmedia INT NOT NULL, tmin INT NOT NULL, tmax INT NOT NULL, puntorugiada INT NOT NULL, perc_umidita INT NOT NULL, visib_km INT NOT NULL, ventomedia_kmh INT NOT NULL, ventomax_kmh INT NOT NULL, ventoraffica_kmh INT NOT NULL, pressioneslm_mb INT NOT NULL, pressionemedia_mb INT NOT NULL, pioggia_mm INT NOT NULL, fenomeni VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE weather_hist');
    }
}
