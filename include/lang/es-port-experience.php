<?php

define('TITULOS_BANNER_PORT_EXPERIENCE', array(
  'Port Experience',
  '¡Prepárate para nuevas aventuras!',
));

define('TITULOS_PORT_EXPERIENCE', array(
  'Restaurants,',
  'Bars & Experiences'
));

define('TEXT_PORT_EXPERIENCE', array(
  'Comida para todos los gustos y bebidas para todas las necesidades.',
  'Desde café helado y pasteles hasta margaritas y <strong>comida Dominicana</strong>, le esperan deliciosas experiencias culinarias. Disfrútelas en nuestros restaurantes y bares temáticos, o téngalas a su lado mientras se relaja junto a la piscina. ¡Nos vemos pronto!'
));

define('BUTTON_EXPLORE', 'Ver más');
define('TEXT_BUTTON_PORT_EXPERIENCE', 'Descubre nuestro mapa interactivo');

$points = [
  [
    'id' => 1,
    'name' => 'Blue Parrot',
    'path' => 'blue-parrot',
    'logo' => 'Blue Parrot',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM120.17,87.24c3.72-12.43,9.93-21.51,17.22-25.35v55.25c0,8.33.16,26.27.47,35.5h-8.55c-.02-.96-.04-1.37-.08-4.64-.04-3.72-1.31-7.18-3.67-9.99-8.93-10.65-11.14-31.52-5.38-50.76ZM141.5,234.57c-2.04,2.28-4.79,3.54-7.74,3.54s-5.7-1.26-7.74-3.54c-2.04-2.28-3.08-5.27-2.93-8.41l3.84-67.47h13.67l3.84,67.45c.15,3.15-.89,6.14-2.93,8.42ZM172.74,234.57c-2.04,2.29-4.79,3.54-7.74,3.54-5.71,0-10.4-4.75-10.67-10.83,0,0,0,0,0,0h0c-.02-.37-.02-.75,0-1.12l3.87-67.47h13.61l3.61,62.12h0l.25,5.33c.15,3.15-.89,6.13-2.92,8.42ZM174.55,118.95c-4.53,3.48-7.01,8.95-6.65,14.6l.56,19.08h-6.93l.56-19.04c.36-5.69-2.13-11.17-6.65-14.64-5.76-4.43-8.91-11.39-8.42-18.65l2.11-36.11c.08-1.3,1.14-2.3,2.43-2.3h.05c1.33.03,2.4,1.13,2.39,2.47l-.38,36.24c-.01,1.13.41,2.2,1.2,3,.77.78,1.79,1.21,2.88,1.21,2.2,0,4.03-1.82,4.08-4.06l.73-36.45c.03-1.31,1.12-2.39,2.44-2.39h.06c1.32,0,2.41,1.07,2.44,2.39l.73,36.45c.05,2.28,1.85,4.06,4.08,4.06,1.09,0,2.11-.43,2.88-1.21.79-.8,1.22-1.86,1.2-3l-.38-36.24c-.01-1.33,1.06-2.44,2.39-2.47h.05c1.29,0,2.36,1,2.43,2.3l2.11,36.12s0,0,0,.01c.49,7.25-2.66,14.21-8.42,18.63Z"/>
      </svg>',
    'cover' => '/blue-parrot/cover-blue-parrot-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets/images/points-of-interest/ParqueCentral.jpg'],
    'text_home' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quod ab consequatur praesentium, unde quas nostrum tenetur natus adipisci, hic fuga laudantium magni maxime molestiae amet ex a possimus assumenda.',
    'menu' => [
      [
        'image' => 'cantina-latina-menu-1.jpg',
        'image-position' => 'center',
        'items' => [
          [
            'name' => 'Nachos',
            'ingredients' => ['Veggie', 'Shrimp', 'Chicken', 'Mixed', 'Beef'],
          ],
          [
            'name' => 'Appetizers',
            'ingredients' => ['Frenchfries', 'Chips & Salsa', 'Cheese Sticks', 'Guacamole'],
          ]
        ]
      ],
      [
        'image' => 'cantina-latina-menu-2.jpg',
        'image-position' => 'bottom',
        'items' => [
          [
            'name' => 'Dominican D',
            'ingredients' => ['Bandera', 'Fried Fish', 'Mofongo', 'San Mangú', 'Sancocho']
          ],
          [
            'name' => 'Grilled Meat',
            'ingredients' => ['Buffalo Wings', 'Chicken Breast', 'Chicken Fajitas', 'Beef Fajitas']
          ],
          [
            'name' => 'Side Dish',
            'ingredients' => ['French Fries', 'Fried Plantain', 'Rice']
          ]
        ]
      ]

    ]
  ],
  [
    'id' => 2,
    'name' => 'Boat Bar',
    'path' => 'boat-bar',
    'logo' => 'Boat Bar',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'cover' => '/boat-bar/cover-boat-bar-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets/images/welcome/Welcome-1.jpg', 'assets/images/welcome/Welcome-1.jpg'],
    'text_home' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quod ab consequatur praesentium, unde quas nostrum tenetur natus adipisci, hic fuga laudantium magni maxime molestiae amet ex a possimus assumenda.',

    'menu' => [
      [
        'image' => 'boat-bar-five.jpg',
        'image-position' => 'center',
        'items' => [
          [
            'name' => 'Nachos',
            'ingredients' => ['Veggie', 'Shrimp', 'Chicken', 'Mixed', 'Beef'],
          ],
          [
            'name' => 'Appetizers',
            'ingredients' => ['Frenchfries', 'Chips & Salsa', 'Cheese Sticks', 'Guacamole'],
          ]
        ]
      ],
      [
        'image' => 'boat-bar-one.jpg',
        'image-position' => 'bottom',
        'items' => [
          [
            'name' => 'Dominican D',
            'ingredients' => ['Bandera', 'Fried Fish', 'Mofongo', 'San Mangú', 'Sancocho']
          ],
          [
            'name' => 'Grilled Meat',
            'ingredients' => ['Buffalo Wings', 'Chicken Breast', 'Chicken Fajitas', 'Beef Fajitas']
          ],
          [
            'name' => 'Side Dish',
            'ingredients' => ['French Fries', 'Fried Plantain', 'Rice']
          ]
        ]
      ]

    ]
  ],

];
