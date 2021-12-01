package JAVA;

class Main {
    public static void main(String[] args) {
        Account driver = new Driver("Daniel Morales", "1144108017");
        UberX uberX = new UberX("AMQ123", driver, "Renault", "KWID");
        uberX.setPassenger(4);
        uberX.printDataCar();

        Account driver2 = new Account("Adriana Sevillano", "66903734");
        UberVan uberVan = new UberVan("QWE567", driver2);
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        /*
         * Payment payment = new Payment(123);
         * Cash cash = new Cash(123);
         */
    }
}