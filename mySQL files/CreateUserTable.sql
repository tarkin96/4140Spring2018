create table users (username VARCHAR(22), password VARCHAR(22), primary key(username));
SHOW Tables;
DESCRIBE users;
INSERT INTO users VALUES ('wadeadmin', 'adminpassword');
SELECT username, password from users;
