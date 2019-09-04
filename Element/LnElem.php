<?php
  namespace Element;

  class LnElem extends Element
  {
    protected $length;

    public function __construct($name, $l)
    {
      parent::__construct($name);
      $this->length = $l;
    }

    public function getDimension()
    {
      return $this->length->getMeter();
    }
  }
?>