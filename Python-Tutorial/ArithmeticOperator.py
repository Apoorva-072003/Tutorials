x = int(input())
y = int(input())
z = float(x)

# code here
p = x+y;
q = x-y;
r = x*y;
s = z/y; #float/float= float and float/int=float (Real division btw)
#t = int(x/y) #type casting
t = x//y #floor division
u = x%y; 
        
print(p, q, r, f"{s:.3f}", t, u)