<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductImageCartConnector\Dependency\Facade;

use Generated\Shared\Transfer\ProductImageSetCollectionTransfer;
use Generated\Shared\Transfer\ProductImageSetCriteriaTransfer;

interface ProductImageCartConnectorToProductImageFacadeInterface
{
    /**
     * @deprecated Use {@link \Spryker\Zed\ProductImageCartConnector\Dependency\Facade\ProductImageCartConnectorToProductImageFacadeInterface::getConcreteProductImageSetCollection()} instead.
     *
     * @param array<int> $productIds
     * @param string $productImageSetName
     *
     * @return array<array<\Generated\Shared\Transfer\ProductImageTransfer>>
     */
    public function getProductImagesByProductIdsAndProductImageSetName(array $productIds, string $productImageSetName): array;

    public function getConcreteProductImageSetCollection(
        ProductImageSetCriteriaTransfer $productImageSetCriteriaTransfer
    ): ProductImageSetCollectionTransfer;

    public function getAbstractProductImageSetCollection(
        ProductImageSetCriteriaTransfer $productImageSetCriteriaTransfer
    ): ProductImageSetCollectionTransfer;
}
