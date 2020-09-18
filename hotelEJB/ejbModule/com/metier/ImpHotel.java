package com.metier;

import java.util.Date;
import java.util.List;

import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;

import com.myproject.Chambre;
import com.myproject.Client;
import com.myproject.Commentaire;
import com.myproject.Hotel;
import com.myproject.Reservation;

/**
 * Session Bean implementation class ImpHotel
 */
@Stateless(name="HT")

public class ImpHotel implements hotelRemote,hotelLocal {

    /**
     * Default constructor. 
     */
	//ida kan 3andek entiti riwahda mata3tilhach nayp pasq yadiha par dufolt
	@PersistenceContext(unitName="hotelEJB")
	//@PersistenceContext
	private EntityManager em;

	
	// ###########   Hotel   ###########
	
	@Override
	public Hotel addHotel(Hotel hotel) {
		em.persist(hotel);		
		return hotel;
	}

	@Override
	public boolean delitHotel(Long H_code) {

		//getCReservationById(R_code);
 em.remove(getHotelById(H_code));
		return true;
	
	}

	
	@Override
	public Hotel getHotelById(Long H_code) {
		Hotel hotel=em.find(Hotel.class, H_code);
		if (hotel==null) throw new RuntimeException("hotel introvable !"); 
		return hotel ;		 
	}

	@Override
	public List<Hotel> getHotelByEtiols(String etiol) {
		Query REQ=em.createQuery("select h from Hotel h  where h.Etoil='"+etiol+"'" );
		return REQ.getResultList();
	}

	@Override
	public List<Hotel> getHotelByPaye(String paye) {
		Query REQ=em.createQuery("select h from Hotel h  where h.Paye='"+paye+"'");
		return REQ.getResultList();
	}

	@Override
	public List<Hotel> listHotel() {
		Query REQ=em.createQuery("select h from Hotel h");
		return REQ.getResultList();
	}

	
	
	// ###########   Chambre   ###########

	
	
	@Override
	public Chambre addChambre(Chambre chambre) {
		em.persist(chambre);		
		return chambre;
	}

	@Override
	public Chambre getChambreById(Long C_code) {
		Chambre chambre=em.find(Chambre.class, C_code);
		if (chambre==null) throw new RuntimeException("chambre introvable !"); 
		return chambre ;
	}

	//UPDATE Player p SET p.status = 'inactive' WHERE p.lastPlayed < :inactiveThresholdDate
	@Override
	public int updetChambre(Long C_code, boolean etat) {
		Chambre chambre=em.find(Chambre.class, C_code);
		if (chambre==null) throw new RuntimeException("chambre introvable !"); 
		  //int count = em.createQuery("UPDATE Country SET area = 0")
				  int count=em.createQuery("UPDATE Chambre c SET c.etat="+etat+"  where c.C_code="+C_code+"" ).executeUpdate();
		return count ;
	 
	}
	
	@Override
	public List<Chambre> getChambreByHotel(Long H_code) {
		Query REQ=em.createQuery("select c from Chambre c  where c.H_hotel="+H_code+"" );
		return REQ.getResultList();
	}
	
	@Override
	public List<Chambre> getChambreByHotelAndEtat(Long H_code, boolean etat) {
		Query REQ=em.createQuery("select c from Chambre c  where c.H_hotel="+H_code+" AND c.etat="+etat );
		return REQ.getResultList();
	}

	@Override
	public List<Chambre> listChambre() {
		Query REQ=em.createQuery("select c from Chambre c" );
		return REQ.getResultList();
	}

	
	@Override
	public boolean delitChambre(Long C_code) {

		//getCReservationById(R_code);
 em.remove(getChambreById(C_code));
		return true;
	}

	
	// ###########   Reservation   ###########

	
	
	@Override
	public Reservation addReservation(Reservation reservation) {
		em.persist(reservation);		
		return reservation ;
	}
	
	@Override
	public boolean delitReservation(Long R_code) {
		//getCReservationById(R_code);
 em.remove(getCReservationById(R_code));
		return true;
	}

	@Override
	public int  updetReservation(Long R_code,Date dateA,Date dateD) {
		
				//int count=em.createQuery("UPDATE Reservation r SET r.dateA="+dateA+" , r.dateA="+dateD+"  where r.R_code="+R_code+"" ).executeUpdate();
		
				  final Query query =  em.createQuery("UPDATE Reservation r SET r.dateA = ?1 , r.dateD = ?2 WHERE r.R_code = ?3");
				    query.setParameter(1, dateA);
				    query.setParameter(2, dateD);
				    query.setParameter(3, R_code);

	 
				    query.executeUpdate();
				return 0  ;
	 
	}

	@Override
	public Reservation getCReservationById(Long R_code) {
		Reservation reservation=em.find(Reservation.class, R_code);
		if (reservation==null) throw new RuntimeException("Reservation introvable !"); 
		return reservation ;
	}

	@Override
	public List<Reservation> getReservationByHotel(Long H_hotel) {
		Query REQ=em.createQuery("select r from Reservation r  where r.H_hotel="+H_hotel+"" );
		return REQ.getResultList();
	}
	@Override
	public List<Reservation> getReservationLogin(String nom, String email) {
		Query REQ=em.createQuery("select r from Reservation r  where r.nom='"+nom+"' AND r.email='"+email+"' " );
		return REQ.getResultList();
	}

	@Override
	public List<Reservation> getReservationByIdClient(Long codeclient) {
		Query REQ=em.createQuery("select r from Reservation r  where r.codeclient="+codeclient+"  " );
		return REQ.getResultList();
	}

	@Override
	public List<Reservation> listReservation() {
		Query REQ=em.createQuery("select r from Reservation r " );
		return REQ.getResultList();
	}
	@Override
	public List<Object[]> listStetistiqueByHotel() {
		// SELECT r.`H_hotel` , h.`H_Nom`, COUNT(*) AS count FROM `reservation` r , `hotel`  h   GROUP BY  `H_hotel`
		 
		Query REQ=em.createQuery("SELECT r.`H_hotel` , h.`H_Nom`, COUNT(*) AS count FROM `reservation` r , `hotel`  h   GROUP BY  `H_hotel`" );
		
		return REQ.getResultList();
		
 	}
	
	// ###########   Commentaire   ###########

	
	@Override
	public Commentaire addCommentaire(Commentaire commentaire) {
		em.persist(commentaire);		
		return commentaire ;
	}

	@Override
	public Commentaire getCommentaireeById(Long id) {
		Commentaire commentaire=em.find(Commentaire.class, id);
		if (commentaire==null) throw new RuntimeException("commentaire introvable !"); 
		return commentaire ;
	}

	@Override
	public List<Commentaire> listCommentaire() {
		Query REQ=em.createQuery("select cm from Commentaire cm  " );
		return REQ.getResultList();
	}

	
	
	
	// ###########   Client   ###########

	@Override
	public Client addClient(Client  client) {
		em.persist(client);		
		return client ;	 
	}

	@Override
	public boolean delitClient(Long codeclient) {
		em.remove(getCReservationById(codeclient));
		return true;
	}

	@Override
	public int updetClient(Long codeclient) {
    //????????????????
		  final Query query =  em.createQuery("UPDATE Reservation r SET r.dateA = ?1 , r.dateD = ?2 WHERE r.R_code = ?3");
		    query.setParameter(1, codeclient);
     query.executeUpdate();
		return 0 ; 
		}

	@Override
	public Client getClientById(Long codeclient) {
		Client client=em.find(Client.class,codeclient);
		if (client==null) throw new RuntimeException("Reservation introvable !"); 
		return client ;
	}

	@Override
	public Client LoginClientByNomAndEmail(String nom, String email) {
		Query REQ=em.createQuery("select cl from Client cl  where cl.nom='"+nom+"' AND cl.email='"+email+"' " );
		return new Client();
	}

	@Override
	public List<Client> getClientLogin(String nom, String email) {
		Query REQ=em.createQuery("select cl from Client cl  where cl.nom='"+nom+"' AND cl.email='"+email+"' " );
		return REQ.getResultList();
	}

	@Override
	public List<Client> listClient() {
		Query REQ=em.createQuery("select cl from Client cl  " );
		return REQ.getResultList();
	}


	



	

	

	

	

}
