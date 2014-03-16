//Q13
//Key how to fix it?

public class Barn {
	public static void main(String[] args) {
		new Barn.go()("hi", 1);
		new Barn.go()("hi", "word", 2);
	}
	
	public void go(String...y, int x){
	System.out.println(y[y.length-1]+" ");
	}
}
