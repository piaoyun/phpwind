<?php

defined('WEKIT_VERSION') || exit('Forbidden');

/**
 * 通用配置服务
 *
 * @author Jianmin Chen <sky_hold@163.com>
 * @copyright ©2003-2103 phpwind.com
 * @license http://www.phpwind.com
 *
 * @version $Id: PwConfigService.php 23911 2013-01-17 05:54:43Z jieyin $
 */
class PwConfigService
{
    /**
     * 当任意配置项被修改时，调用该服务更新缓存文件(Hook调用).
     *
     * @param string $namespace
     */
    public function updateConfig($namespace)
    {
        if (in_array($namespace, ['site', 'credit', 'bbs', 'attachment', 'components', 'seo', 'nav', 'windid'])) {
            PwDelayRun::getInstance()->call([
                Wekit::load('cache.srv.PwCacheUpdateService'),
                'updateConfig',
            ]);
        }
    }
}
