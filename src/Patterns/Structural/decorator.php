<?php
interface IShape {
	public function draw();
}

class Circle implements IShape{
	public function draw(){
		return 'draw circle';
	}
}

class Triangle implements IShape{
	public function draw(){
		return 'draw triangle';
	}
}

abstract class ShapeDecorator implements IShape {
	protected $shape;
	public function __construct(IShape $shape){
		$this->shape = $shape;
	}
	abstract function draw();
}

class BoderShape extends ShapeDecorator {
	public function draw(){
		$result = $this->shape->draw();
		return "$result has border";
	}
}
$item = new Triangle();
$item = new BoderShape($item);
echo $item->draw();

?>