class Car
{
    public $id;
    public $license;
    public $driver;
    public $passanger;

    public function __constructor($license, $driver){
        $this->license = $license;
        $this->driver = $driver;

    }

    public function printDataCar(){
        echo "Licencia: $this->license Driver: ".this->driver->name;
    
    }
}