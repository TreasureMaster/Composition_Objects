<?php
  namespace Dimension;

  class Dimension
  {
    // массив констант для замены текста
    const DIMENSIONS = [
      'm' => '0',
      'dm' => '1',
      'cm' => '2',
      'mm' => '3'
    ];
    // базовое значение в мм
    private $base_value;
    // единица измерения (запоминается для сценария в JS)
    private $current_measure;

    public function __construct($dim)
    {
      $this->current_measure = $dim['measure'];
      $this->base_value = $this->conversionToBase($dim['value']);
    }

    // приведение к базовой размерности (мм) при создании объекта
    private function conversionToBase($value)
    {
      switch ($this->current_measure) {
        case 'm' : return $value * 1000;
        case 'cm': return $value * 10;
        case 'mm': default: $value;
      }
    }

    // приведение к размерности (м) для вычислений
    public function getMeter()
    {
      return $this->base_value / 1000;
    }

    // получение размера для вставки в имя объекта
    public function getBaseForName()
    {
      return $this->base_value;
    }
  }
?>