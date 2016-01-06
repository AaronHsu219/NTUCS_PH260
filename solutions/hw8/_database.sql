CREATE TABLE admin (
  adminNo int(10) unsigned NOT NULL auto_increment,
  adminID varchar(16) collate utf8_unicode_ci NOT NULL,
  adminPW varchar(16) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (adminNo)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO admin VALUES (1, 'allan', '1234');