<?php

$repository = new \Lib\Repository();

$all = $repository->findAll('\\Lib\\Element');
$all[0]->doSome(); // it is ok

$all = $repository->findAll(\Lib\Element::class);
$all[0]->doSome(); // it is not
