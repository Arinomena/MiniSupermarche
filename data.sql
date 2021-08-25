create database supermarche;
use supermarche;

create table Produit(
	idProduit varchar(3) primary key,
	idCategorie varchar(3),
	nomProduit varchar(50),
	prixUnitaire decimal,
	pathImage varchar(200),
	foreign key (idCategorie) references Categorie(idCategorie)
);
create table Categorie(
	idCategorie varchar(3) primary key,
	nomCategorie varchar(50)
);

create table Caisse(
	idCaisse varchar(3) primary key
);
create table Achat(
	idCaisse varchar(3), 
	idProduit varchar(3),
	quantite int,
	dateAchat date,
	foreign key (idCaisse) references Caisse(idCaisse),
	foreign key (idProduit) references Produit(idProduit)
);
create table utilisateur(
	idUtilisateur varchar(3) primary key,
	nomUtilisateur varchar(20),
	mdp varchar(20)
);

create view allAchat as
	select a.idCaisse as caisse,p.nomProduit as produit , c.nomCategorie as categorie , a.quantite as quatite , p.prixUnitaire as prixUnitaire , a.dateAchat as date
		from Achat a join Produit p on a.idProduit=p.idProduit join Categorie c on p.idCategorie=c.idCategorie;
 
create view statCategorie as select categorie,sum(quatite),sum(quatite*prixUnitaire) from allAchat group by categorie;

create view statCaisse as select caisse,sum(quatite),sum(quatite*prixUnitaire) from allAchat group by caisse;
	
create view statProduit as select produit,sum(quatite*prixUnitaire) from allAchat group by produit;

insert into Categorie values('c1','Vetement et accessoire');
insert into Categorie values('c2','Boucherie');
insert into Categorie values('c3','Boisson');


insert into Produit values('p1','c1','Nike',150000);
insert into Produit values('p2','c2','Jambon',30000);
insert into Produit values('p3','c3','THB',5000);
insert into Produit values('p4','c1','Addidas',120000);
insert into Produit values('p5','c2','Fillet de Zebu',15000);
insert into Produit values('p6','c3','Pepsi',5500);
insert into Produit values('p7','c1','Vans classic',100000);
insert into Produit values('p8','c2','Saucisse fume',20000);
insert into Produit values('p9','c3','Coca Cola',4000);
insert into Produit values('p10','c1','Converse',20000);
insert into Produit values('p11','c2','Mortadelle au porc',12000);
insert into Produit values('p12','c3','Heinken',6000);
insert into Produit values('p13','c1','Mini jupe',10000);
insert into Produit values('p14','c2','Looks',20000);
insert into Produit values('p15','c3','Beaufort',6000);

insert into caisse values('c01');
insert into caisse values('c02');
insert into caisse values('c03');

insert into utilisateur values('u1','huhu','huhu');
insert into utilisateur values('u2','hehe','hehe');

insert into achat values('a1','p1',2,'2021-07-28');
insert into achat values('a2','p1',1,'2021-08-20');
insert into achat values('a3','p1',3,'2021-08-01');
insert into achat values('a4','p1',2,'2021-08-04');
insert into achat values('a5','p5',5,'2021-07-05');
insert into achat values('a6','p5',3,'2021-07-06');
insert into achat values('a7','p5',4,'2021-07-05');
insert into achat values('a8','p12',5,'2021-07-05');
insert into achat values('a9','p12',3,'2021-07-06');
insert into achat values('a10','p12',4,'2021-07-05');
