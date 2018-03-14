-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 06:38 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_generes`
--

CREATE TABLE `all_generes` (
  `id` int(11) NOT NULL,
  `genre_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_generes`
--

INSERT INTO `all_generes` (`id`, `genre_id`, `name`) VALUES
(1, '28', 'Action'),
(2, '12', 'Adventure'),
(3, '14', 'Fantasy'),
(4, '878', 'Science Fiction'),
(5, '80', 'Crime'),
(6, '18', 'Drama'),
(7, '53', 'Thriller'),
(11, '16', 'Animation'),
(12, '10751', 'Family'),
(13, '37', 'Western'),
(14, '35', 'Comedy'),
(15, '10749', 'Romance'),
(16, '27', 'Horror'),
(17, '9648', 'Mystery'),
(18, '36', 'History'),
(19, '10752', 'War'),
(20, '10402', 'Music'),
(21, '99', 'Documentary'),
(22, '10769', 'Foreign'),
(25, '10770', 'TV Movies');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(10) NOT NULL,
  `genre_id` varchar(100) NOT NULL,
  `movie_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `genre_id`, `movie_id`) VALUES
(792, '12', 1),
(793, '14', 1),
(794, '28', 1),
(795, '28', 2),
(796, '80', 2),
(797, '18', 2),
(798, '53', 2),
(799, '14', 3),
(800, '28', 3),
(801, '12', 3),
(802, '28', 4),
(803, '12', 4),
(804, '878', 4),
(805, '28', 5),
(806, '12', 5),
(807, '14', 5),
(808, '12', 6),
(809, '28', 6),
(810, '53', 6),
(811, '80', 6),
(812, '28', 7),
(813, '12', 7),
(814, '37', 7),
(815, '12', 8),
(816, '10751', 8),
(817, '14', 8),
(818, '12', 9),
(819, '28', 9),
(820, '14', 9),
(821, '28', 10),
(822, '12', 10),
(823, '14', 10),
(824, '28', 11),
(825, '12', 11),
(826, '12', 12),
(827, '14', 12),
(828, '18', 13),
(829, '10749', 13),
(830, '53', 13),
(831, '53', 14),
(832, '28', 14),
(833, '12', 14),
(834, '878', 14),
(835, '28', 15),
(836, '12', 15),
(837, '53', 15),
(838, '28', 16),
(839, '12', 16),
(840, '878', 16),
(841, '12', 17),
(842, '28', 17),
(843, '878', 17),
(844, '53', 17),
(845, '878', 18),
(846, '28', 18),
(847, '12', 18),
(848, '14', 19),
(849, '12', 19),
(850, '10751', 19),
(851, '12', 20),
(852, '28', 20),
(853, '878', 20),
(854, '12', 21),
(855, '28', 21),
(856, '53', 21),
(857, '878', 21),
(858, '28', 22),
(859, '878', 22),
(860, '53', 22),
(861, '28', 23),
(862, '18', 23),
(863, '27', 23),
(864, '878', 23),
(865, '53', 23),
(866, '28', 24),
(867, '12', 24),
(868, '878', 24),
(869, '18', 25),
(870, '10749', 25),
(871, '28', 26),
(872, '878', 26),
(873, '12', 26),
(874, '12', 27),
(875, '28', 27),
(876, '16', 28),
(877, '12', 28),
(878, '35', 28),
(879, '10751', 28),
(880, '28', 28),
(881, '14', 28),
(882, '16', 29),
(883, '10751', 29),
(884, '28', 30),
(885, '12', 30),
(886, '878', 30),
(887, '878', 31),
(888, '14', 31),
(889, '28', 31),
(890, '12', 31),
(891, '12', 32),
(892, '10751', 32),
(893, '14', 32),
(894, '18', 33),
(895, '28', 33),
(896, '80', 33),
(897, '53', 33),
(898, '16', 34),
(899, '10751', 34),
(900, '12', 34),
(901, '878', 34),
(902, '12', 35),
(903, '18', 35),
(904, '10751', 35),
(905, '12', 36),
(906, '28', 36),
(907, '14', 36),
(908, '14', 37),
(909, '35', 37),
(910, '10751', 37),
(911, '12', 38),
(912, '28', 38),
(913, '18', 39),
(914, '35', 39),
(915, '16', 39),
(916, '10751', 39),
(917, '12', 40),
(918, '28', 40),
(919, '878', 40),
(920, '14', 41),
(921, '12', 41),
(922, '28', 41),
(923, '10751', 41),
(924, '10749', 41),
(925, '28', 42),
(926, '12', 42),
(927, '878', 42),
(928, '10749', 42),
(929, '28', 43),
(930, '12', 43),
(931, '878', 43),
(932, '12', 44),
(933, '10751', 44),
(934, '9648', 44),
(935, '878', 44),
(936, '10751', 45),
(937, '16', 45),
(938, '35', 45),
(939, '12', 45),
(940, '28', 46),
(941, '12', 46),
(942, '878', 46),
(943, '28', 47),
(944, '53', 47),
(945, '878', 47),
(946, '12', 48),
(947, '18', 48),
(948, '878', 48),
(949, '28', 49),
(950, '12', 49),
(951, '18', 49),
(952, '27', 49),
(953, '878', 49),
(954, '28', 50),
(955, '80', 50),
(956, '53', 50),
(957, '28', 51),
(958, '878', 51),
(959, '12', 51),
(960, '14', 52),
(961, '12', 52),
(962, '28', 52),
(963, '35', 52),
(964, '18', 52),
(965, '28', 1009),
(966, '12', 1009),
(967, '36', 1009),
(968, '10752', 1009),
(969, '12', 90002),
(970, '14', 90002),
(971, '878', 90002),
(972, '80', 90002),
(973, '10752', 90002);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `homepage` varchar(100) NOT NULL,
  `budget` varchar(100) DEFAULT NULL,
  `release_date` date NOT NULL,
  `critics_rating` float DEFAULT '0',
  `viewer_rating` float DEFAULT '0',
  `language` varchar(100) DEFAULT NULL,
  `total_viewer_ratings` int(10) NOT NULL DEFAULT '0',
  `total_critic_ratings` int(10) NOT NULL DEFAULT '0',
  `image` varchar(100) DEFAULT '1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_id`, `name`, `tagline`, `description`, `homepage`, `budget`, `release_date`, `critics_rating`, `viewer_rating`, `language`, `total_viewer_ratings`, `total_critic_ratings`, `image`) VALUES
(1, 1, 'Pirates of the Caribbean: At World\'s End', 'At the end of the world, the adventure begins.', 'Captain Barbossa, long believed to be dead, has come back to life and is headed to the edge of the Earth with Will Turner and Elizabeth Swann. But nothing is quite as it seems.', 'http://disney.go.com/disneypictures/pirates/', '300000000', '2007-05-19', 7.9, 8.4, NULL, 2, 2, '1.jpg'),
(2, 2, 'Spectre', 'A Plan No One Escapes', 'A cryptic message from Bondâ€™s past sends him on a trail to uncover a sinister organization. While M battles political forces to keep the secret service alive, Bond peels back the layers of deceit to reveal the terrible truth behind SPECTRE.', 'http://www.sonypictures.com/movies/spectre/', '245000000', '2015-10-26', 7.85, 7, NULL, 2, 2, '1.jpg'),
(3, 3, 'The Dark Knight Rises', 'The Legend Ends', 'Following the death of District Attorney Harvey Dent, Batman assumes responsibility for Dent\'s crimes to protect the late attorney\'s reputation and is subsequently hunted by the Gotham City Police Department. Eight years later, Batman encounters the mysterious Selina Kyle and the villainous Bane, a new terrorist leader who overwhelms Gotham\'s finest. The Dark Knight resurfaces to protect a city that has branded him an enemy.', 'http://www.thedarkknightrises.com/', '250000000', '2012-07-16', 9.8, 9.7, NULL, 2, 2, '1.jpg'),
(4, 4, 'John Carter', 'Lost in our world, found in another.', 'John Carter is a war-weary, former military captain who\'s inexplicably transported to the mysterious and exotic planet of Barsoom (Mars) and reluctantly becomes embroiled in an epic conflict. It\'s a world on the brink of collapse, and Carter rediscovers his humanity when he realizes the survival of Barsoom and its people rests in his hands.', 'http://movies.disney.com/john-carter', '260000000', '2012-03-07', 4, 5.75, NULL, 2, 2, '1.jpg'),
(5, 5, 'Spider-Man 3', 'The battle within.', 'The seemingly invincible Spider-Man goes up against an all-new crop of villain â€“ including the shape-shifting Sandman. While Spider-Manâ€™s superpowers are altered by an alien organism, his alter ego, Peter Parker, deals with nemesis Eddie Brock and also gets caught up in a love triangle.', 'http://www.sonypictures.com/movies/spider-man3/', '258000000', '2007-05-01', 5.6, 6.5, NULL, 2, 2, '1.jpg'),
(6, 6, 'Tangled', 'They\'re taking adventure to new lengths.', 'When the kingdom\'s most wanted-and most charming-bandit Flynn Rider hides out in a mysterious tower, he\'s taken hostage by Rapunzel, a beautiful and feisty tower-bound teen with 70 feet of magical, golden hair. Flynn\'s curious captor, who\'s looking for her ticket out of the tower where she\'s been locked away for years, strikes a deal with the handsome thief and the unlikely duo sets off on an action-packed escapade, complete with a super-cop horse, an over-protective chameleon and a gruff gang o', 'http://disney.go.com/disneypictures/tangled/', '260000000', '2010-11-24', 0, 0, NULL, 0, 0, '1.jpg'),
(7, 7, 'Avengers: Age of Ultron', 'A New Age Has Come.', 'When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earthâ€™s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure.', 'http://marvel.com/movies/movie/193/avengers_age_of_ultron', '280000000', '2015-04-22', 0, 0, NULL, 0, 0, '1.jpg'),
(8, 8, 'Harry Potter and the Half-Blood Prince', 'Dark Secrets Revealed', 'As Harry begins his sixth year at Hogwarts, he discovers an old book marked as \'Property of the Half-Blood Prince\', and begins to learn more about Lord Voldemort\'s dark past.', 'http://harrypotter.warnerbros.com/harrypotterandthehalf-bloodprince/dvd/index.html', '250000000', '2009-07-07', 0, 0, NULL, 0, 0, '1.jpg'),
(9, 9, 'Batman v Superman: Dawn of Justice', 'Justice or revenge', 'Fearing the actions of a god-like Super Hero left unchecked, Gotham Cityâ€™s own formidable, forceful vigilante takes on Metropolisâ€™s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than itâ€™s ever known before.', 'http://www.batmanvsupermandawnofjustice.com/', '250000000', '2016-03-23', 0, 0, NULL, 0, 0, '1.jpg'),
(10, 10, 'Superman Returns', '', 'Superman returns to discover his 5-year absence has allowed Lex Luthor to walk free, and that those he was closest too felt abandoned and have moved on. Luthor plots his ultimate revenge that could see millions killed and change the face of the planet forever, as well as ridding himself of the Man of Steel.', 'http://www.superman.com', '270000000', '2006-06-28', 0, 0, NULL, 0, 0, '1.jpg'),
(11, 11, 'Quantum of Solace', 'For love, for hate, for justice, for revenge.', 'Quantum of Solace continues the adventures of James Bond after Casino Royale. Betrayed by Vesper, the woman he loved, 007 fights the urge to make his latest mission personal. Pursuing his determination to uncover the truth, Bond and M interrogate Mr. White, who reveals that the organization that blackmailed Vesper is far more complex and dangerous than anyone had imagined.', 'http://www.mgm.com/view/movie/234/Quantum-of-Solace/', '200000000', '2008-10-30', 0, 0, NULL, 0, 0, '1.jpg'),
(12, 12, 'Pirates of the Caribbean: Dead Man\'s Chest', 'Jack is back!', 'Captain Jack Sparrow works his way out of a blood debt with the ghostly Davey Jones, he also attempts to avoid eternal damnation.', 'http://disney.go.com/disneypictures/pirates/', '200000000', '2006-06-20', 0, 0, NULL, 0, 0, '1.jpg'),
(13, 13, 'The Lone Ranger', 'Never Take Off the Mask', 'The Texas Rangers chase down a gang of outlaws led by Butch Cavendish, but the gang ambushes the Rangers, seemingly killing them all. One survivor is found, however, by an American Indian named Tonto, who nurses him back to health. The Ranger, donning a mask and riding a white stallion named Silver, teams up with Tonto to bring the unscrupulous gang and others of that ilk to justice.', 'http://disney.go.com/the-lone-ranger/', '255000000', '2013-07-03', 0, 0, NULL, 0, 0, '1.jpg'),
(14, 14, 'Man of Steel', 'You will believe that a man can fly.', 'A young boy learns that he has extraordinary powers and is not of this earth. As a young man, he journeys to discover where he came from and what he was sent here to do. But the hero in him must emerge if he is to save the world from annihilation and become the symbol of hope for all mankind.', 'http://www.manofsteel.com/', '225000000', '2013-06-12', 0, 0, NULL, 0, 0, '1.jpg'),
(15, 15, 'The Chronicles of Narnia: Prince Caspian', 'Hope has a new face.', 'One year after their incredible adventures in the Lion, the Witch and the Wardrobe, Peter, Edmund, Lucy and Susan Pevensie return to Narnia to aid a young prince whose life has been threatened by the evil King Miraz. Now, with the help of a colorful cast of new characters, including Trufflehunter the badger and Nikabrik the dwarf, the Pevensie clan embarks on an incredible quest to ensure that Narnia is returned to its rightful heir.', '', '225000000', '2008-05-15', 0, 0, NULL, 0, 0, '1.jpg'),
(16, 16, 'The Avengers', 'Some assembly required.', 'When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!', 'http://marvel.com/avengers_movie/', '220000000', '2012-04-25', 0, 0, NULL, 0, 0, '1.jpg'),
(17, 17, 'Pirates of the Caribbean: On Stranger Tides', 'Live Forever Or Die Trying.', 'Captain Jack Sparrow crosses paths with a woman from his past, and he\'s not sure if it\'s love -- or if she\'s a ruthless con artist who\'s using him to find the fabled Fountain of Youth. When she forces him aboard the Queen Anne\'s Revenge, the ship of the formidable pirate Blackbeard, Jack finds himself on an unexpected adventure in which he doesn\'t know who to fear more: Blackbeard or the woman from his past.', 'http://disney.go.com/pirates/index-on-stranger-tides.html#/video/', '380000000', '2011-05-14', 0, 0, NULL, 0, 0, '1.jpg'),
(18, 18, 'Men in Black 3', 'They are back... in time.', 'Agents J (Will Smith) and K (Tommy Lee Jones) are back...in time. J has seen some inexplicable things in his 15 years with the Men in Black, but nothing, not even aliens, perplexes him as much as his wry, reticent partner. But when K\'s life and the fate of the planet are put at stake, Agent J will have to travel back in time to put things right. J discovers that there are secrets to the universe that K never told him - secrets that will reveal themselves as he teams up with the young Agent K (Jo', 'http://www.sonypictures.com/movies/meninblack3/', '225000000', '2012-05-23', 0, 0, NULL, 0, 0, '1.jpg'),
(19, 19, 'The Hobbit: The Battle of the Five Armies', 'Witness the defining chapter of the Middle-Earth saga', 'Immediately after the events of The Desolation of Smaug, Bilbo and the dwarves try to defend Erebor\'s mountain of treasure from others who claim it: the men of the ruined Laketown and the elves of Mirkwood. Meanwhile an army of Orcs led by Azog the Defiler is marching on Erebor, fueled by the rise of the dark lord Sauron. Dwarves, elves and men must unite, and the hope for Middle-Earth falls into Bilbo\'s hands.', 'http://www.thehobbit.com/', '250000000', '2014-12-10', 0, 0, NULL, 0, 0, '1.jpg'),
(20, 20, 'The Amazing Spider-Man', 'The untold story begins.', 'Peter Parker is an outcast high schooler abandoned by his parents as a boy, leaving him to be raised by his Uncle Ben and Aunt May. Like most teenagers, Peter is trying to figure out who he is and how he got to be the person he is today. As Peter discovers a mysterious briefcase that belonged to his father, he begins a quest to understand his parents\' disappearance â€“ leading him directly to Oscorp and the lab of Dr. Curt Connors, his father\'s former partner. As Spider-Man is set on a collision', 'http://www.theamazingspiderman.com', '215000000', '2012-06-27', 0, 0, NULL, 0, 0, '1.jpg'),
(21, 21, 'Robin Hood', 'Rise and rise again, until lambs become lions.', 'When soldier Robin happens upon the dying Robert of Loxley, he promises to return the man\'s sword to his family in Nottingham. There, he assumes Robert\'s identity; romances his widow, Marion; and draws the ire of the town\'s sheriff and King John\'s henchman, Godfrey.', 'http://www.robinhoodthemovie.com/', '200000000', '2010-05-12', 0, 0, NULL, 0, 0, '1.jpg'),
(22, 22, 'The Hobbit: The Desolation of Smaug', 'Beyond darkness... beyond desolation... lies the greatest danger of all.', 'The Dwarves, Bilbo and Gandalf have successfully escaped the Misty Mountains, and Bilbo has gained the One Ring. They all continue their journey to get their gold back from the Dragon, Smaug.', 'http://www.thehobbit.com/', '250000000', '2013-12-11', 0, 0, NULL, 0, 0, '1.jpg'),
(23, 23, 'The Golden Compass', 'There are worlds beyond our own - the compass will show the way.', 'After overhearing a shocking secret, precocious orphan Lyra Belacqua trades her carefree existence roaming the halls of Jordan College for an otherworldly adventure in the far North, unaware that it\'s part of her destiny.', 'http://www.goldencompassmovie.com/index_german.html', '180000000', '2007-12-04', 0, 0, NULL, 0, 0, '1.jpg'),
(24, 24, 'King Kong', 'The eighth wonder of the world.', 'In 1933 New York, an overly ambitious movie producer coerces his cast and hired ship crew to travel to mysterious Skull Island, where they encounter Kong, a giant ape who is immediately smitten with the leading lady.', '', '207000000', '2005-12-14', 0, 0, NULL, 0, 0, '1.jpg'),
(25, 25, 'Titanic', 'Nothing on Earth could come between them.', '84 years later, a 101-year-old woman named Rose DeWitt Bukater tells the story to her granddaughter Lizzy Calvert, Brock Lovett, Lewis Bodine, Bobby Buell and Anatoly Mikailavich on the Keldysh about her life set in April 10th 1912, on a ship called Titanic when young Rose boards the departing ship with the upper-class passengers and her mother, Ruth DeWitt Bukater, and her fiancÃ©, Caledon Hockley. Meanwhile, a drifter and artist named Jack Dawson and his best friend Fabrizio De Rossi win third', 'http://www.titanicmovie.com', '200000000', '1997-11-18', 0, 0, NULL, 0, 0, '1.jpg'),
(26, 26, 'Captain America: Civil War', 'Divided We Fall', 'Following the events of Age of Ultron, the collective governments of the world pass an act designed to regulate all superhuman activity. This polarizes opinion amongst the Avengers, causing two factions to side with Iron Man or Captain America, which causes an epic battle between former allies.', 'http://marvel.com/captainamericapremiere', '250000000', '2016-04-27', 0, 0, NULL, 0, 0, '1.jpg'),
(27, 27, 'Battleship', 'The Battle for Earth Begins at Sea', 'When mankind beams a radio signal into space, a reply comes from â€˜Planet Gâ€™, in the form of several alien crafts that splash down in the waters off Hawaii. Lieutenant Alex Hopper is a weapons officer assigned to the USS John Paul Jones, part of an international naval coalition which becomes the world\'s last hope for survival as they engage the hostile alien force of unimaginable strength. While taking on the invaders, Hopper must also try to live up to the potential his brother, and his fian', '', '209000000', '2012-04-11', 0, 0, NULL, 0, 0, '1.jpg'),
(28, 28, 'Jurassic World', 'The park is open.', 'Twenty-two years after the events of Jurassic Park, Isla Nublar now features a fully functioning dinosaur theme park, Jurassic World, as originally envisioned by John Hammond.', 'http://www.jurassicworld.com/', '150000000', '2015-06-09', 0, 0, NULL, 0, 0, '1.jpg'),
(29, 29, 'Skyfall', 'Think on your sins.', 'When Bond\'s latest assignment goes gravely wrong and agents around the world are exposed, MI6 is attacked forcing M to relocate the agency. These events cause her authority and position to be challenged by Gareth Mallory, the new Chairman of the Intelligence and Security Committee. With MI6 now compromised from both inside and out, M is left with one ally she can trust: Bond. 007 takes to the shadows - aided only by field agent, Eve - following a trail to the mysterious Silva, whose lethal and h', 'http://www.skyfall-movie.com', '200000000', '2012-10-25', 0, 0, NULL, 0, 0, '1.jpg'),
(30, 30, 'Spider-Man 2', 'There\'s a hero in all of us.', 'Peter Parker is going through a major identity crisis. Burned out from being Spider-Man, he decides to shelve his superhero alter ego, which leaves the city suffering in the wake of carnage left by the evil Doc Ock. In the meantime, Parker still can\'t act on his feelings for Mary Jane Watson, a girl he\'s loved since childhood.', 'http://www.sonypictures.com/movies/spider-man2/', '200000000', '2004-06-25', 0, 0, NULL, 0, 0, '1.jpg'),
(31, 31, 'Iron Man 3', 'Unleash the power behind the armor.', 'When Tony Stark\'s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.', 'http://marvel.com/ironman3', '200000000', '2013-04-18', 0, 0, NULL, 0, 0, '1.jpg'),
(32, 32, 'Alice in Wonderland', 'You\'re invited to a very important date.', 'Alice, an unpretentious and individual 19-year-old, is betrothed to a dunce of an English nobleman. At her engagement party, she escapes the crowd to consider whether to go through with the marriage and falls down a hole in the garden after spotting an unusual rabbit. Arriving in a strange and surreal place called \'Underland,\' she finds herself in a world that resembles the nightmares she had as a child, filled with talking animals, villainous queens and knights, and frumious bandersnatches. Ali', 'http://disney.go.com/wonderland/', '200000000', '2010-03-03', 0, 0, NULL, 0, 0, '1.jpg'),
(33, 33, 'X-Men: The Last Stand', 'Take a Stand', 'When a cure is found to treat mutations, lines are drawn amongst the X-Men and The Brotherhood, a band of powerful mutants organized under Xavier\'s former ally, Magneto.', '', '210000000', '2006-05-24', 0, 0, NULL, 0, 0, '1.jpg'),
(34, 34, 'Monsters University', 'School never looked this scary.', 'A look at the relationship between Mike and Sulley during their days at Monsters University â€” when they weren\'t necessarily the best of friends.', '', '200000000', '2013-06-20', 0, 0, NULL, 0, 0, '1.jpg'),
(35, 35, 'Transformers: Revenge of the Fallen', 'Revenge is coming.', 'Sam Witwicky leaves the Autobots behind for a normal life. But when his mind is filled with cryptic symbols, the Decepticons target him and he is dragged back into the Transformers\' war.', 'http://www.transformersmovie.com/', '150000000', '2009-06-19', 0, 0, NULL, 0, 0, '1.jpg'),
(36, 36, 'Transformers: Age of Extinction', 'This is not war. It\'s extinction.', '"As humanity picks up the pieces, following the conclusion of ""Transformers: Dark of the Moon,"" Autobots and Decepticons have all but vanished from the face of the planet. However, a group of powerful, ingenious businessman and scientists attempt to learn from past Transformer incursions and push the boundaries of technology beyond what they can control - all while an ancient, powerful Transformer menace sets Earth in his cross-hairs."', 'http://www.transformersmovie.com', '210000000', '2014-06-25', 0, 0, NULL, 0, 0, '1.jpg'),
(37, 37, 'Oz: The Great and Powerful', 'In Oz, nothing is what it seems', 'Oscar Diggs, a small-time circus illusionist and con-artist, is whisked from Kansas to the Land of Oz where the inhabitants assume he\'s the great wizard of prophecy, there to save Oz from the clutches of evil.', 'http://www.ozthegreatandpowerfulmovie.com', '200000000', '2013-03-07', 0, 0, NULL, 0, 0, '1.jpg'),
(38, 38, 'The Amazing Spider-Man 2', 'No more secrets.', 'For Peter Parker, life is busy. Between taking out the bad guys as Spider-Man and spending time with the person he loves, Gwen Stacy, high school graduation cannot come quickly enough. Peter has not forgotten about the promise he made to Gwenâ€™s father to protect her by staying away, but that is a promise he cannot keep. Things will change for Peter when a new villain, Electro, emerges, an old friend, Harry Osborn, returns, and Peter uncovers new clues about his past.', 'http://www.theamazingspiderman.com', '200000000', '2014-04-16', 0, 0, NULL, 0, 0, '1.jpg'),
(39, 39, 'TRON: Legacy', 'The Game Has Changed.', 'Sam Flynn, the tech-savvy and daring son of Kevin Flynn, investigates his father\'s disappearance and is pulled into The Grid. With the help of a mysterious program named Quorra, Sam quests to stop evil dictator Clu from crossing into the real world.', 'http://disney.go.com/tron/', '170000000', '2010-12-10', 0, 0, NULL, 0, 0, '1.jpg'),
(40, 40, 'Cars 2', 'Ka-ciao!', 'Star race car Lightning McQueen and his pal Mater head overseas to compete in the World Grand Prix race. But the road to the championship becomes rocky as Mater gets caught up in an intriguing adventure of his own: international espionage.', 'http://www.disney.go.com/cars/', '200000000', '2011-06-11', 0, 0, NULL, 0, 0, '1.jpg'),
(41, 41, 'Green Lantern', 'In our darkest hour, there will be light.', 'For centuries, a small but powerful force of warriors called the Green Lantern Corps has sworn to keep intergalactic order. Each Green Lantern wears a ring that grants him superpowers. But when a new enemy called Parallax threatens to destroy the balance of power in the Universe, their fate and the fate of Earth lie in the hands of the first human ever recruited.', 'http://greenlanternmovie.warnerbros.com/', '200000000', '2011-06-16', 0, 0, NULL, 0, 0, '1.jpg'),
(42, 42, 'Toy Story 3', 'No toy gets left behind.', 'Woody, Buzz, and the rest of Andy\'s toys haven\'t been played with in years. With Andy about to go to college, the gang find themselves accidentally left at a nefarious day care center. The toys must band together to escape and return home to Andy.', 'http://disney.go.com/toystory/', '200000000', '2010-06-16', 0, 0, NULL, 0, 0, '1.jpg'),
(43, 43, 'Terminator Salvation', 'The End Begins.', 'All grown up in post-apocalyptic 2018, John Connor must lead the resistance of humans against the increasingly dominating militaristic robots. But when Marcus Wright appears, his existence confuses the mission as Connor tries to determine whether Wright has come from the future or the past -- and whether he\'s friend or foe.', 'https://www.warnerbros.com/terminator-salvation', '200000000', '2009-05-20', 0, 0, NULL, 0, 0, '1.jpg'),
(44, 44, 'Furious 7', 'Vengeance Hits Home', 'Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.', 'http://www.furious7.com/', '190000000', '2015-04-01', 0, 0, NULL, 0, 0, '1.jpg'),
(45, 45, 'World War Z', 'Remember Philly!', 'Life for former United Nations investigator Gerry Lane and his family seems content. Suddenly, the world is plagued by a mysterious infection turning whole human populations into rampaging mindless zombies. After barely escaping the chaos, Lane is persuaded to go on a mission to investigate this disease. What follows is a perilous trek around the world where Lane must brave horrific dangers and long odds to find answers before human civilization falls.', 'http://www.worldwarzmovie.com', '200000000', '2013-06-20', 0, 0, NULL, 0, 0, '1.jpg'),
(46, 46, 'X-Men: Days of Future Past', 'To save the future, they must alter the past', 'The ultimate X-Men ensemble fights a war for the survival of the species across two time periods as they join forces with their younger selves in an epic battle that must change the past â€“ to save our future.', 'http://www.x-menmovies.com/', '250000000', '2014-05-15', 0, 0, NULL, 0, 0, '1.jpg'),
(47, 47, 'Star Trek Into Darkness', 'Earth Will Fall', 'When the crew of the Enterprise is called back home, they find an unstoppable force of terror from within their own organization has detonated the fleet and everything it stands for, leaving our world in a state of crisis.  With a personal score to settle, Captain Kirk leads a manhunt to a war-zone world to capture a one man weapon of mass destruction. As our heroes are propelled into an epic chess game of life and death, love will be challenged, friendships will be torn apart, and sacrifices mu', '', '190000000', '2013-05-05', 0, 0, NULL, 0, 0, '1.jpg'),
(48, 48, 'Jack the Giant Slayer', 'Prepare for a giant adventure', 'The story of an ancient war that is reignited when a young farmhand unwittingly opens a gateway between our world and a fearsome race of giants. Unleashed on the Earth for the first time in centuries, the giants strive to reclaim the land they once lost, forcing the young man, Jack into the battle of his life to stop them. Fighting for a kingdom, its people, and the love of a brave princess, he comes face to face with the unstoppable warriors he thought only existed in legendâ€“and gets the chan', 'http://jackthegiantkiller.warnerbros.com', '195000000', '2013-02-27', 0, 0, NULL, 0, 0, '1.jpg'),
(49, 49, 'The Great Gatsby', 'Reserving judgments is a matter of infinite hope... I come to the admission that it has a limit.', 'An adaptation of F. Scott Fitzgerald\'s Long Island-set novel, where Midwesterner Nick Carraway is lured into the lavish world of his neighbor, Jay Gatsby. Soon enough, however, Carraway will see through the cracks of Gatsby\'s nouveau riche existence, where obsession, madness, and tragedy await.', '', '105000000', '2013-05-10', 0, 0, NULL, 0, 0, '1.jpg'),
(50, 50, 'Prince of Persia: The Sands of Time', 'Defy the Future', 'A rogue prince reluctantly joins forces with a mysterious princess and together, they race against dark forces to safeguard an ancient dagger capable of releasing the Sands of Time â€“ gift from the gods that can reverse time and allow its possessor to rule the world.', 'http://disney.go.com/disneypictures/princeofpersia', '150000000', '2010-05-19', 0, 0, NULL, 0, 0, '1.jpg'),
(51, 51, 'Pacific Rim', 'To Fight Monsters, We Created Monsters', 'When legions of monstrous creatures, known as Kaiju, started rising from the sea, a war began that would take millions of lives and consume humanity\'s resources for years on end. To combat the giant Kaiju, a special type of weapon was devised: massive robots, called Jaegers, which are controlled simultaneously by two pilots whose minds are locked in a neural bridge. But even the Jaegers are proving nearly defenseless in the face of the relentless Kaiju. On the verge of defeat, the forces defendi', 'http://www.pacificrimmovie.com/', '180000000', '2013-07-11', 0, 0, NULL, 0, 0, '1.jpg'),
(52, 52, 'Transformers: Dark of the Moon', 'The invasion we always feared. An enemy we never expected.', 'Sam Witwicky takes his first tenuous steps into adulthood while remaining a reluctant human ally of Autobot-leader Optimus Prime. The film centers around the space race between the USSR and the USA, suggesting there was a hidden Transformers role in it all that remains one of the planet\'s most dangerous secrets.', 'http://www.transformersmovie.com/', '195000000', '2011-06-28', 0, 0, NULL, 0, 0, '1.jpg'),
(4812, 0, 'original_title', 'tagline', 'overview', 'homepage', 'budget', '2018-02-02', 0, 0, NULL, 0, 0, '1.jpg'),
(49992, 1009, 'Padmavati', 'Woh Rajput', 'Padvatis struggle', 'www.youtube.com', '1000000', '2018-03-10', 0, 0, 'Hindi', 0, 0, 'RUT_0842.JPG'),
(49993, 90002, 'Black Panther', '', '', '', '', '2018-03-15', 0, 0, '', 0, 0, 'justin_maller_wolf_2.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `movie_join_genre`
-- (See below for the actual view)
--
CREATE TABLE `movie_join_genre` (
`name` varchar(50)
,`movie_id` int(10)
,`genre_id` varchar(100)
,`release_date` date
,`total_viewer_ratings` int(10)
,`total_critic_ratings` int(10)
,`critics_rating` float
,`viewer_rating` float
,`language` varchar(100)
,`image` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `movie_join_rating`
-- (See below for the actual view)
--
CREATE TABLE `movie_join_rating` (
`id` int(10)
,`star` float
,`name` varchar(50)
,`movie_id` int(10)
,`user_id` varchar(14)
);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) NOT NULL,
  `rating_id` varchar(255) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `user_id` varchar(14) NOT NULL,
  `star` float NOT NULL,
  `user_type` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating_id`, `movie_id`, `user_id`, `star`, `user_type`) VALUES
(9, '5a96f293def8b', 1, '1', 9.8, 1),
(10, '5a96f2a201521', 2, '1', 8, 1),
(11, '5a96f2a87d34d', 4, '1', 6.5, 1),
(12, '5a96f2f059bd6', 3, '1', 9.6, 1),
(13, '5a96f2f742411', 5, '1', 6, 1),
(14, '5a96f31d19f70', 1, '2', 7, 1),
(15, '5a96f3243ce79', 2, '2', 6, 1),
(16, '5a96f32cbb359', 3, '2', 9.8, 1),
(17, '5a96f332d88ca', 4, '2', 5, 1),
(18, '5a96f33a6e739', 5, '2', 7, 1),
(19, '5a96f3a59471e', 1, '3', 7.8, 2),
(20, '5a96f3bddcb38', 2, '3', 8.1, 2),
(21, '5a96f3cbd0c65', 3, '3', 9.9, 2),
(22, '5a96f3d2c7512', 4, '3', 4, 2),
(23, '5a96f3da366a5', 5, '3', 5.6, 2),
(24, '5a96f41c4e747', 1, '4', 8, 2),
(25, '5a96f42563995', 2, '4', 7.6, 2),
(26, '5a96f42d0a669', 3, '4', 9.7, 2),
(27, '5a96f433826dc', 4, '4', 4, 2),
(28, '5a96f43a86193', 5, '4', 5.6, 2);

--
-- Triggers `ratings`
--
DELIMITER $$
CREATE TRIGGER `update_critic_rating` AFTER INSERT ON `ratings` FOR EACH ROW BEGIN
    IF (NEW.user_type = 2)
    THEN
      UPDATE movies
      SET critics_rating = (critics_rating*(total_critic_ratings-1) + NEW.star)/total_critic_ratings
      WHERE movie_id = NEW.movie_id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_total_critic_count` BEFORE INSERT ON `ratings` FOR EACH ROW BEGIN
    IF (NEW.user_type= 2)
    THEN
      UPDATE movies
      SET total_critic_ratings = total_critic_ratings+1
      WHERE movie_id = NEW.movie_id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_total_viewer_count` BEFORE INSERT ON `ratings` FOR EACH ROW BEGIN
    IF (NEW.user_type= 1)
    THEN
      UPDATE movies
      SET total_viewer_ratings = total_viewer_ratings+1
      WHERE movie_id = NEW.movie_id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_viewer_rating` AFTER INSERT ON `ratings` FOR EACH ROW BEGIN
    IF (NEW.user_type = 1)
    THEN
      UPDATE movies
      SET viewer_rating = (viewer_rating*(total_viewer_ratings-1) + NEW.star)/total_viewer_ratings
      WHERE movie_id = NEW.movie_id;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `a` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `a`) VALUES
(1, 'test'),
(2, 'test'),
(3, 'test'),
(4, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(14) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `password` varchar(15) NOT NULL,
  `age` int(5) NOT NULL,
  `user_type` varchar(10) NOT NULL COMMENT '0 for admin, 1 for viewer, 2 for critic',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `phone`, `password`, `age`, `user_type`, `status`) VALUES
(11, '11', 'admin', '9910084772', 'qazwsxedc', 20, '0', 0),
(12, '1', 'Bhavi', '8295619890', 'qazwsxedc', 19, '1', 0),
(13, '2', 'Tanmay', '7023310090', 'qazwsxedc', 21, '1', 0),
(14, '3', 'Rajeev Napasand', '9818464208', 'qazwsxedc', 45, '2', 1),
(15, '4', 'Garvit Kataria', '7014156060', 'qazwsxedc', 18, '2', 1),
(16, '5', 'test_critic', '67', '67', 67, '2', 1),
(19, '7', 'Sanyem Gupta', '1234567890', 'qazwsxedc', 19, '2', 0),
(20, '8', 'Sahaj Aggarwal', '9999999999', 'qazwsxedc', 19, '2', 0),
(21, '9', 'Anurag Gupta', '8888888888', 'qazwsxedc', 19, '2', 0);

-- --------------------------------------------------------

--
-- Structure for view `movie_join_genre`
--
DROP TABLE IF EXISTS `movie_join_genre`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `movie_join_genre`  AS  select `m`.`name` AS `name`,`m`.`movie_id` AS `movie_id`,`g`.`genre_id` AS `genre_id`,`m`.`release_date` AS `release_date`,`m`.`total_viewer_ratings` AS `total_viewer_ratings`,`m`.`total_critic_ratings` AS `total_critic_ratings`,`m`.`critics_rating` AS `critics_rating`,`m`.`viewer_rating` AS `viewer_rating`,`m`.`language` AS `language`,`m`.`image` AS `image` from (`movies` `m` join `genre` `g` on(`g`.`movie_id`)) where (`g`.`movie_id` = `m`.`movie_id`) ;

-- --------------------------------------------------------

--
-- Structure for view `movie_join_rating`
--
DROP TABLE IF EXISTS `movie_join_rating`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `movie_join_rating`  AS  select `r`.`id` AS `id`,`r`.`star` AS `star`,`m`.`name` AS `name`,`m`.`movie_id` AS `movie_id`,`r`.`user_id` AS `user_id` from (`ratings` `r` join `movies` `m` on((`m`.`movie_id` = `r`.`movie_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_generes`
--
ALTER TABLE `all_generes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movie_id` (`movie_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rating_id` (`rating_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_generes`
--
ALTER TABLE `all_generes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=974;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49994;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `genre_foreign_key` FOREIGN KEY (`genre_id`) REFERENCES `all_generes` (`genre_id`),
  ADD CONSTRAINT `movie_genre_foreign_key` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `movie_id_foreign_key` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `user_id_foreign_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
