//Q18

class Super{
	private int a;//line 2: A & B: change private to public and protected, respectively 
	protected Super(int a){this.a = a;}
}

class Sub extends Super{
	public Sub(int a){super(a);}
	public Sub(){this.a= 5;}//line 13: original
	//public Sub(){this(5);}//line 13: C
	//public Sub(){super(5);}//line 13: D
	//public Sub(){super(a);}//line 13: E
}
