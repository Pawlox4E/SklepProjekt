use sklep;
INSERT INTO `kolory` (`kolor`,`hex`) VALUES
('magenta','#FF00FF'),
('żółty','#FFFF00'),
('biały','#FFFFFF'),
('błękit','#0300FD'),
('brązowy','#964B00'),
('różowofioletowy','#FF0080'),
('cyjan','#00FFFF'),
('czarny','#000000'),
('czerwony','#FF0000'),
('fioletowy','#B803FF'),
('granatowy','#3F00FF'),
('niebieski','#0000FF'),
('zielony','#00FF00'),
('szary','#808080'),
('pomarańczowy ','#F23B1C');

INSERT INTO `kategorie` (`nazwa`) VALUES
('komputery'),
('laptopy'),
('myszki'),
('klawiatury'),
('słuchawki'),
('monitory'),
('telefony'),
('procesory'),
('karty graficzne'),
('ram'),
('dyski'),
('zasliacze'),
('obudowy'),
('płyty głowne'),
('dyski zewnetrzne'),
('drukarki'),
('mikrofony'),
('pendrive'),
('kontrolery'),
('podkładki'),
('głosniki');

INSERT INTO `producenci` (`producent`,`email`,`telefon`,`miejscowosc`,`ulica`,`numer`) VALUES
('ASRock','ASRock@producent.pl','987654321','Zagłebie producentów','Producenta','1'),
('Asus','Asus@producent.pl','987654322','Zagłebie producentów','Producenta','2'),
('Gigabyte','Gigabyte@producent.pl','987654323','Zagłebie producentów','Producenta','3'),
('MSI','MSI@producent.pl','987654324','Zagłebie producentów','Producenta','4'),
('NViDIA','NViDIA@producent.pl','987654325','Zagłebie producentów','Producenta','5'),
('AMD','AMD@producent.pl','987654326','Zagłebie producentów','Producenta','6'),
('Intel','Intel@producent.pl','987654327','Zagłebie producentów','Producenta','7'),
('CoolerMaster','CoolerMaster@producent.pl','987654328','Zagłebie producentów','Producenta','8'),
('Corsair','Corsair@producent.pl','987654329','Zagłebie producentów','Producenta','9'),
('Genesis','Genesis@producent.pl','987654320','Zagłebie producentów','Producenta','10'),
('Dell','Dell@producent.pl','987654311','Zagłebie producentów','Producenta','11'),
('HP','HP@producent.pl','987654312','Zagłebie producentów','Producenta','12'),
('Huawei','Huawei@producent.pl','987654313','Zagłebie producentów','Producenta','13'),
('logitech','logitech@producent.pl','987654314','Zagłebie producentów','Producenta','14'),
('Razer','Razer@producent.pl','987654315','Zagłebie producentów','Producenta','15'),
('SteelSeries','SteelSeries@producent.pl','987654316','Zagłebie producentów','Producenta','16'),
('Apple','Apple@producent.pl','987654317','Zagłebie producentów','Producenta','17'),
('Samsung','Samsung@producent.pl','987654318','Zagłebie producentów','Producenta','18'),
('Xiaomi','Xiaomi@producent.pl','987654319','Zagłebie producentów','Producenta','19'),
('Adata','Adata@producent.pl','987654330','Zagłebie producentów','Producenta','20'),
('Crucial','Crucial@producent.pl','987654331','Zagłebie producentów','Producenta','21'),
('Seagate','Seagate@producent.pl','987654332','Zagłebie producentów','Producenta','22'),
('be quiet!','bequiet@producent.pl','987654333','Zagłebie producentów','Producenta','23');

INSERT INTO `telefony` (`id_kategoria`,`id_producent`,`nazwa`,`id_kolor`,`cena`,`rozmiar_ekranu`,`rozdzielczosc_ekranu`,`pamiec_flash`,`pamiec_ram`,`ilosc`,`opis`,`zdjecie`) VALUES
('7','18','Galaxy S21 5G','14','3599','6.2 cale','2400 x 1080 piksele','128 GB','8192 MB','123','System operacyjny:Android 11 Aparat: 64 Mpix','asd'),
('7','18','Galaxy Z Flip 3 5G','8','4999','6.7 cale','2640 x 1200 piksele','256 GB','8192 MB','123','System operacyjny:Android 11 Aparat: 12 Mpix','asd'),
('7','18','Galaxy A52s 5G','8','1999','6.5 cale','2400 x 1080 piksele','128 GB','6144 MB','123','System operacyjny:Android 11 Aparat: 64 Mpix','asd'),
('7','18','Galaxy S21 Ultra 5G','3','5749','6.8 cale','3200 x 1440 piksele','128 GB','12288 MB','123','System operacyjny:Android 11 Aparat: 108 Mpix','asd'),
('7','17','iPhone 13','8','4199','6.1 cale','2532 x 1170 piksele','128 GB','4096 MB','123','System operacyjny:iOS 15 Aparat: 12 Mpix','asd'),
('7','17','iPhone SE','9','2099','4.7 cale','1334 x 750 piksele','64 GB','3072 MB','123','System operacyjny:iOS 13 Aparat: 12 Mpix','asd'),
('7','17','iPhone 12 mini','12','3049','5.4 cale','2340 x 1080 piksele','64 GB','4096 MB','123','System operacyjny:iOS 14 Aparat: 12 Mpix','asd'),
('7','19','Redmi 9C','14','649','6.5 cale','1600 x 720 piksele','64 GB','3072 MB','123','System operacyjny:MIUI 12 Aparat: 13 Mpix','asd'),
('7','19','Redmi Note 10 5G','14','1199','6.5 cale','2400 x 1080 piksele','128 GB','4096 MB','123','System operacyjny:MIUI 12 Aparat: 48 Mpix','asd'),
('7','19','Mi 11i','8','2999','6.7 cale','2400 x 1080 piksele','256 GB','8192 MB','123','System operacyjny:MIUI 12.5 Aparat: 108 Mpix','asd');

INSERT INTO `ram` (`id_kategoria`,`id_producent`,`nazwa`,`cena`,`pojemnosc`,`moduły`,`typ`,`taktowanie`,`zdjecie`,`opis`,`ilosc`) VALUES
('10','9','Vengeance RGB Pro SL','799','32 GB','2','DDR4','3600 MHz','asd','2x16GB 3600MHz DDR4 CL18 DIMM Ryzen','123'),
('10','9','Vengeance LPX','339','16 GB','2','DDR4','2400 MHz','asd','2x8GB 2400MHz DDR4 CL14 DIMM','123'),
('10','9','Vengeance LPX','229','8 GB','2','DDR4','2400 MHz','asd','2x4GB 2400MHz DDR4 CL14 1.2V DIMM','123'),
('10','21','Ballistix White','339','16 GB','2','DDR4','3000 MHz','asd','2x8GB 3000MHz DDR4 CL15 DIMM','123'),
('10','21','Ballistix Red','409','16 GB','2','DDR4','3600 MHz','asd','2x8GB 3600MHz DDR4 CL16 DIMM','123'),
('10','21','Ballistix Black RGB','1529','64 GB','2','DDR4','3200 MHz','asd','2x32GB 3200MHz DDR4 CL16 DIMM','123'),
('10','20','XPG SPECTRIX D41 RGB','679','32 GB','2','DDR4','3200 MHz','asd','2x16GB 3200MHz DDR4 CL16 DIMM','123'),
('10','20','XPG Gammix D10','179','8 GB','1','DDR4','3600 MHz','asd','1x8GB 3600MHz DDR4 CL18 DIMM','123'),
('10','20','XPG Lancer','729','16 GB','1','DDR5','5200 MHz','asd','1x16GB 5200MHz DDR5 CL38 DIMM','123'),
('10','20','XPG Spectrix D60G RGB','499','16 GB','2','DDR4','4133 MHz','asd','2x8GB 4133MHz DDR4 CL19 DIMM','123');

INSERT INTO `ram` (`id_kategoria`,`id_producent`,`nazwa`,`cena`,`pojemnosc`,`interfejs`,`typ`,`format`,`zdjecie`,`opis`,`ilosc`) VALUES
('11','18','870 Evo','319','500 GB','SATA III','SSD','2.5 cala','asd','Szybkość zapisu:530 MB/s Szybkość odczytu:560 MB/s','123'),
('11','18','970 Evo Plus','379','500 GB','M.2','SSD','M.2 2280','asd','Szybkość zapisu:3200 MB/s Szybkość odczytu:3500 MB/s','123'),
('11','18','870 Evo','2499','4000 GB','SATA III','SSD','2.5 cala','asd','Szybkość zapisu:530 MB/s Szybkość odczytu:560 MB/s','123'),
('11','21','MX500','519','1000 GB','SATA III','SSD','2.5 cala','asd','Szybkość zapisu:510 MB/s Szybkość odczytu:560 MB/s','123'),
('11','21','P5','379','500 GB','M.2','SSD','M.2 2280','asd','Szybkość zapisu:3000 MB/s Szybkość odczytu:3400 MB/s','123'),
('11','22','Barracuda','219','1000 GB','SATA III','HDD','2.5 cala','asd','Prędkość obrotowa 5400 obr./min. Maks. transfer zewnętrzny 140 MB/s','123'),
('11','22','IronWolf','1879','12000 GB','SATA III','SSD','3.5 cala','asd','Prędkość obrotowa 7200 obr./min. Maks. transfer zewnętrzny 210 MB/s','123'),
('11','22','Barracuda','449','4000 GB','SATA III','SSD','3.5 cala','asd','Prędkość obrotowa 7200 obr./min. Maks. transfer zewnętrzny 190 MB/s','123'),
('11','20','XPG Spectrix S40G','2599','4000 GB','M.2','SSD','M.2 2280','asd','Szybkość zapisu:3000 MB/s Szybkość odczytu:3500 MB/s','123');

INSERT INTO `gpu` (`id_kategoria`,`id_producent`,`nazwa`,`cena`,`seria`,`model`,`zdjecie`,`opis`,`ilosc`) VALUES
('9','5','Quadro RTX8000','33990','Quadro RTX','8000','asd','Wielkość pamięci:48 GB Szyna danych pamięci:384 bit','123'),
('9','2','GeForce RTX 3080 Ti ROG STRIX 12GB OC','12590','GeForce RTX','3080 Ti','asd','Wielkość pamięci:48 GB Szyna danych pamięci:384 bit','123'),
('9','2','Radeon RX 6700 XT ROG STRIX 12GB OC','6190','Radeon RX','6700 XT','asd','Wielkość pamięci:12 GB Szyna danych pamięci:192 bit','123'),
('9','2','GeForce GT 730 2GB DDR5','389','GeForce GT','730','asd','Wielkość pamięci:2 GB Szyna danych pamięci:64 bit','123'),
('9','4','GeForce RTX 3070 Ti GAMING X TRIO 8GB','6690','GeForce RTX','3070 Ti','asd','Wielkość pamięci:8 GB Szyna danych pamięci:256 bit','123'),
('9','4','GeForce RTX 3060 Ti GAMING X 8GB OC LHR','4849','GeForce RTX','3060 Ti','asd','Wielkość pamięci:8 GB Szyna danych pamięci:256 bit','123'),
('9','3','Radeon RX 6900 XT GAMING 16GB OC','8390','Radeon RX','6900 XT','asd','Wielkość pamięci:18 GB Szyna danych pamięci:256 bit','123'),
('9','3','GeForce RTX 3080 AORUS XTREME WATERFORCE WB 10G 2.0 LHR','8490','GeForce RTX','3080','asd','Wielkość pamięci:10 GB Szyna danych pamięci:320 bit','123'),
('9','3','GeForce RTX 3060 Ti AORUS ELITE 8GB 2.0 LHR','4799','GeForce RTX','3060 Ti','asd','Wielkość pamięci:8 GB Szyna danych pamięci:256 bit','123');

INSERT INTO `obudowa` (`id_kategoria`,`id_producent`,`nazwa`,`id_kolor`,`cena`,`rozmiar`,`zdjecie`,`opis`,`ilosc`) VALUES
('13','9','4000D Tempered Glass CC-9011198-WW','8','429','Midi Tower','asd','Szklany bok 2 wentylatory 120mm','123'),
('13','9','iCUE 4000X RGB Tempered Glass CC-9011204-WW','8','589','Midi Tower','asd','Szklany bok 3 wentylatory 120mm','123'),
('13','9','Crystal Series 680X Black CC-9011168-WW','8','1319','Midi Tower','asd','Szklany bok 4 wentylatory 120mm','123'),
('13','8','MasterBox NR200P','8','489','Mini Tower','asd','Okno w panelu bocznym 2 wentylatory 120mm','123'),
('13','8','Force 500','8','239','Midi Tower','asd','1 wentylatory 120mm','123'),
('13','8','MasterCase H500P','3','859','Midi Tower','asd','Szklany bok 1 wentylatory 120mm 2 wentylatory 200mm','123'),
('13','8','Cosmos C700P','14','1699','Full Tower','asd','Szklany bok 3 wentylatory 140mm','123'),
('13','23','Dark Base 900','15','819','Midi Tower','asd','Wyciszona 3 wentylatory 140mm','123'),
('13','23','Pure Base 600','15','519','Midi Tower','asd','Szklany bok 2 wentylatory 140mm','123');

INSERT INTO `cpu` (`id_kategoria`,`id_producent`,`nazwa`,`taktowanie`,`cena`,`rdzenie`,`zdjecie`,`opis`,`ilosc`) VALUES
('8','6','Ryzen 5 5600X','3700 MHz','1549','6','asd','Gniazdo AM4 Moc 65W Taktowanie turbo 4600 MHz','123'),
('8','6','Ryzen 9 5950X','3400 MHz','3799','16','asd','Gniazdo AM4 Moc 105W Taktowanie turbo 4900 MHz','123'),
('8','6','Ryzen 7 5700G','3800 MHz','1699','8','asd','Gniazdo AM4 Moc 65W Taktowanie turbo 4600 MHz','123'),
('8','6','Ryzen 5 5600G','3900 MHz','1349','6','asd','Gniazdo AM4 Moc 65W Taktowanie turbo 4400 MHz','123'),
('8','6','Ryzen Threadripper PRO 3995WX','2700 MHz','25990','64','asd','Gniazdo sWRX8 Moc 280W Taktowanie turbo 4200 MHz','123'),
('8','7','Core i5-12600K','3700 MHz','1499','10','asd','Gniazdo 1700 Moc 125W Taktowanie turbo 4900 MHz','123'),
('8','7','Core i7-12700K','3600 MHz','2149','12','asd','Gniazdo 1700 Moc 125W Taktowanie turbo 5000 MHz','123'),
('8','7','Core i9-12900K','3200 MHz','2999','16','asd','Gniazdo 1700 Moc 125W Taktowanie turbo 5200 MHz','123'),
('8','7','Core i9-12900KF','3200 MHz','3049','16','asd','Gniazdo 1700 Moc 125W Taktowanie turbo 5200 MHz','123');

INSERT INTO `mobo` (`id_kategoria`,`id_producent`,`nazwa`,`id_kolor`,`cena`,`rozmiar`,`kompatybilnosc`,`chipset`,`zdjecie`,`opis`,`ilosc`) VALUES
('14','2','TUF GAMING B550-PLUS','8','599','ATX','Socket AM4','AMD B550','asd','Obsługiwana pamięć:DDR4 Ilość gniazd pamięci:4 szt.','123'),
('14','2','ROG STRIX Z690-A GAMING WIFI D4','3','1929','ATX','Socket 1700','Intel Z690','asd','Obsługiwana pamięć:DDR4 Ilość gniazd pamięci:4 szt.','123'),
('14','2','ROG MAXIMUS Z690 HERO','8','2999','ATX','Socket 1700','Intel Z690','asd','Obsługiwana pamięć:DDR5 Ilość gniazd pamięci:4 szt.','123'),
('14','2','ROG STRIX B550-A GAMING','3','819','ATX','Socket AM4','AMD B550','asd','Obsługiwana pamięć:DDR4 Ilość gniazd pamięci:4 szt.','123'),
('14','2','PRIME X570-P','8','819','ATX','Socket AM4','AMD X570','asd','Obsługiwana pamięć:DDR4 Ilość gniazd pamięci:4 szt.','123'),
('14','3','B550 AORUS ELITE V2','8','579','ATX','Socket AM4','AMD B550','asd','Obsługiwana pamięć:DDR4 Ilość gniazd pamięci:4 szt.','123'),
('14','3','Z690 UD','8','909','ATX','Socket 1700','Intel Z690','asd','Obsługiwana pamięć:DDR5 Ilość gniazd pamięci:4 szt.','123'),
('14','3','X570 AORUS ELITE','8','949','ATX','Socket AM4','AMD X570','asd','Obsługiwana pamięć:DDR4 Ilość gniazd pamięci:4 szt.','123'),
('14','4','PRO Z690-A DDR4','8','959','ATX','Socket 1700','Intel Z690','asd','Obsługiwana pamięć:DDR4 Ilość gniazd pamięci:4 szt.','123');

INSERT INTO `zasilacz` (`id_kategoria`,`id_producent`,`nazwa`,`id_kolor`,`cena`,`moc`,`opis`,`wydajnosc`,`zdjecie`,`ilosc`) VALUES
('12','9','CV 550W CP-9020210-EU','8','239','550W','Nie modularny aktywne chłodzenie','80 Plus Bronze','asd','123'),
('12','9','Corsair CX750F CP-9020218-EU','8','439','750W','Modularny aktywne chłodzenie','80 Plus Bronze','asd','123'),
('12','8','MWE 550W V2 80+ Bronze','8','199','550W','Nie modularny aktywne chłodzenie','80 Plus Bronze','asd','123'),
('12','8','MWE Bronze 750W V2 80+ Bronze','8','599','1000W','Nie modularny aktywne chłodzenie','80 Plus Bronze','asd','123'),
('12','8','MWE 750W V2 80+ Gold','8','319','750W','Modularny aktywne chłodzenie','80 Plus Gold','asd','123'),
('12','8','MWE Bronze 650W V2 80+ Bronze','8','249','650W','Nie modularny aktywne chłodzenie','80 Plus Bronze','asd','123'),
('12','23','Pure Power 11 600W CM','8','399','600W','Modularny aktywne chłodzenie','80 Plus Gold','asd','123'),
('12','23','System Power 9 500W','8','599','500W','Nie modularny aktywne chłodzenie','80 Plus Bronze','asd','123'),
('12','23','Dark Power PRO 12 1500W','8','1899','1500W','Modularny aktywne chłodzenie','80 Plus Titanium','asd','123');