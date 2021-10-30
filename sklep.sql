CREATE DATABASE IF NOT EXISTS sklep;
USE sklep;

DROP TABLE IF EXISTS `pracownik`;
CREATE TABLE `pracownik` (
    `id_pracownik` INT NOT NULL AUTO_INCREMENT,
    `imie` VARCHAR(48) NOT NULL,
    `nazwisko` VARCHAR(48)  NOT NULL,
    `miejscowosc` VARCHAR(48) NOT NULL,
    `ulica` VARCHAR(48) NOT NULL,
    `numer_domu` VARCHAR(6) NOT NULL,
    `nr_telefonu` VARCHAR(12) NOT NULL,
    `id_stanowisko` INT NOT NULL,
    `Data_zatrudnienia` DATE NOT NULL,
    `Data_zwolnienia` DATE DEFAULT NULL,
    PRIMARY KEY (`id_pracownik`)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8;

DROP TABLE IF EXISTS `stanowiska`;
CREATE TABLE `stanowiska` (
  `id_stanowisko` INT NOT NULL AUTO_INCREMENT,
  `nazwa` VARCHAR(48) NOT NULL,
  `placa` DECIMAL(9,2) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_stanowisko`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `produkt`;
CREATE TABLE `produkt` (
    `id_produkt` INT NOT NULL AUTO_INCREMENT,
    `nazwa` VARCHAR(48) DEFAULT NULL,
    `kategoria` VARCHAR(48) NOT NULL,
    `typ` VARCHAR(48) NOT NULL,
    `id_zdjecia` INT NOT NULL,
    PRIMARY KEY (`id_produktu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `zdjecia`;
CREATE TABLE `zdjecia` (
	`id_zdjecia` INT NOT NULL AUTO_INCREMENT,
    `dodatkowezdj` VARCHAR(48) DEFAULT NULL,
    PRIMARY KEY (`id_zdjecia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `zamowienie`;
CREATE TABLE `zamowienie` (
	`id_zamowienie` INT NOT NULL AUTO_INCREMENT,
    `data_zamowienia` DATE DEFAULT NULL,
    `id_klient` INT NOT NULL,
    `id_produkt` INT NOT NULL,
    `id_pracownik` INT NOT NULL,
    PRIMARY KEY (`id_zamowienie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `klient`;
CREATE TABLE `klient` (
	`id_klient` INT NOT NULL AUTO_INCREMENT,
    `imie` VARCHAR(48) DEFAULT NULL,
    `nazwisko` VARCHAR(48) NOT NULL,
    `miejscowosc` VARCHAR(48) NOT NULL,
    `ulica` VARCHAR(48) NOT NULL,
    `numer_domu` VARCHAR(6) NOT NULL,
    `nr_telefonu` VARCHAR(12) NOT NULL,
    `email` VARCHAR(48) NOT NULL,
    PRIMARY KEY (`id_klient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `uzytkownik`;
CREATE TABLE `uzytkownik` (
	`login` VARCHAR(48) NOT NULL,
    `id_klient` INT DEFAULT NULL,
    `haslo` VARCHAR(48) NOT NULL,
    `id_koszyk` INT NOT NULL,
    PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `koszyk`;
CREATE TABLE `koszyk` (
	`id_koszyk` INT NOT NULL AUTO_INCREMENT,
    `id_zamowienia` INT DEFAULT NULL,
    PRIMARY KEY (`id_koszyk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE pracownik ADD UNIQUE INDEX (id_pracownik);
ALTER TABLE stanowiska ADD UNIQUE INDEX (id_stanowiska);
ALTER TABLE produkt ADD UNIQUE INDEX (id_produkt);
ALTER TABLE zdjecia ADD UNIQUE INDEX (id_zdjecia);
ALTER TABLE zamowienie ADD UNIQUE INDEX (id_zamowienie);
ALTER TABLE klient ADD UNIQUE INDEX (id_klient);
ALTER TABLE uzytkownik ADD UNIQUE INDEX (id_uzytkownik);
ALTER TABLE koszyk ADD UNIQUE INDEX (id_koszyk);


ALTER TABLE pracownik ADD CONSTRAINT FOREIGN KEY (`id_stanowisko`) REFERENCES `stanowiska`(`id_stanowisko`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE produkt ADD CONSTRAINT FOREIGN KEY (`id_zdjecia`) REFERENCES `zdjecia`(`id_zdjecia`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_klient`) REFERENCES `klient`(`id_klient`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_produkt`) REFERENCES `produkt`(`id_produkt`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_pracownik`) REFERENCES `pracownik`(`id_pracownik`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE uzytkownik ADD CONSTRAINT FOREIGN KEY (`id_klient`) REFERENCES `klient`(`id_klient`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE uzytkownik ADD CONSTRAINT FOREIGN KEY (`id_koszyk`) REFERENCES `koszyk`(`id_koszyk`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE koszyk ADD CONSTRAINT FOREIGN KEY (`id_zamowienia`) REFERENCES `zamowienie`(`id_zamowienia`) ON DELETE CASCADE ON UPDATE CASCADE;
