package com.monmetier;

import java.util.Date;
import java.util.List;

import javax.ejb.Local;
import javax.ejb.Remote;

import com.monprojct.Chambre;
import com.monprojct.MonResarvation;
 

@Local
public interface MonhotelLocel {
	// ########   Chambre   #######
	public  Chambre addChambre(Chambre chambre);
	public Chambre getChambreById(Long C_code);
 	public List<Chambre> getChambreByEtat(boolean etat);
 	public List<Chambre> getChambreByEtatAndType(boolean etat,String type);

 	public int updetChambre(Long H_code,boolean etat);
	public boolean delitChambre(Long C_code);
    public List<Chambre> listChambre();


	//########   Reservation   #######
	public MonResarvation addReservation(MonResarvation reservation);
	public boolean delitReservation(Long R_code);
	public int updetReservation(Long R_code, Date dateA, Date dateD);
	public MonResarvation getCReservationById(Long R_code);
 	public List<MonResarvation> getReservationLogin(String nom, String email);
 	public List<MonResarvation> listReservation();
}
