<?php namespace System\customer;

/**
 * Class Customer
 * @package System\customer
 */
class Customer
{
    public $name;
    public $email;
    public $phone;
    public $date;
    public $time;
    public $persons;
    public $children;

    /**
     * @param \PDO $db
     * @return bool
     */
    public function update($db){
        $query = "  UPDATE hann_reservations
                    SET reservation_name = :name, reservation_email = :email, reservation_phone = :phone,
                    reservation_date = :date, , reservation_time = :time, reservation_persons = :persons,
                    reservation_children = :children
                    WHERE id = :id";
        $statement = $db->prepare($query);
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

    /**
     * @param \PDO $db
     * @return bool
     */
    public function delete($db){
        $query ="  DELETE FROM hann_reservation
                   WHERE id = :id";
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }
}