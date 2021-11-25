const { Payment } = require("./Payment");

class Card extends Payment {
  constructor(id, number, cvv, date) {
    super(id);
    this.number = number;
    this.cvv = cvv;
    this.date = date;
  }
}

module.exports = { Card };
