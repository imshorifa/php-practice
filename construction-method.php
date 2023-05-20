<?php
class Customers {
    private $customer_list;

    public function __construct() {
        $this->customer_list = array();
    }

    public function add_customer($customer_name) {
        array_push($this->customer_list, $customer_name);
    }

    public function show() {
        echo "<table>";
        echo "<tr><th>Customer Name</th></tr>";
        foreach ($this->customer_list as $customer) {
            echo "<tr><td>" . $customer . "</td></tr>";
        }
        echo "</table>";
    }
}

$customer = new Customers();

// Adding 50 customers to the list
for ($i = 1; $i <= 50; $i++) {
    $customer->add_customer("Customer " . $i);
}

// Displaying the customer list
$customer->show();

?>