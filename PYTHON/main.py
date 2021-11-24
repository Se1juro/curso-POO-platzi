from car import Car
if __name__ == '__main__':
    car = Car()
    car.license = "AMS123"
    car.driver = "Daniel Morales"
    print(vars(car))

    car2 = Car()
    car2.license = "KPX993"
    car2.driver = "Adriana"
    print(vars(car2))
