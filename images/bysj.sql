# Host: localhost  (Version: 5.5.53)
# Date: 2019-04-21 15:27:37
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "address"
#

CREATE TABLE `address` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_nickname` varchar(255) DEFAULT NULL COMMENT '收货人姓名',
  `ad_address` varchar(255) DEFAULT NULL COMMENT '所在地区',
  `ad_street` varchar(255) DEFAULT NULL COMMENT '详细地址',
  `ad_post` varchar(255) DEFAULT NULL COMMENT '邮编',
  `ad_mobile` varchar(255) DEFAULT NULL COMMENT '手机号',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='收货地址信息';

#
# Data for table "address"
#

INSERT INTO `address` VALUES (1,'戴龙','江西省抚州市临川区','学府路56号','000000','15798007572'),(3,'宝儿姐','内蒙古巴彦淖尔市乌拉特前旗','阿斯顿法国','012345','15968742369'),(5,'小程子','辽宁省沈阳市铁西区','萨顶顶打算','000000','14789562356'),(7,'张三','河北省邯郸市大名县','莎车县第三方发大','123456','14785203698'),(8,'李四','安徽省六安市霍山县','风电场','123456','145678909876'),(9,'宝儿姐','福建省南平市光泽县','居延海个办法v','666666','12345433245'),(10,'张星彩','内蒙古乌兰察布市兴和县','阿斯顿法国和','147852','15935789632'),(12,'戴龙','江西省抚州市临川区','瓦尔特','335101','15798007572');

#
# Structure for table "admin_user"
#

CREATE TABLE `admin_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(255) DEFAULT NULL,
  `a_password` int(11) DEFAULT NULL,
  `a_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "admin_user"
#


#
# Structure for table "books"
#

CREATE TABLE `books` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(255) DEFAULT NULL COMMENT '书籍名称',
  `b_serial` int(11) DEFAULT NULL COMMENT '书籍编号',
  `b_date` datetime DEFAULT NULL COMMENT '出版日期',
  `b_pic` varchar(255) DEFAULT NULL COMMENT '书籍图片',
  `b_price` float(5,2) DEFAULT NULL COMMENT '书籍单价',
  `b_num` int(11) DEFAULT NULL COMMENT '书籍数量',
  `b_author` varchar(255) DEFAULT NULL COMMENT '书籍作者',
  `b_on` datetime DEFAULT NULL COMMENT '上架时间',
  `isCart` varchar(255) DEFAULT NULL COMMENT '是否加入购物车',
  `cartNum` varchar(255) DEFAULT NULL COMMENT '购物车数量',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

#
# Data for table "books"
#

INSERT INTO `books` VALUES (1,'(特价书)NetKernel：面向资源计算实践',1,'2013-10-01 00:00:00','./images/books_sort/面向资源计算实践.jpg',33.12,80,'(比)古登斯(Tom Geudens)','2018-12-17 00:00:00','1','1'),(2,'跟老男孩学Linux运维',1,'2018-12-13 00:00:00','./images/books_sort/跟老男孩学Linux运维.jpg',69.90,101,'老男孩','2018-12-20 00:00:00','2','1'),(3,'深入理解以太坊',1,'2018-12-13 00:00:00','./images/books_sort/深入理解以太坊.jpg',55.90,11,'王欣 史钦锋 程杰','2018-12-20 00:00:00','2','1'),(4,'实时嵌入式系统软件设计',1,'2018-12-17 00:00:00','./images/books_sort/实时嵌入式系统软件设计.jpg',89.90,150,'[美] 哈桑·戈玛（hassan gomaa)','2018-12-20 00:00:00','2','1'),(5,'Effective Java中文版（原书第3版）',1,'2018-12-17 00:00:00','./images/books_sort/Effective Java中文版（原书第3版）.jpg',85.90,23,'[美] 约书亚·布洛克 （joshua bloch）','2018-12-20 00:00:00','2','1'),(6,'R语言：数据可视化与统计分析基础',1,'2017-05-13 00:00:00','./images/books_sort/R语言：数据可视化与统计分析基础.jpg',48.90,48,'王翔 朱敏','2018-06-14 00:00:00','2','1'),(7,'自己动手实现Lua',1,'2018-09-26 00:00:00','./images/books_sort/自己动手实现Lua.jpg',62.30,25,'张秀宏','2018-06-14 00:00:00','2','1'),(8,'重新定义Spring Cloud实战',1,'2018-09-20 00:00:00','./images/books_sort/重新定义Spring Cloud实战.jpg',90.90,45,'叶志远 钟尊发 蔡波斯','2018-12-13 00:00:00','2','1'),(9,'Spring Cloud微服务架构进阶',1,'2018-09-20 00:00:00','./images/books_sort/Spring Cloud微服务架构进阶.jpg',63.90,88,'朱荣鑫 张天 黄迪璇','2018-06-14 00:00:00','2','1'),(10,'Python深度学习：基于TensorFlow',1,'2018-09-21 00:00:00','./images/books_sort/Python深度学习：基于TensorFlow.jpg',55.90,77,'吴茂贵 王冬 李涛','2018-12-13 00:00:00','2','1'),(11,'机器学习：Go语言实现',1,'2018-10-16 00:00:00','./images/books_sort/机器学习：Go语言实现.jpg',41.90,96,'[美] 丹尼尔·怀特纳克（daniel whitenack)','2018-06-14 00:00:00','2','1'),(12,'代数组合论',2,'2015-07-01 00:00:00','./images/books_sort/代数组合论.jpg',34.90,44,'(美)理查德 p.斯坦利(richard p.stanley)','2018-09-20 00:00:00','2','1'),(13,'生活中的概率趣事（升级版）',2,'2018-07-01 00:00:00','./images/books_sort/生活中的概率趣事（升级版）.jpg',39.90,77,'[瑞典]彼得·欧佛森','2018-09-20 00:00:00','2','1'),(14,'线性代数（英文版·第9版）',2,'2017-03-01 00:00:00','./images/books_sort/线性代数（英文版·第9版）.jpg',55.90,55,'（美）史蒂文 j. 利昂','2018-07-01 00:00:00','2','1'),(15,'概率论基础教程(英文版·第9版)',2,'2017-03-01 00:00:00','./images/books_sort/概率论基础教程(英文版·第9版).jpg',55.90,22,'（美）谢尔登 m. 罗斯','2017-08-01 00:00:00','2','1'),(16,'30秒探索：数学',2,'2017-08-01 00:00:00','./images/books_sort/30秒探索：数学.jpg',49.00,100,'理查德·布朗','2018-09-21 00:00:00','2','1'),(17,'数据结构(C语言版)',1,'2018-06-01 00:00:00','./images/books_sort/数据结构(C语言版).jpg',35.10,25,'严蔚敏;吴伟民','2018-07-09 00:00:00','2','1'),(18,'机器学习算法',1,'2018-05-01 00:00:00','./images/books_sort/机器学习算法.jpg',48.30,47,'（意）朱塞佩·博纳科尔索','2018-05-10 00:00:00','2','1'),(19,'现代密码学及其应用',1,'2018-05-01 00:00:00','./images/books_sort/现代密码学及其应用.jpg',83.30,53,'（美）理查德·E.布拉胡特','2018-04-26 00:00:00','2','1'),(20,'高性能JavaScript',1,'2015-08-01 00:00:00','./images/books_sort/高性能JavaScript.jpg',52.00,77,'尼古拉斯.泽卡斯','2018-05-10 00:00:00','2','1'),(21,'Node.js进阶之路',1,'2017-01-01 00:00:00','./images/books_sort/Node.js进阶之路.jpg',29.70,88,'尤嘉','2018-07-01 00:00:00','2','1'),(22,'Vue.js快速入门',1,'2017-01-01 00:00:00','./images/books_sort/Vue.js快速入门.jpg',36.00,98,'陈陆扬','2018-09-21 00:00:00','1','1'),(23,'React进阶之路',1,'2018-04-01 00:00:00','./images/books_sort/React进阶之路.jpg',55.20,55,'徐超','2018-12-13 00:00:00','1','1'),(24,'数据库实验指导(第2版)',1,'2013-08-01 00:00:00','./images/books_sort/数据库实验指导(第2版).jpg',26.82,44,'杨海霞','2018-01-23 00:00:00','2','1'),(25,'图解算法',1,'2017-09-01 00:00:00','./images/books_sort/图解算法.jpg',28.30,3,'俞征武','2018-01-23 00:00:00','2','1'),(26,'嵌入式系统设计教程',1,'2016-08-01 00:00:00','./images/books_sort/嵌入式系统设计教程.jpg',39.20,54,'丁男','2018-07-01 00:00:00','2','1'),(27,'C++标准模板库编程实战',1,'2017-01-01 00:00:00','./images/books_sort/C++标准模板库编程实战.jpg',55.84,41,'(美)爱弗·霍顿','2018-12-13 00:00:00','2','1'),(28,'C语言程序设计',1,'2013-09-01 00:00:00','./images/books_sort/C语言程序设计.jpg',25.60,87,'丁晓峰','2018-09-21 00:00:00','2','1'),(29,'大数据分析：数据挖掘必备算法示例详解',1,'2016-12-26 00:00:00','./images/books_sort/大数据分析：数据挖掘必备算法示例详解.jpg',29.97,45,'张重生','2018-09-20 00:00:00','2','1'),(30,'云计算系统与人工智能应用',1,'2018-05-01 00:00:00','./images/books_sort/云计算系统与人工智能应用.jpg',69.30,12,'黄凯','2018-09-20 00:00:00','2','1');

#
# Structure for table "userinfo"
#

CREATE TABLE `userinfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) DEFAULT '' COMMENT '账号',
  `userPwd` varchar(255) DEFAULT '' COMMENT '密码',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "userinfo"
#

INSERT INTO `userinfo` VALUES (1,'戴尚龙','123456'),(2,'admin','123456'),(6,'linshi','123456'),(7,'jknb','123456'),(8,'dsl','123456');
