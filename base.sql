create database Projet_ecriture;

create table Idee(
    id INTEGER NOT NULL AUTO_INCREMENT,
    categorie VARCHAR(100),
    description VARCHAR(800),
    nb_perso INTEGER,
    date_idee DATE,
    PRIMARY KEY (id)
);

create table Histoire(
     id_idee INTEGER NOT NULL AUTO_INCREMENT,
     titre_histoire VARCHAR(60),
     date_fin_ecriture DATE,
     resume VARCHAR(8000),
     vote INTEGER,
     PRIMARY KEY (id_idee),
     FOREIGN KEY (id_idee) REFERENCES Idee(id) 
);

create table Corriger(
    id_idee INTEGER NOT NULL AUTO_INCREMENT,
    reponse VARCHAR(3),
    PRIMARY KEY (id_idee),
    FOREIGN KEY (id_idee) REFERENCES Idee(id) 
);

create table User(
    email VARCHAR(800) unique NOT NULL,
    mdp VARCHAR(800) unique NOT NULL
)

CREATE USER Phuong IDENTIFIED BY "Ph@ntomhive";
GRANT ALL PRIVILEGES ON *.* TO 'Phuong'; 

CREATE USER Visiteur IDENTIFIED BY "*O*visiteur";
GRANT Select ON Projet_ecriture.Idee TO Visiteur;
GRANT Select ON Projet_ecriture.Histoire TO Visiteur;

CREATE USER Auteur IDENTIFIED BY " @uteur96";
GRANT  insert, update, delete ON Projet_ecriture.Idee TO Auteur;
GRANT  insert, update, delete ON Projet_ecriture.Histoire TO Auteur;
GRANT update ON Projet_ecriture.User TO Auteur;