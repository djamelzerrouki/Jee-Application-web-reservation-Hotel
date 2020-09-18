package com.monprojct;

import java.io.Serializable;
import java.lang.Long;
import java.lang.String;
import java.util.Date;
import javax.persistence.*;

/**
 * Entity implementation class for Entity: MonResarvation
 *
 */
@Entity

public class MonResarvation implements Serializable {

	   
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private Long r_code;
	private Date dateA;
	private Date dateD;
	private Long c_code;
	private String descreption;
	private Date dateN;
	private String nom;
	private String prenom;
	private String email;
	private String tlphon;
	private static final long serialVersionUID = 1L;

	public MonResarvation() {
		super();
	}   
	public Long getR_code() {
		return this.r_code;
	}

	public void setR_code(Long r_code) {
		this.r_code = r_code;
	}   
	public Date getDateA() {
		return this.dateA;
	}

	public void setDateA(Date dateA) {
		this.dateA = dateA;
	}   
	public Date getDateD() {
		return this.dateD;
	}

	public void setDateD(Date dateD) {
		this.dateD = dateD;
	}   
	public Long getC_code() {
		return this.c_code;
	}

	public void setC_code(Long c_code) {
		this.c_code = c_code;
	}   
	public String getDescreption() {
		return this.descreption;
	}

	public void setDescreption(String descreption) {
		this.descreption = descreption;
	}   
	public Date getDateN() {
		return this.dateN;
	}

	public void setDateN(Date dateN) {
		this.dateN = dateN;
	}   
	public String getNom() {
		return this.nom;
	}

	public void setNom(String nom) {
		this.nom = nom;
	}   
	public String getPrenom() {
		return this.prenom;
	}

	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}   
	public String getEmail() {
		return this.email;
	}

	public void setEmail(String email) {
		this.email = email;
	}   
	public String getTlphon() {
		return this.tlphon;
	}

	public void setTlphon(String tlphon) {
		this.tlphon = tlphon;
	}
   
}
