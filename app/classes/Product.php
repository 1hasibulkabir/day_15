<?php

namespace App\classes;
class Product
{
    protected $product;
    public function getAllProduct(){
        return[

            0=>[
                'id' => '0',
                'Name' =>'Mouse',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c1.jpg',
            ],
            1=>[
                'id' => '1',
                'Name' =>'Keyboard',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c2.jpg',
            ],
            2=>[
                'id' => '2',
                'Name' =>'Lcd Monitor',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c3.jpg',
            ],
            3=>[
                'id' => '3',
                'Name' =>'Led Monitor',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c4.jpg',
            ],
            4=>[
                'id' => '4',
                'Name' =>'Ram',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c5.jpg',
            ],
            5=>[
                'id' => '5',
                'Name' =>'Casing',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c6.jpg',
            ],
            6=>[
                'id' => '6',
                'Name' =>'SSD',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c7.jpg',
            ],
            7=>[
                'id' => '7',
                'Name' =>'HDD',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c8.jpg',
            ],
            8=>[
                'id' => '8',
                'Name' =>'Mouse Pad',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c9.jpg',
            ],
            9=>[
                'id' => '9',
                'Name' =>'Gaming Mouse',
                'description' => 'Description....',
                'Brand' => 'One Brand',
                'Price' => 'Some Money',
                'image' =>'c10.jpg',
            ],
        ];
    }
}