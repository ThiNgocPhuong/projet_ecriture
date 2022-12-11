create database Histoire;

create table Idee(
    id INTEGER NOT NULL AUTO_INCREMENT,
    categorie VARCHAR(100),
    description VARCHAR(800),
    nb_perso INTEGER,
    date_idee DATE,
    PRIMARY KEY (id)
);

create table Idee_Utiliser(
     id_idee INTEGER NOT NULL AUTO_INCREMENT,
     titre_histoire VARCHAR(60),
     date_fin_ecriture DATE,
     resume VARCHAR(8000),
     PRIMARY KEY (id_idee),
     FOREIGN KEY (id_idee) REFERENCES Idee(id) 
);

create table Corriger(
    id_idee INTEGER NOT NULL AUTO_INCREMENT,
    reponse VARCHAR(3),
    PRIMARY KEY (id_idee),
    FOREIGN KEY (id_idee) REFERENCES Idee(id) 
);

CREATE USER Phuong IDENTIFIED BY "Ph@ntomhive";
GRANT ALL PRIVILEGES ON *.* TO 'Phuong'; 