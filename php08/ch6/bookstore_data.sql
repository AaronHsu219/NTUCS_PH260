INSERT INTO books (booksNo, booksName, booksAuthor, booksPrice, booksPages, booksPublish) VALUES
('A112', '蛤蠣波特 ', 'Allan', 690, 400, '2011-09-15'),
('B334', '一粥刊', 'Bill', 199, 250, '2011-01-08'),
('C556', '天龍叭噗', 'Cindy', 1299, 980, '2011-02-06'),
('D778', '絕代霜蕉', 'David', 880, 605, '2011-08-20'),
('E990', '還豬格格', 'Evelyn', 590, 475, '2011-03-30'),
('F012', '我不是焦尼炸', 'Frank', 990, 332, '2010-05-30');

INSERT INTO customers (customersNo, customersName, customersJob) VALUES
(1, '螞鷹酒', '學生'),
(2, '沉水匾', '上班族'),
(3, '菜櫻紋', '家管'),
(4, '消萬嘗', '工程師'),
(5, '無蹲益', '學生'),
(6, '酥真鯧', '保母'),
(7, '洩常停', '學生'),
(8, '沉橘', '上班族');

INSERT INTO orders (ordersNo, ordersBook, ordersCustomer) VALUES
(0000000001, 'A112', 8),
(0000000002, 'F012', 5),
(0000000003, 'F012', 3),
(0000000004, 'D778', 3),
(0000000005, 'A112', 1),
(0000000006, 'A112', 2),
(0000000007, 'B334', 3);