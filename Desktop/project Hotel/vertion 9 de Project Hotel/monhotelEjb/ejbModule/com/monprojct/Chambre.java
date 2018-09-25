package com.monprojct;

import java.io.Serializable;
import java.lang.Double;
import java.lang.Long;
import java.lang.String;
import javax.persistence.*;

/**
 * Entity implementation class for Entity: Chambre
 *
 */
@Entity

public class Chambre implements Serializable {

	   
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private Long c_code;
	private String type;
	private Long numbreLit;
	private boolean etat;
	private String imag;
	private Double prix;
	private static final long serialVersionUID = 1L;

	public Chambre() {
		super();
	}   
	public Long getC_code() {
		return this.c_code;
	}

	public void setC_code(Long c_code) {
		this.c_code = c_code;
	}   
	public String getType() {
		return this.type;
	}

	public void setType(String type) {
		this.type = type;
	}   
	public Long getNumbreLit() {
		return this.numbreLit;
	}

	public void setNumbreLit(Long numbreLit) {
		this.numbreLit = numbreLit;
	}   
	public boolean getEtat() {
		return this.etat;
	}

	public void setEtat(boolean etat) {
		this.etat = etat;
	}   
	public String getImag() {
		return this.imag;
	}

	public void setImag(String imag) {
		this.imag = imag;
	}   
	public Double getPrix() {
		return this.prix;
	}

	public void setPrix(Double prix) {
		this.prix = prix;
	}
   
}
