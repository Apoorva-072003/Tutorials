import java.util.Scanner;
public class Input {
    
    
    public static void main(String args[]){
        Scanner sc = new Scanner(System.in);
        System.out.println("Put string here:");
        String a= sc.nextLine();
        System.out.println("Put integer here:");
        int b = sc.nextInt();
        System.out.println("Put float here:");
        //char c = sc.next().charAt(0);
        float f = sc.nextFloat();
        int ff = (int)f;
        
//It chops off the decimal tail of a number and throws it in the trash.
//  It turns a decimal like 5.5 into a clean whole number 5!

        
        System.out.println(a);
        System.out.println(b);
        System.out.println(ff);
    }
}

