create table if not exists `Streamers` (`Streamer_Name` VARCHAR(30), City VARCHAR(100), 
	`Country_or_State` VARCHAR(50), `Stream_Table_Name` VARCHAR(50), `Moderators_Table_Name` VARCHAR(50),
    primary key(`Streamer_Name`));   
SHOW Tables;
DESCRIBE `Streamers`;
INSERT INTO `Streamers` VALUES ('Plaue_4140_S2018', 'Clemson', 'South Carolina', 'Plaue_4140_S2018_Streams', 'Plaue_4140_S2018_Mods');

create table if not exists `Plaue_4140_S2018_Streams` (`Stream_Name` VARCHAR(50), `Subject` VARCHAR(300), 
	`URL` VARCHAR(1000), primary key(`Stream_Name`)); 
INSERT INTO `Plaue_4140_S2018_Streams` VALUES ('Studio Day', 'For our studio', 'www.google.com');
DESCRIBE `Plaue_4140_S2018_Streams`;

create table if not exists `Plaue_4140_S2018_Mods` (`Mod_User_Name` VARCHAR(50), primary key(`Mod_User_Name`));
INSERT INTO `Plaue_4140_S2018_Mods` VALUES ('ModUser');
DESCRIBE `Plaue_4140_S2018_Mods`;