CREATE TABLE board1 (
  boardNo int(10) unsigned NOT NULL AUTO_INCREMENT,
  boardType int(10) unsigned NOT NULL,
  boardTopic varchar(100) NOT NULL,
  boardAuthor varchar(50) NOT NULL,
  boardContent text NOT NULL,
  boardDatetime datetime NOT NULL,
  PRIMARY KEY (boardNo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO board1 (boardNo, boardType, boardTopic, boardAuthor, boardContent, boardDatetime) VALUES
(1, 0, '第一篇主題', 'Allan', '測試~~', '2010-08-08 22:52:49'),
(2, 1, '', 'Bill', '我來回應了~', '2010-08-08 23:16:36'),
(3, 1, '', 'Cindy', '回應~~', '2010-08-08 23:20:12'),
(4, 1, '', 'David', '我也來回應一下', '2010-08-08 23:20:51'),
(5, 0, '別的主題', 'Bill', '我是別的主題\r\n第二行', '2010-08-08 23:39:05');

CREATE TABLE counter1 (
  counter int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO counter1 (counter) VALUES
(1);

CREATE TABLE counter3 (
  counter int(11) NOT NULL,
  ipAddress varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO counter3 (counter, ipAddress) VALUES
(6, '127.0.0.1');

CREATE TABLE counter_pt1 (
  counter int(11) NOT NULL,
  ipAddress varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO counter_pt1 (counter, ipAddress) VALUES
(6, '127.0.0.1');

CREATE TABLE counter4 (
  counterNo int(10) unsigned NOT NULL AUTO_INCREMENT,
  counterDate date NOT NULL,
  counterTime time NOT NULL,
  counterIPAddress varchar(16) NOT NULL,
  PRIMARY KEY (counterNo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO counter4 (counterNo, counterDate, counterTime, counterIPAddress) VALUES
(1, '2009-02-03', '17:58:14', '127.0.0.1'),
(2, '2009-03-18', '18:01:55', '127.0.0.1'),
(3, '2009-03-22', '18:07:02', '127.0.0.1'),
(4, '2009-03-22', '18:07:04', '127.0.0.1'),
(5, '2009-03-23', '18:07:04', '127.0.0.1'),
(6, '2010-01-02', '18:07:04', '127.0.0.1'),
(7, '2010-01-08', '18:07:04', '127.0.0.1'),
(8, '2010-08-08', '18:07:05', '127.0.0.1'),
(9, '2010-01-20', '18:07:05', '127.0.0.1'),
(10, '2010-01-21', '18:07:05', '127.0.0.1'),
(11, '2010-01-21', '18:07:05', '127.0.0.1');

CREATE TABLE guestbook1 (
  guestbookNo int(10) unsigned NOT NULL AUTO_INCREMENT,
  guestbookName varchar(50) NOT NULL,
  guestbookEmail varchar(100) NOT NULL,
  guestbookContent text NOT NULL,
  guestbookDatetime datetime NOT NULL,
  PRIMARY KEY (guestbookNo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO guestbook1 (guestbookNo, guestbookName, guestbookEmail, guestbookContent, guestbookDatetime) VALUES
(1, '中文測試', '', '測試測試測試\r\n第二行', '2010-08-08 20:41:22');

CREATE TABLE guestbook2 (
  guestbookNo int(10) unsigned NOT NULL AUTO_INCREMENT,
  guestbookName varchar(50) NOT NULL,
  guestbookEmail varchar(100) NOT NULL,
  guestbookContent text NOT NULL,
  guestbookDatetime datetime NOT NULL,
  PRIMARY KEY (guestbookNo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO guestbook2 (guestbookNo, guestbookName, guestbookEmail, guestbookContent, guestbookDatetime) VALUES
(1, '測試1', '', '1111', '2010-08-08 20:40:48'),
(2, '測試2', '', '2222', '2010-08-08 20:40:48'),
(3, '測試3', '', '3333', '2010-08-08 20:41:02'),
(4, '測試4', '', '44444', '2010-08-08 20:41:02');

CREATE TABLE guestbook3 (
  guestbookNo int(10) unsigned NOT NULL AUTO_INCREMENT,
  guestbookName varchar(50) NOT NULL,
  guestbookEmail varchar(100) NOT NULL,
  guestbookContent text NOT NULL,
  guestbookDatetime datetime NOT NULL,
  PRIMARY KEY (guestbookNo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO guestbook3 (guestbookNo, guestbookName, guestbookEmail, guestbookContent, guestbookDatetime) VALUES
(1, '測試1', '', '1111', '2010-08-08 20:40:48'),
(2, '測試2', '', '2222', '2010-08-08 20:40:48'),
(3, '測試3', '', '3333', '2010-08-08 20:41:02'),
(4, '測試4', '', '44444', '2010-08-08 20:41:02');