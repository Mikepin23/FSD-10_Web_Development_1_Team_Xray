INSERT INTO Brands ('BrandName', 'BrandImage')
VALUES 
('Hasbro', '../Website/img/brands/hasbro.png'), 
('Barbie', '../Website/img/brands/barbie.png'), 
('Marvel', '../Website/img/brands/marvel.png'), 
('Fisher Price', '../Website/img/brands/fisherprice.png'), 
('Disney', '../Website/img/brands/disney.png'), 
('Franklin', '../Website/img/brands/franklin.png'), 
('Paw Patrol', '../Website/img/brands/pawpatrol.png'), 
('Hot Wheels', '../Website/img/brands/hotwheels.png'), 
('Jurrasic World', '../Website/img/brands/jurassicworld.png'),
('Sonic', '../Website/img/brands/sonic.png'), 
('Play-Doh', '../Website/img/brands/playdoh.png'),
('MGA', '../Website/img/brands/mga.png'), 
('KidCentral', '../Website/img/brands/kidcentral.png')
;

INSERT INTO AgeRanges ('Range', 'AgeRangeImage')
VALUES 
('0 - 2 years', '../Website/img/ages/0-2.png'),
('3 - 4 years', '../Website/img/ages/3-4.png'),
('5 - 7 years', '../Website/img/ages/5-7.png'),
('8 - 10 years', '../Website/img/ages/8-10.png'),
('11 - 12 years', '../Website/img/ages/11-12.png'),
('13+ years', '../Website/img/ages/13+.png')
-- ('All Ages')
;

INSERT INTO Categories ('CategoryName', 'CategoryImage')
VALUES 
('Action Figures', '../Website/img/categories/actionfigs.png'),
('Learning', '../Website/img/categories/educational.png'),
('Dolls', '../Website/img/categories/dolls.png'),
('Sports', '../Website/img/categories/sports.png'),
('Board Games', '../Website/img/categories/boardgames.png'),
('Puzzles', '../Website/img/categories/puzzles.png'),
('Stuffed Animals', '../Website/img/categories/stuffedanimals.png'),
('Arts and Crafts', '../Website/img/categories/artsncrafts.png'),
('Electronics', '../Website/img/categories/Electronics.png'),
('Toddlers', '../Website/img/categories/Toddlers.png')
;

INSERT INTO Toys (ToyName, Price, Stock, ToyImage, BrandID, AgeRangeID, CategoryID)
VALUES 
('Jurassic World: Dominion Mosasaurus Dinosaur Toy', 34.87, 82, '../Website/img/toys/64786820_1.jpg', 9, 4, 1),
('Jurassic World: Dominion Sound Slashin Therizinosaurus Dinosaur Figure', '../Website/img/toys/D41E79C8_1.jpg', 52.99, 73, 9, 4, 1),
('Marvel Legends Series Moon Knight, Marvel Comics, Marvel Legends Action Figures, 6 Inch', '../Website/img/toys/44CE6976_1.jpg', 35.99, 44, 3, 5, 1),
('Marvel Spider-Man Titan Hero Series Spider-Man 12-Inch-Scale Action Figure', '../Website/img/toys/E4BA9AA7_1.jpg', 14.99, 52, 3, 5, 1),
('Marvel Avengers Mech Strike Monster Hunters Monster Punch Thanos Toy, 9-Inch-Scale Deluxe Action Figure', '../Website/img/toys/5419DA81_1.jpg', 23.98, 12, 3, 5, 1), -- ^action figures
('Play-Doh Super Color Pack of 12 Cans - R Exclusive', '../Website/img/toys/D426A9BF_1.jpg', 10.48, 31, 11, 2, 8),
('Play-Doh Kitchen Creations Colorful Cafe Playset', '../Website/img/toys/1416BA01_1.jpg', 23.77, 12, 11, 3, 8),
('Play-Doh Kitchen Creations Flip and Pancakes Playset 14-Piece Breakfast Toy', '../Website/img/toys/C4C2D814_1.jpg', 21.99, 24, 11, 3, 8),
('Paw Patrol Pebble Painting Craft Set - R Exclusive', '../Website/img/toys/34ACB8F3_1.jpg', 8.47, 9, 7, 3, 8),
('Paw Patrol Mosaic Pictures Craft Set - R Exclusive', '../Website/img/toys/A4F0B90E_1.jpg', 8.57, 23, 7, 3, 8), -- ^arts and crafts
('Tonie - Moana - English Edition', '../Website/img/toys/3412DBF0_1.jpg', 24.99, 5, 4, 9),
('Tonie - Paw Patrol - Chase - English Edition', '../Website/img/toys/E41EABC5_1.jpg', 24.99, 7, 4, 9),
('Hulk Cable Guy Phone and Controller Holder', '../Website/img/toys/649DDACB_1.jpg', 29.99, 3, 5, 9),
('Wolverine Cable Guy Phone and Controller Holder', '../Website/img/toys/F45799F2_1.jpg', 29.99, 3, 5, 9),
('Playstation 4-Marvel''s Guardians Of The Galaxy', '../Website/img/toys/C46C18B9_1.jpg', 55.98, 3, 6, 9), -- ^electronics
('Squishmallows 8" - Sonic the Hedgehog', '../Website/img/toys/44908954_1.jpg', 19.99, 10, 2, 7),
('Squishmallows 8" - Shadow the Hedgehog', '../Website/img/toys/04F65BA8_1.jpg', 19.99, 10, 2, 7),
('Squishmallows 8" - Tails', '../Website/img/toys/E4E94806_1.jpg', 19.99, 10, 2, 7),
('Disney - Stitch Holiday Plush', '../Website/img/toys/045C185A_1.jpg', 24.99, 5, 2, 7),
('Disney - Mickey Mouse Plush 17 inches', '../Website/img/toys/A4515ADB_1.jpg', 19.99, 5, 2, 7), -- ^Stuffed Animals
('VTech PAW Patrol Learning Pup Watch - Chase - English Edition', '../Website/img/toys/B4659B92_1.jpg', 24.99, 7, 3, 2),
('VTech PAW Patrol Learning Pup Watch - Marshall - English Edition', '../Website/img/toys/E4C1FB88_1.jpg', 24.99, 7, 3, 2),
('VTech PAW Patrol: The Movie: Learning Tablet - English Edition', '../Website/img/toys/044B3932_1.jpg', 27.98, 7, 3, 2),
('VTech PAW Patrol: The Movie: Learning Phone - English Edition', '../Website/img/toys/449A1A77_1.jpg', 17.48, 7, 3, 2),
('LeapFrog PAW Patrol: To the Rescue! - English Edition', '../Website/img/toys/D427E942_1.jpg', 56.99, 7, 3, 2), -- ^Educational
('Taboo', 20.98, 16, '../Website/img/toys/taboo_boardgame.jpg', 1, 6, 5),
('Exploding Kittens', 26.94, 24, '../Website/img/toys/exploding_kittens_boardgame.jpg', 1, 4, 5),
('Candy Land', 12.99, 16, '../Website/img/toys/candy_land_boardgame.jpg', 1, 2, 5),
('Catan', 69.99, 9, '../Website/img/toys/catan_boardgame.jpg', 1, 6, 5),
('Chutes and Ladders', 12.99, 37, '../Website/img/toys/chutes_ladders_boardgame.jpg', 1, 2, 5),
('VTech Toddler Tech Laptop', 22.99, 7, '../Website/img/toys/toddler_tech_laptop_toddler.jpg', 4, 2, 10),
('Little People Recycle Truck', 7.99, 24, '../Website/img/toys/little_people_recycle_truck_toddler.jpg', 4, 1, 10),
('Paw Patrol Toddler Skye Helmet', 42.99, 12, '../Website/img/toys/paw_patrol_helmet_toddler.jpg', 7, 2, 10),
('My Carry Potty - Penguin', 34.99, 9, '../Website/img/toys/my_carry_potty_toddler.jpg', 13, 2, 10),
('Little People Hot Wheels Race Track for Toddlers', 37.99, 19, '../Website/img/toys/little_people_hot_wheels_toddlers.jpg', 8, 2, 10),
('Toronto Raptors NBA Basketball', 22.99, 44, '../Website/img/toys/basketball_sports.jpg', 6, 6, 4),
('Adjust ''N Jam Pro Basketball', 84.99, 13, '../Website/img/toys/adjust_jam_net_sports.jpg', 4, 4, 4),
('NHL Mini Hockey Goal Set', 79.99, 16, '../Website/img/toys/nhl_mini_hockey_sports.jpg', 6, 4, 4),
('Soccer Shootout', 69.99, 23, '../Website/img/toys/soccer_shootout_sports.jpg', 6, 4, 4),
('Player''s Series 9.5" Glove', 29.99, 27, '../Website/img/toys/baseball_glove_sports.jpg', 6, 3, 4),
('The Flintstones 1000-Piece Jigsaw Puzzle', 29.99, 34, '../Website/img/toys/flintstones_puzzle.jpg', 5, 6, 6),
('Star Wars Universe Puzzle 2000pc', 44.99, 28, '../Website/img/toys/star_wars_puzzle.jpg', 5, 6, 6),
('Disney 3D Castle 216 Piece 3D Jigsaw Puzzle', 89.99, 15, '../Website/img/toys/disney_3d_puzzle.jpg', 5, 6, 6),
('Moana and Maui Puzzle 100pc', 19.99, 23, '../Website/img/toys/moana_maui_puzzle.jpg', 5, 3, 6),
('Rubik''s Coach Cube, Learn to Solve 3x3 Cube with Stickers', 19.99, 17, '../Website/img/toys/rubiks_cube_puzzle.jpg', 1, 4, 6),
('Barbie Dreamhouse', 199.94, 8, '../Website/img/toys/barbie_dreamhouse_dolls.jpg', 2, 4, 3),
('My Little Pony Toys', 19.87, 8, '../Website/img/toys/my_little_pony_dolls.jpg', 1, 2, 3),
('Rainbow High Cheer Skyler Bradshaw - Blue Fashion Doll ', 34.99, 25, '../Website/img/toys/rainbow_high_blue_doll.jpg', 12, 3, 3),
('Rainbow High Cheer Sunny Madison - Yellow Fashion Doll', 34.99, 29, '../Website/img/toys/rainbow_high_yellow_doll.jpg', 12, 3, 3),
('Barbie The Movie Doll - Margot Robbie', 46.99, 14, '../Website/img/toys/barbie_the_movie_doll.jpg', 2, 3, 3)
;