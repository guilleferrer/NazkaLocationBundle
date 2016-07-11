<?php
/**
 * Created by Guillermo Ferrer
 * Email : <guilleferrer@gmail.com>
 * Date: 11/07/16
 * Time: 11:24
 */

namespace Nazka\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Translatable\Translation;

/**
 * Class CountryTranslation
 * @package Nazka\LocationBundle\Entity
 */
class CountryTranslation
{
    use Translation;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}