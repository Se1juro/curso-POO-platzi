const { Car } = require("./Car");

class UberVan extends Car {
  constructor(license, driver, typeCarAccepted, seatsMaterial) {
    super(license, driver);
    this.typeCarAccepted = typeCarAccepted;
    this.seatsMaterial = seatsMaterial;
  }
}
module.exports = { UberBlack };
