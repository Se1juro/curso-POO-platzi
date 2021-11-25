const { Payment } = require("./Payment");

class Cash extends Payment {
  constructor(id) {
    super(id);
  }
}
module.exports = { Cash };
