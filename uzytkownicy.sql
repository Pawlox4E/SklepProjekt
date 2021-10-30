USE sklep;
CREATE USER 'Administrator' IDENTIFIED BY 'PtakiLatajaKluczem112';
GRANT ALL PRIVILEGES ON sklep.* TO 'Administrator';
CREATE USER 'Uzytkownik' IDENTIFIED BY 'Haslo123';
GRANT SELECT ON sklep.* TO 'Uzytkownik';
flush privileges; 