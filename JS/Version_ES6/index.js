const { Account } = require("./Account");
const { Car } = require("./Car");
const { Card } = require("./Card");
const Driver = require("./Driver");
const { UberX } = require("./uberX");

const driver = new Driver("Daniel Morales", "1144108017");
const car = new Car("KPX993", driver);
car.printDataCar();

const uberX = new UberX(
  "KPX993",
  new Account("Daniel", "1144108017"),
  "Renault",
  "Kwid"
);
uberX.printDataCar();

const card = new Card(124, 1456145614563564, 123, "2021-01-01");
card.printPayment();
