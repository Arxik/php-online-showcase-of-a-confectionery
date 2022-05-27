-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 06 2022 г., 07:03
-- Версия сервера: 8.0.24
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `deserts`
--

CREATE TABLE `deserts` (
  `id_deserts` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc` text NOT NULL,
  `price` float NOT NULL,
  `imgname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `deserts`
--

INSERT INTO `deserts` (`id_deserts`, `title`, `desc`, `price`, `imgname`) VALUES
(1, 'Пирожное Картошка из сухарей', 'Пирожное Картошка из печенья со сгущенкой - аппетитный и простой десерт, вкус которого знаком всем с детства. Его уже много лет готовят во всех кондитерских.\r\n\r\n', 2500, 'potato.jpg'),
(4, 'Гоголь-моголь', 'Го́голь-мо́голь (гогель-могель, гогаль-могаль,) - сладкое блюдо из взбитых с сахаром или сахарной пудрой яиц. Прежде считался популярным детским лакомством', 1500, 'gogol.jpg'),
(5, 'Маффины с мускатным орехом', ' Маффины с голубикой (да и не только с этой ягодой) стали популярным десертом в Англии и Америке, хотя происхождение их французское. Да и вообще эти маленькие сладкие кексы, какими мы их знаем сейчас, задумывались как обычный хлеб и на вкус были нейтральны.', 5555, 'maffin.jpg'),
(6, 'Безе', 'Безе, они же меренги — классика французского десерта и, собственно, самый простой из существующих в их сложной кухне. ', 1500, 'beze.jpg'),
(7, 'Пудинг Стики-тоффи', 'Стики-тоффи - Этот десерт имеет очень архивный, почти викторианский вид, но на самом деле был изобре­тен в 70-х, то есть всего-навсего сорок с небольшим лет назад — и быстро стал классикой.', 5555, 'sticitoffi.jpg'),
(8, 'Профитроли', 'Профитроли — маленькие аккуратненькие пирожные или фуршетные закуски. Профитроли действительно очень удобно есть, поэтому если вы готовитесь к фуршету или шведскому столу.', 5555, 'profitroli.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `kruassans`
--

CREATE TABLE `kruassans` (
  `id_kruassans` int NOT NULL,
  `title` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc` text NOT NULL,
  `price` int NOT NULL,
  `imgname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `kruassans`
--

INSERT INTO `kruassans` (`id_kruassans`, `title`, `desc`, `price`, `imgname`) VALUES
(1, 'Круассаны с яблоками', 'Круассаны с яблоками из слоёного теста будут прекрасным завтраком для вас. Можете подать их со взбитыми сливками или мороженым.', 1500, 'kapple.jpg'),
(2, 'Круассаны с марципановой начинкой', 'Марципан - лакомство, которое широко распространено по всему миру. В его состав входит сахарный сироп и измельченный миндаль. Круассан с марципаном - десерт, который способен удивить изысканным вкусом Вас и Ваших любимых!', 1500, 'kmarc.jpg'),
(3, 'Круассаны с шоколадом', 'Во Франции круассаны появились почти сто лет спустя — в 1770 году. Это случилось благодаря переезду туда Марии-Антуанетты, которая и стала основательницей традиционного французского завтрака.\r\nНо венские и французские круассаны — это два различных блюда. А круассаны такого вида, которыми мы их привыкли видеть, то есть из слоёного теста и с начинкой и, которые стали столь популярны в Европе, появились лишь в 1920-х годах благодаря стараниям французских поваров.', 1500, 'kscoko.jpg'),
(4, 'Гигантский круассан', 'Просто огромный круассан для самых голодных людей. Готовимся к рекорду Гиннеса ', 5555, 'gigant.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `id_desert` int NOT NULL,
  `id_torts` int NOT NULL,
  `id_kruassans` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `torts`
--

CREATE TABLE `torts` (
  `id_torts` int NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc` text NOT NULL,
  `price` int NOT NULL,
  `imgname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `torts`
--

INSERT INTO `torts` (`id_torts`, `title`, `desc`, `price`, `imgname`) VALUES
(1, 'Торт Красный бархат', 'Торт Красный бархат - это удивительное сочетание сочных и бархатистых коржей с нежным и гладким сливочным кремом. Американский Red Velvet Cake - эффектный, вкусный и очень сытный торт.', 5555, 'barhat.jpg'),
(2, 'Tорт Тирамису', 'Бисквит, пропитанный кофе, нежный сливочный крем с Маскарпоне и Савоярди для украшения.', 5555, 'misu.jpg'),
(3, 'Торт Юбилейный', 'Торт \"Юбилейный\", из ароматных медовых коржей, пропитан нежным сливочно-творожным кремом и украшен шоколадной мастикой, воздушным безе и свежими ягодами. Яркое дополнение к любому празднику!', 5555, 'ybil.jpg'),
(4, ' Шоколадный торт Гиннесс ', 'Шоколадный торт Гиннесс на пиве - просто мечта шокоголика! Сочные, нежные, воздушные и одновременно упругие, ароматные коржи на темном пиве идеально сочетаются с нежным и бархатистым сливочным кремом. Готовить? Без сомнений!', 5555, 'pivo.jpg'),
(5, 'Сметанник', 'Сметанник — торт очень простой. Весь секрет — в сметане для крема: она должна быть на вкус такой, чтобы и не в торте ее есть было приятно, — сливочной, плотной и без ярко выраженной кислоты.', 5555, 'smetannik.jpg'),
(6, 'Торт «Прага»', 'В Праге ничего не знают о торте «Прага», а все потому, что его придумали в кондитерском цеху московского ресторана Прага. Автор рецепта Владимир Гуральник (он же придумал торт «Птичье молоко») учился у кондитеров из Чехословакии.', 5555, 'praga.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(7, 'admin', 'admin@admin.admin', 'admin'),
(8, 'login', 'login@login', 'login'),
(21, 'log', 'log@log', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `deserts`
--
ALTER TABLE `deserts`
  ADD PRIMARY KEY (`id_deserts`);

--
-- Индексы таблицы `kruassans`
--
ALTER TABLE `kruassans`
  ADD PRIMARY KEY (`id_kruassans`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_desert` (`id_desert`),
  ADD UNIQUE KEY `id_torts` (`id_torts`,`id_kruassans`),
  ADD KEY `id_kruassans` (`id_kruassans`);

--
-- Индексы таблицы `torts`
--
ALTER TABLE `torts`
  ADD PRIMARY KEY (`id_torts`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `deserts`
--
ALTER TABLE `deserts`
  MODIFY `id_deserts` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `kruassans`
--
ALTER TABLE `kruassans`
  MODIFY `id_kruassans` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `torts`
--
ALTER TABLE `torts`
  MODIFY `id_torts` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_desert`) REFERENCES `deserts` (`id_deserts`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`id_torts`) REFERENCES `torts` (`id_torts`),
  ADD CONSTRAINT `menu_ibfk_3` FOREIGN KEY (`id_kruassans`) REFERENCES `kruassans` (`id_kruassans`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
