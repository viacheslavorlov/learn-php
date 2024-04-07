<?php
class Point {
    public $x; // доступны снаружи класса
    public $y;
    private string $z = 'zero private'; //недоступен снаружи класса
    public static string $w = 'zero static'; // можно обратиться даже без создания объекта класса
}
