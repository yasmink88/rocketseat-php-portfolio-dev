<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A simple portfolio website to showcase my work as a PHP developer">
	<meta name="keywords" content="portfolio, developer, PHP, HTML, CSS, JavaScript">
	<link rel="stylesheet" href="styles/main.css">
	<title>Homepage - Portfolio Dev</title>
</head>

<body class="bg-zinc-900">
	<section id="hero" class="bg-[url(/assets/Background_Intro.png)] bg-cover bg-no-repeat flex justify-center items-center">
		<?php include 'components/hero.php'; ?>
	</section>
	<section id="projects" class="w-[1024px] mx-auto flex justify-center items-center">
		<?php include 'components/projects.php'; ?>
	</section>
	<section id="contact" class="bg-[url(/assets/Background_Contacts.png)] bg-cover bg-no-repeat flex justify-center items-center">
		<?php include 'components/contact.php'; ?>
	</section>


	<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
	</div>
</body>

</html>