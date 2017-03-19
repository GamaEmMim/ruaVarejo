import javax.annotation.ManagedBean;


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


	}

}
