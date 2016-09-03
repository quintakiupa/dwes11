<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Producto;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
    	
    	$symbonfy_base_dir = $this->container->getParameter('kernel.root_dir');
    	$data_dir = $symbonfy_base_dir . '/Resources/data/';
    	
    	$row = 0;
    	if (($fd = fopen($data_dir . 'products.csv', "r")) !== FALSE) {
    		while (($data = fgetcsv($fd, 1000, ",")) !== FALSE) {
    			$row++;
    			
    			if ($row == 1) continue; //skip header    			
    			$producto = new Producto();
    			$producto->setNombre($data[0]);
    			$producto->setDescripcion($data[1]);
    			$producto->setCategoria($this->getReference($data[2]));
    			$producto->setPrecio($data[3]);
    			$manager->persist($producto);   			
    		}
    		fclose($fd);
    	}    	
    	
    	$manager->flush();
    }
    
    public function getOrder()
    {
    	// the order in which fixtures will be loaded
    	// the lower the number, the sooner that this fixture is loaded
    	return 2;
    }
    
    /**
     * @override
     */
    public function getEnvironments()
    {
    	return array('prod','dev','test');
    }
}