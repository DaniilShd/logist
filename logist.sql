-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 14 2022 г., 19:23
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `logist`
--

-- --------------------------------------------------------

--
-- Структура таблицы `avto`
--

CREATE TABLE `avto` (
  `id` int NOT NULL,
  `number` text CHARACTER SET utf8mb3 COLLATE utf8_bin,
  `color` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `capacity` text CHARACTER SET utf8mb3 COLLATE utf8_bin,
  `id_tip_kuzova` int DEFAULT NULL,
  `id_tip_zagruzki` int DEFAULT NULL,
  `name_driver_1` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `phone_driver_1` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `name_driver_2` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `phone_driver_2` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `name_driver_3` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `phone_driver_3` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `company` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `adres` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `id_company` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `avto`
--

INSERT INTO `avto` (`id`, `number`, `color`, `capacity`, `id_tip_kuzova`, `id_tip_zagruzki`, `name_driver_1`, `phone_driver_1`, `name_driver_2`, `phone_driver_2`, `name_driver_3`, `phone_driver_3`, `company`, `adres`, `id_company`) VALUES
(1, '1', '1', '3', 1, 1, '4', '5', '6', '7', '8', '9', '10', '11', NULL),
(2, '2', '8', '2', 1, 1, '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(3, 'н 205 пр 21 ru', '1', '20 т.', 1, 1, 'Николай Петров', '89077654568', 'Вася Пупкин', '89112346556', '', '', 'ИП Самарин', 'Реквизиты', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `avtocolor`
--

CREATE TABLE `avtocolor` (
  `id` int NOT NULL,
  `color` varchar(250) DEFAULT NULL,
  `hex_code` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `avtocolor`
--

INSERT INTO `avtocolor` (`id`, `color`, `hex_code`) VALUES
(1, 'желтый', '#fff892'),
(2, 'оранжевый', '#ffc92f'),
(3, 'красный', '#ff7f81'),
(4, 'фиолетовый', '#dd6ffe'),
(6, 'синий', '#abd2ff'),
(7, 'зеленый', '#75dc9e'),
(8, 'черный', '#c1c2c4');

-- --------------------------------------------------------

--
-- Структура таблицы `avtonasklade`
--

CREATE TABLE `avtonasklade` (
  `id` int NOT NULL,
  `sklad_1_avto_arrival` tinyint(1) DEFAULT NULL,
  `sklad_1_start_loading` tinyint(1) DEFAULT NULL,
  `sklad_1_loading_completed` tinyint(1) DEFAULT NULL,
  `avto_sent_to_client` tinyint(1) DEFAULT NULL,
  `id_request_avto` int DEFAULT NULL,
  `sklad_1` tinyint(1) DEFAULT NULL,
  `sklad_2` tinyint(1) DEFAULT NULL,
  `sklad_2_avto_arrival` tinyint(1) DEFAULT NULL,
  `sklad_2_start_loading` tinyint(1) DEFAULT NULL,
  `sklad_2_loading_completed` tinyint(1) DEFAULT NULL,
  `sklad_1_avto_arrival_data` datetime DEFAULT NULL,
  `sklad_1_start_loading_data` datetime DEFAULT NULL,
  `sklad_1_loading_completed_data` datetime DEFAULT NULL,
  `sklad_2_avto_arrival_data` datetime DEFAULT NULL,
  `sklad_2_start_loading_data` datetime DEFAULT NULL,
  `sklad_2_loading_completed_data` datetime DEFAULT NULL,
  `avto_sent_to_client_data` datetime DEFAULT NULL,
  `predpolagayemoye_vremya` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `avtonasklade`
--

INSERT INTO `avtonasklade` (`id`, `sklad_1_avto_arrival`, `sklad_1_start_loading`, `sklad_1_loading_completed`, `avto_sent_to_client`, `id_request_avto`, `sklad_1`, `sklad_2`, `sklad_2_avto_arrival`, `sklad_2_start_loading`, `sklad_2_loading_completed`, `sklad_1_avto_arrival_data`, `sklad_1_start_loading_data`, `sklad_1_loading_completed_data`, `sklad_2_avto_arrival_data`, `sklad_2_start_loading_data`, `sklad_2_loading_completed_data`, `avto_sent_to_client_data`, `predpolagayemoye_vremya`) VALUES
(1, 1, 1, NULL, 0, 1, NULL, NULL, 1, 1, 1, '2022-05-21 20:16:21', '2022-05-21 20:25:08', NULL, '2022-05-21 20:33:00', '2022-05-21 20:35:02', '2022-05-21 20:33:08', NULL, NULL),
(2, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, 0, NULL, 0, 3, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2022-05-22 19:47:14', '2022-05-22 19:47:16', NULL, NULL),
(4, 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, '2022-05-22 22:14:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 0, NULL, NULL, 5, NULL, NULL, 0, 1, NULL, '2022-05-24 13:09:08', NULL, NULL, NULL, '2022-05-23 16:51:58', NULL, NULL, NULL),
(13, 1, 1, NULL, NULL, 13, NULL, NULL, 1, 1, 1, '2022-05-24 13:30:15', '2022-05-24 13:30:17', NULL, '2022-05-24 13:30:24', '2022-05-24 13:30:26', '2022-05-24 13:30:32', NULL, NULL),
(14, NULL, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, 0, 0, NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 0, NULL, NULL, NULL, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `avtonaskladezagruzka`
--

CREATE TABLE `avtonaskladezagruzka` (
  `id` int NOT NULL,
  `id_request` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `avtonaskladezagruzka`
--

INSERT INTO `avtonaskladezagruzka` (`id`, `id_request`) VALUES
(1, '8'),
(2, '10'),
(3, '12'),
(4, '13');

-- --------------------------------------------------------

--
-- Структура таблицы `avtovputi`
--

CREATE TABLE `avtovputi` (
  `id` int NOT NULL,
  `id_request` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `avtovputi`
--

INSERT INTO `avtovputi` (`id`, `id_request`) VALUES
(1, '8'),
(2, '10'),
(3, '12'),
(4, '13');

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id` int NOT NULL,
  `name` text,
  `adres` text,
  `tip_company` varchar(250) DEFAULT NULL,
  `fio_rukovoditely` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `rekvizity` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `name`, `adres`, `tip_company`, `fio_rukovoditely`, `phone_number`, `rekvizity`) VALUES
(1, '123', '456', NULL, NULL, NULL, NULL),
(2, '5556', '666', NULL, NULL, NULL, NULL),
(3, '0', '0', 'Клиент-поставщик', '0', '0', '0'),
(4, '0', '0', 'Клиент-закупщик', '0', '0', '0'),
(5, '0', '0', 'Клиент-поставщик', '0', '0', '0'),
(6, '8', '8', 'Партнер-постоянный перевозчик', '9', '6', '7'),
(7, '1', '1', 'Клиент-закупщик', '1', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `listemployee`
--

CREATE TABLE `listemployee` (
  `id` int NOT NULL,
  `surname` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `firstname` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `lastname` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `login` text CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `password` text CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `department` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `tip_managera` varchar(250) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `listemployee`
--

INSERT INTO `listemployee` (`id`, `surname`, `firstname`, `lastname`, `login`, `password`, `department`, `tip_managera`) VALUES
(1, '1', '1', '1', 'logist', 'logist', 'Логист', NULL),
(2, '2', '2', '2', 'manager', 'manager', 'Менеджер', 'Тип'),
(3, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', NULL),
(4, '', '', '', 'kladovshchik', 'kladovshchik', 'Кладовщик', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `marshrut`
--

CREATE TABLE `marshrut` (
  `id` int NOT NULL,
  `id_request_avto` int NOT NULL,
  `tockha_starta` text CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `tochka_dostavki` text CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `distance` text CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `time_trip` text CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `tovar_prinyt` tinyint(1) DEFAULT NULL,
  `tovar_prinyt_data` datetime DEFAULT NULL,
  `avto_pribylo_k_klientu` tinyint(1) DEFAULT NULL,
  `avto_pribylo_k_klientu_data` datetime DEFAULT NULL,
  `tovar_ne_prinyt` tinyint(1) DEFAULT NULL,
  `pochemu_ne_prinyt` text CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `reshenie` text CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `tovar_ne_prinyt_data` datetime DEFAULT NULL,
  `avto_v_puti` tinyint(1) DEFAULT NULL,
  `avto_v_puti_data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `marshrut`
--

INSERT INTO `marshrut` (`id`, `id_request_avto`, `tockha_starta`, `tochka_dostavki`, `distance`, `time_trip`, `tovar_prinyt`, `tovar_prinyt_data`, `avto_pribylo_k_klientu`, `avto_pribylo_k_klientu_data`, `tovar_ne_prinyt`, `pochemu_ne_prinyt`, `reshenie`, `tovar_ne_prinyt_data`, `avto_v_puti`, `avto_v_puti_data`) VALUES
(1, 5, '1', '2', '3', '4', 0, NULL, 1, '2022-05-22 19:11:01', 0, '', '4444', NULL, 1, '2022-05-23 16:51:49'),
(9, 13, 'Шинерпоси', 'Казань', '186', '4', 0, NULL, 0, NULL, 0, '', '', NULL, 1, '2022-05-24 13:28:45'),
(11, 14, 'Чебоксары', 'Москва', '700 км', '12', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 1, '2022-06-07 17:58:57'),
(12, 14, 'Москва', 'Воронеж', '600', '10', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL),
(13, 14, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL),
(14, 16, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL),
(15, 18, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL),
(16, 20, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL),
(17, 23, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `nakladnay`
--

CREATE TABLE `nakladnay` (
  `id` int NOT NULL,
  `number_nakladnoy` text CHARACTER SET utf8mb3 COLLATE utf8_bin,
  `tovar_po_nakladnoy_gotov_k_otgruzke` tinyint(1) DEFAULT NULL,
  `id_request_avto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `nakladnay`
--

INSERT INTO `nakladnay` (`id`, `number_nakladnoy`, `tovar_po_nakladnoy_gotov_k_otgruzke`, `id_request_avto`) VALUES
(2, '1234', 1, 3),
(3, '4534', 0, 5),
(4, NULL, NULL, 4),
(5, '4565460', 1, 13),
(6, '2234234', 0, 5),
(7, '548648', 0, 13),
(8, NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Структура таблицы `requestavto`
--

CREATE TABLE `requestavto` (
  `id` int NOT NULL,
  `id_request` int DEFAULT NULL,
  `id_avto` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `requestavto`
--

INSERT INTO `requestavto` (`id`, `id_request`, `id_avto`) VALUES
(3, 2, 2),
(4, 3, NULL),
(5, 4, 3),
(13, 5, 3),
(14, 6, 3),
(15, 6, 2),
(16, 7, 2),
(17, 8, 3),
(18, 9, 3),
(19, 10, NULL),
(20, 11, NULL),
(21, 12, 3),
(22, 13, 3),
(23, 14, 3),
(24, 15, NULL),
(25, 16, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int NOT NULL,
  `data_sozdaniya_zapisi` datetime NOT NULL,
  `paranepara` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL,
  `srochnost` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `creator` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `volume` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `name_product` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL,
  `mesto_pribytia` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `data_sozdaniya_zapisi`, `paranepara`, `srochnost`, `creator`, `volume`, `name_product`, `mesto_pribytia`) VALUES
(2, '2022-05-21 20:48:26', 'Отгрузка', 'Несрочная', NULL, NULL, NULL, NULL),
(3, '2022-05-21 20:49:19', 'Отгрузка', 'Несрочная', NULL, NULL, NULL, NULL),
(4, '2022-05-22 11:05:17', 'Отгрузка', 'Несрочная', NULL, NULL, NULL, NULL),
(5, '2022-05-24 13:18:20', 'Отгрузка', 'Средней срочности', NULL, NULL, NULL, NULL),
(6, '2022-06-07 17:21:40', 'Отгрузка', 'Несрочная', NULL, NULL, NULL, NULL),
(7, '2022-06-14 15:08:34', 'Закупка', '', 'manager', '111', '111', '111'),
(8, '2022-06-14 21:56:31', 'Загрузка', 'Несрочная', NULL, NULL, NULL, NULL),
(9, '2022-06-15 22:26:04', 'Отгрузка', 'Несрочная', NULL, NULL, NULL, NULL),
(10, '2022-06-23 13:23:03', 'Загрузка', 'Срочная', NULL, NULL, NULL, NULL),
(11, '2022-06-26 22:12:34', 'Отгрузка', '', 'manager', '564рол', '', ''),
(12, '2022-06-26 22:12:40', 'Закупка', '', 'manager', '67868', '', ''),
(13, '2022-06-26 22:29:53', 'Закупка', '', 'admin', '25', 'наименование', ''),
(14, '2022-06-26 22:30:38', 'Отгрузка', '', 'manager', NULL, NULL, NULL),
(15, '2022-07-20 21:58:25', 'Отгрузка', NULL, 'manager', NULL, NULL, NULL),
(16, '2022-07-20 21:58:32', 'Отгрузка', NULL, 'manager', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sklad`
--

CREATE TABLE `sklad` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `sklad`
--

INSERT INTO `sklad` (`id`, `name`) VALUES
(1, 'Склад 1'),
(2, 'Склад 2');

-- --------------------------------------------------------

--
-- Структура таблицы `tipkuzova`
--

CREATE TABLE `tipkuzova` (
  `id` int NOT NULL,
  `name_kuzova` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `tipkuzova`
--

INSERT INTO `tipkuzova` (`id`, `name_kuzova`) VALUES
(1, 'тентованный'),
(2, 'контейнер'),
(3, 'фургон'),
(4, 'цельнометалл.'),
(5, 'рефрижератор');

-- --------------------------------------------------------

--
-- Структура таблицы `tipzagruzki`
--

CREATE TABLE `tipzagruzki` (
  `id` int NOT NULL,
  `name_zagruzki` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `tipzagruzki`
--

INSERT INTO `tipzagruzki` (`id`, `name_zagruzki`) VALUES
(1, 'боковая'),
(2, 'задняя'),
(3, 'верхняя');

-- --------------------------------------------------------

--
-- Структура таблицы `zagmarshrut`
--

CREATE TABLE `zagmarshrut` (
  `id` int NOT NULL,
  `id_request` varchar(250) DEFAULT NULL,
  `tochka_starta` text,
  `tochka_dostavki` text,
  `distance` varchar(250) DEFAULT NULL,
  `time_trip` varchar(250) DEFAULT NULL,
  `avto_pribylo` tinyint(1) DEFAULT NULL,
  `avto_pribylo_data` datetime DEFAULT NULL,
  `avto_v_puti` tinyint(1) DEFAULT NULL,
  `avto_v_puti_data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `zagmarshrut`
--

INSERT INTO `zagmarshrut` (`id`, `id_request`, `tochka_starta`, `tochka_dostavki`, `distance`, `time_trip`, `avto_pribylo`, `avto_pribylo_data`, `avto_v_puti`, `avto_v_puti_data`) VALUES
(1, '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '13', '', '', '', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `zagruzkanakladnay`
--

CREATE TABLE `zagruzkanakladnay` (
  `id` int NOT NULL,
  `id_request_avto` text NOT NULL,
  `number` text,
  `tovar_prinyt` tinyint(1) DEFAULT NULL,
  `tovar_ne_prinyt` tinyint(1) DEFAULT NULL,
  `prichina_otkaza` text,
  `tovar_prinyt_data` datetime DEFAULT NULL,
  `tovar_ne_prinyt_data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `zagruzkanakladnay`
--

INSERT INTO `zagruzkanakladnay` (`id`, `id_request_avto`, `number`, `tovar_prinyt`, `tovar_ne_prinyt`, `prichina_otkaza`, `tovar_prinyt_data`, `tovar_ne_prinyt_data`) VALUES
(1, '17', '124', 1, 0, '', '2022-06-14 22:07:31', NULL),
(2, '17', '', 0, 0, '', NULL, NULL),
(3, '17', '', 1, 0, '', '2022-06-14 22:07:28', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `avto`
--
ALTER TABLE `avto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tip_kuzova` (`id_tip_kuzova`,`id_tip_zagruzki`),
  ADD KEY `id_tip_zagruzki` (`id_tip_zagruzki`);

--
-- Индексы таблицы `avtocolor`
--
ALTER TABLE `avtocolor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `avtonasklade`
--
ALTER TABLE `avtonasklade`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `avtonaskladezagruzka`
--
ALTER TABLE `avtonaskladezagruzka`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `avtovputi`
--
ALTER TABLE `avtovputi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `listemployee`
--
ALTER TABLE `listemployee`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `marshrut`
--
ALTER TABLE `marshrut`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `nakladnay`
--
ALTER TABLE `nakladnay`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `requestavto`
--
ALTER TABLE `requestavto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_avto` (`id_avto`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sklad`
--
ALTER TABLE `sklad`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tipkuzova`
--
ALTER TABLE `tipkuzova`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tipzagruzki`
--
ALTER TABLE `tipzagruzki`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zagmarshrut`
--
ALTER TABLE `zagmarshrut`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zagruzkanakladnay`
--
ALTER TABLE `zagruzkanakladnay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `avto`
--
ALTER TABLE `avto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `avtocolor`
--
ALTER TABLE `avtocolor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `avtonasklade`
--
ALTER TABLE `avtonasklade`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `avtonaskladezagruzka`
--
ALTER TABLE `avtonaskladezagruzka`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `avtovputi`
--
ALTER TABLE `avtovputi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `listemployee`
--
ALTER TABLE `listemployee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `marshrut`
--
ALTER TABLE `marshrut`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `nakladnay`
--
ALTER TABLE `nakladnay`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `requestavto`
--
ALTER TABLE `requestavto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `sklad`
--
ALTER TABLE `sklad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tipkuzova`
--
ALTER TABLE `tipkuzova`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `tipzagruzki`
--
ALTER TABLE `tipzagruzki`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `zagmarshrut`
--
ALTER TABLE `zagmarshrut`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zagruzkanakladnay`
--
ALTER TABLE `zagruzkanakladnay`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `avto`
--
ALTER TABLE `avto`
  ADD CONSTRAINT `avto_ibfk_5` FOREIGN KEY (`id_tip_kuzova`) REFERENCES `tipkuzova` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `avto_ibfk_6` FOREIGN KEY (`id_tip_zagruzki`) REFERENCES `tipzagruzki` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
