//Q12 good example

class Alpha{
	public void bar(int... x){}
	public void bar(int x){}
	
}


public class Beta extends Alpha{
	//public void bar(int x){} //OK: overwriting
	public int bar(String x){return 1;} //OK: overloading
	public void bar(int x, int y){} //OK: overloading
	
	//private void bar(int x){} //illegal overwriting: reducing visibility
	//public Alpha bar(int x ){}//1:illegal overwriting: incompatible return type; 2: no returned object
	//public int bar(int x){return x;}//illegal overwriting: incompatible return type

}
