//Q29
//Key: illegal overlaoding 

public class A {
	public void doit(){
	}
	public String doit(){//line 4
		return "a";
	}
	public double doit(int x){
		return 1.0;
	}
}
