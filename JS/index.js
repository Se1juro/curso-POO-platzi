const { Account } = require("./Account");
const { Car } = require("./Car");

const driver = new Account("Daniel Morales", "1144108017");
const car = new Car("KPX993", driver);
car.passenger = 4;
car.printDataCar();
