<?php namespace System\customer;

/**
 * Class Customers
 * @package System\Customer
 */
class Customers
{
    private $customers = [];

    /**
     * Initialize object
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->customers;
    }

    /**
     * @param mixed $customers
     * @throws \Exception
     */
    public function set($customers)
    {
        try {
            $this->customers = $customers;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return count($this->customers);
    }
} 
