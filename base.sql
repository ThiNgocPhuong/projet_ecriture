create database Histoire;

create table Idee(
    id VARCHAR(10) NOT NULL,
    description VARCHAR(8000),
    date_idee DATE,
    nb_perso INTEGER,
    nom_perso VARCHAR(8000)
);

create table Idee_Utiliser(
     id_idee VARCHAR(10) NOT NULL,
     titre_histoire VARCHAR(60),
     date_fin_ecriture DATE
);

create table Corriger(
    id_idee VARCHAR(10) NOT NULL,
    reponse VARCHAR(3)
);