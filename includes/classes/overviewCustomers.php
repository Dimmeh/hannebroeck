<?php

class overviewCustomers
{
    private $customer= [];

    /**
     * Initialize object
     */
    public function __construct(){

    }

    /**
     * @return mixed
     */

    public function getCustomer(){
        return $this->albums;
    }

    /**
     * @param mixed $customersRawList
     * @throws Exception
     */


    public function setCustomer($customersRawList){
        try{
            foreach($customersRawList as $customerRaw){
                $this->customer[] = new Customer($customerRaw->name, $customerRaw->email,
                    $customerRaw->phone, $customerRaw->date, $customerRaw->time, $customerRaw->persons,
                    $customerRaw->children);
            }
        } catch (Exception $e){
            throw $e;
        }
    }

    public function getTotalCustomers(){
        return count($this->customers);
    }

}