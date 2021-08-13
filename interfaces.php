<?php
	interface Animals {
		public function makeSound();
	}

	class Dog implements Animals {
		function makeSound() {
			echo 'Gâu Gâu';
		}
	}
	class Cat implements Animals {
		function makeSound() {
			echo 'Meo meo';
		}
	}

	$dog = new Dog();
	$dog->makeSound();
	echo '<br>';
	$meo = new Cat();
	$meo->makeSound();
?>