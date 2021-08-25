
create table Produit(
	idProduit varchar(3) primary key,
	idCategorie varchar(3),
	nomProduit varchar(50),
	prixUnitaire decimal,
	pathImage varchar(200)
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
	dateAchat date
);
create table utilisateur(
	idUtilisateur varchar(3) primary key,
	nomUtilisateur varchar(20),
	mdp varchar(20)
);
-- insert into caisse values(caisse,idproduit,quantite)

-- select Produit.designation as nomProduit, 
-- 	   Produit.prixUnitaire as prixUnitaire,
-- 	   Achat.quantite as quantite,
-- 	   (Produit.prixUnitaire*Achat.quantite) as montant
-- from Achat Join Produit on Achat.idProduit = Produit.idProduit where Achat.idCaisse = '1';
create view allAchat as
	select a.idCaisse as caisse,p.nomProduit as produit , c.nomCategorie as categorie , a.quantite as quatite , p.prixUnitaire as prixUnitaire , a.dateAchat as date
		from Achat a join Produit p on a.idProduit=p.idProduit join Categorie c on p.idCategorie=c.idCategorie;
 
create view statCategorie as select categorie,sum(quatite) as quantite,sum(quatite*prixUnitaire) as somme from allAchat group by categorie;

create view statCaisse as select caisse,sum(quatite) as quantite,sum(quatite*prixUnitaire) as somme from allAchat group by caisse;

create view statProduit as select produit,sum(quatite*prixUnitaire) as somme from allAchat group by produit;

create view produitDetail as select p.nomProduit as nomProduit,c.nomCategorie as nomCategorie,p.prixUnitaire as prixUnitaire,p.pathImage as pathImage
 from Produit p join Categorie c on p.idCategorie=c.idCategorie;

insert into Categorie values('c1','Vetement et accessoire');
insert into Categorie values('c2','Boucherie');
insert into Categorie values('c3','Boisson');

insert into Produit values('p1','c1','Nike',150000,'nike.jpg');
insert into Produit values('p2','c2','Jambon',30000,'jambon.jpg');
insert into Produit values('p3','c3','THB',5000,'thb.jpg');
insert into Produit values('p4','c1','Addidas',120000,'addidas.jpg');
insert into Produit values('p5','c2','Fillet de Zebu',15000,'fillet.jpg');
insert into Produit values('p6','c3','Pepsi',5500,'pepsi.jpg');
insert into Produit values('p7','c1','Vans classic',100000,'vans.jpg');
insert into Produit values('p8','c2','Saucisse fume',20000,'fume.jpg');
insert into Produit values('p9','c3','Coca Cola',4000,'cola.jpg');
insert into Produit values('p10','c1','Converse',20000,'converse.jpg');
insert into Produit values('p11','c2','Mortadelle au porc',12000,'mortadelle.jpg');
insert into Produit values('p12','c3','Heinken',6000,'heinken.jpg');
insert into Produit values('p13','c1','Mini jupe',10000,'jupe.jpg');
insert into Produit values('p14','c2','Looks',20000,'looks.jpg');
insert into Produit values('p15','c3','Beaufort',6000,'beaufort.jpg');

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