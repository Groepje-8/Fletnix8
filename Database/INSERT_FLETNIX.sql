USE FLETNIX
DELETE FROM content
DELETE FROM films
DELETE FROM genre
DELETE FROM persoon
DELETE FROM filmgenre
DELETE FROM Regisseur
DELETE FROM Cast

/*
1:  Index.php
2:  Abonnement.php
3:  AccountInstellingen.php

4:  FilmDetails.php
5:  FilmOverzicht.php
6:  mediaplayer.php
7:  header.php

8:  footer.php
9:  Registreren.php
10: OverOns.php
*/

-- Content
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
VALUES (9, 1, 'Klik op "verzend" knop om U account aan te maken en door te gaan naar U profielpagina.<br> Hier kunt U de informatie nalezen en controleren op eventuelen fouten.');

INSERT INTO content
VALUES (10,1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' ),
       (10,2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' ),
	   (10,3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' );


-- Films
INSERT INTO Films (movie_id,title,duration,publication_year, description)
VALUES (1,'Tenet',150,2020, 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.'),
       (2,'Inception',148,2013, 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.'),
       (3,'Interstellar',169,2014, 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity''s survival.'),
       (4,'The Ides of March ',101,2011, 'An idealistic staffer for a new presidential candidate gets a crash course on dirty politics during his stint on the campaign trail.'),
       (5,'12 Monkeys',129,1995, 'In a future world devastated by disease, a convict is sent back in time to gather information about the man-made virus that wiped out most of the human population on the planet.'),
       (6,'Looper',113,2012, 'In 2074, when the mob wants to get rid of someone, the target is sent into the past, where a hired gun awaits - someone like Joe - who one day learns the mob wants to ''close the loop'' by sending back Joe''s future self for assassination.'),
       (7,'Moon',97,2009, 'Astronaut Sam Bell has a quintessentially personal encounter toward the end of his three-year stint on the Moon, where he, working alongside his computer, GERTY, sends back to Earth parcels of a resource that has helped diminish our planet''s power problems.'),
       (8,'The Abyss',140,1989, 'A civilian diving team is enlisted to search for a lost nuclear submarine and faces danger while encountering an alien aquatic species.'),
       (9,'Parasite',132,2019, 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.'),
       (10,'Marriage Story',137,2019, 'Noah Baumbach''s incisive and compassionate look at a marriage breaking up and a family staying together.'),
       (11,'Toy Story 4',100,2019, 'When a new toy called "Forky" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.'),
       (12,'Shooter',124,2007, 'A marksman living in exile is coaxed back into action after learning of a plot to kill the President. After being double crossed for the attempt and on the run, he sets out for the real killer and the truth.'),
       (13,'The Art of Racing in the Rain',109,2019, 'Through his bond with his owner, aspiring Formula One race car driver Denny, golden retriever Enzo learns that the techniques needed on the racetrack can also be used to successfully navigate the journey of life.'),
       (14,'Her',126,2013, 'In a near future, a lonely writer develops an unlikely relationship with an operating system designed to meet his every need.'),
       (15,'Ford v Ferrari',152,2019, 'American car designer Carroll Shelby and driver Ken Miles battle corporate interference and the laws of physics to build a revolutionary race car for Ford in order to defeat Ferrari at the 24 Hours of Le Mans in 1966.'),
       (16,'The Irishman',209,2019, 'An old man recalls his time painting houses for his friend, Jimmy Hoffa, through the 1950-70s.'),
       (17,'Ben-Hur',212,1959, 'After a Jewish prince is betrayed and sent into slavery by a Roman friend, he regains his freedom and comes back for revenge.'),
       (18,'Hunter Killer',121,2018, 'An untested American submarine captain teams with U.S. Navy Seals to rescue the Russian president, who has been kidnapped by a rogue general.'),
       (19,'A Clockwork Orange',136,1971, 'In the future, a sadistic gang leader is imprisoned and volunteers for a conduct-aversion experiment, but it doesn''t go as planned.'),
       (20,'American Sniper',133,2014, 'Navy S.E.A.L. sniper Chris Kyle''s pinpoint accuracy saves countless lives on the battlefield and turns him into a legend. Back home with his family after four tours of duty, however, Chris finds that it is the war he can''t leave behind.');

-- Genres
INSERT INTO genre
VALUES ('Action', 'Desc'),
       ('Sci-Fi', 'Desc'),
       ('Thriller', 'Desc'),
       ('Adventure', 'Desc'),
       ('Drama', 'Desc'),
       ('Mystery', 'Desc'),
       ('Comedy', 'Desc'),
       ('Animation', 'Desc'),
       ('Romance', 'Desc'),
       ('Biography', 'Desc'),
       ('Crime', 'Desc');

INSERT INTO filmgenre
VALUES (1, 'Action'), (1, 'Sci-Fi'), (1, 'Thriller'),
       (2, 'Action'), (2, 'Adventure'), (2, 'Sci-Fi'),
       (3, 'Adventure'), (3, 'Drama'), (3, 'Sci-Fi'),
       (4, 'Drama'), (4, 'Thriller'),
       (5, 'Mystery'), (5, 'Sci-Fi'), (5, 'Thriller'),
       (6, 'Action'), (6, 'Drama'), (6, 'Sci-Fi'),
       (7, 'Drama'), (7, 'Mystery'), (7, 'Sci-Fi'),
       (8, 'Adventure'), (8, 'Drama'), (8, 'Mystery'),
       (9, 'Comedy'), (9, 'Drama'), (9, 'Thriller'),
       (10, 'Comedy'), (10, 'Drama'), (10, 'Romance'),
       (11, 'Animation'), (11, 'Adventure'), (11, 'Comedy'),
       (12, 'Action'), (12, 'Drama'),
       (13, 'Comedy'), (13, 'Drama'), (13, 'Romance'),
       (14, 'Drama'), (14, 'Romance'), (14, 'Sci-Fi'),
       (15, 'Action'), (15, 'Biography'), (15, 'Drama'),
       (16, 'Biography'), (16, 'Crime'), (16, 'Drama'),
       (17, 'Adventure'), (17, 'Drama'), (17, History),
       (18, 'Action'), (18, 'Thriller'),
       (19, 'Crime'), (19, 'Drama'), (19, 'Sci-Fi'),
       (20, 'Action'), (20, 'Biography'), (20, 'Drama');

-- Personen
INSERT INTO persoon (persoon_id, naam)
VALUES (1, 'Adam Driver'),
       (2, 'Al Pacino'),
       (3, 'Alan Siegel'),
       (4, 'Amanda Schull'),
       (5, 'Amanda Seyfried'),
       (6, 'Anne Hathaway'),
       (7, 'Anthony Burgess'),
       (8, 'Brad Pitt'),
       (9, 'Bradley Cooper'),
       (10, 'Bruce Willis'),
       (11, 'Caitriona Balfe'),
       (12, 'Charlton Heston'),
       (13, 'Choi Woo-sik'),
       (14, 'Chris Pratt'),
       (15, 'Christian Bale'),
       (16, 'Danny Glover'),
       (17, 'David Prowse'),
       (18, 'David Webb Peoples'),
       (19, 'Dominique McElligott'),
       (20, 'Ed Harris'),
       (21, 'Elizabeth Debicki'),
       (22, 'Elliot Page'),
       (23, 'Emily Blunt'),
       (24, 'Evan Rachel Wood'),
       (25, 'George Clooney'),
       (26, 'Gerard Butler'),
       (27, 'Harvey Keitel'),
       (28, 'Haya Harareet'),
       (29, 'Jack Hawkins'),
       (30, 'Jason Hall'),
       (31, 'Joan Cusack'),
       (32, 'Joaquin Phoenix'),
       (33, 'Joe Pesci'),
       (34, 'John David Washington'),
       (35, 'John Thompson'),
       (36, 'Jon Bernthal'),
       (37, 'Joseph Gordon-Levitt'),
       (38, 'Kenneth Branagh')
       (39, 'Kevin Costner'),
       (40, 'Kevin Spacey'),
       (41, 'Laura Dern'), 
       (42, 'Lee Sun-kyun'),
       (43, 'Leo Burmester'),
       (44, 'Leonardo DiCaprio'),
       (45, 'Luke Grimes'),
       (46, 'Mackenzie Foy'),
       (47, 'Malcolm McDowell'),
       (48, 'Mark Wahlberg'),
       (49, 'Martin Donovan'),
       (50, 'Mary Elizabeth Mastrantonio'),
       (51, 'Matt Berry'),
       (52, 'Matt Damon'),
       (53, 'Matthew McConaughey'),
       (54, 'Michael Biehn'),
       (55, 'Michael Caine'),
       (56, 'Michael Peña'),
       (56, 'Milo Ventimiglia'),
       (57, 'Park So-dam'),
       (58, 'Patrick Magee'),
       (59, 'Paul Dano'),
       (60, 'Philip Seymour Hoffman'),
       (61, 'Rhona Mitra'),
       (62, 'Robert De Niro'),
       (63, 'Robert Pattinson'),
       (64, 'Ray Liotta'),
       (65, 'Rooney Mara'),
       (66, 'Ryan Gosling'),
       (67, 'Sam Rockwell'),
       (68, 'Scarlett Johansson'),
       (69, 'Sienna Miller'),
       (70, 'Song Kang-Ho'),
       (71, 'Stephen Boyd'),
       (72, 'Tim Allen'),
       (73, 'Toby Jaffe'),
       (74, 'Tom Hanks'),
       (75, 'Tom Hardy'),
       (76, 'Tony Hale'),
       -- Regisseurs
       (77, 'Christopher Nolan'),
       (78, 'Terry Gilliam'),
       (79, 'Rian Johnson'),
       (80, 'Duncan Jones'),
       (81, 'James Cameron'),
       (82, 'Bong Joon Ho'),
       (83, 'Noah Baumbach'),
       (84, 'Josh Cooley'),
       (85, 'Antoine Fuqua'),
       (86, 'Simon Curtis'),
       (87, 'Spike Jonze'),
       (88, 'James Mangold'),
       (89, 'Martin Scorsese'),
       (90, 'William Wyler'),
       (91, 'Donovan Marsh'),
       (92, 'Stanley Kubrick'),
       (93, 'Clint Eastwood');

INSERT INTO Regisseur
VALUES (1, 77),
       (2, 77),
       (3, 77),
       (4, 25),
       (5, 78),
       (6, 79),
       (7, 80),
       (8, 81),
       (9, 82),
       (10, 83),
       (11, 84),
       (12, 85),
       (13, 86),
       (14, 87),
       (15, 88),
       (16, 89),
       (17, 90),
       (18, 91),
       (19, 92),
       (20, 93);

INSERT INTO Cast
VALUES (1, 34), (1, 63), (1, 21), (1, 38),
       (2, 44), (2, 37), (2, 22), (2, 75),
       (3, 53), (3, 6), (3, 55), (3, 46),
       (4, 66), (4, 24), (4, 25), (4, 60),
       (5, 4), (5, 8), (5, 18), (5, 10),
       (6, 37), (6, 10), (6, 23), (6, 59),
       (7, 67), (7, 19), (7, 40), (7, 51),
       (8, 20), (8, 50), (8, 54), (8, 43),
       (9, 70), (9, 42), (9, 57), (9, 13),
       (10, 1), (10, 68), (10, 41), (10, 64),
       (11, 74), (11, 72), (11, 76), (11, 31),
       (12, 48), (12, 61), (12, 16), (12, 56),
       (13, 39), (13, 56), (13, 5), (13, 49),
       (14, 32), (14, 14), (14, 68), (14, 65),
       (15, 52), (15, 15), (15, 36), (15, 11),
       (16, 62), (16, 2), (16, 33), (16, 27),
       (17, 12), (17, 29), (17, 28), (17, 71),
       (18, 26), (18, 35), (18, 73), (18, 3),
       (19, 47), (19, 7), (19, 58), (19, 17),
       (20, 9), (20, 69), (20, 45), (20, 30);

/* Ter controle
(1, John David Washington, Robert Pattinson, Elizabeth Debicki, Kenneth Branagh)
(2, Leonardo DiCaprio, Joseph Gordon-Levitt, Elliot Page, Tom Hardy),
(3, Matthew McConaughey, Anne Hathaway, Michael Caine, Mackenzie Foy),
(4, Ryan Gosling, Evan Rachel Wood, George Clooney, Philip Seymour Hoffman),
(5, Amanda Schull, Brad Pitt, David Webb Peoples, Bruce Willis),
(6, Joseph Gordon-Levitt, Bruce Willis, Emily Blunt, Paul Dano),
(7, Sam Rockwell, Dominique McElligott, Kevin Spacey, Matt Berry),
(8, Ed Harris, Mary Elizabeth Mastrantonio, Michael Biehn, Leo Burmester),
(9, Song Kang-Ho, Lee Sun-kyun, Park So-dam, Choi Woo-sik),
(10, Adam Driver, Scarlett Johansson, Laura Dern, Ray Liotta),
(11, Tom Hanks, Tim Allen, Tony Hale, Joan Cusack),
(12, Mark Wahlberg, Rhona Mitra, Danny Glover, Michael Peña),
(13, Kevin Costner, Milo Ventimiglia, Amanda Seyfried, Martin Donovan),
(14, Joaquin Phoenix, Chris Pratt, Scarlett Johansson, Rooney Mara),
(15, Matt Damon, Christian Bale, Jon Bernthal, Caitriona Balfe),
(16, Robert De Niro, Al Pacino, Joe Pesci, Harvey Keitel),
(17, Charlton Heston, Jack Hawkins, Haya Harareet, Stephen Boyd),
(18, Gerard Butler, John Thompson, Toby Jaffe, Alan Siegel ),
(19, Malcolm McDowell, Anthony Burgess, Patrick Magee, David Prowse),
(20, Bradley Cooper, Sienna Miller, Luke Grimes, Jason Hall);
*/