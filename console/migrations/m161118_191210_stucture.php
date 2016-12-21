<?php

use yii\db\Migration;

class m161118_191210_stucture extends Migration
{
    public function up() {
		$this->execute("
		CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `patronymic` varchar(200) NOT NULL,
  `telephone` text NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customer`
--

INSERT INTO `customer` (`id`, `last_name`, `first_name`, `patronymic`, `telephone`, `note`) VALUES
(7, '111', '', '', '222', '333'),
(8, 'rber', '', '', 'egwe', 'vewewv'),
(9, 'cwsc', '', '', 'scs', 'csc'),
(10, 'ax', '', '', 'x', 'x'),
(11, 'esds', '', '', 'vdd', 'vdvd'),
(12, 'evd', '', '', '1212121', 'vww'),
(13, 'rvbwrv', '', '', '232342342', 'thrthts'),
(14, 'rgrgregrg', '', '', '341341341', 'tfbeabear'),
(15, 'egwegfwe', '', '', '21241', 'rgwegwegw'),
(16, 'fefe', '', '', '2312', 'fwfwefw'),
(17, 'heethetht', '', '', '34523452464', 'tgjnrtjtjr'),
(18, '24e34g34g', '', '', '34235235', 'tghrtgrt'),
(19, 't2t', '', '', '3523523', 'egege'),
(20, 'tgheher', '', '', '34235235', 'tegrer'),
(21, 'rdwe', '', '', 'ewrvew', 'bwr'),
(22, 'ergwr', '', '', 'rbw', 'wvergw'),
(23, '32g43g4g', '', '', '223323232', 'ergergeagrger'),
(24, 'цкупцупцуп', '', '', '3434322', 'руеркер'),
(25, 'уеиук', '', '', '3423423', 'уерркуе'),
(26, 'уеиук', '', '', '3423423', 'уерркуе'),
(27, 'ууй', '', '', '2311243', 'кпу'),
(28, 'кпукпук', '', '', '3232332323', 'купкупукпукп'),
(29, 'кпукпук', '', '', '3232332323', 'купкупукпукп'),
(30, 'кпукпук', '', '', '3232332323', 'купкупукпукп'),
(31, 'кпукпук', '', '', '3232332323', 'купкупукпукп'),
(32, 'jjsrjvsev', '', '', '435434', 'gergergerge'),
(33, 'rhberhber', '', '', 'vwevwe', 'vewv'),
(34, '76k7k6', '', '', '654634', 'uykukyuky');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1480772608),
('m130524_201442_init', 1480772615),
('m161118_191210_stucture', 1480772618);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_seamstres` int(11) NOT NULL,
  `date_try` date NOT NULL,
  `description` text NOT NULL,
  `date_orders` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cost` decimal(10,0) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `id_customer`, `id_seamstres`, `date_try`, `description`, `date_orders`, `cost`, `status`) VALUES
(1, 7, 2, '2016-12-02', 'уеруерцкцр', '2016-12-03 14:35:30', '42434', 0),
(2, 7, 2, '2016-12-02', 'уеруерцкцр', '2016-12-03 14:35:33', '42434', 0),
(3, 7, 1, '2016-12-03', 'etghrege', '2016-12-03 14:42:56', '3423', 1),
(4, 7, 1, '2016-12-03', 'etghrege', '2016-12-03 14:43:01', '3423', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `seamstress`
--

CREATE TABLE IF NOT EXISTS `seamstress` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `specialization` tinytext NOT NULL,
  `telephone` text NOT NULL,
  `status` tinyint(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `scedule_of_work` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `seamstress`
--

INSERT INTO `seamstress` (`id`, `first_name`, `last_name`, `specialization`, `telephone`, `status`, `experience`, `scedule_of_work`) VALUES
(1, 'Диля', 'Маматова', 'Вышивание', '+49613256546', 1, 0, ''),
(2, 'Диля', 'Маматова', 'Вышивание', '+49613256546', 1, 0, ''),
(3, 'verere', 'tbegr', 'vervrvrv', '35445345', 1, 5, 'gygy23234'),
(4, 'verere', 'tbegr', 'vervrvrv', '35445345', 1, 5, 'gygy23234');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Atelier', '-Bv6X7t0QQxz8EgT98PSuXSG5PAefWLV', '$2y$13$p/9n5gcrJQ9cJT5yDvREze/pMRB.a/a8/030oXlWFbEwD.zDRqwAe', NULL, 'Atelier@gmail.com', 10, 1481716522, 1481716522);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_customer` (`id_customer`),
  ADD KEY `id_seamstres` (`id_seamstres`);

--
-- Индексы таблицы `seamstress`
--
ALTER TABLE `seamstress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `first_name` (`first_name`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `seamstress`
--
ALTER TABLE `seamstress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_seamstres`) REFERENCES `seamstress` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

		");
	}

    public function down()
    {
        echo "m161118_191210_stucture cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
