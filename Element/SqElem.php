<?php
  namespace Element;

  class SqElem extends Element
  {
    protected $length;
    protected $width;

    public function __construct($name, \Dimension\Dimension $l, \Dimension\Dimension $w)
    {
      parent::__construct($name);
      $this->length = $l;
      $this->width = $w;
    }

    // тест получения площади объекта square
    public function getDimension()
    {
      return $this->length->conversionFromBase('m') * $this->width->conversionFromBase('m');
    }
    // получаем полное имя
    public function getFullElementName()
    {
      return $this->getSHortElementName() . '_' . $this->length->conversionFromBase('mm') . 'x' . $this->width->conversionFromBase('mm');
    }
  }
?>