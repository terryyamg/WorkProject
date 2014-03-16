//Q10

/*
Key: 1: For the Arrays, call sort() before using binarySarch()
     2: If an searched object is not in the array, using binanrySearch() method 
        will return the ordered position of the searched object plus 1 
        with the negative sign in front of the new position.
        i.e., return -(n+1) where n is the ordered position of the searched object.
*/

    	   
import java.util.Arrays;
public class Quest {
	public static void main(String[] args) {

		String[] colors =
			{"blue", "red", "green", "yellow", "orange"};
		Arrays.sort(colors);
		int s2 = Arrays.binarySearch(colors, "orange");
		int s3 = Arrays.binarySearch(colors, "violet");
		System.out.print(s2+""+s3);
	}
}
