<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\GeometricFigure;
class Triangle implements IShape{
	public function draw(){
		return 'draw triangle';
	}
}