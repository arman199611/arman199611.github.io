<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/8/2019
 * Time: 6:26 PM
 */

namespace AppBundle\Entity\Translation;

use Doctrine\ORM\Mapping as ORM;
use Sonata\TranslationBundle\Model\Gedmo\AbstractPersonalTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="navbar_translation",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="navbar_translation_idx", columns={
 *         "locale", "object_id", "field"
 *     })}
 * )
 */
class NavbarTranslation extends AbstractPersonalTranslation
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Navbar", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;
}


