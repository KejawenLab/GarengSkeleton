<?php

namespace KejawenLab\Application\EventListener;

use KejawenLab\Application\Controller\AdminController;
use KejawenLab\Framework\GarengFramework\DependencyInjection\ContainerAwareInterface;
use KejawenLab\Framework\GarengFramework\DependencyInjection\ContainerAwareTrait;
use KejawenLab\Framework\GarengFramework\Event\FilterController;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@bisnis.com>
 */
class SecurityListener implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function filterController(FilterController $event)
    {
        $controller = $event->getController();
        if ($controller instanceof AdminController) {
            if (!$this->container['internal.session_storage']->get('token')) {
                return new RedirectResponse('/login');
            }
        }
    }
}
