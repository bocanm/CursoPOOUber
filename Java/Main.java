class Main {
    public static void main(String[] args) {
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
        car.passegenger = 4;
        car.printDataCar();

        Car car2 = new Car("QWE123", new Account("Andrea Herrera", "AND123"));
        car2.passegenger = 3;
        car2.printDataCar();

    }
}