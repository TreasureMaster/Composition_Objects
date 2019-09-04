<?php
  require_once('vendor/autoload.php');

  $main = new MainObject\MainObject(Mark\Mark::MILLIMETER);

  $main->addElements(new Element\LnElem('First Line', array('value'=>120, 'measure'=>'cm')));
  $main->addElements(new Element\SqElem('First Square', array('value'=>200, 'measure'=>'cm'), array('value'=>100, 'measure'=>'cm')));

  $main->getNames();

  echo '<h4>Основной объект</h4>';
  var_dump($main);
  var_dump(new Mark\Mark());
?>