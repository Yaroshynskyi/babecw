-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Бер 25 2026 р., 01:54
-- Версія сервера: 10.4.32-MariaDB
-- Версія PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `board_game_shop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Стратегії'),
(2, 'Для вечірок'),
(3, 'Сімейні'),
(4, 'Класичні'),
(5, 'Економіка'),
(6, 'Складні'),
(7, 'Рольові');

-- --------------------------------------------------------

--
-- Структура таблиці `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `min_players` int(11) DEFAULT NULL,
  `max_players` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(100) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `playtime` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `games`
--

INSERT INTO `games` (`id`, `category_id`, `title`, `description`, `price`, `min_players`, `max_players`, `image`, `manufacturer`, `language`, `playtime`, `age`) VALUES
(1, 1, 'Catan (Колонізатори) ваівпівапіап', 'Класична стратегічна гра про торгівлю та розбудову поселень.', 2340.00, 3, 4, 'https://x.boardgamearena.net/data/gamemedia/catan/box/en_280.png?h=1751536970', 'Piven', 'Українська', '30-60хв', 12),
(2, 2, 'Dobble (Доббль)', 'Швидка гра на уважність для будь-якої компанії.', 600.00, 2, 8, '', '', '', '', 0),
(3, 3, 'Ticket to Ride: Європа', 'Побудуйте свою заліз«Ticket to Ride: Європа» - це чудова гра для всієї родини, в якій вам належить прокладати залізничні маршрути з колій на землі та поромних переправ на морі, до того ж робити це швидше й вдаліше за своїх конкурентів. Гра має прості, інтуїтивно зрозумілі правила і вельми глибокий, захопливий ігролад, і поруч із «Такеноко» та «Каркасоном» вважається класикою сучасних сімейних ігор.ничну імперію по всій Європі.', 2200.00, 2, 5, 'https://geekach.com.ua/content/images/17/500x494l99br0/kvytok-na-poizd-yevropa-ticket-to-ride.-europe-94407665323702.webp', 'Lord of Boards', 'Українська', '30-60хв', 8),
(6, 5, 'Монополія Україна (Monopoly Ukraine)', 'Настільна гра Монополія підкуповує простим і азартним геймплеєм у межах правдоподібної економічної моделі. Механіка гри являє собою класичний «кинь-двинь» на стероїдах. Щоб виграти, гравець повинен заробити найбільший капітал і довести до банкрутства своїх суперників. Якщо хочете, Гікач коротко розповість про ігровий процес.', 2000.00, 2, 6, 'https://geekach.com.ua/content/images/23/650x650l99br0/17065884378214.webp', 'Hasbro', 'Українська', '60-180хв', 8),
(7, 6, 'Гра престолів. Друге видання (A Game of Thrones: The Board Game Second Edition)', 'Найвдаліше настільне втілення культової епопеї Джорджа Мартіна про боротьбу великих Домів за Залізний трон. Настільна гра «A Game of Thrones: The Board Game» була розроблена в 2011 році. Її авторами виступили Крістіан Петерсен (засновник компанії «Fantasy Flight Games», творець таких ігор, як «Twilight Imperium», «StarCraft: The Board Game» та «World of Warcraft: The Board Game») і Кевін Вілсон («Лють Дракули», «Descent. Мандри у Темряві», «Жах Аркгема», «Знак Старших богів» і «Цивілізація Сіда Мейєра»). У 2013 році настільна «Гра престолів» стала переможницею конкурсу «Ludoteca Ideale».\r\nУчасникам гри пропонується наново проспівати «Пісню льоду й полум\'я». Усі головні герої ще живі, бадьорі та сповнені сил. Король Роберт Баратеон помер, хай живе новий король! Хто ним стане? Хто буде правити Сімома королівствами? Благородні Старки, підступні Ланістери, слизькі Грейджої, амбітні Тайрели, жорстокі Мартели чи владні Баратеони? Очоливши ці великі Доми, гравці спробують за десять раундів захопити якомога більше земель із замками та фортецями. Переможець посяде своє законне місце на Залізному троні.', 3000.00, 3, 6, 'https://geekach.com.ua/content/images/28/1300x1272l99br0/igra-prestolov.-vtoroe-izdanie-a-game-of-thrones-the-board-game-97111945051160.webp', 'Китай', 'Українська', '60-180хв', 13),
(8, 1, 'Нортґард. Незвідані землі (Northgard: Uncharted Lands)', 'Колодобудівна стратегія з механікою контролю територій за мотивами знаменитої відеогри «Northgard». У цій грі, заснованій на скандинавській мітології, гравці керують кланами вікінгів, що відправляються досліджувати загадковий континент. \r\n\r\nНастільна гра «Northgard: Uncharted Lands» вийшла в 2022 році. Вона отримала відмінні оцінки та відгуки на сайті «BoardGameGeek». Якщо вам подобаються такі бойові стратегії, як «Лють крові» або «Ініш», то Гікач гарантує, що ця гра також потішить вас.', 3000.00, 2, 5, 'https://geekach.com.ua/content/images/17/1500x1498l99br0/nortgard.-nezvidani-zemli-13899788536838.webp', 'Китай', 'Українська', '45-90хв', 13),
(9, 1, 'Цивілізація. Новий світанок (Civilization: A New Dawn)', 'Нове видання знаменитої «Цивілізації» Сіда Мейера – настільна адаптація шостої частини популярної комп\'ютерної гри. «Sid Meier\'s Civilization: A New Dawn» була розроблена в 2017 році відомим ґеймдизайнером Джеймсом Кніффеном, автором «Нью-Анджелеса» і співавтором «Forbidden Stars». Як завжди, гравцям пропонується очолити великі народи і постаратися привести їх до процвітання, завойовуючи нові території, розвиваючи технології і зводячи чудеса світу. \r\nГра відбувається на полі, складеному з шестигранних плиток. Різна розкладка модулів забезпечує високий рівень реграбельності. Гравці ставлять фігурки столиць на стартових плитках із зірками. Потім вони отримують планшети лідерів і лінійки дій, під якими розміщують карти дій. Учасники ходять по черзі, починаючи з першого гравця. Активний гравець розігрує одну карту дії, переміщує її в початок ряду і зміщує вправо всі карти, що знаходилися зліва. Перед кожним своїм ходом перший гравець переводить стрілку на диску подій. Гра закінчується, коли комусь вдається виконати по одній умові на кожній карті перемоги.', 2650.00, 2, 4, 'https://geekach.com.ua/content/images/46/651x690l99br0/tsivilizatsiya-sida-meyera-novyy-rassvet-utsenka-92943630729666.webp', 'Чехія', 'Українська', '2-4', 13),
(10, 2, 'Бенґ! (BANG!)', '«Бенґ!» – це культова карткова гра-перестрілка для великої компанії, яка взяла найкраще від популярної «Мафії» та знаменитого «Манчкіна». Як і в «Мафії», гравці отримають ролі: шерифа, помічника шерифа, кількох бандитів і ренегата. Шериф відразу розкриває свою карту, ролі інших учасників залишаються в таємниці, а їхні завдання відверто відрізняються. Наприклад, бандити повинні вбити шерифа, помічник шерифа намагається перешкодити їм, захистивши свого шефа, а ренегат відіграє, певно, найскладнішу роль – йому потрібно залишитися останнім уцілілим. Ренегат до певної миті захищатиме шерифа, видаючи себе за його помічника, а наприкінці гри, якщо йому вдасться протриматися, він зрадницьки вистрілить шерифу в спину.', 899.99, 4, 7, 'https://geekach.com.ua/content/images/28/1162x1600l99br0/beng-bang-92242175507946.webp', 'Англія', 'Українська', '20-60хв', 8),
(11, 2, 'Бенґ! Кубикова гра (BANG! The Dice Game)', 'На Дикому Заході, де сонце палить без жалю, лунає грім канонад. Запах пороху пронизує повітря, змішуючись з димом від багаття. Шериф тримає напоготові свій вірний револьвер, адже кожен закуток цього проклятого містечка може приховувати бандита, готового пустити кулю в лоб. Та раптом, з-за обрію, мов чорна хмара, насувається нова загроза — індіанські стріли дощем падають на голови білих, змушуючи забути про вчорашні чвари. Чи вистачить у тебе влучності та відваги, щоб вижити в цій пекельній м’ясорубці?\r\n\r\n«Бенґ! Кубикова гра» — нова версія культової гри-перестрілки «Бенґ!», яка занурює гравців у небезпечні розбірки Дикого Заходу. Знайомі ролі та персонажі, але тепер долю міста вирішує жменя кубиків. Азарт, непередбачуваність і напруга — ось що чекає вас у цій захопливій кубиковій перестрілці!\r\n\r\nГікач також рекомендує іншу гру з прихованими ролями «Авалон», де герої легенд про короля Артура зійдуться у протистоянні. А якщо вам подобається жбурнути побільше кубиків і подивитися, що з цього вийде, пропонуємо гру з трохи милішою тематикою — «MLEM. Космічне агентство».', 849.00, 3, 8, 'https://geekach.com.ua/content/images/41/1149x1600l99br0/beng-kubykova-hra-bang-the-dice-game-55088953362351.webp', 'Чехія', 'Українська', '15', 8);

-- --------------------------------------------------------

--
-- Структура таблиці `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'new',
  `customer_name` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `created_at`, `status`, `customer_name`, `phone`, `address`) VALUES
(1, 1, '2026-03-24 00:17:04', 'Нове', 'Ярош Кирил', '+380631485793', 'Житомир, вул. Світ, 56'),
(2, 2, '2026-03-24 01:12:49', 'В обробці', 'Іван Франко', '+380674569034', 'Київ, вул. Житомирська, 39');

-- --------------------------------------------------------

--
-- Структура таблиці `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `game_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `game_id`, `quantity`, `price`) VALUES
(1, 1, 1, 1, 240340.00),
(2, 2, 1, 1, 240340.00),
(3, 2, 2, 1, 600.00),
(4, 2, 3, 1, 2200.00);

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT 'user',
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`, `firstName`, `lastName`) VALUES
(1, 'Admin', 'admin', 'admin', 'Min', 'Ad'),
(2, 'User', 'pass1', 'user', 'Влад', 'Вален'),
(3, 'User2', 'pass2', 'user', 'Рома', 'Апар'),
(4, 'User3', 'pass3', 'user', 'Влад', 'ТукТукСахур');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Індекси таблиці `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Індекси таблиці `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблиці `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
