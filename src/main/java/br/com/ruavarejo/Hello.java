package br.com.ruavarejo;

import javax.faces.bean.ManagedBean;

@ManagedBean
public class Hello {
	
	private String ola = "olaaa";

	public String getOla() {
		return ola;
	}

	public void setOla(String ola) {
		this.ola = ola;
	}
	

}
