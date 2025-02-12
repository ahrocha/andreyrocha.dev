<?php

return [
    'name' => 'Andrey Hurpia da Rocha',
    'contact' => [
        'phone' => '(11) 99985-6740',
        'email' => 'ahrocha@gmail.com',
        'github' => 'https://github.com/ahrocha',
        'linkedin' => 'https://www.linkedin.com/in/andrey-hurpia-da-rocha-aa75741b/',
    ],
    'competences' => [
        'primary' => 'PHP, Linux, Cloud, AWS, Docker, Symfony',
        'secondary' => 'Laravel, Python, React, NextJS, Javascript, Django, NestJS',
        'supporting' => 'Java, Spring',
        'languages' => 'Português (nativo), Inglês (B2), Francês intermediário',
    ],
    'experience' => [
        [
            'company' => 'FloSports (via X-Team)',
            'position' => 'Desenvolvedor PHP',
            'period' => 'Fevereiro de 2024 a Dezembro de 2024',
            'description' => 'FloSports é uma plataforma líder de streaming esportivo. Trabalhei no FloCollege, um novo setor focado em esportes universitários, sendo responsável por manter e evoluir o sistema principal, construído em Symfony 5.4 e PHP 7.4.',
            'responsibilities' => [
                'Desenvolvi workflows baseados em eventos e mecanismos de cache para garantir a performance do sistema.',
                'Refatorei código legado, movendo lógica dos controladores para serviços, melhorando escalabilidade e manutenção.',
                'Realizei otimizações no schema do banco de dados e em queries MySQL.',
                'Participei do desenvolvimento backend de um projeto em NestJS com TypeScript.',
                'Utilizei DataDog para logging e monitoramento da aplicação.',
                'Trabalhei com AWS, incluindo AWS CloudSearch.',
                'Melhorei a configuração do Docker e documentei o ambiente de desenvolvimento.',
                'Participei de sprints ágeis com Jira, planejamento de tarefas e retrospectivas.',
            ],
            'tags' => ['PHP', 'Symfony', 'NestJS', 'TypeScript', 'MySQL', 'AWS', 'CloudSearch', 'Docker', 'DataDog'],
        ],
        [
            'company' => 'The SilverLogic',
            'position' => 'Engenheiro de Software',
            'period' => 'Março de 2022 a Fevereiro de 2024',
            'description' => 'A SilverLogic é uma empresa de desenvolvimento de software sob medida. Trabalhei no desenvolvimento de aplicações, criando novas funcionalidades, corrigindo bugs e otimizando sistemas.',
            'responsibilities' => [
                'Desenvolvimento de um aplicativo web para gerenciamento de controladores de iluminação.',
                'Utilização de NextJS e Python (Django) no desenvolvimento front-end e back-end.',
                'Integração com Stripe para pagamentos e Twilio para notificações SMS.',
                'Implementação de ReactQuery para otimizar o gerenciamento de dados.',
                'Melhoria da ferramenta de exportação para Excel usando React.',
            ],
            'tags' => ['NextJS', 'Python', 'Django', 'React', 'Stripe', 'Twilio', 'ReactQuery', 'Excel'],
        ],
        [
            'company' => 'Ohub',
            'position' => 'Desenvolvedor Full Stack',
            'period' => 'Janeiro de 2015 a Fevereiro de 2017',
            'description' => 'Ohub é uma startup de marketplace B2B onde empresas têm acesso a propostas de negócios. Meu trabalho envolveu o desenvolvimento de uma interface mobile utilizando Material Design Lite e a implementação de funcionalidades em PHP para a plataforma.',
            'responsibilities' => [
                'Desenvolvi uma interface web responsiva utilizando Material Design Lite para melhorar a usabilidade em dispositivos móveis e desktops.',
                'Integrei APIs, incluindo Twilio para autenticação 2FA/MFA e validação telefônica, idWall para verificação de identidade e MailboxLayer para validação de e-mails.',
                'Implementei processamento de pagamentos com Iugu para suportar transações dentro da plataforma.',
                'Gerenciei a infraestrutura AWS, incluindo EC2 e RDS, garantindo escalabilidade e confiabilidade do sistema.',
                'Desenvolvi um aplicativo Android que notificava os usuários sobre novas propostas de negócios, melhorando o engajamento e o tempo de resposta.',
            ],
            'tags' => ['PHP', 'Material Design Lite', 'Twilio', 'idWall', 'MailboxLayer', 'Iugu', 'AWS', 'EC2', 'RDS', 'Android'],
        ],
        [
            'company' => 'Freelancer',
            'position' => 'Desenvolvedor Full Stack',
            'period' => 'Agosto de 2009 a Dezembro de 2014',
            'description' => 'Trabalhei em diversos projetos como freelancer, focando principalmente no desenvolvimento web, configuração de servidores e soluções para marketing por e-mail.',
            'responsibilities' => [
                'Desenvolvi um sistema de marketing por e-mail multi-servidor, capaz de processar e-mails retornados e gerar relatórios analíticos.',
                'Configurei servidores de e-mail para garantir alta entregabilidade, utilizando técnicas como SPF, DKIM e IP Warming.',
                'Projetei e implementei soluções personalizadas de CMS para agências e web designers, utilizando PHP, jQuery e JavaScript.',
                'Gerenciei servidores dedicados e virtuais para hospedagem de múltiplos sites e aplicações.',
                'Forneci serviços completos de desenvolvimento full stack, garantindo otimizações de desempenho e segurança para projetos de clientes.',
            ],
            'tags' => ['PHP', 'Email Marketing', 'SPF', 'DKIM', 'IP Warming', 'jQuery', 'JavaScript', 'Gerenciamento de Servidores', 'CMS'],
        ],
        
    ],
    'education' => [
        [
            'institution' => 'FIAP - Faculdade de Informática e Administração Paulista',
            'degree' => 'MBA Java Applications Development - SOA and IoT',
            'period' => 'Outubro 2015 a Outubro 2016',
        ],
        [
            'institution' => 'Faculdade Cásper Líbero',
            'degree' => 'Graduação em Comunicação Social',
            'period' => '2000 - 2003',
        ],
    ],
];
