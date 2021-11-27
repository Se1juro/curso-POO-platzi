const { Account } = require("./Account");
class Driver extends Account {
  constructor(name, document) {
    super(name, document);
  }
}
module.exports = Driver;
