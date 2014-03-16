//Q28

class X{
	X(){System.out.print(1);}
	X(int x){
		this();
		System.out.print(2);
	}
}

public class Y extends X{
	Y(){
		super(6);
		System.out.print(3);
	}
	
	Y(int y){
		this();
		System.out.print(4);
	}
	public static void main(String[] args) {new Y(5);}

}
