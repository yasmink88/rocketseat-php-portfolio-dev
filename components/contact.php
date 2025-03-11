<?php
    $contact_title       = 'Contato';
    $contact_subtitle    = 'Gostou do meu trabalho?';
    $contact_description = 'Entre em contato ou acompanhe as minhas redes sociais!';

    $socials = [
        [
            'name' => 'Github',
            'img'  => '../assets/GithubLogo.png',
            'url'  => '',
        ],
        [
            'name' => 'LinkedIn',
            'img'  => '../assets/LinkedinLogo.png',
            'url'  => '',
        ],
        [
            'name' => 'Instagram',
            'img'  => '../assets/InstagramLogo.png',
            'url'  => '',
        ],
        [
            'name' => 'Email',
            'img'  => '../assets/EnvelopeSimple.png',
            'url'  => '',
        ],
    ];
?>

<div class="flex flex-col items-center text-gray-100 text-center gap-10 py-20 w-[500px]">
    <div class=" title">
        <h2 class="text-red-400 text-[20px]"><?= $contact_title ?></h2>
        <span class="text-[24px]"><?= $contact_subtitle ?></span>
        <p class="text-gray-400 text-[14px]"><?= $contact_description ?></p>
    </div>
    <div class="links w-full">
        <ul class="flex flex-col gap-4 text-gray-300">
            <?php foreach ( $socials as $social ) : ?>
                <li>
                    <a href="<?= $social['url'] ?>" class="bg-gray-800 rounded-xl py-4 px-6 w-full flex justify-between items-center">
                        <span class="flex items-center gap-2">
                            <img class="w-[28px]" src="<?= $social['img'] ?>" alt="<?= $social['name'] . ' Logo' ?>">
                            <?= $social['name'] ?>
                        </span>
                        <img src="../assets/ArrowUpRight.png" alt="ArrowUp Right icon">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>