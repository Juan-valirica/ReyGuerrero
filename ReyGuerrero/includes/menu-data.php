<?php
/**
 * REY GUERRERO - MENÚ DIGITAL "SABOR PACÍFICO"
 * Datos del Menú Real - Estructura completa
 *
 * "Con este Menú, apoyamos a los proveedores de la región del Pacífico"
 */

// Configuración general
define('SITE_NAME', 'Rey Guerrero');
define('SITE_TAGLINE', 'Sabor Pacífico');
define('SITE_DESCRIPTION', 'Alta cocina del Pacífico colombiano. El menú que se siente, se prueba y se lleva en la piel.');

// Configuración de moneda
define('CURRENCY_SYMBOL', '$');
define('CURRENCY_DECIMAL', '.');
define('CURRENCY_THOUSANDS', ',');

/**
 * Formatea precio en formato colombiano
 */
function formatPrice($price) {
    return CURRENCY_SYMBOL . ' ' . number_format($price, 0, CURRENCY_DECIMAL, CURRENCY_THOUSANDS);
}

/**
 * Datos del menú organizados por secciones reales
 */
$menuData = [

    // ═══════════════════════════════════════════════════════════
    // ENTRADAS
    // ═══════════════════════════════════════════════════════════
    'entradas' => [
        'id' => 'entradas',
        'title' => 'Entradas',
        'subtitle' => 'Pa\' abrir boca',
        'number' => '01',
        'slogan' => '¡Ey, que esto apenas está empezando, mijo!',
        'poem' => 'El paladar se despierta con calma, como el sol sobre el manglar.<br>Un bocado para decirle al cuerpo: prepárate, que viene lo bueno.',
        'theme' => 'entradas',
        'dishes' => [
            [
                'name' => 'Empanaditas de Camarón',
                'description' => 'Servidas con el ají de la casa, seis unidades',
                'price' => 29000,
                'image' => 'assets/images/dishes/empanaditas-camaron.jpg'
            ],
            [
                'name' => 'Aborrajados de Pescado Ahumado y Queso',
                'description' => '3 unidades servidos con alioli de ajonjolí rebosados con coco',
                'price' => 42000,
                'image' => 'assets/images/dishes/aborrajados-pescado.jpg'
            ],
            [
                'name' => 'Patacones Endiablados',
                'description' => 'Crocantes gratinados con queso, salsa de la casa y camarones',
                'price' => 38000,
                'image' => 'assets/images/dishes/patacones-endiablados.jpg'
            ],
            [
                'name' => 'Pulpo a la Parrilla',
                'description' => 'Sobre una cama juju de plátano y hojas del pacífico',
                'price' => 62000,
                'image' => 'assets/images/dishes/pulpo-parrilla.jpg'
            ],
            [
                'name' => 'Ensalada Pacífico',
                'description' => 'Combinación de mariscos, langostinos y camarones a la parrilla con una deliciosa vinagreta de hierbas de azotea sobre una base de lechugas crocantes',
                'price' => 54000,
                'image' => 'assets/images/dishes/ensalada-pacifico.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // CEVICHES
    // ═══════════════════════════════════════════════════════════
    'ceviches' => [
        'id' => 'ceviches',
        'title' => 'Ceviches',
        'subtitle' => 'Fresquecitos del mar',
        'number' => '02',
        'slogan' => '¡Oiga, el limón hace milagros, pero acá hacemos magia!',
        'poem' => 'El limón abraza al mar, la cebolla lo enamora.<br>Frescura que muerde suave, acidez que acaricia el alma.',
        'theme' => 'ceviches',
        'dishes' => [
            [
                'name' => 'Ceviche Pacífico Tradicional de Camarón',
                'description' => 'Nuestro clásico con el sabor auténtico del Pacífico',
                'price' => 43000,
                'image' => 'assets/images/dishes/ceviche-tradicional.jpg'
            ],
            [
                'name' => 'Ceviche Siete Pecados',
                'description' => 'Mezcla de mariscos marinados en limón y salsa de la casa',
                'price' => 43000,
                'image' => 'assets/images/dishes/ceviche-siete-pecados.jpg'
            ],
            [
                'name' => 'Ceviche Exquisito Manglar con Piangua',
                'description' => 'Molusco del pacífico combinado con Hierbas de azotea',
                'price' => 62000,
                'image' => 'assets/images/dishes/ceviche-piangua.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // LANGOSTINOS
    // ═══════════════════════════════════════════════════════════
    'langostinos' => [
        'id' => 'langostinos',
        'title' => 'Langostinos',
        'subtitle' => 'Los reyes del mar',
        'number' => '03',
        'slogan' => '¡Ombe, estos sí que vinieron con actitud!',
        'poem' => 'Grandes, jugosos, orgullosos de su tamaño.<br>Cada langostino es una declaración de amor del océano.',
        'theme' => 'langostinos',
        'dishes' => [
            [
                'name' => 'Encocado de Langostinos',
                'description' => '6 unidades sazonadas con poleo y leche de coco, acompañadas de arroz coco, patacón y ensalada',
                'price' => 79000,
                'image' => 'assets/images/dishes/encocado-langostinos.jpg'
            ],
            [
                'name' => 'Langostinos Moja Calzón',
                'description' => '6 unidades apanadas en coco, servidas con salsa dulce de borojó acompañadas de ensalada y patacón crocante',
                'price' => 79000,
                'image' => 'assets/images/dishes/langostinos-moja-calzon.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // PESCADOS ENTEROS
    // ═══════════════════════════════════════════════════════════
    'pescados' => [
        'id' => 'pescados',
        'title' => 'Pescados Enteros',
        'subtitle' => 'De cabo a rabo',
        'number' => '04',
        'slogan' => '¡El misterio de darte de comer al otro, tiene su misticismo en la gastronomía del pacífico!',
        'poem' => 'El pescado entero es un regalo que viene del mar con historia.<br>Cada escama guarda secretos, cada bocado cuenta la travesía.',
        'theme' => 'pescados',
        'dishes' => [
            [
                'name' => 'Pargo Frito de 700 GR',
                'description' => 'Acompañado de ensalada y patacón crocante',
                'price' => 103000,
                'image' => 'assets/images/dishes/pargo-frito.jpg'
            ],
            [
                'name' => 'Pargo Encocado de 700 GR',
                'description' => 'Bañado en salsa de coco servido con arroz blanco y ensalada',
                'price' => 99000,
                'image' => 'assets/images/dishes/pargo-encocado.jpg'
            ],
            [
                'name' => 'Pargo Endiablado de 700 GR',
                'description' => 'Frito crocante y gratinado al horno con salsa de la casa queso y camarones, servido con arroz blanco y ensalada',
                'price' => 110000,
                'image' => 'assets/images/dishes/pargo-endiablado.jpg'
            ],
            [
                'name' => 'Róbalo Frito de 700 GR',
                'description' => 'Acompañado de ensalada y patacón crocante',
                'price' => 90000,
                'image' => 'assets/images/dishes/robalo-frito.jpg'
            ],
            [
                'name' => 'Róbalo Endiablado de 700 GR',
                'description' => 'Frito crocante y gratinado al horno con salsa de la casa queso y camarones, servido con arroz blanco y ensalada',
                'price' => 96000,
                'image' => 'assets/images/dishes/robalo-endiablado.jpg'
            ],
            [
                'name' => 'Róbalo Encocado de 700 GR',
                'description' => 'Bañado en salsa de coco servido con arroz blanco y ensalada',
                'price' => 92000,
                'image' => 'assets/images/dishes/robalo-encocado.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // FILETES
    // ═══════════════════════════════════════════════════════════
    'filetes' => [
        'id' => 'filetes',
        'title' => 'Filetes',
        'subtitle' => 'Pa\' los finos',
        'number' => '05',
        'slogan' => '¡Sin espinas y con toda la sabrosura, mi llave!',
        'poem' => 'Para los que quieren el mar sin complicaciones.<br>Pura carne, puro sabor, pura elegancia del Pacífico.',
        'theme' => 'filetes',
        'dishes' => [
            [
                'name' => 'Salmón Frutos Rojos',
                'description' => 'Filete a la parrilla bañado en salsa de frutos rojos, servido con papa en cascos y ensalada',
                'price' => 79000,
                'image' => 'assets/images/dishes/salmon-frutos-rojos.jpg'
            ],
            [
                'name' => 'Salmón Grillado',
                'description' => 'A la parrilla acompañado de puré de papa crocante y ensalada',
                'price' => 63000,
                'image' => 'assets/images/dishes/salmon-grillado.jpg'
            ],
            [
                'name' => 'Arropao de Pescado',
                'description' => 'Filete de róbalo sazón en viche y unas gotas de limón, cubierto con sofrito de leche de coco servido en arroz blanco envuelto en hojas de bijao acompañado de ensalada',
                'price' => 74000,
                'image' => 'assets/images/dishes/arropao-pescado.jpg'
            ],
            [
                'name' => 'Chuleta de Pescado',
                'description' => 'Filete de róbalo español crujiente con limón y ajo, acompañado de puré de papa y ensalada',
                'price' => 69000,
                'image' => 'assets/images/dishes/chuleta-pescado.jpg'
            ],
            [
                'name' => 'Róbalo Grillado',
                'description' => 'A la parrilla con salsa de la casa, acompañado de patacón y ensalada con arroz blanco y ensalada',
                'price' => 68000,
                'image' => 'assets/images/dishes/robalo-grillado.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // ARROCES
    // ═══════════════════════════════════════════════════════════
    'arroces' => [
        'id' => 'arroces',
        'title' => 'Arroces',
        'subtitle' => 'El alma del Pacífico',
        'number' => '06',
        'slogan' => '¡Aquí el arroz no acompaña, aquí el arroz es el que manda, parce!',
        'poem' => 'Cada grano bailó currulao antes de llegar a tu plato.<br>Caldoso, suelto o atollao... el arroz es el corazón de esta tierra.',
        'theme' => 'arroces',
        'dishes' => [
            [
                'name' => 'Arroz Tumbacatre',
                'description' => 'Combinación de mariscos, verduras, achiote y hierbas de azotea acompañado de patacón crocante',
                'price' => 69000,
                'image' => 'assets/images/dishes/arroz-tumbacatre.jpg'
            ],
            [
                'name' => 'Arroz Putiao',
                'description' => 'Con longaniza chocoana ahumada, camarones y langostino, acompañado de patacón crocante',
                'price' => 71000,
                'image' => 'assets/images/dishes/arroz-putiao.jpg'
            ],
            [
                'name' => 'Arroz Atollao de Piangua',
                'description' => 'Vegetales y achiote sazonado con hierbas de azotea, acompañado de patacón crocante',
                'price' => 74000,
                'image' => 'assets/images/dishes/arroz-piangua.jpg'
            ],
            [
                'name' => 'Arroz con Salmón',
                'description' => 'Al wok con deliciosos trozos de salmón a la parrilla, verduras y patacón crocante',
                'price' => 62000,
                'image' => 'assets/images/dishes/arroz-salmon.jpg'
            ],
            [
                'name' => 'Arroz Atollao Chocoano',
                'description' => 'Arroz caldoso con una deliciosa combinación de carnes ahumadas',
                'price' => 57000,
                'image' => 'assets/images/dishes/arroz-chocoano.jpg'
            ],
            [
                'name' => 'Arroz Clavao',
                'description' => 'Especialidad chocoana preparada con longaniza ahumada y queso costeño acompañado de patacón crocante',
                'price' => 66000,
                'image' => 'assets/images/dishes/arroz-clavao.jpg'
            ],
            [
                'name' => 'Arroz con Camarón',
                'description' => 'Sazonado con hierbas de azotea, verduras, leche de coco y achiote, acompañado con patacón crocante',
                'price' => 54000,
                'image' => 'assets/images/dishes/arroz-camaron.jpg'
            ],
            [
                'name' => 'Arroz Atollao de Conejo o Guagua',
                'description' => 'Arroz atollao de conejo o guagua ahumada, acompañado de patacón crocante. Especialidad de algunas regiones del pacífico (Se hace en Tumaco, Chocó y Buenaventura)',
                'price' => 65000,
                'image' => 'assets/images/dishes/arroz-conejo.jpg'
            ],
            [
                'name' => 'Mi Arrocito en Bajo',
                'description' => 'Lomo de res en su jugo en trozos con el toque pacífico del chef, servido con arroz blanco y ensalada',
                'price' => 64000,
                'image' => 'assets/images/dishes/arrocito-bajo.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // CAZUELAS - SABORES DEL PACÍFICO
    // ═══════════════════════════════════════════════════════════
    'cazuelas' => [
        'id' => 'cazuelas',
        'title' => 'Cazuelas',
        'subtitle' => 'Sabores del Pacífico',
        'number' => '07',
        'slogan' => '¡Mirá esta cosa tan buena, carajo!',
        'poem' => 'La cazuela es un abrazo caliente que viene del fogón de la abuela.<br>Aquí el coco, las especias y el amor se juntan pa\' hacerte feliz.',
        'theme' => 'cazuelas',
        'dishes' => [
            [
                'name' => 'Sancocho Trifásico',
                'description' => 'Deliciosa combinación de carnes de res, cerdo y pollo ahumadas, queso costeño, papa y plátano, acompañado de arroz blanco y aguacate',
                'price' => 46000,
                'image' => 'assets/images/dishes/sancocho-trifasico.jpg'
            ],
            [
                'name' => 'Sopa 7 Potencias',
                'description' => 'Suculento caldo de pescado con trozos de róbalo, salmón y camarón, acompañado de arroz blanco',
                'price' => 52000,
                'image' => 'assets/images/dishes/sopa-7-potencias.jpg'
            ],
            [
                'name' => 'Sancocho de Gallina Ahumada al Estilo del Pacífico Colombiano',
                'description' => 'Acompañado de arroz blanco y aguacate. SOLO SÁBADOS',
                'price' => 64000,
                'image' => 'assets/images/dishes/sancocho-gallina.jpg',
                'special' => 'SOLO SÁBADOS'
            ],
            [
                'name' => 'Cazuela de Camarón',
                'description' => 'Cocinada en una suculenta base de leche de coco natural, hierbas de azotea y achiote, acompañada de arroz coco y patacón crocante',
                'price' => 64000,
                'image' => 'assets/images/dishes/cazuela-camaron.jpg'
            ],
            [
                'name' => 'Cazuela de Mariscos',
                'description' => 'Mix de mariscos (pulpo, camarón, calamar, caracol y langostino) en una deliciosa reducción de cáscara de langosta, langostino y camarón, acompañado de arroz coco, patacón crocante, pico de gallo y crema de aguacate',
                'price' => 59000,
                'image' => 'assets/images/dishes/cazuela-mariscos.jpg'
            ],
            [
                'name' => 'Cazuela Esencia del Pacífico',
                'description' => 'Exquisita mezcla de langostinos, camarones, anillos de calamar, mejillones preparados en leche de coco natural, hierbas de azotea y acompañados de arroz coco y patacón crocante',
                'price' => 73000,
                'image' => 'assets/images/dishes/cazuela-esencia.jpg'
            ],
            [
                'name' => 'Costilla de Cerdo Ahumada',
                'description' => 'Costilla de cerdo ahumada en casa, con los sabores del pacífico, acompañada de puré de papa y ensalada',
                'price' => 64000,
                'image' => 'assets/images/dishes/costilla-ahumada.jpg'
            ],
            [
                'name' => 'Cazuela de Chontaduro',
                'description' => 'Suave combinación de chontaduro, leche de coco, trozos de róbalo y achiote, servido con arroz coco y patacón',
                'price' => 69000,
                'image' => 'assets/images/dishes/cazuela-chontaduro.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // OTRA OPCIÓN
    // ═══════════════════════════════════════════════════════════
    'otra-opcion' => [
        'id' => 'otra-opcion',
        'title' => 'Otra Opción',
        'subtitle' => 'Pa\' variar',
        'number' => '08',
        'slogan' => '¡Que no todo es pescado, mi rey!',
        'poem' => 'Pa\' los que quieren algo diferente pero con el mismo sabor pacífico.',
        'theme' => 'otra-opcion',
        'dishes' => [
            [
                'name' => 'Pechuga a la plancha',
                'description' => 'Servidas con papas en cascos y ensalada',
                'price' => 44000,
                'image' => 'assets/images/dishes/pechuga-plancha.jpg'
            ],
            [
                'name' => 'Arroz Vegetariano',
                'description' => 'Arroz con verduras crocantes preparadas al wok con el toque del chef, acompañado de patacón crocante',
                'price' => 43000,
                'image' => 'assets/images/dishes/arroz-vegetariano.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // BEBIDAS DEL PACÍFICO
    // ═══════════════════════════════════════════════════════════
    'bebidas' => [
        'id' => 'bebidas',
        'title' => 'Bebidas del Pacífico',
        'subtitle' => 'Pa\' refrescar el alma',
        'number' => '09',
        'slogan' => '¡Tome, tome, que la sed no espera!',
        'poem' => 'Los frutos del Pacífico convertidos en líquido.<br>Borojó pa\' la energía, tamarindo pa\' la vida, naidí pa\' el alma.',
        'theme' => 'bebidas',
        'dishes' => [
            [
                'name' => 'Jugo de Borojó en Agua',
                'description' => 'El fruto energético del Pacífico',
                'price' => 12000,
                'image' => 'assets/images/dishes/jugo-borojo.jpg'
            ],
            [
                'name' => 'Jugo de Borojó en Leche',
                'description' => 'Cremoso y energizante',
                'price' => 14000,
                'image' => 'assets/images/dishes/jugo-borojo-leche.jpg'
            ],
            [
                'name' => 'Jugo de Tamarindo en Agua',
                'description' => 'Refrescante y tropical',
                'price' => 12000,
                'image' => 'assets/images/dishes/jugo-tamarindo.jpg'
            ],
            [
                'name' => 'Jugo de Tamarindo en Leche',
                'description' => 'Dulce y cremoso',
                'price' => 14000,
                'image' => 'assets/images/dishes/jugo-tamarindo-leche.jpg'
            ],
            [
                'name' => 'Jugo de Guayaba Agria',
                'description' => 'Sabor único del trópico',
                'price' => 12000,
                'image' => 'assets/images/dishes/jugo-guayaba.jpg'
            ],
            [
                'name' => 'Limonada de Tamarindo',
                'description' => 'La combinación perfecta',
                'price' => 14000,
                'image' => 'assets/images/dishes/limonada-tamarindo.jpg'
            ],
            [
                'name' => 'Limonada de San Joaquín',
                'description' => 'Con Flor de Jamaica',
                'price' => 14000,
                'image' => 'assets/images/dishes/limonada-san-joaquin.jpg'
            ],
            [
                'name' => 'Naidí en Agua',
                'description' => 'El açaí colombiano',
                'price' => 16000,
                'image' => 'assets/images/dishes/naidi-agua.jpg'
            ],
            [
                'name' => 'Naidí en Leche',
                'description' => 'Cremoso y antioxidante',
                'price' => 16000,
                'image' => 'assets/images/dishes/naidi-leche.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // JUGOS NATURALES
    // ═══════════════════════════════════════════════════════════
    'jugos' => [
        'id' => 'jugos',
        'title' => 'Jugos Naturales',
        'subtitle' => 'De la fruta al vaso',
        'number' => '10',
        'slogan' => '¡Fresquecitos como la brisa del mar!',
        'poem' => 'Las frutas del Valle convertidas en pura frescura.',
        'theme' => 'jugos',
        'dishes' => [
            [
                'name' => 'Jugos en Agua',
                'description' => 'Fresa, guanábana, lulo, mango, maracuyá, mora',
                'price' => 12000,
                'image' => 'assets/images/dishes/jugos-naturales.jpg'
            ],
            [
                'name' => 'Jugos en Leche',
                'description' => 'Fresa, guanábana, lulo, mango, maracuyá, mora',
                'price' => 14000,
                'image' => 'assets/images/dishes/jugos-leche.jpg'
            ],
            [
                'name' => 'Lulada Envichada',
                'description' => 'Lulada con un toque de viche',
                'price' => 19000,
                'image' => 'assets/images/dishes/lulada-envichada.jpg'
            ],
            [
                'name' => 'Lulada',
                'description' => 'Clásica y refrescante',
                'price' => 17000,
                'image' => 'assets/images/dishes/lulada.jpg'
            ],
            [
                'name' => 'Limonada Natural',
                'description' => 'Simple y perfecta',
                'price' => 10000,
                'image' => 'assets/images/dishes/limonada-natural.jpg'
            ],
            [
                'name' => 'Limonada de Coco',
                'description' => 'Tropical y cremosa',
                'price' => 16000,
                'image' => 'assets/images/dishes/limonada-coco.jpg'
            ],
            [
                'name' => 'Limonada de Fresa o Mango',
                'description' => 'Frutal y refrescante',
                'price' => 16000,
                'image' => 'assets/images/dishes/limonada-fresa.jpg'
            ],
            [
                'name' => 'Limonada de Mango Viche',
                'description' => 'Con el toque del Pacífico',
                'price' => 16000,
                'image' => 'assets/images/dishes/limonada-mango-viche.jpg'
            ],
            [
                'name' => 'Agua en Botella',
                'description' => 'Pura y refrescante',
                'price' => 8000,
                'image' => 'assets/images/dishes/agua.jpg'
            ],
            [
                'name' => 'Gaseosas Artesanales',
                'description' => 'Sabores únicos',
                'price' => 3000,
                'image' => 'assets/images/dishes/gaseosas.jpg'
            ],
            [
                'name' => 'Cerveza Club Colombia',
                'description' => 'Fría y perfecta',
                'price' => 10500,
                'image' => 'assets/images/dishes/cerveza.jpg'
            ],
            [
                'name' => 'Michelada',
                'description' => 'Con el toque de la casa',
                'price' => 12000,
                'image' => 'assets/images/dishes/michelada.jpg'
            ],
            [
                'name' => 'Café americano',
                'description' => 'Del Pacífico colombiano',
                'price' => 9000,
                'image' => 'assets/images/dishes/cafe.jpg'
            ],
            [
                'name' => 'Bretaña',
                'description' => 'Tradición vallecaucana',
                'price' => 7000,
                'image' => 'assets/images/dishes/bretana.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // VICHES - BEBIDAS TRADICIONALES
    // ═══════════════════════════════════════════════════════════
    'viches' => [
        'id' => 'viches',
        'title' => 'Bebidas Tradicionales',
        'subtitle' => 'De Nuestro Pacífico',
        'number' => '11',
        'slogan' => '¡Ojo que esto se calentó!',
        'poem' => 'El viche no es solo una bebida, es la historia de un pueblo que resistió.<br>Cada trago lleva siglos de saberes, de cantos, de raíces que no se olvidan.',
        'theme' => 'viches',
        'has_subsections' => true,
        'subsections' => [
            'canao' => [
                'name' => 'Canao',
                'items' => [
                    ['name' => 'Viche Puro', 'format' => 'BOTELLA', 'price' => 160000],
                    ['name' => 'Viche Dorado', 'format' => 'BOTELLA', 'price' => 175000],
                    ['name' => 'Viche Vinete', 'format' => 'BOTELLA', 'price' => 175000]
                ]
            ],
            'mano-de-buey' => [
                'name' => 'Mano de Buey',
                'items' => [
                    ['name' => 'Coca y Viche', 'format' => 'MEDIA', 'price' => 85000],
                    ['name' => 'Curao', 'format' => 'MEDIA', 'price' => 85000],
                    ['name' => 'Plátano y Viche', 'format' => 'MEDIA', 'price' => 85000],
                    ['name' => 'Puro', 'format' => 'MEDIA', 'price' => 85000]
                ]
            ],
            'viche-positivo' => [
                'name' => 'Viche Positivo',
                'items' => [
                    ['name' => 'Curao', 'format' => 'BOTELLA', 'price' => 175000],
                    ['name' => 'Puro', 'format' => 'BOTELLA', 'price' => 160000],
                    ['name' => 'Tomaseca', 'format' => 'BOTELLA', 'price' => 175000],
                    ['name' => 'Arrechón', 'format' => 'BOTELLA', 'price' => 175000],
                    ['name' => 'Arrechón', 'format' => 'MEDIA', 'price' => 85000],
                    ['name' => 'Curao', 'format' => 'MEDIA', 'price' => 85000],
                    ['name' => 'Tomaseca', 'format' => 'MEDIA', 'price' => 85000],
                    ['name' => 'Curao', 'format' => 'TRAGO', 'price' => 14500],
                    ['name' => 'Tomaseca', 'format' => 'TRAGO', 'price' => 14500],
                    ['name' => 'Arrechón', 'format' => 'TRAGO', 'price' => 14500]
                ]
            ],
            'viche-fraguamali' => [
                'name' => 'Viche Fraguamali',
                'items' => [
                    ['name' => 'Curao', 'format' => 'BOTELLA', 'price' => 175000],
                    ['name' => 'Puro', 'format' => 'BOTELLA', 'price' => 160000]
                ]
            ]
        ],
        'special_item' => [
            'name' => 'Una Cata de Viches',
            'slogan' => '¡Arriésgate... Ajá, con efectos secundarios!',
            'description' => 'Y Porqué no... Una Cata de Viches - Sabrosa y Peligrosa',
            'price' => 45000
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // MENÚ INFANTIL
    // ═══════════════════════════════════════════════════════════
    'infantil' => [
        'id' => 'infantil',
        'title' => 'Menú Infantil',
        'subtitle' => 'Pa\' los pelaos',
        'number' => '12',
        'slogan' => '¡Que los chiquitos también coman rico, pues!',
        'poem' => 'Los pequeños guerreros también merecen su festín.<br>Sabores amigables con el toque del Pacífico.',
        'theme' => 'infantil',
        'dishes' => [
            [
                'name' => 'Croquetas de Pollo',
                'description' => 'Trozos de pechuga apanados acompañados de papa en cascos casera y salsa de tomate',
                'price' => 35000,
                'image' => 'assets/images/dishes/croquetas-pollo.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // POSTRES
    // ═══════════════════════════════════════════════════════════
    'postres' => [
        'id' => 'postres',
        'title' => 'Postres',
        'subtitle' => 'El dulce final',
        'number' => '13',
        'slogan' => '¡Que la vida es pa\' endulzarla, mi amor!',
        'poem' => 'El final que no quieres que llegue.<br>Dulce como la panela, suave como la noche en Tumaco.',
        'theme' => 'postres',
        'dishes' => [
            [
                'name' => 'Postre del Día',
                'description' => 'Pregunta por nuestros deliciosos postres del día',
                'price' => 18000,
                'image' => 'assets/images/dishes/postre-dia.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // PARA LLEVAR
    // ═══════════════════════════════════════════════════════════
    'llevar' => [
        'id' => 'llevar',
        'title' => 'Pa\' Llevar',
        'subtitle' => 'Mirá esta maravilla',
        'number' => '14',
        'slogan' => '¡Que el sabor del Pacífico llegue a tu casa!',
        'poem' => 'Pa\' que te lleves un pedacito de nosotros.',
        'theme' => 'llevar',
        'dishes' => [
            [
                'name' => 'Empanadas Congeladas de Camarón',
                'description' => '5 Unidades',
                'price' => 25000,
                'image' => 'assets/images/dishes/empanadas-congeladas.jpg'
            ],
            [
                'name' => 'Aborrajados Congelados de Pescado',
                'description' => '3 Unidades',
                'price' => 25000,
                'image' => 'assets/images/dishes/aborrajados-congelados.jpg'
            ]
        ]
    ],

    // ═══════════════════════════════════════════════════════════
    // SALSAS Y ADEREZOS
    // ═══════════════════════════════════════════════════════════
    'salsas' => [
        'id' => 'salsas',
        'title' => 'No te vayas sin tu...',
        'subtitle' => 'Salsas y Aderezos',
        'number' => '15',
        'slogan' => '¡El toque final que hace la diferencia!',
        'poem' => 'Las hierbas de azotea y los secretos ancestrales en un frasco.',
        'theme' => 'salsas',
        'dishes' => [
            [
                'name' => 'Ají de Hierbas de Azotea',
                'description' => 'Poleo, orégano, cilantro cimarrón, albahaca negra, aceite de oliva, ají pajarito, guindilla',
                'price' => 16000,
                'image' => 'assets/images/dishes/aji-hierbas.jpg'
            ],
            [
                'name' => 'Pesto de Hierbas 130ml',
                'description' => 'Poleo, orégano, cilantro cimarrón, albahaca morada, aceite de oliva, ají, queso parmesano, pimienta',
                'price' => 16000,
                'image' => 'assets/images/dishes/pesto-hierbas.jpg'
            ],
            [
                'name' => 'Ají de Pipilongo',
                'description' => 'Con todas las propiedades ancestrales de este producto lleno de magia y sabor',
                'price' => 28000,
                'image' => 'assets/images/dishes/aji-pipilongo.jpg'
            ]
        ]
    ]
];

/**
 * Información del restaurante
 */
$restaurantInfo = [
    'name' => 'Rey Guerrero',
    'tagline' => 'Sabor Pacífico',
    'description' => 'Con este Menú, apoyamos a los proveedores de la región del Pacífico',
    'address' => 'Cali, Valle del Cauca, Colombia',
    'phone' => '315 852 28 18',
    'email' => 'contactenos@reyguerrero.co',
    'website' => 'reyguerrero.rest',
    'hours' => [
        'Martes - Domingo' => '12:00 - 22:00',
        'Lunes' => 'Cerrado'
    ],
    'social' => [
        'instagram' => 'reyguerreropg',
        'facebook' => 'Rey Guerrero',
        'tiktok' => '@reyguerreropg',
        'whatsapp' => '315 852 28 18'
    ],
    'legal' => [
        'tax_note' => 'Todos los precios incluyen el 8% de impuesto al consumo.',
        'invoice_note' => 'Por favor solicitar al mesero el formato de datos para emisión de factura electrónica al momento de pedir su cuenta. Una vez emitida la factura genérica, no es posible realizar ajustes.',
        'tip_warning' => 'Advertencia propina: Se informa a los consumidores que este establecimiento de comercio sugiere a sus consumidores una propina correspondiente al 10% del valor de la cuenta, el cual podrá ser aceptada, rechazada o modificada por usted, de acuerdo con su valoración del servicio prestado.',
        'consumer_line' => 'Línea de atención al ciudadano de la Superintendencia de Industria y Comercio: (601) 592 0400 en Bogotá o para el resto del país línea gratuita nacional (18000) 910165.'
    ]
];

/**
 * Obtiene todos los datos del menú
 */
function getMenuData() {
    global $menuData;
    return $menuData;
}

/**
 * Obtiene una sección específica del menú
 */
function getMenuSection($sectionId) {
    global $menuData;
    return $menuData[$sectionId] ?? null;
}

/**
 * Obtiene información del restaurante
 */
function getRestaurantInfo() {
    global $restaurantInfo;
    return $restaurantInfo;
}

/**
 * Genera placeholder de imagen si no existe
 */
function getDishImage($imagePath) {
    $defaultImage = 'assets/images/placeholder-dish.svg';
    return file_exists($imagePath) ? $imagePath : $defaultImage;
}
