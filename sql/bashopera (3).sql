-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2024 г., 07:37
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bashopera`
--

-- --------------------------------------------------------

--
-- Структура таблицы `age_restrictions`
--

CREATE TABLE `age_restrictions` (
  `id` int NOT NULL,
  `tvalue` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `age_restrictions`
--

INSERT INTO `age_restrictions` (`id`, `tvalue`, `created_at`, `updated_at`) VALUES
(1, '0+', NULL, NULL),
(2, '6+', NULL, NULL),
(3, '12+', NULL, NULL),
(4, '16+', NULL, NULL),
(5, '18+', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(200) DEFAULT NULL,
  `duration` time NOT NULL,
  `id_age_restriction` int DEFAULT NULL,
  `description` varchar(2000) NOT NULL,
  `team` varchar(1000) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `show_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title`, `subtitle`, `duration`, `id_age_restriction`, `description`, `team`, `image`, `show_date`, `created_at`, `updated_at`) VALUES
(1, 'Театр. Музыка. Любовь.', 'Концерт в честь 105-летия Загира Исмагилова', '02:30:00', 3, '14 декабря, в свой день рождения, Башкирский театр оперы и балета отдаст дань памяти и восхищения выдающемуся башкирскому и российскому композитору Загиру Исмагилову. В нынешнем году в республике отмечается 105-летний юбилей основоположника баш\r\n\r\nпавпвапвапвакирской академической музыки. Праздничный концерт в его честь будет целиком посвящён творческому наследию композитора.\r\nИмя Загира Исмагилова – символ музыкальной культуры Башкортостана. С ним связано становления и развитие профессионального музыкального искусства республики; произведения композитора составляют золотой фонд башкирской академической музыки.\r\nТворчество Загира Исмагилова тесно переплетено с Башкирским театром оперы и балета. В настоящее время зрители могут познакомиться с тремя постановками по произведениям башкирского классика. Это созданный совместно с композитором Львом Степановым балет «Журавлиная песнь», опера «Салават Юлаев» и музыкальная комедия «Кодаса». В своё время в BashOpera шли его оперы «Кахым-Туря», «Шаура», «Волны Агидели», «Послы Урала» и «Акмулла», а также музыкальная комедия «Кодаса». Творчество Загира Исмагилова масштабно. Огромный вклад он внёс также в развитие камерно-вокальной, хоровой и инструментальной музыки.\r\nВ праздничном вечере в честь 105-летия композитора будет представлена антология его театральных произведений – отрывки из опер, музыка из балетов, а также премьера сюиты из неизданного балета «Шонкар» в оркестровке Валерия Скобёлкина.', 'Диляра Идрисова;Айтуган Вальмухаметов;Артур Каипкулов;Салават Киекбаев;Идель Аралбаев;Айгиз Гизатуллин;Рим Рахимов;Лилия Халикова;Эльвина Ахметханова;Алим Каюмов;Светлана Аргинбаева;Эльвира Алькина;Дирижёр - Артём Макаров', 'event1.png', '2022-12-14 19:30:00', NULL, '2024-12-26 00:47:23'),
(2, 'Щелкунчик12', 'Балет в 2-х действиях', '02:10:00', 2, 'Балет в 2-х действиях\r\nЛибретто Юрия Григоровича по сказке Эрнста Теодора Амадея Гофмана с использованием мотивов сценария Мариуса Петипа\r\n\r\nДата премьеры: 06.09.1995', 'Мари – Ирина Сапожникова;Принц – Руслан Абулханов;Дроссельмейер – Данила Алексеев;Щелкунчик-кукла – Маргарита Шафикова;Дирижёр - Герман Ким', 'event2.png', '2022-12-26 19:00:00', NULL, '2024-12-25 23:27:11');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Академия вокального искусства Аскара Абдразакова', 'Завершилась первая сессия проекта «Академия вокального искусства Аскара Абдразакова». Слушателей ждали четыре насыщенных знаниями и эмоциями дня.\r\nДля 12 участников проекта «Академия вокального искусства Аскара Абдразакова» из Уфы, Сибая и Октябрьского завершилась первая серия мастер-классов. Четыре дня слушатели занимались вокалом с педагогами – солистками оперной труппы Башоперы Ларисой Ахметовой и Эльвирой Фатыховой и профессором кафедры вокального искусства и кафедры эстрадного джазового исполнительства и звукорежиссуры Уфимского государственного института искусств имени Загира Исмагилова Идрисом Газиевым. Кроме того, они узнали основы актёрского мастерства и работы с режиссёром театра, прошли несколько уроков итальянского языка и побывали на экскурсии по театру.\r\nЗавершилась первая сессия мастер-классом художественного руководителя Башоперы Аскара Абдразакова.\r\n«Сейчас для нас самое главное – зажечь искру интереса к театру, – говорит он. – Большое значение здесь имеет преемственность поколений, когда педагоги могут поделиться своим мастерством, накопленным за годы работы».\r\nНапомним, финалом проекта станет отчётный концерт, где слушатели Академии выступят вместе с ведущими мастерами оперного искусства.\r\nПроект реализуется благотворительным фондом «Наше будущее» совместно с Башкирским театром оперы и балета, при поддержке Президентского фонда культурных инициатив и Министерства культуры Республики Башкортостан.', 'news1.png', '2022-12-12 16:00:37', '2022-12-12 16:00:37'),
(3, '«Северные Амуры»', 'В Башкирском театре оперы и балета определены победители конкурса на написание либретто и музыкального отрывка многоактной оперы «Северные Амуры». Проект направлен на освещение одной из страниц истории Башкортостана - участия в Отечественной войне 1812 года.\r\nЦель конкурса - создание современной национальной оперы, оперного спектакля, посвящённого великому  историческому событию. Его победителями стали автор музыкального фрагмента Шаура Сагитова и либреттист Аврора Рахманкулова.\r\nПроект реализуется на средства Гранта Главы Республики Башкортостан.', 'news3.png', '2022-12-25 16:03:16', '2022-12-25 16:03:16'),
(4, 'Айдар Хайруллин получил премию СТД РБ', 'Вчера в Государственном академическом русском драматическом театре состоялась церемония вручения премий Совета по делам молодежи при Правлении Союза театральных деятелей государственных театров Башкортостана по итогам просмотра премьер прошедшего театрального сезона 2021-2022  «Момент истины». В числе награждённых – солист оперной труппы Башоперы Айдар Хайруллин.\r\nАртист победил в номинации «Лучшая актерская работа в опере», он получил награду за роль Трике в опере «Евгений Онегин».', 'news4.png', '2022-12-26 16:09:58', '2022-12-26 16:09:58');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.ru', NULL, 'admin123', NULL, NULL, NULL),
(2, 'Пыталев Олег Максимович', 'oleg.pytalev@gmail.com', NULL, '$2y$10$AHH1KzVlLMGfHBCxZDk.SeAQ8TULDoUyjrWx9YzB5SKu6BJPT78oy', NULL, '2024-12-26 01:20:58', '2024-12-26 01:20:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `age_restrictions`
--
ALTER TABLE `age_restrictions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_age_restriction` (`id_age_restriction`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `age_restrictions`
--
ALTER TABLE `age_restrictions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_age_restriction`) REFERENCES `age_restrictions` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
