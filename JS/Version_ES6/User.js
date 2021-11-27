const { Account } = require("./Account");

class User extends Account {
  constructor(name, document) {
    super(name, document);
  }
}

module.exports = User;
