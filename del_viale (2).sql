-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Mag 02, 2024 alle 20:10
-- Versione del server: 5.7.39
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `del_viale`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT '2',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punti` int(11) NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `role_id`, `name`, `telefono`, `email`, `punti`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Alice Johnson', 3398238323, 'alice@example.com', 21, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(2, 2, 2, 'Bob Smith', 3398238323, 'bob@example.com', 22, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(3, 3, 2, 'Elena Rossi', 3398238323, 'elena@example.com', 1, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(4, 4, 2, 'David Lee', 3398238323, 'david@example.com', 1, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(5, 5, 2, 'Sophia Martinez', 3398238323, 'sophia@example.com', 2, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(6, 6, 2, 'Maximilian Fischer', 3398238323, 'max@example.com', 3, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(7, 7, 2, 'Emma Wang', 3398238323, 'emma@example.com', 23, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(8, 8, 2, 'Lucas Hernandez', 3398238323, 'lucas@example.com', 121, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(9, 9, 2, 'Ava Singh', 3398238323, 'ava@example.com', 1, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(10, 10, 2, 'Alexander Brown', 3398238323, 'alex@example.com', 2, '', '2024-05-02 18:09:38', '2024-05-02 18:09:38');

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `autore` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `messages`
--

INSERT INTO `messages` (`id`, `autore`, `testo`, `created_at`, `updated_at`) VALUES
(1, 'gianluca', 'mi piacerebbe lavorare con voi', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(2, 'marins', 'Ciao! Sono interessato al vostro servizio.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(3, 'marins', 'Salve, avete dei posti disponibili per uno stage?', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(4, 'marins', 'Buongiorno! Sto cercando collaborazioni nel campo della programmazione.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(5, 'marins', 'Mi piacerebbe saperne di più sulla vostra azienda.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(6, 'marins', 'Saluti! Sto cercando un team per lavorare su un progetto di sviluppo web.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(7, 'marins', 'Ciao, avete delle opportunità di lavoro aperte?', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(8, 'marins', 'Buongiorno! Vorrei avere informazioni sui vostri servizi di consulenza.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(9, 'marins', 'Sono uno sviluppatore frontend in cerca di nuove sfide professionali.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(10, 'marins', 'Salve! Sto cercando un partner per avviare una startup.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(11, 'marins', 'Buongiorno! Mi piacerebbe partecipare ai vostri eventi di networking.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(12, 'marins', 'Ciao, avete dei corsi di formazione disponibili?', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(13, 'marins', 'Saluti! Sto valutando opportunità di investimento nel settore tecnologico.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(14, 'marins', 'Buongiorno! Vorrei organizzare una presentazione del mio prodotto presso la vostra azienda.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(15, 'marins', 'Sono uno studente universitario interessato a uno stage formativo.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(16, 'marins', 'Ciao! Vorrei sapere di più sui vostri progetti di responsabilità sociale.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(17, 'marins', 'Salve, avete dei partner commerciali con cui collaborate?', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(18, 'marins', 'Buongiorno! Mi piacerebbe partecipare a un hackathon organizzato dalla vostra azienda.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(19, 'marins', 'Sto cercando informazioni sui vostri prodotti e servizi digitali.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(20, 'marins', 'Ciao, sono un appassionato di tecnologia e vorrei fare parte della vostra community.', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(21, 'marins', 'Salve! Sono interessato a una consulenza per migliorare la mia presenza online.', '2024-05-02 18:09:38', '2024-05-02 18:09:38');

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_13_173850_create_messages_table', 1),
(7, '2024_03_13_184901_create_roles_table', 1),
(8, '2024_03_15_152916_create_clients_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Amministratore', '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(2, 'Utente', '2024-05-02 18:09:38', '2024-05-02 18:09:38');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `telefono`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alice Johnson', 3398238323, 'alice@example.com', NULL, 'password123', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(2, 'Bob Smith', 3398238323, 'bob@example.com', NULL, 'qwerty123', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(3, 'Elena Rossi', 3398238323, 'elena@example.com', NULL, 'password456', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(4, 'David Lee', 3398238323, 'david@example.com', NULL, 'davidpass', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(5, 'Sophia Martinez', 3398238323, 'sophia@example.com', NULL, 'sophiapass', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(6, 'Maximilian Fischer', 3398238323, 'max@example.com', NULL, 'maxpass', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(7, 'Emma Wang', 3398238323, 'emma@example.com', NULL, 'emmapass', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(8, 'Lucas Hernandez', 3398238323, 'lucas@example.com', NULL, 'lucaspass', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(9, 'Ava Singh', 3398238323, 'ava@example.com', NULL, 'avapass', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38'),
(10, 'Alexander Brown', 3398238323, 'alex@example.com', NULL, 'alexpass', NULL, '2024-05-02 18:09:38', '2024-05-02 18:09:38');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_user_id_unique` (`user_id`),
  ADD KEY `clients_role_id_foreign` (`role_id`);

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indici per le tabelle `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indici per le tabelle `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indici per le tabelle `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
