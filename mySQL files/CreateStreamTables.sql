create table if not exists `Streamers` (`Streamer_Name` VARCHAR(30), City VARCHAR(100), 
	`Country_or_State` VARCHAR(50), `Stream_Table_Name` VARCHAR(50), `Moderators_Table_Name` VARCHAR(50),
    primary key(`Streamer_Name`));   

INSERT INTO `Streamers` VALUES ('Plaue_4140_S2018', 'Clemson', 'South Carolina', 'Plaue_4140_S2018_Streams', 'Plaue_4140_S2018_Mods');
INSERT INTO `Streamers` VALUES ('Streamer2', 'Here', 'There', 'Streamer2_Streams', 'Streamer2_Mods');
INSERT INTO `Streamers` VALUES ('Streamer3', 'Nowhere', 'Everywhere', 'Streamer3_Streams', 'Streamer3_Mods');

create table if not exists `Plaue_4140_S2018_Streams` (`Stream_Name` VARCHAR(50), `Subject` VARCHAR(300), 
	`URL` VARCHAR(1000), `Chat_Table_Name` VARCHAR(50), primary key(`Stream_Name`)); 
create table if not exists `Streamer2_Streams` (`Stream_Name` VARCHAR(50), `Subject` VARCHAR(300), 
	`URL` VARCHAR(1000), `Chat_Table_Name` VARCHAR(50), primary key(`Stream_Name`)); 
create table if not exists `Streamer3_Streams` (`Stream_Name` VARCHAR(50), `Subject` VARCHAR(300), 
	`URL` VARCHAR(1000), `Chat_Table_Name` VARCHAR(50), primary key(`Stream_Name`)); 
    
INSERT INTO `Plaue_4140_S2018_Streams` VALUES ('Studio_Day', 'For our studio', 'http://player.twitch.tv/?channel=Ninja', 'Studio_Day_Chat');
INSERT INTO `Streamer2_Streams` VALUES ('Stream2', 'Not used', 'https://player.twitch.tv/?channel=quin69', 'Stream2_Chat');
INSERT INTO `Streamer3_Streams` VALUES ('Stream3', 'Not used', 'https://player.twitch.tv/?channel=dota2ruhub', 'Stream3_Chat');

#create table if not exists `Plaue_4140_S2018_Mods` (`Mod_User_Name` VARCHAR(50), primary key(`Mod_User_Name`));
#INSERT INTO `Plaue_4140_S2018_Mods` VALUES ('ModUser');
#DESCRIBE `Plaue_4140_S2018_Mods`;

create table if not exists `Studio_Day_Chat` (`User_Name` VARCHAR(50), `Message` VARCHAR(200), `Time_Stamp` DATETIME);
create table if not exists `Stream2_Chat` (`User_Name` VARCHAR(50), `Message` VARCHAR(200), `Time_Stamp` DATETIME);
create table if not exists `Stream3_Chat` (`User_Name` VARCHAR(50), `Message` VARCHAR(200), `Time_Stamp` DATETIME);

INSERT INTO `Studio_Day_Chat` VALUES ('wade', 'hello!', NOW());
INSERT INTO `Studio_Day_Chat` VALUES ('wade', 'Government suicks!', NOW());
INSERT INTO `Studio_Day_Chat` VALUES ('bob', 'This is horrible.', NOW());