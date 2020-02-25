<?php wp_head(); ?>

<?php get_header(); ?>
<?php wp_nav_menu(array(
    'theme_location' => 'header_menu',
    'container' => null,
    'menu_class' => 'menu'
)); ?>

<iframe width="560" height="315" src="https://www.youtube.com/embed/3nkMtNvm13Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<video controls autoplay="on" width="600px" height="400px">
    <source src="./resources/Со стороны.mp4">
</video>

<audio src="./resources/kod.mp3" controls style="width: 100%" id="aud"></audio>

<a href="./resources/kod.mp3">Скачать</a>

<script>

    document.getElementById('aud').volume = 0.05;
    alert(myVideo.volume);

</script>

<?php get_footer(); ?>
<?php wp_footer(); ?>