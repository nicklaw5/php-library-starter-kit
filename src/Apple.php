<?php
namespace Fruit;

use Fruit\Exception\InvalidFruitTypeExceptiopn;

class Apple implements FruitInterface
{

    private static $appleTypes = [
        'Cortland',
        'Golden Delicious',
        'Red Delicious',
        'Empire',
        'Fuji',
        'Granny Smith',
        'Gala',
        'Ida Red',
        'Macoun',
    ];

    /**
     * @var string
     */
    private $type;

    public function __construct($type = 'Red Delicious')
    {
        $this->setType($type);
    }

    /**
     * Set type
     *
     * @param string $type
     * @throws InvalidFruitTypeExceptiopn
     * @return $this
     */
    public function setType($type)
    {
        if(!in_array($type, self::$appleTypes)) {
            throw new InvalidFruitTypeExceptiopn('Invalid fruit type.');
        }

        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
