package myweb;
import java.io.IOException;
import java.io.PrintStream;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.ejb.EJB;
 import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.monmetier.MonhotelLocel;
import com.monmetier.MonhotelRemot;
import com.monprojct.Chambre;
import com.monprojct.MonResarvation; 

 @WebServlet(name="Na",urlPatterns= {"*.Na"})
public class ControlerChambre extends HttpServlet{

	/**
	 * 
	 */
	private static String path;
	private static String action ;
	private static Date date1=new Date();
	private static Date  date2 =new Date();
	private static String type;
	private static String c_code;
	private static Chambre chambre;
	private static final long serialVersionUID = 1L;


	@EJB
	private MonhotelRemot metier;
	@Override
	protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		// TODO Auto-generated method stub

		path =req.getServletPath();
		 
  if (path.equals("/Chambre.Na")) {
		type=req.getParameter("type");
 
			 
			 
			   String   dateA=req.getParameter("dateA");
				String   dateD=req.getParameter("dateD");
				type=req.getParameter("type");
				SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");

 	  try { 
						System.out.println(dateA);
						date1 = formatter.parse(dateA.trim());
						System.out.println(date1);
						System.out.println(formatter.format(date1));
						date2 = formatter.parse(dateD.trim());
						System.out.println(date2);
						System.out.println(formatter.format(date2));

					} catch (ParseException e) {
						e.printStackTrace();
 }
 
		

		 
 				//List<Chambre> Listchambres=metier.getChambreByEtat(true);
 			 List<Chambre> Listchambres=metier.
 					getChambreByEtatAndType(true, type);
 				//	getChambreByEtatAndType(true, "Simple Standard"); 
 				req.setAttribute("listchambre", Listchambres);
 				req.getRequestDispatcher("Chambre.jsp").forward(req, resp);
 				
} else	
  if (path.equals("/Resarvation.Na")) {
	action=req.getParameter("action");

	if (action!=null) {
		 
		if (action.equals("Reservation")) {

			   c_code=req.getParameter("c_code");
			  chambre=metier.getChambreById(new Long(c_code));
		 	req.getRequestDispatcher("AffecherResarvation.jsp").forward(req, resp);

		}
	 			 
	else	if (action.equals("Reserver")) {

			if (c_code!=null) {
				
			
			String email =req.getParameter("email");
			String tlephon = req.getParameter("tlephon");
			String nom = req.getParameter("nom");
			String prenom = req.getParameter("prenom");
			String description=req.getParameter("Description");
			MonResarvation reservation=new MonResarvation();
			reservation.setC_code(new Long(ControlerChambre.c_code));
			
			metier.updetChambre(new Long(ControlerChambre.c_code),false);

				reservation.setDateA(ControlerChambre.date1);
			reservation.setDateD( ControlerChambre.date2);
			reservation.setDateN(new Date());

			reservation.setNom(nom);
			reservation.setPrenom(prenom);
				reservation.setEmail(email);
			reservation.setTlphon(tlephon);
			reservation.setDescreption(description);
metier.addReservation(reservation);
			//doGet(req, resp);
			req.setAttribute("reservation", reservation);

		 	req.getRequestDispatcher("ConfResarvation.jsp").forward(req, resp);

			}else{
				//resp.encodeRedirectURL("/Err.do");
				
					//printWriter.println("<h2>Sorry Not fonde select a Room :( </h2>");

			}
			
	}}

	}}


	
	@Override
	protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {


		path =req.getServletPath();
		  if (path.equals("/Chambre.Na")) {
//			 
//			 
//			   String   dateA=req.getParameter("dateA");
//				String   dateD=req.getParameter("dateD");
//				type=req.getParameter("type");
//				SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
//
//	  try { 
//						System.out.println(dateA);
//						date1 = formatter.parse(dateA.trim());
//						System.out.println(date1);
//						System.out.println(formatter.format(date1));
//						date2 = formatter.parse(dateD.trim());
//						System.out.println(date2);
//						System.out.println(formatter.format(date2));
//
//					} catch (ParseException e) {
//						e.printStackTrace();
//							} 
		

		List<Chambre> Listchambres=metier.getChambreByEtat(true);
		req.setAttribute("Listchambres", Listchambres);
		req.getRequestDispatcher("Chambre.jsp").forward(req, resp);
doGet(req, resp);
  }  else  if (path.equals("/Resarvation.Na")) {
		action=req.getParameter("action");

		  if (action!=null) {
			
		

			if (action.equals("Reserver")) {

				if (c_code!=null) {
					
				
				String email =req.getParameter("email");
				String tlephon = req.getParameter("tlephon");
				String nom = req.getParameter("nom");
				String prenom = req.getParameter("prenom");
				String description=req.getParameter("Description");
				MonResarvation reservation=new MonResarvation();
				reservation.setC_code(new Long(ControlerChambre.c_code));
				
				metier.updetChambre(new Long(ControlerChambre.c_code),false);

 				reservation.setDateA(ControlerChambre.date1);
				reservation.setDateD( ControlerChambre.date2);
				reservation.setDateN(new Date());
				reservation.setNom(nom);
				reservation.setPrenom(prenom);
 				reservation.setEmail(email);
				reservation.setTlphon(tlephon);
				reservation.setDescreption(description);
				
				reservation= metier.addReservation(reservation);
				//doGet(req, resp);
				reservation.getR_code();
				req.setAttribute("reservation", reservation);

			 	req.getRequestDispatcher("ConfResarvation.jsp").forward(req, resp);

				}else{
					//resp.encodeRedirectURL("/Err.do");
					
 					//printWriter.println("<h2>Sorry Not fonde select a Room :( </h2>");

				}}
				

			}
  }
	}
	}
