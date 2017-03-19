package br.com.ruavarejo;

/**
 * Enum para definição do segmento de Leads
 * 
 * @author jcbombardelli
 * @version 1.0
 *  
 */
public enum BusinessTo {
	
	
	Business(1, "B2B"), 
	Consumer(2, "B2C"),
	Other(3, "Outros"),
	None(4, "Nenhum"),;
	
	
	public int id;
	public String name;
	
	
	BusinessTo(int id, String name){
		
		this.id = id;
		this.name = name;	
	}

}
