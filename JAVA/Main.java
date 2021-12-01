package JAVA;

class Main {
    public static void main(String[] args) {
        Account driver = new Driver("Daniel Morales", "1144108017");
        Car uberX = new UberX("AMQ123", driver, "Renault", "KWID");
        uberX.setPassenger(4);
        uberX.printDataCar();

        Account driver2 = new Account("Adriana Sevillano", "66903734");
        Car car2 = new Car("QWE567", driver2);
        car2.printDataCar();

        Payment payment = new Payment(123);
        Cash cash = new Cash(123);
    }
}