<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div style="display: none;" id="content" class="site-content">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

</div><!-- #page -->



<div class="wrap-geo shar-t1">
	<?php
	get_template_part( 'template-custom/header' ); 
	get_template_part( 'template-custom/top-menu' ); 
	get_template_part( 'template-custom/okna/main/okna_main1' );
	?>
</div>
<?php
get_template_part( 'template-custom/okna/main/es2_okna_2' ); /**ЛУЧШИЕ ЦЕНЫ НА ОКНА < */
get_template_part( 'template-custom/okna/main/es3_okna_3' ); /**ПРОИЗВОДСТВО “ПЛАСТИКОВЫЕ ОКНА ЦЕНЫ” 100% ДЕШЕВЛЕ! */
get_template_part( 'template-custom/okna/main/es4_okna' ); /**Нашли ещё дешевле? */
get_template_part( 'template-custom/okna/main/es5_okna' ); /**ОКНА СЕЙЧАС - ДЕНЬГИ ПОТОМ */
get_template_part( 'template-custom/okna/main/es6_okna' ); /**ЦЕНЫ НА ОКНА В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА */
get_template_part( 'template-custom/okna/main/es7_okna' ); /**ПОЧЕМУ ЗАКАЗЫВАТЬ В КОМПАНИИ «КУПИТЬ ШКАФ» ВСЕГДА ЛУЧШЕ? */
get_template_part( 'template-custom/okna/main/es8_okna' ); /**смс скидка */
get_template_part( 'template-custom/okna/main/es9_okna' ); /**ПОЛУЧИТЕ СВОИ 1000 РУБЛЕЙ ЗА ПЕРВЫЙ ЗАКАЗ! */
get_template_part( 'template-custom/okna/main/es10_okna' ); /**УСТАНОВКА ОКОН 1 ДЕНЬ?
ЭТО РЕАЛЬНО! */
get_template_part( 'template-custom/okna/main/es11_okna' ); /**КУПИТЕ ОКНА ИЗ НАДЕЖНОГО ПРОФИЛЯ */
get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
get_template_part( 'template-custom/okna/main/es13_okna' ); /**УСТАНОВКА ОКОН “ДО” И “ПОСЛЕ” */
get_template_part( 'template-custom/okna/main/es14_okna' ); /**НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ */
get_template_part( 'template-custom/okna/main/es15_okna'); /*СЧЁТЧИК*/
get_template_part( 'template-custom/okna/main/es16_okna'); /*ВЫГОДНОЕ ПРЕДЛОЖЕНИЕ! */
get_template_part( 'template-custom/okna/main/es17_okna'); /*Мастер по замерам посоветует как сэкономить и все рассчитает за 20 минут*/
get_template_part( 'template-custom/okna/main/es18_okna'); /*отзывы*/
get_template_part( 'template-custom/okna/main/es19_okna');  /*Бесплатная консультация*/

get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
get_template_part( 'template-custom/footer-main' ); 



get_footer();
