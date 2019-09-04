<?php
  namespace Element;

  abstract class Element
  {
    // имя объекта
    protected $name;
    // текущая единица измерения объекта
    // protected $current_measure;

    public function __construct($name)
    {
      $this->name = $name;
    }

    public function getName()
    {
      return $this->name;
    }

    // получаем короткое имя
    public function getShortElementName()
    {
      return strtolower((new \ReflectionClass($this))->getShortName());
    }
  }
?>