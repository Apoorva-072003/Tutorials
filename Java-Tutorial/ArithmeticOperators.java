import java.util.*;

public class ArithmeticOperators {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int x = sc.nextInt();
        int y = sc.nextInt();
        float z= x;
        //float a= y;

        // code here
        int p = x+y;
        int q = x-y;
        int r = x*y;
        float s = z/y; //float/float= float and float/int=float
        int t = x/y;
        int u = x%y;
        
        System.out.printf("%d %d %d %.3f %d %d", p, q, r, s, t, u);
    }
}