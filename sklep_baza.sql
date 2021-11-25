DROP DATABASE IF EXISTS sklep;
CREATE DATABASE sklep;
USE sklep;

DROP TABLE IF EXISTS `pracownik`;
CREATE TABLE `pracownik` (
    `id_pracownik` INT NOT NULL AUTO_INCREMENT,
    `id_uzytkownik` INT NOT NULL,
    `stanowisko` varchar(32) NOT NULL,
    `Data_zatrudnienia` DATE NOT NULL,
    `Data_zwolnienia` DATE DEFAULT NULL,
    PRIMARY KEY (`id_pracownik`)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8;

DROP TABLE IF EXISTS `produkt`;
CREATE TABLE `produkt` (
    `id_produkt` INT NOT NULL AUTO_INCREMENT,
    `nazwa` VARCHAR(48) DEFAULT NULL,
    `kategoria` VARCHAR(48) NOT NULL,
    `typ` VARCHAR(48) NOT NULL,
    `wariant` VARCHAR(48) NOT NULL,
    `ilosc` int default null,
    `cena_kupna` decimal default null,
    `cena_sprzedaz` decimal default null,
    PRIMARY KEY (`id_produkt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `zamowienie`;
CREATE TABLE `zamowienie` (
	`id_zamowienie` INT NOT NULL AUTO_INCREMENT,
    `data_zamowienia` DATE DEFAULT NULL,
    `id_uzytkownik` INT NOT NULL,
    `id_produktu` INT NOT NULL,
    `id_pracownik` INT NOT NULL,
    `wartosc` decimal not null,
    `status` varchar(64) not null,
    PRIMARY KEY (`id_zamowienie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `uzytkownicy`;
CREATE TABLE `uzytkownicy` (
	`id_uzytkownik` INT NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(48) NOT NULL,
    `haslo` VARCHAR(48) NOT NULL,
    `miejscowosc` VARCHAR(48) NOT NULL,
    `ulica` VARCHAR(48) NOT NULL,
    `numer_domu` VARCHAR(6) NOT NULL,
    `nr_telefonu` VARCHAR(12) NOT NULL,
    `czy_admin` boolean,
    `email` varchar(128),
    PRIMARY KEY (`id_uzytkownik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `koszyk`;
CREATE TABLE `koszyk` (
	`id_koszyk` INT NOT NULL AUTO_INCREMENT,
    `id_zamowienie` INT DEFAULT NULL,
    `id_uzytkownik` INT DEFAULT NULL,
    PRIMARY KEY (`id_koszyk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE pracownik ADD UNIQUE INDEX (id_pracownik);
ALTER TABLE produkt ADD UNIQUE INDEX (id_produkt);
ALTER TABLE zamowienie ADD UNIQUE INDEX (id_zamowienie);
ALTER TABLE uzytkownik ADD UNIQUE INDEX (id_pracownik);
ALTER TABLE koszyk ADD UNIQUE INDEX (id_koszyk);

ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_produkt`) REFERENCES `produkt`(`id_produkt`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_pracownik`) REFERENCES `pracownik`(`id_pracownik`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE uzytkownik ADD CONSTRAINT FOREIGN KEY (`id_koszyk`) REFERENCES `koszyk`(`id_koszyk`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE koszyk ADD CONSTRAINT FOREIGN KEY (`id_zamowienie`) REFERENCES `zamowienie`(`id_zamowienie`) ON DELETE CASCADE ON UPDATE CASCADE;