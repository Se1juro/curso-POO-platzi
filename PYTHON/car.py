from account import Account


class Car:
    id = int
    license = str
    driver = Account("", "")

    def __init__(self, license, driver, passenger):
        self.license = license
        self.driver = driver
        self.__passenger = passenger
