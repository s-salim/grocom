<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Value\Value;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 */
class DateValue extends Value
{
    /**
     * @var string
     * 
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * Set value
     * 
     * @param  string $value
     * @return DateValue
     */
    public function setValue($value)
    {
        $this->date = $value;
    }

    /**
     * Get value
     * 
     * @return string
     */
    public function getValue()
    {
        return $this->date;
    }
}
