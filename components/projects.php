<?php
    $projects_title    = 'Meu Trabalho';
    $projects_subtitle = 'Veja os projetos em destaque';

    $projects = [
        [
            'name'        => 'Travelgram',
            'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'image'       => '../assets/image.png',
            'stacks'      => [
                'PHP',
                'HTML',
                'CSS',
                'JavaScript'
            ]
        ],
        [
            'name'        => 'Página de receita',
            'description' => 'Página com o passo a passo de uma receita para cupcakes',
            'image'       => '../assets/image-1.png',
            'stacks'      => [
                'PHP',
                'HTML',
                'CSS',
                'JavaScript'
            ]
        ],
        [
            'name'        => 'Tech News',
            'description' => 'Homepage de um portal de notícias sobre a área de tecnologia',
            'image'       => '../assets/image-2.png',
            'stacks'      => [
                'PHP',
                'HTML',
                'CSS',
                'JavaScript'
            ]
        ],
        [
            'name'        => 'Refund',
            'description' => 'Um sistema para pedido e acompanhamento de reembolso',
            'image'       => '../assets/Thumbnail_Project-04.png',
            'stacks'      => [
                'PHP',
                'HTML',
                'CSS',
                'JavaScript'
            ]
        ],
        [
            'name'        => 'Página de turismo',
            'description' => 'Página com as principais informações para quem quer viajar para Busan',
            'image'       => '../assets/Thumbnail_Project-05.png',
            'stacks'      => [
                'PHP',
                'HTML',
                'CSS',
                'JavaScript'
            ]
        ],
        [
            'name'        => 'Zingen',
            'description' => 'RLanding Page completa e responsiva de um aplicativo de Karaokê',
            'image'       => '../assets/Thumbnail_Project-06.png',
            'stacks'      => [
                'PHP',
                'HTML',
                'CSS',
                'JavaScript'
            ]
        ]
    ];
?>


<div class="flex flex-col items-center text-gray-100 text-center gap-10 py-20">
    <div class=" title">
        <h2 class="projects-title text-red-400 text-[20px]"><?= $projects_title ?></h2>
        <span class="projects-subtitle text-[24px]"><?= $projects_subtitle ?></span>
    </div>
    <div class="projects grid grid-cols-2 gap-6 w-full">
        <?php foreach ($projects as $project ) : ?>
            <div class="project bg-gray-800 rounded-2xl p-4 flex gap-4 flex-1">
                <img class="w-1/3 h-auto object-cover rounded-2xl" src="<?= $project['image'] ?>" alt="Project image">
                <div class="text-left flex flex-col gap-2 flex-2">
                    <h3 class="project-title text-[16px]"><?= $project['name'] ?></h3>
                    <p class="project-descritpion text-[14px] text-gray-400"><?= $project['description'] ?></p>
                    <div class="stack">
                        <ul class="flex flex-row gap-2 text-gray-900 flex-wrap text-[12px]">
                            <?php foreach ( $project['stacks'] as $position => $stack ) : ?>
                            <li class="bg-<?= $colors[$position] ?>-400 py-1 px-4 flex items-center justify-center rounded-full"><?= $stack ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>