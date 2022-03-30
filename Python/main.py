from car import Car

if __name__ == "__main__":
    print("Hola Mundo")
    car = Car() 
    car.lincense = "AMS234"
    car.driver = "Andres Herrera"
    print(vars(car))


    car2 = Car() 
    car2.lincense = "QWE234"
    car2.driver = "Martha Herrera"
    print(vars(car2))