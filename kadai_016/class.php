<?php
// クラスの定義（例：class Product { …… }）
class Food {
  // プロパティの定義（例：public $name;）
  private $name;
  private $price;

  // コンストラクタの定義
  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }

  // メソッドの定義（例：public show_name() { …… }）
  public function show_price() {
    echo $this->price . '<br>';
  }
}
class Animal {
  // プロパティの定義（例：public $name;）
  private $name;
  private $height;
  private $weight;

  // コンストラクタの定義
  public function __construct(string $name, int $height,int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  // メソッドの定義（例：public show_name() { …… }）
  public function show_height() {
    echo $this->height . '<br>';
  }
}
// インスタンス化（例：$shampoo = new Product();）
$food = new Food('potato',250);
$animal = new Animal('dog',60,5000);
print_r($food);
print_r($animal);
$food->show_price();
$animal->show_height();
?>
