<?php

namespace Amz\ProductTypeDefinitions\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A product type definition represents the attributes and data requirements for a
 * product type in the Amazon catalog. Product type definitions are used
 * interchangeably between the Selling Partner API for Listings Items, Selling
 * Partner API for Catalog Items, and JSON-based listings feeds in the Selling
 * Partner API for Feeds.
 */
class ProductTypeDefinition extends AbstractModel
{
    /**
     * Link to meta-schema describing the vocabulary used by the product type schema.
     *
     * @var \Amz\ProductTypeDefinitions\Model\SchemaLink
     */
    public $metaSchema = null;

    /**
     * Link to schema describing the attributes and requirements for the product type.
     *
     * @var \Amz\ProductTypeDefinitions\Model\SchemaLink
     */
    public $schema = null;

    /**
     * Name of the requirements set represented in this product type definition.
     *
     * @var string
     */
    public $requirements = null;

    /**
     * Identifies if the required attributes for a requirements set are enforced by the
     * product type definition schema. Non-enforced requirements enable structural
     * validation of individual attributes without all of the required attributes being
     * present (such as for partial updates).
     *
     * @var string
     */
    public $requirementsEnforced = null;

    /**
     * Mapping of property group names to property groups. Property groups represent
     * logical groupings of schema properties that can be used for display or
     * informational purposes.
     *
     * @var object
     */
    public $propertyGroups = null;

    /**
     * Locale of the display elements contained in the product type definition.
     *
     * @var string
     */
    public $locale = null;

    /**
     * Amazon marketplace identifiers for which the product type definition is
     * applicable.
     *
     * @var string[]
     */
    public $marketplaceIds = null;

    /**
     * The name of the Amazon product type that this product type definition applies
     * to.
     *
     * @var string
     */
    public $productType = null;

    /**
     * The version details for the Amazon product type.
     *
     * @var \Amz\ProductTypeDefinitions\Model\ProductTypeVersion
     */
    public $productTypeVersion = null;
}
