-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 30 Juillet 2011 à 01:21
-- Version du serveur: 5.0.88
-- Version de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `idee2000`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL auto_increment,
  `contenu` longtext,
  `employe_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_commentaires_employes1` (`employe_id`),
  KEY `fk_commentaires_utilisateurs1` (`utilisateur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `contenu`, `employe_id`, `utilisateur_id`) VALUES
(1, 'Super employé', 1, 13);

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(255) default NULL,
  `statut` varchar(255) default NULL,
  `grade` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `departements`
--

INSERT INTO `departements` (`id`, `nom`, `statut`, `grade`) VALUES
(1, 'compta', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(45) default NULL,
  `description` text,
  `nom_fichier` varchar(245) default NULL,
  `employe_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_documents_employes1` (`employe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `documents`
--

INSERT INTO `documents` (`id`, `nom`, `description`, `nom_fichier`, `employe_id`) VALUES
(1, 'Acte de naissance', 'Acte de naissance légalisé.', 'acte.pdf', 1),
(2, 'lettre ', 'Lettre de motivation', 'lettreDeMotivation.doc', 1),
(3, 'CV', 'Curriculum vitae', 'cv.docx', 1),
(4, 'fiche de paiement', 'Fiche de paiement', 'tableur.xls', 1),
(5, 'Archive', 'documents compressés', 'archives.zip', 1),
(6, 'presentation', 'Diapo Présentation de projet', 'diapo.ppt', 1),
(7, 'Spot video', 'Publicité télé', 'spot.mp4', 1);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE IF NOT EXISTS `employes` (
  `id` int(11) NOT NULL auto_increment,
  `matricule` varchar(255) default NULL,
  `nom` varchar(45) default NULL,
  `prenom` varchar(45) default NULL,
  `genre` varchar(45) default NULL,
  `categorie` varchar(45) default NULL,
  `grade` varchar(255) NOT NULL,
  `date_embauche` date default NULL,
  `date_naissance` date default NULL,
  `lieu_naissance` varchar(45) default NULL,
  `numero_assurance` varchar(20) default NULL,
  `nbre_enfant` int(2) default NULL,
  `adresse` varchar(255) default NULL,
  `telephone1` varchar(15) default NULL,
  `telephone2` varchar(15) default NULL,
  `email` varchar(45) default NULL,
  `photo` varchar(60) default NULL,
  `departement_id` int(11) NOT NULL,
  `filesize` int(11) NOT NULL,
  `mimetype` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_employes_departements` (`departement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `employes`
--

INSERT INTO `employes` (`id`, `matricule`, `nom`, `prenom`, `genre`, `categorie`, `grade`, `date_embauche`, `date_naissance`, `lieu_naissance`, `numero_assurance`, `nbre_enfant`, `adresse`, `telephone1`, `telephone2`, `email`, `photo`, `departement_id`, `filesize`, `mimetype`, `dir`) VALUES
(1, '234556', 'bidul', 'bobo', 'M', 'CD', '', '2011-07-24', '2011-07-24', 'ici', '2344500', 2, 'azaz', '00000000', '00000000', 'demo@go.fr', 'zerr.jpg', 1, 0, '', ''),
(2, '909HFSIOJ', 'Nkoma', 'Jean', 'M', 'AE', 'Chef', '2011-07-27', '2011-07-27', 'France', '9323NFUJ328', 2, 'France', '0678905487', '0648939890', 'nkomajean@demo.fr', 'Koala.jpg', 1, 780831, 'image/jpeg', 'img\\employe\\photo'),
(3, 'IVCH87E48IJVDSH80', 'Ngoma', 'Martine', 'M', 'AM', 'employé', '0000-00-00', '0000-00-00', 'Paris', '88923BHIJFC02190', 3, 'Rue bidule', '0632863190', '0632863190', 'ngomamartin@yahoo.fr', 'Hydrangeas.jpg', 1, 595284, 'image/jpeg', 'img\\model\\field');
SELECT DATE_FORMAT( `date_naissance` , '%d-%m-%y' ) FROM `employes`;
SELECT DATE_FORMAT( `date_embauche`` , '%d-%m-%y' ) FROM `employes`;
-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE IF NOT EXISTS `groupes` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(45) default NULL,
  `created` date default NULL,
  `modified` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `groupes`
--

INSERT INTO `groupes` (`id`, `nom`, `created`, `modified`) VALUES
(1, 'admin', '2011-07-24', '2011-07-24');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(45) default NULL,
  `password` varchar(45) default NULL,
  `created` datetime default NULL,
  `lastvisitDate` datetime default NULL,
  `modified` datetime default NULL,
  `groupe_id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_utilisateurs_groupes1` (`groupe_id`),
  KEY `fk_utilisateurs_employes1` (`employe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `password`, `created`, `lastvisitDate`, `modified`, `groupe_id`, `employe_id`) VALUES
(13, 'darrelo', 'b5f51701f0a860095fd19f7090a5fd41', '2011-07-25 04:30:52', '2011-07-25 04:27:00', '2011-07-25 04:30:52', 1, 1),
(19, 'nkoma', '95710b805afb071b4adede0744864389abcf4c9f', '2011-07-28 15:06:46', '2011-07-29 03:00:09', '2011-07-29 03:00:09', 1, 2),
(22, 'darrelo2', '95710b805afb071b4adede0744864389abcf4c9f', '2011-07-28 17:53:29', '2011-07-30 01:14:32', '2011-07-30 01:14:32', 1, 3);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fk_commentaires_employes1` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaires_utilisateurs1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `fk_documents_employes1` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `fk_employes_departements` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `fk_utilisateurs_employes1` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateurs_groupes1` FOREIGN KEY (`groupe_id`) REFERENCES `groupes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
