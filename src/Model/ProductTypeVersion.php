<?php

namespace Amz\ProductTypeDefinitions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The version details for an Amazon product type.
 */
class ProductTypeVersion extends AbstractModel
{
    /**
     * Version identifier.
     *
     * @var string
     */
    public $version = null;

    /**
     * When true, the version indicated by the version identifier is the latest
     * available for the Amazon product type.
     *
     * @var bool
     */
    public $latest = null;

    /**
     * When true, the version indicated by the version identifier is the prerelease
     * (release candidate) for the Amazon product type.
     *
     * @var bool
     */
    public $releaseCandidate = null;
}
