<?php

namespace Amz\ProductTypeDefinitions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of Amazon product types with definitions available.
 */
class ProductTypeList extends AbstractModel
{
    /**
     * @var \Amz\ProductTypeDefinitions\Model\ProductType[]
     */
    public $productTypes = null;
}
