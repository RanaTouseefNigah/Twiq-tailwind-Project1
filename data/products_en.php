<?php
return [

  'clothes' => [
    [
      'id' => 1,
      'name' => 'T-Shirt',
      'product_number' => 'CL001',
      'original_price' => '$10',
      'discount_price' => '$8',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Clothes',
      'image' => '/assets/images/tshirt.jpg'
    ],
    [
      'id' => 2,
      'name' => 'Jeans',
      'product_number' => 'CL002',
      'original_price' => '$14',
      'discount_price' => '$12',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Clothes',
      'image' => '/assets/images/jeans.jpg'
    ],
    [
      'id' => 3,
      'name' => 'Jacket',
      'product_number' => 'CL003',
      'original_price' => '$30',
      'discount_price' => '$30',
      'discount_applied' => false,
      'in_stock' => false,
      'category' => 'Clothes',
      'image' => '/assets/images/jacket.jpg'
    ],
    [
      'id' => 4,
      'name' => 'Formal Shirt',
      'product_number' => 'CL004',
      'original_price' => '$12',
      'discount_price' => '$11',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Clothes',
      'image' => '/assets/images/shirt.jpg'
    ],
    [
      'id' => 5,
      'name' => 'Hoodie',
      'product_number' => 'CL005',
      'original_price' => '$20',
      'discount_price' => '$18',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Clothes',
      'image' => '/assets/images/hoodie.jpg'
    ],
    [
      'id' => 6,
      'name' => 'Shorts',
      'product_number' => 'CL006',
      'original_price' => '$10',
      'discount_price' => '$9',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Clothes',
      'image' => '/assets/images/shorts.jpg'
    ]
  ],
  'accessories' => [
    [
      'id' => 1,
      'name' => 'Mouse',
      'product_number' => 'ACC001',
      'original_price' => '$6',
      'discount_price' => '$5',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Computer Accessories',
      'image' => '/assets/images/mouse.jpg'
    ],
    [
      'id' => 2,
      'name' => 'Keyboard',
      'product_number' => 'ACC002',
      'original_price' => '$10',
      'discount_price' => '$10',
      'discount_applied' => false,
      'in_stock' => false,
      'category' => 'Computer Accessories',
      'image' => '/assets/images/keyboard.jpg'
    ],
    [
      'id' => 3,
      'name' => 'Headset',
      'product_number' => 'ACC003',
      'original_price' => '$18',
      'discount_price' => '$15',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Computer Accessories',
      'image' => '/assets/images/headset.jpg'
    ]
  ],


  'cosmetics' => [
    [
      'id' => 1,
      'name' => 'Lipstick',
      'product_number' => 'COS001',
      'original_price' => '$6',
      'discount_price' => '$5',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Cosmetics',
      'discount' => '20%',
      'image' => '/assets/images/lipstick.jpg'
    ],
    [
      'id' => 2,
      'name' => 'Foundation',
      'product_number' => 'COS002',
      'original_price' => '$14',
      'discount_price' => '$12',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Cosmetics',
      'discount' => '20%',

      'image' => '/assets/images/foundation.jpg'
    ],
    [
      'id' => 3,
      'name' => 'Mascara',
      'product_number' => 'COS003',
      'original_price' => '$12',
      'discount_price' => '$10',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Cosmetics',
      'discount' => '20%',
      'image' => '/assets/images/mascara.jpg'
    ],
    [
      'id' => 4,
      'name' => 'Blush',
      'product_number' => 'COS004',
      'original_price' => '$9',
      'discount_price' => '$8',
      'discount_applied' => true,
      'in_stock' => false,
      'category' => 'Cosmetics',
      'discount' => '20%',
      'image' => '/assets/images/blush.jpg'
    ],
    [
      'id' => 5,
      'name' => 'Eyeliner',
      'product_number' => 'COS005',
      'original_price' => '$7',
      'discount_price' => '$6',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Cosmetics',
      'discount' => '20%',
      'image' => '/assets/images/eyeliner.jpg'
    ],
    [
      'id' => 6,
      'name' => 'Compact Powder',
      'product_number' => 'COS006',
      'original_price' => '$10',
      'discount_price' => '$9',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Cosmetics',
      'discount' => '20%',
      'image' => '/assets/images/compact.jpg'
    ],
    [
      'id' => 7,
      'name' => 'Nail Polish',
      'product_number' => 'COS007',
      'original_price' => '$5',
      'discount_price' => '$4',
      'discount_applied' => true,
      'in_stock' => true,
      'category' => 'Cosmetics',
      'discount' => '20%',
      'image' => '/assets/images/nailpolish.jpg'
    ],
    [
      'id' => 8,
      'name' => 'Concealer',
      'product_number' => 'COS008',
      'original_price' => '$8',
      'discount_price' => '$7',
      'discount_applied' => true,
      'in_stock' => false,
      'category' => 'Cosmetics',
      'discount' => '20%',
      'image' => '/assets/images/concealer.jpg'
    ],

  ],
  'collection' => [
    [
      'id' => 1,
      'name' => 'All Products',
      'category' => 'Shop By Collection',
      'image' => 'https://om.arganicnatural.com/cdn/shop/files/001-mobile-ar_430x_b6b1f42f-e79e-4c6e-a582-a1993439dcdf.webp?v=1734264256&width=330',
      'link' => '#'
    ],
    [
      'id' => 2,
      'name' => 'Skin Care',
      'category' => 'Skin Care',
      'image' => 'https://om.arganicnatural.com/cdn/shop/files/skin-care.png?v=1727524422&width=330',
      'link' => '#'
    ],
    [
      'id' => 3,
      'name' => 'Hair Care',
      'category' => 'Hair Care',
      'image' => 'https://om.arganicnatural.com/cdn/shop/files/2149230958.jpg?v=1727524137&width=330',
      'link' => '#'
    ],
    [
      'id' => 4,
      'name' => 'Body Care',
      'category' => 'Body Care',
      'image' => 'https://om.arganicnatural.com/cdn/shop/files/top-view-woman-using-cream-her-hands1.jpg?v=1727524441&width=330',
      'link' => '#'
    ],
    [
      'id' => 5,
      'name' => 'Sensitive Areas',
      'category' => 'Sensitive Areas',
      'image' => 'https://om.arganicnatural.com/cdn/shop/files/whiting.png?v=1744893061&width=330',
      'link' => '#'
    ],
    [
      'id' => 6,
      'name' => 'Packages',
      'category' => 'Packages',
      'image' => 'https://om.arganicnatural.com/cdn/shop/files/Best_selling_Argan_Package_1910ad24-4c46-4827-81de-e7c49b1e0b8e.jpg?v=1744892153&width=330',
      'link' => '#'
    ],

  ]
];
