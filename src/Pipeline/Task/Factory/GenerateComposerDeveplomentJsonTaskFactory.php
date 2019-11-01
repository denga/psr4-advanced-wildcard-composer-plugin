<?php
declare(strict_types=1);

namespace teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\Factory;

use Composer\Script\Event;
use teewurst\Prs4AdvancedWildcardComposer\Di\Container;
use teewurst\Prs4AdvancedWildcardComposer\Di\FactoryInterface;
use teewurst\Prs4AdvancedWildcardComposer\FileAccessor\ComposerDevelopmentJson;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\GenerateComposerDeveplomentJsonTask;

class GenerateComposerDeveplomentJsonTaskFactory implements FactoryInterface
{

    public function __invoke(Container $container, string $name): object
    {
        /** @var Event $event */
        $event = $container->get(Event::class);
        return new GenerateComposerDeveplomentJsonTask(
            $container->get(ComposerDevelopmentJson::class),
            $event->isDevMode()
        );
    }
}
