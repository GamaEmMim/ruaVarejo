package br.com.ruavarejo;

import java.text.SimpleDateFormat;
import java.util.Date;
import javax.faces.bean.ManagedBean;


/**
 * Bean da popup de cadastro do novo Lead
 * 
 * 
 * @author jcbombardelli
 * @version 1.0
 *  
 */
@ManagedBean
public class NewLeadBean {


	
	private Lead lead;
	
	public Lead getLead() {
		return lead;
	}
	public void setLead(Lead lead) {
		this.lead = lead;
	}

	public NewLeadBean(	){

		System.out.println("HelloWorld started!"); 
		lead = new Lead();
		lead.setNome("Zé Gotinha");

	}



	public static String getHorario() {
		SimpleDateFormat sdf = new SimpleDateFormat("hh:mm:ss");
		return "Atualizado em " + sdf.format(new Date());
	}
	
	public void Login(){
		System.out.println("FUCNOOICOO");
		
	}

}
