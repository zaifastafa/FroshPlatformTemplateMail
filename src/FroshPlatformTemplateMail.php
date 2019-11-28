<?php declare(strict_types=1);

namespace Frosh\TemplateMail;

use Frosh\TemplateMail\DependencyInjection\CacheCompilerPass;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Symfony\Component\DependencyInjection\ContainerBuilder;

if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
}

class FroshPlatformTemplateMail extends Plugin
{
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new CacheCompilerPass());
        parent::build($container);
    }
}