<?php

define('TITULOS_BANNER_PORT_EXPERIENCE', array(
  'Port Experience',
  '¡Prepárate para nuevas aventuras!',
));

define(
  'TITULOS_SINGLE_EXPERIENCE',
  'Menú'
);

define('TEXT_BUTTON_SINGLE_PORT', 'Ver el menú completo');

$points = [
  [
    'name' => 'Cantina Latina',
    'path' => 'cantina-latina',
    'logo' => 'Cantina Latina',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>',
    'title' => 'Menu',
    'menu' => [
      [
        'img' => 'cantina-latina-menu-1.webp',
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
        'img' => 'cantina-latina-menu-2.webp',
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
