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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customer`
--

INSERT INTO `customer` (`id`, `last_name`, `first_name`, `patronymic`, `telephone`, `note`) VALUES
(11, 'Регова', 'Ленара', 'Носовна', '+79561261262', 'Юбку укаратить'),
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
(35, 'Солдаткина', 'Яна', 'Сергеевна', '+79561626262', 'ыаыуаыуаацу'),
(37, 'Тимкин', 'Сергай', 'Отвсы', '+7952636363', 'вмцуцуц'),
(38, 'Иванайко', 'Ольга', 'Владимировна', '+7946626269595', 'Переделка'),
(39, 'Иванайко', 'Ольга', 'Владимировна', '+7946626269595', 'Переделка'),
(40, 'Иванайко', 'Ольга', 'Владимировна', '+7946626269595', 'Переделка'),
(41, 'Иванайко', 'Ольга', 'Владимировна', '+7946626269595', 'Переделка'),
(42, 'Сарсанова', 'Екаатерина', 'Поповна', '+76516226326', ''),
(43, 'Сарсанова', 'Екаатерина', 'Поповна', '+76516226326', '');

-- --------------------------------------------------------

--
--- --------------------------------------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `id_customer`, `id_seamstres`, `date_try`, `description`, `date_orders`, `cost`, `status`) VALUES
(2, 37, 4, '2016-12-30', 'yjhgiuh', '2016-12-21 07:23:27', '666', 0),
(3, 27, 3, '2016-12-08', 'wdqwdqw', '2016-12-23 03:12:15', '2242', 0),
(4, 11, 3, '0000-00-00', 'dfsefefefwfwwfw', '2016-12-16 10:34:18', '0', 0),
(5, 11, 3, '0000-00-00', 'dfsefefefwfwwfw', '2016-12-16 10:35:21', '0', 0),
(6, 11, 3, '0000-00-00', 'dfsefefefwfwwfw', '2016-12-16 10:35:48', '0', 0),
(7, 11, 3, '0000-00-00', 'dfsefefefwfwwfw', '2016-12-16 10:36:24', '0', 0),
(8, 11, 3, '0000-00-00', 'dfsefefefwfwwfw', '2016-12-16 10:37:10', '0', 0),
(9, 11, 3, '0000-00-00', 'dfsefefefwfwwfw', '2016-12-16 10:40:31', '0', 0),
(10, 11, 3, '0000-00-00', 'dfsefefefwfwwfw', '2016-12-16 10:41:45', '0', 0),
(11, 11, 3, '0000-00-00', 'dfsefefefwfwwfw', '2016-12-16 10:42:16', '0', 0),
(12, 38, 3, '0000-00-00', 'Пн в 15:00', '2016-12-22 08:03:06', '0', 0),
(13, 39, 3, '0000-00-00', 'Пн в 15:00', '2016-12-22 08:04:14', '0', 0),
(14, 40, 3, '0000-00-00', 'Пн в 15:00', '2016-12-22 08:05:29', '0', 0),
(15, 41, 3, '0000-00-00', 'Пн в 15:00', '2016-12-22 08:06:35', '0', 0),
(16, 42, 5, '0000-00-00', 'Ср в 13:35', '2016-12-22 08:15:53', '0', 0),
(17, 43, 5, '0000-00-00', 'Ср в 13:35', '2016-12-22 08:16:20', '0', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `seamstress`
--

INSERT INTO `seamstress` (`id`, `first_name`, `last_name`, `specialization`, `telephone`, `status`, `experience`, `scedule_of_work`) VALUES
(1, 'Диля', 'Маматова', 'Вышивание', '+49613256546', 1, 1, 'Пн-Чт с 10:00 до 18:00'),
(2, 'Нина', 'Лапутина', 'Пошив платье', '+49613256546', 1, 2, 'Вт-Сб 11:00-20:00'),
(3, 'Валерия', 'Дудкина', 'Брюки', '+795635445345', 1, 5, 'Ср-Вос 09:00-17:00'),
(4, 'verere', 'tbegr', 'vervrvrv', '35445345', 0, 5, 'gygy23234'),
(5, 'Мира', 'Николаевна', 'Пошив', '+794621626', 1, 3, 'Пн-Пт с 10:00 до 20:00'),
(6, 'Лилия', 'Морозова', 'Свадебные платья ', '+446163666989', 1, 4, 'Пн-Вос 09:00-17:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `seamstress`
--
ALTER TABLE `seamstress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_seamstres`) REFERENCES `seamstress` (`id`);


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
