-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2018 г., 05:35
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blij_sob`
--

CREATE TABLE IF NOT EXISTS `blij_sob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `blij_sob`
--

INSERT INTO `blij_sob` (`id`, `img`, `name`, `text`) VALUES
(1, 'assets/images/3.jpg', 'Конференция «Саймалуу-таш»', '2000 Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.'),
(2, 'assets/images/thumb03.jpg', '«Саймалуу-таш» семинар', '2000 Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.'),
(3, 'assets/images/thumb05.jpg', 'Международный симпозиум по«Саймалуу-таш» 2018', '2000 Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе.');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) NOT NULL,
  `name` varchar(200) NOT NULL,
  `text` varchar(250) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `img`, `name`, `text`, `active`) VALUES
(1, 'assets/images/books/book1.jpg', '', '', 1),
(2, 'assets/images/books/book2.jpg', '', '', 0),
(3, 'assets/images/books/book3.jpg', '', '', 0),
(4, 'assets/images/books/book4.jpg', '', '', 0),
(5, 'assets/images/books/book6.jpg', '', '', 0),
(6, 'assets/images/books/book7.jpg', '', '', 0),
(7, 'assets/images/books/book7.jpg', '', '', 0),
(8, 'assets/images/books/book8.jpg', '', '', 0),
(9, 'assets/images/books/book9.jpg', '', '', 0),
(10, 'assets/images/books/book11.jpg', '', '', 0),
(11, 'assets/images/books/book12.jpg', '', '', 0),
(12, 'assets/images/books/book12.jpg', '', '', 0),
(13, 'assets/images/books/book13.jpg', '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tema` text NOT NULL,
  `sms` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `tema`, `sms`) VALUES
(5, 'nursupat@mail.ru', 'nursupat@mail.ru', 'ttttt', 'm,nm'),
(6, 'Байыш', 'abdikutuzov7@gmail.com', 'сайт', 'пщгннощзлднпар\r\n'),
(8, 'nunu', 'nursupat@mail.ru', 'ttttt', 'sdfs'),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, 'Islam', 'abdysamatovich@gmail.com', 'Об петроглифов', 'ввввввввввввввввввввввввв');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `text` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `text`) VALUES
(1, 'gallery1.jpg', 'this foto'),
(2, 'gallery2.jpg', 'foto'),
(3, 'gallery3.jpg', 'foto 3'),
(4, 'gallery4.jpg', ''),
(5, 'gallery5.jpg', ''),
(6, 'portret.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `glav_text`
--

CREATE TABLE IF NOT EXISTS `glav_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) NOT NULL,
  `name` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `glav_text`
--

INSERT INTO `glav_text` (`id`, `img`, `name`, `text`) VALUES
(1, 'assets/images/portret.jpg', 'Жусупакматов Лютфилла Жусупакматович', 'Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Здесь вы можете рассказать посетителям подробнее о себе. ');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`) VALUES
(1, 'Главная\r\n\r\n', 'index.php'),
(2, 'Обо мне\r\n', 'about.php'),
(3, 'Галерея\r\n', 'gallery.php'),
(4, 'Контакты', 'contact.php');

-- --------------------------------------------------------

--
-- Структура таблицы `pos_isled`
--

CREATE TABLE IF NOT EXISTS `pos_isled` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `pos_isled`
--

INSERT INTO `pos_isled` (`id`, `img`, `name`, `text`) VALUES
(1, 'assets/images/03.jpg', 'Чему можно научиться у детей из пробирки', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'assets/images/thumb01.jpg', 'Водопад Хоптаун Фолс (англ.), Австралия\n\n', '\r\nФотография Земли, сделанная в 1972 году экипажем Аполлон-17\r\nОсновные статьи: Земля, Науки о Земле, Структура Земли, Тектоника плит, Геология\r\nЗемля — единственная известная в настоящий момент планета, на которой есть жизнь. Её природные особенности являются предметом многих научных исследований. Она является третьей по счёту от Солнца планетой Солнечной системы и крупнейшей по диаметру, массе и плотности среди планет земной группы. Основные климатические особенности Земли заключаются в наличии двух больших полярных регионов, двух относительно узких умеренных зон и одного широкого экваториально-тропического региона.[2] Количество осадков на планете варьируется в широких пределах в зависимости от местоположения и колеблется от миллиметра до нескольких метров осадков в год. Около 71 % поверхности Земли занимает океан. Остал'),
(3, 'assets/images/thumb02.jpg', 'еология\r\nОсновная статья: Геология', '\r\nТри типа границ тектонических плит\r\nГеология — комплекс наук о составе, строении земной коры и размещённых в ней полезных ископаемых. Комплекс наук в составе геологии занимается изучением состава, структуры, физических свойств, динамики и истории земных материалов, а также процессов, посредством которых они образуются, перемещаются и изменяются. Геология — одна из основных академических дисциплин, которая помимо прочего имеет важное значение для добычи минерального и углеводородного сырья, прогнозирования и смягчения последствий стихийных бедствий, расчётов в геотехнических областях (англ.) и изучения климата и окружающей среды в прошлом.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
