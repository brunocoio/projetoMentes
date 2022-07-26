-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jul-2022 às 12:24
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetomentes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `addresses`
--

CREATE TABLE `addresses` (
  `id_address` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `numeral` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `addresses`
--

INSERT INTO `addresses` (`id_address`, `city_id`, `state_id`, `numeral`, `address`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '11', 'endereço 1', '13330001', '2022-07-28 10:24:15', '2022-07-28 10:24:15'),
(2, 2, 2, '22', 'endereço 2', '13330002', '2022-07-28 10:24:15', '2022-07-28 10:24:15'),
(3, 3, 3, '33', 'endereço 3', '13330003', '2022-07-28 10:24:15', '2022-07-28 10:24:15'),
(4, 4, 4, '44', 'endereço 4', '13330004', '2022-07-28 10:24:15', '2022-07-28 10:24:15'),
(5, 11, 11, '55', 'endereço 5', '13330005', '2022-07-28 10:24:15', '2022-07-28 10:24:15'),
(8, 0, 0, '0', '0', '0', '2022-07-28 10:24:15', '2022-07-28 10:24:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cities`
--

CREATE TABLE `cities` (
  `id_cities` bigint(20) UNSIGNED NOT NULL,
  `state_id` int(11) NOT NULL,
  `name_cities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cities`
--

INSERT INTO `cities` (`id_cities`, `state_id`, `name_cities`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rio Branco', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(2, 2, 'Maceió', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(3, 3, 'Macapá', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(4, 4, 'Manaus', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(5, 5, 'Salvador', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(6, 6, 'Fortaleza', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(7, 7, 'Brasília', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(8, 8, 'Vitória', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(9, 9, 'Goiânia', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(10, 10, 'São Luís', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(11, 11, 'Cuiabá', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(12, 12, 'Campo grande', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(13, 13, 'Belo Horizonte', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(14, 14, 'Belém', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(15, 15, 'João Pessoa', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(16, 16, 'Curitiba', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(17, 17, 'Recife', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(18, 18, 'Teresina', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(19, 19, 'Rio de Janeiro', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(20, 20, 'Natal', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(21, 21, 'Porto Alegre', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(22, 22, 'Porto Velho', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(23, 23, 'Boa Vista', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(24, 24, 'Florianópolis', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(25, 25, 'São Paulo', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(26, 26, 'Aracajú', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(27, 27, 'Palmas', '2022-07-26 23:18:31', '2022-07-26 23:18:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_26_151709_create_states_table', 1),
(6, '2022_07_26_151728_create_cities_table', 1),
(7, '2022_07_26_151743_create_addresses_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `states`
--

CREATE TABLE `states` (
  `id_states` bigint(20) UNSIGNED NOT NULL,
  `name_states` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acronym` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `states`
--

INSERT INTO `states` (`id_states`, `name_states`, `acronym`, `created_at`, `updated_at`) VALUES
(1, 'Acre', 'AC', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(2, 'Alagoas', 'AL', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(3, 'Amapá', 'AP', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(4, 'Amazonas', 'AM', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(5, 'Bahia', 'BA', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(6, 'Ceará', 'CE', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(7, 'Distrito Federal', 'DF', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(8, 'Espírito Santo', 'ES', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(9, 'Goiás', 'GO', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(10, 'Maranhão', 'MA', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(11, 'Mato Grosso', 'MT', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(12, 'Mato Grosso do Sul', 'MS', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(13, 'Minas Gerais', 'MG', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(14, 'Pará', 'PA', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(15, 'Paraíba', 'PB', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(16, 'Paraná', 'PR', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(17, 'Pernambuco', 'PE', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(18, 'Piauí', 'PI', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(19, 'Rio de Janeiro', 'RJ', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(20, 'Rio Grande do Norte', 'RN', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(21, 'Rio Grande do Sul', 'RS', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(22, 'Rondônia', 'RO', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(23, 'Roraima', 'RR', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(24, 'Santa Catarina', 'SC', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(25, 'São Paulo', 'SP', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(26, 'Sergipe', 'SE', '2022-07-26 23:18:31', '2022-07-26 23:18:31'),
(27, 'Tocantins', 'TO', '2022-07-26 23:18:31', '2022-07-26 23:18:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `address_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 1, 'teste', 'marketing@combatarmordefense.com.br', NULL, '123', NULL, NULL, NULL),
(8, 2, 'teste', 'admin@admin.com.br', NULL, '123654', NULL, NULL, NULL),
(11, 3, 'testes', 'marketing@combatarmordefense.com.brs', NULL, '2233223', NULL, NULL, NULL),
(12, 4, 'testes', 'web@combatarmordefense.com.br', NULL, '5236541', NULL, NULL, NULL),
(13, 5, 'testeg', 'admin2@admin.com.br', NULL, '1234566', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id_address`);

--
-- Índices para tabela `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_cities`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id_states`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id_address` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cities`
--
ALTER TABLE `cities`
  MODIFY `id_cities` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `states`
--
ALTER TABLE `states`
  MODIFY `id_states` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
