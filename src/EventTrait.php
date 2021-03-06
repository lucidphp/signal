<?php

/*
 * This File is part of the Lucid\Signal package
 *
 * (c) iwyg <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Lucid\Signal;

/**
 * @trait EventTrait
 *
 * @package Lucid\Signal
 * @version $Id$
 * @author iwyg <mail@thomas-appel.com>
 */
trait EventTrait
{
    /** @var EventName */
    private $originalName;

    /** @var EventName */
    private $name;

    /** @var bool */
    private $isStopped = false;

    /**
     * {@inheritdoc}
     */
    public function __clone()
    {
        $this->isStopped = false;
    }

    /**
     * {@inheritdoc}
     */
    final public function stop()
    {
        $this->isStopped = true;
    }

    /**
     * {@inheritdoc}
     */
    final public function isStopped()
    {
        return $this->isStopped;
    }

    /**
     * {@inheritdoc}
     */
    final public function setName($name)
    {
        $this->name = new EventName($this, $name);
    }

    /**
     * {@inheritdoc}
     */
    final public function getName()
    {
        return $this->name ?: $this->originalName;
    }

    /**
     * {@inheritdoc}
     */
    final public function getOriginalName()
    {
        return $this->originalName;
    }
}
