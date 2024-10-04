CREATE TABLE boardSportsManagers (
boardSportsManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
password               VARCHAR(64)    NOT NULL,
pronouns               VARCHAR(60)    NOT NULL,
firstName              VARCHAR(60)    NOT NULL,
lastName               VARCHAR(60)    NOT NULL,
dateCreated            DATETIME       NOT NULL,
PRIMARY KEY (boardSportsManagerID)
);

INSERT INTO boardSportsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('bob@boardsports.com', SHA2('myL0ngP@ssword', 256), 'He/Him', 'Bob', 'Smith', NOW());

INSERT INTO boardSportsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('aaron@boardsports.com', SHA2('myL0ngP@ssword', 256), 'He/Him', 'Aaron', 'Owens', NOW());

INSERT INTO boardSportsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('Hellen@boardsports.com', SHA2('myL0ngP@ssword', 256), 'She/Her', 'Hellen', 'Ross', NOW());