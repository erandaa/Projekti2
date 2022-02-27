
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `lulishjta
--


CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `brands` (`id`, `image`) VALUES
(10, '../images/teleflora.jpg'),
(11, '../images/teleflora.jpg'),
(12, '../images/teleflora.jpg'),
(13, '../images/teleflora.jpg');


CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `cart` (`user_id`, `product_id`) VALUES
(74, 32),
(74, 33);



CREATE TABLE `categories` (
  `emri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `categories` (`emri`) VALUES
('Rose'),
('Tulip'),
('Butter Cup'),
('Calla Lilies'),
('Carnations'),
('Crocus '),
('Daisies'),
('Dahlias'),
('Daffodil '),
('Lilies');


CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `is_read` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `messages` (`id`, `emri`, `mbiemri`, `email`, `msg`, `is_read`) VALUES
(13, 'Eranda', 'Alidemi', 'eraa@lulishtja.com', 'Pershendetje, \r\n\r\ndesha te informohem rreth porosis time qe kam relizuar.', 0);



CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `cmimi` float NOT NULL,
  `pershkrimi` text NOT NULL,
  `sasia` int(11) NOT NULL,
  `kategoria` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `prodhuesi` varchar(255) DEFAULT NULL,
  `is_promoted` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `products` (`id`, `emri`, `cmimi`, `pershkrimi`, `sasia`, `kategoria`, `image`, `admin_id`, `prodhuesi`, `is_promoted`) VALUES
(30,'Teleflora',29.9,'Put a smile on their face - and in their heart - with this happy as can be bouquet! Hand-delivered in a food safe mug for years of satisfied sipping, this cheerful gift of roses and mums spreads happiness wherever it goes.',15,'Rose','../images/teleflora.jpg',70,'Gjilan',0),

(31,'Teleflora s Enchanted Cottage',3.9,'This magical bouquet will be at home in a cottage, a condo, a studio or an estate. It is so pretty it will be appreciated by all those lucky enough to receive it. Enchant someone today!',20,'Tulip','../images/enchanted.jpg',70,'Ferizaj',1),

(32,'Violets and butterflies',19.9,'Velvety violets, beautiful butterflies, a radiant ribbon and a basketful of delight. This gift delivers so much and it is perfect for so many occasions. Think birthdays, baby showers, showering someone with love. When it comes to this basket, it is all good!',14,'Rose','../images.violets.jpg',70,'Gjilan',1),

(33,'Money Tree',21.0,'Go ahead, make them blush! This luxurious bouquet of roses, lilies and hydrangea in fresh shades of pink, peach and green is sure to put some cheerful color in their cheeks! The delicate ribbons dress up the graceful keepsake vase.',17,'Carnations','../images/Stylish.jpg]',70,'Ferizaj',0),

(34,'Make a wish',13.5,'Harmonize the five elements within a space, bring good fortune and prosperity, and improve the flow of "chi" with a money tree! The money tree - or Pachira - is thought to bring good luck, and is a thoughtful gift for any home or office.',5,'Carnations','../images/pretty.jpg',70,'Prishtine',0),

(35,'Pretty Please',14.3,'A summery mix of yellow daisy chrysanthemums, purple asters and red and orange carnations - arranged in a clear ginger vase and adorned with a cheerful green plaid bow - will make their wishes come true!',8,'Crocus ','../images/wish.jpg]',70,'Gjilan',1),

(36,'Cotton  Candy',52.0,'Looking for the prettiest bouquet in town? We have got the perfect all-around choice! Pretty Please is a flower bouquet with all the right stuff - a lovely mix of fresh flowers in breezy shades of pink, white, lavender and more at a wonderfully reasonable price, all tied up with a big pink bow. A great way to make someone smile.',70,'Crocus ','../images/cotton.jpg',1,'Prishtine',0),

(37,'Lovely  Luxe Bouquet',70.0,'What a sweet way to celebrate the arrival of sugar and spice and everything nice! This pretty arrangement will delight any new mom or mom-to-be, that is for sure! Feminine flowers fill a charming ribbon-wrapped vase. It is a beautiful thing!',6,'Crocus ','../images/money.jpg',72,'Ferizaj',0),

(38,'Stylish Plant Assortment',86.0,'Pamper your lovely with this luxurious lavender and cream bouquet! Ravishing roses, fragrant lilies and delicate lisianthus create a chic, sweet surprise they will never forget.',8,'Butter Cup','../images/Luxe.jpg',70,'Gjilan',1),

(39,'Blush Life Bouquet',7.0,'PWhat a magical mix of flowering and green plants! This stylish plant assortment is simply stunning. The mix of colors and textures will make any room come alive!',4,'Daisies','../images/Blush.jpg',72,'Prishtine',1);


CREATE TABLE `rrethnesh` (
  `id` int(11) NOT NULL,
  `text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `rrethnesh` (`id`, `text`) VALUES
(1, '    Mirësevini     ');

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `slider` (`id`, `image`) VALUES
(16, '../images/Stylish.jpg'),
(17, '../images/teleflora.jpg'),
(18, '../images/violets.jpg');

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_admin` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `time_created`, `is_admin`) VALUES
(70, 'Eranda', 'Alidema', 'erandaalidema@lulishtja.com', 'lulishtja123.', '2022-02-27 17:28:14', 1),
(72, 'Eltina', 'Alidema', 'eltinaalidema@gmail.com', 'lulishtja222.', '2022-02-27 17:32:14', 1),
(73, 'Zjarrta', 'Alidema', 'zjarrta@gmail.com', 'lulishtja1232.', '2022-02-27 17:45:14', 1),
(74, 'Iljas', 'Neziri', 'lazi@gmail.com', 'lulishtja2322.', '2022-02-27 17:53:14', 0);


ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cart`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

ALTER TABLE `categories`
  ADD PRIMARY KEY (`emri`);

ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoria` (`kategoria`);

ALTER TABLE `rrethnesh`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;


ALTER TABLE `rrethnesh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;


ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);


ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`kategoria`) REFERENCES `categories` (`emri`);
COMMIT;
