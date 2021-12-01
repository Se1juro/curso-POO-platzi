from account import Account
from car import Car
from driver import Driver
from paypal import PayPal
from uberX import UberX
if __name__ == '__main__':
    driver = Driver("Daniel Morales", "1144108017")
    car = Car("KPX993", driver, 4)
    car.__passenger = 3
    print(vars(car))

    driver2 = Account("JJ Morales", "94415464")
    car2 = Car("CPC835", driver2, 4)
    print(vars(car2))

    uberX = UberX("KPX992", 4, Account("Daniel", "1234"), "Renault", "Kwid")
    uberX.__passenger = 4
    print(vars(uberX))

    paypal = PayPal(123, "mralejo99@gmail.com")
    paypal.printPayment()
