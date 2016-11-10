<?php
/**
 * @link http://www.yiizh.com/
 * @copyright Copyright (c) 2016 yiizh.com
 * @license http://www.yiizh.com/license/
 */

namespace yiizh\cdn;

use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @package yiizh\cdn
 */
class CDN extends Component implements BootstrapInterface
{
    public $assets = [];

    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        $container = \Yii::$container;
        foreach ($this->assets as $asset) {
            $className = ArrayHelper::getValue($asset, 'class');
            if ($className == null) {
                throw new InvalidConfigException('CDN Assets items must be an array containing a "class" element.');
            }
            unset($asset['class']);

            $asset['sourcePath'] = null;
            $container->set($className, $asset);
        }
    }
}