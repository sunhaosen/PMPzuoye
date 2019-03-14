<?php

class Person
{
	public $name;
	public $age;
}
interface Walk extends Person
{
	function run();
}
class Student extends Person
{
	
}