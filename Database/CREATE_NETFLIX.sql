/*==============================================================*/
/* Database name:  FLETNIX                                      */
/* Script:		   DDL			                */
/* Created on:     11-1-2021	                                */
/*==============================================================*/


USE MASTER
GO
IF EXISTS(SELECT * FROM sysdatabases WHERE name = 'FLETNIX')
	DROP DATABASE FLETNIX
GO
CREATE DATABASE FLETNIX
GO

USE FLETNIX
GO

-- ************************************** [Films]

CREATE TABLE [Films]
(
 [movie_id]         int NOT NULL ,
 [title]            varchar(255) NOT NULL ,
 [duration]         int NULL ,
 [publication_year] int NOT NULL ,
 [cover_image]      varbinary(max) NULL ,
 [previous_part]    int NULL ,
 [price]            decimal(5,2) NULL ,
 [URL]              varchar(255) NULL ,


 CONSTRAINT [PK_films] PRIMARY KEY CLUSTERED ([movie_id] ASC)
);
GO


CREATE TABLE [gebruikers]
(
 [emailadres]    varchar(90) NOT NULL ,
 [achternaam]    varchar(50) NOT NULL ,
 [voornaam]      varchar(50) NOT NULL ,
 [abonnement]    int NOT NULL ,
 [startDatumSub] date NOT NULL ,
 [endDatumSub]   date NOT NULL ,
 [username]      varchar(50) NOT NULL ,
 [wachtwoord]    varchar(50) NOT NULL ,
 [land]          varchar(50) NOT NULL ,
 [geslacht]      varchar(50) NOT NULL ,
 [geboortedatum] date NOT NULL ,


 CONSTRAINT [PK_gebruikers] PRIMARY KEY CLUSTERED ([emailadres] ASC)
);
GO

CREATE TABLE [genre]
(
 [genrename]   varchar(50) NOT NULL ,
 [description] varchar(50) NOT NULL ,


 CONSTRAINT [PK_genre] PRIMARY KEY CLUSTERED ([genrename] ASC)
);
GO



CREATE TABLE [filmgenre]
(
 [movie_id]  int NOT NULL ,
 [genrename] varchar(50) NOT NULL ,


 CONSTRAINT [PK_filmgenre] PRIMARY KEY CLUSTERED ([movie_id] ASC, [genrename] ASC),
 CONSTRAINT [FK_87] FOREIGN KEY ([movie_id])  REFERENCES [Films]([movie_id]),
 CONSTRAINT [FK_90] FOREIGN KEY ([genrename])  REFERENCES [genre]([genrename])
);
GO


CREATE NONCLUSTERED INDEX [fkIdx_88] ON [filmgenre] 
 (
  [movie_id] ASC
 )

GO

CREATE NONCLUSTERED INDEX [fkIdx_91] ON [filmgenre] 
 (
  [genrename] ASC
 )

GO


CREATE TABLE [persoon]
(
 [persoon_id] int NOT NULL ,
 [voornaam]   varchar(50) NOT NULL ,
 [achternaam] varchar(50) NOT NULL ,
 [geslacht]   varchar(50) NOT NULL ,


 CONSTRAINT [PK_persoon] PRIMARY KEY CLUSTERED ([persoon_id] ASC)
);
GO

CREATE TABLE [regisseur]
(
 [movie_id]   int NOT NULL ,
 [persoon_id] int NOT NULL ,


 CONSTRAINT [PK_regisseur] PRIMARY KEY CLUSTERED ([movie_id] ASC, [persoon_id] ASC),
 CONSTRAINT [FK_71] FOREIGN KEY ([movie_id])  REFERENCES [Films]([movie_id]),
 CONSTRAINT [FK_78] FOREIGN KEY ([persoon_id])  REFERENCES [persoon]([persoon_id])
);
GO


CREATE NONCLUSTERED INDEX [fkIdx_72] ON [regisseur] 
 (
  [movie_id] ASC
 )

GO

CREATE NONCLUSTERED INDEX [fkIdx_79] ON [regisseur] 
 (
  [persoon_id] ASC
 )

GO


CREATE TABLE [cast]
(
 [movie_id]   int NOT NULL ,
 [persoon_id] int NOT NULL ,
 [rol]        varchar(50) NULL ,


 CONSTRAINT [PK_cast] PRIMARY KEY CLUSTERED ([movie_id] ASC, [persoon_id] ASC),
 CONSTRAINT [FK_81] FOREIGN KEY ([movie_id])  REFERENCES [Films]([movie_id]),
 CONSTRAINT [FK_84] FOREIGN KEY ([persoon_id])  REFERENCES [persoon]([persoon_id])
);
GO

CREATE TABLE [watchhistory]
(
 [movie_id]   int NOT NULL ,
 [emailadres] varchar(90) NOT NULL ,
 [watchdate]  date NOT NULL ,


 CONSTRAINT [PK_watchhistory] PRIMARY KEY CLUSTERED ([movie_id] ASC, [emailadres] ASC),
 CONSTRAINT [FK_93] FOREIGN KEY ([movie_id])  REFERENCES [Films]([movie_id]),
 CONSTRAINT [FK_96] FOREIGN KEY ([emailadres])  REFERENCES [gebruikers]([emailadres])
);
GO


CREATE NONCLUSTERED INDEX [fkIdx_94] ON [watchhistory] 
 (
  [movie_id] ASC
 )

GO

CREATE NONCLUSTERED INDEX [fkIdx_97] ON [watchhistory] 
 (
  [emailadres] ASC
 )

GO

CREATE NONCLUSTERED INDEX [fkIdx_82] ON [cast] 
 (
  [movie_id] ASC
 )

GO

CREATE NONCLUSTERED INDEX [fkIdx_85] ON [cast] 
 (
  [persoon_id] ASC
 )

GO


CREATE TABLE [content]
(
 [pagina_id] int NOT NULL ,
 [content_id] int NOT NULL ,  
 [text]       NVARCHAR(MAX) NOT NULL ,


 CONSTRAINT [PK_content] PRIMARY KEY CLUSTERED ([content_id] ASC,[pagina_id] ASC)
);
GO


