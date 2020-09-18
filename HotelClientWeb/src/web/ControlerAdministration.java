package web;
import java.io.IOException;
import java.io.PrintWriter;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.ejb.EJB;
import javax.jws.WebParam;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.myproject.Chambre;
import com.myproject.Commentaire;
import com.myproject.Hotel;
import com.myproject.Reservation;
import com.metier.hotelRemote;
@WebServlet(name="ca",urlPatterns= {"*.Ca"})
public class ControlerAdministration extends HttpServlet{

	/**
	 * 
	 */
	private static String path;
	private static String action ;

	private static String user ,password;
	private static final long serialVersionUID = 1L;


	@EJB
	private hotelRemote metier;
	@Override
	protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		// TODO Auto-generated method stub
		PrintWriter printWriter=resp .getWriter();
		
		  path =req.getServletPath();
		if (path.equals("/Administration.Ca")) {

			req.getRequestDispatcher("Administration.jsp").forward(req, resp);
		}else if (path.equals("/Hotel.Ca")) {
			  

			if (user.equals("Djamel")&&password.equals("jimmi")) {
		 List<Hotel> ListHotels=metier.listHotel();
			req.setAttribute("Listhotel", ListHotels);
			req.getRequestDispatcher("Hotel.jsp").forward(req, resp);
			String operation=req.getParameter("operation");

			if (operation!=null) {

				if (operation.equals("supprimer") ) {

					Long H_code=new Long(req.getParameter("h_code"));
					metier.delitHotel(H_code);
 				//	resp.sendRedirect("Hotel.Ca?operation=supprimer&h_code=");
 				 doPost(req, resp);
					   //resp.sendRedirect("/Hotel.Ca");
					//	doGet(req, resp);
				} else if (operation.equals("modifie")) {

					String R_code=req.getParameter("h_code");
					// metier.updetReservation(new Long(R_code) ,new Date(), new Date());


				}
			}
			
 }else {
			printWriter.println("<h2>ERR LOGIN </h2>");

		}
	 		
		}
		
		else if (path.equals("/Chambre.Ca")) {


			List<Chambre> Listchambres=metier.listChambre();
			req.setAttribute("Listchambres", Listchambres);
			req.getRequestDispatcher("Chambre.jsp").forward(req, resp);
			String operation=req.getParameter("operation");

			if (operation!=null) {

				if (operation.equals("supprimer") ) {

					Long C_code=new Long(req.getParameter("c_code"));
					metier.delitChambre(C_code);
 				//	resp.sendRedirect("Hotel.Ca?operation=supprimer&h_code=");
 				 doPost(req, resp);
					   //resp.sendRedirect("/Hotel.Ca");
					//	doGet(req, resp);
				} else if (operation.equals("modifie")) {

					String R_code=req.getParameter("c_code");
					// metier.updetReservation(new Long(R_code) ,new Date(), new Date());


				}
			}


		}

		
	}
	@Override
	protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {


		  path=req.getServletPath();
		if (path.equals("/Administration.Ca")) {


		}else if (path.equals("/Hotel.Ca")) {
		 user = req.getParameter("nom");
			  password = req.getParameter("password");

			if (user.equals("Djamel")&&password.equals("jimmi")) {
				
		
			List<Hotel> ListHotels=metier.listHotel();
			req.setAttribute("Listhotel", ListHotels);
		

			action=req.getParameter("action");
			if (action!=null) {


				if (action.equals("Ajouter")) {

					String nom = req.getParameter("nom");
					String adress = req.getParameter("adress");
					String paye =req.getParameter("paye");
					String etoil =req.getParameter("etoil");
					String code_Postal =req.getParameter("codepostal");
					String tlephon = req.getParameter("tlephon");


					Hotel hotel=new Hotel();
					hotel.setH_Nom(nom);
					hotel.setH_Adress(adress);
					hotel.setPaye(paye);
					hotel.setEtoil(etoil);
					hotel.setCodePostal(code_Postal);
					hotel.setH_tlphon(tlephon);

					hotel.setEtat(true);
					hotel.setH_imag("1");

					metier.addHotel(hotel);
					ListHotels=metier.listHotel();
					req.setAttribute("Listhotel", ListHotels);
				

				}
			}

			req.getRequestDispatcher("Hotel.jsp").forward(req, resp);
			}
		}
		
		else if (path.equals("/Chambre.Ca")) {

			List<Chambre> Listchambres=metier.listChambre();
			req.setAttribute("Listchambres", Listchambres);
			

			action=req.getParameter("action");
			if (action!=null) {


				if (action.equals("Ajouter")) {

					String H_code = req.getParameter("H_code");
					String type = req.getParameter("type");
					String prix =req.getParameter("prix");
					String etat =req.getParameter("etat");
					String numberLit =req.getParameter("numberLit");
 
					
					Chambre chambre=new Chambre();
					chambre.setH_hotel(new Long(H_code));
					chambre.setType(type);
					chambre.setPrix(new Double(prix));
                    chambre.setEtat(new Boolean(etat));
                    chambre.setNumber_Lit(new Long(numberLit));
                	
                    switch (type.trim()) {
    				case "Simple Standard":
     					chambre.setC_imag(""+8+"");
  	break;
    				case "Chambre individuelle": 	 
     				chambre.setC_imag(""+9+"");
 
    				 
    				break;
    				case "Suite chambre":

     					chambre.setC_imag(""+10+"");
 
    					 
    					break;	
    				case "Chambre double":

     					chambre.setC_imag(""+11+"");
 
    					break;	

    				default:
    					break;
    				}
                    
                    
                    
metier.addChambre(chambre);
  Listchambres=metier.listChambre();
req.setAttribute("Listchambres", Listchambres);

				}
			}

			req.getRequestDispatcher("Chambre.jsp").forward(req, resp);

		}
	}

}
