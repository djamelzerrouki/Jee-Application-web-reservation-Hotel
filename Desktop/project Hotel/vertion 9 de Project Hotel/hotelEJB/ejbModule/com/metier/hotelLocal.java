package com.metier;

import java.util.Date;
import java.util.List;

import javax.ejb.Local;
 
import com.myproject.Chambre;
import com.myproject.Client;
import com.myproject.Commentaire;
import com.myproject.Hotel;
import com.myproject.Reservation;

@Local   
public interface hotelLocal {
	// ########   Hotel   #######
public Hotel addHotel(Hotel hotel);
public boolean delitHotel(Long H_code);
public Hotel getHotelById(Long H_code);
public List<Hotel> getHotelByEtiols(String etiol);
public List<Hotel> getHotelByPaye(String paye);
public List<Hotel> listHotel();

// ########   Chambre   #######
public Chambre addChambre(Chambre chambre);
public Chambre getChambreById(Long C_code);
public List<Chambre> getChambreByHotel(Long H_code);
public List<Chambre> getChambreByHotelAndEtat(Long H_code,boolean etat);
public int updetChambre(Long H_code,boolean etat);
public boolean delitChambre(Long C_code);

public List<Chambre> listChambre();


//########   Reservation   #######
public Reservation addReservation(Reservation reservation);
public boolean delitReservation(Long R_code);
public int updetReservation(Long R_code, Date dateA, Date dateD);
public Reservation getCReservationById(Long R_code);
public List<Reservation> getReservationByHotel(Long H_code);
public List<Reservation> getReservationLogin(String nom, String email);
public List<Reservation> getReservationByIdClient(Long codeclient );

public List<Reservation> listReservation();
public List<Object[]> listStetistiqueByHotel();

//########   Commentaire   #######
public Commentaire addCommentaire(Commentaire commentaire);
public Commentaire getCommentaireeById(Long id);
public List<Commentaire> listCommentaire();

//########   Client   #######
public Client addClient(Client codeclient);
public boolean delitClient(Long codeclient);
public int updetClient(Long codeclient );
public Client getClientById(Long codeclient);
public Client LoginClientByNomAndEmail(String nom, String email);
public List<Client> getClientLogin(String nom, String email);
public List<Client> listClient();
 }
