<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer>

			<div class="logo">
				<img class="img-responsive" src="https://furiapr.com.br/loja/wp-content/themes/loja18/img/tfi-rodape.jpg">
			</div>
			<div class="more-info">

				<div class="block">
					<ul>
						<li><a href="https://furiapr.com.br/">Página Inicial</a></li>
						<li><a href="https://furiapr.com.br/a-torcida">Torcida</a></li>
						<li><a href="https://furiapr.com.br/noticias">Notícias</a></li>
						<li><a href="https://furiapr.com.br/parceiros">Parceiros</a></li>
						<li><a href="https://furiapr.com.br/projetos">Projetos</a></li>
						<li><a href="https://furiapr.com.br/fotos">Fotos</a></li>
						<li><a href="https://furiapr.com.br/contato">Contato</a></li>
					</ul>
				</div>

				<div class="block facebook">
					<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/TFI1993" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=315569751886817&amp;container_width=484&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FTFI1993&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 340px; height: 214px;"><iframe name="f34a6638efb6ac2" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" style="border: medium none; visibility: visible; width: 340px; height: 214px;" src="https://www.facebook.com/v2.11/plugins/page.php?adapt_container_width=true&amp;app_id=315569751886817&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FQX17B8fU-Vm.js%3Fversion%3D42%23cb%3Df2c99ae162837ae%26domain%3Dfuriapr.com.br%26origin%3Dhttp%253A%252F%252Ffuriapr.com.br%252Ffdc678f273fea2%26relation%3Dparent.parent&amp;container_width=484&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FTFI1993&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" class="" width="1000px" height="1000px" frameborder="0"></iframe></span></div>

					<p>
						<a href="https://www.google.com.br/maps/place/R.+Dr.+Jo%C3%A3o+Skalski,+231+-+Jardim+Bot%C3%A2nico,+Curitiba+-+PR,+80210-030/@-25.4390093,-49.2556344,17z/data=!3m1!4b1!4m5!3m4!1s0x94dce450a9490291:0x21c6b50d4079e617!8m2!3d-25.4390093!4d-49.2534457" target="_blank">Rua Dr. João Skalski, 231</a> | (41) 3029-0993
					</p>
				</div>

			</div>


	</footer>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/loja18/slick/slick.min.js"></script>

<script type="text/javascript">

jQuery(document).ready(function($){
	$('.slider').slick({
	 dots: true,
	 arrows: true,
	 infinite: true,
	 speed: 500,
	 fade: true,
	 cssEase: 'linear'
	});
});

</script>

</body>
</html>
