import java.util.Scanner;
public class DecisionMaking {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        int m = sc.nextInt();

        // code here
         if(n<m){
             System.out.println("less");
         }
         else if(n==m){
             System.out.println("equal");
         }
         else if(n>m){
             System.out.println("greater");
         }
    }
}
