/* DB */
CREATE DATABASE IF NOT EXISTS securecode;

use securecode;

CREATE TABLE IF NOT EXISTS users (
    user VARCHAR(50) NOT NULL PRIMARY KEY,
    pass VARCHAR(250),
    twofactor VARCHAR(250)
);

/* Insert [alex - admin1234]*/
INSERT INTO users (user, pass, twofactor)
VALUES ('alex', '$2y$10$wIVcEFAU/yRgc1CRuAq4IevG55ton8tgHOkliQMRI3wRJmaj5Dife','MLMZI6XDP2NEGGINRLD2KCJ7FSV2BTHY'); 