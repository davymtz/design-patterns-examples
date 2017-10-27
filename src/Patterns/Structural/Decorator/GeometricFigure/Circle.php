<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\GeometricFigure;
class Circle implements IShape {
	public function draw(){
		return 'draw circle';
	}
}