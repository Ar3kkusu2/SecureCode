/* DB */
CREATE DATABASE IF NOT EXISTS securecode;

use securecode;

CREATE TABLE IF NOT EXISTS users (
    user VARCHAR(50) NOT NULL PRIMARY KEY,
    pass VARCHAR(250)
);

/* Insert [alex - admin1234*/
INSERT INTO users (user, pass)
VALUES ('alex', 'admin1234'); 