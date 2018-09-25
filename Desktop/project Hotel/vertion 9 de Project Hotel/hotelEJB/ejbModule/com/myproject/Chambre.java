package com.myproject;

import java.io.Serializable;
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
	private Long C_code;
	private Long H_hotel;
	private double prix;
	private String type;
	private Long number_Lit;
	private boolean etat;

	
	private String C_imag;

	public String getC_imag() {
		return C_imag;
	}
	public void setC_imag(String c_imag) {
		C_imag = c_imag;
	}
	private static final long serialVersionUID = 1L;

	public Chambre() {
		super();
	}   
	public Long getC_code() {
		return this.C_code;
	}

	public void setC_code(Long C_code) {
		this.C_code = C_code;
	}   
	public double getPrix() {
		return this.prix;
	}

	public void setPrix(double prix) {
		this.prix = prix;
	}   
	public String getType() {
		return this.type;
	}

	public void setType(String type) {
		this.type = type;
	}   
	public Long getH_hotel() {
		return this.H_hotel;
	}

	public void setH_hotel(Long H_hotel) {
		this.H_hotel = H_hotel;
	}
	public Long getNumber_Lit() {
		return number_Lit;
	}
	public void setNumber_Lit(Long number_Lit) {
		this.number_Lit = number_Lit;
	}
	public boolean isEtat() {
		return etat;
	}
	public void setEtat(boolean etat) {
		this.etat = etat;
	}
	 
}
