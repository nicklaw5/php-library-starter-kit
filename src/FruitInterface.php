<?php
namespace Fruit;

/**
 * Client interface for sending LibraryStarterKit requests.
 */
interface FruitInterface
{
  /**
   * Set type
   *
   * @param string $type
   * @throws InvalidFruitTypeExceptiopn
   * @return $this
   */
    public function setType($type);

    /**
     * Get fruit type
     *
     * @return string
     */
    public function getType();

}
