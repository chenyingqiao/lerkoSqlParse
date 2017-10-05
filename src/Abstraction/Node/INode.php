<?php

namespace Abstraction\Node;

/**
 * @Author: CYQ19931115
 * @Date:   2017-10-05 15:37:53
 * @Last Modified by:   CYQ19931115
 * @Last Modified time: 2017-10-05 18:04:44
 */

interface INode extends \RecursiveIterator
{
    /* Methods */
    public function getChildren();
    public function hasChildren();
    /* Inherited methods */
    public function current();
    public function key();
    public function next();
    public function rewind();
    public function valid();
    /** 这是这个node的内容 */
    public function setContent();
}
