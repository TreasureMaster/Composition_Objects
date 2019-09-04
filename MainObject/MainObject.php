<?php
  namespace MainObject;

  class MainObject
  {
    // собираемые элементы
    private $elements = [];
    // основная единица измерения
    private $main_measure;

    public function __construct($measure)
    {
      $this->main_measure = $measure;
    }

    public function addElements($elem)
    {
      $this->elements[$elem->getName()] = $elem;
    }

    public function getObjects()
    {
      foreach ($this->elements as $key => $value) {
        echo "<h4>Элемент $key</h4>";
        var_dump($value);
      }
    }

    public function getDimensions()
    {
      foreach ($this->elements as $key => $value) {
        echo "Размер $key: {$value->getDimension()} и полное имя: {$value->getFullElementName()}<br>";
      }
    }
  }
?>