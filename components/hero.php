<?php
    $name        = 'Yasmin Khalaf';
    $job         = 'Desenvolvedora PHP';
    $description = 'Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.';
    
    $stacks = [
        'Github',
        'PHP',
        'HTML',
        'CSS',
        'JavaScript'
    ];

    $colors = [
        'fuchsia',
        'lime',
        'sky',
        'red',
        'amber',
    ]
?>


<div class="flex flex-col items-center text-gray-100 text-center gap-20 py-20">
    <img src="../assets/dev.png" alt="Dev image" width="175" height="175">
    <div class="content gap-2 flex flex-col items-center justify-center">
        <p class="text-[20px]">Hello World! Meu nome é <span class="text-red-400"> <?= $name ?> </span> e sou</p>
        <h1 class="text-[56px]"><?= $job ?></h1>
        <p class="text-gray-400 text-[14px] w-1/2"><?= $description ?></p>
    </div>
    <div class="stack">
        <ul class="flex flex-row gap-2 text-gray-900">
            <?php foreach ( $colors as $position => $color ) : ?>
                <li class="bg-<?= $color ?>-400 py-1 px-4 flex items-center justify-center rounded-full"><?= $stacks[$position] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>