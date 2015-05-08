<?php

namespace Pyz\Zed\ProductSearch\Business\Processor;

use Generated\Shared\Transfer\LocaleTransfer;
use SprykerFeature\Zed\ProductSearch\Business\Processor\ProductSearchProcessor as CoreProductSearchProcessor;

class ProductSearchProcessor extends CoreProductSearchProcessor
{
    /**
     * @param array $productData
     * @param LocaleTransfer $locale
     *
     * @return array
     */
    protected function buildBaseProduct(array $productData, LocaleTransfer $locale)
    {
        $baseProduct = parent::buildBaseProduct($productData, $locale);

        //@todo this is only a hack unless we have bundles to export product images and prices
        $productAttributes = json_decode($productData['attributes'], true);
        $abstractAttributes = json_decode($productData['abstract_attributes'], true);
        $attributes = array_merge($abstractAttributes, $productAttributes);

        $baseProduct['search-result-data']['image_url'] = $attributes['image_url'];
        $baseProduct['search-result-data']['thumbnail_url'] = $attributes['thumbnail_url'];
        $baseProduct['search-result-data']['price'] = $attributes['price'];
        $baseProduct['integer-sort']['price'] = $attributes['price'];

        return $baseProduct;
    }
}