-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bootstrap_blog
CREATE DATABASE IF NOT EXISTS `bootstrap_blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bootstrap_blog`;

-- Volcando estructura para tabla bootstrap_blog.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comentario_user` (`id_user`),
  KEY `fk_com_post` (`id_post`),
  CONSTRAINT `fk_com_post` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`),
  CONSTRAINT `fk_comentario_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bootstrap_blog.comentarios: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` (`id`, `id_user`, `id_post`, `texto`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 2, 5, 'La combiancion de gri con boot starp es excelente Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.', '2022-02-20 00:00:00', '2022-03-14 00:00:00', NULL),
	(2, 3, 5, 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', '2022-02-19 16:35:22', '2022-02-19 16:35:24', NULL),
	(3, 4, 4, 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', '2022-02-19 17:02:29', '2022-02-19 17:02:31', NULL),
	(4, 4, 5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore blanditiis amet necessitatibus aliquam labore reprehenderit corporis quod esse. Eius omnis error porro a tempore, voluptates illum laboriosam alias at quam!', '2022-02-20 03:10:20', '2022-02-20 03:10:20', NULL),
	(5, 4, 5, 'Hola xd', '2022-02-20 03:49:00', '2022-02-20 03:49:00', NULL),
	(6, 5, 5, 'Este es un comentario de prueba del usuario con id 4', '2022-02-20 06:55:29', '2022-02-20 06:55:29', NULL),
	(7, 5, 5, 'Probando comentarios como funcionan jajajjaj xd', '2022-02-20 06:59:45', '2022-02-20 06:59:45', NULL),
	(8, 5, 8, 'Comentario de Jose en el post 8', '2022-02-20 07:08:26', '2022-02-20 07:08:26', NULL),
	(9, 3, 4, 'Como se soluciona eso', '2022-03-05 20:09:51', '2022-03-05 20:09:51', NULL),
	(10, 3, 4, 'Jajaja', '2022-03-05 20:10:33', '2022-03-05 20:10:33', NULL),
	(11, 3, 4, 'Pruea comentario jajajjs', '2022-03-05 20:16:12', '2022-03-05 20:16:12', NULL),
	(12, 3, 4, 'Pruea comentario jajajjs xd', '2022-03-05 20:17:31', '2022-03-05 20:17:31', NULL),
	(13, 3, 8, 'Probando comentarios jajajaj', '2022-03-06 21:24:00', '2022-03-06 21:24:00', NULL);
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;

-- Volcando estructura para tabla bootstrap_blog.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bootstrap_blog.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla bootstrap_blog.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bootstrap_blog.migrations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla bootstrap_blog.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bootstrap_blog.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla bootstrap_blog.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bootstrap_blog.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla bootstrap_blog.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL DEFAULT '',
  `contenido` varchar(50) NOT NULL DEFAULT '',
  `imagen` varchar(50) DEFAULT NULL,
  `tags` varchar(50) NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `comentarios_cant` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user` (`id_user`),
  CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bootstrap_blog.posts: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `id_user`, `categoria`, `contenido`, `imagen`, `tags`, `created_at`, `updated_at`, `deleted_at`, `comentarios_cant`) VALUES
	(2, 3, 'Utilidades', 'Formularios Bootstrap', '3-formularios-bootstrap.png', 'Colores,Utilidades,Diseños', '2022-02-19 05:39:39', '2022-02-19 05:39:39', NULL, 0),
	(4, 4, 'Layouts', 'Disenos y estructura en bootstrap', '3-disenos-y-estructura-en-bootstrap.jpg', 'Flexbox,Diseños,Bootstrap5', '2022-02-19 13:26:15', '2022-03-05 20:17:31', NULL, 5),
	(5, 4, 'Layouts', 'Grid con bootstrap', '3-grid-con-bootstrap.png', 'Grid,Layouts,Flexbox', '2022-02-19 13:27:01', '2022-02-19 13:27:01', NULL, 6),
	(6, 3, 'Componentes', 'Disenos adaptables con bootstrap', '3-disenos-adaptables-con-bootstrap.png', 'Flexbox, Grid', '2022-02-19 13:27:01', '2022-02-19 13:27:01', NULL, 0),
	(8, 2, 'Componentes', 'Carusel moderno con bootstrap', '3-carusel-moderno-con-bootstrap.jpg', 'Carousel,Responsive,Componente', '2022-02-19 15:14:40', '2022-03-06 21:24:00', NULL, 2),
	(9, 3, 'Componentes', 'Modal con tabla de información', '3-modal-con-tabla-de-informacion.png', 'Modales,Formularios', '2022-02-19 15:15:28', '2022-02-19 15:15:30', NULL, 0),
	(10, 5, 'Utilidades', 'Como utilizar los sizes', '3-como-utilizar-los-sizes.png', 'Sizes,Words,Utilidades,Ayudas', '2022-02-20 07:39:38', '2022-02-20 07:39:38', NULL, 0),
	(28, 3, 'Layouts', 'Responsive Design', '3-responsive-design.jpg', 'Flexbox,Responsive', '2022-03-05 22:56:55', '2022-03-05 22:56:55', NULL, 0);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Volcando estructura para tabla bootstrap_blog.respuestas
CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_resp_user` (`id_user`),
  KEY `fk_resp_com` (`id_comentario`),
  CONSTRAINT `fk_resp_com` FOREIGN KEY (`id_comentario`) REFERENCES `comentarios` (`id`),
  CONSTRAINT `fk_resp_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bootstrap_blog.respuestas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
INSERT INTO `respuestas` (`id`, `id_user`, `id_comentario`, `texto`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 4, 1, 'Neque exercitationem rerum cum suscipit pariatur ullam quae beatae molestias id distinctio!', '2022-02-19 17:15:27', '2022-02-19 17:15:28', NULL),
	(2, 3, 2, 'assfgdd', '2022-02-19 18:52:03', '2022-02-19 18:52:02', NULL),
	(4, 2, 1, 'La combinacion que mencionas no es correcta.', '2022-02-20 04:15:04', '2022-02-20 04:15:04', NULL),
	(5, 2, 1, 'Hola mundo', '2022-02-20 04:30:20', '2022-02-20 04:30:20', NULL),
	(6, 5, 1, 'este es una respuesta de prueba del usuario con id 5 llamado jose', '2022-02-20 06:56:45', '2022-02-20 06:56:45', NULL),
	(7, 5, 6, 'este es una respuesta modificando el usuario, era id 5 llamado jose', '2022-02-20 06:57:33', '2022-02-20 06:57:33', NULL);
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;

-- Volcando estructura para tabla bootstrap_blog.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bootstrap_blog.users: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'Wilberth de Jesús', 'will@gmail.com', NULL, '$2y$10$xEaixjhcDVMqSdS4GUGxCe8jsyXJc1weYPVJbLcHkni6PnQmkkVjm', NULL, '2022-02-04 03:00:47', '2022-02-04 03:00:47'),
	(3, 'Jesus Lopez', 'jesus@gmail.com', NULL, '$2y$10$EHkoEzjcqQ72xH0vOmyGvOJk9jsBs8yrqBvkkeLgOEQ0rv75knkJy', NULL, '2022-02-11 23:41:23', '2022-02-11 23:41:23'),
	(4, 'Juan', 'luluencino63@gmail.com', NULL, '$2y$10$7HOiZnZdMxgP3A1aBcXGVOBU35NwSzPrEIsTbERWMoPRD3naXNU/a', NULL, '2022-02-14 18:12:15', '2022-02-14 18:12:15'),
	(5, 'Jose', 'jose@gmail.com', NULL, '$2y$10$Z/QiShXHnBxbmK5IcwIj/.WfpGd6DCjrPG2DEzqqJTWq2YDBJsAMy', NULL, '2022-02-20 05:54:08', '2022-02-20 05:54:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla bootstrap_blog.usuarios_blog
CREATE TABLE IF NOT EXISTS `usuarios_blog` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_user` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_perfil` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_blog_nombre_user_unique` (`nombre_user`),
  UNIQUE KEY `usuarios_blog_correo_unique` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bootstrap_blog.usuarios_blog: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios_blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios_blog` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
