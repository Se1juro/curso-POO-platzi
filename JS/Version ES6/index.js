const { Account } = require("./Account");
const { Car } = require("./Car");
const { UberX } = require("./uberX");

const driver = new Account("Daniel Morales", "1144108017");
const car = new Car("KPX993", driver);
car.passenger = 4;
car.printDataCar();

const uberX = new UberX(
  "KPX993",
  new Account("Daniel", "1144108017"),
  "Renault",
  "Kwid"
);
uberX.printDataCar();
