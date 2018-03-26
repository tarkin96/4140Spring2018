create table users (username VARCHAR(22), password VARCHAR(22), primary key(username));
SHOW Tables;
DESCRIBE users;
INSERT INTO users VALUES ('wadeadmin', 'adminpassword');
INSERT INTO users VALUES ('ModUser', 'modpassword');
SELECT username, password from users;
