<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeUserBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function lgsAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:lgsrole.html.twig', array('name' => $name));
    }
    
    public function studentAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:studentrole.html.twig', array('name' => $name));
    }
    
    public function superAdminAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:superadminrole.html.twig', array('name' => $name));
    }
    
    public function teacherAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:teacherrole.html.twig', array('name' => $name));
    }
    
    public function otherAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:otherrole.html.twig', array('name' => $name));
    }
    
    public function parentAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:parentrole.html.twig', array('name' => $name));
    }
    
    public function districtAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:districtrole.html.twig', array('name' => $name));
    }
    
    public function counselorAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:counselorrole.html.twig', array('name' => $name));
    }
    
    public function adminAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:adminrole.html.twig', array('name' => $name));
    }
    
    public function userAction($name) 
    {
        return $this->render('AcmeUserBundle:Default:userrole.html.twig', array('name' => $name));
    }
}
