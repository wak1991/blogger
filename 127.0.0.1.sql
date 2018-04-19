-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 13 2017 г., 17:37
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blogger`
--
CREATE DATABASE `blogger` DEFAULT CHARACTER SET utf32 COLLATE utf32_general_ci;
USE `blogger`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `art_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `art_catid` tinyint(4) unsigned NOT NULL,
  `anons` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `visible` enum('0','1') NOT NULL DEFAULT '1',
  `date` date NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`art_id`, `name`, `keywords`, `description`, `img`, `art_catid`, `anons`, `content`, `visible`, `date`, `views`) VALUES
(1, 'Изучаем HTML', 'ключи html', 'описание html', 'html.jpg', 9, 'Credits go to Smashing Magazine for icons, Free photos for photos, and Serie3 for the slider. Ut nec vestibulum odio. Vivamus vitae nibh eu sem malesuada rutrum et sit amet magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id eros facilisis, tristique dui ac, fermentum orci. Fusce cursus, ex quis convallis ullamcorper, tellus risus luctus nulla, eget varius odio lectus vitae est. Aenean lobortis eleifend dui et tempor. Nam ultrices augue gravida erat dignissim efficitur. Etiam ac arcu nibh. Integer id mollis libero. Etiam nec viverra neque. Nam bibendum varius tincidunt. Vestibulum ornare viverra sem, sed dictum dolor vehicula non. Quisque laoreet mi eget risus posuere pellentesque. Donec commodo commodo sollicitudin. Aliquam sed ligula dui. In interdum eget elit non eleifend. Phasellus et faucibus lectus. Morbi vulputate lectus non mi tempor, quis bibendum massa luctus.\r\n\r\nMauris ac massa a diam interdum luctus. Sed blandit pharetra ultricies. Aliquam malesuada vestibulum ullamcorper. Fusce tellus arcu, pharetra non accumsan sit amet, posuere ut massa. Proin dictum, lectus at facilisis iaculis, lorem sem aliquet lorem, ut faucibus nulla nisl et nisi. Suspendisse at venenatis turpis. Fusce tristique erat elit. Ut ligula eros, hendrerit at velit et, porta condimentum enim. Cras consectetur, erat ac accumsan posuere, nibh justo pulvinar turpis, ut accumsan magna ligula et mi. Aliquam eleifend odio ipsum, in vulputate dui malesuada eu. Nullam convallis eros quis magna viverra blandit. Aenean non ex arcu. Aliquam in malesuada ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget augue rutrum, efficitur metus sed, ullamcorper sem.\r\n\r\nSed luctus dolor at quam sodales, ac congue lectus tincidunt. Duis at ultrices quam. Aliquam eget fringilla dolor, eget lacinia nisl. Vivamus euismod id sem nec pulvinar. Nam sem ex, eleifend sed convallis eget, placerat eget nulla. Suspendisse ultrices lacinia facilisis. Maecenas fermentum mollis justo quis bibendum. Aenean pretium at mi ac laoreet. Praesent eget mollis tortor. Duis in erat facilisis, semper dolor molestie, dignissim nibh.\r\n\r\nAliquam at neque lacinia, blandit dui non, ullamcorper risus. Maecenas finibus nibh nec purus luctus, sit amet semper lectus luctus. Ut dignissim volutpat urna et lobortis. Praesent pellentesque et metus quis vestibulum. Etiam vel ex ligula. Maecenas nec velit interdum, pharetra justo eu, cursus nisi. Nullam accumsan condimentum aliquet. Suspendisse nec ipsum vel mauris malesuada placerat finibus et ipsum. Mauris eros orci, tincidunt eu volutpat eget, consequat id est. Vivamus sem massa, pharetra nec odio non, tempor luctus odio. Nunc malesuada ultrices est, et facilisis sapien placerat eu. Nunc ut quam eu massa feugiat efficitur. Proin metus elit, pellentesque cursus sapien vel, vestibulum viverra lacus. Integer orci leo, posuere eget consectetur eu, tristique eu felis.\r\n\r\nSuspendisse pharetra ligula ut sem dignissim, vehicula egestas mi condimentum. Proin maximus metus lectus, sit amet aliquam dui vulputate et. Proin non ex dui. Curabitur commodo ligula nec dictum tincidunt. Donec eget dapibus nulla. Pellentesque a rutrum leo. Cras vestibulum, neque quis congue aliquam, turpis nisl vehicula lacus, venenatis elementum ante felis pellentesque est. Vivamus tincidunt hendrerit mi quis venenatis. Vivamus condimentum eros in euismod posuere. Proin convallis ligula tortor, ut tempus leo dapibus vel. Sed maximus in sem fermentum efficitur. Quisque vitae eros a erat euismod interdum. Nullam sagittis porttitor arcu, id eleifend urna. Phasellus ut velit leo. ', '1', '2017-09-17', 123),
(2, 'Вёрстка всему голова', 'ключи вёрстка', 'описание вёрстка', 'verstka.jpg', 1, 'Credits go to Smashing Magazine for icons, Free photos for photos, and Serie3 for the slider. Ut nec vestibulum odio. Vivamus vitae nibh eu sem malesuada rutrum et sit amet magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id eros facilisis, tristique dui ac, fermentum orci. Fusce cursus, ex quis convallis ullamcorper, tellus risus luctus nulla, eget varius odio lectus vitae est. Aenean lobortis eleifend dui et tempor. Nam ultrices augue gravida erat dignissim efficitur. Etiam ac arcu nibh. Integer id mollis libero. Etiam nec viverra neque. Nam bibendum varius tincidunt. Vestibulum ornare viverra sem, sed dictum dolor vehicula non. Quisque laoreet mi eget risus posuere pellentesque. Donec commodo commodo sollicitudin. Aliquam sed ligula dui. In interdum eget elit non eleifend. Phasellus et faucibus lectus. Morbi vulputate lectus non mi tempor, quis bibendum massa luctus.\r\n\r\nMauris ac massa a diam interdum luctus. Sed blandit pharetra ultricies. Aliquam malesuada vestibulum ullamcorper. Fusce tellus arcu, pharetra non accumsan sit amet, posuere ut massa. Proin dictum, lectus at facilisis iaculis, lorem sem aliquet lorem, ut faucibus nulla nisl et nisi. Suspendisse at venenatis turpis. Fusce tristique erat elit. Ut ligula eros, hendrerit at velit et, porta condimentum enim. Cras consectetur, erat ac accumsan posuere, nibh justo pulvinar turpis, ut accumsan magna ligula et mi. Aliquam eleifend odio ipsum, in vulputate dui malesuada eu. Nullam convallis eros quis magna viverra blandit. Aenean non ex arcu. Aliquam in malesuada ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget augue rutrum, efficitur metus sed, ullamcorper sem.\r\n\r\nSed luctus dolor at quam sodales, ac congue lectus tincidunt. Duis at ultrices quam. Aliquam eget fringilla dolor, eget lacinia nisl. Vivamus euismod id sem nec pulvinar. Nam sem ex, eleifend sed convallis eget, placerat eget nulla. Suspendisse ultrices lacinia facilisis. Maecenas fermentum mollis justo quis bibendum. Aenean pretium at mi ac laoreet. Praesent eget mollis tortor. Duis in erat facilisis, semper dolor molestie, dignissim nibh.\r\n\r\nAliquam at neque lacinia, blandit dui non, ullamcorper risus. Maecenas finibus nibh nec purus luctus, sit amet semper lectus luctus. Ut dignissim volutpat urna et lobortis. Praesent pellentesque et metus quis vestibulum. Etiam vel ex ligula. Maecenas nec velit interdum, pharetra justo eu, cursus nisi. Nullam accumsan condimentum aliquet. Suspendisse nec ipsum vel mauris malesuada placerat finibus et ipsum. Mauris eros orci, tincidunt eu volutpat eget, consequat id est. Vivamus sem massa, pharetra nec odio non, tempor luctus odio. Nunc malesuada ultrices est, et facilisis sapien placerat eu. Nunc ut quam eu massa feugiat efficitur. Proin metus elit, pellentesque cursus sapien vel, vestibulum viverra lacus. Integer orci leo, posuere eget consectetur eu, tristique eu felis.\r\n\r\nSuspendisse pharetra ligula ut sem dignissim, vehicula egestas mi condimentum. Proin maximus metus lectus, sit amet aliquam dui vulputate et. Proin non ex dui. Curabitur commodo ligula nec dictum tincidunt. Donec eget dapibus nulla. Pellentesque a rutrum leo. Cras vestibulum, neque quis congue aliquam, turpis nisl vehicula lacus, venenatis elementum ante felis pellentesque est. Vivamus tincidunt hendrerit mi quis venenatis. Vivamus condimentum eros in euismod posuere. Proin convallis ligula tortor, ut tempus leo dapibus vel. Sed maximus in sem fermentum efficitur. Quisque vitae eros a erat euismod interdum. Nullam sagittis porttitor arcu, id eleifend urna. Phasellus ut velit leo. ', '1', '2017-09-18', 24),
(3, 'Дизайн для дизайнеров', 'ключи дизайн', 'описание дизайн', 'design.jpg', 4, 'Credits go to Smashing Magazine for icons, Free photos for photos, and Serie3 for the slider. Ut nec vestibulum odio. Vivamus vitae nibh eu sem malesuada rutrum et sit amet magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id eros facilisis, tristique dui ac, fermentum orci. Fusce cursus, ex quis convallis ullamcorper, tellus risus luctus nulla, eget varius odio lectus vitae est. Aenean lobortis eleifend dui et tempor. Nam ultrices augue gravida erat dignissim efficitur. Etiam ac arcu nibh. Integer id mollis libero. Etiam nec viverra neque. Nam bibendum varius tincidunt. Vestibulum ornare viverra sem, sed dictum dolor vehicula non. Quisque laoreet mi eget risus posuere pellentesque. Donec commodo commodo sollicitudin. Aliquam sed ligula dui. In interdum eget elit non eleifend. Phasellus et faucibus lectus. Morbi vulputate lectus non mi tempor, quis bibendum massa luctus.\r\n\r\nMauris ac massa a diam interdum luctus. Sed blandit pharetra ultricies. Aliquam malesuada vestibulum ullamcorper. Fusce tellus arcu, pharetra non accumsan sit amet, posuere ut massa. Proin dictum, lectus at facilisis iaculis, lorem sem aliquet lorem, ut faucibus nulla nisl et nisi. Suspendisse at venenatis turpis. Fusce tristique erat elit. Ut ligula eros, hendrerit at velit et, porta condimentum enim. Cras consectetur, erat ac accumsan posuere, nibh justo pulvinar turpis, ut accumsan magna ligula et mi. Aliquam eleifend odio ipsum, in vulputate dui malesuada eu. Nullam convallis eros quis magna viverra blandit. Aenean non ex arcu. Aliquam in malesuada ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget augue rutrum, efficitur metus sed, ullamcorper sem.\r\n\r\nSed luctus dolor at quam sodales, ac congue lectus tincidunt. Duis at ultrices quam. Aliquam eget fringilla dolor, eget lacinia nisl. Vivamus euismod id sem nec pulvinar. Nam sem ex, eleifend sed convallis eget, placerat eget nulla. Suspendisse ultrices lacinia facilisis. Maecenas fermentum mollis justo quis bibendum. Aenean pretium at mi ac laoreet. Praesent eget mollis tortor. Duis in erat facilisis, semper dolor molestie, dignissim nibh.\r\n\r\nAliquam at neque lacinia, blandit dui non, ullamcorper risus. Maecenas finibus nibh nec purus luctus, sit amet semper lectus luctus. Ut dignissim volutpat urna et lobortis. Praesent pellentesque et metus quis vestibulum. Etiam vel ex ligula. Maecenas nec velit interdum, pharetra justo eu, cursus nisi. Nullam accumsan condimentum aliquet. Suspendisse nec ipsum vel mauris malesuada placerat finibus et ipsum. Mauris eros orci, tincidunt eu volutpat eget, consequat id est. Vivamus sem massa, pharetra nec odio non, tempor luctus odio. Nunc malesuada ultrices est, et facilisis sapien placerat eu. Nunc ut quam eu massa feugiat efficitur. Proin metus elit, pellentesque cursus sapien vel, vestibulum viverra lacus. Integer orci leo, posuere eget consectetur eu, tristique eu felis.\r\n\r\nSuspendisse pharetra ligula ut sem dignissim, vehicula egestas mi condimentum. Proin maximus metus lectus, sit amet aliquam dui vulputate et. Proin non ex dui. Curabitur commodo ligula nec dictum tincidunt. Donec eget dapibus nulla. Pellentesque a rutrum leo. Cras vestibulum, neque quis congue aliquam, turpis nisl vehicula lacus, venenatis elementum ante felis pellentesque est. Vivamus tincidunt hendrerit mi quis venenatis. Vivamus condimentum eros in euismod posuere. Proin convallis ligula tortor, ut tempus leo dapibus vel. Sed maximus in sem fermentum efficitur. Quisque vitae eros a erat euismod interdum. Nullam sagittis porttitor arcu, id eleifend urna. Phasellus ut velit leo. ', '1', '2017-09-19', 78),
(4, 'Нужно много печатать', 'ключи для печати', 'описание печати', 'print.jpg', 2, 'Credits go to Smashing Magazine for icons, Free photos for photos, and Serie3 for the slider. Ut nec vestibulum odio. Vivamus vitae nibh eu sem malesuada rutrum et sit amet magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id eros facilisis, tristique dui ac, fermentum orci. Fusce cursus, ex quis convallis ullamcorper, tellus risus luctus nulla, eget varius odio lectus vitae est. Aenean lobortis eleifend dui et tempor. Nam ultrices augue gravida erat dignissim efficitur. Etiam ac arcu nibh. Integer id mollis libero. Etiam nec viverra neque. Nam bibendum varius tincidunt. Vestibulum ornare viverra sem, sed dictum dolor vehicula non. Quisque laoreet mi eget risus posuere pellentesque. Donec commodo commodo sollicitudin. Aliquam sed ligula dui. In interdum eget elit non eleifend. Phasellus et faucibus lectus. Morbi vulputate lectus non mi tempor, quis bibendum massa luctus.\r\n\r\nMauris ac massa a diam interdum luctus. Sed blandit pharetra ultricies. Aliquam malesuada vestibulum ullamcorper. Fusce tellus arcu, pharetra non accumsan sit amet, posuere ut massa. Proin dictum, lectus at facilisis iaculis, lorem sem aliquet lorem, ut faucibus nulla nisl et nisi. Suspendisse at venenatis turpis. Fusce tristique erat elit. Ut ligula eros, hendrerit at velit et, porta condimentum enim. Cras consectetur, erat ac accumsan posuere, nibh justo pulvinar turpis, ut accumsan magna ligula et mi. Aliquam eleifend odio ipsum, in vulputate dui malesuada eu. Nullam convallis eros quis magna viverra blandit. Aenean non ex arcu. Aliquam in malesuada ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget augue rutrum, efficitur metus sed, ullamcorper sem.\r\n\r\nSed luctus dolor at quam sodales, ac congue lectus tincidunt. Duis at ultrices quam. Aliquam eget fringilla dolor, eget lacinia nisl. Vivamus euismod id sem nec pulvinar. Nam sem ex, eleifend sed convallis eget, placerat eget nulla. Suspendisse ultrices lacinia facilisis. Maecenas fermentum mollis justo quis bibendum. Aenean pretium at mi ac laoreet. Praesent eget mollis tortor. Duis in erat facilisis, semper dolor molestie, dignissim nibh.\r\n\r\nAliquam at neque lacinia, blandit dui non, ullamcorper risus. Maecenas finibus nibh nec purus luctus, sit amet semper lectus luctus. Ut dignissim volutpat urna et lobortis. Praesent pellentesque et metus quis vestibulum. Etiam vel ex ligula. Maecenas nec velit interdum, pharetra justo eu, cursus nisi. Nullam accumsan condimentum aliquet. Suspendisse nec ipsum vel mauris malesuada placerat finibus et ipsum. Mauris eros orci, tincidunt eu volutpat eget, consequat id est. Vivamus sem massa, pharetra nec odio non, tempor luctus odio. Nunc malesuada ultrices est, et facilisis sapien placerat eu. Nunc ut quam eu massa feugiat efficitur. Proin metus elit, pellentesque cursus sapien vel, vestibulum viverra lacus. Integer orci leo, posuere eget consectetur eu, tristique eu felis.\r\n\r\nSuspendisse pharetra ligula ut sem dignissim, vehicula egestas mi condimentum. Proin maximus metus lectus, sit amet aliquam dui vulputate et. Proin non ex dui. Curabitur commodo ligula nec dictum tincidunt. Donec eget dapibus nulla. Pellentesque a rutrum leo. Cras vestibulum, neque quis congue aliquam, turpis nisl vehicula lacus, venenatis elementum ante felis pellentesque est. Vivamus tincidunt hendrerit mi quis venenatis. Vivamus condimentum eros in euismod posuere. Proin convallis ligula tortor, ut tempus leo dapibus vel. Sed maximus in sem fermentum efficitur. Quisque vitae eros a erat euismod interdum. Nullam sagittis porttitor arcu, id eleifend urna. Phasellus ut velit leo. ', '1', '2017-09-19', 99);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Вёрстка'),
(2, 'Печать'),
(3, 'Полиграфия'),
(4, 'Дизайн'),
(5, 'Полёты'),
(6, 'Спорт'),
(7, 'Безопасность'),
(8, 'Досуг'),
(9, 'HTML'),
(10, 'Разное');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pages_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `position` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`pages_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`pages_id`, `title`, `keywords`, `description`, `position`, `text`) VALUES
(1, 'Портфолио', 'ключи портфолио', 'описание портфолио', 255, 'Текст портфолио'),
(2, 'О блоге', 'ключи о блоге3', 'описание о блоге', 100, 'Я хочу рассказать о своём блоге. Так вот: у меня его нету!'),
(3, 'Контакты', 'ключи контакты', 'описание контакты', 200, 'Текст контакты');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
