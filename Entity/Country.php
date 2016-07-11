<?php

namespace Nazka\LocationBundle\Entity;

use Knp\DoctrineBehaviors\Model\Translatable\Translatable;
use Nazka\LocationBundle\Model\Country as BaseCountry;

class Country extends BaseCountry
{
    use Translatable;

    /**
     * #Serializer\VirtualProperty()
     * #Serializer\SerializedName("name")
     * #Serializer\Groups({"details", "filter"})
     * #return mixed
     */
    public function getName()
    {
        return $this->proxyCurrentLocaleTranslation('getName');
    }

}
