<?php


namespace Egits\ApiTest\Model;

use Egits\ApiTest\Api\WishlistTestRepositoryInterface;

use Magento\Wishlist\Model\ResourceModel\Item\CollectionFactory;
use Magento\Quote\Model\CartFactory;
use Magento\Quote\Model\ResourceModel\Quote\Item\CollectionFactory as QuoteCollectionFactory;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ProductRepository;

class WishlistTestRepository implements WishlistTestRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    private $CollectionFactory;

    /**
     * @var QuoteCollectionFactory
     */
    private $CartFactory;

    /**
     * @var ProductRepositoryInterface
     */
    private $ProductRepository;

    /**
     * @var QuoteCollectionFactory
     */
    private $QuoteCollectionFactory;

    public function __construct(
        // CollectionFactory $CollectionFactory,
        // ProductRepositoryInterface $ProductRepository,
        // CartFactory $CartFactory,
        // QuoteCollectionFactory $QuoteCollectionFactory
    )
    {
        // $this->QuoteCollectionFactory = $QuoteCollectionFactory->create()->getData();
        // $this->CartFactory = $CartFactory;
        // $this->ProductRepository = $ProductRepository;
        // $this->CollectionFactory = $CollectionFactory->create()->getData();
    }

    /**
     * @param int $customerId
     *
     * @return int
     */
    public function getList($customerId)
    {
        // $cartId = $this->getCartIdByCustomerId($customerId);
        // $CartItemCollection = $this->QuoteCollectionFactory->create();
        // $CartItemCollection->addFieldToFilter('quote_id', $cartId);
        // $itemsData = [];
        // foreach ($CartItemCollection as $items) {
        //     $productId = $items->getProductId();
        //     $product = $this->ProductRepository->getById($productId);

        //     $itemsData[] = [$items->getData(), $product->getData()];
        // }
        // return $this->QuoteCollectionFactory;
        return $customerId;
    }

//    /**
//     * Get the wishlist id for getList method
//     *
//     * @param int $customerId
//     *
//     * @return mixed
//     */
//    protected function getCartIdByCustomerId($customerId)
//    {
//        $cart = $this->CartFactory->create()->loadByCustomerId($customerId, true);
//        return $cart->getId();
//    }
}
