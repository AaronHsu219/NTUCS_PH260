CREATE TABLE books (
  booksNo varchar(255) collate utf8_unicode_ci NOT NULL,
  booksName varchar(255) collate utf8_unicode_ci NOT NULL,
  booksAuthor varchar(255) collate utf8_unicode_ci NOT NULL,
  booksPrice int(10) unsigned NOT NULL,
  booksPages int(10) unsigned NOT NULL,
  booksPublish date NOT NULL,
  PRIMARY KEY  (booksNo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE customers (
  customersNo int(10) unsigned NOT NULL auto_increment,
  customersName varchar(255) collate utf8_unicode_ci NOT NULL,
  customersJob varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (customersNo)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE orders (
  ordersNo int(10) unsigned zerofill NOT NULL auto_increment,
  ordersBook varchar(255) collate utf8_unicode_ci NOT NULL,
  ordersCustomer int(10) unsigned NOT NULL,
  PRIMARY KEY  (ordersNo)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
