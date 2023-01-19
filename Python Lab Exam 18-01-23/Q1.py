class Complex:
    def __init__(self,real,complex):
        self.real=real
        self.complex=complex
    def __add__(self,obj):
        result_real = self.real+obj.real
        result_complex= self.complex + obj.complex
        return "Result={0}+{1}i".format(result_real,result_complex)
r1=int(input("Enter the first real number"))
i1=int(input("Enter the coefficient of the first imaginary number"))
r2=int(input("Enter the second real number"))
i2=int(input("Enter the coefficient of the second imaginary number"))
obj1 = Complex(r1,i1)
obj2 = Complex(r2,i2)
result = obj1+obj2
print(result)