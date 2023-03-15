-- Active: 1678421011464@@127.0.0.1@3306@b1
create database candidatos;
use candidatos;
create table candidato(
	id_candidato int auto_increment not null primary key,
    nome varchar(90),
    habilidades varchar(200));
delete from candidatos where (hilda)