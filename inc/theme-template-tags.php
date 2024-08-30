<?php

/**
 * This function open the main content.
 */
function theme_before_main_content() {
	?>
	<main id="main-content" class="main-content overflow-hidden mt-auto">
	<?php
}

add_action( 'before_main_content', 'theme_before_main_content' );

/**
 * This function closes the main content.
 */
function theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'theme_after_main_content' );

/**
 * This function open the post content.
 */
function theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'theme_before_post_content' );

/**
 * This function closes the post content.
 */
function theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'theme_after_post_content' );


/**
 * This theme logo.
 */
function theme_logo() {
	?>
	<svg width="252" height="16" viewBox="0 0 252 16" fill="none" xmlns="http://www.w3.org/2000/svg">
	<g clip-path="url(#clip0_2588_1082)">
	<path d="M14.5309 15.3147H11.3518V14.629C12.7141 14.629 12.9407 14.4008 12.9407 13.0293V8.22922H4.31357V12.8012C4.31357 14.1727 4.5402 14.6302 5.90251 14.6302V15.316H0V14.6302C1.58894 14.6302 1.81684 14.1727 1.81684 12.8012V2.51521C1.81684 1.37189 1.59021 1.14374 0.227901 1.14374V0.458008H5.67716V1.14374C4.08821 1.14374 4.08821 1.60132 4.08821 2.51521V7.08718H12.7166V2.51521C12.7166 1.37189 12.49 1.14374 11.1277 1.14374V0.458008H16.8036V1.14374C15.2146 1.14374 15.2146 1.60132 15.2146 2.51521V13.0293C15.2146 14.4008 15.4413 14.629 17.0315 14.629V15.3147H14.5335H14.5309Z" fill="#D2E8F7"/>
	<path d="M26.3376 1.14368C23.3864 1.60126 21.5695 4.80049 22.0241 8.68674C22.4786 12.3436 25.2032 15.0865 28.1545 14.8583C31.1057 14.4007 32.9226 11.2015 32.468 7.31527C32.0135 3.65846 29.2889 0.91553 26.3376 1.14368ZM27.2467 15.7722C22.9331 15.7722 19.5273 12.3436 19.5273 8.00101C19.5273 3.65846 22.9319 0.228516 27.2467 0.228516C31.5615 0.228516 34.9661 3.65718 34.9661 7.99972C34.9661 12.3423 31.5603 15.7709 27.2467 15.7709V15.7722Z" fill="#D2E8F7"/>
	<path d="M39.5064 12.3432V4.34255H37.2363V3.42866C39.0532 3.42866 39.961 2.0572 40.6421 0H41.5499V2.97108H46.5446V4.1144H41.5499V10.9717C41.5499 13.4865 41.5499 15.5437 46.5446 13.2571L46.7713 13.9428C40.1863 18.0572 39.5052 13.7147 39.5052 12.3432H39.5064Z" fill="#D2E8F7"/>
	<path d="M56.0797 1.59937C54.0362 1.59937 52.2194 3.88472 52.2194 6.85708H56.9875C59.2576 6.85708 59.9387 6.62893 59.9387 5.48561C59.9387 3.886 58.3498 1.37122 56.0784 1.59937H56.0797ZM49.7227 8.45669C49.7227 3.42842 52.6739 0.456055 56.3076 0.456055C60.1679 0.456055 62.438 3.42714 62.2114 6.8558C62.2114 7.99911 61.9848 7.76968 61.3036 7.76968H52.2219C52.2219 10.7408 53.8109 16.6842 61.9848 13.2555L62.2114 13.9413C53.1297 18.5133 49.7239 12.798 49.7239 8.45541L49.7227 8.45669Z" fill="#D2E8F7"/>
	<path d="M75.3814 15.5422H65.1641V14.8565C66.9809 14.8565 66.9809 14.3989 66.9809 13.0275V3.65663C66.9809 2.05701 66.7543 1.37128 65.392 1.37128V0.685547H71.2957V1.37128C69.9334 1.37128 69.4789 1.59943 69.4789 3.42848V12.5712C69.4789 14.4002 70.1601 14.6283 71.9769 14.6283C73.7937 14.6283 75.1561 14.4002 75.6093 12.1136L76.2905 12.3417L75.3827 15.5422H75.3814Z" fill="#D2E8F7"/>
	<path d="M95.5864 8.45676C91.7261 8.45676 89.456 9.82822 89.456 11.6573C89.456 13.2569 90.5917 15.9998 95.5864 12.8006V8.45804V8.45676ZM98.0844 15.7717C96.9488 15.7717 95.8143 15.0859 95.8143 13.7145C89.4573 18.057 86.9593 14.4002 87.1859 12.1149C87.4126 9.60007 90.1372 7.31472 95.8143 7.31472V4.57179C95.8143 2.28644 95.3598 1.60071 93.7709 1.60071C91.5008 1.60071 89.9106 3.20033 89.9106 4.57179C89.9106 5.02937 88.7749 5.48568 88.3216 5.48568C87.4138 5.48568 87.6405 4.11421 88.095 3.42848C89.2307 2.05701 91.7274 0.685547 94.2254 0.685547C96.4955 0.685547 97.8578 1.82886 97.8578 4.11421V12.343C97.8578 13.7145 97.8578 14.8578 98.9935 14.6283C99.448 14.6283 99.9013 14.4002 100.356 13.9426L100.81 14.4002C99.9026 15.0859 99.2214 15.7717 98.0857 15.7717H98.0844Z" fill="#D2E8F7"/>
	<path d="M118.292 3.42848V15.5422H117.156C116.021 14.1708 107.62 5.25624 106.939 3.88478V11.8854C106.939 14.4002 107.166 14.8565 108.983 14.8565V15.5422H103.533V14.8565C105.122 14.8565 105.577 14.3989 105.577 11.656V3.88606C105.577 1.82886 105.122 1.37128 103.307 1.37128V0.685547H106.939C108.075 2.05701 116.021 10.7434 116.93 11.8854V3.42848C116.93 1.82886 116.475 1.37128 114.886 1.37128V0.685547H120.109V1.37128C118.52 1.37128 118.292 1.82886 118.292 3.42848Z" fill="#D2E8F7"/>
	<path d="M138.273 1.59943H135.775V12.5712C135.775 14.4002 136.683 14.6283 138.5 14.6283C141.224 14.6283 144.404 12.343 144.176 8.2286C144.176 4.34236 141.906 1.59943 138.272 1.59943H138.273ZM138.728 15.5422H131.689V14.8565C133.278 14.8565 133.506 14.3989 133.506 13.0275V2.74274C133.506 1.37128 133.052 1.37128 131.689 1.37128V0.685547H138.046C141.907 0.685547 145.766 2.28516 146.447 7.54287C147.128 12.5711 143.041 15.5422 138.728 15.5422Z" fill="#D2E8F7"/>
	<path d="M156.358 1.14331C154.315 1.14331 152.498 3.42866 152.498 6.40102H157.266C159.536 6.40102 160.217 6.17287 160.217 5.02956C160.217 3.42994 158.628 0.915165 156.357 1.14331H156.358ZM150 8.00064C150 2.97236 152.951 0 156.585 0C160.445 0 162.715 2.97108 162.489 6.39974C162.489 7.54306 162.262 7.31363 161.581 7.31363H152.499C152.499 10.2847 154.088 16.2281 162.262 12.7995L162.489 13.4852C153.407 18.0572 150.001 12.3419 150.001 7.99936L150 8.00064Z" fill="#D2E8F7"/>
	<path d="M168.923 1.60007V8.4574C172.783 8.4574 174.145 7.08593 173.918 5.02873C173.691 2.2858 171.874 0.914337 168.923 1.60007ZM178.459 15.5429C174.599 15.771 172.102 10.5146 170.966 9.37128C170.512 9.37128 169.604 9.59943 168.923 9.59943V13.2562C168.923 14.8559 169.149 15.0853 170.966 15.0853V15.771H165.062V15.0853C166.651 15.0853 166.879 14.8571 166.879 13.4857V3.65727C166.879 2.05765 166.425 1.82822 165.062 1.82822V1.14249H169.376C173.69 0.914337 175.961 2.2858 176.188 5.48503C176.188 7.77038 174.599 8.9137 173.463 9.37128C175.506 11.8861 177.323 15.0853 180.048 15.3147V16.0005L178.459 15.5429Z" fill="#D2E8F7"/>
	<path d="M198.668 8.45676C194.807 8.45676 192.537 9.82822 192.537 11.6573C192.537 13.2569 193.673 15.9998 198.668 12.8006V8.45804V8.45676ZM201.165 15.7717C200.029 15.7717 198.894 15.0859 198.894 13.7145C192.537 18.057 190.039 14.4002 190.266 12.1149C190.493 9.60007 193.217 7.31472 198.894 7.31472V4.57179C198.894 2.28644 198.44 1.60071 196.851 1.60071C194.581 1.60071 192.991 3.20033 192.991 4.57179C192.991 5.02937 191.855 5.48568 191.402 5.48568C190.494 5.48568 190.721 4.11421 191.175 3.42848C192.311 2.05701 194.807 0.685547 197.305 0.685547C199.576 0.685547 200.938 1.82886 200.938 4.11421V12.343C200.938 13.7145 200.938 14.8578 202.074 14.6283C202.528 14.6283 202.981 14.4002 203.436 13.9426L203.89 14.4002C202.983 15.0859 202.301 15.7717 201.166 15.7717H201.165Z" fill="#D2E8F7"/>
	<path d="M215.014 8.45676C211.154 8.45676 208.884 9.82822 208.884 11.6573C208.884 13.2569 210.02 15.9998 215.014 12.8006V8.45804V8.45676ZM217.286 15.7717C216.15 15.7717 215.016 15.0859 215.016 13.7145C208.658 18.057 206.16 14.4002 206.387 12.1149C206.614 9.60007 209.338 7.31472 215.016 7.31472V4.57179C215.016 2.28644 214.561 1.60071 212.972 1.60071C210.702 1.60071 209.112 3.20033 209.112 4.57179C209.112 5.02937 207.976 5.48568 207.523 5.48568C206.615 5.48568 206.842 4.11421 207.523 3.42848C208.658 2.05701 211.155 0.685547 213.653 0.685547C215.923 0.685547 217.286 1.82886 217.286 4.11421V12.343C217.286 13.7145 217.286 14.8578 218.421 14.6283C218.876 14.6283 219.329 14.4002 219.784 13.9426L220.238 14.4002C219.33 15.0859 218.421 15.7717 217.287 15.7717H217.286Z" fill="#D2E8F7"/>
	<path d="M226.366 1.60007V8.4574C230.226 8.4574 231.589 7.08593 231.361 5.02873C231.361 2.2858 229.317 0.914337 226.366 1.60007ZM236.129 15.5429C232.269 15.771 229.772 10.5146 228.636 9.37128C228.182 9.37128 227.274 9.59943 226.593 9.59943V13.2562C226.593 14.8559 226.819 15.0853 228.636 15.0853V15.771H222.732V15.0853C224.321 15.0853 224.549 14.8571 224.549 13.4857V3.65727C224.549 2.05765 224.095 1.82822 222.732 1.82822V1.14249H227.046C231.36 0.914337 233.631 2.2858 233.858 5.48503C233.858 7.77038 232.269 8.9137 231.133 9.37128C233.176 11.8861 234.993 15.0853 237.718 15.3147V16.0005L236.129 15.5429Z" fill="#D2E8F7"/>
	<path d="M244.984 1.59937C242.941 1.59937 241.124 3.88472 241.124 6.85708H245.892C248.162 6.85708 248.843 6.62893 248.843 5.48561C248.843 3.886 247.254 1.37122 244.983 1.59937H244.984ZM238.627 8.45669C238.627 3.42842 241.578 0.456055 245.212 0.456055C249.072 0.456055 251.342 3.42714 251.116 6.8558C251.116 7.99911 250.889 7.76968 250.208 7.76968H241.126C241.126 10.7408 242.715 16.6842 250.889 13.2555L251.116 13.9413C242.034 18.5133 238.628 12.798 238.628 8.45541L238.627 8.45669Z" fill="#D2E8F7"/>
	</g>
	<defs>
	<clipPath id="clip0_2588_1082">
	<rect width="251.13" height="16" fill="white"/>
	</clipPath>
	</defs>
	</svg>

	<?php
}

add_action( 'theme_logo', 'theme_logo' );

function theme_logo_dark() {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" width="252" height="16" viewBox="0 0 252 16" fill="none">
	<g clip-path="url(#clip0_99_839)">
		<path d="M14.5309 15.3147H11.3518V14.629C12.7141 14.629 12.9407 14.4008 12.9407 13.0293V8.22922H4.31357V12.8012C4.31357 14.1727 4.5402 14.6302 5.90251 14.6302V15.316H0V14.6302C1.58894 14.6302 1.81684 14.1727 1.81684 12.8012V2.51521C1.81684 1.37189 1.59021 1.14374 0.227901 1.14374V0.458008H5.67716V1.14374C4.08821 1.14374 4.08821 1.60132 4.08821 2.51521V7.08718H12.7166V2.51521C12.7166 1.37189 12.49 1.14374 11.1277 1.14374V0.458008H16.8036V1.14374C15.2146 1.14374 15.2146 1.60132 15.2146 2.51521V13.0293C15.2146 14.4008 15.4413 14.629 17.0315 14.629V15.3147H14.5335H14.5309Z" fill="#0E324A"/>
		<path d="M26.3376 1.14368C23.3864 1.60126 21.5695 4.80049 22.0241 8.68674C22.4786 12.3436 25.2032 15.0865 28.1545 14.8583C31.1057 14.4007 32.9226 11.2015 32.468 7.31527C32.0135 3.65846 29.2889 0.91553 26.3376 1.14368ZM27.2467 15.7722C22.9331 15.7722 19.5273 12.3436 19.5273 8.00101C19.5273 3.65846 22.9319 0.228516 27.2467 0.228516C31.5615 0.228516 34.9661 3.65718 34.9661 7.99972C34.9661 12.3423 31.5603 15.7709 27.2467 15.7709V15.7722Z" fill="#0E324A"/>
		<path d="M39.5055 12.3432V4.34255H37.2354V3.42866C39.0522 3.42866 39.96 2.0572 40.6411 0H41.5489V2.97108H46.5436V4.1144H41.5489V10.9717C41.5489 13.4865 41.5489 15.5437 46.5436 13.2571L46.7703 13.9428C40.1853 18.0572 39.5042 13.7147 39.5042 12.3432H39.5055Z" fill="#0E324A"/>
		<path d="M56.0807 1.60035C54.0372 1.60035 52.2204 3.88569 52.2204 6.85806H56.9885C59.2586 6.85806 59.9397 6.62991 59.9397 5.48659C59.9397 3.88698 58.3508 1.3722 56.0794 1.60035H56.0807ZM49.7236 8.45767C49.7236 3.42939 52.6749 0.457031 56.3086 0.457031C60.1689 0.457031 62.439 3.42811 62.2124 6.85677C62.2124 8.00009 61.9857 7.77066 61.3046 7.77066H52.2229C52.2229 10.7417 53.8118 16.6852 61.9857 13.2565L62.2124 13.9422C53.1307 18.5142 49.7249 12.7989 49.7249 8.45639L49.7236 8.45767Z" fill="#0E324A"/>
		<path d="M75.3804 15.5422H65.1631V14.8565C66.9799 14.8565 66.9799 14.3989 66.9799 13.0275V3.65663C66.9799 2.05701 66.7533 1.37128 65.391 1.37128V0.685547H71.2948V1.37128C69.9325 1.37128 69.4779 1.59943 69.4779 3.42848V12.5712C69.4779 14.4002 70.1591 14.6283 71.9759 14.6283C73.7928 14.6283 75.1551 14.4002 75.6083 12.1136L76.2895 12.3417L75.3817 15.5422H75.3804Z" fill="#0E324A"/>
		<path d="M95.5874 8.45676C91.7271 8.45676 89.457 9.82822 89.457 11.6573C89.457 13.2569 90.5927 15.9998 95.5874 12.8006V8.45804V8.45676ZM98.0854 15.7717C96.9497 15.7717 95.8153 15.0859 95.8153 13.7145C89.4583 18.057 86.9603 14.4002 87.1869 12.1149C87.4135 9.60007 90.1382 7.31472 95.8153 7.31472V4.57179C95.8153 2.28644 95.3608 1.60071 93.7719 1.60071C91.5018 1.60071 89.9115 3.20033 89.9115 4.57179C89.9115 5.02937 88.7759 5.48568 88.3226 5.48568C87.4148 5.48568 87.6414 4.11421 88.096 3.42848C89.2317 2.05701 91.7284 0.685547 94.2264 0.685547C96.4965 0.685547 97.8588 1.82886 97.8588 4.11421V12.343C97.8588 13.7145 97.8588 14.8578 98.9945 14.6283C99.449 14.6283 99.9023 14.4002 100.357 13.9426L100.811 14.4002C99.9035 15.0859 99.2224 15.7717 98.0867 15.7717H98.0854Z" fill="#0E324A"/>
		<path d="M118.292 3.42848V15.5422H117.156C116.021 14.1708 107.62 5.25624 106.939 3.88478V11.8854C106.939 14.4002 107.166 14.8565 108.983 14.8565V15.5422H103.533V14.8565C105.122 14.8565 105.577 14.3989 105.577 11.656V3.88606C105.577 1.82886 105.122 1.37128 103.307 1.37128V0.685547H106.939C108.075 2.05701 116.021 10.7434 116.93 11.8854V3.42848C116.93 1.82886 116.475 1.37128 114.886 1.37128V0.685547H120.109V1.37128C118.52 1.37128 118.292 1.82886 118.292 3.42848Z" fill="#0E324A"/>
		<path d="M138.272 1.59943H135.774V12.5712C135.774 14.4002 136.682 14.6283 138.499 14.6283C141.223 14.6283 144.403 12.343 144.175 8.2286C144.175 4.34236 141.905 1.59943 138.271 1.59943H138.272ZM138.727 15.5422H131.688V14.8565C133.277 14.8565 133.505 14.3989 133.505 13.0275V2.74274C133.505 1.37128 133.051 1.37128 131.688 1.37128V0.685547H138.046C141.906 0.685547 145.765 2.28516 146.446 7.54287C147.127 12.5711 143.04 15.5422 138.727 15.5422Z" fill="#0E324A"/>
		<path d="M155.982 1.59937C153.939 1.59937 152.122 3.88472 152.122 6.85708H156.89C159.16 6.85708 159.841 6.62893 159.841 5.48561C159.841 3.886 158.252 1.37122 155.981 1.59937H155.982ZM149.624 8.45669C149.624 3.42842 152.575 0.456055 156.209 0.456055C160.069 0.456055 162.339 3.42714 162.113 6.8558C162.113 7.99911 161.886 7.76968 161.205 7.76968H152.123C152.123 10.7408 153.712 16.6842 161.886 13.2555L162.113 13.9413C153.031 18.5133 149.625 12.798 149.625 8.45541L149.624 8.45669Z" fill="#0E324A"/>
		<path d="M168.923 1.59909V8.45642C172.783 8.45642 174.145 7.08495 173.918 5.02776C173.691 2.28483 171.874 0.913361 168.923 1.59909ZM178.459 15.5419C174.599 15.77 172.102 10.5136 170.966 9.3703C170.512 9.3703 169.604 9.59845 168.923 9.59845V13.2553C168.923 14.8549 169.149 15.0843 170.966 15.0843V15.77H165.062V15.0843C166.651 15.0843 166.879 14.8562 166.879 13.4847V3.65629C166.879 2.05668 166.425 1.82724 165.062 1.82724V1.14151H169.376C173.69 0.913361 175.961 2.28483 176.188 5.48406C176.188 7.76941 174.599 8.91272 173.463 9.3703C175.506 11.8851 177.323 15.0843 180.048 15.3137V15.9995L178.459 15.5419Z" fill="#0E324A"/>
		<path d="M198.668 8.45676C194.807 8.45676 192.537 9.82822 192.537 11.6573C192.537 13.2569 193.673 15.9998 198.668 12.8006V8.45804V8.45676ZM201.165 15.7717C200.029 15.7717 198.894 15.0859 198.894 13.7145C192.537 18.057 190.039 14.4002 190.266 12.1149C190.493 9.60007 193.217 7.31472 198.894 7.31472V4.57179C198.894 2.28644 198.44 1.60071 196.851 1.60071C194.581 1.60071 192.991 3.20033 192.991 4.57179C192.991 5.02937 191.855 5.48568 191.402 5.48568C190.494 5.48568 190.721 4.11421 191.175 3.42848C192.311 2.05701 194.807 0.685547 197.305 0.685547C199.576 0.685547 200.938 1.82886 200.938 4.11421V12.343C200.938 13.7145 200.938 14.8578 202.074 14.6283C202.528 14.6283 202.981 14.4002 203.436 13.9426L203.89 14.4002C202.983 15.0859 202.301 15.7717 201.166 15.7717H201.165Z" fill="#0E324A"/>
		<path d="M215.014 8.45676C211.154 8.45676 208.884 9.82822 208.884 11.6573C208.884 13.2569 210.02 15.9998 215.014 12.8006V8.45804V8.45676ZM217.286 15.7717C216.15 15.7717 215.016 15.0859 215.016 13.7145C208.658 18.057 206.16 14.4002 206.387 12.1149C206.614 9.60007 209.338 7.31472 215.016 7.31472V4.57179C215.016 2.28644 214.561 1.60071 212.972 1.60071C210.702 1.60071 209.112 3.20033 209.112 4.57179C209.112 5.02937 207.976 5.48568 207.523 5.48568C206.615 5.48568 206.842 4.11421 207.523 3.42848C208.658 2.05701 211.155 0.685547 213.653 0.685547C215.923 0.685547 217.286 1.82886 217.286 4.11421V12.343C217.286 13.7145 217.286 14.8578 218.421 14.6283C218.876 14.6283 219.329 14.4002 219.784 13.9426L220.238 14.4002C219.33 15.0859 218.421 15.7717 217.287 15.7717H217.286Z" fill="#0E324A"/>
		<path d="M226.367 1.60007V8.4574C230.227 8.4574 231.59 7.08593 231.362 5.02873C231.362 2.2858 229.318 0.914337 226.367 1.60007ZM236.13 15.5429C232.27 15.771 229.773 10.5146 228.637 9.37128C228.183 9.37128 227.275 9.59943 226.594 9.59943V13.2562C226.594 14.8559 226.82 15.0853 228.637 15.0853V15.771H222.733V15.0853C224.322 15.0853 224.55 14.8571 224.55 13.4857V3.65727C224.55 2.05765 224.096 1.82822 222.733 1.82822V1.14249H227.047C231.361 0.914337 233.632 2.2858 233.859 5.48503C233.859 7.77038 232.27 8.9137 231.134 9.37128C233.177 11.8861 234.994 15.0853 237.719 15.3147V16.0005L236.13 15.5429Z" fill="#0E324A"/>
		<path d="M244.985 1.59937C242.942 1.59937 241.125 3.88472 241.125 6.85708H245.893C248.163 6.85708 248.844 6.62893 248.844 5.48561C248.844 3.886 247.255 1.37122 244.984 1.59937H244.985ZM238.628 8.45669C238.628 3.42842 241.579 0.456055 245.213 0.456055C249.073 0.456055 251.343 3.42714 251.117 6.8558C251.117 7.99911 250.89 7.76968 250.209 7.76968H241.127C241.127 10.7408 242.716 16.6842 250.89 13.2555L251.117 13.9413C242.035 18.5133 238.629 12.798 238.629 8.45541L238.628 8.45669Z" fill="#0E324A"/>
	</g>
	<defs>
		<clipPath id="clip0_99_839">
		<rect width="251.13" height="16" fill="white"/>
		</clipPath>
	</defs>
	</svg>

	<?php
}

add_action( 'theme_logo_dark', 'theme_logo_dark' );

/**
 * This theme logo for mobile.
 */
function theme_logo_mobile() {
	?>
	
	<?php
}

add_action( 'theme_logo_mobile', 'theme_logo_mobile' );

/**
 * Implement and customize Yoast Breadcrumbs.
 */
function theme_breadcrumbs() {
	if ( function_exists( 'yoast_breadcrumb' ) ) :
		yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
	endif;
}

add_action( 'breadcrumbs', 'theme_breadcrumbs' );
