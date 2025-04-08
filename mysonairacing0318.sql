/*
Navicat MySQL Data Transfer

Source Server         : mysonairacing
Source Server Version : 50740
Source Host           : localhost:3306
Source Database       : mysonairacing

Target Server Type    : MYSQL
Target Server Version : 50740
File Encoding         : 65001

Date: 2025-03-18 10:20:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'Lba65833319', '‘超级管理员’');

-- ----------------------------
-- Table structure for `board`
-- ----------------------------
DROP TABLE IF EXISTS `board`;
CREATE TABLE `board` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boardname` varchar(20) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of board
-- ----------------------------
INSERT INTO `board` VALUES ('1', '公司简介', '测试内容，请勿删除');

-- ----------------------------
-- Table structure for `cate`
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(30) DEFAULT NULL,
  `module_en` varchar(30) DEFAULT NULL,
  `catename_en` varchar(30) DEFAULT NULL,
  `catename` varchar(30) DEFAULT NULL,
  `orderno` tinyint(3) unsigned DEFAULT '5',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', 'Aprilia4', 'Aprilia3', 'Aprilia', '阿普利亚', '5');
INSERT INTO `cate` VALUES ('2', 'Benelli ', 'Benelli ', 'Benelli ', '贝纳利', '5');
INSERT INTO `cate` VALUES ('3', 'Bombardier', 'Bombardier', 'Bombardier', '庞巴迪', '5');
INSERT INTO `cate` VALUES ('4', 'BMW', '宝马', 'BMW', '宝马', '5');
INSERT INTO `cate` VALUES ('5', 'DUCATI', '杜卡迪', 'DUCATI', '杜卡迪', '5');
INSERT INTO `cate` VALUES ('6', 'Harley Davidson ', '哈雷戴维森 ', 'Harley Davidson ', '哈雷戴维森 ', '5');
INSERT INTO `cate` VALUES ('7', 'HONDA', '本田', 'HONDA', '本田', '5');
INSERT INTO `cate` VALUES ('8', 'Indian Motorcycle', '印第安', 'Indian Motorcycle', '印第安', '5');
INSERT INTO `cate` VALUES ('9', 'KAWASAKI', '川崎', 'KAWASAKI', '川崎', '5');
INSERT INTO `cate` VALUES ('10', 'KTM', 'KTM', 'KTM', 'KTM', '5');
INSERT INTO `cate` VALUES ('11', 'KYMCO', '光阳', 'KYMCO', '光阳', '5');
INSERT INTO `cate` VALUES ('12', 'MOTO GUZZI', '古兹', 'MOTO GUZZI', '古兹', '5');
INSERT INTO `cate` VALUES ('13', 'MOTOMORINI', '摩托莫里尼', 'MOTOMORINI', '摩托莫里尼', '5');
INSERT INTO `cate` VALUES ('14', 'MV Agusta ', '奥古斯塔', 'MV Agusta ', '奥古斯塔', '5');
INSERT INTO `cate` VALUES ('15', 'PIAGGIO', '比亚乔', 'PIAGGIO', '比亚乔', '5');
INSERT INTO `cate` VALUES ('16', 'SUZUKI ', '铃木', 'SUZUKI ', '铃木', '5');
INSERT INTO `cate` VALUES ('17', 'YAWAMA', '雅马哈', 'YAWAMA', '雅马哈', '5');

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'Althea Nixon', 'kajulakaxo@mailinator.com', 'Dolor natus ex quis', null);
INSERT INTO `contact` VALUES ('2', 'Chester Reid', 'kimymizuc@mailinator.com', 'Eum voluptate qui co', null);
INSERT INTO `contact` VALUES ('3', 'Fiona Everett', 'pevi@mailinator.com', 'Perspiciatis ut dis', null);
INSERT INTO `contact` VALUES ('4', 'JohnRug', 'arikerer278@gmail.com', 'Hej, jeg ønskede at kende din pris.', null);
INSERT INTO `contact` VALUES ('5', 'jfkj', '22@qq.com', 'fgg', null);
INSERT INTO `contact` VALUES ('6', 'yy', 'yy@qq.com', 'fff', null);
INSERT INTO `contact` VALUES ('7', '5', '867987784@qq.com', '1111', null);
INSERT INTO `contact` VALUES ('8', 'TedRug', 'moqagides18@gmail.com', 'Hæ, ég vildi vita verð þitt.', null);
INSERT INTO `contact` VALUES ('9', 'HarryRug', 'ibucezevuda439@gmail.com', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', null);
INSERT INTO `contact` VALUES ('10', 'AmeliaRug', 'yawiviseya67@gmail.com', 'Szia, meg akartam tudni az árát.', null);
INSERT INTO `contact` VALUES ('11', 'NataSonna', 'woodthighgire1988@gmail.com', 'I would let you fuck me if you was here https://suptop.top/click?o=2&amp;a=1036', null);
INSERT INTO `contact` VALUES ('12', 'TedRug', 'moqagides18@gmail.com', 'Hola, volia saber el seu preu.', null);
INSERT INTO `contact` VALUES ('13', 'HarryRug', 'ibucezevuda439@gmail.com', 'Hi, I wanted to know your price.', null);
INSERT INTO `contact` VALUES ('14', 'TedRug', 'moqagides18@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', null);
INSERT INTO `contact` VALUES ('15', 'MasonRug', 'ebojajuje04@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', null);
INSERT INTO `contact` VALUES ('16', 'VlasowOneeuol', '14777@loves-ltd.com', 'Приветствуем вас на вашем интернет-сайте! \r\n \r\nК вам обращается компания по СЕО продвижению XRumer Art. \r\n \r\nВаш интернет-сайт, как можно отметить, только набирает обороты. Чтобы максимально ускорить процесс его роста, можем предложить услуги по СЕО-оптимизации. Также у нас имеются доступные и эффективные инструменты для SEO-специалистов. У наших специалистов большой опыт, в арсенале имеются успешные рабочие кейсы - предоставим по запросу. \r\n \r\nСейчас можем предложить скидку на самые актуальные услуги - 10%. \r\n \r\nУслуги нашей компании: \r\n \r\n- Трастовые ссылки (нужно всем сайтам) – стоимость 1500-5000 руб \r\n \r\n- Размещаем 2500 безанкорных ссылок (полезно для всех сайтов) – 3.900 рублей \r\n \r\n- Прогон по 110 000 сайтам (зона RU) – 2.900 р \r\n \r\n- Публикуем 150 постов В Контакте про ваш сайт (поможет получить рекламу) – 3.900 р \r\n \r\n- Публикации о вашем сайте на 300 форумах (мощная раскрутка ресурса) – 29.000 р \r\n \r\n- Мега Постинг – комплексный прогон на 3 миллиона ресурсов (очень мощный пакет для вашего сайта) – 39.900 рублей \r\n \r\n- Рассылаем сообщения по сайтам через форму обратной связи – договорная цена, будет зависеть от объема. \r\n \r\nЕсли есть вопросы, обращайтесь, всегда поможем. \r\n \r\n \r\nОплата: Yoo.Деньги, Bitcoin, МИР, СБП, Visa, MasterCard... \r\nПринимаем USDT - Отчётность. \r\nTelgrm: https://t.me/exrumer \r\nSkype: Loves.Ltd \r\n \r\nТолько этот.', null);
INSERT INTO `contact` VALUES ('17', 'TedRug', 'moqagides18@gmail.com', 'Γεια σου, ήθελα να μάθω την τιμή σας.', null);
INSERT INTO `contact` VALUES ('18', 'Chauncey Moralez', 'moralez.chauncey@gmail.com', 'I can blast your ad text to millions of website contact forms. One flat rate, never any per click costs. People will read your message just like you\'re reading this one that I just sent through your website contact form now.\r\n\r\nInterested? Get in touch via the contact details below.\r\n\r\nRegards,\r\nChauncey Moralez\r\nEmail: Chauncey.Moralez@morebiz.my\r\nWebsite: http://jsnkjy.formblastmarketing.top', null);
INSERT INTO `contact` VALUES ('19', 'HarryRug', 'ibucezevuda439@gmail.com', 'Γεια σου, ήθελα να μάθω την τιμή σας.', null);
INSERT INTO `contact` VALUES ('20', 'Rowan Ortega', 'rowanortega.vgro@gmail.com', 'Hi. We run a YouTube growth service, which increases your number of subscribers both safety and practically.\r\n\r\n- We guarantee to gain you new 700+ subscribers per month\r\n- People subscribe because they are interested in your videos/channel, increasing video likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any bots.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately. If you are interested and would like to see some of our previous work, let me know and we can discuss further.\r\n\r\nKind Regards,\r\n\r\nTo Unsubscribe, reply with the word unsubscribe in the subject.', null);
INSERT INTO `contact` VALUES ('21', 'JohnRug', 'arikerer278@gmail.com', 'Hej, jeg ønskede at kende din pris.', null);
INSERT INTO `contact` VALUES ('22', 'GeorgeRug', 'ibucezevuda439@gmail.com', 'Hi, I wanted to know your price.', null);
INSERT INTO `contact` VALUES ('23', 'TedRug', 'moqagides18@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', null);
INSERT INTO `contact` VALUES ('24', 'Tia Brooke', 'tia@promotebusinesonline.com', 'Hi sonairacing.com,\r\n\r\nAt present, your website is not ranking on Google and your competitors are sitting at the top and taking all the fruits. If you\'re still interested to get more phone calls and leads from your website, then we can put it on top 3 positions on Google Maps within your target area.\r\n\r\nCan I send the proposal and pricing to accomplish your business goals?\r\n\r\nThanks,\r\nBests Regards,\r\nTia Brooke\r\nSr SEO consultant\r\nhttp://www.Increaseorganictraffic.com\r\nPh. No: 1-804-715-1479\r\n\r\nIf you don’t want me to contact you again about this, reply with “unsubscribe”', null);
INSERT INTO `contact` VALUES ('25', 'Lisa Grace', 'lisa@promotebusinesonline.com', 'Hi sonairacing.com,\r\n\r\nI would like to discuss SEO!\r\n\r\nI hope this email finds you well. We can put your website on 1st page of Google to drive relevant traffic to your site it can help your business expand its reach, acquire more customers, and boost revenue. Let us know if you would be interested in getting detailed proposal. We can also schedule a call &amp; will be pleased to explain our services in detail.\r\n\r\nWe look forward to hearing from you soon.\r\n\r\nThanks,\r\n\r\nBests Regards,\r\nLisa Grace\r\nSr SEO consultant\r\nhttps://www.increaseorganictraffic.com\r\nPh. No: 1-804-715-1479\r\n\r\nIf you don’t want me to contact you again about this, reply with “unsubscribe”', null);
INSERT INTO `contact` VALUES ('26', 'ConyRug', 'ibucezevuda439@gmail.com', 'Hola, quería saber tu precio..', null);
INSERT INTO `contact` VALUES ('27', 'Keira Bowman', 'bowman.keira88@gmail.com', 'Добрый вечер! \r\nГотовы предложить лучшие &quot;смертоносные&quot; прогоны для сайтов конкурента. Всего от 3000 р. \r\n- Гарантированный результат. Онлайн-сайты точно &quot;умрут&quot;. \r\n- Наибольшее количество негативных фитбеков. \r\n- Наша специальная база - выжимка самых &quot;смертельных&quot; площадок из 10 млн. веб-сайтов (вирусные, спамные, порно и так далее). Действует безотказно. \r\n- Прогон производим одновременно с 4 мощных серверов. \r\n- Постоянная отправка токсичных ссылок на электронную почту. \r\n- Выполнение в течение 40-240 часов сутки напролет. Растянем по времени сколько угодно. \r\n- Прогоняем с запрещёнными ключевыми фразами. \r\nТелегрм: @exrumer \r\nSkype: xrumer.pro\r\nТолько эти!', null);
INSERT INTO `contact` VALUES ('28', 'TedRug', 'moqagides18@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', null);
INSERT INTO `contact` VALUES ('29', 'ArthurRug', 'ibucezevuda439@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', null);
INSERT INTO `contact` VALUES ('30', 'GeorgeRug', 'ibucezevuda439@gmail.com', 'Hi, ego volo scire vestri pretium.', null);
INSERT INTO `contact` VALUES ('31', 'TedRug', 'moqagides18@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', null);
INSERT INTO `contact` VALUES ('32', 'JohnRug', 'anepivepaz038@gmail.com', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', null);
INSERT INTO `contact` VALUES ('33', 'Joleen Lacey', 'joleen.lacey90@outlook.com', 'Hey Sonairacing,\r\n\r\nAre you tired of spending countless hours creating the perfect visuals for your marketing campaigns? Imagine having a powerful tool at your fingertips that generates professional-grade images and designs in just a few clicks. Sounds like a game-changer, right?\r\n\r\nI’m excited to share a breakthrough in design technology—a platform powered by artificial intelligence that redefines the way you create and enhance your visuals. Whether you\'re designing logos, crafting social media graphics, or preparing stunning e-commerce mockups, this innovative solution takes the guesswork out of design.\r\n\r\n=&gt;&gt; https://go-artistly-ai.blogspot.com/\r\n\r\nHere’s what makes this AI-driven design platform stand out:\r\n\r\nInstant Image Generation: Simply enter a keyword, and watch as the platform produces high-quality images and artwork tailored to your needs.\r\n\r\nSeamless Visual Transformation: Easily modify any ad or image by generating new versions with perfect text, colors, and layouts—no advanced design skills required.\r\n\r\nEffortless Background Editing: Replace backgrounds in any scene instantly, giving your visuals a professional, polished look.\r\n\r\nSmart Expansion Features: Enhance your images by expanding them and filling in missing details using cutting-edge AI technology.\r\n\r\nQuick E-commerce Mockups: Place your artwork on products like t-shirts, mugs, and more, complete with realistic fabric textures and lighting effects.\r\n\r\nStreamlined Text &amp; Style Updates: Update text within images and replicate any design style with a simple upload, saving you time and creative energy.\r\n\r\nWhat I love most about this platform is how it effortlessly blends creativity with technology. It’s designed to empower small business owners, digital marketers, and creative professionals alike—saving time while boosting your visual content’s impact.\r\n\r\nReady to revolutionize your design process and elevate your marketing efforts? Click the link below to discover this innovative tool in action:\r\n\r\nDiscover the AI-Driven Design Platform Now\r\n\r\n=&gt;&gt; https://go-artistly-ai.blogspot.com/\r\n\r\nDon’t miss out on the opportunity to simplify your workflow and create visuals that captivate and convert. If you have any questions or need more details, feel free to reply to this email.\r\n\r\nWishing you success and stunning visuals!\r\n\r\nP.S. Imagine harnessing the power of professional design with just a few clicks. This is your shortcut to captivating visuals—try it today and see the difference!\r\n\r\n=&gt;&gt; https://go-artistly-ai.blogspot.com/\r\n\r\nBest regards,\r\n\r\n\r\n\r\n\r\nTo Your Success, \r\n[Joleen Lacey]', null);
INSERT INTO `contact` VALUES ('34', 'GeorgeRug', 'ibucezevuda439@gmail.com', 'Hallo, ek wou jou prys ken.', null);
INSERT INTO `contact` VALUES ('35', 'JohnRug', 'yawiviseya67@gmail.com', 'Hi, I wanted to know your price.', null);
INSERT INTO `contact` VALUES ('36', 'TedRug', 'ibucezevuda439@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', null);
INSERT INTO `contact` VALUES ('37', 'Janet Julian', 'ruchiuyou@gmail.com', 'Hi. We run a YouTube growth service, which increases your number of subscribers both safety and practically.\r\n\r\n- We guarantee to gain you new 700 subscribers per month\r\n- People subscribe because they are interested in your videos/channel, increasing video likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any bots.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately. If you are interested and would like to see some of our previous work, let me know and we can discuss further.\r\n\r\nKind Regards,\r\n\r\nTo Unsubscribe, reply with the word unsubscribe in the subject.', null);
INSERT INTO `contact` VALUES ('38', 'Kevin Barber', 'halfey.katlyn@outlook.com', 'Hi Sonairacing,\r\n\r\nLet’s face it—most marketing strategies today are ineffective, leaving business owners frustrated and wondering where all their money went. \r\n\r\nHere’s the truth: Traditional marketing doesn’t work anymore. It’s about time to shift to direct-response marketing, the proven strategy that generates results in the real world.\r\n\r\nDan Kennedy, one of the leading marketing experts, swears by direct-response marketing, and his strategies have helped thousands of business owners grow their brands. \r\n\r\nLet me show you how to apply it to your business.\r\n\r\nStep 1: Know Your Target Audience\r\n\r\nTargeting everyone is a huge mistake. You must define your ideal customer. Direct-response marketing requires you to speak directly to a specific group of people.\r\n\r\nExample 1:\r\nTarget Audience: Busy professionals\r\n\r\nOffer: “Quick and effective workout plans for busy professionals.”\r\n\r\nThis specific focus allows businesses to craft marketing messages that truly resonate.\r\n\r\nExample 2:\r\nTarget Audience: Aspiring entrepreneurs\r\n\r\nOffer: “The ultimate guide to start your e-commerce store in 30 days—no prior experience required.”\r\n\r\nThis appeals directly to the desires of this niche, making the marketing message much stronger.\r\n\r\nStep 2: Clear and Compelling Offer\r\n\r\nA great product is only as good as the offer. The offer should solve a problem and make it impossible for your ideal customer to say no.\r\n\r\nExample 1:\r\nA fitness coach offered: “Sign up for my program today and receive a free 1-hour coaching session, valued at $300.” This added value made the offer irresistible.\r\n\r\nExample 2:\r\nAn e-commerce store offered: “Free shipping on all orders over $50, plus a free product with every purchase.” The free bonus added to the deal makes it more attractive.\r\n\r\nStep 3: Track Everything\r\n\r\nIf you’re not measuring, you’re guessing. The most successful marketers track their results religiously.\r\n\r\nExample 1:\r\nA car dealership tested their email campaigns and found that subject lines with specific car models drove a 25% higher open rate than generic ones.\r\n\r\nExample 2:\r\nA SaaS company split their traffic between two landing pages: one with a video and one with text. The video version converted 40% more visitors into paying customers.\r\n\r\nYour Action Step:\r\nStart tracking your marketing results—whether it’s email opens, clicks, or conversions. If you don’t track, you can’t improve.\r\n\r\nTomorrow, we’ll dive into crafting irresistible offers and how to create something your customers can’t say no to.\r\n\r\nTo your success,\r\nKevin\r\n\r\nWho is Dan Kennedy?\r\nhttps://books.forbes.com/authors/dan-kennedy/\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=sonairacing.com', null);
INSERT INTO `contact` VALUES ('39', 'GeorgeRug', 'ocopesuq299@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', null);
INSERT INTO `contact` VALUES ('40', 'OscarRug', 'ebojajuje04@gmail.com', 'Szia, meg akartam tudni az árát.', null);
INSERT INTO `contact` VALUES ('41', 'IslaRug', 'ebojajuje04@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', null);
INSERT INTO `contact` VALUES ('42', 'TedRug', 'ocopesuq299@gmail.com', 'Hola, volia saber el seu preu.', null);
INSERT INTO `contact` VALUES ('43', 'Jayrn Marques', 'oliva.tenison@yahoo.com', 'Hi Sonairacing,\r\n\r\nIn today’s competitive world of digital marketing, finding tools and systems that can help streamline the process while maximizing efficiency is essential. \r\n\r\nOne tool that has recently been gaining attention among savvy marketers is the PLR funnel.\r\n\r\nPLR (Private Label Rights) funnels provide an incredible opportunity for digital marketers to automate their lead generation and sales processes without reinventing the wheel. \r\n\r\nInstead of spending time and money creating content from scratch, marketers can leverage PLR products—which are ready-made, customizable, and ready to go.\r\n\r\nThis blog post will dive deep into why PLR funnels are the game-changer for marketers and how you can leverage them to scale your business rapidly. \r\n\r\nI will explore the benefits, the step-by-step process of setting up PLR funnels, and provide real-life examples to help you understand how you can use them effectively.\r\n\r\nLearn More Here: \r\nhttps://marketersmentor.com/game-changer-for-digital-marketers.php?refer=sonairacing.com\r\n\r\nTalk soon,\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=sonairacing.com', null);
INSERT INTO `contact` VALUES ('44', 'GeorgeRug', 'ocopesuq299@gmail.com', 'Hi, kam dashur të di çmimin tuaj', null);
INSERT INTO `contact` VALUES ('45', 'TedRug', 'ocopesuq299@gmail.com', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', null);
INSERT INTO `contact` VALUES ('46', 'JohnRug', 'yawiviseya67@gmail.com', 'Hæ, ég vildi vita verð þitt.', null);
INSERT INTO `contact` VALUES ('47', 'Jayrn Marques', 'visconti.millie@googlemail.com', 'Hi Sonairacing,\r\n\r\nI still remember sitting at my desk, staring at my sales numbers, wondering why nothing was working. \r\n\r\nI had tried everything—running ads, tweaking my website, and offering discounts—but my results were frustratingly inconsistent. \r\n\r\nOne month would bring a flood of leads, and the next? Crickets.\r\n\r\nThen, I stumbled across a simple shift in strategy that changed everything. \r\n\r\nInstead of chasing customers, I learned how to pull them in naturally—creating messaging and systems that made my business the only logical choice. \r\n\r\nThe impact was immediate, and today, I’m sharing the exact strategies so you can do the same.\r\n\r\nLet\'s dive in: \r\nhttps://marketersmentor.com/attract-customers.php?refer=sonairacing.com\r\n\r\nTalk soon,\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=sonairacing.com', null);
INSERT INTO `contact` VALUES ('48', 'JohnRug', 'duqotayowud23@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', null);
INSERT INTO `contact` VALUES ('49', 'GeorgeRug', 'ocopesuq299@gmail.com', 'Salam, qiymətinizi bilmək istədim.', null);
INSERT INTO `contact` VALUES ('50', 'Jorg Gragg', 'wbcctv@hotmail.com', '您好\r\n  从贵公司网站上得知贵司从事外贸业务, 我们从事外贸网站的英文及小语种关键词google优化服务\r\n\r\n可以低成本无风险地为您获取国外客户。  如有兴趣，请联系 微信:b590367 ,  qq: 3057296586  我们将会根据您的产品\r\n\r\n给你提供一套网站优化营销方案供参考。', null);
INSERT INTO `contact` VALUES ('51', 'TedRug', 'ocopesuq299@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', null);
INSERT INTO `contact` VALUES ('52', 'Jayrn Marques', 'marlene.stanfield@gmail.com', 'Hi Sonairacing,\r\n\r\nA few years ago, I was struggling to get traffic to my online business. \r\n\r\nI had built what I thought was the perfect website, had an amazing offer, and even spent money on ads—but nothing worked. \r\n\r\nIt felt like I was shouting into the void, hoping someone would notice me.\r\n\r\nThen, I discovered a completely different approach, one that top entrepreneurs quietly use to attract a flood of traffic without constantly chasing it. \r\n\r\nThe secret? Traffic isn’t created—it’s redirected. Instead of hoping people find you, you strategically position yourself where they already are.\r\n\r\nThis simple shift changed everything for me. It’s the foundation of what some of the most successful marketers use to drive traffic effortlessly. \r\n\r\nIf you’ve ever wondered how certain businesses seem to attract leads on autopilot, today, I’ll break down the step-by-step process so you can do the same.\r\n\r\nLet\'s dive in: \r\nhttps://marketersmentor.com/unlimited-traffic.php?refer=sonairacing.com\r\n\r\nTalk soon,\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=sonairacing.com', null);
INSERT INTO `contact` VALUES ('53', 'Joanna Cooks', 'wbcctv@hotmail.com', '您好\r\n  从贵公司网站上得知贵司从事外贸业务, 我们从事外贸网站的英文及小语种关键词google优化服务\r\n\r\n可以低成本无风险地为您获取国外客户。  如有兴趣，请联系 微信:b590367 ,  qq: 3057296586  我们将会根据您的产品\r\n\r\n给你提供一套网站优化营销方案供参考。', null);
INSERT INTO `contact` VALUES ('54', 'GeorgeRug', 'ocopesuq299@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', null);
INSERT INTO `contact` VALUES ('55', 'TedRug', 'ocopesuq299@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', null);

-- ----------------------------
-- Table structure for `guestbook`
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `content` text,
  `intime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guestbook
-- ----------------------------

-- ----------------------------
-- Table structure for `link`
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(20) DEFAULT NULL,
  `link_url` varchar(50) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL,
  `intime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link
-- ----------------------------

-- ----------------------------
-- Table structure for `module`
-- ----------------------------
DROP TABLE IF EXISTS `module`;
CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(30) NOT NULL,
  `module_en` varchar(30) NOT NULL DEFAULT '',
  `orderno` tinyint(3) unsigned NOT NULL DEFAULT '5',
  `module_explain` varchar(30) NOT NULL DEFAULT '',
  `module_en_explain` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of module
-- ----------------------------
INSERT INTO `module` VALUES ('1', '门锁', 'Door Lock', '1', 'Buick', 'Oil Cap');
INSERT INTO `module` VALUES ('8', '其他', 'Other Series', '2', '水箱盖', 'Radiator Cap');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `cate_id` int(10) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `content` text,
  `Simg` varchar(255) DEFAULT NULL,
  `intime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title_en` varchar(255) NOT NULL,
  `author_en` varchar(255) DEFAULT NULL,
  `content_en` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', 'PHILIPP 受苦，全心投入，赢得了在比赛2中的积分！', '1', '官方', '\n对Go Eleven车队来说，星期天经历了高潮和低谷，由Philipp Oettl的顽强表现所标志，他成功咬紧牙关，忍受痛苦，并取得了一份接近前十名的积极成绩。\n\n早上以德国车手的良好热身开始，他在后方测试了新的Pirelli轮胎进化版本，试图在在比赛1中摔倒后重新获得与摩托车的默契。第11名，在35秒以下完成圈速，而且没有冒太多风险，仍然是一个积极的迹象。然而，回到车库后，他开始抱怨右肩的疼痛逐渐加剧，感到一些力量的丧失。\n', '1.jpg', '2023-09-15 16:07:30', 'PHILIPP SOFFRE, CI METTE IL CUORE, E CONQUISTA PUNTI IN GARA 2!\n', null, 'A Sunday of ups and downs for Team Go Eleven, marked by the tremendous tenacity of Philipp Oettl, who managed to grit his teeth, endure suffering, and bring home a positive result just outside the Top Ten.\n\nThe morning started with a good Warm Up for the German rider, who tested the new Pirelli evolution on the rear, aiming to regain the feeling with the bike lost after the fall in Race 1. Eleventh place, lapping under 35 seconds without taking too many risks, is still a positive sign. However, upon returning to the pits, he began to complain of increasing pain in his right shoulder, experiencing a slight loss of strength.\n');
INSERT INTO `news` VALUES ('2', '菲利普·厄特尔在比赛1的早期圈段摔倒，骑手无大碍', '2', '', '一个星期六以极好的状态开始，但对Go Eleven车队和Philipp Oettl来说，以最糟糕的方式结束；在自由练习3中获得第三名后，由于黄旗影响的超级极限赛，以及由于摔倒导致比赛1提前结束，这让皮埃蒙特车队带回一个出色成绩的希望破灭了。\n\n自由练习3提供了一个令人惊讶的结果；Philipp将他的杜卡迪Panigale V4-RS推到了第三位，仅落后于Alvaro Bautista两十分之一。在这个开始使用旧轮胎的会话中，Philipp试图调整发动机刹车，并在会话结束时表达了满意，尤其是在米萨诺打破34.0的记录！\n\n', '2.jpg', '2023-09-15 16:10:00', 'CADUTA NEI PRIMI GIRI DI GARA 1 PER PHILIPP OETTL, RIDER OK', null, 'A Saturday that started off great but ended in the worst way for Team Go Eleven and Philipp Oettl; after securing the third position in FP 3, a Superpole affected by yellow flags, and Race 1 cut short due to a fall, they dashed the hopes for the Piemontese team to bring home an excellent result.\n\nThe FP 3 provided a result that was nothing short of surprising; Philipp brought his Ducati Panigale V4-RS to the third position, just two tenths behind Alvaro Bautista. During the session, which started with used tires, Philipp tried to fine-tune the engine brake and expressed satisfaction at the end of the session, especially for breaking the 34.0 barrier at Misano!\n');
INSERT INTO `news` VALUES ('3', '埃斯托里尔一个疯狂的周日，哈维和 GO 11 团队两次跻身前十！', '3', null, '在Estoril的星期天，在WorldSBK的第三轮比赛中，天气状况影响了所有赛段：湿润的热身赛，混合条件的超级极限赛，以及一场有轻微持续雨的干燥第二场比赛。Xavi Fores获得了两次前十名的成绩，在冲刺赛中获得第九名，在下午的比赛中获得第十名。他在所有抓地力条件下展现了速度、可靠性和积极性。\n\n热身赛在由于夜间降雨而变得非常湿滑的赛道上进行。Xavi从一开始就找到了良好的节奏，在湿润的条件下似乎非常得心应手，并逐渐提高了每圈的速度。他以第十名的成绩结束了比赛，避免在对最终结果影响不大的比赛中冒过多风险。\n', '3.jpg', '2023-09-15 16:12:18', 'A CRAZY SUNDAY IN THE WEATHER IN ESTORIL GIVES TWO TOP TEN TO XAVI AND THE GO ELEVEN TEAM!', null, 'In the Estoril Sunday, during Round 03 of WorldSBK, weather conditions affected all sessions: Wet Warm Up, mixed conditions for the Superpole Race, and a dry Race 2 with a slight and constant rain. Xavi Fores secured two Top Ten placements, finishing ninth in the Sprint race and tenth in the afternoon. He showcased speed, reliability, and aggressiveness in all grip conditions.\n\nThe Warm Up took place on a very wet track due to overnight rain. Xavi found a good rhythm from the start, appearing comfortable on the bike in wet conditions and improving lap by lap. He finished in tenth position, avoiding unnecessary risks in a session that wouldn\'t significantly impact the final result.\n');
INSERT INTO `news` VALUES ('7', '哈维重返第一场比赛！', '7', null, 'Xavi Fores，今天早上在杜卡迪Go Eleven的FP3比赛中攀登，是Estoril赛道上一场伟大的第一场比赛的作者！在一个糟糕的开局之后，他以倒数第二名的成绩进入了第一节。什么时候，与前五名保持一致，尤其是在比赛的最后一段！\n\n\n\n这位经验丰富的西班牙车手的第一天是一种冲刺；周六，天气真的很短，骑着一辆新自行车参加世界超级自行车赛从来都不是一件容易的事。第一轮比赛以相当低的温度开始，这使SCX轮胎略微陷入危机；哈维必须很快变得熟悉，已经在努力推动，才能理解自行车的极限。在比赛进行到一半时，他已经能够打开38号低音，这是速度和适应性很强的标志。不幸的是，由于后轮胎的急剧减少，无法再次改善，但感觉立即很好。回到维修站，他对起点感到高兴和满意，为杜卡迪V4-R的设置提供了指导，以便能够将其融入自己的骑行风格。\n', '7.jpg', '2023-09-15 16:46:16', 'Xavi returns for the first game!', null, 'Xavi Fores, who climbed this morning in the FP3 session of the Ducati Go Eleven, was the author of a great first race on the Estoril track! After a poor start, he entered the first quarter in second-to-last place. What a time, consistent with the top five, especially in the final stretch of the race!\n\n\n\nThe experienced Spanish rider\'s first day was a sprint; on Saturday, the weather was really short and racing a World Superbike on a new bike is never easy. The first round started with fairly low temperatures, which put the SCX tires into a slight crisis; Harvey had to quickly become familiar, already pushing hard, to understand the limits of the bike. Halfway through the game, he was already able to open up the 38 bass, a sign of speed and adaptability. Unfortunately it couldn\'t be improved again due to the drastic reduction of the rear tire, but it felt good immediately. Back in the pits, happy and satisfied with his starting point, he provided guidance on the setup of the Ducati V4-R so that he could fit it into his own riding style.\n');
INSERT INTO `news` VALUES ('8', 'SONAI索耐瑞森 2023 EICMA | 完美收官', '8', null, '索耐以优异的品质，吸睛无数，引来全球行业精英竞相代理.', '8.jpg', '2023-09-27 22:24:39', 'SONAI 2023 EICMA | A perfect ending', null, 'With its excellent quality, Sonai attracts countless attention and attracts global industry elites to compete for its agency.');
INSERT INTO `news` VALUES ('9', '热烈庆祝索耐官网改版', '9', null, '索耐网站全面改版，欢迎客户点击查看 Welcome to www.sonairacing.com Website.我们将尽我们最大的努力，真诚为你制作产品，为你服务', '9.jpg', '2023-09-27 22:24:53', 'Warmly celebrate the revision of Sonai official website', null, 'Sonairacing\'s website has been completely revised. Customers are welcome to click to view. Welcome to www.sonairacing.com Website. We will do our best to sincerely make products for you and serve you.');

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `productname_en` varchar(255) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `productno` varchar(255) DEFAULT NULL,
  `cate_id` int(30) DEFAULT NULL,
  `sonai_ceramic` varchar(255) NOT NULL,
  `sonai_sintered` varchar(255) NOT NULL,
  `EBS` varchar(255) NOT NULL,
  `SBS` varchar(255) NOT NULL,
  `Brenta` varchar(255) NOT NULL,
  `content` text,
  `content_en` text,
  `orderno` int(30) DEFAULT NULL,
  `Bimg` varchar(100) DEFAULT NULL,
  `Simg` varchar(255) DEFAULT NULL,
  `intime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `hts` int(30) DEFAULT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_details` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=339 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'APRILIA APR125', 'APRILIA APR125 -- test', '', '1', 'YSD00175', 'SSJ00175', 'FA165', 'SBS 134/638', '3064 OGRANIC\\n4064 SINTERED', '', '', '1', 'APRILIA APR125.jpg', 'APRILIA APR125.jpg', '2024-07-08 21:13:12', null, '00175', 'AKT_AK125EVO_2008-2012_true_false/BKT_AK125EVO_2010-2012_true_false/AKT_AK125EVO_2008-2012_false_false/AKT_AK125EVO_2008-2012_true_true/AKT_AK125EVO_2008-2012_true_true');
INSERT INTO `product` VALUES ('2', 'APRILIA GPR125', 'APRILIA GPR125', '', '1', '', '2', '', '2', '', '', '', '2', 'APRILIA GPR125.jpg', 'APRILIA GPR125.jpg', '2024-07-08 20:30:24', null, '00175', '');
INSERT INTO `product` VALUES ('3', 'APRILIA APR150', 'APRILIA APR150', '', '1', '', '3', '', '3', '', '', '', '3', 'APRILIA APR150.jpg', 'APRILIA APR150.jpg', '2024-07-08 20:30:25', null, '00175', '');
INSERT INTO `product` VALUES ('4', 'APRILIA GPR150', 'APRILIA GPR150', '', '1', '', '4', '', '23', '', '', '', '4', 'APRILIA GPR150.jpg', 'APRILIA GPR150.jpg', '2024-07-08 20:30:30', null, '', '');
INSERT INTO `product` VALUES ('5', 'APRILIA CR150', 'APRILIA CR150', '', '1', '', '', '', '', '', '', '', '5', 'APRILIA CR150.jpg', 'APRILIA CR150.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('6', 'APRILIA 200ie', 'APRILIA 200ie', '', '1', '', '', '7', '', '', '', '', '6', 'APRILIA 200ie.jpg', 'APRILIA 200ie.jpg', '2024-07-08 20:18:59', null, '', '');
INSERT INTO `product` VALUES ('7', 'APRILIA APR250', 'APRILIA APR250', '', '1', '', '', '', '', '', '', '', '7', 'APRILIA APR250.jpg', 'APRILIA APR250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('8', 'APRILIA SR MAX 250', 'APRILIA SR MAX 250', '', '1', '', '', '', '', '', '', '', '8', 'APRILIA SR MAX 250.jpg', 'APRILIA SR MAX 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('9', 'APRILIA SR MAX 300', 'APRILIA SR MAX 300', '', '1', '', '', '', '', '', '', '', '9', 'APRILIA SR MAX 300.jpg', 'APRILIA SR MAX 300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('10', 'APRILIA RS 660', 'APRILIA RS 660', '', '1', '', '', '', '', '', '', '', '10', 'APRILIA RS 660.jpg', 'APRILIA RS 660.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('11', 'APRILIA Mana 850 GT', 'APRILIA Mana 850 GT', '', '1', '', '', '', '', '', '', '', '11', 'APRILIA Mana 850 GT.jpg', 'APRILIA Mana 850 GT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('12', 'Benelli BN150S', 'Benelli BN150S', '', '2', '', '', '', '', '', '', '', '12', 'Benelli BN150S.jpg', 'Benelli BN150S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('13', 'Benelli BJ250', 'Benelli BJ250', '', '2', '', '', '', '', '', '', '', '13', 'Benelli BJ250.jpg', 'Benelli BJ250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('14', 'Benelli                          BJ250T', 'Benelli BJ250T', '', '2', '', '', '', '', '', '', '', '14', 'Benelli BJ250T.jpg', 'Benelli BJ250T.jpg', '2023-12-12 15:52:55', null, '', '');
INSERT INTO `product` VALUES ('15', 'Benelli Leoncino 250', 'Benelli Leoncino 250', '', '2', '', '', '', '', '', '', '', '15', 'Benelli Leoncino 250.jpg', 'Benelli Leoncino 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('16', 'Benelli TRK251', 'Benelli TRK251', '', '2', '', '', '', '', '', '', '', '16', 'Benelli TRK251.jpg', 'Benelli TRK251.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('17', 'Benelli BJ300GS', 'Benelli BJ300GS', '', '2', '', '', '', '', '', '', '', '17', 'Benelli BJ300GS.jpg', 'Benelli BJ300GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('18', 'Benelli BJ300GS-C', 'Benelli BJ300GS-C', '', '2', '', '', '', '', '', '', '', '18', 'Benelli BJ300GS-C.jpg', 'Benelli BJ300GS-C.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('19', 'Benelli BN302S', 'Benelli BN302S', '', '2', '', '', '', '', '', '', '', '19', 'Benelli BN302S.jpg', 'Benelli BN302S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('20', 'Benelli imperiale400', 'Benelli imperiale400', '', '2', '', '', '', '', '', '', '', '20', 'Benelli imperiale400.jpg', 'Benelli imperiale400.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('21', 'Benelli Leoncino 500', 'Benelli Leoncino 500', '', '2', '', '', '', '', '', '', '', '21', 'Benelli Leoncino 500.jpg', 'Benelli Leoncino 500.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('22', 'Benelli TRK502', 'Benelli TRK502', '', '2', '', '', '', '', '', '', '', '22', 'Benelli TRK502.jpg', 'Benelli TRK502.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('23', 'Benelli                  TRK502 X                ', 'Benelli TRK502 X', '', '2', '', '', '', '', '', '', '', '23', 'Benelli TRK502 X.jpg', 'Benelli TRK502 X.jpg', '2023-12-12 15:52:01', null, '', '');
INSERT INTO `product` VALUES ('24', 'Benelli TRK502 X （Spokes version）', 'Benelli TRK502 X （Spokes version）', '', '2', '', '', '', '', '', '', '', '24', 'Benelli TRK502 X （Spokes version）.jpg', 'Benelli TRK502 X （Spokes version）.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('25', 'Benelli 502C', 'Benelli 502C', '', '2', '', '', '', '', '', '', '', '25', 'Benelli 502C.jpg', 'Benelli 502C.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('26', 'Benelli BJ600', 'Benelli BJ600', '', '2', '', '', '', '', '', '', '', '26', 'Benelli BJ600.jpg', 'Benelli BJ600.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('27', 'Benelli BJ600GS', 'Benelli BJ600GS', '', '2', '', '', '', '', '', '', '', '27', 'Benelli BJ600GS.jpg', 'Benelli BJ600GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('28', 'Benelli TNT 600', 'Benelli TNT 600', '', '2', '', '', '', '', '', '', '', '28', 'Benelli TNT 600.jpg', 'Benelli TNT 600.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('29', 'Benelli TRK 702X', 'Benelli TRK 702X', '', '2', '', '', '', '', '', '', '', '29', 'Benelli TRK 702X.jpg', 'Benelli TRK 702X.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('30', 'Benelli 752S', 'Benelli 752S', '', '2', '', '', '', '', '', '', '', '30', 'Benelli 752S.jpg', 'Benelli 752S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('31', 'Benelli Leoncino 800', 'Benelli Leoncino 800', '', '2', '', '', '', '', '', '', '', '31', 'Benelli Leoncino 800.jpg', 'Benelli Leoncino 800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('32', 'Benelli TNT899S', 'Benelli TNT899S', '', '2', '', '', '', '', '', '', '', '32', 'Benelli TNT899S.jpg', 'Benelli TNT899S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('33', 'Benelli TNT1130', 'Benelli TNT1130', '', '2', '', '', '', '', '', '', '', '33', 'Benelli TNT1130.jpg', 'Benelli TNT1130.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('34', 'Bombardier Spyder F3', 'Bombardier Spyder F3', '', '3', '', '', '', '', '', '', '', '34', 'Bombardier Spyder F3.jpg', 'Bombardier Spyder F3.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('35', 'BMW G310 GS', 'BMW G310 GS', '', '4', '', '', '', '', '', '', '', '35', 'BMW G310 GS.jpg', 'BMW G310 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('36', 'BMW G310 R', 'BMW G310 R', '', '4', '', '', '', '', '', '', '', '36', 'BMW G310 R.jpg', 'BMW G310 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('37', 'BMW 400 GT', 'BMW 400 GT', '', '4', '', '', '', '', '', '', '', '37', 'BMW 400 GT.jpg', 'BMW 400 GT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('38', 'BMW C400 X', 'BMW C400 X', '', '4', '', '', '', '', '', '', '', '38', 'BMW C400 X.jpg', 'BMW C400 X.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('39', 'BMW C600 Sport', 'BMW C600 Sport', '', '4', '', '', '', '', '', '', '', '39', 'BMW C600 Sport.jpg', 'BMW C600 Sport.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('40', 'BMW C650 GT', 'BMW C650 GT', '', '4', '', '', '', '', '', '', '', '40', 'BMW C650 GT.jpg', 'BMW C650 GT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('41', 'BMW C650 Sport', 'BMW C650 Sport', '', '4', '', '', '', '', '', '', '', '41', 'BMW C650 Sport.jpg', 'BMW C650 Sport.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('42', 'BMW F650 GS', 'BMW F650 GS', '', '4', '', '', '', '', '', '', '', '42', 'BMW F650 GS.jpg', 'BMW F650 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('43', 'BMW F700 GS', 'BMW F700 GS', '', '4', '', '', '', '', '', '', '', '43', 'BMW F700 GS.jpg', 'BMW F700 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('44', 'BMW F750 GS', 'BMW F750 GS', '', '4', '', '', '', '', '', '', '', '44', 'BMW F750 GS.jpg', 'BMW F750 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('45', 'BMW F800 GS', 'BMW F800 GS', '', '4', '', '', '', '', '', '', '', '45', 'BMW F800 GS.jpg', 'BMW F800 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('46', 'BMW F800 GT', 'BMW F800 GT', '', '4', '', '', '', '', '', '', '', '46', 'BMW F800 GT.jpg', 'BMW F800 GT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('47', 'BMW F800 R', 'BMW F800 R', '', '4', '', '', '', '', '', '', '', '47', 'BMW F800 R.jpg', 'BMW F800 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('48', 'BMW F800 S', 'BMW F800 S', '', '4', '', '', '', '', '', '', '', '48', 'BMW F800 S.jpg', 'BMW F800 S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('49', 'BMW F800 ST', 'BMW F800 ST', '', '4', '', '', '', '', '', '', '', '49', 'BMW F800 ST.jpg', 'BMW F800 ST.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('50', 'BMW F850 GS', 'BMW F850 GS', '', '4', '', '', '', '', '', '', '', '50', 'BMW F850 GS.jpg', 'BMW F850 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('51', 'BMW F900R XR', 'BMW F900R XR', '', '4', '', '', '', '', '', '', '', '51', 'BMW F900R XR.jpg', 'BMW F900R XR.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('52', 'BMW S1000 R', 'BMW S1000 R', '', '4', '', '', '', '', '', '', '', '52', 'BMW S1000 R.jpg', 'BMW S1000 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('53', 'BMW S1000 RR', 'BMW S1000 RR', '', '4', '', '', '', '', '', '', '', '53', 'BMW S1000 RR.jpg', 'BMW S1000 RR.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('54', 'BMW S1000 XR', 'BMW S1000 XR', '', '4', '', '', '', '', '', '', '', '54', 'BMW S1000 XR.jpg', 'BMW S1000 XR.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('55', 'BMW HP4', 'BMW HP4', '', '4', '', '', '', '', '', '', '', '55', 'BMW HP4.jpg', 'BMW HP4.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('56', 'BMW R1150 GS', 'BMW R1150 GS', '', '4', '', '', '', '', '', '', '', '56', 'BMW R1150 GS.jpg', 'BMW R1150 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('57', 'BMW R1150 R', 'BMW R1150 R', '', '4', '', '', '', '', '', '', '', '57', 'BMW R1150 R.jpg', 'BMW R1150 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('58', 'BMW R1150 RS', 'BMW R1150 RS', '', '4', '', '', '', '', '', '', '', '58', 'BMW R1150 RS.jpg', 'BMW R1150 RS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('59', 'BMW R1200 GS', 'BMW R1200 GS', '', '4', '', '', '', '', '', '', '', '59', 'BMW R1200 GS.jpg', 'BMW R1200 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('60', 'BMW R1200 R', 'BMW R1200 R', '', '4', '', '', '', '', '', '', '', '60', 'BMW R1200 R.jpg', 'BMW R1200 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('61', 'BMW R1200 RS', 'BMW R1200 RS', '', '4', '', '', '', '', '', '', '', '61', 'BMW R1200 RS.jpg', 'BMW R1200 RS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('62', 'BMW R1200 S', 'BMW R1200 S', '', '4', '', '', '', '', '', '', '', '62', 'BMW R1200 S.jpg', 'BMW R1200 S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('63', 'BMW R1200 ST', 'BMW R1200 ST', '', '4', '', '', '', '', '', '', '', '63', 'BMW R1200 ST.jpg', 'BMW R1200 ST.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('64', 'BMW K1200 S', 'BMW K1200 S', '', '4', '', '', '', '', '', '', '', '64', 'BMW K1200 S.jpg', 'BMW K1200 S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('65', 'BMW R1200 RT', 'BMW R1200 RT', '', '4', '', '', '', '', '', '', '', '65', 'BMW R1200 RT.jpg', 'BMW R1200 RT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('66', 'BMW R1250 GS', 'BMW R1250 GS', '', '4', '', '', '', '', '', '', '', '66', 'BMW R1250 GS.jpg', 'BMW R1250 GS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('67', 'BMW R1250 RT', 'BMW R1250 RT', '', '4', '', '', '', '', '', '', '', '67', 'BMW R1250 RT.jpg', 'BMW R1250 RT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('68', 'BMW K1300 GT', 'BMW K1300 GT', '', '4', '', '', '', '', '', '', '', '68', 'BMW K1300 GT.jpg', 'BMW K1300 GT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('69', 'BMW K1300 R', 'BMW K1300 R', '', '4', '', '', '', '', '', '', '', '69', 'BMW K1300 R.jpg', 'BMW K1300 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('70', 'BMW K1300S', 'BMW K1300S', '', '4', '', '', '', '', '', '', '', '70', 'BMW K1300S.jpg', 'BMW K1300S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('71', 'BMW K1600GT', 'BMW K1600GT', '', '4', '', '', '', '', '', '', '', '71', 'BMW K1600GT.jpg', 'BMW K1600GT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('72', 'DUCATI Monster400', 'DUCATI Monster400', '', '5', '', '', '', '', '', '', '', '72', 'DUCATI Monster400.jpg', 'DUCATI Monster400.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('73', 'DUCATI 600SS Supersport', 'DUCATI 600SS Supersport', '', '5', '', '', '', '', '', '', '', '73', 'DUCATI 600SS Supersport.jpg', 'DUCATI 600SS Supersport.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('74', 'DUCATI Monster600', 'DUCATI Monster600', '', '5', '', '', '', '', '', '', '', '74', 'DUCATI Monster600.jpg', 'DUCATI Monster600.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('75', 'DUCATI Monster620', 'DUCATI Monster620', '', '5', '', '', '', '', '', '', '', '75', 'DUCATI Monster620.jpg', 'DUCATI Monster620.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('76', 'DUCATI Sport 620', 'DUCATI Sport 620', '', '5', '', '', '', '', '', '', '', '76', 'DUCATI Sport 620.jpg', 'DUCATI Sport 620.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('77', 'DUCATI Multistrada 620', 'DUCATI Multistrada 620', '', '5', '', '', '', '', '', '', '', '77', 'DUCATI Multistrada 620.jpg', 'DUCATI Multistrada 620.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('78', 'DUCATI Monster695', 'DUCATI Monster695', '', '5', '', '', '', '', '', '', '', '78', 'DUCATI Monster695.jpg', 'DUCATI Monster695.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('79', 'DUCATI 748 SP', 'DUCATI 748 SP', '', '5', '', '', '', '', '', '', '', '79', 'DUCATI 748 SP.jpg', 'DUCATI 748 SP.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('80', 'DUCATI 748 R', 'DUCATI 748 R', '', '5', '', '', '', '', '', '', '', '80', 'DUCATI 748 R.jpg', 'DUCATI 748 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('81', 'DUCATI 748 SPS', 'DUCATI 748 SPS', '', '5', '', '', '', '', '', '', '', '81', 'DUCATI 748 SPS.jpg', 'DUCATI 748 SPS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('82', 'DUCATI 748S', 'DUCATI 748S', '', '5', '', '', '', '', '', '', '', '82', 'DUCATI 748S.jpg', 'DUCATI 748S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('83', 'DUCATI 749S', 'DUCATI 749S', '', '5', '', '', '', '', '', '', '', '83', 'DUCATI 749S.jpg', 'DUCATI 749S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('84', 'DUCATI Monster750', 'DUCATI Monster750', '', '5', '', '', '', '', '', '', '', '84', 'DUCATI Monster750.jpg', 'DUCATI Monster750.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('85', 'DUCATI Sport 750', 'DUCATI Sport 750', '', '5', '', '', '', '', '', '', '', '85', 'DUCATI Sport 750.jpg', 'DUCATI Sport 750.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('86', 'DUCATI Monster795', 'DUCATI Monster795', '', '5', '', '', '', '', '', '', '', '86', 'DUCATI Monster795.jpg', 'DUCATI Monster795.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('87', 'DUCATI Hypermotard 796', 'DUCATI Hypermotard 796', '', '5', '', '', '', '', '', '', '', '87', 'DUCATI Hypermotard 796.jpg', 'DUCATI Hypermotard 796.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('88', 'DUCATI Hyperstrada800', 'DUCATI Hyperstrada800', '', '5', '', '', '', '', '', '', '', '88', 'DUCATI Hyperstrada800.jpg', 'DUCATI Hyperstrada800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('89', 'DUCATI Monster800 S2R', 'DUCATI Monster800 S2R', '', '5', '', '', '', '', '', '', '', '89', 'DUCATI Monster800 S2R.jpg', 'DUCATI Monster800 S2R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('90', 'DUCATI Scrambler 800', 'DUCATI Scrambler 800', '', '5', '', '', '', '', '', '', '', '90', 'DUCATI Scrambler 800.jpg', 'DUCATI Scrambler 800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('91', 'DUCATI Sport 800', 'DUCATI Sport 800', '', '5', '', '', '', '', '', '', '', '91', 'DUCATI Sport 800.jpg', 'DUCATI Sport 800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('92', 'DUCATI Monster821', 'DUCATI Monster821', '', '5', '', '', '', '', '', '', '', '92', 'DUCATI Monster821.jpg', 'DUCATI Monster821.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('93', 'DUCATI Streetfighter 848', 'DUCATI Streetfighter 848', '', '5', '', '', '', '', '', '', '', '93', 'DUCATI Streetfighter 848.jpg', 'DUCATI Streetfighter 848.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('94', 'DUCATI Panigale 899', 'DUCATI Panigale 899', '', '5', '', '', '', '', '', '', '', '94', 'DUCATI Panigale 899.jpg', 'DUCATI Panigale 899.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('95', 'DUCATI Monster900', 'DUCATI Monster900', '', '5', '', '', '', '', '', '', '', '95', 'DUCATI Monster900.jpg', 'DUCATI Monster900.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('96', 'DUCATI Desmosedici RR(990)', 'DUCATI Desmosedici RR(990)', '', '5', '', '', '', '', '', '', '', '96', 'DUCATI Desmosedici RR(990).jpg', 'DUCATI Desmosedici RR(990).jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('97', 'DUCATI Hypermotard 939', 'DUCATI Hypermotard 939', '', '5', '', '', '', '', '', '', '', '97', 'DUCATI Hypermotard 939.jpg', 'DUCATI Hypermotard 939.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('98', 'DUCATI Panigaie 959', 'DUCATI Panigaie 959', '', '5', '', '', '', '', '', '', '', '98', 'DUCATI Panigaie 959.jpg', 'DUCATI Panigaie 959.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('99', 'DUCATI ST3s 992', 'DUCATI ST3s 992', '', '5', '', '', '', '', '', '', '', '99', 'DUCATI ST3s 992.jpg', 'DUCATI ST3s 992.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('100', 'DUCATI 996SPS', 'DUCATI 996SPS', '', '5', '', '', '', '', '', '', '', '100', 'DUCATI 996SPS.jpg', 'DUCATI 996SPS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('101', 'DUCATI 996 R', 'DUCATI 996 R', '', '5', '', '', '', '', '', '', '', '101', 'DUCATI 996 R.jpg', 'DUCATI 996 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('102', 'DUCATI 998 R', 'DUCATI 998 R', '', '5', '', '', '', '', '', '', '', '102', 'DUCATI 998 R.jpg', 'DUCATI 998 R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('103', 'DUCATI 999S', 'DUCATI 999S', '', '5', '', '', '', '', '', '', '', '103', 'DUCATI 999S.jpg', 'DUCATI 999S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('104', 'DUCATI Monster999 S4R', 'DUCATI Monster999 S4R', '', '5', '', '', '', '', '', '', '', '104', 'DUCATI Monster999 S4R.jpg', 'DUCATI Monster999 S4R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('105', 'DUCATI Superspotr S 1000', 'DUCATI Superspotr S 1000', '', '5', '', '', '', '', '', '', '', '105', 'DUCATI Superspotr S 1000.jpg', 'DUCATI Superspotr S 1000.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('106', 'DUCATI Streetfighter S 1098', 'DUCATI Streetfighter S 1098', '', '5', '', '', '', '', '', '', '', '106', 'DUCATI Streetfighter S 1098.jpg', 'DUCATI Streetfighter S 1098.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('107', 'DUCATI Hypermotard 1100', 'DUCATI Hypermotard 1100', '', '5', '', '', '', '', '', '', '', '107', 'DUCATI Hypermotard 1100.jpg', 'DUCATI Hypermotard 1100.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('108', 'DUCATI Superleggera 1199', 'DUCATI Superleggera 1199', '', '5', '', '', '', '', '', '', '', '108', 'DUCATI Superleggera 1199.jpg', 'DUCATI Superleggera 1199.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('109', 'DUCATI X Diavel 1200', 'DUCATI X Diavel 1200', '', '5', '', '', '', '', '', '', '', '109', 'DUCATI X Diavel 1200.jpg', 'DUCATI X Diavel 1200.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('110', 'DUCATI Monster 1200', 'DUCATI Monster 1200', '', '5', '', '', '', '', '', '', '', '110', 'DUCATI Monster 1200.jpg', 'DUCATI Monster 1200.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('111', 'DUCATI  Panigales 1299', 'DUCATI  Panigales 1299', '', '5', '', '', '', '', '', '', '', '111', 'DUCATI  Panigales 1299.jpg', 'DUCATI  Panigales 1299.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('112', 'Harley-Davidson FLSTF  Fat Boy', 'Harley-Davidson FLSTF  Fat Boy', '', '6', '', '', '', '', '', '', '', '112', 'Harley-Davidson FLSTF  Fat Boy.jpg', 'Harley-Davidson FLSTF  Fat Boy.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('113', 'Harley-Davidson FLSTF  Heritage Softail Classic', 'Harley-Davidson FLSTF  Heritage Softail Classic', '', '6', '', '', '', '', '', '', '', '113', 'Harley-Davidson FLSTF  Heritage Softail Classic.jpg', 'Harley-Davidson FLSTF  Heritage Softail Classic.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('114', 'Harley-Davidson XL 883 N Iron', 'Harley-Davidson XL 883 N Iron', '', '6', '', '', '', '', '', '', '', '114', 'Harley-Davidson XL 883 N Iron.jpg', 'Harley-Davidson XL 883 N Iron.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('115', 'Harley-Davidson XL883L SuperLow', 'Harley-Davidson XL883L SuperLow', '', '6', '', '', '', '', '', '', '', '115', 'Harley-Davidson XL883L SuperLow.jpg', 'Harley-Davidson XL883L SuperLow.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('116', 'Harley-Davidson V-Rod VRSCA 1130', 'Harley-Davidson V-Rod VRSCA 1130', '', '6', '', '', '', '', '', '', '', '116', 'Harley-Davidson V-Rod VRSCA 1130.jpg', 'Harley-Davidson V-Rod VRSCA 1130.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('117', 'Harley-Davidson Night Rod VRSCD 1130', 'Harley-Davidson Night Rod VRSCD 1130', '', '6', '', '', '', '', '', '', '', '117', 'Harley-Davidson Night Rod VRSCD 1130.jpg', 'Harley-Davidson Night Rod VRSCD 1130.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('118', 'Harley-Davidson Tri Glide', 'Harley-Davidson Tri Glide', '', '6', '', '', '', '', '', '', '', '118', 'Harley-Davidson Tri Glide.jpg', 'Harley-Davidson Tri Glide.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('119', 'Harley-Davidson Fat Boy 114', 'Harley-Davidson Fat Boy 114', '', '6', '', '', '', '', '', '', '', '119', 'Harley-Davidson Fat Boy 114.jpg', 'Harley-Davidson Fat Boy 114.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('120', 'HONDA NSS300', 'HONDA NSS300', '', '7', '', '', '', '', '', '', '', '120', 'HONDA NSS300.jpg', 'HONDA NSS300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('121', 'HONDA CBR 300', 'HONDA CBR 300', '', '7', '', '', '', '', '', '', '', '121', 'HONDA CBR 300.jpg', 'HONDA CBR 300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('122', 'HONDA NSS350', 'HONDA NSS350', '', '7', '', '', '', '', '', '', '', '122', 'HONDA NSS350.jpg', 'HONDA NSS350.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('123', 'HONDA CB 400X-F', 'HONDA CB 400X-F', '', '7', '', '', '', '', '', '', '', '123', 'HONDA CB 400X-F.jpg', 'HONDA CB 400X-F.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('124', 'HONDA CB 500F', 'HONDA CB 500F', '', '7', '', '', '', '', '', '', '', '124', 'HONDA CB 500F.jpg', 'HONDA CB 500F.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('125', 'HONDA CB 500S', 'HONDA CB 500S', '', '7', '', '', '', '', '', '', '', '125', 'HONDA CB 500S.jpg', 'HONDA CB 500S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('126', 'HONDA CB 500X', 'HONDA CB 500X', '', '7', '', '', '', '', '', '', '', '126', 'HONDA CB 500X.jpg', 'HONDA CB 500X.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('127', 'HONDA CBF 500', 'HONDA CBF 500', '', '7', '', '', '', '', '', '', '', '127', 'HONDA CBF 500.jpg', 'HONDA CBF 500.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('128', 'HONDA CBR 500R', 'HONDA CBR 500R', '', '7', '', '', '', '', '', '', '', '128', 'HONDA CBR 500R.jpg', 'HONDA CBR 500R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('129', 'HONDA CBR 600 RR', 'HONDA CBR 600 RR', '', '7', '', '', '', '', '', '', '', '129', 'HONDA CBR 600 RR.jpg', 'HONDA CBR 600 RR.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('130', 'HONDA CBF 600', 'HONDA CBF 600', '', '7', '', '', '', '', '', '', '', '130', 'HONDA CBF 600.jpg', 'HONDA CBF 600.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('131', 'HONDA CB 600S Hornet', 'HONDA CB 600S Hornet', '', '7', '', '', '', '', '', '', '', '131', 'HONDA CB 600S Hornet.jpg', 'HONDA CB 600S Hornet.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('132', 'HONDA CB 650 F', 'HONDA CB 650 F', '', '7', '', '', '', '', '', '', '', '132', 'HONDA CB 650 F.jpg', 'HONDA CB 650 F.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('133', 'HONDA CB 650R', 'HONDA CB 650R', '', '7', '', '', '', '', '', '', '', '133', 'HONDA CB 650R.jpg', 'HONDA CB 650R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('134', 'HONDA CBR 650 F', 'HONDA CBR 650 F', '', '7', '', '', '', '', '', '', '', '134', 'HONDA CBR 650 F.jpg', 'HONDA CBR 650 F.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('135', 'HONDA CBR 650R', 'HONDA CBR 650R', '', '7', '', '', '', '', '', '', '', '135', 'HONDA CBR 650R.jpg', 'HONDA CBR 650R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('136', 'HONDA NC 700 S', 'HONDA NC 700 S', '', '7', '', '', '', '', '', '', '', '136', 'HONDA NC 700 S.jpg', 'HONDA NC 700 S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('137', 'HONDA NSS750', 'HONDA NSS750', '', '7', '', '', '', '', '', '', '', '137', 'HONDA NSS750.jpg', 'HONDA NSS750.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('138', 'HONDA X-ADV750', 'HONDA X-ADV750', '', '7', '', '', '', '', '', '', '', '138', 'HONDA X-ADV750.jpg', 'HONDA X-ADV750.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('139', 'HONDA NC750 X', 'HONDA NC750 X', '', '7', '', '', '', '', '', '', '', '139', 'HONDA NC750 X.jpg', 'HONDA NC750 X.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('140', 'HONDA CBF 1000', 'HONDA CBF 1000', '', '7', '', '', '', '', '', '', '', '140', 'HONDA CBF 1000.jpg', 'HONDA CBF 1000.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('141', 'HONDA CBF 1000 F', 'HONDA CBF 1000 F', '', '7', '', '', '', '', '', '', '', '141', 'HONDA CBF 1000 F.jpg', 'HONDA CBF 1000 F.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('142', 'HONDA CBR1000 RR', 'HONDA CBR1000 RR', '', '7', '', '', '', '', '', '', '', '142', 'HONDA CBR1000 RR.jpg', 'HONDA CBR1000 RR.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('143', 'HONDA CRF1000 LAG', 'HONDA CRF1000 LAG', '', '7', '', '', '', '', '', '', '', '143', 'HONDA CRF1000 LAG.jpg', 'HONDA CRF1000 LAG.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('144', 'HONDA CB 1100', 'HONDA CB 1100', '', '7', '', '', '', '', '', '', '', '144', 'HONDA CB 1100.jpg', 'HONDA CB 1100.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('145', 'HONDA CB 1100 EX', 'HONDA CB 1100 EX', '', '7', '', '', '', '', '', '', '', '145', 'HONDA CB 1100 EX.jpg', 'HONDA CB 1100 EX.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('146', 'HONDA CRF1100', 'HONDA CRF1100', '', '7', '', '', '', '', '', '', '', '146', 'HONDA CRF1100.jpg', 'HONDA CRF1100.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('147', 'HONDA CB 1300', 'HONDA CB 1300', '', '7', '', '', '', '', '', '', '', '147', 'HONDA CB 1300.jpg', 'HONDA CB 1300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('148', 'HONDA CB 1300 S', 'HONDA CB 1300 S', '', '7', '', '', '', '', '', '', '', '148', 'HONDA CB 1300 S.jpg', 'HONDA CB 1300 S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('149', 'HONDA CTX1300', 'HONDA CTX1300', '', '7', '', '', '', '', '', '', '', '149', 'HONDA CTX1300.jpg', 'HONDA CTX1300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('150', 'HONDA ST1300', 'HONDA ST1300', '', '7', '', '', '', '', '', '', '', '150', 'HONDA ST1300.jpg', 'HONDA ST1300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('151', 'HONDA Gold Wing GL1800', 'HONDA Gold Wing GL1800', '', '7', '', '', '', '', '', '', '', '151', 'HONDA Gold Wing GL1800.jpg', 'HONDA Gold Wing GL1800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('152', 'HONDA VTX 1800', 'HONDA VTX 1800', '', '7', '', '', '', '', '', '', '', '152', 'HONDA VTX 1800.jpg', 'HONDA VTX 1800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('153', 'Indian Motorcycle Scout', 'Indian Motorcycle Scout', '', '8', '', '', '', '', '', '', '', '153', 'Indian Motorcycle Scout.jpg', 'Indian Motorcycle Scout.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('154', 'Indian Motorcycle Springfield Dark Horse', 'Indian Motorcycle Springfield Dark Horse', '', '8', '', '', '', '', '', '', '', '154', 'Indian Motorcycle Springfield Dark Horse.jpg', 'Indian Motorcycle Springfield Dark Horse.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('155', 'KAWASAKI Ninja 250', 'KAWASAKI Ninja 250', '', '9', '', '', '', '', '', '', '', '155', 'KAWASAKI Ninja 250.jpg', 'KAWASAKI Ninja 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('156', 'KAWASAKI Z 250', 'KAWASAKI Z 250', '', '9', '', '', '', '', '', '', '', '156', 'KAWASAKI Ninja 250.jpg', 'KAWASAKI Ninja 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('157', 'KAWASAKI Ninja 300', 'KAWASAKI Ninja 300', '', '9', '', '', '', '', '', '', '', '157', 'KAWASAKI Ninja 300.jpg', 'KAWASAKI Ninja 300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('158', 'KAWASAKI Z 300', 'KAWASAKI Z 300', '', '9', '', '', '', '', '', '', '', '158', 'KAWASAKI Z 300.jpg', 'KAWASAKI Z 300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('159', 'KAWASAKI Versys-X 300', 'KAWASAKI Versys-X 300', '', '9', '', '', '', '', '', '', '', '159', 'KAWASAKI Versys-X 300.jpg', 'KAWASAKI Versys-X 300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('160', 'KAWASAKI Z 400', 'KAWASAKI Z 400', '', '9', '', '', '', '', '', '', '', '160', 'KAWASAKI Z 400.jpg', 'KAWASAKI Z 400.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('161', 'KAWASAKI Ninja 400', 'KAWASAKI Ninja 400', '', '9', '', '', '', '', '', '', '', '161', 'KAWASAKI Ninja 400.jpg', 'KAWASAKI Ninja 400.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('162', 'KAWASAKI Ninja600 ZX-6R', 'KAWASAKI Ninja600 ZX-6R', '', '9', '', '', '', '', '', '', '', '162', 'KAWASAKI Ninja600 ZX-6R.jpg', 'KAWASAKI Ninja600 ZX-6R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('163', 'KAWASAKI Ninja636 ZX-6R', 'KAWASAKI Ninja636 ZX-6R', '', '9', '', '', '', '', '', '', '', '163', 'KAWASAKI Ninja636 ZX-6R.jpg', 'KAWASAKI Ninja636 ZX-6R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('164', 'KAWASAKI Z 650', 'KAWASAKI Z 650', '', '9', '', '', '', '', '', '', '', '164', 'KAWASAKI Z 650.jpg', 'KAWASAKI Z 650.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('165', 'KAWASAKI EN650', 'KAWASAKI EN650', '', '9', '', '', '', '', '', '', '', '165', 'KAWASAKI EN650.jpg', 'KAWASAKI EN650.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('166', 'KAWASAKI ER-6n 650', 'KAWASAKI ER-6n 650', '', '9', '', '', '', '', '', '', '', '166', 'KAWASAKI ER-6n 650.jpg', 'KAWASAKI ER-6n 650.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('167', 'KAWASAKI KLE 650 Versys Left', 'KAWASAKI KLE 650 Versys Left', '', '9', '', '', '', '', '', '', '', '167', 'KAWASAKI KLE 650 Versys Left.jpg', 'KAWASAKI KLE 650 Versys Left.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('168', 'KAWASAKI Ninja 650', 'KAWASAKI Ninja 650', '', '9', '', '', '', '', '', '', '', '168', 'KAWASAKI Ninja 650.jpg', 'KAWASAKI Ninja 650.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('169', 'KAWASAKI Versys 650', 'KAWASAKI Versys 650', '', '9', '', '', '', '', '', '', '', '169', 'KAWASAKI Versys 650.jpg', 'KAWASAKI Versys 650.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('170', 'KAWASAKI Ninja750  ZX-7R', 'KAWASAKI Ninja750  ZX-7R', '', '9', '', '', '', '', '', '', '', '170', 'KAWASAKI Ninja750  ZX-7R.jpg', 'KAWASAKI Ninja750  ZX-7R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('171', 'KAWASAKI Z 750', 'KAWASAKI Z 750', '', '9', '', '', '', '', '', '', '', '171', 'KAWASAKI Z 750.jpg', 'KAWASAKI Z 750.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('172', 'KAWASAKI Z 750 S', 'KAWASAKI Z 750 S', '', '9', '', '', '', '', '', '', '', '172', 'KAWASAKI Z 750 S.jpg', 'KAWASAKI Z 750 S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('173', 'KAWASAKI Z 800', 'KAWASAKI Z 800', '', '9', '', '', '', '', '', '', '', '173', 'KAWASAKI Z 800.jpg', 'KAWASAKI Z 800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('174', 'KAWASAKI Z 900', 'KAWASAKI Z 900', '', '9', '', '', '', '', '', '', '', '174', 'KAWASAKI Z 900.jpg', 'KAWASAKI Z 900.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('175', 'KAWASAKI Z900 RS', 'KAWASAKI Z900 RS', '', '9', '', '', '', '', '', '', '', '175', 'KAWASAKI Z900 RS.jpg', 'KAWASAKI Z900 RS.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('176', 'KAWASAKI Ninja900  ZX-9R', 'KAWASAKI Ninja900  ZX-9R', '', '9', '', '', '', '', '', '', '', '176', 'KAWASAKI Ninja900  ZX-9R.jpg', 'KAWASAKI Ninja900  ZX-9R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('177', 'KAWASAKI Z 1000', 'KAWASAKI Z 1000', '', '9', '', '', '', '', '', '', '', '177', 'KAWASAKI Z 1000.jpg', 'KAWASAKI Z 1000.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('178', 'KAWASAKI Ninja H2R 1000', 'KAWASAKI Ninja H2R 1000', '', '9', '', '', '', '', '', '', '', '178', 'KAWASAKI Ninja H2R 1000.jpg', 'KAWASAKI Ninja H2R 1000.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('179', 'KAWASAKI Ninja H2 1000', 'KAWASAKI Ninja H2 1000', '', '9', '', '', '', '', '', '', '', '179', 'KAWASAKI Ninja H2 1000.jpg', 'KAWASAKI Ninja H2 1000.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('180', 'KAWASAKI Versys 1000', 'KAWASAKI Versys 1000', '', '9', '', '', '', '', '', '', '', '180', 'KAWASAKI Versys 1000.jpg', 'KAWASAKI Versys 1000.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('181', 'KAWASAKI ZX10R', 'KAWASAKI ZX10R', '', '9', '', '', '', '', '', '', '', '181', 'KAWASAKI ZX10R.jpg', 'KAWASAKI ZX10R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('182', 'KAWASAKI Ninja ZX-14R', 'KAWASAKI Ninja ZX-14R', '', '9', '', '', '', '', '', '', '', '182', 'KAWASAKI Ninja ZX-14R.jpg', 'KAWASAKI Ninja ZX-14R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('183', 'KTM Duke 200', 'KTM Duke 200', '', '10', '', '', '', '', '', '', '', '183', 'KTM Duke 200.jpg', 'KTM Duke 200.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('184', 'KTM EXC 250', 'KTM EXC 250', '', '10', '', '', '', '', '', '', '', '184', 'KTM EXC 250.jpg', 'KTM EXC 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('185', 'KTM SX 250', 'KTM SX 250', '', '10', '', '', '', '', '', '', '', '185', 'KTM SX 250.jpg', 'KTM SX 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('186', 'KTM EXC 300', 'KTM EXC 300', '', '10', '', '', '', '', '', '', '', '186', 'KTM EXC 300.jpg', 'KTM EXC 300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('187', 'KTM EXC-F 350', 'KTM EXC-F 350', '', '10', '', '', '', '', '', '', '', '187', 'KTM EXC-F 350.jpg', 'KTM EXC-F 350.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('188', 'KTM Duke 390', 'KTM Duke 390', '', '10', '', '', '', '', '', '', '', '188', 'KTM Duke 390.jpg', 'KTM Duke 390.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('189', 'KTM RC 390', 'KTM RC 390', '', '10', '', '', '', '', '', '', '', '189', 'KTM RC 390.jpg', 'KTM RC 390.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('190', 'KTM SC 400', 'KTM SC 400', '', '10', '', '', '', '', '', '', '', '190', 'KTM SC 400.jpg', 'KTM SC 400.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('191', 'KTM SX-F 450', 'KTM SX-F 450', '', '10', '', '', '', '', '', '', '', '191', 'KTM SX-F 450.jpg', 'KTM SX-F 450.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('192', 'KTM XC-F 450', 'KTM XC-F 450', '', '10', '', '', '', '', '', '', '', '192', 'KTM XC-F 450.jpg', 'KTM XC-F 450.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('193', 'KTM XC-F 505', 'KTM XC-F 505', '', '10', '', '', '', '', '', '', '', '193', 'KTM XC-F 505.jpg', 'KTM XC-F 505.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('194', 'KTM 620 Duke', 'KTM 620 Duke', '', '10', '', '', '', '', '', '', '', '194', 'KTM 620 Duke.jpg', 'KTM 620 Duke.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('195', 'KTM SXC 625', 'KTM SXC 625', '', '10', '', '', '', '', '', '', '', '195', 'KTM SXC 625.jpg', 'KTM SXC 625.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('196', 'KTM 640 Duke', 'KTM 640 Duke', '', '10', '', '', '', '', '', '', '', '196', 'KTM 640 Duke.jpg', 'KTM 640 Duke.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('197', 'KTM 690 Duke', 'KTM 690 Duke', '', '10', '', '', '', '', '', '', '', '197', 'KTM 690 Duke.jpg', 'KTM 690 Duke.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('198', 'KTM 690 Enduro', 'KTM 690 Enduro', '', '10', '', '', '', '', '', '', '', '198', 'KTM 690 Enduro.jpg', 'KTM 690 Enduro.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('199', 'KTM 790 Adventure', 'KTM 790 Adventure', '', '10', '', '', '', '', '', '', '', '199', 'KTM 790 Adventure.jpg', 'KTM 790 Adventure.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('200', 'KTM 950 Adventure', 'KTM 950 Adventure', '', '10', '', '', '', '', '', '', '', '200', 'KTM 950 Adventure.jpg', 'KTM 950 Adventure.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('201', 'KTM 950 R Superenduro', 'KTM 950 R Superenduro', '', '10', '', '', '', '', '', '', '', '201', 'KTM 950 R Superenduro.jpg', 'KTM 950 R Superenduro.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('202', 'KTM 950 SM', 'KTM 950 SM', '', '10', '', '', '', '', '', '', '', '202', 'KTM 950 SM.jpg', 'KTM 950 SM.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('203', 'KTM 990 Adventure R', 'KTM 990 Adventure R', '', '10', '', '', '', '', '', '', '', '203', 'KTM 990 Adventure R.jpg', 'KTM 990 Adventure R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('204', 'KTM 990 Super Duke', 'KTM 990 Super Duke', '', '10', '', '', '', '', '', '', '', '204', 'KTM 990 Super Duke.jpg', 'KTM 990 Super Duke.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('205', 'KTM 990 Supermoto', 'KTM 990 Supermoto', '', '10', '', '', '', '', '', '', '', '205', 'KTM 990 Supermoto.jpg', 'KTM 990 Supermoto.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('206', 'KTM 1050 Adventure', 'KTM 1050 Adventure', '', '10', '', '', '', '', '', '', '', '206', 'KTM 1050 Adventure.jpg', 'KTM 1050 Adventure.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('207', 'KTM 1190 Adventure', 'KTM 1190 Adventure', '', '10', '', '', '', '', '', '', '', '207', 'KTM 1190 Adventure.jpg', 'KTM 1190 Adventure.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('208', 'KTM 1190R', 'KTM 1190R', '', '10', '', '', '', '', '', '', '', '208', 'KTM 1190R.jpg', 'KTM 1190R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('209', 'KTM 1290 Super Adventure', 'KTM 1290 Super Adventure', '', '10', '', '', '', '', '', '', '', '209', 'KTM 1290 Super Adventure.jpg', 'KTM 1290 Super Adventure.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('210', 'KTM 1290 Super Duke GT', 'KTM 1290 Super Duke GT', '', '10', '', '', '', '', '', '', '', '210', 'KTM 1290 Super Duke GT.jpg', 'KTM 1290 Super Duke GT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('211', 'KYMCO 150 like', 'KYMCO 150 like', '', '11', '', '', '', '', '', '', '', '211', 'KYMCO 150 like.jpg', 'KYMCO 150 like.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('212', 'KYMCO G150(ABS)', 'KYMCO G150(ABS)', '', '11', '', '', '', '', '', '', '', '212', 'KYMCO G150(ABS).jpg', 'KYMCO G150(ABS).jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('213', 'KYMCO G150(CBS)', 'KYMCO G150(CBS)', '', '11', '', '', '', '', '', '', '', '213', 'KYMCO G150(CBS).jpg', 'KYMCO G150(CBS).jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('214', 'KYMCO krv180', 'KYMCO krv180', '', '11', '', '', '', '', '', '', '', '214', 'KYMCO krv180.jpg', 'KYMCO krv180.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('215', 'KYMCO RCK180', 'KYMCO RCK180', '', '11', '', '', '', '', '', '', '', '215', 'KYMCO RCK180.jpg', 'KYMCO RCK180.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('216', 'KYMCO CT250', 'KYMCO CT250', '', '11', '', '', '', '', '', '', '', '216', 'KYMCO CT250.jpg', 'KYMCO CT250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('217', 'KYMCO ST250', 'KYMCO ST250', '', '11', '', '', '', '', '', '', '', '217', 'KYMCO ST250.jpg', 'KYMCO ST250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('218', 'KYMCO CT300', 'KYMCO CT300', '', '11', '', '', '', '', '', '', '', '218', 'KYMCO CT300.jpg', 'KYMCO CT300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('219', 'KYMCO KRider 400', 'KYMCO KRider 400', '', '11', '', '', '', '', '', '', '', '219', 'KYMCO KRider 400.jpg', 'KYMCO KRider 400.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('220', 'KYMCO S400', 'KYMCO S400', '', '11', '', '', '', '', '', '', '', '220', 'KYMCO S400.jpg', 'KYMCO S400.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('221', 'KYMCO AK550', 'KYMCO AK550', '', '11', '', '', '', '', '', '', '', '221', 'KYMCO AK550.jpg', 'KYMCO AK550.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('222', 'MOTO GUZZI V7 750 Cafe Classic', 'MOTO GUZZI V7 750 Cafe Classic', '', '12', '', '', '', '', '', '', '', '222', 'MOTO GUZZI V7 750 Cafe Classic.jpg', 'MOTO GUZZI V7 750 Cafe Classic.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('223', 'MOTO GUZZI Nevada 750  Club', 'MOTO GUZZI Nevada 750  Club', '', '12', '', '', '', '', '', '', '', '223', 'MOTO GUZZI Nevada 750  Club.jpg', 'MOTO GUZZI Nevada 750  Club.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('224', 'MOTO GUZZI Nevada  750 Classic', 'MOTO GUZZI Nevada  750 Classic', '', '12', '', '', '', '', '', '', '', '224', 'MOTO GUZZI Nevada  750 Classic.jpg', 'MOTO GUZZI Nevada  750 Classic.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('225', 'MOTO GUZZI 750 Breva', 'MOTO GUZZI 750 Breva', '', '12', '', '', '', '', '', '', '', '225', 'MOTO GUZZI 750 Breva.jpg', 'MOTO GUZZI 750 Breva.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('226', 'MOTO GUZZI  V9 Bobber', 'MOTO GUZZI  V9 Bobber', '', '12', '', '', '', '', '', '', '', '226', 'MOTO GUZZI  V9 Bobber.jpg', 'MOTO GUZZI  V9 Bobber.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('227', 'MOTO GUZZI RS 1000 Daytona', 'MOTO GUZZI RS 1000 Daytona', '', '12', '', '', '', '', '', '', '', '227', 'MOTO GUZZI RS 1000 Daytona.jpg', 'MOTO GUZZI RS 1000 Daytona.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('228', 'MOTO GUZZI V10 1000 Centauro', 'MOTO GUZZI V10 1000 Centauro', '', '12', '', '', '', '', '', '', '', '228', 'MOTO GUZZI V10 1000 Centauro.jpg', 'MOTO GUZZI V10 1000 Centauro.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('229', 'MOTO GUZZI 1100 California Special Sport', 'MOTO GUZZI 1100 California Special Sport', '', '12', '', '', '', '', '', '', '', '229', 'MOTO GUZZI 1100 California Special Sport.jpg', 'MOTO GUZZI 1100 California Special Sport.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('230', 'MOTO GUZZI 1100 California Stone Metal', 'MOTO GUZZI 1100 California Stone Metal', '', '12', '', '', '', '', '', '', '', '230', 'MOTO GUZZI 1100 California Stone Metal.jpg', 'MOTO GUZZI 1100 California Stone Metal.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('231', 'MOTO GUZZI 1100 Griso', 'MOTO GUZZI 1100 Griso', '', '12', '', '', '', '', '', '', '', '231', 'MOTO GUZZI 1100 Griso.jpg', 'MOTO GUZZI 1100 Griso.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('232', 'MOTO GUZZI 1100 Sport', 'MOTO GUZZI 1100 Sport', '', '12', '', '', '', '', '', '', '', '232', 'MOTO GUZZI 1100 Sport.jpg', 'MOTO GUZZI 1100 Sport.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('233', 'MOTO GUZZI EV 1100 California', 'MOTO GUZZI EV 1100 California', '', '12', '', '', '', '', '', '', '', '233', 'MOTO GUZZI EV 1100 California.jpg', 'MOTO GUZZI EV 1100 California.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('234', 'MOTO GUZZI V 1100 Breva', 'MOTO GUZZI V 1100 Breva', '', '12', '', '', '', '', '', '', '', '234', 'MOTO GUZZI V 1100 Breva.jpg', 'MOTO GUZZI V 1100 Breva.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('235', 'MOTO GUZZI V11 1100 Sport Naked', 'MOTO GUZZI V11 1100 Sport Naked', '', '12', '', '', '', '', '', '', '', '235', 'MOTO GUZZI V11 1100 Sport Naked.jpg', 'MOTO GUZZI V11 1100 Sport Naked.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('236', 'MOTO GUZZI V11 1100 Sport Rosso Mandell', 'MOTO GUZZI V11 1100 Sport Rosso Mandell', '', '12', '', '', '', '', '', '', '', '236', 'MOTO GUZZI V11 1100 Sport Rosso Mandell.jpg', 'MOTO GUZZI V11 1100 Sport Rosso Mandell.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('237', 'MOTO GUZZI1200 Sport', 'MOTO GUZZI1200 Sport', '', '12', '', '', '', '', '', '', '', '237', 'MOTO GUZZI1200 Sport.jpg', 'MOTO GUZZI1200 Sport.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('238', 'MOTO GUZZI 1200 Norge', 'MOTO GUZZI 1200 Norge', '', '12', '', '', '', '', '', '', '', '238', 'MOTO GUZZI 1200 Norge.jpg', 'MOTO GUZZI 1200 Norge.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('239', 'MOTO GUZZI 1200 Sport 4V', 'MOTO GUZZI 1200 Sport 4V', '', '12', '', '', '', '', '', '', '', '239', 'MOTO GUZZI 1200 Sport 4V.jpg', 'MOTO GUZZI 1200 Sport 4V.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('240', 'MOTO GUZZI 1400 Audace', 'MOTO GUZZI 1400 Audace', '', '12', '', '', '', '', '', '', '', '240', 'MOTO GUZZI 1400 Audace.jpg', 'MOTO GUZZI 1400 Audace.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('241', 'MOTO GUZZI 1400 California Touring', 'MOTO GUZZI 1400 California Touring', '', '12', '', '', '', '', '', '', '', '241', 'MOTO GUZZI 1400 California Touring.jpg', 'MOTO GUZZI 1400 California Touring.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('242', 'MOTOMORINI x-cape650', 'MOTOMORINI x-cape650', '', '13', '', '', '', '', '', '', '', '242', 'MOTOMORINI x-cape650.jpg', 'MOTOMORINI x-cape650.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('243', 'MV Agusta MV800', 'MV Agusta MV800', '', '14', '', '', '', '', '', '', '', '243', 'MV Agusta MV800.jpg', 'MV Agusta MV800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('244', 'PIAGGIO Medley150', 'PIAGGIO Medley150', '', '15', '', '', '', '', '', '', '', '244', 'PIAGGIO Medley150.jpg', 'PIAGGIO Medley150.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('245', 'PIAGGIO 250 GT 60', 'PIAGGIO 250 GT 60', '', '15', '', '', '', '', '', '', '', '245', 'PIAGGIO 250 GT 60.jpg', 'PIAGGIO 250 GT 60.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('246', 'PIAGGIO 250 X7', 'PIAGGIO 250 X7', '', '15', '', '', '', '', '', '', '', '246', 'PIAGGIO 250 X7.jpg', 'PIAGGIO 250 X7.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('247', 'PIAGGIO 250 Xevo', 'PIAGGIO 250 Xevo', '', '15', '', '', '', '', '', '', '', '247', 'PIAGGIO 250 Xevo.jpg', 'PIAGGIO 250 Xevo.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('248', 'PIAGGIO Beverly 250', 'PIAGGIO Beverly 250', '', '15', '', '', '', '', '', '', '', '248', 'PIAGGIO Beverly 250.jpg', 'PIAGGIO Beverly 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('249', 'PIAGGIO GTS 250', 'PIAGGIO GTS 250', '', '15', '', '', '', '', '', '', '', '249', 'PIAGGIO GTS 250.jpg', 'PIAGGIO GTS 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('250', 'PIAGGIO GTV 250', 'PIAGGIO GTV 250', '', '15', '', '', '', '', '', '', '', '250', 'PIAGGIO GTV 250.jpg', 'PIAGGIO GTV 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('251', 'PIAGGIO MP3 250', 'PIAGGIO MP3 250', '', '15', '', '', '', '', '', '', '', '251', 'PIAGGIO MP3 250.jpg', 'PIAGGIO MP3 250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('252', 'PIAGGIO X8   250', 'PIAGGIO X8   250', '', '15', '', '', '', '', '', '', '', '252', 'PIAGGIO X8   250.jpg', 'PIAGGIO X8   250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('253', 'PIAGGIO 300 Beverly i.e', 'PIAGGIO 300 Beverly i.e', '', '15', '', '', '', '', '', '', '', '253', 'PIAGGIO 300 Beverly i.e.jpg', 'PIAGGIO 300 Beverly i.e.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('254', 'PIAGGIO 300 Carnaby Cruiser', 'PIAGGIO 300 Carnaby Cruiser', '', '15', '', '', '', '', '', '', '', '254', 'PIAGGIO 300 Carnaby Cruiser.jpg', 'PIAGGIO 300 Carnaby Cruiser.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('255', 'PIAGGIO 300 X7 Evo i.e', 'PIAGGIO 300 X7 Evo i.e', '', '15', '', '', '', '', '', '', '', '255', 'PIAGGIO 300 X7 Evo i.e.jpg', 'PIAGGIO 300 X7 Evo i.e.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('256', 'PIAGGIO Beverly  300', 'PIAGGIO Beverly  300', '', '15', '', '', '', '', '', '', '', '256', 'PIAGGIO Beverly  300.jpg', 'PIAGGIO Beverly  300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('257', 'PIAGGIO GTS 300', 'PIAGGIO GTS 300', '', '15', '', '', '', '', '', '', '', '257', 'PIAGGIO GTS 300.jpg', 'PIAGGIO GTS 300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('258', 'PIAGGIO GTV300', 'PIAGGIO GTV300', '', '15', '', '', '', '', '', '', '', '258', 'PIAGGIO GTV300.jpg', 'PIAGGIO GTV300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('259', 'PIAGGIO MP3  300', 'PIAGGIO MP3  300', '', '15', '', '', '', '', '', '', '', '259', 'PIAGGIO MP3  300.jpg', 'PIAGGIO MP3  300.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('260', 'PIAGGIO BV 350', 'PIAGGIO BV 350', '', '15', '', '', '', '', '', '', '', '260', 'PIAGGIO BV 350.jpg', 'PIAGGIO BV 350.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('261', 'PIAGGIO BV500', 'PIAGGIO BV500', '', '15', '', '', '', '', '', '', '', '261', 'PIAGGIO BV500.jpg', 'PIAGGIO BV500.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('262', 'SUZUKI GSR 600', 'SUZUKI GSR 600', '', '16', '', '', '', '', '', '', '', '262', 'SUZUKI GSR 600.jpg', 'SUZUKI GSR 600.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('263', 'SUZUKI GSX-R 600', 'SUZUKI GSX-R 600', '', '16', '', '', '', '', '', '', '', '263', 'SUZUKI GSX-R 600.jpg', 'SUZUKI GSX-R 600.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('264', 'SUZUKI GSX 650 F', 'SUZUKI GSX 650 F', '', '16', '', '', '', '', '', '', '', '264', 'SUZUKI GSX 650 F.jpg', 'SUZUKI GSX 650 F.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('265', 'SUZUKI GSF 650 S Bandit', 'SUZUKI GSF 650 S Bandit', '', '16', '', '', '', '', '', '', '', '265', 'SUZUKI GSF 650 S Bandit.jpg', 'SUZUKI GSF 650 S Bandit.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('266', 'SUZUKI DL 650 V-Strom XT', 'SUZUKI DL 650 V-Strom XT', '', '16', '', '', '', '', '', '', '', '266', 'SUZUKI DL 650 V-Strom XT.jpg', 'SUZUKI DL 650 V-Strom XT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('267', 'SUZUKI GSX 750', 'SUZUKI GSX 750', '', '16', '', '', '', '', '', '', '', '267', 'SUZUKI GSX 750.jpg', 'SUZUKI GSX 750.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('268', 'SUZUKI GSR 750', 'SUZUKI GSR 750', '', '16', '', '', '', '', '', '', '', '268', 'SUZUKI GSR 750.jpg', 'SUZUKI GSR 750.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('269', 'SUZUKI GSX-R 750', 'SUZUKI GSX-R 750', '', '16', '', '', '', '', '', '', '', '269', 'SUZUKI GSX-R 750.jpg', 'SUZUKI GSX-R 750.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('270', 'SUZUKI DL1000 V-Strom', 'SUZUKI DL1000 V-Strom', '', '16', '', '', '', '', '', '', '', '270', 'SUZUKI DL1000 V-Strom.jpg', 'SUZUKI DL1000 V-Strom.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('271', 'SUZUKI GSX-R 1000', 'SUZUKI GSX-R 1000', '', '16', '', '', '', '', '', '', '', '271', 'SUZUKI GSX-R 1000.jpg', 'SUZUKI GSX-R 1000.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('272', 'SUZUKI GSX-S 1000F', 'SUZUKI GSX-S 1000F', '', '16', '', '', '', '', '', '', '', '272', 'SUZUKI GSX-S 1000F.jpg', 'SUZUKI GSX-S 1000F.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('273', 'SUZUKI SV 1000 S', 'SUZUKI SV 1000 S', '', '16', '', '', '', '', '', '', '', '273', 'SUZUKI SV 1000 S.jpg', 'SUZUKI SV 1000 S.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('274', 'SUZUKI DL1050 V-Strom XT', 'SUZUKI DL1050 V-Strom XT', '', '16', '', '', '', '', '', '', '', '274', 'SUZUKI DL1050 V-Strom XT.jpg', 'SUZUKI DL1050 V-Strom XT.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('275', 'SUZUKI GSX 1100 G', 'SUZUKI GSX 1100 G', '', '16', '', '', '', '', '', '', '', '275', 'SUZUKI GSX 1100 G.jpg', 'SUZUKI GSX 1100 G.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('276', 'SUZUKI GSX 1200', 'SUZUKI GSX 1200', '', '16', '', '', '', '', '', '', '', '276', 'SUZUKI GSX 1200.jpg', 'SUZUKI GSX 1200.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('277', 'SUZUKI GSF 1200 S Bandit', 'SUZUKI GSF 1200 S Bandit', '', '16', '', '', '', '', '', '', '', '277', 'SUZUKI GSF 1200 S Bandit.jpg', 'SUZUKI GSF 1200 S Bandit.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('278', 'SUZUKI GSX 1400', 'SUZUKI GSX 1400', '', '16', '', '', '', '', '', '', '', '278', 'SUZUKI GSX 1400.jpg', 'SUZUKI GSX 1400.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('279', 'SUZUKI M1800R', 'SUZUKI M1800R', '', '16', '', '', '', '', '', '', '', '279', 'SUZUKI M1800R.jpg', 'SUZUKI M1800R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('280', 'SUZUKI VZR1800', 'SUZUKI VZR1800', '', '16', '', '', '', '', '', '', '', '280', 'SUZUKI VZR1800.jpg', 'SUZUKI VZR1800.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('281', 'SUZUKI  M109R', 'SUZUKI  M109R', '', '16', '', '', '', '', '', '', '', '281', 'SUZUKI  M109R.jpg', 'SUZUKI  M109R.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('282', 'YAMAHA XT250', 'YAMAHA XT250', '', '17', '', '', '', '', '', '', '', '282', 'YAMAHA XT250.jpg', 'YAMAHA XT250.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('283', 'YAMAHA YZF-R3', 'YAMAHA YZF-R3', '', '17', '', '', '', '', '', '', '', '283', 'YAMAHA YZF-R3.jpg', 'YAMAHA YZF-R3.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('284', 'YAMAHA 500 TMAX', 'YAMAHA 500 TMAX', '', '17', '', '', '', '', '', '', '', '284', 'YAMAHA 500 TMAX.jpg', 'YAMAHA 500 TMAX.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('285', 'YAMAHA 530 TMAX', 'YAMAHA 530 TMAX', '', '17', '', '', '', '', '', '', '', '285', 'YAMAHA 530 TMAX.jpg', 'YAMAHA 530 TMAX.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('286', 'YAMAHA FZ6', 'YAMAHA FZ6', '', '17', '', '', '', '', '', '', '', '286', 'YAMAHA FZ6.jpg', 'YAMAHA FZ6.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('287', 'YAMAHA TT 600', 'YAMAHA TT 600', '', '17', '', '', '', '', '', '', '', '287', 'YAMAHA TT 600.jpg', 'YAMAHA TT 600.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('288', 'YAMAHA XJ 600 N', 'YAMAHA XJ 600 N', '', '17', '', '', '', '', '', '', '', '288', 'YAMAHA XJ 600 N.jpg', 'YAMAHA XJ 600 N.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('289', 'YAMAHA SZR 660', 'YAMAHA SZR 660', '', '17', '', '', '', '', '', '', '', '289', 'YAMAHA SZR 660.jpg', 'YAMAHA SZR 660.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('290', 'YAMAHA XSR 700', 'YAMAHA XSR 700', '', '17', '', '', '', '', '', '', '', '290', 'YAMAHA XSR 700.jpg', 'YAMAHA XSR 700.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('291', 'YAMAHA MT-07', 'YAMAHA MT-07', '', '17', '', '', '', '', '', '', '', '291', 'YAMAHA MT-07.jpg', 'YAMAHA MT-07.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('292', 'YAMAHA FZ8', 'YAMAHA FZ8', '', '17', '', '', '', '', '', '', '', '292', 'YAMAHA FZ8.jpg', 'YAMAHA FZ8.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('293', 'YAMAHA XSR 900', 'YAMAHA XSR 900', '', '17', '', '', '', '', '', '', '', '293', 'YAMAHA XSR 900.jpg', 'YAMAHA XSR 900.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('294', 'YAMAHA MT-09', 'YAMAHA MT-09', '', '17', '', '', '', '', '', '', '', '294', 'YAMAHA MT-09.jpg', 'YAMAHA MT-09.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('295', 'YAMAHA FZ1  Fazer 1000', 'YAMAHA FZ1  Fazer 1000', '', '17', '', '', '', '', '', '', '', '295', 'YAMAHA FZ1  Fazer 1000.jpg', 'YAMAHA FZ1  Fazer 1000.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('296', 'YAMAHA YZF-R1', 'YAMAHA YZF-R1', '', '17', '', '', '', '', '', '', '', '296', 'YAMAHA YZF-R1.jpg', 'YAMAHA YZF-R1.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('297', 'YAMAHA XTZ 1200', 'YAMAHA XTZ 1200', '', '17', '', '', '', '', '', '', '', '297', 'YAMAHA XTZ 1200.jpg', 'YAMAHA XTZ 1200.jpg', '0000-00-00 00:00:00', null, '', '');
INSERT INTO `product` VALUES ('298', 'YAMAHA FJR 1300', 'YAMAHA FJR 1300', '', '17', '', '', '', '', '', '', '', '298', 'YAMAHA FJR 1300.jpg', 'YAMAHA FJR 1300.jpg', '0000-00-00 00:00:00', null, '', '');

-- ----------------------------
-- Table structure for `productmodals`
-- ----------------------------
DROP TABLE IF EXISTS `productmodals`;
CREATE TABLE `productmodals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_name_en` varchar(2555) NOT NULL,
  `value` varchar(255) NOT NULL,
  `cate_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of productmodals
-- ----------------------------
INSERT INTO `productmodals` VALUES ('1', 'SBS', 'SBS', 'SBS', '1');
INSERT INTO `productmodals` VALUES ('3', 'EBC', 'EBC', 'EBC', '3');
INSERT INTO `productmodals` VALUES ('4', 'Sonai ', 'Sonai', 'Sonai_ceramic', '4');

-- ----------------------------
-- Table structure for `product_inquries`
-- ----------------------------
DROP TABLE IF EXISTS `product_inquries`;
CREATE TABLE `product_inquries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(20) NOT NULL,
  `orderno` int(20) NOT NULL,
  `sonai_ceramic` varchar(255) NOT NULL,
  `sonai_sintered` varchar(255) NOT NULL,
  `EBC` varchar(255) NOT NULL,
  `SBS` varchar(255) NOT NULL,
  `Brenta` varchar(255) NOT NULL,
  `Simg` varchar(255) NOT NULL,
  `Bimg` varchar(255) NOT NULL,
  `product_details` varchar(1000) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of product_inquries
-- ----------------------------
INSERT INTO `product_inquries` VALUES ('1', '00175', '1', 'YSD00175', 'SSJ00175', 'FA165', 'SBS 134/638', '', '001.jpg', 'YSD00175.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '0');
INSERT INTO `product_inquries` VALUES ('2', '00190', '2', 'YSD00190', 'SSJ00190', 'FA197', 'SBS 119/688', '', '001.jpg', 'YSD00190.jpg', 'HYOSUNG_GV250DR,GV300S,GV650_ _false_true/Benelli_BJ 250T(right)_ _true_false/Benelli_ BN150S,Leoncino150 _ _false_true/VOGE_180RR,180R,200AC,300R,LX300-6D,200R,300DS,300RR(right),300AC(right),LX300 GS-B(right)_ _true_false/LIFAN_KP150,KPR150,LF150-10B-10F,KPS200,KPR200,LF200-10L,KPT200_ _true_false/KAWASAKI_EX 250R Ninja,Z250SL,EX300R Ninja(ABS),Z 300 EX 300 R,400 Ninja,Z400_ _true_true/KAWASAKI_Versys-X300_ _false_true', '0');
INSERT INTO `product_inquries` VALUES ('3', '001958', '3', 'YSD001958', 'SSJ00195', 'FA165/2', 'SBS 633', '', '001.jpg', 'YSD00195.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '3');
INSERT INTO `product_inquries` VALUES ('4', '00210', '4', 'YSD00210', 'SSJ00210', 'FA343', 'SBS 225/784', '', '002.jpg', 'YSD00210.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '4');
INSERT INTO `product_inquries` VALUES ('5', '00370', '5', 'YSD00370', 'SSJ00370', 'SFA708', 'SBS 223', '', '003.jpg', 'YSD00370.jpg', 'HONDA_LEAD125_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '5');
INSERT INTO `product_inquries` VALUES ('6', '00480', '6', 'YSD00480', 'SSJ00480', 'SFA336', 'SBS 165', '', '004.jpg', 'YSD00480.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '6');
INSERT INTO `product_inquries` VALUES ('7', '00575', '7', 'YSD00575', 'SSJ00575', 'FA375', 'SBS 180/797', '', '005.jpg', 'YSD00575.jpg', 'HONDA_CBR190R,CBF190R,CBF190TR _ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '7');
INSERT INTO `product_inquries` VALUES ('8', '00610', '8', 'YSD00610', 'SSJ00610', 'FA629', 'SBS 915', '', '006.jpg', 'YSD00610.jpg', 'HONDA_CBR190R,CBF190R,CBF190TR _ _false_true/LIFAN_KP150,KPR150,LF150-10B-10F,KPS200,KPR200_ _false_true/CFMOTO_SR450,NK450_ _false_true/KOVE_450RR_ _false_true', '8');
INSERT INTO `product_inquries` VALUES ('9', '00775', '9', 'YSD00775', 'SSJ00775', '', '', '', '007.jpg', 'YSD00775.jpg', 'KYMCO_krv180_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '9');
INSERT INTO `product_inquries` VALUES ('10', '00790', '10', 'YSD00790', 'SSJ00790', 'FA228', ' SBS 163/197/611/713', '', '007.jpg', 'YSD00790.jpg', 'Benelli_BJ 250(Tleft)_ _true_false/VOGE_300RR(Tleft),300AC(Tleft),LX300GS-B(Tleft),300GY,SR150GT_ _true_false/LIFAN_KPV150,ADV150,LF150T-8_ _true_false/Triumph_Bonneville T100,T120_ _false_true', '10');
INSERT INTO `product_inquries` VALUES ('11', '00795', '11', 'YSD00795', 'SSJ00795', '', '', '', '007.jpg', 'YSD00775 9.jpg', 'Triumph_Street Twin_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '11');
INSERT INTO `product_inquries` VALUES ('12', '00880', '12', 'YSD00880', 'SSJ00880', 'FA464', 'SBS 227/858 ', '', '008.jpg', 'YSD00880.jpg', 'YAMAHA_NMAX155_ _false_true/VOGE_SR150 GT_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '12');
INSERT INTO `product_inquries` VALUES ('13', '00976', '13', 'YSD00976', 'SSJ00976', 'FA694', 'SBS 226', '', '009.jpg', 'YSD00976.jpg', 'YAMAHA_NMAX155_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '13');
INSERT INTO `product_inquries` VALUES ('14', '01080', '14', 'YSD01080', 'SSJ01080', 'FA054', 'SBS 100/536', '', '010.jpg', 'YSD01080.jpg', '   ', '14');
INSERT INTO `product_inquries` VALUES ('15', '0117686', '15', 'YSD0117686', 'SSJ0117686', 'FA230', 'SBS 122/702', '', '011.jpg', 'YSD11774.jpg', '', '15');
INSERT INTO `product_inquries` VALUES ('16', '01290', '16', 'YSD01290', 'SSJ01290', 'FA275', 'SBS 155/728', '', '012.jpg', 'YSD12990.jpg', 'Benelli_BJ 250T_ _false_true/YAMAHA_XT250_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '16');
INSERT INTO `product_inquries` VALUES ('17', '0138010', '17', 'YSD0138010', 'SSJ0138010', 'FA093', 'SBS 203/585', '', '013.jpg', 'YSD13084.jpg', '  ', '17');
INSERT INTO `product_inquries` VALUES ('18', '01490', '18', 'YSD01490', 'SSJ01490', 'SFA235', 'SBS 141/723', '', '014.jpg', 'YSD01490.jpg', '   ', '18');
INSERT INTO `product_inquries` VALUES ('19', '01576', '19', 'YSD01576', 'SSJ01576', 'FA181', 'SBS 151/671/742/924 ', '', '015.jpg', 'YSD01576.jpg', 'CFMOTO_650TR-G_2019- _false_true/ITALJET_Dragster 200_ _true_false/CFMOTO_700CL-X,800 MT,NK800_ _false_true/BMW_S1000 XR,R1150 R,R1150 R Rockster,R1150 GS Adventurer,R1150 RS,R1200 S,R1200 ST_ _false_true/BMW_R1200RT_(2006-2013)_false_true/BMW_K1200S_(2005-2008)_false_true/BMW_1300GT_(2009-2010)_false_true/BMW_K1300S_(2009-)_false_true/KTM_950 SM,950R,990Supermoto,950R Superenduro,990 Adventure R,1050Adventure,1090Adventure,1190Adventure,1290Super Adventure_ _false_true/KTM_SX 250,EXC 250Enduro,EXC 300 Enduro,EXC-F 350,XC 360,MX 380,XC 380,SC 400,SX-F 450,XC-F 450,XC-F 505,SX 620,SXC 625_ _true_false/MOTOGUZZI_1200Norge,1200Norge GT 8V,1200Sport,1200 Sport 8V_ _false_true/DUCATI_620Multistrada,695 Monster,800 Monster S2R_ _true_false/DUCATI_Multistrada 1260s_ _false_true/YAMAHA_TT 600 E S,TT 600 E R_ _true_false', '19');
INSERT INTO `product_inquries` VALUES ('20', '01676', '20', 'YSD01676', 'SSJ01676', 'FA618', 'SBS 911', '', '016.jpg', 'YSD01676.jpg', '', '20');
INSERT INTO `product_inquries` VALUES ('21', '01785', '21', 'YSD01785', 'SSJ01785', 'FA101', 'SBS 107/575', '', '017.jpg', 'YSD01785.jpg', '', '21');
INSERT INTO `product_inquries` VALUES ('22', '01870', '22', 'YSD01870', 'SSJ01870', '', 'SBS 223', '', '018.jpg', 'YSD01870.jpg', '', '22');
INSERT INTO `product_inquries` VALUES ('23', '01975', '23', 'YSD01975', 'SSJ01975', 'FA086', 'SBS 103/200/551/814 ', '', '019.jpg', 'YSD01975.jpg', 'Aprilia_GPR APR125,CR150 APR150-6V,APR250,SR MAX250,MAX300_ _true_false/CFMOTO_NK150_ _true_false/PIAGGIO_ 250Beveriy,300Beverly Tourer,300Carnaby Cruiser_ _true_false/CYCLONE_RX3S ZS400GY-2,RX4 ZS500 GY,RX401_ _true_false/ _ _ _ _', '23');
INSERT INTO `product_inquries` VALUES ('24', '01990', '24', 'YSD01990', 'SSJ01990', 'FA086/2', '', '', '019.jpg', 'YSD01990.jpg', ' ', '24');
INSERT INTO `product_inquries` VALUES ('25', '02070', '25', 'YSD02070', 'SSJ02070', 'SFA625', 'SBS 216/925', '', '020.jpg', 'YSD02070.jpg', 'LIFAN_KPV150,ADV150,LF150T-8_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '25');
INSERT INTO `product_inquries` VALUES ('26', '02186', '26', 'YSD02186', 'SSJ02186', 'FA244', 'SBS 706/727', '', '021.jpg', 'YSD02186.jpg', 'Benelli_TNT899S_ _true_false/CFMOTO_NK450,700CL-X,800MT,NK800 _ _true_false/VOGE_CU525 _ _true_false/ZONTES_350 D,350E,350M _ _true_false/BMW_F800 GT,F800 S,F800 ST_ _true_false/BMW_F800 R_-2015 _true_false/DUCATI_400Monster,620Monster Dark i.e,748,S,748 R,748SPS,900Monster,916Monster S4,996,SPS620 Sport,750Sport,750Super Sport,795Monster,796 Hypermotard,800Sport,848(Rad.cal),848Streetfighter,992ST3s ABS_ _true_false/KTM_690Duke ABS,790Duke,790Adventure,1050Adventure,1090Adventure,1190Adventure,1290Super Adventure_ _true_false/SUZUKI_GSX 1200_ _true_false/MOTOGUZZI_750Breva,750Nevada Classic ie,750Nevada,Nevada Club,V7 750Cafe Classic,V7 750Clubman Racer,V1100 Breva,1200Sport 4V,1100 California Special Sport Alloy,1100 California Stone Metal,1100 Griso,1400 Audace,1400 California Touring,V11 1100 Sport Rosso Mandell,V11 1100 Sport,Sport Naked,1200Norge,1200Norge GT 8V,1200Sport,1200Sport 8V,V9Bobber_ _true_false/MV Agusta_MV800_ _true_false', '26');
INSERT INTO `product_inquries` VALUES ('27', '02296', '27', 'YSD02296', 'SSJ02296', 'FA427', 'SBS 195/201/847', '', '022.jpg', 'YSD02296.jpg', 'CYCLONE_RT3 ZS250T-3_ _false_true/SYM_Cruisym 300,GTS300i,Joymax 250,250i,300i,JoyMax Z300i_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '27');
INSERT INTO `product_inquries` VALUES ('28', '02369', '28', 'YSD02369', 'SSJ02369', 'FA355', 'SBS 171/775 ', '', '023.jpg', 'YSD02369.jpg', 'SYM_Cruisym 300,GTS300i,Joymax 250,250i,300i_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '28');
INSERT INTO `product_inquries` VALUES ('29', '02475', '29', 'YSD02475', 'SSJ02475', 'FA465', 'SBS 228/859', '', '024.jpg', 'YSD02475.jpg', 'PIAGGIO_PCX160 (ABS)_ _true_false/HONDA_PCX160 (ABS)_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '29');
INSERT INTO `product_inquries` VALUES ('30', '02585', '30', 'YSD02585', 'SSJ02585', 'FA388', 'SBS 192/828 ', '', '025.jpg', 'YSD02585.jpg', 'HONDA_CBF500(ABS),CB600Hornet(ABS),CBF600N(ABS),CBF600S(ABS),CBR600F(ABS),CBF1000F(ABS),CBF1000 (ABS),CB1100,CB1300S_ _true_false/HONDA_ST1300/CTX1300_(2008-2012)_true_false/HONDA_CBF1000(ABS)_ _false_true/Harley Davidson_ XL 883 N Iron,XL 883 L Super Low_2014-_true_false/ _ _ _ _', '30');
INSERT INTO `product_inquries` VALUES ('31', '02690', '31', 'YSD02690', 'SSJ02690', 'FA698\r\nSFA415', 'SBS 193/832/829', '', '026.jpg', 'YSD02690.jpg', 'Benelli_Leoncino250,BJ250,TRK251,BJ 300GS,Tornado302R,BN302S,imperiale 400,Leoncino500,TRK 502_ _true_false/HONDA_PCX160,NSS 350_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '31');
INSERT INTO `product_inquries` VALUES ('32', '02710', '32', 'YSD02710', 'SSJ02710', 'FA142\r\nFA196', ' SBS 158/881', '', '027.jpg', 'YSD02710.jpg', 'CFMOTO_NK150_ _false_true/CYCLONE_RX1 ZS150-51,RX1 ZS200-51,RC3 ZS250GS-2,RZ3 ZS250GS-2A,RX3 ZS250GY-3,RX3S ZS400GY-2,RX4 ZS500 GY,RX401,RC401_ _false_true/ZONTES_ZT250-R,ZT250-S,310T,310V,ZT310-R,ZT310-X,350D,350E,350M _ _false_true/VOGE_200R,500R,500AC,525R,525 RR,525DS,DS500,LX650-2_ _false_true/LIFAN_LF200-10L,KPT200_ _false_true/KOVE_400X,500X,525X_ _false_true/SUZUKI_GSX250,GW250,DL250,DR300,TR300_ _false_true/KAWASAKI_Z 800,Z900,Z900 RS_ _false_true/HONDA_CBR 300 F,CBR 300 R,CB400X,CB400F,CB 500 F,X ,CBR 500 R,CB 650 F,CBR 650 F,CBR650 R,CB650 R,CBR650R ,NC 700 S,NC750 X,CTX700N,X-ADV 750,NSS750_ _false_true/Triumph_Tiger Sport 660,Bonneville Speedmaster_ _false_true', '32');
INSERT INTO `product_inquries` VALUES ('33', '02890', '33', 'YSD02890', 'SSJ02890', 'FA142\r\nFA196\r\nFA226', 'SBS 181/183/184/212/627/630/654/700', '', '028.jpg', 'YSD02890.jpg', 'BMW_C600Sport,C650GT,C650Sport_ _true_false/BMW_C600Sport,C650GT,C650Sport_ _false_true/KAWASAKI_Z750(ABS),650Ninja_ _true_false/HONDA_CBR300F,CBR300R,CB400X,CB400F,CB500F,CB500X ,CBR500R,CB650F,CBR650F,CBR650R,NC700S,NC750X,CTX700N,NSS350,CBF500,CBF600N,CB600Hornet S,CBF600S,CBF1000_ _true_false/Triumph_Tiger Sport660,Bonneville Speedmaster,Bonneville T100,T120_ _true_false/Indian_Springfield Dark Horse_ _false_true', '33');
INSERT INTO `product_inquries` VALUES ('34', '02983', '34', 'YSD02983', 'SSJ02983', 'FA663', 'SBS 229/931 ', '', '029.jpg', 'YSD02983.jpg', 'YAMAHA_X MAX300,YZF-R3_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '34');
INSERT INTO `product_inquries` VALUES ('35', '030105', '35', 'YSD030105', 'SSJ030105', 'FA662', 'SBS 230/932', '', '030.jpg', 'YSD03010 5.jpg', 'YAMAHA_X MAX300,YZF-R3_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '35');
INSERT INTO `product_inquries` VALUES ('36', '03193', '36', 'YSD03193', 'SSJ03193', '', '', '', '031.jpg', 'YSD03193.jpg', 'SUZUKI_GSX250,GW250,DL250,DR300,TR300_ _true_false/CYCLONE_RX1 ZS150-51,RX1 ZS200-51,RT3 ZS250T-3_ _true_false/ZONTES_ZT250-R,ZT250-S,310T,310V,ZT310-R,ZT310-X_ _true_false/LIFAN_LF250-D,V16_ _true_false/VOGE_500R,500AC,525R,525DS,DS500,LX650-2_ _true_false/KOVE_400 X,500 X,500F,525 X,450RR_ _true_false/KAWASAKI_Versys-X300,Z650,Versys 650_2016-_true_false/Indian_Scout_2015-2016-_true_false', '36');
INSERT INTO `product_inquries` VALUES ('37', '0329788', '37', 'YSD0329788', 'SSJ0329788', 'SFA492', 'SBS 208', '', '032.jpg', 'YSD03297 88.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '37');
INSERT INTO `product_inquries` VALUES ('38', '03310', '38', 'YSD03310', 'SSJ03310', '', '', '', '033.jpg', 'YSD03310.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '38');
INSERT INTO `product_inquries` VALUES ('39', '03483', '39', 'YSD03483', 'SSJ03483', 'FA151', 'SBS 110/618 ', '', '034.jpg', 'YSD03483.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '39');
INSERT INTO `product_inquries` VALUES ('40', '03586', '40', 'YSD03586', 'SSJ03586', '', '', '', '035.jpg', 'YSD03586.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '40');
INSERT INTO `product_inquries` VALUES ('41', '03680', '41', 'YSD03680', 'SSJ03680', '', '', '', '036.jpg', 'YSD03680.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '41');
INSERT INTO `product_inquries` VALUES ('42', '03783', '42', 'YSD03783', 'SSJ03783', '', 'SBS 975', '', '037.jpg', 'YSD03783.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '42');
INSERT INTO `product_inquries` VALUES ('43', '03872', '43', 'YSD03872', 'SSJ03872', 'FA110', 'SBS 587 ', '', '038.jpg', 'YSD03872.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '43');
INSERT INTO `product_inquries` VALUES ('44', '03985', '44', 'YSD03985', 'SSJ03985', 'FA095', 'SBS 566 ', '', '039.jpg', 'YSD03985.jpg', 'KOVE_321R,321RR_ _true_false/DUCATI_600SS Supersport ,M600 Monster,748SP,750Monster_ _true_false/KTM_620Duke,640Duke_ _true_false/YAMAHA_SZR660_ _true_false/MOTOGUZZI_RS1000 Daytona,V10 1000 Centauro,1100Sport,EV1100 California _ _true_false', '44');
INSERT INTO `product_inquries` VALUES ('45', '04072', '45', 'YSD04072', 'SSJ04072', '', '', '', '040.jpg', 'YSD04072.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '45');
INSERT INTO `product_inquries` VALUES ('46', '04173', '46', 'YSD04173', 'SSJ04173', 'SFA301', 'SBS 153/224', '', '041.jpg', 'YSD04173.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '46');
INSERT INTO `product_inquries` VALUES ('47', '0429589', '47', 'YSD0429589', 'SSJ0429589', 'FA192', 'SBS 687', '', '042.jpg', 'YSD04295 89.jpg', 'CFMOTO_650NK,650TR_-2013_false_true/KAWASAKI_ZX-6R 600Ninja,ZX-6R 636Ninja,ZX-9R 900Ninja,ER-6n 650,KLE 650Versys Left,Right Rear,Z750 S Left,Right Rear_ _false_true/KAWASAKI_Z1000 _ 2014-_false_true/KAWASAKI_ZX10R_2008-2010_false_true/ _ _ _ _', '47');
INSERT INTO `product_inquries` VALUES ('48', '04378', '48', 'YSD04378', 'SSJ04378', 'FA679', 'SBS 940', '', '043.jpg', 'YSD04378.jpg', 'HONDA_CB650R,NSS750,X -ADV750,CRF1000 LAG ABS,CRF1100_ _true_false/HONDA_CBR650R_2019-2022 _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '48');
INSERT INTO `product_inquries` VALUES ('49', '04483', '49', 'YSD04483', 'SSJ04483', 'FA231', 'SBS 704', '', '044.jpg', 'YSD04483.jpg', 'CFMOTO_650NK,650TR(right)_-2013_true_false/KAWASAKI_ER-6n 650,KLE 650Versys Left,Right Rear,Z750S Left,Right Rear (right)_ _true_false/SUZUKI_GSR750,DL650 V-Strom XT,GSX750,GSX1100 G (right)_ _true_false/ _ _ _ _ / _ _ _ _', '49');
INSERT INTO `product_inquries` VALUES ('50', '04583', '50', 'YSD04583', 'SSJ04583', 'FA229', 'SBS 705', '', '045.jpg', 'YSD04583.jpg', 'CFMOTO_650NK,650TR(left)_-2013_true_false/KAWASAKI_ER-6n 650,KLE 650Versys Left,Right Rear,Z750S Left,Right Rear (left)_ _true_false/SUZUKI_GSR750,DL650 V-Strom XT,GSX750,GSX1100 G (left)_ _true_false/ _ _ _ _ / _ _ _ _', '50');
INSERT INTO `product_inquries` VALUES ('51', '0461080', '51', 'YSD0461080', 'SSJ0461080', 'FA083/2', 'SBS 102/548 ', '', '046.jpg', 'YSD04610 80.jpg', 'Aprilia_GPR125,APR125,GPR150,CR150 APR150-6V ,APR250_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '51');
INSERT INTO `product_inquries` VALUES ('52', '04787', '52', 'YSD04787', 'SSJ04787', 'FA252', 'SBS 198/634/639', '', '047.jpg', 'YSD04787.jpg', 'YAMAHA_TMAX500,XP530TMAX,TMAX560,MT-07 700,XSR700,FZ8 800,MT-09 850,XSR 900,FZ1 1000 Fazer,XTZ1200 Super Tenere,XTZ 1200ZE,FJR1300_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '52');
INSERT INTO `product_inquries` VALUES ('53', '0481080', '53', 'YSD0481080', 'SSJ0481080', 'FA067', 'SBS 135/541/546/586/692', '', '048.jpg', 'YSD04810 80.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '53');
INSERT INTO `product_inquries` VALUES ('54', '049825', '54', 'YSD049825', 'SSJ049825', 'FA264', 'SBS 140/708 ', '', '049.jpg', 'YSD04982 5.jpg', 'SYM_FIDDLE ABS,FNX150,DRG150,158_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '54');
INSERT INTO `product_inquries` VALUES ('55', '05072', '55', 'YSD05072', 'SSJ05072', 'SFA425', 'SBS 191/831', '', '050.jpg', 'YSD05072.jpg', 'PIAGGIO_250 MP3,250 X8_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '55');
INSERT INTO `product_inquries` VALUES ('56', '05180', '56', 'YSD05180', 'SSJ05180', 'SFA603', 'SBS 205', '', '051.jpg', 'YSD05180.jpg', 'HONDA_PCX150_2011-2016_true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '56');
INSERT INTO `product_inquries` VALUES ('57', '05270', '57', 'YSD05270', 'SSJ05270', 'FA193', 'SBS 123/143/697/725/771  ', '', '052.jpg', 'YSD05270.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '57');
INSERT INTO `product_inquries` VALUES ('58', '05370', '58', 'YSD05370', 'SSJ05370', 'SFA260', 'SBS 130/142/202/724', '', '053.jpg', 'YSD05370.jpg', 'SYM_FIDDLE ABS,FNX150_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '58');
INSERT INTO `product_inquries` VALUES ('59', '05465', '59', 'YSD05465', 'SSJ05465', 'FA268', 'SBS 731/145', '', '054.jpg', 'YSD05465.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '59');
INSERT INTO `product_inquries` VALUES ('60', '05572', '60', 'YSD05572', 'SSJ05572', 'FA266', 'SBS 157/730', '', '055.jpg', 'YSD05572.jpg', 'Benelli_TNT600,BJ600,BJ600GS,502C,752s,Leoncino800,TNT899S,TNT1130_ _false_true/ITALJET_Dragster 200_ _false_true/KAWASAKI_1000 H2R,H2 Ninja_ _false_true/DUCATI_620Sport,620Multistrada,749S,749R(Rad.cal),750Sport,750Super Sport,795Monster,796 Hypermotard,800Sport,800Hypermotard,800Hyperstrada,821Monster,848(Rad.cal),848Streetfighter,899Panigale_ _false_true/DUCATI_992ST3s(ABS),939Hypermotard,959Panigaie,990Desmosedici RR,,999S,999Monster S4R,1098(Rad.cal) ,1098Streetfighter S(Rad.cal),1100Hypermotard,1199Superleggera,1200Monster_ _false_true/DUCATI_1299 Panigale s_2015-2019_false_true/KTM_1290 Super Duke GT_ _false_true/MOTOGUZZI_750Breva,750Nevada Classic ie,750Nevada,Nevada Club,V7 750Cafe Classic,V7 750Clubman Racer,V1100 Breva,1200Sport 4V_ _false_true/CFMOTO_700CL-X sport,1250TR-G_ _false_true/MV Agusta_MV800_ _false_true/Aprilia_RS 660_ _false_true', '60');
INSERT INTO `product_inquries` VALUES ('61', '0561190', '61', 'YSD0561190', 'SSJ0561190', 'FA305', 'SBS 154/749', '', '056.jpg', 'YSD05611 90.jpg', 'SYM_500GT_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '61');
INSERT INTO `product_inquries` VALUES ('62', '05790', '62', 'YSD05790', 'SSJ05790', 'FA353', 'SBS 177', '', '057.jpg', 'YSD05790.jpg', 'Aprilia_SR MAX250,SR MAX300_ _false_true/PIAGGIO_250 Beveriy,300 Beverly Tourer,300 Carnaby Cruiser_ _true_true/PIAGGIO_250 GT 60,GTS 250(ABS),250 X8,GTS 300 ,GTV 250 ,GTV300_ _true_false/ _ _ _ _ / _ _ _ _', '62');
INSERT INTO `product_inquries` VALUES ('63', '05875', '63', 'YSD05875', 'SSJ05875', 'FA167', 'SBS 148/186/652/817', '', '058.jpg', 'YSD05875.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '63');
INSERT INTO `product_inquries` VALUES ('64', '05895', '64', 'YSD05895', 'SSJ05895', 'SFA393', 'SBS 190/621', '', '058.jpg', 'YSD05895.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '64');
INSERT INTO `product_inquries` VALUES ('65', '05970', '65', 'YSD05970', 'SSJ05970', 'SFA260', 'SBS 130/142/724/202', '', '059.jpg', 'YSD05970.jpg', 'PIAGGIO_250 MP3,300 MP3 Hybrid,300 MP3 iE ,300 MP3 LT ,300 MP3 Yourban iE_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '65');
INSERT INTO `product_inquries` VALUES ('66', '06075', '66', 'YSD06075', 'SSJ06075', 'FA379', 'SBS 806', '', '060.jpg', 'YSD06075.jpg', 'KAWASAKI_Z900 RS,Z 1000_ _true_false/KAWASAKI_ZX10R_2008-2015_true_false/SUZUKI_DL1000,DL1050,V-Strom XT_2014-2021_true_false/ _ _ _ _ / _ _ _ _', '66');
INSERT INTO `product_inquries` VALUES ('67', '06170', '67', 'YSD06170', 'SSJ06170', 'FA347', 'SBS 782', '', '061.jpg', 'YSD06170.jpg', 'KAWASAKI_Z800,Z900_ _true_false/Indian_Springfield Dark Horse_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '67');
INSERT INTO `product_inquries` VALUES ('68', '06269', '68', 'YSD06269', 'SSJ06269', 'SFA323/2', 'SBS 781 ', '', '062.jpg', 'YSD06269.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '68');
INSERT INTO `product_inquries` VALUES ('69', '06275', '69', 'YSD06275', 'SSJ06275', 'FA092', 'SBS 104/558 ', '', '062.jpg', 'YSD06275.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '69');
INSERT INTO `product_inquries` VALUES ('70', '06280', '70', 'YSD06280', 'SSJ06280', 'SFA323/3', 'SBS 174 ', '', '062.jpg', 'YSD06280.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '70');
INSERT INTO `product_inquries` VALUES ('71', '06290', '71', 'YSD06290', 'SSJ06290', 'FA323', 'SBS 125/709', '', '062.jpg', 'YSD06290.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '71');
INSERT INTO `product_inquries` VALUES ('72', '06390', '72', 'YSD06390', 'SSJ06390', 'FA152', 'SBS 632/648', '', '063.jpg', 'YSD06390.jpg', 'YAMAHA_XT250_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '72');
INSERT INTO `product_inquries` VALUES ('73', '06477', '73', 'YSD06477', 'SSJ06477', 'FA209', 'SBS 176/674', '', '064.jpg', 'YSD06477.jpg', 'CFMOTO_400NK,400GT,650NK,650MT,650GT,650TR-G_ _true_false/BMW_F650 GS,F700 GS,F750GS,F800 GS,F850 GS,850ADV,R1200GS Adventure,R1200RS,R1200R,R1200RT,R1250RT,R1250GS,K1300R, K1600GT_ _false_true/BMW_R1250GS ADV_2019-_false_true/DUCATI_1200 Xdiavel_ _false_true/DUCATI_1000 Superspotr S _ _true_false/MOTOGUZZI_1100 California Special Sport Alloy,1100 California Stone Metal,1100 Griso,1400 Audace,1400 California Touring_ _false_true/KTM_690 Enduro,R ,950 Adventure, 950 R Superenduro,990 Adventure R_ _true_false/HONDA_CB 500S_ _true_false/Indian_Scout_2017-2021_true_false', '73');
INSERT INTO `product_inquries` VALUES ('74', '06572', '74', 'YSD06572', 'SSJ06572', 'FA409', 'SBS 830', '', '065.jpg', 'YSD06572.jpg', 'Harley Davidson_VRSCA 1130 V-Rod_2006- _true_true/Harley Davidson_VRSCD 1130 Night Rod_ _true_true/_ _ _ _/ _ _ _ _ / _ _ _ _', '74');
INSERT INTO `product_inquries` VALUES ('75', '06680', '75', 'YSD06680', 'SSJ06680', 'FA457', 'SBS 853', '', '066.jpg', 'YSD06680.jpg', 'Harley Davidson_FLSTC 1584 Heritage Softail Classic,FLSTF 1584 Fat Boy_2008-_true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '75');
INSERT INTO `product_inquries` VALUES ('76', '06783', '76', 'YSD06783', 'SSJ06783', 'FA261', 'SBS 156/721/735/736', '', '067.jpg', 'YSD06783.jpg', 'HONDA_ST1300_ _false_true/HONDA_CTX1300_2008-2012_false_true/HONDA_GL 1800 Gold Wing,VTX 1800_ _true_false/KAWASAKI_Vulcan S,EN650_2015-2018_true_false/ _ _ _ _', '76');
INSERT INTO `product_inquries` VALUES ('77', '067103', '77', 'YSD067103', 'SSJ067103', 'FA261/2', 'SBS 147/722/880 ', '', '067.jpg', 'YSD067103.jpg', 'HONDA_GL 1800 Gold Wing,VTX 1800 _ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '77');
INSERT INTO `product_inquries` VALUES ('78', '068115', '78', 'YSD068115', 'SSJ068115', 'SFA408', 'SBS 769', '', '068.jpg', 'YSD068115.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '78');
INSERT INTO `product_inquries` VALUES ('79', '069105', '79', 'YSD069105', 'SSJ069105', 'SFA319', 'SBS 169/185', '', '069.jpg', 'YSD069105.jpg', 'YAMAHA_TMAX 560,XP 530 TMAX,500 TMAX,XTZ1200 Super Tenere,XTZ1200 ZE,FJR1300_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '79');
INSERT INTO `product_inquries` VALUES ('80', '07060', '80', 'YSD07060', 'SSJ07060', 'FA115', 'SBS 105/188/559', '', '070.jpg', 'YSD07060.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '80');
INSERT INTO `product_inquries` VALUES ('81', '07171', '81', 'YSD07171', 'SSJ07171', 'FA453', 'SBS 219/716/914', '', '071.jpg', 'YSD07171.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '81');
INSERT INTO `product_inquries` VALUES ('82', '07284', '82', 'YSD07284', 'SSJ07284', 'SFA324', 'SBS 159', '', '072.jpg', 'YSD07284.jpg', 'KYMCO_Racing X150,CT250,CT300,ST250,ST300,S350_ _true_false/Aprilia_200ie_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '82');
INSERT INTO `product_inquries` VALUES ('83', '07390', '83', 'YSD07390', 'SSJ07390', 'SFA418', 'SBS 187/818', '', '073.jpg', 'YSD07390.jpg', 'PIAGGIO_Medley150,250 X7,250 Xevo,300 Beverly i.e.,300 X7 Evo i.e. ,300 MP3 Hybrid,300 MP3 iE ,300 MP3 LT ,300 MP3 Yourban iE,BV 350 _ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '83');
INSERT INTO `product_inquries` VALUES ('84', '07472', '84', 'YSD07472', 'SSJ07472', 'FA194', 'SBS 120/689', '', '074.jpg', 'YSD07472.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '84');
INSERT INTO `product_inquries` VALUES ('85', '07573', '85', 'YSD07573', 'SSJ07573', 'SFA430', 'SBS 194', '', '075.jpg', 'YSD07573.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '85');
INSERT INTO `product_inquries` VALUES ('86', '07660', '86', 'YSD07660', 'SSJ07660', 'FA186', 'SBS 117/680/574', '', '076.jpg', 'YSD07660.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '86');
INSERT INTO `product_inquries` VALUES ('87', '07771', '87', 'YSD07771', 'SSJ07771', 'FA356', 'SBS 776/172 ', '', '077.jpg', 'YSD07771.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '87');
INSERT INTO `product_inquries` VALUES ('88', '07810986', '88', 'YSD07810986', 'SSJ07810986', 'FA377', 'SBS 810/930', '', '078.jpg', 'YSD07810986.jpg', 'SYM_NH T200,XS175,SB300(ABS) _ _false_true/Indian_Scout_2015-2016_false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '88');
INSERT INTO `product_inquries` VALUES ('89', '07980', '89', 'YSD07980', 'SSJ07980', 'FA630', 'SBS 900', '', '079.jpg', 'YSD07980.jpg', 'Benelli_502C,752s,Leoncino 800,TRK 702,X_ _true_false/KYMCO_AK550_ _true_false/CFMOTO_SR450_ _true_false/VOGE_RR525_ _true_false/BMW_F900R,F900XR,S1000 XR,R1200 GS Adventure,R1200 RS,R1200 R,R1200 RT_ _true_false/BMW_F800 R_2015-_true_false/DUCATI_800 Scrambler lcon,800 Scrambler Urban Enduro,800 Hypermotard,800 Hyperstrada,821 Monster,899 Panigale,939 Hypermotard,959 Panigaie,1200 Monster_ _true_false/Bombardier_Spyder F3_2013-2021_true_false/Aprilia_RS 660 _ _true_false/Triumph_Street Triple 765 R_ _true_false', '89');
INSERT INTO `product_inquries` VALUES ('90', '08087', '90', 'YSD08087', 'SSJ08087', 'SFA719', '', '', '080.jpg', 'YSD08087.jpg', 'KYMCO_KRider 400,AK550_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '90');
INSERT INTO `product_inquries` VALUES ('91', '081118', '91', 'YSD081118', 'SSJ081118', 'SFA628', 'SBS 218 ', '', '081.jpg', 'YSD081118.jpg', 'SYM_Maxsym400i,600i,TL500_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '91');
INSERT INTO `product_inquries` VALUES ('92', '08275', '92', 'YSD08275', 'SSJ08275', 'SFA321', 'SBS 166/772', '', '082.jpg', 'YSD08275.jpg', 'PIAGGIO_250GT 60,GTS250(ABS),GTS300,GTV250 ,GTV300_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '92');
INSERT INTO `product_inquries` VALUES ('93', '08386', '93', 'YSD08386', 'SSJ08386', 'FA283/4\r\nFA423/4', 'SBS 146/740 ', '', '083.jpg', 'YSD08386.jpg', 'SYM_500GT_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '93');
INSERT INTO `product_inquries` VALUES ('94', '0848085', '94', 'YSD0848085', 'SSJ0848085', 'FA413', 'SBS 835', '', '084.jpg', 'YSD08480.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '94');
INSERT INTO `product_inquries` VALUES ('95', '08495', '95', 'YSD08495', 'SSJ08495', 'FA307', 'SBS 196/754', '', '084.jpg', 'YSD08495.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '95');
INSERT INTO `product_inquries` VALUES ('96', '08573', '96', 'YSD08573', 'SSJ08573', 'FA106', 'SBS 581', '', '085.jpg', 'YSD08573.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '96');
INSERT INTO `product_inquries` VALUES ('97', '08595', '97', 'YSD08595', 'SSJ08595', 'FA106/2', 'SBS 582', '', '085.jpg', 'YSD08595.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '97');
INSERT INTO `product_inquries` VALUES ('98', '086835', '98', 'YSD086835', 'SSJ086835', 'FA124', 'SBS 600', '', '086.jpg', 'YSD086835.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '98');
INSERT INTO `product_inquries` VALUES ('99', '08798', '99', 'YSD08798', 'SSJ08798', 'FA199', 'SBS 128/691', '', '087.jpg', 'YSD08798.jpg', 'SYM_NH T200,XS175_ _true_false/YAMAHA_FZ6 600,XJ 600N_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '99');
INSERT INTO `product_inquries` VALUES ('100', '088765', '100', 'YSD088765', 'SSJ088765', 'FA125', 'SBS 139/603 ', '', '088.jpg', 'YSD088765.jpg', 'KOVE_500X (Single rocker arm)_2020- _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '100');
INSERT INTO `product_inquries` VALUES ('101', '08980', '101', 'YSD08980', 'SSJ08980', 'SFA627', 'SBS 215', '', '089.jpg', 'YSD08980.jpg', 'SYM_JoyMax Z300i,SB300(ABS),Maxsym400i,600i,TL500_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '101');
INSERT INTO `product_inquries` VALUES ('102', '09188', '102', 'YSD09188', 'SSJ09188', 'FA436', 'SBS 834', '', '091.jpg', 'YSD09188.jpg', 'SUZUKI_GSX-S 1000 F_ _false_true/HONDA_CBR1000 RR_ _false_true/KAWASAKI_ZX10R_2011-2015_false_true/ _ _ _ _ / _ _ _ _', '102');
INSERT INTO `product_inquries` VALUES ('103', '09290', '103', 'YSD09290', 'SSJ09290', 'FA296', 'SBS 860 ', '', '092.jpg', 'YSD09290.jpg', 'CYCLONE_RC3 ZS250GS-2,RZ3 ZS250GS-2A,RC401_ _true_false/HYOSUNG_GV 250DR,300S,GV 650_ _true_false/Harley Davidson_Fat Boy 114_2018-2022_true_false/Harley Davidson_FLSTC 1690 Heritage Softail Classic,FLSTF 1690 Fat Boy_2015- _true_false/HONDA_CBR 600 RR,CB 1100 EX,CB 1300_ _true_false', '103');
INSERT INTO `product_inquries` VALUES ('104', '09380', '104', 'YSD09380', 'SSJ09380', 'FA390', 'SBS 809 ', '', '093.jpg', 'YSD09380.jpg', 'HONDA_CBR1000 RR_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '104');
INSERT INTO `product_inquries` VALUES ('105', '09473               ', '105', 'YSD09473                        ', 'SSJ09473                        ', 'FA322/4', 'SBS 762', '', '094.jpg', 'YSD09473.jpg', 'Benelli_Leoncino 500,TRK 502,TNT 600,BJ600,BJ600GS _ _true_false/BMW_S1000 R,S1000 RR_ _true_false/ DUCATI_749,S,749 R(Rad.cal),999,S,999 Monster S4R,996 R,998 R_ _true_false/KTM_690 Duke,690 Duke R,690 SM,990 Super Duke ,R,950 SM,R ,990 Supermoto_ _true_false/Triumph_Street Twin_ _true_false', '105');
INSERT INTO `product_inquries` VALUES ('106', '09577 ', '106', 'YSD09577 ', 'SSJ09577 ', 'FA447', 'SBS 841', '', '095.jpg', 'YSD09577.jpg', 'BMW_S1000 RR HP4_ _true_false/KAWASAKI_1000 H2R,H2 Ninja_ _true_false/DUCATI_990 Desmosedici RR,1098 (Rad.cal) ,1098 Streetfighter S (Rad.cal),1100 Hypermotard,1199 Superleggera,1200 Xdiavel,1299 Panigale,s（15-19）,Multistrada 1260s_ _true_false/KTM_1290 Super Duke GT_ _true_false/SUZUKI_GSX-S 1000,F_ _true_false/CFMOTO_700CL-X sport,1250TR-G_ _true_false/Triumph_Street Triple 765 RS,Street Triple 1200 RS _ _true_false/Benelli_TNT1130_ _true_false', '106');
INSERT INTO `product_inquries` VALUES ('107', '09686', '107', 'YSD09686', 'SSJ09686', 'FA606', 'SBS 877', '', '096.jpg', 'YSD09686.jpg', 'VOGE_LX350T-5,SR4 Max_ _true_false/BMW_G310 GS,G310 R,400GT,C400 X _ _true_false/KTM_200 Duke,390 Duke,RC 390_ _true_false/ _ _ _ _ / _ _ _ _', '107');
INSERT INTO `product_inquries` VALUES ('108', '09710', '108', 'YSD09710', 'SSJ09710', 'FA174', 'SBS 161/614  ', '', '097.jpg', 'YSD09710.jpg', 'KAWASAKI_Z 650,Versys 650(16-),Z 750,ABS,1000 Versys,Z 1000(10-13),Vulcan S,EN650(15-18) _ _false_true/YAMAHA_FZ6 600,MT-09 850,MT-07 700,YZF-R1,XSR 700,FZ8 800,XSR 900,FZ1 1000 Fazer_ _false_true/SUZUKI_GSF 650 S Bandit,ABS ,GSX 650 F ,SV 1000 S,GSR 750,DL 650 V-Strom XT_ _false_true/HONDA_CBF 500,CBR 600 RR,CBF 600 N,CB 600 Hornet S,CBF 600 S,CB 900 Hornet,CB 1000 F(Big One),CBF 1000,CRF1000 LAG ABS,CRF1100,CM1100 ,CB 1100 EX,CB 1300_ _false_true/HONDA_CBF 500 ABS,CB 600 Hornet ABS,CBF 600 N ABS,CBF 600 S ABS,CBR 600 F ABS,CBF 1000 F ABS,CB 1100,CB 1300 S _ _false_true', '108');
INSERT INTO `product_inquries` VALUES ('109', '09870', '109', 'YSD09870', 'SSJ09870', 'FA658', 'SBS 933', '', '098.jpg', 'YSD09870.jpg', 'Benelli_Leoncino 250,BJ250,TRK251,BJ 300GS,Tornado 302R,BN302S_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '109');
INSERT INTO `product_inquries` VALUES ('110', '0998085', '110', 'YSD0998085', 'SSJ0998085', 'FA414', 'SBS 836', '', '099.jpg', 'YSD0998085.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '110');
INSERT INTO `product_inquries` VALUES ('111', '09995', '111', 'YSD09995', 'SSJ09995', 'FA317', 'SBS 767/816', '', '099.jpg', 'YSD09995.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '111');
INSERT INTO `product_inquries` VALUES ('112', '1008676', '112', 'YSD1008676', 'SSJ1008676', 'FA401', 'SBS 820', '', '100.jpg', 'YSD11088.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '112');
INSERT INTO `product_inquries` VALUES ('113', '10192', '113', 'YSD10192', 'SSJ10192', 'FA213', 'SBS 175/675', '', '101.jpg', 'YSD10192.jpg', 'Benelli_TRK 702,X_ _false_true/CFMOTO_NK250,SR250,400NK,400GT,650NK,650MT,650GT,650TR-G(14-18)_ _false_true/VOGE_LX350T-5,SR4 Max,CU525_ _false_true/BMW_G310 GS,G310 R,400GT,C400 X,F650 GS,F700 GS,F750GS,F800 GS,F800 R(2015-), F800 GT,F800 S, F800 ST,F850 GS,850ADV,F900R,F900XR,S1000 R,S1000 RR,S1000 RR HP4_ _false_true/DUCATI_800 Scrambler lcon,800 Scrambler Urban Enduro,1000 Superspotr S_ _false_true/KTM_200 Duke,EXC 250 Enduro, EXC 300 Enduro,SX 250,XC 360,MX 380,XC 380,390 Duke,RC 390,SC 400,SX 620,SXC 625,690 Duke,690 Duke R,690 SM,690 Duke ABS,790 Duke,790 Adventure,690 Enduro,R ,950 Adventure,990 Super Duke ,R_ _false_true/YAMAHA_TT 600 E,S,R_ _false_true/HONDA_CB 500,S_ _false_true/Triumph_Street Triple 765 R,765 RS,Street Triple 1200 RS_ _false_true/Indian_Scout _2017-2021_false_true', '113');
INSERT INTO `product_inquries` VALUES ('114', '10380', '114', 'YSD10380', 'SSJ10380', 'FA458', 'SBS 854', '', '103.jpg', 'YSD10380.jpg', 'Harley Davidson_FLSTC 1584 Heritage Softail Classic,FLSTF 1584 Fat Boy _2008-_false_true/Harley Davidson_FLSTC 1690 Heritage Softail Classic,FLSTF 1690 Fat Boy _2015-_false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '114');
INSERT INTO `product_inquries` VALUES ('115', '10473', '115', 'YSD10473', 'SSJ10473', 'FA256', 'SBS 108/124/179/588/793', '', '104.jpg', 'YSD10473.jpg', 'Aprilia_Mana 850 GT_ _false_true/MOTOGUZZI_V9 Bobber_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '115');
INSERT INTO `product_inquries` VALUES ('116', '10590', '116', 'YSD10590', 'SSJ10590', 'FA368', 'SBS 791 ', '', '105.jpg', 'YSD10590.jpg', 'KTM_EXC-F 350,SX-F 450,XC-F 450,XC-F 505_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '116');
INSERT INTO `product_inquries` VALUES ('117', '10680', '117', 'YSD10680', 'SSJ10680', 'FA254', 'SBS 715/765 ', '', '106.jpg', 'YSD10680.jpg', 'SUZUKI_GSX-R 1000,GSX 1400_ _false_true/Harley Davidson_XL 883 N Iron,XL 883 L Super Low_2014-_false_true/KAWASAKI_Z Ninja ZX-14R_ _false_true/ _ _ _ _ / _ _ _ _', '117');
INSERT INTO `product_inquries` VALUES ('118', '10775', '118', 'YSD10775', 'SSJ10775', 'FA320', 'SBS 763', '', '107.jpg', 'YSD10775.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '118');
INSERT INTO `product_inquries` VALUES ('119', '10874', '119', 'YSD10874', 'SSJ10874', 'FA419', 'SBS 833 ', '', '108.jpg', 'YSD10874.jpg', 'SUZUKI_GSR 600,DL1000,DL1050,V-Strom XT(14-21)_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '119');
INSERT INTO `product_inquries` VALUES ('120', '1098278', '120', 'YSD1098278', 'SSJ1098278', 'FA744', '', '', '109.jpg', 'YSD1098278.jpg', 'HONDA _CBF150R,CBF 190_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '120');
INSERT INTO `product_inquries` VALUES ('121', '11380', '121', 'YSD11380', 'SSJ11380', 'SFA709', 'SBS 235', '', '113.jpg', 'YSD11380.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '121');
INSERT INTO `product_inquries` VALUES ('122', '115104', '122', 'YSD115104', 'SSJ115104', '', '', '', '115.jpg', 'YSD115104.jpg', 'VOGE_180RR,180R,200AC,300R,LX300-6D,300RR,300AC,LX300 GS-B_ _false_true/LIFAN_LF250-D,V16_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '122');
INSERT INTO `product_inquries` VALUES ('123', '11680', '123', 'YSD11680', 'SSJ11680', '', '', '', '116.jpg', 'YSD11680.jpg', 'CFMOTO_NK250,SR250_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '123');
INSERT INTO `product_inquries` VALUES ('124', '11774', '124', 'YSD11774', 'SSJ11774', '', '', '', '117.jpg', 'YSD11774.jpg', 'Benelli_imperiale 400_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '124');
INSERT INTO `product_inquries` VALUES ('125', '11884', '125', 'YSD11884', 'SSJ11884', 'FA335', 'SBS 796', '', '118.jpg', 'YSD11884.jpg', 'BMW_R1200RT_2006-2013_true_false/BMW_K1200S_2005-2008_true_false/BMW_K1300S _2009- _true_false/BMW_1300GT_2009-2010_true_false/ _ _ _ _', '125');
INSERT INTO `product_inquries` VALUES ('126', '120935', '126', 'YSD120935', 'SSJ120935', 'SFA432', 'SBS 214/844', '', '120.jpg', 'YSD120935.jpg', 'KYMCO_S400,KRider 400_ _true_false/Aprilia_Mana 850 GT_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '126');
INSERT INTO `product_inquries` VALUES ('127', '12180', '127', 'YSD12180', 'SSJ12180', 'FA664', 'SBS 217/926', '', '121.jpg', 'YSD12180.jpg', 'CYCLONE_RT3 ZS250T-3_ _true_false/KOVE_321R,321RR,500F,500X (Single rocker arm),525X(Single rocker arm)_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '127');
INSERT INTO `product_inquries` VALUES ('128', '125845', '128', 'YSD125845', 'SSJ125845', '', '', '', '125.jpg', 'YSD125845.jpg', 'HYOSUNG_GV 250DR,300S_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '128');
INSERT INTO `product_inquries` VALUES ('129', '12695', '129', 'YSD12695', 'SSJ12695', 'FA697', 'SBS 998', '', '126.jpg', 'YSD12695.jpg', 'VOGE_300GY_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '129');
INSERT INTO `product_inquries` VALUES ('130', '12799', '130', 'YSD12799', 'SSJ12799', '', 'SBS 204', '', '127.jpg', 'YSD12799.jpg', 'KYMCO_Racing X150_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '130');
INSERT INTO `product_inquries` VALUES ('131', '12880', '131', 'YSD12880', 'SSJ12880', 'FA724', 'SBS 960', '', '128.jpg', 'YSD12880.jpg', 'BMW_R1250RT,R1250GS,R1250GS ADV(19-)_ _true_false/BMW_S1000 R,S1000 RR (18-20)_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '131');
INSERT INTO `product_inquries` VALUES ('132', '12990', '132', 'YSD12990', 'SSJ12990', 'FA696', 'SBS 506/640', '', '129.jpg', 'YSD12990.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '132');
INSERT INTO `product_inquries` VALUES ('133', '13084', '133', 'YSD13084', 'SSJ13084', 'FA063', 'SBS 556', '', '130.jpg', 'YSD13084.jpg', 'KAWASAKI_ZX-7R 750 Ninja_ _false_true/SUZUKI_GSX-R 600,GSX 750,GSX-R 750,GSX 1100 G,GSF 1200 S Bandit,GSX 1200_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '133');
INSERT INTO `product_inquries` VALUES ('134', '13197', '134', 'YSD13197', 'SSJ13197', 'FA298', 'SBS 152', '', '131.jpg', 'YSD13197.jpg', 'Aprilia_200ie_ _false_true/SYM_DRG150,158_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '134');
INSERT INTO `product_inquries` VALUES ('135', '13281', '135', 'YSD13281', 'SSJ13281', 'FA158', 'SBS 631/789', '', '132.jpg', 'YSD13281.jpg', 'SUZUKI_GSX-R 600,GSR 600,GSF 650 S Bandit,ABS ,GSX 650 F ,SV 1000 S_ _true_false/KAWASAKI_1000 Versys_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '135');
INSERT INTO `product_inquries` VALUES ('136', '13480', '136', 'YSD13480', 'SSJ13480', 'FA631', 'SBS 948', '', '134.jpg', 'YSD13480.jpg', 'Bombardier_Spyder F3 _2013-2021_false_true/Harley Davidson_Tri Glide_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _', '136');
INSERT INTO `product_inquries` VALUES ('137', '13577', '137', 'YSD13577', 'SSJ13577', 'SFA723', 'SBS 233', '', '135.jpg', 'YSD13577.jpg', 'HONDA_PCX150_2017-_true_false/HONDA_PCX160 CBS_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '137');
INSERT INTO `product_inquries` VALUES ('138', '13789', '138', 'YSD13789', 'SSJ13789', 'FA717', 'SBS 952', '', '137.jpg', 'YSD13789.jpg', 'HONDA_GL 1800 Gold Wing_2018-2020_true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '138');
INSERT INTO `product_inquries` VALUES ('139', '13981               ', '139', 'YSD13981                        ', 'SSJ13981                        ', 'FA442/4', 'SBS 839', '', '139.jpg', 'YSD13981.jpg', 'YAMAHA_YZF-R1_2007-2014_true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '139');
INSERT INTO `product_inquries` VALUES ('140', '14276               ', '140', 'YSD14276                        ', 'SSJ14276                        ', 'FA417/4', 'SBS 838', '', '142.jpg', 'YSD14276.jpg', 'KAWASAKI_Z Ninja ZX-14R_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '140');
INSERT INTO `product_inquries` VALUES ('141', '14492', '141', 'YSD14492', 'SSJ14492', 'FA727', '', '', '144.jpg', 'YSD14492.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '141');
INSERT INTO `product_inquries` VALUES ('142', '14593', '142', 'YSD14593', 'SSJ14593', 'FA711', 'SBS 234/968', '', '145.jpg', 'YSD14593.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '142');
INSERT INTO `product_inquries` VALUES ('143', '14685', '143', 'YSD14685', 'SSJ14685', 'FA754', '', '', '146.jpg', 'YSD14685.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '143');
INSERT INTO `product_inquries` VALUES ('144', '14993', '144', 'YSD14993', 'SSJ14993', 'FA613', 'SBS 778', '', '149.jpg', 'YSD14993.jpg', 'BMW_R1150 GS Adventurer,R1150 R,R1150 R Rockster,R1150 RS,K1200 S,R1200 S,R1200 ST,K1300 GT,K1300 R, K1600GT _ _true_false/KAWASAKI_ZX-6R 600 Ninja,ZX-6R 636 Ninja,ZX-7R 750 Ninja,ZX-9R 900 Ninja_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _', '144');
INSERT INTO `product_inquries` VALUES ('145', '151105', '145', 'YSD151105', 'SSJ151105', 'SFA607', '', '', '151.jpg', 'YSD151105.jpg', 'KYMCO_CT250,CT300,ST250,ST300,S350,S400_ _false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '145');
INSERT INTO `product_inquries` VALUES ('146', '15392', '146', 'YSD15392', 'SSJ15392', 'FA722', '', '', '153.jpg', 'YSD15392.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '146');
INSERT INTO `product_inquries` VALUES ('147', '15495', '147', 'YSD15495', 'SSJ15495', 'FA131/3', 'SBS 144/604', '', '154.jpg', 'YSD15495.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '147');
INSERT INTO `product_inquries` VALUES ('148', '15590', '148', 'YSD15590', 'SSJ15590', 'FA731', '', '', '155.jpg', 'YSD15590.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '148');
INSERT INTO `product_inquries` VALUES ('149', '15710', '149', 'YSD15710', 'SSJ15710', '', 'SBS 949', '', '157.jpg', 'YSD15710.jpg', 'Harley Davidson_Fat Boy 114_2018-2022_false_true/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '149');
INSERT INTO `product_inquries` VALUES ('150', '15910', '150', 'YSD15910', 'SSJ15910', 'FA367', 'SBS 790', '', '159.jpg', 'YSD15910.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '150');
INSERT INTO `product_inquries` VALUES ('151', '16072', '151', 'YSD16072', 'SSJ16072', '', 'SBS 157/730', '', '160.jpg', 'YSD16072.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '151');
INSERT INTO `product_inquries` VALUES ('152', '16174', '152', 'YSD16174', 'SSJ16174', 'FA602', 'SBS 872', '', '161.jpg', 'YSD16174.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '152');
INSERT INTO `product_inquries` VALUES ('153', '16275', '153', 'YSD16275', 'SSJ16275', 'FA612', 'SBS 885', '', '162.jpg', 'YSD16275.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '153');
INSERT INTO `product_inquries` VALUES ('154', '16350', '154', 'YSD16350', 'SSJ16350', 'FA325', 'SBS 794', '', '163.jpg', 'YSD16350.jpg', ' _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '154');
INSERT INTO `product_inquries` VALUES ('155', '16493', '155', 'YSD16493', 'SSJ16493', '', 'SBS 232/961', '', '164.jpg', 'YSD16493.jpg', 'Benelli_BN150S,Leoncino150_ _true_false/ _ _ _ _ / _ _ _ _ / _ _ _ _ / _ _ _ _', '155');
