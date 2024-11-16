# Yug Patel, 11/15/2024, IT202-001,  Phase 4 Assignment: Input filtering and CSS Styling, yp325@njit.edu
CREATE TABLE BoardSportsCategories (
BoardCategoryID       INT(11)        NOT NULL,
BoardCategoryCode     VARCHAR(255)   NOT NULL   UNIQUE,
BoardCategoryName     VARCHAR(255)   NOT NULL,
BoardCategoryAisleNumber INT(11)   NOT NULL, 
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( BoardCategoryID )
);
-- Wetsuit, skateboarding shoes, rash guard, snowboard pants, mountain biking helmet
INSERT INTO BoardSportsCategories
(BoardCategoryID, BoardCategoryCode, BoardCategoryName, BoardCategoryAisleNumber, DateCreated)
VALUES
(100, 'WTS', 'Wetsuit', 1, NOW());
INSERT INTO BoardSportsCategories
(BoardCategoryID, BoardCategoryCode, BoardCategoryName, BoardCategoryAisleNumber, DateCreated)
VALUES
(200, 'SKBS', 'Skateboarding shoes', 2, NOW());

INSERT INTO BoardSportsCategories
(BoardCategoryID, BoardCategoryCode, BoardCategoryName, BoardCategoryAisleNumber, DateCreated)
VALUES
(300, 'RG', 'Rash Guard', 3, NOW());

INSERT INTO BoardSportsCategories
(BoardCategoryID, BoardCategoryCode, BoardCategoryName, BoardCategoryAisleNumber, DateCreated)
VALUES
(400, 'SNBP', 'Snowboarding pants', 4, NOW());

INSERT INTO BoardSportsCategories
(BoardCategoryID, BoardCategoryCode, BoardCategoryName, BoardCategoryAisleNumber, DateCreated)
VALUES
(500, 'MTBH', 'Mountain Biking helmet', 5, NOW());

SELECT * from BoardSportsCategories