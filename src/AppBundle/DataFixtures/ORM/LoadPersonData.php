<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Persona;

class LoadPersonData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
    	
    	$symfony_base_dir = $this->container->getParameter('kernel.root_dir');
    	$data_dir = $symfony_base_dir . '/Resources/data/';
    	
        $row = 0;
    	$fd = fopen($data_dir . 'person.csv', "r");
    	if ($fd) {
    		while (($data = fgetcsv($fd)) !== false) {
                $row++;
                
                if ($row == 1) continue; //skip header      

    			$persona = new Persona();
    			$persona->setNombre($data[0]);
                $persona->setEdad($data[1]);
                $birthDate = \DateTime::createFromFormat('d/m/Y', $data[2]);
                $persona->setNatalidad($birthDate);
                $persona->setEstatura($data[3]);
                $persona->setEmail($data[4]);
                $persona->setTelefono($data[5]);
                $persona->setGenero($data[6]);
                $persona->setDescendientes($data[7]);
                $persona->setVehiculo($data[8]);
                $persona->setLengua($data[9]);
                $persona->setIngles($data[10]);
                $persona->setWeb($data[11]);
                $persona->setTarjeta($data[12]);
                $persona->setIban($data[13]);
                $persona->setFoto($data[14]);

    			$manager->persist($persona);
    			    			    			
    		}    		
    		fclose($fd);
    	}    	
    	$manager->flush();
    }
    
    public function getOrder()
    {
    	// the order in which fixtures will be loaded
    	// the lower the number, the sooner that this fixture is loaded
    	return 3;
    }
    
    /**
     * @override
     */
    public function getEnvironments()
    {
    	return array('prod','dev','test');
    }
}