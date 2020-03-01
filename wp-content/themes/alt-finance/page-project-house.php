<?php wp_head(); ?>

<?php get_header(); ?>
<?php wp_nav_menu(array(
    'theme_location' => 'header_menu',
    'container' => null,
    'menu_class' => 'menu'
)); ?>

<link rel="stylesheet" href="./resources/css/page-service.css">
<script src="./resources/js/page-title.js" defer></script>

<div class="container page-services" style="padding-bottom: 0;">
    <div class="c-main">
        <div class="page-service-title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/projects/house/1.jpg'); background-size: contain;
        background-repeat: no-repeat;">
            <h2>Всплывающий дом</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi necessitatibus molestiae iusto sapiente est praesentium eum, in nostrum rerum magni omnis inventore ducimus libero voluptatibus blanditiis? Dolorem corrupti omnis quibusdam.</p>
        </div>
    </div>
</div>

<div class="container page-services p-s-s">

    <div class="c-main">

        <div class="page-service-switcher">

            <div class="switcher-act">

                <p class="s-a active">Что это и для чего</p>
                <p class="s-a">Как это работает</p>

            </div>

            <div class="switcher-content">

                <div class="s-c">

                    <h3 class="service-subtitle">Что это и для чего</h3>

                    <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate molestias laborum quaerat quibusdam repudiandae a sed, libero distinctio? Corporis, mollitia facilis. Saepe at tenetur ut adipisci rerum? Nam, incidunt iusto!</p>

                    <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate molestias laborum quaerat quibusdam repudiandae a sed, libero distinctio? Corporis, mollitia facilis. Saepe at tenetur ut adipisci rerum? Nam, incidunt iusto!</p>

                    <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate molestias laborum quaerat quibusdam repudiandae a sed, libero distinctio? Corporis, mollitia facilis. Saepe at tenetur ut adipisci rerum? Nam, incidunt iusto!</p>
                </div>

                <div class="s-c" style="display: none">

                    <h3 class="service-subtitle">Как это работает</h3>

                    <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate molestias laborum quaerat quibusdam repudiandae a sed, libero distinctio? Corporis, mollitia facilis. Saepe at tenetur ut adipisci rerum? Nam, incidunt iusto!</p>
                    
                    <ul class="service-list">
                        <li>пред проектные работы (исследование рынка, технико-экономическое обоснование проекта, бизнес-планирование и т.п.), которые призваны ответить на вопрос "будет ли экономический эффект от данного инновационного проекта?"</li>
                        <li>разработку и предоставление технологий, необходимых для осуществления строительных работ, производственной деятельности, обеспечивающих подготовку данного проекта, а также технологий, требуемых на стадии эксплуатации проекта;</li>
                        <li>работы, связанные с непосредственной подготовкой к осуществлению проекта (подготовка контрактов, подбор подрядчиков для выполнения работ, то есть обеспечения всего необходимого для осуществления проекта);</li>
                        <li>проведение строительных работ, производство и комплектная поставка оборудования, сдача производства "под ключ";</li>
                        <li>работы, связанные с оптимизацией процессов эксплуатации, управления предприятием, сервисное обслуживание, подбор и подготовка кадров и т. д..</li>
                    </ul>
                    
                </div>

            </div>
        </div>
    </div>
</div>

<!-- END IT -->


<?php get_footer(); ?>
<?php wp_footer(); ?>

<script src="./resources/js/switcher.js"></script>
</body>
</html>