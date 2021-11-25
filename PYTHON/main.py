from account import Account
from car import Car
if __name__ == '__main__':
    driver = Account("Daniel Morales", "1144108017")
    car = Car("KPX993", driver)
    print(vars(car))

    driver2 = Account("JJ Morales", "94415464")
    car2 = Car("CPC835", driver2)
    print(vars(car2))
