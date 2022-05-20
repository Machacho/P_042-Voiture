Drop Database if Exists db_voiture;
Create database if not exists db_voiture DEFAULT character set utf8 Collate utf8_general_ci;
use db_voiture;

create table t_marque (
     idMarque int(11) NOT NULL AUTO_INCREMENT,
     marName varchar(60) NOT NULL,
     PRIMARY KEY (idMarque)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table t_user (
     idUser int(11) NOT NULL AUTO_INCREMENT,
     useLogin varchar(50) NOT NULL,
     usePassword varchar(255) NOT NULL,
     PRIMARY KEY (idUser)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table t_voiture (
     idVoiture int(11) NOT NULL AUTO_INCREMENT,
     voiMarque varchar(60) NOT NULL,
     voiModel varchar(60) NOT NULL,
     voiMillesime year NOT NULL,
     voiDepartArrete varchar(60) NOT NULL,
     voiPrix int(11) NOT NULL,
     voiPuissance int(11) NOT NULL,
     voiImg text NOT NULL,
     voiEvaluation int(11) NOT NULL,
     fkMarque int(11) NOT NULL,
     PRIMARY KEY (idVoiture),
     FOREIGN KEY (fkMarque) REFERENCES t_marque(idMarque)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
GRANT SELECT, INSERT, UPDATE, DELETE ON `db_voiture`.* TO 'root'@'localhost';

/* Création de toute les marque de voitures possible */
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'ALFA ROMEO');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'ALPINE');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'ASTON MARTIN');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'AUDI');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'BENTLEY');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'BMW');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'BUGATTI');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'DODGE');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'FERRARI');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'FORD');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'HONDA');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'KOEINIGSEGG');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'LAMBORGHINI');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'MASERATI');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'McLAREN');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'MERCEDES');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'NISSAN');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'PORSCHE');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'TOYOTA');
INSERT INTO t_marque(idMarque,marName) VALUES (NULL,'WOLKSVAGEN');

/* Création de voiture */
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'FORD','GT',2017,3.2,'1000000',660,'fordgt.jpg',0 ,10);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'AUDI','RS7',2022,3.6,'154550',600,'rs7.jpg',0 ,4);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'DODGE','Challenger SRT HELLCAT',2022,3.7,'86900',727,'challengerhellcat.jpg',0 ,8);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'BMW','M440i',2022,4.7,'85700',374,'m440i.jpg',0 ,6);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'LAMBORGHINI','Huracan Spyder',2022,3.5,'214391',610,'huracanevo.jpg',0 ,13);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'MASERATI','MC20',2022,2.9,'2500',630,'mc20.jpg',0 ,14);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'NISSAN','GTR',2016,2.9,'96000',550,'gtr35.jpg',0 ,17);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'FORD','Mustang GT',2022,5.2,'64300',450,'mustanggt.jpg',0 ,10);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'BMW','M5',2022,3,'112700',530,'m5.jpg',0 ,6);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'PORSCHE','911 Spyder',2013,2.6,'800000',608,'911spyder.jpg',0 ,18);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'TOYOTA','Supra',1994,5.6,'37000',330,'supra.jpg',0 ,19);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'ASTON MARTIN','One 77',2011,3.2,'150000',760,'one77.jpg',0 ,3);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'BUGATTI','Chiron',2019,2.4,'4000000',1500,'chiron.jpg',0 ,7);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'McLAREN','Senna',2019,2.8,'1250000',800,'senna.jpg',0 ,15);
INSERT INTO t_voiture(idVoiture,voiMarque,voiModel,voiMillesime,voiDepartArrete,voiPrix,voiPuissance,voiImg,voiEvaluation,fkMarque) VALUES (NULL,'AUDI','Q3',2020,9.2,'44000',150,'q3.jpg',0 ,4);