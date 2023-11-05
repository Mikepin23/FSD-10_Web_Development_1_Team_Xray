INSERT INTO Brands (BrandName, BrandImage, Descript)
VALUES 
('Hasbro', '../ToyTower/img/brands/hasbro.png', 'Toys that remind you how quickly your childhood dreams can turn into clutter.'), 
('Barbie', '../ToyTower/img/brands/barbie.png', 'Proudly giving little girls body dysmorphia since 1959.'), 
('Marvel', '../ToyTower/img/brands/marvel.png', 'Owners of franchises grown-ups and children argue over with the intensity of a geopolitical summit.'), 
('Fisher Price', '../ToyTower/img/brands/fisherprice.png', 'Toys for toddlers who always prefer the boxes to the actual toys inside.'), 
('Disney', '../ToyTower/img/brands/disney.png', 'Where dreams come true... if your dream is to support the monopolization of pop culture.'), 
('Franklin', '../ToyTower/img/brands/franklin.png', 'Because blaming your skills is so last season. Now you can blame your gear too!'), 
('Paw Patrol', '../ToyTower/img/brands/pawpatrol.png', 'Who needs actual emergency services when you have a team of puppies with oddly specialized skills?'), 
('Hot Wheels', '../ToyTower/img/brands/hotwheels.png', 'Bring the racetrack home, so you can speed away from reality... on a very small scale.'), 
('Jurrasic World', '../ToyTower/img/brands/jurassicworld.png', 'Bringing dinosaurs back from extinction was definitely a great idea... for our share-holders, at least.'),
('Sonic', '../ToyTower/img/brands/sonic.png', 'Because in the real world, running is called cardio, and it''s not nearly as fun.'), 
('Play-Doh', '../ToyTower/img/brands/playdoh.png', 'Nothing says creativity like accidentally mixing all the colors into a muddy brown mess.'),
('MGA', '../ToyTower/img/brands/mga.png', 'They''re Like if regular dolls shopped exclusively at Hot Topic.'), 
('KidCentral', '../ToyTower/img/brands/kidcentral.png', 'Where the decibel level is directly proportional to the fun quotient.')
;

INSERT INTO AgeRanges (`Range`, AgeRangeImage, Descript)
VALUES 
('0 - 2 years', '../ToyTower/img/ages/0-2.png', 'Screamers, sleep-thieves, and diaper dictators.'),
('3 - 4 years', '../ToyTower/img/ages/3-4.png', 'Tiny tornadoes with sticky fingers, where mess is an art form.'),
('5 - 7 years', '../ToyTower/img/ages/5-7.png', 'The littlest terrors, with the biggest opinions.'),
('8 - 10 years', '../ToyTower/img/ages/8-10.png', 'The age where boundless energy meets questionable decisions.'),
('11 - 12 years', '../ToyTower/img/ages/11-12.png', 'Mastering eye rolls and growing pains with flair.'),
('13+ years', '../ToyTower/img/ages/13+.png', 'Hormones, drama, and the know-it-all years.')
-- ('All Ages')
;

INSERT INTO Categories (CategoryName, CategoryImage, Descript)
VALUES 
('Action Figures', '../ToyTower/img/categories/actionfigs.png', 'Get your favorite characters in your kung fu grip today! Mini models, big fun!'),
('Learning', '../ToyTower/img/categories/educational.png', '"Games" and "toys" that teach math, reading, and more, all while having "fun"!'),
('Dolls', '../ToyTower/img/categories/dolls.png', 'Plastic girls in a fantasy world, dress them up, make it right, they''re your dollies!'),
('Sports', '../ToyTower/img/categories/sports.png', 'More expenive gear makes you play better. Get your head in the game!'),
('Board Games', '../ToyTower/img/categories/boardgames.png', 'Whichever one you''re playing you''ll never be bored with these games!'),
('Puzzles', '../ToyTower/img/categories/puzzles.png', 'Trying to solve the puzzle of what to do on a wild saturday night? Here''s the solution!'),
('Stuffed Animals', '../ToyTower/img/categories/stuffedanimals.png', 'Outsourcing physical affection for children has never been so cute!'),
('Arts and Crafts', '../ToyTower/img/categories/artsncrafts.png', 'Create to your heart''s content! As long as it stays within the lines'),
('Electronics', '../ToyTower/img/categories/Electronics.png', 'Because no one wants to roll a ring down a hill using stick anymore, grandpa!'),
('Toddlers', '../ToyTower/img/categories/Toddlers.png', 'Impossible for even the most determined of children to choke on!')
;

INSERT INTO Toys (ToyName, Price, Stock, ToyImage, BrandID, AgeRangeID, CategoryID, Descript)
VALUES 
('Mosasaurus Dinosaur Dinosaur Figure', 34.87, 82, '../ToyTower/img/toys/64786820_1.jpg', 9, 4, 1, 'Realistic and detailed Mosasaurus dinosaur figure for immersive playtime adventures.'),
('Therizinosaurus Dinosaur Figure',  52.99, 73, '../ToyTower/img/toys/D41E79C8_1.jpg',9, 4, 1, 'Lifelike Therizinosaurus with slashing action for dynamic prehistoric play.'),
('Moon Knight Action Figures', 35.99, 44, '../ToyTower/img/toys/44CE6976_1.jpg', 3, 5, 1, 'Collectible action figures featuring Marvel''s Moon Knight, with intricate detailing.'),
('Spider-Man Action Figure', 14.99, 52, '../ToyTower/img/toys/E4BA9AA7_1.jpg', 3, 5, 1, 'Poseable Spider-Man action figure for endless superhero role-play fun.'),
('Mech Strike Thanos Action Figure', 23.98, 12, '../ToyTower/img/toys/5419DA81_1.jpg', 3, 5, 1, 'Mighty Thanos action figure in a powerful Mech Strike suit, ready for epic battles.'),
('Play-Doh Super Color Pack of 12 Cans', 10.48, 31, '../ToyTower/img/toys/D426A9BF_1.jpg', 11, 2, 8, 'Vibrant set of 12 Play-Doh cans for endless creative sculpting and molding fun.'),
('Play-Doh Cafe Playset', 23.77, 12, '../ToyTower/img/toys/1416BA01_1.jpg', 11, 3, 8, 'Interactive playset for crafting delightful Play-Doh cafe creations and treats.'),
('Play-Doh Pancakes Playset', 21.99, 24, '../ToyTower/img/toys/C4C2D814_1.jpg', 11, 3, 8, 'Pancake-themed playset for flipping and decorating Play-Doh pancakes.'),
('Pebble Painting Craft Set', 8.47, 9, '../ToyTower/img/toys/34ACB8F3_1.jpg', 7, 3, 8, 'Engaging craft set for painting pebble characters from the beloved Paw Patrol series.'),
('Mosaic Pictures Craft Set', 8.57, 23, '../ToyTower/img/toys/A4F0B90E_1.jpg', 7, 3, 8, 'Create mosaic pictures featuring favorite Paw Patrol characters with this craft set.'),
('Tonie - Moana', 24.99, 55, '../ToyTower/img/toys/3412DBF0_1.jpg', 5, 4, 9, 'Interactive audio character with Moana''s adventures and songs for kids to enjoy.'),
('Tonie - Chase', 24.99, 30, '../ToyTower/img/toys/E41EABC5_1.jpg', 7, 4, 9, 'Engaging audio character featuring Chase from the popular kids'' show.'),
('Hulk hone and Controller Holder', 29.99, 43, '../ToyTower/img/toys/649DDACB_1.jpg', 3, 5, 9, 'Fun Hulk-themed holder for organizing and displaying phones and controllers.'),
('Wolverine Phone and Controller Holder', 29.99, 17, '../ToyTower/img/toys/F45799F2_1.jpg', 3, 5, 9, 'Cool Wolverine-themed holder for keeping phones and controllers in place.'),
('PS4 Guardians Of The Galaxy', 55.98, 32, '../ToyTower/img/toys/C46C18B9_1.jpg', 3, 6, 9, 'Action-packed video game featuring the Guardians of the Galaxy on PS4.'),
('Squishmallows Sonic the Hedgehog', 19.99, 12, '../ToyTower/img/toys/44908954_1.jpg', 10, 2, 7, 'Soft, huggable Sonic the Hedgehog-themed plush for cuddly playtime.'),
('Squishmallows Shadow the Hedgehog', 19.99, 24, '../ToyTower/img/toys/04F65BA8_1.jpg', 10, 2, 7, 'Adorable plush featuring Shadow the Hedgehog for Sonic fans to enjoy.'),
('Squishmallows Tails', 19.99, 29, '../ToyTower/img/toys/E4E94806_1.jpg', 10, 2, 7, 'Cute Tails-themed plush for fans of the Sonic the Hedgehog franchise.'),
('Stitch Holiday Plush', 24.99, 60, '../ToyTower/img/toys/045C185A_1.jpg', 5, 2, 7, 'Festive Stitch plush perfect for holiday-themed cuddles and decor.'),
('Mickey Mouse Plush', 19.99, 16, '../ToyTower/img/toys/A4515ADB_1.jpg', 5, 2, 7, 'Classic Mickey Mouse plush for timeless Disney-inspired play and snuggles.'),
('Learning Pup Watch - Chase', 24.99, 46, '../ToyTower/img/toys/B4659B92_1.jpg', 7, 3, 2, 'Interactive learning watch featuring Chase from PAW Patrol for educational fun.'),
('Learning Pup Watch - Marshall', 24.99, 39, '../ToyTower/img/toys/E4C1FB88_1.jpg', 7, 3, 2, 'Educational pup watch with Marshall from PAW Patrol for engaging learning.'),
('PAW Patrol: Learning Tablet', 27.98, 18, '../ToyTower/img/toys/044B3932_1.jpg', 7, 3, 2, 'Interactive tablet featuring PAW Patrol characters for educational playtime.'),
('PAW Patrol: Learning Phone', 17.48, 52, '../ToyTower/img/toys/449A1A77_1.jpg', 7, 3, 2, 'Educational phone with PAW Patrol characters for interactive and learning play.'),
('PAW Patrol: To the Rescue!', 56.99, 14, '../ToyTower/img/toys/D427E942_1.jpg', 7, 3, 2, 'Interactive learning game with PAW Patrol for engaging educational experiences.'),
('Taboo', 20.98, 16, '../ToyTower/img/toys/taboo_boardgame.jpg', 1, 6, 5, 'Exciting word-guessing game that challenges players'' communication skills and creativity.'),
('Exploding Kittens', 26.94, 24, '../ToyTower/img/toys/exploding_kittens_boardgame.jpg', 1, 4, 5, 'Hilarious and strategic card game of kittens, explosions, and unpredictable fun.'),
('Candy Land', 12.99, 16, '../ToyTower/img/toys/candy_land_boardgame.jpg', 1, 2, 5, 'Classic and colorful board game for children, filled with sweet adventures and surprises.'),
('Catan', 69.99, 9, '../ToyTower/img/toys/catan_boardgame.jpg', 1, 6, 5, 'Strategic board game of resource management and trading in the mythical island of Catan.'),
('Chutes and Ladders', 12.99, 37, '../ToyTower/img/toys/chutes_ladders_boardgame.jpg', 1, 2, 5, 'Timeless board game of climbs and slides, perfect for family-friendly fun and learning.'),
('Toddler Tech Laptop', 22.99, 7, '../ToyTower/img/toys/toddler_tech_laptop_toddler.jpg', 4, 2, 10, 'Interactive laptop for toddlers with age-appropriate activities and learning games.'),
('Recycle Truck', 7.99, 24, '../ToyTower/img/toys/little_people_recycle_truck_toddler.jpg', 4, 1, 10, 'Educational toy truck teaching toddlers about recycling and environmental awareness.'),
('Paw Patrol Toddler Helmet', 42.99, 12, '../ToyTower/img/toys/paw_patrol_helmet_toddler.jpg', 7, 2, 10, 'Safety helmet featuring Paw Patrol characters for toddlers'' protection and style.'),
('My Carry Potty - Penguin', 34.99, 9, '../ToyTower/img/toys/my_carry_potty_toddler.jpg', 13, 2, 10, 'Portable and adorable potty for toddlers, designed for convenience and ease of use.'),
('Hot Wheels Race Track for Toddlers', 37.99, 19, '../ToyTower/img/toys/little_people_hot_wheels_toddlers.jpg', 8, 2, 10, 'Exciting race track set designed for young toddlers to enjoy with Hot Wheels cars.'),
('Toronto Raptors NBA Basketball', 22.99, 44, '../ToyTower/img/toys/basketball_sports.jpg', 6, 6, 4, 'Official NBA basketball featuring the Toronto Raptors team logo and colors.'),
('Adjust ''N Jam Pro Basketball', 84.99, 13, '../ToyTower/img/toys/adjust_jam_net_sports.jpg', 4, 4, 4, 'Adjustable basketball hoop for kids, designed for fun and skill-building play.'),
('NHL Mini Hockey Goal Set', 79.99, 16, '../ToyTower/img/toys/nhl_mini_hockey_sports.jpg', 6, 4, 4, 'Miniature hockey goal set for kids to practice their hockey skills indoors or outdoors.'),
('Soccer Shootout', 69.99, 23, '../ToyTower/img/toys/soccer_shootout_sports.jpg', 6, 4, 4, 'Mini soccer goal set for kids to enjoy friendly matches and practice their soccer skills.'),
('Baseball Glove', 29.99, 27, '../ToyTower/img/toys/baseball_glove_sports.jpg', 6, 3, 4, 'Durable and comfortable glove for young baseball enthusiasts, perfect for catching and throwing practice.'),
('The Flintstones Jigsaw Puzzle', 29.99, 34, '../ToyTower/img/toys/flintstones_puzzle.jpg', 5, 6, 6, 'Challenging 1000 piece puzzle featuring The Flintstones for hours of entertainment.'),
('Star Wars Universe Puzzle', 44.99, 28, '../ToyTower/img/toys/star_wars_puzzle.jpg', 5, 6, 6, 'Intricate 2000 piece puzzle depicting the vast Star Wars universe for avid fans.'),
('3D Castle Jigsaw Puzzle', 89.99, 15, '../ToyTower/img/toys/disney_3d_puzzle.jpg', 5, 6, 6, 'Three-dimensional 216 piece puzzle of a castle, offering a unique building experience.'),
('Moana and Maui Puzzle', 19.99, 23, '../ToyTower/img/toys/moana_maui_puzzle.jpg', 5, 3, 6, 'Engaging 100 piece puzzle featuring Moana and Maui for young fans.'),
('Rubik''s Coach Cube', 19.99, 17, '../ToyTower/img/toys/rubiks_cube_puzzle.jpg', 1, 4, 6, 'Classic Rubik''s Cube designed to help beginners solve it step-by-step.'),
('Barbie Dreamhouse', 199.94, 8, '../ToyTower/img/toys/barbie_dreamhouse_dolls.jpg', 2, 4, 3, 'Iconic Barbie Dreamhouse for imaginative play and endless storytelling adventures.'),
('My Little Pony Figures', 19.87, 8, '../ToyTower/img/toys/my_little_pony_dolls.jpg', 1, 2, 3, 'Adorable My Little Pony figures for magical, friendship-themed playtime.'),
('Skyler Bradshaw Doll', 34.99, 25, '../ToyTower/img/toys/rainbow_high_blue_doll.jpg', 12, 3, 3, 'Fashionable doll with unique style and personality, perfect for imaginative play.'),
('Sunny Madison Doll', 34.99, 29, '../ToyTower/img/toys/rainbow_high_yellow_doll.jpg', 12, 3, 3, 'Charming doll with a sunny disposition, great for imaginative adventures.'),
('Barbie Doll', 46.99, 14, '../ToyTower/img/toys/barbie_the_movie_doll.jpg', 2, 3, 3, 'Collectible Barbie doll inspired by the actress Margot Robbie.')
;
