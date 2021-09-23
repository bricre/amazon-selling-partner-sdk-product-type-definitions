<?php

namespace Amz\ProductTypeDefinitions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A property group represents a logical grouping of schema properties that can be
 * used for display or informational purposes.
 */
class PropertyGroup extends AbstractModel
{
    /**
     * The display label of the property group.
     *
     * @var string
     */
    public $title = null;

    /**
     * The description of the property group.
     *
     * @var string
     */
    public $description = null;

    /**
     * The names of the schema properties for the property group.
     *
     * @var string[]
     */
    public $propertyNames = null;
}
