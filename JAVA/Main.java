package JAVA;

class Main {
    public static void main(String[] args) {
        Account driver = new Driver("Daniel Morales", "1144108017");
        Car car = new Car("AMQ123", driver);
        car.passenger = 4;
        car.printDataCar();

        Account driver2 = new Account("Adriana Sevillano", "66903734");
        Car car2 = new Car("QWE567", driver2);
        car2.passenger = 3;
        car2.printDataCar();

        Payment payment = new Payment(123);
        Cash cash = new Cash(123);
    }
}