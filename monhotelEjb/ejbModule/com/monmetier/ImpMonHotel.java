package com.monmetier;

import java.util.Date;
import java.util.List;

import javax.ejb.LocalBean;
import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;

import com.monprojct.Chambre;
import com.monprojct.MonResarvation;
 
/**
 * Session Bean implementation class ImpMonHotel
 */
@Stateless(name="MH")
 public class ImpMonHotel implements MonhotelLocel,MonhotelRemot {

    /**
     * Default constructor. 
     */
	
//ImpMonHotel
    public ImpMonHotel() {
        // TODO Auto-generated constructor stub
    }
	@PersistenceContext(unitName="monhotelEjb")
	//@PersistenceContext
	private EntityManager em;

    //###################  CHAMBRE  #########################
	@Override
	public Chambre addChambre(Chambre chambre) {
		em.persist(chambre);		
		return chambre;
	}
// getChambreById
	@Override
	public Chambre getChambreById(Long C_code) {
		Chambre chambre=em.find(Chambre.class, C_code);
		if (chambre==null) throw new RuntimeException("chambre introvable !"); 
		return chambre ;
	}

	@Override
	public List<Chambre> getChambreByEtat(boolean etat) {
		Query REQ=em.createQuery("select c from Chambre c  where  c.etat="+etat );
		return REQ.getResultList();
	}

	@Override
	public List<Chambre> getChambreByEtatAndType(boolean etat, String type) {
		Query REQ=em.createQuery("select c from Chambre c  where  c.etat="+etat +" And c.type='"+type+"'" );
		return REQ.getResultList();
	}

	
	
	@Override
	public int updetChambre(Long C_code, boolean etat) {
		Chambre chambre=em.find(Chambre.class, C_code);
		if (chambre==null) throw new RuntimeException("chambre introvable !"); 
		  //int count = em.createQuery("UPDATE Country SET area = 0")
				  int count=em.createQuery("UPDATE Chambre c SET c.etat="+etat+"  where c.c_code="+C_code+"" ).executeUpdate();
		return count ;
	 
	}

	@Override
	public boolean delitChambre(Long C_code) {

		//getCReservationById(R_code);
 em.remove(getChambreById(C_code));
		return true;
	}

	@Override
	public List<Chambre> listChambre() {
		Query REQ=em.createQuery("select c from Chambre c" );
		return REQ.getResultList();
	}

	
    //###################  MONRESARVATION  #########################

	
	@Override
	public MonResarvation addReservation(MonResarvation reservation) {
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
	public int updetReservation(Long R_code, Date dateA, Date dateD) {
		
		//int count=em.createQuery("UPDATE Reservation r SET r.dateA="+dateA+" , r.dateA="+dateD+"  where r.R_code="+R_code+"" ).executeUpdate();

		  final Query query =  em.createQuery("UPDATE MonResarvation r SET r.dateA = ?1 , r.dateD = ?2 WHERE r.r_code = ?3");
		    query.setParameter(1, dateA);
		    query.setParameter(2, dateD);
		    query.setParameter(3, R_code);


		    query.executeUpdate();
		return 0  ;

}

	@Override
	public MonResarvation getCReservationById(Long R_code) {
		MonResarvation  reservation=em.find(MonResarvation.class, R_code);
		if (reservation==null) throw new RuntimeException("Reservation introvable !"); 
		return reservation ;
	}

	@Override
	public List<MonResarvation> getReservationLogin(String nom, String email) {
		Query REQ=em.createQuery("select r from MonResarvation r  where r.nom='"+nom+"' AND r.email='"+email+"' " );
		return REQ.getResultList();
	}

	@Override
	public List<MonResarvation> listReservation() {
		Query REQ=em.createQuery("select r from MonResarvation r " );
		return REQ.getResultList();
	}

	
}
