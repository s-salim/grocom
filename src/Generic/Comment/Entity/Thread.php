<?php

namespace Generic\Comment\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 * @ORM\Table(name="generic_comment_thread")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Thread extends BaseThread
{
    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;
}