package JAVA;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        Account driver = new Account("Daniel Morales", "1144108017");
        Car car = new Car("AMQ123", driver);
        car.passenger = 4;
        car.printDataCar();

        Account driver2 = new Account("Adriana Sevillano", "66903734");
        Car car2 = new Car("QWE567", driver);
        car2.passenger = 3;
        car2.printDataCar();
    }
}