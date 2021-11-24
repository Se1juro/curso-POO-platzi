class Car {
  constructor(license, driver) {
    this.license = license;
    this.driver = driver;
  }
  printDataCar = function () {
    console.log(this.driver);
    console.log(this.driver.name);
    console.log(this.driver.document);
  };
}

module.exports = {
  Car,
};
