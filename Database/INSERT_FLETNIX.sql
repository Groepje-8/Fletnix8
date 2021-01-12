USE FLETNIX

-- Pagina ID 1 = Index
-- Pagina ID 2 = Abonnementen
-- Pagina ID 3 = Accountinstellingen
-- Pagina ID 4 = FilmDetails
-- Pagina ID 5 = FilmOverzicht
-- Pagina ID 6 = mediaplayer
-- Pagina ID 7 = Header
-- Pagina ID 8 = Footer
-- Pagina ID 9 = ProfielPagina
-- Pagina ID 10 = OverOns


INSERT INTO content
VALUES (1,1,'DÉ videostreaming website voor studenten'),
       (1,2,'Registeer je nu en betaal de eerste maand 0 euro!'),
	   (1,3,'Of log in als je al een account hebt');

INSERT INTO content
VALUES (2,1,'Met het beginner abbonement kun je gemakkelijk en goedkoop de nieuwste films en series van vorig jaar zien!'),
       (2,2,'Met het standaard abbonement kun je alle films zien die niet meer in de bioscoop draaien en series een week voordat ze op tv komen!'),
       (2,3,'Met het professional abbonement kun je alle films zien VOORDAT ze in de bioscoop draaien, voor series geld het zelfde als het standaard abbonement!');

INSERT INTO content
VALUES (3,1,'Klik op de "Update" knop en de nieuwe data wordt opgeslagen.');

-- 4, 5, 6, 7

INSERT INTO content
VALUES (8,1,'Vragen? Bel 0800-123-4567.'),
       (8,2,'Alle rechten voorbehouden door Fletnix&#169; inc.'),
       (8,3,'Het kopiëren/distribueren van ons assortiment is ten strikste verboden en daders zullen strafrechtelijk vervolgd worden.');

INSERT INTO content
VALUES (10,1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' ),
       (10,2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' ),
	   (10,3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' );


INSERT INTO Films (movie_id,title,duration,publication_year)
VALUES (1,'Tenet',150,2020),
       (2,'Inception',148,2013),
       (3,'Interstellar',169,2014),
       (4,'The Ides of March ',101,2011),
       (5,'12 Monkeys',129,1995),
       (6,'Looper',113,2012),
       (7,'Moon',97,2009),
       (8,'The Abyss',140,1989),
       (9,'Parasite',132,2019),
       (10,'Marriage Story',137,2019),
       (11,'Toy Story 4',100,2019),
       (12,'Shooter',124,2007),
       (13,'The Art of Racing in the Rain',109,2019),
       (14,'Her',126,2013),
       (15,'Ford v Ferrari',152,2019),
       (16,'The Irishman',209,2019),
       (17,'Ben-Hur',212,1959),
       (18,'Hunter Killer',121,2018),
       (19,'A Clockwork Orange',136,1971),
       (20,'American Sniper',133,2014);