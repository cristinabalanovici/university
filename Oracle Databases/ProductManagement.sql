DROP TABLE angajati;
DROP TABLE TVA;
DROP TABLE istoric_preturi;
DROP TABLE continut_factura;
DROP TABLE facturi;
DROP TABLE clienti;
DROP TABLE produse;
DROP TABLE magazine;
DROP TABLE furnizori;

CREATE TABLE furnizori (
    cod_fisc NUMBER(6) PRIMARY KEY, 
    denumire VARCHAR2(25) NOT NULL, 
    email VARCHAR2(30) UNIQUE NOT NULL, 
    tel NUMBER(10) UNIQUE NOT NULL);
    
CREATE TABLE magazine (
    id VARCHAR2(4) PRIMARY KEY, 
    strada VARCHAR2(20) NOT NULL, 
    nr NUMBER(3) NOT NULL, 
    cod_post NUMBER(6) NOT NULL);
    
CREATE TABLE produse (
    cod NUMBER(5) UNIQUE, 
    denumire VARCHAR2(50) NOT NULL, 
    descriere VARCHAR2(240) NOT NULL, 
    um VARCHAR2(5) NOT NULL, 
    stoc NUMBER(4) NOT NULL, 
    tip VARCHAR2(20) NOT NULL, 
    gramaj NUMBER(4), 
    cod_frn REFERENCES furnizori(cod_fisc), 
    id_mag REFERENCES magazine(id));

ALTER TABLE produse ADD CONSTRAINT pk_cod_codfrn_idmag PRIMARY KEY(cod, cod_frn, id_mag);

CREATE TABLE angajati (
    id VARCHAR2(4) UNIQUE, 
    nume VARCHAR2(15) NOT NULL, 
    prenume VARCHAR2(15) NOT NULL, 
    salar NUMBER(5) NOT NULL, 
    data_nast DATE NOT NULL, 
    data_ang DATE NOT NULL,
    id_mag REFERENCES magazine(id));
    
ALTER TABLE angajati ADD CONSTRAINT pk_id_idmag PRIMARY KEY(id, id_mag);

CREATE TABLE clienti (
    id VARCHAR2(5) PRIMARY KEY, 
    nume VARCHAR2(15) NOT NULL, 
    prenume VARCHAR2(15) NOT NULL, 
    email VARCHAR2(35) UNIQUE NOT NULL, 
    data_nast DATE NOT NULL);
    
CREATE TABLE facturi (
    numar NUMBER(4) UNIQUE, 
    cost NUMBER(6,2) NOT NULL, 
    data DATE NOT NULL,
    id_cl REFERENCES clienti(id));
    
ALTER TABLE facturi ADD CONSTRAINT pk_nr_idcl PRIMARY KEY(numar, id_cl);

CREATE TABLE continut_factura (
    cant NUMBER(3) NOT NULL,
    cod_pds REFERENCES produse(cod),
    nr_fact REFERENCES facturi(numar));

ALTER TABLE continut_factura ADD CONSTRAINT pk_codpds_nrfact PRIMARY KEY(cod_pds, nr_fact);

CREATE TABLE istoric_preturi (
    prod_TVA VARCHAR2(8) UNIQUE,
    PU NUMBER(5,2) NOT NULL, 
    cod_pds REFERENCES produse(cod));
    
ALTER TABLE istoric_preturi ADD CONSTRAINT pk_codpds PRIMARY KEY(cod_pds);

CREATE TABLE TVA(
    data_start DATE UNIQUE, 
    data_final DATE, 
    cota NUMBER(2) NOT NULL,
    prod_TVA_ipt REFERENCES istoric_preturi(prod_TVA));
    


ALTER TABLE TVA ADD CONSTRAINT pk_prod_TVA_ipt PRIMARY KEY(prod_TVA_ipt);

ALTER TABLE produse ADD CONSTRAINT check_stoc CHECK(stoc>=0 AND stoc<=9999);
ALTER TABLE produse ADD CONSTRAINT check_gramaj CHECK(gramaj>=1 AND gramaj<=1000);
ALTER TABLE angajati ADD CONSTRAINT check_data_nast CHECK(data_ang>data_nast);
ALTER TABLE angajati ADD CONSTRAINT check_data_ang CHECK (data_ang>=TO_DATE('01-JAN-1990'));
ALTER TABLE facturi ADD CONSTRAINT check_data_fact CHECK (data>=TO_DATE('01-JAN-1990'));
ALTER TABLE facturi ADD CONSTRAINT check_fact CHECK(cost>0);
ALTER TABLE istoric_preturi ADD CONSTRAINT check_pu CHECK(PU>0);
ALTER TABLE TVA ADD CONSTRAINT check_tva CHECK(cota>0 AND cota<100);
ALTER TABLE furnizori ADD CONSTRAINT check_mail_furn CHECK (REGEXP_LIKE(email, '.+@.+\..+'));
ALTER TABLE clienti ADD CONSTRAINT check_mail_cl CHECK (REGEXP_LIKE(email, '.+@.+\..+'));

ALTER TABLE magazine ADD CONSTRAINT check_mag_id CHECK (REGEXP_LIKE(id, 'Mg[0-9][0-9]'));
ALTER TABLE angajati ADD CONSTRAINT check_ant_id CHECK (REGEXP_LIKE(id, 'A[1-9][0-9][0-9]'));
ALTER TABLE clienti ADD CONSTRAINT check_cet_id CHECK (REGEXP_LIKE(id, 'C[1-9][0-9][0-9]'));

INSERT INTO furnizori VALUES(111111, 'Royal SA', 'contact@royalsa.com', 0264222777);
INSERT INTO furnizori VALUES(222222, 'Alfa SA', 'contact@alfasa.com', 0724000222);
INSERT INTO furnizori VALUES(333333, 'Currat SRL', 'contact@curatsrl.com', 0264444888);
INSERT INTO furnizori VALUES(444444, 'Electronica SRL', 'contact@electronicasrl.com', 0761773300);
INSERT INTO furnizori VALUES(555555, 'Biovita SRL', 'contact@biovitasrl.com', 0264555333);
INSERT INTO furnizori VALUES(666666, 'Gourmet SA', 'contact@gourmetsa.com', 0264555332);
INSERT INTO furnizori VALUES(777777, 'AutoM SRL', 'contact@automsrl.com', 0264444777);
INSERT INTO furnizori VALUES(888888, 'Anima SA', 'contact@animasa.com', 0421242231);

INSERT INTO magazine VALUES ('Mg01', 'Iazului', 12, 400004);
INSERT INTO magazine VALUES ('Mg02', 'Paris', 123, 400012);
INSERT INTO magazine VALUES ('Mg03', 'Arges', 105, 401240);
INSERT INTO magazine VALUES ('Mg04', 'Saturn', 19, 401234);
INSERT INTO magazine VALUES ('Mg05', 'Padurii', 89, 420456);
INSERT INTO magazine VALUES ('Mg06', 'Rapsodiei', 18, 405123);

CREATE SEQUENCE cp_seq 
    INCREMENT BY 1
    START WITH 10001
    MAXVALUE 99999
    NOCACHE
    NOCYCLE;
    
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Detergent de vase', 'Detergent de spalat vase, curatare puternica in care poti avea incredere', 'ml', 190, 'curatenie', 450, 333333, 'Mg01');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Bagheta frantuzeasca', 'Bagheta frantuzeasca cu maia', 'g', 90, 'aliment', 300, 111111, 'Mg06');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Sapun lichid', 'sapunul beneficiaza de o concentratie ridicata de glicerina', 'ml', 48, 'igiena', 500, 222222, 'Mg03');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Mouse wireless', 'Acest mouse este compatibil cu Windows, Mac', 'buc', 20, 'electrocasnic', NULL, 444444, 'Mg01');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Grebla 27 cm', 'Grebla cu maner din lemn cu dimensiunile 27 x 8.8 cm', 'buc', 75, 'gradina', NULL, 555555, 'Mg01');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Apa plata', 'Apa minerala naturala necarbogazoasa (plata)', 'l', 1000, 'aliment', 2, 111111, 'Mg02');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Ghimbir eco', 'Ghimbir ecologic, pentru diverse preparate culinare', 'g', 80, 'aliment', 250, 111111, 'Mg02');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Cereale caini', 'Hrana pentru cainii plini de energie', 'kg', 559, 'animale', 10, 888888, 'Mg06');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Boxa Mini, negru', 'Are asistentul Google incorporat', 'buc', 15, 'electrocasnic', NULL, 444444, 'Mg05');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Bol din opal alb 12 cm', 'Bol rezistent la socurile termice', 'buc', 390, 'casa', NULL, 666666, 'Mg04');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Rodii Piramida', 'Rodii Seminte', 'g', 2500, 'aliment', 350, 111111, 'Mg04');
INSERT INTO produse VALUES (cp_seq.NEXTVAL, 'Ulei de motor', 'Imbunatatit cu Titanium Fst', 'l', 480, 'auto', 1, 777777, 'Mg06');

DROP SEQUENCE cp_seq;

INSERT INTO angajati VALUES ('A101', 'Popescu', 'Gabriel', 4800, TO_DATE('19-01-1973', 'dd-mm-yyyy'), TO_DATE('19-04-2000', 'dd-mm-yyyy'), 'Mg01');
INSERT INTO angajati VALUES ('A102', 'Marin', 'Adina', 4600, TO_DATE('23-07-1981', 'dd-mm-yyyy'), TO_DATE('04-06-2000', 'dd-mm-yyyy'), 'Mg03');
INSERT INTO angajati VALUES ('A103', 'Dinu', 'Magdalena', 3400, TO_DATE('06-10-1995', 'dd-mm-yyyy'), TO_DATE('30-04-2016', 'dd-mm-yyyy'), 'Mg01');
INSERT INTO angajati VALUES ('A104', 'Stoica', 'Diana', 5000, TO_DATE('17-05-1979', 'dd-mm-yyyy'), TO_DATE('21-02-2000', 'dd-mm-yyyy'), 'Mg06');
INSERT INTO angajati VALUES ('A105', 'Cristea', 'Felix', 2000, TO_DATE('29-03-1996', 'dd-mm-yyyy'), TO_DATE('03-12-2020', 'dd-mm-yyyy'), 'Mg05');
INSERT INTO angajati VALUES ('A106', 'Toma', 'Maria', 3500, TO_DATE('20-11-1987', 'dd-mm-yyyy'), TO_DATE('04-03-2008', 'dd-mm-yyyy'), 'Mg02');
INSERT INTO angajati VALUES ('A107', 'Sava', 'Claudiu', 1700, TO_DATE('10-08-1999', 'dd-mm-yyyy'), TO_DATE('18-06-2020', 'dd-mm-yyyy'), 'Mg04');
INSERT INTO angajati VALUES ('A108', 'Rusu', 'Ana', 3900, TO_DATE('04-04-1988', 'dd-mm-yyyy'), TO_DATE('17-04-2009', 'dd-mm-yyyy'), 'Mg03');
INSERT INTO angajati VALUES ('A109', 'Ifrim', 'Vlad', 4200, TO_DATE('14-10-1980', 'dd-mm-yyyy'), TO_DATE('05-10-2000', 'dd-mm-yyyy'), 'Mg02');

INSERT INTO clienti VALUES ('C1001', 'Oprea', 'Sorin', 'oprea.sorin@gmail.com', TO_DATE('05-08-1993', 'dd-mm-yyyy'));
INSERT INTO clienti VALUES ('C1002', 'Dima', 'Magda', 'dima.magda@gmail.com', TO_DATE('18-02-1997', 'dd-mm-yyyy'));
INSERT INTO clienti VALUES ('C1003', 'Popa', 'Alexandra', 'popa.alexandra@gmail.com', TO_DATE('04-11-1992', 'dd-mm-yyyy'));
INSERT INTO clienti VALUES ('C1004', 'Ionescu', 'Alin', 'ionescu.alin@gmail.com', TO_DATE('05-12-2001', 'dd-mm-yyyy'));
INSERT INTO clienti VALUES ('C1005', 'Ifrim', 'Carina', 'ifrim.carina@gmail.com', TO_DATE('29-01-1999', 'dd-mm-yyyy'));
INSERT INTO clienti VALUES ('C1006', 'Ciobanu', 'Sebastian', 'ciobanu.sebastian@gmail.com', TO_DATE('30-05-2002', 'dd-mm-yyyy'));
INSERT INTO clienti VALUES ('C1007', 'Munteanu', 'Andrei', 'munteanu.andrei@gmail.com', TO_DATE('25-02-1992', 'dd-mm-yyyy'));
INSERT INTO clienti VALUES ('C1008', 'Anghel', 'Nicolae', 'anghel.nicolae@gmail.com', TO_DATE('04-07-1993', 'dd-mm-yyyy'));
INSERT INTO clienti VALUES ('C1009', 'Bordea', 'Paulina', 'bordea.paulina@gmail.com', TO_DATE('06-12-2002', 'dd-mm-yyyy'));

INSERT INTO facturi VALUES (1000, 754.99, TO_DATE('09-11-2012', 'dd-mm-yyyy'), 'C1009');
INSERT INTO facturi VALUES (2000, 4214.99, TO_DATE('17-05-2013', 'dd-mm-yyyy'), 'C1001');
INSERT INTO facturi VALUES (3000, 421.99, TO_DATE('29-12-2012', 'dd-mm-yyyy'), 'C1003');
INSERT INTO facturi VALUES (4000, 159.99, TO_DATE('04-04-2012', 'dd-mm-yyyy'), 'C1006');
INSERT INTO facturi VALUES (5000, 1239.99, TO_DATE('06-05-2012', 'dd-mm-yyyy'), 'C1008');
INSERT INTO facturi VALUES (6000, 532.99, TO_DATE('28-09-2012', 'dd-mm-yyyy'), 'C1001');

INSERT INTO continut_factura VALUES (10, 10002, 1000);
INSERT INTO continut_factura VALUES (2, 10012, 1000);
INSERT INTO continut_factura VALUES (1, 10004, 3000);
INSERT INTO continut_factura VALUES (12, 10006, 4000);
INSERT INTO continut_factura VALUES (3, 10007, 2000);
INSERT INTO continut_factura VALUES (1, 10009, 6000);
INSERT INTO continut_factura VALUES (25, 10011, 2000);

INSERT INTO istoric_preturi VALUES('P1000399', 6.49, 10003);
INSERT INTO istoric_preturi VALUES('P1000500', 4.99, 10005);
INSERT INTO istoric_preturi VALUES('P1001200', 51.29, 10012);
INSERT INTO istoric_preturi VALUES('P1001001', 2.89, 10010);
INSERT INTO istoric_preturi VALUES('P1000710', 4.99, 10007);
INSERT INTO istoric_preturi VALUES('P1000900', 182.99, 10009);
INSERT INTO istoric_preturi VALUES('P1000801', 72.79, 10008);
INSERT INTO istoric_preturi VALUES('P1000902', 187.99, 10002);

INSERT INTO TVA VALUES (TO_DATE('09-12-1999', 'dd-mm-yyyy'), TO_DATE('09-12-2000', 'dd-mm-yyyy'), 5, 'P1000399');
INSERT INTO TVA VALUES (TO_DATE('10-12-2000', 'dd-mm-yyyy'), TO_DATE('04-11-2000', 'dd-mm-yyyy'), 7, 'P1000500');
INSERT INTO TVA VALUES (TO_DATE('05-11-2000', 'dd-mm-yyyy'), TO_DATE('06-07-2001', 'dd-mm-yyyy'), 9, 'P1001200');
INSERT INTO TVA VALUES (TO_DATE('07-07-2001', 'dd-mm-yyyy'), TO_DATE('03-01-2002', 'dd-mm-yyyy'), 12, 'P1001001');
INSERT INTO TVA VALUES (TO_DATE('04-01-2002', 'dd-mm-yyyy'), TO_DATE('12-10-2010', 'dd-mm-yyyy'), 15, 'P1000902');
INSERT INTO TVA VALUES (TO_DATE('12-10-2002', 'dd-mm-yyyy'), '', 19, 'P1000710');

ALTER TABLE clienti ADD(tel_cl NUMBER(10) UNIQUE);
ALTER TABLE facturi ADD (mod_plata VARCHAR2(2));
UPDATE facturi SET mod_plata='MP' WHERE mod_plata IS NULL;
ALTER TABLE facturi MODIFY (mod_plata NOT NULL);
ALTER TABLE produse MODIFY (descriere NULL);
ALTER TABLE facturi DROP COLUMN cost;

UPDATE clienti SET tel_cl=0753111222 WHERE id='C1001';
UPDATE clienti SET tel_cl=0231402404 WHERE id='C1002';
UPDATE clienti SET tel_cl=0231402104 WHERE id='C1003';
UPDATE clienti SET tel_cl=0231402504 WHERE id='C1006';
UPDATE clienti SET tel_cl=0231402604 WHERE id='C1007';
UPDATE clienti SET tel_cl=0231402804 WHERE id='C1008';

UPDATE facturi SET mod_plata='C' WHERE numar=1000;
UPDATE facturi SET mod_plata='TB' WHERE numar=2000;
UPDATE facturi SET mod_plata='TB' WHERE numar=3000;
UPDATE facturi SET mod_plata='C' WHERE numar=4000;
UPDATE facturi SET mod_plata='TB' WHERE numar=5000;
UPDATE facturi SET mod_plata='TB' WHERE numar=6000;

DROP VIEW Angajat_Magazin;
DROP VIEW Furnizori_Produse;
DROP VIEW Cumparaturi_Client;

CREATE VIEW Angajat_Magazin AS SELECT a.nume , a.prenume, m.id AS ID_Magazin
FROM angajati a, magazine m
WHERE a.id_mag=m.id;

CREATE VIEW Furnizori_Produse AS SELECT f.denumire AS FURNIZOR, p.denumire AS PRODUS 
FROM furnizori f, produse p
WHERE p.cod_frn=f.cod_fisc;

CREATE VIEW Cumparaturi_Client AS SELECT c.nume, c.prenume, f.numar, SUM(cf.cant) AS total
FROM clienti c, facturi f, continut_factura cf
WHERE (cf.nr_fact=f.numar) AND (f.id_cl=c.id)
GROUP BY c.nume, c.prenume, f.numar
ORDER BY SUM(cf.cant) DESC;

