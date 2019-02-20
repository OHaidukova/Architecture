<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/02/2019
 * Time: 20:47
 */

namespace Model\Entity;


class OrderDetails
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $product_id;

    /**
     * @var int
     */
    private $count;

    /**
     * @param int $id
     * @param int $product_id
     * @param int $count
     */
    public function __construct(int $id = null, int $product_id = null, int $count = null)
    {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getProductId(): string
    {
        return $this->product_id;
    }

    /**
     * @return float
     */
    public function getCount(): float
    {
        return $this->count;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'count' => $this->count,
        ];
    }

    public function setData(int $id = null, int $product_id = null, int $count = null)
    {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->count = $count;
    }

}