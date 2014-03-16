//Q2
//Key: If a string and a number is operated by '+', the number automatically 
//     calls its toString() method to complete the operation.


public class TestString1 {
	public static void main(String[] args) {
		String str ="420";
		str += 42; //@ number 42 => new Integer(42).toString();
		//str += new Integer(42).toString();//demo this
		//str += new Integer(42);//@ demo this: automatically call toString() method
		System.out.print(str);
	}
}
