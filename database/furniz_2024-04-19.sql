-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2024 at 03:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniz`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `category_article_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `ordering` int NOT NULL DEFAULT '10',
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `description`, `content`, `category_article_id`, `image`, `status`, `ordering`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Fugit dignissimos soluta autem in velit.', 'Sapiente nulla tempora quia ut consequuntur odio. Laborum ea in et debitis quis.', '<p>Officiis est sunt alias deleniti. Reiciendis magnam et eos nam aspernatur provident. Tempora provident quia soluta dolore autem. Quasi quasi dolorem tenetur ea nobis perspiciatis voluptatem. Omnis ea aut inventore consectetur. Ut occaecati laborum quia repellat. Exercitationem minus aut sit et itaque repudiandae. Illo dolorem quas et suscipit nam saepe laborum. Error dignissimos dolores totam alias ullam. Possimus sit fugit reprehenderit voluptate repellendus dignissimos nulla. Dolores commodi sit necessitatibus mollitia. Id voluptas veniam deserunt commodi non veniam ut. Amet et voluptatum modi velit accusamus. Esse voluptatem illum perspiciatis ad. Non saepe iste nihil amet. Natus sed sunt omnis mollitia enim impedit. Corporis qui necessitatibus dolorum. Commodi odit voluptatem est blanditiis nihil et cupiditate. Ut quaerat qui eos excepturi autem quidem possimus quia. Nostrum adipisci nemo consectetur earum repellendus libero fuga.</p>', 7, NULL, 1, 5, NULL, NULL, '1983-08-29 00:45:10', '2024-04-18 08:29:42'),
(2, 'Dolor expedita fuga et ab earum.', 'Quia sit fuga beatae in perspiciatis magnam. Ad placeat aut dolores delectus dolor qui tenetur.', 'In veritatis et rem expedita. Laboriosam officia non eaque consequuntur incidunt fugit officia. Aliquid aut aperiam consectetur est assumenda mollitia natus. Dignissimos totam dolorem animi nemo. Et mollitia quis quod hic mollitia voluptatem. Nobis est id qui sunt rerum. Consequuntur enim autem non distinctio. Voluptate dolorem iste temporibus autem laudantium. Quo blanditiis est doloribus earum assumenda. Nulla praesentium laudantium quaerat. Eius voluptatem corporis vero aut qui. Voluptatem repellendus ullam cupiditate modi nihil modi. Repudiandae provident quae voluptas aut. Quasi laborum ut omnis eveniet quis tenetur impedit. Mollitia dolorum natus vel et sunt impedit perferendis. Est nihil et libero in qui ut culpa. Perferendis temporibus ad perferendis fugit. Sint laborum eum quia dolore aut consequuntur eaque sapiente. Alias esse qui optio quaerat aspernatur iure nobis. Accusantium non aut nostrum est. Nihil illum at necessitatibus consequatur.', 9, NULL, 1, 4, NULL, NULL, '2010-11-30 02:28:01', '1982-11-12 11:49:34'),
(3, 'Aut qui qui sint perferendis ab molestiae.', 'Voluptates dolorem quia nisi accusamus. Unde nisi animi non dignissimos distinctio animi.', 'Nam deserunt velit corporis molestiae voluptatem. Iure error sunt voluptatem qui qui. Harum rerum sed expedita commodi. Aliquam nulla aut in neque et voluptatem. Quia fugiat perspiciatis non distinctio odio. Ipsam eaque cupiditate blanditiis. Praesentium corrupti veritatis sit non sint ut. Sed amet id eaque exercitationem quae sit eos. Natus vero aut laudantium facere autem quia. Iure rerum quaerat eos aliquam est. Perferendis qui corrupti eaque error minima et ipsa. Aut et dolor perspiciatis eos saepe voluptate velit eius. Ipsum dolorem at quae consequatur. Aliquam soluta repellat soluta. Aut voluptas quam aut dolores. Rerum sint neque voluptate quis ipsam dolor. Doloremque suscipit veritatis amet doloremque et quia. Accusantium dolorum sed autem et ipsa necessitatibus quia commodi. Doloremque ullam ducimus ad qui dignissimos qui recusandae accusantium. Assumenda cupiditate perspiciatis reiciendis et. Amet unde sequi et accusamus. In at qui qui aut sunt.', 4, NULL, 0, 10, NULL, NULL, '1982-12-01 16:15:19', '1972-01-31 03:15:48'),
(4, 'Et ut ullam deleniti voluptatem similique et sed.', 'Quidem et aperiam quidem quisquam. Et nostrum reprehenderit quas error error inventore.', 'Qui accusamus autem rerum sint aliquam velit est. Quis perspiciatis doloribus occaecati. Eligendi similique ipsum ea vitae porro. Harum officiis vel fugit quibusdam. Quis omnis sapiente impedit qui non dicta. Facilis neque omnis odit error. Incidunt blanditiis maiores perferendis voluptatem. Ut et recusandae fuga adipisci exercitationem enim. Itaque tempore aut veritatis quasi nemo. Veritatis voluptate exercitationem ratione nisi. Beatae accusantium ut iusto a sit. Dolorem voluptatibus aut fugiat sint tempora quia. Voluptas eum nobis inventore veritatis. Quidem libero officia accusamus repudiandae est. In voluptatem sit quidem. Cum quasi praesentium sequi accusamus rerum ullam quisquam. Esse quisquam possimus voluptatem fuga. Et quis est omnis totam omnis est. Sed qui neque mollitia sint ut ipsa eum. Qui in eos eligendi voluptatum. Impedit alias maxime ea numquam. Labore exercitationem quo hic eos ut et assumenda. Veniam autem consequatur iusto velit.', 11, NULL, 0, 3, NULL, NULL, '1995-06-05 12:36:52', '1984-02-07 17:40:42'),
(5, 'In est est ipsum reprehenderit quibusdam.', 'Quaerat occaecati et quos ut. Distinctio aut sit sed ex dolore ipsum.', 'Culpa sunt aut labore deserunt adipisci. Neque corporis doloribus voluptas. Vel adipisci consectetur illum omnis eum. Minus nisi cum repellendus eveniet. Magni laboriosam ut sit. Ad eveniet esse qui quia expedita molestiae earum sapiente. Harum et animi neque qui iure laudantium autem. Eveniet aliquam doloribus voluptatum quas. Nihil qui similique ut qui voluptate corrupti. Et in dicta quam et ut magnam quasi. Qui ipsam hic natus est id sit suscipit. Illum eos maiores et et laborum minima ut. Delectus iure eligendi cupiditate animi consequatur et est. Excepturi asperiores numquam maiores placeat et ab. Provident tenetur optio molestias vitae dolor. Cum ut enim hic. Eligendi nulla qui et autem. Nostrum molestiae voluptas dicta quasi exercitationem qui suscipit. Voluptatem repellat autem accusamus placeat eius aut. Fugit blanditiis nemo ut laboriosam magni recusandae expedita.', 9, NULL, 1, 7, NULL, NULL, '2024-04-01 10:18:33', '1998-09-17 10:14:26'),
(6, 'Ut est nihil animi vel eaque.', 'Debitis vel ea quisquam incidunt doloribus maxime. Quod qui et nostrum ut accusamus ratione.', 'Tempora natus ipsum praesentium iste culpa. Facilis nesciunt saepe similique eos tenetur molestiae. Quis tempora corporis officiis debitis distinctio. Suscipit est aut quam saepe id voluptatem sed. Aut tempore fugit blanditiis placeat sint itaque. Eveniet aut quam vel eos tempora magni. Itaque quae nesciunt officiis quos. Sit voluptatem deleniti at. Iste ut perspiciatis non magnam mollitia porro est quam. Veritatis et officiis quidem unde autem consequuntur inventore. Voluptatum labore aut deserunt laboriosam eum. Est asperiores cum inventore distinctio voluptatibus. Et quod voluptate et id minima eaque. Non voluptatum ut eligendi suscipit molestiae perspiciatis minima. Dolores et ut vero consequatur fuga. Id esse quis aut. Itaque quam deserunt voluptatum ullam. Architecto minus tempore non omnis vero. Autem sunt illo quo hic.', 2, NULL, 0, 10, NULL, NULL, '1983-03-05 00:43:23', '2011-03-07 09:18:51'),
(7, 'Quibusdam incidunt et et voluptatibus labore.', 'Enim voluptas inventore laudantium quas. Quisquam atque iure magni alias iste.', 'Eligendi rerum molestias in quia et. Aut dolorem rerum saepe pariatur aut. Magnam sint qui eos et esse. Temporibus voluptate ut molestiae. Veniam aliquid molestias nostrum consequatur cumque autem delectus. Aut asperiores maxime ea nemo vel atque. Assumenda nobis eum eum sint reiciendis assumenda optio. Cum sequi amet aut amet vero et molestiae ut. Delectus libero ex ipsa est aut assumenda expedita. Sunt doloribus et omnis et est molestiae. Sequi libero inventore similique eos maiores omnis consequatur laborum. Eaque dolorem iusto voluptate maiores nisi nesciunt voluptatem. Earum eum atque et est aliquam cupiditate. Quia ut vel exercitationem architecto voluptates fugiat. Temporibus qui illo ratione eligendi illo quod inventore. Blanditiis ipsam excepturi est eligendi omnis. Eos dolorem eligendi porro aut nisi eum quia. A atque voluptatem nulla non provident. Sunt quisquam dolore blanditiis et aut.', 19, NULL, 1, 5, NULL, NULL, '1999-09-05 15:05:34', '2012-06-05 02:14:24'),
(8, 'Numquam quis et sequi minus dolore.', 'Sit quia repellendus fugiat. Cum eos cumque nihil sunt et. Quia aut quia veniam.', 'Ea aliquam id ratione ut adipisci. Ut commodi veritatis voluptas. Architecto occaecati aut ut et et. Quae vel consequatur quibusdam quasi recusandae minus quia. Cumque dolor eius ut id omnis sunt. Voluptatem quibusdam illum quia totam consequatur. Vel rerum temporibus tempora nobis aut officiis veniam consequatur. Dolorem amet est et sint sit. Accusamus sint qui dolor quis esse assumenda. Hic ab corrupti ut nesciunt. In quo id et commodi. Consequatur quaerat in perferendis corporis quas reiciendis. Ut dolorum a quae ut. Placeat temporibus excepturi eum explicabo praesentium. Aperiam est enim qui velit dicta voluptatem. Et voluptatem qui itaque. Molestiae laudantium quia sequi hic. Eaque est necessitatibus cumque voluptatum. Aut quidem voluptatem veniam tenetur doloremque debitis ut. Provident doloribus quos assumenda qui.', 16, NULL, 0, 6, NULL, NULL, '1990-06-09 22:20:02', '1990-12-25 01:30:55'),
(9, 'Amet repellat quam natus iste modi est.', 'Ipsa deleniti velit temporibus aut. Magni est aut ipsa.', 'Vero beatae illum at aperiam sed. Excepturi culpa quia voluptatem quidem. Reprehenderit necessitatibus magnam voluptas rerum molestiae. Velit placeat architecto in ea pariatur tempora aut cum. Tempora et totam recusandae aspernatur. Rem aut cupiditate iusto perspiciatis nisi dignissimos. Et sint illum expedita. Aperiam nihil mollitia modi consequuntur. Sapiente dolores et rerum laudantium suscipit et libero iste. Et nostrum aliquid quo voluptas aut. Reprehenderit aut sed unde enim saepe et incidunt. Sequi recusandae necessitatibus dolores harum inventore quis. Deleniti et dignissimos voluptatum iure magnam in. Ab consequatur consequatur corporis quia repellendus soluta. Asperiores sint cumque sunt repellendus sequi soluta. Id totam consequatur inventore assumenda. Delectus temporibus eius reiciendis neque. Quia quasi culpa libero veritatis voluptas expedita.', 19, NULL, 0, 8, NULL, NULL, '2023-11-24 11:20:50', '1994-05-05 16:07:15'),
(10, 'Nostrum natus minima fugit.', 'Harum laudantium qui hic. Maxime blanditiis eos velit excepturi. Et autem vero harum iure eum fuga.', 'Sunt quo et quis tempore velit. Quos sapiente nam provident voluptates. Facere fugiat et delectus vel dolorum est. Qui quia possimus tenetur aut amet. Vero officiis vel inventore quibusdam quasi quia qui distinctio. Eos debitis dolor ea. Commodi excepturi facere voluptatem sequi ratione qui. Reprehenderit cupiditate aut praesentium. Vel minus molestiae qui rerum aspernatur sunt minima ut. Nesciunt adipisci asperiores fugiat enim rerum animi consequatur quasi. Explicabo laboriosam deleniti facere in. Quasi reprehenderit dolorem pariatur id eligendi. Rerum et inventore quod molestiae. Praesentium facilis sint aspernatur ratione. Ea eum perferendis occaecati omnis nemo sequi. Sunt aperiam vel et aut placeat ea. Molestiae delectus quo pariatur quo vel ducimus quasi. Aut dolores voluptas iusto tenetur at voluptates nemo id.', 11, NULL, 1, 10, NULL, NULL, '1997-05-01 23:07:00', '1995-12-21 00:50:13'),
(11, 'Eaque est ipsa ut.', 'Distinctio quos ea pariatur nobis eos. Quia et itaque magnam consequatur vel omnis aut.', 'Eveniet iusto est voluptas nesciunt quia molestias. Dolorem possimus quas quia nihil omnis aut officiis ea. Provident voluptatum ullam ut sint. Molestias quia explicabo voluptatem nisi saepe. Aut vel maxime aliquid quia ad. Numquam ab asperiores dolor ut. Odit aut aut illo voluptatum exercitationem vel hic. Et quas neque sint officia sed aliquid. Cupiditate velit ducimus sit molestiae voluptatem eius. Placeat sint accusantium aliquid repellat est sit. Quo sit architecto voluptas. Dolor est ratione sunt ut. Voluptatem provident corrupti non et. Soluta eum voluptatem et ut repudiandae ut aliquam. Qui est vel sit esse harum nihil ut. Qui eum rerum voluptas eum quis iusto impedit. Dignissimos sit ab similique. Aliquid eaque dolorum atque est qui. Rerum eaque et omnis et culpa dignissimos aut.', 15, NULL, 1, 1, NULL, NULL, '1981-03-28 03:44:48', '1994-11-07 06:05:26'),
(12, 'Vel voluptate amet non repellendus.', 'Est repellat laudantium fugiat fugit. Et enim magni ut expedita molestiae.', 'Culpa voluptatem quo est necessitatibus vero itaque et et. Necessitatibus eligendi et rerum distinctio ducimus. Minus voluptas repellendus nihil odit quis. Quas fugit adipisci aliquid ut. Voluptatibus sit iste pariatur qui. Quis ipsa esse doloribus optio ea cupiditate. Reprehenderit sint voluptatem asperiores aut quos. Debitis numquam ea ut. Aut minima ipsum sed enim. Expedita autem corrupti et tempora laudantium nesciunt id. Est ipsum est aliquid. Consectetur nulla sapiente aut et qui. In aut quibusdam sit eos. Explicabo nihil eligendi voluptas vitae iure. Totam culpa et non quo. Quidem ut est totam et quo excepturi et. Et eaque dolore quo sed eos. Ad qui repellat aut voluptatem aut quo. Quasi voluptate odio officiis voluptatem quasi deserunt. Accusamus sed ex rem natus. Qui impedit excepturi ut omnis blanditiis. Rem unde quaerat numquam sint aperiam quod.', 17, NULL, 1, 7, NULL, NULL, '2004-05-05 00:22:27', '1995-12-26 15:15:14'),
(13, 'Rerum non illo vitae aut.', 'Voluptatem et possimus eveniet. Alias nostrum reiciendis vel.', 'Aliquid minima quam eos rem eaque fugit. Excepturi reiciendis ea quibusdam sit illo vitae voluptatem non. Et corrupti necessitatibus consequatur dolor ipsum ut incidunt. Et ipsum est ut culpa sed accusantium ex. Totam qui modi repudiandae sunt. Id rerum eum velit et quia natus. Necessitatibus quasi expedita maiores nobis sed. Omnis et ea debitis quibusdam et mollitia. Ut tenetur ratione beatae consequatur enim doloremque sint. Minus fugit deleniti qui voluptas perferendis. Laboriosam laboriosam vero qui quam placeat. Iure vero aperiam qui ducimus et. Vero magni qui nemo aut. Ut velit dolor deleniti similique sint omnis. Consequatur consectetur dicta sit ratione. Consectetur nemo nobis ut. Eius cumque itaque omnis fugit unde. Pariatur expedita temporibus libero nobis voluptatem eligendi. Repellendus ipsam laudantium possimus est earum consequatur ratione. Et nihil odio sit iure tenetur iusto.', 1, NULL, 1, 4, NULL, NULL, '1970-12-09 14:09:47', '2020-01-25 20:34:41'),
(14, 'Est ipsa vitae similique sit.', 'Delectus velit voluptate pariatur reiciendis quasi autem autem. Perspiciatis laborum enim veniam.', 'Nemo consequatur et est commodi reiciendis deleniti. Fugit reiciendis veritatis facilis occaecati nihil. Molestiae culpa praesentium nisi recusandae. Quis enim molestiae sunt autem maxime exercitationem maxime. Ut qui vero vel velit. Iusto culpa molestias dicta modi occaecati vero error autem. Quae sequi voluptatem laboriosam voluptas. Sapiente quis corporis est quia voluptatem. Placeat sapiente qui vel libero ex. Dolores eligendi et dolore reiciendis facere et. Esse provident ipsum nihil non. Animi architecto deserunt itaque velit deleniti rerum saepe quod. Harum sit cupiditate voluptates. Et qui asperiores ea magni et. Autem nobis unde quos rerum impedit dolor consequatur. Ut tempore ea quo aut nihil at reiciendis cumque. Aliquid sit qui consequatur iste sunt asperiores. Iusto architecto temporibus corrupti delectus nulla aperiam. Ut voluptate molestiae vel dicta. Quo rerum qui deleniti et et. Quasi qui amet aut pariatur. Quod et fugit non corporis impedit.', 19, NULL, 1, 10, NULL, NULL, '2011-03-02 08:43:43', '2005-04-10 06:04:00'),
(15, 'Ex non deserunt ducimus blanditiis eos.', 'Voluptatem similique voluptatem perspiciatis ut dicta fuga. Ut quos neque molestiae impedit sed.', 'Ex culpa voluptatem quo et molestiae facere. Sint voluptatem sit est ut quidem doloribus. Tempora facere esse ipsum laborum id sit nulla. Libero enim iusto incidunt ut ut. Ipsam necessitatibus qui voluptatem beatae harum suscipit sunt. Quisquam ad optio maiores voluptas alias est ipsam sit. Blanditiis laudantium quibusdam expedita qui et corporis quam. Dolor esse quasi distinctio sed ducimus repellendus consectetur. Et corporis nobis non. Porro placeat atque dignissimos est quasi. Quo facere explicabo provident et eveniet laboriosam magni. Explicabo et libero alias ut ullam consequatur optio fugit. Quia et quae dolores. Et aspernatur id perspiciatis voluptas nulla. Unde consequatur odit nostrum sit ut eveniet quia. Dolor laudantium sed est totam. Eos et maiores vel. Incidunt recusandae libero voluptatem molestiae. Omnis eos eius et quasi aliquid. Et aspernatur est consequatur ut. Esse numquam culpa tenetur impedit.', 15, NULL, 0, 6, NULL, NULL, '2015-12-06 09:00:32', '1977-12-05 17:32:56'),
(16, 'Qui aut et accusamus dolorum vero rerum.', 'Libero et architecto eligendi. Natus animi autem optio at. Repudiandae rerum vel dicta neque.', 'Est sit quae quibusdam recusandae. Assumenda necessitatibus voluptas quia modi earum. Quo est porro repellendus et atque. Aut omnis deserunt maxime consequuntur. Aperiam rem sit quia in odio. Vitae voluptatem iure velit et. Mollitia culpa omnis quis enim. Porro inventore sapiente et nihil ut. Dolores unde omnis adipisci repellendus optio aut dolor. A et itaque maiores temporibus et. Quas eaque omnis velit iure suscipit. Voluptates quam consequatur rerum enim. Et veniam maiores officiis qui illum quae. Et magnam odio exercitationem possimus quidem sint. Doloremque mollitia et et reiciendis sed voluptatibus. Veniam ipsum ab molestiae quia impedit. Eum id numquam veritatis soluta iste quidem libero. Voluptatem iste quasi corrupti rem. Sit est sequi odit iste. Perspiciatis sit dolore deserunt.', 17, NULL, 0, 5, NULL, NULL, '1998-03-13 06:57:57', '2021-08-24 07:33:20'),
(17, 'Voluptate incidunt eligendi provident.', 'Qui minima ut culpa dolore explicabo. Veritatis autem voluptate qui vitae dolorem.', 'Ex sed est accusantium accusamus illum. Nostrum eligendi hic blanditiis alias molestiae similique. Velit tempore maiores qui molestias non quis et. Praesentium ipsa explicabo sunt nulla. Minus mollitia dolor et consequuntur. Quasi eveniet voluptatem qui nihil ducimus illum fugit. Non consequuntur dolorem molestiae eligendi sit id. Debitis ducimus commodi ut similique enim. Eius cumque et quia voluptatem. Recusandae id cupiditate fugit ab libero ea voluptatem ad. Saepe quia nam beatae cum. Qui ea hic blanditiis a quis. Dolorem ex debitis quia debitis officia esse corporis. Quae non aut cum illo. Laborum natus molestiae necessitatibus recusandae sit rerum qui. Sed sint expedita ullam aut quibusdam corporis. In magni perspiciatis illum et ut a. Soluta vero delectus maxime beatae. Perferendis nulla doloremque itaque blanditiis fugit a. Omnis labore aut culpa sed. Et accusamus fugiat sunt omnis aspernatur aut quia.', 16, NULL, 1, 1, NULL, NULL, '2009-07-22 17:19:05', '1978-08-13 23:41:26'),
(18, 'Ut repudiandae eaque eum incidunt delectus est.', 'Quia nam consequuntur rem non qui. Consequatur ducimus et voluptas doloremque sed et aut.', 'Quia ducimus id illum aut. Autem aliquam nulla at quia quibusdam. Sit ut commodi eos dolore doloribus provident. Sapiente eos aut fugit. Eum facilis ullam nisi vitae rerum architecto. Tenetur quam neque molestiae natus quae esse et. Magnam sint suscipit veritatis eos laboriosam. Quisquam molestiae quidem impedit tenetur. Aut consequatur aliquam quos quos natus optio est. Sequi sapiente modi sit quos. Excepturi doloremque facilis voluptatem occaecati. Similique similique aut similique tenetur et fugiat et. Praesentium molestiae sequi sed voluptatem rem doloribus aut. Laudantium ratione voluptatem quis consequatur sequi nesciunt architecto aliquam. Sed alias omnis eligendi possimus consectetur corrupti. Voluptates officia quae eum quidem adipisci. Qui iste dolorum sint omnis sequi dolorem ipsa. Dolorem voluptate id accusamus quod non magni adipisci. Nam ea repellendus excepturi dolorem.', 5, NULL, 0, 5, NULL, NULL, '2016-02-09 08:55:22', '2002-06-20 21:10:30'),
(19, 'Fugit debitis in itaque.', 'Laudantium harum molestias hic dolor. Ipsa corrupti in dolor deserunt vitae quam sed.', 'At consequatur exercitationem beatae voluptatem beatae porro. Perferendis soluta quidem rem ut esse. Ut aut hic minus aspernatur sint reiciendis et fuga. Maxime totam nobis veniam quidem. Eos aut minima perspiciatis laboriosam voluptatum. Recusandae in eum consequatur enim. Minima est molestiae nulla. Adipisci facilis autem iste sunt fugit eaque. Et sint similique odit nisi repudiandae quos. Cumque aut doloremque dignissimos modi qui reiciendis velit. Nihil sit natus aut sint. Fugit doloribus deserunt praesentium rem alias suscipit et. Perferendis et labore aut ducimus doloremque dolor. Asperiores ea nesciunt nemo quaerat est maxime at. Tenetur dolor quas aliquam sit. Voluptas ut minus aut eum commodi inventore veniam et. Aliquid illo et illum et. Reiciendis aspernatur tempora sapiente voluptas et quae aliquam voluptas. Tempora et sunt eos est necessitatibus. Perferendis eos officiis commodi error magni. Qui qui in consequuntur ipsum doloribus.', 15, NULL, 1, 2, NULL, NULL, '2019-06-21 14:50:22', '1992-07-27 00:34:42'),
(20, 'Laboriosam maiores eos voluptas sunt.', 'Vero omnis unde eaque placeat saepe. At placeat accusamus fugit eum eum odio numquam libero.', 'Amet alias necessitatibus fugit. Quibusdam expedita voluptatem eligendi explicabo numquam ut tenetur. Iure voluptatum vero qui possimus. Nostrum dolore porro aut saepe eligendi. Quia numquam aliquam praesentium nihil omnis. Rerum nulla nihil voluptas quia a ut. Sint temporibus corporis repellat et quos beatae a. Itaque consequuntur consectetur adipisci expedita sequi qui ipsum. Vitae fuga velit sapiente laudantium ducimus dignissimos. Velit molestias quae qui nam aliquid. Similique et velit iste nesciunt perspiciatis optio qui. Sequi quae accusamus dolores impedit. Dolorem similique reiciendis deserunt dicta quae et. Qui quod id quia ea. Ea cupiditate consequatur aut nam blanditiis voluptatum. Illum veritatis reiciendis dignissimos fugiat iure et. Non aut minima necessitatibus sunt natus. Veniam repellendus odio tempore temporibus. Laborum id enim voluptatum temporibus natus.', 5, NULL, 0, 8, NULL, NULL, '2024-04-04 12:03:36', '1984-10-27 00:51:51'),
(23, '111111111111111', '2222222222222', '<p>333333333333333333</p>', 3, NULL, 1, 10, NULL, NULL, '2024-04-19 05:11:16', NULL),
(24, '111111111111111111', '111111111111111111111', '<p>11111111111111111111111111</p>', 3, NULL, 1, 10, NULL, NULL, '2024-04-19 05:48:45', NULL),
(25, '222222222222222', '2222222222222222222', '<p>2222222222222222222222</p>', 3, NULL, 1, 10, NULL, NULL, '2024-04-19 05:50:59', NULL),
(26, '111111', '1111111111', '<p>111111111111111</p>', 3, NULL, 1, 10, NULL, NULL, '2024-04-19 08:14:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_articles`
--

CREATE TABLE `category_articles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `ordering` int NOT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_articles`
--

INSERT INTO `category_articles` (`id`, `name`, `status`, `ordering`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sed veniam est exercitationem animi.', 1, 2, NULL, NULL, '1974-08-10 02:11:13', '2024-04-18 07:29:39'),
(2, 'Voluptas eius quia rerum vero.', 1, 2, NULL, NULL, '2004-07-07 11:39:41', '1983-07-13 03:41:45'),
(3, 'Fugit ab qui deserunt dolore aspernatur.', 1, 7, NULL, NULL, '1986-10-11 07:50:46', '2017-03-04 09:04:02'),
(4, 'Ipsam et dolor aut dignissimos sit est.', 1, 2, NULL, NULL, '2004-01-02 17:49:23', '2011-11-03 14:36:17'),
(5, 'Rerum quia aspernatur explicabo ut enim.', 0, 4, NULL, NULL, '2011-05-26 22:50:00', '2002-02-10 00:01:50'),
(6, 'Laborum aut quia et quos et debitis magnam.', 1, 10, NULL, NULL, '1984-02-13 04:28:01', '1985-06-25 08:10:02'),
(7, 'DUY Labore sit non ipsum soluta voluptas minus.', 1, 5, NULL, NULL, '2017-12-14 04:05:48', '2015-01-22 13:37:15'),
(8, 'Maxime ipsum quod et iusto laboriosam.', 0, 3, NULL, NULL, '1995-10-01 00:32:05', '1976-10-17 08:10:14'),
(9, 'Consectetur hic sunt aperiam temporibus.', 1, 2, NULL, NULL, '2012-03-16 11:04:50', '1980-03-24 10:48:42'),
(10, 'Sed aut unde repellendus ipsa.', 0, 6, NULL, NULL, '1999-06-17 11:31:30', '1971-07-10 15:57:50'),
(11, 'Praesentium temporibus aliquam vitae non ea quis.', 0, 8, NULL, NULL, '1974-05-16 08:00:47', '1992-12-04 07:33:10'),
(12, 'Sit tempora maxime consequatur et.', 1, 4, NULL, NULL, '2009-12-23 10:37:01', '1988-07-12 12:25:08'),
(13, 'Distinctio ab qui rerum in.', 1, 3, NULL, NULL, '2016-08-19 08:12:23', '2013-04-13 18:40:20'),
(14, 'Aut quod ut ullam tempore iste eligendi.', 1, 4, NULL, NULL, '1996-12-07 16:34:24', '2020-08-02 09:44:24'),
(15, 'Dignissimos minus molestiae quaerat laborum.', 1, 6, NULL, NULL, '1980-04-22 08:58:12', '1987-12-07 07:31:11'),
(16, 'Quisquam incidunt adipisci iste doloribus.', 1, 8, NULL, NULL, '1993-06-16 13:48:43', '1991-08-09 10:47:32'),
(17, 'Labore quia amet et et quis hic a.', 1, 4, NULL, NULL, '2011-11-11 20:22:51', '1992-08-09 13:18:21'),
(18, 'Pariatur aliquam dolore non nemo est laborum vel.', 0, 4, NULL, NULL, '1984-11-06 10:35:40', '2019-08-03 10:27:39'),
(19, 'Dolorem quas fugiat totam est culpa qui voluptas.', 0, 6, NULL, NULL, '1988-01-11 15:47:34', '1993-04-24 07:01:09'),
(20, 'Id tempora sint quia consequatur.', 1, 6, NULL, NULL, '2017-06-08 22:17:07', '1979-12-03 12:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `ordering` int NOT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `status`, `ordering`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Debitis at aut eum aut consequatur ratione.', 1, 3, NULL, NULL, '1999-09-23 13:26:29', '2024-04-18 07:28:45'),
(2, 'Sunt excepturi et sunt recusandae deleniti.', 1, 7, NULL, NULL, '2022-10-15 15:39:50', '2020-07-12 10:13:59'),
(3, 'Amet blanditiis quos et magni.', 1, 8, NULL, NULL, '2011-05-21 13:50:38', '2013-04-21 12:53:45'),
(4, 'Quam eum ea non magnam et nisi accusantium.', 1, 3, NULL, NULL, '1999-06-22 12:03:05', '2012-10-16 23:41:43'),
(5, 'Et porro laudantium voluptatem fugiat.', 0, 6, NULL, NULL, '2013-01-11 16:41:51', '1975-03-24 22:30:36'),
(6, 'Commodi debitis animi qui soluta quas.', 0, 3, NULL, NULL, '2018-12-13 05:04:18', '2010-06-20 07:02:23'),
(7, 'Deserunt eos ut in expedita.', 0, 9, NULL, NULL, '1982-04-05 16:57:53', '1986-08-08 09:58:11'),
(8, 'Ipsum in expedita laborum nam id nobis.', 0, 2, NULL, NULL, '1983-01-21 13:58:22', '1987-12-23 13:03:13'),
(9, 'Dolor est id ullam voluptas sit.', 1, 10, NULL, NULL, '1981-03-06 02:56:20', '1987-04-06 20:18:43'),
(10, 'Quo est ratione quas alias omnis ut harum et.', 0, 5, NULL, NULL, '2004-09-08 11:53:20', '1987-01-04 14:07:53'),
(11, 'Est omnis id in vel amet quidem quo et.', 0, 1, NULL, NULL, '2010-02-04 12:12:26', '2012-12-23 02:17:05'),
(12, 'Fugit deserunt minima maxime aspernatur.', 0, 4, NULL, NULL, '2010-10-05 15:24:57', '1996-01-08 23:45:28'),
(13, 'Rerum in praesentium ratione.', 0, 10, NULL, NULL, '2009-05-19 04:04:16', '2005-02-03 01:43:41'),
(14, 'Non voluptatem quis nobis asperiores.', 0, 6, NULL, NULL, '2019-12-26 16:20:08', '1972-07-17 04:47:17'),
(15, 'Ipsum reiciendis magnam sint nobis nemo.', 0, 9, NULL, NULL, '1972-07-05 03:06:28', '2010-02-28 14:23:43'),
(16, 'Et quae adipisci voluptatem sint dignissimos.', 1, 2, NULL, NULL, '1998-08-04 08:28:32', '2017-10-30 12:40:05'),
(17, 'Perspiciatis vel quisquam labore.', 1, 8, NULL, NULL, '1990-12-16 08:59:30', '2017-09-05 01:25:18'),
(18, 'Sunt assumenda id praesentium nihil voluptatem.', 0, 5, NULL, NULL, '1998-08-24 14:15:26', '1995-12-02 11:29:52'),
(19, 'Recusandae culpa reprehenderit illo est.', 0, 7, NULL, NULL, '2008-08-26 02:22:52', '2023-08-23 14:38:17'),
(20, 'Voluptas sint eos exercitationem corporis.', 0, 5, NULL, NULL, '2003-11-17 19:26:26', '1982-01-22 00:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2024_04_03_035956_create_collections_table', 1),
(33, '2024_04_03_040020_create_category_articles_table', 1),
(34, '2024_04_15_025359_create_articles_table', 1),
(35, '2024_04_19_073028_create_media_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_articles`
--
ALTER TABLE `category_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category_articles`
--
ALTER TABLE `category_articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
