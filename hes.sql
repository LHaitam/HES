-- Base de données : `hes`
-- Pour SQL Server, nous devons d'abord créer la base de données 'hes'
CREATE DATABASE hes;

-- Utiliser la base de données 'hes'
USE hes;

-- Structure de la table `hes`
CREATE TABLE hes (
  NbrPrsn INT NOT NULL,
  NbrJsA INT NOT NULL,
  GazYTD INT NOT NULL,
  GazPLAN INT NOT NULL,
  ConsoElecYTD INT NOT NULL,
  ConsoElecPLAN INT NOT NULL,
  ConsoEauYTD INT NOT NULL,
  ConsoEauPLAN INT NOT NULL,
  RecyclYTD INT NOT NULL,
  RecyclPLAN INT NOT NULL,
  DateAjout DATETIME NOT NULL
);

-- Pour SQL Server, l'option par défaut est d'utiliser le moteur de stockage 'InnoDB',
-- qui n'est pas disponible sur SQL Server. Il n'est pas nécessaire de spécifier le moteur de stockage pour SQL Server.

-- Pour que les colonnes auto-incrémentées fonctionnent correctement dans SQL Server, nous devons utiliser l'identité (IDENTITY)
-- pour définir une colonne auto-incrémentée.
-- Voici un exemple de modification de la colonne 'NbrPrsn' pour qu'elle soit auto-incrémentée dans SQL Server :

-- Pour ajouter une colonne auto-incrémentée dans SQL Server :
-- ALTER TABLE hes ADD NbrPrsn INT IDENTITY(1,1) PRIMARY KEY;

-- Pour modifier la clé primaire de la table pour utiliser la colonne auto-incrémentée :
-- ALTER TABLE hes DROP PRIMARY KEY;
-- ALTER TABLE hes ADD PRIMARY KEY (NbrPrsn);

-- Assurez-vous d'exécuter ces instructions dans SQL Server Management Studio (SSMS) pour créer la table 'hes'
-- avec la colonne auto-incrémentée.

-- Pour insérer des données dans la table 'hes', vous pouvez utiliser l'instruction INSERT INTO de la manière suivante :

-- INSERT INTO hes (NbrPrsn, NbrJsA, GazYTD, GazPLAN, ConsoElecYTD, ConsoElecPLAN, ConsoEauYTD, ConsoEauPLAN, RecyclYTD, RecyclPLAN, DateAjout)
-- VALUES (valeur1, valeur2, valeur3, ..., valeur11);

-- Remplacez 'valeur1', 'valeur2', ... par les valeurs que vous souhaitez insérer pour chaque colonne.

-- N'oubliez pas de définir le nom d'utilisateur et le mot de passe appropriés pour vous connecter à SQL Server dans votre application PHP.

