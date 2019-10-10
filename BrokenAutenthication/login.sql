CREATE DATABASE IF NOT EXISTS securecode;

use securecode;

CREATE TABLE IF NOT EXISTS users (
    user varchar(50) PRIMARY KEY;
    pass varchar(255);
);

INSERT INTO users VALUES ('alex','hola');