<?php

namespace PhpBrasil\Collection;

use ArrayAccess;
use Countable;
use Iterator;
use Serializable;
use function PhpBrasil\Collection\Helper\stringify;

/**
 * Class Collection
 * @package PhpBrasil\Collection
 */
class Collection implements ArrayAccess, Serializable, Countable, Iterator
{
    /**
     * @trait CollectionMethods
     */
    use CollectionMethods;

    /**
     * @trait CollectionArrayAccess
     */
    use CollectionArrayAccess;

    /**
     * @trait CollectionSerialize
     */
    use CollectionSerialize;

    /**
     * @trait CollectionCountable
     */
    use CollectionCountable;

    /**
     * @trait CollectionIterator
     */
    use CollectionIterator;

    /**
     * @var array
     */
    protected $records = [];

    /**
     * Collection constructor.
     * @param array $input
     */
    public function __construct($input = [])
    {
        $this->records = $input;
    }

    /**
     * @param array $array
     * @return Collection
     */
    public static function create(array $array = [])
    {
        return new static($array);
    }

    /**
     * @return array
     */
    public function records()
    {
        return $this->records;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return strval(stringify($this->records));
    }
}
