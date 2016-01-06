<?php namespace System\databases;

/**
 * Class DatabaseSelector
 * @package System\databases
 */
class DatabaseSelector extends Database
{
    /**
     * Get all customers from the database
     *
     * @return mixed
     */
    public function getCustomers()
    {
        return $this->connection->query("SELECT * FROM hann_reservation")->fetchAll(\PDO::FETCH_CLASS, "System\\customer\\Customer");
    }

    /**
     * Get a specific customer by its ID
     *
     * @param $id
     * @return \System\customer\Customer|bool
     */
    public function getCustomerById($id)
    {
        $statement = $this->connection->prepare("SELECT * FROM hann_reservation WHERE id = :id");
        $statement->execute([':id' => $id]);
        return $statement->fetchObject("System\\customer\\Customer");
    }
}