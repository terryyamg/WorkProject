//Q25

class ClassA{
	public int numberaOfInstances;
	protected ClassA(int numberaOfInstances){
		this.numberaOfInstances = numberaOfInstances;
	}
}

public class ExtendedA extends ClassA {

	private ExtendedA (int numberaOfInstances){
		super(numberaOfInstances);
	}
	
	public static void main(String[] args) {
		ExtendedA ext = new ExtendedA(420);
		System.out.print(ext.numberaOfInstances);
	}
}
