<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'); ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('http://code.jquery.com/jquery.min.js'); ?>
    <?= $this->Html->script('editor') ?>
</head>
<body onLoad="iFrameOn();">
<div class='container'>
<div class="navbar">
  <h2 class="text-center">Tagz</h2>
  <p>changes</p>
  <form action="my_parse_file.php" name="myform" id="myform" method="post">
  <!-- <p>Entry Title: <input name="title" id="title" type="text" size="80" maxlength="80" /></p>
  <p>Entry Body:<br> -->
    <p>
      <div id="wysiwyg-cp" class="col-md-10">
        <input class="btn btn-primary" type="button" onClick="iBold()" value="B"> 
        <input class="btn btn-primary" type="button" onClick="iUnderline()" value="U">
        <input class="btn btn-primary" type="button" onClick="iItalic()" value="I">
        <input class="btn btn-primary" type="button" onClick="iFontSize()" value="Text Size">
        <input class="btn btn-primary" type="button" onClick="iForeColor()" value="Text Color">
        <input class="btn btn-primary" type="button" onClick="iHorizontalRule()" value="HR">
        <input class="btn btn-primary" type="button" onClick="iUnorderedList()" value="UL">
        <input class="btn btn-primary" type="button" onClick="iOrderedList()" value="OL">
        <input class="btn btn-primary" type="button" onClick="iLink()" value="Link">
        <input class="btn btn-primary" type="button" onClick="iUnLink()" value="UnLink">
        <input class="btn btn-primary" type="button" onClick="iImage()" value="Image">
        <input class="btn btn-primary" type="button" onClick="displaySlider()" value="DISPLAY">
        <input class="btn btn-primary" type="button" onClick="submit_changes()" value="Submit">
      </div>

</div>

<div lass="col-md-8">
  <!-- Hide(but keep)your normal textarea and place in the iFrame replacement for it -->
  <textarea style="display:none;" name="myTextArea" id="myTextArea" cols="100" rows="14"></textarea>
  <iframe name="richTextField" id="richTextField" class="col-md-12"><div id="content"></div></iframe>
   <!-- style="border:#000000 1px solid; width:700px; height:300px;" -->
  <!-- End replacing your normal textarea -->
</div>
<div id="tagz"class="col-md-4">
  <p>here is where the stuff will slide</p>
</div>


</p>
<br /><br />
<!-- <input name="myBtn" type="button" value="Submit Data" onClick="javascript:submit_form();"/> -->
</form>
</div>

</body>
</html>
