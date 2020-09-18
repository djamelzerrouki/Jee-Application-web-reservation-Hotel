package com.myproject;

import java.io.Serializable;
import java.lang.Long;
import java.lang.String;
import javax.persistence.*;

/**
 * Entity implementation class for Entity: Hotel
 *
 */
@Entity

public class Hotel implements Serializable {

	   


	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private Long H_code;
	private String H_Nom;
	private String Etoil;

	

	private String Paye;
	private String H_Adress;
	private String H_imag;
	public String getH_imag() {
		return H_imag;
	}
	public void setH_imag(String h_imag) {
		H_imag = h_imag;
	}
	public String getH_tlphon() {
		return H_tlphon;
	}
	public void setH_tlphon(String h_tlphon) {
		H_tlphon = h_tlphon;
	}
	public String getCodePostal() {
		return CodePostal;
	}
	public void setCodePostal(String codePostal) {
		CodePostal = codePostal;
	}
	public boolean isEtat() {
		return Etat;
	}
	public void setEtat(boolean etat) {
		Etat = etat;
	}

	private String H_tlphon;
	private String CodePostal;
	private boolean Etat;


	private static final long serialVersionUID = 1L;

	public Hotel() {
		super();
	}   
	public Long getH_code() {
		return  H_code;
	}

	public void setH_code(Long H_code) {
		this.H_code = H_code;
	}   
	public String getH_Nom() {
		return this.H_Nom;
	}

	public void setH_Nom(String H_Nom) {
		this.H_Nom = H_Nom;
	}   
	public String getPaye() {
		return this.Paye;
	}

	public void setPaye(String Paye) {
		this.Paye = Paye;
	}   
	public String getH_Adress() {
		return this.H_Adress;
	}

	public void setH_Adress(String H_Adress) {
		this.H_Adress = H_Adress;
	}
	public String getEtoil() {
		return Etoil;
	}
	public void setEtoil(String etoil) {
		Etoil = etoil;
	}
   
}
