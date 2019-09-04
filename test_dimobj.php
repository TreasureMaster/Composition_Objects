<?php
  require_once('vendor/autoload.php');

  $main = new MainObject\MainObject(Mark\Mark::MILLIMETER);

  $main->addElements(new Element\LnElem('First Line', 
                                        new Dimension\Dimension (array('value'=>120, 'measure'=>'cm'))
                                      ));
  $main->addElements(new Element\SqElem('First Square',
                                        new Dimension\Dimension (array('value'=>300, 'measure'=>'cm')),
                                        new Dimension\Dimension (array('value'=>200, 'measure'=>'cm'))
                                      ));

  $main->getNames();

  // echo '<h4>Основной объект</h4>';
  // var_dump($main);
  // var_dump(new Mark\Mark());
  echo '<h4>Метровые размеры</h4>';
  $main->getDimensions();
?>