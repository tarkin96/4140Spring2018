create table if not exists `Streamers` (`Streamer_Name` VARCHAR(30), City VARCHAR(100), 
	`Country_or_State` VARCHAR(50), `Stream_Table_Name` VARCHAR(50), `Moderators_Table_Name` VARCHAR(50),
    primary key(`Streamer_Name`));   
SHOW Tables;
DESCRIBE `Streamers`;
INSERT INTO `Streamers` VALUES ('Plaue_4140_S2018', 'Clemson', 'South Carolina', 'Plaue_4140_S2018_Streams', 'Plaue_4140_S2018_Mods');

create table if not exists `Plaue_4140_S2018_Streams` (`Stream_Name` VARCHAR(50), `Subject` VARCHAR(300), 
	`URL` VARCHAR(1000), `Chat_Table_Name` VARCHAR(50), primary key(`Stream_Name`)); 
INSERT INTO `Plaue_4140_S2018_Streams` VALUES ('Studio Day', 'For our studio', 'www.google.com', 'Studio_Day_Chat');
DESCRIBE `Plaue_4140_S2018_Streams`;

create table if not exists `Plaue_4140_S2018_Mods` (`Mod_User_Name` VARCHAR(50), primary key(`Mod_User_Name`));
INSERT INTO `Plaue_4140_S2018_Mods` VALUES ('ModUser');
DESCRIBE `Plaue_4140_S2018_Mods`;

create table if not exists `Studio_Day_Chat` (`User_Name` VARCHAR(50), `Message` VARCHAR(200));
create table if not exists `Studio_Day_Chat2` (`User_Name` VARCHAR(50), `Message` VARCHAR(200));
create table if not exists `Studio_Day_Chat3` (`User_Name` VARCHAR(50), `Message` VARCHAR(200));
describe `Studio_Day_Chat2`;
SELECT * FROM `Studio_Day_Chat2`;
INSERT INTO `Studio_Day_Chat` VALUES ('wade', 'hello!');
INSERT INTO `Studio_Day_Chat` VALUES ('wade', 'Government suicks!');
INSERT INTO `Studio_Day_Chat2` VALUES ('bob', 'This is horrible.');