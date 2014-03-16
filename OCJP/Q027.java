//Q27

class One{
	void foo(){}
}

class Two extends One {
	//int foo(){;;;} //A: illegal overwriting
	//void foo(){;;;}  //B: overwriting
	//public void foo(){;;;}//C: overwriting
	//private void foo(){;;;}//D: illegal overwriting 
	protected void foo(){;;;}//E: overwriting
}
