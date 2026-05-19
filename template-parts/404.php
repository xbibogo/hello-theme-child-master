<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Editor-only fallbacks for isolated linting when WordPress is not loaded.
if ( ! function_exists( 'esc_html__' ) ) {
	function esc_html__( $text, $domain = 'default' ) {
		unset( $domain );
		return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' );
	}
}

if ( ! function_exists( 'esc_url' ) ) {
	function esc_url( $url ) {
		return filter_var( (string) $url, FILTER_SANITIZE_URL );
	}
}

if ( ! function_exists( 'home_url' ) ) {
	function home_url( $path = '/' ) {
		return (string) $path;
	}
}

?>
<main id="content" class="site-main">

	<div style="text-align:center; padding:60px 20px;">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="220" height="220" style="display:block; margin:0 auto 30px auto;">
			<!-- body -->
			<ellipse cx="100" cy="130" rx="55" ry="45" fill="#c8a97e"/>
			<!-- head -->
			<circle cx="100" cy="72" r="38" fill="#c8a97e"/>
			<!-- left ear -->
			<ellipse cx="72" cy="48" rx="16" ry="22" fill="#a0784e" transform="rotate(-15 72 48)"/>
			<!-- right ear -->
			<ellipse cx="128" cy="48" rx="16" ry="22" fill="#a0784e" transform="rotate(15 128 48)"/>
			<!-- snout -->
			<ellipse cx="100" cy="85" rx="18" ry="13" fill="#e8c9a0"/>
			<!-- nose -->
			<ellipse cx="100" cy="79" rx="8" ry="5" fill="#333"/>
			<!-- left eye -->
			<circle cx="85" cy="65" r="6" fill="#333"/>
			<circle cx="87" cy="63" r="2" fill="#fff"/>
			<!-- right eye -->
			<circle cx="115" cy="65" r="6" fill="#333"/>
			<circle cx="117" cy="63" r="2" fill="#fff"/>
			<!-- mouth -->
			<path d="M91 91 Q100 99 109 91" stroke="#a0784e" stroke-width="2" fill="none" stroke-linecap="round"/>
			<!-- tail -->
			<path d="M155 120 Q185 90 170 70" stroke="#c8a97e" stroke-width="12" fill="none" stroke-linecap="round"/>
			<!-- front left leg -->
			<rect x="72" y="165" width="18" height="30" rx="9" fill="#c8a97e"/>
			<!-- front right leg -->
			<rect x="110" y="165" width="18" height="30" rx="9" fill="#c8a97e"/>
		</svg>
		<h1 style="font-size:3rem; font-weight:800; margin-bottom:10px; color:#111; display:block; visibility:visible;">
			404 &#8212; Oh no!
		</h1>
	</div>

	<div class="page-content" style="text-align:center;">
		<p style="font-size:1.1rem; color:#666;"><?php echo esc_html__( 'Looks like this page ran away like a dog off a leash.', 'hello-elementor' ); ?></p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:inline-block; margin-top:20px; padding:12px 28px; background:#000; color:#fff; border-radius:8px; text-decoration:none; font-size:1rem;">
			<?php echo esc_html__( 'Go Home', 'hello-elementor' ); ?>
		</a>

	</div>

</main>
