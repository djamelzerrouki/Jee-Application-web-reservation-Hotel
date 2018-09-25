package com.myproject;

import java.io.Serializable;
import java.lang.Long;
import java.lang.String;
import javax.persistence.*;

/**
 * Entity implementation class for Entity: Client
 *
 */
@Entity

public class Client implements Serializable {



	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private Long codeclient;
	private String nom;
	private String prenom;
	private String email;
	private String tlephon;
	private String Description;
	private static final long serialVersionUID = 1L;

	public Client() {
		super();
	}   
	public Long getCodeclient() {
		return this.codeclient;
	}

	public void setCodeclient(Long codeclient) {
		this.codeclient = codeclient;
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
	public String getTlephon() {
		return this.tlephon;
	}

	public void setTlephon(String tlephon) {
		this.tlephon = tlephon;
	}   
	public String getDescription() {
		return this.Description;
	}

	public void setDescription(String Description) {
		this.Description = Description;
	}
   
}
