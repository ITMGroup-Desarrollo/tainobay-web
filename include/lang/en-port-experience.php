<?php

define('TITULOS_BANNER_PORT_EXPERIENCE', array(
  'Port Experience',
  'Get ready for new adventures at this cruise stop!',
));

define('TITULOS_PORT_EXPERIENCE', array(
  'Restaurants,',
  'Bars & Experiences'
));

define('TEXT_PORT_EXPERIENCE', array(
  'Food for all your moods and drinks for all your needs!',
  'From iced coffee and cakes to margaritas and <strong>Dominican food</strong>, we have delicious culinary experiences waiting for you. Enjoy them at our themed restaurants and bars in the port, or have them by your side while chilling by the pool. See you soon!'
));

define('BUTTON_EXPLORE', 'Explore more');
define('TEXT_BUTTON_PORT_EXPERIENCE', 'Discover our interactive map');

$points = [
  [
    'id' => 1,
    'type' => 'restaurant',
    'name' => 'Blue Parrot',
    'path' => 'blue-parrot',
    'logo' => 'blue-parrot/blue-parrot-logo-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM120.17,87.24c3.72-12.43,9.93-21.51,17.22-25.35v55.25c0,8.33.16,26.27.47,35.5h-8.55c-.02-.96-.04-1.37-.08-4.64-.04-3.72-1.31-7.18-3.67-9.99-8.93-10.65-11.14-31.52-5.38-50.76ZM141.5,234.57c-2.04,2.28-4.79,3.54-7.74,3.54s-5.7-1.26-7.74-3.54c-2.04-2.28-3.08-5.27-2.93-8.41l3.84-67.47h13.67l3.84,67.45c.15,3.15-.89,6.14-2.93,8.42ZM172.74,234.57c-2.04,2.29-4.79,3.54-7.74,3.54-5.71,0-10.4-4.75-10.67-10.83,0,0,0,0,0,0h0c-.02-.37-.02-.75,0-1.12l3.87-67.47h13.61l3.61,62.12h0l.25,5.33c.15,3.15-.89,6.13-2.92,8.42ZM174.55,118.95c-4.53,3.48-7.01,8.95-6.65,14.6l.56,19.08h-6.93l.56-19.04c.36-5.69-2.13-11.17-6.65-14.64-5.76-4.43-8.91-11.39-8.42-18.65l2.11-36.11c.08-1.3,1.14-2.3,2.43-2.3h.05c1.33.03,2.4,1.13,2.39,2.47l-.38,36.24c-.01,1.13.41,2.2,1.2,3,.77.78,1.79,1.21,2.88,1.21,2.2,0,4.03-1.82,4.08-4.06l.73-36.45c.03-1.31,1.12-2.39,2.44-2.39h.06c1.32,0,2.41,1.07,2.44,2.39l.73,36.45c.05,2.28,1.85,4.06,4.08,4.06,1.09,0,2.11-.43,2.88-1.21.79-.8,1.22-1.86,1.2-3l-.38-36.24c-.01-1.33,1.06-2.44,2.39-2.47h.05c1.29,0,2.36,1,2.43,2.3l2.11,36.12s0,0,0,.01c.49,7.25-2.66,14.21-8.42,18.63Z"/>
      </svg>',
    'banner' => 'blue-parrot/header-blue-parrot-port-experience.webp',
    'cover' => 'blue-parrot/cover-blue-parrot-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets/images/port-experience/blue-parrot/blue-parrot-six.jpg'],
    'text_home' => "A colorful vibe is ready to welcome you at Blue Parrot! With a Caribbean-inspired seafood menu, you'll find a taste you'll remember forever!",
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

    ],
    'pdf' => 'port-experience/blue-parrot.pdf',
    'single_gallery' => [
      'assets\images\port-experience\blue-parrot\gallery\BLUE_PARROT_1.webp',
      'assets\images\port-experience\blue-parrot\gallery\BLUE_PARROT_4.webp',
      'assets\images\port-experience\blue-parrot\gallery\BLUE_PARROT_2.webp',
      'assets\images\port-experience\blue-parrot\gallery\BLUE_PARROT_5.webp',
      'assets\images\port-experience\blue-parrot\gallery\BLUE_PARROT_6.webp',
      'assets\images\port-experience\blue-parrot\gallery\BLUE_PARROT_7.webp',
      'assets\images\port-experience\blue-parrot\gallery\BLUE_PARROT_8.webp',
      'assets\images\port-experience\blue-parrot\gallery\BLUE_PARROT_9.webp',
    ]
  ],
  [
    'id' => 2,
    'type' => 'restaurant',
    'name' => 'Boat Bar',
    'path' => 'boat-bar',
    'logo' => 'boat-bar/boat-bar-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'banner' => 'boat-bar/header-boat-bar-port-experience.webp',
    'cover' => 'boat-bar/cover-boat-bar-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets/images/port-experience/boat-bar/carousel-boat-bar.webp'],
    'text_home' => 'Ready, sail, drink! Sip a margarita or freshen up with a beer while you relax before enjoying a day at the port. Find the Boat Bar right next to the Lazy River! ',
    'single_gallery' => [
      'assets\images\port-experience\boat-bar\gallery\BOAT_BAR_1.webp',
      'assets\images\port-experience\boat-bar\gallery\BOAT_BAR_2.webp',
      'assets\images\port-experience\boat-bar\gallery\BOAT_BAR_3.webp',
      'assets\images\port-experience\boat-bar\gallery\BOAT_BAR_4.webp',
      'assets\images\port-experience\boat-bar\gallery\BOAT_BAR_5.webp',
      'assets\images\port-experience\boat-bar\gallery\BOAT_BAR_6.webp',
    ],
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

    ],
    'pdf' => 'port-experience/boat-bar.pdf'
  ],
  [
    'id' => 3,
    'type' => 'restaurant',
    'name' => 'Cantina Latina',
    'path' => 'cantina-latina',
    'logo' => 'cantina-latina/cantina-latina-white.png',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM120.17,87.24c3.72-12.43,9.93-21.51,17.22-25.35v55.25c0,8.33.16,26.27.47,35.5h-8.55c-.02-.96-.04-1.37-.08-4.64-.04-3.72-1.31-7.18-3.67-9.99-8.93-10.65-11.14-31.52-5.38-50.76ZM141.5,234.57c-2.04,2.28-4.79,3.54-7.74,3.54s-5.7-1.26-7.74-3.54c-2.04-2.28-3.08-5.27-2.93-8.41l3.84-67.47h13.67l3.84,67.45c.15,3.15-.89,6.14-2.93,8.42ZM172.74,234.57c-2.04,2.29-4.79,3.54-7.74,3.54-5.71,0-10.4-4.75-10.67-10.83,0,0,0,0,0,0h0c-.02-.37-.02-.75,0-1.12l3.87-67.47h13.61l3.61,62.12h0l.25,5.33c.15,3.15-.89,6.13-2.92,8.42ZM174.55,118.95c-4.53,3.48-7.01,8.95-6.65,14.6l.56,19.08h-6.93l.56-19.04c.36-5.69-2.13-11.17-6.65-14.64-5.76-4.43-8.91-11.39-8.42-18.65l2.11-36.11c.08-1.3,1.14-2.3,2.43-2.3h.05c1.33.03,2.4,1.13,2.39,2.47l-.38,36.24c-.01,1.13.41,2.2,1.2,3,.77.78,1.79,1.21,2.88,1.21,2.2,0,4.03-1.82,4.08-4.06l.73-36.45c.03-1.31,1.12-2.39,2.44-2.39h.06c1.32,0,2.41,1.07,2.44,2.39l.73,36.45c.05,2.28,1.85,4.06,4.08,4.06,1.09,0,2.11-.43,2.88-1.21.79-.8,1.22-1.86,1.2-3l-.38-36.24c-.01-1.33,1.06-2.44,2.39-2.47h.05c1.29,0,2.36,1,2.43,2.3l2.11,36.12s0,0,0,.01c.49,7.25-2.66,14.21-8.42,18.63Z"/>
      </svg>',
    'banner' => 'cantina-latina/header-cantina-latina-port-experience.webp',
    'cover' => 'cantina-latina/cover-cantina-latina-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets/images/port-experience/cantina-latina/carousel-cantina-latina_.webp'],
    'text_home' => 'Have a taste of Puerto Plata! Cantina Latina has a delicious menu with Dominican Cuisine, grilled dishes, and drinks in a comfy atmosphere ready to welcome everybody!',
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_1.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_2.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_3.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_4.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_5.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_6.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_7.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_8.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_9.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_10.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_11.webp',
      'assets\images\port-experience\cantina-latina\gallery\CANTINA_LATINA_12.webp',
    ],
    'pdf' => 'port-experience/cantina-latina.pdf'
  ],
  [
    'id' => 4,
    'type' => 'restaurant',
    'name' => 'Coffee Factory',
    'path' => 'coffee-factory',
    'logo' => 'coffe-factory/coffe-bar-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'banner' => 'coffe-factory/header-coffee-factory-port-experience.webp',
    'cover' => 'coffe-factory/cover-coffe-bar-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\coffe-factory\carousel-coffe-factory.webp'],
    'text_home' => 'Fuel up with a cup of Dominican coffee! From espresso to frappés and some desserts, Coffee Factory will give a sweet touch to your day at the port. ',
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_1.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_2.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_3.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_4.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_5.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_6.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_7.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_8.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_9.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_10.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_11.webp',
      'assets\images\port-experience\coffe-factory\gallery\COFFE_FACTORY_12.webp',
    ],
    'pdf' => 'port-experience/coffee-factory.pdf'
  ],
  [
    "id" => 5,
    'type' => 'restaurant',
    'name' => 'Dom Dom Bar',
    'path' => 'dom-dom-bar',
    'logo' => 'dom-dom-bar/dom-dom-pool-bar-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'banner' => 'dom-dom-bar/header-dom-dom-bar-port-experience.webp',
    'cover' => 'dom-dom-bar/cover-dom-dom-bar-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\dom-dom-bar\carousel-dom-dom-bar.webp'],
    'text_home' => "Need a drink by the pool? Dom Dom Bar is your place to go. Located right in the pool, enjoy the shows, join the party, and have fun while sippin' your favorite drink.",
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_1.webp',
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_2.webp',
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_3.webp',
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_5.webp',
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_6.webp',
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_7.webp',
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_8.webp',
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_9.webp',
      'assets\images\port-experience\dom-dom-bar\gallery\DOMDOM_BAR_10.webp',
    ],
    'pdf' => 'port-experience/dom-dom-bar.pdf'
  ],
  [
    'id' => 6,
    'type' => 'restaurant',
    'name' => 'Margarita Bar',
    'path' => 'margarita-bar',
    'logo' => 'margarita-bar/margarita-bar-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'banner' => 'margarita-bar/header-margarita-bar-port-experience.webp',
    'cover' => 'margarita-bar/cover-margarita-bar-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\margarita-bar\carousel-margarita-bar.webp'],
    'text_home' => 'One Margarita is not enough! Stop and have one on your way to the pool. Mango, strawberry, lime or passion fruit, all of them will take your breath away!',
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\margarita-bar\gallery\MARGARITA_BAR_1.webp',
      'assets\images\port-experience\margarita-bar\gallery\MARGARITA_BAR_2.webp',
      'assets\images\port-experience\margarita-bar\gallery\MARGARITA_BAR_3.webp',
      'assets\images\port-experience\margarita-bar\gallery\MARGARITA_BAR_4.webp',
      'assets\images\port-experience\margarita-bar\gallery\MARGARITA_BAR_5.webp',
      'assets\images\port-experience\margarita-bar\gallery\MARGARITA_BAR_6.webp',
      'assets\images\port-experience\margarita-bar\gallery\MARGARITA_BAR_7.webp',
      'assets\images\port-experience\margarita-bar\gallery\MARGARITA_BAR_8.webp',
    ],
    'pdf' => 'port-experience/margarita-bar.pdf'
  ],
  [
    'id' => 7,
    'type' => 'restaurant',
    'name' => 'Mojito Bar',
    'path' => 'mojito-bar',
    'logo' => 'mojito-bar/mojito-bar-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'banner' => 'mojito-bar/header-mojito-bar-port-experience.webp',
    'cover' => 'mojito-bar/mojito-bar-one.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\mojito-bar\carousel-mojito-bar.webp'],
    'text_home' => "When life gives you lemons, spice things up, and make Mojitos! Find cocktails, tequila, rum, and of course fresh mojitos with different flavors. Salud!",
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\mojito-bar\gallery\MOJITO_BAR_1.webp',
      'assets\images\port-experience\mojito-bar\gallery\MOJITO_BAR_2.webp',
      'assets\images\port-experience\mojito-bar\gallery\MOJITO_BAR_3.webp',
      'assets\images\port-experience\mojito-bar\gallery\MOJITO_BAR_4.webp',
      'assets\images\port-experience\mojito-bar\gallery\MOJITO_BAR_5.webp',
      'assets\images\port-experience\mojito-bar\gallery\MOJITO_BAR_7.webp',
    ],
    'pdf' => 'port-experience/mojito-bar.pdf'
  ],
  [
    'id' => 8,
    'type' => 'restaurant',
    'name' => 'Rum Rum Bar',
    'path' => 'rum-rum-bar',
    'logo' => 'rum-rum-bar/rum-rum-bar-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'banner' => 'rum-rum-bar/header-rum-rum-bar-port-experience.webp',
    'cover' => 'rum-rum-bar/cover-rum-rum-bar-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\rum-rum-bar\carousel-rum-rum-bar.webp'],
    'text_home' => "Salud to Dominican Rum! You'll need a fresh drink after all the shopping and having a good time, right? Visit Rum Rum for your favorite drinks!",
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_6.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_7.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_1.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_2.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_3.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_4.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_5.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_8.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_9.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_10.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_11.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_12.webp',
      'assets\images\port-experience\rum-rum-bar\gallery\RUM_RUM_BAR_13.webp',
    ],
    'pdf' => 'port-experience/rum-rum-bar.pdf'
  ],
  [
    'id' => 9,
    'type' => 'restaurant',
    'name' => 'Mexican Grill',
    'path' => 'mexican-grill',
    'logo' => 'mexican-grill/mexican-grill-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM120.17,87.24c3.72-12.43,9.93-21.51,17.22-25.35v55.25c0,8.33.16,26.27.47,35.5h-8.55c-.02-.96-.04-1.37-.08-4.64-.04-3.72-1.31-7.18-3.67-9.99-8.93-10.65-11.14-31.52-5.38-50.76ZM141.5,234.57c-2.04,2.28-4.79,3.54-7.74,3.54s-5.7-1.26-7.74-3.54c-2.04-2.28-3.08-5.27-2.93-8.41l3.84-67.47h13.67l3.84,67.45c.15,3.15-.89,6.14-2.93,8.42ZM172.74,234.57c-2.04,2.29-4.79,3.54-7.74,3.54-5.71,0-10.4-4.75-10.67-10.83,0,0,0,0,0,0h0c-.02-.37-.02-.75,0-1.12l3.87-67.47h13.61l3.61,62.12h0l.25,5.33c.15,3.15-.89,6.13-2.92,8.42ZM174.55,118.95c-4.53,3.48-7.01,8.95-6.65,14.6l.56,19.08h-6.93l.56-19.04c.36-5.69-2.13-11.17-6.65-14.64-5.76-4.43-8.91-11.39-8.42-18.65l2.11-36.11c.08-1.3,1.14-2.3,2.43-2.3h.05c1.33.03,2.4,1.13,2.39,2.47l-.38,36.24c-.01,1.13.41,2.2,1.2,3,.77.78,1.79,1.21,2.88,1.21,2.2,0,4.03-1.82,4.08-4.06l.73-36.45c.03-1.31,1.12-2.39,2.44-2.39h.06c1.32,0,2.41,1.07,2.44,2.39l.73,36.45c.05,2.28,1.85,4.06,4.08,4.06,1.09,0,2.11-.43,2.88-1.21.79-.8,1.22-1.86,1.2-3l-.38-36.24c-.01-1.33,1.06-2.44,2.39-2.47h.05c1.29,0,2.36,1,2.43,2.3l2.11,36.12s0,0,0,.01c.49,7.25-2.66,14.21-8.42,18.63Z"/>
      </svg>',
    'banner' => 'mexican-grill/header-mexican-grill-port-experience.webp',
    'cover' => 'mexican-grill/mexican-grill-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\mexican-grill\carousel-mexican-grill.webp'],
    'text_home' => "Tacos and grilled snacks, it doesn't get any better than that! Mexican Grill serves tasty and classic options, from fries to a classic beef burger, don't forget to stop by!",
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
    ],
    'single_gallery' => [
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_1.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_2.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_3.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_4.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_5.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_6.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_7.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_8.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_9.webp',
      'assets\images\port-experience\mexican-grill\gallery\MEXICAN_GRILL_10.webp',
    ],
    'pdf' => 'port-experience/mexican-grill.pdf'
  ],
  [
    'id' => 10,
    'type' => 'restaurant',
    'name' => 'Tiki Tiki',
    'path' => 'tiki-tiki',
    'logo' => 'tiki-tiki/tiki-tiki-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'banner' => 'tiki-tiki/header-tiki-tiki-port-experience.webp',
    'cover' => 'tiki-tiki/cover-tiki-tiki-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\tiki-tiki\carousel-tiki-tiki.webp'],
    'text_home' => 'Located in our beach-inspired area, a few steps from the Lazy River, Tiki Tiki serves fresh drinks and beverages for a relaxing day at port.',
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\tiki-tiki\gallery\TIKI_TIKI_1.webp',
      'assets\images\port-experience\tiki-tiki\gallery\TIKI_TIKI_4.webp',
      'assets\images\port-experience\tiki-tiki\gallery\TIKI_TIKI_5.webp',
      'assets\images\port-experience\tiki-tiki\gallery\TIKI_TIKI_6.webp',
    ],
    'pdf' => 'port-experience/tiki-tiki.pdf'
  ],
  [
    'id' => 11,
    'type' => 'restaurant',
    'name' => 'Taco Lover',
    'path' => 'taco-lover',
    'logo' => 'taco-lover/taco-lover-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM120.17,87.24c3.72-12.43,9.93-21.51,17.22-25.35v55.25c0,8.33.16,26.27.47,35.5h-8.55c-.02-.96-.04-1.37-.08-4.64-.04-3.72-1.31-7.18-3.67-9.99-8.93-10.65-11.14-31.52-5.38-50.76ZM141.5,234.57c-2.04,2.28-4.79,3.54-7.74,3.54s-5.7-1.26-7.74-3.54c-2.04-2.28-3.08-5.27-2.93-8.41l3.84-67.47h13.67l3.84,67.45c.15,3.15-.89,6.14-2.93,8.42ZM172.74,234.57c-2.04,2.29-4.79,3.54-7.74,3.54-5.71,0-10.4-4.75-10.67-10.83,0,0,0,0,0,0h0c-.02-.37-.02-.75,0-1.12l3.87-67.47h13.61l3.61,62.12h0l.25,5.33c.15,3.15-.89,6.13-2.92,8.42ZM174.55,118.95c-4.53,3.48-7.01,8.95-6.65,14.6l.56,19.08h-6.93l.56-19.04c.36-5.69-2.13-11.17-6.65-14.64-5.76-4.43-8.91-11.39-8.42-18.65l2.11-36.11c.08-1.3,1.14-2.3,2.43-2.3h.05c1.33.03,2.4,1.13,2.39,2.47l-.38,36.24c-.01,1.13.41,2.2,1.2,3,.77.78,1.79,1.21,2.88,1.21,2.2,0,4.03-1.82,4.08-4.06l.73-36.45c.03-1.31,1.12-2.39,2.44-2.39h.06c1.32,0,2.41,1.07,2.44,2.39l.73,36.45c.05,2.28,1.85,4.06,4.08,4.06,1.09,0,2.11-.43,2.88-1.21.79-.8,1.22-1.86,1.2-3l-.38-36.24c-.01-1.33,1.06-2.44,2.39-2.47h.05c1.29,0,2.36,1,2.43,2.3l2.11,36.12s0,0,0,.01c.49,7.25-2.66,14.21-8.42,18.63Z"/>
      </svg>',
    'banner' => 'taco-lover/header-taco-lover-port-experience.webp',
    'cover' => 'taco-lover/cover-taco-lover-port-experience.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\taco-lover\carousel-taco-lover.webp'],
    'text_home' => "Here, every day is taco day! Fresh tortillas, savory stews, and the authentic Mexican flavor, Taco Lover is the top spot for street tacos. Don't miss it!",
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_1.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_2.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_3.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_4.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_5.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_6.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_7.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_8.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_9.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_10.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_11.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_12.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_13.webp',
      'assets\images\port-experience\taco-lover\gallery\TACO_LOVER_14.webp',
    ],
    'pdf' => 'port-experience/taco-lover.pdf'
  ],
  [
    'id' => 12,
    'type' => 'restaurant',
    'name' => 'Icekery',
    'path' => 'icekery',
    'logo' => 'icekery\icekery-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM120.17,87.24c3.72-12.43,9.93-21.51,17.22-25.35v55.25c0,8.33.16,26.27.47,35.5h-8.55c-.02-.96-.04-1.37-.08-4.64-.04-3.72-1.31-7.18-3.67-9.99-8.93-10.65-11.14-31.52-5.38-50.76ZM141.5,234.57c-2.04,2.28-4.79,3.54-7.74,3.54s-5.7-1.26-7.74-3.54c-2.04-2.28-3.08-5.27-2.93-8.41l3.84-67.47h13.67l3.84,67.45c.15,3.15-.89,6.14-2.93,8.42ZM172.74,234.57c-2.04,2.29-4.79,3.54-7.74,3.54-5.71,0-10.4-4.75-10.67-10.83,0,0,0,0,0,0h0c-.02-.37-.02-.75,0-1.12l3.87-67.47h13.61l3.61,62.12h0l.25,5.33c.15,3.15-.89,6.13-2.92,8.42ZM174.55,118.95c-4.53,3.48-7.01,8.95-6.65,14.6l.56,19.08h-6.93l.56-19.04c.36-5.69-2.13-11.17-6.65-14.64-5.76-4.43-8.91-11.39-8.42-18.65l2.11-36.11c.08-1.3,1.14-2.3,2.43-2.3h.05c1.33.03,2.4,1.13,2.39,2.47l-.38,36.24c-.01,1.13.41,2.2,1.2,3,.77.78,1.79,1.21,2.88,1.21,2.2,0,4.03-1.82,4.08-4.06l.73-36.45c.03-1.31,1.12-2.39,2.44-2.39h.06c1.32,0,2.41,1.07,2.44,2.39l.73,36.45c.05,2.28,1.85,4.06,4.08,4.06,1.09,0,2.11-.43,2.88-1.21.79-.8,1.22-1.86,1.2-3l-.38-36.24c-.01-1.33,1.06-2.44,2.39-2.47h.05c1.29,0,2.36,1,2.43,2.3l2.11,36.12s0,0,0,.01c.49,7.25-2.66,14.21-8.42,18.63Z"/>
      </svg>',
    'banner' => 'icekery\header-icekery-port-experience.webp',
    'cover' => 'icekery\cover-icekery.webp',
    'title' => 'Menu',
    'gallery' => ['assets\images\port-experience\icekery\carousel-icekery.webp'],
    'text_home' => "Beat the heat with an ice cream! Icekery is the top spot to enjoy a delicious ice cream. Pick your favorite flavor and toppings, and don't let your ice cream melt!",
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

    ],
    'single_gallery' => [
      'assets\images\port-experience\icekery\gallery\ICEKERY_1.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_2.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_3.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_4.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_5.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_6.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_7.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_8.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_9.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_10.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_11.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_12.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_13.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_14.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_15.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_16.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_17.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_18.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_19.webp',
      'assets\images\port-experience\icekery\gallery\ICEKERY_20.webp',
    ],
  ],
  [
    'id' => 13,
    'type' => 'public',
    'name' => 'Lazy River',
    'path' => 'lazy-river',
    'logo' => '',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M143.94,159.45c-3.23-.17-6.46-.29-9.66-.68-9.12-1.12-17.86-3.55-25.68-8.55-6.97-4.45-12.51-9.99-12.82-19.01-.04-1.11-.79-1.71-1.88-1.67-1.11.04-1.83.73-1.67,1.84.35,2.36.53,4.82,1.34,7.04,2.29,6.28,6.9,10.7,12.37,14.26,10.86,7.07,23.03,9.7,35.73,10.37.74,0,1.45-.02,2.15.01,1.28.06,2.29-.29,2.33-1.74.05-1.45-.92-1.8-2.21-1.87Z"/>
          <path class="cls-1" d="M184.19,125.93c-1.41-.12-2,.75-2.04,2.06-.07,2.35-.96,4.45-2.59,6.01-2.16,2.09-4.6,3.88-7.02,5.88-2.98-4.52-7.1-6.45-11.56-7.75-7.53-2.18-15.17-2.38-22.84-.82-5.73,1.17-11.11,3.05-14.79,8.25-1.36-.87-2.75-1.62-4-2.57-3.13-2.37-5.64-5.14-5.8-9.39-.04-1.19-.84-1.8-2.03-1.69-1.14.11-1.58.87-1.56,1.97.09,3.8,1.77,6.89,4.34,9.55,3.11,3.24,6.92,5.45,11.08,7,12.83,4.78,25.92,5.1,39.14,1.89,5.7-1.38,11.03-3.66,15.52-7.57,3.2-2.79,5.46-6.13,5.71-10.54.07-1.2-.21-2.18-1.57-2.3Z"/>
          <path d="M60.27,145.44c.25,1.92,2.62,3.75,6.73,5.3-.71-4.9-.59-9.7.31-14.39-3.25,2.31-7.42,6.15-7.04,9.09Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM222.59,212.72c-1.3,2.54-3.73,4.41-6.41,6.06-12.39,7.66-32.71,7.84-45.39.43-.63-.37-1.05-.74-2.01-.19-13.07,7.53-32.22,7.52-45.25,0-.62-.36-.99-.39-1.65-.04-12.11,6.6-25.11,7.32-38.61,3.08-5.86-1.84-10.74-4.77-13.53-9.36v-1.84c.17-.31.34-.63.52-.94,1.83-3.11,7.49-3.88,9.93-1.07,5.95,6.87,22.12,8.64,32.23,3.96.55-.25,1.08-.54,1.6-.85,1.28-.77,2.46-1.67,3.48-2.61,3.12-2.86,7.37-2.94,10.29.02,2.34,2.36,5.42,3.92,9.02,4.86,6.33,1.66,12.69,1.64,19-.08,3.65-.99,6.66-2.65,9.02-5.05,2.5-2.54,7.01-2.66,9.47-.15,1.49,1.51,3.21,2.69,5.1,3.63,2.59,1.28,5.51,2.09,8.73,2.51,6.47.84,12.73.3,18.41-2.36,1.83-.85,3.46-2.06,4.86-3.32,1.64-1.49,3.45-2.45,6.01-2.19,2.62.27,4.27,1.51,5.05,3.43.03.07.1.14.15.19v1.84ZM222.59,192.07c-2.79,4.59-7.68,7.52-13.54,9.36-3.26,1.02-6.48,1.74-9.68,2.18-10.04,1.36-19.74-.24-28.93-5.26-.66-.36-1.04-.31-1.66.05-13.09,7.52-32.24,7.52-45.26-.02-.86-.49-1.27-.23-1.89.12-6.89,3.99-15.88,5.81-24.66,5.46-7.1-.28-14.07-1.98-19.66-5.12-3.19-1.8-6.04-3.87-7.6-6.76v-1.84c.17-.31.34-.63.52-.94,1.24-2.11,4.22-3.1,6.78-2.68,1.22.2,2.36.7,3.15,1.61,5.96,6.88,22.15,8.64,32.23,3.96,1.91-.89,3.64-2.14,5.08-3.46,3.11-2.86,7.37-2.94,10.29.02,2.34,2.37,5.42,3.92,9.02,4.87,6.43,1.68,12.88,1.64,19.28-.17,3.48-.98,6.38-2.57,8.64-4.88,2.56-2.61,7.07-2.78,9.57-.24,3.52,3.58,8.25,5.41,13.83,6.14,6.47.84,12.73.29,18.41-2.36,1.83-.85,3.46-2.06,4.86-3.32,1.64-1.49,3.45-2.45,6.01-2.19.38.04.69.14,1.02.22,2.01.46,3.36,1.56,4.03,3.21.03.07.1.13.15.19v1.84ZM239.23,146.05c-.54,4.23-4.33,7.44-11.46,9.78-1.58,6.45-4.54,12.68-8.91,18.39-.14.19-.31.35-.45.54-.33-.08-.65-.18-1.02-.22-2.56-.27-4.37.7-6.01,2.19-1.39,1.26-3.03,2.46-4.86,3.31-5.68,2.65-11.94,3.2-18.41,2.36-5.58-.73-10.31-2.57-13.83-6.14-2.49-2.53-7-2.37-9.57.24-2.26,2.31-5.16,3.9-8.64,4.88-6.4,1.81-12.85,1.84-19.28.17-3.6-.95-6.68-2.49-9.02-4.87-2.92-2.96-7.17-2.88-10.29-.02-1.44,1.32-3.17,2.58-5.08,3.46-10.09,4.67-26.27,2.91-32.23-3.96-.79-.91-1.92-1.41-3.15-1.61-2.69-3.58-4.97-7.5-6.72-11.84-.89-2.19-1.61-4.36-2.18-6.51-7.9-2.37-12.06-5.68-12.64-10.14-.99-7.73,10.11-14.42,11.38-15.16.61-.35,1.3-.39,1.93-.2,1.72-5.17,4.38-10.2,7.98-15.08,9.32-12.62,22.07-20.68,36.75-25.57,26.91-8.96,53.43-7.85,79.18,4.37,12,5.7,22.07,13.88,29.12,25.35,2.15,3.5,3.8,7.13,5,10.83.35.03.71.11,1.03.3,1.27.74,12.37,7.43,11.38,15.16Z"/>
          <path d="M228.45,137.13c.75,4.39.86,8.81.34,13.19,3.45-1.45,5.43-3.13,5.66-4.88.34-2.63-2.97-5.99-5.99-8.31Z"/>
          <path d="M186.4,109.88c-10.88-7.03-23.07-9.62-35.77-10.24-.74,0-1.45.02-2.15,0-1.27-.06-2.29.3-2.33,1.75-.04,1.45.93,1.8,2.22,1.86,3.23.15,6.46.27,9.66.64,9.13,1.08,17.88,3.48,25.71,8.45,6.99,4.43,12.55,9.94,12.89,18.96.04,1.11.8,1.71,1.89,1.66,1.11-.05,1.83-.73,1.66-1.84-.35-2.37-.55-4.82-1.37-7.04-2.31-6.27-6.94-10.67-12.42-14.21Z"/>
        </svg>',
    'banner' => 'lazy-river\header-lazy-river.webp',
    'cover' => 'lazy-river\cover-lazy-river-port-experience.webp',
    'title' => 'Menu',
    'text_home' => "A new way to explore the port! Take a tub float and let yourself go in this relaxing experience at the port.",
    'gallery' => ['assets\images\port-experience\lazy-river\carousel-lazy-river.webp'],
    'single_gallery' => [
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_1.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_2.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_3.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_4.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_5.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_6.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_7.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_8.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_9.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_10.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_11.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_12.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_13.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_14.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_15.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_16.webp',
      'assets\images\port-experience\lazy-river\gallery\LAZY_RIVER_17.webp',
    ],
  ],
  [
    'id' => 14,
    'type' => 'public',
    'name' => 'Splash Surfing',
    'path' => 'splash-surfing',
    'logo' => 'splash-surfing/splash-surffing.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M194.62,102.07s-14.43-15.95-33.81-23.17c-19.38-7.22-27.73-3.04-28.11,1.14,0,0,28.11-6.08,61.92,22.03Z"/>
        <path d="M112.95,131.7c-15.2,17.1-7.6,42.55-1.14,39.51,0,0-15.19-50.14,38.37-50.52,0,0-22.03-6.08-37.23,11.02Z"/>
        <path d="M207.92,95.23s24.31,20.13,17.1,66.48c0,0,6.46-21.65-1.14-45.2-7.6-23.56-15.96-21.28-15.96-21.28Z"/>
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM137.64,71.3c14.06-2.66,77.88,14.44,77.12,83.19,0,0-3.04-70.28-88.13-69.14,0,0-3.04-11.4,11.01-14.05ZM95.47,103.59c2.83-14.02,50.24-18.52,69.14-7.98,0,0-18.51-3.48-35.33-.38-23.74,4.37-35.71,17.76-33.81,8.36ZM75.72,144.62c-3.78,0-6.84-3.06-6.84-6.84s3.06-6.84,6.84-6.84,6.84,3.06,6.84,6.84-3.06,6.84-6.84,6.84ZM83.32,119.74c0-2.42,1.96-4.37,4.37-4.37s4.37,1.96,4.37,4.37-1.95,4.37-4.37,4.37-4.37-1.96-4.37-4.37ZM85.6,181.66c19.37,32.48,53.85,41.88,80.53,28.68,34.27-16.95,39.62-69.13,9.21-92.21-30.77-23.36-76.64-7.12-82.91,25.92-6.27,33.05,17.1,51.86,36.47,55.28,19.38,3.42,44.18-7.28,45.02-37.04.86-30.2-35.9-40.46-49.58-23.93-15.04,18.17-2.28,37.04-2.28,37.04,0,2.28-15.53,14.21-21.66-10.82-6.84-27.92,20.7-59.45,58.88-45.78,38.18,13.68,38.56,76.55-5.32,89.65-43.88,13.1-84.33-36.47-60.4-80.35,23.93-43.87,103.14-38.46,115.39,15.39,13.75,60.44-45.3,88.89-78.35,79.21-33.05-9.69-45.02-41.03-45.02-41.03ZM141.15,169.12c11.52,1.57,17.66-10.25,9.4-16.53-8.26-6.27-1.99-16.52,8.83-9.4,10.82,7.13,10.25,32.77-9.12,36.18-19.37,3.42-31.23-14.3-25.93-29.92,5.13-15.1,20.8-13.39,20.8-13.39-24.5,5.98-16.52,31.34-3.99,33.05ZM228.05,167.98c-9.12,39.32-50.15,67.05-91.74,59.83,0,0,41.98,3.42,67.05-28.49,25.07-31.91,18.43-79.78-2.66-103.71,0,0,1.71-7.98,12.54-2.28,10.82,5.7,23.93,35.33,14.81,74.64Z"/>
      </svg>',
    'banner' => 'splash-surfing/header-splash-surfing.webp',
    'cover' => '/splash-surfing/cover-splash-surfing-port-experience.webp',
    'title' => 'Menu',
    'text_home' => "Catch a wave and get some sun! Our Splash surfing experience gives you the adrenaline rush you need while at the port! *Activity with extra cost.",
    'gallery' => ['assets\images\port-experience\splash-surfing\carousel-spash.webp'],
    'single_gallery' => [
      'assets\images\port-experience\splash-surfing\gallery\SPLASH_SURFFING_9.webp',
      'assets\images\port-experience\splash-surfing\gallery\SPLASH_SURFFING_3.webp',
      'assets\images\port-experience\splash-surfing\gallery\SPLASH_SURFFING_7.webp',
      'assets\images\port-experience\splash-surfing\gallery\SPLASH_SURFFING_8.webp',
      'assets\images\port-experience\splash-surfing\gallery\SPLASH_SURFFING_6.webp',
      'assets\images\port-experience\splash-surfing\gallery\SPLASH_SURFFING_5.webp',
      'assets\images\port-experience\splash-surfing\gallery\SPLASH_SURFFING_4.webp',
    ],
  ],
  [
    'id' => 15,
    'type' => 'public',
    'name' => 'Spa Wellness',
    'path' => 'spa-wellness',
    'logo' => 'spa-wellness/spa-wellness.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM157.97,73.29c8.85-1.6,17.33,4.27,18.94,13.12,1.61,8.85-4.27,17.33-13.12,18.94-8.85,1.61-17.33-4.27-18.93-13.12-1.61-8.85,4.26-17.33,13.11-18.94ZM206,204.89c-11.19,5.8-42.57,20.63-43.9,21.26-1.19.56-2.45.83-3.69.83-3.24,0-6.35-1.83-7.83-4.96-2.04-4.32-.19-9.48,4.13-11.52.22-.1,14.77-6.98,27.6-13.2-3.21-1.53-6.22-2.94-9-4.24-2.27.6-4.76,1.08-7.41,1.43.54-1.38.93-2.82,1.18-4.33.18-1.12.3-2.27.3-3.45,0-7.42-3.79-13.95-9.53-17.78-3.32-2.22-7.31-3.52-11.59-3.57-.08,0-.16-.01-.24-.01s-.15.01-.23.01c-4.28.05-8.26,1.35-11.59,3.56-5.75,3.83-9.54,10.36-9.54,17.78,0,1.18.12,2.33.31,3.45.24,1.5.64,2.95,1.18,4.33-2.65-.35-5.14-.83-7.41-1.43-2.78,1.3-5.79,2.71-9,4.24,12.84,6.22,27.39,13.09,27.6,13.2,4.32,2.04,6.17,7.2,4.13,11.52-1.48,3.13-4.58,4.96-7.83,4.96-1.24,0-2.49-.27-3.69-.83-1.33-.63-32.71-15.45-43.9-21.26-2.9-1.5-4.71-4.51-4.67-7.77.04-3.27,1.91-6.23,4.84-7.67,9.13-4.48,17.78-8.59,24.86-11.9,11.66-11.78,23.94-15.42,34.7-15.41.08,0,.16,0,.24,0s.16,0,.24,0c10.76-.01,23.04,3.63,34.7,15.41,7.08,3.31,15.73,7.41,24.86,11.9,2.93,1.44,4.8,4.41,4.84,7.67.04,3.27-1.77,6.27-4.67,7.77ZM146.02,203.88c-6.47,0-12.11-3.59-15.03-8.9-1.1-2-1.81-4.25-2.04-6.63-.05-.54-.08-1.07-.08-1.62,0-6.75,3.91-12.57,9.58-15.37,2.22-1.09,4.7-1.73,7.33-1.76.08,0,.15-.01.23-.01.08,0,.16.01.24.01,2.63.04,5.11.67,7.33,1.76,5.67,2.8,9.59,8.62,9.59,15.37,0,.55-.03,1.08-.08,1.62-.22,2.39-.94,4.63-2.04,6.64-2.92,5.3-8.55,8.89-15.03,8.89ZM214.57,185.89c-.38.93-4.06-1.91-11.61-5.3-12.07-5.12-14.88-4.73-19.29-9.15,1.28-7.05,4.95-23.55,3.11-26.65-2.98-5.05-6.06-9.27-8.5-12.34-2.63,3.72-5,7.02-6.26,8.71-1.34,1.79-4.9,6.54-28.25,7.56-.11,0-.23,0-.34,0-4.09,0-7.5-3.23-7.68-7.35-.18-4.24,3.1-7.83,7.34-8.02,6.98-.31,14.64-1.36,17.29-2.34,2.66-3.63,8.22-11.54,12.42-17.52,1.35-5.24,4.43-9.63,8.15-11.21,7.82-3.3,20.29,7.14,25.28,15.04,7.69,12.17,18.26,43.89,8.33,68.56Z"/>
      </svg>',
    'banner' => 'spa-wellness/header-spa-wellness.webp',
    'cover' => '/spa-wellness/cover-spa-port-experience.webp',
    'title' => 'Menu',
    'text_home' => "The ultimate relaxing experience on your arrival. Enjoy, and let yourself go with unique techniques and get yourself in a state of pure bliss.",
    'gallery' => ['assets\images\port-experience\spa-wellness\carousel-spa-wellness.webp'],
    'single_gallery' => [
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_1.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_4.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_3.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_2.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_5.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_6.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_7.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_8.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_9.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_10.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_11.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_12.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_13.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_14.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_15.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_16.webp',
      'assets\images\port-experience\spa-wellness\gallery\SPA_WELLNESS_17.webp',
    ],
  ],
  [
    'id' => 16,
    'type' => 'public',
    'name' => 'Pool and Shows',
    'path' => 'pool',
    'logo' => '',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M170.63,133.55h-57.36v15.76h57.36v-15.76Z"/>
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM100.42,102.38c.02-12.6,10.08-22.27,22.69-21.89,11.3.34,20.79,10.11,20.79,21.4,0,3.75-2.7,6.62-6.29,6.67-3.54.05-6.32-2.65-6.5-6.3-.26-5.33-4.13-9.12-9.21-9.01-4.95.12-8.69,4.11-8.7,9.35-.02,5.95,0,11.91,0,18.03h57.57v-1.74c0-5.53-.02-11.06,0-16.6.05-11.37,8.39-20.54,19.75-21.74,10.7-1.14,20.75,6.21,23.21,17.01.31,1.34.47,2.73.51,4.1.11,3.9-2.55,6.81-6.19,6.9-3.66.09-6.4-2.63-6.58-6.55-.21-4.67-3.66-8.35-8.17-8.73-4.61-.39-8.69,2.72-9.58,7.35-.16.83-.15,1.69-.15,2.54,0,22.56,0,45.11-.03,67.67,0,1.1-.11,2.25-.48,3.27-1,2.79-4.05,4.46-6.92,3.97-3.03-.53-5.29-3.03-5.36-6.09-.07-3.19-.02-6.38-.02-9.68h-57.58c0,3.17.05,6.34-.01,9.51-.1,4.44-4.37,7.4-8.5,5.96-2.57-.9-4.25-3.27-4.26-6.14-.03-5.74,0-11.49,0-17.24,0-17.34-.02-34.68,0-52.03ZM219.63,207.55c-1.3,2.54-3.73,4.41-6.41,6.06-12.39,7.66-32.7,7.84-45.39.43-.63-.37-1.06-.74-2.01-.19-13.07,7.53-32.22,7.52-45.25,0-.62-.36-.99-.39-1.66-.04-12.11,6.6-25.11,7.32-38.61,3.08-5.86-1.84-10.74-4.77-13.53-9.36v-1.84c.17-.31.34-.63.52-.94,1.83-3.11,7.49-3.88,9.93-1.07,5.95,6.87,22.12,8.64,32.23,3.96.55-.25,1.08-.54,1.6-.85,1.28-.77,2.46-1.67,3.48-2.61,3.12-2.86,7.37-2.94,10.29.02,2.34,2.36,5.42,3.92,9.02,4.86,6.33,1.66,12.69,1.64,19-.08,3.65-.99,6.66-2.65,9.02-5.05,2.5-2.54,7.01-2.66,9.47-.15,1.49,1.51,3.21,2.69,5.1,3.63,2.59,1.28,5.51,2.09,8.73,2.51,6.47.84,12.73.3,18.41-2.36,1.83-.85,3.46-2.06,4.86-3.32,1.64-1.49,3.45-2.45,6.01-2.19,2.61.27,4.27,1.51,5.05,3.43.03.07.1.14.15.19v1.84ZM219.63,186.9c-2.79,4.59-7.67,7.52-13.53,9.36-3.26,1.02-6.49,1.74-9.68,2.18-10.05,1.36-19.74-.24-28.93-5.26-.66-.36-1.04-.31-1.66.05-13.09,7.52-32.24,7.52-45.25-.02-.86-.49-1.27-.23-1.89.12-6.88,3.99-15.88,5.81-24.66,5.46-7.1-.28-14.07-1.98-19.66-5.12-3.19-1.8-6.04-3.87-7.6-6.76v-1.84c.17-.31.34-.63.52-.94,1.24-2.11,4.22-3.1,6.78-2.68,1.22.2,2.36.7,3.15,1.61,5.96,6.88,22.15,8.64,32.23,3.96,1.91-.89,3.64-2.14,5.08-3.46,3.11-2.86,7.37-2.94,10.29.02,2.34,2.37,5.42,3.92,9.01,4.87,6.44,1.68,12.89,1.64,19.28-.17,3.48-.98,6.38-2.57,8.64-4.88,2.56-2.61,7.07-2.78,9.57-.24,3.52,3.58,8.25,5.41,13.83,6.14,6.47.84,12.73.29,18.41-2.36,1.83-.85,3.46-2.06,4.86-3.32,1.64-1.49,3.45-2.45,6.01-2.19.38.04.69.14,1.02.22,2.01.46,3.36,1.56,4.03,3.21.03.07.1.13.15.19v1.84Z"/>
      </svg>',
    'banner' => 'pool\header-pool-snd-showsport-experience.webp',
    'cover' => 'pool/cover-pool-port-experience.webp',
    'title' => 'Menu',
    'text_home' => "Refreshing and relaxing has never looked this good! Catch some bun by our pools and watch our vibrant shows.",
    'gallery' => ['assets\images\port-experience\pool\carousel-pool.webp'],
    'single_gallery' => [
      'assets\images\port-experience\pool\carousel-pool.webp',
      'assets\images\port-experience\pool\gallery\POOL_1.webp',
      'assets\images\port-experience\pool\gallery\POOL_2.webp',
      'assets\images\port-experience\pool\gallery\POOL_3.webp',
      'assets\images\port-experience\pool\gallery\POOL_4.webp',
      'assets\images\port-experience\pool\gallery\POOL_5.webp',
      'assets\images\port-experience\pool\gallery\POOL_6.webp',
      'assets\images\port-experience\pool\gallery\POOL_7.webp',
      'assets\images\port-experience\pool\gallery\POOL_8.webp',
      'assets\images\port-experience\pool\gallery\POOL_9.webp',
      'assets\images\port-experience\pool\gallery\POOL_10.webp',
      'assets\images\port-experience\pool\gallery\POOL_11.webp',
    ],
  ],
  [
    'id' => 17,
    'type' => 'public',
    'name' => 'Beach Playground',
    'path' => 'beach',
    'logo' => '',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM119.89,112.83l-4.63,2.67-4.63,2.67v-10.69l4.63,2.67,4.63,2.67ZM89.03,131.22c-10.23,0-18.52-8.29-18.52-18.52s8.29-18.52,18.52-18.52,18.52,8.29,18.52,18.52-8.29,18.52-18.52,18.52ZM94.38,134.43l-2.67,4.63-2.67,4.63-2.67-4.63-2.67-4.63h10.69ZM77.58,131.86l-5.16,1.38-5.16,1.39,1.38-5.16,1.38-5.16,3.78,3.78,3.78,3.78ZM104.35,128.08l3.78-3.78,1.38,5.16,1.38,5.16-5.16-1.39-5.16-1.38,3.78-3.78ZM105.73,92.37l5.16-1.38-1.38,5.16-1.38,5.16-3.78-3.78-3.78-3.78,5.16-1.38ZM86.36,86.47l2.67-4.63,2.67,4.63,2.67,4.63h-10.69l2.67-4.63ZM72.33,92.28l5.16,1.38-3.78,3.78-3.78,3.78-1.38-5.16-1.38-5.16,5.16,1.38ZM62.8,110.15l4.63-2.67v10.69l-4.63-2.67-4.63-2.67,4.63-2.67ZM155.36,199.8c2.27,1.43,4.84,2.19,7.49,2.19s5.21-.76,7.48-2.19c2.48-1.57,5.37-2.36,8.31-2.36h.87c2.92,0,5.8.79,8.28,2.36,2.26,1.43,4.83,2.19,7.48,2.19s5.22-.76,7.48-2.19c2.48-1.57,5.37-2.36,8.31-2.36h.87c2.94,0,5.83.82,8.32,2.38,2.21,1.38,4.71,2.13,7.28,2.16,2.45.03,4.62,1.74,4.95,4.16.41,2.98-1.89,8.04-4.8,8.04-1.7,0-3.39-.18-5.03-.54-7.36-1.62-15-1.62-22.36,0-1.64.36-3.32.54-5.02.54s-3.38-.18-5.03-.54c-7.36-1.62-15.01-1.61-22.37,0-1.64.36-3.32.54-5.02.54s-3.39-.18-5.03-.54c-7.36-1.62-15.01-1.61-22.37,0-1.63.36-3.31.54-5.01.54s-3.39-.18-5.03-.54c-7.36-1.62-15-1.62-22.36,0-1.64.36-3.32.54-5.02.54-2.46,0-4.88-.39-7.19-1.14-5.97-1.93-12.38-1.72-18.37.11-2.15.66-4.39,1.01-6.68,1.02-2.65.02-4.93-4.53-5.01-7.18-.09-2.75,2.11-5.02,4.84-5.02s5.21-.76,7.47-2.2c2.48-1.58,5.38-2.38,8.33-2.39h.79c2.95,0,5.85.8,8.34,2.38,2.27,1.44,4.84,2.21,7.49,2.21s5.22-.76,7.48-2.19c2.48-1.57,5.37-2.36,8.31-2.36h.87c2.92,0,5.8.79,8.27,2.35,2.26,1.43,4.84,2.19,7.49,2.19s5.21-.76,7.48-2.19c1.41-.89,2.96-1.46,4.57-1.85l29.51-73.55c-1.36-3.03-3.82-5.49-6.95-6.75-4.26-1.71-9.18-1-12.83,1.86-.86.67-2,.83-3.01.43-1.01-.41-1.73-1.31-1.88-2.39-.67-4.59-3.72-8.5-7.98-10.21-3.96-1.58-8.34-1.14-12.04,1.23-1.12.71-2.57.62-3.59-.22-1.02-.85-1.38-2.25-.88-3.48.03-.08.32-.7.36-.78,10.36-21.78,37.86-30.27,65.46-21.19l1.07-2.68c1-2.5,3.84-3.71,6.34-2.71,2.5,1,3.71,3.84,2.71,6.34l-1.07,2.68c26.24,12.51,40.27,37.64,32.84,60.13-.23.7-.32.97-.43,1.25-.49,1.22-1.71,1.99-3.03,1.91-1.31-.08-2.43-1.01-2.75-2.3-1.09-4.3-3.95-7.67-7.86-9.23-4.25-1.71-9.16-1.01-12.82,1.82-.86.66-1.94.98-3,.42-.99-.4-1.7-1.29-1.87-2.34-.75-4.68-3.75-8.49-8.02-10.2-3.14-1.26-6.63-1.18-9.71.08l-28.32,70.58c.9.35,1.81.65,2.63,1.17Z"/>
      </svg>',
    'banner' => 'beach/header-beach.webp',
    'cover' => '/beach/cover-beach-port-experience.webp',
    'title' => 'Gallery',
    'text_home' => "A glimpse of beach lifestyle while you're having a good time. Enjoy playing in the sand and getting a new tan.",
    'gallery' => ['assets\images\port-experience\beach\carousel-beach.webp'],
    'single_gallery' => [
      'assets\images\port-experience\beach\gallery\BEACH_PLAYGROUND_1.webp',
      'assets\images\port-experience\beach\carousel-beach.webp',
      'assets\images\port-experience\beach\gallery\BEACH_PLAYGROUND_2.webp',
      'assets\images\port-experience\beach\gallery\BEACH_PLAYGROUND_3.webp',
      'assets\images\port-experience\beach\gallery\BEACH_PLAYGROUND_4.webp',
    ],
  ],
  [
    'id' => 18,
    'type' => 'public',
    'name' => 'Shopping Experience',
    'path' => 'shopping-experience',
    'logo' => '',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 900">
  <path class="cls-1" d="M450.18,238.19c-50.22,0-90.84,61.34-90.84,136.09h181.32c0-74.76-40.63-136.09-90.48-136.09Z"/>
  <path class="cls-1" d="M343.99,404.58c-8.04,0-14.95,6.89-14.95,15.33s6.9,14.96,14.95,14.96c8.45,0,15.35-6.52,15.35-14.96s-6.9-15.33-15.35-15.33Z"/>
  <path class="cls-1" d="M556,404.58c-8.42,0-15.34,6.89-15.34,15.33s6.91,14.96,15.34,14.96,14.96-6.52,14.96-14.96-6.53-15.33-14.96-15.33Z"/>
  <path class="cls-1" d="M450,0C201.47,0,0,201.47,0,450.01s201.47,449.99,450,449.99,450-201.47,450-449.99S698.53,0,450,0ZM631.52,692.09h-363.03v-317.81h60.56c0-91.63,54.44-166.38,121.14-166.38s120.77,74.74,120.77,166.38h60.56v317.81Z"/>
</svg>',
    'banner' => 'shopping-experience/header-retail.webp',
    'cover' => '/shopping-experience/cover-shopping-experience.webp',
    'title' => 'Gallery',
    'text_home' => "A shopping experience to enjoy. From beauty, to souvenirs, and jewelry, find amazing souvenirs at our stores!",
    'gallery' => ['assets\images\port-experience\shopping-experience\carousel-shopping-experience.webp'],
    'single_gallery' => [
      'assets\images\port-experience\shopping-experience\gallery\retail_1.webp',
      'assets\images\port-experience\shopping-experience\gallery\retail_2.webp',
      'assets\images\port-experience\shopping-experience\gallery\retail_3.webp',
      'assets\images\port-experience\shopping-experience\gallery\retail_4.webp',
      'assets\images\port-experience\shopping-experience\gallery\retail_5.webp',
    ],
  ],
  [
    'id' => 19,
    'type' => 'public',
    'name' => 'Huracan Lounge&nbsp;Bar',
    'path' => 'huracan-bar',
    'logo' => 'huracan/huracan-white.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M123.34,124.05c7.09-2.04,14.72-2.53,22.09-1.38,2.5.4,4.95.97,7.36,1.65v-20.21h-40.17l10.73,19.95Z"/>
          <path d="M159.66,126.17c1.63.55,3.25,1.13,4.86,1.7,3.35,1.2,6.81,2.44,10.23,3.4l14.6-27.17h-29.69v22.06Z"/>
          <path d="M150,0C67.16,0,0,67.16,0,150s67.16,150,150,150,150-67.16,150-150S232.84,0,150,0ZM196.78,104.29l-18.73,33.77s0,.03-.01.04l-25.03,45.14v36.74h40.25c1.66,0,3.01,1.35,3.01,3s-1.35,3-3.01,3h-86.51c-1.66,0-3-1.35-3-3s1.34-3,3-3h40.25v-36.74l-29.14-52.57-14.64-26.38c-.52-.93-.5-2.07.04-2.98.54-.91,1.53-1.48,2.58-1.48h46.56v-3.33c0-5.58,2.05-10.92,5.78-15.06,4.25-4.74,10.36-7.45,16.73-7.45h18.95c1.66,0,3,1.35,3,3s-1.34,3.01-3,3.01h-18.95c-4.68,0-9.14,1.99-12.27,5.45-2.73,3.04-4.23,6.96-4.23,11.04v3.33h35.75c1.06,0,2.04.56,2.58,1.48.54.91.55,2.05.04,2.98Z"/>
        </svg>',
    'banner' => 'huracan/header-huracan.webp',
    'cover' => '/huracan/cover-huracan.webp',
    'title' => 'Gallery',
    'text_home' => "Right next to the pool! Have your favorite drink to celebrate and find a cool spot to watch the pool's main show.",
    'gallery' => ['assets\images\port-experience\huracan\carousel-huracan.webp'],
    'single_gallery' => [
      'assets\images\port-experience\huracan\gallery\huracan_1.webp',
      'assets\images\port-experience\huracan\gallery\huracan_2.webp',
      'assets\images\port-experience\huracan\gallery\huracan_4.webp',
      'assets\images\port-experience\huracan\gallery\huracan_5.webp',
      'assets\images\port-experience\huracan\gallery\huracan_6.webp',
      'assets\images\port-experience\huracan\gallery\huracan_7.webp',
      'assets\images\port-experience\huracan\gallery\huracan_8.webp',
    ],
  ],
  [
    'id' => 20,
    'type' => 'public',
    'name' => "Mr Rum's Quest",
    'path' => 'mr-rum-quest',
    'logo' => 'mr-rum\rum-quest.svg',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 900">
        <ellipse cx="457.5" cy="438" rx="365.5" ry="384" fill="rgba(255, 255, 255, 0)">
        </ellipse>
        <path class="cls-1" d="M 662.3 457.9 c -1 1.1 -1 2.7 0.1 3.7 c 1.1 1 2.7 1 3.8 -0.1 c 1 -1.1 1 -2.7 -0.1 -3.8 c -1.1 -1 -2.7 -1 -3.8 0.1 Z"/>
        <path class="cls-1" d="M 450 0 C 201.5 0 0 201.5 0 450 s 201.5 450 450 450 s 450 -201.5 450 -450 S 698.5 0 450 0 Z M 593.2 547.1 c 0 0.2 -0.1 0.4 -0.1 0.6 c 0 0.7 -0.1 1.5 -0.1 2.2 c 0 24.1 -0.1 48.2 -0.1 72.3 c 0 6.5 0.1 13 -0.2 19.5 c -0.1 3.1 -1.7 5.8 -3.4 8.3 c -3.3 5.1 -7.8 8.8 -12.8 12.1 c -11.4 7.4 -24 11.9 -36.9 15.6 c -19.4 5.5 -39.2 8.5 -59.2 10.3 c -15.8 1.4 -31.6 2 -47.5 1.6 c -31.1 -0.8 -61.9 -3.9 -91.8 -13 c -10.8 -3.3 -21.2 -7.3 -30.8 -13.4 c -5.1 -3.2 -9.8 -6.8 -13.4 -11.8 c -2.9 -4 -4.5 -8.3 -4.5 -13.5 c -0.1 -22.6 -0.5 -45.2 -0.9 -67.8 c -0.3 -17.1 -0.6 -34.1 -0.8 -51.2 c -0.4 -3.6 -0.1 -7.3 -0.2 -10.9 c 0 -0.3 -0.1 -0.8 0.3 -0.9 c 0.5 -0.2 0.8 0.1 1.1 0.5 c 0.2 0.3 0.4 0.6 0.6 0.9 c 3.1 7.7 9.2 12.7 15.9 16.9 c 11.6 7.3 24.5 11.7 37.6 15.3 c 16.9 4.7 34.2 7.5 51.6 9.2 c 8.3 0.8 16.6 1.3 24.9 1.8 c 11.6 0.6 23.2 0.5 34.8 0.2 c 13.3 -0.3 26.5 -1.5 39.6 -3.3 c 14.9 -2 29.7 -4.7 44.1 -9 c 12.2 -3.6 24.2 -7.8 34.9 -14.8 c 6.6 -4.3 12.4 -9.3 15.3 -16.9 c 0.2 -0.6 0.5 -1.4 1.3 -1.3 c 0.9 0.1 0.5 0.9 0.5 1.4 c 0 13.1 0 26.1 0 39.2 Z M 302.3 484 c 1.2 -1.1 2.4 -2.3 3.8 -3.3 c 13.1 -10.4 28.6 -15.5 44.5 -19.6 c 18.8 -4.9 38 -7.5 57.4 -8.9 c 14.2 -1.1 28.4 -1.5 42.6 -1.1 c 30.6 0.8 61 3.8 90.5 12.6 c 11.4 3.4 22.3 7.9 32.2 14.5 c 3.1 2.1 6.1 4.2 8.5 7.1 c 5.3 6.5 4.8 16.2 -1.5 23.2 c -6.2 6.8 -14 11 -22.1 14.5 c -15.9 7 -32.7 10.8 -49.7 13.6 c -11.7 1.9 -23.5 3.2 -35.4 4 c -6.6 0.5 -13.2 0.8 -19.9 0.9 c -3.3 0 -6.5 0.4 -9.8 0.4 c -13.2 -0.2 -26.4 -0.6 -39.5 -1.7 c -17.9 -1.5 -35.6 -4.1 -53.1 -8.4 c -11 -2.8 -21.7 -6.3 -31.9 -11.4 c -4.8 -2.4 -9.2 -5.3 -13.3 -8.8 c -3.2 -2.7 -5.7 -6.1 -7.2 -10 c -2.5 -6.1 -0.9 -12.8 4.1 -17.5 Z M 591.9 457.6 c 2.4 -3.5 4.6 -7.2 6.7 -10.9 c -0.2 5.1 -0.4 10.2 -0.6 15.3 c -2 -1.5 -4 -2.8 -6 -4.3 Z M 598.6 446.5 c 12 -21.7 18.3 -46.2 17.8 -71.6 c -0.3 -15.9 -3.1 -31.3 -8.4 -45.8 c 25.9 27.4 47 52.4 63.5 74.4 c 2.8 3.8 2.7 8.8 -0.3 11.9 l -14.2 14.8 l -3.6 3.8 l -33.3 34.5 c -3 3.1 -8 3.4 -11.9 0.7 c -3.3 -2.3 -6.8 -4.8 -10.2 -7.3 c 0.2 -5.1 0.5 -10.2 0.6 -15.3 Z M 560.8 281.5 c 14.2 13.7 27.5 27 39.7 39.8 c 1 2.3 1.8 4.6 2.7 7 c 5.6 14.8 8.8 30.5 9.1 46.8 c 0.4 21.8 -4.3 43 -13.4 62.1 c -3 6.2 -6.4 12.2 -10.3 17.9 c -2.4 -1.8 -5 -3.8 -7.4 -5.7 c -17.9 -13.8 -37.2 -29.8 -58 -48.3 c 10.7 -12.5 19.1 -26.8 24.9 -42.3 c 0.2 -0.5 0.3 -0.9 0.5 -1.4 c 2.9 -8.1 5.2 -16.5 6.7 -25.1 c 2.3 -13.4 2.5 -26.8 1 -39.9 c -0.7 -6 -1.6 -12.1 -3.1 -17.9 c 2.5 2.4 5 4.8 7.5 7.2 Z M 547.7 269 c 0.1 0.4 0.2 0.7 0.3 1.1 c 1.9 6.7 3.3 13.5 4.2 20.4 c 1.8 13.5 1.5 27.3 -0.8 41.1 c -1.6 9.4 -4.1 18.4 -7.4 27.1 c -0.2 0.6 -0.5 1.1 -0.7 1.7 c -5.6 13.9 -13.3 26.7 -23 38.1 c -9.4 -8.4 -19.1 -17.5 -29 -26.9 c -1.3 -1.2 -2.5 -2.3 -3.7 -3.5 c -1.8 -1.7 -3.5 -3.3 -5.3 -5 c -7.6 -7.4 -15 -14.6 -22.2 -21.8 l 18.9 -19.6 c 15.3 7.9 31.3 7.8 40.3 -1.5 c 9 -9.3 8.4 -25.2 0.1 -40.2 c 0 0 0 -0.1 -0.1 -0.1 l 13.9 -14.4 l 5 -5.2 c 3.1 2.9 6.3 5.9 9.5 8.9 Z M 454.7 299.9 c 2.5 3.6 5.4 7 8.7 10.2 c 3.4 3.2 6.9 6 10.5 8.3 l -17.3 17.9 l -17.7 -17.1 l -1.5 -1.5 l 0.1 -0.1 l 17.2 -17.9 Z M 452.9 268.7 c 0.7 -3.3 2.2 -6.2 4.5 -8.6 c 6.6 -6.8 18.2 -7.2 29.8 -2 c 1.8 0.8 3.5 1.7 5.3 2.7 c 3.7 2.2 7.3 4.9 10.7 8.2 c 2.8 2.7 5.2 5.6 7.3 8.6 c 0.4 0.6 0.9 1.2 1.3 1.8 c 1.1 1.7 2.1 3.5 2.9 5.2 c 5.6 11.4 5.6 23 -1 29.8 c -6.6 6.8 -18.2 7.2 -29.8 2 c -1.8 -0.8 -3.5 -1.7 -5.3 -2.7 c -3.7 -2.2 -7.3 -4.9 -10.7 -8.2 c -3.4 -3.3 -6.3 -6.8 -8.6 -10.4 c -1.1 -1.7 -2.1 -3.5 -2.9 -5.2 c -3.6 -7.5 -4.9 -15 -3.5 -21.3 Z M 514.6 237.9 l 10.4 10.1 l 8.8 8.5 l -6.9 7.2 l -10.7 11.1 c -2.5 -3.6 -5.4 -7 -8.7 -10.2 c -2.8 -2.7 -5.8 -5 -8.8 -7.1 c -0.6 -0.4 -1.2 -0.9 -1.8 -1.3 l 17.2 -17.9 l 0.4 -0.4 Z M 509.9 234.5 l -18 18.7 c -13.6 -7 -27.7 -7.7 -37 -1.3 c -1.2 0.8 -2.3 1.7 -3.3 2.7 c -3.5 3.6 -5.5 8.3 -6.2 13.5 c -1.1 8.2 1.1 17.6 6.2 26.8 l -18.1 18.7 c -7.2 -7.6 -14 -15.1 -20.6 -22.3 c 6.3 -7.4 12 -15.5 16.7 -24.2 c 1.5 -2.7 2.9 -5.3 4.2 -8.1 c 1.2 -2.6 2.3 -5.2 3.4 -7.9 c 8.8 -21.8 12 -45.1 9.5 -68 c 19.4 14.4 40.6 31.6 63.1 51.4 Z M 442.4 179.8 c 3.3 24 0.1 48.4 -9.4 71.2 c -0.9 2.1 -1.7 4.3 -2.7 6.4 c -1.6 3.3 -3.3 6.5 -5.1 9.7 c -4.3 7.6 -9.3 14.7 -14.9 21.3 c -6.5 -7.3 -12.7 -14.5 -18.6 -21.5 c -4.9 -5.8 -9.5 -11.5 -13.9 -17 c -2 -2.6 -4.1 -5.2 -6.1 -7.7 c 1.5 -2.7 2.9 -5.5 4.3 -8.3 c 13.4 -28.4 17 -59.6 10.7 -89.8 c 16.1 8.6 34.9 20.6 55.6 35.9 Z M 325.3 132.8 c 8.6 -8.9 28.4 -5.7 56.8 8.7 c 7.1 30.3 3.8 62 -9.7 90.5 c -1.1 2.2 -2.1 4.4 -3.3 6.5 c -40.9 -53.8 -56.8 -92.3 -43.8 -105.8 Z M 622.3 501.7 c -0.3 12.5 0.2 25.1 -0.3 37.6 c -0.5 13.3 0.1 26.6 -0.5 39.8 c -0.5 12.8 0.1 25.5 -0.4 38.3 c -0.6 13.2 0.1 26.4 -0.5 39.6 c -0.3 7.5 -0.1 14.9 -0.4 22.3 c -0.4 8 -4 14.7 -9.4 20.5 c -7.8 8.4 -17.5 14 -27.9 18.6 c -18.5 8.3 -38 13.1 -57.9 16.7 c -11.7 2.1 -23.4 3.6 -35.1 4.7 c -6.1 0.6 -12.3 0.6 -18.5 0.8 c -4 0.1 -8 0.4 -12 0.3 h -0.1 c 0 0.1 0 0.1 0 0.2 h -18.4 h 0 h -2.2 h 0 h -18 c 0 -0.1 0 -0.1 0 -0.2 h 0 c -30.3 0.1 -60.1 -3.4 -89.5 -10.9 c -12.4 -3.2 -24.5 -7.2 -36 -12.8 c -7.6 -3.7 -14.9 -8.1 -21.2 -13.8 c -6.1 -5.6 -10.7 -12.2 -12.2 -20.5 c -0.7 -3.8 -0.7 -7.7 -0.7 -11.6 c 0.1 -15.3 -0.5 -30.6 -0.7 -46 c -0.1 -9.1 0.1 -18.3 -0.4 -27.4 c -0.5 -8.3 0.1 -16.5 -0.4 -24.7 c -0.5 -9.3 0 -18.5 -0.5 -27.8 c -0.4 -8.3 0.1 -16.5 -0.4 -24.7 c -0.5 -9.1 0 -18.3 -0.5 -27.4 c -0.5 -8.6 -0.1 -17.2 -0.4 -25.8 c -0.3 -8.9 0.1 -17.8 -0.2 -26.7 c -0.3 -9 0 -18 -0.3 -26.9 c -0.3 -8.3 0 -16.7 -0.2 -25 c -0.1 -5.4 -0.2 -10.8 -0.2 -16.1 h 0 l -0.2 0 v -19.7 h 0 v -7.9 c 1.2 -12 9.3 -19.1 18.2 -25.5 c 9 -6.5 19.1 -10.9 29.5 -14.7 c 20.5 -7.4 41.7 -11.7 63.1 -14.8 c 8.6 -1.2 17.2 -2.2 25.9 -2.8 c 0.4 0 0.8 0 1.3 -0.1 c 4.6 5.4 9.4 10.9 14.5 16.5 c -4.8 0.3 -9.7 0.5 -14.6 0.9 c -20.6 1.8 -41 4.7 -61.1 9.7 c -13.8 3.4 -27.4 7.6 -39.6 15.3 c -5 3.1 -9.7 6.5 -13.4 11.1 c -5.3 6.6 -5.3 13.1 0.1 19.6 c 2.5 3.1 5.5 5.7 8.7 8 c 9.6 6.8 20.2 11.4 31.2 15.2 c 32.8 11.4 66.7 16.7 101.2 19.3 c 19.4 1.5 38.8 1.8 58.2 1 c 9.6 -0.4 19.2 -1.2 28.7 -2.3 c 1.3 1.1 2.6 2.3 3.9 3.4 c -25.4 4.5 -51.2 6.8 -77.1 7.5 c -21.8 0.6 -43.5 -0.3 -65.1 -2.9 c -20.2 -2.4 -40.1 -6.2 -59.3 -12.9 c -13.1 -4.5 -25.6 -10.2 -36.4 -19.1 c -0.1 -0.1 -0.4 -0.1 -0.6 -0.1 c -0.1 0.4 -0.1 0.6 -0.1 0.9 c 0.2 9.7 0.4 19.4 0.6 29.1 c 0.3 17 0.6 34 0.9 51 c 0.5 27.2 0.9 54.4 1.3 81.6 c 0.3 18.1 0.6 36.2 0.9 54.3 c 0.5 27.1 1 54.3 1.3 81.4 c 0.1 4.5 1.5 8.2 4.3 11.6 c 3.7 4.3 8.3 7.6 13.1 10.4 c 13.5 7.8 28.2 12.5 43.3 16.1 c 33.7 8.1 67.9 10.8 102.5 10.6 c 15.8 -0.1 31.5 -0.7 47.2 -2.2 c 19.9 -1.9 39.6 -5 59 -10.2 c 13.7 -3.7 27.1 -8.3 39.3 -15.8 c 4.5 -2.8 8.7 -5.9 12 -10.1 c 2.3 -3 3.5 -6.3 3.5 -10.1 c 0 -9.4 0.2 -18.8 0.3 -28.2 c 0.2 -16.1 0.4 -32.2 0.6 -48.4 c 0.3 -23.1 0.5 -46.1 0.8 -69.2 c 0.2 -16 0.4 -32 0.6 -47.9 c 0 -0.9 0 -1.7 0 -2.6 c 2.5 1.8 5.2 3.7 7.6 5.5 l 3.3 2.3 c 2.1 1.4 4.1 2.7 6.2 4.1 c 0 3.4 0 6.8 -0.1 10.2 Z M 681.8 450.8 l -25.9 26.9 c -6.6 6.8 -16.2 8.8 -24.6 6 c 1.2 -1.4 1.1 -3.5 -0.2 -4.8 c -1.4 -1.4 -3.6 -1.3 -5 0.1 c -0.5 0.5 -0.7 1 -0.9 1.6 c -0.9 -0.7 -1.8 -1.4 -2.7 -2.2 c -0.6 -0.6 -0.6 -1.5 0 -2.1 l 26.8 -27.7 s 0.1 0.1 0.1 0.1 c 1.1 1 2.7 1 3.8 -0.1 s 1 -2.7 -0.1 -3.8 c 0 0 -0.1 -0.1 -0.1 -0.1 l 17 -17.6 c 0.5 0.2 1 0.4 1.6 0.3 c 2 0 3.6 -1.7 3.6 -3.7 c 0 -0.6 -0.2 -1.1 -0.4 -1.6 l 4.5 -4.7 c 0.6 -0.6 1.5 -0.6 2.1 0 c 1.8 1.7 3.3 3.7 4.4 5.8 c -0.4 0.6 -0.6 1.3 -0.6 2 c 0 1.7 1.2 3 2.7 3.4 c 1.9 7.7 0 16.1 -5.9 22.3 Z M 745.8 220.7 c -2.9 27 -36.4 24.9 -40.3 52 c -2.7 15.8 23.6 26.7 20.8 50.4 c -1.7 14.1 -10.2 17.7 -16.2 26.5 c -23.6 34.8 -0.2 28.4 -7.4 73.6 c -1.3 -25.1 -24.1 -37.7 -22.2 -62.1 c 1.2 -15.7 20.2 -25 17.4 -41.4 c -3.1 -19.1 -26.3 -16.1 -28.3 -36.8 c -2.9 -30.9 26.9 -41.2 40.3 -54.1 c 29.9 -28.7 -31.1 -29.2 -16.1 -83.1 c 1.8 34.4 55.5 41.2 51.9 75 Z"/>
        <path class="cls-1" d="M 638.7 475.9 c -0.7 0.7 -0.7 1.9 0.1 2.6 c 0.7 0.7 1.9 0.7 2.6 -0.1 c 0.7 -0.7 0.7 -1.9 -0.1 -2.6 c -0.7 -0.7 -1.9 -0.7 -2.6 0.1 Z"/>
        <path class="cls-1" d="M 670.8 440.9 c -0.8 0.9 -0.8 2.3 0.1 3.1 c 0.9 0.8 2.3 0.8 3.1 -0.1 c 0.8 -0.9 0.8 -2.3 -0.1 -3.1 c -0.9 -0.8 -2.3 -0.8 -3.1 0.1 Z"/>
        <path class="cls-1" d="M 647 471.9 c -1 1.1 -1 2.7 0.1 3.8 s 2.7 1 3.8 -0.1 c 1 -1.1 1 -2.7 -0.1 -3.8 c -1.1 -1 -2.7 -1 -3.8 0.1 Z"/>
        <path class="cls-1" d="M 677.8 434.3 c -1.4 1.4 -1.3 3.6 0.1 5 c 1.4 1.4 3.6 1.3 5 -0.1 c 1.4 -1.4 1.3 -3.6 -0.1 -5 c -1.4 -1.4 -3.6 -1.3 -5 0.1 Z"/>
        <path class="cls-1" d="M 257.2 366.2 v -0.2 h 0 c -0.1 0 -0.1 0 -0.2 0 c 0.1 0.1 0.1 0.2 0.1 0.3 c 0 0 0.1 -0.1 0.1 -0.1 Z"/>
        <path class="cls-1" d="M 424.3 740.5 c -1.2 0 -2.3 0 -3.5 0.1 c 0 0.1 0 0.1 0 0.1 h 3.6 c 4.8 0.1 9.6 -0.3 14.3 0.2 c -0.6 -0.1 -1.1 -0.4 -1.6 -0.4 c -4.3 0 -8.6 0 -12.8 0 Z"/>
        <path class="cls-1" d="M 257.2 359.5 v 6.5 s 0.1 0 0.1 0 c 0 -2.2 0 -4.4 0 -6.6 c -0.1 -2.2 0.5 -4.5 -0.4 -6.6 c 0.5 2.2 0.1 4.5 0.2 6.7 Z"/>
        <path class="cls-1" d="M 257.3 366 c -0.1 0.1 -0.1 0.1 -0.1 0.2 v 6.4 h 0.1 c 0 -2.2 0 -4.4 0 -6.6 Z"/>
        <path class="cls-1" d="M 455.9 740.5 c -1.6 0 -3.2 0 -4.8 0 c -3.4 0.1 -6.8 -0.5 -10.1 0.4 c 3.3 -0.5 6.7 -0.1 10 -0.2 h 8.3 c 0 -0.1 0 -0.1 0 -0.2 h -3.5 Z"/></svg>',
    'banner' => 'mr-rum\header_rums_experience.webp',
    'cover' => '/mr-rum/cover-mr-rums.webp',
    'title' => 'Gallery',
    'text_home' => "Join Mr. Rum and Yayael in a flavorful adventure. Enjoy the rich taste of Dominican rum and explore the fascinating process behind the country’s tobacco. This is an experience you won’t want to miss!",
    'gallery' => ['assets\images\port-experience\mr-rum\carousel-mr-rums.webp'],
    'single_gallery' => [
      'assets\images\port-experience\mr-rum\gallery\mr-rum_1.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_2.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_3.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_5.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_6.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_7.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_8.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_9.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_10.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_11.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_12.webp',
      'assets\images\port-experience\mr-rum\gallery\mr-rum_13.webp',
    ],
  ],
];
