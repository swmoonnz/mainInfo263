<?php
class Invoice
{
    protected $invoice_id;
    protected $description = "";
    protected $quantity = 0.0;
    protected $unit_price = 00.00;

    public function __construct($invoice_id, $description, $quantity, $unit_price)
    {
        $this->invoice_id = $invoice_id;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
    }

    public function display()
    {
//
        return sprintf("Invoice ID: %-6s Description: %-6s Quantity: %-6d Cost: $%-6.2f",
            $this->invoice_id, $this->description, $this->quantity, $this->unit_price);
    }

    public function calculateAmount()
    {
        return $this->quantity * $this->unit_price;
    }

    public function getInvoiceID()
    {
        return $this->invoice_id;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function getQuantity()
    {
        return $this->Quantity;
    }

    public function getUnitPrice()
    {
        return $this->unit_price;
    }
}

if(!debug_backtrace()) {
    //Debugging output.
    $invoice = new Invoice(0000000, "Lancer", 1.0, 34.7826);
    echo $invoice->display();

}

?>