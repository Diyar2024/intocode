# Method Resolution Order (MRO) # C3 Linearization Algorithm
class A:
    def hello(self):
        print("Hello from class A")


class B(A):
    def hello(self):
        print("Hello from class B")


class C(A):
    def hello(self):
        print("Hello from class C")


class D(B, C):
    pass


# Create an instance of class D
d_instance = D()

# Call the hello() method on d_instance
d_instance.hello()

print(D.mro())





# Aufgabe 1: Method Resolution Order (MRO)

class A:
    def hello(self):
        print("Hello from class A")


class B(A):
    def hello(self):
        print("Hello from class B")


class C(A):
    def hello(self):
        print("Hello from class C")


class D(B, C):
    pass


class E(C):
    def hello(self):
        print("Hello from class E")


class F(D, E):
    pass



# Create an instance of class F
# Call the hello() method on instance of class F
# Show the Method Resolution Order for class F

