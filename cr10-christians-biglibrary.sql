-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Nov 2020 um 11:07
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10-christians-biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `isbn_code` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `book_status` varchar(255) DEFAULT NULL,
  `author_fname` varchar(255) DEFAULT NULL,
  `author_lname` varchar(255) DEFAULT NULL,
  `pub_name` varchar(255) DEFAULT NULL,
  `pub_address` varchar(255) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `books`
--

INSERT INTO `books` (`book_id`, `image`, `title`, `author`, `isbn_code`, `short_description`, `publish_date`, `type`, `book_status`, `author_fname`, `author_lname`, `pub_name`, `pub_address`, `size`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/commons/c/c3/Remarque_Im_Westen_nichts_Neues_1929.jpg', 'Im Westen nichts Neues (1928)', 'Remarque Erich Maria', 'ISBN 978-3-525-30015-2', 'Im Westen nichts Neues ist ein 1928 verfasster Roman von Erich Maria Remarque, der die Schrecken des Ersten Weltkriegs aus der Sicht eines jungen Soldaten schildert.', '1929-01-27', 'book', 'available', 'Erich Maria', 'Remarque', 'Propyläen Verlag ', 'Any-Str. 25, 1010 Wien', 'big'),
(7, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Harry_Potter_wordmark.svg/1920px-Harry_Potter_wordmark.svg.png', 'Harry Potter', 'Rowling', 'ISBN-1281- 899-12-3984', 'Harry Potter ist eine Kinder- und Jugendromanreihe der englischen Schriftstellerin Joanne K. Rowling. Erzählt wird die Geschichte der titelgebenden Figur Harry Potter, der an seinem elften Geburtstag von seiner magischen Herkunft erfährt.', NULL, 'book', 'Available', NULL, NULL, 'Pinguin', NULL, NULL),
(9, 'https://images-na.ssl-images-amazon.com/images/I/91ZtIKqk57L._SX342_.jpg', 'From Dusk Till Dawn', 'Quentin Tarantino', '----', 'From Dusk Till Dawn ist ein Film von Robert Rodriguez aus dem Jahr 1996. Im ersten Teil ein Gangsterfilm und Roadmovie, wird er im zweiten Teil ein Vampir-Splatterfilm mit viel schwarzem Humor. ', NULL, 'DVD', NULL, NULL, NULL, 'Miramax', NULL, NULL),
(10, 'https://img.discogs.com/QCz0pNuL9bC5YhEiM5kv-iyKbdI=/fit-in/600x589/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-7633362-1558006998-6082.jpeg.jpg', 'The Action Is Go', 'Fu Manchu', '----', 'The Action is Go is the fourth studio album by California stoner rock group Fu Manchu. It features new drummer Brant Bjork (Kyuss) and new lead guitarist Bob Balch', NULL, 'CD', 'Available', NULL, NULL, 'Mammoth Records', NULL, NULL),
(11, 'https://upload.wikimedia.org/wikipedia/en/4/45/Good_the_bad_and_the_ugly_poster.jpg', 'The Good, The Ugly, The Bad', 'Sergio Leone', '----', 'The Good, the Bad and the Ugly (Italian: Il buono, il brutto, il cattivo, lit. The good, the ugly, the bad) is a 1966 Italian epic Spaghetti Western film directed by Sergio Leone and starring Clint Eastwood as ', NULL, 'DVD', 'Not Available', NULL, NULL, 'Produzioni Europee Associate (Italy),  United Artists (US)', NULL, NULL),
(13, 'https://images-na.ssl-images-amazon.com/images/I/41D2OeRVN3L._SX303_BO1,204,203,200_.jpg', 'Candide, oder der Optimismus', 'Voltaire', 'ISBN-1555- 567-52-5204', 'Candide oder der Optimismus ist eine 1759 unter dem Pseudonym Docteur Ralph erschienene satirische Novelle des französischen Philosophen Voltaire.', NULL, 'Book', 'Available', NULL, NULL, 'Pinguin', NULL, NULL),
(14, 'https://www.klett-cotta.de/media/1/9783608960891.jpg', 'Der Herr der Ringe I', 'J.J.R Tolkien', 'ISBN-4641- 217-59-1232', 'Der Herr der Ringe (englischer Originaltitel: The Lord of the Rings) ist ein Roman von John Ronald Reuel Tolkien. Er gehört zu den kommerziell erfolgreichsten Romanen des 20. Jahrhunderts, ist ein Klassiker der Fantasy-Literatur und gilt als grundlegendes Werk der High Fantasy. Im englischen Original in drei Bänden zu jeweils zwei Büchern plus Appendizes in den Jahren 1954/1955 veröffentlicht, erschien die erste deutsche Übersetzung 1969/1970. Weltweit wurde der Roman etwa 150 Millionen Mal verkauft.', NULL, 'Book', 'Not Available', NULL, NULL, 'Klett-Cotta', NULL, NULL),
(15, 'https://www.klett-cotta.de/media/1/9783608960891.jpg', 'Der Herr der Ringe II', 'J.J.R Tolkien', 'ISBN-7681- 199-12-4567', 'https://www.klett-cotta.de/media/1/9783608960891.jpg', NULL, 'Book', 'Available', NULL, NULL, 'Klett-Cotta', NULL, NULL),
(16, 'https://www.klett-cotta.de/media/1/9783608960891.jpg', 'Der Herr der Ringe III', 'J.J.R Tolkien', 'ISBN-3455- 532-532-4529', 'https://www.klett-cotta.de/media/1/9783608960891.jpg', NULL, 'Book', 'Available', NULL, NULL, 'Klett-Cotta', NULL, NULL),
(17, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Hermann_Hesse%2C_Der_Steppenwolf_%28st_175%2C_1974%29.jpg/1024px-Hermann_Hesse%2C_Der_Steppenwolf_%28st_175%2C_1974%29.jpg', 'Der Steppenwolf', 'Hermann Hesse ', 'ISBN-1341-798-9319-12', 'Der Steppenwolf ist ein 1927 erschienener Roman[1] von Hermann Hesse. Er schildert die Erlebnisse der Hauptfigur Harry Haller, eines Alter Egos des Verfassers. Ähnlichkeiten der Figur Hallers zu Hermann Hesse sowie etwa zum Faust von Johann Wolfgang von Goethe werden im Text mehrfach angedeutet oder sind offensichtlich, zum Beispiel stimmen die Initialen von Harry Haller und Hermann Hesse überein.  Haller leidet an der Zerrissenheit seiner Persönlichkeit: Seine menschliche, bürgerlich-angepasste Seite und seine steppenwölfische, einsame, sozial- und kulturkritische Seite bekämpfen sich und blockieren Hallers künstlerische Entwicklung. Der Weg der Heilung ist die Versöhnung beider Seiten im Humor, im Lachen über sich selbst und das Ungenügen in Kultur und Gesellschaft. Erst mit der Betrachtung der Wirklichkeit vom Standpunkt des Humors werden Hallers weitere, im Roman nicht mehr beschriebenen Schritte auf dem Weg seiner künstlerischen Vollendung möglich. ', NULL, 'Book', 'Not Available', NULL, NULL, 'Suhrkamp Verlag', NULL, NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
