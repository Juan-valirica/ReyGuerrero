<?php
/**
 * REY GUERRERO - MENÚ DIGITAL "SABOR PACÍFICO"
 * Página Principal
 *
 * "Con este Menú, apoyamos a los proveedores de la región del Pacífico"
 */

require_once 'includes/menu-data.php';

$menu = getMenuData();
$restaurant = getRestaurantInfo();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta name="theme-color" content="#ff9401">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo SITE_NAME; ?> - <?php echo SITE_TAGLINE; ?>">
    <meta property="og:description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/og-image.jpg">

    <title><?php echo SITE_NAME; ?> | <?php echo SITE_TAGLINE; ?></title>

    <!-- Preconnect para fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Estilos -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
</head>
<body class="is-loading">

    <!-- Preloader -->
    <div class="preloader" aria-hidden="true">
        <div class="preloader__content">
            <div class="preloader__logo">Rey Guerrero</div>
            <div class="preloader__tagline">Sabor Pacífico</div>
            <div class="preloader__tricolor"></div>
            <div class="preloader__wave"></div>
        </div>
    </div>

    <!-- Navegación Principal -->
    <nav class="nav" role="navigation" aria-label="Navegación principal">
        <div class="nav__container">
            <a href="#hero" class="nav__logo">Rey Guerrero</a>

            <ul class="nav__menu">
                <?php
                $navSections = ['entradas', 'ceviches', 'pescados', 'arroces', 'cazuelas', 'viches'];
                foreach ($navSections as $sectionKey):
                    if (isset($menu[$sectionKey])):
                ?>
                <li>
                    <a href="#<?php echo $menu[$sectionKey]['id']; ?>" class="nav__link">
                        <?php echo $menu[$sectionKey]['title']; ?>
                    </a>
                </li>
                <?php
                    endif;
                endforeach;
                ?>
            </ul>

            <button class="nav__toggle" aria-label="Abrir menú" aria-expanded="false">
                <span class="nav__toggle-bar"></span>
                <span class="nav__toggle-bar"></span>
                <span class="nav__toggle-bar"></span>
            </button>
        </div>
    </nav>

    <!-- Menú Móvil -->
    <div class="mobile-menu" aria-hidden="true">
        <button class="mobile-menu__close" aria-label="Cerrar menú">&times;</button>
        <ul class="mobile-menu__list">
            <?php foreach ($menu as $section): ?>
            <li>
                <a href="#<?php echo $section['id']; ?>" class="mobile-menu__link">
                    <?php echo $section['title']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Hero Section -->
    <header id="hero" class="hero">
        <div class="hero__background">
            <div class="hero__background-layer" data-parallax="0.3"></div>
        </div>

        <!-- Ondas animadas -->
        <div class="hero__waves">
            <svg class="hero__wave hero__wave--1" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
            <svg class="hero__wave hero__wave--2" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,90.7C672,85,768,107,864,144C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
            <svg class="hero__wave hero__wave--3" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path d="M0,256L48,240C96,224,192,192,288,181.3C384,171,480,181,576,208C672,235,768,277,864,277.3C960,277,1056,235,1152,208C1248,181,1344,171,1392,165.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>

        <div class="hero__content">
            <img src="assets/images/logo-rey-guerrero.svg" alt="Rey Guerrero - Sabor Pacífico" class="hero__logo">
            <div class="hero__tricolor" aria-hidden="true"></div>
            <p class="hero__tagline">
                El Pacífico no se explica. Se prueba, se siente, se lleva en la piel.
            </p>
            <a href="#entradas" class="hero__cta">
                <span>Explorar el Menú</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 5v14M19 12l-7 7-7-7"/>
                </svg>
            </a>
        </div>

        <div class="hero__scroll-indicator">
            <span>Desliza</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14M19 12l-7 7-7-7"/>
            </svg>
        </div>
    </header>

    <!-- Contenido Principal del Menú -->
    <main id="menu-content">

        <?php foreach ($menu as $sectionKey => $section): ?>

        <?php if (isset($section['has_subsections']) && $section['has_subsections']): ?>
        <!-- Sección Especial: Viches -->
        <section id="<?php echo $section['id']; ?>" class="menu-section menu-section--viches">
            <div class="menu-section__floaters" aria-hidden="true"></div>

            <div class="container">
                <header class="section-header fade-in-up">
                    <span class="section-header__number"><?php echo $section['number']; ?></span>
                    <h2 class="section-header__title"><?php echo $section['title']; ?></h2>
                    <p class="section-header__slogan"><?php echo $section['slogan']; ?></p>
                    <p class="section-header__poem"><?php echo $section['poem']; ?></p>
                </header>

                <!-- Cata de Viches Destacada -->
                <?php if (isset($section['special_item'])): ?>
                <div class="viche-cata fade-in-up">
                    <div class="viche-cata__content">
                        <span class="viche-cata__label"><?php echo $section['special_item']['slogan']; ?></span>
                        <h3 class="viche-cata__title"><?php echo $section['special_item']['name']; ?></h3>
                        <p class="viche-cata__description"><?php echo $section['special_item']['description']; ?></p>
                        <span class="viche-cata__price"><?php echo formatPrice($section['special_item']['price']); ?></span>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Subsecciones de Viches -->
                <div class="viches-grid">
                    <?php foreach ($section['subsections'] as $subKey => $subsection): ?>
                    <div class="viche-category fade-in-up">
                        <h3 class="viche-category__title"><?php echo $subsection['name']; ?></h3>
                        <ul class="viche-category__list">
                            <?php foreach ($subsection['items'] as $item): ?>
                            <li class="viche-item">
                                <span class="viche-item__dot"></span>
                                <span class="viche-item__format"><?php echo $item['format']; ?></span>
                                <span class="viche-item__name"><?php echo $item['name']; ?></span>
                                <span class="viche-item__price"><?php echo formatPrice($item['price']); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php else: ?>
        <!-- Sección Regular del Menú -->
        <section id="<?php echo $section['id']; ?>" class="menu-section menu-section--<?php echo $section['theme']; ?>">
            <div class="menu-section__floaters" aria-hidden="true"></div>

            <div class="container">
                <!-- Header de sección -->
                <header class="section-header fade-in-up">
                    <span class="section-header__number"><?php echo $section['number']; ?></span>
                    <h2 class="section-header__title"><?php echo $section['title']; ?></h2>
                    <?php if (isset($section['slogan'])): ?>
                    <p class="section-header__slogan"><?php echo $section['slogan']; ?></p>
                    <?php endif; ?>
                    <p class="section-header__poem"><?php echo $section['poem']; ?></p>
                </header>

                <!-- Grid de platos -->
                <div class="dishes-grid dishes-grid--simple">
                    <?php foreach ($section['dishes'] as $index => $dish): ?>

                    <article class="dish-card dish-card--simple" data-dish="<?php echo $index; ?>">
                        <div class="dish-card__content">
                            <div class="dish-card__info">
                                <h3 class="dish-card__name"><?php echo $dish['name']; ?></h3>
                                <p class="dish-card__description"><?php echo $dish['description']; ?></p>
                                <?php if (isset($dish['special'])): ?>
                                <span class="dish-card__special"><?php echo $dish['special']; ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="dish-card__price-wrapper">
                                <span class="dish-card__price"><?php echo formatPrice($dish['price']); ?></span>
                            </div>
                        </div>
                    </article>

                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php
        // Divisor de sección (excepto después de la última)
        $sectionKeys = array_keys($menu);
        $currentIndex = array_search($sectionKey, $sectionKeys);
        $nextIndex = $currentIndex + 1;

        if ($nextIndex < count($sectionKeys)):
            $nextSection = $sectionKeys[$nextIndex];
        ?>
        <div class="section-divider section-divider--to-<?php echo $nextSection; ?>" aria-hidden="true">
            <svg class="section-divider__wave" viewBox="0 0 1440 200" preserveAspectRatio="none">
                <path d="M0,100 C360,200 720,0 1080,100 C1260,150 1380,100 1440,100 L1440,200 L0,200 Z"></path>
            </svg>
        </div>
        <?php endif; ?>

        <?php endforeach; ?>

        <!-- Sección de Información Adicional -->
        <section id="info" class="menu-section menu-section--info">
            <div class="container">
                <header class="section-header fade-in-up">
                    <h2 class="section-header__title">Información</h2>
                    <p class="section-header__slogan">Pa' que sepas, parcero</p>
                </header>

                <div class="info-grid fade-in-up">
                    <!-- Nota de Impuestos -->
                    <div class="info-card">
                        <div class="info-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 16v-4M12 8h.01"/>
                            </svg>
                        </div>
                        <p class="info-card__text"><?php echo $restaurant['legal']['tax_note']; ?></p>
                    </div>

                    <!-- Facturación -->
                    <div class="info-card">
                        <div class="info-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                            </svg>
                        </div>
                        <p class="info-card__text"><?php echo $restaurant['legal']['invoice_note']; ?></p>
                    </div>

                    <!-- Propina -->
                    <div class="info-card info-card--full">
                        <div class="info-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                            </svg>
                        </div>
                        <p class="info-card__text"><?php echo $restaurant['legal']['tip_warning']; ?></p>
                    </div>
                </div>

                <!-- Redes Sociales y Contacto -->
                <div class="contact-banner fade-in-up">
                    <p class="contact-banner__text">Y no olvides escribirnos a nuestro número de WhatsApp o por nuestras redes sociales para acompañarte en todos tus eventos</p>
                    <div class="contact-banner__social">
                        <a href="https://instagram.com/<?php echo $restaurant['social']['instagram']; ?>" class="social-link" target="_blank" rel="noopener">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                            </svg>
                            <span>@<?php echo $restaurant['social']['instagram']; ?></span>
                        </a>
                        <a href="https://wa.me/57<?php echo str_replace(' ', '', $restaurant['social']['whatsapp']); ?>" class="social-link social-link--whatsapp" target="_blank" rel="noopener">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            <span><?php echo $restaurant['social']['whatsapp']; ?></span>
                        </a>
                        <a href="https://<?php echo $restaurant['website']; ?>" class="social-link" target="_blank" rel="noopener">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="2" y1="12" x2="22" y2="12"/>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                            </svg>
                            <span><?php echo $restaurant['website']; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <!-- Brand -->
                <div class="footer__brand">
                    <h2 class="footer__logo">Rey Guerrero</h2>
                    <p class="footer__tagline">"No vienes a comer. Vienes a dejarte llevar."</p>
                    <div class="footer__social">
                        <a href="https://instagram.com/<?php echo $restaurant['social']['instagram']; ?>" class="footer__social-link" aria-label="Instagram" target="_blank" rel="noopener">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                            </svg>
                        </a>
                        <a href="https://facebook.com/<?php echo $restaurant['social']['facebook']; ?>" class="footer__social-link" aria-label="Facebook" target="_blank" rel="noopener">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://tiktok.com/<?php echo $restaurant['social']['tiktok']; ?>" class="footer__social-link" aria-label="TikTok" target="_blank" rel="noopener">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Links rápidos -->
                <div class="footer__section">
                    <h3 class="footer__section-title">Menú</h3>
                    <ul class="footer__links">
                        <?php
                        $footerSections = ['entradas', 'ceviches', 'langostinos', 'pescados', 'filetes', 'arroces', 'cazuelas', 'viches'];
                        foreach ($footerSections as $sectionKey):
                            if (isset($menu[$sectionKey])):
                        ?>
                        <li><a href="#<?php echo $menu[$sectionKey]['id']; ?>" class="footer__link"><?php echo $menu[$sectionKey]['title']; ?></a></li>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                </div>

                <!-- Contacto -->
                <div class="footer__section">
                    <h3 class="footer__section-title">Contacto</h3>
                    <div class="footer__contact">
                        <div class="footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <span><?php echo $restaurant['address']; ?></span>
                        </div>
                        <div class="footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <span><?php echo $restaurant['phone']; ?></span>
                        </div>
                        <div class="footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <span><?php echo $restaurant['email']; ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <p class="footer__copyright">
                    &copy; <?php echo date('Y'); ?> Rey Guerrero. Todos los derechos reservados.
                </p>
                <p class="footer__credits">
                    Hecho con orgullo en el Pacífico colombiano.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/main.js" defer></script>

    <!-- Estilos del preloader inline para carga rápida -->
    <style>
        .preloader {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: linear-gradient(180deg, #2D5A3D 0%, #1B4D6E 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        .preloader--hidden {
            opacity: 0;
            visibility: hidden;
        }
        .preloader__content {
            text-align: center;
        }
        .preloader__logo {
            font-family: 'Rancho', cursive;
            font-size: 3rem;
            color: rgb(255, 148, 1);
            margin-bottom: 1rem;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        .preloader__tagline {
            font-family: 'Work Sans', sans-serif;
            font-size: 0.85rem;
            color: #F5F0E6;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        .preloader__tricolor {
            width: 120px;
            height: 4px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(90deg, #1a5d1a 0%, #1a5d1a 33%, #f5c842 33%, #f5c842 66%, #e85d4c 66%, #e85d4c 100%);
            border-radius: 2px;
        }
        .preloader__wave {
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, transparent, rgb(255, 148, 1), transparent);
            border-radius: 2px;
            animation: preloader-wave 1.5s ease-in-out infinite;
        }
        @keyframes preloader-wave {
            0%, 100% { transform: scaleX(0.3); opacity: 0.3; }
            50% { transform: scaleX(1); opacity: 1; }
        }
    </style>
</body>
</html>
