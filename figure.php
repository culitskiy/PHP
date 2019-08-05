<?php


    class Rectangle
    {
        public $a;
        public $b;
    
        public function __construct( int $a, int $b)
        {
            $this->a = $a;
            $this->b = $b;
        }
        public function area ()
        {
            $area = $this->a*$this->b;
            echo $area ,'<br/>';
        }
    }
    $rectangle1 = new Rectangle($a=2,$b=3);
    $rectangle1->area();
    $filename = 'rectangle.txt';
    $rectangle = serialize($rectangle1);
    file_put_contents($filename, $rectangle);
    $text = file_get_contents($filename);
    $rectangle2 = unserialize($text);
    $rectangle2->area();
    
    class Circle
    {
        public $r;
        
    
        public function __construct( int $r)
        {
            $this->r = $r;
        }
        public function area ()
        {
            $area = $this->r*$this->r*M_PI;
            echo $area ,'<br/>';
        }
    }
    $circle1 = new Circle($r=5);
    $circle1->area();
    $filename = 'circle.txt';
    $circle = serialize($circle1);
    file_put_contents($filename, $circle);
    $text = file_get_contents($filename);
    $ob = unserialize($text);
    $ob->area();
    
    class Triangle
    {
        public $a;
        public $h;
        
    
        public function __construct( int $a, int $h)
        {
            $this->a = $a;
            $this->h = $h;
        }
        public function area ()
        {
            $area = $this->a*$this->h/2;
            echo $area ,'<br/>';
        }
    }
    $triangle1 = new Triangle($a=2,$h=5);
    $triangle1->area();
    $filename = 'triangle.txt';
    $triangle = serialize($triangle1);
    file_put_contents($filename, $triangle);
    $text = file_get_contents($filename);
    $ob = unserialize($text);
    $ob->area();

?>
