<?php

namespace Amz\ProductTypeDefinitions\Api;

use Amz\ProductTypeDefinitions\Model\ErrorList as ErrorList;
use Amz\ProductTypeDefinitions\Model\ProductTypeDefinition as ProductTypeDefinition;
use Amz\ProductTypeDefinitions\Model\ProductTypeList as ProductTypeList;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Definitions extends AbstractAPI
{
    /**
     * Search for and return a list of Amazon product types that have definitions
     * available.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @return ProductTypeList|ErrorList
     */
    public function searchProductTypes()
    {
        return $this->client->request('searchDefinitionsProductTypes', 'GET', 'definitions/2020-09-01/productTypes',
            [
            ]
        );
    }

    /**
     * Retrieve an Amazon product type definition.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @param array $queries options:
     *                       'sellerId'		A selling partner identifier. When provided, seller-specific
     *                       requirements and values are populated within the product type definition schema,
     *                       such as brand names associated with the selling partner.
     *
     * @return ProductTypeDefinition|ErrorList
     */
    public function getProductType(array $queries = [])
    {
        return $this->client->request('getDefinitionsProductType', 'GET', 'definitions/2020-09-01/productTypes/{productType}',
            [
                'query' => $queries,
            ]
        );
    }
}
