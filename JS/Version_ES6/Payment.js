class Payment {
  constructor(id) {
    this.id = id;
  }
  printPayment() {
    console.log("Id:", this.id);
  }
}

module.exports = { Payment };
