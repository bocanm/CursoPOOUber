require_once("car.php")
require_once("uberX.php")
require_once("uberPool.php")
require_once("account.php")

$uberX = new UberX("CVB123, new Account("Andres Herrera", "AND456"), "chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("TYU567", new Account("Andrea Ferran","ANDA765"), "Dodge", "Acttitude");
$uberPool->printDatacar();