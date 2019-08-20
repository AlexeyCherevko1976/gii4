<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
 public $sourcePath = '@app/modules/admin/web';

 public $css = [
 	'css/site.css',
 ];
 public $js = [
 'js/admin.js',
 ];
 
 public $depends = [];
}