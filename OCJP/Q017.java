//Q17
//Key: overloading and overwriting (Good example)

public class Blip {
	protected int blipvert(int x){return 0;}
}

class Vert extends Blip{
	//public int blipvert(int x){return 0;}//A: overwriting
	//private  int blipvert(int x){return 0;}//B:illegal overwriting 
	//private  int blipvert(long x){return 0;}//C: overloading
	//protected long  blipvert(int x){return 0;}//D: illegal overwriting 
	//public int blipvert(int x){return 0;}//E: overwriting 
	//protected long blipvert(long x){return 0;}//F: overloading 
	//protected long blipvert(int x, int y){return 0;}//G: overloading 
}
