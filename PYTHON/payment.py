class Payment:
    id = int

    def __init__(self, id):
        self.id = id

    def printPayment(self):
        print("ID Payment: "+str(self.id))
