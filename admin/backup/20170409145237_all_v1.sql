--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: localhost
-- 生成日期: 2017 年  04 月 09 日 14:52
-- MySQL版本: 5.6.17
-- PHP 版本: 5.5.12

--
-- 数据库: `db_youme`
--

-- -------------------------------------------------------

--
-- 表的结构tb_article
--

DROP TABLE IF EXISTS `tb_article`;
CREATE TABLE `tb_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `art_id` int(10) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `check` int(1) NOT NULL DEFAULT '0',
  `visitor` int(10) NOT NULL DEFAULT '0',
  `publisher` varchar(255) NOT NULL,
  `up_date` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(10000) NOT NULL,
  `lead` varchar(1000) DEFAULT NULL,
  `tag_1` varchar(255) DEFAULT NULL,
  `tag_2` varchar(255) DEFAULT NULL,
  `tag_3` varchar(255) DEFAULT NULL,
  `tag_4` varchar(255) DEFAULT NULL,
  `tag_5` varchar(255) DEFAULT NULL,
  `class` varchar(255) NOT NULL,
  `class_num` varchar(255) NOT NULL,
  `views` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `art` (`art_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 tb_article
--

INSERT INTO `tb_article` VALUES('1','1','明心见性的一段对话','0','0','admin','2017-04-09 18:15:29','以下是我和妹子聊到房屋拆迁话题时的对话，希望我们能一直保持平常心，认真做自己。\r\n\r\n        ……\r\n\r\n静待花开花落 ：不管是什么，包包里有点钱钱才是王道。\r\n\r\n　　 尤oοΟ○ ：君子爱财，取之有道嘛，靠国家靠父母总归不是好事。\r\n\r\n静待花开花落 ：国家政策要来帮扶你，你还不愿意，好奇怪，应该积极配合，感谢共产党，才是对的吧。\r\n\r\n　　 尤oοΟ○ ：你看，又暴露了中华民族的劣根性了吧image\r\n\r\n　　 尤oοΟ○ ：积极配合国家是正解的，但没必要感恩戴德，前者是顺应自然，后者是封建社会的奴才相。\r\n\r\n　　 尤oοΟ○ ：太多拆二代一夜暴富后骄奢淫逸，最后连命都搭上了，何必呢，不作不死。\r\n\r\n静待花开花落 ：哼哼\r\n\r\n静待花开花落 ：你愿意帮，我就响应政策，你不帮，我也不求你，是吧？\r\n\r\n　 　尤oοΟ○ ：对，就是平常心，没有希望就不会有希望达成后的自我膨胀。\r\n\r\n　　 尤oοΟ○ ：靠父母，靠父母官，靠朋友，靠国家，就他妈不靠自己，这就是为什么多数中国人在强势文化面前永远低人一等的原因。\r\n\r\n静待花开花落 ：我要靠自己，我还要占点便宜，怎么办？\r\n\r\n　　 尤oοΟ○ ：两者不可兼得，你要是真靠自己了，那便宜就不叫占了，努力得来的就不便宜。要是你侥幸占着便宜了，那便宜又有何用呢，只有贵的东西才会被人看重，贵的东西不是你想占就能占的。\r\n\r\n　　 尤oοΟ○ ：明白人都明白，患得患失的人始终活的不自在，不纠结这个了才，再往下就没话说了。\r\n\r\n        ……\r\n\r\n我并不认为顺应自然，把握趋势有什么不对，任何通过努力得来的回报都是值得肯定的。但凡有点成就的人都不会从金钱多寡的角度去评价一个人。可为什么很多人被瞧不起呢，就是因为他们生性趋炎附势，蝇营狗苟，一脸的奴才相。','以下是我和妹子聊到房屋拆迁话题时的对话，希望我们能一直保持平常心，认真做自己。\r\n\r\n        ……','觉悟','生活','人生','规则','','如是观','3','5');
INSERT INTO `tb_article` VALUES('2','2','人生何尝不是一场赌局','0','0','admin','2017-04-08 21:44:17','最近同事们沉陷红群无法自拔，作为一个旁观者还是挺开心的，再一次见证多巴胺和肾上腺素这些让人爽到爆的物质，在日常生活中扮演着魔鬼般的角色。人从来都不是理智的动物，总是感觉一切都在控制之中，心存侥幸心理。当我们陷入这种心理时，输赢已经不再重要了，只在乎一种感觉“快感”，对，和性交一样，性是一切的本源。由此看来，我这些同事们还是沉迷其中也是有原由的，他们都有一个共同点，婚姻不和谐，需要通过其它方式来满足快感，魔鬼和天使其实是一体两面的。\r\n\r\n春暖花开时，天气突然转冷，前天二十多度到二度的气温变化，让人不能适应，连小陈都失声了。在这个春天我必须做出一些选择，人有时候是需要逼自己一下的，否则当生活变的被动，剩下的只有叹息。\r\n\r\n萧伯纳说“想结婚的就去结婚，相单身就维持单身，反正到最后你们都会后悔。”我就想知道他最后到底结没结婚？','最近同事们沉陷红群无法自拔，作为一个旁观者还是挺开心的，再一次见证多巴胺和肾上腺素这些让人爽到爆的物质，在日常生活中扮演着魔鬼般的角色。人从来都不是理智的动物，总是感觉一切都在 ……','摄影','生活','心情','人生','觉悟','大生活','1','1');
INSERT INTO `tb_article` VALUES('3','3','她们都老了吧，她们在哪里呀','0','0','admin','2017-04-05 19:54:42','picture','picture','摄影','心情','','','','光影斑斓','2','0');
INSERT INTO `tb_article` VALUES('4','4','2016年就一个字：戒！​\r\n','0','0','admin','2017-04-05 19:54:44','太阳晒的人懒洋洋的，这段时间的汉中也和其它地方一样，迎来了冬季最冷的天气，零下7度左右，家里的水管都冻爆了。\r\n\r\n很快过春节了，我们公司也和本地其它小公司一样，员工都在等待着放假和年终奖，完全不在工和状态。其实大家都没盼望着过年，这意味着在没有明确的计划之前，过完年又得重复这种百无聊赖的工作和生活，每个人都憋足了劲，又不知向何处使。\r\n\r\n这个时候很多人都在写工作总结，什么A总结，B计划之类的，其实真没什么意义，我就不写了。这一年对我个人而言还算不错，变化挺大，也有惊喜，2016年就一个字：戒！     这条路小时候走了无数次，将来还会更多……','这条路小时候走了无数次，将来还会更多……','摄影','生活','心情','人生','觉悟','大生活','1','0');
INSERT INTO `tb_article` VALUES('5','5','从丁元英到叶子农','0','0','admin','2017-04-05 19:54:51','很久没更新了，不是没时间不想写，而是懒，懒得打字，懒得思考，时间就这样悄然而逝。 \r\n\r\n凉爽的下午，淡蓝的天空浮现出层层云雾，夕阳也逐渐失去了颜色，随着夜幕降临，白云变成了乌云，晚上多是瑟瑟的风伴着淅沥的雨，这是就是初秋的汉中。\r\n\r\n《天幕红尘》最后几页终于看完了，没怎么看懂，感觉完全不像豆豆的前两部作品的风格，字里行间刻意的成份太多，情节也过于生硬。书中的见路不走似乎有《遥远的救世主》的影子，只是一个更接近俗世，一个居高临下，用了两种方法体现了一个明白人的包容。不过我更喜欢元英和小丹的爱情，其实说是爱情都有些着相，是人的本性才对，彼此还没开口就知道对方想要什么，少了平常人之间的猜嫉，剩下的就是能不能给的问题了。当然，也不排除元英的确是个调情高手，就这样当下随缘了。\r\n\r\n我们每个人都在自己的人生道路上辗转前行，见路不走是一种觉悟，遥远的救世主是一种境界。\r\n\r\n书评就不写了，读的书本来就不多，怎么评都是主观臆断。','很久没更新了，不是没时间不想写，而是懒，懒得打字，懒得思考，时间就这样悄然而逝……','觉悟','爱情','人生','','','如是观','3','0');
INSERT INTO `tb_article` VALUES('6','6','正月初二 · 小雨','0','0','admin','2017-04-05 19:54:50','picture','picture','摄影','心情','','','','光影斑斓','2','0');
INSERT INTO `tb_article` VALUES('7','7','初冬，景如故','0','0','admin','2017-04-05 19:54:45','进入冬季，天很冷，时不时下点小雨，街上妖风阵阵，吹的人老想咳嗽，已经半个月没见阳光了。\r\n\r\n路边金黄色的银杏树叶最终也没能忍住寒风的摧残，随风飘落，形成了一道美丽的风景。周六的下午大家都等着早点下班，每天一眼能看到头的工作，已经让很多人忘记了外面的世界到底有多精彩，聊起来可能更多的是无奈。\r\n\r\n思绪追回到多年前，那时个汉中冬天还是下雪的，穿着羽绒服裹着围巾穿梭在大街小巷，心情是欢乐的。那时候北大街还有望湖春的包子和北大宾馆，东大街还有夜市，我们都没有什么钱，生活的却很有品质。而今，人越成长越孤单，虽然还是没什么钱，也开始追求生活品质，却怎么也追不上，能做的也只能让自己的心境越来越淡泊，也不知道这是好是坏。\r\n\r\n在这里工作已五年有余，人生六分之一时间都是坐在公司的这个地方面对着窗外，不知道自己是怎么坚持下来的，感觉自己就像对面楼顶的那棵树，每天随风摇摆，心无所住 。\r\n\r\n下班了，下回再聊……','进入冬季，天很冷，时不时下点小雨，街上妖风阵阵，吹的人老想咳嗽，已经半个月没见阳光了。感觉自己就像对面楼顶的那棵树，每天随风摇摆，心无所住 ……','生活','心情','人生','回忆','','大生活','1','0');
INSERT INTO `tb_article` VALUES('8','8','一个人走走停停，一个人的夕阳西下\r\n','0','0','admin','2017-04-05 19:54:50','picture','picture','夕阳','摄影','人生','','','光影斑斓','2','0');
INSERT INTO `tb_article` VALUES('9','9','五十度灰的天空','0','0','admin','2017-04-09 18:15:01','现在是凌晨四点多，最近不知为何，一天比一天醒的早，不是被外面的鸟叫声叫醒，就是从梦中惊醒，更多的是后者，就像现在。\n\n一晚上做了一个梦，梦的有些乱但真实，她们说梦境与现实是反的，我也希望如此。一直以来我都认为自己是一个具有B型人格的人，平常心，不强求，不易为外界事物影响。然而我慢慢发现近一年多的生活中我有A型人格行为，而且愈演愈烈。做事追求目标和效率，进取心强，急功近利，总想做到最好。我知道这并不是我的本质，只是随着年龄的增长，受大多数人价值观的影响，开始变得有压力。据说A型人格特质的人生命相对较短，难怪一直感觉身体不适。\n\n此刻窗外的天空还蒙着一层五十度的灰，春天迁徙过来家燕已经孵出了一窝小燕子，在外面叽叽喳喳的叫着，朝气蓬勃。可是到了秋天又有几只小燕子跟随妈妈南去呢，这不得而知，我只看见有的还没学会飞就不幸夭折，有的再夏季的狂风暴雨中无力挣扎，这就是命，是规律。','此刻窗外的天空还蒙着一层50度的灰，春天迁徙过来家燕已经孵出了一窝小燕子，在外面叽叽喳喳的叫着，朝气蓬勃。可是到了秋天又有几只小燕子跟随妈妈南去呢，这不得而知，我只看见有的还没学会飞就不幸夭折，有的再夏季的狂风暴雨中无力挣扎，这就是命，是规律 ……','觉悟','生活','规则','','','如是观','3','5');
INSERT INTO `tb_article` VALUES('10','10','不期而至！','0','0','admin','2017-04-05 19:54:46','半年未更新，一直疲于奔波。      未来，期待！','picture','生活','心情','过往','','','大生活','1','0');
INSERT INTO `tb_article` VALUES('11','11','曾经的过往………','0','0','admin','2017-04-05 19:54:48','曾几何时，每个月都会路过这片菜地几次，然后又匆匆离去……      如今……','picture','摄影','','','','','光影斑斓','2','0');
INSERT INTO `tb_article` VALUES('12','12','神雕侠侣不过只是男欢女爱罢了','0','0','admin','2017-04-05 19:54:53','《神雕侠侣》看过好几个版本，都没有细看，可能是以前年轻看到的只是一部武侠小说，其中台词部分并未完全领会。最近在看陈妍希版的觉得也还可以，虽不如刘亦菲脱俗，也算是刻画出了小龙女清新的气质，那些以貌取人者，我强烈鄙视你们。\r\n\r\n言归正传，最近刚刚更新到四十二集，看到小龙女和一灯大师的对话感触颇多，杨过和小龙女虽心心相印，但他俩在觉悟上却相差甚远，反而与一灯心灵相通。当然这也与她自幼受道家思想影响有关，释道本殊途同归，也可以理解。其中的情景是这样的：\r\n\r\n……\r\n\r\n一灯道：“倘若我师弟也不能救，那是大数使然。世上有的孩子生下来没多久便死了，小夫人嫁人之后方始不治，也不为夭。”\r\n\r\n杨过睁大了眼睛望着一灯，心想：“龙儿能否治愈，尚在未定，你却不说一句安慰的言语。”\r\n\r\n小龙女淡淡一笑，道：“大师说得很是。”眼望身周大雪，淡淡的道：“这些雪花落下来，多么白，多么好看。过几天太阳出来，每一片雪花都变得无影无踪。到得明年冬天，又有许许多多雪花，只不过已不是今年这些雪花罢了。”\r\n\r\n一灯点了点头，转头望着慈恩，道：“你懂么？”慈恩点了点头，心想日出雪消，冬天下雪，这些粗浅的道理有甚么不懂？\r\n\r\n一灯从怀中取出一个鸡蛋，交给了小龙女，说道：“世上鸡先有呢，还是蛋先有？”这是个千古无人能解的难题。\r\n\r\n杨过心想：“当此生死关头，怎地问起这些不打紧的事来？”\r\n\r\n小龙女接过蛋来，原来是个磁蛋，但颜色形状无一不像。她微一沉吟，已明其意，道：“蛋破生鸡，鸡大生蛋，既有其生，必有其死。”\r\n\r\n……\r\n\r\n生是死的开始，死是生的延续，无论是什么状态都无法长久，不执著才是大智慧。而这些杨过连门槛都还碰不到，仅仅只是看破名利而已，他与小龙女的交集也只停留在男欢女爱罢了。看来但凡是人，无论怎样的修为，都逃不过一个情字。','生是死的开始，死是生的延续，无论是什么状态都无法长久，不执著才是大智慧。而这些杨过连门槛都还碰不到，仅仅只是看破名利而已，他与小龙女的交集也只停留在男欢女爱罢了。看来但凡是人，无论怎样的修为，都逃不过一个情字……','觉悟','人生','爱情','生活','','如是观','3','0');
--
-- 表的结构tb_comments
--

DROP TABLE IF EXISTS `tb_comments`;
CREATE TABLE `tb_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `com_id` int(10) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `com_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 tb_comments
--

--
-- 表的结构tb_message
--

DROP TABLE IF EXISTS `tb_message`;
CREATE TABLE `tb_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `art_id` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `mes_name` varchar(255) NOT NULL,
  `mes_mail` varchar(255) NOT NULL,
  `mes_time` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `art_id` (`art_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 tb_message
--

INSERT INTO `tb_message` VALUES('1','9','软武器他v被淘汰有我','饿死的','416541454@qq.com','2017-04-09 18:15:01');
--
-- 表的结构tb_url
--

DROP TABLE IF EXISTS `tb_url`;
CREATE TABLE `tb_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `url_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 tb_url
--

INSERT INTO `tb_url` VALUES('1','www.baidu.com','百度搜索');
--
-- 表的结构tb_user
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `head_pic` varchar(1000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 tb_user
--

INSERT INTO `tb_user` VALUES('0','admin','admin','');
INSERT INTO `tb_user` VALUES('1','dd','1234','');
--
-- 表的结构tb_webinfo
--

DROP TABLE IF EXISTS `tb_webinfo`;
CREATE TABLE `tb_webinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dn` varchar(255) NOT NULL,
  `net_title` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `describe` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 tb_webinfo
--

INSERT INTO `tb_webinfo` VALUES('1','youme.com','你我网','youme','论坛');
--
-- 表的结构tb_webmasterinfo
--

DROP TABLE IF EXISTS `tb_webmasterinfo`;
CREATE TABLE `tb_webmasterinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webmaster` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `ICP` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 tb_webmasterinfo
--

INSERT INTO `tb_webmasterinfo` VALUES('1','dd','161616155@qq.com','454651564894','陕ICP备11002139号-1','陕西省');
