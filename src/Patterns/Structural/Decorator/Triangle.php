<?php
namespace MonkeyCoders\Patterns\Structural\Decorator;
class Triangle implements IShape{
	public function draw(){
		return 'draw triangle';
	}
}