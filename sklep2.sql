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
    `id_produkt` INT NOT NULL,
    `id_pracownik` INT NOT NULL,
    `wartosc` decimal not null,
    `status` varchar(64) not null,
    `id_kolor` INT NOT NULL,
    `id_producent` INT NOT NULL,
    `id_kategoria` INT NOT NULL,
    PRIMARY KEY (`id_zamowienie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `uzytkownik`;
CREATE TABLE `uzytkownik` (
	`id_uzytkownik` INT NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(48) NOT NULL,
    `haslo` VARCHAR(300) NOT NULL,
    `imie` VARCHAR(48) NOT NULL,
    `nazwisko` VARCHAR(48) NOT NULL,
    `miejscowosc` VARCHAR(48) NOT NULL,
    `ulica` VARCHAR(48) NOT NULL,
    `numer_domu` VARCHAR(6) NOT NULL,
    `nr_telefonu` VARCHAR(12) NOT NULL,
    `czy_admin` boolean,
    `email` varchar(128),
    `id_koszyk` INT DEFAULT NULL,
    `id_pracownik` INT DEFAULT NULL,
    PRIMARY KEY (`id_uzytkownik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `koszyk`;
CREATE TABLE `koszyk` (
	`id_koszyk` INT NOT NULL AUTO_INCREMENT,
    `id_zamowienie` INT DEFAULT NULL,
    `id_uzytkownik` INT DEFAULT NULL,
    `rabat` int default null,
    PRIMARY KEY (`id_koszyk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `kolory`;
Create table `kolory`(
`id_kolor` int not null auto_increment,
`kolor` text,
primary key (`id_kolor`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `kategorie`;
Create table `kategorie`(
`id_kategoria` int not null auto_increment,
`nazwa` text,
primary key (`id_kategoria`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `peryferia`;
Create table `peryferia`(
`id_peryferia` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`id_kolor` int not null,
`id_producent` int not null,
 `cena` decimal default null,
 `ilosc` int default null,
 `opis` text,
primary key (`id_peryferia`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `producenci`;
Create table `peryferia`(
`id_producent` int not null auto_increment,
`producent` text,
`email` varchar(128),
`telefon` varchar(12),
`miejscowosc` text,
 `ulica`varchar(128),
 `numer` varchar(16),
primary key (`id_producenta`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `telefony`;
Create table `telefony`(
`id_telefonu` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`id_kolor` int not null,
`id_producent` int not null,
 `cena` decimal default null,
 `ilosc` int default null,
 `opis` text,
primary key (`id_telefonu`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `komputery`;
Create table `komputery`(
`id_komputer` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`id_cpu` int not null,
`id_gpu` int not null,
`id_ram` int not null,
`id_mobo` int not null,
`id_zasilacz` int not null,
`id_dysk` int not null,
`id_obudowa` int not null,
 `cena` decimal default null,
 `ilosc` int default null,
 `opis` text,
 `dodatki` text,
primary key (`id_komputer`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `ram`;
Create table `ram`(
`id_ram` int not null auto_increment,
`id_kategoria` int not null,
`id_producent` int not null,
 `cena` decimal default null,
 `pojemnosc` int default null,
 `moduły` text,
 `typ` varchar(128),
 `zdjecie`VarBinary(500000000),
 `ilosc` int default null,
primary key (`id_ram`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `dysk`;
Create table `dysk`(
`id_dysk` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`id_producent` int not null,
 `cena` decimal default null,
 `opis` text,
  `typ` varchar(128),
   `pojemnosc` int default null,
   `interfejs` varchar(64),
   `format` varchar(64),
   `zdjecie`VarBinary(500000000),
   `ilosc` int default null,
primary key (`id_dysk`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `gpu`;
Create table `telefony`(
`id_gpu` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`id_kolor` int not null,
`id_producent` int not null,
 `cena` decimal default null,
 `seria` varchar(64),
 `model` varchar(64),
 `zdjecie`VarBinary(500000000),
 `ilosc` int default null,
primary key (`id_gpu`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `obudowa`;
Create table `obudowa`(
`id_tobudowa` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`id_kolor` int not null,
`id_producent` int not null,
 `cena` decimal default null,
 `rozmiar` varchar(16),
 `opis` text,
 `zdjecie`VarBinary(500000000),
 `ilosc` int default null,
primary key (`id_obudowa`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `cpu`;
Create table `cpu`(
`id_cpu` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`taktowanie` varchar(32),
`id_producent` int not null,
 `cena` decimal default null,
 `rdzenie` varchar(64),
 `opis` text,
 `zdjecie`VarBinary(500000000),
 `ilosc` int default null,
primary key (`id_cpu`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `mobo`;
Create table `mobo`(
`id_mobo` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`id_kolor` int not null,
`id_producent` int not null,
 `cena` decimal default null,
 `ilosc` int default null,
 `opis` text,
 `rozmiar` varchar(16),
 `kompatybilnosc` varchar(128),
 `chipset` varchar(64),
 `zdjecie`VarBinary(500000000),
primary key (`id_mobo`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists `zasilacz`;
Create table `zasilacz`(
`id_zasilacz` int not null auto_increment,
`id_kategoria` int not null,
`nazwa` text,
`id_kolor` int not null,
`id_producent` int not null,
 `cena` decimal default null,
 `moc` varchar(64),
 `opis` text,
 `wydajnosc` varchar(64),
 `zdjecie`VarBinary(500000000),
 `ilosc` int default null,
primary key (`id_zasilacz`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



Alter table zasilacz add unique index (`id_zasilacz`);
Alter table mobo add unique index (`id_mobo`);
Alter table cpu add unique index (`id_cpu`);
Alter table obudowa add unique index (`id_obudowa`);
Alter table gpu add unique index (`id_gpu`);
Alter table dysk add unique index (`id_dysk`);
Alter table ram add unique index (`id_ram`);
Alter table komputery add unique index (`id_komputera`);
ALTER TABLE producenci ADD UNIQUE INDEX (`id_producent`);
ALTER TABLE telefony ADD UNIQUE INDEX (`id_telefonu`);
ALTER TABLE peryferia ADD UNIQUE INDEX (`id_peryferia`);
ALTER TABLE kolory ADD UNIQUE INDEX (`id_kolor`);
ALTER TABLE kategoria ADD UNIQUE INDEX (`id_kategoria`);
ALTER TABLE pracownik ADD UNIQUE INDEX (`id_pracownik`);
ALTER TABLE produkt ADD UNIQUE INDEX (`id_produkt`);
ALTER TABLE zamowienie ADD UNIQUE INDEX (`id_zamowienie`);
ALTER TABLE uzytkownik ADD UNIQUE INDEX (`id_pracownik`);
ALTER TABLE koszyk ADD UNIQUE INDEX (`id_koszyk`);



ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_producent`) REFERENCES `producenci`(`id_producent`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_kolor`) REFERENCES `kolory`(`id_kolor`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategorie`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_produkt`) REFERENCES `produkt`(`id_produkt`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zamowienie ADD CONSTRAINT FOREIGN KEY (`id_pracownik`) REFERENCES `pracownik`(`id_pracownik`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE uzytkownik ADD CONSTRAINT FOREIGN KEY (`id_koszyk`) REFERENCES `koszyk`(`id_koszyk`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE koszyk ADD CONSTRAINT FOREIGN KEY (`id_zamowienie`) REFERENCES `zamowienie`(`id_zamowienie`) ON DELETE CASCADE ON UPDATE CASCADE; 

ALTER TABLE komputery ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE komputery ADD CONSTRAINT FOREIGN KEY (`id_cpu`) REFERENCES `cpu`(`id_cpu`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE komputery ADD CONSTRAINT FOREIGN KEY (`id_gpu`) REFERENCES `gpu`(`id_gpu`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE komputery ADD CONSTRAINT FOREIGN KEY (`id_ram`) REFERENCES `ram`(`id_ram`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE komputery ADD CONSTRAINT FOREIGN KEY (`id_mobo`) REFERENCES `mobo`(`id_mobo`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE komputery ADD CONSTRAINT FOREIGN KEY (`id_zasilacz`) REFERENCES `zasilacz`(`id_zasilacz`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE komputery ADD CONSTRAINT FOREIGN KEY (`id_dysk`) REFERENCES `dysk`(`id_dysk`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE komputery ADD CONSTRAINT FOREIGN KEY (`id_obudowa`) REFERENCES `obudowa`(`id_obudowa`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE ram ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE ram ADD CONSTRAINT FOREIGN KEY (`id_producent`) REFERENCES `kategoria`(`id_producent`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE dysk ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE dysk ADD CONSTRAINT FOREIGN KEY (`id_producent`) REFERENCES `producent`(`id_producent`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE gpu ADD CONSTRAINT FOREIGN KEY (`id_kolor`) REFERENCES `kategoria`(`id_kolor`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE gpu ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE gpu ADD CONSTRAINT FOREIGN KEY (`id_producent`) REFERENCES `producent`(`id_producent`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE obudowa ADD CONSTRAINT FOREIGN KEY (`id_kolor`) REFERENCES `kolor`(`id_kolor`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE obudowa ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE obudowa ADD CONSTRAINT FOREIGN KEY (`id_producent`) REFERENCES `producent`(`id_producent`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE cpu ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE cpu ADD CONSTRAINT FOREIGN KEY (`id_producent`) REFERENCES `producent`(`id_producent`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE mobo ADD CONSTRAINT FOREIGN KEY (`id_kolor`) REFERENCES `kolor`(`id_kolor`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE mobo ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE mobo ADD CONSTRAINT FOREIGN KEY (`id_producent`) REFERENCES `producent`(`id_producent`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE zasilacz ADD CONSTRAINT FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria`(`id_kategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE zasilacz ADD CONSTRAINT FOREIGN KEY (`id_producent`) REFERENCES `producent`(`id_producent`) ON DELETE CASCADE ON UPDATE CASCADE;