/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  17/04/2021 12:50:10                      */
/*==============================================================*/


alter table livres 
   drop foreign key FK_LIVRES_ASSOCIATI_AUTEURS;

alter table livres 
   drop foreign key FK_LIVRES_ASSOCIATI_TYPES;

alter table livres 
   drop foreign key FK_LIVRES_ASSOCIATI_ANNEES;

alter table livres 
   drop foreign key FK_LIVRES_ASSOCIATI_PAYS;

drop table if exists annees;

drop table if exists auteurs;


alter table livres 
   drop foreign key FK_LIVRES_ASSOCIATI_AUTEURS;

alter table livres 
   drop foreign key FK_LIVRES_ASSOCIATI_TYPES;

alter table livres 
   drop foreign key FK_LIVRES_ASSOCIATI_ANNEES;

alter table livres 
   drop foreign key FK_LIVRES_ASSOCIATI_PAYS;

drop table if exists livres;

drop table if exists pays;

drop table if exists types;

/*==============================================================*/
/* Table : annees                                               */
/*==============================================================*/
create table annees
(
   id_an                int not null  comment '',
   parution             varchar(254)  comment '',
   primary key (id_an)
);

/*==============================================================*/
/* Table : auteurs                                              */
/*==============================================================*/
create table auteurs
(
   id_aut               int not null  comment '',
   nom                  varchar(254)  comment '',
   prenom               varchar(254)  comment '',
   primary key (id_aut)
);

/*==============================================================*/
/* Table : livres                                               */
/*==============================================================*/
create table livres
(
   id                   int not null  comment '',
   id_aut               int not null  comment '',
   id_type              int not null  comment '',
   id_pays              int not null  comment '',
   id_an                int not null  comment '',
   titre                varchar(254)  comment '',
   primary key (id)
);

/*==============================================================*/
/* Table : pays                                                 */
/*==============================================================*/
create table pays
(
   id_pays              int not null  comment '',
   pays_livre           varchar(254)  comment '',
   primary key (id_pays)
);

/*==============================================================*/
/* Table : types                                                */
/*==============================================================*/
create table types
(
   id_type              int not null  comment '',
   type_livre           varchar(254)  comment '',
   primary key (id_type)
);

alter table livres add constraint FK_LIVRES_ASSOCIATI_AUTEURS foreign key (id_aut)
      references auteurs (id_aut) on delete restrict on update restrict;

alter table livres add constraint FK_LIVRES_ASSOCIATI_TYPES foreign key (id_type)
      references types (id_type) on delete restrict on update restrict;

alter table livres add constraint FK_LIVRES_ASSOCIATI_ANNEES foreign key (id_an)
      references annees (id_an) on delete restrict on update restrict;

alter table livres add constraint FK_LIVRES_ASSOCIATI_PAYS foreign key (id_pays)
      references pays (id_pays) on delete restrict on update restrict;

