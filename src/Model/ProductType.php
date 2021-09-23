<?php

namespace Amz\ProductTypeDefinitions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An Amazon product type with a definition available.
 */
class ProductType extends AbstractModel
{
    /**
     * The name of the Amazon product type.
     *
     * @var string
     */
    public $name = null;

    /**
     * The Amazon marketplace identifiers for which the product type definition is
     * available.
     *
     * @var string[]
     */
    public $marketplaceIds = null;
}
