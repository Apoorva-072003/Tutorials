import java.util.Scanner;

class SwitchStatements {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        System.out.println(utility(n));
    }

 public static String utility(int n) {
        switch (n) {
            case 1:
                return "One";
            case 2:
                return "Two";
            case 3:
                return "Three";
            case 4:
                return "Four";
            case 5:
                return "Five";
            case 6:
                return "Six";
            case 7:
                return "Seven";
            case 8:
                return "Eight";
            case 9:
                return "Nine";
            default:
                return "Unknown";
        }
    }

    }
//         switch (n) {
//             case 1:
//                 System.out.println("One");
//                 break;
//             case 2:
//                 System.out.println("Two");
//                 break;
//             case 3:
//                 System.out.println("Three");
//                 break;
//             case 4:
//                 System.out.println("Four");
//                 break;
//             case 5:
//                 System.out.println("Five");
//                 break;
//             case 6:
//                 System.out.println("Six");
//                 break;
//             case 7:
//                 System.out.println("Seven");
//                 break;
//             case 8:
//                 System.out.println("Eight");
//                 break;
//             case 9:
//                 System.out.println("Nine");
//                 break;
//             default:
//                 System.out.println("Unknown");
//         }
//     }
// }

// String[] word = {
//             "", "One", "Two", "Three", "Four",
//             "Five", "Six", "Seven", "Eight", "Nine"
//         };

//         if (n >= 1 && n <= 9) {
//             System.out.println(word[n]);
//         } else {
//             System.out.println("Unknown");
//         }

        //sc.close();

