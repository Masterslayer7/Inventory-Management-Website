# Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
CREATE TABLE BSAProducts (
BSAProductID        INT(11)        NOT NULL,
BSAProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
BSAProductName      VARCHAR(255)   NOT NULL,
BSADescription      TEXT           NOT NULL,
BSACategoryID       INT(11)        NOT NULL,
BSAWholesalePrice   DECIMAL(10,2)  NOT NULL,
BSAListPrice        DECIMAL(10,2)  NOT NULL,
BSASize             VARCHAR(2)     NOT NULL,
DateCreated         DATETIME       NOT NULL,
PRIMARY KEY ( BSAProductID )
);

INSERT INTO BSAProducts
(BSAProductID, BSAProductCode, BSAProductName, BSADescription, BSACategoryID, BSAWholesalePrice, BSAListPrice, BSASize, DateCreated)
VALUES
(1000, 'NWTS', 'Neo Wetsuit', 'A neoprene suit designed to provide thermal insulation and protect the wearer in cold water environments for sports like surfing and diving.', 100, 100.00, 199.99, 'L', NOW());
INSERT INTO BSAProducts
(BSAProductID, BSAProductCode, BSAProductName, BSADescription, BSACategoryID, BSAWholesalePrice, BSAListPrice, BSASize, DateCreated)
VALUES
(2000, 'DSKS', 'Dura Skateboarding shoes', 'Durable shoes with flat soles and enhanced grip, specifically designed to provide stability and protection during skateboarding.', 200, 30.00, 100.00, 'L', NOW());

SELECT * FROM BSAProducts