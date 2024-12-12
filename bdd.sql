drop database if exists E_commerce;
create database if not exists E_commerce;
use E_commerce;

DROP TABLE IF EXISTS `brand` ;

CREATE TABLE IF NOT EXISTS `brand` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT 'Le nom de la marque',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création de la marque',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la dernière mise à jour de la marque',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

DROP TABLE IF EXISTS `category` ;

CREATE TABLE IF NOT EXISTS `category` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(64) NOT NULL COMMENT 'Le nom de la catégorie',
  `subtitle` VARCHAR(64) NULL,
  `picture` VARCHAR(128) NULL COMMENT 'LURL de limage de la catégorie (utilisée en home, par exemple)',
  `home_order` TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'Lordre daffichage de la catégorie sur la home (0=pas affichée en home)',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création de la catégorie',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la dernière mise à jour de la catégorie',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `type` ;

CREATE TABLE IF NOT EXISTS `type` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(64) NOT NULL COMMENT 'Le nom du type',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création de la catégorie',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la dernière mise à jour de la catégorie',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `product` ;

CREATE TABLE IF NOT EXISTS `product` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT 'Le nom du produit',
  `description` TEXT NULL COMMENT 'La description du produit',
  `picture` VARCHAR(128) NULL COMMENT 'LURL de limage du produit',
  `price` DECIMAL(10,2) NOT NULL DEFAULT 0 COMMENT 'Le prix du produit',
  `rate` TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'Lavis sur le produit, de 1 à 5',
  `status` TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'Le statut du produit (0=non renseignée, 1=dispo, 2=pas dispo)',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création du produit',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la dernière mise à jour du produit',
  `brand_id` INT UNSIGNED NOT NULL,
  `category_id` INT UNSIGNED NULL,
  `type_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_brand_idx` (`brand_id` ASC),
  INDEX `fk_product_category1_idx` (`category_id` ASC),
  INDEX `fk_product_type1_idx` (`type_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Data for table `brand`
-- -----------------------------------------------------
START TRANSACTION;

INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'telescoupe', '2018-10-17 9:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'starsmash', '2018-10-17 9:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (3, 'starfield', '2018-10-17 9:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (4, 'SpaceZOOM ULTRA PRO MAX GIGA V7', '2018-10-17 9:00:00', NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `category`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (1, 'Enfant', 'Dernier modèle', '/public/image/picture.svg', 1, '2018-10-17 8:00:00', NULL);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (2, 'Amateur', NULL, '/public/image/picture.svg',1, '2018-10-17 8:00:00', NULL);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (3, 'Professionel', NULL, '/public/image/picture.svg', 0, '2018-10-17 8:00:00', NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `type`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'Grosse lentille', '2018-10-17 10:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'petite lentille', '2018-10-17 10:00', NULL);


COMMIT;


-- -----------------------------------------------------
-- Data for table `product`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (1, 'Telescope pour amateur', 'Proinde concepta rabie saeviore, quam desperatio incendebat et fames, amplificatis viribus ardore incohibili in excidium urbium matris Seleuciae efferebantur, quam comes tuebatur Castricius tresque legiones bellicis sudoribus induratae.','/public/image2/telescope_amateur.jpg','110', 4, 1, '2018-10-17 11:00:00', NULL, 1, 2, 1);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (2, 'Telescope pour amateur', 'Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.', '/public/image2/telescope_amateur2.png', '115', 5, 1, '2018-10-17 11:00:00', NULL, 2, 2, 2);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (3, 'Telescope pour enfant', 'Homines enim eruditos et sobrios ut infaustos et inutiles vitant, eo quoque accedente quod et nomenclatores adsueti haec et talia venditare, mercede accepta lucris quosdam et prandiis inserunt subditicios ignobiles et obscuros.', '/public/image2/telescope_enfant.jpg', '50', 5, 2, '2018-10-17 11:00:00', NULL, 1, 1, 1);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (4, 'Telescope professionel', 'Sed si ille hac tam eximia fortuna propter utilitatem rei publicae frui non properat, ut omnia illa conficiat, quid ego, senator, facere debeo, quem, etiamsi ille aliud vellet, rei publicae consulere oporteret?', '/public/image2/telescope_pro.jpg', '330', 5, 1, '2018-10-17 11:00:00', NULL, 3, 3, 2);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (5, 'Telescope professionel', 'Ut enim benefici liberalesque sumus, non ut exigamus gratiam (neque enim beneficium faeneramur sed natura propensi ad liberalitatem sumus), sic amicitiam non spe mercedis adducti sed quod omnis eius fructus in ipso amore inest, expetendam putamus.', '/public/image2/telescope_pro2.jpg', '4300', 5, 1, '2018-10-17 11:00:00', NULL, 3, 3, 2);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (6, 'Telescope professionel', 'Tempore quo primis auspiciis in mundanum fulgorem surgeret victura dum erunt homines Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem.', '/public/image2/telescope_pro3.jpg', '54000id', 5, 1, '2018-10-17 11:00:00', NULL, 4, 3, 2);

Select * from product;
Select * from brand;
Select * from type;
Select * from category;


COMMIT;