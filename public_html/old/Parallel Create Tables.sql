
DROP TABLE IF EXISTS parallel_highscore;

DROP TABLE IF EXISTS parallel_screenshot;
DROP TABLE IF EXISTS parallel_feature;
DROP TABLE IF EXISTS parallel_game;

DROP TABLE IF EXISTS parallel_user;



create table parallel_user
(
user_id int auto_increment primary key,

user_username varchar(20),
user_password varchar(20),
user_email varchar(64),
user_time_created timestamp
);


INSERT INTO parallel_user (user_username, user_password, user_email, user_time_created) VALUES
('test', '123', 'test@gmail.com', current_timestamp());


create table parallel_game
(
game_id int auto_increment primary key,
game_name varchar(30),		
game_subtitle varchar(300),					-- content is surrounded in an h3
game_download_links varchar(1000),			-- provide all content
game_description varchar(1000),				-- content is surround in a p
game_widget varchar(150),					-- provide all content
game_pic_link varchar(50)					-- content is merely the src string
);


create table parallel_feature
(
feature_id int auto_increment primary key,
feature_text varchar(256),
feature_game_id int,
constraint feature_game_id_fk foreign key (feature_game_id) references parallel_game(game_id)
);

create table parallel_screenshot
(
screenshot_id int auto_increment primary key,
screenshot_link varchar(64),
screenshot_game_id int,
constraint screenshot_game_id_fk foreign key (screenshot_game_id) references parallel_game(game_id)
);


create table parallel_highscore
(
highscore_id int auto_increment primary key,
highscore_name varchar(20),
highscore_score varchar(12),
highscore_game_id int,
highscore_time timestamp,
constraint highscore_game_id_fk foreign key (highscore_game_id) references parallel_game(game_id)
);


-- BLOCK OOO
INSERT INTO parallel_game (game_name, game_subtitle, game_download_links, game_description, game_widget, game_pic_link) VALUES
('Block Ooo', 
'', 
'<a class = "gamePageLink" target="_blank" href = "https://play.google.com/store/apps/details?id=net.parallelgames.block_ooo"><span class="glyphicon glyphicon-download-alt"></span> Download from Google Play</a>', 
'Block Ooo is a fast paced action/arcade game. Tilt or touch to help Block Ooo land on ledges, float in bubbles, and collect powerups.', 
'',
'./images/block_icon2.png');

INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Pick up and play addictive action/arcade gameplay', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Easy to learn, hard to master', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('25+ Achievements with built in leveling system', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('35+ Customizable skins, tails, and backgrounds', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('6+ Ledges types', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Several powerups', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Intuitive user interface', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('2 Control schemes', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Game Center leaderboards', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Block Ooos galore', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('With more to come', (select game_id from parallel_game where game_name ='Block Ooo'));

INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/block_screenshot0.png', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/block_screenshot1.png', (select game_id from parallel_game where game_name ='Block Ooo'));
INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/block_screenshot2.png', (select game_id from parallel_game where game_name ='Block Ooo'));


-- NOMAD QUEST
INSERT INTO parallel_game (game_name, game_subtitle, game_download_links, game_description, game_widget, game_pic_link) VALUES
('Nomad Quest', 
'<span class="glyphicon glyphicon-cog"></span> Currently in Development', 
'<a class = "gamePageLink" target="_blank" href = "https://lavaflyer.itch.io/nomad-quest-demo"><span class="glyphicon glyphicon-download-alt"></span> Download from itch.io</a>', 
'Nomad Quest is an action/adventure game heavily inspired by the Zelda games of old (primarily The Legend of Zelda and The Legend of Zelda: a Link to the Past). The game stars a user-named wizard protagonist. His goal is to grow in magical power by conquering the dungeons around the realm.<br><br>Nomad will feature somewhere between 8 to 12\'ish dungeons. Each dungeon will have a different locale with unique enemies, items, puzzles, and bosses. My goal is to make each dungeon feel as different and distinct from the others as possible. The Nomad Quest demo will give you an early look at one of our dungeons.',
'<iframe src="https://itch.io/embed/28800" width="600vw" frameborder="1" align="center"></iframe>', 
'./images/nomad_icon.png');


INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Explore hand-crafted dungeons filled to the brim with challenging puzzles and monsters', (select game_id from parallel_game where game_name ='Nomad Quest'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Enjoy 16-bit artwork that brings back retro nostalgia', (select game_id from parallel_game where game_name ='Nomad Quest'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Discover unique spells and items that alter gameplay', (select game_id from parallel_game where game_name ='Nomad Quest'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Battle diverse bosses and mini-bosses', (select game_id from parallel_game where game_name ='Nomad Quest'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Earn gold to upgrade your spells and equipment', (select game_id from parallel_game where game_name ='Nomad Quest'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Full controller support (Xbox)', (select game_id from parallel_game where game_name ='Nomad Quest'));

INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/nomad_screenshot0.png', (select game_id from parallel_game where game_name ='Nomad Quest'));
INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/nomad_screenshot1.png', (select game_id from parallel_game where game_name ='Nomad Quest'));
INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/nomad_screenshot2.png', (select game_id from parallel_game where game_name ='Nomad Quest'));
INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/nomad_screenshot3.png', (select game_id from parallel_game where game_name ='Nomad Quest'));


-- Ridiculous History
INSERT INTO parallel_game (game_name, game_subtitle, game_download_links, game_description, game_widget, game_pic_link) VALUES
('Ridiculous History', 
'<span class="glyphicon glyphicon-asterisk"></span> Project made for the <a class = "gamePageLink" target="_blank" href = \'http://contest.gamedevfort.com\'>2015 Indie Game Making Contest</a>', 
'<a class = "gamePageLink" target="_blank" href = "https://lavaflyer.itch.io/ridiculous-history"><span class="glyphicon glyphicon-download-alt"></span> Download from itch.io</a><br><a class = "gamePageLink" href = "./downloads/Ridiculous_History_v1.0.zip"><span class="glyphicon glyphicon-download-alt"></span> Download locally</a>', 
'Ridiculous History is set in a strategy simulation world where you\'re in control. If you want to research explosives before you even have paper currency, go right ahead! You alone decide the fate of your civilization. Will you thrive and become prosperous or will your empire starve and be forgotten in a few short decades?<br><br>The goal of ridiculous history is to get as many points as possible by the year 2015. If your whole population is wiped out before 2015, you lose. The game starts in the year zero. The current game year is indicated next to a clock in the lower left. You can advance time forward by clicking any of the various speed buttons. Pause, normal speed, x4 speed, and x8 speed are all available. You can also pause by hitting the space bar. <br><br>Additonal help and instructions can be found in game.',
'<iframe src="https://itch.io/embed/53297" width="600vw" frameborder="1" align="center"></iframe>', 
'./images/ridiculous_screenshot0.png');

INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Population/city growing simulator', (select game_id from parallel_game where game_name ='Ridiculous History'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Exciting resource mangement', (select game_id from parallel_game where game_name ='Ridiculous History'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Risk/reward gameplay', (select game_id from parallel_game where game_name ='Ridiculous History'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('50+ Interesting technologies to research', (select game_id from parallel_game where game_name ='Ridiculous History'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('20+ Random events allowing for different playthroughs each time', (select game_id from parallel_game where game_name ='Ridiculous History'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('14 Buildings to construct in your cities', (select game_id from parallel_game where game_name ='Ridiculous History'));
INSERT INTO parallel_feature (feature_text, feature_game_id) VALUES
('Beat your friends\' high scores!', (select game_id from parallel_game where game_name ='Ridiculous History'));

INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/ridiculous_screenshot0.png', (select game_id from parallel_game where game_name ='Ridiculous History'));
INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/ridiculous_screenshot1.png', (select game_id from parallel_game where game_name ='Ridiculous History'));

-- Wraith
INSERT INTO parallel_game (game_name, game_subtitle, game_download_links, game_description, game_widget, game_pic_link) VALUES
('Wraith', 
'<span class="glyphicon glyphicon-asterisk"></span> Project made for the <a class = "gamePageLink" target="_blank" href = \'http://7drl.org\'>2016 Seven Day Roguelike Challenge</a>', 
'<a class = "gamePageLink" target="_blank" href = "https://lavaflyer.itch.io/wraith"><span class="glyphicon glyphicon-download-alt"></span> Download from itch.io</a>', 
'WRAITH is a turn-based roguelike with an emphasis on "combo-ing" and positioning. It was heavily inspired by action rpg, Shadow of Mordor. The game was made in Unity and uses the tiles from oryx\'s (www.oryxdesignlab.com) fantastic 16-bit Fantasy Sprite Set.',
'<iframe src="https://itch.io/embed/57464" width="600vw" frameborder="1" align="center"></iframe>', 
'./images/wraith_screenshot0.png');

INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/wraith_screenshot0.png', (select game_id from parallel_game where game_name ='Wraith'));
INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/wraith_screenshot1.png', (select game_id from parallel_game where game_name ='Wraith'));
INSERT INTO parallel_screenshot (screenshot_link, screenshot_game_id) VALUES
('./images/wraith_screenshot2.png', (select game_id from parallel_game where game_name ='Wraith'));


-- Loot Rogue
INSERT INTO parallel_game (game_name, game_subtitle, game_download_links, game_description, game_widget, game_pic_link) VALUES
('Loot Rogue', 
'<span class="glyphicon glyphicon-asterisk"></span> Project made for the <a class = "gamePageLink" target="_blank" href = \'http://7drl.org\'>2014 Seven Day Roguelike Challenge</a>', 
'<a class = "gamePageLink" target="_blank" href = "https://lavaflyer.itch.io/loot-rogue"><span class="glyphicon glyphicon-download-alt"></span> Download from itch.io</a>', 
'Loot Rogue is my first Seven Day Roguelike. Loot Rogue pits your hero against an arena filled with aggressive enemies. The game is based on finding new loot to gradually upgrade your hero and his stats. As the arena\'s rounds progress the enemies, in turn, also get stronger. The game was made in Unity and uses the tiles from oryx\'s (www.oryxdesignlab.com) fantastic 16-bit Fantasy Sprite Set.',
'<iframe src="https://itch.io/embed/53300" width="600vw" frameborder="1" align="center"></iframe>', 
'./images/loot_screenshot0.png');




-- Highscores
INSERT INTO parallel_highscore (highscore_name, highscore_score, highscore_game_id, highscore_time) VALUES
('dan', '50', 4, CURRENT_TIMESTAMP());
INSERT INTO parallel_highscore (highscore_name, highscore_score, highscore_game_id, highscore_time) VALUES
('block', '25', 4, CURRENT_TIMESTAMP());



select * from parallel_game;
select * from parallel_feature;
select * from parallel_screenshot;
select * from parallel_highscore;