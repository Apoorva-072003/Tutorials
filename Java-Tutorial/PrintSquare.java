class Solution {
    public void printHollowSquare(int n) {
        // code here
    for(int i=1;i<=n;i++){ 
    //in star like questions or physical shape questions
    //always start rows(i) and columns(j) from '1' and not '0' as we are not
    //creating mythical structure like array which starts with 0
        for(int j=1;j<=n;j++){ 
            if(i==1||i==n||j==1||j==n){
                System.out.print("* ");
            }
            else{
                System.out.print("  ");//double space is here
            }
        }
        System.out.println();
    }
        
    }
}