<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\GeometricFigure;

abstract class ShapeDecorator implements IShape {

	protected $shape;
	public function __construct(IShape $shape){
		$this->shape = $shape;
	}
	abstract function draw();
}
