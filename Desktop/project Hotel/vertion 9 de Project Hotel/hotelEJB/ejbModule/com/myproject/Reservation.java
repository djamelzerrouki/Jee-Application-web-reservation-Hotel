package com.myproject;

import java.io.Serializable;
import java.lang.Long;
import java.util.Date;
import javax.persistence.*;

/**
 * Entity implementation class for Entity: Reservation
 *
 */
@Entity

public class Reservation implements Serializable {




	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private Long R_code;
	private Long C_code;
	private Long H_hotel;
	private Date dateA;
	private Date dateD;	
	private Date dateN;
 	private Long codeclient;

	
//	
//	private Long NumbrP;
//	private String nom;
//	private String prenom;
//	private String email;
//	private String tlephon;
//	private String Description;




 
	private static final long serialVersionUID = 1L;

	public Reservation() {
		super();
	}

	public Long getR_code() {
		return R_code;
	}

	public void setR_code(Long r_code) {
		R_code = r_code;
	}

	public Long getC_code() {
		return C_code;
	}

	public void setC_code(Long c_code) {
		C_code = c_code;
	}

	public Long getH_hotel() {
		return H_hotel;
	}

	public void setH_hotel(Long h_hotel) {
		H_hotel = h_hotel;
	}

	 

	 

	 
 

	public Date getDateA() {
		return dateA;
	}

	public void setDateA(Date dateA) {
		this.dateA = dateA;
	}

	public Date getDateD() {
		return dateD;
	}

	public void setDateD(Date dateD) {
		this.dateD = dateD;
	}

   
	public Long getCodeclient() {
		return codeclient;
	}

	public void setCodeclient(Long codeclient) {
		this.codeclient = codeclient;
	}

	public Date getDateN() {
		return dateN;
	}

	public void setDateN(Date dateN) {
		this.dateN = dateN;
	}


}
