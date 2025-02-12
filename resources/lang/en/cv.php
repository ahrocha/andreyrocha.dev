<?php

return [
    'name' => 'Andrey Hurpia da Rocha',
    'contact' => [
        'phone' => '+55 11 99985-6740',
        'email' => 'ahrocha@gmail.com',
        'github' => 'https://github.com/ahrocha',
        'linkedin' => 'https://www.linkedin.com/in/andrey-hurpia-da-rocha-aa75741b/',
    ],
    'competences' => [
        'primary' => 'PHP, Linux Server, Cloud (AWS)',
        'secondary' => 'Symfony, Docker',
        'supporting' => 'Java, Spring, Android, React, Node, Python',
        'languages' => 'Portuguese (native), English (fluent), French (intermediate)',
    ],
    'experience' => [
        [
            'company' => 'FloSports (via X-Team)',
            'position' => 'PHP Developer',
            'period' => 'February 2024 to December 2024',
            'description' => 'FloSports is a major sports streaming platform providing live and on-demand content. I worked on FloCollege, a new division focused on college sports. I was responsible for maintaining and evolving the main system, built with Symfony 5.4 and PHP 7.4.',
            'responsibilities' => [
                'Developed and maintained event-driven workflows and caching mechanisms to ensure system performance and reliability.',
                'Refactored and optimized legacy code by moving logic from controllers to services, improving maintainability and scalability.',
                'Performed database schema updates and optimized MySQL queries to support new features and improve efficiency.',
                'Collaborated on a TypeScript-based NestJS project for two sprints, contributing to backend architecture and API development.',
                'Used DataDog for logging and monitoring to ensure application stability.',
                'Worked extensively with AWS services, including AWS CloudSearch.',
                'Enhanced Docker configuration and wrote documentation to improve the development environment.',
                'Participated in agile sprints, task planning, and retrospectives using Jira.',
            ],
            'tags' => ['PHP', 'Symfony', 'NestJS', 'TypeScript', 'MySQL', 'AWS', 'CloudSearch', 'Docker', 'DataDog'],
        ],
        [
            'company' => 'The SilverLogic',
            'position' => 'Software Engineer',
            'period' => 'March 2022 to February 2024',
            'description' => 'The SilverLogic is a custom software development company. I worked on multiple projects, creating features, fixing bugs, and optimizing systems.',
            'responsibilities' => [
                'Developed a web application for managing lighting controllers (Pharos, Madrix, S-Play) used in buildings, bridges, and installations.',
                'Utilized NextJS and Python (Django) for the development of front-end and back-end components.',
                'Integrated Stripe for payment processing and Twilio for SMS notifications.',
                'Implemented ReactQuery to improve data handling and user experience.',
                'Worked on an internal scheduling and treatment system for an aesthetic clinic, adding new features and improving UI components.',
                'Refactored and enhanced the Excel export tool using React.',
                'Documented workflows and commands to improve system clarity and maintainability.',
            ],
            'tags' => ['NextJS', 'Python', 'Django', 'React', 'Stripe', 'Twilio', 'ReactQuery', 'Excel'],
        ],
        [
            'company' => 'BairesDev',
            'position' => 'Back End Developer',
            'period' => 'September 2021 to March 2022',
            'description' => 'Worked on an e-commerce brand, focusing on PHP, VueJS, and NodeJS-based microservices. Helped modernize a legacy PHP application.',
            'responsibilities' => [
                'Developed middleware features in PHP and VueJS to integrate multiple microservices.',
                'Upgraded legacy PHP code from version 5.6 to 7.1 to improve security and performance.',
                'Worked in a small team with daily standups and occasional technical discussions.',
            ],
            'tags' => ['PHP', 'VueJS', 'NodeJS', 'Microservices'],
        ],
        [
            'company' => 'Pravaler',
            'position' => 'Fullstack Developer',
            'period' => 'March 2017 to August 2021',
            'description' => 'Pravaler is a fintech that provides student loans in Brazil. I worked on both monolithic and microservice architectures, enhancing financial systems and improving automation.',
            'responsibilities' => [
                'Developed and maintained features in a PHP legacy system, later contributing to its migration to microservices using Symfony and Laravel.',
                'Configured and utilized AWS services (EC2, SQS, DynamoDB, Lambda) and Jenkins for DevOps automation.',
                'Redesigned the contract generation system, reducing processing time from 30s to 10s.',
                'Implemented monitoring and alerting for process failures, improving system reliability.',
            ],
            'tags' => ['PHP', 'Symfony', 'Laravel', 'AWS', 'Jenkins', 'Microservices', 'Grafana'],
        ],
        [
            'company' => 'Ohub',
            'position' => 'Full Stack Developer',
            'period' => 'January 2015 to February 2017',
            'description' => 'Ohub is a B2B marketplace startup where companies have full access to business proposals. My work involved developing a mobile interface using Material Design Lite and implementing PHP features for the platform.',
            'responsibilities' => [
                'Developed a responsive web interface using Material Design Lite to enhance usability across mobile and desktop.',
                'Integrated APIs, including Twilio for 2FA/MFA and phone validation, idWall for identity verification, and MailboxLayer for email validation.',
                'Implemented payment processing with Iugu to support transactions within the platform.',
                'Managed AWS infrastructure, including EC2 and RDS, to ensure system scalability and reliability.',
                'Developed an Android application that notified users of new business proposals, improving engagement and response time.',
            ],
            'tags' => ['PHP', 'Material Design Lite', 'Twilio', 'idWall', 'MailboxLayer', 'Iugu', 'AWS', 'EC2', 'RDS', 'Android'],
        ],
        [
            'company' => 'Freelancer',
            'position' => 'Full Stack Developer',
            'period' => 'August 2009 to December 2014',
            'description' => 'Worked on a variety of freelance projects, primarily focusing on web development, server configuration, and email marketing solutions.',
            'responsibilities' => [
                'Developed a multi-server email marketing system capable of processing bounce emails and generating analytical reports.',
                'Configured mail servers for optimal deliverability, including SPF, DKIM, and IP Warming techniques.',
                'Designed and implemented custom CMS solutions for agencies and web designers using PHP, jQuery, and JavaScript.',
                'Managed dedicated and virtual servers for hosting multiple websites and applications.',
                'Provided full-stack development services, ensuring performance and security optimizations for client projects.',
            ],
            'tags' => ['PHP', 'Email Marketing', 'SPF', 'DKIM', 'IP Warming', 'jQuery', 'JavaScript', 'Server Management', 'CMS'],
        ],
        
    ],
    'education' => [
        [
            'institution' => 'FIAP - Faculdade de Informática e Administração Paulista',
            'degree' => 'MBA Java Applications Development - SOA and IoT',
            'period' => 'October 2015 to October 2016',
        ],
        [
            'institution' => 'Faculdade Cásper Líbero',
            'degree' => 'Graduation in Social Communication',
            'period' => '2000 - 2003',
        ],
    ],
];
