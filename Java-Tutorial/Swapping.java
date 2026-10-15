import java.util.Scanner;

public class Swapping {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        int a = sc.nextInt();
        int b = sc.nextInt();

        // code here
        int tmp=0;
        tmp=a;
        a=b;
        b=tmp;
        

        System.out.println(a + " " + b);
    }
}
