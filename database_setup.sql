DROP TABLE IF EXISTS notes;
DROP TABLE IF EXISTS flashcards;

CREATE TABLE notes(ID int NOT NULL AUTO_INCREMENT,
                   subject varchar(20),
                   title varchar(20),
                   note varchar(300),
                   PRIMARY KEY (ID)
);

CREATE TABLE flashcards(ID int NOT NULL AUTO_INCREMENT,
                        subject varchar(20),
                        term varchar(20),
                        definition varchar(50),
                        PRIMARY KEY (ID)
);