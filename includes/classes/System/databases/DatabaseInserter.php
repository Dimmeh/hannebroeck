<?php namespace System\Database;

/**
 * Class DatabaseInserter
 * @package System\databases
 */
class DatabaseInserter extends Database
{
    /**
     * Save a custormer to the database
     *
     * @param \System\customer\Customer $customer
     * return bool
     */
    public function addCustomer($customer){
        $query = "INSERT INTO hann_reservation(reservation_name, reservation_email, reservation_phone,
                  reservation_date, reservation_time, reservation_persons, reservation_children)
                  VALUES (:name, :email, :phone, :date, :time, :persons, :children)";
        $statement = $this->connection->prepare($query);
        return $statement->execute([
           ':name' => $this->name,
           ':email' => $this->email,
           ':phone' => $this->phone,
           ':date' => $this->date,
           ':time' => $this->time,
           ':persons' => $this->persons,
           ':children' => $this->children
        ]);
    }
}