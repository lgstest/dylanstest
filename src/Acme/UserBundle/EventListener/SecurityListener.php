<?php

namespace Acme\UserBundle\EventListener;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityListener
{
    protected $router;
    protected $security;
    protected $dispatcher;

    public function __construct(Router $router, SecurityContext $security, EventDispatcher $dispatcher)
    {
        $this->router = $router;
        $this->security = $security;
        $this->dispatcher = $dispatcher;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'onKernelResponse'));
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        if ($this->security->isGranted('ROLE_SUPER_ADMIN')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_super_admin_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_LGS')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_lgs_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_ADMIN')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_admin_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_DISTRICT')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_district_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_COUNSELOR')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_counselor_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_TEACHER')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_teacher_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_PARENT')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_parent_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_STUDENT')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_student_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_OTHER')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_other_role_homepage'));
        } elseif ($this->security->isGranted('ROLE_USER')) {
            $event->getResponse()->headers->set('Location', $this->router->generate('acme_user_role_homepage'));
        } else {
            // let the normal response go through
        }
        
    }
}