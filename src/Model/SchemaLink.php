<?php

namespace Amz\ProductTypeDefinitions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SchemaLink extends AbstractModel
{
    /**
     * Link to retrieve the schema.
     *
     * @var object
     */
    public $link = null;

    /**
     * Checksum hash of the schema (Base64 MD5). Can be used to verify schema contents,
     * identify changes between schema versions, and for caching.
     *
     * @var string
     */
    public $checksum = null;
}
