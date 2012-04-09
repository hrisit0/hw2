<?php
    class Student {
	private $firstName;
	private $lastName;
	private $number;
	function __construct($first, $last, $num) {
	    $this->firstName = $first;
	    $this->lastName = $last;
	    $this->number = $num;
	}
	function getFirst() {
	    return $this->firstName;
	}
	function getLast() {
	    return $this->lastName;
	}
	function getNum() {
	    return $this->number;
	}
    }

    class Adapter {
	private $studentt;
	function __construct(Student $studenttt) {
	    $this->studentt =$studenttt;
	}
	function getStudent() {
	    return $this->studentt->getFirst() . ' ' . $this->studentt->getLast() . ' with number ' . $this->studentt->getNum();
	}
    }


?>