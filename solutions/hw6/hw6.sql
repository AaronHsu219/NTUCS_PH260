CREATE DATABASE hw6;
USE hw6;

CREATE TABLE `hw6` (
  `hw6No` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hw6Name` varchar(255) NOT NULL,
  `hw6SN` varchar(255) NOT NULL,
  `hw6Email` varchar(255) NOT NULL,
  `hw6Grade1` int(11) NOT NULL,
  `hw6Grade2` int(11) NOT NULL,
  `hw6Grade3` int(11) NOT NULL,
  `hw6Grade4` int(11) NOT NULL,
  `hw6Grade5` int(11) NOT NULL,
  PRIMARY KEY (`hw6No`)
);

INSERT INTO `hw6` (`hw6No`, `hw6Name`, `hw6SN`, `hw6Email`, `hw6Grade1`, `hw6Grade2`, `hw6Grade3`, `hw6Grade4`, `hw6Grade5`) VALUES
(1, '宋浩', '12345678', 'ss@ss.ss', 12, 34, 56, 78, 90),
(2, '王小明', '10101010', '101010@aaa.com', 100, 90, 80, 70, 60),
(3, '陳小福', '11111111', 'aaa@aaa.aa', 89, 39, 94, 84, 93),
(4, '劉小鳥', '55555555', '555@cc.cc', 90, 99, 84, 40, 39),
(5, '吳小貓', '99999999', '999@dd.dd', 29, 48, 94, 48, 39),
(6, '林小雞', '88888888', '88@kk.kk', 88, 93, 74, 38, 49),
(7, '張小魚', '77777777', '777@mm.cc', 77, 88, 99, 66, 88),
(8, '黃小草', '66666666', '66@nn.ss', 47, 49, 47, 49, 54),
(9, '葉小雄', '33333333', '33@dd.dd', 33, 66, 99, 66, 55),
(10, '許小胖', '22222222', '22@bb.ss', 22, 77, 55, 44, 63),
(11, '吳小福', '00000000', 'sk@sks.com', 22, 66, 88, 99, 77),
(12, '王永慶', '00009999', 'wang@wang.com.tw', 90, 80, 70, 60, 50),
(13, '張忠謀', '77788999', 'cc@cc.cc', 99, 88, 77, 66, 55),
(14, '郭台銘', '28434902', 'ooo@ll.cc', 81, 82, 83, 84, 85);
