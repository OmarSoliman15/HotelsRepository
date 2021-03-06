<?php

namespace Areys\Recruiting\Entity;

/**
 * Represents a single partner from a search result.
 */
class Partner
{
    /**
     * Name of the partner
     *
     * @var string
     */
    public $name;

    /**
     * Url of the partner's homepage (root link)
     *
     * @var string
     */
    public $homepage;

    /**
     * Unsorted list of prices received from the
     * actual search query.
     *
     * @var Price[]
     */
    public $prices = [];
}
